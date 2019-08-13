-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 07:58 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

CREATE TABLE `hotel_details` (
  `id` int(11) NOT NULL,
  `hotelname` varchar(30) NOT NULL,
  `ownername` varchar(30) DEFAULT NULL,
  `licenseno` varchar(50) NOT NULL,
  `dateofestablishment` date DEFAULT NULL,
  `hotelrating` decimal(5,0) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pin_code` char(6) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `altmobileno` varchar(10) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `altemailid` varchar(40) DEFAULT NULL,
  `stdroomno` int(11) NOT NULL,
  `stdroomprice` double NOT NULL,
  `delroomno` int(11) NOT NULL,
  `delroomprice` double NOT NULL,
  `qdroomno` int(11) NOT NULL,
  `qdroomprice` double NOT NULL,
  `sturoomno` int(11) NOT NULL,
  `sturoomprice` double NOT NULL,
  `parking` text,
  `wifi` text,
  `laundry` text,
  `gym` text,
  `pool` text,
  `spa` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_details`
--
ALTER TABLE `hotel_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
