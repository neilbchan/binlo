-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 02:34 PM
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
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `evaInstructorOne` int(5) NOT NULL,
  `evaInstructorTwo` int(5) NOT NULL,
  `evaInstructorThree` int(5) NOT NULL,
  `evaInstructorFour` int(5) NOT NULL,
  `evaInstructorFive` int(11) NOT NULL,
  `evaInstructorSix` int(11) NOT NULL,
  `evaTrainingOne` int(5) NOT NULL,
  `evaTrainingTwo` int(5) NOT NULL,
  `evaTrainingThree` int(5) NOT NULL,
  `evaTrainingFour` int(5) NOT NULL,
  `evaTrainingFive` int(5) NOT NULL,
  `evaTrainingSix` int(5) NOT NULL,
  `evaCenterOne` int(11) NOT NULL,
  `evaCenterTwo` int(11) NOT NULL,
  `evaCenterThree` int(11) NOT NULL,
  `evaCenterFour` int(11) NOT NULL,
  `evaCenterFive` int(11) NOT NULL,
  `evaCenterSix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`evaInstructorOne`, `evaInstructorTwo`, `evaInstructorThree`, `evaInstructorFour`, `evaInstructorFive`, `evaInstructorSix`, `evaTrainingOne`, `evaTrainingTwo`, `evaTrainingThree`, `evaTrainingFour`, `evaTrainingFive`, `evaTrainingSix`, `evaCenterOne`, `evaCenterTwo`, `evaCenterThree`, `evaCenterFour`, `evaCenterFive`, `evaCenterSix`) VALUES
(3, 4, 3, 5, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0, 3, 3, 3, 3, 3, 3, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
