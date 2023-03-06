<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct() {
     parent::__construct();
     $this->load->model('m_login');
  }

	function index() {
		$this->load->view('tampilan_login');
	}

  function cek_login() {
    $u = $this->input->post('username');
    $p = $this->input->post('password');
    $this->load->model('m_login');
    $this->m_login->cek_login($u, $p);

  }

  function logout() {
    $this->session->sess_destroy();
    redirect('');
  }



}
