-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 07:45 AM
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
-- Database: `gudangobat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataobat`
--

CREATE TABLE `dataobat` (
  `id_obat` int(11) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `namaobat` varchar(100) NOT NULL,
  `merkobat` text NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataobat`
--

INSERT INTO `dataobat` (`id_obat`, `golongan`, `namaobat`, `merkobat`, `satuan`, `jumlah`, `expired`) VALUES
(1001001, 'Antibiotik', 'Amoxciline', 'Amobiotic 500mg', 'Kapsul', 0, '2023-01-21'),
(1001002, 'Antibiotik', 'Amoxciline', 'Betamox 500mg', 'Kapsul', 100, '2023-01-19'),
(1001003, 'Antibiotik', 'Amoxciline', 'Supramox 500mg', 'Botol', 123, '2023-01-27'),
(1001004, 'Antiseptik', 'Rivanol 300 cc', 'Rivanol', 'Botol', 30, '2023-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `obatkeluar`
--

CREATE TABLE `obatkeluar` (
  `kodetransaksi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlahkeluar` int(11) NOT NULL,
  `expired` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obatkeluar`
--

INSERT INTO `obatkeluar` (`kodetransaksi`, `tanggal`, `id_instansi`, `id_obat`, `jumlahkeluar`, `expired`) VALUES
('TR-K2300001', '2023-01-16', 12300001, 1001004, 50, NULL),
('TR-K2300002', '2023-01-12', 12300002, 1001001, 25, NULL),
('TR-K2300003', '2023-01-18', 12300002, 1001001, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `obatmasuk`
--

CREATE TABLE `obatmasuk` (
  `kodetransaksi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlahmasuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obatmasuk`
--

INSERT INTO `obatmasuk` (`kodetransaksi`, `tanggal`, `id_obat`, `jumlahmasuk`) VALUES
('TR-M2200001', '2023-02-23', 1001001, 100),
('TR-M2200002', '2023-01-17', 1001002, 50),
('TR-M2200003', '2023-01-18', 1001003, 50),
('TR-M2200004', '2023-01-19', 1001003, 20),
('TR-M2200005', '2023-01-18', 1001002, 20),
('TR-M2200006', '2023-01-16', 1001004, 10),
('TR-M2200008', '2023-01-16', 1001002, 20);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuanstok`
--

CREATE TABLE `pengajuanstok` (
  `id_pengajuan` int(11) NOT NULL,
  `instansi_pemohon` varchar(100) NOT NULL,
  `idobat` int(11) NOT NULL,
  `jumlahpermintaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajuanstok`
--

INSERT INTO `pengajuanstok` (`id_pengajuan`, `instansi_pemohon`, `idobat`, `jumlahpermintaan`) VALUES
(1, 'Rumah Sakit Umum', 1001002, 3),
(2, 'Rumah Sakit 2', 1001002, 202),
(3, 'Rumah Sakit Umum', 1001004, 104),
(4, 'Rumah Sakit Umum', 1001004, 104);

-- --------------------------------------------------------

--
-- Table structure for table `transaksiditerima`
--

CREATE TABLE `transaksiditerima` (
  `kodetransaksi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlahditerima` int(11) NOT NULL,
  `tanggalterima` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `instansi` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `instansi`, `username`, `password`, `role`) VALUES
(1, 'lala', 'admin', 'admin@gmail.com', 'admin', 'Supplier'),
(3, 'coba', 'Rumah Sakit Umum', 'rsu@gmail.com', 'admin', 'Supplier'),
(4, 'coba1', 'Rumah Sakit 2', 'admin@gmail.com', 'admin', 'Farmasi'),
(5, 'coba3', 'Rumah Sakit 3', 'rsu3@gmail.com', 'admin', 'Supervisor'),
(6, 'lala', 'admin', '', 'admin', 'Supplier'),
(7, 'lala', 'admin', '', 'admin', 'Farmasi'),
(8, 'karin', 'Rumah Sakit 3', 'admin', 'admin', 'Supplier'),
(9, 'karin', 'Rumah Sakit 3', 'tes', 'tes1', 'Supplier'),
(10, 'karin', 'Rumah Sakit Umum', 'kar', 'kar123', 'Farmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataobat`
--
ALTER TABLE `dataobat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `obatkeluar`
--
ALTER TABLE `obatkeluar`
  ADD PRIMARY KEY (`kodetransaksi`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `obatmasuk`
--
ALTER TABLE `obatmasuk`
  ADD PRIMARY KEY (`kodetransaksi`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `pengajuanstok`
--
ALTER TABLE `pengajuanstok`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataobat`
--
ALTER TABLE `dataobat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001005;

--
-- AUTO_INCREMENT for table `pengajuanstok`
--
ALTER TABLE `pengajuanstok`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obatkeluar`
--
ALTER TABLE `obatkeluar`
  ADD CONSTRAINT `obatkeluar_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `dataobat` (`id_obat`);

--
-- Constraints for table `obatmasuk`
--
ALTER TABLE `obatmasuk`
  ADD CONSTRAINT `obatmasuk_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `dataobat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
