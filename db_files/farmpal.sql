-- phpMyAdmin SQL Dump
-- version 4.4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2015 at 06:41 AM
-- Server version: 5.6.24
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `farmpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `id` int(8) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `firstName`, `lastName`, `role`, `query`, `answer`) VALUES
(2, 'User', 'User', 'user', 'I have small kitchen farm behind my house. I have cultivated vegetables there, but the problem is despite regular use of fertilizer, the crops are not growing well. What should i do?', 'Well, you have mentioned that you are using fertilizer regularly, but it''s not clear whether you are using organic fertilizer or the chemical fertilizer. For most of the vegetables, organic fertilizer is preferred to chemical. One of your mistake is using'),
(3, 'User', 'User', 'user', 'I have 2 ropani field in eastern terai. Ploughing the field with human power seems time consuming and costly. What should i do?', 'The best solution to your problem is using modern technologies. You will have fruitful result in less effort and cost. '),
(4, 'AgricultureHead', 'AGR', 'agriculture', '', 'I own 3 ana land in hilly area. There is shortage of water and enough sunlight. But i want to utilize the land in cultivation. What should i cultivate?'),
(5, 'John', 'User', 'user', 'I have 5 ropani field in Western terai. Ploughing the field with human power seems time consuming and costly. What should I do?', ''),
(7, 'John', 'User', 'user', '  I have 12 ropani field in eastern terai. Ploughing the field with human power seems time consuming and costly. What should i do?', ''),
(8, 'John', 'User', 'user', 'I own 3 ana land in hilly area. There is shortage of water and enough sunlight. But i want to utilize the land in cultivation. What should i cultivate?', ''),
(9, 'John', 'User', 'user', '  what', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(33) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(33) NOT NULL,
  `password` varchar(22) NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `role`, `email`, `password`, `image`, `date`) VALUES
(10, 'Emma', 'Scott', 'user', 'asas@gmail.com', '912ec803b2ce49e4a54106', '3776816946707701446880322.jpg', '0000-00-00'),
(11, 'Samy', 'Simpson', 'user', 'sss@g.com', '912ec803b2ce49e4a54106', '7512524750385221446885071.jpg', '0000-00-00'),
(14, 'John', 'User', 'user', 'user@g.com', 'ee11cbb19052e40b07aac0', '1474956268365451446891443.jpg', '0000-00-00'),
(16, 'Sam', 'AgricultureHead', 'agriculture', 'ag@g.com', '02054b032812a9731d4385', '438582868670991446896817.jpg', '2015-11-07'),
(17, 'Jasmine', 'Admin', 'admin', 'admin@g.com', '21232f297a57a5a743894a', '300231332743821447081433.jpg', '2015-11-09'),
(18, 'Anna', 'Graham', 'admin', 'anna@g.com', '21232f297a57a5a743894a', '1669385349797241447084325.jpg', '2015-11-09'),
(19, 'Jane', 'Morrison', 'admin', 'jane@g.com', '21232f297a57a5a743894a', '1154783890925971447084385.png', '2015-11-09'),
(20, 'Grace', 'May', 'agriculture', 'grace@g.com', '02054b032812a9731d4385', '5885332355237151447084443.jpg', '2015-11-09'),
(21, 'David', 'Walker', 'agriculture', 'david@g.com', '02054b032812a9731d4385', '9631162073723541447084495.jpg', '2015-11-09'),
(22, 'Peter', 'Smith', 'agriculture', 'peter@g.com', '02054b032812a9731d4385', '6794556107892281447084551.jpg', '2015-11-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
