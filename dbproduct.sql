-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 12:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` varchar(10) NOT NULL,
  `AdminName` varchar(20) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `C-Date` date NOT NULL,
  `Mod-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `Location`, `C-Date`, `Mod-Date`) VALUES
('a1001', 'Natthaphon', 'Pathumthani', '2022-09-22', '2023-09-22'),
('a1002', 'chicken', 'bankok', '2020-09-15', '2021-09-25'),
('a1003', 'Bobby', 'Losangeles', '2015-09-30', '2016-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` varchar(10) NOT NULL,
  `Products` varchar(20) NOT NULL,
  `NumberofProduct` int(11) NOT NULL,
  `Price` float NOT NULL,
  `C-Date` date DEFAULT NULL,
  `Mod-Date` date DEFAULT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `Products`, `NumberofProduct`, `Price`, `C-Date`, `Mod-Date`, `Total`) VALUES
('c1001', 'champoo', 30, 199, '2016-09-10', '2017-09-10', 5970),
('c1002', 'conditioner', 15, 250, '2016-09-20', '2017-09-20', 3750),
('cc1003', 'washingpowder', 5, 69, '2016-09-25', '2017-09-25', 345);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` varchar(10) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `DataOfBirth` date NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Postcode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerName`, `Location`, `Email`, `DataOfBirth`, `CDate`, `ModDate`, `Postcode`) VALUES
('c2001', 'Natthaphon', 'Phathumthani', 'Nattapon@hotmail.com', '2012-09-16', '2016-09-30', '2017-09-30', 12120),
('c2002', 'Justin', 'LosAngeles', 'Justin@hotmail.com', '2017-09-25', '2022-09-30', '2023-09-30', 56789),
('c2003', 'monkey', 'Bankok', 'mon@hotmail.com', '2013-09-19', '2017-09-01', '2018-09-01', 11223),
('c2004', 'John', 'Canada', 'John2001@hotmail.com', '2022-09-16', '2022-09-13', '2022-09-11', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Iid` varchar(10) NOT NULL,
  `CustomerId` varchar(10) NOT NULL,
  `CartId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Iid`, `CustomerId`, `CartId`) VALUES
('v1001', 'c2001', 'cc1001'),
('v1002', 'c2002', 'cc1002'),
('v1003', 'c2003', 'cc1003'),
('v1004', 'c2004', 'cc1004'),
('v1005', 'c2005', 'cc1005');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LocationId` varchar(10) NOT NULL,
  `LocationName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocationId`, `LocationName`) VALUES
('L1001', 'Bankok'),
('L1002', 'Ayutthaya'),
('L1003', 'Pathumthani');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` varchar(10) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `ProductPrice` float NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductPrice`, `CDate`, `ModDate`, `Deleted`) VALUES
('p1001', 'champoo', 199, '2022-09-10', '2023-09-10', 0),
('p1002', 'conditioner', 250, '2022-09-25', '2023-09-25', 1),
('p1003', 'washingpowder', 69, '2021-08-18', '2022-08-18', 1),
('p1004', 'mama', 15, '2022-09-10', '2023-09-20', 0),
('p1005', 'milk', 20, '2023-09-01', '2023-09-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `PromotionId` varchar(10) NOT NULL,
  `Promotionname` varchar(20) NOT NULL,
  `Cdate` date NOT NULL,
  `Moddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`PromotionId`, `Promotionname`, `Cdate`, `Moddate`) VALUES
('p1001', 'โปรโมชั่น 8.8', '2022-09-15', '2023-09-15'),
('p1002', 'โปรโมชั่น 12.8', '2022-09-20', '2023-09-20'),
('p1003', 'โปรโมชั่นส่งฟรี', '2022-09-30', '2023-09-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Iid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LocationId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`PromotionId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
