<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model
{

    public $table = 'programstudi';
    public $id = 'id_progdi';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all($table)
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($table)->result();
    }

    // get data by id
    function get_by_id($id, $field, $table)
    {
        $this->db->where($field, $id);
        return $this->db->get($table)->row();
    }
    
    // insert data
    function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    function batch($table, $multidata)
    {
        $this->db->insert_batch($table, $multidata);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}
