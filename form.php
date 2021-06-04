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
    	<h1 class="text-left"> Form Biodata <br> </h1>
    	<p class="text-secondary"> Silahkan isi data sesuai dengan diri anda </p> 
    </div>
</div>

<p class="lead"> *Data Siswa</p>
<form action = "proses.php" method="POST" style="margin-left: 7px;">
	<div class="form-group row">
		<label for="nama" class="col-2 col-form-label "> Nama Lengkap</label>
		<div class="col-8">
			<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="nama1" class="col-2 col-form-label "> Nama Panggilan</label>
		<div class="col-4">
			<input type="text" name="nama1" class= "form-control" id="nama1" placeholder="Nama Panggilan" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="tempat" class="col-2 col-form-label "> Tempat Tanggal Lahir </label>
		<div class="col-4 input-group">
			<input type="text" name="ttl" class="form-control" id="tempat" placeholder="Tempat Lahir" required>	
		</div>
		<div class="col-4 input-group">
			<input type="date" name="ttl1" class="form-control">
		</div>
	</div>

	<div class="form-row">
		<label for="alamat" class="col-2 col-form-label "> Alamat Sekarang</label>
		<div class="col-4 form-group" style="margin-left: 2px;">
			<textarea name="alamat" class= "form-control" id="alamat" placeholder="Alamat Sekarang" required> </textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon" class="form-control" id="telepon" placeholder="No.Telepon" required> 
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos" class="form-control" id="kodepos" placeholder="Kode Pos" required>
		</div>
	</div>

	<div class="form-row">
		<label for="alamat1" class="col-2 col-form-label "> Alamat Libur</label>
		<div class="col-4 form-group" style="margin-left: 2px;">
			<textarea name="alamat1" class= "form-control" id="alamat1" placeholder="Alamat Libur"> </textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon1" class="form-control" id="telepon1" placeholder="No.Telepon" required>
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos1" class="form-control" id="kodepos1" placeholder="Kode Pos" required>
		</div>
	</div>


	<div class="form-group row">
		<label for="hobby" class="col-2 col-form-label "> Hobby</label>
		<div class="col-4">
			<input type="text" name="hobby" class= "form-control" id="hobby" placeholder="Hobby" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="ekskul" class="col-2 col-form-label "> Ekskul</label>
		<div class="col-4">
			<input type="text" name="ekskul" class= "form-control" id="ekskul" placeholder="Ekstrakulikuler" required>	
		</div>
	</div>

	<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Golongan Darah</legend>
      <div class="col-10">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="goldar" id="goldar1" value="A" required>
          <label class="form-check-label" for="goldar1">
            A
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input " type="radio" name="goldar" id="goldar2" value="B" required>
          <label class="form-check-label" for="goldar2">
            B
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="goldar" id="goldar3" value="O" required>
          <label class="form-check-label" for="goldar3">
            O
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="goldar" id="goldar3" value="AB" required>
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
			<input type="text" name="asal" class= "form-control" id="asal" placeholder="Asal SMP" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="anak" class="col-2 col-form-label "> Anak Ke</label>
		<div class="col-1">
			<input type="number" name="anak" class= "form-control" id="anak" required>	
		</div>
		<p class="pt-2">Dari </p>
		<div class="col-1">
			<input type="number" name="saudara" class= "form-control" id="saudara" required>	
		</div>
		<p class="pt-2">Bersaudara </p>
	</div>

	<p class="lead"> *Data Orangtua / Wali</p>

	<div class="form-group row">
		<label for="namaayah" class="col-2 col-form-label "> Nama Ayah</label>
		<div class="col-8">
			<input type="text" name="nama_a" class= "form-control" id="namaayah" placeholder="Nama Ayah" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="umur_a" class="col-2 col-form-label "> Umur</label>
		<div class="col-4">
			<input type="number" name="umur_a" class= "form-control" id="umur_a" placeholder="Umur Ayah" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="Pekerjaan_a" class="col-2 col-form-label "> Pekerjaan</label>
		<div class="col-4">
			<input type="text" name="pekerjaan_a" class= "form-control" id="Pekerjaan_a" placeholder="Pekerjaan Ayah" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="penghasilan_a" class="col-2 col-form-label "> Penghasilan per Bulan</label>
		<div class="col-4">
			<input type="number" name="penghasilan_a" class= "form-control" id="penghasilan_a" placeholder="Penghasilan Ayah" required>	
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
			<textarea name="alamat_a" class= "form-control" id="alamat_a" placeholder="Alamat Sekarang" required> </textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon_a" class="form-control" id="telepon2" placeholder="No.Telepon" required> 
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos_a" class="form-control" id="kodepos2" placeholder="Kode Pos" required>
		</div>
	</div>

	<div class="form-group row">
		<label for="namaibu" class="col-2 col-form-label "> Nama Ibu</label>
		<div class="col-8">
			<input type="text" name="nama_i" class= "form-control" id="namaibu" placeholder="Nama Ibu" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="umur_i" class="col-2 col-form-label "> Umur</label>
		<div class="col-4">
			<input type="number" name="umur_i" class= "form-control" id="umur_i" placeholder="Umur Ibu" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="pekerjaan_i" class="col-2 col-form-label "> Pekerjaan</label>
		<div class="col-4">
			<input type="text" name="pekerjaan_i" class= "form-control" id="pekerjaan_i" placeholder="Pekerjaan Ibu" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="penghasilan_i" class="col-2 col-form-label "> Penghasilan per Bulan</label>
		<div class="col-4">
			<input type="number" name="penghasilan_i" class= "form-control" id="penghasilan_i" placeholder="Penghasilan Ibu" required>	
		</div>
	</div>

	<div class="form-group row">
		<label for="agama_i" class="col-2 col-form-label "> Agama</label>
		<div class="col-4">
		<select name ="agama_i" class="custom-select" required>
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
			<textarea name="alamat_i" class= "form-control" id="alamat_i" placeholder="Alamat Sekarang" required> </textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon_i" class="form-control" id="telepon2" placeholder="No.Telepon" required> 
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos_i" class="form-control" id="kodepos2" placeholder="Kode Pos" required>
		</div>
	</div>

	<div class="form-group row">
		<label for="namawali" class="col-2 col-form-label "> Nama Wali</label>
		<div class="col-8">
			<input type="text" name="nama_w" class= "form-control" id="namawali" placeholder="Nama Wali">	
		</div>
	</div>

	<div class="form-group row">
		<label for="umur_w" class="col-2 col-form-label "> Umur</label>
		<div class="col-4">
			<input type="number" name="umur_w" class= "form-control" id="umur_w" placeholder="Umur Wali">	
		</div>
	</div>

	<div class="form-group row">
		<label for="pekerjaan_w" class="col-2 col-form-label "> Pekerjaan</label>
		<div class="col-4">
			<input type="text" name="pekerjaan_w" class= "form-control" id="pekerjaan_w" placeholder="Pekerjaan Wali">	
		</div>
	</div>

	<div class="form-group row">
		<label for="hubungan_w" class="col-2 col-form-label "> Hubungan Dengan Wali </label>
		<div class="col-4">
			<input type="text" name="hubungan_w" class= "form-control" id="hubungan_w" placeholder="Hubungan Wali">	
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
			<textarea name="alamat2" class= "form-control" id="alamat_w" placeholder="Alamat Sekarang"> </textarea>	
		</div>
		<div class="col-2 form-group" style="margin-left: 7px;">
			<input type="number" name="telepon_w" class="form-control" id="telepon2" placeholder="No.Telepon"> 
		</div>
		<div class="col-1.5 form-group" >
			<input type="number" name="kodepos_w" class="form-control" id="kodepos2" placeholder="Kode Pos">
		</div>
	</div>


	 <div class="row">
		 <div class="col-2"></div>
	<button type="submit" name="submit" class="col-1 btn btn-primary" style="margin-left: 14px;">Submit</button>
	</div>
</form> 

</body>
</html>