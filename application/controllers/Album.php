<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

    private function cek_login()
	{
		$sesi = $this->session->userdata('nama');
		if ($sesi == null) {
			$this->session->set_flashdata('pesan_gagal', 'Maaf Silahkan Login Terlebih Dahulu');
			redirect(base_url('login'));
		}
    }
    
    public function __construct(){
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('post_m');
        $this->load->model('level_m');
	}

	public function index()
	{
        $this->cek_login();
        $id_user = $this->session->userdata('id_user');
		$user = $this->user_m->read_where(array(
			'id_user' => $id_user
        ))->row_array();
        $postingan = $this->post_m->read_where(array(
            'id_user' => $id_user
        ))->result_array();
		$data = array(
            'postingan' => $postingan,
            'user' => $user,
			'konten' => 'album/index'
		);
		$this->load->view('template/index', $data);
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
        $postingan = $this->post_m->read_where(array(
            'id_user' => $id_user
        ))->result_array();
       
        $data = array(
            'postingan' => $postingan,
			'user' => $user,
            'konten' => 'album/index'
        );
		$this->load->view('template/index',$data);
    }
}
