    <div class="signup-box visible widget-box no-border">
        <div class="widget-body">
			<div class="widget-main">
<h4 class="header blue lighter bigger">
					<i class="ace-icon fa fa-coffee green"></i>
						Upload data ke database
				</h4>
				<h5 class="header blue lighter"><i class="fa fa-users"></i> Form upload data alumni</h5>
                <?php echo $this->session->flashdata('msg1'); ?> 
<form action="<?php echo site_url();?>upload/import/" method="post" enctype="multipart/form-data">
<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
    <input type="file" name="file"/>
    <br>
    <input class="btn btn-sm btn-primary"  type="submit" value="Upload file"/>
</form>
<?php echo $this->session->flashdata('msg'); ?> 

<p>
	<div style="margin-top:20px"></div>
	<h5 class="header blue lighter"><i class="menu-icon fa fa-list"></i> Form Kuesioner</h5>
<form action="<?php echo site_url();?>upload/importdata/" method="post" enctype="multipart/form-data">
<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
    <input type="file" name="file"/>
    <br>
    <input class="btn btn-sm btn-danger" type="submit" value="Upload file"/>
</form>
</p>
</div>
<div class="toolbar center">
                <a href="<?= base_url('home'); ?>" data-target="#login-box" class="back-to-login-link">
                    <i class="ace-icon fa fa-home fa-lg"></i>
                        Back to home
                </a>
            </div>
</div>
</div>