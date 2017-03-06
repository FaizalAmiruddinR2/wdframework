-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~yakkety.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2017 at 10:10 AM
-- Server version: 10.0.29-MariaDB-0ubuntu0.16.10.1
-- PHP Version: 7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswa`
--
CREATE DATABASE IF NOT EXISTS `dbmahasiswa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbmahasiswa`;

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nrp` (`nrp`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nrp`, `nama`, `jurusan`) VALUES
(36, '2110151001', 'Latifa', 'Teknik Informatika'),
(37, '2110151053', 'Faizal Amiruddin', 'Teknik Informatika'),
(40, '2110151040', 'Maulana R', 'Teknik Informatika'),
(41, '2110151043', 'Bagas D', 'Teknik Informatika'),
(42, '2110151050', 'Rico', 'Teknik Informatika'),
(44, '2110151059', 'Faruq', 'Teknik Informatika'),
(46, '2110151000', 'Coba coba', 'Teknik Komputer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
