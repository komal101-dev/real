-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 08:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('prajyota', 'Prajyota@123'),
('komal', 'Komal@123');

-- --------------------------------------------------------

--
-- Table structure for table `bonofied`
--

CREATE TABLE `bonofied` (
  `b_id` int(11) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `studentname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bonofied`
--

INSERT INTO `bonofied` (`b_id`, `usn`, `studentname`) VALUES
(7, 'M2013247', 'Komal Chougala'),
(8, 'M2013247', 'Komal Chougala'),
(9, 'M2013247', 'Komal Chougala'),
(10, 'M2013247', 'Komal Chougala'),
(11, 'M2013247', 'Komal Chougala'),
(12, 'M2013247', 'Komal Chougala'),
(13, 'M2013247', 'Komal Chougala'),
(14, 'M2013247', 'Komal Chougala'),
(15, 'M2013247', 'Komal Chougala'),
(18, 'M2013285', 'Prajyota Samaje'),
(19, 'M2013285', 'Prajyota Samaje'),
(20, 'M2013285', 'Prajyota Samaje'),
(21, 'M2013285', 'Prajyota Samaje'),
(22, 'M2013285', 'Prajyota Samaje'),
(23, 'M2013248', 'Krishna Yashawant'),
(24, 'M2013247', 'Komal Chougala'),
(25, 'M2013247', 'Komal Chougala');

-- --------------------------------------------------------

--
-- Table structure for table `givef`
--

CREATE TABLE `givef` (
  `f_id` int(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `usn` varchar(50) NOT NULL,
  `message` varchar(30) DEFAULT NULL,
  `reply` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `givef`
--

INSERT INTO `givef` (`f_id`, `name`, `usn`, `message`, `reply`) VALUES
(35, 'Prajyota Samaje', 'M2013285', '', ''),
(36, 'Prajyota Samaje', 'M2013285', 'Good', 'kkkk'),
(37, 'Prajyota Samaje', 'M2013285', 'Good', '');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `username` varchar(30) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `req_id` int(30) NOT NULL,
  `certificatetype` varchar(30) DEFAULT NULL,
  `usn` varchar(50) NOT NULL,
  `studentname` varchar(30) DEFAULT NULL,
  `fathername` varchar(30) DEFAULT NULL,
  `mothername` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doa` date DEFAULT NULL,
  `dol` date DEFAULT NULL,
  `class` int(30) DEFAULT NULL,
  `branch` varchar(50) NOT NULL,
  `verify_status` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`req_id`, `certificatetype`, `usn`, `studentname`, `fathername`, `mothername`, `dob`, `doa`, `dol`, `class`, `branch`, `verify_status`, `status`) VALUES
(51, 'Study Certificate', 'M2013285', 'Prajyota Samaje', 'Balasab', 'Rani', '2002-05-23', '2020-08-13', '0000-00-00', 3, 'BCA', 'Verified', 'PENDING'),
(52, 'Study Certificate', 'M2013285', 'Prajyota Samaje', 'Balasab', 'Rani', '2002-05-23', '2020-08-13', '0000-00-00', 3, 'BCA', 'Verified', 'PENDING'),
(53, 'Bonofied Certificate', 'M2013285', 'Prajyota Samaje', 'Balasab', 'Rani', '2002-05-23', '2020-08-13', '0000-00-00', 3, 'BCA', 'Verified', 'PENDING'),
(54, 'Study Certificate', 'M2013285', 'Prajyota Samaje', 'Balasab', 'Rani', '2002-05-23', '2020-08-13', '0000-00-00', 3, 'BCA', 'Verified', 'PENDING'),
(55, 'Transfer Certificate', 'M2013285', 'Prajyota Samaje', 'Balasab', 'Rani', '2002-05-23', '2020-08-13', '0000-00-00', 3, 'BCA', 'Verified', 'PENDING'),
(56, 'Transfer Certificate', 'M2013285', 'Prajyota Samaje', 'Balasab', 'Rani', '2002-05-23', '2020-08-13', '0000-00-00', 3, 'BCA', 'Rejected', 'PENDING'),
(57, 'Study Certificate', 'M2013248', 'Krishna Yashawant', 'Bhimappa', 'Shakuntala', '2000-12-01', '2019-09-09', '2022-09-20', 3, 'B.Com', 'Verified', 'PENDING'),
(58, 'Study Certificate', 'M2013248', 'Krishna Yashawant', 'Bhimappa', 'Shakuntala', '2000-12-01', '2019-09-09', '2022-09-20', 3, 'B.Com', 'Rejected', 'PENDING'),
(59, 'Bonofied Certificate', 'M2013285', 'Prajyota Samaje', 'Balasab', 'Rani', '2002-05-23', '2020-08-13', '0000-00-00', 3, 'BCA', 'Verified', 'PENDING'),
(60, 'Study Certificate', 'M2013247', 'Komal Chougala', 'Ningappa', 'Chandravva', '2002-06-25', '2020-09-16', '0000-00-00', 3, 'BCA', 'Verified', 'PENDING'),
(61, 'Bonofied Certificate', 'M2013247', 'Komal Chougala', 'Ningappa', 'Chandravva', '2002-06-25', '2020-09-16', '0000-00-00', 3, 'BCA', 'Verified', 'PENDING'),
(62, 'Transfer Certificate', 'M2013247', 'Komal Chougala', 'Ningappa', 'Chandravva', '2002-06-25', '2020-09-16', '0000-00-00', 3, 'BCA', 'Verified', 'PENDING'),
(63, 'Transfer Certificate', 'M2013247', 'Komal Chougala', 'Ningappa', 'Chandravva', '2002-06-25', '2020-09-16', '0000-00-00', 3, 'BCA', 'PENDING', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `admno` int(30) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `studentname` varchar(30) DEFAULT NULL,
  `mothername` varchar(30) DEFAULT NULL,
  `fathername` varchar(30) DEFAULT NULL,
  `mobile` int(100) NOT NULL,
  `gender` text NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `doa` date NOT NULL,
  `dol` varchar(100) NOT NULL,
  `class` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `medium` varchar(30) NOT NULL,
  `book_due` text NOT NULL,
  `fees_due` text NOT NULL,
  `password` varchar(100) DEFAULT 'Welcome@123'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`admno`, `usn`, `studentname`, `mothername`, `fathername`, `mobile`, `gender`, `nationality`, `religion`, `dob`, `doa`, `dol`, `class`, `sem`, `branch`, `medium`, `book_due`, `fees_due`, `password`) VALUES
(698537, 'M2013209', 'Aniket  Yalamalli', 'Sumangala', 'Dundappa', 2147483647, 'male', 'Indian', 'HINDU', '2002-07-30', '2020-09-07', '', '3', '6', 'BCA', 'ENGLISH', 'YES', 'No', 'Welcome@123'),
(698537, 'M2013247', 'Komal Chougala', 'Chandravva', 'Ningappa', 2147483647, 'female', 'Indian', 'Hindu', '2002-06-25', '2020-09-16', '', '3', '6', 'BCA', 'ENGLISH', 'NO', 'NO', 'Welcome@123'),
(588410, 'M2013248', 'Krishna Yashawant', 'Shakuntala', 'Bhimappa', 2147483647, 'male', 'Indian', 'Hindu', '2000-12-01', '2019-09-09', '2022-09-20', '3', '6', 'B.Com', 'ENGLISH', 'YES', 'NO', 'Welcome@123'),
(2225265, 'M2013277', 'Pavan Kupati', 'Uma', 'Ashok', 2147483647, 'male', 'Indian', 'Hindu', '2002-10-17', '2020-09-27', '', '3', '6', 'BCA', 'ENGLISH', 'YES', 'NO', 'Welcome@123'),
(2147483647, 'M2013285', 'Prajyota Samaje', 'Rani', 'Balasab', 2147483647, 'female', 'Indian', 'Jain', '2002-05-23', '2020-08-13', '', '3', '6', 'BCA', 'ENGLISH', 'YES', 'NO', 'Welcome@123'),
(556852, 'M2013288', 'Pranita Chougale', 'Shaila', 'Rajendra', 2147483647, 'female', 'Indian', 'Jain', '2002-05-29', '2020-09-15', '', '3', '6', 'BCA', 'ENGLISH', 'YES', 'YES', 'Welcome@123'),
(2524543, 'M2013318', 'Shraddha Chougule', 'Mangal ', 'Sunil', 2147483647, 'female', 'Indian', 'Hindu', '2002-08-17', '2020-09-29', '', '3', '6', 'BCA', 'ENGLISH', 'YES', 'NO', 'Welcome@123');

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `s_id` int(11) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `studentname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`s_id`, `usn`, `studentname`) VALUES
(2, 'M2013285', 'Prajyota Samaje'),
(3, 'M2013285', 'Prajyota Samaje'),
(4, 'M2013285', 'Prajyota Samaje');

-- --------------------------------------------------------

--
-- Table structure for table `tcissued`
--

CREATE TABLE `tcissued` (
  `tcissued_id` int(11) NOT NULL,
  `tcno` int(11) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tcissued`
--

INSERT INTO `tcissued` (`tcissued_id`, `tcno`, `usn`, `studentname`, `date`) VALUES
(116, 192, 'M2013247', 'Komal Chougala', '26-08-23 08:12:41'),
(154, 228, 'M2013247', 'Komal Chougala', '29-08-23 12:44:08'),
(155, 229, 'M2013247', 'Komal Chougala', '29-08-23 12:44:09'),
(156, 230, 'M2013247', 'Komal Chougala', '31-08-23 02:22:03'),
(157, 231, 'M2013285', 'Prajyota Samaje', '31-08-23 05:46:13'),
(158, 232, 'M2013285', 'Prajyota Samaje', '31-08-23 05:48:36'),
(159, 233, 'M2013247', 'Komal Chougala', '03-11-23 02:49:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonofied`
--
ALTER TABLE `bonofied`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `givef`
--
ALTER TABLE `givef`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `req`
--
ALTER TABLE `req`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tcissued`
--
ALTER TABLE `tcissued`
  ADD PRIMARY KEY (`tcissued_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonofied`
--
ALTER TABLE `bonofied`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `givef`
--
ALTER TABLE `givef`
  MODIFY `f_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `req`
--
ALTER TABLE `req`
  MODIFY `req_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tcissued`
--
ALTER TABLE `tcissued`
  MODIFY `tcissued_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `givef`
--
ALTER TABLE `givef`
  ADD CONSTRAINT `givef_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `req`
--
ALTER TABLE `req`
  ADD CONSTRAINT `req_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
