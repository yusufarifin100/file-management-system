<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_bidang extends CI_Model {

  public function ambil_data_bidang() {
    $this->db->select('*');
    $this->db->from('bidang');
    $query = $this->db->get();
    if ($query->num_rows()>0) {
      return $query->result_array();
    } else {
      echo 'Data tidak ditemukan';
    }
  }

  public function ambil_data_subbidang($post_nama_subbidang) {
    $tahun = $this->session->userdata('tahun');
    $kondisi = "bidang.nama_subbidang = '$post_nama_subbidang'";
    $this->db->select('*');
    $this->db->from('daftar_file');
    $this->db->join('bidang', 'bidang.nama_subbidang = daftar_file.nama_kegiatan');
    $this->db->where($kondisi);
    $this->db->where('tahun',$tahun);
    $query = $this->db->get();
    if ($query->num_rows()>0) {
      return $query->result_array();
    } else {
      echo 'Data tidak ditemukan';
    }
  }


}
