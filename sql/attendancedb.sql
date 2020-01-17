-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 02:17 PM
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
-- Database: `attendancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `id` int(11) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `id` int(11) NOT NULL,
  `assessmentno` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `subject1` int(11) NOT NULL,
  `subject2` int(11) NOT NULL,
  `subject3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id`, `assessmentno`, `sid`, `name`, `batch`, `subject1`, `subject2`, `subject3`) VALUES
(2, 1, 1, 'Joncy', 'JSD2', 0, 0, 0),
(3, 1, 2, 'Jeseena L', 'JSD2', 0, 0, 0),
(4, 1, 1, 'Joncy', 'JSD2', 0, 0, 0),
(5, 1, 2, 'Jeseena L', 'JSD2', 9, 7, 9),
(6, 1, 1, 'Joncy', 'JSD2', 10, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `status_h1` varchar(20) NOT NULL,
  `status_h2` varchar(20) NOT NULL,
  `status_h3` varchar(20) NOT NULL,
  `status_h4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `sid`, `name`, `batch`, `status_h1`, `status_h2`, `status_h3`, `status_h4`) VALUES
(1, '2020-01-17', 1, 'Joncy', 'JSD2', 'absent', 'absent', 'present', 'present'),
(2, '2020-01-17', 2, 'Jeseena L', 'JSD2', 'present', 'present', 'present', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `batchincharge` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `name`, `address`, `dob`, `gender`, `qualification`, `mobile`, `batchincharge`, `email`, `username`, `password`) VALUES
(101, 'Amitha G', 'Kollam', '1992-03-08', 'Female', 'MCA', 9876543210, 'JSD2', 'amitha@gmail.com', 'Amitha', 'amitha'),
(103, 'John', 'Ernakulam', '0000-00-00', 'Male', 'MBBS', 1234567890, 'F&S', 'John', 'John', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `sid`, `name`, `batch`, `fromdate`, `todate`, `reason`, `status`) VALUES
(1, 2, 'Jeseena L', 'JSD2', '2020-01-17', '2020-01-19', 'exam', 'Approved'),
(2, 1, 'Joncy', 'JSD2', '2020-01-09', '2020-01-15', 'Fever', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `admno` int(11) NOT NULL,
  `admdate` date NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `guardian` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `admno`, `admdate`, `name`, `address`, `dob`, `gender`, `mobile`, `guardian`, `batch`, `email`, `username`, `password`) VALUES
(1, 1234, '2019-01-07', 'Joncy', 'Kollam', '1995-12-08', 'Female', 986542130, 'Daisy', 'JSD2', 'joncy@gmail.com', 'Joncy', 'joncy'),
(2, 111, '2020-01-01', 'Jeseena L', 'Kollam', '1995-03-28', 'Female', 8943314672, 'Shyni', 'JSD2', 'jeseena@1234', 'Jeseena', 'jeseena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admintbl`
--
ALTER TABLE `admintbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
