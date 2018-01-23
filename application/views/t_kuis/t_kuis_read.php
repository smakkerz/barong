        <form method="post" action="<?= $action ?>">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
 <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                    <div class="page-header">
                            <h1><i class="ace-icon fa fa-list"></i>
                                Data Kuis Tracer Universitas Semarang
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    <?php echo anchor('Upload/export','<i class="ace-icon fa fa-download"></i> <b>Excel</b>',array('class'=>'btn btn-success btn-sm'));?>
                                    <button type="submit" name="acc" class="btn btn-white btn-default btn-round">
                                                <i class="ace-icon fa fa-check red2"></i>
                                                Hapus
                                            </button>
                                </small>
                            </h1>
                        </div><!-- /.page-header -->
                </div><!-- /.box-header -->
                <div class='box-body'>
                <div class="table-header ">
                                            <b>Tabel Kuesioner Tracer - UCAC</b>
                                        </div>
<table class="table table-striped table-bordered table-hover" id="mytable1">
            <thead>
                <tr> 
                    <th class="center"><label class="pos-rel">
                        <input type="checkbox" class="ace" value="all" />
                        <span class="lbl"></span>
                    </label></th>           
                    <th class="hidden-480">NIM</th>
                    <th>Nama</th>
                    <th><i class="ace-icon fa fa-calendar-o bigger-110 hidden-480"></i> Tahun Lulus</th>
                    <th class="hidden-480">Total Jawaban</th>
					<th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($respon as $key) {
            ?>
            <tr>
            <td class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace" name="ace[]" value="<?=$key->id_biodata ?>" />
                    <span class="lbl"></span>
                </label>
            </td>
            <td class="hidden-480"><?= ucfirst($key->nim); ?></td>
            <td><?= ucfirst($key->nama); ?></td>
            <td><?= $key->tahun_lulus; ?></td>
            <td class="hidden-480"><?= $key->total; ?> Pilihan</td>
			<td>

            <div class="hidden-sm hidden-xs action-buttons">
                <a class="green" href="<?= site_url('kuis.go/'.md5($key->id_biodata)) ?>">
                    <i class="ace-icon fa fa-eye bigger-180"></i>
                </a>

                <a class="orange" href="<?= site_url('edit-kuis/'.$key->id_biodata) ?>">
                    <i class="ace-icon fa fa-pencil bigger-180"></i>
                </a>

                <a class="blue" target="blank" href="<?= site_url('cetak.asp/'.md5($key->id_biodata)) ?>">
                    <i class="ace-icon fa fa-file-o bigger-180"></i>
                </a>

                <a class="red" href="<?= site_url('t_kuis/hapus/'.$key->id_biodata) ?>" onclick="javasciprt: return confirm(\'Are You Sure ?\')">
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
                                <a href="<?= site_url('kuis.go/'.md5($key->id_biodata)) ?>" class="tooltip-info" data-rel="tooltip"
                                 title="View">
                                    <span class="green">
                                    <i class="ace-icon fa fa-eye bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= site_url('edit-kuis/'.$key->id_biodata) ?>" class="tooltip-success" data-rel="tooltip" 
                                title="Edit">
                                    <span class="orange">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= site_url('cetak.asp/'.md5($key->id_biodata)) ?>" class="tooltip-success" data-rel="tooltip" 
                                title="Edit">
                                    <span class="blue">
                                    <i class="ace-icon fa fa-file-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= site_url('t_kuis/hapus/'.$key->id_biodata) ?>" class="tooltip-error" data-rel="tooltip" 
                                title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')">
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
            <?php } ?>
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable1").dataTable();
                var active_class = 'active';
                $('#mytable1 > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#mytable1').on('click', 'td input[type=checkbox]' , function(){
                    var $row = $(this).closest('tr');
                    if(this.checked) $row.addClass(active_class);
                    else $row.removeClass(active_class);
                });
            });
        </script>
                        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          </form>
        </section><!-- /.content -->