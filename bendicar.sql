-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 08:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bendicar`
--

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `iddenda` int(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `jumlahdenda` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`iddenda`, `jenis`, `jumlahdenda`) VALUES
(101, 'motor', 20000),
(102, 'mobil', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `harga_sewa` int(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `no_polisi` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`harga_sewa`, `jenis`, `merk`, `no_polisi`) VALUES
(51000, 'motor', 'honda', 1234),
(50000, 'mobil', 'toyota', 7891);

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `idpetugas` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `no_telp` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`idpetugas`, `nama`, `status`, `no_telp`) VALUES
(123, 'reza', 'karyawan', 721345),
(134, 'roy', 'karyawan', 72145);

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `idpenyewa` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`idpenyewa`, `nama`, `alamat`, `no_telp`) VALUES
(23753103, 'linda', 'kemiling', '0857643120'),
(23753112, 'dini', 'rajabasa', '082282265559');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idpetugas` int(30) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no_telp` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `nama`, `no_telp`) VALUES
(145, 'bayu', 7245),
(167, 'harris', 7236);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(30) NOT NULL,
  `kd_kmbli` int(30) NOT NULL,
  `kd_pinjam` int(30) NOT NULL,
  `kondisi` varchar(30) NOT NULL,
  `tgl_kmbli` date NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `total_byr` int(30) NOT NULL,
  `total_denda` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `kd_kmbli`, `kd_pinjam`, `kondisi`, `tgl_kmbli`, `tgl_pinjam`, `total_byr`, `total_denda`) VALUES
(106, 2, 3, 'kurang baik', '2024-11-02', '2024-11-01', 65000, 15000),
(109, 1, 2, 'baik', '2024-11-08', '2024-11-01', 50000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`iddenda`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`no_polisi`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`idpenyewa`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
