<?php
include "../sigadgetconnection.php";

session_start();

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: ../Bagian Migel/Halaman Samsung S20 Ultra.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="footer.php" rel="stylesheet">
  <style>
	#banner {
		overflow : hidden;
	  }
	  #banner figure
	  {
		  position: relative;
		  width : 500%;
		  margin : 0;
		  left : 0;
		  animation :5s slider infinite;
	  }
	  #slider figure img
	  {
		  width : 20%;
		  float : left;
	  }
	@keyframes slider {
		0% 
		{
			left : 0;
		}
		100%
		{
			left : -102%;
		}
	}
	.dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
	  .flex-container {
  display: flex;
  background-color: transparent;
  margin-left: 280px;
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
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

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

p1{
font-size: 30px;
}

p{
font-size: 15px;
}






  </style>
  <title>SI Gadget | Menjual Smartphone dan Aksesoris</title>
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
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetadminds.php'>Admins</a></li>";
																																																								echo "<li><a class='dropdown' href='../sigadgetregisterimage.php'>Pictures</a></li>";
																																																									}
																																																							}
																																																						?>
																																																						</ul>
																																																								</li>

        </ul>
    </div>
</nav>

<p style="text-align: center;margin-left:600px;">
	<img id= "foto" src ="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/2/13/48435890/48435890_17433489-391c-4128-9a77-73be0f2c12b8_710_710" style="position: relative; left: -300px;" alt= "samsung" width="300" value= "Change"> 
</p>

<h1 style="margin-left:300px;">Samsung Galaxy S20 Ultra</h1>
<h2 style="margin-left:300px;">Rp 21.000.000</h2>
<div style="margin-left:295px;">
	<span class="dot" style="background-color:grey ;"onclick="changeColor()"></span>
	<span class="dot" style="background-color:black ;"onclick="changeColor2()"></span>
	<span class="dot" style="background-color:pink ;"onclick="changeColor3()"></span>
</div>
<br>
	<select name="ram" id="ram" style="margin-left:300px;">
		<option value="2">12 GB</option>
		<option value="16">16 GB</option>
</select>
	<div style="margin-left:300px;margin-top: 15px;">
		<button hidden id="down" onclick="setQuantity('down');">-</button>
							<input hidden type="number" id="quantity" value="1" min="1" style="position:relative;left:5px;" readonly>
							<button hidden id="up" onclick="setQuantity('up');">+</button>
							<a href="../Bagian David/Keranjang Belanja/keranjangbelanjaS20Ultra.php" class="btn-cart">Beli</a>
</div>
<h1 style="margin-left:300px;margin-top: 30px;">Detail Produk</h1><br>
<div style="margin-left:300px;margin-top: 15px;">
	<p>Samsung Galaxy S20 Ultra memiliki layar Dynamic AMOLED 2X sebesar 6,9 inci dengan resolusi Quad HD Plus (1440 x 3200 piksel) serta kerapatan layar 511 ppi. Layarnya sudah mempunyai lapisan pelindung Corning Gorilla Glass 6 dengan fitur HDR 10+ dan refresh rate 120 Hz</p>
</div>
<h1 style="margin-left:300px;margin-top: 30px;">Isi Kotak</h1><br>
<div style="margin-left:300px;margin-top: 15px;">
	<ul>
		<li>Samsung S20</li>
		<li>Charger</li>
		<li>Kartu Garansi</li>
	</ul>
</div>
<h1 style="margin-left:300px;margin-top: 30px;">Spesifikasi</h1><br>
<div style="margin-left:300px;margin-top: 15px;">
	<p>Tipe Layar<span style="margin-left:300px;">Layar Retina HD</span></p>
	<p><span style="margin-left:370px;">Layar Lebar LCD</span></p>
	<p><span style="margin-left:370px;">Haptic Touch</span></p>
</div>
<br><br>
<div style="margin-left:300px;margin-top: 15px;">
	<p>Ukuran dan Berat<span style="margin-left:253px;">Tinggi 166.9 mm</span></p>
	<p><span style="margin-left:370px;">Lebar 76.0 mm</span></p>
	<p><span style="margin-left:370px;">Tebal 8.8 mm</span></p>
	<p><span style="margin-left:370px;">Berat 222 gram </span></p>
</div>
<br><br>
<div style="margin-left:300px;margin-top: 15px;">
	<p>Tahan Air,Cipratan,dan Debu<span style="margin-left:183px;">Level IP67 (kedalaman max 1 meter)</span></p>
</div>
<br><br>
<div style="margin-left:300px;margin-top: 15px;">
	<p>Chip<span style="margin-left:342px;">Exynos 990 Generasi Kelima</span></p>
</div>
<br><br>
<div style="margin-left:300px;margin-top: 15px;">
	<p>Kamera<span style="margin-left:320px;">Rear Camera - Resolution (Multiple) 108.0 MP + 12.0 MP + 48.0 MP + VGA</span></p>
	<p><span style="margin-left:374px;">Zoom 5x</span></p>
	<p><span style="margin-left:374px;">Flash True Zone</span></p>
	<p><span style="margin-left:374px;">Smart HDR</span></p>
</div>
<br>
<div style="margin-left:300px;margin-top: 15px;">
	<p>Perekaman VIdeo<span style="margin-left:255px;">Dapat Merekam video 4k pada speed 24,30,60 fps</span></p>
	<p><span style="margin-left:374px;">Dapat Merekam video HD 1080p speed 30 atau 60 fps</span></p>
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


<script>
	function changeColor() {
		var image = document.getElementById("foto");
		image.src = "https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6395/6395548cv11d.jpg";
		image.style.width="35%";
	}
</script>
		
<script>
	function changeColor2() {
		var image = document.getElementById("foto");
		image.src = "https://ecs7.tokopedia.net/img/cache/700/product-1/2020/2/13/48435890/48435890_17433489-391c-4128-9a77-73be0f2c12b8_710_710";
		image.style.width="35%";
	}
</script>
		
<script>
	function changeColor3() {
		var image = document.getElementById("foto");
		image.src = "https://p.ipricegroup.com/uploaded_1a8108fb2065b23770821cb2494adabb.jpg";
		image.style.width="35%";
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

</body>
</html>