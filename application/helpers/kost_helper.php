<?php

function cek_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan', '<div class="alert 
        alert-danger" role="alert">Akses Ditolak. Anda belum login!!</div>');
        redirect('Home');
    } else {
        $role_id = $ci->session->userdata('role_id');
    }
}