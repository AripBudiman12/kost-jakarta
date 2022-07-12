<?php
defined('BASEPATH') OR exit('No direct acript access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
    }
       
 
    public function index(){
        
        // load pagination
		$this->load->library('pagination_bootstrap');
		// load database
		// $this->db->limit(23);
		$sql = $this->db->get('data_kost');

		// set numbuer per page
		$this->pagination_bootstrap->offset(6);
        
        $data['pagination'] = $this->pagination_bootstrap->config("/Home/index", $sql);
        $data['judul'] = 'Home';
        // load view
        $this->load->view('Home/header_h', $data);
        $this->load->view('Home/isi_h', $data);
        $this->load->view('Home/footer_h', $data);
    }

    public function search_data(){
        $keyword = $this->input->post('yangdicari',true);
           
        $data['search'] = $this->ModelKost->get_search($keyword);
        $data['judul'] = 'Search';
        //load view
        $this->load->view('Home/header_h', $data);
        $this->load->view('hasil_search', $data);
        $this->load->view('Home/footer_h', $data);
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

        $this->ModelTamu->simpanTamu($data, 'buku_tamu');
        redirect('Buku_Tamu');
    }

    public function detail() {
        
        $data['judul'] = 'Detail';
        $data['kost'] = $this->ModelKost->kostWhere(['id' => $this->uri->segment(3)])->result_array();

        $this->load->view('Home/header_h', $data);
        $this->load->view('detail', $data);
        $this->load->view('Home/footer_h', $data);
    }

    public function about() {
        
        $data['judul'] = 'About';

        $this->load->view('Home/header_h', $data);
        $this->load->view('about', $data);
        $this->load->view('Home/footer_h', $data);
    }
}