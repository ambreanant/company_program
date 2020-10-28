-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 03:49 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anant`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `parentId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `CreatedDate`, `Name`, `parentId`) VALUES
(1, '2020-10-19 00:00:00', 'Abhijeet', NULL),
(2, '2020-10-19 00:00:00', 'Sanel', NULL),
(3, '2020-10-19 00:00:00', 'Kapil', NULL),
(4, '2020-10-19 00:00:00', 'Adam', NULL),
(5, '2020-10-19 00:00:00', 'Test User1', NULL),
(6, '2020-10-20 00:00:00', 'Albrito', 1),
(7, '2020-10-20 00:00:00', 'sid', 1),
(8, '2020-10-20 00:00:00', 'vasim kudle', 1),
(9, NULL, 'Bala', 6),
(10, NULL, 'sadashiv', 6),
(11, NULL, 'Raghven', 7),
(13, NULL, 'Arwind', 11),
(14, NULL, 'david', 13),
(15, NULL, 'anup', 13),
(16, NULL, 'sarvesh', 14),
(17, NULL, 'Mohit', 2),
(18, NULL, 'Test user 2', 5),
(19, NULL, 'Test user 3', 18);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `Name` varchar(50) NOT NULL,
  `parentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `CreatedDate`, `Name`, `parentId`) VALUES
(1, '0000-00-00 00:00:00', 'Abhijeet', 0),
(2, '0000-00-00 00:00:00', 'Sanel', 0),
(3, '0000-00-00 00:00:00', 'Kapil', 0),
(4, '0000-00-00 00:00:00', 'Adam', 0),
(5, '0000-00-00 00:00:00', 'Test User1', 0),
(6, '0000-00-00 00:00:00', 'Albrito', 1),
(7, '0000-00-00 00:00:00', 'sid', 1),
(8, '0000-00-00 00:00:00', 'vasim kudle', 1),
(9, '0000-00-00 00:00:00', 'Bala', 6),
(10, '0000-00-00 00:00:00', 'sadashiv', 6),
(11, '0000-00-00 00:00:00', 'Raghven', 7),
(12, '0000-00-00 00:00:00', 'Arwind', 11),
(13, '0000-00-00 00:00:00', 'david', 12),
(14, '0000-00-00 00:00:00', 'anup', 12),
(15, '0000-00-00 00:00:00', 'sarvesh', 13),
(16, '0000-00-00 00:00:00', 'Mohit', 2),
(17, '0000-00-00 00:00:00', 'Test user 2', 5),
(18, '0000-00-00 00:00:00', 'Test user 3', 17),
(19, '0000-00-00 00:00:00', 'new test', 5),
(20, '0000-00-00 00:00:00', 'new test123', 5),
(21, '0000-00-00 00:00:00', 'new', 5),
(22, '0000-00-00 00:00:00', 'new1', 5),
(23, '0000-00-00 00:00:00', 'new2', 5),
(24, '0000-00-00 00:00:00', 'new3', 5),
(25, '0000-00-00 00:00:00', 'new4', 5),
(26, '0000-00-00 00:00:00', 'new5', 5),
(27, '0000-00-00 00:00:00', 'new 6', 5),
(28, '0000-00-00 00:00:00', 'new7', 5),
(29, '0000-00-00 00:00:00', 'new8', 5),
(30, '0000-00-00 00:00:00', 'new 9', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentId` (`parentId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`parentId`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
