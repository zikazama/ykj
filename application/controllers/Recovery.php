<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recovery extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('post_m');
        $this->load->model('level_m');
	}


	public function index($recovery)
	{
        $user = $this->user_m->read_where(array(
            'recovery' => $recovery
        ));
        if($user->num_rows() > 0){
            $user = $user->row_array();
            $data = array(
                'recovery' => $recovery,
                'user' => $user,
                'konten' => 'login/recovery'
            );
            $this->load->view('template/index',$data);
        } else {
            $this->session->set_flashdata('pesan_gagal', 'Maaf Kode Recovery Salah');
			redirect(base_url('login'));
        }
		
    }
    
    public function recovery(){
        $recovery = $this->input->post('recovery');
        $password = $this->input->post('password_baru');
        $user = $this->user_m->read_where(array(
            'recovery' => $recovery
        ));
        if($user->num_rows() > 0){
            $user = $user->row_array();
            $this->user_m->update(array(
                'password' => $password
            ), array(
                'recovery' => $recovery
            ));
            $this->session->set_flashdata('pesan_sukses', 'Berhasil Mengubah Password, Silahkan login kembali');
			redirect(base_url('login'));
        } else {
            $this->session->set_flashdata('pesan_gagal', 'Maaf Gagal Mengubah Password');
			redirect(base_url('login'));
        }
    }
}
