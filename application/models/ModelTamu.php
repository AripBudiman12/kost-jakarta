<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelTamu extends CI_Model
{
    //manajemen buku
    public function getTamu()
    {
        return $this->db->get('buku_tamu')->result_array();
    }

    public function tamuWhere($where)
    {
        return $this->db->get_where('buku_tamu', $where);
    }

    public function simpanTamu($data = null)
    {
        $this->db->insert('buku_tamu', $data);
    }

    public function updateTamu($data = null, $where= null)
    {
        $this->db->update('buku_tamu', $data, $where);
    }

    public function hapusTamu($where = null)
    {
        $this->db->delete('buku_tamu', $where);
    }
}