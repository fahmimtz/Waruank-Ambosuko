<?php 
class Data_pelanggan extends CI_Controller{


	public function index()
	{
		$data['pelanggan'] = $this->model_pelanggan->tampil_data()->result();
		$this->load->view('templates_admin/css');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_pelanggan', $data);
		$this->load->view('templates_admin/javascript');
	}
}