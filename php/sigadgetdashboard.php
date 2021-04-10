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
  <title>SI Gadget Admin Dashboard</title>
</head>
<body>
<h1>SI Gadget Admin Dashboard</h1><br>
<h3>Welcome, <strong><?php echo $_SESSION['username']?></strong></h3>
<br>

<input type="button" value="Transactions" onclick="location.href='sigadgetdashboardtransactions.php'" /><br><br>

<input type="button" value="Products" onclick="location.href='sigadgetdashboardproducts.php'" /><br><br>

<input type="button" value="Sales" onclick="location.href='sigadgetdashboardsales.php'" /><br><br>

<input type="button" value="Couriers & Distributions" onclick="location.href='sigadgetcourierdistribution.php'" /><br><br>

<input type="button" onclick="location.href='sigadgetcustomers.php'" value="Customers"/><br><br>

<input type="button" onclick="location.href='sigadgetadmins.php'" value="Admins"/><br><br>

<input type="button" value="Pictures" onclick="location.href='sigadgetregisterimage.php'" /><br><br>

<button><a href="sigadgetsignin.php">Sign out</a></button>


</body>
</html>