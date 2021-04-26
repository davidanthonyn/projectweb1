-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 06:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `ID_Kurir` int(10) UNSIGNED NOT NULL,
  `Nama_Kurir` varchar(60) NOT NULL,
  `Produk_Kurir` varchar(60) NOT NULL,
  `Harga_Kurir` int(10) UNSIGNED NOT NULL,
  `Created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`ID_Kurir`, `Nama_Kurir`, `Produk_Kurir`, `Harga_Kurir`, `Created_at`) VALUES
(1, 'JNE', 'YES', 18000, '2021-03-31 02:14:10'),
(2, 'A', 'A', 0, '2021-03-31 02:13:48'),
(3, 'JNI', 'NO', 20000, '2021-03-31 02:20:23'),
(4, 'SiLambat', 'YES', 50000, '2021-03-31 07:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Kode_Pembayaran` int(10) UNSIGNED NOT NULL,
  `Nama_Pembayaran` varchar(60) NOT NULL,
  `Jenis_Pembayaran` enum('Kartu_Kredit','Kartu_Debit','E_Wallet','Cash_On_Delivery') NOT NULL,
  `Created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`Kode_Pembayaran`, `Nama_Pembayaran`, `Jenis_Pembayaran`, `Created_at`) VALUES
(1, 'Mandiri Visa', 'Kartu_Debit', '2021-03-30 15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `ID_Penjualan` int(10) UNSIGNED NOT NULL,
  `ID_Produk` int(10) UNSIGNED NOT NULL,
  `Jumlah_Terjual` int(10) NOT NULL,
  `Harga_Produk` int(10) NOT NULL,
  `Total_Harga` int(10) NOT NULL,
  `Created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`ID_Penjualan`, `ID_Produk`, `Jumlah_Terjual`, `Harga_Produk`, `Total_Harga`, `Created_at`) VALUES
(1, 1, 3, 54000000, 54000000, '2021-03-30 14:30:00');

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
(5, 'iPhone 8', 'Smartphone', '10000000', 5, 'Published', '2021-03-31 07:59:01', '0000-00-00 00:00:00', '', 'Apple', 'Space Grey', '4G', 'iOS 11', 'A11 Bionic', '2 GB', '64 GB', '4.7 inch LCD', '7 MP', '12 MP', '1821 mAh', '-', '-'),
(11, 'iPhone 12 mini', 'Smartphone', '13999000', 300, 'Published', '2021-04-08 22:50:02', '2021-04-13 01:23:56', '20200510192725_1.jpg', 'Apple', 'Hitam', '5G', 'iOS 14 ', 'A14 Bionic', '4 GB', '64 GB', '5.4 inch OLED', '12 MP', '12 MP', '2227 mAh', '-', '-'),
(12, 'iPhone 12 Pro Max', 'Smartphone', '26999000', 100, 'Published', '2021-04-13 18:15:56', '2021-04-13 18:15:56', 'photo_2021-04-13_18-14-18.jpg', 'Apple', 'Pacific Blue', '5G', 'iOS 14', 'A14 Bionic', '6 GB', '512 GB', '6.7 inch OLED', '12 MP', '12 MP', '3687 mAh', '-', '-'),
(13, 'iPhone 12 Pro Max', 'Smartphone', '22999000', 100, 'Published', '2021-04-13 18:15:56', '2021-04-13 18:15:56', 'photo_2021-04-13_18-14-18.jpg', 'Apple', 'Pacific Blue', '5G', 'iOS 14', 'A14 Bionic', '6 GB', '256 GB', '6.7 inch OLED', '12 MP', '12 MP', '3687 mAh', '-', '-'),
(14, 'iPhone 12 Pro Max', 'Smartphone', '20499000', 0, 'Published', '2021-04-13 18:15:56', '2021-04-13 18:15:56', 'photo_2021-04-13_18-14-18.jpg', 'Apple', 'Pacific Blue', '5G', 'iOS 14', 'A14 Bionic', '6 GB', '128 GB', '6.7 inch OLED', '12 MP', '12 MP', '3687 mAh', '-', '-'),
(15, 'iPhone SE', 'Smartphone', '7999000', 10, 'Published', '2021-04-24 00:10:02', '2021-04-24 00:13:54', 'iPhoneSEDisplayBLACK.png', 'Apple', 'Hitam', '4G', 'iOS 14', 'A13 Bionic', '3 GB ', '64 GB', '4.7 inch LCD', '7 MP', '12 MP', '1821 mAh', '-', '-'),
(16, 'iPhone SE', 'Smartphone', '8799000', 10, 'Published', '2021-04-24 00:25:02', '2021-04-25 15:38:22', 'iPhoneSEDisplayBLACK.png', 'Apple', 'Hitam', '4G', 'iOS 14', 'A13 Bionic', '3 GB ', '128 GB', '4.7 inch LCD', '7 MP', '12 MP', '1821 mAh', '-', '-'),
(17, 'iPhone XR', 'Smartphone', '7999000', 50, 'Published', '2021-04-25 15:37:27', '2021-04-25 15:38:32', 'iphone-xr-black.png', 'Apple', 'Hitam', '4G', 'iOS 14', 'A12 Bionic', '3 GB', '64 GB', '6.1 inch LCD', '7 MP', '12 MP', '2942 mAh', '-', '-'),
(18, 'iPhone XR', 'Smartphone', '9299000', 50, 'Published', '2021-04-25 15:37:55', '2021-04-25 15:38:41', 'iphone-xr-black.png', 'Apple', 'Hitam', '4G', 'iOS 14', 'A12 Bionic', '3 GB', '128 GB', '6.1 inch LCD', '7 MP', '12 MP', '2942 mAh', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` int(10) UNSIGNED NOT NULL,
  `ID_User` int(10) UNSIGNED NOT NULL,
  `ID_Pembayaran` int(10) UNSIGNED NOT NULL,
  `ID_Pengiriman` int(10) UNSIGNED NOT NULL,
  `ID_Penjualan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_Transaksi`, `ID_User`, `ID_Pembayaran`, `ID_Pengiriman`, `ID_Penjualan`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(10) UNSIGNED NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userlevel` enum('admin','member') DEFAULT NULL,
  `userstatus` enum('Activate','Disabled') NOT NULL,
  `Nama_Lengkap` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `No_Telepon` varchar(15) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `username`, `password`, `userlevel`, `userstatus`, `Nama_Lengkap`, `email`, `No_Telepon`, `Alamat`, `Created_at`, `Updated_at`) VALUES
(1, 'david', '$2y$10$vREuVSFFXrODmh8FldO6Q.3y4ZYjC5eOAUxeIfUTkskUl8.y9CchK', 'member', 'Disabled', 'David', 'david@gmail.com', '081234567890', 'Bogor', '2021-03-15 14:14:58', '2021-03-15 14:14:58'),
(2, 'sanctusrosario', '$2y$10$RGiVpajZCEFJI8ILqQxS7OYPX8vHwJIkBfGjg6BLwbtYgaAxTZB5m', 'member', 'Activate', 'sanctus', 'sanctus@gmail.com', '081234567890', 'Jakarta', '2021-03-31 00:38:08', '2021-04-25 01:27:40'),
(3, 'migel', '$2y$10$KpzFo.BaggRfutCY1nQt3ezOSOAltSmxvzbTOSKUWttImoy2G4K3u', 'member', 'Activate', 'migel', 'migel@gmail.com', '081234567890', 'Tangerang', '2021-03-31 00:41:45', '2021-03-31 00:41:45'),
(4, 'tius', '$2y$10$ghCeiCp67rd/OpgdFoaghu9uLGSkDOXq3/2gzOMaX2K0qHwhwYwda', 'admin', 'Activate', 'tiusmarlie', 'tius@gmail.com', '081234567890', 'Bogor', '2021-03-31 00:44:04', '2021-04-25 02:39:41'),
(5, 'ernest', '$2y$10$jOoivEMzzm3S8SoKEq.OXet2vpCGSDEC2LnnfXaYt2m0oNT4VlaTO', 'member', 'Activate', 'ernest', 'ernest@gmail.com', '081234567890', 'Surabaya', '2021-03-31 01:40:22', '2021-03-31 01:40:22'),
(6, 'jason', '$2y$10$qrb5exHer8cySnggeI3nSeiAEAsavloXPMSzCO/h1camNLJHy8U8.', 'member', 'Activate', 'jason', 'jason@gmail.com', '081234567890', 'Tangerang', '2021-03-31 07:50:16', '2021-03-31 07:50:16'),
(7, 'yofan', '$2y$10$tQusZvhVc6hRn4jytzNHB.uNaYtcRL79HX.MEqZl6gWOgVxGF8MYa', 'admin', 'Activate', 'yofanwijaya', 'yofan30@gmail.com', '081234567890', 'Lampungsumatera', '2021-03-31 08:00:13', '2021-04-17 20:26:13'),
(8, '', '$2y$10$KVy1A.kq08fXAAZHIX8dW.xgm1dykiRWchnBYjLwRuKRPrYqr1FZK', 'member', 'Activate', '', '', '', '', '2021-04-12 22:28:01', '2021-04-12 22:28:01'),
(9, 'winnie', '$2y$10$r/5HOisX1Fd8IsWg4nYjVeaeHpx.FOxjFaLJwtIt0EpJIRHTfbkw6', 'member', 'Activate', 'winnie', 'winnie@gmail.com', '081234567890', '', '2021-04-12 22:29:43', '2021-04-12 22:29:43'),
(10, 'wulan', '$2y$10$r5eH1EFk.ZnHZDYwBejEhOV/cVEnGBdtKz651wUE7ybSwBZy0ouQ.', 'member', 'Activate', 'wulan', 'wulan@gmail.com', '081234567890', '', '2021-04-12 22:30:24', '2021-04-12 22:30:24'),
(11, 's', '$2y$10$I2/IURqQpZZo/Illw63j.OmoKnUscNg.xr6J11npK4gth3OQlc6Im', 'member', 'Disabled', 's', 's@gmail.com', '081234567890', 's', '2021-04-12 22:31:32', '2021-04-25 01:32:26'),
(12, 'bulldog', '$2y$10$JO49d226fF.Sb6qfpDjVLeAoKPGWs4.fOf.fcuH2QHjsUOBOquWrm', 'member', 'Activate', 'bulldog', 'bulldog@gmail.com', '081234', 'jl bulldog nomor 3 jakarta', '2021-04-12 22:32:37', '2021-04-12 22:32:37'),
(13, 'pablo', '$2y$10$1DlkzOxep4i4nEDSkJ9WFOm0aQfwdq15EaFGkUbUJPnX6NknAi3Ka', 'member', 'Activate', 'pablo', 'pablo@gmail.com', '081234567890', 'pablo', '2021-04-12 22:45:13', '2021-04-12 22:45:13'),
(14, 'picasso', '$2y$10$MngJZAG6hMhrMb3YDIOCT.MEv2mbxGvkwBRFzRAqbaNTavIcxwpYW', 'member', 'Activate', 'picasso', 'picasso@gmail.com', '081234567890', 'picasso', '2021-04-12 22:47:01', '2021-04-12 22:47:01'),
(15, 'wechat', '$2y$10$prK6d2NssFezSO2pyNePZ.FiguWANA2lIo3gz8krSX523x/tHmWTi', 'member', 'Activate', 'wechat', 'wechat@gmail.com', '081243567890', 'Jl wechat nomor 3', '2021-04-12 22:50:20', '2021-04-12 22:50:20'),
(16, 'hewan', '$2y$10$jyr4C8lVKrHoD3gba/1PfOoaVwAQkH8iIG1TAts3TFYRjv4b9fQDi', 'member', 'Activate', 'hewan', 'hewan@gmail.com', '081234434353', 'ternak', '2021-04-13 00:16:11', '2021-04-13 00:16:11'),
(17, 'sasas', '$2y$10$tMTNfyT1cQ8pIweYhQqkW.pe.jYWsGEQKgoVNPVvAyvIn71hraQSq', 'member', 'Activate', 'saas', '', '', '', '2021-04-13 23:44:08', '2021-04-13 23:44:08'),
(18, 'april', '$2y$10$QOojwiwq2zF0qtViS7R96upTl9VQ9qg6vUhh6hWF.6QlXsiosL.QK', 'member', 'Activate', 'april', 'april@gmail.com', '081234567890', 'april', '2021-04-14 07:53:26', '2021-04-14 07:53:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`ID_Kurir`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`Kode_Pembayaran`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`ID_Penjualan`),
  ADD KEY `ID_Produk` (`ID_Produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_Produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`),
  ADD KEY `ID_User` (`ID_User`),
  ADD KEY `ID_Pembayaran` (`ID_Pembayaran`),
  ADD KEY `ID_Pengiriman` (`ID_Pengiriman`),
  ADD KEY `ID_Penjualan` (`ID_Penjualan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `ID_Kurir` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `Kode_Pembayaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `ID_Penjualan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_Produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_Transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`ID_Produk`) REFERENCES `produk` (`ID_Produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`ID_Penjualan`) REFERENCES `penjualan` (`ID_Penjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`ID_Pembayaran`) REFERENCES `pembayaranuser` (`ID_Pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`ID_Pengiriman`) REFERENCES `pengiriman` (`ID_Pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
