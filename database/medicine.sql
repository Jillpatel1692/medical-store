-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 06:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

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
(12, 'zinc  tablets', 10, 9, 10, 'india mart', 'india mart', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
