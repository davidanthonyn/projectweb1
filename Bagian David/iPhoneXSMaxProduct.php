<?php
include "../sigadgetconnection.php";

session_start();

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: iPhoneXSMaxProduct.php');
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
  <title>iPhone XS Max | SI Gadget</title>
  <link rel="shortcut icon" type="image" href="../smartphone.png">
  </head>
<body>

<!----navigation--->
<nav class="navbar">
    <div class="navbar-left"  style="position: relative; left: 140px"><div class="logo" onclick="location.href='../home.php';"></div></div>
    <div class="navbar-right"  style="position: relative; left: 140px">
        <ul>
            <li><a href="Bagian David/iPhoneproducts.php">iPhone</a>
			<ul class="dropdown-list">
                    <li><a class="dropdown" href="../Bagian David/PromotioniPhoneSE.php">iPhone SE</a></li>
                    <li><a class="dropdown" href="../Bagian David/PromotioniPhone11Pro.php">iPhone 11 Pro</a></li>
					<li><a class="dropdown" href="../Bagian David/PromotioniPhone11.php">iPhone 11</a></li>
					<li><a class="dropdown" href="../Bagian David/PromotioniPhoneXS.php">iPhone XS</a></li>
					<li><a class="dropdown" href="../Bagian David/PromotioniPhoneXR.php">iPhone XR</a></li>
            </ul>
          </li>

                              	<li><a href="Bagian Migel/HalamanAndroid.php">Android</a>
																			<ul class="dropdown-list">
																					<li><a class="dropdown" href="../Bagian Migel/huawei.new.php">Huawei</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/samsungads.new.php">Samsung</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/xiaomi.new.php">Xiaomi</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/asus.new.php">ASUS</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/realme.php">Realme</a></li>
																				</ul>
                                  </li>
																																		<li><a href="Bagian Tius/halamanaksesoris.php">Aksesoris</a>
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
																																echo "<a href='Bagian David/account.php'>Login</a>";
																																} else if(!empty($_SESSION['account_username'])) {
																																	echo "<a>$_SESSION[account_username]</a>";
																																	echo "<ul class='dropdown-list'>";
																																	echo "<form method='GET' action='home.php' enctype='multipart/form-data'>";
																																	echo "<li><a class='dropdown' href='customaccount.php'>Account</a></li>";
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
																																																								echo "<a>Dashboard</a>";
																																																								echo "<ul class='dropdown-list'>";
																																																								echo "<li><a class='dropdown' href='sigadgettransactions.php'>Transactions</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetproducts.php'>Products</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetsales.php'>Sales</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetcourierdistributions.php'>Couriers & Distributions</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetcustomers.php'>Customers</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetadminds.php'>Admins</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetregisterimage.php'>Pictures</a></li>";
																																																									}
																																																							}
																																																						?>
																																																						</ul>
																																																								</li>

        </ul>
    </div>
</nav>
<p style="text-align:center; font-size: 15px; position: relative; left: -545px;">Home / iPhone XS</p>
<hr>

<!-----single product details------>

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="Gallery/iPhone/iPhone XS/iphone-xs-gold.png" width="100%" id="ProductImg">
			</div>
			<div class="col-2">
			<h1>iPhone XS Max</h1>
			<h4 id="demo">Rp. 17.999.000</h4>
				<button class="btn" style="background-color: #FBDFD4;" width="100%" onclick="changeGold()"></button>
				<button class="btn" style="background-color: #F2F2F2;" width="100%" onclick="changeSilver()"></button>
				<button class="btn" style="background-color: #4F5853;" width="100%" onclick="changeSpaceGrey()"></button>
				<br>
				<select id="mySelect" onchange="myFunction()">
					<option value="17.999.000">64 GB</option>
					<option value="20.999.000">256 GB</option>
					<option value="24.999.000">512 GB</option>
				</select>

				<br>
							<button hidden id="down" onclick="setQuantity('down');">-</button>
							<input hidden type="number" id="quantity" value="1" min="1" style="position:relative;left:5px;" readonly>
							<button hidden id="up" onclick="setQuantity('up');">+</button>
							<a href="../Bagian David/Keranjang Belanja/keranjangbelanjaiPhoneXSMax.php" class="btn-cart">Beli</a>
							<br><br>
							<h3>Detail Produk</h3>
							<p>Super Retina dalam dua ukuran - termasuk layar terbesar yang pernah ada di iPhone. Face ID yang lebih cepat lagi. Chip paling cerdas dan andal dalam ponsel pintar. Dan sebuah terobosan sistem kamera ganda. iPhone Xs adalah segala sesuatu yang anda sukai dari iPhone. Dibawa ke titik maksimum.</p>
							<br>
							
							<h3>Isi Kotak</h3>
							<ul>
							  <li>iPhone dengan iOS 14.</li>
							  <li>Kabel USB-C ke Lightning.</li>
							  <li>Buku Manual dan dokumentasi lain.</li>
							</ul> 
							<br>
							
							
							<h3>Spesifikasi</h3><hr>
							<table style="width:167%">
								  <tr>
									<td>Tipe Layar</td>
									<td>Layar Super Retina HD</td>
								  </tr>
									  <tr>
										<td></td>
										<td>Layar OLED Multi-Touch sepenuhnya 6,5 inci (diagonal)</td>
									  </tr>
										<tr>
											<td></td>
											<td>Layar HDR</td>
										  </tr>
										  <tr>
											<td></td>
											<td>Resolusi 2436 x 1125 piksel pada 458 ppi</td>
										  </tr>
											  <tr>
												<td></td>
												<td>Rasio kontras 1.000.000:1 (umum)</td>
											  </tr>
												  <tr>
													<td></td>
													<td>Layar True Tone</td>
												  </tr>
													<tr>
													<td></td>
													<td>Layar warna luas (P3)</td>
													</tr>
														<tr>
														<td></td>
														<td>3D Touch</td>
														</tr>
															<tr>
															<td></td>
															<td>Kecerahan maks 625 nit (umum)</td>
															</tr>
															</table>
															<hr><br>
															
															<table style="width:54%">
																		<tr>
																		<td>Ukuran dan Berat</td>
																		<td>Tinggi 143,6 mm</td>
																	  </tr>
																		  <tr>
																			<td></td>
																			<td>Lebar 70,9 mm</td>
																		  </tr>
																			  <tr>
																				<td></td>
																				<td>Tebal 7,7 mm</td>
																			  </tr>
																				  <tr>
																					<td></td>
																					<td>Berat 177 gram</td>
																				  </tr>
															</table>
															<hr><br>
															
																<table style="width:115%">
																		<tr>
																		<td>Tahan Air, Cipratan, dan Debu</td>
																		<td>Level IP68 (kedalaman maksimum 2 meter hingga selama 30 menit) menurut standar IEC 60529</td>
																	  </tr>														
																</table>
																<hr><br>
																
																<table style="width:193%">
																		<tr>
																		<td>Chip</td>
																		<td>A12 Bionic</td>
																	  </tr>
																			<tr>
																					<td></td>
																					<td>Neural Engine generasi kedua</td>
																				  </tr>
																</table>
																<hr><br>
																
																		<table style="width:385%">
																		<tr>
																		<td>Kamera</td>
																		<td>Kamera ganda 12 MP Wide dan Telefoto</td>
																	  </tr>
																	  <tr>
																		<td></td>
																		<td>Wide: bukaan ƒ/1.8</td>
																	  </tr>
																		  <tr>
																			<td></td>
																			<td>Telefoto: bukaan ƒ/2.4</td>
																		  </tr>
																		  <tr>
																				<td></td>
																				<td>Penstabilan gambar optik ganda</td>
																			  </tr>
																			  <tr>
																				<td></td>
																				<td>Zoom optik 2x memperbesar; zoom digital hingga 10x</td>
																			  </tr>
																			  <tr>
																				<td></td>
																				<td>Flash True Tone dengan Slow Sync</td>
																			  </tr>
																				<tr>
																				<td></td>
																				<td>Mode Potret dengan bokeh yang disempurnakan dan Depth Control</td>
																				</tr>
																							<tr>
																							<td></td>
																							<td>Pencahayaan Potret dengan enam efek (Alami, Studio, Kontur, Panggung, Panggung Mono, High-Key Mono)</td>
																							</tr>
																							<tr>
																							<td></td>
																							<td>Smart HDR untuk foto</td>
																							</tr>
																						</table>
																						<hr><br>
																			
																			<table style="width:139%">
																					<tr>
																					<td>Perekaman Video</td>
																					<td>Mampu merekam video 4K pada kecepatan 24 fps, 30 fps, atau 60 fps</td>
																				  </tr>
																						<tr>
																						<td></td>
																						<td>Mampu merekam video HD 1080p pada kecepatan 30 fps atau 60 fps</td>
																						</tr>
																							<tr>
																							<td></td>
																							<td>Rentang dinamis yang diperluas untuk video hingga kecepatan 30 fps</td>
																							</tr>
																							<tr>
																							<td></td>
																							<td>Penstabilan gambar optik untuk video</td>
																							</tr><tr>
																							<td></td>
																							<td>Zoom optik 2x memperkecil; zoom digital hingga 3x</td>
																							</tr><tr>
																							<td></td>
																							<td>Dukungan video slo-mo untuk 1080p pada kecepatan 120 fps atau 240 fps</td>
																							</tr><tr>
																							<td></td>
																							<td>Video selang waktu dengan penstabilan</td>
																							</tr><tr>
																							<td></td>
																							<td>Perekaman stereo</td>
																							</tr>
																				  </table>
																				  <hr><br>
																				  
																						<table style="width:220%">
																					<tr>
																					<td>Kamera Depan</td>
																					<td>Kamera TrueDepth</td>
																				  </tr>
																						<tr>
																						<td></td>
																						<td>Foto 7 MP</td>
																						</tr>
																							<tr>
																							<td></td>
																							<td>Bukaan ƒ/2.2</td>
																							</tr>
																							<tr>
																							<td></td>
																							<td>Retina Flash</td>
																							</tr><tr>
																							<td></td>
																							<td>Smart HDR untuk foto</td>
																							</tr><tr>
																							<td></td>
																							<td>Mode Potret dengan bokeh yang disempurnakan dan Depth Control</td>
																							</tr><tr>
																							<td></td>
																							<td>Pencahayaan Potret dengan enam efek (Alami, Studio, Kontur, Panggung, Panggung Mono, High-Key Mono)</td>
																							</tr><tr>
																							<td></td>
																							<td>Rentang dinamis yang diperluas untuk video hingga kecepatan 30 fps</td>
																							</tr><tr>
																							<td></td>
																							<td>Penstabilan video sinematik (1080p dan 720p)</td>
																							</tr><tr>
																							<td></td>
																							<td>Mampu merekam video 4K pada kecepatan 24 fps, 30 fps, atau 60 fps</td>
																							</tr><tr>
																							<td></td>
																							<td>Mampu merekam video HD 1080p pada kecepatan 30 fps atau 60 fps</td>
																							</tr><tr>
																							<td></td>
																							<td>Animoji dan Memoji</td>
																							</tr>
																				  </table>
																				  <hr><br>
																				  
																					<table style="width:82%">
																					<tr>
																					<td>Seluler dan Nirkabel</td>
																					<td>GSM/EDGE</td>
																				  </tr>
																						<tr>
																						<td></td>
																						<td>UMTS/HSPA+</td>
																						</tr>
																							<tr>
																							<td></td>
																							<td>DC-HSDPA</td>
																							</tr><tr>
																							<td></td>
																							<td>CDMA EV-DO Rev. A (beberapa model)</td>
																							</tr><tr>
																							<td></td>
																							<td>LTE kelas Gigabit</td>
																							</tr><tr>
																							<td></td>
																							<td>Wi-Fi 802.11ax dengan MIMO</td>
																							</tr><tr>
																							<td></td>
																							<td>Bluetooth 5.0</td>
																							</tr><tr>
																							<td></td>
																							<td>GPS/GNSS bawaan</td>
																							</tr><tr>
																							<td></td>
																							<td>NFC dengan mode pembaca</td>
																							</tr><tr>
																							<td></td>
																							<td>Kartu Express dengan penghematan daya</td>
																							</tr>
																				  </table>
																				  <hr><br>
																				  
																				  <table style="width:111%">
																					<tr>
																					<td>Autentikasi Aman</td>
																					<td>Face ID</td>
																				  </tr>
																						<tr>
																					<td></td>
																					<td>Hadir berkat kamera TrueDepth untuk pengenalan wajah</td>
																				  </tr>
																				</table>
																				<hr><br>
																				
																				<table style="width:175%">
																					<tr>
																					<td>Panggilan Video</td>
																					<td>Video FaceTime</td>
																				  </tr>
																						<tr>
																					<td></td>
																					<td>Memulai panggilan video melalui Wi-Fi atau seluler ke perangkat berkemampuan FaceTime</td>
																				  </tr>
																				</table>
																				<hr><br>
																				
																				<table style="width:175%">
																					<tr>
																					<td>Panggilan Audio</td>
																					<td>Audio FaceTime</td>
																				  </tr>
																						<tr>
																					<td></td>
																					<td>Memulai panggilan audio melalui Wi-Fi atau seluler ke perangkat berkemampuan FaceTime</td>
																				  </tr>
																				</table>
																				<hr><br>
																				
																				<table style="width:100%">
																					<tr>
																					<td>Pemutaran Audio</td>
																					<td>Pemutaran stereo dengan jangkauan lebih lebar</td>
																				  </tr>
																				</table>
																				<hr><br>
																				
																				<table style="width:120%">
																					<tr>
																					<td>Pemutaran Video</td>
																					<td>High Dynamic Range dengan Dolby Vision dan konten HDR10</td>
																				  </tr>
																				</table>
																				<hr><br>
																				
																				<table style="width:133%">
																					<tr>
																					<td>Daya dan Baterai</td>
																					<td>Dengan waktu pakai hingga 30 menit lebih lama dibanding iPhone X</td>
																				  </tr>
																						<tr>
																						<td></td>
																						<td>Baterai lithium-ion bawaan yang dapat diisi ulang</td>
																						</tr>
																							<tr>
																							<td></td>
																							<td>Pengisian daya nirkabel</td>
																							</tr><tr>
																							<td></td>
																							<td>Mengisi daya melalui USB ke sistem komputer atau adaptor daya</td>
																							</tr><tr>
																				  </table>
																				  <hr><br>
																				  
																				  <table style="width:113%">
																					<tr>
																					<td>Sensor</td>
																					<td>Gyro tiga sumbu</td>
																				  </tr>
																						<tr>
																						<td></td>
																						<td>Akselerometer</td>
																						</tr>
																							<tr>
																							<td></td>
																							<td>Sensor kedekatan jarak</td>
																							</tr><tr>
																							<td></td>
																							<td>Sensor cahaya sekitar</td>
																							</tr><tr>
																							<td></td>
																							<td>Barometer</td>
																							</tr>
																				  </table>
																				  <hr><br>
																				  
																				  
																				  <table style="width:163%">
																					<tr>
																					<td>Kartu SIM</td>
																					<td>SIM ganda (nano-SIM dan eSIM)</td>
																				  </tr><tr>
																					<td></td>
																					<td>Tidak kompatibel dengan kartu micro-SIM yang ada</td>
																				  </tr>
																				</table>
																				<hr><br>
																				  
																				  <table style="width:55%">
																					<tr>
																					<td>Konektor</td>
																					<td>Lightning</td>
																				  </tr>
																				</table>
																				<hr><br>
																				
																				<table style="width:54%">
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
<div class="col-4" onclick="location.href='iPhoneSEProducts.php';">
		<img src="Gallery/iPhone/iPhone SE/iPhoneSEDisplay.png">
		<h4>iPhone SE</h4>
		<p>Rp 7.999.000</p>
	</div>
	<div class="col-4" onclick="location.href='iPhone11ProMaxProduct.php';">
		<img src="Gallery/iPhone/iPhone 11 Pro/apple_iphone_11_pro_max_space_grey_1_6_1.jpg">
		<h4>iPhone 11 Pro Max</h4>
		<p>Rp 22.999.000</p>
	</div>
	<div class="col-4" onclick="location.href='iPhone11ProProduct.php';">
		<img src="Gallery/iPhone/iPhone 11 Pro/apple_iphone_11_pro_space_grey_1_4_1_1.jpg">
		<h4>iPhone 11 Pro</h4>
		<p>Rp 18.999.000</p>
	</div>
	<div class="col-4" onclick="location.href='iPhone11Product.php';">
		<img src="Gallery/iPhone/iPhone 11/apple_iphone_11_black_1_2_1_1_1.jpg">
		<h4>iPhone 11</h4>
		<p>Rp 11.499.000</p>
	</div>
	<div class="col-4" onclick="location.href='iPhoneXSProduct.php';">
		<img src="Gallery/iPhone/iPhone XS/iphone-xs-gold_1_1_1_4_2.jpg">
		<h4>iPhone XS</h4>
		<p>Rp 12.999.000</p>
	</div>
	<div class="col-4" onclick="location.href='iPhoneXRProduct.php';">
		<img src="Gallery/iPhone/iPhone XR/iphone-xr-blue_1_1_1_6_1.jpg">
		<h4>iPhone XR</h4>
		<p>Rp 10.999.000</p>
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
    					  <p style="text-align:center; color:white; font-size: 10px">COPYRIGHT © 2020 SIGADGET. ALL RIGHTS RESERVED.</p>
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
function changeGold() {
ProductImg.src = "Gallery/iPhone/iPhone XS/iphone-xs-max-gold.png";
}

function changeSilver() {
ProductImg.src = "Gallery/iPhone/iPhone XS/iphone-xs-max-silver.png";
}

function changeSpaceGrey() {
ProductImg.src = "Gallery/iPhone/iPhone XS/iphone-xs-max-space-gray.png";
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