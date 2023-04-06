<?php 

class Dashboard extends CI_Controller{

	public function index(){
		$data['menu'] = $this->model_menu->tampil_data()->result();
		$this->load->view('templates/css');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/javascript');
	}

	public function tambah_ke_keranjang($id){
		$menu = $this->model_menu->find($id);
		$data = array(
	        'id'      => $menu->id_menu,
	        'qty'     => 1,
	        'price'   => $menu->harga,
	        'name'    => $menu->nama_menu
	);

	$this->cart->insert($data);
	redirect('dashboard');
	}

	public function detail_keranjang(){
		$this->load->view('templates/css');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/javascript');
	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('dashboard/index');
	}

	public function pembayaran(){
		$this->load->view('templates/css');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/javascript');
	}

	public function proses_pesanan()
	{
		$data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['no_telepon'] = $this->input->post('no_telepon');
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->load->view('templates/css');
			$this->load->view('proses_pesanan', $data);
			$this->load->view('templates/javascript');
		} else {
			echo "Maaf, Pesanan Anda Gagal diproses";
		}
	}

	public function detail($id_menu){
		$data['menu'] = $this->model_menu->detail_mn($id_menu);
		$this->load->view('templates/css');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_menu', $data);
		$this->load->view('templates/javascript');
	}
}