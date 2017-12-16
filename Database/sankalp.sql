-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 01:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sankalp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Khushal', 'khushal.goyal16@gmail.com', 'Hello my name is khushal'),
(2, 'Khushal Goyal', 'khushalgoyal@gmail.com', 'ouiytryuiopoiuytrtyuioiuytrtyuiopoiuyt'),
(3, 'lkjkj kjhjk', 'hjkjhjkjhjkhj@gmail.com', 'lklkjhjklhkljhkl'),
(4, 'Shivraj Mohite', 'shivraj@gmail.com', 'Hello !'),
(5, 'Shivraj Mohite', 'shivraj@gmail.com', 'Hello !'),
(6, 'Shivraj Mohite', 'shivm09.sm@gmail.com', 'utfufchugi'),
(7, 'Shivraj Mohite', 'shivrajmohite21@gmail.com', 'Gooood job.....'),
(8, 'test test', 'test@gmail.com', 'test comment qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(9, ' testii testii', 'testii@gmmmm.in', 'testttsdbvsdbjbdbsbd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
