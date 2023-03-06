<?php
class M_akun extends CI_Model{

    function tampil_akun() {
        // $kondisi = "akun.level != 'Korektor'";
        $this->db->select('*');
        $this->db->from('akun');
        // $this->db->where($kondisi);
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result_array();
        }
    }

    function delete_akun($id_akun){
        return $this->db->delete('akun',array('id_akun' => $id_akun));

    }

    function approved_status($id_akun){
        return $this->db->where('id_akun',$id_akun)->update('akun',array('status_akun' => 'Approved'));

      }

}
