<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '3') {
			redirect('Auth');
		}
		$this->load->model('m_produk');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$produk = $this->m_produk->tampil()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'produk' => $produk,'scripts' =>array());
		$this->template->load('karyawan/static','karyawan/Produk',$data);
	}

	public function tambah()
	{		
			$nama_produk = $this->input->post('nama_produk');
			$harga_produk = $this->input->post('harga_produk');
			$deskripsi = $this->input->post('deskripsi'); 
			$foto = $_FILES['foto'];
			if ($foto=''){}
				else {
					$config['upload_path']          = './upload/foto/';
					$config['allowed_types']        = 'png|jpg|gif';
					$config['max_size']             = 2048;
					$config['max_width']            = 40000;
					$config['max_height']           = 40000;
					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('foto')) {
						echo "Upload Gagal"; die();
					}
					else {
						$foto=$this->upload->data("file_name");
					}

				
				
			}
			$data = array(
				'nama_produk' => $nama_produk,
				'harga_produk' => $harga_produk,
				'deskripsi' => $deskripsi,
				'foto' => $foto
				);		
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data Beasiswa Berhasil ditambahkan</div>');
		$this->m_produk->tambah($data,'produk');
		
		redirect('karyawan/produk');
		
	}



		

	public function update()
	{
		$nisn = $this->input->post('nisn');
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');		
		$npsn = $this->input->post('npsn');
		$kelas = $this->input->post('kelas');
		$no_hp = $this->input->post('no_hp');
		$data = array(
			
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'jenis_kelamin' => $jk,
			'npsn' => $npsn,
			'kelas' => $kelas,
			'no_hp' => $no_hp
			);

	$where = array(
		'nisn' => $nisn
	);

		$this->m_produk->update($where,$data,'siswa');


		$id_lamp = $this->input->post('id_lamp');
		$data = $this->m_produk->ambil($nisn)->row();
		$foto = './upload/foto/'.$data->l_foto;

		if(is_readable($foto) && unlink($foto)){
			$config['upload_path']          = './upload/foto/';
			$config['allowed_types']        = 'png|jpg|gif';
			$config['max_size']             = 2048;
			$config['max_width']            = 40000;
			$config['max_height']           = 40000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					$error = array('error' => $this->upload->display_errors());
					
					redirect('karyawan/siswa');
			}
			else{
				$img = $this->upload->data();
	              //Compress Image
			        $l_foto = $img['file_name']; 


                 $datafot = array(
                    'l_foto'   => $l_foto
                 );	
                 $where = array(
					'id_lamp' => $id_lamp
				);
                $this->session->set_flashdata('success', '<div class="alert alert-success" style="text-align:center">Data Berhasil di Update</div>');
				$this->m_produk->update($where,$datafot, 'lampiran');

				redirect('karyawan/siswa');
			}



			
		}else{
			$this->session->set_flashdata('success', '<div class="alert alert-success" style="text-align:center">Data Berhasil di Update</div>');
			redirect('karyawan/siswa');
		}
	

	}

 



	public function hapus($id_produk)
	{
		$data = $this->m_produk->ambil($id_produk)->row();
		$nama = './upload/foto/'.$data->foto;
		$where = array('id_produk' => $id_produk);

		if(is_readable($nama) && unlink($nama)){
			$this->m_produk->hapus($where, 'produk');
			$this->session->set_flashdata('hapus', '<div class="alert alert-success" style="text-align:center">Data Berhasil di Hapus</div>');
			redirect('karyawan/produk');
		}else{
			echo "Gagal";
		}


	}
}

		


		






