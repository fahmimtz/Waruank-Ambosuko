<?php 

class Model_kategori extends CI_model{
	
	public function data_paket(){
		return $this->db->get_where("tb_menu", array('kategori' => 'paket'));
	}

	public function data_makan(){
		return $this->db->get_where("tb_menu", array('kategori' => 'makan'));
	}

	public function data_minum(){
		return $this->db->get_where("tb_menu", array('kategori' => 'minum'));
	}
}