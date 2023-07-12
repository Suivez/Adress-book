-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 04:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_table`
--

CREATE TABLE `account_table` (
  `IDNum` int(11) NOT NULL,
  `IDName` text NOT NULL,
  `IDUsername` text NOT NULL,
  `IDPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_table`
--

INSERT INTO `account_table` (`IDNum`, `IDName`, `IDUsername`, `IDPassword`) VALUES
(1, 'Bryan Jay Bodino', 'BRYAN', 'BRYAN');

-- --------------------------------------------------------

--
-- Table structure for table `bank_table`
--

CREATE TABLE `bank_table` (
  `IDNum` int(11) NOT NULL,
  `IDName` text NOT NULL,
  `IDLocation` text NOT NULL,
  `IDFeedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_table`
--

INSERT INTO `bank_table` (`IDNum`, `IDName`, `IDLocation`, `IDFeedback`) VALUES
(5, 'Bryan jay bodino', 'CAA Las Pinas City', 'PHP CRUD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_table`
--
ALTER TABLE `account_table`
  ADD PRIMARY KEY (`IDNum`);

--
-- Indexes for table `bank_table`
--
ALTER TABLE `bank_table`
  ADD PRIMARY KEY (`IDNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_table`
--
ALTER TABLE `account_table`
  MODIFY `IDNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_table`
--
ALTER TABLE `bank_table`
  MODIFY `IDNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
