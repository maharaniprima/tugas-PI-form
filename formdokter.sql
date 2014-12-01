-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2014 at 05:51 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medical_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdokter`
--

CREATE TABLE IF NOT EXISTS `formdokter` (
  `kodepoli` text NOT NULL,
  `kodedokter` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `telfon` text NOT NULL,
  `tarif` text NOT NULL,
  `spesialis` text NOT NULL,
  `email` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formdokter`
--

INSERT INTO `formdokter` (`kodepoli`, `kodedokter`, `password`, `nama`, `telfon`, `tarif`, `spesialis`, `email`, `foto`) VALUES
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('a', 'admin', 'admin', 'a', '1', '1', 'Spesialis Gigi', 'andamaharani@gmail.com', 'a.jpg'),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('123456', 'admin', 'admin', 'asdfg', '1', '122', 'Spesialis Gigi', '12@jkl', 'a.jpg'),
('1', 'admin', 'admin', 'q', '12', '122', 'Spesialis Kulit dan Kelamin', 'qq@hjj', 'a.jpg'),
('1', 'admin', 'admin', 'q', '12', '122', 'Spesialis Kulit dan Kelamin', 'qq@hjj', 'a.jpg'),
('1', 'admin', 'admin', 'q', '12', '122', 'Spesialis Kulit dan Kelamin', 'qq@hjj', 'a.jpg'),
('1', 'admin', 'admin', 'q', '12', '122', 'Spesialis Kulit dan Kelamin', 'qq@hjj', 'a.jpg'),
('1', 'admin', 'admin', 'q', '12', '122', 'Spesialis Kulit dan Kelamin', 'qq@hjj', 'a.jpg'),
('1', 'admin', 'admin', 'q', '12', '122', 'Spesialis Kulit dan Kelamin', 'qq@hjj', 'a.jpg'),
('1', 'admin', 'admin', 'q', '12', '122', 'Spesialis Kulit dan Kelamin', 'qq@hjj', 'a.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
