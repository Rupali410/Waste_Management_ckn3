-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 02:00 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asulike`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE IF NOT EXISTS `alogin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`email`, `password`) VALUES
('amitkuntal1997@gmail.com', 'aam'),
('luckyamitkuntal420@gmail.com', 'aaam');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('amitkuntal1997@gmail.com', 'aaa'),
('luckyamitkuntal420@gmail.com', 'aaa'),
('amitkuntal1997@gmail.com', ''),
('amitkuntal1997@gmail.com', ''),
('luckyamitkuntal420@gmail.com', 'aaaa'),
('sumantsingh1968@gmail.com', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `requestid` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(6) NOT NULL,
  `status` text NOT NULL,
  `date` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `paper` varchar(3) NOT NULL,
  `pweight` decimal(10,0) NOT NULL,
  `metal` varchar(3) NOT NULL,
  `mweight` decimal(10,0) NOT NULL,
  `book` varchar(3) NOT NULL,
  `bweight` decimal(10,0) NOT NULL,
  `plastic` varchar(3) NOT NULL,
  `plweight` decimal(10,0) NOT NULL,
  PRIMARY KEY (`requestid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`requestid`, `name`, `phone`, `address`, `street`, `city`, `state`, `zip`, `status`, `date`, `email`, `paper`, `pweight`, `metal`, `mweight`, `book`, `bweight`, `plastic`, `plweight`) VALUES
('1530999397', 'Amit Amit Kuntal', 8273966422, 'Barari', 'Barari', 'Mathura', 'UP', '281005', 'Completed', '18-07-07', 'amitkuntal1997@gmail.com', 'NO', '0', 'yes', '12', 'NO', '0', 'YES', '12'),
('1530999400', 'Amit Amit Kuntal', 8273966422, 'Barari', 'Barari', 'Mathura', 'UP', '281005', 'Completed', '18-07-07', 'amitkuntal1997@gmail.com', 'NO', '0', 'yes', '0', 'NO', '0', 'YES', '0'),
('1530999403', 'Amit Amit Kuntal', 8273966422, 'Barari', 'Barari', 'Mathura', 'UP', '281005', 'Completed', '18-07-07', 'amitkuntal1997@gmail.com', 'NO', '0', 'yes', '0', 'NO', '0', 'YES', '0'),
('1531004857', 'Amit', 8273966422, 'Vill:-Dhana Teja Post:Barari', 'Vill:-Dhana Teja Post:Barari', 'Mathura', 'UP', '281005', 'Requested', '18-07-08', 'amitkuntal1997@gmail.com', 'yes', '0', 'NO', '0', 'NO', '0', 'YES', '0'),
('1531006806', 'Amit', 8273966422, 'Vill:-Dhana Teja Post:Barari', 'Vill:-Dhana Teja Post:Barari', 'Mathura', 'UP', '281005', 'Requested', '18-07-08', 'amitkuntal1997@gmail.com', 'NO', '0', 'NO', '0', 'NO', '0', 'NO', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
