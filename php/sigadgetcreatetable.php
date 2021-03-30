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

// SQL Create Table User
$sqluser = "CREATE TABLE User (
ID_User INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(15) NOT NULL,
password VARCHAR(60) NOT NULL,
userlevel ENUM('admin', 'member'),
Nama_Lengkap VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
No_Telepon VARCHAR(15) NOT NULL,
Alamat VARCHAR(60) NOT NULL,
Created_at DATETIME,
Updated_at DATETIME
)";

// SQL Create Table Produk
$sqlproduk = "CREATE TABLE Produk (
ID_Produk INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nama_Produk VARCHAR(60) NOT NULL,
ID_Jenis_Produk INT NOT NULL,
Harga_Produk VARCHAR(15) NOT NULL,
Stok_Produk INT UNSIGNED NOT NULL,
Created_at DATETIME
)";

// SQL Create Table Penjualan
$sqlpenjualan = "CREATE TABLE Penjualan (
ID_Penjualan INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ID_Transaksi INT NOT NULL,
ID_Produk INT NOT NULL,
Jumlah_Terjual INT NOT NULL,
Total_Pendapatan INT NOT NULL,
Created_at DATETIME
)";

// SQL Create Table Kurir
$sqlkurir = "CREATE TABLE Kurir (
ID_Kurir INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nama_Kurir VARCHAR(60) NOT NULL,
Jenis_Kurir VARCHAR(60) NOT NULL,
Harga_Kurir INT NOT NULL,
Created_at DATETIME
)";

// SQL Create Table Pembayaran
$sqlpembayaran = "CREATE TABLE Pembayaran (
ID_Pembayaran INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nama_Pembayaran VARCHAR(60) NOT NULL,
Jenis_Pembayaran VARCHAR(60) NOT NULL,
Created_at DATETIME
)";

// SQL Create Table Transaksi
$sqltransaksi = "CREATE TABLE Transaksi (
ID_Transaksi INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ID_User INT NOT NULL,
ID_Produk INT NOT NULL,
Jumlah_Beli INT UNSIGNED NOT NULL,
ID_Pembayaran INT NOT NULL,
ID_Kurir INT NOT NULL,
Waktu_Pembelian DATETIME,
Status_Transaksi ENUM('Diproses', 'Dikirim', 'Diterima')
)";

//IF conn query table user
if ($conn->query($sqluser) === TRUE) {
  echo "Table User created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

//IF conn query table produk
if ($conn->query($sqlproduk) === TRUE) {
  echo "<br><br>Table Produk created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

//IF conn query table jenis produk
if ($conn->query($sqljenisproduk) === TRUE) {
  echo "<br><br>Table Jenis Produk created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

//IF conn query table penjualan
if ($conn->query($sqlpenjualan) === TRUE) {
  echo "<br><br>Table Penjualan created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

//IF conn query table kurir
if ($conn->query($sqlkurir) === TRUE) {
  echo "<br><br>Table Kurir created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

//IF conn query table pembayaran
if ($conn->query($sqlpembayaran) === TRUE) {
  echo "<br><br>Table Pembayaran created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

//IF conn query table transaksi
if ($conn->query($sqltransaksi) === TRUE) {
  echo "<br><br>Table Transaksi created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>