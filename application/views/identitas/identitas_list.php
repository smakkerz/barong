
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <div class="page-header">
                            <h1><i class="ace-icon fa fa-male"></i>
                                Identitas Peserta Kuesioner Universitas Semarang
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    <?php echo anchor('Biodata/excel','<i class="ace-icon fa fa-download"></i> <b>Excel</b>',array('class'=>'btn btn-success btn-sm'));?>
                                </small>
                            </h1>
                        </div><!-- /.page-header -->
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nim</th>
		    <th>Nama</th>
		    <th>No Hp</th>
		    <th>Email</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($identitas_data as $identitas)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo ucfirst($identitas->nim) ?></td>
		    <td><?php echo ucfirst($identitas->nama) ?></td>
		    <td><?php echo $identitas->no_hp ?></td>
		    <td><?php echo $identitas->email ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('identitas/update/'.$identitas->id_identitas),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-primary btn-sm')); 
			echo '  '; 
			echo anchor(site_url('identitas/delete/'.$identitas->id_identitas),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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