<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_upload');
				$this->load->model('m_view');
				$this->load->model('m_login');
				$this->load->model('m_bidang');
  }

	function index(){
			$data['page']='form_upload';
			$data['status_login'] = $this->m_login->ambil_session();
			$data['level'] = $this->m_login->ambil_level();
			$data['ambil_status_akun'] = $this->m_login->ambil_status_akun();
			$data['username'] = $this->m_login->ambil_username();
			$data['tahun_filter'] = $this->m_upload->ambil_data_tahun();
			$tahun = $this->session->userdata('tahun');
			$data['tahun'] = $tahun;
			$data['data_bidang_db'] = $this->m_bidang->ambil_data_bidang();
			$data['data_bidang'] = $this->m_upload->data_bidang();
			$this->load->view('home',$data);
	}
}
