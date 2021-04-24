<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row; 
	}
	return $rows;
}

	function cari($keyword) {
		$sql = "SELECT *
	FROM transaksi,user,pembayaran,pembayaranuser,pengiriman,kurir,produk,penjualan 
	WHERE transaksi.ID_User=user.ID_User AND 
	transaksi.ID_Pembayaran=pembayaranuser.ID_Pembayaran AND 
	pembayaran.Kode_Pembayaran=pembayaranuser.Kode_Pembayaran AND 
	transaksi.ID_Transaksi=pengiriman.ID_Transaksi AND 
	pengiriman.ID_Kurir=kurir.ID_Kurir AND 
	produk.ID_Produk = penjualan.ID_Produk AND 
	transaksi.ID_Penjualan = penjualan.ID_Penjualan AND 
	user.Nama_Lengkap LIKE '%$keyword%' OR 
	pembayaran.Nama_Pembayaran LIKE '%$keyword%' OR 
	pembayaran.Jenis_Pembayaran LIKE '%$keyword%' OR 
	pembayaranuser.Status_Pembayaran LIKE '%$keyword%' OR 
	kurir.Nama_Kurir LIKE '%$keyword%' OR 
	kurir.Produk_Kurir LIKE '%$keyword%' OR 
	pengiriman.Nomor_Resi LIKE '%$keyword%' OR 
	pengiriman.Status_Pengiriman LIKE '%$keyword%' OR 
	produk.Nama_Produk LIKE '%$keyword%'";
	
	return query($sql);
	}
?>