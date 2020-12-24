-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 03:44 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `000793456`
--

-- --------------------------------------------------------

--
-- Table structure for table `stockupdates`
--

CREATE TABLE `stockupdates` (
  `StockId` int(11) NOT NULL,
  `StockName` varchar(60) NOT NULL,
  `CurrentPrice` int(11) NOT NULL,
  `UpdateDateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockupdates`
--

INSERT INTO `stockupdates` (`StockId`, `StockName`, `CurrentPrice`, `UpdateDateTime`) VALUES
(582, 'Apple', 262, '2020-04-06'),
(583, 'Microsoft', 165, '2020-04-08'),
(584, 'Amazon', 1997, '2020-04-07'),
(585, 'Coco Cola', 46, '2020-04-01'),
(586, 'Disney', 99, '2020-04-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stockupdates`
--
ALTER TABLE `stockupdates`
  ADD PRIMARY KEY (`StockId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stockupdates`
--
ALTER TABLE `stockupdates`
  MODIFY `StockId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=613;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
