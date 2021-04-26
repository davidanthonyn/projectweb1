<?php
include "sigadgetheaderhome.php";

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: home.php');
}


$sqltwo = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='Iklan iPhone 11 Pro smartfren.png'");
$sqlthree = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='Iklan iPhone 11.png'");
$sqlfour = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='Iklan AirPods Pro.png'");
$sqlfive = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='user exp.jpg'");
$sqlsix = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='free-ongkir.jpg'");
$sqlseven = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='accsr.jpg'");
$sqleight = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='New-Apple-store-Retail-in-Asia3.jpg'");
		
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link href="styles.php" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<script src="script.js" defer></script>
	<script src="newsletter.js" defer></script>
	<style>
	
	</style>

  <title>SI Gadget | Menjual Smartphone dan Aksesoris</title>
  </head>
<body>



<?php while($rowtwo=mysqli_fetch_array($sqltwo)) { ?>

<div class="slideshow-container" style="position: relative;overflow-x: hidden;" body="background-size: cover;">
<div class="mySlides fade about-section animate__animated animate__fadeInLeft">
								<img src="image/<?php echo $rowtwo['Filename']; ?>" style="width:100%" onclick="document.location='Bagian David/iphone12proproducts.php'"> <?php } while($rowfour=mysqli_fetch_array($sqlfour)) {?>
</div>

<div class="mySlides fade about-section animate__animated animate__fadeInLeft">
  <img src="image/<?php echo $rowfour['Filename']; ?>" style="width:100%" onclick="document.location='Bagian Tius/headphoneproducts.php'"> <?php } while($rowthree=mysqli_fetch_array($sqlthree)) {?>
</div>

<div class="mySlides fade about-section animate__animated animate__fadeInLeft">
  <img src="image/<?php echo $rowthree['Filename']; ?>" style="width:100%" onclick="document.location='Bagian David/PromotioniPhone11.php'"> <?php } while($rowfive=mysqli_fetch_array($sqlfive)) {?>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>



</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>
<br><br>
<img class="experiencedays" src="image/<?php echo $rowfive['Filename']; ?>" alt="Experience Days" width="25%" height="25%"> <?php } while($rowsix=mysqli_fetch_array($sqlsix)) {?>
<img class="experiencedays" src="image/<?php echo $rowsix['Filename']; ?>" alt="Free Ongkir" width="25%" height="25%" onclick="location.href='Bagian David/nomorresi.php';"> <?php } while($rowseven=mysqli_fetch_array($sqlseven)) {?>
<img class="experiencedays" src="image/<?php echo $rowseven['Filename']; ?>" alt="Accessories" width="25%" height="25%" onclick="location.href='Bagian Tius/halamanaksesoris.php';"> <?php } while($roweight=mysqli_fetch_array($sqleight)) {?>


<br><br>
<div>
<img src="image/<?php echo $roweight['Filename']; ?>" alt="Toko Elektronik" width="100%" height="100%" onclick="document.location='Bagian Sanctus/About.php'"> <?php } ?>
</div>

<!--Footer adalah Kaki website, Footer biasa sebagai "Informasi tambahan yang bersifat penting dan yang harus
    ditempatkan di setiap halaman", Footer isinya bisa apa saja, yang memang penting-->
    <div class="newsletter">
    	<p class="animate__animated animate__fadeInDown" style="text-align:center; color:white; font-size: 15px; position: relative; right: 200px">Mari berlangganan newsletter untuk mendapatkan informasi terbaru
    		<input class="animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="text" id="email" name="Email" size="60">
    		<input class="button animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="submit" value="KIRIM" onclick="newsletterCheck()">
    	</p>
    </div>
    <!-- penjelasan SI Gadget -->
    <div class="experience">
    <p class="animate__animated animate__fadeInLeft" style="text-align:center">SIGadget adalah reseller handphone terkemuka di Indonesia, yang menjual segala jenis produk handphone dari Apple, Android, dan aksesoris perlengkapan.</p>
    					<div class="column animate__animated animate__fadeInLeft">
    						<ul style="list-style-type:none">
    							<li>Jika Anda ingin bantuan atau memiliki masukan, silakan hubungi kami: </li><br>
    							<li>Jam 9.30 - 17.30(Senin s/d Minggu).</li>
    							<li>Email: customercare@sigadget.com</li>
    							<li>Phone: 911</li>
    							<li>WA: 081234567890</li>
    						</ul>
    					</div>
    															<div class="column animate__animated animate__fadeInLeft">
    																	<ul style="list-style-type:none">
    																		<li>Kami menerima metode pembayaran:</li><br>
    																		<li>OVO</li>
    																		<li>GO-PAY</li>
    																		<li>Cash on Delivery(COD)</li>
    																		<li>Debit card</li>
    																		<li>Credit card</li>
    																	</ul>
    															</div>

    																							<div class="column animate__animated animate__fadeInLeft">
    																									<ul style="list-style-type:none">
    																										<li>Kurir pengiriman:</li><br>
    																										<li>JNE</li>
    																										<li>JET Express</li>
    																										<li>SiCepat</li>
    																									</ul>
    																							</div>
    </div>

    					<div class="bottomnav">
    					  <p style="text-align:center; color:white; font-size: 10px">COPYRIGHT © 2021 SIGADGET. ALL RIGHTS RESERVED.</p>
    					</div>
    <!--Copas footer sampai sini -->


<!---js for toggle menu------>
<script>
	var MenuItems = document.getElementById("MenuItems");
	
	MenuItems.style.maxHeight = "0px";
	
	function menutoggle(){
		if(MenuItems.style.maxHeight == "0px"){
			 MenuItems.style.maxHeight == "200px";
		} else {
			MenuItems.style.maxHeight == "0px";
	}
</script>
<?php

$conn->close();

?>
</body>
</html>