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
(17, 'AKG N700 Wireless Headphone', 'Accessories', '1095000', 25, 'Published', '2021-04-26 10:59:29', '2021-04-26 10:59:29', 'AKG N700 Wireless Headphones.jpg', 'Samsung', 'Hitam', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wireless, Adaptive Noise Cancelling Headphones', 'Bluetooth'),
(18, 'AKG Wireless Headphone', 'Accessories', '1022000', 25, 'Published', '2021-04-26 11:01:33', '2021-04-26 11:01:33', 'AKG Wireless Headphones.jpg', 'Samsung', 'Hitam', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wireless, Adaptive Noise Cancelling Headphones', '3.5mm headphone connector, Bluetooth'),
(19, 'Galaxy Buds Pro', 'Accessories', '2999000', 30, 'Published', '2021-04-26 11:02:44', '2021-04-26 11:02:44', 'pic_BudsPro_Siler1_180221140222_ll.jpg.jpg', 'Samsung', 'Silver', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wireless PowerShare, Water Resistant', 'Bluetooth'),
(20, 'Galaxy Buds+', 'Accessories', '2017000', 30, 'Published', '2021-04-26 11:03:44', '2021-04-26 11:03:44', 'galaxy buds+.jpg', 'Samsung', 'Hitam', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Accelerometer,Hall Sensor,Proximity Sensor', 'Bluetooth'),
(23, 'Samsung Galaxy S20 Ultra', 'Smartphone', '12900000', 100, 'Published', '2021-04-26 10:59:31', '2021-04-26 10:59:31', 's20 ultra cosmic grey.jpg', 'Samsung', 'Cosmic Grey', '4G', 'Android', 'Exynos 990', '8 GB', '128 GB', '6.2 inch ', '10 MP', '64 MP', '4000mAh', '-', '-'),
(24, 'Samsung Galaxy M51', 'Smartphone', '5499000', 100, 'Published', '2021-04-26 11:04:27', '2021-04-26 11:04:27', 'm51.jpg', 'Samsung', 'Black', '4G', 'Android', 'Snapdragon 730G', '8 GB', '128 GB', '6.7 inch ', '32 MP', '64 MP', '7000 mAh', '-', '-'),
(25, 'Samsung Galaxy Z Fold 2', 'Smartphone', '33000000', 100, 'Published', '2021-04-26 11:07:19', '2021-04-26 11:07:19', 'samsung z fold 2.png', 'Samsung', 'Grey', '5G', 'Android', 'Snapdragon 865', '12 GB', '256 GB', '7.6 inch ', '12 MP', '32 MP', '4500 mAh', '-', '-'),
(26, 'Xiaomi mi note 10', 'Smartphone', '7900000', 100, 'Published', '2021-04-26 11:09:54', '2021-04-26 11:09:54', 'Xiaomi Mi Note 10 green.png', 'Xiaomi', 'Green', '4G', 'Android', 'Qualcomm SDM730 Snapdragon 730G ', '6 GB', '128 GB', '6.4 inch ', '12 MP', '108 MP', '5260 mAh', '-', '-'),
(27, 'Xiaomi redmi note 9', 'Smartphone', '2100000', 100, 'Published', '2021-04-26 11:12:34', '2021-04-26 11:12:34', 'Xiaomi Redmi Note 9 black.jpg', 'Xiaomi', 'Black', '4G', 'Android', 'MediaTek Helio G85 (12nm)', '4 GB', '128 GB', '6.5 inch ', '8 MP', '48 MP', '5020 mAh', '-', '-'),
(28, 'Xiaomi mi 9', 'Smartphone', '6500000', 100, 'Published', '2021-04-26 11:14:19', '2021-04-26 11:14:19', 'xiaomi mi 9 blue.jpg', 'Xiaomi', 'Blue', '4G', 'Android', 'Qualcomm SM8150 Snapdragon 855 (7 nm)', '6 GB', '128 GB', '6.3 inch ', '16 MP', '48 MP', '3300 mAh', '-', '-'),
(29, 'Realme 6', 'Smartphone', '30000000', 100, 'Published', '2021-04-26 11:16:03', '2021-04-26 11:16:03', 'realme 6 comet blue.jpg', 'Realme', 'Comet Blue', '4G', 'Android', 'MediaTek G90T', '8 GB', '128 GB', '6.5 inch ', '12 MP', '64 MP', '4300 mAh', '-', '-'),
(30, 'Realme X50 Pro', 'Smartphone', '10000000', 100, 'Published', '2021-04-26 11:17:40', '2021-04-26 11:17:40', 'realme x50.jpg', 'Realme', 'Rust Red', '5G', 'Android', 'Snapdragon 865', '12 GB', '256 GB', '6.4 inch ', '12 MP', '64 MP', '4200 mAh', '-', '-'),
(31, 'Realme 8 Pro', 'Smartphone', '45000000', 100, 'Published', '2021-04-26 11:19:17', '2021-04-26 11:19:17', 'realme 8 pro.png', 'Realme', 'Infinite Black', '5G', 'Android', 'Snapdragon 720G', '8 GB', '128 GB', '6.4 inch ', '12 MP', '64 MP', '4200mAh', '-', '-');

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
