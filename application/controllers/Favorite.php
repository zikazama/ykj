<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorite extends CI_Controller {

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

	public function index()
	{
		$this->cek_login();
		$tanggal = date('Y-m-d');
		$id_user = $this->session->userdata('id_user');
        $postingan = $this->post_m->favorite(array(
            'favorit.id_user' => $id_user
        ))->result_array();
        // var_dump($postingan);
        // die();
		foreach($postingan as $i => $data) {
			$fav = $this->favorit_m->read_where(array(
				'id_post' => $data['id_post'],
				'id_user' => $id_user
			))->num_rows();
			if($fav > 0){
				$postingan[$i]['like'] = 1;
			} else {
				$postingan[$i]['like'] = 0;
			}
		}
		$data = array(
			'konten' => 'favorit/index',
			'postingan' => $postingan
		);
		$this->load->view('template/index', $data);
    }

    public function komentar($id_post)
	{
        $this->cek_login();
        $id_user = $this->session->userdata('id_user');
		$postingan = $this->post_m->favorite(array(
			'favorit.id_user' => $id_user,
			'post.id_post' => $id_post
        ))->row_array();
		if ($postingan == null) {
			redirect(base_url('favorite'));
		}
		$komentar = $this->komentar_m->read_reverse_where(array(
			'id_post' => $id_post
		))->result_array();
		$jumlah_komentar = $this->komentar_m->read_reverse_where(array(
			'id_post' => $id_post
		))->num_rows();
		$data = array(
			'postingan' => $postingan,
			'konten' => 'favorit/komentar',
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
		redirect(base_url("favorite/komentar/$id_post"));
    }
    
    public function like($id_post){
		$id_user = $this->session->userdata('id_user');
		$this->favorit_m->create(array(
			'id_user' => $id_user,
			'id_post' => $id_post
		));
		redirect(base_url('favorite'));
	}

	public function dislike($id_post){
		$id_user = $this->session->userdata('id_user');
		$this->favorit_m->delete(array(
			'id_user' => $id_user,
			'id_post' => $id_post
		));
		redirect(base_url('favorite'));
	}
}
