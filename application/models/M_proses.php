<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proses extends CI_Model {

	function get_candidate()
	{
		
		$query = $this->db->query("select salary, ipk, bahasa, skillLanguage, skillDatabase, skillFramework from profile limit 10");
    	return $query->result_array();
	}
	function get_id()
	{
		$query = $this->db->query("select talent_id from profile limit 10");
    	return $query->result_array();
	}	

}

/* End of file M_proses.php */
/* Location: ./application/models/M_proses.php */