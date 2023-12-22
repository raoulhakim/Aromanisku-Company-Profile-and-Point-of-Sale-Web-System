<?php
function checkLogin()
{
    $CI =& get_instance();
    $user_session = $CI->session->userdata('id_user');
    if ($user_session) {
        redirect('dashboard');
    }
}
function checkNotLogin()
{
    $CI =& get_instance();
    $user_session = $CI->session->userdata('id_user');
    if (!$user_session) {
        redirect('auth/login');
    }
}

function checkAdmin()
{
    $CI =& get_instance();
    $CI->load->library('fungsi');
    if ($CI->fungsi->userLogin()->level_user != 1) {
        redirect('dashboard');
    }
}
?>