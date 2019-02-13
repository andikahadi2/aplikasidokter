<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('u_login');	
}
function index(){
	$this->load->view('user/login');
}

function c_login()
	{ $data['error'] = 0;

			if ($_POST) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$where = array(
				'username' => $username,
				'password' => $password,
				);
				$user = $this->u_login->db_login($where);
				if (!$user) {
					$data['error'] = 4;
				} 
				else {
					echo $this->session->set_userdata('username', $user['username']);
					echo $this->session->set_userdata('auth', $user['nama']);
					echo $this->session->set_userdata('sesi_id', $user['id']);
					$tingkat=$user['level'];
					$status=$user['status'];
					if($tingkat == "dokter" && $status ==0){
						redirect(base_url().'user/login');
					}else if($tingkat=="dokter" && $status==1){
						$data=array(
						"id_dokter"=>$user['id'],
						"waktu"=>date("Y-m-d H:i:s"),
						);
						$this->u_login->insert($data);
						redirect(base_url().'dokter/index');
						
					}else if($tingkat == "membar" && $status==0){
						redirect(base_url().'user/login');
					}else if ($tingkat == "membar" && $status==1){
						redirect(base_url().'user/index');
					}
				}
			}

			$this->load->view('user/login', $data);
		
	}
	function logout(){
		$this->session->sess_destroy();
			redirect(base_url().'welcome');
	}
	function coba(){
		
	$this->load->view('user/loginsukses');
	}

}