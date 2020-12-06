-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 09:16 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `upass` varchar(50) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `uadd` varchar(50) DEFAULT NULL,
  `adddate` datetime DEFAULT NULL,
  `uedit` varchar(50) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `surname`, `uname`, `upass`, `type`, `uadd`, `adddate`, `uedit`, `editdate`, `status`) VALUES
(1, 'name1', 'surname1', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1),
(2, 'name22', 'surname22', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1),
(3, 'name3', 'surname3', NULL, NULL, 2, NULL, NULL, NULL, NULL, 1),
(4, 'name4', 'surname4', NULL, NULL, 2, NULL, NULL, NULL, NULL, 1),
(5, 'admin', 'admin', 'admin', 'admin1234', 3, NULL, NULL, NULL, NULL, 1),
(6, 'name6', 'surname6', NULL, NULL, 2, NULL, NULL, NULL, NULL, 1),
(7, 'name7', 'surname7', NULL, NULL, 2, NULL, NULL, NULL, NULL, 1),
(8, 'name8', 'surname8', NULL, NULL, 3, NULL, NULL, NULL, NULL, 1),
(9, 'name9', 'surname9', NULL, NULL, 1, NULL, '2019-06-24 13:40:01', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
