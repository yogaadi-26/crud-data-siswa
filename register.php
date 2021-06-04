<?php

include ("koneksi.php");

if(isset($_POST['register'])) {
	
	$nama = $_POST['nama'];
	$username = $_POST ['username'];
	$password = md5($_POST ['password']); 

	$sql = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "<script type='text/javascript'>alert('Register Berhasil');
			  window.location='index.php';
			  </script>";
	} 
	else {
		die('Query Error : '.mysqli_errno($conn). ' - ' .mysqli_error($conn));
	}
}
 
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="register/css/roboto-font.css">
	<script src="https://kit.fontawesome.com/0460ea45a9.js" crossorigin="anonymous"></script>
	<!-- Main Style Css -->
    <link rel="stylesheet" href="register/css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="" method="POST">
				<h2>Register Account </h2>
				<div class="form-row">
					<label for="full-name">Nama Lengkap</label>
					<input type="text" name="nama" id="full-name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Username</label>
					<input type="text" name="username" id="your-email" class="input-text" placeholder="Your Username" required>
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>