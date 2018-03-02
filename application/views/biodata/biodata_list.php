
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <div class="page-header">
                            <h1>
                                <i class="ace-icon fa fa-users "></i> Biodata Alumni Universitas Semarang
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    <?php echo anchor('Biodata/excel','<i class="ace-icon fa fa-download"></i> <b>Excel</b>',array('class'=>'btn btn-success btn-round btn-sm'));?>
                                    <!-- <button type="submit" name="acc" class="btn btn-white btn-default btn-round">
                                                <i class="ace-icon fa fa-check red2"></i>
                                                Hapus
                                            </button> -->
                                </small>
                        </div><!-- /.page-header -->
                </div><!-- /.box-header -->
                <div class='box-body'>
                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="mytable2">
            <thead>
                <tr>
                <!-- <th class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" value="all" />
                        <span class="lbl"></span>
                    </label>
                </th>
                <th></th> -->
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Bekerja</th>
            <th>No Hp</th>
            <th>Lulus</th>
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

                var t = $("#mytable2").DataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
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
                    ajax: {"url": "Biodata/json", "type": "POST", 
                    //csrf token ON
                    "data":{  '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' 
                    } },
                    columns: [
                        //{"data": "checkbox"},
                        {"data": "nama"},
                        {"data": "nim"},
                        {"data": "jurusan"},
                        {"data": "bekerja"},
                        {"data": "hp"},
                        {"data": "lulus"},
                        {"data": "view"}
                    ],
                    rowId: 'nim',
                    select: true,
                    dom: 'Bfrtip',
                    buttons: [{
                text: '<button type="submit" class="btn btn-white btn-default btn-round btn-sm"><i class="ace-icon fa fa-refresh blue"></i> Refresh</button>',
                    action: function () {
                        t.ajax.reload();
                    }
                    }
                    ],
                    'select': {
                    'style': 'multi'
                    },
                    order: [[5, 'desc']],
                    // rowCallback: function(row, data, iDisplayIndex) {
                    //     var info = this.fnPagingInfo();
                    //     var page = info.iPage;
                    //     var length = info.iLength;
                    //     var index = page * length + (iDisplayIndex + 1);
                    //     $('td:eq(0)', row).html(index);
                    // }
                });
            });

                var active_class = 'active';
                $('#mytable2 > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#mytable2').on('click', 'td input[type=checkbox]' , function(){
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