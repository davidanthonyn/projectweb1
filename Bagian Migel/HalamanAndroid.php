<?php
include "../sigadgetconnection.php";

session_start();

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: ../Bagian Migel/HalamanAndroid.php');
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
	
	.column {
    float: left;
    width: 22%;
    padding: 20px;
    margin-bottom: 20px;
}
.row {
    margin-left: 150px;
    animation-name: up;
    animation-duration: 1.5s;
    position: relative;
}
.card {
    text-align: center;
    padding-bottom: 8px;
    cursor: pointer;
    font-size: 10px;
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

<center><p> Android <p><center>

<div class="row">
   
        <div class="column" onclick="location.href='../Bagian Migel/Halaman Samsung S20 Ultra.php';">
                    <div class="card">
                        <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/2/13/48435890/48435890_17433489-391c-4128-9a77-73be0f2c12b8_710_710" style="width:40%" alt="realme">
                        <h3>Samsung Galaxy S20 Ultra</h3>
						<h4> Rp 20.500.000</h4>
                    </div>
        </div>
       
        <div class="column">
                <div class="card">
                    <img src="https://images.samsung.com/is/image/samsung/id-galaxy-m51-m515f-sm-m515fzwexid-frontwhite-thumb-295901790?$240_240_PNG$" style="width:40%" alt="samsung">
                    <h3>Samsung Galaxy M51</h3>
					<h4>Rp 5.499.000</h4>
                </div>
        </div>
 
        <div class="column">
                <div class="card"">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/71LhAERRPaL._SX679_.jpg" style="width:40%" alt="samsung">
                    <h3>Samsung Galaxy Fold</h3>
					<h4> Rp 33.500.000 </h4>
                </div>
        </div>
     
        <div class="column">
                <div class="card" > 
				<img src="https://images.samsung.com/uk/smartphones/galaxy-z-flip/buy/carousel/mobile/black-purple/0-Bloom-Black-Purple-Family-1-img.jpg" style="width:40%" alt="samsung">
                        <h3>Samsung Galaxy Flip</h3>  
						<h4> Rp 20.900.000 </h4>
						</div>
        </div>
		
		 <div class="column" onclick="location.href='../Bagian Migel/Halaman Xiaomi Mi Note 10.php';">
                    <div class="card">
                        <img src="https://i01.appmifile.com/webfile/globalimg/Cambridge/800-800/F4/Green-800x800.png" style="width:40%" alt="xiaomi">
                        <h3>Xiaomi Mi Note 10</h3>
						<h4> Rp 7.245.000</h4>
                    </div>
        </div>
       
        <div class="column">
                <div class="card">
                    <img src="https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/Xiaomi_Mi_9_SE/Xiaomi_Mi_9_SE_L_1.jpg" style="width:40%" alt="xiaomi">
                    <h3>Xiaomi Mi 9</h3>
					<h4>Rp 8.617.000</h4>
                </div>
        </div>
 
        <div class="column">
                <div class="card"">
                    <img src="https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/Xiaomi_Redmi_K20_Pro/Xiaomi_Redmi_K20_Pro_L_1.jpg" style="width:40%" alt="xiaomi">
                    <h3>Xiaomi K20 Pro</h3>
					<h4> Rp 6.799.000 </h4>
                </div>
        </div>
     
        <div class="column">
                <div class="card" > 
				<img src="https://static.bmdstatic.com/pk/product/medium/5ee88c0886a8c.jpg" style="width:40%" alt="xiaomi">
                        <h3>Xiaomi Redmi Note 9</h3>  
						<h4> Rp 2.799.000 </h4>
						</div>
        </div>
		
		<div class="column" onclick="location.href='../Bagian Migel/Halaman Huawei P40 Pro.php';">
                    <div class="card" >
                        <img src="https://d2pa5gi5n2e1an.cloudfront.net/ph/images/special_article/ID_HUAWEI_P40_Pro/1.jpg" style="width:40%" alt="huawei">
                        <h3>Huawei P40 Pro</h3>
						<h4> Rp 14.500.000</h4>
                    </div>
        </div>
       
        <div class="column">
                <div class="card">
                    <img src="https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/HUAWEI_Mate_20_/HUAWEI_Mate_20__L_1.jpg" style="width:40%" alt="huawei">
                    <h3>Huawei Mate 20 Pro</h3>
					<h4>Rp 11.999.000</h4>
                </div>
        </div>
 
        <div class="column">
                <div class="card"">
                    <img src="https://www.rancahpost.com/wp-content/uploads/2019/11/Huawei-Y9s-600x600.jpg" style="width:40%" alt="huawei">
                    <h3>Huawei Y9s</h3>
					<h4> Rp 3.300.000 </h4>
                </div>
        </div>
     
        <div class="column">
                <div class="card" > 
				<img src="https://gadgetsquad.id/wp-content/uploads/2019/01/Hp-huawei-nova-3i-400x400.jpg" style="width:40%" alt="huawei">
                        <h3>Huawei Nova 3i</h3>  
						<h4> Rp 2.999.000 </h4>
						</div>
        </div>
		
		<div class="column" onclick="location.href='../Bagian Migel/Halaman Asus Zenfone Max Pro M2.php';">
                    <div class="card" >
                        <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2019/2/11/13682118/13682118_c0a07ddc-3951-4d60-8f2f-d1fa6d963e9b_635_650.jpg" style="width:35%" alt="asus">
                        <h3>Asus Zenfone Max Pro M2</h3>
						<h4> Rp 3.699.000</h4>
                    </div>
        </div>
       
        <div class="column">
                <div class="card">
                    <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2019/9/21/77594658/77594658_1a7875f1-6615-4576-8c8f-f340262a43f1_1280_1280" style="width:50%" alt="asus">
                    <h3>Asus Zenfone 5z</h3>
					<h4>Rp 8.000.000</h4>
                </div>
        </div>
 
        <div class="column">
                <div class="card"">
                    <img src="https://mmc.tirto.id/image/otf/1024x535/2018/05/17/zenfone-live-l1-asus.com_ratio-16x9.jpg" style="width:60%" alt="asus">
                    <h3>Asus Zenfone Live L1</h3>
					<h4> Rp 2.000.000 </h4>
                </div>
        </div>
     
        <div class="column">
                <div class="card" > 
				<img src="https://www.localstartupfest.id/wp-content/uploads/Asus-ZenFone-Max-Plus-M1-ZB570TL.jpg" style="width:40%" alt="asus">
                        <h3>Asus ZenFone Max Plus M1</h3>  
						<h4> Rp 2.890.000 </h4>
						</div>
        </div>
		
		<div class="column">
                    <div class="card" >
                        <img src="https://fdn2.gsmarena.com/vv/bigpic/realme-6.jpg" style="width:35%" alt="realme">
                        <h3>Realme 6</h3>
						<h4> Rp 3.550.000</h4>
                    </div>
        </div>
       
        <div class="column">
                <div class="card">
                    <img src="https://www.localstartupfest.id/wp-content/uploads/REALME-XT-730G.jpg" style="width:50%" alt="realme">
                    <h3>Realme XT 730G</h3>
					<h4>Rp 3.450.000</h4>
                </div>
        </div>
 
        <div class="column">
                <div class="card"">
                    <img src="https://www.localstartupfest.id/wp-content/uploads/REALME-Q.jpg" style="width:50%" alt="realme">
                    <h3>Realme Q</h3>
					<h4> Rp 2.999.000 </h4>
                </div>
        </div>
     
        <div class="column">
                <div class="card" > 
				<img src="https://www.localstartupfest.id/wp-content/uploads/REALME-X2-Pro-hp-realme-terbaru.jpg" style="width:50%" alt="realme">
                        <h3>Realme X2 Pro</h3>  
						<h4> Rp 7.950.000 </h4>
						</div>
       
 </div>
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

</body>
</html>
		
   

	