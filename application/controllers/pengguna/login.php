<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

function __construct()
{
	parent::__construct();
	
	
	
}
function index(){
	$this->load->view('pengguna/login');
}




	function logout(){
		$this->session->sess_destroy();
			redirect(base_url().'welcome');
	}

}