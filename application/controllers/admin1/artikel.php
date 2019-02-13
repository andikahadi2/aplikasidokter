<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
function __construct() {
        parent::__construct();
		$this->load->model('a_artikel');
    }

	 function index(){
		$data['content']="admin/content/v_artikel";
		$data['semua_artikel']	= $this->a_artikel->semua_artikel();
		$this->load->view('admin/index',$data);
	}
	function tambah_a(){
		
	$data['judul']			= $this->input->post('judul');
	$data['text'] 			= $this->input->post('isi');
	$data['tanggal']		= date("Y-m-d");
	
	$c['upload_path']	= FCPATH."asset/gambar/artikel/";
	$c['allowed_types']	= "jpg|jpeg|png|bmp";
	$c['remove_spaces']	= TRUE;
	$c['max_size']		= 1024;
		
	$this->upload->initialize($c);
	if(!$this->upload->do_upload('gambar'))
	{
			if($this->a_artikel->tambah_a($data))
		{
			redirect(base_url().'admin1/artikel');
		}	
	}
	else
	{
		$gambar				= $this->upload->data(); 
		$data['gambar']	= "./artikel/".$gambar['file_name']; //r_gambar d databases		
		
		if($this->a_artikel->tambah_a($data))
		{
			redirect(base_url().'admin1/artikel');
		}	
	}
	}
	function edit_artikel($a){
		$data['content']="admin/content/v_editartikel";
		$data['edit_artikel']= $this->a_artikel->edit_artikel($a);
		$this->load->view('admin/index',$data);
	}
	function editartikel(){
	$c['upload_path']	= FCPATH."asset/gambar/artikel/";
	$c['allowed_types']	= "jpg|jpeg|png|bmp";
	$c['remove_spaces']	= TRUE;
	$c['max_size']		= 1024;
	
	$this->upload->initialize($c);
	$id	= $this->input->post("id");
	
	if(!$this->upload->do_upload('gambar'))
	{
		$data=array("judul"=>$this->input->post('judul'),
					"text"=>$this->input->post('isi'),
					"tanggal"=>date("y-m-d"));
		$this->db->where("id", $id)->update('artikel', $data);
		redirect(base_url().'admin1/artikel');
	}
	else
	{
		$og	= $this->db->select('gambar')->where("id", $id)->get("artikel")->row_array();
		if(unlink("./asset/gambar/".$og['gambar']))
		
		{
			$gambar				= $this->upload->data(); 
			$data=array("gambar"=>"./artikel/".$gambar['file_name'],
						"judul"=>$this->input->post('judul'),
						"text"=>$this->input->post('isi'));
				$this->db->where("id", $id)->update('artikel', $data);
				redirect(base_url().'admin1/artikel');
			
		}	
	}
	}
	function hapus_artikel($a){
		$this->db->where("id", $a)->delete("artikel");
		redirect($_SERVER['HTTP_REFERER']);
	}

}
