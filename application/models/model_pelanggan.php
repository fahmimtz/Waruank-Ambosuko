<?php 

class Model_pelanggan extends CI_model{
	public function tampil_data()
	{
		return $this->db->get('tb_pelanggan');
	}

} 