-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2015 at 07:21 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `u_email_id` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` enum('admin','worker') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `name`, `u_email_id`, `phone`, `role`) VALUES
(1, 'DANI', 1234, '', '', '', 'admin'),
(2, 'RIBU', 1234, '', '', '', 'worker'),
(3, 'BACHU', 1234, '', '', '', 'worker'),
(4, 'CHINJU', 1234, '', '', '', 'worker'),
(5, 'HENNU', 1234, '', '', '', 'admin'),
(6, 'zahal', 1234, '', '', '', 'worker'),
(7, 'zaheen', 1234, '', '', '', 'worker'),
(8, 'rishan', 1234, '', '', '', 'worker'),
(9, 'nishan', 1234, '', '', '', 'worker'),
(10, 'thamanna', 1234, '', '', '', 'worker');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
