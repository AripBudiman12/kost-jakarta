<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kost extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Kost
    public function index()
    {
        $data['judul'] = 'Data Kost';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['data-kost'] = $this->ModelKost->getKost()->result_array();
        $data['buku-tamu'] = $this->BukuTamu->getTamu()->result_array();

        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|min_length[3]',[
            'required' => 'Lokasi Harus Diisi',
            'min_length' => 'Lokasi terlalu pendek'
        ]);
        

    }
}