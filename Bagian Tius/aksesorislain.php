<?php
include "../sigadgetconnection.php";

session_start();

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: ../Bagian Tius/aksesorislain.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" type="text/css" href="aksesorislaincss.php">   
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link href="styles.php" rel="stylesheet">
<link href="footer.php" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<style>
    h1{
        font-size: 2.1rem;
        line-height: 1.4;
        letter-spacing: 0.5rem;
        text-align: center;
        color: black;
        margin-top: 50px;
    }    
    
    body{
        background-image: url(background%20aks.jpg);
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
</style>
    <title>SI Gadget | Menjual Smartphone dan Aksesoris</title>
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

    
    <br>
    <hr>
    
    <!----produk Wireless Charger--->
    <div class="small-container">
    <h2 class="produktl">Aksesoris Lainnya</h2>
        <div class="horizontal">
    <div class="row">
        <div class="col-2">
        <img src="tempglass1.jpg" width="100%">
            <h4>Lamina Tempered Glass for <br>iPhone XR / 11 + IT Plug IT 30 <br>Wall Charger 30W</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <p>Rp 548.000,00</p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
        
        <div class="row">
        <div class="col-2">
        <img src="tempglass1.jpg" width="100%">
            <h4>Lamina Tempered Glass iPhone 11 Pro <br> Max 6.5 inch 2019 + IT Plug IT 30 <br>Wall Charger 30W</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                
            </div>
            <p>Rp 548.000,00</p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
        
        <div class="row">
        <div class="col-2">
        <img src="tempglass1.jpg" width="100%">
            <h4>Lamina Tempered Glass iPhone 11 Pro<br> 5.8 inch 2019 + IT Plug IT 30 <br>Wall Charger 30W</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <p>$Rp 548.000,00</p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
        
        <div class="row">
        <div class="col-2">
        <img src="tempglass2.jpg" width="100%">
            <h4>Lamina Tempered Glass Screen<br> Protector for iPhone SE <br>2020/6/7/8 + IT Plug IT 30 <br>Wall Charger 30W</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                
            </div>
            <p>Rp 499.000,00</p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
            
            
            
         <div class="row">
        <div class="col-2">
        <img src="gopro1.jpg" width="100%">
            <h4>GoPro Hero7 - Silver Free<br> Quik Key (iPhone or iPad)</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                
            </div>
            <p>Rp 2.999.000,00</p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
            </div>
       
       <!--baris kedua headphone-->
        <div class="horizontal">
    <div class="row">
        <div class="col-2">
        <img src="gopro2.jpg" width="19.22%">
            <h4>Kate Spade Sleeve 13 Inch <br> Hollyhock</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <p>Rp 999.000,00</p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
        
        <div class="row">
        <div class="col-2">
        <img src="sleeve.jpg" width="100%">
            <h4>Kate Spade Sleeve 13 Colour<br>Block - Black</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                
            </div>
            <p>Rp 1.190.000,00 </p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
        
        <div class="row">
        <div class="col-2">
        <img src="gopro2.jpg"width="100%">
            <h4>Kate Spade Sleeve 13 Inch</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <p>Rp 899.000,00 </p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
        
        <div class="row">
        <div class="col-2">
        <img src= "sleeve2.jpg" width="100%">
            <h4>Kate Spade Sleeve 13 Fairmount SQ <br> - Black</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                
            </div>
            <p>Rp 1.190.000,00 </p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
            
            
            
         <div class="row">
        <div class="col-2">
        <img src="speaker1.jpg" width="21.22%">
            <h4>Harman Kardon Onyx Studio 5 -<br>  Blue</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                
            </div>
            <p>Rp 1.396.647,45 </p>
         <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
            </div>
        
       
       
          <div class="horizontal">
    <div class="row">
        <div class="col-2">
        <img src="kabel1.jpg" width="100%">
            <h4>Mazer Cable Lightning 200CM <br> 3.1A - Grey</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <p>Rp 119.000,00 </p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
        
        <div class="row">
        <div class="col-2">
        <img src="kabel2.jpg" width="100%">
            <h4>Mazer Cable Lightning 200CM<br> 3.1A - Gold</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                
            </div>
            <p>Rp 119.000,00</p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
        
        <div class="row">
        <div class="col-2">
       <img src="speaker2.jpg" width="100%">
            <h4>Feeltek Jet Glass 7 in 2 USB-C Hub<br> - Black</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <p>Rp 1.099.000,00 </p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
        
        <div class="row">
        <div class="col-2">
        <img src="speaker3.jpg" width="100%">
            <h4>Beats Pill+ - White </h4><div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                
            </div>
            <p>Rp 4.000.000,00 </p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
        </div>
            
            
            
         <div class="row">
        <div class="col-2">
        <img src="kabel3.jpg" width="100%">
            <h4>Mazer Multiport USB <br>A to 3 x USB 3.0 + LAN - Gold</h4>
            <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                
            </div>
            <p>Rp 199.000,00</p>
              <a href="aksesorislainProducts1.php" class="btn">Lihat Selengkapnya>>  &#8594;</a>
        </div>
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