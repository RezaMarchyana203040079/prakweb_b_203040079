-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 11:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2022_b_203040079`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `kode_buku` char(5) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `tahun_penerbit` char(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_penerbit`, `stok`, `gambar`) VALUES
(1, '001', 'Dari Romawi Sampai Guruh Gipsy', 'Neo Historia', 'Raden Pustaka', '2022', 4, 'dariRomawi.jpg'),
(2, '002', 'Kegagalan Palestina Menjadi Negara Merdeka', 'Neo Historia', 'Raden Pustaka', '2022', 2, 'kegagalan.jpg'),
(3, '003', 'Sejarah Islam Di Spanyol', 'Reinhart Dozy', 'Indoliterasi', '2019', 1, 'sejarahislam.jpg'),
(4, '004', 'Chainsaw Man, Vol. 1', 'Tatsuki Fujimoto', 'VIZ Media', '2019', 5, 'vol1.jpg'),
(5, '005', 'Chainsaw Man, Vol. 2: CHAINSAW Vs. BAT', 'Tatsuki Fujimoto', 'VIZ media', '2019', 6, 'vol2.jpg'),
(6, '006', 'Chainsaw Man, Vol. 3', 'Tatsuki Fujimoto', 'VIZ Media', '2019', 5, 'vol3.jpg'),
(7, '007', 'Attack On Titan 17', 'Hajime Isayama', 'Elex Media Komputindo', '2015', 4, 'Attack on Titan 17.jpg'),
(8, '008', 'Attack on Titan 25', 'Hajime Isayama', 'Elex Media Komputindo', '2018', 7, 'Attack on Titan 25.jpg'),
(9, '009', 'Attack on Titan 30', 'Hajime Isayama', 'Elex Media Komputindo', '2019', 3, 'Attack on Titan 30.jpg'),
(10, '010', 'Attack on Titan 33', 'Hajime Isayama', 'Elex Media Komputindo', '2021', 5, 'Attack on Titan 33.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
