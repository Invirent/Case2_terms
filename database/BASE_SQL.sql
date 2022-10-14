-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2022 at 10:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `KRS`
--

-- --------------------------------------------------------

--
-- Table structure for table `KRS`
--

CREATE TABLE `KRS` (
  `kode_krs` varchar(15) NOT NULL,
  `StudentID` varchar(10) NOT NULL,
  `kode_term` varchar(4) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `KRS`
--

INSERT INTO `KRS` (`kode_krs`, `StudentID`, `kode_term`, `keterangan`) VALUES
('100000001', '100000001', '1212', ''),
('100000002', '100000001', '1213', ''),
('100000003', '100000002', '1212', ''),
('100000004', '100000002', '1213', '');

-- --------------------------------------------------------

--
-- Table structure for table `krs_detail`
--

CREATE TABLE `krs_detail` (
  `kode_krsdetail` varchar(15) NOT NULL,
  `kode_krs` varchar(15) NOT NULL,
  `kode_matakuliah` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs_detail`
--

INSERT INTO `krs_detail` (`kode_krsdetail`, `kode_krs`, `kode_matakuliah`) VALUES
('10000000101', '100000001', 'MK0001'),
('10000000102', '100000001', 'MK0003'),
('10000000201', '100000002', 'MK0002'),
('10000000202', '100000002', 'MK0001'),
('10000000301', '100000003', 'MK0002'),
('10000000302', '100000003', 'MK0001'),
('10000000401', '100000004', 'MK0002'),
('10000000402', '100000004', 'MK0001');

-- --------------------------------------------------------

--
-- Table structure for table `Mahasiswa`
--

CREATE TABLE `Mahasiswa` (
  `StudentID` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Tahun_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Mahasiswa`
--

INSERT INTO `Mahasiswa` (`StudentID`, `Nama`, `Jurusan`, `Tahun_masuk`) VALUES
('100000001', 'BUDI', 'SISTEM INFORMASI', '2017'),
('100000002', 'SUSI', 'SISTEM INFORMASI', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `Matakuliah`
--

CREATE TABLE `Matakuliah` (
  `kode_matakuliah` varchar(6) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Matakuliah`
--

INSERT INTO `Matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`) VALUES
('MK0001', 'BUSINESS APPLICATION PROGRAMMING', 4),
('MK0002', 'AUDIT DAN KONTROL SISTEM INFROMASI', 4),
('MK003', 'PEMROGRAMAN BERORIENTASI OBJEK', 4);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `kode_term` varchar(4) NOT NULL,
  `tahun_ajar` varchar(4) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`kode_term`, `tahun_ajar`, `semester`, `keterangan`) VALUES
('1212', '2020', 'GANJIL', ''),
('1213', '2020', 'GENAP', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `KRS`
--
ALTER TABLE `KRS`
  ADD PRIMARY KEY (`kode_krs`);

--
-- Indexes for table `krs_detail`
--
ALTER TABLE `krs_detail`
  ADD PRIMARY KEY (`kode_krsdetail`);

--
-- Indexes for table `Mahasiswa`
--
ALTER TABLE `Mahasiswa`
  ADD PRIMARY KEY (`StudentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
