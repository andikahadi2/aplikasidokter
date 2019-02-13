<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends CI_Controller {

function __construct()
{
	parent::__construct();
	
}



 function index(){
		
		$data['content']=('pengguna/content/forum');
		$data['herder']= ('pengguna/template/herder.php');
		$this->load->view('pengguna/index',$data);
	
	}
	
	
	
}