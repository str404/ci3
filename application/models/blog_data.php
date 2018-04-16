<?php 
class Blog_data extends CI_Model{

	function __construct(){
		$this->load->database();
 
	}
	function get_data(){
		return $this->db->get('blog');
	}
	function get_data_by_id($id = 0){
		return $this->db->get_where('blog', array('id' => $id));
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}

}