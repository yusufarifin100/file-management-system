<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller{

  function __construct(){
        parent::__construct();
        $this->load->model('m_delete');
        $this->load->model('m_view');
  }

  public function hapus($id_file){
     $this->m_delete->delete($id_file);
     $this->session->set_userdata('status_hapus','<div class="alert alert-success alert-dismissible" role="alert">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															File berhasil dihapus</div>');
     redirect ('bidang');
   }

  public function update_status_benar($id_file){
      $this->m_delete->update_benar($id_file);
      $this->session->set_userdata('status_benar','<div class="alert alert-success alert-dismissible" role="alert">
 															<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 															Status file tersebut berhasil diganti menjadi benar</div>');
      redirect ('bidang');
  }

  public function update_status_salah($id_file){
       $this->m_delete->update_salah($id_file);
       $this->session->set_userdata('status_salah','<div class="alert alert-success alert-dismissible" role="alert">
  															<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  															Status file tersebut berhasil diganti menjadi salah</div>');
       redirect ('bidang');
  }

 function download_file($str) {
   force_download('./uploaded_file/'.$str, null);
 }

 function tambah_keterangan() {
   $id = $this->input->post('id');
   $ket = $this->input->post('keterangan');
   $this->m_view->tambah_keterangan($id, $ket);
   redirect('bidang');
 }

}
