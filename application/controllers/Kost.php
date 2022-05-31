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
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]',[
            'required' => 'Alamat Harus Diisi',
            'min_length' => 'Alamat terlalu pendek'
        ]);
        $this->form_validation->set_rules('subalamat', 'SubAlamat', 'required|min_length[3]',[
            'required' => 'SubAlamat Harus diisi',
            'min_length' => 'SubAlamat Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|min_length[3]numeric',[
            'required' => 'Harga harus diisi',
            'min_length' => 'Harga Terlalu Pendek',
            'numeric' => 'Yang anda masukkan bukan angka'
        ]);

        //konfogurasi sebelum gambar diupload

        $config['upload_path'] = './assets/img/kost';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);

        

    }
}