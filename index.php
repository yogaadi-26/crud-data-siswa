<?php
session_start();

if(isset($_SESSION['username'])) {

	header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<script src=""></script>
</head>

<body>
<style>

body {
		font-family: 'Alata', sans-serif;
		background: #12c2e9;  
		background: -webkit-linear-gradient(to left, #f64f59, #c471ed, #12c2e9);
		background: linear-gradient(to left, #f64f59, #c471ed, #12c2e9);
}
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300pt;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
	letter-spacing: 5px;
	margin-top: 5px;
}
 
.kotak_login{
	width: 350px;
	background: rgba(255,255,255,0.3);
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
	letter-spacing: 1px;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
	background-color: transparent;
	border: none;
	border-bottom: 1px solid black;
}
 
.tombol_login{
	background: rgba(241,20,180,32);
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
	border-radius: 20px;
	letter-spacing: 2px;
}
  
.link{
	color: #232323;
}
#icon {
	font-size: 72px;
	margin-left: 140px;  
}
 
</style>

<div class="kotak_login">
		<div id="icon"><i class="fas fa-user-circle"></i> </div>
		<p class="tulisan_login">Halaman login</p>
 
		<form method="POST" action="login.php">
			<label for="user"> <i class="fas fa-user"> </i> Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" id="user" required>
 
			<label for="pass"> <i class="fas fa-key"></i> Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." id="pass" required>
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				 Don't Have an Account? <a href="register.php" class="link"> Register Now</a>
			</center>
		</form>
		
	</div>

</body>
</html>