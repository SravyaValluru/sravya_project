-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 05:32 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruitdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pannumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `shopname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`email`, `firstname`, `lastname`, `address`, `pannumber`, `password`, `shopname`) VALUES
('apparao@gmail.com', 'Apparao', 'v', 'vijayawada', '1234abc2d0', 'Apparao@16', 'shop1'),
('lakshmisravya.valluru97@gmail.com', 'sravya', 'valluru', 'vijayawada', '1236547890', 'Sravya@4', ''),
('s@gmail.com', 'S', 'V', 'vijayawada', '1234569870', 'Sriv@1', ''),
('sri@gmail.com', 'sri', 'v', 'vigsh', '123aasa4', 'Sravya@4', ''),
('sriharsha@gmail.com', 'Sriharsha', 'Valluru', 'vijayawada', 'abcde1234f', 'Harsha@7', 'shop2'),
('veena@gmail.com', 'veena', 'Valluru', 'vijayawada', '0123654789', 'Veena@5', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `pannumber` (`pannumber`),
  ADD UNIQUE KEY `pannumber_2` (`pannumber`),
  ADD UNIQUE KEY `pannumber_3` (`pannumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
