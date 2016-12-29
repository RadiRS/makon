-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2016 at 09:56 
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `DETAIL_KEUANGAN`
--

CREATE TABLE IF NOT EXISTS `DETAIL_KEUANGAN` (
  `ID_KEUANGAN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `DETAIL_KEUANGAN` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DETAIL_KEUANGAN`
--

INSERT INTO `DETAIL_KEUANGAN` (`ID_KEUANGAN`, `ID_USER`, `DETAIL_KEUANGAN`) VALUES
(1, 1, 'pemasukan');

-- --------------------------------------------------------

--
-- Table structure for table `DETAIL_TUGAS`
--

CREATE TABLE IF NOT EXISTS `DETAIL_TUGAS` (
  `ID_TUGAS` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `DETAIL_TUGAS` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TBL_KEUANGAN`
--

CREATE TABLE IF NOT EXISTS `TBL_KEUANGAN` (
  `ID_KEUANGAN` int(11) NOT NULL,
  `JENIS_KEUANGAN` varchar(15) DEFAULT NULL,
  `BIAYA` bigint(20) DEFAULT NULL,
  `TBL` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TBL_KEUANGAN`
--

INSERT INTO `TBL_KEUANGAN` (`ID_KEUANGAN`, `JENIS_KEUANGAN`, `BIAYA`, `TBL`) VALUES
(1, 'pemasukan', 10000, '2016-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `TBL_TUGAS`
--

CREATE TABLE IF NOT EXISTS `TBL_TUGAS` (
  `ID_TUGAS` int(11) NOT NULL,
  `HARI_TUGAS` varchar(10) DEFAULT NULL,
  `TUGAS` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TBL_USER`
--

CREATE TABLE IF NOT EXISTS `TBL_USER` (
  `ID_USER` int(11) NOT NULL,
  `NAMA_USER` varchar(250) DEFAULT NULL,
  `EMAIL_USER` varchar(100) DEFAULT NULL,
  `PASSWORD_USER` varchar(250) DEFAULT NULL,
  `HAKAKSES_USER` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TBL_USER`
--

INSERT INTO `TBL_USER` (`ID_USER`, `NAMA_USER`, `EMAIL_USER`, `PASSWORD_USER`, `HAKAKSES_USER`) VALUES
(1, 'Radi', 'radi@gmail.com', 'radi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DETAIL_KEUANGAN`
--
ALTER TABLE `DETAIL_KEUANGAN`
  ADD PRIMARY KEY (`ID_KEUANGAN`,`ID_USER`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `DETAIL_TUGAS`
--
ALTER TABLE `DETAIL_TUGAS`
  ADD PRIMARY KEY (`ID_TUGAS`,`ID_USER`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `TBL_KEUANGAN`
--
ALTER TABLE `TBL_KEUANGAN`
  ADD PRIMARY KEY (`ID_KEUANGAN`);

--
-- Indexes for table `TBL_TUGAS`
--
ALTER TABLE `TBL_TUGAS`
  ADD PRIMARY KEY (`ID_TUGAS`);

--
-- Indexes for table `TBL_USER`
--
ALTER TABLE `TBL_USER`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TBL_KEUANGAN`
--
ALTER TABLE `TBL_KEUANGAN`
  MODIFY `ID_KEUANGAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `TBL_TUGAS`
--
ALTER TABLE `TBL_TUGAS`
  MODIFY `ID_TUGAS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TBL_USER`
--
ALTER TABLE `TBL_USER`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `DETAIL_KEUANGAN`
--
ALTER TABLE `DETAIL_KEUANGAN`
  ADD CONSTRAINT `DETAIL_KEUANGAN_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `TBL_USER` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DETAIL_KEUANGAN_ibfk_2` FOREIGN KEY (`ID_KEUANGAN`) REFERENCES `TBL_KEUANGAN` (`ID_KEUANGAN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `DETAIL_TUGAS`
--
ALTER TABLE `DETAIL_TUGAS`
  ADD CONSTRAINT `DETAIL_TUGAS_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `TBL_USER` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DETAIL_TUGAS_ibfk_2` FOREIGN KEY (`ID_TUGAS`) REFERENCES `TBL_TUGAS` (`ID_TUGAS`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
