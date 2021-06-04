<?php 

include("koneksi.php");

if (!isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list.php');
}

//ambil id dari query string
$id = $_GET['id'];


// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	echo "alert('Data Tidak Ditemukan');";
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://kit.fontawesome.com/0460ea45a9.js" crossorigin="anonymous"></script>
	<title> Form Biodata </title>
</head>
<body style="margin: 5px; ">

<div class="jumbotron jumbotron-fluid" style="background-image: url(1.jpg); height: 100%;">
    <div class="container container-fluid">
    	<h1 class="text-left"> Edit Form Biodata <br> </h1>
    	<p class="text-secondary"> Silahkan edit data sesuai dengan diri anda </p> 
    </div>
</div>

<p class="lead"> *Data Siswa</p>
<form action = "proses-edit.php" method="POST" style="margin-left: 7px;">
	<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
	<div class="form-group row">
		<label for="nama" class="col-2 col-form-label "> Nama Lengkap</label>
		<div class="col-8">
			<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $siswa['nama'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="nama1" class="col-2 col-form-label "> Nama Panggilan</label>
		<div class="col-4">
			<input type="text" name="nama1" class= "form-control" id="nama1" value="<?php echo $siswa['nama_p'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="tempat" class="col-2 col-form-label "> Tempat Tanggal Lahir </label>
		<div class="col-4 input-group">
			<input type="text" name="ttl" class="form-control" id="tempat" value="<?php echo $siswa['ttl'] ?>">	
		</div>
		<div class="col-4 input-group">
			<input type="date" name="ttl1" class="form-control" 
			value="<?php echo $siswa['ttl1'] ?>"">

		</div>
	</div>

	<div class="form-row">
		<label for="alamat" class="col-2 col-form-label "> Alamat Sekarang</label>
		<div class="col-4 form-group" style="margin-left: 2px;">
			<textarea name="alamat" class= "form-control" id="alamat" > 
			<?php echo $siswa['alamat_rmh'] ?> </textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon" class="form-control" id="telepon" value="<?php echo $siswa['telepon_rmh'] ?>"> 
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos" class="form-control" id="kodepos" value="<?php echo $siswa['kodepos_rmh'] ?>">
		</div>
	</div>

	<div class="form-row">
		<label for="alamat1" class="col-2 col-form-label "> Alamat Libur</label>
		<div class="col-4 form-group" style="margin-left: 2px;">
			<textarea name="alamat1" class= "form-control" id="alamat1" >
			<?php echo $siswa['alamat_lbr'] ?> </textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon1" class="form-control" id="telepon1" value="<?php echo $siswa['telepon_lbr'] ?>">
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos1" class="form-control" id="kodepos1" value="<?php echo $siswa['kodepos_lbr'] ?>">
		</div>
	</div>


	<div class="form-group row">
		<label for="hobby" class="col-2 col-form-label "> Hobby</label>
		<div class="col-4">
			<input type="text" name="hobby" class= "form-control" id="hobby" value="<?php echo $siswa['hobby'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="ekskul" class="col-2 col-form-label "> Ekskul</label>
		<div class="col-4">
			<input type="text" name="ekskul" class= "form-control" id="ekskul" value="<?php echo $siswa['ekskul'] ?>">	
		</div>
	</div>

	<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Golongan Darah</legend>
      <div class="col-10">
      	<?php $goldar = $siswa['goldar']; ?>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="goldar" id="goldar1" value="A" <?php echo ($goldar=='A') ?"checked": "" ?> > 
          <label class="form-check-label" for="goldar1">
            A
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input " type="radio" name="goldar" id="goldar2" value="B" <?php echo ($goldar=='B') ?"checked": "" ?>>
          <label class="form-check-label" for="goldar2">
            B
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="goldar" id="goldar3" value="O" <?php echo ($goldar=='O') ?"checked": "" ?>>
          <label class="form-check-label" for="goldar3">
            O
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="goldar" id="goldar3" value="AB" <?php echo ($goldar=='AB') ?"checked": "" ?>>
          <label class="form-check-label" for="gridRadios3">
            AB
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  	<div class="form-group row">
		<label for="agama" class="col-2 col-form-label "> Agama</label>
		<div class="col-4">
		<select name="agama" class="custom-select">
		  <option selected> Pilih... </option>
		  <option value="Islam">Islam </option>
		  <option value="Protestan">Protestan </option>
		  <option value="Katholik">Katholik </option>
		  <option value="Hindu">Hindu </option>
		  <option value="Budha">Budha </option>
		</select>
		</div>
	</div>	

	<div class="form-group row">
		<label for="asal" class="col-2 col-form-label "> Asal SMP</label>
		<div class="col-4">
			<input type="text" name="asal" class= "form-control" id="asal" value="<?php echo $siswa['asal_smp'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="anak" class="col-2 col-form-label "> Anak Ke</label>
		<div class="col-1">
			<input type="number" name="anak" class= "form-control" id="anak" value="<?php echo $siswa['anak'] ?>">	
		</div>
		<p class="pt-2">Dari </p>
		<div class="col-1">
			<input type="number" name="saudara" class= "form-control" id="saudara" value="<?php echo $siswa['saudara'] ?>">	
		</div>
		<p class="pt-2">Bersaudara </p>
	</div>

	<p class="lead"> *Data Orangtua / Wali</p>

	<div class="form-group row">
		<label for="namaayah" class="col-2 col-form-label "> Nama Ayah</label>
		<div class="col-8">
			<input type="text" name="nama_a" class= "form-control" id="namaayah" value="<?php echo $siswa['nama_a'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="umur_a" class="col-2 col-form-label "> Umur</label>
		<div class="col-4">
			<input type="number" name="umur_a" class= "form-control" id="umur_a" value="<?php echo $siswa['umur_a'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="Pekerjaan_a" class="col-2 col-form-label "> Pekerjaan</label>
		<div class="col-4">
			<input type="text" name="pekerjaan_a" class= "form-control" id="Pekerjaan_a" value="<?php echo $siswa['pekerjaan_a'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="penghasilan_a" class="col-2 col-form-label "> Penghasilan per Bulan</label>
		<div class="col-4">
			<input type="number" name="penghasilan_a" class= "form-control" id="penghasilan_a" value="<?php echo $siswa['penghasilan_a'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="agama_a" class="col-2 col-form-label "> Agama</label>
		<div class="col-4">
		<select name ="agama_a" class="custom-select">
		  <option selected> Pilih... </option>	
		  <option value="Islam">Islam </option>
		  <option value="Protestan">Protestan </option>
		  <option value="Katholik">Katholik </option>
		  <option value="Hindu">Hindu </option>
		  <option value="Budha">Budha </option>
		</select>
		</div>
	</div>	

	<div class="form-row">
		<label for="alamat_a" class="col-2 col-form-label "> Alamat Sekarang</label>
		<div class="col-4 form-group" style="margin-left: 2px;">
			<textarea name="alamat_a" class= "form-control" id="alamat_a"> 
				<?php echo $siswa['alamat_a'] ?></textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon_a" class="form-control" id="telepon2" value="<?php echo $siswa['telepon_a'] ?>"> 
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos_a" class="form-control" id="kodepos2" value="<?php echo $siswa['kodepos_a'] ?>">
		</div>
	</div>

	<div class="form-group row">
		<label for="namaibu" class="col-2 col-form-label "> Nama Ibu</label>
		<div class="col-8">
			<input type="text" name="nama_i" class= "form-control" id="namaibu" value="<?php echo $siswa['nama_i'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="umur_i" class="col-2 col-form-label "> Umur</label>
		<div class="col-4">
			<input type="number" name="umur_i" class= "form-control" id="umur_i" value="<?php echo $siswa['umur_i'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="pekerjaan_i" class="col-2 col-form-label "> Pekerjaan</label>
		<div class="col-4">
			<input type="text" name="pekerjaan_i" class= "form-control" id="pekerjaan_i" value="<?php echo $siswa['pekerjaan_i'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="penghasilan_i" class="col-2 col-form-label "> Penghasilan per Bulan</label>
		<div class="col-4">
			<input type="number" name="penghasilan_i" class= "form-control" id="penghasilan_i" value="<?php echo $siswa['penghasilan_i'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="agama_i" class="col-2 col-form-label "> Agama</label>
		<div class="col-4">
		<select name ="agama_i" class="custom-select">
		  <option selected> Pilih... </option>
		  <option value="Islam">Islam </option>
		  <option value="Protestan">Protestan </option>
		  <option value="Katholik">Katholik </option>
		  <option value="Hindu">Hindu </option>
		  <option value="Budha">Budha </option>
		</select>
		</div>
	</div>	


	<div class="form-row">
		<label for="alamat" class="col-2 col-form-label "> Alamat Sekarang</label>
		<div class="col-4 form-group" style="margin-left: 2px;">
			<textarea name="alamat_i" class= "form-control" id="alamat_i"> 
				<?php echo $siswa['alamat_i'] ?></textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon_i" class="form-control" id="telepon2" value="<?php echo $siswa['telepon_i'] ?>"> 
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos_i" class="form-control" id="kodepos2" value="<?php echo $siswa['kodepos_i'] ?>">
		</div>
	</div>

	<div class="form-group row">
		<label for="namawali" class="col-2 col-form-label "> Nama Wali</label>
		<div class="col-8">
			<input type="text" name="nama_w" class= "form-control" id="namawali" value="<?php echo $siswa['nama_w'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="umur_w" class="col-2 col-form-label "> Umur</label>
		<div class="col-4">
			<input type="number" name="umur_w" class= "form-control" id="umur_w" value="<?php echo $siswa['umur_w'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="pekerjaan_w" class="col-2 col-form-label "> Pekerjaan</label>
		<div class="col-4">
			<input type="text" name="pekerjaan_w" class= "form-control" id="pekerjaan_w" value="<?php echo $siswa['pekerjaan_w'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="hubungan_w" class="col-2 col-form-label "> Hubungan Dengan Wali </label>
		<div class="col-4">
			<input type="text" name="hubungan_w" class= "form-control" id="hubungan_w" value="<?php echo $siswa['hubungan_w'] ?>">	
		</div>
	</div>

	<div class="form-group row">
		<label for="agama_w" class="col-2 col-form-label "> Agama</label>
		<div class="col-4">
		<select name ="agama_w" class="custom-select">
		  <option selected> Pilih... </option>
		  <option value="Islam">Islam </option>
		  <option value="Protestan">Protestan </option>
		  <option value="Katholik">Katholik </option>
		  <option value="Hindu">Hindu </option>
		  <option value="Budha">Budha </option>
		</select>
		</div>
	</div>	

	<div class="form-row">
		<label for="alamat_w" class="col-2 col-form-label "> Alamat Sekarang</label>
		<div class="col-4 form-group" style="margin-left: 2px;">
			<textarea name="alamat2" class= "form-control" id="alamat_w" > 
				<?php echo $siswa['alamat_w'] ?></textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon_w" class="form-control" id="telepon2" value="<?php echo $siswa['telepon_w'] ?>"> 
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos_w" class="form-control" id="kodepos2" value="<?php echo $siswa['kodepos_w'] ?>">
		</div>
	</div>


	 <div class="row">
		 <div class="col-2"></div>
	<button type="submit" name="submit" class="col-1 btn btn-primary" style="margin-left: 14px;">Submit</button>
	</div>
</form> 

</body>
</html>