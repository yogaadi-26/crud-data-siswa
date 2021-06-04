 <?php
session_start();

include "koneksi.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password = md5($password);

# Buat query SQL
$sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$username."' AND password= '".$password."' ");
$data = mysqli_fetch_array($sql);

# Cek Username dan Password ada pada database
if (! empty($data) ) {
	$_SESSION['username'] = $data['username'];
	$_SESSION['nama'] = $data['nama'];
header("Location: dashboard.php");
}

else {
header("Location: index.php");
}

?>