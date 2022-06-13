<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_Tamu extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Buku Tamu';

        $this->form_validation->set_rules('nama', 'NAMA', 'required', [
            'required' => 'Nama pengarang harus diisi',
        ]);
        $this->form_validation->set_rules('email', 'EMAIL', 'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('penilaian', 'PENILAIAN', 'required|min_length[3]', [
            'required' => 'Penilaian harus dipilih',
        ]);
        $this->form_validation->set_rules('komentar', 'KOMENTAR', 'required|min_length[3]', [
            'required' => 'komentar harus diisi',
            'min_length' => 'komentar terlalu pendek',
        ]);

        $this->load->view('home/header_h', $data);
        $this->load->view('buku_tamu', $data);
        $this->load->view('home/footer_h', $data);
    }
}