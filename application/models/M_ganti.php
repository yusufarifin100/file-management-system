<?php

class M_ganti extends CI_Model{

    public function update($password) {
        $username = $this->session->userdata('username');
        $password = $this->input->post('password');
        $query = array('password' => $password);
        $result= $this->db->where('username',$username)->update('akun',$query);
        return $result;

    }
}
