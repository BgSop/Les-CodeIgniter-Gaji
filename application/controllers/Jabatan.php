<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('JabatanModel');
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data['jabatan'] = $this->JabatanModel->getAllJabatan();
        $this->load->view('jabatan/index', $data);
    }

    // Add a new item
    public function add()
    {
        $post = $this->input->post();
        if (!empty($post)) {
            $this->JabatanModel->saveJabatan($post);
            redirect(site_url('jabatan'));
        } else {
            $this->load->view('jabatan/add');
        }
    }

    //Update one item
    public function update($id = null)
    {
        if (empty($id)) {
            redirect(site_url('jabatan'));
        } else {
            $data['jabatan'] = $this->JabatanModel->getById($id);
            $this->load->view('jabatan/update', $data);
        }
    }

    public function prosesUpdate()
    {
        $post = $this->input->post();
        $this->JabatanModel->updateJabatan($post);
        redirect(site_url('jabatan'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->JabatanModel->deleteJabatan($id)) {
            redirect(site_url('Jabatan'));
        }
    }
}

/* End of file Jabatan.php */


/* End of file Jabatan.php */
