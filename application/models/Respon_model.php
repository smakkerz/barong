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
        return $this->db->get_where('responden',array('id_biodata'=>$id, 'IsDeleted'=>'0'))->row();
    }

    function cetak($id)
    {
        $this->db->where('md5(id_biodata)', $id);
        $this->db->where('IsDeleted', '0');
        $this->db->from('responden r');
        $this->db->join('t_pilihan t',' t.kode_kuis = r.kode_kuis AND t.kode_pilihan = r.kode_pilihan');

        return $this->db->get()->result();
    }
    function clear($id, $key)
    {
        $this->db->set('IsDeleted', '1');
        $this->db->set('DeletedDate', date("Y-m-d H:i:s"));
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
		FROM biodata JOIN programstudi ON programstudi.id_progdi = biodata.id_progdi where biodata.IsDeleted = 0 AND biodata.level = 'User' GROUP BY biodata.id_progdi";
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
        $query = "SELECT r.kode_kuis, r.kode_pilihan, r.kode_pilihan as nilai, COUNT(r.nilai) AS hasil, t.pilihan, A.semua FROM responden r 
		INNER JOIN t_pilihan t ON t.kode_kuis = r.kode_kuis and t.kode_pilihan = r.kode_pilihan ,
        (select count(nilai) as semua from responden where kode_kuis = '".$multidata."' and IsDeleted = 0) as A
        WHERE r.IsDeleted = 0 AND r.kode_kuis = '".$multidata."' 
        AND r.nilai is not null AND r.nilai != ''
        GROUP BY r.kode_pilihan order by COUNT(r.nilai) desc";
        return $this->db->query($query)->result();
    }

    function grafik1($id, $multidata)
    {
        $query = "SELECT r.kode_kuis, r.kode_pilihan, COUNT(r.nilai) AS hasil, r.nilai, t.pilihan, A.semua FROM responden r  INNER JOIN t_pilihan t ON 
        t.kode_kuis = r.kode_kuis AND t.kode_pilihan=r.kode_pilihan,
        (select count(nilai) as semua from responden where kode_kuis = '".$id."' and kode_pilihan ='".$multidata."' and IsDeleted = 0) as A
		WHERE r.IsDeleted = 0 AND r.kode_kuis ='".$id."' AND r.kode_pilihan ='".$multidata."' 
        AND r.nilai is not null AND r.nilai != ''
        GROUP BY r.nilai order by COUNT(r.nilai) desc";
        return $this->db->query($query)->result();
    }

    function count($multidata)
    {
        $this->db->where('kode_kuis', $multidata);
        $this->db->from('responden');
        return $this->db->count_all_results();
    }

    function batch($multidata)
    {
        $this->db->insert_batch('responden', $multidata);
    }
}