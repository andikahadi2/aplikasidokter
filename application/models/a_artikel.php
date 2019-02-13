<?php
class A_artikel extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function tambah_a($data){
	return $this->db->insert('artikel',$data);
}
	function semua_artikel(){
	return $this->db->select('d.*')->from('artikel d')->get();
	}
	function edit_artikel($a){
	return $this->db->select('d.*')->from('artikel d')->where('id',$a)->get();
	}
}
