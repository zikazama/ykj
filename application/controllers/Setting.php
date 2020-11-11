<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function index()
	{
        $data = array(
            'konten' => 'setting/index'
        );
		$this->load->view('template/index',$data);
	}
}
