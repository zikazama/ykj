<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jajan extends CI_Controller {

    private function cek_login(){
		$sesi = $this->session->userdata('nama');
		if($sesi == null){
			$this->session->set_flashdata('pesan_gagal','Maaf Silahkan Login Terlebih Dahulu');
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->cek_login();
        $data = array(
            'konten' => 'jajan/index'
        );
		$this->load->view('template/index',$data);
	}

	public function posting()
	{
		$this->cek_login();
        $data = array(
            'konten' => 'jajan/posting'
        );
		$this->load->view('template/index',$data);
	}
}
