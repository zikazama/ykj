<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_m extends Base_m {

    public $table = 'komentar';

    public function read_full(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('user','user.id_user = komentar.id_user');
        return $this->db->get();
    }

    public function read_full_where($where){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('user','user.id_user = komentar.id_user');
        $this->db->where($where);
        return $this->db->get();
    }

}
