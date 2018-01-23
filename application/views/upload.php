    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="page-header">
                <h1>
                    <i class="ace-icon fa fa-home blue "></i> Anda membuka Halaman Upload Data
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                                    <?php echo ucfirst($this->session->userdata('nama'));?>
                        </small>
                </h1>
        <?= $this->session->userdata('msg') <> '' ? $this->session->userdata('msg') : ''; ?>
            </div>
            <div class="col-sm-7">
                <div class="widget-box transparent">
                            <div class="widget-header widget-header-flat">
                                <h4 class="widget-title lighter">
                                    <i class="ace-icon fa fa-check blue"></i>
                                        <b style="font-size: 16px;">Tata Cara Upload data</b>  &nbsp;
                                <a href="<?php echo base_url()?>library/manual_book.pdf" target="_blank" class="btn btn-white btn-sm">
                                            <i class="ace-icon fa fa-book"></i> Petunjuk Upload</a>
                                </h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <div class="dialogs">
                                <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <i class="ace-icon fa fa-check blue"></i>
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-calendar blue"></i>
                                                <span class="green"><?=date("Y") ?></span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Langkah 1</a>
                                            </div>
                                            <div class="text">Silahkan lihat Master data dengan mengunduh data di tombol <b class="text-danger"><i class="ace-icon fa fa-download"> </i> Master</b> dibawah ini untuk melihat struktur format data yang harus di-upload ke sistem dan Master data nantinya akan digunakan sebagai referensi atau modul untuk upload data Tracer
                                            </div>
                                        </div>
                                </div>
                                <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <i class="ace-icon fa fa-check blue"></i>
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-calendar blue"></i>
                                                <span class="green"><?=date("Y") ?></span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Langkah 2</a>
                                            </div>
                                            <div class="text">Silahkan baca dengan mengunduh tombol Petunjuk Upload di diatas atau dibawah ini untuk lebih jelasnya<br>
                                            <a href="<?php echo base_url()?>library/manual_book.pdf" target="_blank" class="btn btn-white btn-sm">
                                            <i class="ace-icon fa fa-book"></i> Petunjuk Upload</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <i class="ace-icon fa fa-check blue"></i>
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-calendar blue"></i>
                                                <span class="green"><?=date("Y") ?></span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Langkah 3</a>
                                            </div>
                                            <div class="text">Data Alumni dan Data Kuisioner dibuat terpisah sesuai Master data dan sesuaikan Data Alumni yaitu NIM dengan NIM yang ada di Data kuisioner, jadi NIM di Data Alumni = NIM di Data kuisioner.
                                            </div>
                                        </div>
                                </div>
                                <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <i class="ace-icon fa fa-check blue"></i>
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-calendar blue"></i>
                                                <span class="green"><?=date("Y") ?></span>
                                            </div>

                                            <div class="name">
                                               <a href="#"> Langkah 4</a>
                                            </div>
                                            <div class="text">Jika telah di Upload semua data ke database sesuai cara diatas langkah terakhir silahkan tekan tombol <b class="text-inverse"><i class="ace-icon fa fa-refresh"></i> Clear Sampah</b> untuk membersihkan data kuesioner dari berbagai sampah dan virus yang tidak diinginkan.
                                            </div>
                                        </div>
                                </div>
                                <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <i class="ace-icon fa fa-check blue"></i>
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="ace-icon fa fa-calendar blue"></i>
                                                <span class="green"><?=date("Y") ?></span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Langkah 5</a>
                                            </div>
                                            <div class="text">Silahkan cek kembali data yang telah di Upload ke sistem di Menu <b class="text-primary">Data Alumni</b> dan <b class="text-primary">Data Kuis</b>.
                                            </div>
                                        </div>
                                </div>
                                <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <i class="ace-icon fa fa-warning orange"></i>
                                        </div>

                                        <div class="body">
                                            <div class="alert alert-block alert-danger">
                                                <b class="text-warning">Peringatan</b>
                                                <div class="text">Jika ada data yang belum terdeteksi silahkan cek kembali NIM Data ALumni dengan NIM Data Kuisioner dan 
                                                data yang di Upload tidak boleh kosong, bila data kosong silahkan isi dengan angka 
                                                <b class="text-danger">0 (nol)</b> dan ukuran maksimal file yang diupload 
                                                <b class="text-danger">1MB</b>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="hr hr8 hr-double"></div>
                                </div>
                            </div><!-- /.widget-main -->
                        </div><!-- /.widget-body -->
                </div><!-- /.widget-box -->
        </div>
        <div class="col-sm-5">
            <div class="widget-box transparent">
                <div class="widget-header widget-header-flat">
                     <h4 class="widget-title lighter">
                        <i class="ace-icon fa fa-info orange"></i>
                            <b style="font-size: 16px;">Akun</b> 
                    </h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="widget-main padding-4">
                        <p class="alert alert-block alert-danger">
                            <i class="ace-icon fa fa-warning danger"></i> Untuk Akun yang berhasil di-upload  ke sistem
                            <br> Akun NIM dan password sama.
                        </p>
                    </div><!-- /.widget-main -->
                </div><!-- /.widget-body -->
            </div><!-- /.widget-box -->
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-7">
                <a href="<?php echo base_url('upload/data'); ?>" class="btn btn-success">
                    <i class="ace-icon fa fa-upload"></i> Upload Data</a>
                        <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">
                                    <i class="ace-icon fa fa-download"></i> Master
                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                </button>

                                    <ul class="dropdown-menu dropdown-default">
                                        <li>
                                        <a href="<?php echo base_url()?>library/data_alumni_usm.xls">
                                            <i class="ace-icon fa fa-users"></i> Master Data Alumni</a>
                                        </li>

                                        <li>
                                        <a href="<?php echo base_url()?>library/all_kuesioner.xls">
                                            <i class="ace-icon fa fa-list"></i> Master Data Kuesioner</a>
                                        </li>
                                    </ul>
                        </div><!-- /.btn-group -->
            </div>
                <div class="col-sm-5">
                    <a href="<?php echo base_url('upload/clean/0'); ?>" class="btn btn-inverse">
                        <i class="ace-icon fa fa-refresh"></i> Clean Sampah</a>
                </div>                   
        </div>
    </div>