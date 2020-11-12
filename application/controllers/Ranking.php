<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ranking extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('post_m');
		$this->load->model('level_m');
	}

	private function cek_login()
	{
		$sesi = $this->session->userdata('nama');
		if ($sesi == null) {
			$this->session->set_flashdata('pesan_gagal', 'Maaf Silahkan Login Terlebih Dahulu');
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->cek_login();
		$user = $this->user_m->top()->result_array();
		foreach ($user as $index => $data_user) {
			$level = $this->level_m->tingkatan()->result_array();
			foreach ($level as $data) {
				if ($data_user['point'] >= $data['point_minimum']) {
					$user[$index]['ranking'] = $data['nama_level'];
					break;
				}
			}
		}
		$data = array(
			'user' => $user,
			'konten' => 'ranking/index'
		);
		$this->load->view('template/index', $data);
	}
}
