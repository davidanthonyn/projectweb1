<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);

// register account
	if(isset($_POST['registerproducttype'])) {
		$jenis = mysqli_real_escape_string($conn,$_POST['jenisproduk']);

			$query = "SELECT Jenis_Produk FROM jenisproduk WHERE Jenis_Produk='$jenis'";
			$result = mysqli_query($conn, $query);
			
				if(mysqli_num_rows($result) == 1) {
					array_push($errors, "Product type already exists!");		
				} else {
					$insert = mysqli_query($conn,"INSERT INTO `jenisproduk`(`ID_Jenis_Produk`, `Jenis_Produk`) 
					VALUES ('NULL','$jenis')");
					
					$conn->close();
					
					header('location: sigadgetinputsuccess.php');
				
								if(!$insert)
								{
									echo mysqli_error();
								}
				}

	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration SI Gadget</title>
</head>
<body>

<form method="POST" action="sigadgetinputproducttype.php">
	Jenis Produk : <input type="text" name="jenisproduk" placeholder="Enter Product Type" Required>
  <br><br>

  <input type="submit" name="registerproducttype" value="Input Product Type">
  <br><br>
  <input type="button" value="Cancel" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>