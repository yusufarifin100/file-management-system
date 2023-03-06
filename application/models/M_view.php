<?php
class M_view extends CI_Model{

  function tampil_data() {
        // ini fungsi delete data salah otomatis
        $this->db->query("DELETE FROM daftar_file WHERE status = 'salah' AND tanggal_upload < DATE_SUB(NOW(), INTERVAL 1 MONTH)");

        $tahun = $this->session->userdata('tahun');
        $this->db->select('*');
        $this->db->from('daftar_file');
        $this->db->order_by('tanggal_upload', 'DESC');
        $this->db->where('tahun',$tahun);
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result_array();
        }
    }

   function update($keterangan) {
        $keterangan = $this->input->post('keterangan');
        $query = array('keterangan' => $keterangan);
        $result= $this->db->where('id_file',$id_file)->update('daftar_file',$query);
        return $result;

    }

    function tambah_keterangan($id, $ket) {
        $this->db->set('keterangan', $ket);
        $this->db->where('id_file', $id);
        $this->db->update('daftar_file');
    }
}
