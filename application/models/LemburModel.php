<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LemburModel extends CI_Model
{
    // Untuk table
    private $tblembur = 'tb_lembur';
    private $tbPegawai = 'tb_pegawai';
    private $tbJabatan = 'tb_jabatan';

    // Untuk field
    public $pegawai_id;
    public $lembur_menit;
    public $lembur_gaji;

    public function getAllLembur()
    {
        $this->db->select('*');
        $this->db->from($this->tblembur);
        $this->db->join($this->tbPegawai, 'tb_pegawai.pegawai_id = tb_lembur.pegawai_id', 'left');
        $this->db->join($this->tbJabatan, 'tb_pegawai.jabatan_id = tb_jabatan.jabatan_id', 'left');
        return $this->db->get()->result();
    }

    public function saveLembur($post)
    {
        $this->pegawai_id = $post['pegawai_id'];
        $this->lembur_menit = $post['menit'];
        $this->lembur_gaji = $post['bonus'];

        return $this->db->insert($this->tblembur, $this);
    }

    public function deletelembur($id)
    {
        return $this->db->delete($this->tblembur, ['lembur_id' => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tblembur, ['lembur_id' => $id])->row();
    }
    public function updatelembur($post)
    {
        $this->lembur_username = $post['username'];
        $this->lembur_password = $post['password'];
        $this->lembur_nama     = $post['nama'];
        $this->lembur_id       = $post['id'];

        return $this->db->update($this->tblembur, $this, ['lembur_id' => $post['id']]);
    }
}

/* End of file LemburModel.php */
