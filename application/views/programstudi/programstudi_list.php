 <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                    <div class="page-header">
                            <h1><i class="ace-icon fa fa-graduation-cap"></i>
                                Program Studi Universitas Semarang
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    <?php echo anchor('programstudi/create/','<i class="ace-icon fa fa-graduation-cap"></i> Create',array('class'=>'btn btn-warning btn-sm'));?>
                                </small>
                            </h1>
                        </div><!-- /.page-header -->
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable1">
            <thead>
                <tr>
                    <th width="80px">No</th>
        		    <th>Strata</th>
        		    <th>Jurusan</th>
        		    <th class="hidden-480">Gelar</th>
        		    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
	    <?php
            $start = 0;
            foreach ($program_data as $program)
            {
                ?>
                <tr>
            <td><?php echo ++$start ?></td>
            <td><?php echo $program->strata ?></td>
            <td><?php echo $program->jurusan ?></td>
            <td class="hidden-480"><?php echo $program->gelar ?></td>
            <td>
            <div class="hidden-sm hidden-xs action-buttons">

                <a class="orange" href="<?= site_url('programstudi/update/'.$program->id_progdi) ?>">
                    <i class="ace-icon fa fa-pencil bigger-180"></i>
                </a>

                <a class="red" href="<?= site_url('programstudi/delete/'.$program->id_progdi) ?>" onclick="javasciprt: return confirm(\'Are You Sure ?\')">
                    <i class="ace-icon fa fa-trash-o bigger-180"></i>
                </a>
            </div>

            <div class="hidden-md hidden-lg">
                <div class="inline pos-rel">
                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                    </button>
                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">

                            <li>
                                <a href="<?= site_url('programstudi/update/'.$program->id_progdi) ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                    <span class="orange">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= site_url('programstudi/delete/'.$program->id_progdi) ?>" class="tooltip-error" data-rel="tooltip" title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')">
                                    <span class="red">
                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
            </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable1").dataTable();
            });
        </script>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->