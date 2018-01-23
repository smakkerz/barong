<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth {
    public function cek_auth()
	{
		$this->ci =& get_instance();
		$this->sesi  = $this->ci->session->userdata('isLogin');
		if($this->sesi != TRUE){
			redirect('login','refresh');
			exit();
		}
	}

	public function cek_akses($kecuali)
	{
		$this->ci =& get_instance();
		$this->sesi  = $this->ci->session->userdata('isLogin');
		$this->hak = $this->ci->session->userdata('level');
		if($this->hak != $kecuali){
			redirect(base_url());
			exit();
		}
	}
}