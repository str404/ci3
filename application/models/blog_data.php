<?php 
class Blog_data extends CI_Model{

	function __construct(){
		$this->load->database();
 
	}
	function get_data(){
		return $this->db->get('blog');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}