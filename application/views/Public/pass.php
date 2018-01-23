	<div id="login-box" class="login-box visible widget-box no-border">
		<div class="widget-body">
			<div class="widget-main">
				<h4 class="header red lighter bigger">
					<i class="ace-icon fa fa-bell-o red"></i>
						Verifikasi Akun Tracer
				</h4>
                <?= $this->session->userdata('error') <> '' ? $this->session->userdata('error') : ''; ?>
                <?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
							
				<div class="space-6"></div>

					<form action="<?php echo $action; ?>" method="post" onsubmit="return checkEmptyInput();" role="form">
					<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
						<fieldset>
							<label class="block clearfix">Apakah Anda <h2 class="text-info"><?= $nama ?></h2>
							</label>
							<div class="form-group">
							<label class="block clearfix">Program Studi Anda Apa ?
							</label>
							<select class="form-control" required="required" name="progdi" id="progdi">
									<option value="">-- Pilih Program Studi --</option>
									<?php 
										foreach ($list_progdi->result() as $key) {
											if($key->id_progdi != 0){
												echo "<option value='".$key->id_progdi."'";
												echo">".$key->strata." ".$key->jurusan."</option>";
												}
										}
									?>

							</select>
							</div>

								<div class="clearfix">
									<label class="inline">Jika benar silahkan Pilih Reset</span>
									</label>
									<input type="hidden" name="password" value="<?= $newpassword ?>">
									<input type="hidden" name="ID" value="<?= $id_bio ?>">
									<button type="submit" class="width-35 pull-right btn btn-round btn-sm btn-primary" id="gritter-center">
										<i class="ace-icon fa fa-arrow-right"></i>
											<span class="bigger-80"> Reset</span>
									</button>
								</div>

								<div class="space-4"></div>
						</fieldset>
					</form>

							<div class="social-or-login center">
								<span class="bigger-110">Email UCAC <a href="mailto:ucac@usm.ac.id">ucac@usm.ac.id</a></span>
							</div>
			</div><!-- /.widget-main -->

						<div class="toolbar clearfix">
						<div>
						<a href="<?= base_url('Login');?>" class="user-signup-link">
							<i class="ace-icon fa fa-arrow-left"></i>
									<span> Masuk</span>
								</a>
								</div>

							<div>
								<a href="<?= base_url('register.py');?>" data-target="#signup-box" class="user-signup-link">
									Buat member Baru
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</div>
						</div>
		</div><!-- /.widget-body -->
	</div><!-- /.login-box -->