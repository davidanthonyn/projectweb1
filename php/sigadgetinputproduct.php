<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);

// register account
	if(isset($_POST['registerproduct'])) {
		$name = mysqli_real_escape_string($conn,$_POST['productname']);
		$type = mysqli_real_escape_string($conn,$_POST['producttype']);
		$price = mysqli_real_escape_string($conn,$_POST['price']);
		$stock = mysqli_real_escape_string($conn,$_POST['stock']);

					$insert = mysqli_query($conn,"INSERT INTO `produk`(`ID_Produk`, `Nama_Produk`, `Jenis_Produk`, `Harga_Produk`, `Stok_Produk`, `Created_at`) 
					VALUES ('NULL','$name','$type','$price','$stock',now())");
					
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
  <title>Input Product SI Gadget</title>
</head>
<body>

<form method="POST" action="sigadgetinputproduct.php">
	Nama Produk : <input type="text" name="productname" placeholder="Enter Product Name" Required>
  <br><br>
	Jenis Produk : <input type="text" name="producttype" placeholder="Enter Product Type" Required>
  <br><br>
	Harga Produk : <input type="text" name="price" placeholder="Enter Price" Required>
  <br><br>
	Stok Produk : <input type="text" name="stock" placeholder="Enter Stock" Required>
  <br><br>

  <input type="submit" name="registerproduct" value="Register Product">
  <br><br>
  <input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>