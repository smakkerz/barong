<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Identitas_model');
        $this->load->library('form_validation');        
    }

    public function index()
    {
        $session = $this->session->userdata('isLogin');
        if($session == FALSE) {
         // Fungsi Login
        
        $log = array(
        'button' => 'Masuk',
        'action' => site_url('login/do_login'),
        'id_biodata' => set_value('id_biodata'),
        'nim' => set_value('nim'),
        'password' => set_value('password'),
    );

        $this->template->load('Public/form','Public/login_form', $log);
    } else {
        redirect(base_url('home'));
        }
    } 

    public function do_login()
    {
        $this->form_validation->set_rules('%nim%', 'nim', 'trim|required');
        $this->form_validation->set_rules('p4ssword', 'password', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $nim = $this->input->post('%nim%',TRUE);
            $pass = $this->input->post('p4ssword',TRUE);
        
        $cek = $this->Biodata_model->run($nim, sha1(md5($pass)));
        if($cek) {
            $this->session->set_userdata(array(
                'isLogin' => TRUE,
                'nim' => $cek->nim,
                'nama' => $cek->nama,
                'level' => $cek->level,
                'id_bio' => $cek->id_biodata,
                'password' => $cek->password,
                'tahun_lulus' => $cek->tahun_lulus
                ));
            redirect('home', 'refresh');
        } else {
            $this->session->set_flashdata('error', '<span class="alert alert-block alert-danger">
                <i class="ace-icon fa fa-warning"></i> Kombinasi Akun salah </span>');
            redirect('login');
            }
        }
    }

    public function newpwd($long, $namaku) 
    {  //reset password with system

        $nama = '+:L0c4l<>Ho5t/'.$namaku;
        $string = date("dt");
            for ($i = 0; $i < $long; $i++) {
            $j = rand(date("d"), date("H")-1);
            $string .= $nama{$j};
            }
            return $string;
    }

    public function reset_pwd()
    {  //proses validasi reset password I
            $nim = $this->input->post('%nim%',TRUE);
            $lulus = $this->input->post('_lulus',TRUE);
        
        $cek = $this->Biodata_model->valid($nim, $lulus);
        if($cek) {
            $data = array(
                'nama' => ucfirst($cek->nama),
                'action'=> site_url('Login/update_pwd'),
                'id_bio' => $cek->id_biodata,
                'list_progdi' => $this->Biodata_model->get_dinamis('programstudi'),
                'newpassword' => $this->newpwd(6, $cek->domisili));
            $this->template->load('Public/form','Public/pass', $data);
        } else {
            $this->session->set_flashdata('error', '<span class="alert alert-block alert-danger">
                <i class="ace-icon fa fa-warning"></i> Kombinasi Tidak Sesuai</span>');
            redirect('login');
        }
    }

    public function update_pwd() 
    { //proses validasi reset password II
        $id = $this->input->post('ID',TRUE);
        $jurusan = $this->input->post('progdi',TRUE);
        $pwd = $this->input->post('password',TRUE);
        $cek = $this->Biodata_model->valid2($id, $jurusan);
        if($cek) {
            $reset = sha1(md5($pwd));
            $this->Biodata_model->update($id, array('password'=>$reset));

            $this->session->set_flashdata('error', '<span class="alert alert-success">
                <i class="ace-icon fa fa-check orange"></i> Password Baru Anda : <b class="blue">'.$pwd.'</b></span>');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', '<span class="alert alert-block alert-danger">
                <i class="ace-icon fa fa-warning"></i> Kombinasi Tidak Sesuai</span>');
            redirect('login');
        }

    }

    public function create() 
    {  //daftar user

        $data = array(
            'button' => 'Daftar',
            'action' => site_url('login/create_action'),
        'id_biodata' => set_value('id_biodata'),
        'nama' => set_value('nama'),
        'nim' => set_value('nim'),
        'password' => set_value('password'),
        'id_progdi' => set_value('progdi'),
        'bekerja' => set_value('bekerja'),
        'perusahaan' => set_value('-'),
        'jabatan' => set_value('-'),
        'jeda' => set_value('-'),
        'jenis_kelamin' => set_value('jenis_kelamin'),
        'domisili' => set_value('domisili'),
        'no_hp' => set_value('no_hp'),
        'list_progdi' => $this->Biodata_model->get_dinamis('programstudi'),
    );

        $this->template->load('Public/form','Public/register', $data);
    }
    
    public function create_action() 
    {  //proses daftar user
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $bekerja = $this->input->post('bekerja',TRUE);
                if($bekerja == "Belum") {
                    $perusahaan = '-';
                    $jabatan = '-';
                    $jeda = '-';
                } else {
                    $perusahaan = $this->input->post('perusahaan',TRUE);
                    $jabatan = $this->input->post('jabatan',TRUE);
                    $jeda = $this->input->post('jeda',TRUE);
                }
            $nama = $this->input->post('nama',TRUE);
            $nim = ucfirst($this->input->post('nim',TRUE));
            $telp = $this->input->post('no_hp',TRUE);

            $cek = $this->Biodata_model->cek_nama($nama);
            if($cek == null)
            {
                $cek1 = $this->Biodata_model->getbynim($nim);
                if($cek1 == null) {
                    $cek2 = $this->Biodata_model->cek_telp($telp);
                    if($cek2 == null) {
                        $data = array(
                        'nama' => $nama,
                        'nim' => $nim,
                        'password' => sha1(md5($this->input->post('password',TRUE))),
                        'id_progdi' => $this->input->post('progdi',TRUE),
                        'bekerja' => $bekerja,
                        'perusahaan' => $perusahaan,
                        'jabatan' => $jabatan,
                        'jeda' => $jeda,
                        'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
                        'domisili' => $this->input->post('domisili',TRUE),
                        'no_hp' => $telp,
                        'level' => 'User',
                        'tahun_lulus' => 0
                        );

                        $this->Biodata_model->insert($data);
                        $this->session->set_flashdata('message', '<span class="alert alert-block alert-success">
                <i class="ace-icon fa fa-warning"></i>
                Pendaftaran Sukses, Silahkan Login <i class="ace-icon fa fa-thumbs-o-up"></i></span>');
                        redirect(site_url('Login'));

                    } else { 
                        $this->session->set_flashdata('message', '<span class="alert alert-block alert-warning">
                    <i class="ace-icon fa fa-warning"></i>
                    <b>No HP/Telp</b> sudah pernah digunakan<span>'); 
                        redirect(site_url('Login'));
                    }
                } else {
                    $this->session->set_flashdata('message', '<span class="alert alert-block alert-warning">
                <i class="ace-icon fa fa-warning"></i>
                <b>NIM</b> sudah pernah digunakan</span>'); 
                    redirect(site_url('Login'));
                }
            } else {
                $this->session->set_flashdata('message', '<span class="alert alert-block alert-warning">
                <i class="ace-icon fa fa-warning"></i>
                <b>Nama</b> sudah pernah digunakan</span>'); 
                redirect(site_url('Login'));
            }
        }
    }

    public function _rules() 
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('nim', 'nim', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('progdi', 'program studi', 'trim|required');
        $this->form_validation->set_rules('bekerja', 'bekerja', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
        $this->form_validation->set_rules('domisili', 'domisili', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'no hp', 'trim|required|min_length[5]|numeric');
        $this->form_validation->set_rules('cek', 'Centang persetujuan', 'trim|required');

        $this->form_validation->set_rules('id_biodata', 'id_biodata', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
    
