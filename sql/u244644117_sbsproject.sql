-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2021 at 10:15 AM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u244644117_sbsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(10) NOT NULL,
  `idno` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `idno`, `name`, `email`, `password`) VALUES
(1, 'cx5000', 'admin', 'admin8@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `raisereport`
--

CREATE TABLE `raisereport` (
  `id` int(20) NOT NULL,
  `sender` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffattendance`
--

CREATE TABLE `staffattendance` (
  `id` int(80) NOT NULL,
  `idno` varchar(90) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(90) NOT NULL,
  `date` varchar(90) NOT NULL,
  `time` varchar(90) NOT NULL,
  `status` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffattendance`
--

INSERT INTO `staffattendance` (`id`, `idno`, `name`, `email`, `date`, `time`, `status`) VALUES
(3, '17000', 'pawan', 'kalkaprasad59@gmail.com', '2021-01-16', '03:45:28', '0');

-- --------------------------------------------------------

--
-- Table structure for table `staffdetails`
--

CREATE TABLE `staffdetails` (
  `id` int(20) NOT NULL,
  `idno` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffdetails`
--

INSERT INTO `staffdetails` (`id`, `idno`, `name`, `email`, `phone`, `password`, `date`) VALUES
(1, 17000, 'pawan', 'kalkaprasad59@gmail.com', '8957895494', 'pawan93967', '15/01/2021'),
(4, 17201555, 'ramesh', 'connects@kalkaprasad.com', '8957895494', 'babasona23828', '16/01/2021');

-- --------------------------------------------------------

--
-- Table structure for table `studentattendance`
--

CREATE TABLE `studentattendance` (
  `id` int(20) NOT NULL,
  `rollno` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `date` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `time` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentattendance`
--

INSERT INTO `studentattendance` (`id`, `rollno`, `name`, `date`, `email`, `time`, `status`) VALUES
(8, '170280113', 'kalka', '2021-01-16', 'kalkaprasad59@gmail.com', '03:13:01', '0'),
(12, '170280', 'navtej', '2021-01-19', 'er.navtejghumman@gmail.com', '12:18:34', '0');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(20) NOT NULL,
  `rollno` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `fatheremail` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `rollno`, `name`, `email`, `phone`, `fatheremail`, `password`, `date`) VALUES
(25, 170280113, 'kalka', 'kalkaprasad59@gmail.com', '8957895494', 'rajiv89@gmail.com', 'kalka36016', '18/01/2021'),
(26, 170280117, 'Khushneet', 'khushneet.kumar.22@gmail.com', '7973034845', '170280117@sbsstc.ac.in', 'Khushneet39437', '19/01/2021'),
(27, 170280, 'navtej', 'er.navtejghumman@gmail.com', '8957895494', 'abc@gmail.com', 'navtej62412', '19/01/2021');

-- --------------------------------------------------------

--
-- Table structure for table `trainstaffdata`
--

CREATE TABLE `trainstaffdata` (
  `id` int(20) NOT NULL,
  `idno` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainstaffdata`
--

INSERT INTO `trainstaffdata` (`id`, `idno`, `date`, `name`) VALUES
(1, '17000', '2021-01-14', 'pawan');

-- --------------------------------------------------------

--
-- Table structure for table `trainstudentdata`
--

CREATE TABLE `trainstudentdata` (
  `id` int(20) NOT NULL,
  `rollno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainstudentdata`
--

INSERT INTO `trainstudentdata` (`id`, `rollno`, `name`) VALUES
(1, '170280110', 'jaspreet'),
(2, '170280131', 'nishant'),
(3, '170280111', 'ashish'),
(4, '1700', 'pawan'),
(5, '170280147', 'kushneet'),
(7, '170280090', 'arunima'),
(8, '170280117', 'Khushneet'),
(9, '170280', 'navtej');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raisereport`
--
ALTER TABLE `raisereport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffattendance`
--
ALTER TABLE `staffattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffdetails`
--
ALTER TABLE `staffdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentattendance`
--
ALTER TABLE `studentattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainstaffdata`
--
ALTER TABLE `trainstaffdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainstudentdata`
--
ALTER TABLE `trainstudentdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `raisereport`
--
ALTER TABLE `raisereport`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staffattendance`
--
ALTER TABLE `staffattendance`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffdetails`
--
ALTER TABLE `staffdetails`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentattendance`
--
ALTER TABLE `studentattendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `trainstaffdata`
--
ALTER TABLE `trainstaffdata`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainstudentdata`
--
ALTER TABLE `trainstudentdata`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
