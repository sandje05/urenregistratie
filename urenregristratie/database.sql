-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 10:24 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `medewerker_has_activiteit`
--

CREATE TABLE `medewerker_has_activiteit` (
  `Medewerker_ID_worker` int(11) NOT NULL,
  `activiteit_ID_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medewerker_has_project`
--

CREATE TABLE `medewerker_has_project` (
  `Medewerker_ID_worker` int(11) NOT NULL,
  `project_ ID_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  ` ID_project` int(11) NOT NULL,
  `Project_Naam` varchar(45) DEFAULT NULL,
  `Project_start` date DEFAULT NULL,
  `Project_deadline` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `medewerker_has_activiteit`
--
ALTER TABLE `medewerker_has_activiteit`
  ADD PRIMARY KEY (`Medewerker_ID_worker`,`activiteit_ID_activity`);

--
-- Indexes for table `medewerker_has_project`
--
ALTER TABLE `medewerker_has_project`
  ADD PRIMARY KEY (`Medewerker_ID_worker`,`project_ ID_project`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (` ID_project`),
  ADD UNIQUE KEY ` ID_project_UNIQUE` (` ID_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activiteit`
--
ALTER TABLE `activiteit`
  MODIFY `ID_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medewerker`
--
ALTER TABLE `medewerker`
  MODIFY `ID_worker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY ` ID_project` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
