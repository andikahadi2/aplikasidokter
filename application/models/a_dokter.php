<?php
class A_dokter extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function tambah_dokter($data){
	return $this->db->insert('dokter',$data);
}
	function semua_dokter(){
	return $this->db->select('d.*')->from('dokter d')->get();
	}
	function edit_dokter($a){
	return $this->db->select('d.*')->from('dokter d')->where('id',$a)->get();
	}
	
}
