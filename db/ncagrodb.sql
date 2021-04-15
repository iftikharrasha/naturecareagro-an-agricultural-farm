-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 01:13 PM
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
(1, 'superadmin', 'cb81d1314128e7a62d3d8615df1aa1db', 'contact@iftikharrasha.com', 'superadmin', '2021-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(50) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `added_by`, `date_time`) VALUES
(2, 'Insecticides', 'superadmin', '2021-04-15'),
(3, 'Fungicides', 'superadmin', '2021-04-15'),
(4, 'Herbicides', 'superadmin', '2021-04-15');

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
  `views` int(11) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_composition` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nc_products`
--

INSERT INTO `nc_products` (`product_id`, `product_title`, `product_image`, `added_by`, `date_time`, `views`, `product_category`, `product_composition`) VALUES
(51, 'Calculus 70WG', 'Calculus70WG_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Imidacloprid 70 WG'),
(52, 'Bingo 75WG', 'Bingo75WG_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Fungicides', 'Tebuconazole 50% + Trifloxystrobin 25% WG'),
(53, 'Mine 95SP', 'Mine95SP_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Cartap 92% + Acetamiprid 3% SP'),
(54, 'Ray 80WDG', 'Ray80WDG_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Imidacloprid 40% + Fipronil 40% WDG'),
(55, 'Unique 5SG', 'Unique5SG_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Emamectin Benzoate 5 SG'),
(56, 'Hope Plus 40WG', 'HopePlus40WG_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Emamectin Benzoate 20 % + Thiamethoxam 20% WG'),
(57, 'Greatzim 50WP', 'Greatzim50WP_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Fungicides', 'Carbendazim 50 WP'),
(58, 'Zimda 50DF', 'Zimda50DF_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Fungicides', 'Carbendazim 50 DF'),
(59, 'Desert Extra 1.8EC', 'DesertExtra1.8EC_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Abamectin 1.8 EC'),
(60, 'Tintin 30EC', 'Tintin30EC_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Fungicides', 'Difenoconazole 15% + Propiconazole 15% EC'),
(61, 'Lambox 24.7SC', 'Lambox24.7SC_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Lambda Cyhalothrin 10.6% + Thiamethoxam 14.1% SC'),
(62, 'Catlin 32.50SC', 'Catlin32.50SC_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Fungicides', 'Difenoconazole 12.5 % + Axoxystrobin 20% SC'),
(63, 'Nano Plus 55EC', 'NanoPlus55EC_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Cypermethrin 5% + Chlorpyrifos 50% EC'),
(64, 'Traf 48EC', 'Traf48EC_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Chlorpyrifos 48 EC'),
(65, 'Marlo 2.5EC', 'Marlo2.5EC_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Insecticides', 'Lambda Cyhalothrin 2.5 EC'),
(66, 'Greatvit  80WG', 'Greatvit80WG_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Fungicides', 'Sulphur 80 WG'),
(67, 'Total Care 18WP', 'TotalCare18WP_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Herbicides', 'Bensulfuron Methyl 4% + Acetoclor 14% WP'),
(68, 'Duster 20SL', 'Duster20SL_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Herbicides', 'Paraquat 20 SL'),
(69, 'Greatzole 5EC', 'Greatzole5EC_2021-04-15.jpg', 'superadmin', '2021-04-15', 0, 'Fungicides', 'Hexaconazole 5EC');

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
(1, 245);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ncagro`
--
ALTER TABLE `admin_ncagro`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nc_products`
--
ALTER TABLE `nc_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `nc_views`
--
ALTER TABLE `nc_views`
  MODIFY `views_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
