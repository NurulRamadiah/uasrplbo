<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '1') {
			redirect('Auth');
		}
		$this->load->model('m_produk');
		$this->load->model('m_order');
	}

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$produk = $this->m_produk->tampil_home()->result();

		$data = array('id_user' => $id_user,'usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'produk' => $produk,'scripts' =>array());
		// $this->template->load('pembeli/landing',$data);
		
        $this->load->view('pembeli/landing',$data);
		
	}

	public function pesan($id_produk)
	{
		
		$id_user = $this->session->userdata('id_user');
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');
		// $id_produk = $this->uri->segment();
		$produk  = $this->m_produk->tampil_pesan($id_produk);
		$number= $this->m_produk->getYear();

		$data = array('id_user' => $id_user,'usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'number' => $number,'produk' => $produk,'scripts' =>array());
		// $this->template->load('pembeli/landing',$data);
		
        $this->load->view('pembeli/pesan_barang',$data);
		
	}
	public function tambah()
	{		
		
		$id_produk = $this->input->post('id_produk');
		$jumlah_order = $this->input->post('jumlah_order');	
		$status_order = "0";

		$data = array(
			'id_produk' => $id_produk,
			'jumlah_order' => $jumlah_order,
			'status_order' => $status_order,

			);		
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Barang Berhasil ditambahkan ke keranjang</div>');
		$this->m_order->tambah($data,'order');
		
		redirect('pembeli/home');
		
	}
}