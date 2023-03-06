<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

  function __construct() {
     parent::__construct();
     $this->load->model('m_register');

  }

	function index() {
		$this->load->view('tampilan_register');
	}

  function do_register(){
    $this->form_validation->set_rules(
        'username', 'username',
        'required|is_unique[akun.username]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        )
    );
    $this->form_validation->set_rules('password', 'password', 'required');
    $this->form_validation->set_rules('passconf', 'passconf', 'required|matches[password]');
    if ($this->form_validation->run() == TRUE){
      $result = $this->m_register->simpan_register($username, $bidang, $password, $level);
      $this->session->set_flashdata('success', 'Selamat anda telah terdaftar dan bisa login');
      return $result && redirect ('login');
    } else {

      $this->session->set_flashdata('info', 'Maaf, username tersebut mungkin sudah digunakan orang lain atau password yang dimasukkan berbeda');
      redirect('register');
    }
  }


}
