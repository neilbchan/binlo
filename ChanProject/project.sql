-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 07:16 AM
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
  `users_id` int(255) NOT NULL,
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

INSERT INTO `center` (`center_id`, `users_id`, `center_course`, `evaCenterOne`, `evaCenterTwo`, `evaCenterThree`, `evaCenterFour`, `evaCenterFive`, `evaCenterSix`) VALUES
(2, 0, 'CreativeWebDesign', 1, 1, 1, 1, 1, 1),
(3, 0, 'WebDevelopment', 2, 2, 2, 2, 2, 2),
(4, 0, 'MobileDevelopment', 3, 3, 3, 3, 3, 3),
(5, 0, 'EventsManagement', 4, 4, 4, 4, 4, 4),
(6, 0, 'TrainingMethodology', 5, 5, 5, 5, 5, 5),
(8, 2, 'CreativeWebDesign', 2, 2, 2, 2, 2, 2),
(9, 2, 'WebDevelopment', 5, 5, 5, 5, 5, 5),
(10, 2, 'MobileDevelopment', 4, 4, 5, 4, 5, 4),
(18, 2, 'EventsManagement', 5, 5, 5, 5, 5, 5),
(19, 2, 'EventsManagement', 4, 4, 4, 4, 4, 4),
(20, 2, 'EventsManagement', 5, 5, 5, 5, 5, 5),
(21, 2, 'TrainingMethodology', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(255) NOT NULL,
  `users_id` int(255) NOT NULL,
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

INSERT INTO `instructor` (`instructor_id`, `users_id`, `instructor_course`, `evaInstructorOne`, `evaInstructorTwo`, `evaInstructorThree`, `evaInstructorFour`, `evaInstructorFive`, `evaInstructorSix`) VALUES
(1, 0, 'CreativeWebDesign', 0, 0, 0, 0, 0, 0),
(2, 0, 'WebDevelopment', 1, 1, 1, 1, 1, 1),
(3, 0, 'MobileDevelopment', 2, 2, 2, 2, 2, 2),
(4, 0, 'EventsManagement', 3, 3, 3, 3, 3, 3),
(5, 0, 'TrainingMethodology', 4, 4, 4, 4, 4, 4),
(9, 2, 'CreativeWebDesign', 4, 4, 4, 4, 4, 4),
(11, 2, 'WebDevelopment', 1, 1, 1, 1, 1, 1),
(12, 2, 'MobileDevelopment', 5, 5, 1, 5, 4, 5),
(13, 2, 'EventsManagement', 5, 5, 5, 5, 5, 5),
(14, 2, 'TrainingMethodology', 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `training_id` int(255) NOT NULL,
  `users_id` int(255) NOT NULL,
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

INSERT INTO `training` (`training_id`, `users_id`, `training_course`, `evaTrainingOne`, `evaTrainingTwo`, `evaTrainingThree`, `evaTrainingFour`, `evaTrainingFive`, `evaTrainingSix`) VALUES
(1, 0, 'CreativeWebDesign', 1, 1, 1, 1, 1, 1),
(2, 0, 'WebDevelopment', 2, 2, 2, 2, 2, 2),
(3, 0, 'MobileDevelopment', 3, 3, 3, 3, 3, 3),
(4, 0, 'EventsManagement', 4, 4, 4, 4, 4, 4),
(5, 0, 'TrainingMethodology', 5, 5, 5, 5, 5, 5),
(6, 2, 'CreativeWebDesign', 2, 2, 2, 2, 2, 2),
(7, 2, 'CreativeWebDesign', 1, 1, 1, 1, 1, 1),
(8, 2, 'WebDevelopment', 2, 2, 2, 2, 2, 2),
(9, 2, 'CreativeWebDesign', 4, 4, 4, 4, 4, 4),
(10, 2, 'CreativeWebDesign', 5, 5, 5, 5, 5, 5),
(11, 2, 'MobileDevelopment', 4, 4, 4, 4, 4, 4),
(12, 2, 'EventsManagement', 1, 1, 1, 1, 1, 1),
(13, 2, 'TrainingMethodology', 1, 1, 1, 1, 1, 1);

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
(46, 'Regner', 'Peneza', 'Rpeneza@gmail.com', 'Rpeneza', 'rpeneza', 454545, '');

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
  MODIFY `center_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `training_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
