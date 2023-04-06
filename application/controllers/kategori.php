<?php 

class Kategori extends CI_Controller{
	public function paket(){
		$data['paket'] = $this->model_kategori->data_paket()->result();
		$this->load->view('templates/css');
		$this->load->view('templates/sidebar');
		$this->load->view('paket', $data);
		$this->load->view('templates/javascript');
	}

	public function makan(){
		$data['makan'] = $this->model_kategori->data_makan()->result();
		$this->load->view('templates/css');
		$this->load->view('templates/sidebar');
		$this->load->view('makan', $data);
		$this->load->view('templates/javascript');
	}

	public function minum(){
		$data['minum'] = $this->model_kategori->data_minum()->result();
		$this->load->view('templates/css');
		$this->load->view('templates/sidebar');
		$this->load->view('minum', $data);
		$this->load->view('templates/javascript');
	}
} 