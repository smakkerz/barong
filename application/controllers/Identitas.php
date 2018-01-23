<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Identitas extends CI_Controller

{

    

    function __construct()

    {

        parent::__construct();
        $this->settingvalue_library->production();
        $this->load->model('Identitas_model');

         $this->auth->cek_auth();

         $this->auth->cek_akses('UCACJAYA');

    }



    public function index()

    {

        $identitas = $this->Identitas_model->get_all();



        $data = array(

            'identitas_data' => $identitas,

        );



        $this->template->load('template','identitas/identitas_list', $data);

    }



    public function read($id)

    {

        $this->load->model('Respon_model');



        $dat = $this->Biodata_model->get_by_id($id);

        $row = $this->Identitas_model->tabel('t_kuis');

        $respon = $this->Respon_model->cetak($id);

    

        $data = array(

            'kuis' => $row,

            'respon' => $respon,

            'nama' => $dat->nama,

            'nim' => $dat->nim,

        );

        

        $this->template->load('template','User/kuis_read', $data);

    }



    public function example()

    {



        $respon = $this->Biodata_model->respon();



        $data = array(

            'respon' => $respon,

            'action' => site_url('t_kuis/delete_all')

            );



        $this->template->load('template','t_kuis/t_kuis_read', $data);

    }



}

