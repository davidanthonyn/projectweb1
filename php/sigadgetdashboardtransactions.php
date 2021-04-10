<html>
<head>
<title>SI Gadget Products Transactions</title>
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
include "sigadgetconnection.php";

// output data order by transaction id
if(isset($_POST['sortalltransaction']) && $_POST['sortalltransaction'] == 'iddesc') {
	echo "<h3>Show All Transactions By Order ID Transaction Ascending</h3>";
	
	$sql = "SELECT transaksi.ID_Transaksi,user.Nama_Lengkap, 
	pembayaran.Nama_Pembayaran, pembayaran.Jenis_Pembayaran, pembayaranuser.Status_Pembayaran, pembayaranuser.Updated_at, 
	kurir.Nama_Kurir, kurir.Produk_Kurir, pengiriman.Nomor_Resi, kurir.Harga_Kurir, pengiriman.Status_Pengiriman, 
	produk.Nama_Produk, penjualan.Jumlah_Terjual, penjualan.Total_Harga, pembayaranuser.Created_at 
	FROM transaksi,user,pembayaran,pembayaranuser,pengiriman,kurir,produk,penjualan 
	WHERE transaksi.ID_User=user.ID_User AND 
	transaksi.ID_Pembayaran=pembayaranuser.ID_Pembayaran AND 
	pembayaran.Kode_Pembayaran=pembayaranuser.Kode_Pembayaran AND 
	transaksi.ID_Transaksi=pengiriman.ID_Transaksi AND 
	pengiriman.ID_Kurir=kurir.ID_Kurir AND
	produk.ID_Produk = penjualan.ID_Produk AND 
	transaksi.ID_Penjualan = penjualan.ID_Penjualan 
	ORDER BY ID_Transaksi";

	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Transaksi</th>
				<th>Nama User</th>
				<th>Nama / Jenis Pembayaran / Status Pembayaran / Waktu Pembayaran</th>
				<th>Kurir / Nomor Resi / Biaya Kurir / Status Pengiriman</th>
				<th>Nama Produk / Kuantitas / Total Harga</th>
				<th>Waktu Dibuat Transaksi</th>
			</tr>";
		
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Transaksi"] . "</td><td>" . $row["Nama_Lengkap"] . "</td><td>" . 
	  $row["Nama_Pembayaran"] . " / " . $row["Jenis_Pembayaran"] . " / " . $row["Status_Pembayaran"] . " / " . $row["Updated_at"] . "</td><td>" 
	  . $row["Nama_Kurir"] . " " . $row["Produk_Kurir"] .  " / " . $row["Nomor_Resi"] . " / " . $row["Harga_Kurir"] . " / " . $row["Status_Pengiriman"] . "</td><td>" 
	  . $row["Nama_Produk"] . " / " . $row["Jumlah_Terjual"] . " / " . $row["Total_Harga"] . "</td><td>" 
	  . $row["Created_at"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by proceed only
if(isset($_POST['sortalltransaction']) && $_POST['sortalltransaction'] == 'proceed') {
	echo "<h3>Show All Proceed Transactions</h3>";

	$sql = "SELECT transaksi.ID_Transaksi,user.Nama_Lengkap, 
	pembayaran.Nama_Pembayaran, pembayaran.Jenis_Pembayaran, pembayaranuser.Status_Pembayaran, pembayaranuser.Updated_at, 
	kurir.Nama_Kurir, kurir.Produk_Kurir, pengiriman.Nomor_Resi, kurir.Harga_Kurir, pengiriman.Status_Pengiriman, 
	produk.Nama_Produk, penjualan.Jumlah_Terjual, penjualan.Total_Harga, pembayaranuser.Created_at 
	FROM transaksi,user,pembayaran,pembayaranuser,pengiriman,kurir,produk,penjualan 
	WHERE transaksi.ID_User=user.ID_User AND 
	transaksi.ID_Pembayaran=pembayaranuser.ID_Pembayaran AND 
	pembayaran.Kode_Pembayaran=pembayaranuser.Kode_Pembayaran AND 
	transaksi.ID_Transaksi=pengiriman.ID_Transaksi AND 
	pengiriman.ID_Kurir=kurir.ID_Kurir AND
	produk.ID_Produk = penjualan.ID_Produk AND 
	transaksi.ID_Penjualan = penjualan.ID_Penjualan AND 
	pengiriman.Status_Pengiriman='Diproses'";
	
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Transaksi</th>
				<th>Nama User</th>
				<th>Nama / Jenis Pembayaran / Status Pembayaran / Waktu Pembayaran</th>
				<th>Kurir / Nomor Resi / Biaya Kurir / Status Pengiriman</th>
				<th>Nama Produk / Kuantitas / Total Harga</th>
				<th>Waktu Dibuat Transaksi</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Transaksi"] . "</td><td>" . $row["Nama_Lengkap"] . "</td><td>" . 
	  $row["Nama_Pembayaran"] . " / " . $row["Jenis_Pembayaran"] . " / " . $row["Status_Pembayaran"] . " / " . $row["Updated_at"] . "</td><td>" 
	  . $row["Nama_Kurir"] . " " . $row["Produk_Kurir"] .  " / " . $row["Nomor_Resi"] . " / " . $row["Harga_Kurir"] . " / " . $row["Status_Pengiriman"] . "</td><td>" 
	  . $row["Nama_Produk"] . " / " . $row["Jumlah_Terjual"] . " / " . $row["Total_Harga"] . "</td><td>" 
	  . $row["Created_at"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by today
if(isset($_POST['sortalltransaction']) && $_POST['sortalltransaction'] == 'today') {
	echo "<h3>Show All Today Transactions</h3>";

	$sql = "SELECT transaksi.ID_Transaksi,user.Nama_Lengkap, 
	pembayaran.Nama_Pembayaran, pembayaran.Jenis_Pembayaran, pembayaranuser.Status_Pembayaran, pembayaranuser.Updated_at, 
	kurir.Nama_Kurir, kurir.Produk_Kurir, pengiriman.Nomor_Resi, kurir.Harga_Kurir, pengiriman.Status_Pengiriman, 
	produk.Nama_Produk, penjualan.Jumlah_Terjual, penjualan.Total_Harga, pembayaranuser.Created_at 
	FROM transaksi,user,pembayaran,pembayaranuser,pengiriman,kurir,produk,penjualan 
	WHERE transaksi.ID_User=user.ID_User AND 
	transaksi.ID_Pembayaran=pembayaranuser.ID_Pembayaran AND 
	pembayaran.Kode_Pembayaran=pembayaranuser.Kode_Pembayaran AND 
	transaksi.ID_Transaksi=pengiriman.ID_Transaksi AND 
	pengiriman.ID_Kurir=kurir.ID_Kurir AND
	produk.ID_Produk = penjualan.ID_Produk AND 
	transaksi.ID_Penjualan = penjualan.ID_Penjualan AND 
	DATE(pembayaranuser.Created_at)=CURDATE()";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Transaksi</th>
				<th>Nama User</th>
				<th>Nama / Jenis Pembayaran / Status Pembayaran / Waktu Pembayaran</th>
				<th>Kurir / Nomor Resi / Biaya Kurir / Status Pengiriman</th>
				<th>Nama Produk / Kuantitas / Total Harga</th>
				<th>Waktu Dibuat Transaksi</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Transaksi"] . "</td><td>" . $row["Nama_Lengkap"] . "</td><td>" . 
	  $row["Nama_Pembayaran"] . " / " . $row["Jenis_Pembayaran"] . " / " . $row["Status_Pembayaran"] . " / " . $row["Updated_at"] . "</td><td>" 
	  . $row["Nama_Kurir"] . " " . $row["Produk_Kurir"] .  " / " . $row["Nomor_Resi"] . " / " . $row["Harga_Kurir"] . " / " . $row["Status_Pengiriman"] . "</td><td>" 
	  . $row["Nama_Produk"] . " / " . $row["Jumlah_Terjual"] . " / " . $row["Total_Harga"] . "</td><td>" 
	  . $row["Created_at"] . "</td></tr>";
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