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
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>/assets/css/sb-admin.css" rel="stylesheet">
  <style media="screen">
        body {
          background-image: url("kantor_perhutani.jpg");
        }
    </style>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-2">
      <div class="card-header">Register Akun</div>
      <div class="card-body">
        <form role="form" method="post" action="<?php echo base_url();?>register/do_register">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" id="username" name="username" type="text" placeholder="Masukkan username" autofocus required>
          </div>
          <div class="form-group">
            <label for="bidang">Bidang ( hanya diisi Penyaji Data)</label>
            <select class="form-control" id="bidang" name="bidang" type="text">
                <option></option>
                <option value="Binhut">Binhut</option>
                <option value="Hugra">Hugra</option>
                <option value="Humas">Humas</option>
                <option value="Perlindungan">Perlindungan</option>
                <option value="Pemasaran Kayu">Pemasaran Kayu</option>
                <option value="Person">Person</option>
                <option value="Produksi">Produksi</option>
                <option value="PHL">PHL</option>
                <option value="Umum">Umum</option>
            </select>
          </div>
          <div class="form-group">
            <label for="level">Level</label>
            <select class="form-control" id="level" name="level" type="text" required>
                <option></option>
                <option value="SubKorektor">SubKorektor</option>
                <option value="Penyaji Data">Penyaji Data</option>
                <option value="Korektor">Korektor</option>
            </select>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Masukkan password" required>
          </div>
          <div class="form-group">
            <label for="passconf">Password Konfirmasi</label>
            <input class="form-control" id="passconf" name="passconf" type="password" placeholder="Masukkan password yang sama" required>
            <?php
              $info = $this->session->flashdata('info');
              if (!empty($info)) {
                  echo "<br /><div class='alert alert-danger' role='alert'>";
                  echo $info."</div>";
              }
            ?>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" style="cursor: pointer">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url();?>login">Sudah Punya Akun ? Login disini</a>
          <a class="d-block small mt-3" href="<?php echo base_url();?>">Kembali ke Halaman Utama</a>
          <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
