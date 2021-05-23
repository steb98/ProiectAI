-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2021 at 08:42 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `availability` int(10) UNSIGNED NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `publisher`, `availability`, `category`) VALUES
(1, 'Head First Java', 'Bert Bates & Kathy Sierra', 'Shroff/O’Reilly', 4, 'Informatica'),
(2, 'Effective Modern C++', 'Scott Meyers', 'O\'Reilly Media, Inc.', 3, 'Informatica'),
(3, 'Design Patterns: Elements of Reusable Object-Oriented Software', 'Erich Gamma', 'Addison-Wesley', 5, 'Informatica'),
(4, 'Engineering Mathematics: YouTube Workbook', 'Christopher C. Tisdell', 'Christopher C. Tisdell', 10, 'Mecanica'),
(5, 'Mechanical Engineering for Makers: A Hands-On Guide to Designing and Making', 'Brian Bunnell', 'O′Reilly', 8, 'Mecanica'),
(6, 'An Introduction to Mechanical Engineering', 'Jonathan Wickert', 'Cengage Learning', 6, 'Mecanica'),
(7, 'Organic Chemistry (COLLEGE IE OVERRUNS)', 'Janice Gorzynski Smith Dr.', 'McGraw-Hill Education', 8, 'Chimie'),
(8, 'Chemistry: An Introduction to General, Organic, and Biological Chemistry, Global Edition', 'Karen C. Timberlake', 'Pearson', 8, 'Chimie'),
(9, 'Concepts and Models of Inorganic Chemistry', 'Bodie E. Douglas', 'John Wiley & Sons', 1, 'Chimie'),
(10, 'How Cars Work', 'Tom Newton', 'Black Apple Press', 9, 'Automotive'),
(11, 'Auto Repair For Dummies', 'Deanna Sclar', 'For Dummies', 2, 'Automotive'),
(12, 'Automotive Service: Inspection, Maintenance, Repair', 'Tim Gilles', 'CENGAGE Delmar Learning', 2, 'Automotive'),
(13, 'Elevating Construction Superintendents: A Principle Based Leadership Guide for Assistant Supers and Superintendents in Construction', 'Jason Schroeder', 'Jason Schroeder', 3, 'Constructii'),
(14, 'Contractor\'s Estimate Log Book: Quote Record Book', 'Steyerhaus Publications', 'Steyerhaus Publications', 2, 'Constructii'),
(15, 'Schaum\'s Outline Of Strength Of Materials, Seventh Edition', 'Merle C. Potter', 'Merle C. Potter', 2, 'Constructii'),
(16, 'The Art of Electronics', 'Paul Horowitz', 'Cambridge University Press', 2, 'Electronica'),
(17, 'Make: Encyclopedia of Electronic Components Volume 3', 'Charles Platt', 'Maker Media, Inc', 2, 'Electronica'),
(18, 'Getting Started in Electronics', 'Forrest M. Mims III', 'Master Publishing, Inc.', 1, 'Electronica'),
(19, 'Architecture: Form, Space, & Order', 'Francis D. K. Ching', 'Wiley', 2, 'Arhitectura'),
(20, 'The Future of Architecture in 100 Buildings', 'Marc Kushner', 'Simon & Schuster/ Ted', 0, 'Arhitectura'),
(21, 'Brunelleschi\'s Dome: The Story of the Great Cathedral in Florence', 'Ross King', 'Vintage Digital', 0, 'Arhitectura'),
(22, 'Piles in Hydrotechnical Engineering', 'V.G. Fedorovsky', 'CRC Press', 2, 'Hidrotehnica'),
(23, 'Hydroelectrical engineering; a book for hydraulic and electrical engineers', 'Muller, Richard', 'New York, G. E. Stechert & Co', 0, 'Hidrotehnica');

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
