<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_m');
    }

	public function aksi_register(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $whatsapp = $this->input->post('whatsapp');

        $this->user_m->create(array(
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'whatsapp' => $whatsapp
        ));
        redirect(base_url('register/sukses'));
    }

    public function sukses(){
        $data = array(
            'konten' => 'login/sukses'
        );
        $this->load->view('template/index',$data);
    }

}
