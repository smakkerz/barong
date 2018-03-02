<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Respon_model extends CI_Model
{
    public $table = 'responden';
    public $id = 'kode_kuis';
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

    function getbyid($id)   ////validasi nim
    {
        return $this->db->get_where('responden',array('id_biodata'=>$id))->row();
    }

    function cetak($id)
    {
        $this->db->where('md5(id_biodata)', $id);
        $this->db->from('responden r');
        $this->db->join('t_pilihan t',' t.kode_kuis = r.kode_kuis AND t.kode_pilihan = r.kode_pilihan');

        return $this->db->get()->result();
    }
    function clear($id, $key)
    {
        $this->db->set('IsDeleted', '1');
        $this->db->where($key, $id);
        $this->db->update($this->table);
    }
    function cari()
    {
        $query = "SELECT t.pilihan, r.kode_kuis, r.kode_pilihan, r.id_biodata FROM `responden`r INNER JOIN t_pilihan t ON r.kode_kuis = t.kode_kuis AND r.kode_pilihan = t.kode_pilihan WHERE r.kode_kuis = 12 GROUP by r.id_biodata";
        return $this->db->query($query)->result();
    }

    function jmlh_alumni()
    {
        $qry ="SELECT programstudi.jurusan as jurusan, programstudi.strata as strata, COUNT(biodata.id_progdi) AS hasil 
		FROM biodata JOIN programstudi ON programstudi.id_progdi = biodata.id_progdi GROUP BY biodata.id_progdi";
        return $this->db->query($qry)->result();
    }

    function jmlh()
    {
        $this->db->where_not_in('level', 'UCACJAYA');
        $this->db->from('biodata');
        return $this->db->count_all_results();
    }

    function grafik($multidata)
    {
        $query = "SELECT r.kode_kuis, r.kode_pilihan, r.kode_pilihan as nilai, COUNT(r.kode_pilihan) AS hasil, t.pilihan FROM responden r 
		INNER JOIN t_pilihan t ON t.kode_kuis = r.kode_kuis WHERE  r.kode_kuis = '".$multidata."' GROUP BY r.kode_pilihan";
        return $this->db->query($query)->result();
    }

    function grafik1($id, $multidata)
    {
        $query = "SELECT r.kode_kuis, r.kode_pilihan, COUNT(r.nilai) AS hasil, r.nilai, t.pilihan FROM responden r  INNER JOIN t_pilihan t ON 
        t.kode_kuis = r.kode_kuis AND t.kode_pilihan=r.kode_pilihan
		WHERE  r.kode_kuis ='".$id."' AND r.kode_pilihan ='".$multidata."' GROUP BY r.nilai";
        return $this->db->query($query)->result();
    }

    function count($multidata)
    {
        $this->db->where('kode_kuis', $multidata);
        $this->db->from('responden');
        return $this->db->count_all_results();
    }
}