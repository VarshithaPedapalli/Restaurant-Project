-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 08:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
 
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `gp1`
--

CREATE TABLE `gp1` (
  `S_No` int(11) NOT NULL,
  `Cust_Name` text DEFAULT NULL,
  `Cust_email` text DEFAULT NULL,
  `No_of_Seats` int(11) DEFAULT NULL,
  `Instructions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gp1`
--

INSERT INTO `gp1` (`S_No`, `Cust_Name`, `Cust_email`, `No_of_Seats`, `Instructions`) VALUES
(1, 'Ravi Teja Devarapu', 'ravitejadevarapu8979@gmail.com', 3, NULL),
(2, 'Rishika Devarapu', 'rishi@02EFJbrjb', 4, NULL),
(3, 'Ravi T', 'ravitejadevarapu8979@gmail.com', 4, ''),
(4, 'ravi', 'ra2@gmail.com', 6, 'i perfer corner view.'),
(5, 'rishi', 'rishi_02@gmail.com', 3, ''),
(6, 'Ravi Teja Devarapu', 'rvt1602@gmail.com', 5, 'i want a good view'),
(7, 'Ravi Teja Devarapu', 'ravitejadevarapu8979@gmail.com', 3, ''),
(10, 'varsha', 'vizags03@gmail.com', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(12, 'mango salad', '123', '5b8b0661d75d6dd86e8494297b7a970a.jpg'),
(13, 'lassi', '2323', 'Andes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'vizags03@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gp1`
--
ALTER TABLE `gp1`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gp1`
--
ALTER TABLE `gp1`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
