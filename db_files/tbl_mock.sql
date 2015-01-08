-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2015 at 07:22 PM
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
-- Table structure for table `tbl_mock`
--

CREATE TABLE IF NOT EXISTS `tbl_mock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_mobile` int(16) NOT NULL,
  `product` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fk_status` int(11) NOT NULL DEFAULT '0',
  `assigned_worker` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`fk_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `tbl_mock`
--

INSERT INTO `tbl_mock` (`id`, `c_name`, `c_email`, `c_mobile`, `product`, `description`, `fk_status`, `assigned_worker`) VALUES
(1, 'danish', 'dani3250@gmail.com', 2147483647, 'moblie', 'my phones earpiece not working', 2, 'ribu'),
(2, 'rehab', 'ribu99@gmail.com', 2147483647, 'laptop', 'my keyboard not working', 1, 'waseem'),
(3, 'henna', 'henawatson@gmail.com', 2147483647, 'desktop', 'my monitor stopped working', 1, 'waseem'),
(4, 'rayees', 'rayeeskm@hotmail.com', 2147483647, 'laptop', 'laptop not working', 3, 'ribu'),
(5, 'rishad', 'rishadkm@hotmail.com', 2147483647, 'moblie', 'not charging', 1, 'salin'),
(6, 'waseem', 'waseeeem@gmail.com', 2147483647, 'moblie', 'not working', 2, 'ribu'),
(7, 'tappu', 'tappu.jh.com', 2147483647, 'laptop', 'HGFHGFHGF', 1, 'waseem'),
(8, 'thamanna', 'tj@gmail.com', 2147483647, 'moblie', 'kjbasdkjabdsa', 1, 'salin'),
(9, 'zahal', 'zahal619@gmail.com', 2147483647, 'moblie', 'my mobile stopped working', 1, 'zaheen'),
(10, 'dani', 'dani3250@gmail.com', 2147483647, 'moblie', 'hkjhbkhb', 1, 'ribu'),
(11, 'dani', 'dani3250@gmail.com', 2147483647, 'moblie', 'hkjhbkhb', 1, 'salin'),
(12, 'dani', 'dani3250@gmail.com', 2147483647, 'moblie', 'hkjhbkhb', 1, 'ribu'),
(13, 'dani', 'dani3250@gmail.com', 2147483647, 'moblie', 'hkjhbkhb', 1, 'salin'),
(14, 'dani', 'dani3250@gmail.com', 2147483647, 'moblie', 'hkjhbkhb', 1, 'waseem'),
(15, 'dani', 'dani3250@gmail.com', 2147483647, 'moblie', 'hkjhbkhb', 1, 'waseem'),
(16, 'dani', 'dani3250@gmail.com', 2147483647, 'moblie', 'hkjhbkhb', 1, 'ribu'),
(17, 'dani', 'dani3250@gmail.com', 2147483647, 'moblie', 'hkjhbkhb', 1, 'ribu'),
(18, 'dani', 'dani3250@gmail.com', 2147483647, 'moblie', 'hkjhbkhb', 1, 'ribu'),
(19, 'danish', 'dani3250@gmail.com', 2147483647, 'moblie', 'ljm;mnkmm', 1, 'ribu'),
(20, 'danish', 'dani3250@gmail.com', 2147483647, 'moblie', 'ljm;mnkmm', 1, 'ribu'),
(21, 'danish', 'dani3250@gmail.com', 2147483647, 'moblie', 'ljm;mnkmm', 1, 'waseem'),
(22, 'danish', 'dani3250@gmail.com', 2147483647, 'moblie', 'ljm;mnkmm', 1, 'ribu'),
(23, 'danish', 'dani3250@gmail.com', 2147483647, 'moblie', 'ljm;mnkmm', 1, 'ribu'),
(24, 'danish', 'dani3250@gmail.com', 2147483647, 'moblie', 'ljm;mnkmm', 1, 'waseem'),
(33, 'henna', 'hena.watson@gmail.com', 2147483647, 'Laptop', 'lknlksedfsc', 2, 'DANI'),
(34, 'henna', 'hena.watson@gmail.com', 2147483647, 'Laptop', 'lknlksedfsc', 1, 'DANI'),
(35, 'henna', 'hena.watson@gmail.com', 2147483647, 'Laptop', 'asdasdasfdasf', 1, 'DANI'),
(36, 'henna', 'hena.watson@gmail.com', 2147483647, 'Laptop', 'asdasdasfdasf', 0, 'DANI'),
(37, 'henna', 'hena.watson@gmail.com', 2147483647, 'Laptop', 'asdasdasfdasf', 0, ''),
(38, 'henna', 'hena.watson@gmail.com', 2147483647, 'Laptop', 'asdasdasfdasf', 0, ''),
(64, 'dani', 'dani3250@gmail.com', 2147483647, 'Laptop', 'kqjbk kjbkjb kjbkjb kjb kjb kjbk jbkjbkjbkj kjbkjbk jbkjb kjbkjbkj\r\n', 1, 'DANI'),
(65, 'dani', 'dani3250@gmail.com', 2147483647, 'Laptop', 'kqjbk kjbkjb kjbkjb kjb kjb kjbk jbkjbkjbkj kjbkjbk jbkjb kjbkjbkj\r\n', 1, 'nishan'),
(66, 'dani', 'dani3250@gmail.com', 2147483647, 'Laptop', 'kqjbk kjbkjb kjbkjb kjb kjb kjbk jbkjbkjbkj kjbkjbk jbkjb kjbkjbkj\r\n', 1, 'thamanna'),
(67, 'dani', 'dani3250@gmail.com', 2147483647, 'Laptop', 'kqjbk kjbkjb kjbkjb kjb kjb kjbk jbkjbkjbkj kjbkjbk jbkjb kjbkjbkj\r\n', 1, 'HENNU'),
(68, 'dani', 'dani3250@gmail.com', 2147483647, 'Laptop', 'kqjbk kjbkjb kjbkjb kjb kjb kjbk jbkjbkjbkj kjbkjbk jbkjb kjbkjbkj\r\n', 1, 'DANI'),
(69, 'dani', 'dani3250@gmail.com', 2147483647, 'Laptop', 'kqjbk kjbkjb kjbkjb kjb kjb kjbk jbkjbkjbkj kjbkjbk jbkjb kjbkjbkj\r\n', 0, 'DANI'),
(70, 'dani', 'dani3250@gmail.com', 2147483647, 'Laptop', 'kqjbk kjbkjb kjbkjb kjb kjb kjbk jbkjbkjbkj kjbkjbk jbkjb kjbkjbkj\r\n', 0, ''),
(71, 'dani', 'dani3250@gmail.com', 2147483647, 'Laptop', 'kqjbk kjbkjb kjbkjb kjb kjb kjbk jbkjbkjbkj kjbkjbk jbkjb kjbkjbkj\r\n', 0, 'BACHU'),
(72, 'dani', 'dani3250@gmail.com', 2147483647, 'Laptop', 'kqjbk kjbkjb kjbkjb kjb kjb kjbk jbkjbkjbkj kjbkjbk jbkjb kjbkjbkj\r\n', 1, 'DANI');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_mock`
--
ALTER TABLE `tbl_mock`
  ADD CONSTRAINT `tbl_mock_ibfk_1` FOREIGN KEY (`fk_status`) REFERENCES `tbl_status` (`status_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
