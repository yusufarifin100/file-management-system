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
    <div class="card card-login mx-auto mt-5" >
      <div class="card-header">Login Akun</div>
      <div class="card-body">
        <?php
        $success = $this->session->flashdata('success');
        if (!empty($success)) {
            echo "<br /><div class='alert alert-success' role='alert'>";
            echo $success."</div>";
        }
        ?>
        <form role="form" method="post" action="<?php echo base_url(); ?>login/cek_login">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" id="username" name="username" type="text" placeholder="Masukkan username" autofocus required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Masukkan password" required>
            <?php
              $info = $this->session->flashdata('info');
              if (!empty($info)) {
                  echo "<br /><div class='alert alert-danger' role='alert'>";
                  echo $info."</div>";
              }

            ?>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" style="cursor: pointer">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url();?>register">Belum Punya Akun ? Daftar disini</a>
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
  <!-- Mengecek form yang sudah diisi -->

</body>

</html>
