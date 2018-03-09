<?php

if (!defined('BASEPATH'))

    exit('No direct script access allowed');


class Kuis extends CI_Controller

{

    function __construct()

    {

        parent::__construct();

        $this->auth->cek_auth();
        $this->settingvalue_library->production();
        $this->load->model('Crud_model');
        $this->load->library('datatables');
        $this->load->model('Respon_model');      
        $this->load->model('Kuis_model'); 
    }

    public function index()
    {
        $this->auth->cek_akses('UCACJAYA');
        $this->template->load('template','kuis/kuis_list');
    }

    public function All()
    {
        $this->template->load('template','kuis/kuis_list');
    }

    function json() {
        header('Content-Type: application/json');
        echo $this->Kuis_model->json();
    }

    public function edit($id)
    {
        if($this->session->userdata('id_bio')==$id OR $this->session->userdata('level')=="UCACJAYA"){

            $row = $this->Biodata_model->respon("AND b.id_biodata= ".$id)->row();

             if ($row) {

                $data = array(

            'id' => set_value('id', $row->id_biodata),

            'nama' => set_value('nama', $row->nama),

            'nim' => set_value('nim', $row->nim),

            'no_hp'=> set_value('no_hp', $row->no_hp),

            'email'=> set_value('email', $row->email),

            'thn'=> set_value('thn', $row->tahun_lulus),

            'button' => 'Simpan',

            'action' => site_url('kuis/update_action'),

            'list' => $this->Kuis_model->get_dinamis('t_pilihan'),

            'f21' => set_value('f21', $row->F21),'f22' => set_value('f22', $row->F22),

            'f24' => set_value('f24', $row->F24),'f25' => set_value('f25', $row->F25),

            'f26' => set_value('f26', $row->F26),'f27' => set_value('f27', $row->F27),

            'f23' => set_value('f23', $row->F23),

            'f31' => set_value('f31', $row->F31), 'nilai'=> set_value('nilai', $row->F31),

            'f32' => set_value('f32', $row->F32), 'nilai1'=> set_value('nilai1', $row->F32),

            'f33' => set_value('f33', $row->F33), 'f41' => set_value('f31', $row->F41),

            'nilai2'=> set_value('nilai1', $row->F51), 'nilai3'=> set_value('nilai', $row->F53),

            'f42' => set_value('f42', $row->F42),'f43' => set_value('f43', $row->F43),

            'f44' => set_value('f44', $row->F44),'f45' => set_value('f45', $row->F45),

            'f46' => set_value('f46', $row->F46),'f47' => set_value('f47', $row->F47),

            'f48' => set_value('f48', $row->F48),'f49' => set_value('f49', $row->F49),

            'f410' => set_value('f410', $row->F410),'f411' => set_value('f411', $row->F411),

            'f412' => set_value('f412', $row->F412),'f413' => set_value('f413', $row->F413),

            'f414' => set_value('f414', $row->F414), 'f51' => set_value('f51', $row->F51),

            'f53' => set_value('f53', $row->F53),'nilai6' => set_value('nilai6', $row->F61),

            'nilai7' => set_value('nilai7', $row->F71),'nilai7a' => set_value('nilai7a', $row->F7a1),

            'f81'=> set_value('f81',$row->F81),'f82' => set_value('f82', $row->F82),

            'f91' => set_value('f91', $row->F91),'f92' => set_value('f92', $row->F92),

            'f93' => set_value('f93', $row->F93), 'f94' => set_value('f94', $row->F94),

            'f95' => set_value('f95', $row->F95),'f101' => set_value('f101', $row->F101),

            'f102' => set_value('f102', $row->F102),'f103' => set_value('f103', $row->F103),

            'f104' => set_value('f104', $row->F104),'f105' => set_value('f105', $row->F105),

            'f111' => set_value('f111', $row->F111),'f112' => set_value('f112', $row->F112),

            'f113' => set_value('f113', $row->F113),'f114' => set_value('f114', $row->F114),

            'f115'=> set_value('f115',$row->F115),'f12' => set_value('f12', $row->F12),

            'f131' => set_value('f131', $row->F131),'f132' => set_value('f132', $row->F132),

            'f133' => set_value('f133', $row->F133),'f141' => set_value('f141', $row->F141),

            'f142' => set_value('f142', $row->F142),'f143' => set_value('f143', $row->F143),

            'f144' => set_value('f144', $row->F144),'f145' => set_value('f145', $row->F145),

            'f151' => set_value('f151', $row->F151),'f152' => set_value('f152', $row->F152),

            'f153' => set_value('f153', $row->F153),'f154' => set_value('f154', $row->F154),

            'f161' => set_value('f161', $row->F161),'f162' => set_value('f162', $row->F162),

            'f163' => set_value('f163', $row->F163),'f164' => set_value('f164', $row->F164),

            'f165' => set_value('f165', $row->F165),

            'f166' => set_value('f166', $row->F166), 'f167' => set_value('f167', $row->F167),

            'f168' => set_value('f168', $row->F168),'f169' => set_value('f169', $row->F169),

            'f1610' => set_value('f1610', $row->F1610),'f1611' => set_value('f1611', $row->F1611),

            'f1612' => set_value('f1612', $row->F1612),'f1613' => set_value('f1613', $row->F1613),

            'f171'=> set_value('f171',$row->F171),'f172' => set_value('f172', $row->F172),

            'f173' => set_value('f173', $row->F173),'f174' => set_value('f174', $row->F174),

            'f175' => set_value('f175', $row->F175), 'f176' => set_value('f176', $row->F176),

            'f177' => set_value('f177', $row->F177),'f178' => set_value('f178', $row->F178),

            'f179' => set_value('f179', $row->F179),'f1710' => set_value('f1710', $row->F1710),

            'f1711' => set_value('f1711', $row->F1711),'f1711' => set_value('f1711', $row->F1711),

            'f1712' => set_value('f1712', $row->F1712),'f1713' => set_value('f1713', $row->F1713),

            'f1714' => set_value('f1714', $row->F1714),'f1715' => set_value('f1715', $row->F1715),

            'f1716'=> set_value('f1716',$row->F1716),'f1717' => set_value('f1717', $row->F1717),

            'f1718' => set_value('f1718', $row->F1718),'f1719' => set_value('f1719', $row->F1719),

            'f1720' => set_value('f1720', $row->F1720),'f1721' => set_value('f1721', $row->F1721),

            'f1722' => set_value('f1722', $row->F1722),'f1723' => set_value('f1723', $row->F1723),

            'f1724' => set_value('f1724', $row->F1724),'f1725' => set_value('f1725', $row->F1725),

            'f1726' => set_value('f1726', $row->F1726),'f1727' => set_value('f1727', $row->F1727),

            'f1728' => set_value('f1728', $row->F1728),'f1729' => set_value('f1729', $row->F1729),

            'f1730' => set_value('f1730', $row->F1730),'f1731' => set_value('f1731', $row->F1731),

            'f1732' => set_value('f1732', $row->F1732),'f1733' => set_value('f1733', $row->F1733),

            'f1735' => set_value('f1735', $row->F1735),'f1737a' => set_value('f1737a', $row->F1737A),

            'f1738a' => set_value('f1738a', $row->F1738A),'f1734' => set_value('f1734', $row->F1734),

            'f1736' => set_value('f1736', $row->F1736), 'f1737' => set_value('f1737', $row->F1737),

            'f1738' => set_value('f1738', $row->F1738),'f1739' => set_value('f1739', $row->F1739),

            'f1740' => set_value('f1740', $row->F1740),'f1741' => set_value('f1741', $row->F1741),

            'f1742' => set_value('f1742', $row->F1742),'f1743' => set_value('f1743', $row->F1743),

            'f1744' => set_value('f1744', $row->F1744),'f1745' => set_value('f1745', $row->F1745),

            'f1746' => set_value('f1746',$row->F1746),'f1747' => set_value('f1747', $row->F1747),

            'f1748' => set_value('f1748', $row->F1748),'f1749' => set_value('f1749', $row->F1749),

            'f1750' => set_value('f1750', $row->F1750),'f1751' => set_value('f1751', $row->F1751),

            'f1752' => set_value('f1752', $row->F1752),'f1753' => set_value('f1753', $row->F1753),

            'f1754' => set_value('f1754', $row->F1754)
            );

                $this->template->load('template','User/kuisioner', $data);

            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-block alert-warning alert-dismissable"> 

                    Data belum ada atau pertanyaan belum anda jawab mohon di cek ulang kembali.</div><br>');

                redirect(site_url('home'));

            }

        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-block alert-warning alert-dismissable">

            <i class="ace-icon fa fa-warning"></i> Anda tidak memiliki hak akses.</div><br>');

                redirect(site_url('home'));

        }

    }

    public function create()

    {
        $id = md5($this->session->userdata('id_bio'));
        $row = $this->Biodata_model->get_by_id($id);

         if ($row) {

        $data = array(

        'button' => 'Simpan',

        'action' => site_url('kuis/create_action'),

        'nim' => set_value('nim', $row->nim),

        'nama' => set_value('nama', $row->nama),

        'no_hp' => set_value('no_hp', $row->no_hp),

        'email' => set_value('email', $row->email),

        'thn' => set_value('thn', $row->tahun_lulus),

        'id' => set_value('id', $row->id_biodata),

        'list' => $this->Kuis_model->get_dinamis('t_pilihan')

        );

            $this->template->load('template','User/kuisioner', $data);

        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-block alert-warning alert-dismissable"> 

                Data tidak ada atau pertanyaan belum anda jawab mohon di cek ulang kembali.</div><br>');

            redirect(site_url('home'));

        }

    }

    public function create_action() //fungsi validasi sebelum ditambah data
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
        	$this->session->set_flashdata('error', '<div class="alert alert-block alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;</button>Mohon lengkapi data kuisioner, ada yang belum terisi. Silahkan cek kembali</div>');
            $this->create(md5($this->input->post('id', TRUE)));
        } else {

            $Date = date("Y-m-d H:i:s");

            $key = 'id_biodata';

            $id = $this->input->post('id',TRUE);

            $this->Respon_model->clear($id, $key);

            $data_bio = array(

                'nama' => $this->input->post('nama',TRUE),

                'nim' => $this->input->post('nim',TRUE),

                'no_hp' => $this->input->post('no_hp',TRUE),

                'email' => $this->input->post('email',TRUE),

                'tahun_lulus'=>$this->input->post('thn',TRUE)

            );
            
            $this->Crud_model->update('id_biodata', $id, $data_bio, 'biodata');

            $f3 = $this->input->post('3',TRUE);

            $t3 = explode("-",$f3);



            if($t3[1] == "01") {

                $nilai = $this->input->post('nilai', TRUE) != null ? $this->input->post('nilai', TRUE) : "1";

            } elseif ($t3[1] == '02') {

                $nilai = $this->input->post('nilai1', TRUE) != null ? $this->input->post('nilai1', TRUE)  : "1";

            } else {

                $nilai = '1';

            }


            $f8 = $this->input->post('8',TRUE);

            $t8 = explode("-", $f8);
            
            $f4 = $this->input->post('4',TRUE);
                    
            $f5 = $this->input->post('5',TRUE);

            $t5 = explode("-", $f5);

            if($t5[1] == '01'){

                $nilai5 = $this->input->post('nilai2', TRUE) != null ? $this->input->post('nilai2', TRUE) : "1";

            } else {

                $nilai5 = $this->input->post('nilai3', TRUE) != null ? $this->input->post('nilai3', TRUE) : "1";
            }

            $f6 = $this->input->post('6',TRUE);

            $t6 = explode("-", $f6);

            $nilai6 = $this->input->post('nilai6',TRUE);
            
            $f7 = $this->input->post('7',TRUE);

            $t7 = explode("-", $f7);

            $nilai7 = $this->input->post('nilai7',TRUE);
            
            $f7a = $this->input->post('7a',TRUE);

            $t7a = explode("-", $f7a);

            $nilai7a = $this->input->post('nilai7a',TRUE);

            $f9 = $this->input->post('9',TRUE);

            $f1737A = $this->input->post('1737A',TRUE);
            $kode1737A = $this->input->post('kode1737A',TRUE);
            $pilihan1737A = $this->input->post('pilihan1737A',TRUE);

            $f1738A = $this->input->post('1738A',TRUE);
            $kode1738A = $this->input->post('kode1738A',TRUE);
            $pilihan1738A = $this->input->post('pilihan1738A',TRUE);

                    #region INSERT
                    //--------  INSERT   --------------//
            for ($i=1; $i < 8 ; $i++) { // F2
                $value = $this->input->post('2'.$i, TRUE);
                if($value != null){
                $data = array(
                    'kode_kuis' =>'2',
                    'kode_pilihan' => $i, 
                    'nilai' => $value, 'id_biodata' => $id,
                    'CreatedDate' => $Date);

                $this->Crud_model->insert("responden", $data);
                }
            }

            if($t3[0] != null && $t3[1] != null){
                $a3 = array('kode_kuis' => $t3[0],'kode_pilihan' => $t3[1],'nilai' => $nilai,'id_biodata' => $id, 'CreatedDate'=>$Date);
                $this->Crud_model->insert("responden", $a3);
            }
                    
            if($f4 != null){
                foreach ($f4 as $key4 => $val) {
                    $t4 = explode("-", $f4[$key4]);
                        if($t4[0] != null && $t4[1] != null){
                            $a4 = array(
                                'kode_kuis' => $t4[0],
                                'kode_pilihan' => $t4[1],
                                'nilai' => '1',
                                'id_biodata' => $id,
                                'CreatedDate'=> $Date
                                );
                            $this->Crud_model->insert('responden', $a4);
                            }
                        }
                    }

            if($t5[0] != null && $t5[1] != null){
                $a5 = array('kode_kuis' => $t5[0],'kode_pilihan' => $t5[1],'nilai' => $nilai5,'id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a5);
            }
            
            if($nilai6 != null && $nilai6 > 0){
                $a6 = array('kode_kuis' => $t6[0],'kode_pilihan' => $t6[1],'nilai' => $nilai6,'id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a6);
            }

            if($nilai7 != null && $nilai7 > 0){
                $a7 = array('kode_kuis' => $t7[0],'kode_pilihan' => $t7[1],'nilai' => $nilai7,'id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a7);
            }
                    
            if($nilai7a != null && $nilai7a > 0){
                $a7a = array('kode_kuis' => $t7a[0],'kode_pilihan' => $t7a[1],'nilai' => $nilai7a,'id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a7a);
            }
                    
            if($t8[0] != null && $t8[1] != null){
                $a8 = array('kode_kuis' => $t8[0],'kode_pilihan' => $t8[1],'nilai' => '1','id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a8);
            }
            
            if($f9 != null){
                foreach ($f9 as $key9 => $val) {
                    $t9 = explode("-", $f9[$key9]);
                        if($t9 != null ) {
                            $a9 = array(
                                    'kode_kuis' => $t9[0],
                                    'kode_pilihan' => $t9[1],
                                    'nilai' => '1',
                                    'id_biodata' => $id,
                                    'CreatedDate' => $Date
                                    );
                            $this->Crud_model->insert("responden",$a9);
                        }
                    }
            }
                        #F-10 sampai F-16
            for ($i=0; $i < 7; $i++) { //F11-16
                $value = $this->input->post('1'.$i, TRUE);

                if($value != null && $i != 3 && $i != 6){
                $val = explode("-", $value);
                $data = array('kode_kuis' => $val[0],
                                'kode_pilihan' => $val[1],
                                'nilai' => '1',
                                'id_biodata' => $id,
                                'CreatedDate' => $Date);
                        $this->Crud_model->insert("responden", $data);
                }
                if($i == 3 && $value != null){
                    foreach ($value as $key13 => $val) {

                    $t13 = explode("-", $value[$key13]);
                    $nilaiF13 = $this->input->post('nilai13', TRUE)[$key13] >= 2 ? $this->input->post('nilai13', TRUE)[$key13]  : 0;
                        if($nilaiF13 > 1){
                            $a13 = array(
                                'kode_kuis' => $t13[0],
                                'kode_pilihan' => $t13[1],
                                'nilai' => $nilaiF13,
                                'id_biodata' => $id,
                                'CreatedDate' => $Date
                                );
                            $this->Crud_model->insert('responden',$a13);
                        }
                    }
                }

                if($i == 6 && $value != null){
                    foreach ($value as $key16 => $val) {

                        $t16 = explode("-", $value[$key16]);
                        if($t16[0] != null && $t16[1] != null){
                            $a16 = array(
                                'kode_kuis' => $t16[0],
                                'kode_pilihan' => $t16[1],
                                'nilai' => '1',
                                'id_biodata' => $id,
                                'CreatedDate' => $Date
                                );
                        $this->Crud_model->insert("responden",$a16);
                        }
                    }
                }
            }

            for ($i=1; $i < 55; $i++) { //F17
                $f = $this->input->post('pilihan17'.$i, TRUE);
                $value = $this->input->post('17'.$i, TRUE);
                $kode = $this->input->post('kode17'.$i,TRUE);
                if($value != null){
                    $data = array(
                            'kode_kuis' =>$kode,
                            'kode_pilihan' =>$f, 
                            'nilai' => $value, 'id_biodata' => $id,
                            'CreatedDate' => $Date);

                    $this->Crud_model->insert("responden", $data);
                }
            }

            if($f1737A != null){
                $data = array('kode_kuis' => $kode1737A,
                                    'kode_pilihan' => $pilihan1737A, 
                                    'nilai' => $f1737A,  
                                    'id_biodata' => $id,
                                    'CreatedDate' => $Date);
                $this->Crud_model->insert("responden", $data);
            }

            if($f1738A != null){
                $data = array('kode_kuis' => $kode1738A,
                                    'kode_pilihan' => $pilihan1738A, 
                                    'nilai' => $f1738A,  
                                    'id_biodata' => $id,
                                    'CreatedDate' => $Date);
                $this->Crud_model->insert("responden", $data);
            }

                        #endregion 
            $this->session->set_flashdata('message', '<h2><div class="alert alert-block alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;</button>Terimakasih telah mengisi kuesioner Tracer Study Universitas Semarang Carrer and Alumni Center </div></h2><input type="hidden" id="message" value="2" />');

            redirect(site_url('home'));

        }
    }

     public function update_action() //fungsi validasi sebelum ditambah data
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', '<div class="alert alert-block alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;</button>Mohon lengkapi data kuisioner, ada yang belum terisi. Silahkan cek kembali</div>');
            $this->edit($this->input->post('id', TRUE));
        } else {


            $Date = date("Y-m-d H:i:s");

            $key = 'id_biodata';

            $id = $this->input->post('id',TRUE);
            $data_bio = array(

                'nama' => $this->input->post('nama',TRUE),

                'nim' => $this->input->post('nim',TRUE),

                'no_hp' => $this->input->post('no_hp',TRUE),

                'email' => $this->input->post('email',TRUE),

                'tahun_lulus'=>$this->input->post('thn',TRUE)

            );

            $this->Respon_model->clear($id, $key);
            
            $this->Crud_model->update('id_biodata', $id, $data_bio, 'biodata');

            $f3 = $this->input->post('3',TRUE);

            $t3 = explode("-",$f3);



            if($t3[1] == "01") {

                $nilai = $this->input->post('nilai', TRUE) != null ? $this->input->post('nilai', TRUE) : "1";

            } elseif ($t3[1] == '02') {

                $nilai = $this->input->post('nilai1', TRUE) != null ? $this->input->post('nilai1', TRUE)  : "1";

            } else {

                $nilai = '1';

            }


            $f8 = $this->input->post('8',TRUE);

            $t8 = explode("-", $f8);
            
            $f4 = $this->input->post('4',TRUE);
                    
            $f5 = $this->input->post('5',TRUE);

            $t5 = explode("-", $f5);

            if($t5[1] == '01'){

                $nilai5 = $this->input->post('nilai2', TRUE) != null ? $this->input->post('nilai2', TRUE) : "1";

            } else {

                $nilai5 = $this->input->post('nilai3', TRUE) != null ? $this->input->post('nilai3', TRUE) : "1";
            }

            $f6 = $this->input->post('6',TRUE);

            $t6 = explode("-", $f6);

            $nilai6 = $this->input->post('nilai6',TRUE);
            
            $f7 = $this->input->post('7',TRUE);

            $t7 = explode("-", $f7);

            $nilai7 = $this->input->post('nilai7',TRUE);
            
            $f7a = $this->input->post('7a',TRUE);

            $t7a = explode("-", $f7a);

            $nilai7a = $this->input->post('nilai7a',TRUE);

            $f9 = $this->input->post('9',TRUE);

            $f1737A = $this->input->post('1737A',TRUE);
            $kode1737A = $this->input->post('kode1737A',TRUE);
            $pilihan1737A = $this->input->post('pilihan1737A',TRUE);

            $f1738A = $this->input->post('1738A',TRUE);
            $kode1738A = $this->input->post('kode1738A',TRUE);
            $pilihan1738A = $this->input->post('pilihan1738A',TRUE);

                    #region INSERT
                    //--------  INSERT   --------------//
            for ($i=1; $i < 8 ; $i++) { // F2
                $value = $this->input->post('2'.$i, TRUE);
                if($value != null){
                $data = array(
                    'kode_kuis' =>'2',
                    'kode_pilihan' => $i, 
                    'nilai' => $value, 'id_biodata' => $id,
                    'CreatedDate' => $Date);

                $this->Crud_model->insert("responden", $data);
                }
            }

            if($t3 != null){
                $a3 = array('kode_kuis' => $t3[0],'kode_pilihan' => $t3[1],'nilai' => $nilai,'id_biodata' => $id, 'CreatedDate'=>$Date);
                $this->Crud_model->insert("responden", $a3);
            }
                    
            if($f4 != null){
                foreach ($f4 as $key4 => $val) {
                    $t4 = explode("-", $f4[$key4]);
                        if($t4[0] != null && $t4[1] != null){
                            $a4 = array(
                                'kode_kuis' => $t4[0],
                                'kode_pilihan' => $t4[1],
                                'nilai' => '1',
                                'id_biodata' => $id,
                                'CreatedDate'=> $Date
                                );
                            $this->Crud_model->insert('responden', $a4);
                            }
                        }
                    }
            if($t3[1] == 3){
                $this->_rulesF5();

                if ($this->form_validation->run() == FALSE) {
                    $this->session->set_flashdata('error', '<div class="alert alert-block alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                            &times;</button>Mohon lengkapi data kuisioner, ada yang belum terisi. Silahkan cek kembali</div>');
                    $this->edit($this->input->post('id', TRUE));
                }
                $a5 = array('kode_kuis' => $t5[0],'kode_pilihan' => $t5[1],'nilai' => $nilai5,'id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a5);
            }

            if($nilai6 != null && $nilai6 > 0){
                $a6 = array('kode_kuis' => $t6[0],'kode_pilihan' => $t6[1],'nilai' => $nilai6,'id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a6);
            }

            if($nilai7 != null && $nilai7 > 0){
                $a7 = array('kode_kuis' => $t7[0],'kode_pilihan' => $t7[1],'nilai' => $nilai7,'id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a7);
            }
                    
            if($nilai7a != null && $nilai7a > 0){
                $a7a = array('kode_kuis' => $t7a[0],'kode_pilihan' => $t7a[1],'nilai' => $nilai7a,'id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a7a);
            }
                    
            if($t8 != null){
                $a8 = array('kode_kuis' => $t8[0],'kode_pilihan' => $t8[1],'nilai' => '1','id_biodata' => $id, 'CreatedDate'=> $Date);
                $this->Crud_model->insert("responden", $a8);
            }
            
            if($t8[1] == 2){
                $this->_rulesF910();

                if ($this->form_validation->run() == FALSE) {
                    $this->session->set_flashdata('error', '<div class="alert alert-block alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                            &times;</button>Mohon lengkapi data kuisioner, ada yang belum terisi. Silahkan cek kembali</div>');
                    $this->edit($this->input->post('id', TRUE));
                }
                foreach ($f9 as $key9 => $val) {
                    $t9 = explode("-", $f9[$key9]);
                        if($t9 != null ) {
                            $a9 = array(
                                    'kode_kuis' => $t9[0],
                                    'kode_pilihan' => $t9[1],
                                    'nilai' => '1',
                                    'id_biodata' => $id,
                                    'CreatedDate' => $Date
                                    );
                            $this->Crud_model->insert("responden",$a9);
                        }
                    }
                        #F-11 sampai F-16
            for ($i=0; $i < 7; $i++) { //F11-16
                $value = $this->input->post('1'.$i, TRUE);

                if($value != null && $i != 3 && $i != 6){
                $val = explode("-", $value);
                $data = array('kode_kuis' => $val[0],
                                'kode_pilihan' => $val[1],
                                'nilai' => '1',
                                'id_biodata' => $id,
                                'CreatedDate' => $Date);
                        $this->Crud_model->insert("responden", $data);
                }
                if($i == 3 && $value != null){
                    foreach ($value as $key13 => $val) {

                    $t13 = explode("-", $value[$key13]);
                    $nilaiF13 = $this->input->post('nilai13', TRUE)[$key13] >= 2 ? $this->input->post('nilai13', TRUE)[$key13]  : 0;
                        if($nilaiF13 > 1){
                            $a13 = array(
                                'kode_kuis' => $t13[0],
                                'kode_pilihan' => $t13[1],
                                'nilai' => $nilaiF13,
                                'id_biodata' => $id,
                                'CreatedDate' => $Date
                                );
                            $this->Crud_model->insert('responden',$a13);
                        }
                    }
                }

                if($i == 6 && $value != null){
                    foreach ($value as $key16 => $val) {

                        $t16 = explode("-", $value[$key16]);
                        if($t16 != null){
                            $a16 = array(
                                'kode_kuis' => $t16[0],
                                'kode_pilihan' => $t16[1],
                                'nilai' => '1',
                                'id_biodata' => $id,
                                'CreatedDate' => $Date
                                );
                        $this->Crud_model->insert("responden",$a16);
                        }
                    }
                }
            }

            for ($i=1; $i < 55; $i++) { //F17
                $f = $this->input->post('pilihan17'.$i, TRUE);
                $value = $this->input->post('17'.$i, TRUE);
                $kode = $this->input->post('kode17'.$i,TRUE);
                if($value != null){
                    $data = array(
                            'kode_kuis' =>$kode,
                            'kode_pilihan' =>$f, 
                            'nilai' => $value, 'id_biodata' => $id,
                            'CreatedDate' => $Date);

                    $this->Crud_model->insert("responden", $data);
                }
            }

            if($f1737A != null){
                $data = array('kode_kuis' => $kode1737A,
                                    'kode_pilihan' => $pilihan1737A, 
                                    'nilai' => $f1737A,  
                                    'id_biodata' => $id,
                                    'CreatedDate' => $Date);
                $this->Crud_model->insert("responden", $data);
            }

            if($f1738A != null){
                $data = array('kode_kuis' => $kode1738A,
                                    'kode_pilihan' => $pilihan1738A, 
                                    'nilai' => $f1738A,  
                                    'id_biodata' => $id,
                                    'CreatedDate' => $Date);
                $this->Crud_model->insert("responden", $data);
            }

                        #endregion 
            $this->session->set_flashdata('message', '<h2><div class="alert alert-block alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;</button>Terimakasih telah mengisi kuesioner Tracer Study Universitas Semarang Carrer and Alumni Center </div></h2><input type="hidden" id="message" value="2" />');

            redirect(site_url('home'));
        }
        }
    }

    public function hapus($pop)
    {
        $key = 'id_biodata';

        $this->Respon_model->clear($pop, $key);

         $this->session->set_flashdata('message', '<h2><div class="alert alert-block alert-danger alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">

                                    &times;</button>Data kuesioner telah dihapus dari database Tracer Study Universitas Semarang Carrer and Alumni Center </div></h2><br>');

            redirect(site_url('home'));

     }

    public function cetak_pdf($id)
    {

        $this->load->model('Respon_model');



        $user = $this->Biodata_model->get_by_id($id);

        $row = $this->Kuis_model->tabel('t_kuis');

        $respon = $this->Respon_model->cetak($id);

    

        $data = array(

            'kuis' => $row,

            'respon' => $respon,

            'start' => 0,

            'nama' => $user->nama,

            'nim' => $user->nim,

        );



        $html = $this->load->view('User/cetak_kuis', $data, true);

        $this->load->library('pdf');

        $pdf = $this->pdf->load();

        $pdf->WriteHTML($html);

        $pdf->Output('Kuesioner-'.$user->nim.'-'.date('dmY').'.pdf', 'D'); 

    }

    public function read($id)
    {

        $this->load->model('Respon_model');


        $dat = $this->Biodata_model->get_by_id($id);
        $row = $this->Kuis_model->tabel('t_kuis');
        $respon = $this->Respon_model->cetak($id);

        if($dat){
        $data = array(
            'kuis' => $row,
            'respon' => $respon,
            'nama' => $dat->nama,
            'nim' => $dat->nim,
        );
        $this->template->load('template','User/kuis_read', $data);
        } else {
        redirect(site_url("Home"));
        }
    }

    public function example()
    {

        $respon = $this->Biodata_model->respon();

        $data = array(
            'respon' => $respon,
            'action' => site_url('t_kuis/delete_all')
            );

        $this->template->load('template','t_kuis/t_kuis_read', $data);

    }

    public function _rules() 

    {

    $this->form_validation->set_rules('nim', 'nim', 'trim|required');

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');

    $this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');

    $this->form_validation->set_rules('email', 'email', 'trim|required');

    $this->form_validation->set_rules('thn', 'tahun lulus', 'trim|required');

    $this->form_validation->set_rules('21', 'F2-1, ', 'trim|required');

    $this->form_validation->set_rules('22', 'F2-2, ', 'trim|required');

    $this->form_validation->set_rules('23', 'F2-3, ', 'trim|required');

    $this->form_validation->set_rules('24', 'F2-4, ', 'trim|required');

    $this->form_validation->set_rules('25', 'F2-5, ', 'trim|required');

    $this->form_validation->set_rules('26', 'F2-6, ', 'trim|required');

    $this->form_validation->set_rules('27', 'F2-7, ', 'trim|required');


    $this->form_validation->set_rules('3', 'F3', 'trim|required');

    $this->form_validation->set_rules('8', 'F8', 'trim|required');


    $this->form_validation->set_rules('171', 'F17-1', 'trim|required');

    $this->form_validation->set_rules('172', 'F17-2', 'trim|required');

    $this->form_validation->set_rules('173', 'F17-3', 'trim|required');

    $this->form_validation->set_rules('174', 'F17-4', 'trim|required');

    $this->form_validation->set_rules('175', 'F17-5', 'trim|required');

    $this->form_validation->set_rules('176', 'F17-6', 'trim|required');

    $this->form_validation->set_rules('177', 'F17-7', 'trim|required');

    $this->form_validation->set_rules('178', 'F17-8', 'trim|required');

    $this->form_validation->set_rules('179', 'F17-9', 'trim|required');

    $this->form_validation->set_rules('1710', 'F17-10', 'trim|required');

    $this->form_validation->set_rules('1711', 'F17-11', 'trim|required');

    $this->form_validation->set_rules('1712', 'F17-12', 'trim|required');

    $this->form_validation->set_rules('1713', 'F17-13', 'trim|required');

    $this->form_validation->set_rules('1714', 'F17-14', 'trim|required');

    $this->form_validation->set_rules('1715', 'F17-15', 'trim|required');

    $this->form_validation->set_rules('1716', 'F17-16', 'trim|required');

    $this->form_validation->set_rules('1717', 'F17-17', 'trim|required');

    $this->form_validation->set_rules('1718', 'F17-18', 'trim|required');

    $this->form_validation->set_rules('1719', 'F17-19', 'trim|required');

    $this->form_validation->set_rules('1720', 'F17-20', 'trim|required');

    $this->form_validation->set_rules('1721', 'F17-21', 'trim|required');

    $this->form_validation->set_rules('1722', 'F17-22', 'trim|required');

    $this->form_validation->set_rules('1723', 'F17-23', 'trim|required');

    $this->form_validation->set_rules('1724', 'F17-24', 'trim|required');

    $this->form_validation->set_rules('1725', 'F17-25', 'trim|required');

    $this->form_validation->set_rules('1726', 'F17-26', 'trim|required');

    $this->form_validation->set_rules('1727', 'F17-27', 'trim|required');

    $this->form_validation->set_rules('1728', 'F17-28', 'trim|required');

    $this->form_validation->set_rules('1729', 'F17-29', 'trim|required');

    $this->form_validation->set_rules('1730', 'F17-30', 'trim|required');

    $this->form_validation->set_rules('1731', 'F17-31', 'trim|required');

    $this->form_validation->set_rules('1732', 'F17-32', 'trim|required');

    $this->form_validation->set_rules('1733', 'F17-33', 'trim|required');

    $this->form_validation->set_rules('1734', 'F17-34', 'trim|required');

    $this->form_validation->set_rules('1735', 'F17-35', 'trim|required');

    $this->form_validation->set_rules('1736', 'F17-36', 'trim|required');

    $this->form_validation->set_rules('1737A', 'F17-37A', 'trim|required');

    $this->form_validation->set_rules('1738A', 'F17-38A', 'trim|required');

    $this->form_validation->set_rules('1737', 'F17-37', 'trim|required');

    $this->form_validation->set_rules('1738', 'F17-38', 'trim|required');

    $this->form_validation->set_rules('1739', 'F17-39', 'trim|required');

    $this->form_validation->set_rules('1740', 'F17-40', 'trim|required');

    $this->form_validation->set_rules('1741', 'F17-41', 'trim|required');

    $this->form_validation->set_rules('1742', 'F17-42', 'trim|required');

    $this->form_validation->set_rules('1743', 'F17-43', 'trim|required');

    $this->form_validation->set_rules('1744', 'F17-44', 'trim|required');

    $this->form_validation->set_rules('1745', 'F17-45', 'trim|required');

    $this->form_validation->set_rules('1746', 'F17-46', 'trim|required');

    $this->form_validation->set_rules('1747', 'F17-47', 'trim|required');

     $this->form_validation->set_rules('1743', 'F17-48', 'trim|required');

    $this->form_validation->set_rules('1749', 'F17-49', 'trim|required');

    $this->form_validation->set_rules('1750', 'F17-50', 'trim|required');

    $this->form_validation->set_rules('1751', 'F17-51', 'trim|required');

    $this->form_validation->set_rules('1752', 'F17-52', 'trim|required');

    $this->form_validation->set_rules('1753', 'F17-53', 'trim|required');

    $this->form_validation->set_rules('1754', 'F17-54', 'trim|required');

    $this->form_validation->set_rules('id', 'id', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function _rulesF5()
    {
    $this->form_validation->set_rules('5', 'F5', 'trim|required');

    $this->form_validation->set_rules('id', 'id', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function _rulesF910()
    {
    $this->form_validation->set_rules('9', 'F9', 'trim|required');
    $this->form_validation->set_rules('10', 'F10', 'trim|required');

    $this->form_validation->set_rules('id', 'id', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
 }

