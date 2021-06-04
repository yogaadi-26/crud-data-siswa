<?php
include("koneksi.php");

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	$sql = "DELETE FROM data_siswa WHERE id=$id ";
	$query = mysqli_query($conn, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: list.php');
	} else {
		die('Query Error : '.mysqli_errno($conn). ' - ' .mysqli_error($conn));
	}
	
} else {
	die("akses dilarang...");
}

?>
