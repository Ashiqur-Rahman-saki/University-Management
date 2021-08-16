-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2021 at 10:57 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `allcourses`
--

CREATE TABLE `allcourses` (
  `courseName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `courseId` int(10) NOT NULL,
  `state` int(10) NOT NULL,
  `grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `allcourses`
--

INSERT INTO `allcourses` (`courseName`, `courseId`, `state`, `grade`) VALUES
('Electric Circuit', 1, 0, 0),
('Computer Networking', 2, 1, 3.25),
('C Programming', 3, 0, 0),
('Microprocessor', 4, 0, 0),
('Bangladesh Studies', 5, 1, 3.75),
('Physics', 6, 1, 3.5),
('Web Devlopment', 7, 1, 3.5),
('Computer Graphics', 8, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `coursename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `edition` varchar(10) NOT NULL,
  `numberofcopy` int(10) NOT NULL,
  `courseid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`coursename`, `time`, `edition`, `numberofcopy`, `courseid`) VALUES
('Web Dev', '9:30 AM', '165', 0, 1001),
('C Programming', '11:30 AM', '145', 0, 121),
('Microprocessor', '1:30 PM', '653', 0, 1212);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Religion` varchar(15) NOT NULL,
  `Presentaddress` varchar(100) DEFAULT NULL,
  `Permanentaddress` varchar(100) DEFAULT NULL,
  `Phone` int(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Website` varchar(50) DEFAULT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Firstname`, `Lastname`, `Gender`, `DOB`, `Religion`, `Presentaddress`, `Permanentaddress`, `Phone`, `Email`, `Website`, `Username`, `Password`, `id`) VALUES
('Ashiqur', 'Rahman', 'Male', '2001-01-01', 'Islam', 'Ashoktala', 'Debidwar', 1234567890, 'ashiqurr662@gmail.com', 'http://google.com', 'admin', 'admin', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allcourses`
--
ALTER TABLE `allcourses`
  ADD UNIQUE KEY `studentId` (`courseId`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `bookid` (`courseid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
