<?php
include "../Bagian David/sigadgetheadercustomer.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">

  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <!--ini adalah Plug-in bernama Animate css untuk memperindah Website dengan transisi dan animasi unik dan cantik,
   dan juga lebih mudah digunakan-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


  <!--Ini adalah metode Internal CSS, jadi kita memasukan full CSS dalam File HTML-nya-->
  <style>
	body {
	font-family: 'Roboto', sans-serif;
  background: url(bg.jpg);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
	}

  hr {
    margin: 0 auto;
  }

  .logo{
  background-image: url(smartphone.png);
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

    .navbar{
      width: 100%;
      height:51px;
      background:#000000;
      position: relative;
      z-index: 9999;
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
      overflow: hidden;
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

									.experience {
                    width: 100%;
                    margin: 0 auto;
                    padding: 2px 15px;
                    background: #666565;
                    color: white;
                    height: 248px;
									}


															.bottomnav {
															overflow: hidden;
															background-color: #333;
                              height: 25%;
                              width: 100%;
															}


																		.newsletter {
                                      width: 100%;
																		  overflow: hidden;
																		  background-color: #333;
                                      padding: 2px 19px 0 100px;
                                      color : white;
																		}

                                    .button {
                                      padding: 1px 14px;
                                      text-align: center;
                                      text-decoration: none;
                                      display: inline-block;
                                      cursor: pointer;
                                      background-color: #333;
                                      color: white;
                                      border: 2px solid #FFFFFF;
                                    }

                                    .button:hover{background-color: #fff; color:#333;}


.row {
  width: 100%;
  margin: 0 auto;
  padding: 30px 115px;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
}

.column1 {
  float: left;
  width: 25%;
  padding: 10px;
}

.column2 {
  float: left;
  width: 100%;
  padding: 10px;
}

.column3 {
  float: left;
  width: 15%;
  padding: 40px 10px 0 10px;
}

.column4 {
  float: left;
  width: 85%;
  padding: 10px;
}

.about-section {
  padding: 150px 50px;
  text-align: center;
  color: white;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(aboutimg.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    background-attachment: fixed;
  position: relative;
  z-index: -3;
  }

.faq-section {
  padding: 75px 50px;
  text-align: center;
  position: relative;
}

.faq-section p{
  font-size: 19px;
  color:#4a4a4a;
}

.faq-section b{
  font-size: 23px;
  color: black;
}

.faq-section span{
  color: #990606;
}

.gas {
  text-align:left;
  padding-top:13px;
}

.promo-section {
  padding: 120px 50px 100px 50px;
  text-align: center;
  position: relative;
}


.text-team {
    margin-top: -25px;
    margin-right: 30px;
    margin-left: 30px;
    padding: 20px 10px;
    text-align: center;
    background: #fff;
    z-index: 3;
    position: relative;
    height: 172px;
}
.fs-18 {
    font-size: 18px;
}
.fs-14 {
    font-size: 12px;
}
.text-dark {
  background: -webkit-linear-gradient(#000000, #590000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.text-blue {
  background: -webkit-linear-gradient(#79c4e8, #5eacd1);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}


  </style>
  <title>Repair Center | SI Gadget, Menjual Smartphone dan Aksesoris</title>
  <link rel="shortcut icon" type="image" href="smartphone.png">
  </head>

<!-- Cara menambahkan animasi setelah memasukan animate.css, tinggal gunakan
[animate__animated animate__(namaanimasi)] pada atribut "class".

Daftar animasinya ada di website https://animate.style -->

<body>

<p style="text-align:left; font-size: 15px; position: relative; left: 75px; z-index:-7;">Home / Repair</p>
<hr>
<!-- Ini Indikator penanda Halaman, supaya ga nyasar-->


<!--Judul -->
<div class="about-section animate__animated animate__fadeIn">
  <h1 class="animate__animated animate__fadeInLeft">REPAIR CENTER</h1>
</div>

<div class="faq-section">
  <div class="row animate__animated animate__fadeInLeft">
    <div class="column2 animate__animated animate__fadeInLeft" style="text-align:left;">
      <h1 style="  background: -webkit-linear-gradient(#000000, #590000);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">Frequently Asked Question</h1>

        <p>&nbsp;</p>
      </div>

      <div class="column3">
      <img src="radar.png" alt="" width="100px;">
      </div>
      <div class="column4 gas">
      <p><b>Sejauh mana coverage area yang bisa dilayani oleh layanan pengambilan dan pengantaran SI Service ini?</b></p>
      <p>Coverage yang dilayani adalah area <span>Jabodetabek, Bandung, Semarang, Jogyakarta, Solo, Surabaya, Malang, dan Denpasar.</span></p>
      <p>&nbsp;</p>
      </div>

      <div class="column3">
      <img src="phone-call.png" alt="" width="100px;">
      </div>
      <div class="column4 gas">
      <p><b>Product yang bisa di service dengan menggunakan layanan ini!</b></p>
      <p>Saat ini product yang bergabung untuk mendapatkan layanan ini adalah merk sebagai berikut <span>(Apple dan Samsung)</span></p>
      <p>&nbsp;</p>
      </div>

      <div class="column3">
      <img src="feedback.png" alt="" width="100px;">
      </div>
      <div class="column4 gas">
      <p><b>Apakah yang pertama kali harus customer lakukan untuk mendapatkan layanan ini?</b></p>
      <p>Customer bisa mengirimkan Text pemesanan ke nomor Customer Service Officer kami di <span>081234567890</span>, atau mengisi pemesanan anda via <span> email customercare@sigadget.com</span></p>
      <p>&nbsp;</p>
      </div>

      <div class="column3">
      <img src="folder.png" alt="" width="100px;">
      </div>
      <div class="column4 gas">
      <p><b>Bagaimana dengan data-data dan aplikasi yang saya miliki ketika saya melakukan perbaikan lewat layanan ini?</b></p>
      <p><span>Privasi data Anda adalah hal penting.</span> Anda wajib melindungi data privasi Anda dengan mencadangkannya sendiri.
      Silahkan menghapus data anda sebelum mengirimkan ke Service Centre, Pihak Service Centre tidak membuat cadangan data dari perangkat anda dan tidak bertanggungjawab atas privasi dan kehilangan data pada unit anda.</p>
      <p>&nbsp;</p>
      </div>

      <div class="column3">
      <img src="settings.png" alt="" width="100px;">
      </div>
      <div class="column4 gas">
      <p><b>Apakah yang harus saya persiapkan untuk pengiriman perangkat saya ke pihak SI Service?</b></p>
      <p><span>Keluarkan kartu SIM Anda, pelindung layar dan kasing atau aksesori lainnya.</span> Jika pelindung layar, kasing, kartu SIM atau aksesori dibiarkan terpasang saat dikirim ke Service Centre, kehilangan tidak akan mendapat penggantian.</p>
      <p>&nbsp;</p>
      </div>

      <div class="column3">
      <img src="box.png" alt="" width="100px;">
      </div>
      <div class="column4 gas">
      <p><b>Apakah kami perlu mengemas product yang akan kami kirim?</b></p>
      <p><span>Pihak Layanan kami akan menyediakan Box untuk packaging,</span> namun anda juga bisa mengirimkan product tersebut menggunakan box original product, tanpa accesories dan manual book, kecuali jika kerusakan
      memerlukan accesories untuk disertakan juga, tidak perlu di seal karena pihak ekspedisi kami akan melakukan pengecekan fisik imei/serial number sebelum mereka melakukan penyegelan, pihak ekspedisi memiliki
      maksimal 10 menit untuk pengecekan fisik di alamat customer untuk memastikan product yang dikirim adalah sama dengan product yang di Validasi oleh Customer Service Officer kami.</p>
      <p>&nbsp;</p>
      </div>

      <div class="column3">
      <img src="salary.png" alt="" width="100px;">
      </div>
      <div class="column4 gas">
      <p><b>Apakah layanan ini berbiaya?</b></p>
      <p><span>Kami mengenakan biaya untuk pengambilan dari lokasi customer ke Service Centre resmi,</span> kemudian pengantaran dari Service Centre Resmi ke lokasi customer serta proteksi asuransi sampai dengan Rp. 40.000.000,- (tergantung nilai pertanggungan dari product yang diperbaiki)</p>
      <p>&nbsp;</p>
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

</body>
</html>
