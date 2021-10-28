-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 02:45 PM
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
-- Database: `School`
--

-- --------------------------------------------------------

--
-- Table structure for table `City`
--

CREATE TABLE `City` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `City`
--

INSERT INTO `City` (`id`, `Name`, `pincode`, `state`, `country`) VALUES
(1, 'ahmedabad', '123', 'gujarat', 'india'),
(2, 'surat', '456', 'gujarat', 'india'),
(3, 'jaipur', '789', 'Rajasthan', 'india'),
(4, 'udaipur', '980', 'Rajasthan', 'india'),
(5, 'mumbai', '234', 'maharashtra', 'india'),
(6, 'pune', '456', 'maharashtra', 'india'),
(7, 'shimla', '123', 'jammu', 'india'),
(8, 'manali', '456', 'jammu', 'india'),
(9, 'chennai', '789', 'karnataka', 'india'),
(10, 'banglore', '456', 'karnataka', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `Course_id` int(11) DEFAULT NULL,
  `Name` varchar(20) NOT NULL,
  `source` varchar(20) NOT NULL,
  `Duration` int(11) NOT NULL,
  `country` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Course`
--

INSERT INTO `Course` (`Course_id`, `Name`, `source`, `Duration`, `country`) VALUES
(NULL, 'java', 'javatpoint', 6, 'india'),
(NULL, 'php', 'w3school', 4, 'india'),
(3, '.net', 'tutorialspoint', 6, 'india'),
(4, 'python', 'w3school', 4, 'india'),
(5, 'javascript', 'javatpoint', 6, 'india'),
(6, 'Android', 'w3school', 4, 'india'),
(7, 'ios', 'javatpoint', 6, 'india'),
(8, 'HTML', 'w3school', 4, 'india'),
(9, 'CSS', 'javatpoint', 6, 'india'),
(10, 'C#', 'w3school', 4, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Mobileno` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Name`, `Address`, `Mobileno`, `email`) VALUES
(1, 'Avni', 'xyz123', '3214567890', 'abc123@gmail.com'),
(2, 'Dipali', 'xyz', '3214567890', 'xyz123@gmail.com'),
(3, 'Riya', 'abc123', '3214567890', 'abc123@gmail.com'),
(4, 'Shruti', 'xyz', '2134564321', 'xyz123@gmail.com'),
(5, 'Shriya', 'def', '3214567890', 'abc123@gmail.com'),
(6, 'kajal', 'xyz', '2134564321', 'xyz123@gmail.com'),
(7, 'Krishna', 'abc', '3214567890', 'abc123@gmail.com'),
(8, 'Anjani', 'xyz', '2134564321', 'xyz123@gmail.com'),
(9, 'Kajal', 'def', '3214567890', 'abc123@gmail.com'),
(10, 'vidhi', 'xyz', '3214567890', 'xyz123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee1`
--

CREATE TABLE `employee1` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Mobileno` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee1`
--

INSERT INTO `employee1` (`id`, `name`, `email`, `Mobileno`, `address`) VALUES
(1, 'avni', 'abc123@gmail.com', '3214567890', 'abcxyz'),
(2, 'anjani', 'xyz123@gmail.com', '2134564321', 'xyzabc'),
(3, 'riya', 'abc123@gmail.com', '3214567890', 'abcxyz'),
(4, 'shriya', 'xyz123@gmail.com', '2134564321', 'xyzabc'),
(5, 'kajal', 'abc123@gmail.com', '3214567890', 'abcxyz'),
(6, 'krishna', 'xyz123@gmail.com', '3214567890', 'xyzabc'),
(7, 'shruti', 'abc123@gmail.com', '3214567890', 'abcxyz'),
(8, 'dipali', 'xyz123@gmail.com', '2134564321', 'xyzabc'),
(9, 'pinal', 'abc123@gmail.com', '3214567890', 'abcxyz'),
(10, 'vidhi', 'xyz123@gmail.com', '2134564321', 'xyzabc');

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE `Order` (
  `id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Order`
--

INSERT INTO `Order` (`id`, `p_name`, `price`, `quantity`, `date`) VALUES
(1, 'p1', '500', '2', '2021-10-01'),
(2, 'p2', '600', '3', '2021-10-02'),
(3, 'p3', '900', '1', '2021-10-03'),
(4, 'p4', '1500', '3', '2021-10-04'),
(5, 'p5', '1200', '1', '2021-10-05'),
(6, 'p6', '1500', '3', '2021-10-06'),
(7, 'p7', '1200', '1', '2021-10-07'),
(8, 'p8', '1000', '3', '2021-10-08'),
(9, 'p9', '900', '2', '2021-10-09'),
(10, 'p10', '1500', '3', '2021-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `Discount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `Name`, `Quantity`, `price`, `Discount`) VALUES
(1, 'dress', 3, '900', '25%'),
(2, 'saree', 5, '1000', '30%'),
(3, 'T-shirt', 10, '500', '25%'),
(4, 'Top', 6, '600', '30%'),
(5, 'struge', 3, '500', '25%'),
(6, 'watch', 5, '600', '30%'),
(7, 'shoes', 3, '1200', '25%'),
(8, 'heels', 2, '1000', '30%'),
(9, 'ring', 3, '2000', '25%'),
(10, 'neakless', 2, '1500', '30%');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `Description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `Name`, `color`, `quantity`, `Description`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, 'geans', 'blue', '2', '-'),
(4, 'top', 'pink', '3', '-'),
(5, 'top', 'black', '3', '-'),
(6, 'track-pent', 'black', '3', '-'),
(7, 'saree', 'pink', '2', '-'),
(8, 'watch', 'gray', '3', '-'),
(9, 'choli', 'red', '1', '-'),
(10, 'kurta', 'black', '3', '-');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `e_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `Mobile_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`e_id`, `Name`, `email`, `salary`, `Mobile_no`) VALUES
(1, 'Avni', 'abc123@gmail.com', '20000', '1235436780'),
(2, 'Dipali', 'xyz123@gmail.com', '25000', '7654321909'),
(3, 'Riya', 'abc123@gmail.com', '23000', '1235436780'),
(4, 'Shruti', 'xyz123@gmail.com', '25000', '1234567890'),
(5, 'Shriya', 'abc123@gmail.com', '20000', '1235436780'),
(6, 'kajal', 'xyz123@gmail.com', '25000', '1234567890'),
(7, 'Krishna', 'abc123@gmail.com', '23000', '1235436780'),
(8, 'Anjani', 'xyz123@gmail.com', '25000', '1234567890'),
(9, 'pinal', 'abc123@gmail.com', '20000', '4321987650'),
(10, 'vidhi', 'xyz123@gmail.com', '25000', '7654321909');

-- --------------------------------------------------------

--
-- Table structure for table `Student_detail`
--

CREATE TABLE `Student_detail` (
  `student_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Student_detail`
--

INSERT INTO `Student_detail` (`student_id`, `Name`, `Address`, `Email`, `Mobile_no`) VALUES
(101, 'shreyanshi', 'abc123', 'abc123@gmail.com', '123456789'),
(102, 'Avni', 'xyz123', 'xyz123@gmail.com', '1235436780'),
(103, 'Riya', 'def', 'def@gmail.com', '4321987650'),
(104, 'Shriya', 'abc123', 'abc123@gmail.com', '1235436780'),
(105, 'Anjani', 'xyz', 'xyz@gmail.com', '1234567890'),
(106, 'Kajal', 'xyz123', 'def@gmail.com', '4321987650'),
(107, 'Shruti', 'xyz', 'xyz@gmail.com', '7654321909'),
(108, 'Krishna', 'def', 'def@gmail.com', '1235436780'),
(109, 'Dipali', 'xyz', 'xyz@gmail.com', '1234567890'),
(110, 'Pinal', 'xyz123', 'xyz123@gmail.com', '1235436780');

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE `Teacher` (
  `Teacher_id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobileno` varchar(10) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Teacher`
--

INSERT INTO `Teacher` (`Teacher_id`, `Name`, `Email`, `Mobileno`, `course`) VALUES
(1, 'Anjani', 'abc123@gmail.com', '3214567890', 'Cloud Computing'),
(2, 'Shruti', 'xyz@gmail.com', '3214567890', 'Machine learning'),
(3, 'Riya', 'abc123@gmail.com', '3214567890', 'Block chain'),
(4, 'Dipali', 'xyz@gmail.com', '3214567890', 'python'),
(5, 'Shriya', 'def@gmail.com', '3214567890', 'php'),
(6, 'kajal', 'xyz@gmail.com', '3214567890', 'java'),
(7, 'Krishna', 'xyz123@gmail.com', '3214567890', 'c#'),
(8, 'Dipali', 'xyz@gmail.com', '3214567890', '.net'),
(9, 'Avni', 'def@gmail.com', '3214567890', 'javascript'),
(10, 'vidhi', 'xyz@gmail.com', '3214567890', 'Android');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `City`
--
ALTER TABLE `City`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `Student_detail`
--
ALTER TABLE `Student_detail`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`Teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `City`
--
ALTER TABLE `City`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Order`
--
ALTER TABLE `Order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Student_detail`
--
ALTER TABLE `Student_detail`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `Teacher`
--
ALTER TABLE `Teacher`
  MODIFY `Teacher_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
