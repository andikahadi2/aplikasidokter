<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('d_index');
}



public function index()
	{
		$user=$this->session->userdata('username');
		$sesi			=$this->session->userdata('sesi_id');
		$coba	=$this->db->query("SELECT * FROM tampil_pesand  where id_penerima='$sesi' GROUP BY id_pengirim DESC ")->result();
		$data['pesan']= $coba;
		$where = array(
				'username' => $user,
				);
				$user = $this->d_index->db_index($where);
		
		$data['jj']=$user;
		$data['content']="dokter/content/index";
		$data['herder']="dokter/template/herder";
		$this->load->view('dokter/v_index',$data);
	}
	function tampil_index($id_ang){
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}
		else{
			$data['list'] = $this->d_index->getd_data($id_ang);
			$data['coba'] = $this->d_index->tampil($id_ang);
			$user=$this->session->userdata('username');
		
		$where = array(
				'username' => $user,
				);
				$user = $this->d_index->db_index($where);
		
		$data['jj']=$user;
		$data['herder']="dokter/template/herder.php";
		$data['content']="dokter/content/index1";
		$this->load->view('dokter/v_index',$data);
			}
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
	function reload_pesan($id_pesan,$limit){
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}else{
			$data['sesi']	=$this->session->userdata('username');
			$sesi			=$this->session->userdata('sesi_id');
			$sql	=$this->db->query("select * from pesan o join tampil_user t on t.id=o.id_pengirim where (o.id_penerima ='$sesi' and o.id_pengirim='$id_pesan') or (o.id_pengirim='$sesi' and o.id_penerima='$id_pesan') order by o.id_pesan desc ")->result();
			echo json_encode($sql);
			
		}
	}
	function leaveRoom($id_pesan){
		if(!$this->session->userdata('username')){
			redirect(base_url("user/login"));
		}else{
			$data['sesi']	=$this->session->userdata('username');
			$this->db->query("delete from pesan where id_pesan=$id_pesan");
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

}