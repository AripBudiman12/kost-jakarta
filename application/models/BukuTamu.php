<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BukuTamu extends CI_Model
{
    //manajemen buku
    public function getTamu()
    {
        return $this->db->get('buku-tamu');
    }

    public function tamuWhere($where)
    {
        return $this->db->get_where('buku-tamu', $where);
    }

    public function simpanTamu($data = null)
    {
        $this->db->insert('buku-tamu', $data);
    }

    public function updateTamu($data = null, $where= null)
    {
        $this->db->update('buku-tamu', $data, $where);
    }

    public function hapusTamu($where = null)
    {
        $this->db->delete('buku-tamu', $where);
    }
}