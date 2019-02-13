<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grup extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('d_grup');
}

public function index()
	{
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}
		else{
		$data['allMember']	=$this->d_grup->getAllMember();
	
		$data['sesi']	=$this->session->userdata('sesi_id');
		$data['kontak']	=$this->db->query("select * from rom ")->result();
	
		$user=$this->session->userdata('username');
		$where = array(
				'username' => $user,
				);
				$user = $this->d_grup->db_index($where);
		
		$data['jj']=$user;
		$data['content']="dokter/content/grup";
		$data['herder']="dokter/template/herder";
		$this->load->view('dokter/v_index',$data);
		}
	}
	function tampil_grup($id_grup){
		
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}
		else{
		$data['grup'] = $this->d_grup->data_grup($id_grup);
		$user=$this->session->userdata('username');
		$where = array(
				'username' => $user
				);
				$user = $this->d_grup->db_index($where);
		
		$data['jj']=$user;
		
		$data['sesi']	=$this->session->userdata('sesi_id');
		$data['id']	=$id_grup;
		
		$data['content']="dokter/content/grup1";
		$data['herder']="dokter/template/herder";
		$this->load->view('dokter/v_index',$data);
	}
	}
	function kirim($id_rom){
		$c['upload_path']	= FCPATH."asset/gambar/pesan/";
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
			$sesi			=$this->session->userdata('sesi_id');
			$image			=$this->upload->data();
			$data_insert	=array(
									"id_pengirim"=>$sesi,
									"gambar"=>"./pesan/".$image['file_name'],
									"pesan"=>$this->input->post('pesan'),
									"tanggal"=>date("Y-m-d"),"waktu"=>date("H:i:s"),
									"id_rom"=>$this->input->post('id_grup'));
			$this->db->insert('obrolan',$data_insert);
			$data_insert['nama_pengirim']	=$this->session->userdata('username');
			echo json_encode($data_insert);
		}
	}
	
	function reload_pesan($id_grup){
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}else{
			$data['sesi']	=$this->session->userdata('username');
			$sql	=$this->db->query("select * from obrolan o join tampil_user t on t.id=o.id_pengirim where o.id_rom='$id_grup' order by o.id_obrolan desc")->result();
			echo json_encode($sql);
			
		}
	}
	function leaveRoom($id_obrolan){
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}else{
			$data['sesi']	=$this->session->userdata('username');
			$this->db->query("delete from obrolan where id_obrolan=$id_obrolan");
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}