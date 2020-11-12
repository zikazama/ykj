<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jajan extends CI_Controller
{

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
	}

	public function direct()
	{
		$data = array(
			'js' => 'jajan/js_redirect'
		);
		$this->load->view('template/index', $data);
	}

	public function index($latitude, $longitude)
	{
		$this->cek_login();
		$tanggal = date('Y-m-d');
		$postingan = $this->post_m->terdekat($latitude, $longitude, $tanggal)->result_array();
		$data = array(
			'konten' => 'jajan/index',
			'postingan' => $postingan
		);
		$this->load->view('template/index', $data);
	}

	public function cari($latitude, $longitude)
	{
		$keyword = $this->input->post('keyword_jajanan');
		$postingan = $this->post_m->terdekat_cari($latitude, $longitude, date('Y-m-d'), $keyword)->result_array();
		$data = array(
			'keyword' => $keyword,
			'konten' => 'jajan/cari',
			'postingan' => $postingan
		);
		$this->load->view('template/index', $data);
	}

	public function posting()
	{
		$this->cek_login();
		$data = array(
			'konten' => 'jajan/posting',
			'js' => 'jajan/js_coor'
		);
		$this->load->view('template/index', $data);
	}

	private function upload_foto($nama, $form)
	{
		$config['upload_path']          = './uploads/jajanan/';
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

	public function aksi_posting()
	{
		$id_user = $this->session->userdata('id_user');
		$cek = $this->post_m->cek_tanggal_where(date('Y-m-d'),array('id_user' => $id_user))->num_rows();
		if($cek == 5){
			$this->session->set_flashdata('pesan_gagal', 'Maaf, maksimal posting 5 gambar perhari');
			redirect(base_url('jajan/direct'));
		}
		$akun = $this->input->post();
		$akun['id_user'] = $id_user;
		$upload = $this->upload_foto('foto', 'foto');
		//var_dump($this->input->post());
		// var_dump($upload);
		// die();
		if ($upload != null) {
			$akun['foto'] = $upload;
			$this->post_m->create($akun);
			$user = $this->user_m->read_where(array('id_user' => $id_user))->row_array();
			$this->user_m->update(array(
				'point' => $user['point'] + 2
			), array(
				'id_user' => $id_user
			));
			$this->session->set_flashdata('pesan_sukses', 'Jajanan Berhasil Diposting anda mendapat 2 point');
			redirect(base_url('jajan'));
		} else {
			$this->session->set_flashdata('pesan_gagal', 'Gagal Diposting');
			redirect(base_url('jajan'));
		}
	}

	public function komentar($latitude, $longitude, $id_post)
	{
		$this->cek_login();
		$postingan = $this->post_m->detail($latitude, $longitude, $id_post)->row_array();
		if ($postingan == null) {
			redirect(base_url('jajan/direct'));
		}
		$komentar = $this->komentar_m->read_full_where(array(
			'id_post' => $id_post
		))->result_array();
		$jumlah_komentar = $this->komentar_m->read_full_where(array(
			'id_post' => $id_post
		))->num_rows();
		$data = array(
			'postingan' => $postingan,
			'konten' => 'jajan/komentar',
			'komentar' => $komentar,
			'jumlah_komentar' => $jumlah_komentar
		);
		$this->load->view('template/index', $data);
	}

	public function aksi_komentar($latitude, $longitude, $id_post)
	{
		$data['isi_komentar'] = $this->input->post('komentar');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['id_post'] = $id_post;
		$this->komentar_m->create($data);
		$this->session->set_flashdata('pesan_sukses', 'Komentar Berhasil Terkirim');
		redirect(base_url("jajan/komentar/$latitude/$longitude/$id_post"));
	}
}
