-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 04:57 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unsm1482_unbk`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no_test` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kind` varchar(10) NOT NULL,
  `king` varchar(10) NOT NULL,
  `kmat` varchar(10) NOT NULL,
  `kpro` varchar(10) NOT NULL,
  `status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_test`, `nama`, `prodi`, `kind`, `king`, `kmat`, `kpro`, `status`) VALUES
('2116R1174', 'KAISAR BAGUS SURYO PROBOWO', 'TI', '82.00', '70.00', '92.50', '92.50', 1),
('2116R1186', 'ANGGA PRASETIAWAN', 'TI', '76.00', '82.00', '75.00', '92.50', 1),
('2116R1189', 'DINA SUCI FAUJIYAH', 'TI', '90.00', '72.00', '80.00', '87.50', 1),
('2116R1190', 'HEDY HERNANDY', 'TI', '84.00', '72.00', '80.00', '92.50', 1),
('2116R1192', 'MUHAMAD A\'INUL YAQIN', 'TI', '98.00', '96.00', '95.00', '90.00', 1),
('2116R1194', 'NISA AMALIA', 'TI', '78.00', '82.00', '95.00', '75.00', 1),
('2116R1195', 'RILO SETYO PAMBUDI', 'TI', '72.00', '88.00', '90.00', '90.00', 1),
('2116R1196', 'SITI KUROTUL AKYANI', 'TI', '92.00', '82.00', '70.00', '82.50', 1),
('2116R1197', 'MUHAMMAD IRSYAD ARROZI', 'TI', '96.00', '84.00', '92.50', '97.50', 1),
('2116R1206', 'BIRUL A\'LADIN', 'TI', '86.00', '90.00', '72.50', '65.00', 1),
('2116R1235', 'ULIN NUHA', 'TI', '80.00', '72.00', '95.00', '80.00', 1),
('2116R1236', 'MUHAMMAD BAEDHOWI', 'TI', '76.00', '88.00', '80.00', '70.00', 1),
('2116R1237', 'DARMAJI', 'TI', '72.00', '86.00', '80.00', '92.50', 1),
('NOMOR UJIAN', 'NAMA PESERTA', 'JURUSAN', 'BAHASA IND', 'BAHASA ING', 'MATEMATIKA', 'PRODUKTIF', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` tinyint(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_test`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
