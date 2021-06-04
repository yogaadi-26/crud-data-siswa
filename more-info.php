<?php include("koneksi.php"); ?>

<?php
if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list.php');
}

//ambil id dari query string
$id = $_GET['id'];

		$sql = "SELECT * FROM data_siswa WHERE id=$id";
		$query = mysqli_query($conn, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			
			
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title></title>
</head>
<body>
<div class="jumbotron jumbotron-fluid ">
	<p class="display-4 container-fluid" > Data Lengkap </p>
	<a href="list.php"> <button class="btn btn-primary" style="float: right; margin-right: 10px;">  Kembali </button> </a>
</div>
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th>ID</th>
			 <?php echo "<td>".$siswa['id']."</td>"; ?>
		</tr>
		<tr>
			<th>Nama</th>
			<?php echo "<td>".$siswa['nama']."</td>"; ?>
		</tr>
			
		<tr>
			<th>Nama Panggilan</th>
			<?php echo "<td>".$siswa['nama_p']."</td>"; ?>
		</tr>	

		<tr>
			<th>Tempat Kelahiran</th>
			<?php echo "<td>".$siswa['ttl']."</td>"; ?>
		</tr>

		<tr>
			<th>Tanggal Kelahiran</th>
			<?php echo "<td>".$siswa['ttl1']."</td>"; ?>
		</tr>

		<tr>
			<th>Alamat Sekarang</th>
			<?php echo "<td>".
			      $siswa['alamat_rmh'] . "<br>".
			"               Telepon:   ". $siswa['telepon_rmh']. "<br>".
			"               Kodepos:   ". $siswa['kodepos_rmh']."</td>"; 
			?>
		</tr>

		<tr>
			<th>Alamat Libur</th>
			<?php echo "<td>".
			      $siswa['alamat_lbr'] . "<br>".
			"               Telepon:   ". $siswa['telepon_lbr']. "<br>".
			"               Kodepos:   ". $siswa['kodepos_rmh']."</td>"; 
			?>
		</tr>

		<tr>
			<th>Hobby</th>
			<?php echo "<td>".$siswa['hobby']."</td>"; ?>
		</tr>

		<tr>
			<th>Ekskul</th>
			<?php echo "<td>".$siswa['ekskul']."</td>"; ?>
		</tr>

		<tr>
			<th>Golongan Darah</th>
			<?php echo "<td>".$siswa['goldar']."</td>"; ?>
		</tr>

		<tr>
			<th>Agama</th>
			<?php echo "<td>".$siswa['agama']."</td>"; ?>
		</tr>

		<tr>
			<th>Asal SMP</th>
			<?php echo "<td>".$siswa['asal_smp']."</td>"; ?>
		</tr>

		<tr>
			<th>Anak Ke</th>
			<?php echo "<td>". $siswa['anak']. 
			"              Dari      " .$siswa['saudara']. "          Saudara".
			"</td>"; ?>
		</tr>

		<tr>
			<th>Nama Ayah</th>
			<?php echo "<td>".$siswa['nama_a']."</td>"; ?>
		</tr>

		<tr>
			<th>Umur</th>
			<?php echo "<td>".$siswa['umur_a']."</td>"; ?>
		</tr>

		<tr>
			<th>Pekerjaan</th>
			<?php echo "<td>".$siswa['pekerjaan_a']."</td>"; ?>
		</tr>

		<tr>
			<th>Penghasilan per Bulan</th>
			<?php echo "<td>".$siswa['penghasilan_a']."</td>"; ?>
		</tr>

		<tr>
			<th>Agama</th>
			<?php echo "<td>".$siswa['agama_a']."</td>"; ?>
		</tr>

		<tr>
			<th>Alamat </th>
			<?php echo "<td>".
			      $siswa['alamat_a'] . "<br>".
			"               Telepon:   ". $siswa['telepon_a']. "<br>".
			"               Kodepos:   ". $siswa['kodepos_a']."</td>"; 
			?>
		</tr>

		<tr>
			<th>Nama Ibu</th>
			<?php echo "<td>".$siswa['nama_i']."</td>"; ?>
		</tr>

		<tr>
			<th>Umur</th>
			<?php echo "<td>".$siswa['umur_i']."</td>"; ?>
		</tr>

		<tr>
			<th>Pekerjaan</th>
			<?php echo "<td>".$siswa['pekerjaan_i']."</td>"; ?>
		</tr>

		<tr>
			<th>Penghasilan per Bulan</th>
			<?php echo "<td>".$siswa['penghasilan_i']."</td>"; ?>
		</tr>

		<tr>
			<th>Agama</th>
			<?php echo "<td>".$siswa['agama_i']."</td>"; ?>
		</tr>

		<tr>
			<th>Alamat</th>
			<?php echo "<td>".
			      $siswa['alamat_i'] . "<br>".
			"               Telepon:   ". $siswa['telepon_i']. "<br>".
			"               Kodepos:   ". $siswa['kodepos_i']."</td>"; 
			?>
		</tr>

		<tr>
			<th>Nama Wali</th>
			<?php echo "<td>".$siswa['nama_w']."</td>"; ?>
		</tr>

		<tr>
			<th>Umur</th>
			<?php echo "<td>".$siswa['umur_w']."</td>"; ?>
		</tr>	

		<tr>
			<th>Pekerjaan</th>
			<?php echo "<td>".$siswa['pekerjaan_w']."</td>"; ?>
		</tr>	

		<tr>
			<th>Hubungan Wali</th>
			<?php echo "<td>".$siswa['hubungan_w']."</td>"; ?>
		</tr>	

		<tr>
			<th>Agama Wali</th>
			<?php echo "<td>".$siswa['agama_w']."</td>"; ?>
		</tr>	

		<tr>
			<th>Alamat</th>
			<?php echo "<td>".
			      $siswa['alamat_w'] . "<br>".
			"               Telepon:   ". $siswa['telepon_w']. "<br>".
			"               Kodepos:   ". $siswa['kodepos_w']."</td>"; 
			?>
		</tr>

<?php } ?>
	
	</tbody>	
</table>
</body>
</html>