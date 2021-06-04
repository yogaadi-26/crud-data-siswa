<?php

include ("koneksi.php");

if (isset($_POST['submit'])) {

#-------> Data Siswa <--------#
$id = $_POST['id'];
$nama = $_POST['nama'];
$panggilan = $_POST['nama1'];
$ttl = $_POST['ttl'];
$ttl1 = $_POST['ttl1'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$kodepos = $_POST['kodepos'];
$alamat1 = $_POST['alamat1'];
$telepon1 = $_POST['telepon1'];
$kodepos1 = $_POST['kodepos1'];
$hobby = $_POST['hobby'];
$ekskul = $_POST['ekskul'];
$goldar = $_POST['goldar'];
$agama = $_POST['agama'];
$asal = $_POST['asal'];
$anak = $_POST['anak'];
$saudara = $_POST['saudara'];

#-------> Data Ayah <--------#
$nama_a = $_POST['nama_a'];
$umur_a = $_POST['umur_a'];
$pekerjaan_a = $_POST['pekerjaan_a'];
$penghasilan_a = $_POST['penghasilan_a'];
$agama_a = $_POST['agama_a'];
$alamat_a = $_POST['alamat_a'];
$telepon_a = $_POST['telepon_a'];
$kodepos_a = $_POST['kodepos_a'];

#-------> Data Ibu <--------#
$nama_i = $_POST['nama_i'];
$umur_i = $_POST['umur_i'];
$pekerjaan_i = $_POST['pekerjaan_i'];
$penghasilan_i = $_POST['penghasilan_i'];
$agama_i = $_POST['agama_i'];
$alamat_i = $_POST['alamat_i'];
$telepon_i = $_POST['telepon_i'];
$kodepos_i = $_POST['kodepos_i'];

#-------> Data Wali <--------#
$nama_w = $_POST['nama_w'];
$umur_w = $_POST['umur_w'];
$pekerjaan_w = $_POST['pekerjaan_w'];
$hubungan_w = $_POST['hubungan_w'];
$agama_w = $_POST['agama_w'];
$alamat_w = $_POST['alamat_w'];
$telepon_w = $_POST['telepon_w'];
$kodepos_w = $_POST['kodepos_w'];

# Query SQL
$sql = "UPDATE data_siswa SET nama='$nama', 
							  nama_p='$panggilan', 
							  ttl='$ttl', 
							  ttl1='$ttl1', 
							  alamat_rmh='$alamat', 
							  telepon_rmh='$telepon', 
							  kodepos_rmh='$kodepos', 
							  alamat_lbr='$alamat1', 
							  telepon_lbr='$telepon1', 
							  kodepos_lbr='$kodepos1', 
							  hobby='$hobby', 
							  ekskul='$ekskul', 
							  goldar='$goldar', 
							  agama='$agama', 
							  asal_smp='$asal', 
							  anak='$anak', 
							  saudara='$saudara', 
							  nama_a='$nama_a', 
							  umur_a='$umur_a', 
							  pekerjaan_a='$pekerjaan_a', 
							  penghasilan_a='$penghasilan_a', 
							  agama_a='$agama_a', 
							  alamat_a='$alamat_a', 
							  telepon_a='$telepon_a', 
							  kodepos_a='$kodepos_a', 
							  nama_i='$nama_i', 
							  umur_i='$umur_i', 
							  pekerjaan_i='$pekerjaan_i', 
							  penghasilan_i='$penghasilan_i', 
							  agama_i='$agama_i', 
							  alamat_i='$alamat_i', 
							  telepon_i='$telepon_i', 
							  kodepos_i='$kodepos_i', 
							  nama_w='$nama_w', 
							  umur_w='$umur_w', 
							  pekerjaan_w='$pekerjaan_w', 
							  hubungan_w='$hubungan_w', 
							  agama_w='$agama_w', 
							  alamat_w='$alamat_w', 
							  telepon_w='$telepon_w', 
							  kodepos_w='$kodepos_w' WHERE id = $id";
$query = mysqli_query($conn, $sql);

if ($query) {
	header('Location: list.php');
	}
	else {
	echo "alert('Gagal menyimpan Perubahan')";
	}

} 

else {
	die("Akses dilarang...");
}

?>