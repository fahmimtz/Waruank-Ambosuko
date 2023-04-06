-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 10:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambosuko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `tanggal_pesanan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `no_telepon`, `tanggal_pesanan`) VALUES
(1, 'Fahmi Mumtaaz', 'Pasar Minggu, Jakarta Selatan', '081298709117', '2020-07-08 22:45:44'),
(2, 'Fahmi Mumtaaz', 'Pasar Minggu, Jakarta Selatan', '081298709117', '2020-07-08 22:46:39'),
(3, 'Fahmi Mumtaaz', 'Jalan Kavling Taman Palem Nomor 1D Kebagusan, Pasar Minggu, Jakarta Selatan ', '081298709117', '2020-08-16 23:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(120) NOT NULL,
  `keterangan` varchar(120) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(60) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `keterangan`, `kategori`, `harga`, `status`, `gambar`) VALUES
(1, 'Paket A', 'Nasi + Kikil + Gulai Nagka + Sayur Singkong + Sambal + Bumbu Rendang', 'paket', 20000, '1', '1.jpg'),
(2, 'Paket B', 'Nasi + Ayam Gulai + Gulai Nagka + Sayur Singkong + Sambal + Bumbu Rendang', 'paket', 16000, '1', '2.jpg'),
(3, 'Paket C', 'Nasi + Ikan Goreng Sambak Merah + Gulai Nagka + Sayur Singkong + Bumbu Rendang', 'paket', 15000, '0', '5.jpg'),
(5, 'Paket D', 'Nasi + Rendang + Gulai Nagka + Sayur Singkong + Sambal', 'paket', 18000, '1', '4.jpg'),
(6, 'Paket E', 'Nasi + Talua Dadar + Gulai Nagka + Sayur Singkong + Sambal + Bumbu Rendang', 'paket', 10000, '1', '6.jpg'),
(7, 'Paket F', 'Nasi + Ayam Bakar + Gulai Nagka + Sayur Singkong + Sambal + Bumbu Rendang', 'paket', 16000, '1', '7.jpg'),
(8, 'Ikan Asam Padeh', 'Ikan Gulai Asam Padeh', 'makan', 10000, '1', 'a1.jpg'),
(9, 'Ikan Emas', 'Ikan Emas Gulai Kuning', 'makan', 12000, '1', 'a31.jpg'),
(10, 'Ikan Gulai Kuning', 'Ikan Gulai Kuning', 'makan', 10000, '1', 'a2.jpg'),
(11, 'Perkedel', '1 perkedel ketang ', 'makan', 3000, '0', 'a4.jpg'),
(12, 'Talua Dadar', '1 telor dadar bebek', 'makan', 6000, '1', 'Talua1.jpg'),
(13, 'Teh manis', 'Teh Manis Dingin', 'minum', 4000, '1', 'teh_manis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id`, `nama`, `email`, `alamat`, `no_telepon`, `password`, `role_id`) VALUES
(2, 'user', 'user@gmail.com', 'pasar minggu', '081298709117', '123', 1),
(3, 'Fahmi Mumtaaz', 'fahmi@gmail.com', 'Pasar Minggu, Jakarta Selatan', '081298709117', '123', 2),
(4, 'Fardilal Nur', 'fardilal@gmail.com', 'al sharafiyah, jeddah', '0502734337', '123', 2),
(5, 'Yulifini Sofyan', 'yulfini@gmail.com', 'Kebagusan, Jakarta Selatan', '081314344656', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_menu`, `nama_menu`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 2, 3, 'Paket C', 1, 18000, ''),
(2, 3, 2, 'Paket B', 1, 16000, ''),
(3, 3, 5, 'Paket D', 1, 18000, ''),
(4, 3, 12, 'Talua Dadar', 1, 6000, ''),
(5, 3, 13, 'Teh manis', 2, 4000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
