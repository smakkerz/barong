<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Tracer Study</title>
		<link rel="shorcut icon" href="<?php echo base_url(); ?>library/assets/images/ucac.jpg" />
		<meta name="title" content="Tracer Universitas Semarang" />
		<meta name="images" content="<?php echo base_url(); ?>library/assets/images/ucac.jpg" />
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>library/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>library/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>library/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>library/assets/css/greeting.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>library/assets/css/ace-rtl.min.css" />
     	<script src="<?php echo base_url(); ?>library/assets/js/jquery-2.1.4.min.js"></script>

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout blur-login"
		style="background:url(<?php echo base_url(); ?>library/assets/images/bg.jpg)  no-repeat center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
			 	background-size: cover;
			 	position:relative;">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<img src="<?php echo base_url(); ?>library/assets/images/ucac.jpg" class="img-circle" width="50px">
									<span class="red">UCAC</span>
									<span class="white">Tracer Study</span>
								</h1>
								<h4 class="white" >&copy; USM Career and Alumni Center</h4>
							</div>

							<div class="space-6"></div>
							<div class="position-relative">

							<?=$contents ?>

							</div>
						</div><!-- /.forgot-box -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url()?>library/assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>library/assets/js/ace.min.js"></script>
		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			jQuery(function($) {
				//$('#modal-form-container').ace_wizard();
				$('#modal-form .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
			    $(function(){
			      $("#belum").click(function(){
			        $("#kutip").slideUp();
			      });
			    });
			    $(function(){
			      $("#ya").click(function(){
			        $("#kutip").slideDown();
			    });
			  });
		
	$(document).ready(function(){		
		$("#pass").click(function(){
			if($(this).is(':checked')){
				$("#p4ssword").attr('type','text');
			}else{
				$("#p4ssword").attr('type','password');
			}
		});
		var thehours = new Date().getHours();
					var themessage;
					var morning = ('Pagi');
					var afternoon = ('Sore');
					var evening = ('Malam');
					var flag;

					if (thehours >= 0 && thehours < 11) {
						themessage = morning;
						flag = 'white'; 
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
					$('#flag').addClass("fa fa-flag  "+flag);
					$('.greeting').append(themessage+', Alumni');
	});
			});
</script>
</body>
</html>