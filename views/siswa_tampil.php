<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil Siswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css") ?>">
</head>
<body>
	<div class="container">
		<h1>Tampil Siswa</h1>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Jenis kelamin</th>
						<th>Foto</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($siswa as $key => $value): ?>
						
						<tr>
							<td><?php echo $key+1; ?></td>
							<td><?php echo $value['nama_siswa']; ?></td>
							<td><?php echo $value['alamat_siswa']; ?></td>
							<td><?php echo $value['jk_siswa']; ?></td>
							<td><img src="<?php echo base_url('assets/files/'.$value['foto_siswa']) ?>" width="100"></td>
							<td>
								<a href="<?php echo base_url('index.php/siswa/detail/'.$value['id_siswa']); ?>" class="btn btn-info btn-sm">Detail</a>
								<a href="<?php echo base_url('index.php/siswa/ubah/'.$value['id_siswa']); ?>" class="btn btn-warning btn-sm">Ubah</a>
								<a href="<?php echo base_url('index.php/siswa/hapus/'.$value['id_siswa']); ?>" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>

			</table>
			<a href="<?php echo base_url('index.php/siswa/tambah') ?>" class="btn btn-primary">Tambah</a>
		</div>
	</div>

</body>
</html>