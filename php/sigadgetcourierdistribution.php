<?php
include "sigadgetconnection.php";

// register account
	if(isset($_POST['registercourier'])) {
		$name = mysqli_real_escape_string($conn,$_POST['couriername']);
		$type = mysqli_real_escape_string($conn,$_POST['couriertype']);
		$price = mysqli_real_escape_string($conn,$_POST['courierprice']);

					$insert = mysqli_query($conn,"INSERT INTO `kurir`(`ID_Kurir`, `Nama_Kurir`, `Produk_Kurir`, `Harga_Kurir`, `Created_at`) 
					VALUES ('NULL','$name','$type','$price',now())");
					
					$conn->close();
					
					if($insert) {
									?>
																				<script>
																				alert('Register courier success, back to dashboard');
																				window.location.href='sigadgetcourierdistribution.php';
																				</script>
																				
																			<?php
									
								} else {
									echo mysqli_error();
				}

	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Input Courier SI Gadget</title>
</head>
<body>

<form method="POST" action="sigadgetinputcourier.php">
	Nama Kurir : <input type="text" name="couriername" placeholder="Enter Courier Name" Required>
  <br><br>
	Produk Kurir : <input type="text" name="couriertype" placeholder="Enter Courier Type" Required>
  <br><br>
	Tarif Kurir : <input type="text" name="courierprice" placeholder="Enter Courier Price" Required>
  <br><br>

  <input type="submit" name="registercourier" value="Register Courier">
  <br><br>
  <input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>