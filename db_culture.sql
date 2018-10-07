-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 02:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_culture`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'คณะวิทยาศาสตร์และเทคโนโลยี');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_name` varchar(200) NOT NULL,
  `media_detail` varchar(500) NOT NULL,
  `media_link` varchar(200) NOT NULL,
  `media_type_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `media_insert_date` datetime NOT NULL,
  `media_last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `media_name`, `media_detail`, `media_link`, `media_type_id`, `staff_id`, `media_insert_date`, `media_last_update`) VALUES
(1, 'rrrqqqq445577', 'GGGGHH445577', '36589918_1665798203488931_7833291573558247424_n.jpg', 1, 1, '0000-00-00 00:00:00', '2018-10-06 19:53:16'),
(2, 'Doc', 'document', '001.docx', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Sound 1', 'Sound 1', '001.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Sound 2', 'Sound 2', '002.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Sound 3', 'Sound 3', '003.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Sound 4', 'Sound 4', '004.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'rrrqqqq00000', 'GGGGHH00000', '36589918_1665798203488931_7833291573558247424_n.jpg', 4, 1, '0000-00-00 00:00:00', '2018-10-06 17:02:39'),
(9, 'rrrqqqq4455', 'GGGGHH4455', '36589918_1665798203488931_7833291573558247424_n.jpg', 1, 1, '0000-00-00 00:00:00', '2018-10-06 19:53:09'),
(12, 'Video 411', 'Video 411', '004.mp4', 3, 1, '0000-00-00 00:00:00', '2018-10-06 19:56:22'),
(13, 'Video 4', 'Video 4', '004.mp4', 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Video 4', 'Video 4', '004.mp4', 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Sound 4', 'Sound 4', '004.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Sound 3', 'Sound 3', '003.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Sound 4', 'Sound 4', '004.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'QR', 'GGGG', '2018100619450961161124-002 QR Scan.pdf', 2, 1, '2018-10-06 19:45:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `media_type`
--

CREATE TABLE `media_type` (
  `media_type_id` int(11) NOT NULL,
  `media_type_name` varchar(200) NOT NULL,
  `media_type_folder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_type`
--

INSERT INTO `media_type` (`media_type_id`, `media_type_name`, `media_type_folder`) VALUES
(1, 'ภาพ', 'pic'),
(2, 'เอกสาร', 'document'),
(3, 'วิดีโอ', 'video'),
(4, 'เสียง', 'sound');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_fullname` varchar(200) NOT NULL,
  `staff_reg_date` datetime NOT NULL,
  `staff_username` varchar(200) NOT NULL,
  `staff_password` varchar(200) NOT NULL,
  `department_id` int(11) NOT NULL,
  `staff_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_fullname`, `staff_reg_date`, `staff_username`, `staff_password`, `department_id`, `staff_type_id`) VALUES
(1, 'Adam Furent', '2018-07-02 10:00:00', 'admin', 'admin', 1, 1),
(7, 'JJ', '2018-07-05 19:22:44', 'tttt', 'tttt', 1, 3),
(8, 'GGAA', '2018-07-05 19:26:31', 'ggaa', 'ggaa', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_type`
--

CREATE TABLE `staff_type` (
  `staff_type_id` int(11) NOT NULL,
  `staff_type_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff_type`
--

INSERT INTO `staff_type` (`staff_type_id`, `staff_type_name`) VALUES
(1, 'ผู้ดูแลระบบ'),
(2, 'ผู้เชียวชาญ'),
(3, 'นักศึกษา');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `media_type`
--
ALTER TABLE `media_type`
  ADD PRIMARY KEY (`media_type_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staff_type`
--
ALTER TABLE `staff_type`
  ADD PRIMARY KEY (`staff_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `media_type`
--
ALTER TABLE `media_type`
  MODIFY `media_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `staff_type`
--
ALTER TABLE `staff_type`
  MODIFY `staff_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
