<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '3') {
			redirect('Auth');
		}
		$this->load->model('m_order');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$pembayaran = $this->m_order->tampil_order()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'pembayaran' => $pembayaran,'scripts' =>array());
		$this->template->load('karyawan/static','karyawan/pembayaran',$data);
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
		
		redirect('karyawan/order');
		
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
	redirect('karyawan/order');
	}



	

	public function hapus($id_order)
	{
		$where = array('id_order' => $id_order);
		$this->m_order->hapus($where,'order_barang');
		redirect('karyawan/order');
	}
	public function validasi()
	{
		$status_order = "1";
		$id_order = $this->input->post('id_order');
		$data = array(
			
			'status_order' => $status_order
			);

	$where = array(
		'id_order' => $id_order
	);
		$this->session->set_flashdata('success',  '<div class="alert alert-success" style="text-align:center">Data Siswa Berhasil di Aktifkan!!!</div>');
		$this->m_order->update($where,$data,'order_barang');
		redirect('karyawan/order');
	}




	
}
