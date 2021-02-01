-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 12:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `route` int(11) NOT NULL,
  `phone_model` varchar(15) NOT NULL,
  `imei` bigint(15) NOT NULL,
  `imei2` bigint(15) NOT NULL,
  `mobile_number` bigint(12) NOT NULL,
  `zone` char(1) NOT NULL,
  `requirements` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`route`, `phone_model`, `imei`, `imei2`, `mobile_number`, `zone`, `requirements`) VALUES
(1, 'INFINIX SMART', 8765433, 6544343, 255624243430, 'E', 'F.COVER'),
(2, 'Samsung', 5467478, 57486767, 5657656, 'A', 'Protector'),
(3, 'CAT S60', 3564567578, 34134356476, 52543543, 'E', 'F.COVER ');

-- --------------------------------------------------------

--
-- Table structure for table `replacement`
--

CREATE TABLE `replacement` (
  `id` int(11) NOT NULL,
  `route_r` int(11) NOT NULL,
  `phone_model_r` varchar(30) NOT NULL,
  `imei1_r` bigint(15) NOT NULL,
  `imei2_r` bigint(15) NOT NULL,
  `zone_r` char(1) NOT NULL,
  `requirements_r` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `replacement`
--

INSERT INTO `replacement` (`id`, `route_r`, `phone_model_r`, `imei1_r`, `imei2_r`, `zone_r`, `requirements_r`) VALUES
(1, 1, 'INFINIX HOT 8', 12323435454, 4544324235464, 'E', 'Protector'),
(2, 3, 'SUMSUNG A20s', 324253545435346, 53454634655465567, 'E', 'F.COVER +PROTECTOR');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(6, 'joseph', '9000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`route`),
  ADD UNIQUE KEY `route` (`route`),
  ADD KEY `route_2` (`route`);

--
-- Indexes for table `replacement`
--
ALTER TABLE `replacement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `route` (`route_r`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `replacement`
--
ALTER TABLE `replacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `replacement`
--
ALTER TABLE `replacement`
  ADD CONSTRAINT `replacement_ibfk_1` FOREIGN KEY (`route_r`) REFERENCES `records` (`route`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
