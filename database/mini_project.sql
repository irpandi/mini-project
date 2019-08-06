-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Agu 2019 pada 18.57
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(12) NOT NULL,
  `no_pel` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tarif` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `st_awal` int(100) NOT NULL,
  `st_akhir` int(100) NOT NULL,
  `verifikasi` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `no_pel`, `nama`, `alamat`, `tarif`, `foto`, `st_awal`, `st_akhir`, `verifikasi`) VALUES
(1, '111229920', 'Berlin', 'Jln Sadang Serang', '40129', '', 20091, 12002, 1),
(3, '00288291111', 'Irpandi', 'Jln Cibuntu', '10029', '', 30029, 10023, 0),
(4, '0029921', 'Wahyudin', 'Jln Roro', '10000', '', 20000, 1000, 0),
(5, '1133102', 'Supomo', 'Jln Jonggrang', '10000', '', 20000, 1000, 0),
(7, '1212', 'rifki', 'jln', '2323', '_20170103_155301.JPG', 2312, 3434, 0),
(8, '1212', 'Guntur Petir', 'jln', '2323', '_20170103_1553012.JPG', 2312, 3434, 0),
(9, '1234', 'Indra', 'Jln Guntur', '340', '_20170108_220509.JPG', 302, 40239, 0),
(10, '1212', 'rifki', 'jln', '1212', '_20161215_121923.JPG', 3434, 4545, 1),
(11, '2345', 'Brugman', 'Jln Guntur Haji', '34020', 'HD.JPG', 40399, 40245, 0),
(12, '2345', 'Zoro', 'Jln Onepiece', '34020', 'theodore.jpg', 40399, 40245, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `water_meter`
--

CREATE TABLE `water_meter` (
  `id` int(12) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `water_meter`
--

INSERT INTO `water_meter` (`id`, `nickname`, `name`) VALUES
(2, 'BAR', 'BARINDO'),
(4, 'LIN', 'LINFLOW'),
(5, 'AA', 'AA'),
(6, 'New Brand', 'Brand');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water_meter`
--
ALTER TABLE `water_meter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `water_meter`
--
ALTER TABLE `water_meter`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
