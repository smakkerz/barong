<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Settings_model');
         $this->auth->cek_auth();
        $this->auth->cek_akses('UCACJAYA');
    }

     public function index()
    {
        $set = $this->Settings_model->get_all();

        $data = array(
            'settings_data' => $set,
        );

        $this->template->load('template','settings/settings_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Settings_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_progdi' => $row->id_progdi,
		'strata' => $row->strata,
		'jurusan' => $row->jurusan,
		'gelar' => $row->gelar,
	    );
            $this->template->load('template','settings/programstudi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Settings'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Add',
            'action' => site_url('settings/create_action'),
	    'ID' => set_value('ID'),
	    'code' => set_value('code'),
	    'value' => set_value('value'),
	);
        $this->template->load('template','settings/settings_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $row = $this->Settings_model->get_by_id($id);
            $data = array(
		'code' => $this->input->post('code',TRUE),
		'value' => $this->input->post('value',TRUE),
		'CreatedDate' => date("Y-m-d H:i:s"),
        'IsDeleted' => 0
	    );

            $this->Settings_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('settings'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Settings_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('settings/update_action'),
		'ID' => set_value('ID', $row->ID),
		'code' => set_value('code', $row->Code),
		'value' => set_value('value', $row->Value),
	    );
            $this->template->load('template','settings/settings_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('settings'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'Code' => $this->input->post('code',TRUE),
		'Value' => $this->input->post('value',TRUE)
	    );

            $this->Settings_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('settings'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Settings_model->get_by_id($id);

        if ($row) {
            $this->Settings_model->softdelete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('settings'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('settings'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('code', 'code', 'trim|required');
	$this->form_validation->set_rules('value', 'value', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}