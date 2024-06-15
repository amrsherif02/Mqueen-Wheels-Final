-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 11:04 PM
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
-- Database: `mcqueenwheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`, `fullName`, `email`) VALUES
(1, '123', 'Ahmed Gamal', 'ahmedgamal@gmail.com'),
(2, '456', 'Youssef Fouad', 'yousseffouad2003@gmail.com'),
(3, '879', 'Kalala Gad', 'hgdhdjh3636@gmail.com'),
(4, '153', 'Mohamed Ramadan', 'number1@gmail.com'),
(5, '125', 'Tarek Lotfy', 'ala@gmail.com'),
(6, '12', 'Body Mostafa', 'xbody@gmail.com'),
(7, '123', 'Eissa Elwazan', 'yalabena@gmail.com'),
(8, '123', 'Ahmed Elawady', 'abyad3alabyad@gmail.com'),
(9, '123', 'Fadwa Prince', 'omry@gmail.com'),
(10, '123', 'Gafaar Elomda', 'mohamedsamy@gmail.com'),
(11, '123', 'Ramez Galal', 'negmelyoutube@gmail.com'),
(18, '$2y$10$dJpD.lQz6vPNBcN20vO3XedwSnT6NeVZpBuK9Npfd64LSzqdeYgYW', 'Fareed', 'Fareed@gmail.com'),
(19, '$2y$10$Wr7el7rZchaXrY/VkZb34OMrdWKX5MIpO1kCRkBgB88jcUbxXgoky', 'Omar Sutlan', 'sultan@gmail.com'),
(20, '$2y$10$Ac0ZWg8/KsYo65aP0sKyqOGcKMOrAUyCVjTHkxWjW2TqFLbVhO4YO', 'Amr Sherif', 'taftaf@gmail.ocm');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carModel` varchar(255) NOT NULL,
  `designDesc1` text NOT NULL,
  `designDesc2` text NOT NULL,
  `innovationDesc` text NOT NULL,
  `performanceDesc` text NOT NULL,
  `videoUrl1` text NOT NULL,
  `videoUrl2` text NOT NULL,
  `imageUrl1` text NOT NULL,
  `imageUrl2` text NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `photo3` text NOT NULL,
  `photo4` text NOT NULL,
  `photo5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carModel`, `designDesc1`, `designDesc2`, `innovationDesc`, `performanceDesc`, `videoUrl1`, `videoUrl2`, `imageUrl1`, `imageUrl2`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`) VALUES
('AMG', 'AMG GTS ipsum dolor sit amet, consectetuer adipiscing elit.         //  Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus          //  et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,          //  ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.', 'AMG GTS ipsum dolor sit amet, consectetuer adipiscing elit.         //  Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus          //  et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,          //  ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.', 'Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,          // dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.', 'Biturbo torque, from a V8 or V12, is apportioned to all four wheels with          // constantly calculated precision. Changing weather or winding road, 4MATIC® sends power to          // the wheels that can use it best.', 'images/GTSvid.MP4', 'images/GTSvid1.MP4', 'images/GTSimg1.jpg', 'images/GTSimg2.jpeg', 'images/GTSslider1.jpg', 'images/GTSslider2.jpg', 'images/GTSslider3.jpg', 'images/GTSslider4.jpg', 'images/GTSslider5.jpg'),
('G Class', 'G Class Joe shimmer. Pillar emblems glow. Paintwork         and chrome accentuate flowing lines and a         confident stance. The cabin is the work         of 16,000 needles in unison, and         several pairs of expert hands.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus           et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,           ultricies nec, pellentesque eu, pretium quis, sem.', 'Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,          dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.', 'Biturbo torque, from a V8 or V12, is apportioned to all four wheels with          constantly calculated precision. Changing weather or winding road, 4MATIC® sends power to          the wheels that can use it best.', 'images/Gclassvid.MP4', 'images/GclassNew.mp4', 'images/Gclassimg.png', 'images/Gclassimg2.png', 'images/GclassSlider1.png', 'images/GclassSlider2.png', 'images/GclassSlider3.png', 'images/GclassSlider4.png', 'images/GclassSlider5.png'),
('GLS', 'GLS 600 ipsum dolor sit amet, consectetuer adipiscing elit.\r\n         Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \r\n         et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, \r\n         ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.', 'GLS 600 ipsum dolor sit amet, consectetuer adipiscing elit.\r\n         Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \r\n         et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, \r\n         ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.', 'Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, \r\n        dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.', 'Biturbo torque, from a V8 or V12, is apportioned to all four wheels with \r\n        constantly calculated precision. Changing weather or winding road, 4MATIC® sends power to \r\n        the wheels that can use it best.', 'images/GLSvid1.MP4', 'images/GLSvid2.mp4', 'images/GLS600img1.jpg', 'images/GLS600img2.jpg', 'images/GLS600slider1.jpg', 'images/GLS600slider2.jpg', 'images/GLS600slider3.jpg', 'images/GLS600slider4.jpg', 'images/GLS600slider5.jpg'),
('S Class', 'G Class this car shimmer. Pillar emblems glow. Paintwork and chrome accentuate flowing lines and a confident stance. The cabin is the work of 16,000 needles in unison, and several pairs of expert hands.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 'Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.', 'Biturbo torque, from a V8 or V12, is apportioned to all four wheels with constantly calculated precision. Changing weather or winding road, 4MATIC® sends power to the wheels that can use it best.', 'images/merVid4.MP4', 'images/ambientlight.mp4', 'images/Rectangle27.png', 'images/benzo.png', 'images/int1.jpg', 'images/int2.jpg', 'images/int3.jpg', 'images/680x.jpg', 'images/myb1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `FullName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `phoneNumber`, `Email`, `FullName`) VALUES
(1, '01097534186', 'computing@gmail.com', 'Mostafa Salama'),
(2, '0541205276', 'informationsystem@gmail.com', 'Yasmine Afify'),
(3, '010295375', 'sa2a@gmail.com', 'Mona Zaky'),
(4, '01029537545', 'bahebek@gmail.com', 'Nagala Badr'),
(5, '0119500375', 'ethadsedelbalad@gmail.com', 'Adel Shakal'),
(6, '0123468599', 'king@gmail.com', 'Mohamed Monir'),
(7, '0118543399', 'amo@gmail.com', 'Ammar Yasser'),
(8, '0119557439', 'yaam3ady@gmail.com', 'Zeina Sayed'),
(9, '0114563399', 'reda@gmail.com', 'Mona Mamdouh'),
(10, '05499600', 'workman2050@gmail.com', 'Mohamed Fouad '),
(11, '01024639700', 'shakwat@gmail.com', 'Omar Shawkat'),
(12, '01095727598356', 'doda@gmail.com', 'Khaled Sherif'),
(13, '01019202935', 'bino@gmail.com', 'Bino Salah'),
(14, '01024639700', 'sarah@gmail.com', 'Sarah Mohamed'),
(15, '01024639700', 'janjon@gmail.com', 'Jana Mosatafa'),
(16, '01024639700', 'rou@gmail.com', 'Roaa Mohamed'),
(19, '01097534186', 'vp@gmail.com', 'Joe Vp'),
(20, '01097534186', 'j@gmail.com', 'Joey'),
(21, '01024639700', 'lkhnb@gmail.com', 'hgfds'),
(22, '01097534186', 'gemz@gmail.com', 'gemz'),
(23, '01097534186', 'sarah@gmail.com', 'Omar Shawkat'),
(26, '01097534186', 'anio@gmail.com', 'Anir Konsowa'),
(27, '01097534186', 'k@gmail.com', 'Kamal'),
(29, '01097534186', 'anio@gmail.com', 'Anir Konsowa'),
(30, '01097534186', 'anio@gmail.com', 'Anir Konsowa'),
(31, '', '', ''),
(32, '01097534186', 'dfr@gmail.com', 'Amr sherif');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `maintenanceID` int(11) NOT NULL,
  `carBrand` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `modelYear` varchar(100) NOT NULL,
  `carModel` varchar(100) NOT NULL,
  `kilometer` varchar(100) NOT NULL,
  `customerID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`maintenanceID`, `carBrand`, `color`, `modelYear`, `carModel`, `kilometer`, `customerID`) VALUES
(1, 'Toyota', 'White', '2020', 'Yaris', '20000', 1),
(2, 'Honda', 'Dark Grey', '2021', 'Accord', '520000', 1),
(3, 'Toyota', 'Silver', '2015', 'Corolla', '80000', 2),
(4, 'Skoda', 'Green', '2002', 'Octavia', '90000', 3),
(5, 'Volkswagon', 'Black', '2016', 'Sheroko', '120000', 4),
(6, 'Mercedes', 'Black', '2016', 'E-Class', '220000', 5),
(7, 'Kia', 'Silver', '2020', 'Stinger', '60000', 6),
(8, 'Ford', 'Blue', '2015', 'Mustang', '110000', 7),
(13, 'Hyudnai', 'white', '2015', 'elantra', '200000', 12),
(14, 'Audi', 'red', '2023', 'a3', '30000', 13),
(15, 'BYD', 'Red', '2012', 'F3', '356789', 32);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rentID` int(11) NOT NULL,
  `carBrand` varchar(100) NOT NULL,
  `numOfDay` int(100) NOT NULL,
  `totalPrice` int(255) NOT NULL,
  `customerID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rentID`, `carBrand`, `numOfDay`, `totalPrice`, `customerID`) VALUES
(1, 'Mercedes G63 Brabus', 2, 10000, 1),
(2, 'Porsche 911 Turbo S Mansory', 3, 10500, 2),
(3, 'Porsche Mcqueen GT3RS', 3, 9000, 3),
(4, 'Mercedes G63 Brabus', 4, 20000, 4),
(5, 'Rolls-Royce Phantom Mansory', 1, 6000, 5),
(6, 'Mercedes S680 Maybach', 4, 22000, 6),
(7, 'Mercedes G63 Brabus', 5, 25000, 7),
(8, 'Rolls-Royce Phantom Mansory', 3, 18000, 8),
(9, 'Porsche 911 Turbo S Mansory', 5, 17500, 9),
(17, 'Porsche Mcqueen GT3RS', 2, 6000, 22),
(21, 'Porsche Mcqueen GT3RS', 2, 6000, 26),
(22, 'Mercedes G63 Brabus', 2, 10000, 27),
(24, 'Mercedes S680 Maybach', 2, 11000, 29);

-- --------------------------------------------------------

--
-- Table structure for table `sellcar`
--

CREATE TABLE `sellcar` (
  `sell_ID` int(11) NOT NULL,
  `carBrand` varchar(100) NOT NULL,
  `carModel` varchar(100) NOT NULL,
  `modelYear` varchar(100) NOT NULL,
  `kilometer` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `customerID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellcar`
--

INSERT INTO `sellcar` (`sell_ID`, `carBrand`, `carModel`, `modelYear`, `kilometer`, `color`, `transmission`, `customerID`) VALUES
(1, 'Mercedes', 'C180', '2022', '10000', 'White', 'Automatic', 1),
(2, 'Mercedes', 'C63', '2023', '14000', 'Black', 'Automatic', 2),
(3, 'Mercedes', 's450', '2022', '10000', 'White', 'Automatic', 3),
(4, 'BMW', 'Z4', '2024', '1000', 'Blue', 'Automatic', 5),
(5, 'Maserattie', 'mx8', '2022', '14000', 'Red', 'Automatic', 6),
(6, 'Porche', 'Panemera', '2023', '5000', 'Brown', 'Automatic', 7),
(7, 'Mercedes', 'E300', '2024', '10000', 'White', 'Automatic', 8),
(8, 'BMW', 'X6', '2023', '8000', 'red', 'Automatic', 9),
(9, 'Mercedes', 'S580', '2022', '12000', 'Black', 'Automatic', 10),
(12, 'Audi', 'A3', '2019', '45630', 'Red', '', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carModel`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`maintenanceID`),
  ADD KEY `fk_maintenance_customer` (`customerID`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rentID`),
  ADD KEY `fk_rent_customer` (`customerID`);

--
-- Indexes for table `sellcar`
--
ALTER TABLE `sellcar`
  ADD PRIMARY KEY (`sell_ID`),
  ADD KEY `fk_sellcar_customer` (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `maintenanceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sellcar`
--
ALTER TABLE `sellcar`
  MODIFY `sell_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `fk_maintenance_customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `fk_rent_customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `sellcar`
--
ALTER TABLE `sellcar`
  ADD CONSTRAINT `fk_sellcar_customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
