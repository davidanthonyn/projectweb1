<?php
include "../sigadgetconnection.php";

session_start();

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: ../Bagian Migel/huawei.new.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
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

<p><img src = "https://4.bp.blogspot.com/-ThdB-5GAbvA/XEIwSPSAkJI/AAAAAAAAC0g/3c8Ae4b8dawZkgBv6PiTPyH0Oj83wRLUwCLcBGAs/s1600/huawei%2Blogo%2Bbergambar%2Bbunga%2B2.jpg" alt= "huawei" width="100" height="100" ></p>
<p> 
	<center> 
		<div id="banner">
			<figure>
				<img src="https://lmphotography641.files.wordpress.com/2020/04/huawei_banner_rw2ykdk.png" alt="">
				<img src="https://lmphotography641.files.wordpress.com/2020/04/huawei_banner_rw2ykdk.png" alt="">
				<img src="https://lmphotography641.files.wordpress.com/2020/04/huawei_banner_rw2ykdk.png" alt="">
				<img src="https://lmphotography641.files.wordpress.com/2020/04/huawei_banner_rw2ykdk.png" alt="">
				<img src="https://lmphotography641.files.wordpress.com/2020/04/huawei_banner_rw2ykdk.png" alt="">

			</figure>
		</div>
	</center>

<p>
<center>
	<div style="margin-top: 100px;"><p1> Pilih Smartphone Anda  <p1></div>
</center>
</p>
<br><br>

<center><p> Produk Terbaru <p><center>


<ul class="gallery">
	<div class="flex-container">
<li type="none" onclick="document.location='Halaman Huawei P40 Pro.php'"> <img src ="https://d2pa5gi5n2e1an.cloudfront.net/ph/images/special_article/ID_HUAWEI_P40_Pro/1.jpg" style="position: relative; left: -300px;" alt= "huawei" width="300" height="300"> <p>
<p style="position: relative; left: -300px;">Huawei P40 Pro  <p>
	<p style="position: relative; left: -300px;">Spesifikasi :<p>
	<p style="position: relative; left: -300px;">Ram : 8 GB <p>
	<p style="position: relative; left: -300px;"> Camera belakang : 50 MP<p>
	<p style="position: relative; left: -300px;"> Camera depan : 12 MP<p>
	<p style="position: relative; left: -300px;"> Harga : Rp 14.500.000<p>

 </li>
 
 <li type="none"> <img src ="https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/HUAWEI_Mate_20_/HUAWEI_Mate_20__L_1.jpg" style="position: relative; left: -200px;" alt= "huawei" width="300" height="300"> <p>
<p style="position: relative; left: -200px;">Huawei Mate 20 Pro <p>
	<p style="position: relative; left: -200px;">Spesifikasi :<p>
	<p style="position: relative; left: -200px;">Ram : 4/6 GB <p>
	<p style="position: relative; left: -200px;">Camera belakang: 12 MP<p>
	<p style="position: relative; left: -200px;"> Camera depan : 8 MP<p>
	<p style="position: relative; left: -200px;"> Harga : Rp 9.799.000 - Rp 11.999.000<p>

 </li>
 
 
<li type="none"> <img src ="https://www.rancahpost.com/wp-content/uploads/2019/11/Huawei-Y9s-600x600.jpg" style="position: relative; right: 100px;" alt= "huawei" width="300" height="300"><p>
<p style="position: relative; right: 100px;" > Huawei Y9s <p>
	<p style="position: relative; right: 100px;">Spesifikasi :<p>
	<p style="position: relative; right: 100px;">Ram : 6 GB <p>
	<p style="position: relative; right: 100px;">Camera belakang: 48 MP<p>
	<p style="position: relative; right: 100px;"> Camera depan : 8 MP<p>
	<p style="position: relative; right: 100px;"> Harga : Rp 3.300.000 	<p>

</li>

<li type="none"> <img src ="https://gadgetsquad.id/wp-content/uploads/2019/01/Hp-huawei-nova-3i-400x400.jpg" style="position: relative; right: 10px;" alt= "huawei" width="300" height="300"> <p>
<p style="position: relative; right: 10px;" > Huawei Nova 3i <p>
	<p style="position: relative; right: 10px;">Spesifikasi :<p>
	<p style="position: relative; right: 10px;">Ram : 4/6 GB <p>
	<p style="position: relative; right: 10px;">Camera belakang: 16 MP<p>
	<p style="position: relative; right: 10px;"> Camera depan : 24 MP<p>
	<p style="position: relative; right: 10px;"> Harga : Rp 2.649.000 - Rp 2.999.000<p>

</li>
</div>
</ul>

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

</body>
</html>