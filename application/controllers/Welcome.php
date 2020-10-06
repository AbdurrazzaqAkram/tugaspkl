<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('app_model', '', true);
	}

	public function edit_data($id)
	{
		$nama_buku = $this->input->post('nama-buku');
		$halaman = $this->input->post('halaman');
		$penulis = $this->input->post('penulis');

		$status = $this->app_model->edit_data($id, $nama_buku, $halaman, $penulis);

		if ($status)
		{
			echo 'Berhasil, <a href="' . site_url('welcome') . '"kembali</a>';
		}
		else
		{
			echo 'Gagal, <a href="' . site_url('welcome') . '"kembali</a>';
		}
	}

	public function edit($id)
	{
		$data = $this->app_model->get_by_id($id);
		
		$this->load->view('edit_view', $data);
	}

	public function tambah_data()
	{
		$nama_buku = $this->input->post('nama-buku');
		$halaman = $this->input->post('halaman');
		$penulis = $this->input->post('penulis');

		$status = $this->app_model->tambah_data($nama_buku, $halaman, $penulis);
		if ($status)
		{
			echo 'Berhasil, <a href="localhost/perpus"kembali</a>';
		}
		else
		{
			echo 'Gagal, <a href="' . site_url('welcome') . '"kembali</a>';
		}
	}

	public function tambah()
	{
		$this->load->view('tambah_data');
	}

	public function hapus($id)
	{
		$status = $this->app_model->hapus_data($id);

		if ($status)
		{
			echo 'Berhasil dihapus, <a href="' . site_url('welcome') . '"kembali</a>';
		}
		else
		{
			echo 'Gagal dihapus, <a href="' . site_url('welcome') . '"kembali</a>';
		}
	}


	public function index()
	{
		$data['hasil'] = $this->app_model->get_all_data();

		$this->load->view('home_view', $data);
	}
}
