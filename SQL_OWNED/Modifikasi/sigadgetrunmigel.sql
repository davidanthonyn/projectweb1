-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 06:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigadget`
--

-- --------------------------------------------------------



--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_Produk`, `Nama_Produk`, `Jenis_Produk`, `Harga_Produk`, `Stok_Produk`, `Status_Produk`, `Created_at`, `Updated_at`, `image`, `Brand`, `Warna`, `Jaringan`, `OS`, `Chipset`, `RAM`, `Storage`, `Layar`, `Kamera_Depan`, `Kamera_Belakang`, `Baterai`, `Tipe_Headphone`, `Konektivitas_Headphone`) VALUES
(15, 'iPhone SE', 'Smartphone', '7999000', 10, 'Published', '2021-04-24 00:10:02', '2021-04-24 00:13:54', 'iPhoneSEDisplayBLACK.png', 'Apple', 'Hitam', '4G', 'iOS 14', 'A13 Bionic', '3 GB ', '64 GB', '4.7 inch LCD', '7 MP', '12 MP', '1821 mAh', '-', '-'),
(16, 'iPhone SE', 'Smartphone', '8799000', 10, 'Published', '2021-04-24 00:25:02', '2021-04-25 15:38:22', 'iPhoneSEDisplayBLACK.png', 'Apple', 'Hitam', '4G', 'iOS 14', 'A13 Bionic', '3 GB ', '128 GB', '4.7 inch LCD', '7 MP', '12 MP', '1821 mAh', '-', '-'),
(17, 'AKG N700 Wireless Headphone', 'Accessories', '1095000', 25, 'Published', '2021-04-26 10:59:29', '2021-04-26 10:59:29', 'AKG N700 Wireless Headphones.jpg', 'Samsung', 'Hitam', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wireless, Adaptive Noise Cancelling Headphones', 'Bluetooth'),
(18, 'AKG Wireless Headphone', 'Accessories', '1022000', 25, 'Published', '2021-04-26 11:01:33', '2021-04-26 11:01:33', 'AKG Wireless Headphones.jpg', 'Samsung', 'Hitam', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wireless, Adaptive Noise Cancelling Headphones', '3.5mm headphone connector, Bluetooth'),
(19, 'Galaxy Buds Pro', 'Accessories', '2999000', 30, 'Published', '2021-04-26 11:02:44', '2021-04-26 11:02:44', 'pic_BudsPro_Siler1_180221140222_ll.jpg.jpg', 'Samsung', 'Silver', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wireless PowerShare, Water Resistant', 'Bluetooth'),
(20, 'Galaxy Buds+', 'Accessories', '2017000', 30, 'Published', '2021-04-26 11:03:44', '2021-04-26 11:03:44', 'galaxy buds+.jpg', 'Samsung', 'Hitam', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Accelerometer,Hall Sensor,Proximity Sensor', 'Bluetooth'), 
(21, 'iPhone XR', 'Smartphone', '7999000', 50, 'Published', '2021-04-25 15:37:27', '2021-04-25 15:38:32', 'iphone-xr-black.png', 'Apple', 'Hitam', 'iOS 14', 'Android', 'A12 Bionic', '3 GB', '64 GB', '6.1 inch LCD', '7 MP', '12 MP', '2942 mAh', '-', '-'),
(22, 'iPhone XR', 'Smartphone', '9299000', 50, 'Published', '2021-04-25 15:37:55', '2021-04-25 15:38:41', 'iphone-xr-black.png', 'Apple', 'Hitam', 'iOS 14', 'Android', 'A12 Bionic', '3 GB', '128 GB', '6.1 inch LCD', '7 MP', '12 MP', '2942 mAh', '-', '-');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_Produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_Produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
