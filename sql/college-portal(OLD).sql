-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 09:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(4, 1, 'VAnshika ', 'Ok , well connect it', 5, '2022-01-29 22:56:07'),
(5, 1, 'saurav chaudhary', 'Totally wrong website use', 4, '2022-01-30 02:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(11) NOT NULL,
  `cshort` varchar(50) DEFAULT NULL,
  `cfull` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `id` int(11) NOT NULL,
  `noticeTitle` varchar(255) DEFAULT NULL,
  `noticeDetails` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`id`, `noticeTitle`, `noticeDetails`, `postingDate`) VALUES
(8, 'Welcome notice', 'This is welcome page notice', '2022-01-29 20:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `loginid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `loginid`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `cid` int(11) NOT NULL,
  `cshort` varchar(250) DEFAULT NULL,
  `cfull` varchar(250) DEFAULT NULL,
  `cdate` varchar(50) DEFAULT NULL,
  `update_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`cid`, `cshort`, `cfull`, `cdate`, `update_date`) VALUES
(9, 'SSC', 'SSC GD', '29-01-2022', '31-01-2022');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Registration_No` varchar(255) NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Activity` varchar(100) NOT NULL,
  `Registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `mobile`, `password`, `Registration_No`, `country`, `state`, `code`, `status`, `Activity`, `Registration_date`) VALUES
(1, 'saurav', 'kumar', 'sauravchaudhary774@gmail.com', 9899856457, '$2y$10$iRtblz4tMNA8gh9QAi7oCuz2ZBLUSgEQSN9g5mn4vCZcFb3t3JLL.', '2201388935', 'India', 'New Delhi', '0', 'verified', '0', '2022-01-28 23:53:55'),
(2, 'Abhishek', 'kumar', 'Aksurboss@gmail.com', 7895451265, '$2y$10$fRxN/qWAcm7CXck1NC5lHuLai65tZIAfXJQMo9k3ggvUVFaQRo2RK', '2201218645', 'India', 'New Delhi', '0', 'verified', '0', '2022-01-30 14:04:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
