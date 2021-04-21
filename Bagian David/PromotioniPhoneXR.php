<?php
include "../sigadgetconnection.php";

session_start();

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: PromotioniPhoneXR.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="styles.css" rel="stylesheet">
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

#backgroundhitam {
background-color: Black;
}

#backgroundputih {
background-color: White;
}

table {
  margin-left: auto; 
  margin-right: auto;
}

.judul {
text-align:center;
color: white;
}


.glow-on-hover {
    width: 120px;
    height: 40px;
	border: 1px solid white;
	border-collapse: collapse;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
	display: block;
	margin: 0 auto;
}

	.glow-on-hover:before {
		content: '';
		background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
		position: absolute;
		top: -2px;
		left:-2px;
		background-size: 400%;
		z-index: -1;
		filter: blur(5px);
		width: calc(100% + 4px);
		height: calc(100% + 4px);
		animation: glowing 20s linear infinite;
		opacity: 0;
		transition: opacity .3s ease-in-out;
		border-radius: 10px;
	}

		.glow-on-hover:active {
			color: #000
		}

			.glow-on-hover:active:after {
				background: transparent;
			}

				.glow-on-hover:hover:before {
					opacity: 1;
				}

					.glow-on-hover:after {
						z-index: -1;
						content: '';
						position: absolute;
						width: 100%;
						height: 100%;
						background: #111;
						left: 0;
						top: 0;
						border-radius: 10px;
					}

						@keyframes glowing {
							0% { background-position: 0 0; }
							50% { background-position: 400% 0; }
							100% { background-position: 0 0; }
						}

<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </style>
  <title>iPhone XR | SI Gadget</title>
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
<p style="text-align:center; font-size: 15px; position: relative; left: -532px;">Home / iPhone XR</p>
<hr>

<table style="width:80%">

<tr id="backgroundhitam">
<td>
<h2 class="judul" style="font-size: 30px;">iPhone XR</h2><br>
<h1 class="judul" style="font-size: 50px;">Luar biasa. Luar dalam.</h1>
<center>
<img src="Gallery/iPhone/iPhone XR/iphone-xr_2.webp" alt="iPhone XR" width="30%" height="100%">
</center>

<h2 class="judul">Liquid Retina yang sepenuhnya baru - LCD tercanggih di industri ponsel. Face ID yang lebih cepat lagi. Chip paling cerdas dan Andal dalam ponsel pintar. Dan sebuah terobosan sistem kamera. iPhone Xr. Sangat mengagumkan dari sisi mana pun Anda melihatnya.</h2>
<br>

<button class="glow-on-hover" type="button" href="" onclick="location.href='iPhoneXRProduct.php';">Beli Sekarang</button>
<br>

<img src="Gallery/iPhone/iPhone XR/iphone-xr.webp" alt="iPhone XR" width="100%" height="75%">
<h1 class="judul" style="font-size: 25px;">Memperkenalkan layar Liquid Retina.</h1>
<h2 style="font-size: 25px; color: #397DDD; text-align:Center;">Layar baru di iPhone XR adalah LCD tercanggih di industri ponsel. Berkat desain lampur latar yang inovatif, layar dapat terbentang hingga ke semua sudutnya. Jadi, Anda melihat warna seindah aslinya dari satu tepi sampai ke tepi lainnya.</h2>
<br><br>

<img src="Gallery/iPhone/iPhone XR/iPhone-XR-web_3.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">

<h1 class="judul">Layar sepenuhnya yang membedakannya. Lihat </h1>
<h1 class="judul">betapa banyak ruang untuk melakukan semua</h1>
<h1 class="judul">yang Anda sukai.</h1>

<img src="Gallery/iPhone/iPhone XR/iPhone-XR-web_4.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">

<h1 style="color: #FFFFFF; text-align: center;">Terbuat dari yang terbaik.</h1>
<h1 style="color: #CD5546; text-align: center;">Kaca depan terkuat yang pernah ada di ponsel pintar.</h1>
<h1 style="color: #CD5546; text-align: center;"> Tepian aluminium sekelas industri dirgantara yang dikerjakan menggunakan mesin secara presisi.</h1>
<h1 style="color: #CD5546; text-align: center;">Tahan air dan debu.</h1>
<h1 style="color: #CD5546; text-align: center;">Dan enam warna baru yang memukau.</h1>

<img src="Gallery/iPhone/iPhone XR/iPhone-XR-web_7.jpg" alt="detail iPhone 11 Pro" width="100%" height="100%">

<h1 class="judul">Baja tahan karat sekelas alat bedah medis.</h1>
<p style="color: white; text-align: center;">Apple menggunakan logam paduan khusus yang diproses menggunakan mesin secara presisi untuk menciptakan tepian struktural dalam tiga warna.</p><br><br>
<h1 class="judul">Pemrosesan warna PVD.</h1>
<p style="color: white; text-align: center;">Warna emas dan abu-abu menggunakan proses deposisi uap fisik (PVD) canggih pada tepian baja tahan karat untuk menghasilkan warna dan reflektivitas yang berpadu menawan dengan kaca.</p><br><br>
<h1 class="judul">Pengisian daya nirkabel.</h1>
<p style="color: white; text-align: center;">Kaca belakang memungkinkan pengisian daya iPhone XR secara nirkabel. Dan daya terisi lebih cepat dibanding iPhone X.</p><br><br>

<h1 style="color: #7A98D8; text-align: center;">Face ID canggih. Keamanan menjadi sederhana ketika wajah</h1>
<h1 style="color: #7A98D8; text-align: center;">Anda adalah kata sandi Anda. Anda dapat membuka kunci iPhone</h1>
<h1 style="color: #7A98D8; text-align: center;">dan masuk ke aplikasi, akun, dan lainnya dengan menatap sekilas.</h1>
<h1 style="color: #7A98D8; text-align: center;">Inilah autentikasi wajah paling aman yang pernah ada di ponsel pintar. </h1>
<h1 style="color: #7A98D8; text-align: center;">Dan kini bekerja lebih cepat lagi.</h1>

<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_9_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">

<h1 style="color: #FEE9E0; text-align: center;">A12 Bionic yang sangat cerdas.</h1><br>
<h2 style="color: #EA9F71; text-align: center;">Inilah chip paling cerdas dan andal dalam ponsel pintar,</h2>
<h2 style="color: #EA9F71; text-align: center;">dengan Neural Engine Apple generasi berikutnya.</h2>
<h2 style="color: #DC6651; text-align: center;">Untuk pengalaman Augmented Reality yang luar biasa.</h2>
<h2 style="color: #F6767F; text-align: center;">Potret memukau dengan Depth Control. Serta kecepatan</h2>
<h2 style="color: #F6767F; text-align: center;">dan kelancaran dalam segala hal yang Anda lakukan.</h2>

<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_11_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">
<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_12_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">

<h1 style="color: #FEE9E0; text-align: center;">Terobosan sistem kamera ganda.</h1><br>
<h2 style="color: #EA9F71; text-align: center;">Kamera paling populer di dunia kini menandai era baru fotografi.</h2>
<h2 style="color: #EA9F71; text-align: center;">Saat sensor inovatif bekerja dengan ISP dan Neural Engine untuk</h2>
<h2 style="color: #EA9F71; text-align: center;">membantu Anda menciptakan foto yang belum pernah dibayangkan sebelumnya.</h2>

<br><br><br>

<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_14_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">
<h1 class="judul">Smart HDR.</h1>
<p style="color: white; text-align: center;">Frame sekunder baru, sensor yang lebih cepat, dan chip A12 Bionic Andal menghadirkan lebih banyak detail sorotan dan bayangan di foto Anda.</p><br><br>

<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_15_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">
<h1 class="judul">Pixel lebih besar dan lebih dalam.</h1>
<p style="color: white; text-align: center;">Sensor baru menciptakan fidelity gambar yang lebih baik, akurasi warna yang lebih tinggi, dan mengurangi noise dalam foto berpencahayaan rendah.</p><br><br>

<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_16_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">
<h1 class="judul">Efek bokeh yang disempurnakan.</h1>
<p style="color: white; text-align: center;">Foto mode Potret kini terlihat lebih profesional berkat pemburaman latar belakang yang canggih.</p><br><br>

<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_17_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">
<h1 class="judul">Depth Control yang sepenuhnya baru.</h1>
<p style="color: white; text-align: center;">Kini Anda dapat menyesuaikan kedalaman bidang pada hasil foto setelah memotret.</p><br><br>

<h1 class="judul">Kamera belakang ganda 12 MP</h1>
<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_18_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">

<h1 class="judul">Kamera TrueDepth</h1>
<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_19_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">

<h1 style="color: #FFE6DC; text-align: center;">Satu lagi.</h1>
<h2 style="color: #EA9F71; text-align: center;">iPhone XS menghadirkan nirkabel ultra cepat untuk kecepatan unduh super cepat.</h2>
<h2 style="color: #EA9F71; text-align: center;">Dan dengan penyimpanan hingga 512 GB, inilah iPhone berkapasitas terbesar.</h2>
<img src="Gallery/iPhone/iPhone XS/iPhone-Xs_21_web.webp" alt="detail iPhone 11 Pro" width="100%" height="100%">


</td>
</tr>
<br>



<tr style="background-color: #222222;">
<td>
<br><br>
<ol style="color:white; font-size: 12px;">
<li>Layar memiliki sudut melengkung yang mengikuti desain lekukan yang indah, dan semua sudut ini berada di dalam bidang persegi standar. Jika diukur dalam bentuk persegi standar, diagonal layarnya berukuran 5,85 inci (iPhone XS) dan 6,46 inci (iPhone XS Max). Area bidang layar berukuran lebih kecil.</li>
<br><br>
<li>iPhone XS dan iPhone XS Max tahan cipratan, air, dan debu dan diuji dalam kondisi laboratorium terkontrol dengan level IP68 menurut standar IEC 60529 (kedalaman maksimum 2 meter hingga selama 30 menit). Ketahanan terhadap cipratan, air, dan debu tidak berlaku secara permanen dan daya tahan mungkin berkurang akibat penggunaan sehari-hari. Jangan coba mengisi daya iPhone yang basah; lihat panduan pengguna untuk instruksi pembersihan dan pengeringan. Kerusakan akibat cairan tidak ditanggung dalam garansi.</li>
<br><br>
<li>Pengisi daya nirkabel Qi dijual terpisah.</li>
<br><br>
<li>A12 Bionic dibandingkan dengan A11 Bionic.</li>
<br><br>
<li>Memerlukan paket data. Untuk lebih jelasnya, tanyakan kepada operator Anda. Kecepatan akan bervariasi menurut kondisi lokasi.</li>
<br><br>
<ul style="list-style-type: none;">
<li>Beberapa fitur mungkin tidak tersedia untuk semua negara atau semua wilayah.</li>
</ul>
</tr>
</td>
</table>




<br><br><br><br><br>

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

</body>
</html>