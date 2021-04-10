<?php
include "sigadgetconnection.php";

// register account
	if(isset($_POST['registerproduct'])) {
		$name = mysqli_real_escape_string($conn,$_POST['couriername']);
		$type = mysqli_real_escape_string($conn,$_POST['couriertype']);
		$price = mysqli_real_escape_string($conn,$_POST['courierprice']);

					$insert = mysqli_query($conn,"INSERT INTO `kurir`(`ID_Kurir`, `Nama_Kurir`, `Jenis_Kurir`, `Harga_Kurir`, `Created_at`) 
					VALUES ('NULL','$name','$type','$price',now())");
					
					$conn->close();
					
					header('location: sigadgetinputsuccess.php');
				
								if(!$insert)
								{
									echo mysqli_error();
								}
				

	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Buy Products</title>
</head>
<body>

<form method="POST" action="sigadgetbuyproduct.php">
	Nama Produk :
	Harga Produk :
	Jumlah Beli :
	Total :
	Alamat :
	Kurir - Produk Kurir: 
	Nama Pembayaran: <input type="text" name="paymentname" placeholder="Enter Payment Name" Required>
	Jenis Pembayaran: <input type="text" name="paymenttype" placeholder="Enter Payment Type" Required>
	Nomor Kartu/No ID: <input type="text" name="paymentid" placeholder="Enter Card Number" Required>
	
	
	
	
	Nama Kurir : <input type="text" name="couriername" placeholder="Enter Courier Name" Required>
  <br><br>
	Jenis Kurir : <input type="text" name="couriertype" placeholder="Enter Courier Type" Required>
  <br><br>
	Tarif Kurir : <input type="text" name="courierprice" placeholder="Enter Courier Price" Required>
  <br><br>

  <input type="submit" name="registercourier" value="Register Courier">
  <input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
  <br><br>
  <input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>