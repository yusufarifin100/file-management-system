<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update extends CI_Controller {

  function __construct(){
        parent::__construct();
        $this->load->model('m_ganti');
        $this->load->model('m_upload');
				$this->load->model('m_view');
				$this->load->model('m_login');
				$this->load->model('m_bidang');
  }

  function index(){

    $data['page']='tampilan_profile';
    $data['status_login'] = $this->m_login->ambil_session();
    $data['level'] = $this->m_login->ambil_level();
    $data['ambil_status_akun'] = $this->m_login->ambil_status_akun();
    $data['username'] = $this->m_login->ambil_username();
    $data['password'] = $this->m_login->ambil_password();
    $data['tahun_filter'] = $this->m_upload->ambil_data_tahun();
    $tahun = $this->session->userdata('tahun');
    $data['tahun'] = $tahun;
    $data['data_bidang_db'] = $this->m_bidang->ambil_data_bidang();
    $this->load->view('home',$data);

  }

  function ganti_password(){
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('passconf', 'passconf', 'required|matches[password]');
        if( $this->form_validation->run() == TRUE ){

            $result = $this->m_ganti->update($password);
            $this->session->set_flashdata('success_update', 'Password telah berhasil diganti');
            return $result && redirect('update');
        } else {
          $this->session->set_flashdata('info_update', 'Password yang dimasukkan harus sama !');
          redirect('update');
        }
    }
}
