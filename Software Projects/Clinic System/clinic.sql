-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 11:21 AM
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
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `doctor` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `cphone` int(11) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `doctor`, `customer`, `cphone`, `cemail`, `date`) VALUES
(5, 23, 'venus mringo', 765445577, 'vmringo@gmail.com', '2019-06-22 12:50:39'),
(15, 26, 'yona swai', 2147483647, 'khan@gmail.com', '2019-06-22 13:32:45'),
(21, 27, 'venus mringo', 765445577, 'vmringo@gmail.com', '2019-06-25 09:12:29'),
(22, 26, 'venus mringo', 765445577, 'vmringo@gmail.com', '2019-06-25 09:15:39'),
(23, 27, 'venus mringo', 765445577, 'vmringo@gmail.com', '2019-06-25 09:15:53'),
(24, 28, 'yona swai', 2147483647, 'khan@gmail.com', '2019-06-25 09:26:51'),
(25, 28, 'yona swai', 2147483647, 'khan@gmail.com', '2019-06-25 09:27:03'),
(26, 26, 'yona swai', 2147483647, 'khan@gmail.com', '2019-06-25 09:27:46'),
(27, 26, 'venus mringo', 765445577, 'vmringo@gmail.com', '2019-06-27 09:24:51'),
(28, 28, 'venus mringo', 765445577, 'vmringo@gmail.com', '2019-06-27 09:25:02'),
(29, 28, 'venus mringo', 765445577, 'vmringo@gmail.com', '2019-06-30 19:28:13'),
(30, 26, 'jonais maimu', 783566, 'jonais@udsm.com', '2020-07-11 09:04:24'),
(31, 27, 'jonais maimu', 783566, 'jonais@udsm.com', '2020-07-11 09:10:48'),
(32, 29, 'jonais maimu', 783566, 'jonais@udsm.com', '2020-07-11 09:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `phonenumber`, `birthday`, `gender`) VALUES
(4, 'jonais', 'joshua', 'maimu', 'jonais@udsm.com', '$2y$10$2Q.fH0vmlRRLGbA08x.ekORWVD3inB/TorKpg/bVzq3CtB0NVfYRq', '0783566', '2020-05-20', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `specialist` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `day` varchar(50) DEFAULT NULL,
  `hours` varchar(50) DEFAULT NULL,
  `costs` int(50) DEFAULT NULL,
  `phonenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `permission`, `date`, `specialist`, `gender`, `day`, `hours`, `costs`, `phonenumber`) VALUES
(23, 'ANTON', '', 'swai', 'swai@gmail.com', '$2y$10$TwhWUPtKMrroNoGSK0fLF.zF9IHqr0GWhdhE3xIXIznMLOpk90Zv6', 'doctor', '2019-06-22 08:03:38', 'dental', 'Male', 'monday', '20:00-0:00', 3000, 9867655),
(25, 'mwanahamis', 'rose', 'mussa', 'bmussa101@gmail.com', '$2y$10$lmr0qUCO6opbEbZxk0a0t.32E2cYK6NpSdv26LJVSJ3yGVD5BekaS', 'admin,editor', '2019-06-22 09:19:26', NULL, 'Female', NULL, NULL, NULL, 9736664),
(26, 'Rebeka', 'Musa', 'Joseph', 'rebekamusa@gmail.com', '$2y$10$ekNZB6/hFtVZfJyD8Bi08emaY3hwj.L9N/YvMeaUUMSW07kSH/nt.', 'doctor', '2019-06-22 11:07:38', 'General surgeon', 'Female', 'Wednesday', '07:00-10:00', 400000, 757878208),
(27, 'Lameck', 'Amos', 'Maro', 'maro@gmail.com', '$2y$10$qp4a6TAz17DCud.aH8bS/ekKPupkRM26jF4WnAamboN4GhGKCLMCi', 'doctor', '2019-06-22 11:10:10', 'Physician', 'Male', 'Friday', '16:00-20:00', 12000, 255683559),
(28, 'Bahati', 'Joseph', 'Kassimu', 'bahati@gmail.com', '$2y$10$LzBBNy4GcnjwgmsufX6.uucMfPBBSo5Yj94PPoWy3ywEj3vwR9wUW', 'doctor', '2019-06-25 09:25:27', 'Blood pressure', 'Male', 'Tuesday', '8:00-11:00', 39000, 75624334),
(29, 'EMMANUEL', 'JOSEPH', 'SETH', 'seth@gmail.com', '$2y$10$EPaJelzt7iN1KQi37NVJMuiD6t/WGZu3TOe8Gp7iSk2dEnGIiJcj.', 'doctor', '2020-07-11 09:12:44', 'EYE INFECTION', 'Male', 'FRIDAY', '20.00-22.00', 0, 9842525);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
