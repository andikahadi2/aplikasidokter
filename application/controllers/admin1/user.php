<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
function __construct() {
        parent::__construct();
    }

	public function index(){
		$data['content']="admin/content/v_user";
		
		$this->load->view('admin/index',$data);
	}
	function user_tampil($id=0){
		$this->load->library('pagination');
		$this->db->where('status',0);
		$jum=$this->db->get('member');
		$config['base_url']=base_url()."admin/user/user_tampil";
		$config['total_rows']=$jum->num_rows();
		$config['per_page']=10;
		
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">';
		$config['full_tag_close'] = '</ul></div>';
		
		$config['first_link'] = '&laquo; Pertama';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = 'Terakhir &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>'; 
		 
		$config['next_link'] = 'Selanjutnya &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = '&larr; Sebelumnya';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
		$config['uri_segment'] = 4;
		
		$this->pagination->initialize($config);

		$data['member']	=$this->db->query("select * from member where status=0 limit $id,{$config['per_page']}")->result();
		$data['page']=$this->pagination->create_links();
		$data['content']="admin/content/v_user";
		$this->load->view('admin/index',$data);
	}
	function konfirmasi($id){
		$data	=array('status'=>1);
		$this->db->where('id',$id);
		$this->db->update('member',$data);
	}
	function hapus($id){
		$this->db->where('id',$id);
		$this->db->delete('member');
		redirect($_SERVER['HTTP_REFERER']);
	}
	function tampil(){
		$data['member']	=$this->db->query("select * from member where status=1")->result();
		
		$data['content']="admin/content/v_user2";
		$this->load->view('admin/index',$data);
	}

}
