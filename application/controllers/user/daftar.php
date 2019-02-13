<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('u_daftar');
	}



	function index()
		{
			$data['content']="user/content/daftar";
			
			$this->load->view('user/index',$data);
		}
	
	
	function tambah_user(){
		$data['id']				=uniqid();
		$data['nik']			= $this->input->post('nik');
		$data['nama']			= $this->input->post('nama');
		$data['jeniskelamin'] 	= $this->input->post('jeniskelamin');
		$data['alamat'] 		= $this->input->post('alamat');	
		$data['username'] 	= $this->input->post('username');
		$data['password'] 	= $this->input->post('password');
		$data['status'] 	= 0;
		$data['level'] 	= "membar";
	
		$c['upload_path']	= FCPATH."asset/gambar/user/";
		$c['allowed_types']	= "jpg|jpeg|png|bmp";
		$c['remove_spaces']	= TRUE;
		$c['max_size']		= 1024;
		
		$this->upload->initialize($c);
		if(!$this->upload->do_upload('gambar'))
		{
				echo $this->upload->display_errors();
		}
		else
		{
			$gambar				= $this->upload->data(); 
			$data['foto']	= "./user/".$gambar['file_name']; //r_gambar d databases		
			
			if($this->u_daftar->daftar_user($data))
			{
				
				redirect(base_url().'user/daftar/sukses');
			}	
		}
	}
	function sukses(){
		
	$this->load->view('user/loginsukses');
	}

}