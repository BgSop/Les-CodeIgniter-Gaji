<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenggunaModel');
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data['pengguna'] = $this->PenggunaModel->getAllPengguna();
        $this->load->view('pengguna/index', $data);
    }

    // Add a new item
    public function add()
    {
        $post = $this->input->post();
        if (!empty($post)) {
            $this->PenggunaModel->savePengguna($post);
            redirect(site_url('pengguna'));
        } else {
            $this->load->view('pengguna/add');
        }
    }

    //Update one item
    public function update($id = null)
    {
        if (empty($id)) {
            redirect(site_url('pengguna'));
        } else {
            $data['pengguna'] = $this->PenggunaModel->getById($id);
            $this->load->view('pengguna/update', $data);
        }
    }

    public function prosesUpdate()
    {
        $post = $this->input->post();
        $this->PenggunaModel->updatePengguna($post);
        redirect(site_url('pengguna'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->PenggunaModel->deletePengguna($id)) {
            redirect(site_url('pengguna'));
        }
    }
}

/* End of file Pengguna.php */


/* End of file Pengguna.php */
