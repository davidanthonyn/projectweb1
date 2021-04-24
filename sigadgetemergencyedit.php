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
 
	<p>Nama User : <?php echo $check['Nama_Lengkap'] ?></p>
	
	<p>Nama Pembayaran : <?php echo $check['Nama_Pembayaran'] ?></p>
	
	<p>Jenis Pembayaran : <?php echo $check['Jenis_Pembayaran'] ?></p>
	
	Status Pembayaran : <select name="status">
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
	
	<p>Waktu Dibuat Pengiriman : <?php echo $check['Created_at'] ?></p>
	
  
	Nama User : <input type="text" name="user" value="<?php echo $check['Nama_Lengkap'] ?>" readonly="readonly" Required>
  <br><br>
	Nama User : <input type="text" name="user" value="<?php echo $check['Nama_Lengkap'] ?>" readonly="readonly" Required>
  <br><br>
  
  
  
	Nama Produk : <input type="text" name="productname" value="<?php echo $check['Nama_Produk'] ?>" placeholder="Enter Product Name" Required>
  <br><br>
	Jenis Produk : <input type="text" name="producttype" value="<?php echo $check['Jenis_Produk'] ?>" placeholder="Enter Product Type" Required>
  <br><br>
	Harga Produk : <input type="text" name="price" placeholder="Enter Price" value="<?php echo $check['Harga_Produk'] ?>" Required>
  <br><br>
	Stok Produk : <input type="text" name="stock" placeholder="Enter Stock" value="<?php echo $check['Stok_Produk'] ?>" Required>
  <br><br>
	Status Produk : <select name="status">
						<option value="Pending">Pending</option>
						<option value="Published">Published</option>
						<option value="Non-Activate">Non-Activate</option>
				</select>
  <br><br>
  
	Brand : <input type="text" name="brand" placeholder="Enter Brand" value="<?php echo $check['Brand'] ?>" Required>
	<br><br>
	Warna : <input type="text" name="color" placeholder="Enter Color" value="<?php echo $check['Warna'] ?>" Required>
	<br><br>
	Jaringan : <input type="text" name="connectproduct" placeholder="Enter Connectivity" value="<?php echo $check['Jaringan'] ?>" Required>
	<br><br>
	OS : <input type="text" name="os" placeholder="Enter OS" value="<?php echo $check['OS'] ?>" Required>
	<br><br>
	Chipset : <input type="text" name="chip" placeholder="Enter Chipset" value="<?php echo $check['Chipset'] ?>" Required>
	<br><br>
	RAM : <input type="text" name="ram" placeholder="Enter RAM" value="<?php echo $check['RAM'] ?>" Required>
	<br><br>
	Storage : <input type="text" name="rom" placeholder="Enter Storage" value="<?php echo $check['Storage'] ?>" Required>
	<br><br>
	Layar : <input type="text" name="screen" placeholder="Enter Screen" value="<?php echo $check['Layar'] ?>" Required>
	<br><br>
	Kamera Depan : <input type="text" name="frontcamera" placeholder="Enter Front Camera" value="<?php echo $check['Kamera_Depan'] ?>" Required>
	<br><br>
	Kamera Belakang : <input type="text" name="backcamera" placeholder="Enter Back Camera" value="<?php echo $check['Kamera_Belakang'] ?>" Required>
	<br><br>
	Baterai : <input type="text" name="battery" placeholder="Enter Battery" value="<?php echo $check['Baterai'] ?>" Required>
	<br><br>
	Tipe Headphone : <input type="text" name="typeheadphone" placeholder="Enter Headphone Type" value="<?php echo $check['Tipe_Headphone'] ?>" Required>
	<br><br>
	Konektivitas Headphone : <input type="text" name="connectionheadphone" placeholder="Enter Headphone Connection" value="<?php echo $check['Konektivitas_Headphone'] ?>" Required>
	<br><br>
	Product Image : 
	
	<br><br><?php
						include "sigadgetconnection.php";
						$sql = "SELECT image FROM produk WHERE Nama_Produk ='$_GET[name]'";
						$result = mysqli_query($conn, $sql);
						while($row = mysqli_fetch_array($result)) {
								echo "<img src='image/{$row['image']}' width='20%' height='20%'>";
										echo "</div>";
						}
	?>
	<br><br>
	
	<input type="file" name="file" placeholder="Enter Product Image" value="<?php echo $check['image']; ?>"> <strong><?php echo $statusMsg;?></strong>
	<br><br>
	
	

  <input type="submit" name="updateproduct" value="Update Product">
  <br><br>
  <input type="button" value="Back" onclick="location.href='sigadgetdashboardproducts.php'" />
</form>

</body>
</html>