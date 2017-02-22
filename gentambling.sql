-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2016 at 04:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gentambling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `about` longtext,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `about`, `file`) VALUES
(1, '<p>Bikes Cabalen started in the year 1864</p> </br>\r\n\r\n<p>Botung Botungan is the real owner of the Bikes Cabalen but after many years passed by, Botung Botungan have to pass his business to his son named Tubung Botungan due to his age.</p> </br>\r\n\r\n<p>Tubung Botungan is a good business handler and always satisfy the customer that keeps the Bikes Cabalen alive.</p> </br>', 'upload_bikes/bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bikes`
--

CREATE TABLE IF NOT EXISTS `tbl_bikes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateArrival` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `partsContent` varchar(6000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_bikes`
--

INSERT INTO `tbl_bikes` (`id`, `dateArrival`, `price`, `brandName`, `file`, `partsContent`) VALUES
(21, '2016-02-23 23:20:03', '30,000', 'FELT F3X ', 'upload_bikes/slide-bike.jpg', 'Felt Cyclocross UHC Performance MMC Carbon Fiber frame w/ 3KP weave, shoulder friendly top tube, InsideOut internal molding process, aluminum BB30 Shell, internal electric or external mechanical cable routing, Carbon Fiber dropouts w/IS mount disc tabs & '),
(22, '2016-02-23 23:33:56', '90,000', 'FELT F5 SPECIAL EDITION ', 'upload_bikes/slide-bike1.jpg', 'The Felt F5 Special Edition is an upper mid-cost road bike. The frame of this is Felt''s HM High Modulus Modular carbon fiber frame with 3KP finish and replaceable hanger. The fork of the F5 Special Edition is also High Modulus carbon, which helps this bike to be durable. This fork comes with a compression device, allowing you to fine-tune performance.'),
(23, '2016-02-23 23:34:25', '60,200', 'FELT TK3', 'upload_bikes/slide-bike2.jpg', 'This track-specific Superlite aluminum frame is butted and shaped to withstand the rigors of track racing. Lightning-quick acceleration and maximum torsional stiffness make it competition-ready. Deep-section TKR-4 wheels and sturdy, lightweight components give you all you need in the race against the clock.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts`
--

CREATE TABLE IF NOT EXISTS `tbl_contacts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`id`, `phone`, `email`, `address`) VALUES
(1, '09215125125', 'bikescabalen@example.com', 'Santa Teresita<br> Mc Arthur Hi-Way<br>\r\nCity of San Fernando Pampanga Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE IF NOT EXISTS `tbl_events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `summary` longtext,
  `content` longtext,
  `file` varchar(255) DEFAULT NULL,
  `eventdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `message` longtext,
  `timesent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `phone`, `message`, `timesent`) VALUES
(3, 'Gregoryo', 'Gregoryo@gmail.com', 12512561, 'asfasfasf', '2016-02-24 02:40:19'),
(10, 'sagash', 'asfas@asgasg', 611125, '', '2016-02-24 03:16:05'),
(13, '36137', '5125@yhdh', 211612121, '12512512512', '2016-02-24 03:24:40'),
(14, 'asdasd', 'asd@asf', 125125125, '125125', '2016-03-01 00:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`) VALUES
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
