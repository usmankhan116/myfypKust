-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 07:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fypkust`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `username` varchar(110) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `ZipCode` varchar(20) NOT NULL,
  `Famousplace` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`username`, `Name`, `Address`, `City`, `State`, `ZipCode`, `Famousplace`, `id`, `contact`) VALUES
('usmanuser@gmail.com', 'USMAN KHAN', 'teh dist hangu bagato', 'hangu', 'pakistan', '26190', 'Dhq hospitan hangu', 1, '03379796973'),
('usmanshop@gmail.com', 'Usman Shop', 'teh dist hangu bagato', 'Hangu', 'pakistan', '26190', 'Dhq hospitan hangu', 2, '03379796973');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Lastacces` varchar(100) NOT NULL DEFAULT 'a'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`, `Lastacces`) VALUES
('USMAN', '202cb962ac59075b964b07152d234b70', '15 Feb 2023 11:20 am');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `user_id` varchar(110) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `user_id`, `id`) VALUES
(21, 'usmanuser@gmail.com', 1),
(31, 'usmanuser@gmail.com', 2),
(20, 'usmanuser@gmail.com', 4),
(32, 'usmanuser@gmail.com', 6),
(25, 'usmanshop@gmail.com', 7);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Lastacces` varchar(50) NOT NULL DEFAULT 'today'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `Lastacces`) VALUES
('usmanuser@gmail.com', '202cb962ac59075b964b07152d234b70', '15 Feb 2023 09:25 am');

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE `myorder` (
  `id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `addressId` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`id`, `productID`, `userid`, `owner`, `addressId`, `date`, `status`, `quant`) VALUES
(5, 21, 'usmanuser@gmail.com', 'shopkeeper', 1, '2023-06-11', 'Failed', 1),
(6, 31, 'usmanuser@gmail.com', 'shopkeeper', 1, '2023-06-11', 'Inprocess', 1),
(7, 21, 'usmanuser@gmail.com', 'shopkeeper', 1, '2023-06-11', 'Failed', 1),
(8, 31, 'usmanuser@gmail.com', 'shopkeeper', 1, '2023-06-11', 'DELIVERED', 1),
(9, 21, 'usmanuser@gmail.com', 'shopkeeper', 1, '2023-05-27', 'Pending', 1),
(10, 31, 'usmanuser@gmail.com', 'shopkeeper', 1, '2023-05-28', 'Pending', 1),
(11, 20, 'usmanuser@gmail.com', 'shopkeeper', 1, '2023-05-28', 'Pending', 1),
(12, 32, 'usmanuser@gmail.com', 'shopkeeper', 1, '2023-05-28', 'Pending', 1),
(13, 28, 'usmanshop@gmail.com', 'wholesellers', 2, '2023-06-12', 'Pending', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `qut` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `formula` varchar(100) NOT NULL,
  `expire_date` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `Discount` int(11) NOT NULL,
  `weight` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `detail`, `price`, `qut`, `name`, `formula`, `expire_date`, `owner`, `Discount`, `weight`) VALUES
(17, '.png', '', 100, 200, 'syringe', '', '', '', 0, ''),
(18, '2.png', '', 100, 200, 'syringe', '', '', '', 0, ''),
(19, '3.png', '', 100, 200, 'syringe', '', '', '', 0, ''),
(20, '4.png', '', 100, 200, 'syringe', '', '', 'shopkeeper', 13, ''),
(21, '5.png', 'medi', 100, 200, 'syringe', 'sadsd', '2023/04/33', 'shopkeeper', 10, '5mg'),
(22, '6.png', 'medi', 100, 200, 'syringe', 'Abc', '2023/04/33', 'shopkeeper', 18, '5mg'),
(23, '7.png', '', 100, 200, 'syringe', '', '', 'wholesellers', 2, ''),
(24, '8.png', '', 100, 200, 'syringe', '', '', '', 0, ''),
(25, '9.jpg', '', 1200, 120, 'glucose drip', '', '', 'wholesellers', 10, ''),
(26, '10.jpg', '', 1200, 120, 'glucose drip', '', '', '', 0, ''),
(27, '11.jpg', '', 1200, 120, 'glucose drip', '', '', '', 0, ''),
(28, '12.jpg', '', 1200, 120, 'glucose drip', '', '', 'wholesellers', 12, ''),
(29, '13.jpg', '', 1200, 120, 'glucose drip', '', '', 'shopkeeper', 0, ''),
(30, '14.png', '', 1239, 10, 'tablet', '', '', 'wholesellers', 0, ''),
(31, '15.png', '', 1239, 10, 'tablet', '', '', 'shopkeeper', 27, ''),
(32, '16.png', '', 1239, 10, 'tablet', '', '', 'shopkeeper', 15, ''),
(33, '17.png', '', 1239, 10, 'tablet', '', '', 'shopkeeper', 0, ''),
(34, '18.jpg', '', 1200, 22, 'glucose drip', 'glucose', '2023-02-15', 'shopkeeper', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `shop_login`
--

CREATE TABLE `shop_login` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_login`
--

INSERT INTO `shop_login` (`email`, `password`) VALUES
('usmanshop@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `wholesale_login`
--

CREATE TABLE `wholesale_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_login`
--
ALTER TABLE `shop_login`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
