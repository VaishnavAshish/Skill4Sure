-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2017 at 03:59 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `badepapa`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentreply`
--

CREATE TABLE IF NOT EXISTS `commentreply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `replytoid` varchar(11) NOT NULL,
  `videoid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commentreply`
--

INSERT INTO `commentreply` (`id`, `email`, `message`, `replytoid`, `videoid`) VALUES
(1, 'king.chauahn25@gmail.com', 'is vido ke ans ye he', '2', 8);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `videoid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `message`, `videoid`) VALUES
(1, 'king.chauahn25@gmail.com', 'message will goes here and you can''t do anything of this', 4),
(2, 'king.chauahn25@gmail.com', 'hello sir meko ye problm are he is video me please help', 8),
(3, 'king.chauahn25@gmail.com', 'seccound question on the video', 8);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `enable` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`, `description`, `enable`, `priority`) VALUES
(9, 'Tolerance,Limit and Fit', '', 1, 0),
(10, 'Surface Finish', '', 1, 0),
(11, 'Lubrication and Cleaning', '', 1, 0),
(13, 'Commonly used Steels used in Industries', '', 1, 0),
(14, 'Heat Treatment made easy', '', 1, 0),
(15, 'Thread Specification, Threaded connections & Couplings', '', 1, 0),
(16, 'Gas Cutting and Welding', '', 1, 0),
(17, 'Bearings', '', 1, 0),
(18, 'Sure way to Learn Drawing Reading', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `modulevideo`
--

CREATE TABLE IF NOT EXISTS `modulevideo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enable` int(11) NOT NULL,
  `moduleid` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `modulevideo`
--

INSERT INTO `modulevideo` (`id`, `enable`, `moduleid`, `name`, `link`) VALUES
(7, 1, 22, 'Misbah Ul Haq Blast 6 Sixes In 6 Balls | Hongkong T20 Blitz 2017', '<iframe width="854" height="480" src="https://www.youtube.com/embed/V41YkCWf3UQ" frameborder="0" allowfullscreen></iframe>'),
(8, 1, 24, 'video name', '<iframe width="854" height="480" src="https://www.youtube.com/embed/1YBl3Zbt80A" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `gender` varchar(25) NOT NULL,
  `profession` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `name`, `email`, `phone`, `gender`, `profession`) VALUES
(0, 'qwerty', 'Akshay', 'king.chauahn25@gmail.com', '9529655686', 'male', 'profession');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
