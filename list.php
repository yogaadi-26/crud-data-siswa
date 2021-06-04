<?php 

include("koneksi.php");

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://kit.fontawesome.com/0460ea45a9.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">

	<title></title>

<style>
	i {
		padding: 5px 10px 5px 10px;
		font-size: 24px;
	}
</style>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
	<p class="display-4 container-fluid"> List Lengkap </p>
	<a href="form.php"> <button class="btn btn-primary" style="margin-left: 20px ;" > Tambah Data </button> </a>
</div>

	<table class="table table-bordered table-hover text-center">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col" >No</th>
      <th scope="col" >Nama</th>
      <th scope="col" >Aksi </th>
    </tr>
  </thead>
  <tbody>

  		<?php 
  		$sql = "SELECT * FROM data_siswa";
  		$query = mysqli_query($conn, $sql);



      while ($siswa = mysqli_fetch_array($query)) {
  	
    echo "<tr>";

  	echo "<td>" .$siswa['id']. "</td>"; 
  	echo "<td>" .$siswa['nama']. "</td>";
?>
	<td> <a href="form-edit.php?id=<?= $siswa['id']; ?>"> 
    <i class="fas fa-user-edit"></i> </a> 
		 <a href="hapus.php?id=<?= $siswa['id']; ?>" onclick="return confirm('Yakin Data Dihapus ?');"> 
      <i class="fas fa-trash">  </i> </a>
		 <a href="more-info.php?id=<?= $siswa['id']; ?>"> 
      <i class="fas fa-info" style="margin-left: 10px; ">  </i> </a>
	</td>

<?php 
} 
?>

  </tbody>
</table>
</body>
</html>