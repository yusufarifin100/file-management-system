<?php

class M_delete extends CI_Model{

  function delete($id_file){
      $this->db->where('id_file',$id_file);
      $query = $this->db->get('daftar_file');
      $row = $query->row();
      unlink("./uploaded_file/$row->nama_file");
      return $this->db->delete('daftar_file',array('id_file' => $id_file));

  }

  function update_benar($id_file){
      return $this->db->where('id_file',$id_file)->update('daftar_file',array('status' => 'Benar'));

    }
  function update_salah($id_file){
    return $this->db->where('id_file',$id_file)->update('daftar_file',array('status' => 'Salah'));

  }
}
