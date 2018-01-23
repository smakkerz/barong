
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>T_pilihan Read</h3>
        <table class="table table-bordered">
	    <tr><td>Kode Pilihan</td><td><?php echo $kode_pilihan; ?></td></tr>
	    <tr><td>Kode Kuis</td><td><?php echo $kode_kuis; ?></td></tr>
	    <tr><td>Pilihan</td><td><?php echo $pilihan; ?></td></tr>
	    <tr><td>Jenis Field</td><td><?php echo $jenis_field; ?></td></tr>
	    <tr><td>Nilai</td><td><?php echo $nilai; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pilihan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->