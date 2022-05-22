<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BukuTamu extends CI_Model
{
    //manajemen buku
    public function berikomen()
    {
        return $this->db->get('buku-tamu');
    }

    public function manakomen()
    {
        return $this->db->get_where('buku-tamu', $where);
    }

    public function simpankomen($data = null)
    {
        $this->db->insert('buku-tamu', $data);
    }

    public function updatekomen($data = null, $where= null)
    {
        $this->db->update('buku-tamu', $data, $where);
    }

    public function hapuskomen($where = null)
    {
        $this->db->delete('buku-tamu', $where);
    }
}