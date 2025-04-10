-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 03:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbn`
--

-- --------------------------------------------------------

--
-- Table structure for table `carttable`
--

CREATE TABLE `carttable` (
  `CartID` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `ProductID` int(5) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `DateAddedtoCart` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoriestable`
--

CREATE TABLE `categoriestable` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customerstable`
--

CREATE TABLE `customerstable` (
  `CustomerID` int(5) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNumber` int(12) NOT NULL,
  `ShippingAddress` varchar(100) NOT NULL,
  `RegistrationDate` date NOT NULL,
  `LastLogin` date NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imagestable`
--

CREATE TABLE `imagestable` (
  `ImageID` int(11) NOT NULL,
  `ProductID` int(5) NOT NULL,
  `ImageURL` varchar(300) NOT NULL,
  `ImageAltText` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderstable`
--

CREATE TABLE `orderstable` (
  `OrderID` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `OrderDate` int(11) NOT NULL,
  `ShippingAddress` varchar(200) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `OrderStatus` int(11) NOT NULL,
  `PaymentMethod` int(11) NOT NULL,
  `TransactionID` int(11) NOT NULL,
  `Items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `ProductID` int(5) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `Description` varchar(60) NOT NULL,
  `Price` double(7,2) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Images` blob NOT NULL,
  `Date` int(11) NOT NULL,
  `Color` varchar(15) NOT NULL,
  `Size` text NOT NULL,
  `DateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviewstable`
--

CREATE TABLE `reviewstable` (
  `ReviewID` int(5) NOT NULL,
  `ProductID` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `Rating` double(1,1) NOT NULL,
  `ReviewText` varchar(150) NOT NULL,
  `DatePosted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carttable`
--
ALTER TABLE `carttable`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `categoriestable`
--
ALTER TABLE `categoriestable`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customerstable`
--
ALTER TABLE `customerstable`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `imagestable`
--
ALTER TABLE `imagestable`
  ADD PRIMARY KEY (`ImageID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `orderstable`
--
ALTER TABLE `orderstable`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `reviewstable`
--
ALTER TABLE `reviewstable`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carttable`
--
ALTER TABLE `carttable`
  MODIFY `CartID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoriestable`
--
ALTER TABLE `categoriestable`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerstable`
--
ALTER TABLE `customerstable`
  MODIFY `CustomerID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imagestable`
--
ALTER TABLE `imagestable`
  MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderstable`
--
ALTER TABLE `orderstable`
  MODIFY `OrderID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `ProductID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewstable`
--
ALTER TABLE `reviewstable`
  MODIFY `ReviewID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carttable`
--
ALTER TABLE `carttable`
  ADD CONSTRAINT `carttable_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `producttable` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carttable_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customerstable` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imagestable`
--
ALTER TABLE `imagestable`
  ADD CONSTRAINT `imagestable_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `producttable` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderstable`
--
ALTER TABLE `orderstable`
  ADD CONSTRAINT `orderstable_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customerstable` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `producttable`
--
ALTER TABLE `producttable`
  ADD CONSTRAINT `producttable_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `categoriestable` (`CategoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviewstable`
--
ALTER TABLE `reviewstable`
  ADD CONSTRAINT `reviewstable_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `producttable` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviewstable_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customerstable` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
