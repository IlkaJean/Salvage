-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2021 at 11:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salvage`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE `Admins` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admins`
--

INSERT INTO `Admins` (`userId`, `username`, `password`) VALUES
(1, 'mhayes', '4eac635cfc0f098affd9cb743533e409'),
(2, 'senglish', '91da8931fa92c94a83605c84d5b53f31'),
(3, 'jpollard', '44364555b28ee6d347ef0a72a8ddd754'),
(4, 'glande', '4eac635cfc0f098affd9cb743533e409'),
(5, 'sarahj', 'eb252aa7d8aab49051f92055ab54f531'),
(6, 'katej', 'af9f870f389271cd5b6b8f06de86719a'),
(7, 'abbied', '746ffff4d0416171e7aeac162f8ac9eb'),
(8, 'karenv', 'a491781f5d10cfbacc619e583e8865af'),
(9, 'baileyt', '423500c8a8d30eed5dad56f1b3c27c11'),
(10, 'peterp', '7ea143b668101813005620caa0b980c3');

-- --------------------------------------------------------

--
-- Table structure for table `Departments`
--

CREATE TABLE `Departments` (
  `Id` int(11) NOT NULL,
  `pId` smallint(11) NOT NULL,
  `dep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Departments`
--

INSERT INTO `Departments` (`Id`, `pId`, `dep`) VALUES
(1, 0, 'Clothing'),
(2, 1, 'Clothing'),
(3, 2, 'Clothing'),
(4, 3, 'Clothing'),
(5, 4, 'Clothing'),
(6, 5, 'Clothing'),
(7, 6, 'Clothing'),
(8, 7, 'Clothing'),
(9, 8, 'Clothing'),
(10, 9, 'Clothing'),
(11, 10, 'Clothing'),
(12, 11, 'Clothing'),
(13, 12, 'Clothing'),
(15, 13, 'Clothing'),
(16, 14, 'Clothing'),
(17, 15, 'Clothing'),
(18, 16, 'Clothing'),
(19, 17, 'Clothing'),
(20, 18, 'Clothing'),
(21, 18, 'Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `Donations`
--

CREATE TABLE `Donations` (
  `dId` int(11) NOT NULL,
  `zip` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Donations`
--

INSERT INTO `Donations` (`dId`, `zip`, `email`) VALUES
(1, 30339, 'jb@gmail.com'),
(2, 30123, 'jane32@gmail.com'),
(3, 30080, 'phil@yahoo.com'),
(4, 30060, 'brenda45@yahoo.com'),
(5, 30325, 'blondegirl@gmail.com'),
(6, 30000, 'highschooldropout@yahoo.com'),
(7, 30339, 'jdaniel@gmail.com'),
(8, 30339, 'willjohn@gmail.com'),
(9, 30339, 'jb@gmail.com'),
(10, 30309, 'jamiewei@gmail'),
(11, 90201, 'sarajp@gmail.com'),
(12, 123245, 'ilkajean95@gmail.com'),
(13, 30339, 'ilkajean95@gmail.com'),
(14, 30123, 'sheu@sheu.com'),
(15, 30123, 'ilkajean95@gmail.com'),
(16, 30123, 'ilkajean95@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `orderId` int(11) NOT NULL,
  `itemId` smallint(6) NOT NULL,
  `quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`orderId`, `itemId`, `quant`) VALUES
(1, 16, 1),
(4, 4, 1),
(5, 2, 3),
(6, 16, 4),
(7, 1, 1),
(8, 1, 4),
(9, 3, 3),
(10, 11, 2),
(11, 6, 1),
(12, 0, 1),
(13, 1, 1),
(14, 0, 1),
(15, 16, 1),
(16, 0, 1),
(17, 1, 1),
(18, 11, 1),
(19, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ProductDetails`
--

CREATE TABLE `ProductDetails` (
  `ID` int(11) NOT NULL,
  `pId` smallint(6) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ProductDetails`
--

INSERT INTO `ProductDetails` (`ID`, `pId`, `Color`, `Size`) VALUES
(1, 16, 'Green', 'SMALL'),
(2, 0, 'Peach', 'Medium'),
(3, 0, 'Peach', 'SMALL'),
(4, 0, 'Peach', 'Large'),
(5, 3, 'White', 'SMALL'),
(6, 3, 'White', 'Large'),
(7, 3, 'White', 'X-SMALL'),
(8, 4, 'White', 'Small'),
(9, 10, 'Black', 'Small'),
(10, 10, 'Black', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `productId` smallint(6) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productCat` varchar(255) NOT NULL,
  `productImg` text NOT NULL,
  `productQuant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`productId`, `productName`, `productPrice`, `productCat`, `productImg`, `productQuant`) VALUES
(0, 'Pink Princess Dress', 100.45, 'Dresses', 'img/pinkdress.png', 9),
(1, 'Hello Summer', 40.39, 'Skirts', 'img/yellowsk.png', 27),
(2, 'Hello Spring', 30.11, 'Skirts', 'img/pinksk.png', 4),
(3, 'White Summer', 45.99, 'Dresses', 'img/whitedress.png', 16),
(4, 'Polka', 60.51, 'Dresses', 'img/bwdress.png', 27),
(5, 'Trim Plaid', 50.11, 'Skirts', 'img/preppysk.png', 80),
(6, 'Wrap Dress', 40.81, 'Dresses', 'img/wrpdress.png', 42),
(7, 'White Strapless Blouse', 20.75, 'Tops', 'img/whitebl.png', 10),
(8, 'White Crop Blouse', 25.41, 'Tops', 'img/whitebl2.png', 59),
(9, 'White Blouse', 35.99, 'Tops', 'img/whitebl3.png', 12),
(10, 'Black Slacks', 42.34, 'Pants', 'img/blpants.png', 15),
(11, 'Classic Blue Jeans', 37.57, 'Pants', 'img/jeans.png', 19),
(12, 'Jean Jacket', 41.67, 'Outwear', 'img/outwear.png', 4),
(13, 'Brown Jacket', 111.57, 'Outwear', 'img/outwear2.png', 20),
(14, 'Trench Coat', 111.57, 'Outwear', 'img/outwear3.png', 56),
(15, 'Jean Mini', 31.47, 'Skirts', 'img/blsk.png', 34),
(16, 'Green Skirt', 38.99, 'Skirts', 'img/greensk.png', 99),
(17, 'Red Dress', 50.00, 'Dresses', '/img/reddress.png', 20),
(18, 'Green Pants', 40.45, 'Pants', '/img/gpants.png', 120);

-- --------------------------------------------------------

--
-- Table structure for table `Suppliers`
--

CREATE TABLE `Suppliers` (
  `ID` int(11) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pId` smallint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Suppliers`
--

INSERT INTO `Suppliers` (`ID`, `CompanyName`, `email`, `pId`) VALUES
(1, 'Sara Heu', 'sheu@sheu.com', 16),
(2, 'Kate Spears', 'spears@gmail.com', 4),
(3, 'Beaken ', 'beaken@gmail.com', 3),
(4, 'Zada', 'zada@gmail.com', 5),
(5, 'Kollers Pears', 'kpears@gmail.com', 11),
(6, 'Maca', 'maca@gmail.com', 10),
(7, 'Grada', 'grada@gmail.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `Departments`
--
ALTER TABLE `Departments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pId` (`pId`);

--
-- Indexes for table `Donations`
--
ALTER TABLE `Donations`
  ADD PRIMARY KEY (`dId`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `quant` (`quant`),
  ADD KEY `itemId` (`itemId`);

--
-- Indexes for table `ProductDetails`
--
ALTER TABLE `ProductDetails`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `pId` (`pId`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `Suppliers`
--
ALTER TABLE `Suppliers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `pId` (`pId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admins`
--
ALTER TABLE `Admins`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Departments`
--
ALTER TABLE `Departments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `Donations`
--
ALTER TABLE `Donations`
  MODIFY `dId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ProductDetails`
--
ALTER TABLE `ProductDetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Suppliers`
--
ALTER TABLE `Suppliers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Departments`
--
ALTER TABLE `Departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `Products` (`productId`);

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`itemId`) REFERENCES `Products` (`productId`);

--
-- Constraints for table `ProductDetails`
--
ALTER TABLE `ProductDetails`
  ADD CONSTRAINT `productdetails_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `Products` (`productId`);

--
-- Constraints for table `Suppliers`
--
ALTER TABLE `Suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `Products` (`productId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
