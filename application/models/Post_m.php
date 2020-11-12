<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_m extends Base_m {

    public $table = 'post';

    public function terdekat($my_lat,$my_long,$date){
        $this->db->select("*,  SQRT(
            POW(69.1 * (latitude - $my_lat), 2) +
            POW(69.1 * ($my_long - longitude) * COS(latitude / 57.3), 2)) as distance");
        $this->db->from($this->table);
        $this->db->where("SQRT(
            POW(69.1 * (latitude - $my_lat), 2) +
            POW(69.1 * ($my_long - longitude) * COS(latitude / 57.3), 2)) <=",10);
        $this->db->like('created_at',$date);
        return $this->db->get();
    }

    public function terdekat_cari($my_lat,$my_long,$date,$keyword){
        $this->db->select("*,  SQRT(
            POW(69.1 * (latitude - $my_lat), 2) +
            POW(69.1 * ($my_long - longitude) * COS(latitude / 57.3), 2)) as distance");
        $this->db->from($this->table);
        $this->db->where("SQRT(
            POW(69.1 * (latitude - $my_lat), 2) +
            POW(69.1 * ($my_long - longitude) * COS(latitude / 57.3), 2)) <=",10);
            $this->db->like('judul',$keyword);
            $this->db->like('caption',$keyword);
        $this->db->like('created_at',$date);
        return $this->db->get();
    }

    public function detail($my_lat,$my_long,$id_post){
        $this->db->select("*, post.created_at as tanggal_post, post.foto as foto_jajanan, SQRT(
            POW(69.1 * (latitude - $my_lat), 2) +
            POW(69.1 * ($my_long - longitude) * COS(latitude / 57.3), 2)) as distance");
        $this->db->from($this->table);
        $this->db->join('user','user.id_user = post.id_user');
        $this->db->where("SQRT(
            POW(69.1 * (latitude - $my_lat), 2) +
            POW(69.1 * ($my_long - longitude) * COS(latitude / 57.3), 2)) <=",10);
            $this->db->where('id_post',$id_post);
        return $this->db->get();
    }

    public function cek_tanggal_where($tanggal,$where){
        $this->db->from($this->table);
        $this->db->where($where);
        $this->db->like('created_at',$tanggal);
        return $this->db->get();
    }

}
