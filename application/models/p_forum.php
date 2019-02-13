<?php
class P_forum extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function db_index($where){
	
			$this->db->select()->from('member')->where($where);
			$query = $this->db->get();
			return $query;
}
	function getAllMember(){
		$sql	=$this->db->query("select * from member order by id desc limit 0,5");
		if($sql->num_rows()>=1){
			return $sql->result();
		}else{
			return array();
		}
	}
	
	function data_grup($id_grup){
			$this->db->select()->from('rom')->where('id_rom', $id_grup)->order_by('id_rom','asc');
			$query = $this->db->get();
			return $query->first_row('array');
		}
	
}
