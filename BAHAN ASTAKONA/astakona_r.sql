-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 04:20 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astakona_r`
--

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_kenderaan`
--

CREATE TABLE `maklumat_kenderaan` (
  `noplat` varchar(10) NOT NULL,
  `no_rumah` int(11) NOT NULL,
  `nama_jalan` varchar(20) NOT NULL,
  `nama_pemilik_kenderaan` varchar(20) NOT NULL,
  `hubungan_penghuni` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklumat_kenderaan`
--

INSERT INTO `maklumat_kenderaan` (`noplat`, `no_rumah`, `nama_jalan`, `nama_pemilik_kenderaan`, `hubungan_penghuni`) VALUES
('JQM 7883', 1, 'Melor 1', 'Kuntum', 'Main Occupants'),
('JJM 1212', 1, 'Melor 2', 'Samsul', 'Husband');

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_rumah`
--

CREATE TABLE `maklumat_rumah` (
  `no_rumah` varchar(50) NOT NULL,
  `nama_jalan` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `nama_penghuni` varchar(50) NOT NULL,
  `status_rumah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklumat_rumah`
--

INSERT INTO `maklumat_rumah` (`no_rumah`, `nama_jalan`, `nama_pemilik`, `nama_penghuni`, `status_rumah`) VALUES
('1', 'Melor 1', 'Kuntum Binti Jambangan', 'Kuntum Binti Jambangan', 'Owner'),
('2', 'Melor 1', 'Yap Ah Lan', 'Rajeswari a/p Kumar', 'Tenant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
