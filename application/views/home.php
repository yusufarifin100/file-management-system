<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Perum Perhutani KPH Blora</title>

  <link href="<?php echo base_url(); ?>perhutani.png" rel="shortcut icon" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>/assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>/assets/css/sb-admin.css" rel="stylesheet">

  <style media="screen">
        .btn-sidebar {
          background: none;
          border: none;
          color: #868e96;
          width: 250px;
          height: 56px;
          padding-left: 3.75em;
          text-align: left;
          cursor: pointer;
        }
        .btn-sidebar:hover {
          color: #adb5bd;
        }

  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#"></a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <img src="<?php echo base_url();?>logo-perhutani.png" alt="perhutani" style="width:130px;height:130px;margin-bottom:50px;margin-top:30px;margin-left:55px;"></img>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url();?>">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Menu Utama</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Kelola Bidang</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Binhut</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <?php
                  foreach ($data_bidang_db as $row) {
                    if ($row['nama_bidang'] == 'Binhut') {
                      $nama_subbidang = $row['nama_subbidang'];
                      $array_nama_subbidang = explode(' ', $nama_subbidang);
                      $format_nama_subbidang_baru = implode('_', $array_nama_subbidang);
                      $format_nama_subbidang_baru = strtolower($format_nama_subbidang_baru);
                      // echo 'ambil_data_'.$format_nama_bagian_baru;
                      echo '<li>';
                      // echo '<a href="'.base_url('bagian/'.$nama_bagian).'">'.$nama_bagian.'</a>';
                      // echo '<a href="javascript:{}" onclick="document.getElementById("my_form").submit(); return false;">'.$nama_bagian.'</a>';
                      echo '<form method="POST" action="bidang/tampilkan_subbidang">';
                      echo '<input class="btn-sidebar" type="submit" name="nama_subbidang_post" value="'.$nama_subbidang.'">';
                      echo '</form>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti3">Hugra<span class="fa arrow"></span></a>
              <ul class="sidenav-third-level collapse" id="collapseMulti3">
                <?php
                  foreach ($data_bidang_db as $row) {
                    if ($row['nama_bidang'] == 'Hugra') { // ambil hanya data dengan posisi_kerja = Kantor
                      $nama_subbidang = $row['nama_subbidang'];
                      $array_nama_subbidang = explode(' ', $nama_subbidang);
                      $format_nama_subbidang_baru = implode('_', $array_nama_subbidang);
                      $format_nama_subbidang_baru = strtolower($format_nama_subbidang_baru);
                      // echo 'ambil_data_'.$format_nama_bagian_baru;
                      echo '<li class="li-sidebar">';
                      // echo '<a href="'.base_url('bagian/'.$nama_bagian).'">'.$nama_bagian.'</a>';
                      // echo '<a href="javascript:{}" onclick="document.getElementById("my_form").submit(); return false;">'.$nama_bagian.'</a>';
                      echo '<form method="POST" action="bidang/tampilkan_subbidang">';
                      echo '<input class="btn-sidebar" type="submit" name="nama_subbidang_post" value="'.$nama_subbidang.'">';
                      echo '</form>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti4">Humas<span class="fa arrow"></span></a>
              <ul class="sidenav-third-level collapse" id="collapseMulti4">
                <?php
                  foreach ($data_bidang_db as $row) {
                    if ($row['nama_bidang'] == 'Humas') { // ambil hanya data dengan posisi_kerja = Kantor
                      $nama_subbidang = $row['nama_subbidang'];
                      $array_nama_subbidang = explode(' ', $nama_subbidang);
                      $format_nama_subbidang_baru = implode('_', $array_nama_subbidang);
                      $format_nama_subbidang_baru = strtolower($format_nama_subbidang_baru);
                      // echo 'ambil_data_'.$format_nama_bagian_baru;
                      echo '<li class="li-sidebar">';
                      // echo '<a href="'.base_url('bagian/'.$nama_bagian).'">'.$nama_bagian.'</a>';
                      // echo '<a href="javascript:{}" onclick="document.getElementById("my_form").submit(); return false;">'.$nama_bagian.'</a>';
                      echo '<form method="POST" action="bidang/tampilkan_subbidang">';
                      echo '<input class="btn-sidebar" type="submit" name="nama_subbidang_post" value="'.$nama_subbidang.'">';
                      echo '</form>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti5">Perlindungan<span class="fa arrow"></span></a>
              <ul class="sidenav-third-level collapse" id="collapseMulti5">
                <?php
                  foreach ($data_bidang_db as $row) {
                    if ($row['nama_bidang'] == 'Perlindungan') { // ambil hanya data dengan posisi_kerja = Kantor
                      $nama_subbidang = $row['nama_subbidang'];
                      $array_nama_subbidang = explode(' ', $nama_subbidang);
                      $format_nama_subbidang_baru = implode('_', $array_nama_subbidang);
                      $format_nama_subbidang_baru = strtolower($format_nama_subbidang_baru);
                      // echo 'ambil_data_'.$format_nama_bagian_baru;
                      echo '<li class="li-sidebar">';
                      // echo '<a href="'.base_url('bagian/'.$nama_bagian).'">'.$nama_bagian.'</a>';
                      // echo '<a href="javascript:{}" onclick="document.getElementById("my_form").submit(); return false;">'.$nama_bagian.'</a>';
                      echo '<form method="POST" action="bidang/tampilkan_subbidang">';
                      echo '<input class="btn-sidebar" type="submit" name="nama_subbidang_post" value="'.$nama_subbidang.'">';
                      echo '</form>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti6">Pemasaran Kayu<span class="fa arrow"></span></a>
              <ul class="sidenav-third-level collapse" id="collapseMulti6">
                <?php
                  foreach ($data_bidang_db as $row) {
                    if ($row['nama_bidang'] == 'Pemasaran Kayu') { // ambil hanya data dengan posisi_kerja = Kantor
                      $nama_subbidang = $row['nama_subbidang'];
                      $array_nama_subbidang = explode(' ', $nama_subbidang);
                      $format_nama_subbidang_baru = implode('_', $array_nama_subbidang);
                      $format_nama_subbidang_baru = strtolower($format_nama_subbidang_baru);
                      // echo 'ambil_data_'.$format_nama_bagian_baru;
                      echo '<li class="li-sidebar">';
                      // echo '<a href="'.base_url('bagian/'.$nama_bagian).'">'.$nama_bagian.'</a>';
                      // echo '<a href="javascript:{}" onclick="document.getElementById("my_form").submit(); return false;">'.$nama_bagian.'</a>';
                      echo '<form method="POST" action="bidang/tampilkan_subbidang">';
                      echo '<input class="btn-sidebar" type="submit" name="nama_subbidang_post" value="'.$nama_subbidang.'">';
                      echo '</form>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti7">Person<span class="fa arrow"></span></a>
              <ul class="sidenav-third-level collapse" id="collapseMulti7">
                <?php
                  foreach ($data_bidang_db as $row) {
                    if ($row['nama_bidang'] == 'Person') { // ambil hanya data dengan posisi_kerja = Kantor
                      $nama_subbidang = $row['nama_subbidang'];
                      $array_nama_subbidang = explode(' ', $nama_subbidang);
                      $format_nama_subbidang_baru = implode('_', $array_nama_subbidang);
                      $format_nama_subbidang_baru = strtolower($format_nama_subbidang_baru);
                      // echo 'ambil_data_'.$format_nama_bagian_baru;
                      echo '<li class="li-sidebar">';
                      // echo '<a href="'.base_url('bagian/'.$nama_bagian).'">'.$nama_bagian.'</a>';
                      // echo '<a href="javascript:{}" onclick="document.getElementById("my_form").submit(); return false;">'.$nama_bagian.'</a>';
                      echo '<form method="POST" action="bidang/tampilkan_subbidang">';
                      echo '<input class="btn-sidebar" type="submit" name="nama_subbidang_post" value="'.$nama_subbidang.'">';
                      echo '</form>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti8">Produksi<span class="fa arrow"></span></a>
              <ul class="sidenav-third-level collapse" id="collapseMulti8">
                <?php
                  foreach ($data_bidang_db as $row) {
                    if ($row['nama_bidang'] == 'Produksi') { // ambil hanya data dengan posisi_kerja = Kantor
                      $nama_subbidang = $row['nama_subbidang'];
                      $array_nama_subbidang = explode(' ', $nama_subbidang);
                      $format_nama_subbidang_baru = implode('_', $array_nama_subbidang);
                      $format_nama_subbidang_baru = strtolower($format_nama_subbidang_baru);
                      // echo 'ambil_data_'.$format_nama_bagian_baru;
                      echo '<li class="li-sidebar">';
                      // echo '<a href="'.base_url('bagian/'.$nama_bagian).'">'.$nama_bagian.'</a>';
                      // echo '<a href="javascript:{}" onclick="document.getElementById("my_form").submit(); return false;">'.$nama_bagian.'</a>';
                      echo '<form method="POST" action="bidang/tampilkan_subbidang">';
                      echo '<input class="btn-sidebar" type="submit" name="nama_subbidang_post" value="'.$nama_subbidang.'">';
                      echo '</form>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti9">PHL<span class="fa arrow"></span></a>
              <ul class="sidenav-third-level collapse" id="collapseMulti9">
                <?php
                  foreach ($data_bidang_db as $row) {
                    if ($row['nama_bidang'] == 'PHL') { // ambil hanya data dengan posisi_kerja = Kantor
                      $nama_subbidang = $row['nama_subbidang'];
                      $array_nama_subbidang = explode(' ', $nama_subbidang);
                      $format_nama_subbidang_baru = implode('_', $array_nama_subbidang);
                      $format_nama_subbidang_baru = strtolower($format_nama_subbidang_baru);
                      // echo 'ambil_data_'.$format_nama_bagian_baru;
                      echo '<li class="li-sidebar">';
                      // echo '<a href="'.base_url('bagian/'.$nama_bagian).'">'.$nama_bagian.'</a>';
                      // echo '<a href="javascript:{}" onclick="document.getElementById("my_form").submit(); return false;">'.$nama_bagian.'</a>';
                      echo '<form method="POST" action="bidang/tampilkan_subbidang">';
                      echo '<input class="btn-sidebar" type="submit" name="nama_subbidang_post" value="'.$nama_subbidang.'">';
                      echo '</form>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti10">Umum<span class="fa arrow"></span></a>
              <ul class="sidenav-third-level collapse" id="collapseMulti10">
                <?php
                  foreach ($data_bidang_db as $row) {
                    if ($row['nama_bidang'] == 'Umum') { // ambil hanya data dengan posisi_kerja = Kantor
                      $nama_subbidang = $row['nama_subbidang'];
                      $array_nama_subbidang = explode(' ', $nama_subbidang);
                      $format_nama_subbidang_baru = implode('_', $array_nama_subbidang);
                      $format_nama_subbidang_baru = strtolower($format_nama_subbidang_baru);
                      // echo 'ambil_data_'.$format_nama_bagian_baru;
                      echo '<li class="li-sidebar">';
                      // echo '<a href="'.base_url('bagian/'.$nama_bagian).'">'.$nama_bagian.'</a>';
                      // echo '<a href="javascript:{}" onclick="document.getElementById("my_form").submit(); return false;">'.$nama_bagian.'</a>';
                      echo '<form method="POST" action="bidang/tampilkan_subbidang">';
                      echo '<input class="btn-sidebar" type="submit" name="nama_subbidang_post" value="'.$nama_subbidang.'">';
                      echo '</form>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </li>
          </ul>
        </li>
        <?php
          if (($level == 'Penyaji Data' || $level == 'SubKorektor') && $ambil_status_akun == 'Approved'){
          echo  '<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Form">
                  <a class="nav-link" href="'.base_url().'form">
                    <i class="fa fa-fw fa-edit"></i>
                    <span class="nav-link-text">Form Upload</span>
                  </a>
                </li>';
          }
          ?>
        <?php
         if ($level == 'SubKorektor'){
          echo  '<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Akun">
                  <a class="nav-link" href="'.base_url().'akun">
                    <i class="fa fa-fw fa-group"></i>
                    <span class="nav-link-text">Manajemen User</span>
                  </a>
                </li>';
          }
        ?>
        <?php
            if(isset($level)){
            echo  '<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Password">
                    <a class="nav-link" href="'.base_url().'update">
                      <i class="fa fa-fw fa-key"></i>
                      <span class="nav-link-text">Ganti Password</span>
                    </a>
                  </li>';
            }
        ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Informasi">
          <div class="nav-link" style="color: #868e96;cursor:text">
              <i class="fa fa-fw fa-info-circle"></i>
              <span class="nav-link-text"> Data Tahun :
                <i class="fa fa-calendar" style="font-size: 35px; margin-left: 1.5em;"> <?php echo $tahun;?></i>
              </span>
        </div>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li>
            <div class="nav-link" style="color: #868e96; margin-right:20px;">
              <form action="<?php echo base_url();?>filter/filter_tahun" method="post">
                <i class="fa fa-calendar"></i> Filter tahun:
                <select name="tahun" onchange="this.form.submit();">
                    <option value="">-- Pilih tahun --</option>
                      <?php
                        foreach ($tahun_filter as $data) {
                          echo '<option value="'.($data['tahun']).'">'.($data['tahun']).'</option>';
                        }
                      ?>
                </select>
              </form>
            </div>
        </li>
        <li>
          <?php
              if ($ambil_status_akun == 'Approved' && isset($username) && isset($level)) {
                echo '<div class="nav-link" style="color: #868e96; margin-right:20px;">
                <i class="fa fa-fw fa-user"></i>'.$level.' : '.$username.' </div>';
              }  else if ($ambil_status_akun == 'Waiting' && isset($username) && isset($level)) {
                  echo '<div class="nav-link" style="color: #868e96; margin-right:20px;">
                  <i class="fa fa-fw fa-user"></i>'.$level.' : '.$username.' (Belum Disetujui SubKorektor)</div>';
              } else {
                echo '<div class="nav-link" style="color: #868e96; margin-right:20px;">
                <i class="fa fa-fw fa-user"></i>Pengunjung</div>';
              }
          ?>
        </li>

        <li class="nav-item">
          <?php
              if ($status_login == 'login') {
                echo '<a href="'.base_url().'login/logout" class="nav-link" onclick="return logout();">
                <i class="fa fa-sign-out fa-fw"></i> Logout</a>';
              } else {
                echo '<a href="'.base_url().'login" class="nav-link">
                <i class="fa fa-sign-in fa-fw"></i> Login</a>';
              }
          ?>
<!--class="nav-link" data-toggle="modal" data-target="#exampleModal"-->
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <!-- <li class="breadcrumb-item active">Tables</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabel Daftar Kegiatan</div>
        <div class="card-body"> -->

			<!--mengambil data dari file lain-->
			<?php
				if(!isset($page)){
		        $this->load->view('daftar_file');
	      } else{
		        $this->load->view($page);
	      }

			?>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Perum Perhutani KPH Blora 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div> -->


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url();?>/assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>/assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url();?>/assets/js/sb-admin-datatables.min.js"></script>

		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>-->
    <script>
      function hapus_akun(){
        if(confirm('Apakah anda yakin ingin menghapus akun tersebut?')){
          return true;
        } else {
          return false;
        }
      }

      function logout(){
        if(confirm('Apakah anda yakin ingin keluar?')){
          return true;
        } else {
          return false;
        }
      }

      function hapus_file(){
        if(confirm('Apakah anda yakin ingin menghapus file tersebut?')){
          return true;
        } else {
          return false;
        }
      }
    </script>
  </div>
</body>

</html>
