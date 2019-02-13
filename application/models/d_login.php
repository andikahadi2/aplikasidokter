<?php
class U_login extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function db_login($where){
	
			$this->db->select()->from('dokter')->where($where);
			$query = $this->db->get();
			return $query->first_row('array');
}
	
}
