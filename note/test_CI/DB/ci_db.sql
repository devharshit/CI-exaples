-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2016 at 10:18 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'UK'),
(4, 'France'),
(5, 'Russia'),
(6, 'Singapor');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `country` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Enable',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`uid`, `username`, `password`, `email`, `dob`, `mobile`, `country`, `status`) VALUES
(6, 'user', '202cb962ac59075b964b07152d234b', 'abc@abc.com', '2011-11-30', '0', 2, 'Enable'),
(7, 'Harshit', '50411758798f11294a9c27de6c37b4', 'harshit@demo.com', '1994-05-18', '0', 1, 'Enable'),
(9, 'Harshit', '50411758798f11294a9c27de6c37b4', 'harshit@demo.com', '1994-05-18', '9909101944', 1, 'Enable'),
(11, 'asd', '7815696ecbf1c96e6894b779456d33', 'a@d.gdf', '2016-01-14', '12231234', 1, 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `cid`, `sname`) VALUES
(1, 1, 'gujrat'),
(2, 1, 'rajasthan'),
(3, 2, 'Manhatan'),
(4, 0, 'vegas'),
(5, 2, 'Manhatan'),
(6, 2, 'vegas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
