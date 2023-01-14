<?php 
 
 class Dashboard extends CI_Controller{

 	public function index()
	 {
	 	$data['barang'] = $this->model_barang->tampil_data()->result_array();
	 	$this->load->view('templates/header');
	 	$this->load->view('templates/sidebar');
	 	$this->load->view('dashboard', $data);
	 	$this->load->view('templates/footer');
	 }

	 public function tambah_keranjang($id)
	 {
	 	$barang = $this->model_barang->find($id);

	 	$data = array(
        'id'      => $barang->id_barang,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_barang
		);

		$this->cart->insert($data);
		redirect('dashboard');
	 }

	 public function detail_keranjang()
	 {
	 	$this->load->view('templates/header');
	 	$this->load->view('templates/sidebar');
	 	$this->load->view('keranjang');
	 	$this->load->view('templates/footer');
	 }

	 public function hapus_keranjang()
	 {
	 	$this->cart->destroy();
	 	redirect('dashboard');
	 }

	 public function pembayaran()
	 {
	 	$this->load->view('templates/header');
	 	$this->load->view('templates/sidebar');
	 	$this->load->view('pembayaran');
	 	$this->load->view('templates/footer');
	 }

	 public function proses_pesanan()
	 {
	 	$is_processed = $this->model_invoice->index();
	 	if($is_processed){
	 	$this->cart->destroy();
	 	$this->load->view('templates/header');
	 	$this->load->view('templates/sidebar');
	 	$this->load->view('proses_pesanan');
	 	$this->load->view('templates/footer');
	 } else {
	 	echo "Maaf, Pesanan Anda Gagal diproses!";
	 }
	 }

	 public function detail($id)
	 {
		$data['detail'] = $this->model_barang->getBarangById($id);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
	 }

 }


