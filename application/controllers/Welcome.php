<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("username")!="")
		{
			redirect(base_url("user/index"));
		}
	}		
	
	function index()
	{

			$this->load->view('user/login');
	}
	
}

