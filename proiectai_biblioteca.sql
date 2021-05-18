-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2021 at 06:13 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proiectai_biblioteca`
--
CREATE DATABASE IF NOT EXISTS `proiectai_biblioteca` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `proiectai_biblioteca`;

-- --------------------------------------------------------

--
-- Table structure for table `anunturi`
--

DROP TABLE IF EXISTS `anunturi`;
CREATE TABLE IF NOT EXISTS `anunturi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anunt` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anunturi`
--

INSERT INTO `anunturi` (`id`, `anunt`, `timestamp`) VALUES
(1, 'Incepand de maine, 17.05.2021 Biblioteca se va redeschide!', '2021-05-16 06:15:00'),
(2, 'De astazi puteti folosi calculatoarele din biblioteca pentru a lectura biblioteca tehnica digitala.', '2021-05-17 07:00:00'),
(3, 'aaa', '2021-05-17 14:35:37'),
(4, 'aaa', '2021-05-17 14:36:04'),
(5, 'anunt', '2021-05-18 17:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'admin1', 'admin1', 'admin', '2021-05-03 15:12:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
