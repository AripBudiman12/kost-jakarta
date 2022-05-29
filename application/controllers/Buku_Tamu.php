<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_Tamu extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('home/header_h');
        $this->load->view('buku_tamu');
        $this->load->view('home/footer_h');
    }
}