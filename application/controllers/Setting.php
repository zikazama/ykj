<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_m');
	}

	private function cek_login(){
		$sesi = $this->session->userdata('nama');
		if($sesi == null){
			$this->session->set_flashdata('pesan_gagal','Maaf Silahkan Login Terlebih Dahulu');
			redirect(base_url('login'));
		}
	}

	private function upload_foto($nama,$form){
        $config['upload_path']          = './uploads/profiles/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $nama;
        $config['overwrite']			= true;
        $config['max_size']             = 2048; // 1MB
        $config['encrypt_name'] = TRUE;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($form)) {
            return $this->upload->data("file_name");
        }
        
        return null;
	}
	
	public function aksi_ubah_akun(){
		$id_user = $this->session->userdata('id_user');
		$akun['nama'] = $this->input->post('nama');
		$akun['email'] = $this->input->post('email');
		$akun['tentang'] = $this->input->post('tentang');
		$upload = $this->upload_foto('foto','foto');
		//var_dump($this->input->post());
		// var_dump($upload);
		// die();
		if($upload != null){
			$akun['foto'] = $upload;
			$this->user_m->update($akun,array('id_user' => $id_user));
			$user = $this->user_m->read_where(array('id_user' => $id_user))->row_array();
			unset($user['password']);
			$this->session->set_userdata($user);
			$this->session->set_flashdata('pesan_sukses','Data Berhasil Diperbarui');
			redirect(base_url('setting'));
		} else {
			$this->session->set_flashdata('pesan_gagal','Data Gagal Diperbarui');
			redirect(base_url('setting'));
		}

	}

	public function aksi_ubah_password(){
		$id_user = $this->session->userdata('id_user');
		$user = $this->user_m->read_where(array('id_user' => $id_user))->row_array();
		$akun['password_lama'] = $this->input->post('password_lama');
		$akun['password_baru'] = $this->input->post('password_baru');
		if($user['password'] == $akun['password_lama']){
			$this->user_m->update(array(
				'password' => $akun['password_baru']
			),array('id_user' => $id_user));
			$this->session->set_flashdata('pesan_sukses','Password Berhasil Diubah');
			redirect(base_url('setting/password'));
		} else {
			$this->session->set_flashdata('pesan_gagal','Password Gagal Diubah');
			redirect(base_url('setting/password'));
		}
	}

	public function index()
	{
		$this->cek_login();
		$id_user = $this->session->userdata('id_user');
		$user = $this->user_m->read_where(array(
			'id_user' => $id_user
		))->row_array();
        $data = array(
			'user' => $user,
            'konten' => 'setting/index'
        );
		$this->load->view('template/index',$data);
	}

	public function password(){
		$this->cek_login();
		$data = array(
            'konten' => 'setting/password'
        );
		$this->load->view('template/index',$data);
	}
}
