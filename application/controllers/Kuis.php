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
        $this->load->model('Identitas_model'); 
        $this->load->model('Crud_model');
        $this->load->model('Respon_model');      

    }



    public function index()
    {

        $data = array(
        'button' => 'Simpan',
        );

        $this->template->load('template','User/kuisioner', $data);

    }



    public function edit($id)

    {

        if($this->session->userdata('id_bio')==$id OR $this->session->userdata('level')=="UCACJAYA"){

            $row = $this->Biodata_model->respon("WHERE b.id_biodata=".$id);

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

            'list' => $this->Identitas_model->get_dinamis('t_pilihan'),

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



    public function create($id)

    {

        $row = $this->Biodata_model->get_by_id($id);

         if ($row) {

        $data = array(

        'button' => 'Simpan',

        'action' => site_url('kuis/update_action'),

        'nim' => set_value('nim', $row->nim),

        'nama' => set_value('nama', $row->nama),

        'no_hp' => set_value('no_hp', $row->no_hp),

        'email' => set_value('email', $row->email),

        'thn' => set_value('thn', $row->tahun_lulus),

        'id' => set_value('id', $row->id_biodata),

        'list' => $this->Identitas_model->get_dinamis('t_pilihan')

        );

            $this->template->load('template','User/kuisioner', $data);

        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-block alert-warning alert-dismissable"> 

                Data tidak ada atau pertanyaan belum anda jawab mohon di cek ulang kembali.</div><br>');

            redirect(site_url('home'));

        }

    }



    public function update_action() //fungsi validasi sebelum ditambah data

    {

        $this->_rules();

        if ($this->form_validation->run() == TRUE) {

            $key = 'id_biodata';

            $id = $this->input->post('id',TRUE);

            $data = array(

                'nama' => $this->input->post('nama',TRUE),

                'nim' => $this->input->post('nim',TRUE),

                'no_hp' => $this->input->post('no_hp',TRUE),

                'email' => $this->input->post('email',TRUE),

                'tahun_lulus'=>$this->input->post('thn',TRUE)

            );

            for ($i=0; $i < 8 ; $i++) { // F2
                $value = $this->input->post('2'.$i, TRUE);
                if($value != null){
                $data = array(
                    'kode_kuis' =>'2',
                    'kode_pilihan' => $i, 
                    'nilai' => $value, 'id_biodata' => $id,
                    'CreatedDate' => date("Y-m-d H:i:s"));

                $this->Crud_model->insert("responden", $data);
                }
            }

            $f1737A = $this->input->post('1737A',TRUE);

            $kode1737A = $this->input->post('kode1737A',TRUE);

            $pilihan1737A = $this->input->post('pilihan1737A',TRUE);



            $f1738A = $this->input->post('1738A',TRUE);

            $kode1738A = $this->input->post('kode1738A',TRUE);

            $pilihan1738A = $this->input->post('pilihan1738A',TRUE);
            if($f1737A != null){
            $data = array('kode_kuis' => $kode1737A,
                            'kode_pilihan' => $pilihan1737A, 
                            'nilai' => $f1737A,  
                            'id_biodata' => $id,
                            'CreatedDate' => date("Y-m-d H:i:s"));
            $this->Crud_model->insert("responden", $data);
            }

            if($f1738A != null){
            $data = array('kode_kuis' => $kode1738A,
                            'kode_pilihan' => $pilihan1738A, 
                            'nilai' => $f1738A,  
                            'id_biodata' => $id,
                            'CreatedDate' => date("Y-m-d H:i:s"));
            $this->Crud_model->insert("responden", $data);
            }

            for ($i=0; $i < 55; $i++) { //F17
                $f = $this->input->post('pilihan17'.$i, TRUE);
                $value = $this->input->post('17'.$i, TRUE);
                $kode = $this->input->post('kode17'.$i,TRUE);
                if($value != null){
                $data = array(
                    'kode_kuis' =>$kode,
                    'kode_pilihan' =>$f, 
                    'nilai' => $value, 'id_biodata' => $id,
                    'CreatedDate' => date("Y-m-d H:i:s") );

                $this->Crud_model->insert("responden", $data);
                }
            }

            $f3 = $this->input->post('3',TRUE);

            $t3 = explode("-",$f3);



            if($t3[1] == "01") {

                $this->form_validation->set_rules('nilai', 'Bulan', 'trim|required');

                if($this->form_validation->run() == FALSE){

                    $this->session->set_flashdata('message', 'Error kak');

                } else{

                $nilai = $this->input->post('nilai', TRUE);

                }

            } elseif ($t3[1] == '02') {

                $this->form_validation->set_rules('nilai1', 'Bulan', 'trim|required');

                if($this->form_validation->run() == FALSE){

                    $this->session->set_flashdata('message', 'Error kak');

                } else{

                $nilai = $this->input->post('nilai1', TRUE);

                }

            } else {

                $nilai = '1';

            }



            $f8 = $this->input->post('8',TRUE);

            $t8 = explode("-", $f8);



            $a3 = array('kode_kuis' => $t3[0],'kode_pilihan' => $t3[1],'nilai' => $nilai,'id_biodata' => $id);

            $a8 = array('kode_kuis' => $t8[0],'kode_pilihan' => $t8[1],'nilai' => '1','id_biodata' => $id);

            

            if($t3[1] != '03') {

                $this->rules1();  //validasi (4 - 5 - 6 - 7) -7a



                if($this->form_validation->run() == FALSE) {

                    $this->session->set_flashdata('error', '<div class="alert alert-block alert-danger alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">

                                    &times;</button> Mohon isi kuesioner dengan benar, ulangi kembali 12</div>');

                     redirect(site_url('kuis/create'));

                } else {

                    $f4 = $this->input->post('4',TRUE);

                    

                    $r4 = array();

                        foreach ($f4 as $key4 => $val) {

                            $t4 = explode("-", $f4[$key4]);

                            $r4[] = array(

                                'kode_kuis' => $t4[0],

                                'kode_pilihan' => $t4[1],

                                'nilai' => '1',

                                'id_biodata' => $id

                                );

                        }



                    $f5 = $this->input->post('5',TRUE);

                    $t5 = explode("-", $f5);

                    if($t5[1] == '01'){

                        $this->form_validation->set_rules('nilai2', 'Bulan', 'trim|required');

                        if($this->form_validation->run() == FALSE){

                            $this->session->set_flashdata('message', 'Error kak');

                        } else{

                        $nilai5 = $this->input->post('nilai2', TRUE);

                        }

                    } else {

                        $this->form_validation->set_rules('nilai3', 'Bulan', 'trim|required');

                        if($this->form_validation->run() == FALSE){

                            $this->session->set_flashdata('message', 'Error kak');

                        } else{

                        $nilai5 = $this->input->post('nilai3', TRUE);

                        }

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



                    $a5 = array('kode_kuis' => $t5[0],'kode_pilihan' => $t5[1],'nilai' => $nilai5,'id_biodata' => $id);

                    $a6 = array('kode_kuis' => $t6[0],'kode_pilihan' => $t6[1],'nilai' => $nilai6,'id_biodata' => $id);

                    $a7 = array('kode_kuis' => $t7[0],'kode_pilihan' => $t7[1],'nilai' => $nilai7,'id_biodata' => $id);

                    $a7a = array('kode_kuis' => $t7a[0],'kode_pilihan' => $t7a[1],'nilai' => $nilai7a,'id_biodata' => $id);



                    if($t8[1] == '01') { // validasi 3,4,5,6,7,7a,8,11,12,13,14,15,16

                        $this->rules3(); //validasi (11 - 12 - 13 - 14 - 15 - 16)



                        if ($this->form_validation->run() == FALSE) {



                            $this->session->set_flashdata('error', '<div class="alert alert-block alert-danger alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">

                                    &times;</button> Mohon isi kuesioner dengan benar, ulangi kembali 11</div>');

                            redirect(site_url('kuis/create'));

                        } else {

                        $f11 = $this->input->post('11',TRUE);

                        $t11 = explode("-",$f11);



                        $f12 = $this->input->post('12',TRUE);

                        $t12 = explode("-", $f12);



                        $f13 = $this->input->post('13',TRUE);

                        

                        $r13 = array();

                        foreach ($f13 as $key13 => $val) {

                            $t13 = explode("-", $f13[$key13]);

                            $nilai13 = $this->input->post('nilai13', TRUE)[$key13];

                            

                            $r13[] = array(

                                'kode_kuis' => $t13[0],

                                'kode_pilihan' => $t13[1],

                                'nilai' => $nilai13,

                                'id_biodata' => $id

                                );

                        }



                        $f14 = $this->input->post('14',TRUE);

                        $t14 = explode("-", $f14);



                        $f15 = $this->input->post('15',TRUE);

                        $t15 = explode("-", $f15);

                

                        $f16 = $this->input->post('16',TRUE);

                        

                        $r16 = array();

                        foreach ($f16 as $key16 => $val) {

                            $t16 = explode("-", $f16[$key16]);

                            $r16[] = array(

                                'kode_kuis' => $t16[0],

                                'kode_pilihan' => $t16[1],

                                'nilai' => '1',

                                'id_biodata' => $id

                                );

                        }

                        

                            

                            $a11 = array('kode_kuis' => $t11[0],'kode_pilihan' => $t11[1],'nilai' => '1','id_biodata' => $id);

                            $a12 = array('kode_kuis' => $t12[0],'kode_pilihan' => $t12[1],'nilai' => '1','id_biodata' => $id);

                            $a14 = array('kode_kuis' => $t14[0],'kode_pilihan' => $t14[1],'nilai' => '1','id_biodata' => $id);

                            $a15 = array('kode_kuis' => $t15[0],'kode_pilihan' => $t15[1],'nilai' => '1','id_biodata' => $id);



                            $this->Respon_model->clear($id, $key);

                            $multidata = array(

                                        $a3,

                                        $a5,

                                        $a6,

                                        $a7,

                                        $a7a,

                                        $a8,

                                        $a11,

                                        $a12,

                                        $a14,

                                        $a15,

                                        );

                            $this->Identitas_model->batch($multidata);

                            $this->Identitas_model->batch($r4);

                            $this->Identitas_model->batch($r13);

                            $this->Identitas_model->batch($r16);

                        }

                    } else { // validasi 3,4,5,6,7,7a,8,9,10

                             $this->rules2(); // validasi 9 - 10



                            if($this->form_validation->run() == FALSE) {

                               $this->session->set_flashdata('error', '<div class="alert alert-block alert-danger alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">

                                    &times;</button> Mohon isi kuesioner dengan benar, ulangi kembali a1</div>');

                            redirect(site_url('kuis/create'));

                            } else {

                            $f9 = $this->input->post('9',TRUE);

                            

                            $r9 = array();

                            foreach ($f9 as $key9 => $val) {

                                $t9 = explode("-", $f9[$key9]);

                                $r9[] = array(

                                    'kode_kuis' => $t9[0],

                                    'kode_pilihan' => $t9[1],

                                    'nilai' => '1',

                                    'id_biodata' => $id

                                    );

                            }

                        

                            $f10 = $this->input->post('10',TRUE);

                            $t10 = explode("-", $f10);

                            $a10 = array('kode_kuis' => $t10[0],'kode_pilihan' => $t10[1],'nilai' => '1','id_biodata' => $id);



                            $this->Respon_model->clear($id, $key);

                            $multidata = array(

                                        $a3,

                                        $a5,

                                        $a6,

                                        $a7,

                                        $a7a,

                                        $a8,

                                        $a10,

                                        );

                            $this->Identitas_model->batch($multidata);

                            $this->Identitas_model->batch($r4);

                            $this->Identitas_model->batch($r9);

                                }

                        }

                    } /* Batas f3 != '03'   */

                } elseif($t3[1] == '03') {

                    if($t8[1] == '01') {

                       $this->rules3(); //validasi (11 - 12 - 13 - 14 - 15 - 16)



                        if ($this->form_validation->run() == FALSE) {



                            $this->session->set_flashdata('error', '<div class="alert alert-block alert-danger alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">

                                    &times;</button> Mohon isi kuesioner dengan benar, ulangi kembali 11</div>');

                            redirect(site_url('kuis/create'));

                        } else {

                        $f11 = $this->input->post('11',TRUE);

                        $t11 = explode("-",$f11);



                        $f12 = $this->input->post('12',TRUE);

                        $t12 = explode("-", $f12);



                        $f13 = $this->input->post('13',TRUE);

                        

                        $r13 = array();

                        foreach ($f13 as $key13 => $val) {

                            $t13 = explode("-", $f13[$key13]);

                            $nilai13 = $this->input->post('nilai13', TRUE)[$key13];

                            

                            $r13[] = array(

                                'kode_kuis' => $t13[0],

                                'kode_pilihan' => $t13[1],

                                'nilai' => $nilai13,

                                'id_biodata' => $id

                                );

                        }



                        $f14 = $this->input->post('14',TRUE);

                        $t14 = explode("-", $f14);



                        $f15 = $this->input->post('15',TRUE);

                        $t15 = explode("-", $f15);

                

                        $f16 = $this->input->post('16',TRUE);

                        

                        $r16 = array();

                        foreach ($f16 as $key16 => $val) {

                            $t16 = explode("-", $f16[$key16]);

                            $r16[] = array(

                                'kode_kuis' => $t16[0],

                                'kode_pilihan' => $t16[1],

                                'nilai' => '1',

                                'id_biodata' => $id

                                );

                        }

                                              

                            $a11 = array('kode_kuis' => $t11[0],'kode_pilihan' => $t11[1],'nilai' => '1','id_biodata' => $id);

                            $a12 = array('kode_kuis' => $t12[0],'kode_pilihan' => $t12[1],'nilai' => '1','id_biodata' => $id);

                            $a14 = array('kode_kuis' => $t14[0],'kode_pilihan' => $t14[1],'nilai' => '1','id_biodata' => $id);

                            $a15 = array('kode_kuis' => $t15[0],'kode_pilihan' => $t15[1],'nilai' => '1','id_biodata' => $id);



                            $this->Respon_model->clear($id, $key);

                            $multidata = array(

                                        $a3,

                                        $a8,

                                        $a11,

                                        $a12,

                                        $a14,

                                        $a15,

                                        );

                            $this->Identitas_model->batch($multidata);

                            $this->Identitas_model->batch($r13);

                            $this->Identitas_model->batch($r16);

                        }

                    } else {

                             $this->rules2(); // validasi 9 - 10



                            if($this->form_validation->run() == FALSE) {

                               $this->session->set_flashdata('error', '<div class="alert alert-block alert-danger alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">

                                    &times;</button> Mohon isi kuesioner dengan benar, ulangi kembali a1</div>');

                            redirect(site_url('kuis/create'));

                            } else {

                            $f9 = $this->input->post('9',TRUE);

                            

                            $r9 = array();

                            foreach ($f9 as $key9 => $val) {

                                $t9 = explode("-", $f9[$key9]);

                                $r9[] = array(

                                    'kode_kuis' => $t9[0],

                                    'kode_pilihan' => $t9[1],

                                    'nilai' => '1',

                                    'id_biodata' => $id

                                    );

                            }

                        

                            $f10 = $this->input->post('10',TRUE);

                            $t10 = explode("-", $f10);



                            $a10 = array('kode_kuis' => $t10[0],'kode_pilihan' => $t10[1],'nilai' => '1','id_biodata' => $id);

        

                            $this->Respon_model->clear($id, $key);       

                            $this->Identitas_model->batch($r9);

                            $multidata = array(

                                        $a3,

                                        $a8,

                                        $a10,

                                        );

                            $this->Identitas_model->batch($multidata);

                                }

                            }

                        }

            $this->Biodata_model->update($id, $data);

            $this->Identitas_model->batch($multi);

            $this->session->set_flashdata('message', '<h2><div class="alert alert-block alert-success alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">

                                    &times;</button>Terimakasih telah mengisi kuesioner Tracer Study Universitas Semarang Carrer and Alumni Center </div></h2><br>');

            redirect(site_url('home'));

        } else {

              $this->edit($this->input->post('id', TRUE));

        }

    }



    public function cetak_pdf($id)

    {

        $this->load->model('Respon_model');



        $user = $this->Biodata_model->get_by_id($id);

        $row = $this->Identitas_model->tabel('t_kuis');

        $respon = $this->Respon_model->cetak($id);

    

        $data = array(

            'kuis' => $row,

            'respon' => $respon,

            'start' => 0,

            'nama' => $dat->nama,

            'nim' => $dat->nim,

        );



        $html = $this->load->view('User/cetak_laporan', $data, true);

        $this->load->library('pdf');

        $pdf = $this->pdf->load();

        $pdf->WriteHTML($html);

        $pdf->Output('Kuesioner-'.$user->nim.'.pdf', 'D'); 

    }



    public function _rules() 

    {

    $this->form_validation->set_rules('nim', 'nim', 'trim|required');

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');

    $this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');

    $this->form_validation->set_rules('email', 'email', 'trim|required');
    }
 }

