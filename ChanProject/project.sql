-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 02:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `center_id` int(255) NOT NULL,
  `center_course` varchar(255) NOT NULL,
  `evaCenterOne` int(255) NOT NULL,
  `evaCenterTwo` int(255) NOT NULL,
  `evaCenterThree` int(255) NOT NULL,
  `evaCenterFour` int(255) NOT NULL,
  `evaCenterFive` int(255) NOT NULL,
  `evaCenterSix` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`center_id`, `center_course`, `evaCenterOne`, `evaCenterTwo`, `evaCenterThree`, `evaCenterFour`, `evaCenterFive`, `evaCenterSix`) VALUES
(2, 'CreativeWebDesign', 1, 1, 1, 1, 1, 1),
(3, 'WebDevelopment', 2, 2, 2, 2, 2, 2),
(4, 'MobileDevelopment', 3, 3, 3, 3, 3, 3),
(5, 'EventsManagement', 4, 4, 4, 4, 4, 4),
(6, 'TrainingMethodology', 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(255) NOT NULL,
  `instructor_course` varchar(255) NOT NULL,
  `evaInstructorOne` int(11) NOT NULL,
  `evaInstructorTwo` int(11) NOT NULL,
  `evaInstructorThree` int(11) NOT NULL,
  `evaInstructorFour` int(11) NOT NULL,
  `evaInstructorFive` int(11) NOT NULL,
  `evaInstructorSix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `instructor_course`, `evaInstructorOne`, `evaInstructorTwo`, `evaInstructorThree`, `evaInstructorFour`, `evaInstructorFive`, `evaInstructorSix`) VALUES
(1, 'CreativeWebDesign', 0, 0, 0, 0, 0, 0),
(2, 'WebDevelopment', 1, 1, 1, 1, 1, 1),
(3, 'MobileDevelopment', 2, 2, 2, 2, 2, 2),
(4, 'EventsManagement', 3, 3, 3, 3, 3, 3),
(5, 'TrainingMethodology', 4, 4, 4, 4, 4, 4),
(8, '', 1, 2, 3, 2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `training_id` int(255) NOT NULL,
  `training_course` varchar(255) NOT NULL,
  `evaTrainingOne` int(255) NOT NULL,
  `evaTrainingTwo` int(255) NOT NULL,
  `evaTrainingThree` int(255) NOT NULL,
  `evaTrainingFour` int(255) NOT NULL,
  `evaTrainingFive` int(11) NOT NULL,
  `evaTrainingSix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`training_id`, `training_course`, `evaTrainingOne`, `evaTrainingTwo`, `evaTrainingThree`, `evaTrainingFour`, `evaTrainingFive`, `evaTrainingSix`) VALUES
(1, 'CreativeWebDesign', 1, 1, 1, 1, 1, 1),
(2, 'WebDevelopment', 2, 2, 2, 2, 2, 2),
(3, 'MobileDevelopment', 3, 3, 3, 3, 3, 3),
(4, 'EventsManagement', 4, 4, 4, 4, 4, 4),
(5, 'TrainingMethodology', 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(255) NOT NULL,
  `users_firstname` varchar(255) NOT NULL,
  `users_lastname` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_username` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_contact` int(255) NOT NULL,
  `users_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_firstname`, `users_lastname`, `users_email`, `users_username`, `users_password`, `users_contact`, `users_type`) VALUES
(1, 'Neil', 'Chan', 'Nchan@gmail.com', 'Nchan', 'Nchan', 123123123, 'admin'),
(2, 'Psalter', 'Cea', 'Pcea@gmail.com', 'Pcea', 'Pcea', 321321, ''),
(8, 'Bench', 'Zapata', 'Bzap@gmail.com', 'Bzap', 'Bzap', 326568, ''),
(10, 'Gelo', 'Hernandez', 'gher@gmail.com', 'Gher', 'gher', 123123213, ''),
(46, 'Regner', 'Peneza', 'Rpeneza@gmail.com', 'Rpeneza', 'rpeneza', 454545, ''),
(47, 'Bench', 'Zapata', 'lkasdlakd@yao.com', 'Bzapata', 'bzapata', 5454, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`center_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `center_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `training_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
