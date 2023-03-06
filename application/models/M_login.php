<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

  function cek_login($u, $p) {

    $this->db->where("username", $u);
    $this->db->where("password", $p);
    date_default_timezone_set("Asia/Jakarta");
    $query = $this->db->get("akun");
    if ($query->num_rows()>0) {
      foreach ($query->result() as $row) {
        $sess = array('username' => $row->username,
                      'password' => $row->password,
                      'bidang' => $row->bidang,
                      'level' => $row->level,
                      'status_akun' => $row->status_akun,
                      'tahun' => date("Y"),
                      'status_login' => 'login'
        );
        $this->session->set_userdata($sess);
        redirect(base_url());
      }
    } else {
      $this->session->set_flashdata('info', 'Maaf, username atau password salah');
      redirect('login');
    }
  }

  function ambil_session() {
    $sesi = $this->session->userdata('status_login');
    if (isset($sesi)) {
      return 'login';
    }
  }

  function ambil_level() {
    $sesl = $this->session->userdata('level');
    if($sesl == 'Korektor'){
      return 'Korektor';
    }else if($sesl == 'Penyaji Data'){
        return 'Penyaji Data';
    }else if($sesl == 'SubKorektor'){
        return 'SubKorektor';
    }
  }

  function ambil_status_akun() {
    $sesa = $this->session->userdata('status_akun');
    if($sesa == 'Waiting'){
      return 'Waiting';
    }else if($sesa == 'Approved'){
        return 'Approved';
    }
  }

  function ambil_username() {
    $sesu = $this->session->userdata('username');
    return $sesu;
  }

  function ambil_password() {
    $sesp = $this->session->userdata('password');
    return $sesp;
  }
}
