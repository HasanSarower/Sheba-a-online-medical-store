-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 10:37 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `blood_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `uName`, `pswrd`, `gender`, `dob`, `blood_group`) VALUES
(1, 'Anika Khaled', 'anikakhaled@yahoo.com', 'ani', '123', 'female', '1995-10-09', 'A+'),
(2, 'Anika Khaled', 'anikakhaled@yahoo.com', 'ani', '123', 'female', '1995-10-09', 'A+'),
(3, 'Anika Khaled', 'jahanPreata@yahoo.com', 'ani', '123', 'female', '1995-10-09', 'A+'),
(4, 'Preata Jahan', 'jahanPreata@yahoo.com', 'preata', '123', 'female', '1996-06-20', 'AB+'),
(5, 'sahil aryan', 'sahilaryan2002@gmail.com', 'sahil', '678', 'male', '2000-12-05', 'A+'),
(6, 'Samiul Alam', 'sami@yahoo.com', 'sami', 'abn', 'male', '2004-03-22', 'O+'),
(7, 'sahil aryan', 'sami@yahoo.com', 'sami', '258', 'male', '2004-03-22', 'A+');

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
(6, 'sami', '258', 'customer');

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
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `med_name`, `indication`, `generic`, `price`, `quantity`) VALUES
(1, 'Tufnil', 'headache', 'paracitamol', 5, 10),
(7, 'Thyrox 50mg', 'Thyroide Problem', 'Thyroxin', 0, 0),
(8, 'napa', 'headache', 'paracitamol', 0, 0),
(9, 'Cephalexin', 'Cephalosporin Antibiotic', 'Keflex', 0, 0),
(10, 'Atenolol', 'Antihypertensive', 'Tenormin', 0, 0),
(12, 'ace', 'diabetes', 'Ace', 6, 25);

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
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
