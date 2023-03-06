<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<li class="breadcrumb-item active">Tables</li>
</ol>
<?php
echo '<h3 class="page-header" style="padding-bottom:20px;padding-top:10px">SubBidang '.$nama_subbidang_terpilih;
?>
</h3>
<div class="card mb-3">
<div class="card-header">
	<i class="fa fa-table"></i> Tabel Daftar Kegiatan</div>
<div class="card-body">
	<?php
		if($this->session->userdata('status_hapus')!=null){
			echo $this->session->userdata('status_hapus');
		}
		if($this->session->userdata('status_benar')!=null){
			echo $this->session->userdata('status_benar');
		}
		if($this->session->userdata('status_salah')!=null){
			echo $this->session->userdata('status_salah');
		}

		if($this->session->userdata('status_hapus')!=null){
			$this->session->unset_userdata('status_hapus');
		}
		if($this->session->userdata('status_benar')!=null){
			echo $this->session->unset_userdata('status_benar');
		}
		if($this->session->userdata('status_salah')!=null){
			echo $this->session->unset_userdata('status_salah');
		}
	?>
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
	<?php if($level == 'Korektor' && $ambil_status_akun == 'Approved'){echo '<th>Delete</th>';} ?>
	<th>Status</th>
	<th>Keterangan</th>
</tr>
</thead>
<tbody>
<?php
	$dir = "uploaded_file/";
	$no = 1;
	foreach ((array)$data_subbidang_db as $data) {
		echo '<tr>';
		echo '<td align="center">'.$no.'</td>';
		echo '<td align="center">'.$data['nama_file'].'</td>';
		echo '<td align="center">'.$data['uploader'].'</td>';
		echo '<td align="center">'.$data['nama_kegiatan'].'</td>';
		echo '<td align="center">'.$data['bulan'].'</td>';
		echo '<td align="center">'.$data['tanggal_upload'].'</td>';
		if(isset($level)){
				echo '<td align="center">'.anchor('action/download_file/'.$data['nama_file'], '<span class="glyphicon glyphicon-cloud-download"></span>').'</td>';
		}
		if ($level == 'Korektor' && $ambil_status_akun == 'Approved') {
				echo '<td align="center">
						<a href="action/hapus/'.$data['id_file'].'" onclick ="return hapus_file();"><span class="glyphicon glyphicon-trash"></span></a>.
						</td>';
		}
		if (($level == 'Korektor' || $level == 'SubKorektor') && $ambil_status_akun == 'Approved'){
				echo '<td align="center">'
						.$data['status'].'<br/>
						'.anchor('action/update_status_benar/'.$data['id_file'], '<span class="glyphicon glyphicon-ok"></span> Benar', array('class' =>'btn btn-success btn-xs')).'<br/>
						'.anchor('action/update_status_salah/'.$data['id_file'], '<span class="glyphicon glyphicon-remove"></span> Salah', array('class' =>'btn btn-danger btn-xs')).'
					</td>';
		} else {
			echo '<td align="center">'
					.$data['status'].'</td>';
		}
		echo '
			<td align="center">';
				if($ambil_status_akun == 'Approved' && $level == "Korektor" || $ambil_status_akun == 'Approved' && $level == "SubKorektor" ) {
					echo '
						<form method="POST" action="'.base_url().'action/tambah_keterangan">
							<input name="id" value="'.$data["id_file"].'" hidden>
							<textarea rows="3" cols="10" name="keterangan"></textarea>
							<input type="submit">
						</form>
				';}
			echo '<p>'.$data['keterangan'].'</p>
			</td>
		';
		echo '</tr>';
		$no++;
	}

?>

</tbody>
</table>
</div>
</div>
</div>
