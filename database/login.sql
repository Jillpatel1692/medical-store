-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 06:36 AM
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
(1, 'jill patel', 'jillpatel1692@gmail.com', '#r5bhzvQ', 1, '1'),
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
