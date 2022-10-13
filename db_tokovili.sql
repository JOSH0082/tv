-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2022 at 07:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokovili`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_galon`
--

CREATE TABLE `tb_galon` (
  `id_galon` int(11) NOT NULL,
  `jumlah_galon` int(11) DEFAULT NULL,
  `harga_galon` int(11) DEFAULT NULL,
  `pembeli_galon` varchar(244) DEFAULT NULL,
  `waktu_beli` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galon`
--

INSERT INTO `tb_galon` (`id_galon`, `jumlah_galon`, `harga_galon`, `pembeli_galon`, `waktu_beli`) VALUES
(1, 2, 24000, 'ce 13 no 1', '2022-10-13 13:56:21'),
(3, 2, 8000, 'ce 2 no 4', '2022-10-14 16:59:39'),
(4, 2, 8000, 'ce 3 no 4', '2022-10-13 17:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gas`
--

CREATE TABLE `tb_gas` (
  `id_gas` int(11) NOT NULL,
  `jumlah_gas` int(11) DEFAULT NULL,
  `jenis_gas` varchar(10) DEFAULT NULL,
  `harga_gas` int(11) DEFAULT NULL,
  `pembeli_gas` varchar(244) DEFAULT NULL,
  `waktu_beli` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gas`
--

INSERT INTO `tb_gas` (`id_gas`, `jumlah_gas`, `jenis_gas`, `harga_gas`, `pembeli_gas`, `waktu_beli`) VALUES
(1, 2, '3kg', 12000, 'ce 4 no 5', '2022-10-13 13:58:30'),
(2, 2, '12kg', 18000, 'ce 4 no 5', '2022-10-13 13:58:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_galon`
--
ALTER TABLE `tb_galon`
  ADD PRIMARY KEY (`id_galon`);

--
-- Indexes for table `tb_gas`
--
ALTER TABLE `tb_gas`
  ADD PRIMARY KEY (`id_gas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_galon`
--
ALTER TABLE `tb_galon`
  MODIFY `id_galon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_gas`
--
ALTER TABLE `tb_gas`
  MODIFY `id_gas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
