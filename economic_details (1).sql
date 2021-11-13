-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 11:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `economic_freedom`
--

-- --------------------------------------------------------

--
-- Table structure for table `economic details`
--

CREATE TABLE `economic details` (
  `ID` int(11) NOT NULL,
  `Country name` varchar(56) NOT NULL,
  `RegionID` int(11) NOT NULL,
  `World Rank` int(10) UNSIGNED NOT NULL,
  `Region Rank` int(10) UNSIGNED NOT NULL,
  `2020 score` float NOT NULL,
  `Property rights` float NOT NULL,
  `Judicial Effectiveness` float NOT NULL,
  `Government Integrity` float NOT NULL,
  `Tax Burden` float NOT NULL,
  `Govt Spending` float NOT NULL,
  `Fiscal Health` float NOT NULL,
  `Business Freedom` float NOT NULL,
  `Labor Freedom` float NOT NULL,
  `Monetary Freedom` float NOT NULL,
  `Trade Freedom` float NOT NULL,
  `Investment Freedom` float NOT NULL,
  `Financial Freedom` float NOT NULL,
  `Income Tax Rate %` float NOT NULL,
  `Corporate Tax Rate %` float NOT NULL,
  `Tax Burden % of GDP` float NOT NULL,
  `Gov't Expenditure % of GDP` float NOT NULL,
  `Population (Millions)` float NOT NULL,
  `Inflation %` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `economic details`
--
ALTER TABLE `economic details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RegionID` (`RegionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `economic details`
--
ALTER TABLE `economic details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
