-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 10:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paradise`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `username`, `email`, `password`) VALUES
(1, 'test1', 'guanglianggoh7@gmail.com', '12345'),
(7, 'Liang1025', '1201203225@student.mmu.edu.my', '56789'),
(8, 'jiahong', 'jiahong@gmail.com', 'asd'),
(9, 'siong', 'siong@gmail.com', 'zxc'),
(10, 'Liang1025', 'xiiaozhu12345@gmail.com', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
