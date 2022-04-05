-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 01:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stackpack`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbackform`
--

CREATE TABLE `feedbackform` (
  `idf` int(11) NOT NULL,
  `namef` varchar(20) NOT NULL,
  `emailf` varchar(30) NOT NULL,
  `messagef` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbackform`
--

INSERT INTO `feedbackform` (`idf`, `namef`, `emailf`, `messagef`) VALUES
(1, '', '', 'suggestion 1'),
(2, '', '', 'suggestion 1'),
(3, 'jackfruit', '', 'suggestion 1'),
(4, 'jackfruit', '', 'suggestion 2'),
(5, 'jackfruit', 'jackfruit@gmail.com', 'suggestion 1'),
(6, 'stack team', 'stackteam@gmail.com', 'suggestion 2'),
(7, 'stack team', 'stackteam@gmail.com', ''),
(8, 'stack team', 'stackteam@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `purestack`
--

CREATE TABLE `purestack` (
  `id` int(11) NOT NULL,
  `inputpp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purestack`
--

INSERT INTO `purestack` (`id`, `inputpp`) VALUES
(2, ''),
(3, ''),
(4, '44'),
(5, '123');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `idr` int(11) NOT NULL,
  `namer` varchar(25) NOT NULL,
  `emailr` varchar(40) NOT NULL,
  `operationr` varchar(20) NOT NULL,
  `inputr` varchar(40) NOT NULL,
  `outputr` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`idr`, `namer`, `emailr`, `operationr`, `inputr`, `outputr`) VALUES
(1, 'narayana', 'narayanapv777@gmail.com', 'infix to p', 'A+b', 'A'),
(2, 'narayana', 'narayanapv777@gmail.com', 'infix to p', 'A+b', 'A'),
(3, 'narayana', 'narayanapv777@gmail.com', 'infix to postfix', 'A+b', 'A'),
(4, '', '', 'infix to postfix', '1+2', '1'),
(5, '', '', 'infix to postfix', '1+2', '1'),
(6, '', '', 'infix to postfix', '1+7', '1'),
(7, '', '', 'infix to postfix', '1+7', '1'),
(8, '', '', 'infix to postfix', '1+7', '1'),
(9, '', '', 'infix to postfix', '1+7', '1'),
(10, '', '', 'infix to postfix', '1+7', '1'),
(11, '', '', 'infix to postfix', '1+7', '1'),
(12, '', '', 'infix to postfix', '1+a', '1'),
(13, '', '', 'infix to postfix', '1+a', '1'),
(14, '', '', 'infix to postfix', '2+q', '2'),
(15, '', '', 'infix to postfix', '2+q', '2'),
(16, '', '', 'infix to postfix', '2+q', '2'),
(17, '', '', 'infix to postfix', '1+2', '1'),
(18, '', '', 'infix to postfix', '1+0', '1'),
(19, '', '', 'infix to postfix', '1+0', '1'),
(20, '', '', 'infix to postfix', '1+0', '1'),
(21, '', '', 'infix to postfix', '1+1', '1'),
(22, '', '', 'infix to postfix', 'p-k', 'p'),
(23, '', '', 'infix to postfix', 'p-k', 'p'),
(24, '', '', 'infix to postfix', 'p-k', 'p'),
(25, '', '', 'infix to postfix', 'c-h', 'c'),
(26, '', '', 'infix to postfix', 'c-h', 'c'),
(27, '', '', 'infix to postfix', 'p-k', 'p'),
(28, '', '', 'infix to postfix', '', ''),
(29, '', '', 'infix to postfix', '1+7', '1'),
(30, '', '', 'infix to postfix', 'A+b', 'A'),
(31, '', '', 'infix to postfix', 'A+b', 'A'),
(32, '', '', 'infix to postfix', 'A+b', 'A'),
(33, 'sdsd', 'sdsd@gmail.com', 'infix to postfix', 'A+b', 'A'),
(34, 'sdsd', 'sdsd@gmail.com', 'infix to postfix', 'A+b', 'A'),
(35, 'sdsd', 'sdsd@gmail.com', 'infix to postfix', 'A+b', 'A'),
(36, 'sdsd', 'sdsd@gmail.com', 'infix to postfix', 'A+b', 'A'),
(37, 'sdsd', 'sdsd@gmail.com', 'infix to postfix', '1+7', '1'),
(38, 'sdsd', 'sdsd@gmail.com', 'infix to prefix', 'a+b', 'b'),
(39, 'sdsd', 'sdsd@gmail.com', 'infix to prefix', 'a+b', 'b'),
(40, 'sdsd', 'sdsd@gmail.com', 'prefix to postfix', '+ab', 'b'),
(41, 'sdsd', 'sdsd@gmail.com', 'push and pop', '7', ''),
(42, 'sdsd', 'sdsd@gmail.com', 'push and pop', '7', ''),
(43, 'sdsd', 'sdsd@gmail.com', 'push and pop', '7', ''),
(44, 'jackfruit', 'jackfruit@gmail.com', 'infix to postfix', 'A+b', ''),
(45, 'jackfruit', 'jackfruit@gmail.com', 'infix to prefix', '9+9', '9'),
(46, 'jackfruit', 'jackfruit@gmail.com', 'push and pop', '11', ''),
(47, 'jackfruit', 'jackfruit@gmail.com', 'push', '420', 'NULL'),
(48, 'jackfruit', 'jackfruit@gmail.com', 'prefix to postfix', '+ab-c', 'c'),
(49, 'jackfruit', 'jackfruit@gmail.com', 'push', '123', 'NULL'),
(50, 'jackfruit', 'jackfruit@gmail.com', 'push', '123', 'NULL'),
(51, 'jackfruit', 'jackfruit@gmail.com', 'push', '111', 'NULL'),
(52, 'jackfruit', 'jackfruit@gmail.com', 'push', '1234', 'NULL'),
(53, 'jackfruit', 'jackfruit@gmail.com', 'push', '5', 'NULL'),
(54, 'jackfruit', 'jackfruit@gmail.com', 'push', '7', 'NULL'),
(55, 'jackfruit', 'jackfruit@gmail.com', 'push', '11', 'NULL'),
(56, 'jackfruit', 'jackfruit@gmail.com', 'push', '44', 'NULL'),
(57, 'jackfruit', 'jackfruit@gmail.com', 'reset', 'NULL', 'NULL'),
(58, 'jackfruit', 'jackfruit@gmail.com', 'reset', 'NULL', 'NULL'),
(59, 'jackfruit', 'jackfruit@gmail.com', 'infix to prefix', '8*7', '7'),
(60, 'jackfruit', 'jackfruit@gmail.com', 'push', '123', 'NULL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbackform`
--
ALTER TABLE `feedbackform`
  ADD PRIMARY KEY (`idf`);

--
-- Indexes for table `purestack`
--
ALTER TABLE `purestack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`idr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbackform`
--
ALTER TABLE `feedbackform`
  MODIFY `idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purestack`
--
ALTER TABLE `purestack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
