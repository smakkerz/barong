<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>T_KUIS_DETAIL</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
	    <tr><td>Kode Kuis Detail <?php echo form_error('kode_kuis_detail') ?></td>
            <td><input type="text" class="form-control" name="kode_kuis_detail" id="kode_kuis_detail" placeholder="Kode Kuis Detail" value="<?php echo $kode_kuis_detail; ?>" />
        </td>
	    <tr><td>Kode Kuis <?php echo form_error('kode_kuis') ?></td>
            <td>            <select class="form-control" name="kode_kuis" id="kode_kuis">
            <option>-- Pilih Kode Kuisioner --</option>
                <?php 
                foreach ($list_kuis->result() as $key) {
                    echo "<option value='".$key->kode_kuis."'>".$key->kode_kuis."</option>";
                }
                ?>
                </select>
        </td>
	    <tr><td>Kuis Detail <?php echo form_error('kuis_detail') ?></td>
            <td><input type="text" class="form-control" name="kuis_detail" id="kuis_detail" placeholder="Kuis Detail" value="<?php echo $kuis_detail; ?>" />
        </td>
	    <input type="hidden" name="id_detail" value="<?php echo $id_detail; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kuis_detail') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->