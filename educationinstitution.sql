-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2022 at 10:29 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edusightdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `educationinstitution`
--

CREATE TABLE IF NOT EXISTS `educationinstitution` (
  `instID` int(11) NOT NULL AUTO_INCREMENT,
  `instName` varchar(100) DEFAULT NULL,
  `instPhone` varchar(20) DEFAULT NULL,
  `instEmail` varchar(100) DEFAULT NULL,
  `instAddress` varchar(300) DEFAULT NULL,
  `instPostcode` int(11) DEFAULT NULL,
  `instCountry` varchar(100) DEFAULT NULL,
  `instCity` varchar(100) DEFAULT NULL,
  `instType` varchar(50) DEFAULT NULL,
  `instPwd` varchar(50) DEFAULT NULL,
  `instImage` varchar(200) DEFAULT NULL,
  `instLink` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`instID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `educationinstitution`
--

INSERT INTO `educationinstitution` (`instID`, `instName`, `instPhone`, `instEmail`, `instAddress`, `instPostcode`, `instCountry`, `instCity`, `instType`, `instPwd`, `instImage`, `instLink`) VALUES
(4, 'Prince Sultan University', '555556777', 'psu@edu.com', 'Olya', NULL, 'KSA', 'Riyadh', NULL, '111', 'psu.jpeg', 'https://www.psu.edu.sa/en'),
(5, 'Imam University', '655555222', 'imam@edu.com.sa', NULL, NULL, 'KSA', 'Riyadh', NULL, '111', 'imam.jpg', 'https://imamu.edu.sa/Pages/default.aspx'),
(6, 'King Saud University', '05444553', 'KSU@edu.sa', '6 Street', NULL, 'KSA', 'Riyadh', NULL, '111', 'ksu.jpg', 'https://ksu.edu.sa/'),
(7, 'King Fahd University of Petroleum and Minerals', '111223333', 'kfu@edu.com.sa', NULL, NULL, 'KSA', 'Riyadh', NULL, '111', 'kfuu.png', 'http://www.kfupm.edu.sa/ar/default.aspx'),
(8, 'King Faisal University.', NULL, 'kfaisal@edu.com', NULL, NULL, 'KSA', 'Dammam', NULL, '111', 'kfu.png', 'https://www.kfu.edu.sa/ar/pages/home.aspx'),
(9, 'King Khalid University', '54446567567', 'kku@edu.sa', NULL, NULL, 'KSA', 'Abha', NULL, '111', 'kku.png', 'https://www.kku.edu.sa/'),
(12, 'KSU', '06545543', 'Saud@dd', NULL, NULL, NULL, NULL, 'university', '111', NULL, NULL),
(13, 'KSU', '06545543', 'Saud@dd', NULL, NULL, NULL, NULL, 'university', '111', NULL, NULL);
