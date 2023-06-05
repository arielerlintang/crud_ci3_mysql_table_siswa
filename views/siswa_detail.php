<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Siswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body>
	<h1>Detail Siswa</h1>
	<div class="container">
		<img src="<?php echo base_url('assets/files/'.$siswa['foto_siswa']) ?>" width="100">
		<h6>Nama : <?php echo $siswa['nama_siswa']; ?></h6>
		<p>Alamat :<?php echo $siswa['alamat_siswa'] ?></p>
		<h6><?php echo $siswa['jk_siswa'] ?></h6>

	</div>

</body>
</html>