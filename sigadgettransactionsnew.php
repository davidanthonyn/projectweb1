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

<center>
<h3>All Transactions</h3>
<form method="POST" action="">
	<input type="text" name="keyword" size="40" autofocus 
	placeholder="Masukkan keyword pencarian..." autocomplete="off"
	>
	<button type="submit" name="cari">Cari</button><br><br>
	<button type="submit" name="semua">Tampilkan Semua Transaksi</button>
</form>
<br>
<center>

<?php
//Transaksi berdasarkan pencarian
if(isset($_POST["cari"])) {
	$transaksi = ($_POST["keyword"]);
	
	$sql = "
	SELECT transaksi.ID_Transaksi,user.Nama_Lengkap, 
	pembayaran.Nama_Pembayaran, pembayaran.Jenis_Pembayaran, pembayaranuser.ID_Pembayaran,pembayaranuser.Status_Pembayaran, pembayaranuser.Updated_at, 
	kurir.Nama_Kurir, kurir.Produk_Kurir, pengiriman.ID_Pengiriman, pengiriman.Nomor_Resi, kurir.Harga_Kurir, pengiriman.Status_Pengiriman, 
	produk.Nama_Produk, penjualan.Jumlah_Terjual, penjualan.Total_Harga, pembayaranuser.Created_at 
	FROM transaksi,user,pembayaran,pembayaranuser,pengiriman,kurir,produk,penjualan 
	WHERE transaksi.ID_User = user.ID_User AND 
	pengiriman.ID_User = user.ID_User AND 
	pembayaranuser.ID_User = user.ID_User AND 
	transaksi.ID_Pengiriman = pengiriman.ID_Pengiriman AND 
	pengiriman.ID_Kurir = kurir.ID_Kurir AND 
	pengiriman.ID_Transaksi = transaksi.ID_Transaksi AND 
	pembayaranuser.ID_Transaksi = transaksi.ID_Transaksi AND 
	penjualan.ID_Produk = produk.ID_Produk AND 
	transaksi.ID_Penjualan = penjualan.ID_Penjualan AND 
	transaksi.ID_Pembayaran = pembayaranuser.ID_Pembayaran AND 
	pembayaran.Kode_Pembayaran = pembayaranuser.Kode_Pembayaran AND 
	user.Nama_Lengkap LIKE '%$transaksi%' OR 
	pembayaran.Nama_Pembayaran LIKE '%$transaksi%' OR 
	pembayaran.Jenis_Pembayaran LIKE '%$transaksi%' OR 
	pembayaranuser.Status_Pembayaran LIKE '%$transaksi%' OR 
	kurir.Nama_Kurir LIKE '%$transaksi%' OR 
	kurir.Produk_Kurir LIKE '%$transaksi%' OR 
	pengiriman.Nomor_Resi LIKE '%$transaksi%' OR 
	pengiriman.Status_Pengiriman LIKE '%$transaksi%' OR 
	produk.Nama_Produk LIKE '%$transaksi%'";
	
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Transaksi</th>
				<th>Nama User</th>
				<th>Nama / Jenis Pembayaran / Status Pembayaran / Waktu Pembayaran</th>
				<th>Kurir / Nomor Resi / Biaya Kurir / Status Pengiriman</th>
				<th>Nama Produk / Kuantitas / Total Harga</th>
				<th>Waktu Dibuat Transaksi</th>
				<th colspan='3' style='text-align:center'>Action</th>
			</tr>";
		
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Transaksi"] . "</td><td>" . $row["Nama_Lengkap"] . "</td><td>" . 
	  $row["Nama_Pembayaran"] . " / " . $row["Jenis_Pembayaran"] . " / " . $row["Status_Pembayaran"] . " / " . $row["Updated_at"] . "</td><td>" 
	  . $row["Nama_Kurir"] . " " . $row["Produk_Kurir"] .  " / " . $row["Nomor_Resi"] . " / " . $row["Harga_Kurir"] . " / " . $row["Status_Pengiriman"] . "</td><td>" 
	  . $row["Nama_Produk"] . " / " . $row["Jumlah_Terjual"] . " / " . $row["Total_Harga"] . "</td><td>" 
	  . $row["Created_at"] . "</td><td><a href= 'sigadgetemergencyedit.php?idtransaksi=$row[ID_Transaksi]'>Emergency Edit</a></td>";
	  
	  if($row['Status_Pembayaran']=='Pending') {
		echo "<td><a href= 'sigadgetchanges.php?oppbayar=pendingtobayar&idbayar=$row[ID_Pembayaran]&idkirim=$row[ID_Pengiriman]'>Pending to Terbayar</a></td>";
	  } else if($row['Status_Pembayaran']=='Terbayar') {
		echo "<td><a>Paid</a></td>";
	  }
	  
	  if($row['Status_Pengiriman']=='Pending' && $row['Status_Pembayaran']=='Pending') {
		  echo "<td><a>Menunggu Proses Pembayaran Selesai</a></td></tr>";
	  } else if($row['Status_Pengiriman']=='Diproses' && $row['Status_Pembayaran']=='Terbayar') {
		echo "<td><a href= 'sigadgetchanges.php?opppengiriman=proceedtosend&id=$row[ID_Pengiriman]'>Diproses to Dikirim</a></td></tr>";
	  } else if($row['Status_Pengiriman']=='Dikirim' && $row['Status_Pembayaran']=='Terbayar') {
		  echo "<td><a href= 'sigadgetchanges.php?opppengiriman=sendtoreceive&id=$row[ID_Pengiriman]'>Dikirim to Diterima</a></td></tr>";
	} else if($row['Status_Pengiriman']=='Diterima' && $row['Status_Pembayaran']=='Terbayar') {
		  echo "<td><a>Pesanan Diterima</a></td></tr>";
	}
  }
  echo "</table>";
} else {
  echo "0 results";
}

}


//Semua transaksi
if(isset($_POST['semua'])) {
	echo "<h3>By Order ID Transaction Ascending</h3>";
	echo "<br>";
	
	$sql = "SELECT transaksi.ID_Transaksi,user.Nama_Lengkap, 
	pembayaran.Nama_Pembayaran, pembayaran.Jenis_Pembayaran, pembayaranuser.ID_Pembayaran,pembayaranuser.Status_Pembayaran, pembayaranuser.Updated_at, 
	kurir.Nama_Kurir, kurir.Produk_Kurir, pengiriman.ID_Pengiriman, pengiriman.Nomor_Resi, kurir.Harga_Kurir, pengiriman.Status_Pengiriman, 
	produk.Nama_Produk, penjualan.Jumlah_Terjual, penjualan.Total_Harga, pembayaranuser.Created_at 
	FROM transaksi,user,pembayaran,pembayaranuser,pengiriman,kurir,produk,penjualan 
	WHERE transaksi.ID_User = user.ID_User AND 
	pengiriman.ID_User = user.ID_User AND 
	pembayaranuser.ID_User = user.ID_User AND 
	transaksi.ID_Pengiriman = pengiriman.ID_Pengiriman AND 
	pengiriman.ID_Kurir = kurir.ID_Kurir AND 
	pengiriman.ID_Transaksi = transaksi.ID_Transaksi AND 
	pembayaranuser.ID_Transaksi = transaksi.ID_Transaksi AND 
	penjualan.ID_Produk = produk.ID_Produk AND 
	transaksi.ID_Penjualan = penjualan.ID_Penjualan AND 
	transaksi.ID_Pembayaran = pembayaranuser.ID_Pembayaran AND 
	pembayaran.Kode_Pembayaran = pembayaranuser.Kode_Pembayaran 
	ORDER BY ID_Transaksi";

	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Transaksi</th>
				<th>Nama User</th>
				<th>Nama / Jenis Pembayaran / Status Pembayaran / Waktu Pembayaran</th>
				<th>Kurir / Nomor Resi / Biaya Kurir / Status Pengiriman</th>
				<th>Nama Produk / Kuantitas / Total Harga</th>
				<th>Waktu Dibuat Transaksi</th>
				<th colspan='3' style='text-align:center'>Action</th>
			</tr>";
		
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Transaksi"] . "</td><td>" . $row["Nama_Lengkap"] . "</td><td>" . 
	  $row["Nama_Pembayaran"] . " / " . $row["Jenis_Pembayaran"] . " / " . $row["Status_Pembayaran"] . " / " . $row["Updated_at"] . "</td><td>" 
	  . $row["Nama_Kurir"] . " " . $row["Produk_Kurir"] .  " / " . $row["Nomor_Resi"] . " / " . $row["Harga_Kurir"] . " / " . $row["Status_Pengiriman"] . "</td><td>" 
	  . $row["Nama_Produk"] . " / " . $row["Jumlah_Terjual"] . " / " . $row["Total_Harga"] . "</td><td>" 
	  . $row["Created_at"] . "</td><td><a href= 'sigadgetemergencyedit.php?idtransaksi=$row[ID_Transaksi]'>Emergency Edit</a></td>";
	  
	  if($row['Status_Pembayaran']=='Pending') {
		echo "<td><a href= 'sigadgetchanges.php?oppbayar=pendingtobayar&idbayar=$row[ID_Pembayaran]&idkirim=$row[ID_Pengiriman]'>Pending to Terbayar</a></td>";
	  } else if($row['Status_Pembayaran']=='Terbayar') {
		echo "<td><a>Paid</a></td>";
	  }
	  
	  if($row['Status_Pengiriman']=='Pending' && $row['Status_Pembayaran']=='Pending') {
		  echo "<td><a>Menunggu Proses Pembayaran Selesai</a></td></tr>";
	  } else if($row['Status_Pengiriman']=='Diproses' && $row['Status_Pembayaran']=='Terbayar') {
		echo "<td><a href= 'sigadgetchanges.php?opppengiriman=proceedtosend&id=$row[ID_Pengiriman]'>Diproses to Dikirim</a></td></tr>";
	  } else if($row['Status_Pengiriman']=='Dikirim' && $row['Status_Pembayaran']=='Terbayar') {
		  echo "<td><a href= 'sigadgetchanges.php?opppengiriman=sendtoreceive&id=$row[ID_Pengiriman]'>Dikirim to Diterima</a></td></tr>";
	} else if($row['Status_Pengiriman']=='Diterima' && $row['Status_Pembayaran']=='Terbayar') {
		  echo "<td><a>Pesanan Diterima</a></td></tr>";
	}
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
}
?>
<script src="Bagian David/transactions.js">



</script>
</body>
</html>