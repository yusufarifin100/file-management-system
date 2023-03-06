<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller{
	function __construct(){
        parent::__construct();
				$this->load->model('m_upload');
        $this->load->model('m_akun');
        $this->load->model('m_login');
				$this->load->model('m_bidang');
  }

	function index(){
    $data['page']='tampilan_user';
    $data['tampil_akun'] = $this->m_akun->tampil_akun();
    $data['status_login'] = $this->m_login->ambil_session();
		$data['ambil_status_akun'] = $this->m_login->ambil_status_akun();
		$data['level'] = $this->m_login->ambil_level();
    $data['username'] = $this->m_login->ambil_username();
		$data['tahun_filter'] = $this->m_upload->ambil_data_tahun();
		$tahun = $this->session->userdata('tahun');
		$data['tahun'] = $tahun;
		$data['data_bidang_db'] = $this->m_bidang->ambil_data_bidang();
    $this->load->view('home',$data);
  }
  public function hapus_akun($id_akun){
     $this->m_akun->delete_akun($id_akun);
     redirect ('akun');
   }
	 public function update_status_akun($id_file){
       $this->m_akun->approved_status($id_file);
       $this->session->set_userdata('status_akun_approved','<div class="alert alert-success alert-dismissible" role="alert">
  															<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  															Status akun tersebut berhasil disetujui</div>');
       redirect ('akun');
   }

}
