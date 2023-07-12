-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lip 12, 2023 at 12:43 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adress_book`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `account_table`
--

CREATE TABLE `account_table` (
  `IDNum` int(11) NOT NULL,
  `IDName` text NOT NULL,
  `IDUsername` text NOT NULL,
  `IDPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_table`
--

INSERT INTO `account_table` (`IDNum`, `IDName`, `IDUsername`, `IDPassword`) VALUES
(3, 'ADMINISTATOR', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bank_table`
--

CREATE TABLE `bank_table` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Room` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_table`
--

INSERT INTO `bank_table` (`ID`, `First_name`, `Last_name`, `Email`, `Phone`, `Location`, `Room`) VALUES
(17, 'asd', '', 'asd', 'asd', 'asd', 'asd'),
(18, 'asd', '', 'asd', 'asd', 'asd', 'asd'),
(20, 'try', 'u', 'tu', 'tyu', 'tyu', 'tyu'),
(21, 'xyz', 'xyz', 'xyz@asd.com', '4234', 'xyz', '123a'),
(22, 'sad', 'sd', '213', '435r', 'dsf', 're'),
(23, '123', 'ter', 'tergtr', 'tre', 'ter', 'reter'),
(24, '123', 'ter', 'tergtr', 'tre', 'ter', 'reter'),
(25, 'jh', 'fhg', 'wer', 'trh', 'gr', 'cx'),
(26, 'gh', 'fg', 'h', 'h', 'ggh', 'j'),
(27, 'ef', '34', 'd', '3', 'fe', '4');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `account_table`
--
ALTER TABLE `account_table`
  ADD PRIMARY KEY (`IDNum`);

--
-- Indeksy dla tabeli `bank_table`
--
ALTER TABLE `bank_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_table`
--
ALTER TABLE `account_table`
  MODIFY `IDNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank_table`
--
ALTER TABLE `bank_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
