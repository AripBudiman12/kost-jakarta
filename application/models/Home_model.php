<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_model extends CI_Model {

    public function input_tamu($data) {
        return $this->db->insert('buku_tamu' ,$data);
    }

    //search
    public function get_search($keyword){
        $this->db->select('*');
        $this->db->like('lokasi', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('subalamat', $keyword);
        $this->db->or_like('harga', $keyword);

        return $this->db->get('data_kost')->result();
    }
}