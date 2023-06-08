-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 11:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydiary`
--

-- --------------------------------------------------------

--
-- Table structure for table `myworks`
--

CREATE TABLE `myworks` (
  `id_work` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `desc` varchar(280) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myworks`
--

INSERT INTO `myworks` (`id_work`, `title`, `subject`, `desc`, `status`) VALUES
(1, 'Laravel', 'Basics', 'Cover important basics', 1),
(2, 'Core Php', 'Simple Basics & Theory', 'Cover important basics', 0),
(3, 'Vanila Ajax', 'Concept', 'Understand Code', 0),
(4, 'WordPress', 'Just Practice', 'understand all options', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projectdetails`
--

CREATE TABLE `projectdetails` (
  `id_detproj` int(11) NOT NULL,
  `id_proj` int(11) NOT NULL,
  `tasks_detproj` varchar(55) NOT NULL,
  `status_detproj` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id_proj` int(11) NOT NULL,
  `title_proj` varchar(55) NOT NULL,
  `subject_proj` varchar(55) NOT NULL,
  `language_proj` varchar(55) NOT NULL,
  `desc_proj` varchar(55) NOT NULL,
  `status_proj` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id_proj`, `title_proj`, `subject_proj`, `language_proj`, `desc_proj`, `status_proj`) VALUES
(1, 'Life Works', 'Daily routine schedules management system', 'laravel', 'v. 8.2,', 1);

-- --------------------------------------------------------

--
-- Table structure for table `remainwork`
--

CREATE TABLE `remainwork` (
  `id_remain` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  `task` varchar(100) NOT NULL,
  `reason` varchar(55) NOT NULL,
  `status_remain` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `remainwork`
--

INSERT INTO `remainwork` (`id_remain`, `id_work`, `task`, `reason`, `status_remain`) VALUES
(1, 1, 'Crud', 'Functionalities', 1),
(2, 1, 'Models', 'Important', 0),
(3, 1, 'Auth Login', 'Important', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myworks`
--
ALTER TABLE `myworks`
  ADD PRIMARY KEY (`id_work`);

--
-- Indexes for table `projectdetails`
--
ALTER TABLE `projectdetails`
  ADD PRIMARY KEY (`id_detproj`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_proj`);

--
-- Indexes for table `remainwork`
--
ALTER TABLE `remainwork`
  ADD PRIMARY KEY (`id_remain`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myworks`
--
ALTER TABLE `myworks`
  MODIFY `id_work` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projectdetails`
--
ALTER TABLE `projectdetails`
  MODIFY `id_detproj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_proj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `remainwork`
--
ALTER TABLE `remainwork`
  MODIFY `id_remain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
