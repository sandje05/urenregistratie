-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 09:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urenregristratie`
--

-- --------------------------------------------------------

--
-- Table structure for table `activiteit`
--

CREATE TABLE `activiteit` (
  `ID_activity` int(11) NOT NULL,
  `Worker_id` int(11) NOT NULL,
  `activity` varchar(45) NOT NULL,
  `Activity_Hour` int(2) NOT NULL,
  `Done` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `Activity_date` date NOT NULL,
  `project_ ID_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medewerker`
--

CREATE TABLE `medewerker` (
  `ID_worker` int(11) NOT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Last_Name` varchar(45) DEFAULT NULL,
  `Level` int(1) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medewerker`
--

INSERT INTO `medewerker` (`ID_worker`, `Username`, `Password`, `Name`, `Last_Name`, `Level`) VALUES
(1, 'admin', '$2y$10$UFafvbFvEzC0hAT.4T9WZeDqx0Nf9jQeHNG5i1.i4Wpy3xQ/mKajW', 'admin', 'admin', 2);

-- --------------------------------------------------------


--
-- Indexes for dumped tables
--

--
-- Indexes for table `activiteit`
--
ALTER TABLE `activiteit`
  ADD PRIMARY KEY (`ID_activity`,`project_ ID_project`),
  ADD UNIQUE KEY `idactiviteit_UNIQUE` (`ID_activity`);

--
-- Indexes for table `medewerker`
--
ALTER TABLE `medewerker`
  ADD PRIMARY KEY (`ID_worker`),
  ADD UNIQUE KEY `ID_medewerker_UNIQUE` (`ID_worker`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `project`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activiteit`
--
ALTER TABLE `activiteit`
  MODIFY `ID_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `medewerker`
--
ALTER TABLE `medewerker`
  MODIFY `ID_worker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
