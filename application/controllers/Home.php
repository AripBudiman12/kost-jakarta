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

    public function tambah_form(){

        $nama       =   $this->input->post('nama');
        $email      =   $this->input->post('email');
        $penilaian  =   $this->input->post('penilaian');
        $komentar   =   $this->input->post('komentar');

        $data   =   array(

            'nama'      =>  $nama,
            'email'     =>  $email,
            'penilaian' =>  $penilaian,
            'komentar'  =>  $komentar
        );

        $this->home_model->input_data($data, 'buku-tamu');
        redirect('home/index');
    }
}