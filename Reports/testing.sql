-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 05:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, '2012', 300, 200, 250),
(2, '2013', 150, 400, 300),
(3, '2014', 350, 450, 200),
(4, '2015', 500, 328, 412),
(5, '2016', 175, 300, 422),
(6, '2017', 75, 100, 90);

-- --------------------------------------------------------

--
-- Table structure for table `account1`
--

CREATE TABLE `account1` (
  `id` int(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account1`
--

INSERT INTO `account1` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, '2017-01-31', 23, 16, 37),
(2, '2017-02-28', 56, 69, 34),
(3, '2017-03-30', 32, 58, 18),
(4, '2017-04-31', 87, 94, 64),
(5, '2017-05-30', 61, 73, 81),
(6, '2017-06-31', 75, 100, 90),
(7, '2017-07-30', 85, 45, 32),
(8, '2017-08-31', 35, 64, 84),
(9, '2017-09-30', 113, 96, 105),
(10, '2017-10-31', 67, 81, 78),
(11, '2017-11-30', 126, 107, 113),
(12, '2017-12-31', 115, 124, 131);

-- --------------------------------------------------------

--
-- Table structure for table `account2`
--

CREATE TABLE `account2` (
  `id` int(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account2`
--

INSERT INTO `account2` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, '2017-04-31', 87, 94, 64),
(3, '2017-05-30', 61, 73, 81),
(2, '2017-06-31', 75, 100, 90);

-- --------------------------------------------------------

--
-- Table structure for table `account3`
--

CREATE TABLE `account3` (
  `id` int(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account3`
--

INSERT INTO `account3` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, '2017-09-30', 113, 96, 105),
(2, '2017-10-31', 67, 81, 78),
(3, '2017-11-30', 126, 107, 113),
(4, '2017-12-31', 115, 124, 131),
(5, '2018-01-31', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD UNIQUE KEY `year` (`year`) USING BTREE;

--
-- Indexes for table `account1`
--
ALTER TABLE `account1`
  ADD UNIQUE KEY `year` (`year`) USING BTREE;

--
-- Indexes for table `account2`
--
ALTER TABLE `account2`
  ADD UNIQUE KEY `year` (`year`) USING BTREE;

--
-- Indexes for table `account3`
--
ALTER TABLE `account3`
  ADD UNIQUE KEY `year` (`year`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
