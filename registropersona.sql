-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2019 at 03:20 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registropersona`
--

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `NOMBRE` varchar(150) DEFAULT NULL,
  `APELLIDO` varchar(100) DEFAULT NULL,
  `CEDULA` varchar(12) DEFAULT NULL,
  `EDAD` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`NOMBRE`, `APELLIDO`, `CEDULA`, `EDAD`) VALUES
('dARLING', 'De la cruz', '402', '5'),
('$NOMBRE', '$APE', '$CED', '$ED'),
('darling', 'da', 'da', 'da'),
('', '', '', ''),
('darling', 'da', 'da', 'da'),
('darling', 'da', 'da', 'da'),
('darling', 'da', 'da', 'da'),
('darling21', 'da', 'da2', 'da');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
