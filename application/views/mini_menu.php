	<ul class="breadcrumb">

		<li>

			<a href="<?= base_url('home') ?>">

			<i class="ace-icon fa fa-home home-icon"></i>

				 Beranda</a>

		</li>

		<?php 

		if ($this->session->userdata('level') === 'UCACJAYA') {

		?>

		<li>

			<a href="<?=base_url('biodata'); ?>">

			<i class="menu-icon fa fa-users"></i>

				 Alumni</a>

		</li>



		<li>

			<a href="<?=base_url('kuis'); ?>">

			<i class="menu-icon fa fa-list"></i>

				 Data Kuis</a>

		</li>


		<?php if($this->agent->platform() != $this->agent->mobile()){ ?>
		<li>

			<a href="<?= base_url('graph') ?>">

			<i class="ace-icon fa fa-pie-chart"></i>

				 Grafik</a>

		</li>

		<?php } 
		} else { 

		$row = $this->Biodata_model->get_respon($this->session->userdata('id_bio'));

        if(count($row) == 0) {

            $site = site_url('kuis/create/'.md5($this->session->userdata('id_bio')));

        } else {

        	$site = site_url('edit-kuis/'.$this->session->userdata('id_bio'));

        } ?>

		<li>

			<a href="<?= $site ?>">

			<i class="menu-icon fa fa-pencil-square-o"></i>

				 Kuesioner</a>

		</li>



		<li>

			<a href="<?=base_url('profil.py'); ?>/<?=md5($this->session->userdata('id_bio')) ?>">

			<i class="menu-icon fa fa-user"></i>

				 Profil</a>

		</li>


		<?php if($this->agent->platform() != $this->agent->mobile()){ ?>
		<li>

			<a href="<?=base_url('reset.py'); ?>/<?=md5($this->session->userdata('id_bio')) ?>">

			<i class="menu-icon fa fa-lock"></i>

				 Ganti Password</a>

		</li>

		<?php } 
		} ?>



		<div class="nav-search" id="nav-search">
			<small><?= $this->settingvalue_library->Getvalue("Version")->Value ?></small>
				<!-- <small>Gen &copy; v3.20.17</small> -->

		</div>

	</ul><!-- /.breadcrumb -->

