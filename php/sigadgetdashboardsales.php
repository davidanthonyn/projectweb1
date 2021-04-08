<html>
<head>
<title>SI Gadget Products Sales</title>
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
</head>
	<body>
	<h1> Dashboard Sales </h1>
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);

// output data sales by quantity desc
if(isset($_POST['sortallsales']) && $_POST['sortallsales'] == 'qtydesc') {
	echo "<h3>Show All Sales Ordered By Quantity Descending</h3>";
	$sql = "SELECT * FROM penjualan ORDER BY Jumlah_Terjual DESC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Penjualan</th>
				<th>ID Transaksi</th>
				<th>ID Produk</th>
				<th>Jumlah Terjual</th>
				<th>Total Pendapatan</th>
				<th>Waktu Penjualan</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["ID_Transaksi"] . "</td><td>" . 
	  $row["ID_Produk"] . "</td><td>" . $row["Jumlah_Terjual"] . 
	  "</td><td>" . $row["Total_Pendapatan"] . "</td><td>" . $row["Created_at"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by total salary desc
if(isset($_POST['sortallsales']) && $_POST['sortallsales'] == 'pricedesc') {
	echo "<h3>Show All Sales Ordered By Price Descending</h3>";
	$sql = "SELECT * FROM penjualan ORDER BY Total_Pendapatan DESC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Penjualan</th>
				<th>ID Transaksi</th>
				<th>ID Produk</th>
				<th>Jumlah Terjual</th>
				<th>Total Pendapatan</th>
				<th>Waktu Penjualan</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["ID_Transaksi"] . "</td><td>" . 
	  $row["ID_Produk"] . "</td><td>" . $row["Jumlah_Terjual"] . 
	  "</td><td>" . $row["Total_Pendapatan"] . "</td><td>" . $row["Created_at"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order time desc
if(isset($_POST['sortallsales']) && $_POST['sortallsales'] == 'timedesc') {
	echo "<h3>Show All Sales Ordered By Time Descending</h3>";
	$sql = "SELECT * FROM penjualan ORDER BY Created_at DESC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Penjualan</th>
				<th>ID Transaksi</th>
				<th>ID Produk</th>
				<th>Jumlah Terjual</th>
				<th>Total Pendapatan</th>
				<th>Waktu Penjualan</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["ID_Transaksi"] . "</td><td>" . 
	  $row["ID_Produk"] . "</td><td>" . $row["Jumlah_Terjual"] . 
	  "</td><td>" . $row["Total_Pendapatan"] . "</td><td>" . $row["Created_at"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

?>
</table><br><br>
<form method="POST" action="sigadgetdashboardsales.php">


<select name="sortallsales">
<option></option>
<option value="qtydesc">Show All Sales Based on Quantity Descending</option>
<option value="pricedesc">Show All Sales Based on Total Price Descending</option>
<option value="timedesc">Show All Sales Based on Time Descending</option>
</select>
<input type="submit" name="submit" value="Get Data" /><br><br>
<input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>