<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<li class="breadcrumb-item active">Profil</li>
</ol>
<div class="card mb-3">
<div class="card-header">
	<i class="fa fa-key"></i> Profil</div>
<div class="card-body">
	<div class="card card-form mx-auto">
	<div class="card-header">
		<i class="fa fa-key"></i> Ganti Password</div>
	<div class="card-body">

<form action="<?php echo base_url();?>update/ganti_password" method="POST">
  <div class="form-group">
    <?php
    $success_update = $this->session->flashdata('success_update');
    if (!empty($success_update)) {
        echo "<br /><div class='alert alert-success' role='alert'>";
        echo $success_update."</div>";
    }
    ?>
    <label for="password">Password Baru</label>
    <input class="form-control" id="password" name="password" type="password" placeholder="Masukkan password baru" required>
  </div>
  <div class="form-group">
    <label for="passconf">Password Konfirmasi</label>
    <input class="form-control" id="passconf" name="passconf" type="password" placeholder="Masukkan password baru" required>
    <?php
      $info_update = $this->session->flashdata('info_update');
      if (!empty($info_update)) {
          echo "<br /><div class='alert alert-danger' role='alert'>";
          echo $info_update."</div>";
      }
    ?>
  </div>
    <button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
  </div>
</div>
</form>
</div>
</div>
