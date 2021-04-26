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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID_Produk` int(10) UNSIGNED NOT NULL,
  `Nama_Produk` varchar(60) NOT NULL,
  `Jenis_Produk` varchar(60) NOT NULL,
  `Harga_Produk` varchar(15) NOT NULL,
  `Stok_Produk` int(10) UNSIGNED NOT NULL,
  `Status_Produk` enum('Pending','Published','Non-Activate') NOT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `Brand` varchar(60) NOT NULL,
  `Warna` varchar(60) NOT NULL,
  `Jaringan` varchar(60) NOT NULL,
  `OS` varchar(60) NOT NULL,
  `Chipset` varchar(60) NOT NULL,
  `RAM` varchar(60) NOT NULL,
  `Storage` varchar(60) NOT NULL,
  `Layar` varchar(60) NOT NULL,
  `Kamera_Depan` varchar(60) NOT NULL,
  `Kamera_Belakang` varchar(60) NOT NULL,
  `Baterai` varchar(60) NOT NULL,
  `Tipe_Headphone` varchar(60) NOT NULL,
  `Konektivitas_Headphone` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_Produk`, `Nama_Produk`, `Jenis_Produk`, `Harga_Produk`, `Stok_Produk`, `Status_Produk`, `Created_at`, `Updated_at`, `image`, `Brand`, `Warna`, `Jaringan`, `OS`, `Chipset`, `RAM`, `Storage`, `Layar`, `Kamera_Depan`, `Kamera_Belakang`, `Baterai`, `Tipe_Headphone`, `Konektivitas_Headphone`) VALUES
(1, 'iPhone', 'Smartphone', '30000000', 2, '', '2021-04-09 13:28:43', '2021-04-09 13:28:43', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'JBL 100', 'Accessories', '300000', 10, 'Published', '2021-03-30 18:20:53', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'JBL 300', 'Accessories', '350000', 20, 'Published', '2021-03-31 02:11:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'iPhone 8', 'Smartphone', '10000000', 5, 'Published', '2021-03-31 07:59:01', '0000-00-00 00:00:00', '', 'Apple', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'iPhone 12 mini', 'Smartphone', '13999000', 300, 'Published', '2021-04-08 22:50:02', '2021-04-13 01:23:56', '20200510192725_1.jpg', 'Apple', 'Hitam', '5G', 'iOS 14 ', 'A14 Bionic', '4 GB', '64 GB', '5.4 inch OLED', '12 MP', '12 MP', '2227 mAh', '-', '-'),
(12, 'iPhone 12 Pro Max', 'Smartphone', '26999000', 100, 'Published', '2021-04-13 18:15:56', '2021-04-13 18:15:56', 'photo_2021-04-13_18-14-18.jpg', 'Apple', 'Pacific Blue', '5G', 'iOS 14', 'A14 Bionic', '6 GB', '512 GB', '6.7 inch OLED', '12 MP', '12 MP', '3687 mAh', '-', '-'),
(13, 'iPhone 12 Pro Max', 'Smartphone', '22999000', 100, 'Published', '2021-04-13 18:15:56', '2021-04-13 18:15:56', 'photo_2021-04-13_18-14-18.jpg', 'Apple', 'Pacific Blue', '5G', 'iOS 14', 'A14 Bionic', '6 GB', '256 GB', '6.7 inch OLED', '12 MP', '12 MP', '3687 mAh', '-', '-'),
(14, 'iPhone 12 Pro Max', 'Smartphone', '20.499.000', 100, 'Published', '2021-04-13 18:15:56', '2021-04-13 18:15:56', 'photo_2021-04-13_18-14-18.jpg', 'Apple', 'Pacific Blue', '5G', 'iOS 14', 'A14 Bionic', '6 GB', '128 GB', '6.7 inch OLED', '12 MP', '12 MP', '3687 mAh', '-', '-'),
(17, 'AKG N700 Wireless Headphone', 'Accessories', '1095000', 25, 'Published', '2021-04-26 10:59:29', '2021-04-26 10:59:29', 'AKG N700 Wireless Headphones.jpg', 'Samsung', 'Hitam', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wireless, Adaptive Noise Cancelling Headphones', 'Bluetooth'),
(18, 'AKG Wireless Headphone', 'Accessories', '1022000', 25, 'Published', '2021-04-26 11:01:33', '2021-04-26 11:01:33', 'AKG Wireless Headphones.jpg', 'Samsung', 'Hitam', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wireless, Adaptive Noise Cancelling Headphones', '3.5mm headphone connector, Bluetooth'),
(19, 'Galaxy Buds Pro', 'Accessories', '2999000', 30, 'Published', '2021-04-26 11:02:44', '2021-04-26 11:02:44', 'pic_BudsPro_Siler1_180221140222_ll.jpg.jpg', 'Samsung', 'Silver', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wireless PowerShare, Water Resistant', 'Bluetooth'),
(20, 'Galaxy Buds+', 'Accessories', '2017000', 30, 'Published', '2021-04-26 11:03:44', '2021-04-26 11:03:44', 'galaxy buds+.jpg', 'Samsung', 'Hitam', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Accelerometer,Hall Sensor,Proximity Sensor', 'Bluetooth');

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
