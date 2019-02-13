<?php
class U_artikel extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function db_index($where){
	
			$this->db->select()->from('member')->where($where);
			$query = $this->db->get();
			return $query;
}
	function cari_artikel($katakunci){
		$where="text LIKE '%$katakunci%' or judul LIKE '%$katakunci%'";
			$this->db->select('*')->from('artikel')->where($where)->order_by('id','desc');
			$query = $this->db->get();
			return $query->result_array();
	}
	
	function get_data(){
			$this->db->select('*')->from('artikel')->order_by('tanggal','desc');
			$query = $this->db->get();
			return $query->result_array();
		}
		function getd_data($id_ang){
			$this->db->select()->from('artikel')->where('id', $id_ang)->order_by('id','asc');
			$query = $this->db->get();
			return $query->first_row('array');
		}
	
}
