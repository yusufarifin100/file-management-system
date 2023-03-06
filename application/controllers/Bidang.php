<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bidang extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->model('m_upload');
		$this->load->model('m_bidang');

  }

public function index() {
  $data['page']='tampilan_bidang';
  $data['status_login'] = $this->m_login->ambil_session();
  $data['tahun_filter'] = $this->m_upload->ambil_data_tahun();
  $tahun = $this->session->userdata('tahun');
  $data['tahun'] = $tahun;
  $data['ambil_status_akun'] = $this->m_login->ambil_status_akun();
  $data['data_bidang_db'] = $this->m_bidang->ambil_data_bidang();
  $data['level'] = $this->m_login->ambil_level();
  $data['username'] = $this->m_login->ambil_username();
  $nama_subbidang_session = $this->session->userdata('nama_subbidang_terpilih');
  $data['nama_subbidang_terpilih'] = $nama_subbidang_session;
  $data['data_subbidang_db'] = $this->m_bidang->ambil_data_subbidang($nama_subbidang_session);
  $this->load->view('home', $data);

}

  public function tampilkan_subbidang() {
    $nama_subbidang_post = $this->input->post('nama_subbidang_post');

    $this->session->set_userdata('nama_subbidang_terpilih', $nama_subbidang_post);
    redirect('bidang');
  }
}
