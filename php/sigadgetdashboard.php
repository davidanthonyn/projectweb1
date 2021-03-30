<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);

session_start();
	
	if(empty($_SESSION['username'])) {
		header('location: sigadgetsignin.php');
	}
	
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: sigadgetsignin.php');
	}

if(isset($_POST['sortallcustomers'])) {
	$sql = "SELECT * FROM penjualan ORDER BY Jumlah_Terjual DESC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["ID_Transaksi"] . "</td><td>" . 
	  $row["ID_Produk"] . "</td><td>" . $row["Jumlah_Terjual"] . 
	  "</td><td>" . $row["Total Pendapatan"] . "</td><td>" . $row["Waktu Penjualan"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
}

if(isset($_POST['sortalladmins'])) {
	$sql = "SELECT * FROM penjualan ORDER BY Jumlah_Terjual DESC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["ID_Transaksi"] . "</td><td>" . 
	  $row["ID_Produk"] . "</td><td>" . $row["Jumlah_Terjual"] . 
	  "</td><td>" . $row["Total Pendapatan"] . "</td><td>" . $row["Waktu Penjualan"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
}




?>
<!DOCTYPE html>
<html>
<head>
  <title>SI Gadget Admin Dashboard</title>
</head>
<body>
<h1>SI Gadget Admin Dashboard</h1><br>
<h3>Welcome, <strong><?php echo $_SESSION['username']?></strong></h3>
<br>

<form method="POST" action="sigadgetdashboard.php">
<input type="button" value="Show All Transaction" onclick="location.href='sigadgetdashboardtransactions.php'" /><br><br>

<input type="button" value="Show All Products" onclick="location.href='sigadgetdashboardproducts.php'" /><br><br>

<input type="button" value="Show All Sales" onclick="location.href='sigadgetdashboardsales.php'" /><br><br>

<input type="submit" name="sortallcustomers" value="Show All Customers"/><br><br>

<input type="submit" name="sortalladmins" value="Show All Admins"/><br><br>


<input type="button" value="Insert New Product" onclick="location.href='sigadgetinputproduct.php'" /><br><br>
<input type="button" value="Insert New Courier" onclick="location.href='sigadgetinputcourier.php'" /><br><br>
<input type="button" value="Make new admin" onclick="location.href='sigadgetsignupadmin.php'" /><br><br>
<button><a href="sigadgetsignin.php">Sign out</a></button>

</form>

</body>
</html>