<!DOCTYPE html>
<html>
<head>
  <title>Delete Product Success!</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET['id'];
$sql = "DELETE FROM produk WHERE ID_Produk = '$id'";
	$result = $conn->query($sql);
	
	if($result) {
		echo "Delete product success.";
	} else {
		echo "Failed to delete product.";
	}
?>

<form>
<input type="button" value="Back to dashboard" onclick="location.href='sigadgetdashboardproducts.php'" />
</form>

</body>
</html>