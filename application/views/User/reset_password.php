<div class="page-header">
    <h1>
      <i class="ace-icon fa fa-lock blue"></i>
      Ganti Password Pengguna<small>
      <i class="ace-icon fa fa-angle-double-right"></i>
        <?= $nama; ?>
      </small>
    </h1>
</div><!-- /.page-header -->
<div class="col-sm-5">
<div class="widget-box">
    <div class="widget-header">
    <?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
      <h4 class="widget-title">Ganti Password</h4>
    </div>
      <div class="widget-body">
          <div class="widget-main no-padding">
            <form action="<?php echo $action; ?>" method="post" id="form">
              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
              <fieldset>
              <span class="input-icon input-icon-right">
                <input type="text"  placeholder="Nama" disabled="disabled" value="<?php echo $nama; ?>" />
                  <i class="ace-icon fa fa-user blue"></i>
              </span>
                <hr>
                <span class="input-icon input-icon-right">
                  <input type="password" name="pass" id="pass" placeholder="Password" />
                    <i class="ace-icon fa fa-lock blue"></i>
                </span>
                <div class="space"></div>
                <span class="input-icon input-icon-right">
                <input type="password" name="pass1" id="pass1" placeholder="Konfirmasi Password" />
                  <i class="ace-icon fa fa-lock green"></i>
                  </span>
                  <div class="space"></div>
                  <label class="inline">
                      <input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox" id="sandi" />
                        <span class="lbl"> Tampilkan Password</span>
                  </label>
                  </fieldset>
                  <input type="hidden" name="id_biodata" id="nama" value="<?= $id_biodata; ?>">
                  <div class="form-actions center">
                  <button type="submit" class="btn btn-info btn-sm">
                              <i class="ace-icon fa fa-lock bigger-110"></i><?= $button ?>
                            </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    </div>
<script type="text/javascript">
  $(document).ready(function(){   
    $("#sandi").click(function(){
      if($(this).is(':checked')){
        $("#pass").attr('type','text');
        $("#pass1").attr('type','text');
      }else{
        $("#pass").attr('type','password');
        $("#pass1").attr('type','password');
      }
    });
    $("#form").validate({ 
            rules: {
                pass1: {
                    qualTo: "#pass" 
                } 
            } 
    }); 
});
</script>