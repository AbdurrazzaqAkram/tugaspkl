<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?= form_open('welcome/edit_data'. $id_buku, ['method' => 'post', 'class' => 'form-group p-5']) ?>
	<input value="<?= $nama_buku ?>" type="text" name="nama-buku" class="form-control my-2" placeholder="Masukkan Nama Buku">
	<input value="<?= $halaman ?>"type="text" name="halaman" class="form-control my-2" placeholder="Masukkan Jumlah Halaman">
	<input value="<?= $penulis ?>"type="text" name="penulis" class="form-control my-2" placeholder="Masukkan Nama Penulis">
	<input type="submit" class="btn btn-success" value="Edit">
	<?= form_close() ?>

</body>
</html>