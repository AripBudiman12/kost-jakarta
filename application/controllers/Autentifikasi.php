<?php

class Autentifikasi extends CI_Controller
{
    public function index() {
        // jika statusnya sudah login, maka tidak bisa mengakses
        // halaman login alias dikembalikan ke tampilan home
        if($this->session->userdata('email')){
            redirect('admin');
        }

        $this->form_validation->set_rules('email', 'Alamat Email', 
        'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar'
        ]);
        $this->form_validation->set_rules('password', 'Password', 
        'required|trim', [
            'required' => 'Password Harus Diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            // kata 'login' merupakan nilai dari variable judul dalam
            // array $data dikirimkan ke view aute_header
            $this->load->view('templates/aute_header', $data);
            $this->load->view('autentifikasi/login');
            $this->load->view('templates/aute_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);

        $user = $this->ModelUser->cekData(['email' => $email])->row_array();

        //jika usernya ada
        if ($user) {
            //jika user sudah aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!!</div>');
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User Belum diaktifasi!!!</div>');
                redirect('autentifikasi');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('autentifikasi');
        }
    }

    public function registrasi()
    {
            if ($this->session->userdata('email')) {
                redirect('user');
            }
        // membuat rule untuk inputan nama agar tidak boleh kosong
        // dengan membuat pesan error dengan bahasa sendiri yaitu 'Nama belum diisi'
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 
        'required', [
            'required' => 'Nama Belum diisi!!!'
        ]);
        // membuat rule untuk inputan email agar tidak boleh kosong, tidak ada spasi, format email harus diisi
        // dan email belum pernah dipakai sama user lain dengan membuat pesan error dengan bahasa sendiri
        // yaitu jika format email tidak benar maka pesannya 'Email Tidak Benar!!'. jika email belum diisi
        // maka pesannya adalah 'Email Belum diisi', dan jika email yang diinput sudah dipakai user lain,
        // maka pesannya 'Email sudah dipakai'
        $this->form_validation->set_rules('email', 'Alamat Email', 
        'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!!',
            'is_unique' => 'Email Sudah Terdaftar'
        ]);
        // membuat rule untuk inputan password agar tidak boleh kosong, tidak ada spasi, tidak boleh kurang dari
        // 3 digit, dan password harus sama dengan repeat password dengan membuat pesan error dengan
        // bahasa sendiri yaitu jika password dan repeat password tidak diinput sama, maka pesannya
        // 'Password Tidak Sama'. jika password diisi kurang dari 3 digit, maka pesannya adalah
        // 'Password Terlalu Pendek'
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|matches[password2]',[
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]',[
            'matches' => 'Password tidak sama'
        ]);
        // jika disubmit kemudian validasi form diatas tidak berjalan maka akan tetap berada di
        // tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang
        // diinputkan akan disimpan ke dalam tabel user
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Member';
            $this->load->view('templates/aute_header', $data);
            $this->load->view('autentifikasi/registrasi');
            $this->load->view('templates/aute_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'user_name' => htmlspecialchars($this->input->post('user_name', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'tanggal_input' => time()
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->ModelUser->simpanData($data); //simpan model
            $this->ModelUser->simpanDataToken($user_token); //token

            $this->_sendEmail($token, 'verify');
            
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! 
            akun member anda sudah dibuat. silahkan aktivasi akun anda</div>');
            redirect('autentifikasi');
        }
    }

    private function _sendEmail($token, $type) 
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.googlemail.com',
            'smtp_user' => 'cadangcadang55@gmail.com',
            'smtp_pass' => 'crrmlgwnsmbdcdis',
            'smtp_crypto' => 'ssl',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->load->library('email', $config);

        $this->email->from('cadangcadang55@gmail.com', 'AripBudiman');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {

            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify you account : 
                <a href="'. base_url() . 'Autentifikasi/verify?email=' . $this->input->post('email')  .  '&token=' . urlencode($token) . '">Activate</a>');
        }

        if($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {

                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">'. $email .' has been activated! Please login.</div>');
                        redirect('autentifikasi');
                } else {

                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Account activation failed! Token Expired.</div>');
                        redirect('autentifikasi');
                }

            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong token.</div>');
                    redirect('autentifikasi');
            }

        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong email.</div>');
            redirect('autentifikasi');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('home');
    }
}