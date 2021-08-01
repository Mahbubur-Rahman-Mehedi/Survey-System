-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 01:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `survey` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `userid`, `length`, `survey`) VALUES
(1, '1', 3, '{\"0\":{\"type\":\"3\",\"name\":\"name?\",\"option\":{},\"optionLength\":\"2\"},\"1\":{\"type\":\"2\",\"name\":\"Gender?\",\"option\":{\"0\":\"m\",\"1\":\"f\",\"2\":\"others\"},\"optionLength\":\"3\"},\"2\":{\"type\":\"1\",\"name\":\"hobby\",\"option\":{\"0\":\"tv\",\"1\":\"crckt\",\"2\":\"ftbl\"},\"optionLength\":\"3\"},\"Survey_name\":\"check\"}');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
