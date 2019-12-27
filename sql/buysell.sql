-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2019 at 06:55 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buysell`
--
CREATE DATABASE IF NOT EXISTS `buysell` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `buysell`;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `company_name` char(100) NOT NULL,
  `sno` int(11) NOT NULL,
  `category_code` char(100) NOT NULL,
  `data_source` char(100) NOT NULL,
  `segment_code` char(100) NOT NULL,
  `contact_person` char(100) NOT NULL,
  `designation` char(100) NOT NULL,
  `remarks` char(100) NOT NULL,
  `address_1` char(100) NOT NULL,
  `address_2` char(100) NOT NULL,
  `address_3` char(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `landline` int(11) NOT NULL,
  `whatsapp_no` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `email` char(100) NOT NULL,
  `webpage` char(100) NOT NULL,
  `created_by` char(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` char(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `segment_name` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `em_no` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `designation` char(100) NOT NULL,
  `dob` datetime NOT NULL,
  `address` char(100) NOT NULL,
  `official_no` int(11) NOT NULL,
  `personal_no` int(11) NOT NULL,
  `email` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `event_name` char(100) NOT NULL,
  `date` datetime NOT NULL,
  `location` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Leads`
--

CREATE TABLE `Leads` (
  `sno` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `employee_handling` char(100) NOT NULL,
  `data_source` char(100) NOT NULL,
  `event_name` char(100) NOT NULL,
  `company_name` char(100) NOT NULL,
  `contact_person` int(11) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `call_made_on` datetime NOT NULL,
  `follow_up_date` datetime NOT NULL,
  `status` char(100) NOT NULL,
  `remark` char(100) NOT NULL,
  `voice_recording_file_path` char(100) NOT NULL,
  `chat_conversation_file_path` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`company_name`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`em_no`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`event_name`);

--
-- Indexes for table `Leads`
--
ALTER TABLE `Leads`
  ADD PRIMARY KEY (`sno`);
ALTER TABLE `Leads` ADD FULLTEXT KEY `employee_handling` (`employee_handling`);
ALTER TABLE `Leads` ADD FULLTEXT KEY `company_name` (`company_name`);
ALTER TABLE `Leads` ADD FULLTEXT KEY `event_name` (`event_name`);
ALTER TABLE `Leads` ADD FULLTEXT KEY `event_name_2` (`event_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Leads`
--
ALTER TABLE `Leads`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
