-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 03:59 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `admin_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(2, 'Mahir Ashhab', 'mahir.ashhab77@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_db`
--

CREATE TABLE `candidate_db` (
  `sl` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `constituency` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  `election_name` varchar(255) NOT NULL,
  `total_votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_request_tbl`
--

CREATE TABLE `candidate_request_tbl` (
  `cdt_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  `constituency` varchar(50) NOT NULL,
  `party` varchar(50) NOT NULL,
  `election_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cdt_id_request_tbl`
--

CREATE TABLE `cdt_id_request_tbl` (
  `sl` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `constituency` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  `elections_name` varchar(255) NOT NULL,
  `id_generated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdt_id_request_tbl`
--

INSERT INTO `cdt_id_request_tbl` (`sl`, `name`, `id`, `email`, `constituency`, `party`, `elections_name`, `id_generated`) VALUES
(5, 'Mahir Ashhab ', 16201099, 'mahir.ashhab77@gmail.com ', 'Dhaka-5', 'Awami League', 'National Parliament Election 2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `elections_tbl`
--

CREATE TABLE `elections_tbl` (
  `elections_id` int(11) NOT NULL,
  `elections_name` varchar(100) NOT NULL,
  `elections_constituency` varchar(255) NOT NULL,
  `elections_start_date` date NOT NULL,
  `elections_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elections_tbl`
--

INSERT INTO `elections_tbl` (`elections_id`, `elections_name`, `elections_constituency`, `elections_start_date`, `elections_end_date`) VALUES
(23, 'National Parliament Election 2019', '', '2019-12-10', '2019-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `id_request_tbl`
--

CREATE TABLE `id_request_tbl` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `user_constituency` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results_tbl`
--

CREATE TABLE `results_tbl` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `candidates_name` varchar(100) NOT NULL,
  `elections_name` varchar(100) NOT NULL,
  `constituency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results_tbl`
--

INSERT INTO `results_tbl` (`id`, `user_id`, `candidates_name`, `elections_name`, `constituency`) VALUES
(2, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(3, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(4, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(5, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(6, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(7, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(8, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(9, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(10, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(11, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(12, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(13, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(14, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(15, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(16, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(17, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(18, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(19, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(20, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(21, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(22, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(23, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(24, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(25, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(26, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(27, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(28, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(29, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(30, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(31, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(32, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(33, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(34, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(35, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(36, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(37, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(38, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(39, '1234567', 'Mahir Ashhab', 'National Parliament Election 2019', 'Dhaka-5'),
(40, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(41, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(42, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(43, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(44, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(45, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(46, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(47, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(48, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(49, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(50, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(51, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(52, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(53, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(54, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(55, '1234567', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5'),
(56, '16201099', 'Mahir Ashhab ', 'National Parliament Election 2019', 'Dhaka-5');

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `user_sl` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `user_constituency` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_id_generated` varchar(500) NOT NULL,
  `cdt_id_generated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`user_sl`, `user_name`, `user_id`, `user_email`, `user_gender`, `user_constituency`, `user_password`, `user_id_generated`, `cdt_id_generated`) VALUES
(36, 'Mahir Ashhab', 16201099, 'mahir.ashhab77@gmail.com', 'Male', 'Dhaka-5', '1234', '2079898580', ''),
(40, 'Shahriar Absar', 17101410, 's.absar@gmail.com', 'Male', 'Dhaka-14', '123456', '', '630933774'),
(41, 'Banna', 1234567, 'test@gmail.com', 'Male', 'Dhaka-5', '1234', '294752362', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate_db`
--
ALTER TABLE `candidate_db`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `candidate_request_tbl`
--
ALTER TABLE `candidate_request_tbl`
  ADD PRIMARY KEY (`cdt_id`);

--
-- Indexes for table `cdt_id_request_tbl`
--
ALTER TABLE `cdt_id_request_tbl`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `elections_tbl`
--
ALTER TABLE `elections_tbl`
  ADD PRIMARY KEY (`elections_id`);

--
-- Indexes for table `id_request_tbl`
--
ALTER TABLE `id_request_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results_tbl`
--
ALTER TABLE `results_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`user_sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `candidate_db`
--
ALTER TABLE `candidate_db`
  MODIFY `sl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidate_request_tbl`
--
ALTER TABLE `candidate_request_tbl`
  MODIFY `cdt_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cdt_id_request_tbl`
--
ALTER TABLE `cdt_id_request_tbl`
  MODIFY `sl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `elections_tbl`
--
ALTER TABLE `elections_tbl`
  MODIFY `elections_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `id_request_tbl`
--
ALTER TABLE `id_request_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `results_tbl`
--
ALTER TABLE `results_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `user_sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
