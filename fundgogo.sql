-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 06:23 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundgogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_status`
--

CREATE TABLE `application_status` (
  `id` int(11) NOT NULL,
  `investors_id` int(9) NOT NULL,
  `fundseeker_application_id` int(9) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 - nothing, 1- review, 2- approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_status`
--

INSERT INTO `application_status` (`id`, `investors_id`, `fundseeker_application_id`, `status`) VALUES
(1, 1, 1, 1),
(3, 1, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fundseeker`
--

CREATE TABLE `fundseeker` (
  `fundseeker_id` int(11) NOT NULL,
  `fundseeker_name` varchar(100) NOT NULL,
  `fundseeker_email` varchar(100) NOT NULL,
  `fundseeker_dob` varchar(20) NOT NULL,
  `fundseeker_contact` varchar(15) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `date_of_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundseeker`
--

INSERT INTO `fundseeker` (`fundseeker_id`, `fundseeker_name`, `fundseeker_email`, `fundseeker_dob`, `fundseeker_contact`, `username`, `password`, `gender`, `date_of_reg`) VALUES
(1, 'Aziz Gura', 'azizgura@gmail.com', '24-04-95', '8696673753', 'azizgura', 'aziz1234', '1', '2019-02-25 07:27:53'),
(2, 'zainul', 'zainul@gmail.com', '', '1234567890', '', 'admin123', '', '2019-02-26 12:13:37'),
(3, 'chirag', 'chirag8966@gmail.com', '', '', '', 'admin123', '', '2019-02-27 06:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `fundseeker_application`
--

CREATE TABLE `fundseeker_application` (
  `fundseeker_application_id` int(11) NOT NULL,
  `fundseeker_id` int(9) NOT NULL,
  `description` text,
  `company` varchar(100) DEFAULT NULL,
  `adhaar_front` text,
  `adhaar_back` text,
  `adhaar` varchar(100) DEFAULT NULL,
  `pan_front` text,
  `pan_back` text,
  `pan` varchar(100) DEFAULT NULL,
  `gstin` varchar(20) DEFAULT NULL,
  `reg_num` varchar(50) DEFAULT NULL,
  `category` text,
  `turnover_id` text,
  `address` text,
  `website` text,
  `annual_report` text,
  `status` int(1) DEFAULT '0',
  `bank_status` int(1) NOT NULL DEFAULT '0' COMMENT '0- in Review, 1- Approved, 2- Completed',
  `date_of_apply` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `designation` text,
  `equity` text,
  `seek_amount` varchar(255) DEFAULT NULL,
  `shares` varchar(255) DEFAULT NULL,
  `money_invested` text,
  `lifespan` text,
  `money_raised` text,
  `money_raised_description` text,
  `other_info` text,
  `business_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundseeker_application`
--

INSERT INTO `fundseeker_application` (`fundseeker_application_id`, `fundseeker_id`, `description`, `company`, `adhaar_front`, `adhaar_back`, `adhaar`, `pan_front`, `pan_back`, `pan`, `gstin`, `reg_num`, `category`, `turnover_id`, `address`, `website`, `annual_report`, `status`, `bank_status`, `date_of_apply`, `designation`, `equity`, `seek_amount`, `shares`, `money_invested`, `lifespan`, `money_raised`, `money_raised_description`, `other_info`, `business_status`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet', 'Zain Technocrats', 'uploads/application/adhaar2452_front.png', 'uploads/application/adhaar2452_back.jpg', '82728934238642384', 'uploads/application/pan_front.png', 'uploads/application/pan_back.jpg', 'AXB9889A', '245276A', '245253A', '1', '2', 'test address', 'http://fundgogo.com', 'uploads/applciation/annual_report.pdf', 1, 2147483647, '2019-02-25 08:14:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 2, 'descriptio n sss', 'sample name', 'uploads/application/adhaar2452_front2.png', 'uploads/application/adhaar2452_back2.jpg', NULL, 'uploads/application/pan_front2.png', 'uploads/application/pan_back2.jpg', '1212', '1212122', NULL, 'sample type', 'turnover', 'sample address', 'smple website', NULL, 1, 0, '2019-02-26 13:39:56', 'designation', 'equit own', '1200', '10', 'money_inveted', 'lifespan', 'Yes', 'money raised descriptiobion', 'Other ifo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `investors_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_of_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `investors_name` varchar(30) NOT NULL,
  `investors_contact` varchar(30) DEFAULT NULL,
  `investors_email` varchar(30) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `address` text,
  `website` varchar(50) DEFAULT NULL,
  `gstin` varchar(30) DEFAULT NULL,
  `pan` varchar(30) DEFAULT NULL,
  `pan_image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`investors_id`, `username`, `password`, `date_of_reg`, `investors_name`, `investors_contact`, `investors_email`, `company`, `type`, `status`, `address`, `website`, `gstin`, `pan`, `pan_image`, `category_id`) VALUES
(1, 'zain51512', 'admin123', '2019-02-25 11:19:18', 'Zain', '987654321', 'zain5152@gmail.com', 'Softify De', 'Company', 1, '221B Baker Street ', 'https://www.google.com', '245276A', 'AASD0PQW', 'uploads/investors/pan_front.png', 0),
(2, 'zain51512', 'admin123', '2019-02-25 11:19:18', 'Zain', '987654321', 'zain5152@gmail.com', 'Softify De', 'Company', 1, '221B Baker Street ', 'https://www.google.com', '245276A', 'AASD0PQW', 'uploads/investors/pan_front.png', 0),
(3, 'zain51512', 'admin123', '2019-02-25 11:19:18', 'Zain', '987654321', 'zain5152@gmail.com', 'Softify De', 'Company', 1, '221B Baker Street ', 'https://www.google.com', '245276A', 'AASD0PQW', 'uploads/investors/pan_front.png', 0),
(5, 'zain51512', 'admin123', '2019-02-25 11:19:18', 'Ajju Bai', '987654321', 'zain5152@gmail.com', 'Softify De', 'Company', 1, '221B Baker Street ', 'https://www.google.com', '245276A', 'AASD0PQW', 'uploads/investors/pan_front.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 72.0.3626.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.109 Safari/537.36', 'Windows 10', '2019-02-25 11:41:49'),
(2, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 72.0.3626.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.109 Safari/537.36', 'Windows 10', '2019-02-26 14:02:17'),
(3, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 72.0.3626.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.109 Safari/537.36', 'Windows 10', '2019-02-27 11:33:18'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 72.0.3626.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.109 Safari/537.36', 'Windows 10', '2019-02-27 15:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@example.com', '$2y$10$6NOKhXKiR2SAgpFF2WpCkuRgYKlSqFJaqM0NgIM3PT1gKHEM5/SM6', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2018-01-05 05:56:34'),
(2, 'manager@example.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2018-01-12 07:22:11'),
(3, 'employee@example.com', '$2y$10$UYsH1G7MkDg1cutOdgl2Q.ZbXjyX.CSjsdgQKvGzAgl60RXZxpB5u', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', 3, '2018-01-04 07:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `turnover`
--

CREATE TABLE `turnover` (
  `turnover_id` int(11) NOT NULL,
  `turnover_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turnover`
--

INSERT INTO `turnover` (`turnover_id`, `turnover_name`) VALUES
(1, 'Under 1 Lac'),
(2, '1 lac - 5 lac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_status`
--
ALTER TABLE `application_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `fundseeker`
--
ALTER TABLE `fundseeker`
  ADD PRIMARY KEY (`fundseeker_id`);

--
-- Indexes for table `fundseeker_application`
--
ALTER TABLE `fundseeker_application`
  ADD PRIMARY KEY (`fundseeker_application_id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`investors_id`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `turnover`
--
ALTER TABLE `turnover`
  ADD PRIMARY KEY (`turnover_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_status`
--
ALTER TABLE `application_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fundseeker`
--
ALTER TABLE `fundseeker`
  MODIFY `fundseeker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fundseeker_application`
--
ALTER TABLE `fundseeker_application`
  MODIFY `fundseeker_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `investors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `turnover`
--
ALTER TABLE `turnover`
  MODIFY `turnover_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
