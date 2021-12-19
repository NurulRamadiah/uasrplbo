<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

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
		
        $this->load->view('pembeli/kontak',$data);
		
	}

}