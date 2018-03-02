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

        $this->datatables->select("b.nama as nama, b.nim as nim, r.id_biodata as ID, b.no_hp as phone, b.tahun_lulus as tahun_lulus, DATE_FORMAT(r.CreatedDate, '%d %M %Y') as date");
        $this->datatables->from('responden r');
        $this->datatables->join('biodata b','b.id_biodata=r.id_biodata');
        $this->datatables->group_by(array('r.id_biodata','b.nim'));
        $this->datatables->where(array('b.level' => 'User','b.IsDeleted' => 0, 'r.IsDeleted' => 0));
        $this->db->order_by('b.id_biodata', 'desc');
        $this->datatables->add_column('view', '<div class="hidden-sm hidden-xs action-buttons">
                <a class="green" href="kuis.go/$1">
                    <i class="ace-icon fa fa-eye bigger-180"></i>
                </a>

                <a class="orange" href="edit-kuis//$2">
                    <i class="ace-icon fa fa-pencil bigger-180"></i>
                </a>

                <a class="grey" href="cetak.asp/$1">
                    <i class="ace-icon fa fa-file-o bigger-180"></i>
                </a>

                <a class="red" href="kuis/hapus/$2" onclick="javasciprt: return confirm(\'Kuis $3 akan dihapus ?\')">
                    <i class="ace-icon fa fa-trash-o bigger-180"></i>
                </a>
            </div>

            <div class="hidden-md hidden-lg">
                <div class="inline pos-rel">
                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                    </button>
                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                            <li>
                                <a href="kuis.go/$1" class="tooltip-info" data-rel="tooltip"
                                 title="View">
                                    <span class="green">
                                    <i class="ace-icon fa fa-eye bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="edit-kuis//$2" class="tooltip-success" data-rel="tooltip" 
                                title="Edit">
                                    <span class="orange">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="cetak.asp/$1" class="tooltip-success" data-rel="tooltip" 
                                title="Edit">
                                    <span class="blue">
                                    <i class="ace-icon fa fa-file-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="kuis/hapus/$2" class="tooltip-error" data-rel="tooltip" 
                                title="Delete" onclick="javasciprt: return confirm(\'Kuis $3 akan dihapus ?\')">
                                    <span class="red">
                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>', 'md5(ID),ID,nim');
        return $this->datatables->generate();

    }

    // get data by id

    function get_by_id($id)

    {

        $this->db->where('id_biodata', $id);

        return $this->db->get('responden')->row();

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