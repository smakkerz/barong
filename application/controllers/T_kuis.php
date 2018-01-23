<?php
if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class T_kuis extends CI_Controller

{

    function __construct()

    {

        parent::__construct();

        $this->load->model('Respon_model');

        $this->auth->cek_auth();

        $this->auth->cek_akses('UCACJAYA');
        $this->settingvalue_library->production();
	   $this->load->library('datatables');

    }



    public function index()

    {} 



    public function hapus($pop)

     {

      //$clear = $this->Respon_model->where($pop);

        $key = 'id_biodata';

        $this->Respon_model->clear($pop, $key);

         $this->session->set_flashdata('message', '<h2><div class="alert alert-block alert-danger alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">

                                    &times;</button>Data kuesioner telah dihapus dari database Tracer Study Universitas Semarang Carrer and Alumni Center </div></h2><br>');

            redirect(site_url('home'));

     }

     public function delete_all()

     {

        $clear = $this->input->post('ace', TRUE);

        foreach($clear as $pop){

        $key = 'id_biodata';

        $this->Respon_model->clear($pop, $key);

        }

         $this->session->set_flashdata('message', '<h2><div class="alert alert-block alert-danger alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">

                                    &times;</button>Data kuesioner telah dihapus dari database Tracer Study Universitas Semarang Carrer and Alumni Center </div></h2><br>');

            redirect(site_url('home'));

     }



}

