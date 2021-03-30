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
	$sql = "SELECT * FROM user WHERE userlevel='member'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID User</th>
				<th>Username</th>
				<th>Nama Lengkap</th>
				<th>Email</th>
				<th>Nomor Telepon</th>
				<th>Alamat</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_User"] . "</td><td>" . $row["username"] . "</td><td>" . 
	  $row["Nama_Lengkap"] . "</td><td>" . $row["email"] . 
	  "</td><td>" . $row["No_Telepon"] . "</td><td>" . $row["Alamat"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
}

if(isset($_POST['sortalladmins'])) {
	$sql = "SELECT * FROM user WHERE userlevel='admin'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID User</th>
				<th>Username</th>
				<th>Nama Lengkap</th>
				<th>Email</th>
				<th>Nomor Telepon</th>
				<th>Alamat</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_User"] . "</td><td>" . $row["username"] . "</td><td>" . 
	  $row["Nama_Lengkap"] . "</td><td>" . $row["email"] . 
	  "</td><td>" . $row["No_Telepon"] . "</td><td>" . $row["Alamat"] . "</td></tr>";
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