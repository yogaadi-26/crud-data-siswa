<?php
session_start();

# Memastikan user sudah login terlebih dahulu
if (! isset($_SESSION['username'])) {
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <style>
body, html, .main {
    height: 100%;
}
section {
    min-height: 100%;
}
.menu {
  display: flex;
  padding: 125px;
}
.satu {
  margin: 55px;
  height: 250px;
  width: 250px;
  background-color: #16b85f;
}
.dua {
  margin: 55px;
  height: 250px;
  width: 250px;
  background-color: #abb816;
}
.tiga {
  margin: 55px;
  height: 250px;
  width: 250px;
  background-color: #b82116;
}

</style>
</head>`
<body>
<div class="main" id="welcome">
  <section class="container-fluid" style= "background-image: url(2.jpg); background-repeat: no-repeat; background-size: cover; margin-top: -25px;">	
  <div class="w3-container w3-center w3-animate-bottom" style="-webkit-animation-duration : 3s;">	
  <h1 class="text-center display-2" style="color: rgba(255,255,255,0.8); letter-spacing: 5px; margin-top: 100px;"> Selamat Datang </h1>
  <div class="w3-container w3-center w3-animate-bottom" style="-webkit-animation-duration : 4s;">	
  <h1 class="text-center lead" style="color: white; font-size: 36px; letter-spacing: 5px; padding-bottom: 10px;"> <?php echo $_SESSION['nama']; ?> </h1>
  </div>
</div>
  
  <a href="#menu"> <i class="fas fa-angle-down" style="font-size: 56px; float: right; margin-top: 310px; color: white;" > </i> </a>
  </section>
</div>


<div class="main" id="menu">
  <section style="background: linear-gradient(to right, #4b6cb7, #182848);">
  	<a href="#welcome"> <i class="fas fa-angle-up" style="font-size: 56px; float: right; margin-top : 0px; margin-right: 15px; color: white;" > </i> </a>
    <div class="menu">
      <div class="satu col-3"> <a href="form.php"> <i class="fas fa-plus" style="font-size: 128px; padding: 62px; color: rgba(0,0,0,0.7);"> </i> </a> </div>
      <div class="dua col-3"> <a href="list.php"> <i class="fas fa-list" style="font-size: 128px; padding: 62px; color: rgba(0,0,0,0.7);"> </i> </a> </div> 
      <div class="tiga col-3"> <a href="logout.php"> <i class="fas fa-power-off" onclick="return confirm('Yakin Ingin Logout ?');" style="font-size: 128px; padding: 62px; color: rgba(0,0,0,0.7);"> </i> </a> </div> 
    </div>
  </section>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

</html>