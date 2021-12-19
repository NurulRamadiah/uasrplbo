<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '3') {
			redirect('Auth');
		}
		$this->load->model('m_user');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$user = $this->m_user->tampil()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'user' => $user,'scripts' =>array());
		$this->template->load('karyawan/static','karyawan/Halamanuser',$data);
	}

	public function tambah()
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
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data User Berhasil disimpan</div>');
		$this->m_user->tambah($data,'user');
		redirect('karyawan/user');
		
	}

	public function update()
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
		'nama' => $nama,
		'username' => $username,
		'jenis_kelamin' => $jjenis_kelamink,
		'no_hp' => $no_hp,
		'email' => $email,
		'password' => $password,
		'level' => $level
	);

	$where = array(
		'id_user' => $id_user
	);


	$this->m_user->update($where,$data,'user');
	redirect('karyawan/user');
	}


	public function hapus($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->m_user->hapus($where,'user');
		redirect('karyawan/user');
	}

	
}
