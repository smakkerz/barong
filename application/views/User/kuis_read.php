<style type="text/css">
	h1 {
                font-size: 22px;
                font-family: Arial,Cambria, Georgia, serif,Sans-serif;
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
</style>
<div class="row">
    <div class="col-xs-12">
		<h1>Universitas Semarang Carrer and Alumni Center</h1>
		            <div class="text">Jalan. Soekarno - Hatta Tlogosari Fax : 50196 Kota Semarang. 
		                E-mail : <span class="mail">ucac@usm.ac.id</span>
		            </div>
        <hr>
        <h2>Pilihan Responden, 
            <b class="text-danger"><?= ucfirst($nama) ?></b> &nbsp;
            <span style="text-align: right;"> NIM : <b class="text-danger"><?= ucfirst($nim) ?></b></span>
        </h2>
            <table class="table table-striped table-bordered table-hover">
                <tr><b>Tracer Study</b>
            <?php
            foreach ($kuis as $soal)
            {
                ?>
                <tr>
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
                            $nilai = '<b>(<span class="text-danger">'.$key->nilai.' Bulan</span>)</b>';
                        }  elseif($key->kode_kuis == '13') {
                            $nilai = '<b>(Rp. <span class="text-danger">'.$key->nilai.' </span>-)</b>';
                        } elseif($key->kode_kuis == '5' or $key->kode_kuis =='6' or $key->kode_kuis =='7a'or $key->kode_kuis == '7') {
                            $nilai = '<b>(<span class="text-danger">'.$key->nilai.' Perusahaan</span>)</b>';
                        } elseif($key->kode_kuis == '17') {
                            $nilai = ' <b>( Nilai = <span class="text-danger">'.$key->nilai.'</span>)</b>';
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
                <small><b class="text-danger">F<?=$key->kode_kuis?>-<?=$key->kode_pilihan ?></b></small>
                    <?php 
                            echo $key->pilihan.' '.$nilai; ?><br>

                <?php
                    }
                }
                echo "</td>";
            }
            ?>
            </table>
            </div>
            </div>