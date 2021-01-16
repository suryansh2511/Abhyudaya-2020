-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 02:10 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abh`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `college` varchar(1000) NOT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `level` int(10) NOT NULL,
  `actcode` int(10) NOT NULL,
  `unknown` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `phone`, `college`, `time`, `level`, `actcode`, `unknown`) VALUES
('rko', 'ritwik.tiwari02@gmail.com', '9b6582ec70ab8368b529e5626fe0f584', '0', 'mmmut', '2019-12-08 17:40:54', 0, 1253560527, 0),
('ritwik', 'ritwik@gmail.com', 'c3cf9a6d59477e9a20559bdd45b1e46f', '7004110940', 'mmm', '0000-00-00 00:00:00', 0, 0, 0),
('akshat', 'akshat@gmail.com', '91d3585c4023ba351e6aa8d94289a3f0', '7004110941', 'mmmut', '0000-00-00 00:00:00', 0, 0, 0),
('rohit', 'rohit@gmail.com', '2d235ace000a3ad85f590e321c89bb99', '7004110940', 'mmmut', '0000-00-00 00:00:00', 0, 0, 0),
('adarsh', 'adarsh@gmail.com', '97d9de758e20f8e5a74c21ba389fb562', '1234567890', 'mmm', '0000-00-00 00:00:00', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
