-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2025 at 03:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simbat`
--

-- --------------------------------------------------------

--
-- Table structure for table `frekuensi_tahunan`
--

CREATE TABLE `frekuensi_tahunan` (
  `id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `jumlah_topan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `frekuensi_tahunan`
--

INSERT INTO `frekuensi_tahunan` (`id`, `tahun`, `jumlah_topan`) VALUES
(1, 2014, 6),
(2, 2015, 5),
(3, 2016, 7),
(4, 2017, 8),
(5, 2018, 10),
(6, 2019, 9),
(7, 2020, 11),
(8, 2021, 12),
(9, 2022, 8),
(10, 2023, 8);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_topan`
--

CREATE TABLE `kategori_topan` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_topan`
--

INSERT INTO `kategori_topan` (`id`, `kategori`, `jumlah`) VALUES
(1, 'Depresi Tropis', 22),
(2, 'Badai Tropis', 28),
(3, 'Topan Kategori 1-2', 19),
(4, 'Topan Kategori 3-5', 15);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_bencana`
--

CREATE TABLE `lokasi_bencana` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_topan`
--

CREATE TABLE `riwayat_topan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `dampak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_topan`
--

INSERT INTO `riwayat_topan` (`id`, `nama`, `tahun`, `kategori`, `dampak`) VALUES
(1, 'Topan Kirana', 2014, 'Badai Tropis', 'Banjir pesisir & angin kencang'),
(2, 'Topan Samudra', 2015, 'Depresi Tropis', 'Kerusakan ringan & hujan ekstrem'),
(3, 'Topan Rinjani', 2016, 'Topan Kategori 2', 'Rusak 900 rumah, 30 korban'),
(4, 'Topan Nusa', 2017, 'Topan Kategori 3', 'Putus akses jalan & listrik 3 hari'),
(5, 'Topan Harimau', 2018, 'Topan Kategori 4', '2100 rumah rusak & korban signifikan'),
(6, 'Topan Lestari', 2019, 'Badai Tropis', 'Longsor di daerah pegunungan'),
(7, 'Topan Mawar', 2020, 'Topan Kategori 5', 'Kerugian besar & evakuasi massal'),
(8, 'Topan Intan', 2021, 'Topan Kategori 3', 'Gelombang tinggi & banjir bandang'),
(9, 'Topan Sejati', 2022, 'Depresi Tropis', 'Dampak ringan, hujan lokal'),
(10, 'Topan Garuda', 2023, 'Badai Tropis', 'Kerusakan infrastruktur ringan');

-- --------------------------------------------------------

--
-- Table structure for table `statistik_umum`
--

CREATE TABLE `statistik_umum` (
  `id` int(11) NOT NULL,
  `total_topan` int(11) DEFAULT NULL,
  `korban_jiwa` int(11) DEFAULT NULL,
  `infrastruktur_rusak` int(11) DEFAULT NULL,
  `kerugian_usd` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statistik_umum`
--

INSERT INTO `statistik_umum` (`id`, `total_topan`, `korban_jiwa`, `infrastruktur_rusak`, `kerugian_usd`) VALUES
(1, 84, 12430, 18520, 4700000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frekuensi_tahunan`
--
ALTER TABLE `frekuensi_tahunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_topan`
--
ALTER TABLE `kategori_topan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_bencana`
--
ALTER TABLE `lokasi_bencana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_topan`
--
ALTER TABLE `riwayat_topan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik_umum`
--
ALTER TABLE `statistik_umum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frekuensi_tahunan`
--
ALTER TABLE `frekuensi_tahunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_topan`
--
ALTER TABLE `kategori_topan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lokasi_bencana`
--
ALTER TABLE `lokasi_bencana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_topan`
--
ALTER TABLE `riwayat_topan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `statistik_umum`
--
ALTER TABLE `statistik_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
