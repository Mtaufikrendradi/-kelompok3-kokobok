<?php

class Model_kategori extends CI_Model{
	public function data_minuman_dingin(){
		return $this->db->get_where("tb_produk",array('kategori' => 'minuman dingin'));
	}

	public function data_minuman_panas(){
		return $this->db->get_where("tb_produk",array('kategori' => 'minuman panas'));
	}

	public function data_makanan_ringan(){
		return $this->db->get_where("tb_produk",array('kategori' => 'makanan ringan'));
	}
}