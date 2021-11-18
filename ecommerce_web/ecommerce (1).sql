-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2021 at 01:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(30) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'shreya', 'shreya@gmail.com', 'shreya');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` bigint(20) NOT NULL,
  `pro_id` bigint(10) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_price` bigint(10) NOT NULL,
  `pro_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pro_id`, `pro_name`, `pro_price`, `pro_image`) VALUES
(5, 41, 'T-shirt', 500, './Images/man1.jpg'),
(6, 37, 'shirt', 1100, './Images/81T9k3QhvpL._UL1500_.jpg'),
(7, 39, 'dress', 700, './Images/51xIU2lqYIS._UL1000_.jpg'),
(28, 49, 'Bages', 1000, './Images/719r0MVQ9IL._UL1500_.jpg'),
(32, 50, 'wallet', 650, './Images/71wN6VIaxhL._SL1500_.jpg'),
(33, 50, 'wallet', 650, './Images/71wN6VIaxhL._SL1500_.jpg'),
(34, 50, 'wallet', 650, './Images/71wN6VIaxhL._SL1500_.jpg'),
(35, 50, 'wallet', 650, './Images/71wN6VIaxhL._SL1500_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` bigint(50) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`) VALUES
(4, 'Accessories'),
(6, 'men'),
(7, 'women'),
(8, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` bigint(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` bigint(50) NOT NULL,
  `p_description` text NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_description`, `p_img`, `c_name`, `is_active`) VALUES
(25, 'Allen Solly Women Sweatshirt', 769, 'Allensolly women shirt', './Images/61hl3-xuf7L._UL1500_.jpg', 'women', 1),
(28, 'Kurti', 400, 'Red Kurti for women', './Images/category_3.png', 'women', 1),
(29, 'Top', 1000, 'Black Top for girls ', './Images/category_4.png', 'women', 1),
(30, 'T-shirt', 500, 'Gray Hoodies girls', './Images/category_5.png', 'women', 1),
(31, 'Top', 699, 'Blue Top for girl', './Images/category_7.png', 'women', 1),
(32, 'T-shirt', 600, 'Red girl t-shirt', './Images/prodect_details_4.png', 'women', 1),
(34, 'T-shirt', 500, 'kids t shirt combo', './Images/81zPfCZ7zNL._UL1500_.jpg', 'kids', 1),
(35, 'Maxi dress', 700, 'Maxi dress neavy', './Images/61wG7xGVDaL._UL1500_.jpg', 'kids', 1),
(36, 'Goun', 900, 'Goun full sleeve party wear', './Images/41E9iLTH7dL.jpg', 'kids', 1),
(37, 'shirt', 1100, 'Regular fit pair', './Images/81T9k3QhvpL._UL1500_.jpg', 'kids', 1),
(38, 'T-shirt', 1100, 't-shirt pent pair', './Images/71Bd54mUNIL._UL1500_.jpg', 'kids', 1),
(39, 'dress', 700, 'girl red dress', './Images/51xIU2lqYIS._UL1000_.jpg', 'kids', 1),
(40, 'shirt', 500, 'Blue casual shirt', './Images/71-0gpmRw4L._UL1440_.jpg', 'men', 1),
(41, 'T-shirt', 500, 'casual T-shirt', './Images/man1.jpg', 'men', 1),
(42, 'T-shirt', 600, 'round neck t-shirt', './Images/51BKqwKidvL._UL1000_.jpg', 'men', 1),
(43, 'T-shirt', 600, 'Regular fit half sleeve T-shirt', './Images/71C5XIU4hOS._UL1500_.jpg', 'men', 1),
(44, 'shirt', 500, 'casual shirt', './Images/61Cr-qdKvOL._UL1404_.jpg', 'men', 1),
(45, 'Watch', 1200, 'Rose Gold Cuff Combo for women', './Images/710nhRft3UL._UL1400_.jpg', 'accessories', 1),
(46, 'Shoes', 3000, 'white shoes for women', './Images/61-0PtN-TwL._UL1500_.jpg', 'accessories', 1),
(47, 'Sun glasses', 300, 'High on Style sun glasses', './Images/71OFesEpScL._UL1500_.jpg', 'accessories', 1),
(48, 'Hand Bages', 1000, 'Enrich your look with this Hobo INOVERA (LABEL)', './Images/71Raw8VUk5L._UL1500_.jpg', 'accessories', 1),
(49, 'Bages', 1000, ' All of our products are designed and crafted from exquisite man-made leathers.', './Images/719r0MVQ9IL._UL1500_.jpg', 'accessories', 1),
(50, 'wallet', 650, 'TOP GRAIN LEATHER: This Wallet Made in Exclusive High Quality Leather', './Images/71wN6VIaxhL._SL1500_.jpg', 'accessories', 1),
(53, 'T-shirt', 700, 'Half sleev t-shirt', './Images/41nvyksD5lL.jpg', 'men', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
