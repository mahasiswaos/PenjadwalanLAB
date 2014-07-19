-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 18, 2014 at 11:42 AM
-- Server version: 5.5.37
-- PHP Version: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjadwalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matkul_id` int(10) NOT NULL,
  `lab_id` int(10) NOT NULL,
  `kd_jadwal` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kd_jadwal_UNIQUE` (`kd_jadwal`),
  KEY `fk_matkul_has_lab_lab1_idx` (`lab_id`),
  KEY `fk_matkul_has_lab_matkul1_idx` (`matkul_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `matkul_id`, `lab_id`, `kd_jadwal`, `tanggal`, `waktu`) VALUES
(4, 10, 1, 'A0091', '2014-07-11', '00:13:00'),
(5, 11, 5, 'A0023', '1123-12-18', '23:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_lab` varchar(10) NOT NULL,
  `nama_lab` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kd_lab_UNIQUE` (`kd_lab`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `kd_lab`, `nama_lab`) VALUES
(1, 'A001', 'Lab 1'),
(5, 'A0012', 'Lab 44');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nim` varchar(12) NOT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `angkatan` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nim_UNIQUE` (`nim`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_mhs`, `tgl_lahir`, `jk`, `alamat`, `jurusan`, `angkatan`) VALUES
(1, '10101010', 'Hwndra', '2014-07-09', 'L', 'bucun                            ', 'S1 TI', '2010'),
(2, '1010510019', 'hendra', '2014-07-17', 'P', 'buncu', 'S1 TI', '2010'),
(3, '1010510010', 'hendraaaa', '2014-07-09', 'P', 'buncu  selatan                        ', 'S1 TI', '2010'),
(6, '10101010222', 'satria', '2014-07-10', 'P', 'sum', 'S1 TI', '2010'),
(8, '10105100111', 'hendraaaa', '2014-07-11', 'L', 'buncu', 'S1 TI', '2010');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_has_matkul`
--

CREATE TABLE IF NOT EXISTS `mahasiswa_has_matkul` (
  `mahasiswa_id` int(10) NOT NULL,
  `matkul_id` int(10) NOT NULL,
  PRIMARY KEY (`mahasiswa_id`,`matkul_id`),
  KEY `fk_mahasiswa_has_matkul_matkul1_idx` (`matkul_id`),
  KEY `fk_mahasiswa_has_matkul_mahasiswa1_idx` (`mahasiswa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE IF NOT EXISTS `matkul` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(50) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kd_mk_UNIQUE` (`kd_mk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kd_mk`, `nama_mk`, `sks`) VALUES
(10, '0039', 'AB', 3),
(11, 'W01', 'Web II', 3),
(13, '00392', 'Jarkom', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `fk_matkul_has_lab_lab1` FOREIGN KEY (`lab_id`) REFERENCES `lab` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_matkul_has_lab_matkul1` FOREIGN KEY (`matkul_id`) REFERENCES `matkul` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa_has_matkul`
--
ALTER TABLE `mahasiswa_has_matkul`
  ADD CONSTRAINT `fk_mahasiswa_has_matkul_mahasiswa1` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_has_matkul_matkul1` FOREIGN KEY (`matkul_id`) REFERENCES `matkul` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
