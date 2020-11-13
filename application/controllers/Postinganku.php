<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postinganku extends CI_Controller {

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
	}

	public function index($id_post)
	{
        $this->cek_login();
        $id_user = $this->session->userdata('id_user');
		$postingan = $this->post_m->read_full_where(array(
            'post.id_user' => $id_user,
            'id_post' => $id_post
        ))->row_array();
		if ($postingan == null) {
			redirect(base_url('pemberitahuan'));
		}
		$komentar = $this->komentar_m->read_reverse_where(array(
			'id_post' => $id_post
		))->result_array();
		$jumlah_komentar = $this->komentar_m->read_reverse_where(array(
			'id_post' => $id_post
		))->num_rows();
		$data = array(
			'postingan' => $postingan,
			'konten' => 'postinganku/komentar',
			'komentar' => $komentar,
			'jumlah_komentar' => $jumlah_komentar
		);
		// var_dump($data);
		// die();
		$this->load->view('template/index', $data);
    }

    public function aksi_komentar($id_post){
        $data['isi_komentar'] = $this->input->post('komentar');
		$data['id_user'] = $this->session->userdata('id_user');
		$id_user = $this->session->userdata('id_user');
		$user = $this->user_m->read_where(array(
			'id_user' => $id_user
		))->row_array();
		$postingan = $this->post_m->read_where(array(
			'id_post' => $id_post
		))->row_array();
		if($postingan['id_user'] != $id_user){
			$this->notifikasi_m->create(array(
				'id_post' => $id_post,
				'id_user' => $postingan['id_user'],
				'isi_notifikasi' => "$user[nama] berkomentar $data[isi_komentar]"
			));
		}
		$data['id_post'] = $id_post;
		$this->komentar_m->create($data);
		$this->session->set_flashdata('pesan_sukses', 'Komentar Berhasil Terkirim');
		redirect(base_url("postinganku/index/$id_post"));
    }
    
}
