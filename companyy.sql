-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 06:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyy`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `gender` char(2) DEFAULT NULL,
  `qualification` char(10) DEFAULT NULL,
  `experience` char(10) DEFAULT NULL,
  `relocation` char(10) DEFAULT NULL,
  `jointime` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `name`, `gender`, `qualification`, `experience`, `relocation`, `jointime`) VALUES
(1, 'linyi', 'm', 'BE', '5', 'yes', '30'),
(2, 'nikki', 'f', 'btech', '10', 'yes', '30'),
(3, 'kenny', 'm', 'btech', '20', 'no', '15'),
(4, 'liza', 'f', 'be', '10', 'yes', '10'),
(5, 'lai kaukin', 'm', 'bca', '6', 'no', '12'),
(6, 'margo', 'm', 'be', '5', 'no', '10'),
(7, 'juliet', 'f', 'btech', '3', 'yes', '12'),
(8, 'romeo', 'm', 'BE', '5', 'no', '10'),
(9, 'penny wise', ' m', 'btech', '3', 'no', '12');

-- --------------------------------------------------------

--
-- Table structure for table `empskills`
--

CREATE TABLE `empskills` (
  `empid` int(11) NOT NULL,
  `skill_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empskills`
--

INSERT INTO `empskills` (`empid`, `skill_code`) VALUES
(1, 10),
(1, 11),
(2, 12),
(2, 14),
(3, 10),
(3, 11),
(3, 12),
(4, 10),
(4, 14),
(5, 10),
(5, 11),
(5, 13),
(5, 14),
(6, 10),
(6, 13),
(7, 11),
(7, 12),
(7, 14),
(8, 12),
(8, 13),
(9, 10),
(9, 11),
(9, 12);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_code` int(11) NOT NULL,
  `lang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_code`, `lang`) VALUES
(10, 'java full stack\r\n'),
(11, 'mern\r\n'),
(12, 'mean\r\n'),
(13, 'andriod'),
(14, 'ios');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `empskills`
--
ALTER TABLE `empskills`
  ADD PRIMARY KEY (`empid`,`skill_code`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
