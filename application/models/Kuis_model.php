<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kuis_model extends CI_Model
{

    public $table = 't_kuis';
    public $id = 'id_kuis';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_kuis,kode_kuis,kuis');
        $this->datatables->from('t_kuis');
        //add this line for join
        //$this->datatables->join('table2', 't_kuis.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('t_kuis/read/$1'),'Read')." | ".anchor(site_url('t_kuis/update/$1'),'Update')." | ".anchor(site_url('t_kuis/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_kuis');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where('id_biodata', $id);
        return $this->db->get('responden')->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_kuis', $q);
	$this->db->or_like('kode_kuis', $q);
	$this->db->or_like('kuis', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_kuis', $q);
	$this->db->or_like('kode_kuis', $q);
	$this->db->or_like('kuis', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
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

}