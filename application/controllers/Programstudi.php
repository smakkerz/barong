<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Programstudi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Programstudi_model');
         $this->auth->cek_auth();
        $this->auth->cek_akses('UCACJAYA');
        $this->settingvalue_library->production();
    }

     public function index()
    {
        $programstudi = $this->Programstudi_model->get_all();

        $data = array(
            'program_data' => $programstudi,
        );

        $this->template->load('template','programstudi/programstudi_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Programstudi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_progdi' => $row->id_progdi,
		'strata' => $row->strata,
		'jurusan' => $row->jurusan,
		'gelar' => $row->gelar,
	    );
            $this->template->load('template','programstudi/programstudi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('programstudi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('programstudi/create_action'),
	    'id_progdi' => set_value('id_progdi'),
	    'strata' => set_value('strata'),
	    'jurusan' => set_value('jurusan'),
	    'gelar' => set_value('gelar'),
	);
        $this->template->load('template','programstudi/programstudi_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'strata' => $this->input->post('strata',TRUE),
		'jurusan' => $this->input->post('jurusan',TRUE),
		'gelar' => $this->input->post('gelar',TRUE),
	    );

            $this->Programstudi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('programstudi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Programstudi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('programstudi/update_action'),
		'id_progdi' => set_value('id_progdi', $row->id_progdi),
		'strata' => set_value('strata', $row->strata),
		'jurusan' => set_value('jurusan', $row->jurusan),
		'gelar' => set_value('gelar', $row->gelar),
	    );
            $this->template->load('template','programstudi/programstudi_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('programstudi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_progdi', TRUE));
        } else {
            $data = array(
		'strata' => $this->input->post('strata',TRUE),
		'jurusan' => $this->input->post('jurusan',TRUE),
		'gelar' => $this->input->post('gelar',TRUE),
	    );

            $this->Programstudi_model->update($this->input->post('id_progdi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('programstudi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Programstudi_model->get_by_id($id);

        if ($row) {
            $this->Programstudi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('programstudi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('programstudi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('strata', 'strata', 'trim|required');
	$this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
	$this->form_validation->set_rules('gelar', 'gelar', 'trim|required');

	$this->form_validation->set_rules('id_progdi', 'id_progdi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}