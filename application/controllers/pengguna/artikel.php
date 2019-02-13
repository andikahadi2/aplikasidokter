<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Artikel extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('u_artikel');
}



 function index(){
		if ($_GET) {
				$katakunci = $this->input->get('search');
				$data['list'] = $this->u_artikel->cari_artikel($katakunci);
			} else {
				$data['list'] = $this->u_artikel->get_data();
			}	
		$data['content']=('pengguna/content/artikel');
		$data['herder']= ('pengguna/template/herder.php');
		$this->load->view('pengguna/index',$data);
	}
	function detail($id_ang){
		$data['list'] = $this->u_artikel->getd_data($id_ang);
		$data['content']=('pengguna/content/artikel1');
		$data['herder']= ('pengguna/template/herder.php');
		$this->load->view('pengguna/index',$data);
		}
	
	
}