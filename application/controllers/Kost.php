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
        $data['kost'] = $this->ModelKost->getKost()->result_array();

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

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kost/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }

            $data = [
                'lokasi' => $this->input->post('lokasi', true),
                'alamat' => $this->input->post('alamat', true),
                'subalamat' => $this->input->post('subalamat', true),
                'harga' => $this->input->post('harga', true),
                'image' => $gambar
            ];

            $this->ModelKost->simpanKost($data);
            redirect('kost');
        }
    }

    public function hapusKost()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelKost->hapusKost($where);
        redirect('kost');
    }

    public function ubahKost()
    {
        $data['judul'] = 'Ubah Data Kost';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['data_kost'] = $this->ModelKost->kostWhere(['id' => $this->uri->segment(3)])->result_array();

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

        //memuat atau memanggil library upload
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kost/ubah_kost', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/kost/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }
            $data = [
                'lokasi' => $this->input->post('lokasi', true),
                'alamat' => $this->input->post('alamat', true),
                'subalamat' => $this->input->post('subalamat', true),
                'harga' => $this->input->post('harga', true),
                'image' => $gambar
            ];

            $this->ModelKost->updateKost($data, ['id' => $this->input->post('id')]);
            redirect('kost');
        }
    }
}