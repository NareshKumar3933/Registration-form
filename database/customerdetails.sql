-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 05:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customerdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminloginpage`
--

CREATE TABLE `adminloginpage` (
  `Id` int(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminloginpage`
--

INSERT INTO `adminloginpage` (`Id`, `email`, `password`) VALUES
(20, 'xyz@gmail.com', '$2y$10$dYbSuQHNUyRGtDU9SRq3bOvsE0DTL14tx1DlbZqB7xOyJ3KsqQuT6'),
(23, 'vikram@gmail.com', '$2y$10$w6bXF2pFVAXvP9xMPJkiu.9g0k4JUCRmM18tG7W5E6SLvzJSE/zKa'),
(27, 'abbas@gmail.com', '$2y$10$ZGeExkOELir/jdRS81qy8OvCBTsQGdtnolmy62U6WXC4Z6HlEaVlq');

-- --------------------------------------------------------

--
-- Table structure for table `contactuspage`
--

CREATE TABLE `contactuspage` (
  `Id` int(11) NOT NULL,
  `fullname` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneNo` varchar(13) DEFAULT NULL,
  `zipCode` int(5) DEFAULT NULL,
  `descriptionDetails` varchar(200) DEFAULT NULL,
  `requestedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactuspage`
--

INSERT INTO `contactuspage` (`Id`, `fullname`, `email`, `phoneNo`, `zipCode`, `descriptionDetails`, `requestedAt`) VALUES
(25254, 'abc', 'nareshkumar3933@gmail.com', '03043933038', 12345, 'sa asd', '2023-05-13 14:14:22'),
(25275, 'Naresh kumar', 'b18101088.nareshkumar@gmail.com', '03043933038', 12345, 'checking errors', '2023-05-17 14:22:13'),
(25277, 'Naresh kumar', 'nareshkumar3933@gmail.com', '03043933038', 12345, 'testing', '2023-05-18 06:49:28'),
(25278, 'Naresh kumar', 'nareshkumar3933@gmail.com', '03043933038', 12345, 'checking', '2023-05-21 10:31:33'),
(25279, 'Naresh kumar', 'nareshkumar3933@gmail.com', '03043933038', 12345, 'checking', '2023-05-21 10:34:06'),
(25280, 'Naresh kumar', 'b18101088.nareshkumar@gmail.com', '03043933038', 12345, 'checking', '2023-05-21 12:57:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminloginpage`
--
ALTER TABLE `adminloginpage`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contactuspage`
--
ALTER TABLE `contactuspage`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminloginpage`
--
ALTER TABLE `adminloginpage`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `contactuspage`
--
ALTER TABLE `contactuspage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25281;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
