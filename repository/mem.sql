-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2013 at 06:50 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mem`
--
CREATE DATABASE IF NOT EXISTS `mem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mem`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `role` enum('guest','admin','member') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `uname`, `pwd`, `role`) VALUES
(3, 'mercy', 'ayodele', 'ayo', 'mercy', 'guest'),
(4, 'favour', 'omodara', 'talk', 'talk', 'admin'),
(7, 'ayo', 'sadare', 'ay', 'dot', 'admin'),
(8, 'bayo', 'omodara', 'bayo', 'bayo', 'guest'),
(9, 'dayo', 'onifade', 'fade', 'fade', 'guest'),
(11, 'princess', 'omowunmi', 'princess', 'princess', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `address` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fname`, `lname`, `phone`, `email`, `sex`, `address`) VALUES
(1, 'Grace', 'Adewumi', '08034879232', 'grace.ebi009@gmail.com', 'Female', 'Lagos              '),
(2, 'Ayo', 'Sadare', '08022119945', 'ayo@yahoo.com', 'Male', 'Lagos              '),
(3, 'mercy', 'ayodele', '08067565435', 'mercy@gmail.com', 'Female', '                                Lagos                            ');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` blob,
  `title` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `sex` enum('male','female') NOT NULL,
  `address` varchar(150) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `photo`, `title`, `fname`, `lname`, `sex`, `address`, `country`, `phone`, `email`) VALUES
(1, NULL, 'mrs', 'Ayo', 'Sadare', 'female', 'Lawanson', 'Nigeria', '08034879232', 'ayo@yahoo.com'),
(5, NULL, 'miss', 'Grace', 'Adewumi', 'female', 'Lagos', 'Nigeria', '08022119945', 'grace@yahoo.com'),
(9, NULL, 'mr', 'Bayo', 'Omodara', 'male', 'Ibadan', 'Nigeria', '08034665676', 'bayo@biggs.com'),
(10, NULL, 'mr', 'Bayo', 'Omodara', 'male', 'Ibadan', 'Nigeria', '08034665676', 'bayo@biggs.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
