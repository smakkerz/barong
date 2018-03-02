<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success" disabled>
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info" disabled>
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning" disabled>
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger" disabled>
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
<ul class="nav nav-list">
	<li >
		<a href="<?=base_url('home') ?>">
			<i class="menu-icon fa fa-home home-icon"></i>
				<span class="menu-text"> Beranda </span>
		</a>

			<b class="arrow"></b>
	</li>
	<?php 
		if ($this->session->userdata('level') == 'UCACJAYA') {
	?>

	<li class="">
		<a href="<?=base_url('biodata') ?>">
			<i class="menu-icon fa fa-users"></i>
				<span class="menu-text"> Daftar Alumni </span>
			</a>
				<b class="arrow"></b>
	</li>
	<li class="">
		<a href="<?= base_url('kuis'); ?>">
			<i class="menu-icon fa fa-list"></i>
			<span class="menu-text"> Data kuis </span> 
		</a>
	</li>
	<li class="">
		<a href="<?= base_url('grafik') ?>">
			<i class="menu-icon fa fa-pie-chart"></i>
			<span class="menu-text"> Grafik </span>
		</a>
	</li>
	<li class="">
		<a href="<?=base_url('programstudi') ?>">
			<i class="menu-icon fa fa-graduation-cap"></i>
				<span class="menu-text"> Program Studi </span>
			</a>
				<b class="arrow"></b>
	</li>
	<li class="">
		<a href="<?=base_url('upload') ?>">
			<i class="menu-icon fa fa-repeat"></i>
				<span class="menu-text"> Upload </span>
			</a>
				<b class="arrow"></b>
	</li>
	<?php if($this->session->userdata('nim') == "Testing123"){ ?>
	<li class="">
		<a href="<?=base_url('settings') ?>">
			<i class="menu-icon fa fa-wrench"></i>
				<span class="menu-text"> Settings </span>
			</a>
				<b class="arrow"></b>
	</li>
	<li class="">
		<a href="<?=base_url('settings') ?>">
			<i class="menu-icon fa fa-comment"></i>
				<span class="menu-text"> Send SMS </span>
			</a>
				<b class="arrow"></b>
	</li>
	<?php }
		} else {
		$row = $this->Biodata_model->get_respon($this->session->userdata('id_bio'));
        if(count($row) == 0) {
            $site = site_url('kuis/create/'.md5($this->session->userdata('id_bio')));
        } else {
        	$site = site_url('edit-kuis/'.$this->session->userdata('id_bio'));
        }
	?>
	<li class="">
		<a href="<?= $site ?>">
			<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> Kuisioner </span>
		</a>
			<b class="arrow"></b>
	</li>

	<li class="">
		<a href="<?=base_url('profil.py'); ?>/<?=md5($this->session->userdata('id_bio')) ?>">
			<i class="menu-icon fa fa-user"></i>
				<span class="menu-text"> Profil </span>
		</a>
			<b class="arrow"></b>
	</li>

	<li class="">
		<a href="<?=base_url('reset.py'); ?>/<?=md5($this->session->userdata('id_bio')) ?>">
			<i class="menu-icon fa fa-lock"></i>
				<span class="menu-text"> Ganti Password </span>
		</a>
			<b class="arrow"></b>
	</li>
	<?php
		}
	?>
				</ul><!-- /.nav-list -->