<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('user_m');
    }
	
	public function index()
	{
        $data = array(
            'konten' => 'login/index'
        );
		$this->load->view('template/index',$data);
	}

	public function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$cek = $this->user_m->read_where(array(
			'email' => $email,
			'password' => $password
		));

		if($cek->num_rows() > 0){
			$data_login = $cek->row_array();
			unset($data_login['password']);
			$this->session->set_userdata($data_login);
			redirect(base_url('home'));
		} else {
			$this->session->set_flashdata('pesan_gagal','Maaf Email Atau Password Salah');
			redirect(base_url('login'));
		}

	}
	
}
