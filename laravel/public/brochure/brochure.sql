-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 09:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `christiancsicollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `brochure`
--

CREATE TABLE `brochure` (
  `id` int(10) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brochure`
--

INSERT INTO `brochure` (`id`, `photo`, `status`) VALUES
(1, '1.jpg', 'Active'),
(2, '2.jpg', 'Active'),
(3, '3.jpg', 'Active'),
(4, '4.jpg', 'Active'),
(5, '5.jpg', 'Active'),
(6, '6.jpg', 'Active'),
(7, '7.jpg', 'Active'),
(8, '8.jpg', 'Active'),
(9, '9.jpg', 'Active'),
(10, '10.jpg', 'Active'),
(11, '11.jpg', 'Active'),
(12, '12.jpg', 'Active'),
(13, '13.jpg', 'Active'),
(14, '14.jpg', 'Active'),
(15, '15.jpg', 'Active'),
(16, '16.jpg', 'Active'),
(17, '17.jpg', 'Active'),
(18, '18.jpg', 'Active'),
(19, '19.jpg', 'Active'),
(20, '20.jpg', 'Active'),
(21, '21.jpg', 'Active'),
(22, '22.jpg', 'Active'),
(23, '23.jpg', 'Active'),
(24, '24.jpg', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
