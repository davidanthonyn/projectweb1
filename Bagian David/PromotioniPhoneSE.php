<?php
include "sigadgetheadercustomer.php";
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
						
									.tulisankanan {
									position: relative; 
									left: 650px;
									bottom: 450px;
									}
									
									.tulisankiri {
									position: relative; 
									left: 100px;
									bottom: 750px;
									}
									
									.tulisankananbawah {
									position: relative; 
									left: 650px;
									bottom: 1100px;
									}
									
									.tulisankiripalingbawah {
									position: relative; 
									left: 100px;
									bottom: 230px;
									}
									
									.tulisankiripalingbawahdua {
									position: relative; 
									left: 100px;
									bottom: 400px;
									}
									
									.tulisankiripalingbawahtiga {
									position: relative; 
									left: 100px;
									bottom: 480px;
									}

<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </style>
  <title>iPhone SE | SI Gadget</title>
  <link rel="shortcut icon" type="image" href="../smartphone.png">
  </head>
<body>
<p style="text-align:center; font-size: 15px; position: relative; left: -545px;">Home / iPhone SE</p>
<hr>

<table style="width:80%">

<tr id="backgroundhitam">
<td>
<h2 class="judul">iPhone SE</h2>

<h1 class="judul" style="font-size: 50px;">iPhone idaman.</h1>
<h1 class="judul" style="font-size: 50px;">Dengan harga impian.</h1>

<p class="judul">iPhone SE menghadirkan chip paling andal di dalam iPhone berukuran paling populer dengan harga paling terjangkau.</p>
<p class="judul">Inilah yang Anda tunggu-tunggu.</p>

<br>

<p class="judul">Mulai dari Rp 333.292 /bln*</p>

<br>

<button class="glow-on-hover" type="button" onclick="location.href='../Bagian David/iphoneseproducts.php';">Beli Sekarang</button>

<br>

<center>
<img src="Gallery/iPhone/iPhone SE/Product_iPhone_SE.png" alt="iPhone SE" width="20%" height="20%">
</center>

<table style="width:100%">
<br>
<p style="color:gray; text-align:center; font-size: 25px; position: relative; left: -480px;">Desain</p>
<p style="color:white; text-align:center; font-size: 25px; position: relative; left: -470px;">Menyatu</p>
<p style="color:white; text-align:center; font-size: 25px; position: relative; left: -440px;">dengan indah.</p>

<p style="color:white; text-align:right;">Layar Retina HD 4,7 inci yang cemerlang. Kecepatan dan keamanan Touch ID.</p> 
<p style="color:white; text-align:right;">Tahan air hingga 1 meter selama 30 menit.¹ Semuanya dikemas dalam satu desain</p>
<p style="color:white; text-align:right;">yang ringan dan ramping.</p>
</table>


<center>
<img src="Gallery/iPhone/iPhone SE/Deail_iPhone_SE.png" alt="detail iPhone SE" width="90%" height="90%">
</center>
</td>
</tr>
<br>

<tr id="iphonetengahputih">
<td>
<br><br>
<img src="Gallery/iPhone/iPhone SE/Senjata_Rahasianya.png" alt="Weapon iPhone SE" width="45%" height="40%" style="position: relative; left: 100px;">
<p class="tulisankanan" style="color: Gray;">Performa</p>
<h2 class="tulisankanan">Senjata</h2>
<h2 class="tulisankanan">rahasianya? Chip</h2>
<h2 class="tulisankanan">milik iPhone 11 Pro.</h2>
<p class="tulisankanan">A13 Bionic adalah chip tercepat yang pernah</p>
<p class="tulisankanan">ada di ponsel pintar mana pun. Luncurkan</p>
<p class="tulisankanan">aplikasi, bermain game, dan lainnya —</p>
<p class="tulisankanan">semuanya secepat kilat.</p>

<br><br>
<img src="Gallery/iPhone/iPhone SE/Senyum_Makin_Ceria.png" alt="Weapon iPhone SE" width="35%" height="55%" style="position: relative; left: 650px; bottom: 300px;">
<p class="tulisankiri" style="color: Gray;">Kamera</p>
<h2 class="tulisankiri">Senyum makin</h2>
<h2 class="tulisankiri">ceria dengan</h2>
<h2 class="tulisankiri">mode Potret.</h2>
<p class="tulisankiri">Sistem kamera canggih yang dilengkapi A13</p>
<p class="tulisankiri">Bionic memungkinkan mode Potret, yang</p>
<p class="tulisankiri">akan memusatkan fokus ke subjek Anda</p>
<p class="tulisankiri">secara artistik - bahkan untuk selfie.</p>

<br><br>
<img src="Gallery/iPhone/iPhone SE/Definisi_Tinggi.png" alt="Weapon iPhone SE" width="33%" height="50%" style="position: relative; left: 100px; bottom: 650px;">
<p class="tulisankananbawah" style="color: Gray;">Video</p>
<h2 class="tulisankananbawah">Definisi tinggi, </h2>
<h2 class="tulisankananbawah">tinggi, tinggi,</h2>
<h2 class="tulisankananbawah">tinggi sekali.</h2>
<p class="tulisankananbawah">Video 4K menghadirkan empat kali lipat detail</p>
<p class="tulisankananbawah">Full HD. Dan dengan QuickTake, Anda bisa</p>
<p class="tulisankananbawah">mulai merekam video di mode foto, cukup</p>
<p class="tulisankananbawah">dengan menahan rana.</p>
</tr>
</td>

<tr id="backgroundhitam">
<td>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<img src="Gallery/iPhone/iPhone SE/Daya_Tahan_Batteray.png" alt="Battery iPhone SE" width="45%" height="45%" style="position: relative; right: -580px; bottom: 400px;">
<p class="tulisankiri" style="color:Gray; font-size: 25px;">Baterai</p>
<p class="tulisankiri" style="color:white; font-size: 25px;">Kekuatan baterai sepanjang serial</p>
<p class="tulisankiri" style="color:white; font-size: 25px;">favorit Anda.</p>

<p class="tulisankiri" style="color:white;">Untuk menonton dan banyak lainnya,</p> 
<p class="tulisankiri" style="color:white;">iPhone SE memungkinan Anda</p>
<p class="tulisankiri" style="color:white;">menonton hingga 13 jam video dari</p>
<p class="tulisankiri" style="color:white;">sekali pengisian daya.²</p>


<br>
<img src="Gallery/iPhone/iPhone SE/Privacy_Icon.png" alt="Battery iPhone SE" width="40%" height="80%" style="position: relative; left: 100px;">
<p class="tulisankanan" style="color:Gray; font-size: 25px;">Privasi</p>
<p class="tulisankanan" style="color:white; font-size: 25px;">Privasi bawaan</p>
<p class="tulisankanan" style="color:white; font-size: 25px;">Apple</p>

<p class="tulisankanan" style="color:white;">Produk Apple didesain untuk melindungi</p> 
<p class="tulisankanan" style="color:white;">privasi Anda dan memberi Anda kendali</p>
<p class="tulisankanan" style="color:white;">atas informasi Anda. Tidak selalu mudah.</p>
<p class="tulisankanan" style="color:white;">Namun inovasi demi privasi demikianlah</p>
<p class="tulisankanan" style="color:white;">yang Apple yakini.</p>


<h1 style="color:white; position: relative; left: 90px;">Lebih banyak lagi fitur hebat.</h1>
<br>
<center>
<img src="Gallery/iPhone/iPhone SE/All.png" alt="All iPhone SE" width="90%" height="90%">
</center>
<br><br>
</td>
</tr>

<tr id="iphonetengahputih">
<td>
<img src="Gallery/iPhone/iPhone SE/Anggota_Lain.png" alt="accessories iPhone SE" width="35%" height="50%" style="position: relative; left: 600px; top: 50px;">
<p class="tulisankiripalingbawah" style="color: Gray; font-size: 20px;">Aksesoris</p>
<h2 class="tulisankiripalingbawah">Inilah anggota</h2>
<h2 class="tulisankiripalingbawah">keluarga yang lain</h2>
<p class="tulisankiripalingbawah" style="font-size: 3;">Beli casing yang didesain khusus untuk</p>
<p class="tulisankiripalingbawah" style="font-size: 3;">iPhone. Jelajahi AirPods, alat fotografi, dock pengisian</p>
<p class="tulisankiripalingbawah" style="font-size: 3;">daya nirkabel, dan banyak lagi.</p>


<img src="Gallery/iPhone/iPhone SE/Hanyutkan_Diri.png" alt="music iPhone SE" width="20%" height="55%" style="position: relative; left: 650px; top: -120px;">
<p class="tulisankiripalingbawahdua" style="color: Gray; font-size: 20px;">Apple Music</p>
<h2  class="tulisankiripalingbawahdua">Hanyutkan diri</h2>
<h2  class="tulisankiripalingbawahdua">dalam 60 juta lagu.</h2>
<p class="tulisankiripalingbawahdua" style="font-size: 3;">Streaming 60 juta lagu tanpa iklan. Unduh</p>
<p class="tulisankiripalingbawahdua" style="font-size: 3;">lagu favorit Anda. Dengarkan secara offline.</p>


<img src="Gallery/iPhone/iPhone SE/Tonton_Cerita.png" alt="tv iPhone SE" width="33%" height="50%" style="position: relative; left: 650px; top: -250px;">
<p class="tulisankiripalingbawahtiga" style="color: Gray; font-size: 20px;">Apple TV+</p>
<h2 class="tulisankiripalingbawahtiga">Tonton cerita orisinal</h2>
<h2 class="tulisankiripalingbawahtiga">dari insan kreatif terbaik</h2>
<h2 class="tulisankiripalingbawahtiga">di industri film dan TV.</h2>
<p class="tulisankiripalingbawahtiga" style="font-size: 3;">Disertakan selama satu tahun saat Anda</p>
<p class="tulisankiripalingbawahtiga" style="font-size: 3;">membeli iPhone.</p>


<h1 style="text-align:center; position: relative; bottom: 400px;">Bandingkan model iPhone</h1>
<p style="text-align:center; color: lightblue; position: relative; bottom: 400px;">Temukan iPhone yang tepat untuk Anda.</p>
<button class="glow-on-hover" type="button" style="position: relative; bottom: 400px;">Bandingkan</button>
</tr>
</td>

<tr style="background-color:Gray;">
<td>
<br><br>
<ol style="color:white; font-size: 12px;">
  <li>iPhone SE (generasi ke-2) tahan cipratan, air, dan debu dan diuji dalam kondisi laboratorium terkontrol dengan level IP67 menurut standar IEC 60529 (kedalaman maksimum 1 meter hingga selama 30 menit). Ketahanan terhadap cipratan, air, dan debu tidak berlaku secara permanen dan daya tahan mungkin berkurang akibat penggunaan sehari-hari. Jangan coba mengisi daya iPhone yang basah; lihat panduan pengguna untuk instruksi pembersihan dan pengeringan. Kerusakan akibat cairan tidak ditanggung dalam garansi.</li>
  <br><li>Semua klaim baterai bergantung pada konfigurasi jaringan dan banyak faktor lain; hasil aktual bervariasi. Baterai memiliki siklus pengisian daya yang terbatas dan pada akhirnya harus diganti oleh penyedia layanan resmi Apple. Kekuatan baterai dan jumlah siklus pengisian daya bervariasi tergantung penggunaan dan pengaturan. Lihat apple.com/batteries and apple.com/iphone/battery.html untuk informasi selengkapnya.</li>
  <br><li>Kompatibel dengan AirPods (generasi ke-1 atau lebih baru), Powerbeats Pro, Beats Solo3 Wireless, BeatsX, Beats Studio3 Wireless, dan Powerbeats3 Wireless serta memerlukan versi iOS terbaru.</li>
  <br><li>Penggunaan eSIM memerlukan paket layanan nirkabel (yang mungkin mencakup pembatasan penggantian penyedia layanan dan roaming, bahkan setelah kontrak berakhir). Tidak semua operator mendukung eSIM. Penggunaan eSIM di iPhone mungkin dinonaktifkan saat dibeli dari operator tertentu. Hubungi operator Anda untuk informasi lebih lanjut. Untuk info selengkapnya, kunjungi support.apple.com/kb/HT209044.</li>
  <br><li>Pengujian dilakukan oleh Apple pada bulan Februari 2020 menggunakan unit iPhone SE (generasi ke-2) praproduksi dan perangkat lunak serta aksesori Adaptor Daya USB-C Apple (18 W Model A1720 dan 30 W Model A1882). Pengujian pengisian daya cepat dilakukan dengan unit iPhone yang dayanya terkuras. Waktu isi daya bervariasi berdasarkan faktor lingkungan; hasil aktual bervariasi.</li>

<br>
<p>Penafian tambahan:</p>
<ul style="list-style-type: none; color:white; font-size: 12px;">
<li>Apple Music memerlukan langganan</li>
<br><li>Apple TV+ terkena Rp 69.000/bulan setelah percobaan gratis. Satu paket langganan untuk tiap grup Keluarga Berbagi. Penawaran berlaku selama tiga bulan setelah aktivasi perangkat yang memenuhi syarat. Paket diperbarui otomatis, kecuali dibatalkan. Pembatasan dan syarat lainnya berlaku. Lihat apple.com/promo untuk informasi selengkapnya.</li>
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