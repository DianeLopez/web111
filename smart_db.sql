-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 04:25 PM
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
-- Database: `smart_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cristinaaddappliances`
--

CREATE TABLE `cristinaaddappliances` (
  `appliances_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cristinaaddappliances`
--

INSERT INTO `cristinaaddappliances` (`appliances_name`) VALUES
('Electric Fan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `diningaddappliances`
--

CREATE TABLE `diningaddappliances` (
  `appliances_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diningaddappliances`
--

INSERT INTO `diningaddappliances` (`appliances_name`) VALUES
('Electric Fan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `jericoaddappliances`
--

CREATE TABLE `jericoaddappliances` (
  `appliances_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jericoaddappliances`
--

INSERT INTO `jericoaddappliances` (`appliances_name`) VALUES
('Air Conditioner\r\n'),
('Television\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `joeaddappliances`
--

CREATE TABLE `joeaddappliances` (
  `appliances_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joeaddappliances`
--

INSERT INTO `joeaddappliances` (`appliances_name`) VALUES
('Electric Fan\r\n'),
('Television\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kathleenaddappliances`
--

CREATE TABLE `kathleenaddappliances` (
  `appliances_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kathleenaddappliances`
--

INSERT INTO `kathleenaddappliances` (`appliances_name`) VALUES
('Electric Fan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kitchenaddappliances`
--

CREATE TABLE `kitchenaddappliances` (
  `appliances_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchenaddappliances`
--

INSERT INTO `kitchenaddappliances` (`appliances_name`) VALUES
('Blender\r\n'),
('Dishwasher\r\n'),
('Kettle\r\n'),
('Microwave Oven\r\n'),
('Refrigerator\r\n'),
('Rice Cooker\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `livingaddappliances`
--

CREATE TABLE `livingaddappliances` (
  `appliances_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livingaddappliances`
--

INSERT INTO `livingaddappliances` (`appliances_name`) VALUES
('Electric Fan\r\n'),
('Television\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rovicaddappliances`
--

CREATE TABLE `rovicaddappliances` (
  `appliances_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rovicaddappliances`
--

INSERT INTO `rovicaddappliances` (`appliances_name`) VALUES
('Air Conditioner\r\n'),
('Television\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `saddrooms`
--

CREATE TABLE `saddrooms` (
  `rooms_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saddrooms`
--

INSERT INTO `saddrooms` (`rooms_name`) VALUES
('Cristina Room'),
('Dining Room'),
('Jerico Room'),
('Joe Room'),
('Kathleen Room'),
('Kitchen Room'),
('Living Room'),
('Rovic Room');

-- --------------------------------------------------------

--
-- Table structure for table `sfamilymembers`
--

CREATE TABLE `sfamilymembers` (
  `fname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) CHARACTER SET latin1 NOT NULL,
  `contact` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sfamilymembers`
--

INSERT INTO `sfamilymembers` (`fname`, `age`, `gender`, `contact`) VALUES
('Christina Limjoco', 21, 'Female', '234-567-8901'),
('GWAPO KO HAHA', 23, 'Male', '234-567-1212'),
('Jerico Jonson', 23, 'Male', '123-456-7890'),
('Joe Honey Frias', 20, 'Female', '234-567-3486'),
('Kathleen', 20, 'Female', '234-567-8732'),
('Rovic Manalang', 22, 'Female', '234-567-9822'),
('SAMA MAKAPASA', 23, 'Male', '234-567-3434');

-- --------------------------------------------------------

--
-- Table structure for table `suser`
--

CREATE TABLE `suser` (
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 NOT NULL,
  `type` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suser`
--

INSERT INTO `suser` (`username`, `password`, `type`) VALUES
('jerico@smartsocket.c', 'jerico', 'user'),
('cristina@smartsocket', 'cristina', 'user'),
('joe@smartsocket.com', 'joe', 'user'),
('kathleen@smartsocket', 'kathleen', 'user'),
('rovic@smartsocket.co', 'rovic', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cristinaaddappliances`
--
ALTER TABLE `cristinaaddappliances`
  ADD PRIMARY KEY (`appliances_name`);

--
-- Indexes for table `diningaddappliances`
--
ALTER TABLE `diningaddappliances`
  ADD PRIMARY KEY (`appliances_name`);

--
-- Indexes for table `jericoaddappliances`
--
ALTER TABLE `jericoaddappliances`
  ADD PRIMARY KEY (`appliances_name`);

--
-- Indexes for table `joeaddappliances`
--
ALTER TABLE `joeaddappliances`
  ADD PRIMARY KEY (`appliances_name`);

--
-- Indexes for table `kathleenaddappliances`
--
ALTER TABLE `kathleenaddappliances`
  ADD PRIMARY KEY (`appliances_name`);

--
-- Indexes for table `kitchenaddappliances`
--
ALTER TABLE `kitchenaddappliances`
  ADD PRIMARY KEY (`appliances_name`);

--
-- Indexes for table `livingaddappliances`
--
ALTER TABLE `livingaddappliances`
  ADD PRIMARY KEY (`appliances_name`);

--
-- Indexes for table `rovicaddappliances`
--
ALTER TABLE `rovicaddappliances`
  ADD PRIMARY KEY (`appliances_name`);

--
-- Indexes for table `saddrooms`
--
ALTER TABLE `saddrooms`
  ADD PRIMARY KEY (`rooms_name`);

--
-- Indexes for table `sfamilymembers`
--
ALTER TABLE `sfamilymembers`
  ADD PRIMARY KEY (`fname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
