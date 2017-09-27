-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 03:35 PM
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
-- Table structure for table `tbl_accessories`
--

CREATE TABLE `tbl_accessories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_accessories`
--

INSERT INTO `tbl_accessories` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Sun Glasses', 'Ndebele colors branded sung glasses. Kinky and classy.', 49.95, 'img/accessories/ac1.jpg'),
(2, 'Beads', 'Neck beads to compliment your traditional Ndebele attire. ', 249.95, 'img/accessories/ac2.jpg'),
(4, 'Arm Beads', 'Classy arm beads with a shiny finish, suitable for the complete Ndebele attire.', 145.00, 'img/accessories/ac3.jpg'),
(5, 'Calabash', 'Traditional Calabash covered with beads. Hand crafted, strong and reliable.', 249.95, 'img/accessories/ac8.jpg'),
(6, 'Hand Bag', 'Nicely crafted hand bag, available in all different colors and forms.', 299.95, 'img/accessories/ac10.jpg'),
(7, 'Assorted Necklaces', 'Unique necklaces crafted by Ndebele women for those special occasions. ', 149.99, 'img/accessories/ac5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accessories`
--
ALTER TABLE `tbl_accessories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accessories`
--
ALTER TABLE `tbl_accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
