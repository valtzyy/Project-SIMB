-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2025 at 05:49 PM
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
(1, 'Kecepatan 74-95 mil per jam', 26),
(2, 'Kecepatan 96-110 mil per jam', 22),
(3, 'Kecepatan 111-129 mil per jam', 17),
(4, 'Kecepatan 130-156 mil per jam', 12),
(5, 'Kecepatan di atas 157 mil per jam', 7);

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
(1, 'Great Galveston', 1900, 'Kategori 4', 'Bencana alam paling mematikan dalam sejarah AS (8.000+ tewas).'),
(2, 'Labor Day', 1935, 'Kategori 5', 'Badai pertama kategori 5 yang tercatat mendarat di AS; menyapu bersih Florida Keys.'),
(3, 'Camille', 1969, 'Kategori 5', 'Kehancuran total di pesisir Mississippi; kecepatan angin diperkirakan 175 mph (280 km/h).'),
(4, 'Bhola Cyclone', 1970, 'Setara Kategori 3/4', 'Siklon paling mematikan di dunia (Bangladesh), menewaskan 300.000-500.000 jiwa.'),
(5, 'Tip', 1979, 'Setara Kategori 5', 'Siklon tropis terbesar dan terkuat secara fisik yang pernah tercatat di Pasifik Barat.'),
(6, 'Andrew', 1992, 'Kategori 5', 'Menghancurkan lebih dari 63.000 rumah di Florida Selatan; kerugian ekonomi sangat masif.'),
(7, 'Mitch', 1998, 'Kategori 5', 'Curah hujan ekstrem menyebabkan tanah longsor fatal di Honduras dan Nikaragua (11.000+ tewas).'),
(8, 'Katrina', 2005, 'Kategori 3', 'Jebolnya tanggul di New Orleans menyebabkan banjir kota yang parah dan krisis kemanusiaan.'),
(9, 'Nargis', 2008, 'Setara Kategori 4', 'Menyebabkan gelombang badai dahsyat di Myanmar, menewaskan lebih dari 138.000 orang.'),
(10, 'Sandy', 2012, 'Kategori 3', 'Superstorm yang melumpuhkan New York City dan pesisir timur AS dengan banjir rob.'),
(11, 'Haiyan (Yolanda)', 2013, 'Setara Kategori 5', 'Salah satu badai terkuat saat menyentuh daratan (Filipina); angin berkelanjutan 195 mph.'),
(12, 'Patricia', 2015, 'Kategori 5', 'Angin berkelanjutan tertinggi yang pernah diukur secara langsung (215 mph) di Pasifik Timur.'),
(13, 'Harvey', 2017, 'Kategori 4', 'Badai dengan curah hujan tertinggi dalam sejarah AS, menenggelamkan wilayah Houston, Texas.'),
(14, 'Maria', 2017, 'Kategori 5', 'Menghancurkan infrastruktur listrik di seluruh pulau Puerto Rico; krisis pemulihan bertahun-tahun.'),
(15, 'Dorian', 2019, 'Kategori 5', 'Berhenti (stalling) di atas Bahama selama berhari-hari dengan kekuatan penuh menyebabkan kehancuran total.');

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
(1, 860, 53357, 7214000, 91200000000);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lokasi_bencana`
--
ALTER TABLE `lokasi_bencana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_topan`
--
ALTER TABLE `riwayat_topan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `statistik_umum`
--
ALTER TABLE `statistik_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
