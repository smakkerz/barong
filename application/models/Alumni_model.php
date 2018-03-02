<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_model extends CI_Model {

	var $table = 'biodata';
	// var $column = array('nama','nim','p.strata'. .'p.jurusan','bekerja','no_hp');
	var $order = array('id' => 'desc');

	public function __construct()
	{
		parent::__construct();
		    $this->search = '';

	}

	public function json() {
	    $this->datatables->select("b.nama as nama, b.nim as nim, b.id_biodata as ID, b.bekerja as bekerja, b.no_hp as hp,
	    b.tahun_lulus as lulus, concat(p.strata, ' ',p.jurusan) as jurusan, DATE_FORMAT(b.CreatedDate, '%d %M %Y') as date");
	    $this->datatables->from('biodata b');
	    $this->datatables->join('programstudi p','b.id_progdi=p.id_progdi');
	    $this->datatables->where(array('b.level' => 'User','b.IsDeleted' => 0));
        //$this->db->order_by('b.id_biodata', 'desc');
        $this->datatables->add_column('view', '<div class="hidden-sm hidden-xs action-buttons">
                <a class="green" href="../profil.py/$1">
                    <i class="ace-icon fa fa-eye bigger-180"></i>
                </a>

                <a class="orange" href="Biodata/update/$1">
                    <i class="ace-icon fa fa-pencil bigger-180"></i>
                </a>
                <a class="grey" href="../reset.py/$1">
                    <i class="ace-icon fa fa-unlock bigger-180"></i>
                </a>

                <a class="red" href="Biodata/delete/$1" onclick="javasciprt: return confirm(\'$2 akan dihapus ?\')">
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
                                <a href="../profil.py/$1" class="tooltip-info" data-rel="tooltip"
                                 title="View">
                                    <span class="green">
                                    <i class="ace-icon fa fa-eye bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="Biodata/update/$1" class="tooltip-success" data-rel="tooltip" 
                                title="Edit">
                                    <span class="orange">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="../reset.py/$1" class="tooltip-success" data-rel="tooltip" 
                                title="Edit">
                                    <span class="blue">
                                    <i class="ace-icon fa fa-unlock bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="Biodata/delete/$1" class="tooltip-error" data-rel="tooltip" 
                                title="Delete" onclick="javasciprt: return confirm(\'$2 akan dihapus  ?\')">
                                    <span class="red">
                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>', 'md5(ID),nama');
        $this->datatables->add_column('checkbox', '<div class="center"><label class="pos-rel">
                    <input type="checkbox" class="ace" name="ace[]" value="$1" />
                    <span class="lbl"></span>
                </label></div>', 'ID');
        return $this->datatables->generate();
    }

}
