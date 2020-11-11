<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('post_m');
        $this->load->model('level_m');
	}

	private function cek_login(){
		$sesi = $this->session->userdata('nama');
		if($sesi == null){
			$this->session->set_flashdata('pesan_gagal','Maaf Silahkan Login Terlebih Dahulu');
			redirect(base_url('login'));
		}
    }
    
    public function card(){
        $this->cek_login();
        $id_user = $this->session->userdata('id_user');
		$user = $this->user_m->read_where(array(
			'id_user' => $id_user
        ))->row_array();
        $level = $this->level_m->tingkatan()->result_array();
        foreach($level as $data){
            if($user['point'] >= $data['point_minimum']){
                $user['ranking'] = $data['nama_level'];
                break;
            }
        }
        $user['jumlah_post'] = $this->post_m->read_where(array(
            'id_user' => $id_user
        ))->num_rows();
        $data = array(
			'user' => $user
        );
		$this->load->view('profile/card',$data);
    }

	public function index()
	{
		$this->cek_login();
        $id_user = $this->session->userdata('id_user');
		$user = $this->user_m->read_where(array(
			'id_user' => $id_user
        ))->row_array();
        $level = $this->level_m->tingkatan()->result_array();
        foreach($level as $data){
            if($user['point'] >= $data['point_minimum']){
                $user['ranking'] = $data['nama_level'];
                break;
            }
        }
        $data = array(
			'user' => $user,
            'konten' => 'profile/index'
        );
		$this->load->view('template/index',$data);
    }
    
    public function user($id_user = null){
        if($id_user == null){
            $id_user = $this->session->userdata('id_user');
        }
        $user = $this->user_m->read_where(array(
			'id_user' => $id_user
        ));
        
        if($user->num_rows() == 0 ){
            redirect(base_url('home'));
        }
        $level = $this->level_m->tingkatan()->result_array();
        $user = $user->row_array();
        foreach($level as $data){
            if($user['point'] >= $data['point_minimum']){
                $user['ranking'] = $data['nama_level'];
                break;
            }
        }
        $data = array(
			'user' => $user,
            'konten' => 'profile/index'
        );
		$this->load->view('template/index',$data);
    }
}
