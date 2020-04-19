<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model("PenggunaModel");
        $this->load->library('session');
    }

    // List all your items
    public function index($offset = 0)
    {
        // jika form login di submit
        if ($this->input->post()) {
            if ($this->PenggunaModel->doLogin());
            redirect(site_url('home'));
        }

        // tampilkan halaman login 
        $this->load->view("login/index");
    }

    public function logout()
    {
        // hancurkan semua sesi
        // $this->session->sess_destory();
        session_destroy();
        redirect(site_url('login'));
    }
}

/* End of file Controllername.php */
