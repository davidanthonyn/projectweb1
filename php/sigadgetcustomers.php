<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);

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
  <title>SI Gadget Customer Database</title>
</head>
<body>
<h1>SI Gadget Customer Database</h1><br>
<br>

<input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" /><br><br>

</body>
</html>