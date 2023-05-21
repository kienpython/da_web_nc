-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 11:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanwebnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhan_vien`
--

CREATE TABLE `tbl_nhan_vien` (
  `id_nv` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL DEFAULT 0,
  `tuoi` int(11) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `cmnd` varchar(50) NOT NULL,
  `bien_so_xe` varchar(50) DEFAULT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `chuc_vu` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nhan_vien`
--

INSERT INTO `tbl_nhan_vien` (`id_nv`, `name`, `gioi_tinh`, `tuoi`, `sdt`, `cmnd`, `bien_so_xe`, `dia_chi`, `chuc_vu`, `gmail`) VALUES
('1', '1', 0, 1, '1', '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  ADD PRIMARY KEY (`id_nv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;