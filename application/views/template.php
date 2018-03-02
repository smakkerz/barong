<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>UCAC JAYA</title>
		<link rel="shorcut icon" href="<?php echo base_url(); ?>library/assets/images/ucac.jpg" />

		<meta name="title" content="Tracer Universitas Semarang" />
		<meta name="images" content="<?php echo base_url(); ?>library/assets/images/ucac.jpg" />
		<meta name="description" content="tracer UCAC JAYA" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url()?>library/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>library/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url()?>library/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url()?>slibrary/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<script src="<?php echo base_url()?>library/assets/js/jquery-2.1.4.min.js"></script>

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url()?>library/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url()?>library/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url()?>library/assets/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url()?>library/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?= base_url('home') ?>" class="navbar-brand">
						<small>
							<img src="<?php echo base_url(); ?>library/assets/images/ucac.jpg" class="img-circle" width="28px">
							<?= $this->settingvalue_library->Getvalue("Name")->Value ?>
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img src="<?php echo base_url(); ?>library/assets/images/ucac.jpg" class="img-circle" width="22px">
								<span class="user-info">
									<small id="greeting"></small>,
									<?=ucfirst($this->session->userdata('nama')) ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?= base_url('reset.py') ?>/<?=md5($this->session->userdata('id_bio')) ?>">
										<i class="ace-icon fa fa-lock"></i>
										Ganti Password
									</a>
								</li>

								<li>
									<a href="<?= base_url('profil.py') ?>/<?=md5($this->session->userdata('id_bio')) ?>">
										<i class="ace-icon fa fa-user"></i>
										Profil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?= base_url('login/logout') ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<div id="sidebar" class="sidebar responsive ace-save-state">

				<?php $this->load->view('sidebar') ?>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
            <div class="main-content">
                <div class="main-content-inner">
	                <div class="breadcrumbs" id="breadcrumbs">

							<?php $this->load->view('mini_menu') ?>
						</div>
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->
						<?=  $contents;?>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-10">
						<!-- <a href="https://github.com/smakkerz" target="blank">
								<i class="ace-icon fa fa-github-square light-blue  bigger-150"></i>
							</a> -->
							<a href="https://web.facebook.com/smakkerz" target="blank">
								<i class="ace-icon fa fa-facebook-square bigger-150"></i>
							</a>
							<span class="blue bolder"><a href="https://sekawan.xyz/"> 
							<i class="fa fa-trademark"></i>
							SM4KK3RZ</a></span>  &copy; <?php echo date("Y"); ?> <?= $this->settingvalue_library->Getvalue("Company")->Value ?>
							<a href="https://twitter.com/ucac_info" target="blank">
								<i class="ace-icon fa fa-twitter-square orange bigger-150"></i>
							</a>
							<a href="https://instagram.com/usm_ucac" target="blank">
								<i class="ace-icon fa fa-instagram orange bigger-150"></i>
							</a>	
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url()?>library/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url()?>library/assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url()?>library/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url()?>library/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url()?>library/assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>library/assets/js/jquery.dataTables.bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<!-- ace scripts -->
		<script src="https://cdn.datatables.net/select/1.2.2/js/dataTables.select.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url()?>library/assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url()?>library/assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url()?>library/assets/js/ace.min.js"></script>
		    <script type="text/javascript">
		    jQuery(function($) {

			    $(document).ready(function(){
				    $("#hide").click(function(){
				        $("#table").slideUp();
				        $("#table1").slideUp("slow");
				        $("#table2").slideUp("slow");
				        $("#table3").slideUp("slow");
				        $("#table4").slideUp("slow");
				    });
				    $("#show").click(function(){
				        $("#table").slideDown();
				        $("#table1").slideDown("slow");
				        $("#table2").slideDown();
				        $("#table3").slideDown("slow");
				        $("#table4").slideDown("slow");
				    });
				    $("#showA").click(function(){
				        $("#table").slideDown();
				        $("#table1").slideDown("slow");
				        $("#table2").slideDown();
				        $("#table3").slideDown();
				        $("#table4").slideDown("slow");
				    });
				     $("#show1").click(function(){
				        $("#table5").slideDown();
				        $("#table6").slideDown();
				    });
				     $("#hide1").click(function(){
				        $("#table5").slideUp();
				        $("#table6").slideUp();
				    });
				    var thehours = new Date().getHours();
					var themessage;
					var morning = ('Pagi');
					var afternoon = ('Sore');
					var evening = ('Malam');
					var flag;

					if (thehours >= 0 && thehours < 11) {
						themessage = morning;
						flag = 'blue'; 
				  	} else if (thehours >= 11 && thehours < 15) {
				    	themessage = 'Siang';
				    	flag = 'orange';
					} else if (thehours >= 15 && thehours < 18) {
						themessage = afternoon;
						flag = 'green';
					} else if (thehours >= 18 && thehours < 24) {
						themessage = evening;
						flag = 'red';
					}
					//$('#flag').addClass("fa fa-flag "+flag);
					$('#greeting').append(themessage);
				});

                $('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
			});
    </script>
	</body>
</html>
