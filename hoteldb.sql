-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 08:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

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
-- Table structure for table `accesslist`
--

CREATE TABLE `accesslist` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accesslist`
--

INSERT INTO `accesslist` (`id`, `username`, `password`, `status`) VALUES
(6, 'gupta.h@somaiya.edu', 'Harsh@123', 1),
(7, 'ryd@somaiya.edu', 'Rush@123', 1),
(8, 'shoaib.shaikh@somaiya.edu', 'Shoaib@123', 1),
(9, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotelaccesslist`
--

CREATE TABLE `hotelaccesslist` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelaccesslist`
--

INSERT INTO `hotelaccesslist` (`id`, `username`, `password`, `status`) VALUES
(20, 'lakeview1@email.com', 'Hotel@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

CREATE TABLE `hotel_details` (
  `hotelname` varchar(30) NOT NULL,
  `ownername` varchar(30) DEFAULT NULL,
  `licenseno` varchar(50) NOT NULL,
  `dateofestablishment` date NOT NULL,
  `hotelrating` decimal(5,0) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin_code` char(6) DEFAULT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `altmobileno` varchar(10) DEFAULT NULL,
  `emailid` varchar(40) NOT NULL,
  `altemailid` varchar(40) DEFAULT NULL,
  `stdroomno` int(11) NOT NULL,
  `stdroomprice` int(11) NOT NULL,
  `delroomno` int(11) NOT NULL,
  `delroomprice` int(11) NOT NULL,
  `qdroomno` int(11) NOT NULL,
  `qdroomprice` int(11) NOT NULL,
  `sturoomno` int(11) NOT NULL,
  `sturoomprice` int(11) NOT NULL,
  `parking` text DEFAULT NULL,
  `wifi` text DEFAULT NULL,
  `laundry` text DEFAULT NULL,
  `gym` text DEFAULT NULL,
  `pool` text DEFAULT NULL,
  `spa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_details`
--

INSERT INTO `hotel_details` (`hotelname`, `ownername`, `licenseno`, `dateofestablishment`, `hotelrating`, `address`, `city`, `pin_code`, `state`, `country`, `mobileno`, `altmobileno`, `emailid`, `altemailid`, `stdroomno`, `stdroomprice`, `delroomno`, `delroomprice`, `qdroomno`, `qdroomprice`, `sturoomno`, `sturoomprice`, `parking`, `wifi`, `laundry`, `gym`, `pool`, `spa`) VALUES
('Lake View Resort', 'Harsh Gupta', '1234567890', '0000-00-00', '4', 'Main', 'Shimla', '171003', 'Himachal P', 'India', '1234567890', '0987654321', 'lakeview1@email.com', 'lakeview2@email.com', 1, 1, 1, 1, 1, 1, 1, 1, 'true', 'false', 'false', 'true', 'false', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `userrecords`
--

CREATE TABLE `userrecords` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` char(6) NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `aadharno` char(12) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` char(6) NOT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(40) NOT NULL,
  `mobileno` char(10) NOT NULL,
  `altmobileno` char(10) DEFAULT NULL,
  `emailid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrecords`
--

INSERT INTO `userrecords` (`firstname`, `lastname`, `gender`, `dateofbirth`, `aadharno`, `address`, `city`, `pincode`, `state`, `country`, `mobileno`, `altmobileno`, `emailid`) VALUES
('', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
('Harsh', 'Gupta', 'male', '1999-12-22', '123456789012', 'Sheth Heights, Chembur', 'Mumbai', '400074', 'Maharashtra', 'India', '9920379440', '9819284048', 'gupta.h@somaiya.edu'),
('Rushabh', 'Doshi', 'male', '1998-08-01', '098765432101', 'SIMSR Residence, Ghatkopar', 'Mumbai', '400077', 'Maharashtra', 'India', '7721827840', '9156926780', 'ryd@somaiya.edu'),
('Shoaib', 'Shaikh', 'male', '1999-05-22', '6521254186', 'Kalyan', 'Mumbai', '421301', 'Maharashtra', 'India', '1234432178', '9876678901', 'shoaib.shaikh@somaiya.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslist`
--
ALTER TABLE `accesslist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `hotelaccesslist`
--
ALTER TABLE `hotelaccesslist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
  ADD PRIMARY KEY (`emailid`),
  ADD UNIQUE KEY `licenseno` (`licenseno`);

--
-- Indexes for table `userrecords`
--
ALTER TABLE `userrecords`
  ADD PRIMARY KEY (`emailid`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `mobileno` (`mobileno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslist`
--
ALTER TABLE `accesslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotelaccesslist`
--
ALTER TABLE `hotelaccesslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accesslist`
--
ALTER TABLE `accesslist`
  ADD CONSTRAINT `User_FK` FOREIGN KEY (`username`) REFERENCES `userrecords` (`emailid`);

--
-- Constraints for table `hotelaccesslist`
--
ALTER TABLE `hotelaccesslist`
  ADD CONSTRAINT `Hotel_FK` FOREIGN KEY (`username`) REFERENCES `hotel_details` (`emailid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
