	<div class="signup-box visible widget-box no-border">

		<div class="widget-body">

			<div class="widget-main">

				<h4 class="header green lighter bigger">

					<i class="ace-icon fa fa-users blue"></i>

						Pendaftaran Member Baru

				</h4>



				<div class="space-6"></div>

				<p> Isi Formulir Pendaftaran : </p>



				<form action="<?= $action; ?>" method="post">

				<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">

					<fieldset>

						<label class="block clearfix">

						<div class="has-feedback <?= set_validation_style('nama') ?>">

							<span class="block input-icon input-icon-right">

								<?= form_error('nama') ?>

								<input type="text" class="form-control" minlength="3" name="nama" id="nama" placeholder="Nama" value="<?= $nama;?>" required="required" />

									<i class="ace-icon fa fa-flag green"></i>

							</span>

						</div>

						</label>



						<label class="block clearfix">

						<div class="has-feedback <?= set_validation_style('nim') ?>">

							<span class="block input-icon input-icon-right">

								<?= form_error('nim') ?>

								<input type="text" class="form-control" name="nim" pattern="[a-zA-Z0-9]+" id="nim" placeholder="NIM(Ex: A111110001)" maxlength="11" minlength="10" required="required" value="<?=$nim ?>" oninvalid="this.setCUstomValidity('Isi dengan huruf Angka')"  />

									<i class="ace-icon fa fa-user orange"></i>

							</span>

						</div>

						</label>



						<label class="block clearfix">

						<div class="has-feedback <?= set_validation_style('password') ?>">

							<span class="block input-icon input-icon-right">

								<?= form_error('password') ?>

								<input type="password" class="form-control" required="required" name="password" id="password" placeholder="Password (Min 8 Kombinasi)" minlength="8" value="<?= $password ?>" />

									<i class="ace-icon fa fa-lock red"></i>

							</span>

						</div>

						</label>

						<label class="block clearfix">

						<div class="has-feedback <?= set_validation_style('progdi') ?>">

							<span class="block input-icon input-icon-right">

								<?= form_error('progdi') ?>

								<select class="form-control" required="required" name="progdi" id="progdi">

									<option value="">-- Pilih Program Studi --</option>

									<?php 

										foreach ($list_progdi->result() as $key) {

											if($key->id_progdi != 0){

											echo "<option value='".$key->id_progdi."'";

											echo $key->id_progdi?'selected':'';

											echo">".$key->strata." ".$key->jurusan."</option>";

											                }

											            }

									?>

								</select>
								<i class="ace-icon fa fa-graduation-cap blue"></i>
							</span>

						</div>

						</label>

													

						<label class="block clearfix"> Bekerja <?= form_error('bekerja') ?>

						<div class="has-feedback <?= set_validation_style('bekerja') ?>">

							<span class="block input-icon">

								<input type="radio" name="bekerja" id="ya" value="Ya" > Ya

								<input type="radio" name="bekerja" id="belum" value="Belum"> Belum

							</span>

						</div>

						</label>

						<div id="kutip">							

						<label class="block clearfix">

							<span class="block input-icon input-icon-right">

								<input type="text" class="form-control" name="perusahaan" minlength="3" id="perusahaan" placeholder="Nama Perusahaan" value="<?= $perusahaan; ?>" />

									<i class="ace-icon fa fa-building orange"></i>

							</span>

						</label>

													

						<label class="block clearfix">

							<span class="block input-icon input-icon-right">

								<input type="text" class="form-control" minlength="5" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?= $jabatan; ?>" />

									<i class="ace-icon fa fa-star fa-spin fa-3x fa-fw blue"></i>

							</span>

						</label>		

						<label class="block clearfix">

							<span class="block input-icon input-icon-right">

								<input type="number" min="0" class="form-control" name="jeda" id="jeda" placeholder="Jeda mendapatkan pekerjaan" title="Jeda waktu mendapatkan pekerjaan setelah wisuda"> 

									<i class="ace-icon fa fa-calendar-o green"> Bulan</i>



							</span>

						</label>

						</div>						

						<label class="block clearfix"> Jenis Kelamin <?= form_error('jenis_kelamin') ?>

						<div class="has-feedback <?= set_validation_style('jenis_kelamin') ?>">

							<span class="block input-icon">

								<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Pria" > Pria

								<input type="radio"  name="jenis_kelamin" id="jenis_kelamin" value="Wanita"> Wanita

							</span>

						</div>

						</label>

													

						<label class="block clearfix">

							<span class="block input-icon input-icon-right">

								<?= form_error('domisili') ?>

								<input type="text" class="form-control" minlength="5" required="required" name="domisili" id="domisili" value="<?= $domisili; ?>" placeholder="Domisili Sekarang(Ex: Jakarta Pusat)" />

									<i class="ace-icon fa fa-map-marker red"></i>

									<i class="has-feedback <?= set_validation_style('domisili') ?>"></i>

							</span>

						</label>

													

						<label class="block clearfix">

							<span class="block input-icon input-icon-right">

								<?= form_error('no_hp') ?>

								<input type="tel" maxlength="13" required="required" pattern="[0-9]+" class="form-control" name="no_hp" id="no_hp" value="<?= $no_hp; ?>" minlength="10" placeholder="No Hp/Telp(Ex: 08123456789)" oninvalid="this.setCUstomValidity('Isi dengan Angka')" />

									<i class="ace-icon fa fa-phone blue"></i>

									<i class="has-feedback <?= set_validation_style('no_hp') ?>"></i>

							</span> 

						</label>



						<label class="block">

							<?= form_error('cek') ?>

							<input type="checkbox" name="cek" id="cek" value="1" class="ace" checked="checked" />

							<span class="lbl">

								Menyetujui aturan dan ketentuan UCAC

							</span>

						</label>



						<div class="space-24"></div>

							<input type="hidden" name="id_biodata" value="<?= $id_biodata; ?>" /> 

						<div class="clearfix">

							<button type="reset" class="width-30 pull-left btn btn-sm">

								<i class="ace-icon fa fa-refresh fa-spin"></i>

								<span class="bigger-110">Reset</span>

							</button>



							<button type="submit" class="pull-right btn btn-sm btn-success">

								<i class="ace-icon fa fa-user"></i>

								<span class="bigger-110"><?= $button ?></</span>

								<i class="ace-icon fa fa-arrow-right icon-on-right"></i>

							</button>

						</div>

												

					</fieldset>

				</form>

			</div>



			<div class="toolbar center">

				<a href="<?= base_url('login'); ?>" data-target="#login-box" class="back-to-login-link">

					<i class="ace-icon fa fa-arrow-left"></i>

						Back to login

				</a>

			</div>

		</div><!-- /.widget-body -->

	</div><!-- /.signup-box -->