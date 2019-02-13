<?php
class M_login extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function get_user($usr, $pwd)
     {
          $sql = "select * from admin where username = '" . $usr . "' and password = '" . md5($pwd) . "' and level = 'admin'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
}
?>