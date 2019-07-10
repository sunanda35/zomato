-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 05:00 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zomato`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `m_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_price` int(11) NOT NULL,
  `m_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`m_id`, `r_id`, `m_name`, `m_price`, `m_type`) VALUES
(1, 1, 'Chicken', 200, 'Non-Veg'),
(2, 2, 'Fancy Burger', 300, 'Veg'),
(3, 3, 'Paneer', 100, 'Veg'),
(4, 4, 'Butter', 90, 'Veg'),
(5, 1, 'Chicken korma', 300, 'Non-Veg'),
(6, 1, 'Chicken tikka', 500, 'Non-Veg'),
(7, 9, 'Chicken tanduri', 300, 'Non-Veg'),
(8, 9, 'Chicken tanduri', 300, 'Non-Veg'),
(9, 9, 'Chicken korma', 100, 'Non-Veg'),
(10, 9, 'paneer', 50, 'Veg'),
(11, 9, 'hulululu', 300, ''),
(12, 9, 'Chicken tanduri', 300, 'Non-Veg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order` varchar(999) NOT NULL,
  `address` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order`, `address`) VALUES
(1, 8, 'bahel k loda', 'tor gand e'),
(2, 8, 'vosda', 'teri gand '),
(3, 9, 'paneer tikka', 'chomu'),
(4, 8, '', 'chomu'),
(5, 8, 'Chicken tanduri', ''),
(6, 8, 'Chicken tanduri', ''),
(7, 8, '', 'teri amma ki jai hooooo'),
(8, 8, 'Fancy Burger', ''),
(9, 8, '', 'teri amma ki jai hooooo'),
(10, 8, '', ''),
(11, 8, '', 'teri amma ki jai hooooo'),
(12, 8, '', ''),
(13, 8, '', 'teri amma ki jai hooooo'),
(14, 8, 'Paneer', 'teri amma ki jai hooooo'),
(15, 13, 'hulululu', ''),
(16, 13, 'Paneer', 'fgredfredf');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `r_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `p_about` varchar(2555) NOT NULL,
  `p_password` varchar(255) NOT NULL,
  `p_phone` varchar(255) NOT NULL,
  `p_image` varchar(999) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_rating` decimal(10,1) NOT NULL,
  `r_cuisine` varchar(255) NOT NULL,
  `r_bg` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`r_id`, `p_name`, `p_email`, `p_about`, `p_password`, `p_phone`, `p_image`, `r_name`, `r_rating`, `r_cuisine`, `r_bg`) VALUES
(1, '0', '0', '0', '0', '0', '0', 'Cafe coffee day', '4.0', 'Snacks', 'restaurant/a.jpg'),
(2, '0', '0', '0', '0', '0', '0', 'KFC', '4.1', 'Snacks', 'restaurant/b.jpg'),
(3, '0', '0', '0', '0', '0', '0', 'subway', '3.3', 'health food', 'restaurant/bg.jpg'),
(4, '0', '0', '0', '0', '0', '0', 'Domino\'s ', '5.6', 'Ita', 'restaurant/b.jpg'),
(5, '0', '0', '0', '0', '0', '0', 'Hello', '3.5', 'Italyan', 'restaurant/a.jpg'),
(7, '0', '0', '0', '0', '0', '0', 'Sunandas restaurant re', '2.6', 'indian', 'restaurant/119365-best-cool-desktop-backgrounds-hd-1920x1080.jpg'),
(8, '0', '0', '0', '0', '0', '0', 'Sunandas restaurant', '9.6', 'indian', 'restaurant/110546.jpg'),
(9, 'sunanda', 'sunandasamanta38@gmail.com', 'please', '123456', '9647345443', 'restaurant/a.jpg', 'teri maa ki', '9.6', 'indian', 'restaurant/cover/10523.jpg'),
(11, 'SUNANDA SAMANTA', 'sunandasamantaa38@gmail.com', 'tor ki be', 'admin', '09647345443', 'restaurant/cover/download-hd-gaming-wallpapers-ultra-hd-5k.jpg', 'ljgoihg', '0.0', 'indian', 'restaurant/4c893b51febe5bbf205f926d123d8358.jpg'),
(12, 'SUNANDA SAMANTA', 'adminmania@gmail.com', 'dfedswfcedwsf', '123456', '09647345443', 'restaurant/cover/Gwent-The-Witcher-Card-Game-4K-Wallpaper-1.jpg', 'bsdk', '9.9', 'indian', 'restaurant/11949de63edaaff315e74f67b57485cd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `about`, `password`, `phone`, `image`) VALUES
(1, 'Salman Khan', 'salman@gmail.com', '', 'gacho', '9999999999999', ''),
(2, 'Katrina Kaif', 'katrina@gmail.com', '', 'ranbir', '888888888888', ''),
(3, 'Ranbir Kapoor', 'ranbir@gmail.com', '', 'alia', '77777777777777', ''),
(4, 'Virat Kohli', 'virat@gmail.com', '', '12345', '262623256323232', ''),
(5, 'SUNANDA SAMANTA', 'sunandasamanta38@gmail.com', '', 'admin', '09647345443', ''),
(7, ',rtngkjrhtgkjgrt', 'admin@gmail.com', '', 'admin', '4568954', ''),
(8, 'Teri maa', 'sunandasamanta60@gmail.com', 'i am a good boy', '123456', '354564185', 'profile/6b8e9da56f9996a8f5ac377283b03da4.jpg'),
(10, 'SUNANDA SAMANTA', 'sunanda@gmail.com', '', '123456789', 'kwejbkjwebfjkbfkjbew', ''),
(11, 'SUNANDA SAMANTA', 'sunanda@gmail.com', '', '123456789', 'kwejbkjwebfjkbfkjbew', ''),
(13, 'SUNANDA SAMANTA', 'sunandasamanta38@gmail.com', '', '123456', '09647345443', 'profile/2shdwke.jpg'),
(16, 'sunanda', 's@gmail.com', '', 'passs', '98965488456', ''),
(17, 'sunanda', 'sunandan@gmail.com', '', '1234567', '879456654654564', ''),
(18, 'SUNANDA SAMANTA', 'sunandasamanta38@gmail.com', '', 'admin', '9647345443', ''),
(19, 'SUNANDA SAMANTA', 'sunandasamanta38@gmail.com', '', '123456', '9647345443', ''),
(20, 'SUNANDA SAMANTA', 'sunandasamanta38@gmail.com', '', 'admin', '9647345443', ''),
(21, 'SUNANDA SAMANTA', 'sunandasamanta38@gmail.com', '', 'admin', '9647345443', ''),
(22, 'SUNANDA SAMANTA', 'sunandasamanta38@gmail.com', '', 'admin', '9647345443', ''),
(23, 'SUNANDA SAMANTA', 'sunaanda@gmail.com', '', '12345', '9647345443', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
