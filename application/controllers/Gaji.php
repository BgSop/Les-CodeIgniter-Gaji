<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Gaji extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('GajiModel');
        $this->load->model('PegawaiModel');
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data['Gaji'] = $this->GajiModel->getAllGaji();
        $this->load->view('gaji/index', $data);
    }

    // Add a new item
    public function add()
    {
        $post = $this->input->post();
        if (!empty($post)) {
            $this->GajiModel->saveGaji($post);
            redirect(site_url('Gaji'));
        } else {
            $data['pegawai'] = $this->PegawaiModel->getAllPegawai();
            $this->load->view('gaji/add', $data);
        }
    }

    //Update one item
    public function update($id = null)
    {
        if (empty($id)) {
            redirect(site_url('Gaji'));
        } else {
            $data['Gaji'] = $this->GajiModel->getById($id);
            $this->load->view('gaji/update', $data);
        }
    }

    public function prosesUpdate()
    {
        $post = $this->input->post();
        $this->GajiModel->updateGaji($post);
        redirect(site_url('Gaji'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->GajiModel->deleteGaji($id)) {
            redirect(site_url('Gaji'));
        }
    }
}

/* End of file Gaji.php */


/* End of file Gaji.php */
