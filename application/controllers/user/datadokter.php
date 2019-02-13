<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datadokter extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('u_datadokter');
	
}
	function index()
	{	
	
		if ($_GET) {
				$katakunci = $this->input->get('search');
				$data['list'] = $this->u_datadokter->cari_dokter($katakunci);
			} else {
				$data['list'] = $this->u_datadokter->get_data();
			}
		$user=$this->session->userdata('username');
		
		$where = array(
				'username' => $user
				);
				$user = $this->u_datadokter->db_index($where);
		
		$data['jj']=$user;
		$data['herder']="user/template/herder.php";
		$data['content']="user/content/datadokter";
		$this->load->view('user/v_index',$data);
	}
	function detail($id_ang){
		$data['list'] = $this->u_datadokter->getd_data($id_ang);
		$user=$this->session->userdata('username');
		
		$where = array(
				'username' => $user,
				);
				$user = $this->u_datadokter->db_index($where);
		
		$data['jj']=$user;
		$data['herder']="user/template/herder.php";
		$data['content']="user/content/datadokter1";
		$this->load->view('user/v_index',$data);
		}
	function pesandokter($id_dokter){
		$data['tampil'] = $this->u_datadokter->pesandokter($id_dokter);
		$data['id']	=$id_dokter;
		$user=$this->session->userdata('username');
		$where = array(
				'username' => $user,
				);
				$user = $this->u_datadokter->db_index($where);
		
		$data['jj']=$user;
		$data['herder']="user/template/herder.php";
		$data['content']="user/content/pesandokter";
		$this->load->view('user/v_index',$data);	
	}
	function kirim($id_penerima){
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}else{
			$sesi			=$this->session->userdata('sesi_id');
			
			$data_insert	=array("id_pengirim"=>$sesi,"id_penerima"=>$id_penerima,"pesan"=>$this->input->post('textarea2'),
									"tanggal"=>date("Y-m-d"),"waktu"=>date("H:i:s"));
			$this->db->insert('pesan',$data_insert);
			$data_insert['nama_pengirim']	=$this->session->userdata('username');
			echo json_encode($data_insert);
		}
	}
	function reload_pesan($id_pesan){
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}else{
			$data['sesi']	=$this->session->userdata('username');
			$sql	=$this->db->query("select * from pesan o join pengguna t on t.id=o.id_member where o.id_dokter='$id_pesan' order by o.id_pesan desc")->result();
			echo json_encode($sql);
			
		}
	}

}