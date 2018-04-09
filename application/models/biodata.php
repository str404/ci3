<?php

/**
* 
*/
class Biodata_model extends CI_Model
{
	
	public functions get_biodata()
	{
		# code...
		$this ->db->get('biodata');

		$data= $this->query->result();

		return $data ;
	}
}

?>