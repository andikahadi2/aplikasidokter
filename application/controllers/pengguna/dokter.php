<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dokter extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('u_datadokter');
}



 function index(){
		if ($_GET) {
				$katakunci = $this->input->get('search');
				$data['list'] = $this->u_datadokter->cari_dokter($katakunci);
			} else {
				$data['list'] = $this->u_datadokter->get_data();
			}
		$data['content']=('pengguna/content/dokter');
		$data['herder']= ('pengguna/template/herder.php');
		$this->load->view('pengguna/index',$data);
	
	}
	function detail($id_ang){
		$data['list'] = $this->u_datadokter->getd_data($id_ang);
		$data['content']=('pengguna/content/dokter1');
		$data['herder']= ('pengguna/template/herder.php');
		$this->load->view('pengguna/index',$data);
		}
	
	
	
}