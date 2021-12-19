<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('m_order');
	}

	public function index()
	{
		$id_user = $this->session->userdata('id_user');		
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$order = $this->m_order->tampil_menu()->result();

		$data = array('id_user' => $id_user,'usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'order' => $order,'scripts' =>array());
		$this->load->view('pembeli/menu',$data);
	}


	public function tambah()
	{		
		
		$id_user = $this->input->post('id_user');
		$id_produk = $this->input->post('id_produk');
		$jumlah_order = $this->input->post('jumlah_order');	
		$status_order = "0";
		$tgl_order = date("Y-m-d H:i:s");
		$total_bayar = $this->input->post('total_bayar');
		$kode_pesan = $this->input->post('kode_pesan');

		$data = array(
			'id_user' => $id_user,
			'id_produk' => $id_produk,
			'jumlah_order' => $jumlah_order,
			'status_order' => $status_order,
			'tgl_order' => $tgl_order,
			'total_bayar' => $total_bayar,
			'kode_pesan' => $kode_pesan,
			

			);		
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Barang Berhasil ditambahkan ke Keranjang</div>');
		$this->m_order->tambah($data,'order_barang');
		
		redirect('pembeli/order');
		
	}

	public function update()
	{
		$id_order = $this->input->post('id_order');		
		$id_user = $this->input->post('id_user');
		$id_produk = $this->input->post('id_produk');
		$jumlah_order = $this->input->post('jumlah_order');	
		$status_order = "0";
		$tgl_order = date("Y-m-d H:i:s");
		$total_bayar = $this->input->post('total_bayar');
		$kode_pesan = $this->input->post('kode_pesan');

		$data = array(
			'id_user' => $id_user,
			'id_produk' => $id_produk,
			'jumlah_order' => $jumlah_order,
			'status_order' => $status_order,
			'tgl_order' => $tgl_order,
			'total_bayar' => $total_bayar,
			'kode_pesan' => $kode_pesan,
			

			);	

	$where = array(
		'id_order' => $id_order
	);


	$this->m_order->update($where,$data,'order_barang');
	redirect('pembeli/order');
	}



	

	public function hapus($id_order)
	{
		$where = array('id_order' => $id_order);
		$this->m_order->hapus($where,'order_barang');
		redirect('pembeli/order');
	}

}

/* End of file Beasiswa.php */
/* Location: ./application/controllers/staff/Beasiswa.php */