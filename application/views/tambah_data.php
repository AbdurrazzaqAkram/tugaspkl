<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?= form_open('welcome/tambah_data', ['method' => 'post', 'class' => 'form-group p-5']) ?>
	<input type="text" name="nama-buku" class="form-control my-2" placeholder="Masukkan Nama Buku">
	<input type="text" name="halaman" class="form-control my-2" placeholder="Masukkan Jumlah Halaman">
	<input type="text" name="penulis" class="form-control my-2" placeholder="Masukkan Nama Penulis">
	<input type="submit" class="btn btn-success" value="Tambah">
	<?= form_close() ?>

</body>
</html>