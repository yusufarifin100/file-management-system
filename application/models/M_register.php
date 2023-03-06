<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_register extends CI_Model {

  function simpan_register($username, $bidang, $password, $level) {
      $username= $this->input->post('username');
      $bidang= $this->input->post('bidang');
      $password = $this->input->post('password');
      $level = $this->input->post('level');
      $query = array(
              'username' => $username,
              'bidang' => $bidang,
              'password' => $password,
              'level' => $level,
              'status_akun'=> 'Waiting'
          );
      
      $result= $this->db->insert('akun',$query);
      return $result;
  }

}
