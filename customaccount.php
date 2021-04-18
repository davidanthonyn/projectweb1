<?php
include "sigadgetconnection.php";

session_start();

if(empty($_SESSION['account_username'])) {
	header('location: home.php');
}

$checkdata = mysqli_query($conn,"SELECT * FROM user WHERE username = '$_SESSION[account_username]'");
$check = mysqli_fetch_array($checkdata);



if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: home.php');
}

if(isset($_POST['updatedata'])) {
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
						
						if($username == $_SESSION["account_username"] && $fullname == $_SESSION["account_fullname"] && $email == $_SESSION["account_email"] && $phonenumber == $_SESSION["account_phonenumber"] && $address == $_SESSION["account_address"]) {
							?>
																				<script>
																				alert('So, you pressed the update button, huh? I see what you did, lol.');
																				window.location.href='customaccount.php';
																				</script>
																				
																			<?php
						} else {
						$update = mysqli_query($conn, "UPDATE `user` SET username='$username', Nama_Lengkap='$fullname', email='$email', No_Telepon='$phonenumber', Updated_at=now(), Alamat='$address' WHERE ID_User='$check[ID_User]'");
						
						
									
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
																				alert('Update data success.');
																				window.location.href='customaccount.php';
																				</script>
																				
																			<?php
														}
				}
}
				

$sql = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='smartphone.png'");

while($row=mysqli_fetch_array($sql)) {
		
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link href="styles.php" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<script src="script.js" defer></script>
	<script src="newsletter.js" defer></script>
	<style>
form {
   width: 50%;
        margin-left : 25%
}

.input-element{
font-size: 100px; // for say a select
width: 400px;
}

textarea {
  resize: none;
}
	</style>

  <title>SI Gadget | Menjual Smartphone dan Aksesoris</title>
								<link rel="shortcut icon" type="image" href="image/<?php echo $row['Filename']; ?>"> <?php } ?>
  </head>
<body>
<!----navigation--->
<nav class="navbar">
    <div class="navbar-left"  style="position: relative; left: 140px"><div class="logo" onclick="location.href='home.php';"></div></div>
    <div class="navbar-right"  style="position: relative; left: 140px">
        <ul>
            <li><a href="Bagian David/iPhoneproducts.php">iPhone</a>
			<ul class="dropdown-list">
                    <li><a class="dropdown" href="Bagian David/iphone12proproducts.php">iPhone 12 Pro</a></li>
                    <li><a class="dropdown" href="Bagian David/PromotioniPhone11.php">iPhone 12</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhone11.php">iPhone 11</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhoneXR.php">iPhone XR</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhoneSE.php">iPhone SE</a></li>
            </ul>
          </li>

                              	<li><a href="Bagian David/androidproducts.php">Android</a>
																			<ul class="dropdown-list">
																					<li><a class="dropdown" href="Bagian Migel/huawei.new.php">Huawei</a></li>
																					<li><a class="dropdown" href="Bagian Migel/samsungads.new.php">Samsung</a></li>
																					<li><a class="dropdown" href="Bagian Migel/xiaomi.new.php">Xiaomi</a></li>
																					<li><a class="dropdown" href="Bagian Migel/asus.new.php">ASUS</a></li>
																					<li><a class="dropdown" href="Bagian Migel/realme.php">Realme</a></li>
																				</ul>
                                  </li>
																																		<li><a href="Bagian David/accessoriesproducts.php">Aksesoris</a>
																																		<ul class="dropdown-list">
																																				<li><a class="dropdown" href="Bagian Tius/headphone.php">Headphone</a></li>
																																				<li><a class="dropdown" href="Bagian Tius/wirelesscharger.php">Powerbank</a></li>
																																				<li><a class="dropdown" href="Bagian Tius/aksesorislain.php">Aksesoris Lain</a></li>
																																			</ul>
                                                                    </li>

																																																			<li><a href="Bagian Sanctus/eventpromo.php">Event and Promo</a>

																																																													<li><a href="#">Layanan</a>
																																																														<ul class="dropdown-list">
																																																															<li><a class="dropdown" href="Bagian Sanctus/About.php">About</a></li>
																																																															<li><a class="dropdown" href="Bagian Sanctus/lokasitoko.php">Lokasi Toko</a></li>
																																																															<li><a class="dropdown" href="Bagian Sanctus/repair.php">Repair</a></li>
																																																														</ul>

                                                                                                                            <li>
																															<?php
																															if(empty($_SESSION['account_username'])) {
																																echo "<a href='Bagian David/account.php'>Login</a>";
																																} else if(!empty($_SESSION['account_username'])) {
																																	echo "<a><strong>$_SESSION[account_username]</strong></a>";
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
																																																								echo "<a href='sigadgetdashboard.php'>Dashboard</a>";
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


<?php
function endsWith($string, $endString)
{
    $len = strlen($endString);
    if ($len == 0) {
        return true;
    }
    return (substr($string, -$len) === $endString);
}
  

if(endsWith($check['username'],"s"))
    echo "<h2 style='text-align: Center;'>$check[username]' Account</h2>";
else
    echo "<h2 style='text-align: Center;'>$check[username]'s Account</h2>";
?>

<form method="POST" action="customaccount.php" enctype="multipart/form-data">

	Username : <input type="text" name="username" value="<?php echo $check['username'] ?>" placeholder="Enter Username" Required>
  <br><br>
	Nama Lengkap : <input type="text" name="fullname" placeholder="Enter Full Name" value="<?php echo $check['Nama_Lengkap'] ?>" Required>
  <br><br>
	Email : <input type="text" name="email" placeholder="Enter Email" value="<?php echo $check['email'] ?>" Required>
  <br><br>
	Nomor Telepon : <input type="text" name="phonenumber" placeholder="Enter Email" value="<?php echo $check['No_Telepon'] ?>" Required>
  <br><br>
	Alamat (Max 100 Karakter) : <textarea name="address" placeholder="Enter Address" rows="8" cols="50" maxlength="100"><?php echo $check['Alamat'] ?></textarea>
  <br><br>

   <input type="submit" name="updatedata" value="Update Data">	

  
  <br><br>
  <input type="button" value="Change Password" onclick="location.href='Bagian David/changepassword.php'" />
  <br><br>
  <input type="button" value="Delete Account" onclick="location.href='Bagian David/deleteaccount.php'" />
  <br><br>
  <input type="button" value="Back" onclick="location.href='home.php'" />
</form>
<br><br>


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
<?php

$conn->close();

?>
</body>
</html>