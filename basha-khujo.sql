-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 03:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basha-khujo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(50) NOT NULL,
  `Full_Name` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Full_Name`, `username`, `password`, `email`) VALUES
(1, 'Tasbiul Hasan', 'tasbiul', '12345', 'tasbiul.hasan@northsouth.edu'),
(2, 'Pranab Roy', 'pranab', '12345', 'pranabroy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `basha_info`
--

CREATE TABLE `basha_info` (
  `id` int(255) NOT NULL,
  `basha_title` varchar(255) NOT NULL,
  `basha_cost` varchar(255) NOT NULL,
  `basha_room` int(255) NOT NULL,
  `basha_bath` int(255) NOT NULL,
  `basha_space` int(255) NOT NULL,
  `basha_location` varchar(255) NOT NULL,
  `basha_images` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basha_info`
--

INSERT INTO `basha_info` (`id`, `basha_title`, `basha_cost`, `basha_room`, `basha_bath`, `basha_space`, `basha_location`, `basha_images`, `description`) VALUES
(9, 'vava', '121', 21, 21, 211, 'vsdvv', 'pic-4-1662632271.png', 'sbsb'),
(10, 'Modern Hostel', '10000', 1, 1, 500, 'Bak Tailor Wisma Yakin', 'img-6.jpg', 'Its good'),
(11, 'Modern Hostel', '10000', 1, 1, 500, 'Bak Tailor Wisma Yakin', 'img-6-1662633025.jpg', 'Its good'),
(12, 'Modern Hostel', '10000', 1, 1, 500, 'Bak Tailor Wisma Yakin', 'img-6-1662633032.jpg', 'Its good'),
(13, 'olive', '1', 1, 1, 1, 'vvaa', 'pranab.jpg', 'vava');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int(255) NOT NULL,
  `roomNumber` int(255) NOT NULL,
  `baths` int(255) NOT NULL,
  `feet` int(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `title`, `description`, `cost`, `roomNumber`, `baths`, `feet`, `location`) VALUES
(1, 'Bachelor', 'Dididididi', 2000, 1, 1, 500, 'Dhanmondi'),
(2, 'Bachelor', 'Dididididi', 2000, 1, 1, 500, 'Dhanmondi'),
(3, 'Bachelor', 'Dididididi', 22000, 2, 3, 1500, 'Dhanmondi');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup_info`
--

CREATE TABLE `user_signup_info` (
  `id` int(50) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Mobile_Number` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_signup_info`
--

INSERT INTO `user_signup_info` (`id`, `FirstName`, `Email`, `Mobile_Number`, `password`, `nid`) VALUES
(2, 'Anik', 'anikmajumdar01@gmail.com', '0174854155', '12345', 0),
(4, 'Tasbiul ', 'tasbiul@gmail.com', '0174855410', 'olive', 0),
(5, 'Miraj', 'miraj@gmail.com', '4449494', 'miraj', 0),
(6, 'Anik', 'anikmajumdar01@gmail.com', '014884', 'olive', 0),
(7, 'Pranab', 'pranab@gmail.om', '46499', '123646', 0),
(8, 'Abreshmi', 'abreshmi@gmail.com', '736376373', '123', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basha_info`
--
ALTER TABLE `basha_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup_info`
--
ALTER TABLE `user_signup_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `basha_info`
--
ALTER TABLE `basha_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_signup_info`
--
ALTER TABLE `user_signup_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
