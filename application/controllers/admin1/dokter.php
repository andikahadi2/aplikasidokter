<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
function __construct() {
        parent::__construct();
		$this->load->model('a_dokter');
    }

	function index(){
		
		$data['content']="admin/content/v_dokter";
		$data['semua_dokter']	= $this->a_dokter->semua_dokter();
		$this->load->view('admin/index',$data);
	}
	function daftar(){
		$data['content']="pengguna/content/daftar";
			
		$this->load->view('pengguna/index_d',$data);
	}
	function tampild(){
		$data['content']="admin/content/v_dokter";
		$data['semua_dokter']	= $this->db->query("select * from dokter where status=0  ");
		$this->load->view('admin/index',$data);
	}
	function datad(){
		$data['content']="admin/content/v_dokter1";
		$data['semua_dokter']	= $this->db->query("select * from dokter where status=1  ");
		$this->load->view('admin/index',$data);
	}
	function tambah(){
		
		
		$data['content']="admin/content/v_dokter";
		$this->load->view('admin/index',$data);
	}
	function tambah_a(){
	
	$data['nama']			= $this->input->post('nama');
	$data['alamat'] 		= $this->input->post('alamat');
	$data['spesialis'] 		= $this->input->post('spesialis');
	$data['tmp_praktek'] 	= $this->input->post('tempat');
	$data['pndk_sd'] 		= $this->input->post('sd');	
	$data['pndk_smp'] 		= $this->input->post('smp');	
	$data['pndk_sma'] 		= $this->input->post('sma');	
	$data['pndk_kuliah'] 	= $this->input->post('kuliah');	
	$data['jeniskelamin'] 	= $this->input->post('jeniskelamin');
	$data['spesialis'] 		= $this->input->post('spesialis');
	$data['username'] 		= $this->input->post('username');
	$data['password'] 		= $this->input->post('password');
	$data['nid']			= $this->input->post('nid');
	$data['level'] 			= "dokter";
	$data['status']			=0;
		
	$c['upload_path']	= FCPATH."asset/gambar/post/";
	$c['allowed_types']	= "jpg|jpeg|png|bmp";
	$c['remove_spaces']	= TRUE;
	$c['max_size']		= 1024;
		
	$this->upload->initialize($c);
	if(!$this->upload->do_upload('foto'))
	{
			echo $this->upload->display_errors();
	}
	else
	{
		$gambar				= $this->upload->data(); 
		$data['foto']	= "./post/".$gambar['file_name']; //r_gambar d databases		
		
		if($this->a_dokter->tambah_dokter($data))
		{
			redirect(base_url().'dokter/login/sukses');
		}	
	}
	}
	function edit_d(){

	$c['upload_path']	= FCPATH."asset/gambar/post/";
	$c['allowed_types']	= "jpg|jpeg|png|bmp";
	$c['remove_spaces']	= TRUE;
	$c['max_size']		= 1024;
	
	$this->upload->initialize($c);
	$id	= $this->input->post("id");
	
	if(!$this->upload->do_upload('foto'))
	{
		$data=array("nama"=>$this->input->post('nama'),
					"alamat"=>$this->input->post('alamat'),
					"jeniskelamin"=>$this->input->post('jeniskelamin'),
					"spesialis"=>$this->input->post('spesialis'),
					"username"=>$this->input->post('username'),
					"password"=>$this->input->post('password'),
					"level"=>dokter);
		$this->db->where("id", $id)->update('dokter', $data);
		redirect(base_url().'admin1/dokter');
	}
	else
	{
		$og	= $this->db->select('foto')->where("id", $id)->get("dokter")->row_array();
		if(unlink("./asset/gambar/".$og['foto']))
		
		{
			$gambar				= $this->upload->data(); 
			$data=array("foto"=>"./post/".$gambar['file_name'],
						"nama"=>$this->input->post('nama'),
						"alamat"=>$this->input->post('alamat'),
						"jeniskelamin"=>$this->input->post('jeniskelamin'),
						"spesialis"=>$this->input->post('spesialis'),
						"username"=>$this->input->post('username'),
						"password"=>$this->input->post('password'));
				$this->db->where("id", $id)->update('dokter', $data);
				redirect(base_url().'admin1/dokter');
			
		}	
	}
	}
	function editdokter($a){
	$data['content']="admin/content/v_editdokter";
	$data['edit_dokter']	= $this->a_dokter->edit_dokter($a);
	$this->load->view('admin/index',$data);	
	}
	function hapus_dokter($a)
	{
		$this->db->where("id", $a)->delete("dokter");
		redirect($_SERVER['HTTP_REFERER']);
	}
	function konfirmasi($id){
		$data	=array('status'=>1);
		$this->db->where('id',$id);
		$this->db->update('dokter',$data);
		
	}

}
