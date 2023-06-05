<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Siswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body>
	<div class="container">
		<h1>Ubah Data</h1>
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label class="form-label">Nama</label>
						<input type="text" name="nama_siswa" class="form-control" value="<?php echo $siswa['nama_siswa']; ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<textarea class="form-control" name="alamat_siswa"><?php echo $siswa['alamat_siswa']; ?></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Jenis Kelamin</label>
						<select name="jk_siswa" class="form-control">
							<option class="text-muted">pilih</option>
							<option value="Laki-laki" <?php if ($siswa['jk_siswa']=="Laki-laki") {
								echo "selected";
							} ?>>Laki-laki</option>
							<option value="Perempuan"  <?php if ($siswa['jk_siswa']=="Perempuan") {
								echo "selected";
							} ?>>Perempuan</option>
						</select>
					</div>
					<div class="mb-3">
						<img src="<?php echo base_url('assets/files/'.$siswa['foto_siswa']) ?>"  width="100">
						<br>	
						<label class="form-label">Ganti Foto</label>
						<input type="file" name="foto_siswa" class="form-control">
					</div>
					<div class="mb-3">
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>