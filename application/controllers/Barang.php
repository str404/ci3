<?php
class Barang Extends CI_Controller{

	function index(){
		$this->load->model('model_barang');
	//	$barang = $this->model_barang->list_barang()->result();
	//	print_r($barang);
	//	die;
		$judul = 'Daftar Barang' ;
		$data['judul'] = $judul ;
		$data['barang']= $this->model_barang->list_barang()->result(); 
		//$this->model_barang->list_barang();
		$this->load->view('list_barang', $data);
	}

	function edit(){
		echo $this->uri->segment(2);
		//echo "edit" ;
	}
}