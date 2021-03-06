-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2018 at 03:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_diamond`
--

-- --------------------------------------------------------

--
-- Table structure for table `rough_detail`
--

CREATE TABLE `rough_detail` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `cut_no` varchar(255) NOT NULL,
  `marker` int(11) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `rough_name` varchar(255) NOT NULL,
  `mk_wt` float DEFAULT NULL,
  `pieces` float DEFAULT NULL,
  `exp` float DEFAULT NULL,
  `dos` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rough_detail`
--

INSERT INTO `rough_detail` (`id`, `date`, `cut_no`, `marker`, `weight`, `rough_name`, `mk_wt`, `pieces`, `exp`, `dos`) VALUES
(5, '2018-06-27', '1994', 10, '1805', 'LB', NULL, NULL, NULL, NULL),
(6, '2018-07-05', '123', 10, '200', '1dr', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `userfname` varchar(30) NOT NULL,
  `userlname` varchar(30) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `user_role` varchar(30) NOT NULL,
  `user_status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `userfname`, `userlname`, `user_name`, `user_password`, `user_role`, `user_status`) VALUES
(8, 'harshit', 'Shingala', 'harsh', 'harsh', 'masteradmin', '1'),
(10, 'Hardik', 'Changpara', 'hardik', 'hardik123', 'marker', '1'),
(11, 'Keyur', 'Changpara', 'keyur', 'keyur123', 'marker', '0'),
(12, 'alpesh', 'ab', 'alpesh', 'ab123', 'marker', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `userrole` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `userrole`) VALUES
(1, 'masteruser'),
(2, 'marker'),
(3, 'signer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rough_detail`
--
ALTER TABLE `rough_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rough_detail`
--
ALTER TABLE `rough_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
