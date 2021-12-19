<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model {
	
	public function tampil() {
		$data = $this->db->query("SELECT * FROM order_barang left join(produk) on order_barang.id_produk=produk.id_produk order by id_produk");
		return $data;
	}
	public function tampil_menu() {
		$data = $this->db->query("SELECT * FROM produk");
		return $data;
	}
	public function tampil_order() {
		$data = $this->db->query("SELECT * FROM order_barang left join (produk,user) on order_barang.id_produk=produk.id_produk AND order_barang.id_user=user.id_user  order by order_barang.id_order DESC ");
		return $data;
	}

	public function tampil_pembayaran() {
		$data = $this->db->query("SELECT * FROM order_barang left join (produk,user) on order_barang.id_produk=produk.id_produk AND order_barang.id_user=user.id_user  where order_barang.status_order= '0'");
		return $data;
	}

	public function tampil_lunas() {
		$data = $this->db->query("SELECT * FROM order_barang left join (produk,user) on order_barang.id_produk=produk.id_produk AND order_barang.id_user=user.id_user  where order_barang.status_order= '1'");
		return $data;
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
	

}

/* End of file m_order.php */
/* Location: ./application/models/m_order.php */