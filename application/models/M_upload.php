<?php
class M_upload extends CI_Model{

    public function simpan_upload($file_nya, $bulan, $tahun,$nama_kegiatan){
        date_default_timezone_set("Asia/Jakarta");
        $fileName = $_FILES['file_nya']['name'];
        $dir = 'uploaded_file/';
        $targetFile = $dir . $fileName ;
        $session_username = $this->session->userdata('username');
        $nama_kegiatan= $this->input->post('nama_kegiatan');
        $bulan= $this->input->post('bulan');
        $tahun= $this->input->post('tahun');
        $data = $this->upload->data();
        $query = array(
                'nama_file' => $data['file_name'],
                'uploader' => $session_username,
                'nama_kegiatan' => $nama_kegiatan,
                'bulan' => $bulan,
                'tahun' => $tahun,
                'tanggal_upload' => date("Y-m-d H:i:sa"),
                'aksi' => $targetFile,
                'status' => 'Belum Dikoreksi'
            );

        $result= $this->db->insert('daftar_file',$query);
        return $result;

    }

    public function ambil_data_tahun() {
    $this->db->select('tahun');
    $this->db->from('daftar_file');
    $this->db->group_by('tahun');
    $query = $this->db->get();
    if ($query->num_rows()>0) {
      return $query->result_array();
    } else {
      echo 'Data tidak ditemukan';
    }
  }

  public function data_bidang() {
    $nama_bidang = $this->session->userdata('bidang');
    
    $this->db->select('*');
    $this->db->from('bidang');
    $this->db->where('nama_bidang',$nama_bidang);
    $query = $this->db->get();
    if ($query->num_rows()>0) {
      return $query->result_array();
    } else {
      echo 'Data tidak ditemukan';
    }
  }

}
