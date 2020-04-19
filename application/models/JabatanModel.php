<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JabatanModel extends CI_Model
{
    // Untuk table
    private $tbjabatan = 'tb_jabatan';

    // Untuk field
    public $jabatan_id;
    public $jabatan_kode;
    public $jabatan_nama;
    public $jabatan_gapok;

    public function getAllJabatan()
    {
        return $this->db->get($this->tbjabatan)->result();
    }

    public function saveJabatan($post)
    {
        $this->jabatan_kode  = $post['kode'];
        $this->jabatan_nama  = $post['nama'];
        $this->jabatan_gapok = $post['gapok'];

        return $this->db->insert($this->tbjabatan, $this);
    }

    public function deleteJabatan($id)
    {
        return $this->db->delete($this->tbjabatan, ['jabatan_id' => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tbjabatan, ['jabatan_id' => $id])->row();
    }
    public function updateJabatan($post)
    {
        $this->jabatan_kode  = $post['kode'];
        $this->jabatan_nama  = $post['nama'];
        $this->jabatan_gapok = $post['gapok'];
        $this->jabatan_id    = $post['id'];

        return $this->db->update($this->tbjabatan, $this, ['jabatan_id' => $post['id']]);
    }
}

/* End of file jabatanModel.php */
