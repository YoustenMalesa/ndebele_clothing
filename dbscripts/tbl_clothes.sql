-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 03:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ndebele`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clothes`
--

CREATE TABLE `tbl_clothes` (
  `id` int(9) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(200) COLLATE utf8_bin NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_clothes`
--

INSERT INTO `tbl_clothes` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Modern Fusion', 'An elegant modernized attire, suitable for glamorous occasions.', 500.00, 'img/clothes/cl1.jpg'),
(2, 'Traditional Attire', 'A traditional Nebele attire, perfect for attending traditional events.', 700.00, 'img/clothes/cl2.jpg'),
(3, 'Polyester Traditional Attire', 'High quality traditional attire. Hand Crafted using the best material.', 750.99, 'img/clothes/cl4.jpg'),
(4, 'Modern Dress', 'Elegant, Sophisticated modern dress with Nebele signature patterns.', 999.99, 'img/clothes/cl5.jpg'),
(5, 'Maskandi Skirt', 'A simple yet sophisticated skirt for young Ndebele girls', 349.99, 'img/clothes/cl3.jpg'),
(6, 'Traditional Blanket', 'A colorful blanket, suitable for wearing with a Ndebele skirt and beads.', 499.99, 'img/clothes/cl6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_clothes`
--
ALTER TABLE `tbl_clothes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_clothes`
--
ALTER TABLE `tbl_clothes`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
