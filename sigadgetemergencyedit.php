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

if(isset($_POST['updateproduct'])) {
	$payment = mysqli_real_escape_string($conn,$_POST['statuspembayaran']);
	$delivery = mysqli_real_escape_string($conn,$_POST['statuspengiriman']);

		$updatepayment = mysqli_query($conn, "UPDATE `pembayaranuser` SET Updated_at=now(), Status_Pembayaran='$payment'");
		$updatedelivery = mysqli_query($conn, "UPDATE `pengiriman` SET Updated_at=now(), Status_Pengiriman='$delivery'");
		
		if($updatepayment && $updatedelivery) {
																			?>
																				<script>
																				alert('Edit delivery status and payment status success.');
																				window.location.href='sigadgettransactions.php';
																				</script>
																			<?php
																} else {
																	?>
																				<script>
																				alert('Edit delivery status and payment status failed.');
																				window.location.href='sigadgettransactions.php';
																				</script>
																			<?php
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
                    <li><a class="dropdown" href="Bagian David/iphone12proproducts.php">iPhone 12 Pro</a></li>
                    <li><a class="dropdown" href="Bagian David/iphone12products.php">iPhone 12</a></li>
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
																																																															<li><a class="dropdown" href="Bagian David/nomorresi.php">Track Resi</a></li>
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
																																																								echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetproducts.php'>Products</a></li>";
																																																								echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetsales.php'>Sales</a></li>";
																																																								echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetcourierdistributions.php'>Couriers & Distributions</a></li>";
																																																								echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetcustomers.php'>Customers</a></li>";
																																																								echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetadmins.php'>Admins</a></li>";
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
	//SQL to check data
$checkdata = mysqli_query($conn,"SELECT transaksi.ID_Transaksi,user.Nama_Lengkap, 
	pembayaran.Nama_Pembayaran, pembayaran.Jenis_Pembayaran, pembayaranuser.ID_Pembayaran,pembayaranuser.Status_Pembayaran, pembayaranuser.Updated_at, 
	kurir.Nama_Kurir, kurir.Produk_Kurir, pengiriman.ID_Pengiriman, pengiriman.Nomor_Resi, kurir.Harga_Kurir, pengiriman.Status_Pengiriman, 
	produk.Nama_Produk, penjualan.Jumlah_Terjual, penjualan.Total_Harga, pembayaranuser.Created_at 
	FROM transaksi,user,pembayaran,pembayaranuser,pengiriman,kurir,produk,penjualan 
	WHERE transaksi.ID_User=user.ID_User AND 
	transaksi.ID_Pembayaran=pembayaranuser.ID_Pembayaran AND 
	pembayaran.Kode_Pembayaran=pembayaranuser.Kode_Pembayaran AND 
	transaksi.ID_Transaksi=pengiriman.ID_Transaksi AND 
	pengiriman.ID_Kurir=kurir.ID_Kurir AND 
	produk.ID_Produk = penjualan.ID_Produk AND 
	transaksi.ID_Penjualan = penjualan.ID_Penjualan AND 
	transaksi.ID_Transaksi = '$_GET[idtransaksi]'");
	//Fetch to form
$check = mysqli_fetch_array($checkdata);



?>
  <title>Emergency Edit SI Gadget</title>
</head>
<body>
<h2>Emergency Edit</h2>
<br>
<form method="POST" action="sigadgetemergencyedit.php" enctype="multipart/form-data">
	<p>ID Transaksi : <?php echo $check['ID_Transaksi'] ?></p>
	
	<br>
 
	<p>Nama User : <?php echo $check['Nama_Lengkap'] ?></p>
	
	<br>
	
	<p>Nama Pembayaran : <?php echo $check['Nama_Pembayaran'] ?></p>
	
	<p>Jenis Pembayaran : <?php echo $check['Jenis_Pembayaran'] ?></p>
	
	Status Pembayaran : <select name="statuspembayaran">
						<?php
							if($check['Status_Pembayaran']=='Pending') {
								echo "<option value='Pending'>Pending</option>";
								echo "<option value='Terbayar'>Terbayar</option>";
							} else if($check['Status_Pembayaran']=='Terbayar') {
								echo "<option value='Terbayar'>Terbayar</option>";
								echo "<option value='Pending'>Pending</option>";
							}
						?>
					</select>
	<br>
	
	<p>Waktu Dibuat Pembayaran(Pending) : <?php echo $check['Created_at'] ?></p>
	
	<p>Waktu Dibayar(Terbayar) : <?php echo $check['Updated_at'] ?></p>
	
	<br>
	
	<p>Kurir : <?php echo $check['Nama_Kurir'] ?> <?php echo $check['Produk_Kurir'] ?> / <?php echo $check['Harga_Kurir'] ?></p>
	
	<p>Nomor Resi : <?php echo $check['Nomor_Resi'] ?></p>
	
	Status Pengiriman : <select name="statuspengiriman">
						<?php
							if($check['Status_Pengiriman']=='Diproses') {
								echo "<option value='Diproses'>Diproses</option>";
								echo "<option value='Dikirim'>Dikirim</option>";
								echo "<option value='Diterima'>Diterima</option>";
								echo "<option value='Dibatalkan'>Dibatalkan</option>";
								echo "<option value='Pending'>Pending</option>";
									} else if($check['Status_Pengiriman']=='Dikirim') {
											echo "<option value='Dikirim'>Dikirim</option>";
										echo "<option value='Diterima'>Diterima</option>";
										echo "<option value='Dibatalkan'>Dibatalkan</option>";
										echo "<option value='Pending'>Pending</option>";
										echo "<option value='Diproses'>Diproses</option>";
											} else if($check['Status_Pengiriman']=='Diterima') {
												echo "<option value='Diterima'>Diterima</option>";
												echo "<option value='Dibatalkan'>Dibatalkan</option>";
												echo "<option value='Pending'>Pending</option>";
												echo "<option value='Diproses'>Diproses</option>";
												echo "<option value='Dikirim'>Dikirim</option>";
													}	else if($check['Status_Pengiriman']=='Dibatalkan') {
														echo "<option value='Dibatalkan'>Dibatalkan</option>";
														echo "<option value='Pending'>Pending</option>";
														echo "<option value='Diproses'>Diproses</option>";
														echo "<option value='Dikirim'>Dikirim</option>";
														echo "<option value='Diterima'>Diterima</option>";
															} else if($check['Status_Pengiriman']=='Pending') {
																echo "<option value='Pending'>Pending</option>";
																echo "<option value='Diproses'>Diproses</option>";
																echo "<option value='Dikirim'>Dikirim</option>";
																echo "<option value='Diterima'>Diterima</option>";
																echo "<option value='Dibatalkan'>Dibatalkan</option>";
															}
						?>
					</select>
	
	<br>
	
	<p>Nama Produk : <?php echo $check['Nama_Produk'] ?></p>
	
	<p>Jumlah Beli : <?php echo $check['Jumlah_Terjual'] ?></p>
	
	<p>Total : <?php echo $check['Total_Harga'] ?></p>
	<br>
	
  <input type="submit" name="updateproduct" value="Update Transactions">
  <br><br>
  <input type="button" value="Back" onclick="location.href='sigadgettransactions.php'" />
  <br><br>
</form>

<?php
$conn->close();
?>

</body>
</html>