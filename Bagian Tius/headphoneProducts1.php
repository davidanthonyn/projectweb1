<?php
include "../sigadgetconnection.php";

session_start();

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: ../Bagian Tius/headphoneProducts1.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link href="styles.php" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="footer.php" rel="stylesheet">
  <style> 
	body {
	font-family: 'Roboto', sans-serif;
	}
	
		.logo{
		background-image: url(../smartphone.png);
		width: 40px;
		margin: 4px 14px;
		height: 40px;
		background-size: 40px 40px;
		border: solid 2px #666;
		border-radius: 50px;
		background-color: #fff;
		href: url(home.php);
		}

			.navbar-left{
				float:left;
			}

			.navbar{width: 100%;
				height:51px;
				background:#000000;
			}
 
			.navbar ul{
				float:left;
				margin:0;
				padding:0;
			}

			.navbar li{
				float:left;
				list-style:none;
				margin:0;
				padding:0;
			}

			.navbar li a, .navbar li a:link {
				float: left;
				padding: 17px 12px;
				color: #fff;
				text-decoration: none;
				position: relative;
				font-family: 'Roboto', sans-serif;
				font-size: 14px;
			}

			.navbar li a:hover{
				background: #ddd;
				color: #444;
			}

			.navbar li li a, .navbar li li a:link {
				text-decoration: none;
				font-size: 16px;
				background: #444;
				color: #fff;
				width: 108px;
				padding: 0px 0px 0 12px;
				font-size: 12px;
				line-height: 35px;
			}

			.navbar li li a:hover{
				background: #ddd;
				color: #444
			}

			.navbar li ul{
				z-index:9999;
				position:absolute;
				left:-999em;
				height:auto;
				width:108px;
				margin-top:50px;
				border:1px solid #666;
			}

			.navbar li:hover ul,
			.navbar li li:hover ul,
			.navbar li li li:hover ul{left:auto;}
			.navbar li:hover{position:auto;}

			li a#dropdown{
				width: 100%;
				height: 50%;
				background-color: #9BC7D3;
				padding-left :5px;
			}

					* {box-sizing: border-box}
					body {font-family: 'Roboto', sans-serif; margin:0;}
					.mySlides {display: none}
					img {vertical-align: middle;}

					/* Slideshow container */
					.slideshow-container {
					  position: relative;
					  margin: auto;
					}

					/* Next & previous buttons */
					.prev, .next {
					  cursor: pointer;
					  position: absolute;
					  top: 50%;
					  width: auto;
					  padding: 16px;
					  margin-top: -22px;
					  color: white;
					  font-weight: bold;
					  font-size: 18px;
					  transition: 0.6s ease;
					  border-radius: 0 3px 3px 0;
					  user-select: none;
					}

					/* Position the "next button" to the right */
					.next {
					  right: 0;
					  border-radius: 3px 0 0 3px;
					}

					/* On hover, add a black background color with a little bit see-through */
					.prev:hover, .next:hover {
					  background-color: rgba(0,0,0,0.8);
					}

					/* Caption text */
					.text {
					  color: #f2f2f2;
					  font-size: 15px;
					  padding: 8px 12px;
					  position: absolute;
					  bottom: 8px;
					  width: 100%;
					  text-align: center;
					}

					/* Number text (1/3 etc) */
					.numbertext {
					  color: #f2f2f2;
					  font-size: 12px;
					  padding: 8px 12px;
					  position: absolute;
					  top: 0;
					}

					/* The dots/bullets/indicators */
					.dot {
					  cursor: pointer;
					  height: 15px;
					  width: 15px;
					  margin: 0 2px;
					  background-color: #bbb;
					  border-radius: 50%;
					  display: inline-block;
					  transition: background-color 0.6s ease;
					}

					.active, .dot:hover {
					  background-color: #717171;
					}

					/* Fading animation */
					.fade {
					  -webkit-animation-name: fade;
					  -webkit-animation-duration: 1.5s;
					  animation-name: fade;
					  animation-duration: 1.5s;
					}

					@-webkit-keyframes fade {
					  from {opacity: .4} 
					  to {opacity: 1}
					}

					@keyframes fade {
					  from {opacity: .4} 
					  to {opacity: 1}
					}

					/* On smaller screens, decrease text size */
					@media only screen and (max-width: 300px) {
					  .prev, .next,.text {font-size: 11px}
					}

					.text {
					  color: #f2f2f2;
					  font-size: 15px;
					  padding: 8px 12px;
					  position: absolute;
					  bottom: 8px;
					  width: 100%;
					  text-align: center;
					}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.row {
display: flex;
align-items: center;
flex-wrap: wrap;
justify-content: space-around;
} 

.categories {
margin: 5px 0;
}

.small-container {
max-width: 60%;
margin: auto;
}

.col-4 {
flex-basis: 20%;
min-width: 100px;
margin-left: 5%;
margin-bottom: 20px;
transition: transform 0.5s;
border-style: ridge;
}

.col-4 img {
	width: 100%;
}

h4 {
color: #555;
font-weight: normal;
}

.col-4 p {
	font-size: 14px;
}

.col-4:hover {
	transform: translateY(-5px);
}

.btn-cart {
  border: none;
  outline: 0;
  padding: 10px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 15px;
}

ul.no-bullets {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

  </style>
  <title>Headphone | SI Gadget</title>
  <link rel="shortcut icon" type="image" href="../smartphone.png">
  </head>
<body>

<!----navigation--->
<nav class="navbar">
    <div class="navbar-left"  style="position: relative; left: 140px"><div class="logo animate__animated animate__fadeInDown" onclick="location.href='../home.php';"></div></div>
    <div class="navbar-right"  style="position: relative; left: 140px">
        <ul>
            <li><a href="../Bagian David/iPhoneproducts.php">iPhone</a>
			<ul class="dropdown-list">
                    <li><a class="dropdown" href="../Bagian David/PromotioniPhoneSE.php">iPhone SE</a></li>
                    <li><a class="dropdown" href="../Bagian David/PromotioniPhone11Pro.php">iPhone 11 Pro</a></li>
					<li><a class="dropdown" href="../Bagian David/PromotioniPhone11.php">iPhone 11</a></li>
					<li><a class="dropdown" href="../Bagian David/PromotioniPhoneXS.php">iPhone XS</a></li>
					<li><a class="dropdown" href="../Bagian David/PromotioniPhoneXR.php">iPhone XR</a></li>
            </ul>
          </li>

                              	<li><a href="../Bagian David/androidproducts.php">Android</a>
																			<ul class="dropdown-list">
																					<li><a class="dropdown" href="../Bagian Migel/huawei.new.php">Huawei</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/samsungads.new.php">Samsung</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/xiaomi.new.php">Xiaomi</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/asus.new.php">ASUS</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/realme.php">Realme</a></li>
																				</ul>
                                  </li>
																																		<li><a href="../Bagian David/accessoriesproducts.php">Aksesoris</a>
																																		<ul class="dropdown-list">
																																				<li><a class="dropdown" href="../Bagian Tius/headphone.php">Headphone</a></li>
																																				<li><a class="dropdown" href="../Bagian Tius/wirelesscharger.php">Powerbank</a></li>
																																				<li><a class="dropdown" href="../Bagian Tius/aksesorislain.php">Aksesoris Lain</a></li>
																																			</ul>
                                                                    </li>

																																																			<li><a href="../Bagian Sanctus/eventpromo.php">Event and Promo</a>

																																																													<li><a href="#">Layanan</a>
																																																														<ul class="dropdown-list">
																																																															<li><a class="dropdown" href="../Bagian Sanctus/About.php">About</a></li>
																																																															<li><a class="dropdown" href="../Bagian Sanctus/lokasitoko.php">Lokasi Toko</a></li>
																																																															<li><a class="dropdown" href="../Bagian Sanctus/repair.php">Repair</a></li>
																																																														</ul>

                                                                                                                            <li>
																															<?php
																															if(empty($_SESSION['account_username'])) {
																																echo "<a href='../Bagian David/account.php'>Login</a>";
																																} else if(!empty($_SESSION['account_username'])) {
																																	echo "<a><strong>$_SESSION[account_username]</strong></a>";
																																	echo "<ul class='dropdown-list'>";
																																	echo "<form method='GET' action='../home.php' enctype='multipart/form-data'>";
																																	echo "<li><a class='dropdown' href='../customaccount.php'>Account</a></li>";
																																	echo "<li><input class='dropdown' type='submit' name='logout' value='Logout'></a></li>";
																																	echo "</form>";
																																	
																																}
																															?>
																															</ul>
																																																			<li>
																																																						<?php
																																																						if(empty($_SESSION['account_username'])) {
																																																							} else if(!empty($_SESSION['account_username'])) {
																																																									if(!empty($_SESSION['account_userlevel']) && $_SESSION['account_userlevel']=='admin') {
																																																								echo "<a href='sigadgetdashboard.php'>Dashboard</a>";
																																																								echo "<ul class='dropdown-list'>";
																																																								echo "<li><a class='dropdown' href='../sigadgettransactions.php'>Transactions</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetproducts.php'>Products</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetsales.php'>Sales</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetcourierdistributions.php'>Couriers & Distributions</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetcustomers.php'>Customers</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetadmins.php'>Admins</a></li>";
																																																								echo "<li><a class='dropdown' href='../sigadgetregisterimage.php'>Pictures</a></li>";
																																																									}
																																																							}
																																																						?>
																																																						</ul>
																																																								</li>

        </ul>
    </div>
</nav>
<p style="text-align:center; font-size: 15px; position: relative; left: -545px;">Home / Headphone</p>
<hr>

<!-----single product details------>

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="(HEADPHONE)Beats%20Solo%20Pro%20Wireless.jpg" width="100%" id="ProductImg">
			</div>
			<div class="col-2">
			<h1>Headphone Beats Solo Pro Wireless <br>  Noise Cancelling Headphone - Gray</h1>
			<h4 id="demo">Rp 4.219.388,50</h4>
			
				<br>
							<button hidden id="down" onclick="setQuantity('down');">-</button>
							<input hidden type="number" id="quantity" value="1" min="1" style="position:relative;left:5px;" readonly>
							<button hidden id="up" onclick="setQuantity('up');">+</button>
							<a href="../Bagian David/Keranjang Belanja/keranjangbelanjaHeadphoneBeats.php" class="btn-cart">Beli</a>
							<br><br>
							<h3>Detail Produk</h3>
							<p>Dapatkan inspirasi dengan headphone nirkabel Solo Pro. Untuk menghasilkan suara sesuai keinginan Anda, Solo Pro memiliki dua mode mendengarkan: Active Noise Cancelling (ANC) dan mode Transparansi. Beats 'Pure ANC memberi Anda ruang untuk berkreasi dengan suara yang sepenuhnya imersif, sementara mode Transparansi membantu Anda tetap sadar akan lingkungan sekitar Anda. Setiap detail Solo Pro telah dipertimbangkan dengan cermat, hingga cara intuitif menghidupkan dan mematikan headphone melalui lipatan. Desain ergonomis memberikan kenyamanan luar biasa untuk pemakaian lama dan gaya ramping. Dan dengan masa pakai baterai hingga 22 jam, Anda dapat terus memutar musik ke mana pun hari Anda membawa Anda.</p>
							<br>
							
							<h3>Isi Kotak</h3>
							<ul>
							  <li>Headphone Nirkabel Solo Pro.</li>
							  <li>Tas jinjing</li>
							  <li>Kabel pengisi daya Lightning ke USB-A</li>
                                <li>Panduan memulai cepat</li>
                                <li>Kartu garansi</li>
							</ul> 
							<br>
							
							
							<h3>Spesifikasi</h3><hr>
							<table style="width:200%">
								  <tr>
									<td>Teknis</td>
									<td>Faktor Bentuk: Di Telinga</td>
                                </tr>
									  <tr>
										<td></td>
										<td>Koneksi: Bluetooth, Nirkabel</td>
									  </tr>
								 
									  <tr>
										<td></td>
										<td>Sumber Daya: Baterai</td>
									  </tr>
										  <tr>
											<td></td>
											<td>Baterai: lithium-ion yang dapat diisi ulang</td>
										  </tr>
											  <tr>
												<td></td>
												<td>Tinggi: 7,05 inci / 17,9 cm</td>
											  </tr>
												  <tr>
													<td></td>
													<td>Berat: 9,42 oz./267 g</td>
												 
															</tr>
															</table>
															<hr><br>														
																				<table style="width:55%">
																					<tr>
																					<td>Brand</td>
																					<td>Apple</td>
																				  </tr>
																				</table>
																				<hr><br>
																				  
</ul>
			</div>
		</div>
	</div>

<!-----featured categories------>
<div class="categories">
	<div class="row">
		<div class="col-3"></div>
</div>
</div>

<!-----featured products------>
<h2 style="text-align: Center;">Produk Terkait</h2>
<hr>
<div class="small-container">
<div class="row">
<div class="col-4" onclick="location.href='headphoneProducts1.php';">
		<img src="(HEADPHONE)Beats%20Solo3%20Wireless%206.jpg">
		<h4>Headphone Beats Solo 3 Wireless</h4>
		<p>Rp 2.808.188,50</p>
	</div>
	<div class="col-4" onclick="location.href='headphoneProducts1.php';">
		<img src="(HEADPHONE)11.jpg">
		<h4>Headphone Beats Pro Over</h4>
		<p>Rp 2.808.188,50</p>
	</div>
	<div class="col-4" onclick="location.href='headphoneProducts1.php';">
		<img src="(HEADPHONE)Beats%20Solo3%20Wireless.jpg">
		<h4>Beats Studio3 Wireless</h4>
		<p>Rp 2.808.188,50</p>
	</div>	<div class="col-4" onclick="location.href='headphoneProducts1.php';">
		<img src="(HEADPHONE)7.jpg">
		<h4>AirPods Pro</h4>
		<p>Rp 2.101.188,50</p>
	</div>	<div class="col-4" onclick="location.href='headphoneProducts1.php';">
		<img src="(HEADPHONE)8.jpg">
		<h4>AirPods With Wireless Charging Case</h4>
		<p>Rp 2.808.188,50</p>
	</div>
	<div class="col-4" onclick="location.href='headphoneProducts1.php';">
		<img src="(HEADPHONE)10.jpg">
		<h4>Powerbeats Pro <br> Totally Wireless Earphones</h4>
		<p>Rp 3.513.763,50</p>
	</div>
    	<div class="col-4" onclick="location.href='headphoneProducts1.php';">
		<img src="(HEADPHONE)Beats%20Solo3%20Wireless.jpg">
		<h4>Headphone Beats Pro Over</h4>
		<p>Rp 2.808.188,50</p>
	</div>
	</div>
</div>

<!--Footer adalah Kaki website, Footer biasa sebagai "Informasi tambahan yang bersifat penting dan yang harus
    ditempatkan di setiap halaman", Footer isinya bisa apa saja, yang memang penting-->
    <div class="newsletter">
    	<p class="animate__animated animate__fadeInDown" style="text-align:center; color:white; font-size: 15px; position: relative; right: 200px">Mari berlangganan newsletter untuk mendapatkan informasi terbaru
    		<input class="animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="text" id="email" name="email" size="60">
    		<input class="button animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="submit" value="KIRIM">
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

<!----js for toggle menu--->
<script>
	var MenuItems = document.getElementById("MenuItems");
	
	MenuItems.style.maxHeight = "0px";
	
	function menutoggle(){
		if(MenuItems.style.maxHeight == "0px")
			{
				MenuItems.style.maxHeight = "200px";
			}
		else
			{
				MenuItems.style.maxHeight = "0px";
			}
	}
</script>

<!----js for product gallery---->
<script>
	var ProductImg = document.getElementById("ProductImg");
		var SmallImg = document.getElementsByClassname("small-img");
		
			SmallImg[0].onclick = function() {
				ProductImg.src = SmallImg[0].src;
			}
			
			SmallImg[1].onclick = function() {
				ProductImg.src = SmallImg[1].src;
			}
			
			SmallImg[2].onclick = function() {
				ProductImg.src = SmallImg[2].src;
			}
			
			SmallImg[3].onclick = function() {
				ProductImg.src = SmallImg[3].src;
			}
</script>
<script>
function setQuantity(upordown) {
    var quantity = document.getElementById('quantity');
    if (quantity.value > 1) {
        if (upordown == 'up'){++document.getElementById('quantity').value;}
        else if (upordown == 'down'){--document.getElementById('quantity').value;}}
    else if (quantity.value == 1) {
        if (upordown == 'up'){++document.getElementById('quantity').value;}}
    else
        {document.getElementById('quantity').value=1;}
}
</script>
<script>
function changeRED() {
ProductImg.src = "Gallery/iPhone/iPhone SE/iPhoneSEDisplayRED.png";
}

function changeBLACK() {
ProductImg.src = "Gallery/iPhone/iPhone SE/iPhoneSEDisplayBLACK.png";
}

function changeWhite() {
ProductImg.src = "Gallery/iPhone/iPhone SE/iPhoneSEDisplay.png";
}
</script>

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "Rp. " + x;
}
</script>


</body>
</html>