<?php
include ("koneksi.php");

if (isset($_POST['submit'])) {

#-------> Data Siswa <--------#
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

$sql = "INSERT INTO data_siswa (nama, nama_p, ttl, ttl1, alamat_rmh, telepon_rmh, kodepos_rmh, alamat_lbr, telepon_lbr, kodepos_lbr, hobby, ekskul, goldar, agama, asal_smp, anak, saudara, nama_a, umur_a, pekerjaan_a, penghasilan_a, agama_a, alamat_a, telepon_a, kodepos_a, nama_i, umur_i, pekerjaan_i, penghasilan_i, agama_i, alamat_i, telepon_i, kodepos_i, nama_w, umur_w, pekerjaan_w, hubungan_w, agama_w, alamat_w, telepon_w, kodepos_w)
	VALUES 
 ('$nama', '$panggilan', '$ttl', '$ttl1', '$alamat', '$telepon', '$kodepos', '$alamat1', '$telepon1', '$kodepos1', '$hobby', '$ekskul', '$goldar', '$agama', '$asal', '$anak', '$saudara', '$nama_a', '$umur_a', '$pekerjaan_a', '$penghasilan_a', '$agama_a', '$alamat_a', '$telepon_a', '$kodepos_a', '$nama_i', '$umur_i', '$pekerjaan_i', '$penghasilan_i', '$agama_i', '$alamat_i', '$telepon_i', '$kodepos_i', '$nama_w', '$umur_w', '$pekerjaan_w', '$hubungan_w', '$agama_w', '$alamat_w', '$telepon_w', '$kodepos_w')";

$query = mysqli_query($conn, $sql);

if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: list.php');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: list.php');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>