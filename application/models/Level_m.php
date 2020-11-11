<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_m extends Base_m {

    public $table = 'level';

    public function tingkatan(){
        $this->db->from($this->table);
        $this->db->order_by('point_minimum','DESC');
        return $this->db->get();
    }
}
