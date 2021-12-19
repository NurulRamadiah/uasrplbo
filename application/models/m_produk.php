<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {
	
	public function tampil() {
		$data = $this->db->query("SELECT * FROM produk");
		return $data;
	}
	public function tampil_pesan($id_produk) {
		$query = $this->db->query("SELECT * FROM produk where id_produk = '$id_produk'");
		return $query->result();
	}

	function tampil_pesanhhh($id_produk) {
		$this->db->select("*");
		$this->db->where("id_produk",$id_produk);
		return $this->db->get('produk')->row();
	}
	public function tampil_home() {
		$data = $this->db->query("SELECT * FROM produk LIMIT 3");
		return $data;
	}
	public function tampil_menu() {
		$data = $this->db->query("SELECT * FROM produk");
		return $data;
	}


	public function daftar() {
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,keluarga,lampiran) on siswa.npsn=sekolah.npsn AND keluarga.nisn=siswa.nisn AND lampiran.nisn=siswa.nisn where siswa.status = '1'order by siswa.nisn DESC");
		return $data;
	}
	public function getYear()
	{
		$this->db->select('count(tgl_order) as kode_pesan')->from('order_barang');
		$this->db->where('year(tgl_order)', date ('Y'));
		return $this->db->get()->result_array();
	}
	public function tambah($data,$table)
	{
		$this->db->insert($table, $data);
	}

	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	
	public function ambil($id_produk){
        return $this->db->get_where('produk', array('id_produk'=>$id_produk));
    }

	
}