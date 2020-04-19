<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LaporanModel');
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data['laporan'] = $this->LaporanModel->getAllLaporan();
        $this->load->view('laporan/index', $data);
    }

    // Add a new item
    public function add()
    {
        $post = $this->input->post();
        if (!empty($post)) {
            $this->LaporanModel->saveLaporan($post);
            redirect(site_url('Laporan'));
        } else {
            $this->load->view('Laporan/add');
        }
    }

    //Update one item
    public function update($id = null)
    {
        if (empty($id)) {
            redirect(site_url('Laporan'));
        } else {
            $data['Laporan'] = $this->LaporanModel->getById($id);
            $this->load->view('Laporan/update', $data);
        }
    }

    public function prosesUpdate()
    {
        $post = $this->input->post();
        $this->LaporanModel->updateLaporan($post);
        redirect(site_url('Laporan'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->LaporanModel->deleteLaporan($id)) {
            redirect(site_url('Laporan'));
        }
    }
}

/* End of file Laporan.php */


/* End of file Laporan.php */
