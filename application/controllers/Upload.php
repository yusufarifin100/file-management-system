<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_upload');
				$this->load->model('m_view');
				$this->load->model('m_login');
				$this->load->model('m_bidang');

  }

	function index(){
			$data['tampil_data'] = $this->m_view->tampil_data();
			$data['status_login'] = $this->m_login->ambil_session();
			$data['level'] = $this->m_login->ambil_level();
			$data['username'] = $this->m_login->ambil_username();
			$data['ambil_status_akun'] = $this->m_login->ambil_status_akun();
			$tahun = $this->session->userdata('tahun');
			$data['tahun'] = $tahun;
			$data['tahun_filter'] = $this->m_upload->ambil_data_tahun();
			$data['data_bidang_db'] = $this->m_bidang->ambil_data_bidang();
			$this->load->view('home',$data);
	}

	function do_upload(){
			$config['upload_path']="./uploaded_file/";
			$config['allowed_types']='doc|docx|xls|xlsx|pdf|zip|rar';

			$this->load->library('upload', $config);
				if($this->upload->do_upload('file_nya', 'bulan', 'tahun', 'nama_kegiatan')){
  					$this->load->model('m_upload');

						$this->session->set_userdata('status_upload','<div class="alert alert-success alert-dismissible" role="alert">
														<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																					File berhasil diupload
																					</div>');
						$result= $this->m_upload->simpan_upload($file_nya, $bulan, $tahun, $nama_kegiatan);
						return $result && redirect('form');

				} else{
						$data['error_upload'] = array('error' => $this->upload->display_errors());
						$this->session->set_userdata('status_upload','<div class="alert alert-warning alert-dismissible" role="alert">
														<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.
						$data['error_upload']['error'].'</div>');
				}

			redirect('form');

  }

}
