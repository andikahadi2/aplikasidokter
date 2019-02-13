<?php
class U_index extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function db_index($where){
	
			$this->db->select()->from('member')->where($where);
			$query = $this->db->get();
			return $query;
}
	function semua_dokter(){
	return $this->db->select('d.*')->from('dokter d')->get();
	}
	function getd_data($id_ang){
			$this->db->select()->from('dokter')->where('id', $id_ang)->order_by('id','asc');
			$query = $this->db->get();
			return $query->first_row('array');
		}
	function tampil($id){
			$this->db->select()->from('member')->where('id', $id)->order_by('id','asc');
			$query = $this->db->get();
			return $query->first_row('array');
		}
	function tambah_a($data){
	return $this->db->insert('riwayat',$data);
}
}
