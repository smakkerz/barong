<!doctype html>
<html>
    <head>
        <title>Laporan Kuesioner <?=$this->session->userdata('nama') ?></title>
        <link rel="shorcut icon" href="<?php echo base_url(); ?>library/assets/images/ucac.jpg" />
        <style>
            .container {
                position: relative;
                min-height: 90%;
            }
            h1 {
                font-size: 22px;
                font-family: Arial,Georgia, serif,Sans-serif;
                text-align: center;
                margin-bottom: 4px;
            }
            .text {
                text-align: center;
                font-size: 12px;
            }
            .text .mail {
                color: #908;
                text-decoration: underline;
                margin: 5px;
            }
            hr {
                border-style: 3px solid;
                margin-bottom: 2px;
            }
            h2 {
                font-size: 17px;
                font-family: Sans-serif;
            }
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th{
                font-size: 15px;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
            .feet {
                font-size: 10px;
                font-family: Times, 'Times New Roman';
            }
            .styles {
                color: red;
                font-weight: bold;
            }
            .foot {
                bottom: 15px;
                position: absolute;
                font-size: 14px;
                width: 93%;
                text-align: center;
            }
        </style>
    </head>
    <body class="container" style="background:#fff url(<?php echo base_url() ?>library/assets/images/ucac1.jpg)  no-repeat center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;">
        <h1>Universitas Semarang Carrer and Alumni Center</h1>
            <div class="text">Jalan. Soekarno - Hatta Tlogosari Fax : 50196 Kota Semarang. 
                E-mail : <span class="mail">ucac@usm.ac.id</span>
            </div>
        <hr>
        <h2>Pilihan Responden, 
            <i class="styles"><?= ucfirst($nama) ?></i> &nbsp;
            <span style="text-align: right;"> NIM : <i class="styles"><?= ucfirst($nim) ?></i></span>
        </h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th width="8px">No</th>
                <th>Kuesioner</th>
		        <th width="345px">Pilihan Responden</th>
		
            </tr><?php
            foreach ($kuis as $soal)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td>
                            <small>
                                <b class="text-danger">F<?=$soal->kode_kuis ?></b>
                            </small>
                            <?=$soal->kuis ?></td>
                <td>
                <?php
                foreach ($respon as $key) {
                    if($soal->kode_kuis == $key->kode_kuis) {
                        if($key->pilihan =="Kira-kira, berapa bulan sebelum lulus" or $key->pilihan == "Kira-kira, berapa bulan setelah lulus") {
                            $nilai = '<b>(<span class="styles">'.$key->nilai.' Bulan</span>)</b>';
                        }  elseif($key->kode_kuis == '13') {
                            $nilai = '<b>(Rp. <span class="styles">'.$key->nilai.' </span>-)</b>';
                        } elseif($key->kode_kuis == '5' or $key->kode_kuis =='6' or $key->kode_kuis =='7a'or $key->kode_kuis == '7') {
                            $nilai = '<b>(<span class="styles">'.$key->nilai.' Perusahaan</span>)</b>';
                        } elseif($key->kode_kuis == '17') {
                            $nilai = ' <b>( Nilai = <span class="styles">'.$key->nilai.'</span>)</b>';
                        } elseif($key->kode_kuis == '2'){
                            if($key->nilai == '1'){
                                $nilai = '= <b>Sangat Besar</b>';
                            } elseif($key->nilai == '2'){
                                $nilai = '= <b>Besar</b>';
                            } elseif($key->nilai=='3'){
                                $nilai = '= <b>Cukup Besar</b>';
                            } elseif($key->nilai == '4'){
                                $nilai = '= <b>Kurang</b>';
                            } elseif($key->nilai == '5') {
                                $nilai = '= <b>Tidak sama sekali</b>';
                            } else {
                                $nilai = '';
                            }
                        } else{
                            $nilai = '';
                        }
                    ?>
                <small><b>F<?=$key->kode_kuis?>-<?=$key->kode_pilihan ?></b></small>
                    <?php 
                            echo $key->pilihan.' '.$nilai; ?><br>

                <?php
                    }
                }
                echo "</td>";
            }
            ?>
        </table> <!--
        <span class="feet">
        #Untuk kode <b>F17</b> nilai 
            <span class="styles">1</span> dan 
            <span class="styles">2</span> kategori 
                <b class="styles">Rendah</b><br>
        #Untuk kode <b>F17</b> nilai 
            <span class="styles">4</span> dan 
            <span class="styles">5</span> kategori 
                <b class="styles">Tinggi</b><br>
        **Kode <b>F17</b> Ganjil
            <span class="styles">A</span> dan Genap
            <span class="styles">B</span>
            </span> -->
        <footer class="foot">
            <?= ucfirst($nim) ?> &emsp; &nbsp; &nbsp;<b>&ensp; &nbsp; <?= date("d/m/Y") ?></b>
        </footer>
    </body>
</html>