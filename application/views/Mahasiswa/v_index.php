<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<title>Mahasiswa</title>

	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>

<body>
	<nav class="navbar navbar-dark bg-success navbar-expand-lg">
		<div class="navbar-brand">Tugas</div>

		<div class="navbar-nav">
			<a href="<?= site_url('mahasiswa/index'); ?>" class="nav-link">Home</a>
			<a href="<?= site_url('mahasiswa/tambah'); ?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">Kholis Fikri</a>

		</div>
	</nav>

	<div class="alert alert-primary text-center mt-4">
		Data Mahasiswa
	</div>
	<div class="container">

		<table class="table table-bordered table-sm">

			<tr>
				<th>No</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>

			<?php
			$no = 1;
			foreach ($tabel as $isi) {
			?>
				<tr>

					<td><?= $no++; ?></td>
					<td><?= $isi->nim; ?></td>
					<td><?= $isi->nama; ?></td>
					<td><?= $isi->alamat; ?></td>
					<td>
						<a href="<?= site_url("mahasiswa/edit/" . $isi->nim) ?>" class="btn btn-info btn-primary">Edit</a>
						<a href="<?= site_url("mahasiswa/hapus/" . $isi->nim) ?>" class="btn btn-info btn-danger">Hapus</a>
					</td>

				</tr>
			<?php } ?>
		</table>

	</div>


	<!-- 
	<h3>selamat datang , <?= $nama_lengkap; ?></h3>
	<p> nim saya <?= $nim; ?></p>
	<hr>
	<a href="<?= $site_url('mahasiswa/tambah'); ?>">tambah</a>
	<table>

		<tr>
			<th>Nim</th>
			<th>Mahasiswa</th>
		</tr>
		<?php foreach ($mahasiswa as $key) : ?>

			<tr>
				<td>
					<?= $key['nim'] ?>
				</td>
				<td><?= $key['nama'] ?></td>
			</tr>
			<?php endforeach ?> -->
	</table>




	<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>