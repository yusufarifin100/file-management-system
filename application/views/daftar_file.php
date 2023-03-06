<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<li class="breadcrumb-item active">Table</li>
</ol>
<div class="card mb-3">
<div class="card-header">
	<i class="fa fa-table"></i> Tabel Daftar Kegiatan</div>
<div class="card-body">

<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
	<th>No</th>
	<th>Nama File</th>
	<th>Uploader</th>
	<th>Nama Kegiatan</th>
	<th>Bulan</th>
	<th>Tanggal Upload</th>
	<?php if(isset($level)){echo '<th>Download</th>';} ?>
	<th>Status</th>
	<th>Keterangan</th>
</tr>
</thead>
<tbody>
<?php
	$dir = "uploaded_file/";
	$no = 1;
	foreach ((array)$tampil_data as $data) {
		echo '<tr>';
		echo '<td align="center">'.$no.'</td>';
		echo '<td align="center">'.$data['nama_file'].'</td>';
		echo '<td align="center">'.$data['uploader'].'</td>';
		echo '<td align="center">'.$data['nama_kegiatan'].'</td>';
		echo '<td align="center">'.$data['bulan'].'</td>';
		echo '<td align="center">'.$data['tanggal_upload'].'</td>';
		echo '<td align="center">'.anchor('action/download_file/'.$data['nama_file'], '<span class="glyphicon glyphicon-cloud-download"></span>').'</td>';
		echo '<td align="center">'.$data['status'].'</td>';
		echo '</tr>';
		$no++;
	}
?>
</tbody>
</table>
</div>
</div>
</div>
