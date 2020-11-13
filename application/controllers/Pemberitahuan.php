<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemberitahuan extends CI_Controller {

    private function cek_login()
	{
		$sesi = $this->session->userdata('nama');
		if ($sesi == null) {
			$this->session->set_flashdata('pesan_gagal', 'Maaf Silahkan Login Terlebih Dahulu');
			redirect(base_url('login'));
		}
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('post_m');
		$this->load->model('level_m');
		$this->load->model('komentar_m');
        $this->load->model('favorit_m');
        $this->load->model('notifikasi_m');
	}

	public function index()
	{
        $this->cek_login();
        $id_user = $this->session->userdata('id_user');
        $notifikasi = $this->notifikasi_m->read_reverse_where(array(
            'id_user' => $id_user
        ))->result_array();
        $data = array(
            'notifikasi' => $notifikasi,
            'konten' => 'pemberitahuan/index'
        );
		$this->load->view('template/index',$data);
	}
}
