<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('u_artikel');
}
function index()
	{
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}else{
		if ($_GET) {
				$katakunci = $this->input->get('search');
				$data['list'] = $this->u_artikel->cari_artikel($katakunci);
			} else {
				$data['list'] = $this->u_artikel->get_data();
			}	
		$user=$this->session->userdata('username');
		
		$where = array(
				'username' => $user
				);
				$user = $this->u_artikel->db_index($where);
		
		$data['jj']=$user;
		$data['herder']="user/template/herder.php";
		$data['content']="user/content/artikel";
		$this->load->view('user/v_index',$data);
		}
	}
	function detail($id_ang){
		$data['list'] = $this->u_artikel->getd_data($id_ang);
		$user = $this->session->userdata('username');
		
		$where = array(
				'username' => $user,
				);
				$user = $this->u_artikel->db_index($where);
		
		$data['jj']=$user;
		$data['herder']="user/template/herder.php";
		$data['content']="user/content/artikel1";
		$this->load->view('user/v_index',$data);
		}

}