<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

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
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$pembayaran = $this->m_order->tampil_pembayaran()->result();
		$lunas_pembayaran = $this->m_order->tampil_lunas()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'pembayaran' => $pembayaran,'lunas_pembayaran' => $lunas_pembayaran, 'scripts' =>array());

		
        $this->load->view('pembeli/pembayaran',$data);
		
	}
	public function hapus($id_order)
	{
		$where = array('id_order' => $id_order);
		$this->m_order->hapus($where,'order_barang');
		redirect('pembeli/pembayaran');
	}
	
}