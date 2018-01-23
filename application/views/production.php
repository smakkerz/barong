<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>DEPLOY | USM</title>
		<link rel="shorcut icon" href="<?php echo base_url(); ?>library/assets/images/ucac.jpg" />

		<meta name="title" content="" />
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

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="ace-icon fa fa-random"></i>
												808
											</span>
											Website sedang tahap Pengembangan
										</h1>

										<hr />
										<h3 class="lighter smaller">
											Atau sedang terjadi masalah di  
											<i class="ace-icon fa fa-wrench icon-animated-wrench bigger-125"></i>
											 Server
										</h3>

										<div class="space"></div>

										<div>
											<h4 class="lighter smaller">Saran kami :</h4>

											<ul class="list-unstyled spaced inline bigger-110 margin-15">
												<li>
													<i class="ace-icon fa fa-hand-o-right blue"></i>
													Kembali ke form <a href="<?= base_url('home/logout') ?>">
																<i class="ace-icon fa fa-home"></i>
																Login
																</a>
												</li>

												<li>
													<i class="ace-icon fa fa-hand-o-right blue"></i>
													Coba lagi beberapa waktu kedepan
												</li>
											</ul>
										</div>
										<img class="img-responsive" src="<?= base_url() ?>/library/assets/images/loading.gif">
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">USM</span>
							UCAC &copy; 2013-<?= date("Y") ?>
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url()?>library/assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url()?>library/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url()?>library/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url()?>library/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<!-- ace scripts -->
		<script src="<?php echo base_url()?>library/assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url()?>library/assets/js/ace.min.js"></script>
	</body>
</html>
