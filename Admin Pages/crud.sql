-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 03:21 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `image`, `name`, `phone`, `state`, `email`) VALUES
(1, 'pang.jpg', 'Pang Seng Chung', '010-3128918', 'Tangkak', '1201203046@student.mmu.edu.my'),
(2, 'liang.jpeg', 'Goh Guang Liang', '011-23559715', 'Melaka', '1201203225@student.mmu.edu.my'),
(3, 'kuan.jpg', 'Kuan Chen Wei', '012-9044906', 'Melaka', '1201203472@student.mmu.edu.my');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `phone`, `state`, `email`) VALUES
(6, 'ck', '012-23454678', 'johor', 'ck23@gmail.com'),
(8, 'jing yong', '012-23454678', 'Melaka', 'sjy12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `number` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`number`, `image`, `name`, `price`) VALUES
(1, 'americano.jpg', 'Americano', 'RM 10'),
(2, 'mocca.jpg', 'Mocha', 'RM 10'),
(3, 'cappuccino.jpg', 'Cappucino', 'RM 12'),
(5, 'black tea.jpeg', 'Black Tea', 'RM 6'),
(10, 'green tea.jpg', 'Green Tea', 'RM 6'),
(11, 'expresso.jpg', 'Espresso', 'RM 8'),
(12, 'milk tea.jpg', 'Milk Tea', 'RM 8'),
(13, 'lemon tea.jpg', 'Lemon Tea', 'RM 8'),
(14, 'chiffon cake.jpg', 'Chiffon Cake', 'RM 12'),
(15, 'layer cake.jpg', 'Layer Cake', 'RM 14'),
(16, 'muffin.jpg', 'Muffin', 'RM 8'),
(17, 'pan cake.jpg', 'PanCake', 'RM 10'),
(18, 'cinnamon roll.jpeg', 'Cinnamon Roll', 'RM 12'),
(19, 'croissant.jpg', 'Croissant', 'RM 10'),
(20, 'donut.jpg', 'Donut', 'RM 12'),
(21, 'waffle.jpg', 'Waffle', 'RM 10');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `name`, `price`) VALUES
(1, 'Cappucino', 'RM 10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
