<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_model extends CI_Model {

    public function input_data($data) {
        return $this->db->insert('buku-tamu' ,$data);
    }

    public function tampil_search() {
        return $this->db->get('data_kost')->result_array();
    }
}