-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 02:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncagrodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ncagro`
--

CREATE TABLE `admin_ncagro` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ncagro`
--

INSERT INTO `admin_ncagro` (`admin_id`, `admin_name`, `admin_password`, `admin_email`, `added_by`, `date_time`) VALUES
(1, 'superadmin', 'cb81d1314128e7a62d3d8615df1aa1db', 'contact@iftikharrasha.com', 'superadmin', '2021-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `nc_products`
--

CREATE TABLE `nc_products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(500) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nc_products`
--

INSERT INTO `nc_products` (`product_id`, `product_title`, `product_image`, `added_by`, `date_time`, `views`) VALUES
(5, 'This is a product', 'Thisisaproduct_2021-04-09.jpg', 'superadmin', '2021-04-09', 0),
(8, 'Own Nao', 'OwnNao_2021-04-09.jpg', 'superadmin', '2021-04-09', 0),
(9, 'Haha New', 'HahaNew_2021-04-09.jpg', 'superadmin', '2021-04-09', 0),
(10, 'New one', 'Newone_2021-04-09.jpg', 'superadmin', '2021-04-09', 0),
(11, 'Hey You', 'HeyYou_2021-04-09.jpg', 'superadmin', '2021-04-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nc_views`
--

CREATE TABLE `nc_views` (
  `views_id` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nc_views`
--

INSERT INTO `nc_views` (`views_id`, `views`) VALUES
(1, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ncagro`
--
ALTER TABLE `admin_ncagro`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `nc_products`
--
ALTER TABLE `nc_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `nc_views`
--
ALTER TABLE `nc_views`
  ADD PRIMARY KEY (`views_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_ncagro`
--
ALTER TABLE `admin_ncagro`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nc_products`
--
ALTER TABLE `nc_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nc_views`
--
ALTER TABLE `nc_views`
  MODIFY `views_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
