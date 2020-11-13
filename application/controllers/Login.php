<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->helper('string');
	}

	private function cek_login()
	{
		$sesi = $this->session->userdata('nama');
		if ($sesi != null) {
			redirect(base_url('home'));
		}
	}

	public function index()
	{
		$this->cek_login();
		$data = array(
			'konten' => 'login/index'
		);
		$this->load->view('template/index', $data);
	}

	public function aksi_lupa_password()
	{
		$email = $this->input->post('email');
		$user = $this->user_m->read_where(array(
			'email' => $email
		));
		if ($user->num_rows() > 0) {
			$user = $user->row_array();

			$config['mailtype'] = 'text';
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.smtp2go.com';
			$config['smtp_user'] = 'zikazama';
			$config['smtp_pass'] = 'FRGwRK3zcUmY';
			$config['smtp_port'] = 2525;
			$config['newline'] = "\r\n";

			$this->load->library('email', $config);
			$recovery = random_string('alnum', 20);
			$this->user_m->update(array(
				'recovery' => $recovery
			), array(
				'id_user' => $user['id_user']
			));
			$pesan = "Silahkan klik link berikut untuk mengubah password https://yukija.tech/recovery/index/$recovery";
			$this->email->from('no-reply@yukija.tech', 'Platform Jajanan');
			$this->email->to($email);
			$this->email->subject('Recovery Lupa Password - Yukija');
			$this->email->message($pesan);
			echo $this->email->send();
			die();

			if ($this->email->send()) {
				$this->session->set_flashdata('pesan_gagal', 'Silahkan ikuti tautan yang dikirim melalui email anda');
				redirect(base_url('login'));
			} else {
				$this->session->set_flashdata('pesan_gagal', 'Maaf Gagal Mengirim Link ke Email');
				redirect(base_url('login'));
			}
		} else {
			$this->session->set_flashdata('pesan_gagal', 'Maaf Email Anda Tidak Terdaftar');
			redirect(base_url('login'));
		}
	}

	public function aksi_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$cek = $this->user_m->read_where(array(
			'email' => $email,
			'password' => $password
		));
		// var_dump($cek->num_rows);
		// die();
		if ($cek->num_rows() > 0) {
			$data_login = $cek->row_array();
			unset($data_login['password']);
			$this->session->set_userdata($data_login);
			redirect(base_url('home'));
		} else {
			$this->session->set_flashdata('pesan_gagal', 'Maaf Email Atau Password Salah');
			redirect(base_url('login'));
		}
	}

	public function aksi_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
