<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings_model extends CI_Model
{

    public $table = 'settings';
    public $date = 'CreatedDate';
    public $id = 'ID';
    public $code = 'Code';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
    // get all
    function get_all()
    {
        $this->db->order_by($this->date, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where(array($this->id => $id,'IsDeleted' => 0));
        return $this->db->get($this->table)->row();
    }

    function get_by_code($code)
    {
        $this->db->where(array($this->code => $code,'IsDeleted' => 0));
        return $this->db->get($this->table)->row();
    }
    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function softdelete($id)
    {
        $this->db->set('IsDeleted', '1');
        $this->db->where($this->id, $id);
        $this->db->update($this->table);
    }

}
