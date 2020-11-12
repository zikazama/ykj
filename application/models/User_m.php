<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends Base_m {

    public $table = 'user';

    public function top(){
        $this->db->from($this->table);
        $this->db->order_by('point','DESC');
        $this->db->limit(10);
        return $this->db->get();
    }
}
