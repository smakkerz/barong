<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>
                  <div class="page-header">
                    <h1><i class="ace-icon fa fa-list"></i>  Data Kuis Tracer Universitas Semarang
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                                <?php echo anchor('Biodata/excel','<i class="ace-icon fa fa-download"></i> <b>Excel</b>',array('class'=>'btn btn-success btn-round btn-sm'));?>
                        </small>
                    </div><!-- /.page-header -->
                </div><!-- /.box-header -->
            <div class='box-body'>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="mykuis">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Tahun Lulus</th>
                            <th>Tanggal Isi</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div id="container"></div>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mykuis").DataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mykuis_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    "language": {
                    "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Indonesian.json"
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "Kuis/json", "type": "POST", 
                    //csrf token ON
                    "data":{  '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' 
                    } },
                    columns: [
                        {"data": "nama"},
                        {"data": "nim"},
                        {"data": "tahun_lulus"},
                        {"data": "date"},
                        {"data": "view"}
                    ],
                    rowId: 'nim',
                    select: true,
                    dom: 'Bfrtip',
                    buttons: [{
                text: '<button type="submit" class="btn btn-white btn-primary btn-round btn-sm"><i class="ace-icon fa fa-refresh blue"></i> Refresh</button>',
                    action: function () {
                        t.ajax.reload();
                            }
                        }
                    ],
                    'select': {
                    'style': 'multi'
                    },
                    order: [[2, 'desc']],
                });
            });

                var active_class = 'active';
                $('#mykuis > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#mykuis').on('click', 'td input[type=checkbox]' , function(){
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
</section><!-- /.content -->