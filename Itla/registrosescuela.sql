-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2019 at 04:57 AM
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
-- Database: `registrosescuela`
--

-- --------------------------------------------------------

--
-- Table structure for table `escuela`
--

DROP TABLE IF EXISTS `escuela`;
CREATE TABLE IF NOT EXISTS `escuela` (
  `NOMBRE` varchar(150) DEFAULT NULL,
  `DIRECTOR` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escuela`
--

INSERT INTO `escuela` (`NOMBRE`, `DIRECTOR`) VALUES
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('RAMON MATIAS MELLA', 'TEUDY');

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `Matricula` varchar(50) DEFAULT NULL,
  `Seccion` varchar(50) DEFAULT NULL,
  `Nombre` varchar(150) DEFAULT NULL,
  `Clave` varchar(50) DEFAULT NULL,
  `Padre` varchar(150) DEFAULT NULL,
  `Maestro` varchar(150) DEFAULT NULL,
  `Materia` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`Matricula`, `Seccion`, `Nombre`, `Clave`, `Padre`, `Maestro`, `Materia`) VALUES
('17-EINS-6-004', '913', 'DARLING DE LA CRUZ', NULL, 'ELENA,PEDRO', 'REMY', 'PHP'),
('17-eisn-6-004', '101', 'Darling de la cruz', NULL, 'Pedro', 'Mateito', 'Basketball'),
('', '', 'Pedro', NULL, '', '', ''),
('', '', 'Pedro', NULL, '', '', ''),
('', '', 'dfasdf', NULL, '', '', ''),
('', '', 'FADSF', NULL, '', '', ''),
('', '', 'FDASFSA', NULL, '', '', ''),
('', '', '', NULL, '', '', ''),
('FDSAFASF', 'DFASDF', 'ASDFASDF', NULL, 'ASDFASDF', 'FDASDFA', 'FADSFA'),
('', '', 'pepe', NULL, '', '', ''),
('FDAFASF', 'ASDFASDF', 'ASDFASD', NULL, 'ASDFASF', 'ASDFASDF', 'ASDFAS'),
('17-eins-6-004', '913', 'Mateo', '12345', 'Elena', 'Remy', 'Caja llena'),
('17-eins-6-004', '181', 'Mateo', '1234', 'PEPE', 'TOMY', 'ESO');

-- --------------------------------------------------------

--
-- Table structure for table `maestros`
--

DROP TABLE IF EXISTS `maestros`;
CREATE TABLE IF NOT EXISTS `maestros` (
  `Nombre` varchar(150) DEFAULT NULL,
  `Clave` varchar(50) DEFAULT NULL,
  `Seccion` varchar(50) DEFAULT NULL,
  `Materia` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `padre`
--

DROP TABLE IF EXISTS `padre`;
CREATE TABLE IF NOT EXISTS `padre` (
  `NOMBRE` varchar(150) DEFAULT NULL,
  `CONTRA` varchar(50) DEFAULT NULL,
  `HIJO` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `padre`
--

INSERT INTO `padre` (`NOMBRE`, `CONTRA`, `HIJO`) VALUES
('', '', ''),
('FASDF', 'SDFASF', 'ADFAS'),
('Elena', '12345', 'Darling'),
('', '', ''),
('Elena1', '12345', 'Darling');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_pass`
--

DROP TABLE IF EXISTS `usuario_pass`;
CREATE TABLE IF NOT EXISTS `usuario_pass` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(150) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario_pass`
--

INSERT INTO `usuario_pass` (`ID`, `USUARIO`, `PASSWORD`) VALUES
(1, 'darling', '12345'),
(2, '', ''),
(3, 'Elena1', '12345'),
(4, 'SFDASDF', 'ASDFASDF'),
(5, 'MATE', 'TI'),
(6, '17-eisn-6-004', ''),
(7, '', ''),
(8, '17-eisn-6-004', 'fadsf'),
(9, '1012', 'fadsf'),
(10, '1012', 'fadsf'),
(11, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
