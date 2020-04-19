<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GajiModel extends CI_Model
{
    // Untuk table
    private $tbGaji = 'tb_gaji';
    private $tbPegawai = 'tb_pegawai';
    private $tbJabatan = 'tb_jabatan';

    // Untuk field
    public $pegawai_id;
    public $jabatan_id;
    public $gaji_menit;
    public $gaji_lembur;
    public $gaji_pokok;
    public $gaji_tgl_transfer;
    public $gaji_total;

    public function getAllGaji()
    {
        $this->db->select('*');
        $this->db->from($this->tbGaji);
        $this->db->join($this->tbPegawai, 'tb_pegawai.pegawai_id = tb_gaji.pegawai_id', 'left');
        $this->db->join($this->tbJabatan, 'tb_jabatan.jabatan_id = tb_pegawai.jabatan_id', 'left');
        return $this->db->get()->result();
    }

    public function saveGaji($post)
    {
        $this->pegawai_id        = $post['pegawai'];
        $this->jabatan_id        = $post['jabatan'];
        $this->gaji_menit        = $post['gapok'];
        $this->gaji_lembur       = $post['menit'];
        $this->gaji_pokok        = $post['bonus'];
        $this->gaji_tgl_transfer = $post['tgltf'];
        $this->gaji_total        = $post['total'];

        return $this->db->insert($this->tbGaji, $this);
    }

    public function deleteGaji($id)
    {
        return $this->db->delete($this->tbGaji, ['Gaji_id' => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tbGaji, ['Gaji_id' => $id])->row();
    }
    public function updateGaji($post)
    {
        $this->Gaji_username = $post['username'];
        $this->Gaji_password = $post['password'];
        $this->Gaji_nama     = $post['nama'];
        $this->Gaji_id       = $post['id'];

        return $this->db->update($this->tbGaji, $this, ['Gaji_id' => $post['id']]);
    }
}

/* End of file GajiModel.php */
