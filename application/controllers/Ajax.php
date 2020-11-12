<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('post_m');
        $this->load->model('level_m');
	}

    public function get_postingan_terdekat(){
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $hari_ini = date('Y-m-d');
        $postingan = $this->post_m->terdekat($latitude,$longitude,$hari_ini);
        if($postingan->num_rows() > 0) {
        echo json_encode(array(
            'pesan' => 'berhasil',
            'data' => $postingan->result_array()
        ));
        } else {
            echo json_encode(array(
                'pesan' => 'gagal'
            )); 
        } 
    }
    
}
