<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->auth->cek_auth();
        $this->settingvalue_library->production();
    }

    public function index()
    { 
        $this->load->model('Respon_model');
        //Date
        $tgl = date("d");
        $thun = date("Y");
        $hari = date("l");
        $blan = date("m");
        $hrindo = array('Monday' => 'Senin','Tuesday'=>'Selasa', 'Wednesday'=>'Rabu', 'Thursday'=>'Kamis',
                    'Friday'=>'Jumat', 'Saturday'=>'Sabtu','Sunday'=>'Minggu'); 
        $blnindo = array('01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei', 
                        '06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September',
                        '10'=>'Okotober','11'=>'November','12'=>'Desember');
                         
        $row = $this->Biodata_model->get_respon($this->session->userdata('id_bio'));
        $data['total'] = $this->Respon_model->jmlh();
        if(count($row) == 0) {
            if ($this->session->userdata('level')=='UCACJAYA') {  ///views for admin ucacjaya
            
            $data['file'] = $this->Biodata_model->get_all(5);
            $data['jumlah_lulus'] = $this->Biodata_model->jmlh_alumni(date("Y"));
            $data['jumlah_kuis'] = count($this->Biodata_model->jmlh_kuis(date("Y")));
            $data['all_kuis'] = count($this->Biodata_model->respon());
            } else {
            $data['file'] = '';
            }
        }  else {  //views for user alaumni
            $data['file'] = "<div class='col-sm-5'>
                                <div class='widget-box transparent'>
                                    <div class='widget-header widget-header-flat'>
                                        <h4 class='widget-title lighter'>
                                        <i class='ace-icon fa fa-file orange'></i>Cetak Kuesioner
                                        </h4>
                                        <div class='widget-toolbar'>
                                            <a href='#' data-action='reload'>
                                                <i class='ace-icon fa fa-refresh'></i>
                                            </a>
                                            <a href='#' data-action='collapse'>
                                                <i class='ace-icon fa fa-chevron-up'></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class='widget-body'>
                                        <div class='widget-main no-padding'>
                                            <p class='alert alert-info'>
                                                Kuesioner Tracer Study Universitas Semarang Carrer and Alumni Center Silahkan
                                            <a class='btn btn-primary btn-sm' href='".site_url('cetak.asp/'.md5($this->session->userdata('id_bio')))."' target='blank'>
                                            <i class='ace-icon fa fa-file-o'></i> Cetak Kuisioner</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>";
        }
        ///Welcome for all
        $data['isi'] = 'Selamat Datang di Tracer Study Universitas Semarang Career and Alumni Center Jumlah Alumni yang terdaftar di Tracer UCAC sampai sekarang <b>'.$data['total'].'</b> Alumni. <br> Sekarang Hari <b>'.
                        $hrindo[$hari].', '.$tgl.' '.$blnindo[$blan].' '.$thun.'</b>';
        ///profil session
         $row = $this->Biodata_model->get_by_id(md5($this->session->userdata('id_bio')));
            $data['nama'] = $row->nama;
            $data['nim'] = $row->nim;
            $data['progdi'] ="".$row->strata." ".$row->jurusan."";
            $data['bekerja'] = $row->bekerja;
            $data['gelar'] = $row->gelar;
            $data['perusahaan'] = $row->perusahaan;
            $data['jabatan'] = $row->jabatan;
            $data['jeda'] = $row->jeda;
            $data['jenis_kelamin'] = $row->jenis_kelamin;
            $data['domisili'] = $row->domisili;
            $data['no_hp'] = $row->no_hp;
            $data['lulus'] = $row->tahun_lulus;
            $data['CreatedDate'] = $row->CreatedDate;
        
            ///views
        $this->template->load('template','home_view', $data);
    }

    public function widget()
    {
        $this->load->model('Respon_model');
                $data['v'] = $this->Biodata_model->get_all(5);
                $data['total'] = $this->Respon_model->jmlh();
                $this->load->view('widget', $data);
    }

    public function read($id) 
    {
        $row = $this->Biodata_model->get_by_id($id);
        if ($row) {
            $data = array(
        'id_biodata' => $row->id_biodata,
        'nama' => $row->nama,
        'nim' => $row->nim,
        'password' => $row->password,
        'progdi' => "".$row->strata." ".$row->jurusan."",
        'bekerja' => $row->bekerja,
        'gelar' => $row->gelar,
        'perusahaan' => $row->perusahaan,
        'jabatan' => $row->jabatan,
        'jeda' => $row->jeda,
        'jenis_kelamin' => $row->jenis_kelamin,
        'domisili' => $row->domisili,
        'no_hp' => $row->no_hp,
        'email' => $row->email,
        'tahun_lulus' => $row->tahun_lulus,
        'CreatedDate' => $row->CreatedDate
        );
            $this->template->load('template','User/user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('home'));
        }
    }

    public function reset_password($id)
    {
        $row = $this->Biodata_model->get_by_id($id);
        if ($row) {
            $data = array(
                'button' => 'Ubah Password',
                'action' => site_url('home/reset_action'),
                'id_biodata' => $row->id_biodata,
                'nama' => $row->nama,
                'password' => set_value('pass')
                );
            $this->template->load('template', 'User/reset_password', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('home'));
        }

        }

    public function reset_action() //fungsi validasi sebelum diperbarui data
    {
        $this->form_validation->set_rules('pass', 'password', 'trim|required');
        $this->form_validation->set_rules('pass1', 'konfirmasi password', 'trim|required');
         $this->form_validation->set_rules('id_biodata', 'id_biodata', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->reset_password();
        } else {
            $pass = $this->input->post('pass',TRUE);
            $pass1 = $this->input->post('pass1',TRUE);
            if($pass == $pass1){
            $data['password'] = sha1(md5($pass));
            $id = $this->input->post('id_biodata', TRUE);

            $this->Biodata_model->update($id, $data);
            if ($this->session->userdata('level') == "User") {
            $this->session->set_userdata(array(
                'isLogin' => TRUE,
                'password' => sha1(md5($this->input->post('pass', TRUE)))
                )); }
            $this->session->set_flashdata('message', '<h2><div class="alert alert-block alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;</button>Terimakasih telah merubah Password
                                    <b class="text-danger">'.$this->session->userdata('nama').'</b></div></h2>');
            redirect(site_url('home'));
            } else {
                 $this->session->set_flashdata('message', '<h2><div class="alert alert-block alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        &times;</button>Password tidak sama dengan Konfirmasi password, 
                                        <b class="text-danger">'.$this->session->userdata('nama').'</b></div></h2>');
                redirect(site_url('home'));
            }
        }
    }
 }
