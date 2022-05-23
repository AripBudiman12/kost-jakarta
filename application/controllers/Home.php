<?php
defined('BASEPATH') OR exit('No direct acript access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //cek_login();
    }

    public function index()
    
    {

        // load view
        $this->load->view('Home/header_h');
        $this->load->view('Home/isi_h');
        $this->load->view('Home/footer_h');
    }
}