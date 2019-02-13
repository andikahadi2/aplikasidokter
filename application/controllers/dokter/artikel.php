<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('d_artikel');
}



public function index()
	{
			if ($_GET) {
				$katakunci = $this->input->get('search');
				$data['list'] = $this->d_artikel->cari_artikel($katakunci);
			} else {
				$data['list'] = $this->d_artikel->get_data();
			}
			
			
		$user=$this->session->userdata('username');
		
		$where = array(
				'username' => $user,
				);
				$user = $this->d_artikel->db_index($where);
		
		$data['jj']=$user;
		$data['content']="dokter/content/artikel";
		$data['herder']="dokter/template/herder";
		$this->load->view('dokter/v_index',$data);
	}
	function detail($id_ang){
		$data['list'] = $this->d_artikel->getd_data($id_ang);
		$user=$this->session->userdata('username');
		
		$where = array(
				'username' => $user,
				);
				$user = $this->d_artikel->db_index($where);
		
		$data['jj']=$user;
		$data['content']="dokter/content/artikel1";
		$data['herder']="dokter/template/herder";
		$this->load->view('dokter/v_index',$data);
		}

}