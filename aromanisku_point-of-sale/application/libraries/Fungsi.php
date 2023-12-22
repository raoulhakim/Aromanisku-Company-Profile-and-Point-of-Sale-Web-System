<?php
class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    function userLogin()
    {
        $this->ci->load->model('userModel');
        $user_id = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->userModel->get($user_id)->row();
        return $user_data;
    }
}
?>