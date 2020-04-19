<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Lembur extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LemburModel');
        $this->load->model('PegawaiModel');
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data['lembur'] = $this->LemburModel->getAllLembur();
        $this->load->view('lembur/index', $data);
    }

    // Add a new item
    public function add()
    {
        $post = $this->input->post();
        if (!empty($post)) {
            $this->LemburModel->saveLembur($post);
            redirect(site_url('lembur'));
        } else {
            $data['pegawai'] = $this->PegawaiModel->getAllPegawai();
            $this->load->view('lembur/add', $dataNULL);
        }
    }

    //Update one item
    public function update($id = null)
    {
        if (empty($id)) {
            redirect(site_url('lembur'));
        } else {
            $data['lembur'] = $this->LemburModel->getById($id);
            $this->load->view('lembur/update', $data);
        }
    }

    public function prosesUpdate()
    {
        $post = $this->input->post();
        $this->LemburModel->updateLembur($post);
        redirect(site_url('lembur'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->LemburModel->deletelembur($id)) {
            redirect(site_url('lembur'));
        }
    }
}

/* End of file Lembur.php */


/* End of file Lembur.php */
