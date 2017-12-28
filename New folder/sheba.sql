-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 09:03 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sheba`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uName` varchar(100) NOT NULL,
  `pswrd` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `buy_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `uName`, `pswrd`, `gender`, `dob`, `blood_group`, `buy_count`) VALUES
(2, 'Anika Khaled', 'anikakhaled@yahoo.com', 'ani', '123', 'female', '1995-10-09', 'A+', 5),
(3, 'Anika Khaled', 'jahanPreata@yahoo.com', 'anika', '123', 'female', '1995-10-09', 'A+', 3),
(4, 'Preata Jahan', 'jahanPreata@yahoo.com', 'preata', '123', 'female', '1996-06-20', 'AB+', 2),
(5, 'sahil aryan', 'sahilaryan2002@gmail.com', 'sahil', '678', 'male', '2000-12-05', 'A+', 1),
(6, 'Samiul Alam', 'sami@yahoo.com', 'samin', 'abn', 'male', '2004-03-22', 'O+', 1),
(7, 'sahil aryan', 'sami@yahoo.com', 'sami', '258', 'male', '2004-03-22', 'A+', 0),
(8, '', '', 'faysal', '123', '', '', '', 0),
(9, '', '', 'faad', '123', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(32) NOT NULL,
  `uName` varchar(72) NOT NULL,
  `pswrd` varchar(72) NOT NULL,
  `role` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uName`, `pswrd`, `role`) VALUES
(1, 'ani', '123', 'customer'),
(2, 'admin', '1', 'admin'),
(3, '', '', ''),
(4, '', '', ''),
(5, 'Samiul Alam', '', 'customer'),
(6, 'sami', '258', 'customer'),
(7, 'faysal', '123', 'admin'),
(8, 'faad', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(5) NOT NULL,
  `med_name` varchar(50) NOT NULL,
  `indication` text NOT NULL,
  `generic` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `sell_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `med_name`, `indication`, `generic`, `price`, `quantity`, `sell_count`) VALUES
(1, 'Tufnil', 'headache', 'paracitamol', 5, 10, 10),
(7, 'Thyrox 50mg', 'Thyroide Problem', 'Thyroxin', 0, 0, 20),
(8, 'napa', 'headache', 'paracitamol', 0, 0, 0),
(9, 'Cephalexin', 'Cephalosporin Antibiotic', 'Keflex', 0, 0, 5),
(10, 'Atenolol', 'Antihypertensive', 'Tenormin', 0, 0, 0),
(12, 'ace', 'diabetes', 'Ace', 6, 25, 0),
(13, 'Napa Extra', '', 'Paracitamol', 0, 0, 33),
(14, 'Xiril', '', '', 20, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(5) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_quan` int(5) NOT NULL,
  `pro_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_quan`, `pro_price`) VALUES
(1, 'Diet Coke', 10, 340),
(2, 'Zero Cal. Sugar', 5, 200),
(4, 'Kitkat', 5, 60),
(5, 'Sugar Free', 10, 200),
(3, 'Coke', 8, 40),
(6, 'Glucose', 4, 150),
(0, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
