<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PegawaiModel');
        $this->load->model('JabatanModel');
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data['pegawai'] = $this->PegawaiModel->getAllPegawai();
        $this->load->view('pegawai/index', $data);
    }

    // Add a new item
    public function add()
    {
        $post = $this->input->post();
        if (!empty($post)) {
            $this->PegawaiModel->savePegawai($post);
            redirect(site_url('pegawai'));
        } else {
            $data['jabatan'] = $this->JabatanModel->getAllJabatan();
            $this->load->view('pegawai/add', $data);
        }
    }

    //Update one item
    public function update($id = null)
    {
        if (empty($id)) {
            redirect(site_url('Pegawai'));
        } else {
            $data['pegawai'] = $this->PegawaiModel->getById($id);
            $data['jabatan'] = $this->JabatanModel->getAllJabatan();
            $this->load->view('pegawai/update', $data);
        }
    }

    public function prosesUpdate()
    {
        $post = $this->input->post();
        $this->PegawaiModel->updatePegawai($post);
        redirect(site_url('Pegawai'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->PegawaiModel->deletePegawai($id)) {
            redirect(site_url('Pegawai'));
        }
    }
}

/* End of file Pegawai.php */


/* End of file Pegawai.php */
