-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 05:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `form_id` int(5) NOT NULL,
  `c_class` varchar(255) NOT NULL,
  `c_session` varchar(255) NOT NULL,
  `c_photo` text NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_dd` varchar(255) NOT NULL,
  `c_mm` varchar(255) NOT NULL,
  `c_yy` varchar(255) NOT NULL,
  `c_father_nam` varchar(255) NOT NULL,
  `c_father_qua` varchar(255) NOT NULL,
  `c_father_occu` varchar(255) NOT NULL,
  `c_mother_nam` varchar(255) NOT NULL,
  `c_mother_qua` varchar(255) NOT NULL,
  `c_mother_occu` varchar(255) NOT NULL,
  `c_anu_inc` varchar(255) NOT NULL,
  `c_legGurNamFa` varchar(255) NOT NULL,
  `c_legGurNamMo` varchar(255) NOT NULL,
  `c_relationPupil` varchar(255) NOT NULL,
  `c_pAddress` varchar(255) NOT NULL,
  `c_pinCode` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_pupil_SC` varchar(255) NOT NULL,
  `a_class` varchar(255) NOT NULL,
  `a_photo` text NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_fathernam` varchar(255) NOT NULL,
  `a_dtofXM` varchar(255) NOT NULL,
  `a_pupilSchool` varchar(255) NOT NULL,
  `a_pupilClass` varchar(255) NOT NULL,
  `a_eng` varchar(255) NOT NULL,
  `a_bag` varchar(255) NOT NULL,
  `a_math` varchar(255) NOT NULL,
  `a_sci` varchar(255) NOT NULL,
  `a_aggre` varchar(255) NOT NULL,
  `h_l` varchar(255) NOT NULL,
  `adhaarCardNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`form_id`, `c_class`, `c_session`, `c_photo`, `c_name`, `c_dd`, `c_mm`, `c_yy`, `c_father_nam`, `c_father_qua`, `c_father_occu`, `c_mother_nam`, `c_mother_qua`, `c_mother_occu`, `c_anu_inc`, `c_legGurNamFa`, `c_legGurNamMo`, `c_relationPupil`, `c_pAddress`, `c_pinCode`, `c_phone`, `c_pupil_SC`, `a_class`, `a_photo`, `a_name`, `a_fathernam`, `a_dtofXM`, `a_pupilSchool`, `a_pupilClass`, `a_eng`, `a_bag`, `a_math`, `a_sci`, `a_aggre`, `h_l`, `adhaarCardNo`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'vi', '2022', 'h2.jpg', 'Kh Mehedi Hasan', '19', '1', '2010', 'Kh Mehedi Hasan', 'SSC', 'Job', 'Kh Mehedi Hasan', 'SSC', 'Job', '435', 'Father', 'Mother', 'Mother', 'Dhaka', '1216', '01620 564288', 'SSC', 'Class V', '', 'Kh Mehedi Hasan', 'KH', '12-9-12120', 'Dhaka', 'ret', '34', '4', '4', '4657', '457', '1', '235'),
(4, 'vi', '2022', 'h2.jpg', 'Kh Mehedi Hasan', '19', '1', '2010', 'Kh Mehedi Hasan', 'SSC', 'Job', 'Kh Mehedi Hasan', 'SSC', 'Job', '435', 'Father', 'Mother', 'Mother', 'Dhaka', '1216', '01620 564288', 'SSC', 'Class V', '', 'Kh Mehedi Hasan', 'KH', '12-9-12120', 'Dhaka', 'ret', '34', '4', '4', '4657', '457', '1', '235'),
(5, 'vi', '2022', 'h2.jpg', 'Kh Mehedi Hasan', '19', '1', '2010', 'Kh Mehedi Hasan', 'SSC', 'Job', 'Kh Mehedi Hasan', 'SSC', 'Job', '435', 'Father', 'Mother', 'Mother', 'Dhaka', '1216', '01620 564288', 'SSC', 'Class V', '', 'Kh Mehedi Hasan', 'KH', '12-9-12120', 'Dhaka', 'ret', '34', '4', '4', '4657', '457', '1', '235'),
(6, 'vi', '2022', 'h2.jpg', 'Kh Mehedi Hasan', '19', '1', '2010', 'Kh Mehedi Hasan', 'SSC', 'Job', 'Kh Mehedi Hasan', 'SSC', 'Job', '435', 'Father', 'Mother', 'Mother', 'Dhaka', '1216', '01620 564288', 'SSC', 'Class V', '', 'Kh Mehedi Hasan', 'KH', '12-9-12120', 'Dhaka', 'ret', '34', '4', '4', '4657', '457', '1', '235'),
(7, 'vi', '2022', 'h2.jpg', 'Kh Mehedi Hasan', '19', '1', '2010', 'Kh Mehedi Hasan', 'SSC', 'Job', 'Kh Mehedi Hasan', 'SSC', 'Job', '435', 'Father', 'Mother', 'Mother', 'Dhaka', '1216', '01620 564288', 'SSC', 'Class V', '', 'Kh Mehedi Hasan', 'KH', '12-9-12120', 'Dhaka', 'ret', '34', '4', '4', '4657', '457', '1', '235'),
(8, 'vi', '2022', 'h2.jpg', 'Kh Mehedi Hasan', '19', '1', '2010', 'Kh Mehedi Hasan', 'SSC', 'Job', 'Kh Mehedi Hasan', 'SSC', 'Job', '435', 'Father', 'Mother', 'Mother', 'Dhaka', '1216', '01620 564288', 'SSC', 'Class V', '', 'Kh Mehedi Hasan', 'KH', '12-9-12120', 'Dhaka', 'ret', '34', '4', '4', '4657', '457', '1', '235'),
(9, 'vi', '2022', 'h2.jpg', 'Kh Mehedi Hasan', '19', '1', '2010', 'Kh Mehedi Hasan', 'SSC', 'Job', 'Kh Mehedi Hasan', 'SSC', 'Job', '435', 'Father', 'Mother', 'Mother', 'Dhaka', '1216', '01620 564288', 'SSC', 'Class V', '', 'Kh Mehedi Hasan', 'KH', '12-9-12120', 'Dhaka', 'ret', '34', '4', '4', '4657', '457', '1', '235'),
(13, 'v', '2022', 'IMG_20210112_165312.jpg', 'Kh Mehedi Hasan', '19', '3', '2011', 'Kh Mehedi Hasan', 'SSC', 'Job', 'Kh Mehedi Hasan', 'SSC', 'Job', '34567', 'Father', 'Mother', 'Mother', 'Dhaka', '1216', '01620 564288', '354', 'Class IV', '', 'Kh Mehedi Hasan', 'KH', '', 'Dhaka', 'ret', '34', '4', '4', '4657', '457', '2', '3546');

-- --------------------------------------------------------

--
-- Table structure for table `classv`
--

CREATE TABLE `classv` (
  `form_id` int(5) NOT NULL,
  `c_class` varchar(255) NOT NULL,
  `c_session` varchar(255) NOT NULL,
  `c_photo` text NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_dd` varchar(255) NOT NULL,
  `c_mm` varchar(255) NOT NULL,
  `c_yy` varchar(255) NOT NULL,
  `c_father_nam` varchar(255) NOT NULL,
  `c_father_qua` varchar(255) NOT NULL,
  `c_father_occu` varchar(255) NOT NULL,
  `c_mother_nam` varchar(255) NOT NULL,
  `c_mother_qua` varchar(255) NOT NULL,
  `c_mother_occu` varchar(255) NOT NULL,
  `c_anu_inc` varchar(255) NOT NULL,
  `c_legGurNamFa` varchar(255) NOT NULL,
  `c_legGurNamMo` varchar(255) NOT NULL,
  `c_relationPupil` varchar(255) NOT NULL,
  `c_pAddress` varchar(255) NOT NULL,
  `c_pinCode` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_pupil_SC` varchar(255) NOT NULL,
  `a_class` varchar(255) NOT NULL,
  `a_photo` text NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_fathernam` varchar(255) NOT NULL,
  `a_dtofXM` varchar(255) NOT NULL,
  `a_pupilSchool` varchar(255) NOT NULL,
  `a_pupilClass` varchar(255) NOT NULL,
  `a_eng` varchar(255) NOT NULL,
  `a_bag` varchar(255) NOT NULL,
  `a_math` varchar(255) NOT NULL,
  `a_sci` varchar(255) NOT NULL,
  `a_aggre` varchar(255) NOT NULL,
  `h_l` varchar(255) NOT NULL,
  `adhaarCardNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classvi`
--

CREATE TABLE `classvi` (
  `form_id` int(5) NOT NULL,
  `c_class` varchar(255) NOT NULL,
  `c_session` varchar(255) NOT NULL,
  `c_photo` text NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_dd` varchar(255) NOT NULL,
  `c_mm` varchar(255) NOT NULL,
  `c_yy` varchar(255) NOT NULL,
  `c_father_nam` varchar(255) NOT NULL,
  `c_father_qua` varchar(255) NOT NULL,
  `c_father_occu` varchar(255) NOT NULL,
  `c_mother_nam` varchar(255) NOT NULL,
  `c_mother_qua` varchar(255) NOT NULL,
  `c_mother_occu` varchar(255) NOT NULL,
  `c_anu_inc` varchar(255) NOT NULL,
  `c_legGurNamFa` varchar(255) NOT NULL,
  `c_legGurNamMo` varchar(255) NOT NULL,
  `c_relationPupil` varchar(255) NOT NULL,
  `c_pAddress` varchar(255) NOT NULL,
  `c_pinCode` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_pupil_SC` varchar(255) NOT NULL,
  `a_class` varchar(255) NOT NULL,
  `a_photo` text NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_fathernam` varchar(255) NOT NULL,
  `a_dtofXM` varchar(255) NOT NULL,
  `a_pupilSchool` varchar(255) NOT NULL,
  `a_pupilClass` varchar(255) NOT NULL,
  `a_eng` varchar(255) NOT NULL,
  `a_bag` varchar(255) NOT NULL,
  `a_math` varchar(255) NOT NULL,
  `a_sci` varchar(255) NOT NULL,
  `a_aggre` varchar(255) NOT NULL,
  `h_l` varchar(255) NOT NULL,
  `adhaarCardNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(5) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `pass`) VALUES
(111222333, '7c12f7f5bc98a0893b40ae5b580249b4c49f037f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `classv`
--
ALTER TABLE `classv`
  ADD PRIMARY KEY (`form_id`),
  ADD UNIQUE KEY `c_phone` (`c_phone`),
  ADD UNIQUE KEY `form_id` (`form_id`);

--
-- Indexes for table `classvi`
--
ALTER TABLE `classvi`
  ADD PRIMARY KEY (`form_id`),
  ADD UNIQUE KEY `form_id` (`form_id`),
  ADD UNIQUE KEY `c_phone` (`c_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `form_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `classv`
--
ALTER TABLE `classv`
  MODIFY `form_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classvi`
--
ALTER TABLE `classvi`
  MODIFY `form_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
