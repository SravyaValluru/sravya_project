-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 05:38 PM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mobilenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `firstname`, `lastname`, `address`, `password`, `mobilenumber`) VALUES
('chai@gmail.com', 'chai', 'N', 'hyderabad', 'Chai@1', 1236547890),
('pani@gmail.com', 'pani', 'valluru', 'vijayawada', 'Pani@5', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `customer_wallet`
--

CREATE TABLE `customer_wallet` (
  `customer_email` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_wallet`
--

INSERT INTO `customer_wallet` (`customer_email`, `amount`) VALUES
('pani@gmai.com', 3500),
('chai@gmail.com', 3500),
('pani@gmai.com', 3500),
('chai@gmail.com', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `fruit_stores`
--

CREATE TABLE `fruit_stores` (
  `seller_email` varchar(50) NOT NULL,
  `fruit_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit_stores`
--

INSERT INTO `fruit_stores` (`seller_email`, `fruit_name`, `quantity`, `price`) VALUES
('s@gmail.com', 'joo', 20, 9),
('s@gmail.com', 'kiwi', 20, 2),
('s@gmail.com', 'goa', 2, 10),
('s@gmail.com', 'q', 1, 10),
('s@gmail.com', 'banana', 2, 20),
('s@gmail.com', 'qw', 5, 16),
('s@gmail.com', 'qw', 5, 16),
('s@gmail.com', 'sad', 19, 10),
('s@gmail.com', 'berry', 1, 15),
('s@gmail.com', 'berry', 1, 10),
('lakshmisravya.valluru97@gmail.com', 'berry', 1, 15),
('lakshmisravya.valluru97@gmail.com', 'b', 1, 1),
('lakshmisravya.valluru97@gmail.com', 'goa', 1, 5),
('veena@gmail.com', 'apple', 2, 10),
('veena@gmail.com', 'banana', 1, 5),
('apparao@gmail.com', 'f1', 1, 5),
('sriharsha@gmail.com', 'goa', 1, 5),
('sriharsha@gmail.com', 'apple', 1, 10),
('sriharsha@gmail.com', 'banana', 2, 10),
('sriharsha@gmail.com', 'berry', 1, 10),
('sriharsha@gmail.com', 'orange', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `seller_email` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `retailer_wallet`
--

CREATE TABLE `retailer_wallet` (
  `seller_email` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer_wallet`
--

INSERT INTO `retailer_wallet` (`seller_email`, `amount`) VALUES
('veena@gmail.com', 3500),
('sr@gmail.com', 3500),
('lucky@gmail.com', 3500),
('apparao@gmail.com', 3500),
('sriharsha@gmail.com', 3500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `email` (`email`);

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
