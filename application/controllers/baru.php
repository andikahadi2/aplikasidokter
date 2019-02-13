<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('p_forum');
	}		
	
	function index()
	{
		$data['kontak']	=$this->db->query("select * from rom  ")->result();
		$data['content']=('pengguna/content/forum');
		$data['herder']= ('pengguna/template/herder.php');
		$this->load->view('pengguna/index',$data);
	}
	function tampil_grup($id_grup){
		
		
		$data['grup'] = $this->db->query("select * from rom where id_rom='$id_grup'")->result();
		
		$data['id']	=$id_grup;
		$data['herder']="pengguna/template/herder.php";
		$data['content']="pengguna/content/forum1";
		$this->load->view('pengguna/index',$data);
		
	}
	function reload_pesan($id_grup){
			$sql	=$this->db->query("select * from obrolan o join tampil_user t on t.id=o.id_pengirim where o.id_rom='$id_grup' order by o.id_obrolan desc")->result();
			echo json_encode($sql);
			
	}
	
}

