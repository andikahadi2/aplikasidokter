<?php
class D_grup extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function db_index($where){
	
			$this->db->select()->from('dokter')->where($where);
			$query = $this->db->get();
			return $query;
}
function getAllMember(){
		$sql	=$this->db->query("select * from dokter order by id desc limit 0,5");
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
