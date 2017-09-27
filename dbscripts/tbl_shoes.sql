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
-- Table structure for table `tbl_shoes`
--

CREATE TABLE `tbl_shoes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shoes`
--

INSERT INTO `tbl_shoes` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Tomy', 'Colorful pair of Tomys, with colorful Ndebele patterns.', 349.99, 'img/shoes/sh1.jpg'),
(2, 'High Heels', 'A pair of stunning high heels, suitable for special occasions. ', 499.99, 'img/shoes/sh2.jpg'),
(3, 'Nike Air', 'Beautifully crafted sneakers with Ndebele patterns.', 899.99, 'img/shoes/sh3.jfif'),
(4, 'Converse Sneakers', 'Beautiful converse for leisure time, fitted for every occasion. ', 499.90, 'img/shoes/sh4.jpg'),
(5, 'Ndebele Converse', 'Beautiful hand-crafted converse, stunning, elegant, classy, and fitted for every occasion.', 299.99, 'img/shoes/sh5.jpg'),
(6, 'Ndebele Heels', 'Colorful yet magnificent heels for those on the move. Hand crafted to perfection.', 499.80, 'img/shoes/sh6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_shoes`
--
ALTER TABLE `tbl_shoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_shoes`
--
ALTER TABLE `tbl_shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
