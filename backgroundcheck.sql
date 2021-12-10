-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2021 at 11:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backgroundcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `admincredentials`
--

CREATE TABLE `admincredentials` (
  `username` varchar(200) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admincredentials`
--

INSERT INTO `admincredentials` (`username`, `password`) VALUES
('admin', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

CREATE TABLE `criminals` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othernames` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nationalid` varchar(10) DEFAULT NULL,
  `crime` varchar(30) DEFAULT NULL,
  `doc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminals`
--

INSERT INTO `criminals` (`id`, `surname`, `firstname`, `othernames`, `dob`, `nationalid`, `crime`, `doc`) VALUES
(5, 'Apaalse', 'Cornelius', 'Abrabo', '1986-12-07', '1127384949', 'Murder', '2021-09-10'),
(6, 'Darko', 'Gerald', 'Boadi', '2021-12-09', '1435752890', 'Rape', '2004-05-03'),
(15, 'Safo', 'Dufie', 'Adu', '2021-01-01', '9029032131', 'Theft', '2021-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telNo` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `telNo`, `password`) VALUES
(1, 'gerald', 'geralddarko@icloud.com', '12', '928d4f75322577abb627f16662782d38'),
(2, 'Gerald Darko', 'gerald@gmail.com', '123', '380891959a0754c24a7ad3525c2d1e77'),
(3, 'Tulenkey', 'capaalse@gmail.com', '233558114931', '5caf72868c94f184650f43413092e82c'),
(4, 'Shirley', 'shirley@gmail.com', '1234557676', '755e9e9053939dbd61e36d0d32a7e646'),
(5, 'shirley', 'shirley1@gmail.com', '025444444', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Gerald Boadi ', 'gerald@ashesi.edu.gh', '0244417579', '380891959a0754c24a7ad3525c2d1e77'),
(9, 'Gerald', 'geralddarko@gmail.com', '0244417578', '928d4f75322577abb627f16662782d38'),
(10, 'Rahma', 'rahma@gmail.com', '0233', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'ama-bange', 'ama-bange@gmail.com', '0234455544', '4eae18cf9e54a0f62b44176d074cbe2f'),
(12, 'yi', 'test2@gmail.com', '567', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criminals`
--
ALTER TABLE `criminals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telNo` (`telNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
