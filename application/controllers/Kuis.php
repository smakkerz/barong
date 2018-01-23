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

            'f1754' => set_value('f1754', $row->F1754),

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

        // $this->_rules();



        // if ($this->form_validation->run() == TRUE) {

            $key = 'id_biodata';

            $id = $this->input->post('id',TRUE);

            $data = array(

                'nama' => $this->input->post('nama',TRUE),

                'nim' => $this->input->post('nim',TRUE),

                'no_hp' => $this->input->post('no_hp',TRUE),

                'email' => $this->input->post('email',TRUE),

                'tahun_lulus'=>$this->input->post('thn',TRUE)

            );

            $n2 = '2';



            $f21 = $this->input->post('21',TRUE);



            $f22 = $this->input->post('22',TRUE);



            $f23 = $this->input->post('23',TRUE);



            $f24 = $this->input->post('24',TRUE);



            $f25 = $this->input->post('25',TRUE);



            $f26 = $this->input->post('26',TRUE);



            $f27 = $this->input->post('27',TRUE);



            $a21 = array('kode_kuis' => $n2,'kode_pilihan' => '1', 'nilai' => $f21, 'id_biodata' => $id);

            $a22 = array('kode_kuis' => $n2,'kode_pilihan' => '2', 'nilai' => $f22,'id_biodata' => $id);

            $a23 = array('kode_kuis' => $n2,'kode_pilihan' => '3', 'nilai' => $f23,'id_biodata' => $id);

            $a24 = array('kode_kuis' => $n2,'kode_pilihan' => '4', 'nilai' => $f24, 'id_biodata' => $id);

            $a25 = array('kode_kuis' => $n2,'kode_pilihan' => '5', 'nilai' => $f25,'id_biodata' => $id);

            $a26 = array('kode_kuis' => $n2,'kode_pilihan' => '6', 'nilai' => $f26, 'id_biodata' => $id);

            $a27 = array('kode_kuis' => $n2,'kode_pilihan' => '7', 'nilai' => $f27, 'id_biodata' => $id );

//--------------------------------------------------------------------------------------//

            $f171 = $this->input->post('171',TRUE);

            $kode171 = $this->input->post('kode171',TRUE);

            $pilihan171 = $this->input->post('pilihan171',TRUE);



            $f172 = $this->input->post('172',TRUE);

            $kode172 = $this->input->post('kode172',TRUE);

            $pilihan172 = $this->input->post('pilihan172',TRUE);



            $f173 = $this->input->post('173',TRUE);

            $kode173 = $this->input->post('kode173',TRUE);

            $pilihan173 = $this->input->post('pilihan173',TRUE);



            $f174 = $this->input->post('174',TRUE);

            $kode174 = $this->input->post('kode174',TRUE);

            $pilihan174 = $this->input->post('pilihan174',TRUE);



            $f175 = $this->input->post('175',TRUE);

            $kode175 = $this->input->post('kode175',TRUE);

            $pilihan175 = $this->input->post('pilihan175',TRUE);



            $f176 = $this->input->post('176',TRUE);

            $kode176 = $this->input->post('kode176',TRUE);

            $pilihan176 = $this->input->post('pilihan176',TRUE);



            $f177 = $this->input->post('177',TRUE);

            $kode177 = $this->input->post('kode177',TRUE);

            $pilihan177 = $this->input->post('pilihan177',TRUE);



            $f178 = $this->input->post('178',TRUE);

            $kode178 = $this->input->post('kode178',TRUE);

            $pilihan178 = $this->input->post('pilihan178',TRUE);



            $f179 = $this->input->post('179',TRUE);

            $kode179 = $this->input->post('kode179',TRUE);

            $pilihan179 = $this->input->post('pilihan179',TRUE);



            $f1710 = $this->input->post('1710',TRUE);

            $kode1710 = $this->input->post('kode1710',TRUE);

            $pilihan1710 = $this->input->post('pilihan1710',TRUE);



            $f1711 = $this->input->post('1711',TRUE);

            $kode1711 = $this->input->post('kode1711',TRUE);

            $pilihan1711 = $this->input->post('pilihan1711',TRUE);



            $f1712 = $this->input->post('1712',TRUE);

            $kode1712 = $this->input->post('kode1712',TRUE);

            $pilihan1712 = $this->input->post('pilihan1712',TRUE);



            $f1713 = $this->input->post('1713',TRUE);

            $kode1713 = $this->input->post('kode1713',TRUE);

            $pilihan1713 = $this->input->post('pilihan1713',TRUE);



            $f1714 = $this->input->post('1714',TRUE);

            $kode1714 = $this->input->post('kode1714',TRUE);

            $pilihan1714 = $this->input->post('pilihan1714',TRUE);



            $f1715 = $this->input->post('1715',TRUE);

            $kode1715 = $this->input->post('kode1715',TRUE);

            $pilihan1715 = $this->input->post('pilihan1715',TRUE);



            $f1716 = $this->input->post('1716',TRUE);

            $kode1716 = $this->input->post('kode1716',TRUE);

            $pilihan1716 = $this->input->post('pilihan1716',TRUE);



            $f1717 = $this->input->post('1717',TRUE);

            $kode1717 = $this->input->post('kode1717',TRUE);

            $pilihan1717 = $this->input->post('pilihan1717',TRUE);



            $f1718 = $this->input->post('1718',TRUE);

            $kode1718 = $this->input->post('kode1718',TRUE);

            $pilihan1718 = $this->input->post('pilihan1718',TRUE);



            $f1719 = $this->input->post('1719',TRUE);

            $kode1719 = $this->input->post('kode1719',TRUE);

            $pilihan1719 = $this->input->post('pilihan1719',TRUE);



            $f1720 = $this->input->post('1720',TRUE);

            $kode1720 = $this->input->post('kode1720',TRUE);

            $pilihan1720 = $this->input->post('pilihan1720',TRUE);



            $f1721 = $this->input->post('1721',TRUE);

            $kode1721 = $this->input->post('kode1721',TRUE);

            $pilihan1721 = $this->input->post('pilihan1721',TRUE);



            $f1722 = $this->input->post('1722',TRUE);

            $kode1722 = $this->input->post('kode1722',TRUE);

            $pilihan1722 = $this->input->post('pilihan1722',TRUE);



            $f1723 = $this->input->post('1723',TRUE);

            $kode1723 = $this->input->post('kode1723',TRUE);

            $pilihan1723 = $this->input->post('pilihan1723',TRUE);



            $f1724 = $this->input->post('1724',TRUE);

            $kode1724 = $this->input->post('kode1724',TRUE);

            $pilihan1724 = $this->input->post('pilihan1724',TRUE);



            $f1737A = $this->input->post('1737A',TRUE);

            $kode1737A = $this->input->post('kode1737A',TRUE);

            $pilihan1737A = $this->input->post('pilihan1737A',TRUE);



            $f1738A = $this->input->post('1738A',TRUE);

            $kode1738A = $this->input->post('kode1738A',TRUE);

            $pilihan1738A = $this->input->post('pilihan1738A',TRUE);



            $f1725 = $this->input->post('1725',TRUE);

            $kode1725 = $this->input->post('kode1725',TRUE);

            $pilihan1725 = $this->input->post('pilihan1725',TRUE);



            $f1726 = $this->input->post('1726',TRUE);

            $kode1726 = $this->input->post('kode1726',TRUE);

            $pilihan1726 = $this->input->post('pilihan1726',TRUE);



            $f1727 = $this->input->post('1727',TRUE);

            $kode1727 = $this->input->post('kode1727',TRUE);

            $pilihan1727 = $this->input->post('pilihan1727',TRUE);



            $f1728 = $this->input->post('1728',TRUE);

            $kode1728 = $this->input->post('kode1728',TRUE);

            $pilihan1728 = $this->input->post('pilihan1728',TRUE);



            $f1729 = $this->input->post('1729',TRUE);

            $kode1729 = $this->input->post('kode1729',TRUE);

            $pilihan1729 = $this->input->post('pilihan1729',TRUE);



            $f1730 = $this->input->post('1730',TRUE);

            $kode1730 = $this->input->post('kode1730',TRUE);

            $pilihan1730 = $this->input->post('pilihan1730',TRUE);



            $f1731 = $this->input->post('1731',TRUE);

            $kode1731 = $this->input->post('kode1731',TRUE);

            $pilihan1731 = $this->input->post('pilihan1731',TRUE);



            $f1732 = $this->input->post('1732',TRUE);

            $kode1732 = $this->input->post('kode1732',TRUE);

            $pilihan1732 = $this->input->post('pilihan1732',TRUE);



            $f1733 = $this->input->post('1733',TRUE);

            $kode1733 = $this->input->post('kode1733',TRUE);

            $pilihan1733 = $this->input->post('pilihan1733',TRUE);



            $f1734 = $this->input->post('1734',TRUE);

            $kode1734 = $this->input->post('kode1734',TRUE);

            $pilihan1734 = $this->input->post('pilihan1734',TRUE);



            $f1735 = $this->input->post('1735',TRUE);

            $kode1735 = $this->input->post('kode1735',TRUE);

            $pilihan1735 = $this->input->post('pilihan1735',TRUE);



            $f1736 = $this->input->post('1736',TRUE);

            $kode1736 = $this->input->post('kode1736',TRUE);

            $pilihan1736 = $this->input->post('pilihan1736',TRUE);



            $f1737 = $this->input->post('1737',TRUE);

            $kode1737 = $this->input->post('kode1737',TRUE);

            $pilihan1737 = $this->input->post('pilihan1737',TRUE);



            $f1738 = $this->input->post('1738',TRUE);

            $kode1738 = $this->input->post('kode1738',TRUE);

            $pilihan1738 = $this->input->post('pilihan1738',TRUE);



            $f1739 = $this->input->post('1739',TRUE);

            $kode1739 = $this->input->post('kode1739',TRUE);

            $pilihan1739 = $this->input->post('pilihan1739',TRUE);



            $f1740 = $this->input->post('1740',TRUE);

            $kode1740 = $this->input->post('kode1740',TRUE);

            $pilihan1740 = $this->input->post('pilihan1740',TRUE);



            $f1741 = $this->input->post('1741',TRUE);

            $kode1741 = $this->input->post('kode1741',TRUE);

            $pilihan1741 = $this->input->post('pilihan1741',TRUE);



            $f1742 = $this->input->post('1742',TRUE);

            $kode1742 = $this->input->post('kode1742',TRUE);

            $pilihan1742 = $this->input->post('pilihan1742',TRUE);



            $f1743 = $this->input->post('1743',TRUE);

            $kode1743 = $this->input->post('kode1743',TRUE);

            $pilihan1743 = $this->input->post('pilihan1743',TRUE);



            $f1744 = $this->input->post('1744',TRUE);

            $kode1744 = $this->input->post('kode1744',TRUE);

            $pilihan1744 = $this->input->post('pilihan1744',TRUE);



            $f1745 = $this->input->post('1745',TRUE);

            $kode1745 = $this->input->post('kode1745',TRUE);

            $pilihan1745 = $this->input->post('pilihan1745',TRUE);



            $f1746 = $this->input->post('1746',TRUE);

            $kode1746 = $this->input->post('kode1746',TRUE);

            $pilihan1746 = $this->input->post('pilihan1746',TRUE);



            $f1747 = $this->input->post('1747',TRUE);

            $kode1747 = $this->input->post('kode1747',TRUE);

            $pilihan1747 = $this->input->post('pilihan1747',TRUE);



            $f1748 = $this->input->post('1748',TRUE);

            $kode1748 = $this->input->post('kode1748',TRUE);

            $pilihan1748 = $this->input->post('pilihan1748',TRUE);



            $f1749 = $this->input->post('1749',TRUE);

            $kode1749 = $this->input->post('kode1749',TRUE);

            $pilihan1749 = $this->input->post('pilihan1749',TRUE);



            $f1750 = $this->input->post('1750',TRUE);

            $kode1750 = $this->input->post('kode1750',TRUE);

            $pilihan1750 = $this->input->post('pilihan1750',TRUE);



            $f1751 = $this->input->post('1751',TRUE);

            $kode1751 = $this->input->post('kode1751',TRUE);

            $pilihan1751 = $this->input->post('pilihan1751',TRUE);



            $f1752 = $this->input->post('1752',TRUE);

            $kode1752 = $this->input->post('kode1752',TRUE);

            $pilihan1752 = $this->input->post('pilihan1752',TRUE);



            $f1753 = $this->input->post('1753',TRUE);

            $kode1753 = $this->input->post('kode1753',TRUE);

            $pilihan1753 = $this->input->post('pilihan1753',TRUE);



            $f1754 = $this->input->post('1754',TRUE);

            $kode1754 = $this->input->post('kode1754',TRUE);

            $pilihan1754 = $this->input->post('pilihan1754',TRUE);



            $a171 = array('kode_kuis' => $kode171,'kode_pilihan' => $pilihan171, 'nilai' => $f171, 'id_biodata' => $id);

            $a172 = array('kode_kuis' => $kode172,'kode_pilihan' => $pilihan172, 'nilai' => $f172,'id_biodata' => $id);

            $a173 = array('kode_kuis' => $kode173,'kode_pilihan' => $pilihan173, 'nilai' => $f173,'id_biodata' => $id);

            $a174 = array('kode_kuis' => $kode174,'kode_pilihan' => $pilihan174, 'nilai' => $f174, 'id_biodata' => $id);

            $a175 = array('kode_kuis' => $kode175,'kode_pilihan' => $pilihan175, 'nilai' => $f175,'id_biodata' => $id);

            $a176 = array('kode_kuis' => $kode176,'kode_pilihan' => $pilihan176, 'nilai' => $f176, 'id_biodata' => $id);

            $a177 = array('kode_kuis' => $kode177,'kode_pilihan' => $pilihan177, 'nilai' => $f177, 'id_biodata' => $id );

            $a178 = array('kode_kuis' => $kode178,'kode_pilihan' => $pilihan178, 'nilai' => $f178, 'id_biodata' => $id);

            $a179 = array('kode_kuis' => $kode179,'kode_pilihan' => $pilihan179, 'nilai' => $f179,  'id_biodata' => $id);

            $a1710 = array('kode_kuis' => $kode1710,'kode_pilihan' => $pilihan1710, 'nilai' => $f1710,  'id_biodata' => $id);

            $a1711 = array('kode_kuis' => $kode1711,'kode_pilihan' => $pilihan1711, 'nilai' => $f1711, 'id_biodata' => $id);

            $a1712 = array('kode_kuis' => $kode1712,'kode_pilihan' => $pilihan1712, 'nilai' => $f1712,  'id_biodata' => $id);

            $a1713 = array('kode_kuis' => $kode1713,'kode_pilihan' => $pilihan1713, 'nilai' => $f1713, 'id_biodata' => $id);

            $a1714 = array('kode_kuis' => $kode1714,'kode_pilihan' => $pilihan1714, 'nilai' => $f1714,  'id_biodata' => $id);

            $a1715 = array('kode_kuis' => $kode1715,'kode_pilihan' => $pilihan1715, 'nilai' => $f1715,  'id_biodata' => $id);

            $a1716 = array('kode_kuis' => $kode1716,'kode_pilihan' => $pilihan1716, 'nilai' => $f1716, 'id_biodata' => $id);

            $a1717 = array('kode_kuis' => $kode1717,'kode_pilihan' => $pilihan1717, 'nilai' => $f1717,  'id_biodata' => $id);

            $a1718 = array('kode_kuis' => $kode1718,'kode_pilihan' => $pilihan1718, 'nilai' => $f1718, 'id_biodata' => $id);

            $a1719 = array('kode_kuis' => $kode1719,'kode_pilihan' => $pilihan1719, 'nilai' => $f1719, 'id_biodata' => $id);

            $a1720 = array('kode_kuis' => $kode1720,'kode_pilihan' => $pilihan1720, 'nilai' => $f1720, 'id_biodata' => $id);

            $a1721 = array('kode_kuis' => $kode1721,'kode_pilihan' => $pilihan1721, 'nilai' => $f1721,  'id_biodata' => $id);

            $a1722 = array('kode_kuis' => $kode1722,'kode_pilihan' => $pilihan1722, 'nilai' => $f1722,  'id_biodata' => $id);

            $a1723 = array('kode_kuis' => $kode1723,'kode_pilihan' => $pilihan1723, 'nilai' => $f1723,  'id_biodata' => $id);

            $a1724 = array('kode_kuis' => $kode1724,'kode_pilihan' => $pilihan1724, 'nilai' => $f1724, 'id_biodata' => $id);

            $a1725 = array('kode_kuis' => $kode1725,'kode_pilihan' => $pilihan1725, 'nilai' => $f1725, 'id_biodata' => $id);

            $a1726 = array('kode_kuis' => $kode1726,'kode_pilihan' => $pilihan1726, 'nilai' => $f1726, 'id_biodata' => $id);

            $a1727 = array('kode_kuis' => $kode1727,'kode_pilihan' => $pilihan1727, 'nilai' => $f1727, 'id_biodata' => $id);

            $a1728 = array('kode_kuis' => $kode1728,'kode_pilihan' => $pilihan1728, 'nilai' => $f1728,  'id_biodata' => $id);

            $a1729 = array('kode_kuis' => $kode1729,'kode_pilihan' => $pilihan1729, 'nilai' => $f1729,  'id_biodata' => $id);

            $a1730 = array('kode_kuis' => $kode1730,'kode_pilihan' => $pilihan1730, 'nilai' => $f1730, 'id_biodata' => $id);

            $a1731 = array('kode_kuis' => $kode1731,'kode_pilihan' => $pilihan1731, 'nilai' => $f1731, 'id_biodata' => $id);

            $a1732 = array('kode_kuis' => $kode1732,'kode_pilihan' => $pilihan1732, 'nilai' => $f1732,  'id_biodata' => $id);

            $a1733 = array('kode_kuis' => $kode1733,'kode_pilihan' => $pilihan1733, 'nilai' => $f1733, 'id_biodata' => $id);

            $a1734 = array('kode_kuis' => $kode1734,'kode_pilihan' => $pilihan1734, 'nilai' => $f1734,  'id_biodata' => $id);

            $a1735 = array('kode_kuis' => $kode1735,'kode_pilihan' => $pilihan1735, 'nilai' => $f1735,  'id_biodata' => $id);

            $a1736 = array('kode_kuis' => $kode1736,'kode_pilihan' => $pilihan1736, 'nilai' => $f1736,  'id_biodata' => $id);

            $a1737 = array('kode_kuis' => $kode1737,'kode_pilihan' => $pilihan1737, 'nilai' => $f1737,  'id_biodata' => $id); 

            $a1738 = array('kode_kuis' => $kode1738,'kode_pilihan' => $pilihan1738, 'nilai' => $f1738,  'id_biodata' => $id);

            $a1739 = array('kode_kuis' => $kode1739,'kode_pilihan' => $pilihan1739, 'nilai' => $f1739,  'id_biodata' => $id);

            $a1740 = array('kode_kuis' => $kode1740,'kode_pilihan' => $pilihan1740, 'nilai' => $f1740,  'id_biodata' => $id);

            $a1741 = array('kode_kuis' => $kode1741,'kode_pilihan' => $pilihan1741, 'nilai' => $f1741,  'id_biodata' => $id);

            $a1742 = array('kode_kuis' => $kode1742,'kode_pilihan' => $pilihan1742, 'nilai' => $f1742,  'id_biodata' => $id);

            $a1743 = array('kode_kuis' => $kode1743,'kode_pilihan' => $pilihan1743, 'nilai' => $f1743, 'id_biodata' => $id);

            $a1744 = array('kode_kuis' => $kode1744,'kode_pilihan' => $pilihan1744, 'nilai' => $f1744, 'id_biodata' => $id);

            $a1745 = array('kode_kuis' => $kode1745,'kode_pilihan' => $pilihan1745, 'nilai' => $f1745, 'id_biodata' => $id);

            $a1746 = array('kode_kuis' => $kode1746,'kode_pilihan' => $pilihan1746, 'nilai' => $f1746, 'id_biodata' => $id);

            $a1747 = array('kode_kuis' => $kode1747,'kode_pilihan' => $pilihan1747, 'nilai' => $f1747,  'id_biodata' => $id);

            $a1748 = array('kode_kuis' => $kode1748,'kode_pilihan' => $pilihan1748, 'nilai' => $f1748,  'id_biodata' => $id);

            $a1749 = array('kode_kuis' => $kode1749,'kode_pilihan' => $pilihan1749, 'nilai' => $f1749,  'id_biodata' => $id);

            $a1737A = array('kode_kuis' => $kode1737A,'kode_pilihan' => $pilihan1737A, 'nilai' => $f1737A,  'id_biodata' => $id);

            $a1738A = array('kode_kuis' => $kode1738A,'kode_pilihan' => $pilihan1738A, 'nilai' => $f1738A,  'id_biodata' => $id);

            $a1750 = array('kode_kuis' => $kode1750,'kode_pilihan' => $pilihan1750, 'nilai' => $f1750,  'id_biodata' => $id);

            $a1751 = array('kode_kuis' => $kode1751,'kode_pilihan' => $pilihan1751, 'nilai' => $f1751, 'id_biodata' => $id);

            $a1752 = array('kode_kuis' => $kode1752,'kode_pilihan' => $pilihan1752, 'nilai' => $f1752,  'id_biodata' => $id);

            $a1753 = array('kode_kuis' => $kode1753,'kode_pilihan' => $pilihan1753, 'nilai' => $f1753,  'id_biodata' => $id);

            $a1754 = array('kode_kuis' => $kode1754,'kode_pilihan' => $pilihan1754, 'nilai' => $f1754, 'id_biodata' => $id);



            $multi = array( $a21, $a22, $a23, $a24, $a25, $a26, $a27,

                $a171, $a172, $a173, $a174, $a175, $a176,

                $a177, $a178, $a179, $a1710, $a1711, $a1712,

                $a1713, $a1714, $a1715, $a1716, $a1717, $a1718,

                $a1719, $a1720, $a1721, $a1722, $a1723, $a1724,

                $a1725, $a1726, $a1727, $a1728, $a1729, $a1730,

                $a1731, $a1732, $a1733, $a1734, $a1735, $a1736,

                $a1737, $a1738, $a1737A, $a1738A, $a1739, $a1740, $a1741, $a1742,

                $a1743, $a1744, $a1745, $a1746, $a1747, $a1748,

                $a1749, $a1750, $a1751, $a1752, $a1753, $a1754,

                );



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

        // } else {

        //       $this->edit($this->input->post('id', TRUE));

        // }

    }



    public function cetak_pdf($id)

    {

        $this->load->model('Respon_model');



        $dat = $this->Biodata_model->get_by_id($id);

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

        $pdf->Output('Kuesioner-'.$dat->nim.'.pdf', 'D'); 

    }



    public function _rules() 

    {

    $this->form_validation->set_rules('nim', 'nim', 'trim|required');

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');

    $this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');

    $this->form_validation->set_rules('email', 'email', 'trim|required');



    // $this->form_validation->set_rules('21', 'F2-1', 'trim|required');

    // $this->form_validation->set_rules('22', 'F2-2', 'trim|required');

    // $this->form_validation->set_rules('23', 'F2-3', 'trim|required');

    // $this->form_validation->set_rules('24', 'F2-4', 'trim|required');

    // $this->form_validation->set_rules('25', 'F2-5', 'trim|required');

    // $this->form_validation->set_rules('26', 'F2-6', 'trim|required');

    // $this->form_validation->set_rules('27', 'F2-7', 'trim|required');



    // $this->form_validation->set_rules('3', 'F3', 'trim|required');

    // $this->form_validation->set_rules('8', 'F8', 'trim|required');



    // $this->form_validation->set_rules('171', 'F17-1', 'trim|required');

    // $this->form_validation->set_rules('172', 'F17-2', 'trim|required');

    // $this->form_validation->set_rules('173', 'F17-3', 'trim|required');

    // $this->form_validation->set_rules('174', 'F17-4', 'trim|required');

    // $this->form_validation->set_rules('175', 'F17-5', 'trim|required');

    // $this->form_validation->set_rules('176', 'F17-6', 'trim|required');

    // $this->form_validation->set_rules('177', 'F17-7', 'trim|required');

    // $this->form_validation->set_rules('178', 'F17-8', 'trim|required');

    // $this->form_validation->set_rules('179', 'F17-9', 'trim|required');

    // $this->form_validation->set_rules('1710', 'F17-10', 'trim|required');

    // $this->form_validation->set_rules('1711', 'F17-11', 'trim|required');

    // $this->form_validation->set_rules('1712', 'F17-12', 'trim|required');

    // $this->form_validation->set_rules('1713', 'F17-13', 'trim|required');

    // $this->form_validation->set_rules('1714', 'F17-14', 'trim|required');

    // $this->form_validation->set_rules('1715', 'F17-15', 'trim|required');

    // $this->form_validation->set_rules('1716', 'F17-16', 'trim|required');

    // $this->form_validation->set_rules('1717', 'F17-17', 'trim|required');

    // $this->form_validation->set_rules('1718', 'F17-18', 'trim|required');

    // $this->form_validation->set_rules('1719', 'F17-19', 'trim|required');

    // $this->form_validation->set_rules('1720', 'F17-20', 'trim|required');

    // $this->form_validation->set_rules('1721', 'F17-21', 'trim|required');

    // $this->form_validation->set_rules('1722', 'F17-22', 'trim|required');

    // $this->form_validation->set_rules('1723', 'F17-23', 'trim|required');

    // $this->form_validation->set_rules('1724', 'F17-24', 'trim|required');

    // $this->form_validation->set_rules('1725', 'F17-25', 'trim|required');

    // $this->form_validation->set_rules('1726', 'F17-26', 'trim|required');

    // $this->form_validation->set_rules('1727', 'F17-27', 'trim|required');

    // $this->form_validation->set_rules('1728', 'F17-28', 'trim|required');

    // $this->form_validation->set_rules('1729', 'F17-29', 'trim|required');

    // $this->form_validation->set_rules('1730', 'F17-30', 'trim|required');

    // $this->form_validation->set_rules('1731', 'F17-31', 'trim|required');

    // $this->form_validation->set_rules('1732', 'F17-32', 'trim|required');

    // $this->form_validation->set_rules('1733', 'F17-33', 'trim|required');

    // $this->form_validation->set_rules('1734', 'F17-34', 'trim|required');

    // $this->form_validation->set_rules('1735', 'F17-35', 'trim|required');

    // $this->form_validation->set_rules('1736', 'F17-36', 'trim|required');

    // $this->form_validation->set_rules('1737A', 'F17-37A', 'trim|required');

    // $this->form_validation->set_rules('1738A', 'F17-38A', 'trim|required');

    // $this->form_validation->set_rules('1737', 'F17-37', 'trim|required');

    // $this->form_validation->set_rules('1738', 'F17-38', 'trim|required');

    // $this->form_validation->set_rules('1739', 'F17-39', 'trim|required');

    // $this->form_validation->set_rules('1740', 'F17-40', 'trim|required');

    // $this->form_validation->set_rules('1741', 'F17-41', 'trim|required');

    // $this->form_validation->set_rules('1742', 'F17-42', 'trim|required');

    // $this->form_validation->set_rules('1743', 'F17-43', 'trim|required');

    // $this->form_validation->set_rules('1744', 'F17-44', 'trim|required');

    // $this->form_validation->set_rules('1745', 'F17-45', 'trim|required');

    // $this->form_validation->set_rules('1746', 'F17-46', 'trim|required');

    // $this->form_validation->set_rules('1747', 'F17-47', 'trim|required');

    //  $this->form_validation->set_rules('1743', 'F17-48', 'trim|required');

    // $this->form_validation->set_rules('1749', 'F17-49', 'trim|required');

    // $this->form_validation->set_rules('1750', 'F17-50', 'trim|required');

    // $this->form_validation->set_rules('1751', 'F17-51', 'trim|required');

    // $this->form_validation->set_rules('1752', 'F17-52', 'trim|required');

    // $this->form_validation->set_rules('1753', 'F17-53', 'trim|required');

    // $this->form_validation->set_rules('1754', 'F17-54', 'trim|required');

    

    // $this->form_validation->set_rules('id', 'id', 'trim');

    // $this->form_validation->set_error_delimiters('<span class="text-danger"><b>', '</b></span>');

    }



    public function rules1() //validasi (4 - 5 - 6 - 7)

    {

    //     $this->form_validation->set_rules('4[]', 'F4', 'trim|required');

    //     $this->form_validation->set_rules('5', 'F5', 'trim|required');

    //     $this->form_validation->set_rules('nilai6', 'F6', 'trim|required');

    //     $this->form_validation->set_rules('nilai7', 'F7', 'trim|required');

    //     $this->form_validation->set_rules('nilai7a', 'F7a', 'trim|required');



    //     $this->form_validation->set_rules('id', 'id', 'trim');

    // $this->form_validation->set_error_delimiters('<span class="text-danger"><b>', '</b></span>');

    }



    public function rules2() //validasi (9 - 10)

    {

    //     $this->form_validation->set_rules('9[]', 'F9', 'trim|required');

    //     $this->form_validation->set_rules('10', 'F10', 'trim|required');



    //     $this->form_validation->set_rules('id', 'id', 'trim');

    // $this->form_validation->set_error_delimiters('<span class="text-danger"><b>', '</b></span>');

    }



    public function rules3() //validasi (11 - 12 - 13 - 14 - 15 - 16)

    {

    //     $this->form_validation->set_rules('11', 'F11', 'trim|required');

    //     $this->form_validation->set_rules('12', 'F12', 'trim|required');

    //     $this->form_validation->set_rules('nilai13[]', 'F13', 'trim|required');

    //     $this->form_validation->set_rules('14', 'F14', 'trim|required');

    //     $this->form_validation->set_rules('15', 'F15', 'trim|required');

    //     $this->form_validation->set_rules('16[]', 'F16', 'trim|required');



    //     $this->form_validation->set_rules('id', 'id', 'trim');

    // $this->form_validation->set_error_delimiters('<span class="text-danger"><b>', '</b></span>');

    }

 }

