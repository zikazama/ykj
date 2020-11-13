<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi_m extends Base_m {

    public $table = 'notifikasi';

    public function read_reverse(){
        $this->db->from($this->table);
        $this->db->order_by('id_notifikasi');
        return $this->db->get();
    }

    public function read_reverse_where($where){
        $this->db->from($this->table);
        $this->db->order_by('id_notifikasi');
        $this->db->where($where);
        return $this->db->get();
    }

}
