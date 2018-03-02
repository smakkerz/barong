<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biodata_model extends CI_Model
{

    public $table = 'biodata';
    public $id = 'id_biodata';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
    function get_all($limit='')
    {
    $this->db->order_by($this->id, $this->order);
    $this->db->where_not_in('level', 'UCACJAYA');
    $this->db->select('*');
    $this->db->from('biodata b');
    $this->db->join('programstudi p','b.id_progdi=p.id_progdi');
    if($limit != '')
        $this->db->limit($limit, 0);

    return $this->db->get()->result();
    }

    function cek_nama($nama)  ////validasi nama
    {
        return $this->db->get_where('biodata',array('nama'=>$nama))->row();
    }

    function cek_telp($telp)  ////validasi telpon/no hp
    {
        return $this->db->get_where('biodata',array('no_hp'=>$telp))->row();
    }

    function getbynim($nim)   ////validasi nim
    {
        return $this->db->get_where('biodata',array('nim'=>$nim))->row();
    }
    function valid($nim, $lulus)
    {
        $where = "(nim = '".$nim."' or no_hp = '".$nim."')";
        $this->db->where('tahun_lulus', $lulus);
        $this->db->where($where);
        $this->db->from($this->table);
        return $this->db->get()->row();
    }

    function valid2($nim, $lulus)
    {
        $qry = $this->db->get_where($this->table,array($this->id => $nim, 'id_progdi'=> $lulus));
        return $qry->row();
    }

    function get_by_id($id) ////validasi id
    {
        $this->db->where('md5(id_biodata)', $id);
        $this->db->from('biodata b');
        $this->db->join('programstudi p','b.id_progdi=p.id_progdi');
        return $this->db->get()->row();
    }

    function getid($id) ////validasi id
    {
        $this->db->where('id_biodata', $id);
        $this->db->from('biodata b');
        $this->db->join('programstudi p','b.id_progdi=p.id_progdi');
        return $this->db->get()->row();
    }

    function get_respon($id) ////menampilkan kuisioner berdasarkan id user
    {
        $query = $this->db->get_where('responden',array('id_biodata' => $id));
        $query = $query->result_array();
        return $query;
    }

    function jmlh_alumni($data)
    {
        $this->db->where('tahun_lulus', $data);
        $this->db->from($this->table);
        return $this->db->count_all_results();
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
        $this->db->where('md5(id_biodata)', $id);
        $this->db->delete($this->table);
    }

    function softdelete($id)
    {
        $this->db->set('IsDeleted', '1');
        $this->db->where('md5(id_biodata)', $id);
        $this->db->update($this->table);
    }

    function run($nim, $pass)
    {
        return $this->db->get_where($this->table,array('nim' => $nim, 'password' => $pass))->row();
    }

    function destroy()
    {
        $sess_data = ['login', 'nim'];
        $this->session->unset_userdata($sess_data);
        $this->session->sess_destroy();
    }
    //get data dropdown dinamis
    function get_dinamis($tabel)
    {
        return $this->db->get($tabel);
    }

    function all_kuis($tahun="")
    {
        $res = "SELECT * FROM biodata WHERE id_biodata IN (SELECT id_biodata
                FROM responden UNION SELECT id_biodata FROM biodata) and tahun_lulus = ".$tahun;
                return $this->db->query($res)->result();
    }

    function respon($name="")  ////menampilkan data kuisioner
    {
    $qry = "select b.nama, b.nim, b.no_hp, b.email, b.tahun_lulus, b.id_biodata, r.id_biodata,
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=21 then r.nilai else 0 end) 'F21',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=22 then r.nilai else 0 end) 'F22',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=23 then r.nilai else 0 end) 'F23',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=24 then r.nilai else 0 end) 'F24',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=25 then r.nilai else 0 end) 'F25',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=26 then r.nilai else 0 end) 'F26',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=27 then r.nilai else 0 end) 'F27',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=31 then r.nilai else 0 end) 'F31',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=32 then r.nilai else 0 end) 'F32',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=33 then r.nilai else 0 end) 'F33',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=41 then r.nilai else 0 end) 'F41',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=42 then r.nilai else 0 end) 'F42',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=43 then r.nilai else 0 end) 'F43',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=44 then r.nilai else 0 end) 'F44',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=45 then r.nilai else 0 end) 'F45',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=46 then r.nilai else 0 end) 'F46',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=47 then r.nilai else 0 end) 'F47',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=48 then r.nilai else 0 end) 'F48',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=49 then r.nilai else 0 end) 'F49',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=410 then r.nilai else 0 end) 'F410',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=411 then r.nilai else 0 end) 'F411',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=412 then r.nilai else 0 end) 'F412',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=413 then r.nilai else 0 end) 'F413',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=414 then r.nilai else 0 end) 'F414',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=51 then r.nilai else 0 end) 'F51',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=53 then r.nilai else 0 end) 'F53',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=61 then r.nilai else 0 end) 'F61',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)='7a1' then r.nilai else 0 end) 'F7a1',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=71 then r.nilai else 0 end) 'F71',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=81 then r.nilai else 0 end) 'F81',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=82 then r.nilai else 0 end) 'F82',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=91 then r.nilai else 0 end) 'F91',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=92 then r.nilai else 0 end) 'F92',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=93 then r.nilai else 0 end) 'F93',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=94 then r.nilai else 0 end) 'F94',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=95 then r.nilai else 0 end) 'F95',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=101 then r.nilai else 0 end) 'F101',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=102 then r.nilai else 0 end) 'F102',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=103 then r.nilai else 0 end) 'F103',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=104 then r.nilai else 0 end) 'F104',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=105 then r.nilai else 0 end) 'F105',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=111 then r.nilai else 0 end) 'F111',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=112 then r.nilai else 0 end) 'F112',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=113 then r.nilai else 0 end) 'F113',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=114 then r.nilai else 0 end) 'F114',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=115 then r.nilai else 0 end) 'F115',
    sum(case when concat(r.kode_kuis)=12 then r.kode_pilihan else 0 end) 'F12',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=131 then r.nilai else 0 end) 'F131',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=132 then r.nilai else 0 end) 'F132',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=133 then r.nilai else 0 end) 'F133',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=141 then r.nilai else 0 end) 'F141',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=142 then r.nilai else 0 end) 'F142',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=143 then r.nilai else 0 end) 'F143',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=144 then r.nilai else 0 end) 'F144',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=145 then r.nilai else 0 end) 'F145',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=151 then r.nilai else 0 end) 'F151',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=152 then r.nilai else 0 end) 'F152',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=153 then r.nilai else 0 end) 'F153',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=154 then r.nilai else 0 end) 'F154',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=161 then r.nilai else 0 end) 'F161',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=162 then r.nilai else 0 end) 'F162',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=163 then r.nilai else 0 end) 'F163' ,
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=164 then r.nilai else 0 end) 'F164',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=165 then r.nilai else 0 end) 'F165',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=166 then r.nilai else 0 end) 'F166',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=167 then r.nilai else 0 end) 'F167',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=168 then r.nilai else 0 end) 'F168',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=169 then r.nilai else 0 end) 'F169',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1610 then r.nilai else 0 end) 'F1610',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1611 then r.nilai else 0 end) 'F1611',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1612 then r.nilai else 0 end) 'F1612',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1613 then r.nilai else 0 end) 'F1613',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=171 then r.nilai else 0 end) 'F171',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=172 then r.nilai else 0 end) 'F172',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=173 then r.nilai else 0 end) 'F173',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=174 then r.nilai else 0 end) 'F174',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=175 then r.nilai else 0 end) 'F175',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=176 then r.nilai else 0 end) 'F176',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=177 then r.nilai else 0 end) 'F177',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=178 then r.nilai else 0 end) 'F178',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=179 then r.nilai else 0 end) 'F179',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1710 then r.nilai else 0 end) 'F1710',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1711 then r.nilai else 0 end) 'F1711',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1712 then r.nilai else 0 end) 'F1712' ,
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1713 then r.nilai else 0 end) 'F1713',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1714 then r.nilai else 0 end) 'F1714',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1715 then r.nilai else 0 end) 'F1715',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1716 then r.nilai else 0 end) 'F1716',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1717 then r.nilai else 0 end) 'F1717',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1718 then r.nilai else 0 end) 'F1718',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1719 then r.nilai else 0 end) 'F1719',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1720 then r.nilai else 0 end) 'F1720',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1721 then r.nilai else 0 end) 'F1721',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1722 then r.nilai else 0 end) 'F1722' ,
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1723 then r.nilai else 0 end) 'F1723',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1724 then r.nilai else 0 end) 'F1724',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1725 then r.nilai else 0 end) 'F1725' ,
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1726 then r.nilai else 0 end) 'F1726',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1727 then r.nilai else 0 end) 'F1727',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1728 then r.nilai else 0 end) 'F1728',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1729 then r.nilai else 0 end) 'F1729',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1730 then r.nilai else 0 end) 'F1730',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1731 then r.nilai else 0 end) 'F1731',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1732 then r.nilai else 0 end) 'F1732',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1733 then r.nilai else 0 end) 'F1733',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1734 then r.nilai else 0 end) 'F1734',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1735 then r.nilai else 0 end) 'F1735',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1736 then r.nilai else 0 end) 'F1736',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)='1737' then r.nilai else 0 end) 'F1737',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)='1738' then r.nilai else 0 end) 'F1738',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)='1737A' then r.nilai else 0 end) 'F1737A',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)='1738A' then r.nilai else 0 end) 'F1738A',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1739 then r.nilai else 0 end) 'F1739',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1740 then r.nilai else 0 end) 'F1740',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1741 then r.nilai else 0 end) 'F1741',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1742 then r.nilai else 0 end) 'F1742',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1743 then r.nilai else 0 end) 'F1743',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1744 then r.nilai else 0 end) 'F1744',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1745 then r.nilai else 0 end) 'F1745',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1746 then r.nilai else 0 end) 'F1746',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1747 then r.nilai else 0 end) 'F1747',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1748 then r.nilai else 0 end) 'F1748',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1749 then r.nilai else 0 end) 'F1749',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1750 then r.nilai else 0 end) 'F1750',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1751 then r.nilai else 0 end) 'F1751',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1752 then r.nilai else 0 end) 'F1752',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1753 then r.nilai else 0 end) 'F1753',
    sum(case when concat(r.kode_kuis,r.kode_pilihan)=1754 then r.nilai else 0 end) 'F1754',
    count(*) as total,
    r.CreatedDate as Date
    FROM responden r INNER JOIN biodata b ON b.id_biodata=r.id_biodata 
    where r.IsDeleted = 0 and b.IsDeleted = 0 ".$name." GROUP BY r.id_biodata";
    if(!empty($name)){
        return $this->db->query($qry);
    } else {
        return $this->db->query($qry)->result();
    }

    }

}