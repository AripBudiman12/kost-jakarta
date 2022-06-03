<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_Tamu extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Buku Tamu';
        $this->load->view('home/header_h', $data);
        $this->load->view('buku_tamu', $data);
        $this->load->view('home/footer_h', $data);
    }
}