<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login');
		$this->load->model('m_user');
	}


	public function index()
	{
		
		$level = $this->session->userdata('level');
		

		if ($level == '1') 
		{
			redirect ('pembeli/home');
		}
		elseif ($level == '2') {
			redirect ('staff/home');
		}elseif ($level == '3') {
			redirect ('karyawan/home');
		}else
		{
			$this->load->view('Login');
		}
	}
	public function do_login()
	{
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE)));
		$hasil = $this->m_login->validasi($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['isUser'] = TRUE;
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['username'] = $sess->username;
				$sess_data['nama'] = $sess->nama;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);

				$userData = $this->session->userdata();
			}
			if ($userData['level'] =='3') {
				redirect('karyawan/home');
			}
			elseif ($userData['level'] =='1') {
				redirect('pembeli/home');
			}
			else {
				redirect('karyawan/home');
			}			
		}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal login: Cek username, password!</div>');
			redirect('Auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth','refresh');
	}

	public function tampil_daftar()
	{
		$this->load->view('daftar_user');
	}

	public function daftar()
	{
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');
 
		$data = array(
            'id_user' => $id_user,
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'jenis_kelamin' => $jenis_kelamin,
			'email' => $email,
			'no_hp' => $no_hp,
			'level' => $level
			);
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Behasil didaftarkan</div>');
		$this->m_user->tambah($data,'user');
		redirect('Auth');
		
	}

	

}





