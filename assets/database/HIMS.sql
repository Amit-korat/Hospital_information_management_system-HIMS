-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2023 at 11:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HIMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Doctors`
--

CREATE TABLE `Doctors` (
  `d_id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_no` bigint(13) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `position` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `roomno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Doctors`
--

INSERT INTO `Doctors` (`d_id`, `name`, `address`, `phone_no`, `dob`, `gender`, `position`, `department`, `roomno`) VALUES
(1, 'Dr. Rama Krishnan', '13, Marry Gold, D.V.Road, Delhi, 326005', 1876543210, '1982-04-11', 'Male', 'Sr.', 'Cardiology', 301),
(2, 'Dr. B.K.Patil', '4, john street, walkland.', 8943892019, '1981-06-03', 'Male', 'Sr.', 'Orthopaedics', 101),
(3, 'Dr. Abcd', '102, Rose Marry, S.V.Road, Delhi, 386005', 2223333444, '2003-03-02', 'Female', 'Jr.', 'Neurology', 101);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `email`, `passwd`, `fname`, `lname`) VALUES
(1, 'admin@gmail.com', 'admin', 'Saniya', 'Mirja');

-- --------------------------------------------------------

--
-- Table structure for table `Patients`
--

CREATE TABLE `Patients` (
  `p_id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bill` int(10) DEFAULT 0,
  `address` varchar(50) NOT NULL,
  `phone_no` bigint(13) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `symptoms` varchar(150) NOT NULL,
  `admited_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Patients`
--

INSERT INTO `Patients` (`p_id`, `name`, `bill`, `address`, `phone_no`, `gender`, `dob`, `doctor`, `symptoms`, `admited_on`) VALUES
(1, 'Shreyans Ghanshambhai Kathiriya', 10000, '123, Rose Marry, S.V.Road, Mumbai, 426005', 1876543210, 'Trans', '2001-06-12', 'Dr. Rama', 'highly corona positive ', '2023-04-04'),
(2, 'Shreylu Ghanshambhai Kathiriyu', 2890, '123, Rose Marry, S.V.Road, Mumbai, 426005', 1876543210, 'Female', '2002-04-11', 'Dr. Smit Desai', 'extreme corona positive ', '2023-04-04'),
(3, 'Amit Valjibhai Korat', 4000, '102, Rose Marry, S.V.Road, Delhi, 386005', 1122334455, 'Male', '2000-03-01', 'Dr. B.K.Patil', 'headache and pain', '2023-04-04'),
(4, 'Smit Vijaybhai Desai', 6500, '394,sam street, walkland.', 1234567876, 'Female', '2002-06-09', 'Dr. Abcd', 'loosemotion', '2023-04-04'),
(5, 'Sahil Vipulbhai Vaddoriya', 3680, '203, Rose Marry, S.V.Road, Delhi, 386005', 1231231234, 'Male', '2002-02-05', 'Dr. Abcd', 'extreme loosemotion', '2023-04-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Doctors`
--
ALTER TABLE `Doctors`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Patients`
--
ALTER TABLE `Patients`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Doctors`
--
ALTER TABLE `Doctors`
  MODIFY `d_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Patients`
--
ALTER TABLE `Patients`
  MODIFY `p_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
