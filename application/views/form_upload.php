<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<li class="breadcrumb-item active">Form</li>
</ol>
<div class="card mb-3">
<div class="card-header">
	<i class="fa fa-edit"></i> Form</div>
<div class="card-body">
	<?php
	if($this->session->userdata('status_upload')!=null){
				echo $this->session->userdata('status_upload');
			}
	if($this->session->userdata('status_upload')!=null){
				$this->session->unset_userdata('status_upload');
			}
	?>
<div class="row">
	<div class="col-md-6">
	<div class="card card-form mx-auto">
	<div class="card-header">
		<i class="fa fa-edit"></i> Form Upload File</div>
	<div class="card-body">
<form role="form" method="POST" action="<?php echo base_url();?>upload/do_upload" enctype="multipart/form-data">
<div class="form-group">
	<label>Pilih File</label>
	<input class="form-control" type="file" name="file_nya"><br />
	<label for="bulan">Bulan</label>
	<select class="form-control" name="bulan" size="1" required>
			<option></option>
			<option value="Januari">Januari</option>
			<option value="Februari">Februari</option>
			<option value="Maret">Maret</option>
			<option value="April">April</option>
			<option value="Mei">Mei</option>
			<option value="Juni">Juni</option>
			<option value="Juli">Juli</option>
			<option value="Agustus">Agustus</option>
			<option value="September">September</option>
			<option value="Oktober">Oktober</option>
			<option value="November">November</option>
			<option value="Desember">Desember</option>
	</select><br />
	<div class="form-group">
		<label for="tahun">Tahun</label>
		<input class="form-control" id="tahun" name="tahun" type="text" pattern="[0-9]{4}" placeholder="Masukkan tahun" required>
	</div>
	<label for="nama_kegiatan">Nama Kegiatan</label>
	<select class="form-control" name="nama_kegiatan" size="1" required>
		<?php
		// if ($level == 'Penyaji Data' && $ambil_status_akun == 'Approved'){
		// 	foreach ($data_bidang as $data)
		// 	{
		// 		$nama_subbidang = $data["nama_subbidang"];
		// 		echo
		// 			'<option value='.$nama_subbidang.'>'.$nama_subbidang.'</option>';
		// 	}
		// }
	 // else {
		echo '<option></option>';
		echo '<optgroup label="BINHUT">';
				echo '<option value="Binhut 1">Binhut 1</option>';
				echo '<option value="Binhut 2">Binhut 2</option>';
				echo '<option value="Binhut 3">Binhut 3</option>';
				echo '<option value="Binhut 4">Binhut 4</option>';
		echo '</optgroup>';
		echo '<optgroup label="HUGRA">';
				echo '<option value="Hugra">Hugra</option>';
		echo '</optgroup>';
		echo '<optgroup label="HUMAS">';
				echo '<option value="Humas">Humas</option>';
		echo '</optgroup>';
		echo '<optgroup label="PERLINDUNGAN">';
				echo '<option value="Keamanan">Keamanan</option>';
				echo '<option value="Keamanan 1">Keamanan 1</option>';
				echo '<option value="Kelola Lingkungan">Kelola Lingkungan</option>';
				echo '<option value="Kelola Lingkungan 1">Kelola Lingkungan 1</option>';
				echo '<option value="Kelola Sosial">Kelola Sosial</option>';
				echo '<option value="PKBL">PKBL</option>';
				echo '<option value="Tenurial Dalam Kawasan">Tenurial Dalam Kawasan</option>';
				echo '<option value="Tenurial Luar Kawasan">Tenurial Luar Kawasan</option>';
		echo '</optgroup>';
		echo '<optgroup label="PEMASARAN KAYU">';
				echo '<option value="Pasar Kontrak">Pasar Kontrak</option>';
				echo '<option value="Pasar Lelang">Pasar Lelang</option>';
				echo '<option value="Pasar Retail">Pasar Retail</option>';
				echo '<option value="Pasar Sediaan">Pasar Sediaan</option>';
		echo '</optgroup>';
		echo '<optgroup label="PERSON">';
				echo '<option value="Tenaga Kerja 1">Tenaga Kerja 1</option>';
				echo '<option value="Tenaga Kerja 2">Tenaga Kerja 2</option>';
				echo '<option value="Tenaga Kerja 3">Tenaga Kerja 3</option>';
				echo '<option value="Tenaga Kerja 4">Tenaga Kerja 4</option>';
				echo '<option value="Tenaga Kerja 5">Tenaga Kerja 5</option>';
				echo '<option value="Tenaga Kerja 6">Tenaga Kerja 6</option>';
				echo '<option value="Tenaga Kerja 7">Tenaga Kerja 7</option>';
				echo '<option value="Tenaga Kerja 8">Tenaga Kerja 8</option>';
				echo '<option value="Kecelakaan Kerja">Kecelakaan Kerja</option>';
		echo '</optgroup>';
		echo '<optgroup label="PRODUKSI">';
				echo '<option value="Produksi 1">Produksi 1</option>';
				echo '<option value="Produksi 2">Produksi 2</option>';
				echo '<option value="Produksi 3">Produksi 3</option>';
				echo '<option value="Produksi 4">Produksi 4</option>';
				echo '<option value="Pengujian">Pengujian</option>';
		echo '</optgroup>';
		echo '<optgroup label="PHL">';
				echo '<option value="PHL">PHL</option>';
		echo '</optgroup>';
		echo '<optgroup label="UMUM">';
				echo '<option value="Umum">Umum</option>';
		echo '</optgroup>';
	 // }
		 ?>
	</select>
</div>

<div class="form-group">

	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button>
		</div>
		</form>
	</div>
</div>
</div>
		<div class="col-md-6">
			<div class= "alert alert-info">
		 		<strong>Seputar Informasi :</strong>
				<ul>
					<li>Pastikan file yang diupload sesuai dengan ekstensinya.</li>
					<li>Ekstensi yang diperbolehkan adalah : doc, docx, xls, xlsx, pdf, zip, dan rar.</li>
					<li>Maksimum file yang bisa diupload adalah 2MB.</li>
				</ul>
			</div>
			<div class= "alert alert-warning">
		 		<strong>Seputar Peringatan :</strong>
				<ul>
					<li>Apabila file yang diupload sudah sesuai dengan ekstensinya tapi masih gagal berarti file tersebut tidak disimpan dengan ekstensi yang benar.</li>
					<li>Cara mengatasinya adalah dengan melakukan save as file tersebut ke ekstensi yang diperbolehkan.</li>
					<li>Contoh kasus: File dengan Web Page type tidak bisa diupload walaupun berekstensi xls maka dari itu perlu dilakukan save as ke Excel 97-2003 Workbook ataupun Excel Workbook.</li>
				</ul>
			</div>
		</div>
</div>
</div>
</div>
