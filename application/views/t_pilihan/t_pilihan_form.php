<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>T_PILIHAN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
	    <tr><td>Kode Pilihan <?php echo form_error('kode_pilihan') ?></td>
            <td><input type="text" class="form-control" name="kode_pilihan" id="kode_pilihan" placeholder="Kode Pilihan" value="<?php echo $kode_pilihan; ?>" />
        </td>
	    <tr><td>Kode Kuis <?php echo form_error('kode_kuis') ?></td>
            <td><input type="text" class="form-control" name="kode_kuis" id="kode_kuis" placeholder="Kode Kuis" value="<?php echo $kode_kuis; ?>" />
        </td>
	    <tr><td>Pilihan <?php echo form_error('pilihan') ?></td>
            <td><input type="text" class="form-control" name="pilihan" id="pilihan" placeholder="Pilihan" value="<?php echo $pilihan; ?>" />
        </td>
	    <tr><td>Jenis Field <?php echo form_error('jenis_field') ?></td>
            <td><select class="form-control" name="jenis_field" id="jenis_field">
                  <option value="checkbox" >checkbox</option>
                  <option value="radio">radio</option>
                  <option value="text">teks</option>
                  <option value="number">angka</option>
                </select>
        </td>
	    <tr><td>Nilai <?php echo form_error('nilai') ?></td>
            <td><input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai" value="<?php echo $nilai; ?>" />
        </td>
	    <input type="hidden" name="id_pilihan" value="<?php echo $id_pilihan; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pilihan') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->