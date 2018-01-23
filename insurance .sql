-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 05:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(16) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT 'user',
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gender` varchar(255) NOT NULL,
  `fileToUpload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `username`, `telephone`, `email`, `password`, `type`, `join_date`, `gender`, `fileToUpload`) VALUES
(2, 'Elly', 'Pathos', 'telesphore', '250784686344', '', 'ec0c8fe7ad80dfe93c0de35448b1d581', 'user', '2017-08-17 12:18:36', 'male', 'BK-ad.jpg'),
(3, 'Elly', 'Pathos', 'grace', '250784686344', '', '202cb962ac59075b964b07152d234b70', 'admin', '2017-08-17 12:26:45', 'male', 'c.jpg'),
(5, 'eef', 'ddc', 'ff', '250784686344', 'ellyforever2@outlook.com', '202cb962ac59075b964b07152d234b70', 'user', '2017-08-17 12:45:12', 'male', 'AKAGERA-NATIONAL-PARK-Giraffe..jpg'),
(6, 'emmy', 'Nzaba', 'emmy', '250783284840', 'ellyforever2@outlook.com', '202cb962ac59075b964b07152d234b70', 'user', '2017-08-17 13:45:48', 'male', 'Elie.jpg'),
(7, 'Elly', 'Pathos', 'chance', '250784686344', 'ellyforever2@outlook.com', '202cb962ac59075b964b07152d234b70', 'user', '2017-08-24 12:03:01', 'female', '3.PNG'),
(8, 'Kalisa', 'Mbanda', 'K', '250784686344', 't@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '2017-08-28 14:28:34', 'male', 'DSC_0139.JPG'),
(9, 'levy', 'manzi', 'levy', '250784686344', 't@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '2017-08-28 14:29:59', 'male', 'DSC_0139.JPG'),
(10, 'sandra', 'kwizera', 'kwizera', '250784686344', 'you@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '2017-08-28 14:34:27', 'female', '1.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moto`
--

CREATE TABLE `moto` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `used` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `chassis` varchar(255) NOT NULL,
  `Plate` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `users` varchar(234) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moto`
--

INSERT INTO `moto` (`id`, `fname`, `lname`, `telephone`, `email`, `type`, `used`, `mark`, `chassis`, `Plate`, `year`, `period`, `amount`, `users`) VALUES
(9, 'Elly', 'Pathos', '250784686344', 'ellyforever2@outlook.com', 'coaster', 'Driving school', 'Hyundai', '1234', 'RAB 205 D', '1999', 'annually', 190000, 'chance'),
(10, 'sandra', 'kwizera', '250784686344', 'you@gmail.com', 'track', 'Transport of goods or Persons', 'Benz', ' 12123', 'RAB 205 D', '2005', 'annually', 2000000, 'kwizera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
