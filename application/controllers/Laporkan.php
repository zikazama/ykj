<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporkan extends CI_Controller
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
        $this->load->model('favorit_m');
        $this->load->model('laporkan_m');
    }

    public function index($id_post)
    {
        $this->cek_login();
        $data = array(
            'id_post' => $id_post,
            'konten' => 'laporkan/index'
        );

        $this->load->view('template/index', $data);
    }

    public function aksi_laporkan($id_post)
    {
        $id_user = $this->session->userdata('id_user');
        $alasan = $this->input->post('alasan');
        $this->laporkan_m->create(array(
            'id_user_melapor' => $id_user,
            'id_post' => $id_post,
            'alasan' => $alasan
        ));
        $this->session->set_flashdata('pesan_gagal', 'Pelaporan Anda Akan Kami Tanggapi, Terima Kasih');
        redirect(base_url('laporkan/sukses'));
    }

    public function sukses(){
        $data = array(
            'konten' => 'laporkan/sukses'
        );
        $this->load->view('template/index',$data);
    }
}
