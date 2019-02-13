<?php
class U_login extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function db_login($where){
	
			$this->db->select()->from('tampil_user')->where($where);
			$query = $this->db->get();
			return $query->first_row('array');
}
	function insert($data){
	return $this->db->insert('last_login',$data);
	}
	
}
