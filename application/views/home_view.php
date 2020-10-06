<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home Perpus</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<table class="table">	
			<thead>
				<tr align="center">
					<th>No.</th>
					<th>Nama Buku</th>
					<th>Halaman</th>
					<th>Penulis</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				foreach ($hasil as $d) {
					?>

					<tr align="center">
						<td><?= $no++ ?></td>
						<td><?= $d['nama_buku'] ?></td>
						<td><?= $d['halaman'] ?></td>
						<td><?= $d['penulis'] ?></td>
						<td>
						<a class="btn btn-primary" href="<?= site_url('welcome/edit/' . $d['id_buku']) ?>">Edit</a>
						<a onClick="return confirm('Yakin ingin dihapus')" class="btn btn-primary" href="<?= site_url('welcome/hapus/' . $d['id_buku']) ?>">Hapus</a>
						</td>
					</tr>

					<?php
				}
				?>
			</tbody>
		</table>

		<a class="btn btn-danger" href="<?= site_url('welcome/tambah') ?>">Tambah Data</a>
	</body>
</html>