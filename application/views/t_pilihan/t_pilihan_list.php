
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>T_PILIHAN LIST <?php echo anchor('pilihan/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('pilihan/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Kode Pilihan</th>
		    <th>Kode Kuis</th>
		    <th>Pilihan</th>
		    <th>Jenis Field</th>
		    <th>Nilai</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($pilihan_data as $pilihan)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $pilihan->kode_pilihan ?></td>
		    <td><?php echo $pilihan->kode_kuis ?></td>
		    <td><?php echo $pilihan->pilihan ?></td>
		    <td><?php echo $pilihan->jenis_field ?></td>
		    <td><?php echo $pilihan->nilai ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('pilihan/read/'.$pilihan->id_pilihan),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('pilihan/update/'.$pilihan->id_pilihan),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('pilihan/delete/'.$pilihan->id_pilihan),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->