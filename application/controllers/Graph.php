<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Graph extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Biodata_model');
        $this->load->model('Respon_model');
        $this->auth->cek_auth();
        $this->auth->cek_akses('UCACJAYA');
        $this->settingvalue_library->Production();   
    }

    public function index()
    {
        $data['graph'] = $this->Respon_model->jmlh_alumni();
        $data['total'] = $this->Respon_model->jmlh();
        $data['list_kode'] = $this->Biodata_model->get_dinamis('t_kuis');
        $data['list_kode_pilihan'] = $this->Biodata_model->get_dinamis('t_pilihan');
        $data['action'] = site_url('graph/proses');

        $this->template->load('template', 'graph/index', $data);
    } 

    public function data() 
    {
        $this->template->load('template','biodata/biodata_list');
    }

    public function grafik()
    {
    }

    public function proses()
    {
        $this->auth->cek_akses('UCACJAYA');
        $this->load->model('Respon_model');
        $kode = $this->input->get('kode', TRUE);
        $this->session->set_userdata(array (
            'kode' => $kode ));
        $sis = explode("-", $this->session->userdata('kode'));
        if(!empty($sis[1])){
            $data['graph'] = $this->Respon_model->grafik1($sis[0], $sis[1]);
        } else {
            $data['graph'] = $this->Respon_model->grafik($sis[0]);
        }
        $data['total'] = $this->Respon_model->count($sis[0]);
        $data['kode'] = $sis[0];
        $data['list_kode'] = $this->Biodata_model->get_dinamis('t_kuis');
        $data['list_kode_pilihan'] = $this->Biodata_model->get_dinamis('t_pilihan');  
        $data['action'] = site_url('graph/proses');

        $this->template->load('template', 'graph/grafik', $data);
    }
}