-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 07:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projd1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `medicine` text NOT NULL,
  `unit` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `company_rs` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `medicine`, `unit`, `price`, `company_rs`) VALUES
(1, 'vomiflux', 10, 50, 44),
(2, 'avil 25 tablet', 5, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  `admin` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Username`, `Email`, `Password`, `Status`, `admin`) VALUES
(1, 'jill patel', 'jillpatel1692@gmail.com', 'jill', 1, '1'),
(2, 'charmi 67', 'charmi67@gmail.com', 'charmi@12', 1, '0'),
(3, 'sunil0654', 'sunil0654@gmail.com', 'sunil0654', 1, '0'),
(4, 'yash', 'yashKothari39@gmail.com', 'yash39', 1, '0'),
(5, 'tapan', 'tapan06@gmail.com', 'tapan06', 1, '0'),
(6, 'neel', 'neelagola27@gmail.com', 'neel27', 1, '0'),
(7, 'prayag ', 'prayag04@gmail.com', 'prayag04', 1, '0'),
(8, 'harsh', 'harsh12@gmail.com', 'harsh', 1, '0'),
(9, 'hi', 'hi@gmail.com', 'hi', 1, '0'),
(10, 'krunal', 'krunal16@gmail.com', 'krunal', 1, '0'),
(11, 'charmi', 'charmi@gmail.com', '123', 1, '0'),
(12, 'Jill Patel', 'jillpatel78@gmail.com', 'Jill1234@', 1, '0'),
(13, 'abc', 'abc@gmail.com', 'abc', 1, '0'),
(14, 'xyz', 'xyz@gmail.com', 'xyz', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `unit` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `company_rs` int(11) NOT NULL,
  `supplier_name` text NOT NULL,
  `company` text NOT NULL,
  `quantity` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `unit`, `price`, `company_rs`, `supplier_name`, `company`, `quantity`) VALUES
(1, 'vomiflux', 10, 50, 44, 'abc', 'cipla', 50),
(2, 'Avil 25 tablet', 15, 13, 9, 'charmi', 'sanofi india ltd', 50),
(3, 'Brufen 400 tablet', 15, 18, 14, 'yash', 'abbott', 50),
(4, 'betnesol tablet', 20, 14, 12, 'tapan', 'glaxo smithkline pharmacetuicals ltd', 20),
(5, 'paracetamol', 10, 10, 8, 'jill', 'cipla', 10),
(6, 'paracetamol', 10, 10, 8, 'jill', 'cipla', 10),
(12, 'zinc  tablets', 10, 9, 10, 'india mart', 'india mart', 10),
(13, 'b', 1, 1, 1, 'b', 'b', 1),
(14, 'b', 1, 1, 1, 'b', 'b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
