-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 07:50 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Category`) VALUES
(0, 'Camera'),
(1, 'Computer'),
(2, 'Phone'),
(3, 'TV'),
(4, 'Video Game');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `ItemName` text NOT NULL,
  `ItemDesc` text NOT NULL,
  `ItemPrice` double NOT NULL,
  `ImagePath` text NOT NULL,
  `CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `ItemName`, `ItemDesc`, `ItemPrice`, `ImagePath`, `CategoryID`) VALUES
(0, 'Canon DSLR Camera', 'Canon - EOS Rebel T6i DSLR Camera with EF-S 18-55mm IS STM Lens - Black\r\n', 599.99, 'assets/images/cameras/canon-camera.jpg', 0),
(1, 'Nikon DSLR Camera\r\n', 'Nikon - D5600 DSLR Camera with AF-P DX NIKKOR 18-55mm f/3.5-5.6G VR Lens - Black\r\n', 749.99, 'assets/images/cameras/nikon.jpg', 0),
(2, 'Sony DSLR Camera\r\n', 'Sony - a77 II DSLR Camera (Body Only) - Black\r\n', 1499.99, 'assets/images/cameras/sony.jpg', 0),
(3, 'Lenovo Laptop\r\n', 'Lenovo - 15.6\" Laptop - AMD A6-Series -4GB Memory - 500GB Hard Drive - Black\r\n', 279.99, 'assets/images/laptops/lenovo.jpg', 1),
(4, 'Dell Laptop', 'Dell - Inspiron 15.6\" Touch-Screen Laptop - Intel Core i5 - 8GB Memory - 2TB Hard Drive - Black\r\n', 529.99, 'assets/images/laptops/dell.jpg', 1),
(5, 'HP Laptop\r\n', 'ENVY x360 2-in-1 15.6\" Touch-Screen Laptop - Intel Core i7 - 16GB Memory - 1TB Hard Drive - Natural Silver\r\n', 949.99, 'assets/images/laptops/hp.jpg', 1),
(6, 'Apple iPhone X', 'Apple - iPhone X 64GB - 5.8-inch Super Retina HD display with HDR - Space Gray\r\n', 999.99, 'assets/images/phones/iphone.jpg', 2),
(7, 'Samsung Galaxy S8\r\n', 'Samsung - Galaxy S8 64GB - AMOLED 5.8-inch screen - 12MP dual camera - Midnight Black\r\n', 576.99, 'assets/images/phones/galaxy.jpg', 2),
(8, 'Sony TV', 'Sony - 50\" Class(49.5\" Diag.) - LED - 2160p - Smart - 4K Ultra HD TV\r\n', 599.99, 'assets/images/tvs/sony.jpg', 3),
(9, 'LG TV\r\n', 'LG - 55\" Class (54.6\" Diag.) - LED - 2160p - Smart - 4K Ultra HD TV\r\n', 699.99, 'assets/images/tvs/LG.jpg', 3),
(10, 'Samsung TV\r\n', 'Samsung - 40\" Class (39.9 Diag.) - LED - 2160p - Smart - 4k Ultra HD TV\r\n', 549.99, 'assets/images/tvs/samsung.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
