-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 06:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20000) NOT NULL,
  `password` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('ADMIN', 'SHAKYA');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(5) NOT NULL,
  `title` varchar(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(35) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `doj` date NOT NULL,
  `type` varchar(15) NOT NULL,
  `basic` int(7) NOT NULL,
  `hra` int(7) NOT NULL,
  `conveyance` int(7) NOT NULL,
  `medical` int(7) NOT NULL,
  `special` int(7) NOT NULL,
  `provident` int(7) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `account` varchar(20) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `m_degree` varchar(30) NOT NULL,
  `m_institute` varchar(40) NOT NULL,
  `m_year` varchar(5) NOT NULL,
  `m_cgpa` varchar(10) NOT NULL,
  `b_degree` varchar(30) NOT NULL,
  `b_institute` varchar(40) NOT NULL,
  `b_year` varchar(5) NOT NULL,
  `b_cgpa` varchar(10) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_status` varchar(10) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `pend_msg` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `title`, `fname`, `lname`, `uname`, `password`, `photo`, `mobile`, `dob`, `email`, `nationality`, `c_address`, `p_address`, `gender`, `doj`, `type`, `basic`, `hra`, `conveyance`, `medical`, `special`, `provident`, `bankname`, `account`, `pan`, `m_degree`, `m_institute`, `m_year`, `m_cgpa`, `b_degree`, `b_institute`, `b_year`, `b_cgpa`, `f_name`, `m_status`, `s_name`, `pend_msg`) VALUES
(2, 'Mrs.', 'Debjani', 'Das', 'debjanidas@123', 'debjani', 'profile_photos/photoid@1524062586.jpg', '7278150890', '1993-07-15', 'debjani15das@gmail.com', 'India', '26th sreenath mukherjee lane, kol-30', '26th sreenath mukherjee lane, kol-30', 'female', '2018-04-27', 'Permanent', 20000, 20, 10, 50, 20, 150, 'UBI', 'DD150255555', 'DD874515', '', '', '', '', '', '', '', '', '', 'Single', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id` int(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `type` varchar(20000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` mediumtext NOT NULL,
  `status` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `uname`, `type`, `start_date`, `end_date`, `reason`, `status`) VALUES
(3, 'debjanidas@123', 'Medical Leave', '2018-04-25', '2018-04-28', 'ghurte jabo ... jete de..', 'Cancelled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
