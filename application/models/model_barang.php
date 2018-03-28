<?php
class Model_barang extends CI_Model{
	function list_barang(){
		//ambil data db
		$barang = $this->db->get('barang');
		return $barang;
	}
}
?>