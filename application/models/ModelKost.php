<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKost extends CI_Model
{
    //manajemen kost
    public function getKost()
    {
        return $this->db->get('data_kost');
    }

    public function kostWhere($where)
    {
        return $this->db->get_where('data_kost', $where);
    }

    public function simpanKost($data = null)
    {
        $this->db->insert('data_kost', $data);
    }

    public function updateKost($data = null, $where = null)
    {
        $this->db->update('data_kost', $data, $where);
    }

    public function hapusKost($where = null)
    {
        $this->db->delete('data_kost', $where);
    }
}