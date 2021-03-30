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
</head>
	<body>
		<h1> Dashboard Transaction </h1>
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);

// output data order by transaction id
if(isset($_POST['sortalltransaction']) && $_POST['sortalltransaction'] == 'iddesc') {
	echo "<h3>Show All Transactions By Order ID Transaction Ascending</h3>";
	$sql = "SELECT * FROM transaksi ORDER BY ID_Transaksi";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Transaksi</th>
				<th>ID User</th>
				<th>ID Produk</th>
				<th>Jumlah Beli</th>
				<th>ID Pembayaran</th>
				<th>ID Kurir</th>
				<th>Waktu Pembelian</th>
				<th>Status Transaksi</th>
			</tr>";
		
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Transaksi"] . "</td><td>" . $row["ID_User"] . "</td><td>" . 
	  $row["ID_Produk"] . "</td><td>" . $row["Jumlah_Beli"] . 
	  "</td><td>" . $row["ID_Pembayaran"] . "</td><td>" . $row["ID_Kurir"] .  
	  "</td><td>" . $row["Waktu_Pembelian"] . "</td><td>" . $row["Status_Transaksi"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by proceed only
if(isset($_POST['sortalltransaction']) && $_POST['sortalltransaction'] == 'proceed') {
	echo "<h3>Show All Proceed Transactions</h3>";
	echo "";
	$sql = "SELECT * FROM transaksi WHERE Status_Transaksi='Diproses'";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Transaksi</th>
				<th>ID User</th>
				<th>ID Produk</th>
				<th>Jumlah Beli</th>
				<th>ID Pembayaran</th>
				<th>ID Kurir</th>
				<th>Waktu Pembelian</th>
				<th>Status Transaksi</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Transaksi"] . "</td><td>" . $row["ID_User"] . "</td><td>" . 
	  $row["ID_Produk"] . "</td><td>" . $row["Jumlah_Beli"] . 
	  "</td><td>" . $row["ID_Pembayaran"] . "</td><td>" . $row["ID_Kurir"] .  
	  "</td><td>" . $row["Waktu_Pembelian"] . "</td><td>" . $row["Status_Transaksi"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by today
if(isset($_POST['sortalltransaction']) && $_POST['sortalltransaction'] == 'today') {
	echo "<h3>Show All Today Transactions</h3>";
	echo "";
	$sql = "SELECT * FROM transaksi WHERE DATE(Waktu_Pembelian) = CURDATE()";
	$result = $conn->query($sql);
	
	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Transaksi</th>
				<th>ID User</th>
				<th>ID Produk</th>
				<th>Jumlah Beli</th>
				<th>ID Pembayaran</th>
				<th>ID Kurir</th>
				<th>Waktu Pembelian</th>
				<th>Status Transaksi</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Transaksi"] . "</td><td>" . $row["ID_User"] . "</td><td>" . 
	  $row["ID_Produk"] . "</td><td>" . $row["Jumlah_Beli"] . 
	  "</td><td>" . $row["ID_Pembayaran"] . "</td><td>" . $row["ID_Kurir"] .  
	  "</td><td>" . $row["Waktu_Pembelian"] . "</td><td>" . $row["Status_Transaksi"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

?>
</table><br><br>
<form method="POST" action="sigadgetdashboardtransactions.php">


<select name="sortalltransaction">
<option></option>
<option value="iddesc">Show All Transaction Which Transaction ID Descending</option>
<option value="proceed">Show All Proceed Transaction</option>
<option value="today">Show All Today Transaction</option>
</select>
<input type="submit" name="submit" value="Get Data" /><br><br>
<input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>