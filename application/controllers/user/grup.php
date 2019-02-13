<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grup extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('u_grup');
	
}



public function index(){	

if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}
		else{
		$data['allMember']	=$this->u_grup->getAllMember();
	
		$sesi	=$this->session->userdata('sesi_id');
		$data['kontak']	=$this->db->query("select * from rom  ")->result();
	
		$user=$this->session->userdata('username');
		
		$where = array(
				'username' => $user
				);
				$user = $this->u_grup->db_index($where);
		
		$data['jj']=$user;
		$data['herder']="user/template/herder.php";
		$data['content']="user/content/grup";
		$this->load->view('user/v_index',$data);
		}
}
	
	function tambahRoom(){
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}
		else{
			$sesi	=$this->session->userdata('sesi_id');
			$coba =$this->input->get('nama_room');
			$data_insert	=array("id_rom"=>uniqid(),"id_member"=>$sesi,"nama_room"=>$coba);
			$this->db->insert('rom',$data_insert);
			redirect(base_url("user/grup"));
		}
	}
	function tampil_grup($id_grup){
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}
		else{
		$data['grup'] = $this->u_grup->data_grup($id_grup);
		$user=$this->session->userdata('username');
		$where = array(
				'username' => $user
				);
				$user = $this->u_grup->db_index($where);
		
		$data['jj']=$user;
		
		$data['sesi']	=$this->session->userdata('sesi_id');
		$data['id']	=$id_grup;
		
		$data['herder']="user/template/herder.php";
		$data['content']="user/content/grup1";
		$this->load->view('user/v_index',$data);
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
			$sesi			=$this->session->userdata('sesi_id');
			$data_insert	=array(
									"id_pengirim"=>$sesi,
									"pesan"=>$this->input->post('textarea2'),
									"tanggal"=>date("Y-m-d"),"waktu"=>date("H:i:s"),
									"id_rom"=>$this->input->post('id_grup'));
			$this->db->insert('obrolan',$data_insert);
			$data_insert['nama_pengirim']	=$this->session->userdata('username');
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			$sesi			=$this->session->userdata('sesi_id');
			$image			=$this->upload->data();
			$data_insert	=array(
									"id_pengirim"=>$sesi,
									"gambar"=>"./pesan/".$image['file_name'],
									"pesan"=>$this->input->post('textarea2'),
									"tanggal"=>date("Y-m-d"),"waktu"=>date("H:i:s"),
									"id_rom"=>$this->input->post('id_grup'));
			$this->db->insert('obrolan',$data_insert);
			$data_insert['nama_pengirim']	=$this->session->userdata('username');
			redirect($_SERVER['HTTP_REFERER']);
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