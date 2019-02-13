<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
function __construct() {
        parent::__construct();
    }
	public function index()
	{$data['content']="admin/content/v_isi";
		
		$this->load->view('admin/index',$data);
	}
	function logout(){
		$this->session->sess_destroy();
			redirect(base_url().'admin');
	}

}
