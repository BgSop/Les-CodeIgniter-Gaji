<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PegawaiModel extends CI_Model
{
    // Untuk table
    private $tbPegawai = 'tb_pegawai';
    private $tbJabatan = 'tb_jabatan';

    // Untuk field
    public $pegawai_id;
    public $jabatan_id;
    public $pegawai_nip;
    public $pegawai_nama;
    public $pegawai_tmp_tgl_lahir;
    public $pegawai_jenis_kelamin;
    public $pegawai_alamat;
    public $pegawai_tgl_masuk;
    public $pegawai_no_rek;

    public function getAllPegawai()
    {

        $this->db->select('*');
        $this->db->from($this->tbPegawai);
        $this->db->join($this->tbJabatan, ' tb_pegawai.jabatan_id = tb_jabatan.jabatan_id', 'left');
        return $this->db->get()->result();
    }

    public function savePegawai($post)
    {
        $this->jabatan_id            = $post['jabatan'];
        $this->pegawai_nip           = $post['nip'];
        $this->pegawai_nama          = $post['nama'];
        $this->pegawai_jenis_kelamin = $post['jenis'];
        $this->pegawai_alamat        = $post['alamat'];
        $this->pegawai_tmp_tgl_lahir = $post['tempat'] . '/' . $post['tgl_lahir'];
        $this->pegawai_tgl_masuk     = $post['tgl_masuk'];
        $this->pegawai_no_rek        = $post['norek'];

        return $this->db->insert($this->tbPegawai, $this);
    }

    public function deletePegawai($id)
    {
        return $this->db->delete($this->tbPegawai, ['Pegawai_id' => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tbPegawai, ['Pegawai_id' => $id])->row();
    }
    public function updatePegawai($post)
    {
        $this->jabatan_id            = $post['jabatan'];
        $this->pegawai_nip           = $post['nip'];
        $this->pegawai_nama          = $post['nama'];
        $this->pegawai_jenis_kelamin = $post['jenis'];
        $this->pegawai_alamat        = $post['alamat'];
        $this->pegawai_tmp_tgl_lahir = $post['tempat'] . '/' . $post['tgl_lahir'];
        $this->pegawai_tgl_masuk     = $post['tgl_masuk'];
        $this->pegawai_no_rek        = $post['norek'];
        $this->Pegawai_id            = $post['id'];

        return $this->db->update($this->tbPegawai, $this, ['Pegawai_id' => $post['id']]);
    }
}

/* End of file PegawaiModel.php */
