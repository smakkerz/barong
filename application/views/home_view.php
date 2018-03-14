    <div class="row">
        <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
            <div class="page-header">
                <h1>
                    <i class="ace-icon fa fa-home icon-animated-home blue "></i> Anda membuka Halaman Beranda
                        <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                    <?php echo ucfirst($this->session->userdata('nama'));?>
                        </small>
                        <?php if($this->agent->platform() != $this->agent->mobile()){ ?>
                        <a href="<?= base_url();?>/library/Tracer-UCAC.apk" class="user-signup-link">
                            <i style="color:green;" class="ace-icon fa fa-android"></i> Apps Android
                        </a>
                        <?php } ?>
                </h1>
            </div>
                <?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="widget-box transparent">
                            <div class="widget-header widget-header-flat">
                                <h4 class="widget-title lighter">
                                    <i class="ace-icon fa fa-leaf icon-animated-leaf green"></i>
                                        Selamat Datang, <b><?php echo ucfirst($this->session->userdata('nama'));?></b>
                                </h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <p class="alert alert-success">
                                    <?=$isi ?>
                
                                </p>
                            </div><!-- /.widget-main -->
                        </div><!-- /.widget-body -->
                        </div><!-- /.widget-box -->
                    </div>
                    <?php if($this->session->userdata('level')=="UCACJAYA") {?> 
                    <div class="col-sm-5">
                            <div class="infobox infobox-green">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-graduation-cap"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number"><?= $jumlah_lulus ?></span>
                                <div class="infobox-content">Alumni di <?= date("Y") ?></div>
                                </div>

                                <div class="stat stat-success">
            <?php $hasil = $jumlah_lulus / $total; echo round($hasil*100, 2); ?>%
                                </div>
                            </div>
                            <div class="infobox infobox-blue">
                                <div class="infobox-icon">
                                                <i class="ace-icon fa fa-list"></i>
                                            </div>

                                            <div class="infobox-data">
                                                <span class="infobox-data-number"><?= $jumlah_kuis ?></span>
                                                <div class="infobox-content">Kuisioner di <?= date("Y") ?></div>
                                            </div>

                                            <div class="stat stat-blue">
             <?php $all = $jumlah_kuis / $all_kuis; echo round($all*100, 2); ?>%
                                            </div>
                                        </div>

                                        <div class="infobox infobox-green">
                                           <div class="infobox-icon">
                                                <i class="ace-icon fa fa-graduation-cap"></i>
                                            </div>

                                            <div class="infobox-data">
                                                <span class="infobox-data-number"><?php echo $total ?></span>
                                                <div class="infobox-content">Total Alumni</div>
                                            </div>
                                        </div>
                                        <div class="infobox infobox-blue">
                                            <div class="infobox-icon">
                                                <i class="ace-icon fa fa-list"></i>
                                            </div>

                                            <div class="infobox-data">
                                                <span class="infobox-data-number"><?= $all_kuis ?></span>
                                                <div class="infobox-content">Total Kuisioner</div>
                                            </div>
                                        </div>
                    </div>
                    <?php } else { echo $file; } ?>
                </div>
                <div class="space-6"></div>
                <div class="row">
                    <div class="col-sm-6 main">
                        <i class="ace-icon fa fa-user blue"></i>
                                Profil <?=$this->session->userdata('nama') ?>
                                <br/>
                        <div class="profile-user-info profile-user-info-striped">
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Nama Lengkap </div>

                                <div class="profile-info-value">
                                    <span class="editable"><?=$nama; ?> , <?=$gelar; ?></span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> NIM </div>
                                                    
                                    <div class="profile-info-value">
                                        <span class="editable"><?=$nim; ?></span>
                                    </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Program Studi </div>

                                    <div class="profile-info-value">
                                        <span class="editable" ><?=$progdi; ?></span>
                                    </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Bekerja </div>

                                    <div class="profile-info-value">
                                        <span class="editable"><?=$bekerja; ?></span>
                                    </div>
                            </div>  

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Perusahaan </div>

                                    <div class="profile-info-value">
                                         <span class="editable" ><?=$perusahaan; ?></span>
                                    </div>
                            </div>  

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Jabatan </div>

                                    <div class="profile-info-value">
                                        <span class="editable"><?=$jabatan; ?></span>
                                    </div>
                            </div>  

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Jeda </div>

                                    <div class="profile-info-value">
                                        <span class="editable"><?=$jeda; ?></span>
                                    </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Jenis Kelamin </div>

                                    <div class="profile-info-value">
                                        <span class="editable"><?=$jenis_kelamin; ?></span>
                                    </div>
                            </div>                                  

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Domisili </div>

                                    <div class="profile-info-value">
                                        <span class="editable"><?=$domisili; ?></span>
                                    </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> No Handphone </div>

                                    <div class="profile-info-value">
                                        <span class="editable"><?=$no_hp; ?></span>
                                    </div>
                            </div>
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Tahun Lulus </div>

                                    <div class="profile-info-value">
                                        <span class="editable"><?= $lulus; ?></span>
                                    </div>
                            </div>
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Waktu Daftar </div>

                                    <div class="profile-info-value">
                                        <span class="editable"><?php $date = strtotime($CreatedDate);
                                        echo date('d M, Y H:i', $date);?> WIB</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                        <?php if($this->session->userdata('level')=="UCACJAYA") {?> 
                    <div class="col-sm-6">
                        <div class="widget-box transparent">
                            <div class="widget-header widget-header-flat">
                                <h4 class="widget-title lighter">
                                    <i class="ace-icon fa fa-star orange"></i>
                                        <b><?php echo $total ?></b> Alumnus terdaftar
                                </h4>
                                <div class="widget-toolbar">
                                    <a href="#" data-action="reload">
                                        <i class="ace-icon fa fa-refresh"></i>
                                    </a>
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main no-padding">
                                    <div class="comments ace-scroll" style="position:relative;">
                                        <div class="comments">
                                           <?php foreach ($file as $key) { 
                                            $date = strtotime($key->CreatedDate);?>
                                                <div class="itemdiv commentdiv">

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="<?= site_url('profil.py/'.md5($key->id_biodata))?>"><?=ucfirst($key->nama).', '.$key->gelar ?></a>
                                                        </div>

                                                        <div class="time">
                                                            <i class="ace-icon fa fa-calendar-o"></i>
                                                        <span class="green"><?=date('d M, Y', $date) ?></span>
                                                        </div>
                                                        <div class="text">
                                                            <i class="ace-icon fa fa-map-marker orange"></i>
                                                           <?=$key->domisili ?> &nbsp; <i class="ace-icon fa fa-phone orange"></i>
                                                            <?=$key->no_hp ?> &nbsp; <i class="ace-icon fa fa-graduation-cap orange"></i>
                                                            <?php echo $key->strata.' '.$key->jurusan ?>
                                                        </div>
                                                    </div>
                                                </div><?php } ?>
                                        <div class="hr hr8"></div>

                                                    <div class="center">
                                                        <i class="ace-icon fa fa-users fa-2x green middle"></i>
                                                                &nbsp;
                                                            <a href="<?= site_url('biodata') ?>" class="btn btn-sm btn-white btn-info">
                                                                Lihat semua Alumni &nbsp; <i class="ace-icon fa fa-arrow-right"></i>
                                                            </a>
                                                    </div>

                                        <div class="hr hr-double hr8"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php } ?>
                        </div>
            </div>
    </div>
