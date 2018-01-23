<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Identitas_model extends CI_Model
{

    public $table = 'identitas';
    public $id = 'id_identitas';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
    
    function order()
    {
        $this->db->order_by('id_biodata', 'tanggal_isi', 'ASC');
        return $this->db->get('responden')->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $query= $this->db->get_where($this->table,array('nama' => $id));
        $query = $query->result_array();
        return $query;
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_identitas', $q);
	$this->db->or_like('nim', $q);
	$this->db->or_like('progdi', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('no_hp', $q);
	$this->db->or_like('email', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_identitas', $q);
	$this->db->or_like('nim', $q);
	$this->db->or_like('progdi', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('no_hp', $q);
	$this->db->or_like('email', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function batch($multidata)
    {
        $this->db->insert_batch('responden', $multidata);
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

    function tabel($tabel)
    {
        return $this->db->get($tabel)->result();
    }

    function get_dinamis($tabel)
    {
        return $this->db->get_where($tabel, array('kode_kuis' => '12'));
    }

}