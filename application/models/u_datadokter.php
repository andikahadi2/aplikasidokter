<?php
class U_datadokter extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function db_index($where){
	
			$this->db->select()->from('member')->where($where);
			$query = $this->db->get();
			return $query;
}
	function cari_dokter($katakunci){
		$where="nama LIKE '%$katakunci%' or spesialis LIKE '%$katakunci%'";
			$this->db->select('*')->from('dokter')->where($where)->order_by('id','desc');
			$query = $this->db->get();
			return $query->result_array();
	}
		function get_data(){
			$this->db->select('*')->from('login_terakhir')->where('status=1')->order_by('id','desc');
			$query = $this->db->get();
			return $query->result_array();
		}
		function getd_data($id_ang){
			$this->db->select()->from('dokter')->where('id', $id_ang)->order_by('id','asc');
			$query = $this->db->get();
			return $query->first_row('array');
		}
		function pesandokter($id_dokter){
			$this->db->select()->from('dokter')->where('id', $id_dokter)->order_by('id','asc');
			$query = $this->db->get();
			return $query->first_row('array');
		}
	
	
}
