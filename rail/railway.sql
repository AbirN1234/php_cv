-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 12:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `p_id` int(30) NOT NULL,
  `p_fname` varchar(30) DEFAULT NULL,
  `p_lname` varchar(30) DEFAULT NULL,
  `p_age` varchar(30) DEFAULT NULL,
  `p_contact` varchar(20) DEFAULT NULL,
  `p_gender` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `t_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`p_id`, `p_fname`, `p_lname`, `p_age`, `p_contact`, `p_gender`, `email`, `password`, `t_no`) VALUES
(1, 'Rahul', 'Dravid', '42', '9090909090', 'Male', 'rahul@dravid.com', '123123123', 16205),
(2, 'Rahul', 'Dravid', '29', '1010101010', 'Male', 'qwe@w.cc', '123123123', NULL),
(4, 'qwe', 'qwe', '19', '1010101010', 'Male', '123@123.cc', '123123123', NULL),
(5, 'abc', 'sbc', '19', '9090909090', 'Male', 'abc@g.cc', '123123123', 12951),
(6, 'sumit', 'sharma', '20', '9999999999', 'Male', 'sharma@gmail.com', '123123123', 12951),
(7, 'dhruv', 'mehta', '20', '9191919191', 'Male', 'dhruv@gmail.com', '123123123', 16205),
(8, 'ABIR', 'NASKAR', '19', '9932886910', 'Male', 'abirnaskar88815@gmail.com', 'Abir@2000', 12284);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(11) NOT NULL,
  `s_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `s_name`, `email`, `password`) VALUES
(1, 'abir naskar', 'abir@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ti_no` int(10) NOT NULL,
  `t_status` varchar(20) NOT NULL DEFAULT 'CNF',
  `seat` int(10) NOT NULL,
  `coach` text NOT NULL,
  `p_id` varchar(30) NOT NULL,
  `t_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ti_no`, `t_status`, `seat`, `coach`, `p_id`, `t_no`) VALUES
(23, 'CNF', 700, 'A3', 'abirnaskar88815@gmail.com', 12951),
(24, 'CNF', 444, 'SL', 'abirnaskar88815@gmail.com', 4971),
(25, 'CNF', 0, 'SL', 'abirnaskar88815@gmail.com', 0),
(26, 'CNF', 0, 'SL', 'abirnaskar88815@gmail.com', 0),
(27, 'CNF', 0, 'A3', 'abirnaskar88815@gmail.com', 0),
(28, 'CNF', 0, 'A3', 'abirnaskar88815@gmail.com', 0),
(29, 'CNF', 0, 'A3', 'abirnaskar88815@gmail.com', 0),
(30, 'CNF', 137, 'A3', 'abirnaskar88815@gmail.com', 12234),
(31, 'CNF', 422, 'SL', 'abirnaskar88815@gmail.com', 12234),
(32, 'CNF', 542, 'A3', 'abirnaskar88815@gmail.com', 4971),
(33, 'CNF', 541, 'A3', 'abirnaskar88815@gmail.com', 4971),
(34, 'CNF', 200, 'SL', 'abirnaskar88815@gmail.com', 12859),
(35, 'CNF', 199, 'SL', 'abirnaskar88815@gmail.com', 12859),
(36, 'CNF', 198, 'SL', 'abirnaskar88815@gmail.com', 12859),
(37, 'CNF', 197, 'SL', 'abirnaskar88815@gmail.com', 12859),
(38, 'CNF', 196, 'SL', 'abirnaskar88815@gmail.com', 12859);

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `t_no` decimal(5,0) NOT NULL,
  `t_name` varchar(30) DEFAULT NULL,
  `t_source` varchar(30) DEFAULT NULL,
  `t_destination` varchar(30) DEFAULT NULL,
  `t_type` varchar(30) DEFAULT NULL,
  `A3` int(11) DEFAULT NULL,
  `SL` int(10) DEFAULT NULL,
  `SS` int(10) DEFAULT NULL,
  `t_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`t_no`, `t_name`, `t_source`, `t_destination`, `t_type`, `A3`, `SL`, `SS`, `t_duration`) VALUES
('4971', 'garibrath', 'Udaipurr', 'Jammu Tawi', 'Express', 540, 443, 300, 20),
('12234', 'HWH-YPR', 'HWH', 'YPR', NULL, 136, 421, 200, 36),
('12284', 'duronto', 'Mumbai central', 'Ernakulum', 'AC superfast', 800, 450, 100, 24),
('12859', 'geetanjali', 'kolkata', 'delhi', NULL, 144, 195, 300, 20),
('12951', 'rajdhani', 'Mumbai Central', 'Delhi', 'Superfast', 699, 400, 96, 15),
('16205', 'mysoreexp', 'Talguppa', 'Mysore JN', 'Express', 475, 800, 200, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_id` (`p_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ti_no`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`t_no`),
  ADD UNIQUE KEY `t_no` (`t_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ti_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
