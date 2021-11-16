-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2021 at 08:45 AM
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
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_description`, `p_img`, `c_name`) VALUES
(2, 'shirt', 700, 'njsdfkjsfbsk,nc', './Images/', 'men'),
(3, 'cap', 300, 'xjzxbhszvxzn xzm', './images/', 'women'),
(4, 'Blue shirt', 360, 'Minimalistic shop for multipurpose use', '/Imagesprodect_details_2.png', 'men'),
(5, 'Black shirt', 800, 'Minimalistic shop for multipurpose use', '../Images/product6.png', 'men'),
(6, 't-shirt', 500, 'nice', './images/', ''),
(7, 'shirt', 700, 'abc1233', 'images/', ''),
(8, 'cap', 800, 'cdefghijklmnopqrstuvwxyz', './Images/Screenshot from 2021-11-10 10-13-11.png', 'kids'),
(9, 'cap', 360, 'cnjkscbnxcskcksn', './images/', ''),
(10, 'anjani', 1000, 'ncsjncjsxncjn mn mncjsnjscnjs', './Images/', 'men'),
(11, 'top', 700, 'bchsdbcjsbjckscnksjc', 'images/', ''),
(12, 'cap', 700, 'abc123', './Images/product3.png', 'men'),
(13, 'Blue shirt', 360, 'msjkndwkncsjkncosjdiwjcnoisjwxiodhnxnqojnx', './Images/category_8.png', 'men'),
(14, 'jacket', 700, 'blue denim jacket', './Images/category_12.png', 'men'),
(15, 'shoes', 1000, 'addidas', './Images/category_9.png', 'kids'),
(16, 'cap', 1000, 'addidas', './Images/category_9.png', 'kids'),
(17, 'cap', 1000, 'abc', './Images/category_9.png', 'kids');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
