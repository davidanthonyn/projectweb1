<?php
include "sigadgetheaderhome.php";

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
		
	
?>

<!DOCTYPE html>
<html>
<head>
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

  <title>Emergency Edit | SI Gadget</title>
  </head>
<body>

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