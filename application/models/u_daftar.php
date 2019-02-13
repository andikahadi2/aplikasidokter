<?php
class U_daftar extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function daftar_user($data){
	return $this->db->insert('member',$data);
}
	
}
