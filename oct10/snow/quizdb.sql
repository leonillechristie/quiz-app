-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 08:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `choice_ID` int(11) NOT NULL,
  `correctAnswer` tinyint(4) NOT NULL,
  `question_ID` int(11) NOT NULL,
  `choice_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_ID` int(11) NOT NULL,
  `quiz_ID` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `categories` varchar(30) NOT NULL,
  `num_qs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_ID`, `user_ID`, `quiz_name`, `categories`, `num_qs`) VALUES
(1, 1, 'Addition', 'Mathematics', 0),
(3, 1, 'Subtraction', 'Mathematics', 0),
(4, 1, 'a', 'math', 5),
(5, 1, 'sda', 'math', 5),
(6, 1, 'sda', 'math', 5),
(7, 1, 'sdaadsa', 'math', 5),
(8, 1, '321', 'math', 5),
(9, 1, '2', 'math', 5),
(10, 1, '3', 'math', 5),
(11, 1, '3', 'math', 5),
(12, 1, '3321', 'math', 5),
(13, 1, '321321', 'math', 5),
(14, 1, '321321', 'math', 5),
(15, 1, '321321', 'math', 7),
(16, 1, 'what', 'math', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `last_name` varchar(31) NOT NULL,
  `first_name` varchar(31) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(28) NOT NULL,
  `math_average` float NOT NULL DEFAULT '0',
  `science_average` float NOT NULL DEFAULT '0',
  `english_average` float NOT NULL DEFAULT '0',
  `answeredQ` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `last_name`, `first_name`, `username`, `password`, `math_average`, `science_average`, `english_average`, `answeredQ`) VALUES
(1, 'Lee', 'Joshua', 'test', '123', 0, 0, 0, 0),
(11, 'd', 'asdd', 'd', '', 0, 0, 0, 0),
(12, 'new', 'qwe', 'newuser', '123', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`choice_ID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_ID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `choice_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
