<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biodata extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model('Biodata_model');
        $this->load->model('Alumni_model');
        $this->auth->cek_auth();
        $this->settingvalue_library->Production();   
    }

    public function index()
    {
        $this->auth->cek_akses('UCACJAYA');
        $this->template->load('template','biodata/biodata_list');
    } 

    public function data() 
    {
        $this->template->load('template','biodata/biodata_list');
    }

    function json() {
        header('Content-Type: application/json');
        echo $this->Alumni_model->json();
    }

    public function update($id) 
    {
        $row = $this->Biodata_model->get_by_id($id);

        if ($row) {
            $data = array(
        'button' => 'Perbarui',
        'action' => site_url('biodata/update_action'),
		'id_biodata' => set_value('id_biodata', $row->id_biodata),
		'nama' => set_value('nama', $row->nama),
		'nim' => set_value('nim', $row->nim),
		'bekerja' => set_value('bekerja', $row->bekerja),
        'progdi' => set_value('progdi', $row->id_progdi),
        'list_progdi' => $this->Biodata_model->get_dinamis('programstudi'),
		'perusahaan' => set_value('perusahaan', $row->perusahaan),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'jeda' => set_value('jeda', $row->jeda),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'domisili' => set_value('domisili', $row->domisili),
		'no_hp' => set_value('no_hp', $row->no_hp),
        'email' => set_value('email', $row->email),
        'tahun_lulus' => set_value('tahun_lulus', $row->tahun_lulus),
        'level' => set_value('level', $row->level),
	    );
            $this->template->load('template','biodata/biodata_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata'));
        }
    }

    public function grafik()
    {
        $this->auth->cek_akses('UCACJAYA');
        $this->load->model('Respon_model');
        $data['graph'] = $this->Respon_model->jmlh_alumni();
        $data['total'] = $this->Respon_model->jmlh();
        $data['list_kode'] = $this->Biodata_model->get_dinamis('t_kuis');
        $data['list_kode_pilihan'] = $this->Biodata_model->get_dinamis('t_pilihan');
        $data['action'] = site_url('biodata/proses');

        $this->template->load('template', 'grafik', $data);
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
        $data['action'] = site_url('biodata/proses');

        $this->template->load('template', 'grafik1', $data);
    }
    
    public function update_action() 
    {
        $this->_rules();
        $id = $this->input->post('id_biodata', TRUE);
        if ($this->form_validation->run() == FALSE) {
            $this->update(md5($id));
        } else {
            $nama = $this->input->post('nama',TRUE);
            $nim = ucfirst($this->input->post('nim',TRUE));
            $telp = $this->input->post('no_hp',TRUE);
            $bekerja = $this->input->post('bekerja',TRUE);
            
            $cek1 = $this->Biodata_model->getbynim($nim);
            if($cek1 == null or count($cek1) <= 1) {
                if($bekerja == 'Ya')
                {
                $this->_rules1();
                    if($this->form_validation->run()  == FALSE){
                        $this->update(md5($id)); 
                   } else {
                        $data = array(
                            'nama' => $nama,
                            'nim' => $nim,
                            'id_progdi' => $this->input->post('progdi',TRUE),
                            'bekerja' => $bekerja,
                            'perusahaan' => $this->input->post('perusahaan',TRUE),
                            'jabatan' => $this->input->post('jabatan',TRUE),
                            'jeda' => $this->input->post('jeda',TRUE),
                            'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
                            'domisili' => $this->input->post('domisili',TRUE),
                            'tahun_lulus' => $this->input->post('tahun_lulus',TRUE),
                            'email' => $this->input->post('email',TRUE),
                            'no_hp' => $telp,
                            'level' => $this->input->post('level',TRUE),
                        );
                        $this->Biodata_model->update($id, $data);
                        $this->session->set_flashdata('message', '<span class="alert alert-success">
                <i class="ace-icon fa fa-user"></i>
                Perubahan sudah tersimpan <i class="ace-icon fa fa-thumbs-o-up"></i></span>');
                        redirect(site_url('Home'));
                        }
                    } else {
                        $data = array(
                            'nama' => $nama,
                            'nim' => $nim,
                            'id_progdi' => $this->input->post('progdi',TRUE),
                            'bekerja' => $bekerja,
                            'perusahaan' => "-",
                            'jabatan' => "-",
                            'jeda' => 0,
                            'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
                            'domisili' => $this->input->post('domisili',TRUE),
                            'tahun_lulus' => $this->input->post('tahun_lulus',TRUE),
                            'email' => $this->input->post('email',TRUE),
                            'no_hp' => $telp,
                            'level' => $this->input->post('level',TRUE),
                        );
                    $this->Biodata_model->update($id, $data);
                    $this->session->set_flashdata('message', '<span class="alert alert-success">
                <i class="ace-icon fa fa-user"></i>
                Perubahan sudah tersimpan <i class="ace-icon fa fa-thumbs-o-up"></i></span>');
                    redirect(site_url('Home'));
                    }
            } else {
                $this->session->set_flashdata('message', '<span class="alert alert-block alert-warning">
                    <i class="ace-icon fa fa-warning"></i>
                    <b>NIM</b> sudah digunakan<span>');
                redirect(site_url('Biodata/update'));
            }
        }
    }
    
    public function delete($id) 
    {
        $this->auth->cek_akses('UCACJAYA');
        $row = $this->Biodata_model->get_by_id($id);

        if ($row) {
            $this->Biodata_model->softdelete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-block alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <i class="ace-icon fa fa-check orange"></i> 
                Delete Record Success</div>');
            redirect(site_url('home'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('home'));
        }
    }

    public function delete_all()
    {
        $this->auth->cek_akses('UCACJAYA');
        $all = $this->input->post('ace', TRUE);

        foreach($all as $id){
        $this->Biodata_model->delete($id);
        }
            $this->session->set_flashdata('message', '<div class="alert alert-block alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <i class="ace-icon fa fa-check orange"></i> 
                Delete Record Success</div>');
            redirect(site_url('home'));
    }

    public function excel()
    {
        $this->auth->cek_akses('UCACJAYA');
        $bio = $this->Biodata_model->get_all();

        $data = array(
            'biodata' => $bio
            );
        
        $this->load->view('biodata/excel_biodata', $data);
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
	$this->form_validation->set_rules('nim', 'NIM', 'trim|required');
	$this->form_validation->set_rules('progdi', 'program Studi', 'trim|required');
	$this->form_validation->set_rules('bekerja', 'bekerja', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('domisili', 'domisili', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
    $this->form_validation->set_rules('level', 'level', 'trim|required');

	$this->form_validation->set_rules('id_biodata', 'id_biodata', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function _rules1()
    {
    $this->form_validation->set_rules('perusahaan', 'perusahaan', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
    $this->form_validation->set_rules('jeda', 'jeda', 'trim|required');

    $this->form_validation->set_rules('id_biodata', 'id_biodata', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function logout()
    {
        $this->Biodata_model->destroy();

    }

}