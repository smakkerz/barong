<!doctype html>
<html>
    <head>
        <title>List</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Biodata Read</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Nim</td><td><?php echo $nim; ?></td></tr>
	    <tr><td>Progdi</td><td><?php echo $progdi; ?></td></tr>
	    <tr><td>Bekerja</td><td><?php echo $bekerja; ?></td></tr>
	    <tr><td>Perusahaan</td><td><?php echo $perusahaan; ?></td></tr>
	    <tr><td>Jabatan</td><td><?php echo $jabatan; ?></td></tr>
	    <tr><td>Jeda</td><td><?php echo $jeda; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>Domisili</td><td><?php echo $domisili; ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('biodata') ?>" class="btn btn-warning">Cancel</a></td></tr>
	</table>
        </body>
</html>