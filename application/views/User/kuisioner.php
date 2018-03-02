<form action="<?php echo $action; ?>" method="post">

    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">

        <table class='table table-bordered'>

            <tr><b>Identitas</b> <b class="text-danger"> F1</b> 

            <tr><td>Nama </td>

                <td class="has-feedback <?= set_validation_style('nama') ?>">

                <span class="block input-icon input-icon-right">

                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $nama; ?>" />

                    <?php echo form_error('nama') ?><?= set_icon('nama') ?>

                </span>

            </td>

    	    <tr><td>NIM </td>

                <td class="has-feedback <?= set_validation_style('nim') ?>">

                <span class="block input-icon input-icon-right">

                    <input type="text" class="form-control" name="nim" id="nim" placeholder="Nim" value="<?= $nim; ?>"

                    <?php echo form_error('nim') ?><?= set_icon('nim') ?>

                </span>

            </td>

    	    <tr><td>No Hp </td>

                <td class="has-feedback <?= set_validation_style('no_hp') ?>">

                <span class="block input-icon input-icon-right">

                    <input type="tel" class="form-control" name="no_hp" id="no_hp" min="11" placeholder="No Hp" value="<?= $no_hp; ?>" required />

                    <?php echo form_error('no_hp') ?><?= set_icon('no_hp') ?>

                </span>

            </td>

    	    <tr><td>Email </td>

                <td class="has-feedback <?= set_validation_style('email') ?>">

                <span class="block input-icon input-icon-right">

                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $email; ?>"  required />

                    <?php echo form_error('email') ?><?= set_icon('email') ?>

                </span>

            </td><?php if($thn != 0 ) { 

                echo "<input type='hidden' name='thn' value='".$thn."' /> "; } else { ?>

             <tr><td>Tahun Lulus </td>

                <td class="has-feedback <?= set_validation_style('thn') ?>">

                <span class="block input-icon input-icon-right">

                <select class="form-control" required="required" name="thn">

                                    <?php 

                                    $awal = 2000;

                                    $now = date("Y");

                                        for ($awal; $awal<= $now; $awal++) {

                                            echo "<option value='".$awal."'";

                                            echo $awal?'selected':'';

                                            echo">".$awal."</option>";

                                                            }

                                    ?>

                                </select>

                    <?php echo form_error('thn') ?><?= set_icon('thn') ?>

                </span>

            </td><?php } ?>

    	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 

	    <tr></tr>

        </table>



<div class="row">

    <div class="col-xs-12">

            <table class="table table-striped table-hover">

                <tr><b>Tracer Study</b>

                <span class="pull-right"><?= $this->session->userdata('error') <> '' ? $this->session->userdata('error') : ''; ?></span>

                        <td width=" 40%" class="has-feedback <?= set_validation_style('2') ?>">

                            <small>

                                 <b class="text-danger"> F2</b>

                            </small>

                            Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?<br>

                            <?php echo form_error('2') ?></td>

                        <td class="has-feedback <?= set_validation_style('21') ?>" width="55%">

                            <b>Perkuliahan <small>

                                 <b class="text-danger"> F2-1</b>

                            </small></b><br>

                       <input type="radio" name="21" id="f21" value="1" <?php if($f21==1) echo "checked='checked'"; ?>>[1Sangat Besar

                                    <small>

                                        <b class="text-danger">F2-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="21" id="f22" value="2" <?php if($f21==2) echo "checked='checked'"; ?>>[2]Besar 

                                    <small>

                                        <b class="text-danger">F2-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="21" id="f23" value="3" <?php if($f21==3) echo "checked='checked'"; ?>>[3]Cukup Besar

                                    <small>

                                        <b class="text-danger">F2-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="21" id="f24" value="4" <?php if($f21==4) echo "checked='checked'"; ?>>[4]Kurang

                                    <small>

                                        <b class="text-danger">F2-04</b>

                                    </small>                                         <br>

                        <input type="radio" name="21" id="f25" value="5" <?php if($f21==5) echo "checked='checked'"; ?>>[5]Tidak Sama Sekali

                                    <small>

                                        <b class="text-danger">F2-05</b>

                                    </small><br><span id="showing">

                            <b>Demonstrasi <small>

                                 <b class="text-danger"> F2-2</b>

                            </small></b><br>

                       <input type="radio" name="22" value="1" <?php if($f22==1) echo "checked='checked'"; ?>>[1Sangat Besar

                                    <small>

                                        <b class="text-danger">F2-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="22" value="2" <?php if($f22==2) echo "checked='checked'"; ?>>[2]Besar 

                                    <small>

                                        <b class="text-danger">F2-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="22" value="3" <?php if($f22==3) echo "checked='checked'"; ?>>[3]Cukup Besar

                                    <small>

                                        <b class="text-danger">F2-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="22" value="4" <?php if($f22==4) echo "checked='checked'"; ?>>[4]Kurang

                                    <small>

                                        <b class="text-danger">F2-04</b>

                                    </small>                                         <br>

                        <input type="radio" name="22" value="5" <?php if($f22==5) echo "checked='checked'"; ?>>[5]Tidak Sama Sekali

                                    <small>

                                        <b class="text-danger">F2-05</b>

                                    </small><br>

                                    <b>Partisipasi dalam proyek riset <small>

                                 <b class="text-danger"> F2-3</b>

                            </small></b><br>

                       <input type="radio" name="23" value="1" <?php if($f23==1) echo "checked='checked'"; ?>>[1Sangat Besar

                                    <small>

                                        <b class="text-danger">F2-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="23" value="2" <?php if($f23==2) echo "checked='checked'"; ?>>[2]Besar 

                                    <small>

                                        <b class="text-danger">F2-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="23" value="3" <?php if($f23==3) echo "checked='checked'"; ?>>[3]Cukup Besar

                                    <small>

                                        <b class="text-danger">F2-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="23" value="4" <?php if($f23==4) echo "checked='checked'"; ?>>[4]Kurang

                                    <small>

                                        <b class="text-danger">F2-04</b>

                                    </small>                                         <br>

                        <input type="radio" name="23" value="5" <?php if($f23==5) echo "checked='checked'"; ?>>[5]Tidak Sama Sekali

                                    <small>

                                        <b class="text-danger">F2-05</b>

                                    </small><br>

                            <b>Magang <small>

                                 <b class="text-danger"> F2-4</b>

                            </small></b><br>

                       <input type="radio" name="24" value="1" <?php if($f24==1) echo "checked='checked'"; ?>>[1Sangat Besar

                                    <small>

                                        <b class="text-danger">F2-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="24" value="2" <?php if($f24==2) echo "checked='checked'"; ?>>[2]Besar 

                                    <small>

                                        <b class="text-danger">F2-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="24" value="3" <?php if($f24==3) echo "checked='checked'"; ?>>[3]Cukup Besar

                                    <small>

                                        <b class="text-danger">F2-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="24" value="4" <?php if($f24==4) echo "checked='checked'"; ?>>[4]Kurang

                                    <small>

                                        <b class="text-danger">F2-04</b>

                                    </small>                                         <br>

                        <input type="radio" name="24" value="5" <?php if($f24==5) echo "checked='checked'"; ?>>[5]Tidak Sama Sekali

                                    <small>

                                        <b class="text-danger">F2-05</b>

                                    </small><br>

                            <b>Praktikum <small>

                                 <b class="text-danger"> F2-5</b>

                            </small></b><br>

                       <input type="radio" name="25" value="1" <?php if($f25==1) echo "checked='checked'"; ?>>[1Sangat Besar

                                    <small>

                                        <b class="text-danger">F2-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="25" value="2" <?php if($f25==2) echo "checked='checked'"; ?>>[2]Besar 

                                    <small>

                                        <b class="text-danger">F2-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="25" value="3" <?php if($f25==3) echo "checked='checked'"; ?>>[3]Cukup Besar

                                    <small>

                                        <b class="text-danger">F2-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="25" value="4" <?php if($f25==4) echo "checked='checked'"; ?>>[4]Kurang

                                    <small>

                                        <b class="text-danger">F2-04</b>

                                    </small>                                         <br>

                        <input type="radio" name="25" value="5" <?php if($f25==5) echo "checked='checked'"; ?>>[5]Tidak Sama Sekali

                                    <small>

                                        <b class="text-danger">F2-05</b>

                                    </small><br>

                            <b>Kerja lapangan <small>

                                 <b class="text-danger"> F2-6</b>

                            </small></b><br>

                       <input type="radio" name="26" value="1" <?php if($f26==1) echo "checked='checked'"; ?>>[1Sangat Besar

                                    <small>

                                        <b class="text-danger">F2-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="26" value="2" <?php if($f26==2) echo "checked='checked'"; ?>>[2]Besar 

                                    <small>

                                        <b class="text-danger">F2-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="26" value="3" <?php if($f26==3) echo "checked='checked'"; ?>>[3]Cukup Besar

                                    <small>

                                        <b class="text-danger">F2-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="26" value="4" <?php if($f26==4) echo "checked='checked'"; ?>>[4]Kurang

                                    <small>

                                        <b class="text-danger">F2-04</b>

                                    </small>                                         <br>

                        <input type="radio" name="26" value="5" <?php if($f26==5) echo "checked='checked'"; ?>>[5]Tidak Sama Sekali

                                    <small>

                                        <b class="text-danger">F2-05</b>

                                    </small><br>

                            <b>Diskusi <small>

                                 <b class="text-danger"> F2-7</b>

                            </small></b><br>

                       <input type="radio" name="27" value="1" <?php if($f27==1) echo "checked='checked'"; ?>>[1Sangat Besar

                                    <small>

                                        <b class="text-danger">F2-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="27" value="2" <?php if($f27==2) echo "checked='checked'"; ?>>[2]Besar 

                                    <small>

                                        <b class="text-danger">F2-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="27" value="3" <?php if($f27==3) echo "checked='checked'"; ?>>[3]Cukup Besar

                                    <small>

                                        <b class="text-danger">F2-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="27" value="4" <?php if($f27==4) echo "checked='checked'"; ?>>[4]Kurang

                                    <small>

                                        <b class="text-danger">F2-04</b>

                                    </small>                                         <br>

                        <input type="radio" name="27" value="5" <?php if($f27==5) echo "checked='checked'"; ?>>[5]Tidak Sama Sekali

                                    <small>

                                        <b class="text-danger">F2-05</b>

                                    </small></span>

                                            </td>

                                            </tr><tr>

                        <!------ ------------>

                        <td width=" 40%" class="has-feedback <?= set_validation_style('3') ?>">

                            <small>

                                <b class="text-danger">F3</b>

                            </small>

                            Kapan anda mulai mencari pekerjaan?Mohon pekerjaan sambilan tidak dimasukkan<br>

                            <?php echo form_error('3') ?></td>

                        <td class="has-feedback <?= set_validation_style('3') ?>">

                       <input type="radio" name="3" id="show" value="3-1" <?= set_radio('3', '1') ?> <?php if($f31!=0) echo "checked='checked'"; ?>/>[1]Kira-kira, berapa bulan sebelum lulus  

                                    <small>

                                        <b class="text-danger">F3-01</b>

                                    </small><input type="number" name="nilai" value="<?php echo $nilai; ?>" style="max-width: 60px;">

                                    <?php echo form_error('nilai') ?><br>

                        <input type="radio" name="3" id="showA" value="3-2" <?= set_radio('3', '2') ?> <?php if($f32!=0) echo "checked='checked'"; ?>/>[2]Kira-kira, berapa bulan setelah lulus  

                                    <small>

                                        <b class="text-danger">F3-02</b>

                                    </small><input type="number" name="nilai1" value="<?php echo $nilai1; ?>"  style="max-width: 60px;"><?php echo form_error('nilai1') ?><br>

                        <input type="radio" name="3" id="hide" value="3-3" <?= set_radio('3', '3') ?> <?php if($f33!=0) echo "checked='checked'"; ?>/>[3]Saya tidak mencari kerja <b>(Langsung ke pertanyaan f8)</b>  

                                    <small>

                                        <b class="text-danger">F3-03</b>

                                    </small><br>

                                            </td>

                                        </tr><tr id="table">

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F4</b>

                            </small>

                            Bagaimana anda mencari pekerjaan tersebut?&nbsp;Jawaban bisa lebih dari satu</td>

                        <td class="has-feedback <?= set_validation_style('4') ?>">

                       <input type="checkbox" name="4[]" value="4-1" <?= set_checkbox('4', '4-1') ?> <?php if($f41!=0) echo "checked='checked'"; ?>/>[1]Melalui iklan di koran/majalah, brosur  

                                    <small>

                                        <b class="text-danger">F4-01</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-2"<?= set_checkbox('4', '4-2') ?> <?php if($f42!=0) echo "checked='checked'"; ?> />[1]Melamar ke perusahaan tanpa mengetahui lowongan yang ada  

                                    <small>

                                        <b class="text-danger">F4-02</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-3" <?= set_checkbox('4', '4-3') ?> <?php if($f43!=0) echo "checked='checked'"; ?>/>[1]Pergi ke bursa/pameran kerja  

                                    <small>

                                        <b class="text-danger">F4-03</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-4" <?= set_checkbox('4', '4-4') ?> <?php if($f44!=0) echo "checked='checked'"; ?>/>[1]Mencari lewat internet/iklan online/milis  

                                    <small>

                                        <b class="text-danger">F4-04</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-5" <?= set_checkbox('4', '4-5') ?> <?php if($f45!=0) echo "checked='checked'"; ?>/>[1]Dihubungi oleh perusahaan  

                                    <small>

                                        <b class="text-danger">F4-05</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-6" <?= set_checkbox('4', '4-6') ?> <?php if($f46!=0) echo "checked='checked'"; ?>/>[1]Menghubungi Kemenakertrans  

                                    <small>

                                        <b class="text-danger">F4-06</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-7" <?= set_checkbox('4', '4-7') ?> <?php if($f47!=0) echo "checked='checked'"; ?>/>[1]Menghubungi agen tenaga kerja komersial/swasta  

                                    <small>

                                        <b class="text-danger">F4-07</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-8" <?= set_checkbox('4', '4-8') ?> <?php if($f48!=0) echo "checked='checked'"; ?>/>[1]Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas  

                                    <small>

                                        <b class="text-danger">F4-08</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-9" <?= set_checkbox('4', '4-9') ?> <?php if($f49!=0) echo "checked='checked'"; ?>/>[1]Menghubungi kantor kemahasiswaan/hubungan alumni  

                                    <small>

                                        <b class="text-danger">F4-09</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-10" <?= set_checkbox('4', '4-10') ?> <?php if($f410!=0) echo "checked='checked'"; ?>/> [1] Membangun jejaring (network) sejak masih kuliah 

                                    <small>

                                        <b class="text-danger">F4-10</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-11" <?= set_checkbox('4', '4-11') ?> <?php if($f411!=0) echo "checked='checked'"; ?>/> [1] Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)

                                    <small>

                                        <b class="text-danger">F4-11</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-12" <?= set_checkbox('4', '4-12') ?> <?php if($f412!=0) echo "checked='checked'"; ?>/> [1] Membangun bisnis sendiri

                                    <small>

                                        <b class="text-danger">F4-12</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-13" <?= set_checkbox('4', '4-13') ?> <?php if($f413!=0) echo "checked='checked'"; ?>/> [1] Melalui penempatan kerja atau magang

                                    <small>

                                        <b class="text-danger">F4-13</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="4[]" value="4-14" <?= set_checkbox('4', '4-14') ?> <?php if($f414!=0) echo "checked='checked'"; ?>/> [1] Bekerja di tempat yang sama dengan tempat kerja semasa kuliah 

                                    <small>

                                        <b class="text-danger">F4-14</b>

                                    </small>   

                                            </td>

                                        </tr><tr id="table1">

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F5</b>

                            </small>

                            Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama</td>

                        <td class="has-feedback <?= set_validation_style('5') ?>">

                       <input type="radio" name="5" value="5-1" <?= set_radio('5', '5-1') ?> <?php if($f51!=0) echo "checked='checked'"; ?>/>Kira-kira, berapa bulan sebelum lulus  

                                    <small>

                                        <b class="text-danger">F5-01</b>

                                    </small><input type="number" name="nilai2" value="<?= $nilai2; ?>" style="max-width: 60px;">                                        <br>

                        <input type="radio" name="5" value="5-3" <?= set_radio('5', '5-3') ?><?php if($f53!=0) echo "checked='checked'"; ?>/>Kira-kira, berapa bulan setelah lulus  

                                    <small>

                                        <b class="text-danger">F5-03</b>

                                    </small><input type="number" name="nilai3" value="<?= $nilai3; ?>" style="max-width: 60px;">                                        <br>

                                            </td>

                                        </tr><tr id="table2">

                        <td width=" 40%" >

                            <small>

                                <b class="text-danger">F6</b>

                            </small>

                            Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?</td>

                        <td class="has-feedback <?= set_validation_style('6') ?>">

                        <input type="hidden" name="6" value="6-1">

                       <input type="number" name="nilai6" value="<?= $nilai6 ?>" style="max-width: 50px;">perusahaan/instansi/institusi  

                                    <small>

                                        <b class="text-danger">F6-01</b>

                                    </small>                                         <br>

                                            </td>

                                        </tr><tr id="table3">

                        <td width=" 40%">

                            <small>

                                <b class="text-danger" class="has-feedback <?= set_validation_style('3') ?>">F7</b>

                            </small>

                            Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?</td>

                        <td>

                        <input type="hidden" name="7" value="7-1">

                       <input type="number" name="nilai7" value="<?= $nilai7 ?>"  style="max-width: 50px;">perusahaan/instansi/institusi  

                                    <small>

                                        <b class="text-danger">F7-01</b>

                                    </small>                                         <br>

                                            </td>

                                        </tr><tr id="table4">

                        <td width=" 40%" >

                            <small>

                                <b class="text-danger">F7a</b>

                            </small>

                            Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?</td>

                        <td class="has-feedback <?= set_validation_style('7a') ?>">

                        <input type="hidden" name="7a" value="7a-1">

                       <input type="number" name="nilai7a" value="<?= $nilai7a ?>" style="max-width: 50px;">perusahaan/instansi/institusi  

                                    <small>

                                        <b class="text-danger">F7a-01</b>

                                    </small>                                         <br>

                                            </td>

                                        </tr><tr>

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F8</b>

                            </small>

                            Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?<br>

                            <?php echo form_error('8') ?></td>

                        <td class="has-feedback <?= set_validation_style('8') ?>">

                       <input type="radio" name="8" id="hide1" value="8-1" <?= set_radio('8', '8-1') ?> <?php if($f81!=0) echo "checked='checked'"; ?>/>[1]Ya <b>(Jika ya, lanjutkan ke f11)</b>  

                                    <small>

                                        <b class="text-danger">F8-01</b>

                                    </small><br>

                        <input type="radio" name="8" id="show1" value="8-2" <?= set_radio('8', '8-2') ?> <?php if($f82!=0) echo "checked='checked'"; ?>/>[2]Tidak  

                                    <small>

                                        <b class="text-danger">F8-02</b>

                                    </small><br>

                                            </td>

                                        </tr><tr id="table5">

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F9</b>

                            </small>

                            Bagaimana anda menggambarkan situasi anda saat ini?&nbsp;Jawaban bisa lebih dari satu</td>

                        <td class="has-feedback <?= set_validation_style('9') ?>">

                       <input type="checkbox" name="9[]" value="9-1" <?= set_checkbox('9', '9-1') ?><?php if($f91!=0) echo "checked='checked'"; ?>/>[1]Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana  

                                    <small>

                                        <b class="text-danger">F9-01</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="9[]" value="9-2" <?= set_checkbox('9', '9-2') ?><?php if($f92!=0) echo "checked='checked'"; ?>/>[2]Saya menikah  

                                    <small>

                                        <b class="text-danger">F9-02</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="9[]" value="9-3" <?= set_checkbox('9', '9-3') ?><?php if($f93!=0) echo "checked='checked'"; ?>/>[3]Saya sibuk dengan keluarga dan anak-anak  

                                    <small>

                                        <b class="text-danger">F9-03</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="9[]" value="9-4" <?= set_checkbox('9', '9-4') ?><?php if($f94!=0) echo "checked='checked'"; ?>/>[4]Saya sekarang sedang mencari pekerjaan  

                                    <small>

                                        <b class="text-danger">F9-04</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="9[]" value="9-5" <?= set_checkbox('9', '9-5') ?><?php if($f95!=0) echo "checked='checked'"; ?>/>[5]Lainnya  

                                    <small>

                                        <b class="text-danger">F9-05</b>

                                    </small><input type="text" class="form-control" name="jawaban9">    <br>

                                            </td>

                                        </tr><tr id="table6">

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F10</b>

                            </small>

                            Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir?&nbsp;Pilihlah Satu Jawaban. <b>KEMUDIAN LANJUT KE f17</b><br>

                            <?php echo form_error('10') ?></td>

                        <td class="has-feedback <?= set_validation_style('10') ?>">

                       <input type="radio" name="10" value="10-1" <?php if($f101!=0) echo "checked='checked'"; ?>>[1]Tidak  

                                    <small>

                                        <b class="text-danger">F10-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="10" value="10-2" <?php if($f102!=0) echo "checked='checked'"; ?>>[2]Tidak, tapi saya sedang menunggu hasil lamaran kerja  

                                    <small>

                                        <b class="text-danger">F10-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="10" value="10-3" <?php if($f103!=0) echo "checked='checked'"; ?>>[3]Ya, saya akan mulai bekerja dalam 2 minggu ke depan  

                                    <small>

                                        <b class="text-danger">F10-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="10" value="10-4" <?php if($f104!=0) echo "checked='checked'"; ?>>[4]Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan  

                                    <small>

                                        <b class="text-danger">F10-04</b>

                                    </small>                                         <br>

                        <input type="radio" name="10" value="10-5" <?php if($f105!=0) echo "checked='checked'"; ?>>[5]Lainnya  

                                    <small>

                                        <b class="text-danger">F10-05</b>

                                    </small><input type="text" class="form-control" name="jawaban10">                                        <br>

                                            </td>

                                        </tr><tr>

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F11</b>

                            </small>

                            Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?<br>

                            <?php echo form_error('11') ?></td>

                        <td class="has-feedback <?= set_validation_style('11') ?>">

                       <input type="radio" name="11" value="11-1" <?php if($f111!=0) echo "checked='checked'"; ?>>[1]Instansi pemerintah (termasuk BUMN)  

                                    <small>

                                        <b class="text-danger">F11-01</b>

                                    </small> <br>

                        <input type="radio" name="11" value="11-2" <?php if($f112!=0) echo "checked='checked'"; ?>>[2]Organisasi non-profit/Lembaga Swadaya Masyarakat  

                                    <small>

                                        <b class="text-danger">F11-02</b>

                                    </small><br>

                        <input type="radio" name="11" value="11-3" <?php if($f113!=0) echo "checked='checked'"; ?>>[3]Perusahaan swasta  

                                    <small>

                                        <b class="text-danger">F11-03</b>

                                    </small><br>

                        <input type="radio" name="11" value="11-4" <?php if($f114!=0) echo "checked='checked'"; ?>>[4]Wiraswasta/perusahaan sendiri  

                                    <small>

                                        <b class="text-danger">F11-04</b>

                                    </small><br>

                        <input type="radio" name="11" value="11-5" <?php if($f115!=0) echo "checked='checked'"; ?>>[5]Lainnya  

                                    <small>

                                        <b class="text-danger">F11-05</b>

                                    </small><input type="text" class="form-control" name="jawaban11"><br>

                                            </td>

                                        </tr><tr>

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F12</b>

                            </small>

                            Tempat anda bekerja saat ini bergerak di bidang apa? (Klasifikasi Baku Lapangan Usaha Indonesia, Kemnakertrans, 2009)<br>

                            <?php echo form_error('12') ?></td>

                        <td class="has-feedback <?= set_validation_style('12') ?>">

                                <select class="form-control" name="12">

                                    <option value="">-- Pilih Bidang Tempat anda bekerja saat ini --</option>

                                    <?php 

                                         foreach ($list->result() as $key) {

                                            echo "<option value='".$key->kode_kuis."-".$key->kode_pilihan."'>".$key->pilihan."</option>";

                                                            } 

                                    ?>

                                </select>       

                                            </td>

                                        </tr><tr>

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F13</b>

                            </small>

                            Kira-kira berapa pendapatan anda setiap bulannya?</td>

                        <td>

                       <input type="hidden" name="13[]" value="13-1">Dari Pekerjaan Utama  

                                    <small>

                                        <b class="text-danger">F13-01</b>

                                    </small>  Rp  <input type="number" name="nilai13[]" value="<?= $f131 ?>"  step="100" style="max-width: 95px;">

                                     <b>Cukup isi dengan angka</b><br>

                        <input type="hidden" name="13[]" value="13-2">Dari Lembur dan Tips  

                                    <small>

                                        <b class="text-danger">F13-02</b>

                                    </small>  Rp  <input type="number" name="nilai13[]"  value="<?=$f132?>"  step="100" style="max-width: 95px;"> 

                                    <b>Cukup isi dengan angka </b><br>

                        <input type="hidden" name="13[]" value="13-3">Dari Pekerjaan Lainnya  

                                    <small>

                                        <b class="text-danger">F13-03</b>

                                    </small>  Rp  <input type="number" name="nilai13[]"  value="<?=$f133?>" step="100" style="max-width: 95px;"> 

                                    <b>Cukup isi dengan angka  </b><br>

                                            </td>

                                        </tr><tr>

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F14</b>

                            </small>

                            Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</td>

                        <td>

                       <input type="radio" name="14" value="14-1" <?= set_radio('14', '14-01') ?><?php if($f141!=0) echo "checked='checked'"; ?><?php if($f51!=0) echo "checked='checked'"; ?>/>[1]Sangat Erat  

                                    <small>

                                        <b class="text-danger">F14-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="14" value="14-2" <?= set_radio('14', '14-02') ?><?php if($f142!=0) echo "checked='checked'"; ?>/>[2]Erat  

                                    <small>

                                        <b class="text-danger">F14-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="14" value="14-3" <?= set_radio('14', '14-03') ?><?php if($f143!=0) echo "checked='checked'"; ?>/>[3]Cukup Erat  

                                    <small>

                                        <b class="text-danger">F14-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="14" value="14-4" <?= set_radio('14', '14-04') ?><?php if($f144!=0) echo "checked='checked'"; ?>/>[4]Kurang Erat  

                                    <small>

                                        <b class="text-danger">F14-04</b>

                                    </small>                                         <br>

                        <input type="radio" name="14" value="14-5" <?= set_radio('14', '14-05') ?><?php if($f145!=0) echo "checked='checked'"; ?>/>[5]Tidak Sama Sekali  

                                    <small>

                                        <b class="text-danger">F14-05</b>

                                    </small>                                         <br>

                                            </td>

                                        </tr><tr>

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F15</b>

                            </small>

                            Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?<br>

                            <?php echo form_error('15') ?></td>

                        <td>

                       <input type="radio" name="15" value="15-1" <?= set_radio('15', '15-01') ?><?php if($f151!=0) echo "checked='checked'"; ?>/>[1]Setingkat Lebih Tinggi  

                                    <small>

                                        <b class="text-danger">F15-01</b>

                                    </small>                                         <br>

                        <input type="radio" name="15" value="15-2" <?= set_radio('15', '15-01') ?><?php if($f152!=0) echo "checked='checked'"; ?>/>[2]Tingkat yang Sama  

                                    <small>

                                        <b class="text-danger">F15-02</b>

                                    </small>                                         <br>

                        <input type="radio" name="15" value="15-3" <?= set_radio('15', '15-01') ?><?php if($f153!=0) echo "checked='checked'"; ?>/>[3]Setingkat Lebih Rendah  

                                    <small>

                                        <b class="text-danger">F15-03</b>

                                    </small>                                         <br>

                        <input type="radio" name="15" value="15-4" <?= set_radio('15', '15-01') ?><?php if($f154!=0) echo "checked='checked'"; ?>/>[4]Tidak Perlu Pendidikan Tinggi  

                                    <small>

                                        <b class="text-danger">F15-04</b>

                                    </small>        <br>

                                            </td>

                                        </tr><tr>

                        <td width=" 40%">

                            <small>

                                <b class="text-danger">F16</b>

                            </small>

                            Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu

                            <br>

                            <?php echo form_error('16') ?></td>

                        <td class="has-feedback <?= set_validation_style('16') ?>">

                       <input type="checkbox" name="16[]" value="16-1" <?= set_checkbox('16', '16-01') ?><?php if($f161!=0) echo "checked='checked'"; ?>/>[1]Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.  

                                    <small>

                                        <b class="text-danger">F16-01</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-2" <?= set_checkbox('16', '16-02') ?><?php if($f162!=0) echo "checked='checked'"; ?>/>[2]Saya belum mendapatkan pekerjaan yang lebih sesuai.  

                                    <small>

                                        <b class="text-danger">F16-02</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-3" <?= set_checkbox('16', '16-03') ?><?php if($f163!=0) echo "checked='checked'"; ?>/>[3]Di pekerjaan ini saya memeroleh prospek karir yang baik.  

                                    <small>

                                        <b class="text-danger">F16-03</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-4" <?= set_checkbox('16', '16-04') ?><?php if($f164!=0) echo "checked='checked'"; ?>/>[4]Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.

                                    <small>

                                        <b class="text-danger">F16-04</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-5" <?= set_checkbox('16', '16-05') ?><?php if($f165!=0) echo "checked='checked'"; ?>/>[5]Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya

                                    <small>

                                        <b class="text-danger">F16-05</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-06" <?= set_checkbox('16', '16-06') ?><?php if($f166!=0) echo "checked='checked'"; ?>/>[6]Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.

                                    <small>

                                        <b class="text-danger">F16-06</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-7" <?= set_checkbox('16', '16-07') ?><?php if($f167!=0) echo "checked='checked'"; ?>/>[7]Pekerjaan saya saat ini lebih aman/terjamin/secure

                                    <small>

                                        <b class="text-danger">F16-07</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-8" <?= set_checkbox('16', '16-08') ?><?php if($f168!=0) echo "checked='checked'"; ?>/>[8]Pekerjaan saya saat ini lebih menarik

                                    <small>

                                        <b class="text-danger">F16-08</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-9" <?= set_checkbox('16', '16-09') ?>/<?php if($f169!=0) echo "checked='checked'"; ?>>[9]Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.

                                    <small>

                                        <b class="text-danger">F16-09</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-10" <?= set_checkbox('16', '16-10') ?><?php if($f1611!=0) echo "checked='checked'"; ?>/>[10]Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.

                                    <small>

                                        <b class="text-danger">F16-10</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-11" <?= set_checkbox('16', '16-11') ?><?php if($f1612!=0) echo "checked='checked'"; ?>/>[11]Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.

                                    <small>

                                        <b class="text-danger">F16-11</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-12" <?= set_checkbox('16', '16-12') ?><?php if($f1612!=0) echo "checked='checked'"; ?>/>[12]Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.

                                    <small>

                                        <b class="text-danger">F16-12</b>

                                    </small>                                         <br>

                        <input type="checkbox" name="16[]" value="16-13" <?= set_checkbox('16', '16-17') ?><?php if($f1613!=0) echo "checked='checked'"; ?>/>[13]Lainnya

                                    <small>

                                        <b class="text-danger">F16-13</b>

                                    </small>                                         <br>

                                            </td>

                                    </tr><tr>

                        <td width=" 36%">

                            <small>

                                <b class="text-danger">F17</b>

                            </small>

                            Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai? <b>(A)</b>&nbsp; Pada saat lulus, bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini? <b>(B)</b></td>

                        <td>Rendah &emsp; Tinggi <span class="pull-right">Rendah &emsp; Tinggi</span>

                        <br><b>&ensp; 1 &ensp; 2 &ensp; 3 &ensp; 4 &ensp; 5 <span class="pull-right">1 &ensp; 2 &ensp; 3 &ensp; 4 &ensp; 5&ensp;</span></b></td>

                        <tr><td>

                            <?php echo form_error('171') ?> <?php echo form_error('172') ?>

                            <?php echo form_error('173') ?> <?php echo form_error('174') ?>

                            <?php echo form_error('175') ?> <?php echo form_error('176') ?>

                            <?php echo form_error('177') ?> <?php echo form_error('178') ?>

                            <?php echo form_error('179') ?> <?php echo form_error('1710') ?>

                            <?php echo form_error('1711') ?> <?php echo form_error('1712') ?>

                            <?php echo form_error('1713') ?> <?php echo form_error('1714') ?>

                            <?php echo form_error('1715') ?> <?php echo form_error('1716') ?>

                             <?php echo form_error('1717') ?> <?php echo form_error('1718') ?>

                            <?php echo form_error('1719') ?> <?php echo form_error('1720') ?>

                            <?php echo form_error('1721') ?> <?php echo form_error('1722') ?>

                            <?php echo form_error('1723') ?> <?php echo form_error('1724') ?>

                            <?php echo form_error('1725') ?> <?php echo form_error('1726') ?>

                            <?php echo form_error('1727') ?> <?php echo form_error('1728') ?>

                            <?php echo form_error('1729') ?> <?php echo form_error('1730') ?>

                            <?php echo form_error('1731') ?> <?php echo form_error('1732') ?>

                            <?php echo form_error('1733') ?> <?php echo form_error('1734') ?>

                            <?php echo form_error('1735') ?> <?php echo form_error('1736') ?>

                            <?php echo form_error('1737') ?> <?php echo form_error('1738') ?>

                            <?php echo form_error('1739') ?> <?php echo form_error('1740') ?>

                             <?php echo form_error('1741') ?> <?php echo form_error('1738A') ?>

                            <?php echo form_error('1742') ?> <?php echo form_error('1743') ?>

                            <?php echo form_error('1744') ?> <?php echo form_error('1745') ?>

                            <?php echo form_error('1737A') ?> <?php echo form_error('1746') ?>

                            <?php echo form_error('1747') ?> <?php echo form_error('1748') ?>

                            <?php echo form_error('1749') ?> <?php echo form_error('1750') ?>

                            <?php echo form_error('1753') ?> <?php echo form_error('1754') ?>

                            <?php echo form_error('1751') ?> <?php echo form_error('1752') ?>

                        </td>

                        <td>

                                                   <b>A</b>

                            <input type="hidden" name="kode171" value="17"> 

                            <input type="hidden" name="pilihan171" value="1">

                            <input type="radio" name="171" value="1" <?= set_radio('171', '1') ?><?php if($f171==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="171" value="2" <?= set_radio('171', '2') ?><?php if($f171==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="171" value="3" <?= set_radio('171', '3') ?><?php if($f171==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="171" value="4" <?= set_radio('171', '4') ?><?php if($f171==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="171" value="5" <?= set_radio('171', '5') ?><?php if($f171==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-1</b>

                            </small>

                                Pengetahuan di bidang atau disiplin ilmu anda                            

                            <small>

                                <b class="text-danger">F17-2</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode172" value="17"> 

                            <input type="hidden" name="pilihan172" value="2"> 

                                <input type="radio" name="172" value="1" <?= set_radio('172', '1') ?><?php if($f172==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="172" value="2" <?= set_radio('172', '2') ?><?php if($f172==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="172" value="3" <?= set_radio('172', '3') ?><?php if($f172==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="172" value="4" <?= set_radio('172', '4') ?><?php if($f172==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="172" value="5" <?= set_radio('172', '5') ?><?php if($f172==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode173" value="17"> 

                            <input type="hidden" name="pilihan173" value="3">

                            <input type="radio" name="173" value="1" <?= set_radio('173', '1') ?><?php if($f173==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="173" value="2" <?= set_radio('173', '2') ?><?php if($f173==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="173" value="3" <?= set_radio('173', '3') ?><?php if($f173==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="173" value="4" <?= set_radio('173', '4') ?><?php if($f173==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="173" value="5" <?= set_radio('173', '5') ?><?php if($f173==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-3</b>

                            </small>

                                Pengetahuan di luar bidang atau disiplin ilmu anda                            <small>

                                <b class="text-danger">F17-4</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode174" value="17"> 

                            <input type="hidden" name="pilihan174" value="4"> 

                                <input type="radio" name="174" value="1" <?= set_radio('174', '1') ?><?php if($f174==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="174" value="2" <?= set_radio('174', '2') ?><?php if($f174==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="174" value="3" <?= set_radio('174', '3') ?><?php if($f174==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="174" value="4" <?= set_radio('174', '4') ?><?php if($f174==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="174" value="5" <?= set_radio('174', '5') ?><?php if($f174==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode175" value="17"> 

                            <input type="hidden" name="pilihan175" value="5">

                            <input type="radio" name="175" value="1" <?= set_radio('175', '1') ?><?php if($f175==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="175" value="2" <?= set_radio('175', '2') ?><?php if($f175==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="175" value="3" <?= set_radio('175', '3') ?><?php if($f175==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="175" value="4" <?= set_radio('175', '4') ?><?php if($f175==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="175" value="5" <?= set_radio('175', '5') ?><?php if($f175==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-5</b>

                            </small>

                                Pengetahuan umum                            <small>

                                <b class="text-danger">F17-6</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode176" value="17"> 

                            <input type="hidden" name="pilihan176" value="6"> 

                                <input type="radio" name="176" value="1" <?= set_radio('176', '1') ?><?php if($f176==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="176" value="2" <?= set_radio('176', '2') ?><?php if($f176==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="176" value="3" <?= set_radio('176', '3') ?><?php if($f176==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="176" value="4" <?= set_radio('176', '4') ?><?php if($f176==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="176" value="5" <?= set_radio('176', '5') ?><?php if($f176==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode177" value="17"> 

                            <input type="hidden" name="pilihan177" value="7">

                            <input type="radio" name="177" value="1" <?= set_radio('177', '1') ?><?php if($f177==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="177" value="2" <?= set_radio('177', '2') ?><?php if($f177==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="177" value="3" <?= set_radio('177', '3') ?><?php if($f177==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="177" value="4" <?= set_radio('177', '4') ?><?php if($f177==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="177" value="5" <?= set_radio('177', '5') ?><?php if($f177==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-7</b>

                            </small>

                                Bahasa Inggris                            <small>

                                <b class="text-danger">F17-8</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode178" value="17"> 

                            <input type="hidden" name="pilihan178" value="8"> 

                                <input type="radio" name="178" value="1" <?= set_radio('178', '1') ?><?php if($f178==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="178" value="2" <?= set_radio('178', '2') ?><?php if($f178==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="178" value="3" <?= set_radio('178', '3') ?><?php if($f178==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="178" value="4" <?= set_radio('178', '4') ?><?php if($f178==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="178" value="5" <?= set_radio('178', '5') ?><?php if($f178==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                                            <b>A</b>

                            <input type="hidden" name="kode179" value="17"> 

                            <input type="hidden" name="pilihan179" value="9">

                            <input type="radio" name="179" value="1" <?= set_radio('179', '1') ?><?php if($f179==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="179" value="2" <?= set_radio('179', '2') ?><?php if($f179==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="179" value="3" <?= set_radio('179', '3') ?><?php if($f179==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="179" value="4" <?= set_radio('179', '4') ?><?php if($f179==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="179" value="5" <?= set_radio('179', '5') ?><?php if($f179==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-9</b>

                            </small>

                                Ketrampilan internet                            <small>

                                <b class="text-danger">F17-10</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1710" value="17"> 

                            <input type="hidden" name="pilihan1710" value="10"> 

                                <input type="radio" name="1710" value="1" <?= set_radio('1710', '1') ?><?php if($f1710==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1710" value="2" <?= set_radio('1710', '2') ?><?php if($f1710==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1710" value="3" <?= set_radio('1710', '3') ?><?php if($f1710==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1710" value="4" <?= set_radio('1710', '4') ?><?php if($f1710==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1710" value="5" <?= set_radio('1710', '5') ?><?php if($f1710==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1711" value="17"> 

                            <input type="hidden" name="pilihan1711" value="11"> 

                            <input type="radio" name="1711" value="1" <?= set_radio('1711', '1') ?><?php if($f1711==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1711" value="2" <?= set_radio('1711', '2') ?><?php if($f1711==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1711" value="3" <?= set_radio('1711', '3') ?><?php if($f1711==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1711" value="4" <?= set_radio('1711', '4') ?><?php if($f1711==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1711" value="5" <?= set_radio('1711', '5') ?><?php if($f1711==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-11</b>

                            </small>

                                Ketrampilan komputer                            <small>

                                <b class="text-danger">F17-12</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1712" value="17"> 

                            <input type="hidden" name="pilihan1712" value="12">

                                <input type="radio" name="1712" value="1" <?= set_radio('1712', '1') ?><?php if($f1712==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1712" value="2" <?= set_radio('1712', '2') ?><?php if($f1712==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1712" value="3" <?= set_radio('1712', '3') ?><?php if($f1712==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1712" value="4" <?= set_radio('1712', '4') ?><?php if($f1712==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1712" value="5" <?= set_radio('1712', '5') ?><?php if($f1712==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1713" value="17"> 

                            <input type="hidden" name="pilihan1713" value="13">

                            <input type="radio" name="1713" value="1" <?= set_radio('1713', '1') ?><?php if($f1713==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1713" value="2" <?= set_radio('1713', '2') ?><?php if($f1713==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1713" value="3" <?= set_radio('1713', '3') ?><?php if($f1713==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1713" value="4" <?= set_radio('1713', '4') ?><?php if($f1713==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1713" value="5" <?= set_radio('1713', '5') ?><?php if($f1713==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-13</b>

                            </small>

                                Berpikir kritis                            <small>

                                <b class="text-danger">F17-14</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1714" value="17"> 

                            <input type="hidden" name="pilihan1714" value="14"> 

                                <input type="radio" name="1714" value="1" <?= set_radio('1714', '1') ?><?php if($f1714==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1714" value="2" <?= set_radio('1714', '2') ?><?php if($f1714==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1714" value="3" <?= set_radio('1714', '3') ?><?php if($f1714==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1714" value="4" <?= set_radio('1714', '4') ?><?php if($f1714==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1714" value="5" <?= set_radio('1714', '5') ?><?php if($f1714==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1715" value="17"> 

                            <input type="hidden" name="pilihan1715" value="15">

                            <input type="radio" name="1715" value="1" <?= set_radio('1715', '1') ?><?php if($f1715==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1715" value="2" <?= set_radio('1715', '2') ?><?php if($f1715==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1715" value="3" <?= set_radio('1715', '3') ?><?php if($f1715==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1715" value="4" <?= set_radio('1715', '4') ?><?php if($f1715==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1715" value="5" <?= set_radio('1715', '5') ?><?php if($f1715==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-15</b>

                            </small>

                                Ketrampilan riset                            <small>

                                <b class="text-danger">F17-16</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1716" value="17"> 

                            <input type="hidden" name="pilihan1716" value="16"> 

                                <input type="radio" name="1716" value="1" <?= set_radio('1716', '1') ?><?php if($f1716==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1716" value="2" <?= set_radio('1716', '2') ?><?php if($f1716==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1716" value="3" <?= set_radio('1716', '3') ?><?php if($f1716==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1716" value="4" <?= set_radio('1716', '4') ?><?php if($f1716==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1716" value="5" <?= set_radio('1716', '5') ?><?php if($f1716==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1717" value="17"> 

                            <input type="hidden" name="pilihan1717" value="17">

                            <input type="radio" name="1717" value="1" <?= set_radio('1717', '1') ?><?php if($f1717==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1717" value="2" <?= set_radio('1717', '2') ?><?php if($f1717==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1717" value="3" <?= set_radio('1717', '3') ?><?php if($f1717==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1717" value="4" <?= set_radio('1717', '4') ?><?php if($f1717==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1717" value="5" <?= set_radio('1717', '5') ?><?php if($f1717==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-17</b>

                            </small>

                                Kemampuan belajar                            <small>

                                <b class="text-danger">F17-18</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1718" value="17"> 

                            <input type="hidden" name="pilihan1718" value="18">

                                <input type="radio" name="1718" value="1" <?= set_radio('1718', '1') ?><?php if($f1718==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1718" value="2" <?= set_radio('1718', '2') ?><?php if($f1718==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1718" value="3" <?= set_radio('1718', '3') ?><?php if($f1718==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1718" value="4" <?= set_radio('1718', '4') ?><?php if($f1718==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1718" value="5" <?= set_radio('1718', '5') ?><?php if($f1718==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1719" value="17"> 

                            <input type="hidden" name="pilihan1719" value="19">

                            <input type="radio" name="1719" value="1" <?= set_radio('1719', '1') ?><?php if($f1719==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1719" value="2" <?= set_radio('1719', '2') ?><?php if($f1719==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1719" value="3" <?= set_radio('1719', '3') ?><?php if($f1719==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1719" value="4" <?= set_radio('1719', '4') ?><?php if($f1719==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1719" value="5" <?= set_radio('1719', '5') ?><?php if($f1719==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-19</b>

                            </small>

                                Kemampuan berkomunikasi                            <small>

                                <b class="text-danger">F17-20</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1720" value="17"> 

                            <input type="hidden" name="pilihan1720" value="20"> 

                                <input type="radio" name="1720" value="1" <?= set_radio('1720', '1') ?><?php if($f1720==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1720" value="2" <?= set_radio('1720', '2') ?><?php if($f1720==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1720" value="3" <?= set_radio('1720', '3') ?><?php if($f1720==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1720" value="4" <?= set_radio('1720', '4') ?><?php if($f1720==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1720" value="5" <?= set_radio('1720', '5') ?><?php if($f1720==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1721" value="17"> 

                            <input type="hidden" name="pilihan1721" value="21">

                            <input type="radio" name="1721" value="1" <?= set_radio('1721', '1') ?><?php if($f1721==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1721" value="2" <?= set_radio('1721', '2') ?><?php if($f1721==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1721" value="3" <?= set_radio('1721', '3') ?><?php if($f1721==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1721" value="4" <?= set_radio('1721', '4') ?><?php if($f1721==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1721" value="5" <?= set_radio('1721', '5') ?><?php if($f1721==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-21</b>

                            </small>

                                Bekerja di bawah tekanan                            <small>

                                <b class="text-danger">F17-22</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1722" value="17"> 

                            <input type="hidden" name="pilihan1722" value="22"> 

                                <input type="radio" name="1722" value="1" <?= set_radio('1722', '1') ?><?php if($f1722==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1722" value="2" <?= set_radio('1722', '2') ?><?php if($f1722==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1722" value="3" <?= set_radio('1722', '3') ?><?php if($f1722==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1722" value="4" <?= set_radio('1722', '4') ?><?php if($f1722==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1722" value="5" <?= set_radio('1722', '5') ?><?php if($f1722==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1723" value="17"> 

                            <input type="hidden" name="pilihan1723" value="23">

                            <input type="radio" name="1723" value="1" <?= set_radio('1723', '1') ?><?php if($f1723==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1723" value="2" <?= set_radio('1723', '2') ?><?php if($f1723==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1723" value="3" <?= set_radio('1723', '3') ?><?php if($f1723==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1723" value="4" <?= set_radio('1723', '4') ?><?php if($f1723==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1723" value="5" <?= set_radio('1723', '5') ?><?php if($f1723==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-23</b>

                            </small>

                                Manajemen waktu                            

                            <small>

                                <b class="text-danger">F17-24</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1724" value="17"> 

                            <input type="hidden" name="pilihan1724" value="24"> 

                                <input type="radio" name="1724" value="1" <?= set_radio('1724', '1') ?><?php if($f1724==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1724" value="2" <?= set_radio('1724', '2') ?><?php if($f1724==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1724" value="3" <?= set_radio('1724', '3') ?><?php if($f1724==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1724" value="4" <?= set_radio('1724', '4') ?><?php if($f1724==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1724" value="5" <?= set_radio('1724', '5') ?><?php if($f1724==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                                            <b>A</b>

                            <input type="hidden" name="kode1725" value="17"> 

                            <input type="hidden" name="pilihan1725" value="25">

                            <input type="radio" name="1725" value="1" <?= set_radio('1725', '1') ?><?php if($f1725==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1725" value="2" <?= set_radio('1725', '2') ?><?php if($f1725==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1725" value="3" <?= set_radio('1725', '3') ?><?php if($f1725==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1725" value="4" <?= set_radio('1725', '4') ?><?php if($f1725==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1725" value="5" <?= set_radio('1725', '5') ?><?php if($f1725==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-25</b>

                            </small>

                                Bekerja dalam tim/bekerjasama dengan orang lain

                            <small>

                                <b class="text-danger">F17-26</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1726" value="17"> 

                            <input type="hidden" name="pilihan1726" value="26"> 

                                <input type="radio" name="1726" value="1" <?= set_radio('1726', '1') ?><?php if($f1726==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1726" value="2" <?= set_radio('1726', '2') ?><?php if($f1726==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1726" value="3" <?= set_radio('1726', '3') ?><?php if($f1726==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1726" value="4" <?= set_radio('1726', '4') ?><?php if($f1726==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1726" value="5" <?= set_radio('1726', '5') ?><?php if($f1726==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1727" value="17"> 

                            <input type="hidden" name="pilihan1727" value="27">

                            <input type="radio" name="1727" value="1" <?= set_radio('1727', '1') ?><?php if($f1727==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1727" value="2" <?= set_radio('1727', '2') ?><?php if($f1727==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1727" value="3" <?= set_radio('1727', '3') ?><?php if($f1727==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1727" value="4" <?= set_radio('1727', '4') ?><?php if($f1727==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1727" value="5" <?= set_radio('1727', '5') ?><?php if($f1727==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-27</b>

                            </small>

                              Kemampuan dalam memecahkan masalah

                          <small>

                                <b class="text-danger">F17-28</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1728" value="17"> 

                            <input type="hidden" name="pilihan1728" value="28"> 

                                <input type="radio" name="1728" value="1" <?= set_radio('1728', '1') ?><?php if($f1728==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1728" value="2" <?= set_radio('1728', '2') ?><?php if($f1728==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1728" value="3" <?= set_radio('1728', '3') ?><?php if($f1728==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1728" value="4" <?= set_radio('1728', '4') ?><?php if($f1728==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1728" value="5" <?= set_radio('1728', '5') ?><?php if($f1728==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1729" value="17"> 

                            <input type="hidden" name="pilihan1729" value="29">

                            <input type="radio" name="1729" value="1" <?= set_radio('1729', '1') ?><?php if($f1729==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1729" value="2" <?= set_radio('1729', '2') ?><?php if($f1729==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1729" value="3" <?= set_radio('1729', '3') ?><?php if($f1729==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1729" value="4" <?= set_radio('1729', '4') ?><?php if($f1729==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1729" value="5" <?= set_radio('1729', '5') ?><?php if($f1729==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-29</b>

                            </small>

                                Negosiasi                        <small>

                                <b class="text-danger">F17-30</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1730" value="17"> 

                            <input type="hidden" name="pilihan1730" value="30"> 

                                <input type="radio" name="1730" value="1" <?= set_radio('1730', '1') ?><?php if($f1730==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1730" value="2" <?= set_radio('1730', '2') ?><?php if($f1730==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1730" value="3" <?= set_radio('1730', '3') ?><?php if($f1730==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1730" value="4" <?= set_radio('1730', '4') ?><?php if($f1730==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1730" value="5" <?= set_radio('1730', '5') ?><?php if($f1730==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1731" value="17"> 

                            <input type="hidden" name="pilihan1731" value="31">

                            <input type="radio" name="1731" value="1" <?= set_radio('1731', '1') ?><?php if($f1731==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1731" value="2" <?= set_radio('1731', '2') ?><?php if($f1731==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1731" value="3" <?= set_radio('1731', '3') ?><?php if($f1731==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1731" value="4" <?= set_radio('1731', '4') ?><?php if($f1731==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1731" value="5" <?= set_radio('1731', '5') ?><?php if($f1731==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-31</b>

                            </small>

                                Kemampuan analisis                  <small>

                                <b class="text-danger">F17-32</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1732" value="17"> 

                            <input type="hidden" name="pilihan1732" value="32">  

                                <input type="radio" name="1732" value="1" <?= set_radio('1732', '1') ?><?php if($f1732==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1732" value="2" <?= set_radio('1732', '2') ?><?php if($f1732==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1732" value="3" <?= set_radio('1732', '3') ?><?php if($f1732==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1732" value="4" <?= set_radio('1732', '4') ?><?php if($f1732==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1732" value="5" <?= set_radio('1732', '5') ?><?php if($f1732==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                                            <b>A</b>

                            <input type="hidden" name="kode1733" value="17"> 

                            <input type="hidden" name="pilihan1733" value="33"> 

                            <input type="radio" name="1733" value="1" <?= set_radio('1733', '1') ?><?php if($f1733==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1733" value="2" <?= set_radio('1733', '2') ?><?php if($f1733==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1733" value="3" <?= set_radio('1733', '3') ?><?php if($f1733==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1733" value="4" <?= set_radio('1733', '4') ?><?php if($f1733==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1733" value="5" <?= set_radio('1733', '5') ?><?php if($f1733==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-33</b>

                            </small>

                                Toleransi                      <small>

                                <b class="text-danger">F17-34</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1734" value="17"> 

                            <input type="hidden" name="pilihan1734" value="34">

                                <input type="radio" name="1734" value="1" <?= set_radio('1734', '1') ?><?php if($f1734==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1734" value="2" <?= set_radio('1734', '2') ?><?php if($f1734==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1734" value="3" <?= set_radio('1734', '3') ?><?php if($f1734==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1734" value="4" <?= set_radio('1734', '4') ?><?php if($f1734==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1734" value="5" <?= set_radio('1734', '5') ?><?php if($f1734==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1735" value="17"> 

                            <input type="hidden" name="pilihan1735" value="35">

                            <input type="radio" name="1735" value="1" <?= set_radio('1735', '1') ?><?php if($f1735==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1735" value="2" <?= set_radio('1735', '2') ?><?php if($f1735==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1735" value="3" <?= set_radio('1735', '3') ?><?php if($f1735==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1735" value="4" <?= set_radio('1735', '4') ?><?php if($f1735==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1735" value="5" <?= set_radio('1735', '5') ?><?php if($f1735==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-35</b>

                            </small>

                                Kemampuan adaptasi            <small>

                                <b class="text-danger">F17-36</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1736" value="17"> 

                            <input type="hidden" name="pilihan1736" value="36"> 

                                <input type="radio" name="1736" value="1" <?= set_radio('1736', '1') ?><?php if($f1736==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1736" value="2" <?= set_radio('1736', '2') ?><?php if($f1736==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1736" value="3" <?= set_radio('1736', '3') ?><?php if($f1736==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1736" value="4" <?= set_radio('1736', '4') ?><?php if($f1736==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1736" value="5" <?= set_radio('1736', '5') ?><?php if($f1736==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                                            <b>A</b>

                            <input type="hidden" name="kode1737" value="17"> 

                            <input type="hidden" name="pilihan1737" value="37">

                            <input type="radio" name="1737" value="1" <?= set_radio('1737', '1') ?><?php if($f1737==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1737" value="2" <?= set_radio('1737', '2') ?><?php if($f1737==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1737" value="3" <?= set_radio('1737', '3') ?><?php if($f1737==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1737" value="4" <?= set_radio('1737', '4') ?><?php if($f1737==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1737" value="5" <?= set_radio('1737', '5') ?><?php if($f1737==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-37</b>

                            </small>

                                Loyalitas  <small>

                                <b class="text-danger">F17-38</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1738" value="17"> 

                            <input type="hidden" name="pilihan1738" value="38"> 

                                <input type="radio" name="1738" value="1" <?= set_radio('1738', '1') ?><?php if($f1738==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1738" value="2" <?= set_radio('1738', '2') ?><?php if($f1738==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1738" value="3" <?= set_radio('1738', '3') ?><?php if($f1738==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1738" value="4" <?= set_radio('1738', '4') ?><?php if($f1738==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1738" value="5" <?= set_radio('1738', '5') ?><?php if($f1738==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                                            <b>A</b>

                            <input type="hidden" name="kode1737A" value="17"> 

                            <input type="hidden" name="pilihan1737A" value="37A">

                            <input type="radio" name="1737A" value="1" <?= set_radio('1737A', '1') ?><?php if($f1737a==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1737A" value="2" <?= set_radio('1737A', '2') ?><?php if($f1737a==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1737A" value="3" <?= set_radio('1737A', '3') ?><?php if($f1737a==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1737A" value="4" <?= set_radio('1737A', '4') ?><?php if($f1737a==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1737A" value="5" <?= set_radio('1737A', '5') ?><?php if($f1737a==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-37A</b>

                            </small>

                                Integritas               <small>

                                <b class="text-danger">F17-38A</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1738A" value="17"> 

                            <input type="hidden" name="pilihan1738A" value="38A">

                                <input type="radio" name="1738A" value="1" <?= set_radio('1738A', '1') ?><?php if($f1738a==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1738A" value="2" <?= set_radio('1738A', '2') ?><?php if($f1738a==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1738A" value="3" <?= set_radio('1738A', '3') ?><?php if($f1738a==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1738A" value="4" <?= set_radio('1738A', '4') ?><?php if($f1738a==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1738A" value="5" <?= set_radio('1738A', '5') ?><?php if($f1738a==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1739" value="17"> 

                            <input type="hidden" name="pilihan1739" value="39">

                            <input type="radio" name="1739" value="1" <?= set_radio('1739', '1') ?><?php if($f1739==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1739" value="2" <?= set_radio('1739', '2') ?><?php if($f1739==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1739" value="3" <?= set_radio('1739', '3') ?><?php if($f1739==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1739" value="4" <?= set_radio('1739', '4') ?><?php if($f1739==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1739" value="5" <?= set_radio('1739', '5') ?><?php if($f1739==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-39</b>

                            </small>

                                Bekerja dgn orang yang berbeda budaya maupun ltr belakang<small>

                                <b class="text-danger">F17-40</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1740" value="17"> 

                            <input type="hidden" name="pilihan1740" value="40"> 

                                <input type="radio" name="1740" value="1" <?= set_radio('1740', '1') ?><?php if($f1740==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1740" value="2" <?= set_radio('1740', '2') ?><?php if($f1740==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1740" value="3" <?= set_radio('1740', '3') ?><?php if($f1740==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1740" value="4" <?= set_radio('1740', '4') ?><?php if($f1740==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1740" value="5" <?= set_radio('1740', '5') ?><?php if($f1740==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1741" value="17"> 

                            <input type="hidden" name="pilihan1741" value="41">

                            <input type="radio" name="1741" value="1" <?= set_radio('1741', '1') ?><?php if($f1741==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1741" value="2" <?= set_radio('1741', '2') ?><?php if($f1741==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1741" value="3" <?= set_radio('1741', '3') ?><?php if($f1741==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1741" value="4" <?= set_radio('1741', '4') ?><?php if($f1741==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1741" value="5" <?= set_radio('1741', '5') ?><?php if($f1741==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-41</b>

                            </small>

                                Kepemimpinan        <small>

                                <b class="text-danger">F17-42</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1742" value="17"> 

                            <input type="hidden" name="pilihan1742" value="42"> 

                                <input type="radio" name="1742" value="1" <?= set_radio('1742', '1') ?><?php if($f1742==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1742" value="2" <?= set_radio('1742', '2') ?><?php if($f1742==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1742" value="3" <?= set_radio('1742', '3') ?><?php if($f1742==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1742" value="4" <?= set_radio('1742', '4') ?><?php if($f1742==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1742" value="5" <?= set_radio('1742', '5') ?><?php if($f1742==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1743" value="17"> 

                            <input type="hidden" name="pilihan1743" value="43">

                            <input type="radio" name="1743" value="1" <?= set_radio('1743', '1') ?><?php if($f1743==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1743" value="2" <?= set_radio('1743', '2') ?><?php if($f1743==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1743" value="3" <?= set_radio('1743', '3') ?><?php if($f1743==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1743" value="4" <?= set_radio('1743', '4') ?><?php if($f1743==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1743" value="5" <?= set_radio('1743', '5') ?><?php if($f1743==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-43</b>

                            </small>

                                Kemampuan dalam memegang tanggungjawab

                            <small>

                                <b class="text-danger">F17-44</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1744" value="17"> 

                            <input type="hidden" name="pilihan1744" value="44"> 

                                <input type="radio" name="1744" value="1" <?= set_radio('1744', '1') ?><?php if($f1744==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1744" value="2" <?= set_radio('1744', '2') ?><?php if($f1744==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1744" value="3" <?= set_radio('1744', '3') ?><?php if($f1744==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1744" value="4" <?= set_radio('1744', '4') ?><?php if($f1744==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1744" value="5" <?= set_radio('1744', '5') ?><?php if($f1744==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1745" value="17"> 

                            <input type="hidden" name="pilihan1745" value="45">

                            <input type="radio" name="1745" value="1" <?= set_radio('1745', '1') ?><?php if($f1745==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1745" value="2" <?= set_radio('1745', '2') ?><?php if($f1745==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1745" value="3" <?= set_radio('1745', '3') ?><?php if($f1745==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1745" value="4" <?= set_radio('1745', '4') ?><?php if($f1745==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1745" value="5" <?= set_radio('1745', '5') ?><?php if($f1745==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-45</b>

                            </small>

                               Inisiatif <small>

                                <b class="text-danger">F17-46</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1746" value="17"> 

                            <input type="hidden" name="pilihan1746" value="46"> 

                                <input type="radio" name="1746" value="1" <?= set_radio('1746', '1') ?><?php if($f1746==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1746" value="2" <?= set_radio('1746', '2') ?><?php if($f1746==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1746" value="3" <?= set_radio('1746', '3') ?><?php if($f1746==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1746" value="4" <?= set_radio('1746', '4') ?><?php if($f1746==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1746" value="5" <?= set_radio('1746', '5') ?><?php if($f1746==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                                            <b>A</b>

                            <input type="hidden" name="kode1747" value="17"> 

                            <input type="hidden" name="pilihan1747" value="47">

                            <input type="radio" name="1747" value="1" <?= set_radio('1747', '1') ?><?php if($f1747==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1747" value="2" <?= set_radio('1747', '2') ?><?php if($f1747==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1747" value="3" <?= set_radio('1747', '3') ?><?php if($f1747==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1747" value="4" <?= set_radio('1747', '4') ?><?php if($f1747==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1747" value="5" <?= set_radio('1747', '5') ?><?php if($f1747==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-47</b> <!------------>

                            </small>

                                Manajemen proyek/program  <small>

                                <b class="text-danger">F17-48</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1748" value="17"> 

                            <input type="hidden" name="pilihan1748" value="48">

                                <input type="radio" name="1748" value="1" <?= set_radio('1748', '1') ?><?php if($f1748==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1748" value="2" <?= set_radio('1748', '2') ?><?php if($f1748==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1748" value="3" <?= set_radio('1748', '3') ?><?php if($f1748==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1748" value="4" <?= set_radio('1748', '4') ?><?php if($f1748==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1748" value="5" <?= set_radio('1748', '5') ?><?php if($f1748==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1749" value="17"> 

                            <input type="hidden" name="pilihan1749" value="49">

                            <input type="radio" name="1749" value="1" <?= set_radio('1749', '1') ?><?php if($f1749==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1749" value="2" <?= set_radio('1749', '2') ?><?php if($f1749==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1749" value="3" <?= set_radio('1749', '3') ?><?php if($f1749==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1749" value="4" <?= set_radio('1749', '4') ?><?php if($f1749==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1749" value="5" <?= set_radio('1749', '5') ?><?php if($f1749==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-49</b>

                            </small>

                                Kemampuan untuk memresentasikan ide/produk/laporan  <small>

                                <b class="text-danger">F17-50</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1750" value="17"> 

                            <input type="hidden" name="pilihan1750" value="50"> 

                                <input type="radio" name="1750" value="1" <?= set_radio('1750', '1') ?><?php if($f1750==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1750" value="2" <?= set_radio('1750', '2') ?><?php if($f1750==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1750" value="3" <?= set_radio('1750', '3') ?><?php if($f1750==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1750" value="4" <?= set_radio('1750', '4') ?><?php if($f1750==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1750" value="5" <?= set_radio('1750', '5') ?><?php if($f1750==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1751" value="17"> 

                            <input type="hidden" name="pilihan1751" value="51">

                            <input type="radio" name="1751" value="1" <?= set_radio('1751', '1') ?><?php if($f1751==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1751" value="2" <?= set_radio('1751', '2') ?><?php if($f1751==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1751" value="3" <?= set_radio('1751', '3') ?><?php if($f1751==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1751" value="4" <?= set_radio('1751', '4') ?><?php if($f1751==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1751" value="5" <?= set_radio('1751', '5') ?><?php if($f1751==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-51</b>

                            </small>

                                Kemampuan dalam menulis laporan, memo dan dokumen  <small>

                                <b class="text-danger">F17-52</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1752" value="17"> 

                            <input type="hidden" name="pilihan1752" value="52">  

                                <input type="radio" name="1752" value="1" <?= set_radio('1752', '1') ?><?php if($f1752==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1752" value="2" <?= set_radio('1752', '2') ?><?php if($f1752==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1752" value="3" <?= set_radio('1752', '3') ?><?php if($f1752==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1752" value="4" <?= set_radio('1752', '4') ?><?php if($f1752==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1752" value="5" <?= set_radio('1752', '5') ?><?php if($f1752==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                            <br>

                        

                                            <b>A</b>

                            <input type="hidden" name="kode1753" value="17"> 

                            <input type="hidden" name="pilihan1753" value="53">

                            <input type="radio" name="1753" value="1" <?= set_radio('1753', '1') ?><?php if($f1753==1) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1753" value="2" <?= set_radio('1753', '2') ?><?php if($f1753==2) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1753" value="3" <?= set_radio('1753', '3') ?><?php if($f1753==3) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1753" value="4" <?= set_radio('1753', '4') ?><?php if($f1753==4) echo "checked='checked'"; ?>/>

                            <input type="radio" name="1753" value="5" <?= set_radio('1753', '5') ?><?php if($f1753==5) echo "checked='checked'"; ?>/>

                            <span class="pull-center">

                            <small>

                                <b class="text-danger">F17-53</b>

                            </small>

                               Kemampuan untuk terus belajar sepanjang hayat

                            <small>

                                <b class="text-danger">F17-54</b>

                            </small>

                            </span>

                            <span class="pull-right">

                            <input type="hidden" name="kode1754" value="17"> 

                            <input type="hidden" name="pilihan1754" value="54"> 

                                <input type="radio" name="1754" value="1" <?= set_radio('1754', '1') ?><?php if($f1754==1) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1754" value="2" <?= set_radio('1754', '2') ?><?php if($f1754==2) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1754" value="3" <?= set_radio('1754', '3') ?><?php if($f1754==3) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1754" value="4" <?= set_radio('1754', '4') ?><?php if($f1754==4) echo "checked='checked'"; ?>/>

                                <input type="radio" name="1754" value="5" <?= set_radio('1754', '5') ?><?php if($f1754==5) echo "checked='checked'"; ?>/>

                                <b>B</b>

                            </span>

                </tr><tr></tr>

                <td>

                <b>Peringatan<span class="text-danger">*</span> </b>: <b>F17</b> bagian <b>A</b> dan Bagian <b>B</b> Wajib diisi

                </td>

                <td colspan="2">

                <button type="submit" class="btn btn-primary btn-round btn-sm">

                <i class="ace-icon fa fa-download"></i> <?= $button ?></button> 

                &nbsp; <a href="<?= site_url('home') ?>" class="btn btn-inverse btn-round btn-sm">

                        <i class="ace-icon fa fa-fire orange"></i> Batal</a> 
                &nbsp; 
             	<a class="btn btn-primary btn-round btn-sm" href="<?= site_url('cetak.asp/'.md5($this->session->userdata('id_bio'))) ?>" target='blank'>
                                    <i class="ace-icon fa fa-file-o"></i> Cetak Kuisioner</a></td>

            </table>

    </div>

</div>

    </form>