-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 06:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pameran`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(3) NOT NULL,
  `toko_id` int(3) NOT NULL,
  `nama_produk` char(100) NOT NULL,
  `harga` char(10) NOT NULL,
  `harga_promo` char(10) NOT NULL,
  `satuan` char(50) NOT NULL,
  `deskripsi` tinytext NOT NULL,
  `gambar` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `toko_id`, `nama_produk`, `harga`, `harga_promo`, `satuan`, `deskripsi`, `gambar`) VALUES
(1, 1, 'Donat Regular', '30000', '27900', '', '', '1.jpeg'),
(2, 1, 'Bomboloni', '30000', '27900', '', '', '2.jpeg'),
(3, 1, 'Medium Brownies', '45000', '43900', '', '', '3.jpeg'),
(4, 1, 'Large Brownies', '85000', '83900', '', '', '4.jpeg'),
(5, 2, 'Keker Cookies', '15000', '', '100 Gram', '', '1.jpg'),
(6, 2, 'Biji Biji', '15000', '', '100 Gram', '', '2.jpg'),
(7, 2, 'Skipi', '15000', '', '100 Gram', '', '3.jpg'),
(8, 2, 'Gutcookies Cokelat/Vanila', '15000', '', '85 Gram', '', '4.png'),
(9, 2, 'Stick Brow Mocca', '15000', '', '90 Gram', '', '5.jpeg'),
(10, 2, 'Kue Kering Karawo Toples Mika Kecil', '55000', '', '200 Gram', 'Khusu Pameran: Beli 3 Gratis 1', '6.jpeg'),
(11, 2, 'Kue Kering Karawo Toples Mika Besar', '100000', '', '400 Gram', 'Khusu Pameran: Beli 3 Gratis 1', '7.jpeg'),
(12, 3, 'Kolombeng Mini', '16000', '15000', '', '', '1.jpeg'),
(13, 4, 'Acar Cakalang Rica', '50000', '45000', '', '', '1.jpeg'),
(14, 5, 'Cakalang Rica-rica kemasan standing pootch', '60000', '50000', '300 Gram', '', '1.jpeg'),
(15, 5, 'Tuna Suir kemasan standing pootch', '60000', '50000', '300 Gram', '', '2.jpeg'),
(16, 5, 'Nike Goreng Krenyah Kemasan standing pootch', '50000', '40000', '160 Gram', '', '3.jpeg'),
(17, 5, 'Sambal Ikan Asin kemasan botol kaca premium', '60000', '50000', '300 Gram', '', '4.jpeg'),
(18, 5, 'Sambal roa \"sagelaku\" Kemasan Botol', '60000', '50000', '300 Gram', '', '5.jpeg'),
(19, 6, 'Kacang Karang', '15000', '13000', 'Bungkus', '', '1.jpeg'),
(20, 6, 'Stick Bawang', '13000', '10000', 'Bungkus', '', '2.jpeg'),
(21, 7, 'Susu Sari Kedelai, merk Essoya', '11500', '10000', 'Botol', '', '1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(3) NOT NULL,
  `nama_toko` char(100) NOT NULL,
  `alamat` text NOT NULL,
  `pemilik` char(100) NOT NULL,
  `telp` char(20) NOT NULL,
  `folder` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `nama_toko`, `alamat`, `pemilik`, `telp`, `folder`) VALUES
(1, 'Donat Kentang De Licious', 'Jl. Jendral Sudirman No.  99 Kel. wumialo Kec. kota Tengah', 'Fitria Ningsih Gani', '0811454130', 'fitria'),
(2, 'Rahida cookies', 'Jl. Jend Sudirman Kel. Limba U1 Kec. kota selatan', 'Dewisuto Nasaru', '085342230313', 'dewisuto'),
(3, 'Hairulnisa', 'Jl. Tilong Kabila, Kel. Biawu, Kec. Kota Selatan', 'Hairul Nisa', '081342964588', 'hairul'),
(4, 'Mutfood', 'Jl IR.H Joesoef Dalie, Kel. Paguyaman, Kec. Kota Tengah', 'Mutiara Maliki', '082190971134', 'mutiara'),
(5, 'Dapur Chef@Home', 'Jl. Pangeran hidayat lrg AMD Perum Cendana rasaindo blok C/4, Kel. Liluwo , Kec. Kota tengah', 'Nila Amak', '081245266665', 'nila'),
(6, 'REZKY', 'Jl. Membramo, Komplek Klinik Bersalin Yusra Podungge, Kel. Bulotadaa Barat, Kec. Sipatana', 'Selmy Mokoginta', '082259385948', 'selmy'),
(7, 'Essoya Natura', 'Jl. Poowo, Perum Ceria No. C/24, Kel. Bulotadaa Barat, Kec. Sipatana', 'Muh. Amir', '082187363557', 'amir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
