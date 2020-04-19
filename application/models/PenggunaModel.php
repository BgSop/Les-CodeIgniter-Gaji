<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PenggunaModel extends CI_Model
{
    // Untuk table
    private $tbPengguna = 'tb_pengguna';

    // Untuk field
    public $pengguna_username;
    public $pengguna_password;
    public $pengguna_nama;
    public $pengguna_id;

    public function getAllPengguna()
    {
        return $this->db->get($this->tbPengguna)->result();
    }

    public function savePengguna($post)
    {
        $this->pengguna_username = $post['username'];
        $this->pengguna_password = $post['password'];
        $this->pengguna_nama = $post['nama'];

        return $this->db->insert($this->tbPengguna, $this);
    }

    public function deletePengguna($id)
    {
        return $this->db->delete($this->tbPengguna, ['pengguna_id' => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tbPengguna, ['pengguna_id' => $id])->row();
    }
    public function updatePengguna($post)
    {
        $this->pengguna_username = $post['username'];
        $this->pengguna_password = $post['password'];
        $this->pengguna_nama     = $post['nama'];
        $this->pengguna_id       = $post['id'];

        return $this->db->update($this->tbPengguna, $this, ['pengguna_id' => $post['id']]);
    }
}

/* End of file PenggunaModel.php */
