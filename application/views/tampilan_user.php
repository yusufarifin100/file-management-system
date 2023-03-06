<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<li class="breadcrumb-item active">Akun</li>
</ol>
<div class="card mb-3">
<div class="card-header">
	<i class="fa fa-group"></i> Manajemen User</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
	<th>No</th>
	<th>Username</th>
	<th>Bidang</th>
	<th>Level</th>
  <th>Delete</th>
	<th>Status</th>
</tr>
</thead>
<tbody>
<?php
	$dir = "uploaded_file/";
	$no = 1;
	foreach ((array)$tampil_akun as $data) {
		echo '<tr>';
		echo '<td align="center">'.$no.'</td>';
		echo '<td align="center">'.$data['username'].'</td>';
		echo '<td align="center">'.$data['bidang'].'</td>';
		echo '<td align="center">'.$data['level'].'</td>';
    echo '<td align="center"><a href="akun/hapus_akun/'.$data['id_akun'].'" onclick ="return hapus_akun();"><span class="glyphicon glyphicon-trash"></span></a>.</td>';
		echo '<td align="center">'.$data['status_akun'].'
					'.anchor('akun/update_status_akun/'.$data['id_akun'], '<span class="glyphicon glyphicon-ok"></span> Accept', array('class' =>'btn btn-success btn-xs')).'<br/>
					</td>';
		echo '</tr>';
		$no++;
	}

?>

</tbody>
</table>
</div>
</div>
</div>
