-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 12:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `user_id`, `qty`) VALUES
(174, 2, 20, 1),
(175, 1, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Breakfast'),
(2, 'Lunch menu');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`) VALUES
(1, 1, 1, 0),
(2, 1, 1, 0),
(3, 1, 1, 0),
(4, 1, 1, 0),
(5, 1, 1, 0),
(6, 1, 1, 0),
(7, 1, 1, 0),
(8, 1, 1, 0),
(9, 1, 1, 0),
(10, 1, 1, 0),
(11, 1, 1, 0),
(12, 1, 1, 0),
(13, 1, 1, 0),
(14, 1, 1, 0),
(15, 1, 1, 0),
(16, 1, 2, 0),
(17, 1, 1, 0),
(18, 1, 2, 0),
(19, 1, 1, 0),
(20, 1, 2, 0),
(21, 1, 1, 0),
(22, 1, 2, 0),
(23, 1, 1, 0),
(24, 1, 1, 0),
(25, 1, 1, 0),
(26, 1, 2, 0),
(27, 1, 2, 0),
(28, 1, 1, 0),
(29, 1, 2, 0),
(30, 1, 1, 0),
(31, 1, 2, 0),
(32, 1, 1, 0),
(33, 1, 2, 0),
(34, 1, 2, 0),
(35, 1, 1, 0),
(36, 1, 1, 0),
(37, 1, 2, 0),
(38, 1, 1, 0),
(39, 1, 2, 0),
(40, 1, 1, 0),
(41, 1, 2, 0),
(42, 1, 1, 0),
(43, 1, 2, 0),
(44, 1, 1, 0),
(45, 1, 2, 0),
(46, 1, 1, 0),
(47, 1, 2, 0),
(48, 1, 1, 0),
(49, 1, 2, 0),
(50, 1, 1, 0),
(51, 1, 2, 0),
(52, 1, 1, 0),
(53, 1, 2, 0),
(54, 1, 1, 0),
(55, 1, 2, 0),
(56, 1, 1, 0),
(57, 1, 2, 0),
(58, 1, 1, 0),
(59, 1, 2, 0),
(60, 1, 1, 0),
(61, 1, 2, 0),
(62, 1, 1, 0),
(63, 1, 2, 0),
(64, 1, 2, 0),
(65, 1, 1, 0),
(66, 1, 1, 0),
(67, 1, 2, 0),
(68, 1, 1, 0),
(69, 1, 2, 0),
(70, 1, 1, 0),
(71, 1, 2, 0),
(72, 1, 1, 0),
(73, 1, 2, 0),
(74, 1, 1, 0),
(75, 1, 2, 0),
(76, 1, 1, 0),
(77, 1, 2, 0),
(78, 1, 1, 0),
(79, 1, 2, 0),
(80, 1, 1, 0),
(81, 1, 2, 0),
(82, 1, 1, 0),
(83, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_image`) VALUES
(1, 1, 'Toast', 4, 'toast.jpg'),
(2, 2, 'Sandwhich', 5, 'sandwhich.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `phonenumber`, `password`) VALUES
(9, 'fsdfsdfsd', '1231231', 'dfsfsdfds'),
(10, 'usera', '1', 'p'),
(11, 'werwe@fsdf.net', '43242', 'a'),
(17, '43242', '23', 'a'),
(20, '12312', '12312', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_title` (`cat_title`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `p_id` FOREIGN KEY (`p_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
