<?php 
class Dashboard_admin extends CI_Controller{
	

	public function index(){
		$data['menu'] = $this->model_menu->tampil_data()->result();
		$this->load->view('templates_admin/css');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/javascript');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['menu']=$this->model_menu->get_keyword($keyword);
		$this->load->view('templates_admin/css');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/javascript');
	}
}