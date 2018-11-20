-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 06:33 PM
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
-- Database: `outside_dhaka`
--
CREATE DATABASE IF NOT EXISTS `outside_dhaka` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `outside_dhaka`;

-- --------------------------------------------------------

--
-- Table structure for table `businfo`
--

CREATE TABLE `businfo` (
  `busName` varchar(15) NOT NULL,
  `fromStand` varchar(15) NOT NULL,
  `toStand` varchar(15) NOT NULL,
  `route` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businfo`
--

INSERT INTO `businfo` (`busName`, `fromStand`, `toStand`, `route`) VALUES
('eagle', 'mohakhali', 'benapole', 'khulna'),
('Greenline', 'mohakhali', 'rajshahi', 'rajshahi'),
('hanif', 'gabtoli', 'rajshahi', 'rajshahi'),
('hanif', 'gabtoli', 'kodomtoli', 'sylhet'),
('shamoly', 'gabtoli', 'kodomtoli', 'sylhet'),
('shohag', 'gabtoli', 'ctg port', 'chittagong'),
('shohag', 'gabtoli', 'khulna', 'dhaka-khulna'),
('shohag', 'gabtoli', 'khulna', 'khulna');

-- --------------------------------------------------------

--
-- Table structure for table `outside_dhaka`
--

CREATE TABLE `outside_dhaka` (
  `id` int(30) NOT NULL,
  `from` varchar(30) NOT NULL,
  `to` varchar(30) NOT NULL,
  `destination` int(30) NOT NULL,
  `fare` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outside_dhaka`
--

INSERT INTO `outside_dhaka` (`id`, `from`, `to`, `destination`, `fare`) VALUES
(4, 'dhaka', 'chittagong', 243, 600),
(3, 'dhaka', 'khulna', 171, 400),
(2, 'dhaka', 'rajshahi', 350, 550),
(1, 'dhaka', 'sylhet', 200, 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businfo`
--
ALTER TABLE `businfo`
  ADD PRIMARY KEY (`busName`,`route`);

--
-- Indexes for table `outside_dhaka`
--
ALTER TABLE `outside_dhaka`
  ADD PRIMARY KEY (`to`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
