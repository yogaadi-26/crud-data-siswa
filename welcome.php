<?php
session_start();

# Memastikan user sudah login terlebih dahulu
if (!isset($_SESSION['username'])) {
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Halaman Utama </title>
</head>
<body>
	<h1> Selamat datang <?php echo $_SESSION['nama']; ?> </h1>

	<a href="logout.php"> Log Out </a>
</body>
</html>