        <div class="page-header">
							<h1>
								<i class="ace-icon fa fa-user blue"></i>
								Biodata <?=$this->session->userdata('nama') ?>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Universitas Semarang Career and Alumni Center
								</small>
							</h1>
						</div><!-- /.page-header -->
   											<div class="col-sm-9 main">

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Nama Lengkap </div>

													<div class="profile-info-value">
														<span class="editable"><?=$nama; ?> , <?=$gelar; ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Nim </div>
													
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
											</div>

	<a href="<?= site_url('biodata') ?>" class="btn btn-default btn-round  btn-sm"><i class="ace-icon fa fa-arrow-left"></i> Kembali</a>
	<span class="pull-right">
	<a href="<?=base_url('biodata/update'); ?>/<?=md5($id_biodata) ?>" class="btn btn-primary btn-round btn-sm">
			<i class="ace-icon fa fa-user"></i>
				<span class="menu-text"> Edit Profil </span>
		</a>
		<a href="<?=base_url('reset.py'); ?>/<?=md5($id_biodata) ?>"" class="btn btn-danger btn-round btn-sm">
			<i class="ace-icon fa fa-lock"></i>
				<span class="menu-text"> Password </span>
		</a>
	</span>
	</div>