<?php
include "../sigadgetconnection.php";

session_start();

if(!empty($_SESSION['account_username'])) {
	header('location: ../home.php');
}

if(isset($_POST['forgotpassword'])) {
		$oldpassword = mysqli_real_escape_string($conn,$_POST['oldpassword']);
		$newpassword = mysqli_real_escape_string($conn,$_POST['newpassword']);
		$newpasswordagain = mysqli_real_escape_string($conn,$_POST['newpasswordagain']);
		$passhashnew = password_hash($newpassword,PASSWORD_DEFAULT);
		
		
		if(count($errors) == 0) {
					
					if(password_verify($oldpassword, $_SESSION['account_password'])) {
						if($newpassword == $newpasswordagain) {
							$passhash = password_hash($newpassword,PASSWORD_DEFAULT);
							$update = mysqli_query($conn, "UPDATE `user` SET password='$passhashnew',Updated_at=now() WHERE username='$_SESSION[account_username]'");
									
														if($update) {
															session_destroy();
															
															session_start();
															
															$checkdatasecond = mysqli_query($conn,"SELECT * FROM user WHERE ID_User='$check[ID_User]'");
															$checksecond = mysqli_fetch_array($checkdatasecond);
															$_SESSION["account_id"] = $checksecond["ID_User"];
															$_SESSION["account_username"] = $checksecond["username"];
															$_SESSION["account_password"] = $checksecond["password"];
															$_SESSION["account_userlevel"] = $checksecond["userlevel"];
															$_SESSION["account_userstatus"] = $checksecond["userstatus"];
															$_SESSION["account_fullname"] = $checksecond["Nama_Lengkap"];
															$_SESSION["account_email"] = $checksecond["email"];
															$_SESSION["account_phonenumber"] = $checksecond["No_Telepon"];
															$_SESSION["account_address"] = $checksecond["Alamat"];
															$_SESSION["account_create"] = $checksecond["Created_at"];
															$_SESSION["account_update"] = $checksecond["Updated_at"];
															?>
																				<script>
																				alert('Change password success, back to account.');
																				window.location.href='../customaccount.php';
																				</script>
																			<?php
														} else {
															?>
																				<script>
																				alert('Change password failed.');
																				window.location.href='../customaccount.php';
																				</script>	
																				<?php
								}	
						}
						array_push($errors, "Password baru dan Password baru kedua tidak sama, password belum terganti!");
		}
		array_push($errors, "Password lama salah, password belum terganti!");
	}
}
				

$sql = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='smartphone.png'");

while($row=mysqli_fetch_array($sql)) {
		
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

.cart-page {
	margin: 80px auto;
}

table {
width: 100%;
border-collapse: collapse;
}

.cart-info {
	display: flex;
	flex-wrap: wrap;
}

th {
	text-align: left;
	padding: 5px;
	Color: #fff;
	background: #27a3ff;
	font-weight: normal;
}

td {
	padding: 10px 5px;
}

td input {
	width: 40px;
	height: 30px;
	padding: 5px;
}

td a {
	color: #27a3ff;
	font-size: 12px;
}

td img {
	width: 80px;
	height: 80px;
	margin-right: 10px;

}

.total-price {
	display: flex;
	justify-content: flex-end;
}

.total-price table {
	border-top: 3px solid #27a3ff;
	width: 100%;
	max-width: 405px;
}

td:last-child {
text-align: right;
}

th: last-child {
text-align: right;
}

.account-page {
	padding: 50px 0;
	background: radial-gradient(#fff, #27a3ff);
}

.form-container {
	background: #fff;
	width: 300px;
	height: 400px;
	position: relative;
	text-align: center;
	padding: 20px 0;
	margin: auto;
	box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
	overflow: hidden;
}

.form-container span {
	font-weight: bold;
	padding: 0 10px;
	color: #555;
	cursor: pointer;
	width: 100px;
	display: inline-block;
}

.form-btn {
	display: inline-block;
}

.form-container form {
	max-width: 300px;
	padding: 0 20px;
	position: absolute;
	top: 130px;
	transition: transform 1s;
}

form input {
	width: 100%;
	height: 30px;
	margin: 10px 0;
	padding 0 10px;
	border: 1px solid #ccc;
}

form .btn {
	width: 100%;
	border: none;
	cursor: pointer;
	margin: 10px 0;
}

form .btn:focus {
	outline: none;
}

#LoginForm{
	left: -300px;
}

#RegForm {
	left: 0;
}

form a{
	font-size: 12px;
}

#Indicator{
	width: 100px;
	border: none;
	background: #27a3ff;
	height: 3px;
	margin-top: 8px;
	transform: translateX(100px);
	transition: transform 1s;
}

  </style>
  <title>Login/Register | SI Gadget</title>
  <link rel="shortcut icon" type="image" href="../image/<?php echo $row['Filename']; ?>"> <?php } ?>
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
																																																															<li><a class="dropdown" href="../Bagian David/nomorresi.php">Track Resi</a></li>
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

<!-----accountpage------>
<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="../smartphone.png" width="75%">
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
					<span onclick="login()">OTP</span>
					<span onclick="register()">Forgot Password</span>
					<hr id="Indicator"></hr>
					</div>
					
					<form id="RegForm">
						<input type="text" placeholder="Email" id="email">
						<input type="submit" class="btn-cart" onclick="return checkEmail()">
						<a href="account.php">Login</a>
					</form>
					
					<form id="LoginForm">
						<input type="password" placeholder="OTP" id="OTP">
						<input type="password" placeholder="New Password" id="password1">
						<input type="password" placeholder="New Password Again" id="password2">
						<input type="submit" class="btn-cart" onclick="return checkOtp()">
						<a href="account.php">Login</a>
					</form>
					
					

				</div>
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

<!----js for toggle form--->
<script>
	var OTPForm = document.getElementById("LoginForm");
	var FPForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator");
	
	var emailPengguna = document.getElementById("email");
	var passwordSatu = document.getElementById("password1");
	var passwordDua = document.getElementById("password2");
	var otepe = document.getElementById("OTP");
	
	function login() {
		OTPForm.style.transform = "translateX(300px)";
		FPForm.style.transform = "translateX(300px)";
		Indicator.style.transform = "translateX(0px)";
	}
	
	function register() {
		OTPForm.style.transform = "translateX(0px)";
		FPForm.style.transform = "translateX(0px)";
		Indicator.style.transform = "translateX(100px)";
	}
	
	function checkEmail() {
		if(emailPengguna.value.length == "0") {
			alert("Email tidak boleh kosong");
			window.location.href= "forgotpassword.php";
			return false;
		} else {
			alert("Email terkirim(OTP: 123456)");
			window.location.href= "forgotpassword.php";
			return false;
		}
	}
	
	function checkOtp() {
		if(passwordSatu.value.length == "0" || passwordDua.value.length == "0" || otepe.value.length == "0" ) {
			alert("Form tidak boleh kosong");
			return false;
		} else if(otepe.value!="123456") {
			alert("OTP harus 123456");
			return false;
			} else if(passwordSatu.value != passwordDua.value) {
			alert("Password tidak sama");
			return false;
				} else {
					alert("Change password success, now user can login.");
					window.location.href= "account.php";
					return false;
				}
	}
</script>




</body>
</html>