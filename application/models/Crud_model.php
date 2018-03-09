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
    function update($field, $id, $data, $table)
    {
        $this->db->where($field, $id);
        $this->db->update($table, $data);
    }

    function softdelete($field, $id, $table)
    {
        $this->db->set('IsDeleted', '1');
        $this->db->where($field, $id);
        $this->db->update($table);
    }

    function batch($table, $multidata)
    {
        $this->db->insert_batch($table, $multidata);
    }

    // delete data
    function delete($field, $id, $table)
    {
        $this->db->where($field, $id);
        $this->db->delete($table);
    }

}