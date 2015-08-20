-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2014 at 06:18 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jpcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `corp_details`
--

CREATE TABLE IF NOT EXISTS `corp_details` (
  `corporateName` varchar(40) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `Amount` int(10) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `corp_details`
--

INSERT INTO `corp_details` (`corporateName`, `startDate`, `endDate`, `Amount`, `id`) VALUES
('JP Morgan', '2014-07-01', '2014-07-31', 200000, 1),
('acc', '2014-01-01', '2014-01-31', 14800, 3),
('', '0000-00-00', '0000-00-00', 0, 4),
('nandishkotadia@gmail.com', '2011-10-29', '2011-08-29', 1000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `corp_reg`
--

CREATE TABLE IF NOT EXISTS `corp_reg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `corp_reg`
--

INSERT INTO `corp_reg` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Akshay Oswal', 'oswal.akshayk@gmail.com', '123456'),
(12, 'Deepak', 'deepak@gmail.com', 'qwerty'),
(14, 'aakash', 'aakash@gmail.com', '123qw'),
(15, 'abc', 'abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE IF NOT EXISTS `leaderboard` (
  `username` varchar(40) NOT NULL,
  `earn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`username`, `earn`) VALUES
('nandishkotadia@gmail.com', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `phno` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `distance` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `earn` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `phno`, `email`, `distance`, `speed`, `duration`, `earn`, `eid`) VALUES
(6, 'nandishkotadia@gmail.com', 1112121, 'nandishkotadia@gmail.com', 10, 10, 10, 100, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
