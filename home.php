<?php
include "sigadgetconnection.php";

$sql = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='Iklan iPhone 11 Pro smartfren.png'");
$sqltwo = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='Iklan iPhone 11.png'");
$sqlthree = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='Iklan AirPods Pro.png'");
$sqlfour = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='user exp.jpg'");
$sqlfive = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='free-ongkir.jpg'");
$sqlsix = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='accsr.jpg'");
$sqlseven = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='New-Apple-store-Retail-in-Asia3.jpg'");
	
	while($row=mysqli_fetch_array($sql)) {
		while($rowtwo=mysqli_fetch_array($sqltwo)) {
			while($rowthree=mysqli_fetch_array($sqlthree)) {
				while($rowfour=mysqli_fetch_array($sqlfour)) {
					while($rowfive=mysqli_fetch_array($sqlfive)) {
						while($rowsix=mysqli_fetch_array($sqlsix)) {
							while($rowseven=mysqli_fetch_array($sqlseven)) {
		
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
  <link rel="shortcut icon" type="image" href="image/">
  </head>
<body>
<!----navigation--->
<nav class="navbar">
    <div class="navbar-left"  style="position: relative; left: 140px"><div class="logo" onclick="location.href='home.php';"></div></div>
    <div class="navbar-right"  style="position: relative; left: 140px">
        <ul>
            <li><a href="Bagian David/iPhoneproducts.php">iPhone</a>
			<ul class="dropdown-list">
                    <li><a class="dropdown" href="Bagian David/PromotioniPhoneSE.php">iPhone SE</a></li>
                    <li><a class="dropdown" href="Bagian David/PromotioniPhone11Pro.php">iPhone 11 Pro</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhone11.php">iPhone 11</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhoneXS.php">iPhone XS</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhoneXR.php">iPhone XR</a></li>
            </ul>
          </li>

                              	<li><a href="Bagian Migel/HalamanAndroid.php">Android</a>
																			<ul class="dropdown-list">
																					<li><a class="dropdown" href="Bagian Migel/huawei.new.php">Huawei</a></li>
																					<li><a class="dropdown" href="Bagian Migel/samsungads.new.php">Samsung</a></li>
																					<li><a class="dropdown" href="Bagian Migel/xiaomi.new.php">Xiaomi</a></li>
																					<li><a class="dropdown" href="Bagian Migel/asus.new.php">ASUS</a></li>
																					<li><a class="dropdown" href="Bagian Migel/realme.php">Realme</a></li>
																				</ul>
                                  </li>
																																		<li><a href="Bagian Tius/halamanaksesoris.php">Aksesoris</a>
																																		<ul class="dropdown-list">
																																				<li><a class="dropdown" href="Bagian Tius/headphone.php">Headphone</a></li>
																																				<li><a class="dropdown" href="Bagian Tius/wirelesscharger.php">Powerbank</a></li>
																																				<li><a class="dropdown" href="Bagian Tius/aksesorislain.php">Aksesoris Lain</a></li>
																																			</ul>
                                                                    </li>

																																																			<li><a href="Bagian Sanctus/eventpromo.php">Event and Promo</a>

																																																													<li><a href="#">Layanan</a>
																																																														<ul class="dropdown-list">
																																																															<li><a class="dropdown" href="Bagian Sanctus/About.php">About</a></li>
																																																															<li><a class="dropdown" href="Bagian Sanctus/lokasitoko.php">Lokasi Toko</a></li>
																																																															<li><a class="dropdown" href="Bagian Sanctus/repair.php">Repair</a></li>
																																																														</ul>

                                                                                                                            <li><a href="Bagian David/account.php">Login</a>
																																																															</li>

        </ul>
    </div>
</nav>

<div class="slideshow-container" style="position: relative;overflow-x: hidden;" body="background-size: cover;">
<div class="mySlides fade about-section animate__animated animate__fadeInLeft">
  <img src="image/<?php echo $row['Filename']; ?>" style="width:100%" onclick="document.location='Bagian David/PromotioniPhone11Pro.php'">
</div>

<div class="mySlides fade about-section animate__animated animate__fadeInLeft">
  <img src="image/<?php echo $rowtwo['Filename']; ?>" style="width:100%" onclick="document.location='Bagian Tius/headphone.php'">
</div>

<div class="mySlides fade about-section animate__animated animate__fadeInLeft">
  <img src="image/<?php echo $rowthree['Filename']; ?>" style="width:100%" onclick="document.location='Bagian David/PromotioniPhone11.php'">
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
<img class="experiencedays" src="image/<?php echo $rowfour['Filename']; ?>" alt="Experience Days" width="25%" height="25%">
<img class="experiencedays" src="image/<?php echo $rowfive['Filename']; ?>" alt="Free Ongkir" width="25%" height="25%">
<img class="experiencedays" src="image/<?php echo $rowsix['Filename']; ?>" alt="Accessories" width="25%" height="25%" onclick="location.href='Bagian Tius/halamanaksesoris.php';">


<br><br>
<div>
<img src="image/<?php echo $rowseven['Filename']; ?>" alt="Toko Elektronik" width="100%" height="100%" onclick="document.location='Bagian Sanctus/About.php'">
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
    					  <p style="text-align:center; color:white; font-size: 10px">COPYRIGHT © 2020 SIGADGET. ALL RIGHTS RESERVED.</p>
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
							}
						}
					}
				}
			}
		}
	}

$conn->close();

?>
</body>
</html>