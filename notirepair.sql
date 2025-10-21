-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2025 at 12:48 PM
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
-- Database: `testrepair`
--

-- --------------------------------------------------------

--
-- Table structure for table `notirepair`
--

CREATE TABLE `notirepair` (
  `NotirepairId` int(11) NOT NULL,
  `equipmentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `DateNotirepair` timestamp NOT NULL DEFAULT current_timestamp(),
  `DeatailNotirepair` text DEFAULT NULL,
  `zone` text DEFAULT NULL,
  `branch` text DEFAULT NULL,
  `JobId` text DEFAULT NULL,
  `dateJobReturnToBranch` datetime DEFAULT NULL,
  `StatusJobClosed` text NOT NULL DEFAULT '\'ยังไม่ปิดงาน\'',
  `dateReceiveFromBranch` datetime DEFAULT NULL,
  `ReciveStateFromBranch` text NOT NULL DEFAULT 'ยังไม่ได้รับของ',
  `dateSenttoSubplier` datetime DEFAULT NULL,
  `SupplierState` text NOT NULL DEFAULT 'ยังไม่เเจ้ง',
  `dateReceiveFromSubplier` datetime DEFAULT NULL,
  `TechnicailState` text NOT NULL DEFAULT 'ยังไม่ซ่อม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `notirepair`
--

INSERT INTO `notirepair` (`NotirepairId`, `equipmentId`, `userId`, `DateNotirepair`, `DeatailNotirepair`, `zone`, `branch`, `JobId`, `dateJobReturnToBranch`, `StatusJobClosed`, `dateReceiveFromBranch`, `ReciveStateFromBranch`, `dateSenttoSubplier`, `SupplierState`, `dateReceiveFromSubplier`, `TechnicailState`) VALUES
(230, 110, 0, '2025-10-07 10:32:58', 'd', 'chavanlak.p@ku.th', 'repaircentertgi@gmail.com', NULL, NULL, 'ยังไม่ปิดงาน', '2025-10-21 10:33:30', 'ได้รับของแล้ว', NULL, 'ยังไม่เเจ้ง', NULL, 'ยังไม่ซ่อม'),
(231, 110, 0, '2025-10-08 05:38:39', 'c', 'chavanlak.p@ku.th', 'repaircentertgi@gmail.com', NULL, NULL, 'ยังไม่ปิดงาน', NULL, 'ยังไม่ได้รับของ', NULL, 'ยังไม่เเจ้ง', NULL, 'ยังไม่ซ่อม'),
(232, 110, 0, '2025-10-08 05:40:53', 'con', 'chavanlak.p@ku.th', 'repaircentertgi@gmail.com', NULL, NULL, 'ยังไม่ปิดงาน', NULL, 'ยังไม่ได้รับของ', NULL, 'ยังไม่เเจ้ง', NULL, 'ยังไม่ซ่อม'),
(233, 110, 0, '2025-10-08 05:44:16', 'dddd', 'chavanlak.p@ku.th', 'repaircentertgi@gmail.com', NULL, NULL, 'ยังไม่ปิดงาน', NULL, 'ยังไม่ได้รับของ', NULL, 'ยังไม่เเจ้ง', NULL, 'ยังไม่ซ่อม');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notirepair`
--
ALTER TABLE `notirepair`
  ADD PRIMARY KEY (`NotirepairId`),
  ADD KEY `equipmentId` (`equipmentId`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notirepair`
--
ALTER TABLE `notirepair`
  MODIFY `NotirepairId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notirepair`
--
ALTER TABLE `notirepair`
  ADD CONSTRAINT `notirepair_ibfk_1` FOREIGN KEY (`equipmentId`) REFERENCES `equipment` (`equipmentId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
