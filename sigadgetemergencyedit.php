<?php
include "sigadgetconnection.php";

session_start();

if(empty($_SESSION['account_username'])) {
	header('location: home.php');
} else if(!empty($_SESSION['account_username'])) {
if(!empty($_SESSION['account_userlevel']) && $_SESSION['account_userlevel']=='admin') {
	
	} else {
		header('location: home.php');
	}
}

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: home.php');
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
	table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
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
                    <li><a class="dropdown" href="Bagian David/PromotioniPhoneSE.php">iPhone SE</a></li>
                    <li><a class="dropdown" href="Bagian David/PromotioniPhone11Pro.php">iPhone 11 Pro</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhone11.php">iPhone 11</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhoneXS.php">iPhone XS</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhoneXR.php">iPhone XR</a></li>
            </ul>
          </li>

                              	<li><a href="Bagian Migel/HalamanAndroid.php">Android</a>
																			<ul class="dropdown-list">
																					<li><a class="dropdown" href="Bagian Migel/huawei.new.php">Huawei</a></li>
																					<li><a class="dropdown" href="Bagian Migel/samsungads.new.php">Samsung</a></li>
																					<li><a class="dropdown" href="Bagian Migel/xiaomi.new.php">Xiaomi</a></li>
																					<li><a class="dropdown" href="Bagian Migel/asus.new.php">ASUS</a></li>
																					<li><a class="dropdown" href="Bagian Migel/realme.php">Realme</a></li>
																				</ul>
                                  </li>
																																		<li><a href="Bagian Tius/halamanaksesoris.php">Aksesoris</a>
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
<br>
<?php
$checkdata = mysqli_query($conn,"SELECT * FROM transaksi,pembayaran,pengiriman WHERE transaksi.ID_Transaksi = '$_GET[idtransaksi]' 
AND pembayaran.ID_Pembayaran= '$_GET[idpembayaran]' AND pengirimnan.ID_Pengiriman = '$_GET[idpengiriman]'");
$check = mysqli_fetch_array($checkdata);

?>

</body>
</html>