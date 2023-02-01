-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2023 at 10:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teman`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_teman`
--

CREATE TABLE `tb_teman` (
  `id_teman` int NOT NULL,
  `nama_teman` varchar(50) NOT NULL,
  `alamat_teman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_teman`
--

INSERT INTO `tb_teman` (`id_teman`, `nama_teman`, `alamat_teman`) VALUES
(1, 'Rika Qodriah', 'Karang Mangu'),
(2, 'Arya Nuryana', 'Blender'),
(3, 'Krisna Mulyana', 'Tuk Karang Suwung'),
(4, 'M.Ikhwan Adholf Hermansyah', 'Karang Sembung'),
(5, 'Nanda Putri Sugianto', 'Wangkelang'),
(6, 'Indra Ikhsani', 'Lemahabang'),
(7, 'Gita Antar Wulan', 'Gunung Jati'),
(8, 'Ali Ikbal', 'Karang Sembung'),
(9, 'Nafisa maysa Salma', 'Beber'),
(10, 'Aldiyansyah Kurniawan', 'Sindangjawa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_teman`
--
ALTER TABLE `tb_teman`
  ADD PRIMARY KEY (`id_teman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_teman`
--
ALTER TABLE `tb_teman`
  MODIFY `id_teman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
