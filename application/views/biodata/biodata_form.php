<div class="page-header">
    <h1> Form Edit Pengguna
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Hai, <?php echo ucfirst($this->session->userdata('nama')); ?>
        </small>
    </h1>
</div><!-- /.page-header -->
<?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
<div class='row'>
    <div class="col-xs-12">
        <form action="<?php echo $action; ?>" method="post" class="form-horizontal">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
        <div class="form-group <?= set_validation_style('nama') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="varchar">
            <b>Nama </b></label>
            <div class="col-xs-12 col-sm-5">
            <span class="block input-icon input-icon-right"> 
            <input type="text"  minlength="3" class="width-100" name="nama" id="nama" title="" placeholder="Nama" value="<?php echo $nama; ?>" />
            <i class="ace-icon fa fa-flag green"></i>
            <?= set_icon('nama') ?>
            <?php echo set_validation('nama') ?>
            </span>
            </div>
        </div>
        <div class="form-group <?= set_validation_style('nim') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right"  for="varchar">
            <b>NIM </b></label>
            <div class="col-xs-12 col-sm-5">
            <span class="block input-icon input-icon-right"> 
            <input type="text" class="width-100" pattern="[a-zA-Z0-9]+" name="nim" id="nim" placeholder="NIM(Ex: A111110001)" maxlength="11" minlength="10" required="required" value="<?php echo $nim; ?>" oninvalid="this.setCUstomValidity('Isi dengan huruf Angka')"  />
            <?= set_icon('nim') ?>
            <?php echo set_validation('nim') ?>
            <i class="ace-icon fa fa-user orange"></i>
            </span>
            </div>
        </div>
        <div class="form-group <?= set_validation_style('progdi') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="varchar">
            <b>Program Studi </b></label>
            <div class="col-xs-12 col-sm-5">
            <span class="block input-icon input-icon-right"> 
                <select class="width-100" required="required" name="progdi" id="progdi">
                    <option value="">-- Pilih Program Studi --</option>
                    <?php foreach ($list_progdi->result() as $key) {
                            echo "<option value='".$key->id_progdi."'";
                            echo $key->id_progdi==$progdi?'selected':'';
                            echo">".$key->strata." ".$key->jurusan."</option>";
                        } ?>
                </select>
                <i class="ace-icon fa fa-graduation-cap blue"></i>
                <?= set_icon('progdi') ?>
            <?php echo set_validation('progdi') ?>
            </span>
                                </div>
        </div>
        <div class="form-group <?= set_validation_style('bekerja') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right"  for="varchar">
            <b>Bekerja tidak ?</b></label>
            <div class="col-xs-12 col-sm-5">
            <div class="radio">
                <label>
                <input name="bekerja" type="radio" id="ya" value="Ya" class="ace" <?php if($bekerja=='Ya') echo "checked='checked'"; ?> />
                        <span class="lbl"> Ya</span>
                </label>
                <label>
                <input name="bekerja" type="radio" id="belum" value="Belum" class="ace" <?php if($bekerja=='Belum') echo "checked='checked'"; ?> />
                        <span class="lbl"> Belum</span>
                </label>
            <?php echo set_validation('bekerja') ?>
            </span>
            </div>
            </div>
        </div>
        <div id="kutip">
        <div class="form-group <?= set_validation_style('perusahaan') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="varchar">
            <b>Nama Perusahaan</b> </label>
            <div class="col-xs-12 col-sm-5">
            <span class="block input-icon input-icon-right"> 
            <input type="text" class="width-100" name="perusahaan" id="perusahaan" placeholder="Perusahaan" value="<?php echo $perusahaan; ?>" />
            <i class="ace-icon fa fa-building orange"></i>
            <?= set_icon('perusahaan') ?>
            <?php echo set_validation('perusahaan') ?>
            </span>
            </div>
        </div>
        <div class="form-group <?= set_validation_style('jabatan') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right"  for="varchar">
            <b>Jabatan </b></label>
            <div class="col-xs-12 col-sm-5">
            <span class="block input-icon input-icon-right"> 
            <input type="text" class="width-100" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
            <i class="ace-icon fa fa-star fa-spin fa-3x fa-fw blue"></i>
            <?= set_icon('jabatan') ?>
            <?php echo set_validation('jabatan') ?>
            </span>
            </div>
        </div>
        <div class="form-group <?= set_validation_style('jeda') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="int">
            Waktu mendapatkan pekerjaan setelah wisuda ?</label>
            <div class="col-xs-12 col-sm-2">
            <span class="block input-icon input-icon-right"> 
            <input type="number" class="width-100" name="jeda" id="jeda" placeholder="Waktu Jeda dalamskala bulan" value="<?php echo $jeda; ?>" /><i class="ace-icon fa fa-calendar green"> Bulan</i>
            <?= set_icon('jeda') ?>
            <?php echo set_validation('jeda') ?>
            </span>
            </div>
        </div>
        </div>
        <div class="form-group <?= set_validation_style('jenis_kelamin') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="varchar">
            <b>Jenis Kelamin</b> </label>
            <div class="col-xs-12 col-sm-5">
            <div class="radio">
            <label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Pria" class="ace" <?php if($jenis_kelamin=='Pria') echo "checked='checked'"; ?> /><span class="lbl"> Pria</span>
                </label>
                <label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Wanita" class="ace" <?php if($jenis_kelamin=='Wanita') echo "checked='checked'"; ?> /><span class="lbl"> Wanita</span>
            </label>
            <?php echo set_validation('jenis_kelamin') ?>
            </span>
            </div>
            </div>
        </div>
        <div class="form-group <?= set_validation_style('domisili') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="varchar">
            <b>Domisili Sekarang </b></label>
            <div class="col-xs-12 col-sm-5">
            <span class="block input-icon input-icon-right"> 
            <input type="text" class="width-100" name="domisili" required="required" id="domisili Sekarang" placeholder="Domisili Sekarang(Ex: Semarang)" value="<?php echo $domisili; ?>" />
            <i class="ace-icon fa fa-map-marker red"></i>
            <?= set_icon('domisili') ?>
            <?php echo set_validation('domisili') ?>
            </span>
            </div>
        </div>
        <div class="form-group <?= set_validation_style('no_hp') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="varchar">
            <b>No Hp/Telp </b></label>
            <div class="col-xs-12 col-sm-5">
            <span class="block input-icon input-icon-right"> 
            <input type="tel" class="width-100" maxlength="13" minlength="10" pattern="[0-9]+" required="required" name="no_hp" id="no_hp" placeholder="No Hp/Telp(Ex: 08999123456)" value="<?php echo $no_hp; ?>" />
            <i class="ace-icon fa fa-phone blue"></i>
            <?= set_icon('no_hp') ?>
            <?php echo set_validation('no_hp') ?>
            </span>
            </div>
        </div> 
        <?php if($this->session->userdata('level') == 'UCACJAYA'){ ?>
        <div class="form-group <?= set_validation_style('level') ?>">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="varchar">
            <b>Level Pengguna</b> <?php echo form_error('level') ?></label>
            <div class="col-xs-12 col-sm-5">
            <span class="block input-icon input-icon-right"> 
                <select name="level" class='width-100'>
                    <option value="User" <?php echo $level=='User'?'selected':'';?>>Alumni/Mahasiswa</option>
                    <option value="UCACJAYA" <?php echo $level=='UCACJAYA'?'selected':'';?>>Administrator</option>
                </select>
                <i class="ace-icon fa fa-refresh fa-spin fa-3x fa-fw blue"></i>
            <?= set_icon('level') ?>
            <?php echo set_validation('level') ?>
            </span>
            </div>
        </div>
        <?php } else {
            echo form_hidden('level', $level);
        } ?>
        <input type="hidden" name="id_biodata" value="<?php echo $id_biodata; ?>" /> 
        <button type="submit" class="btn btn-primary btn-round">
        <i class="ace-icon fa fa-download"></i> <?php echo $button ?></button> 
        <a href="<?php echo site_url('biodata') ?>" class="btn btn-inverse btn-round">
                        <i class="ace-icon fa fa-fire orange"></i> Batal</a>
    </form>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
        <script>
                $(function(){
                  $("#belum").click(function(){
                    $("#kutip").slideUp();
                  });
                });

                $(function(){
                  $("#ya").click(function(){
                    $("#kutip").slideDown();
                  });
                });
            
        </script>