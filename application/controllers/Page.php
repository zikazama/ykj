<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function tentang(){
        $data = array(
            'konten' => 'page/tentang'
        );
		$this->load->view('template/index',$data);
    }

    public function dukung(){
        $data = array(
            'konten' => 'page/dukung'
        );
		$this->load->view('template/index',$data);
    }

    public function bantuan(){
        $data = array(
            'konten' => 'page/bantuan'
        );
		$this->load->view('template/index',$data);
    }

}
