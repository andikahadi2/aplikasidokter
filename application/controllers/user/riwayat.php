<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Riwayat extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('u_index');
}
function index()
	{
		$sesi			=$this->session->userdata('sesi_id');
		$data['riwa']=$this->db->query("select * from riwayat where id_member='$sesi'")->result();
		$user=$this->session->userdata('username');
		$where = array('username' => $user);
		$user = $this->u_index->db_index($where);
		
		$data['jj']=$user;
		$data['herder']="user/template/herder";
		$data['content']="user/content/riwayat";
		$this->load->view('user/v_index',$data);
	}
	function update(){
		$id	= $this->input->post("id");
		$data	=array('riwayat'=>$this->input->post('riwayat'));
		
		$this->db->where("id", $id)->update('member', $data);
		redirect(base_url().'user/riwayat/index/'.$id);
		
	}
	function edit(){
		$sesi			=$this->session->userdata('sesi_id');
		$data['riwa']=$this->db->query("select * from riwayat where id_member='$sesi'")->result();
		$user=$this->session->userdata('username');
		$where = array('username' => $user);
		$user = $this->u_index->db_index($where);
		
		$data['jj']=$user;
		$data['herder']="user/template/herder";
		$data['content']="user/content/riwayat1";
		$this->load->view('user/v_index',$data);
	}
	function tambah(){
	
	$data['id_member']			= $this->session->userdata('sesi_id');
	$data['rwt_now']			= $this->input->post('sekarang');
	$data['penyebab'] 			= $this->input->post('penyebab');
	$data['area']				= $this->input->post('area');
	$data['kapan']				= $this->input->post('kapan');
	$data['rwt_dulu'] 			= $this->input->post('dulu');
	$data['rwt_keluarga']		= $this->input->post('keluarga');
	
	$c['upload_path']	= FCPATH."asset/gambar/riwayat/";
	$c['allowed_types']	= "jpg|jpeg|png|bmp";
	$c['remove_spaces']	= TRUE;
	$c['max_size']		= 1024;
		
	$this->upload->initialize($c);
	if(!$this->upload->do_upload('gambar'))
	{
			if($this->u_index->tambah_a($data))
		{
			redirect($_SERVER['HTTP_REFERER']);
		}	
	}
	else
	{
		$gambar				= $this->upload->data(); 
		$data['gambar']	= "./riwayat/".$gambar['file_name']; //r_gambar d databases		
		
		if($this->u_index->tambah_a($data))
		{
			redirect($_SERVER['HTTP_REFERER']);
		}	
	}
	}
	function edit_rwt(){
	$c['upload_path']	= FCPATH."asset/gambar/riwayat/";
	$c['allowed_types']	= "jpg|jpeg|png|bmp";
	$c['remove_spaces']	= TRUE;
	$c['max_size']		= 1024;
	
	$this->upload->initialize($c);
	$id	= $this->input->post("id");
	
	if(!$this->upload->do_upload('gambar'))
	{
		$data=array("rwt_now"=>$this->input->post('sekarang'),
					"penyebab"=>$this->input->post('penyebab'),
					"area"=>$this->input->post('area'),
					"kapan"=>$this->input->post('kapan'),
					"rwt_dulu"=>$this->input->post('dulu'),
					"rwt_keluarga"=>$this->input->post('keluarga'));
		$this->db->where("id_riwayat", $id)->update('riwayat', $data);
		redirect(base_url().'user/riwayat');
	}
	else
	{
			$gambar				= $this->upload->data(); 
			$data=array("gambar"=>"./riwayat/".$gambar['file_name'],
						"rwt_now"=>$this->input->post('sekarang'),
						"penyebab"=>$this->input->post('penyebab'),
						"area"=>$this->input->post('area'),
						"kapan"=>$this->input->post('kapan'),
						"rwt_dulu"=>$this->input->post('dulu'),
						"rwt_keluarga"=>$this->input->post('keluarga'));
				$this->db->where("id_riwayat", $id)->update('riwayat', $data);
				redirect(base_url().'user/riwayat');
	}
	}
	
	
}