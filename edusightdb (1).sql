-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2022 at 10:39 PM
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
(4, 'Prince Sultan University', '555556777', 'psu@edu.com', 'Olya', 9966, 'KSA', 'Riyadh', 'University', '111', 'psu.jpeg', 'https://www.psu.edu.sa/en'),
(5, 'Imam University', '655555222', 'imam@edu.com.sa', NULL, NULL, 'KSA', 'Riyadh', NULL, '111', 'imam.jpg', 'https://imamu.edu.sa/Pages/default.aspx'),
(6, 'King Saud University', '05444553', 'KSU@edu.sa', '6 Street', NULL, 'KSA', 'Riyadh', NULL, '111', 'ksu.jpg', 'https://ksu.edu.sa/'),
(7, 'King Fahd University of Petroleum and Minerals', '111223333', 'kfu@edu.com.sa', NULL, NULL, 'KSA', 'Riyadh', NULL, '111', 'kfuu.png', 'http://www.kfupm.edu.sa/ar/default.aspx'),
(8, 'King Faisal University.', NULL, 'kfaisal@edu.com', NULL, NULL, 'KSA', 'Dammam', NULL, '111', 'kfu.png', 'https://www.kfu.edu.sa/ar/pages/home.aspx'),
(9, 'King Khalid University', '54446567567', 'kku@edu.sa', NULL, NULL, 'KSA', 'Abha', NULL, '111', 'kku.png', 'https://www.kku.edu.sa/'),
(13, 'KSU', '06545543', 'Saud@dd', NULL, NULL, NULL, NULL, 'university', '111', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pcountry` varchar(50) NOT NULL,
  `ploc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pcountry`, `ploc`) VALUES
(1, 'ff', 'vv', 'vv');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE IF NOT EXISTS `tutors` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(50) DEFAULT NULL,
  `tphone` int(11) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `temail` varchar(50) NOT NULL,
  `tpass` varchar(50) DEFAULT NULL,
  `tgender` varchar(50) DEFAULT NULL,
  `tbirthdate` date DEFAULT NULL,
  `tcountry` varchar(50) DEFAULT NULL,
  `tcity` varchar(50) DEFAULT NULL,
  `teducation` varchar(50) DEFAULT NULL,
  `texperience` varchar(50) DEFAULT NULL,
  `yearsOfExperience` int(11) DEFAULT NULL,
  `tutorImage` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`tid`, `tname`, `tphone`, `Address`, `temail`, `tpass`, `tgender`, `tbirthdate`, `tcountry`, `tcity`, `teducation`, `texperience`, `yearsOfExperience`, `tutorImage`) VALUES
(1, 'Jay Anthony', 3344354, 'America', '222222@dd', '333333', 'female', '1992-01-17', 'KSA', 'Trendall', 'Global Development Lead.', 'ssdcsc', 2, 'p2.png'),
(2, 'Lea Jhonson', 555453522, 'Kanada', 'Lea@dd', '333333', 'female', '1984-02-25', 'UE', 'Gracier.io', 'Head of Customer Care.', '', 4, 'p1.png'),
(3, 'Ryan Pitt', 544432432, 'Kanada', 'rayan@gmail.com', '123', NULL, '2022-11-24', 'UE', 'Francis & Co', 'VP, Product Marketing.', 'high', 5, 'p3.png'),
(4, 'James Rivera', NULL, NULL, 'james@hotmail.com', '123', NULL, NULL, NULL, 'Moore.io', 'Vertical Marketing', NULL, NULL, 'p4.png'),
(5, 'Jane O''hara', NULL, NULL, 'jane@yahoo.com', '123', NULL, NULL, NULL, 'Neem.co', 'Head of People''s Operations.', NULL, NULL, 'p5.png'),
(6, 'Sylvia Mortisova', NULL, NULL, 'sss@gmail.com', '123', NULL, NULL, NULL, 'BusDee', 'Talent Advisor, Founder', NULL, NULL, 'p6.png');
