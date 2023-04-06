<?php 
class Registrasi extends CI_Controller{
	public function index()
	{
		$this->form_validation->set_rules('nama','Nama', 'required', ['required' => 'Nama Wajib diisi!']);
		$this->form_validation->set_rules('email','Email', 'required', ['required' => "Email Wajib diisi!"]);
		$this->form_validation->set_rules('no_telepon','no_telepon', 'required', ['required' => "Nomor Telepon Wajib diisi!"]);
		$this->form_validation->set_rules('alamat','Alamat', 'required', ['required' => "Alamat Wajib diisi!"]);
		$this->form_validation->set_rules('password_1','Password', 'required|matches[password_2]', ['required' => 'Password Wajib diisi!','matches' => 'Password Tidak cocok']);
		$this->form_validation->set_rules('password_2','Password', 'required|matches[password_1]');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/css');
			$this->load->view('registrasi');
			$this->load->view('templates/javascript');
		} else {
			$data = array(
				'id'		=> '',
				'nama'		=> $this->input->post('nama'),
				'email'		=> $this->input->post('email'),
				'no_telepon'=> $this->input->post('no_telepon'),
				'alamat'	=> $this->input->post('alamat'),
				'password'	=> $this->input->post('password_1'),
				'role_id'	=> 2,
			);

			$this->db->insert('tb_pelanggan',$data);
			redirect('auth/login');
		}
		
	}
}