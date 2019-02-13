<?php
class D_index extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function db_index($where){
	
			$this->db->select()->from('dokter')->where($where);
			$query = $this->db->get();
			return $query;
}
	function getd_data($id_ang){
			$this->db->select()->from('tampil_riwayat')->where('id', $id_ang)->order_by('id','asc');
			$query = $this->db->get();
			return $query->first_row('array');
		}
		function tampil($id_ang){
			$this->db->select()->from('member')->where('id', $id_ang)->order_by('id','asc');
			$query = $this->db->get();
			return $query->first_row('array');
		}
	
}
