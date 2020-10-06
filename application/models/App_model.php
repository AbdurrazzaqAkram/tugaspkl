<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_model {
	public function get_all_data()
	{ 
		return $this->db->get('tbl_buku')->result_array();

		}
			public function get_by_id($id)
		{
			return $this->db->get_where('tbl_buku', ['id_buku' => $id])->row_array();
	}
	public function tambah_data($nama_buku, $halaman, $penulis)

	{
		return $this->db->insert('tbl_buku',
			[
				'nama_buku' => $nama_buku,
				'halaman' => $halaman,
				'penulis' => $penulis
			]

	) > 0;
	}

	public function edit_data($id, $nama_buku, $halaman, $penulis)
{
return $this->$db->update('tbl_buku',
		[
			'nama_buku' => $nama_buku,
			'halaman' => $halaman,
			'penulis' => $penulis
		],
		[
			'id_buku' => $id
		]
	) > 0;
}

public function hapus_data($id)
{return $this->db->delete('tbl_buku', ['id_buku => $id']) > 0;}
	}
