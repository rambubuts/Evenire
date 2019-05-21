-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 05:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evenire`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(45) DEFAULT NULL,
  `account_address` varchar(100) DEFAULT NULL,
  `account_contact` varchar(45) DEFAULT NULL,
  `account_email` varchar(45) DEFAULT NULL,
  `account_type` varchar(45) DEFAULT NULL,
  `account_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `account_name`, `account_address`, `account_contact`, `account_email`, `account_type`, `account_status`) VALUES
(12, 'ram', 'Brgy Obrero Butuan', '091010101010', 'rambubuts@gmail.com', 'type kita', 0),
(13, 'ed', 'Brgy No Where To go', '09230402344', 'asda@gmail.com', 'di kita type', 2);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `event_event_id` int(11) NOT NULL,
  `event_accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `certificate_id` int(11) NOT NULL,
  `event_event_id` int(11) NOT NULL,
  `event_accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(45) DEFAULT NULL,
  `event_type` varchar(45) DEFAULT NULL,
  `event_category` varchar(45) DEFAULT NULL,
  `accounts_account_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_type`, `event_category`, `accounts_account_id`, `status`) VALUES
(1, 'Graduation', 'Hilak2', 'hug2', 13, 0),
(2, 'Clearance Signing', 'Gukod2', 'Pirma2', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_bundle`
--

CREATE TABLE `event_bundle` (
  `event_bundle_id` int(11) NOT NULL,
  `event_bundle_description` varchar(100) DEFAULT NULL,
  `event_event_id` int(11) NOT NULL,
  `event_accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_img`
--

CREATE TABLE `event_img` (
  `event_img_id` int(11) NOT NULL,
  `event_img` varchar(45) DEFAULT NULL,
  `event_event_id` int(11) NOT NULL,
  `event_accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `event_id` int(11) NOT NULL,
  `event_location` varchar(45) DEFAULT NULL,
  `event_started_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `event_start_time` time DEFAULT NULL,
  `event_end_time` time DEFAULT NULL,
  `event_setting` varchar(45) DEFAULT NULL,
  `event_event_id` int(11) NOT NULL,
  `event_accounts_account_id` int(11) NOT NULL,
  `event_description` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_id`, `event_location`, `event_started_date`, `event_end_date`, `event_start_time`, `event_end_time`, `event_setting`, `event_event_id`, `event_accounts_account_id`, `event_description`) VALUES
(1, 'Dotties of Asia', '2019-05-13', '2019-05-13', '08:00:00', '12:00:00', 'Settings ni', 2, 12, 'Kaon2');

-- --------------------------------------------------------

--
-- Table structure for table `event_payment`
--

CREATE TABLE `event_payment` (
  `event_payment_id` int(11) NOT NULL,
  `event_payment_type` varchar(45) DEFAULT NULL,
  `event_payment_amount` double DEFAULT NULL,
  `event_event_id` int(11) NOT NULL,
  `event_accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_program`
--

CREATE TABLE `event_program` (
  `event_program_id` int(11) NOT NULL,
  `event_program_topic` varchar(45) DEFAULT NULL,
  `event_handle` varchar(45) DEFAULT NULL,
  `event_handle_sched` time DEFAULT NULL,
  `event_event_id` int(11) NOT NULL,
  `event_accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `log_history_id` int(11) NOT NULL,
  `log_date` date DEFAULT NULL,
  `log_time` time DEFAULT NULL,
  `login_id` int(11) NOT NULL,
  `login_accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `mail_type` varchar(45) DEFAULT NULL,
  `mail_content` varchar(45) DEFAULT NULL,
  `accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_attendance_event1_idx` (`event_event_id`,`event_accounts_account_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`certificate_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_certificate_event1_idx` (`event_event_id`,`event_accounts_account_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`,`accounts_account_id`),
  ADD KEY `fk_event_accounts1_idx` (`accounts_account_id`);

--
-- Indexes for table `event_bundle`
--
ALTER TABLE `event_bundle`
  ADD PRIMARY KEY (`event_bundle_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_bundle_event1_idx` (`event_event_id`,`event_accounts_account_id`);

--
-- Indexes for table `event_img`
--
ALTER TABLE `event_img`
  ADD PRIMARY KEY (`event_img_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_img_event1_idx` (`event_event_id`,`event_accounts_account_id`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_info_event1_idx` (`event_event_id`,`event_accounts_account_id`);

--
-- Indexes for table `event_payment`
--
ALTER TABLE `event_payment`
  ADD PRIMARY KEY (`event_payment_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_payment_event1_idx` (`event_event_id`,`event_accounts_account_id`);

--
-- Indexes for table `event_program`
--
ALTER TABLE `event_program`
  ADD PRIMARY KEY (`event_program_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_speaker_event1_idx` (`event_event_id`,`event_accounts_account_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`,`accounts_account_id`),
  ADD KEY `fk_login_accounts_idx` (`accounts_account_id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`log_history_id`,`login_id`,`login_accounts_account_id`),
  ADD KEY `fk_login_history_login1_idx` (`login_id`,`login_accounts_account_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`,`accounts_account_id`),
  ADD KEY `fk_mail_accounts1_idx` (`accounts_account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk_attendance_event1` FOREIGN KEY (`event_event_id`,`event_accounts_account_id`) REFERENCES `events` (`event_id`, `accounts_account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `fk_certificate_event1` FOREIGN KEY (`event_event_id`,`event_accounts_account_id`) REFERENCES `events` (`event_id`, `accounts_account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_event_accounts1` FOREIGN KEY (`accounts_account_id`) REFERENCES `accounts` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_bundle`
--
ALTER TABLE `event_bundle`
  ADD CONSTRAINT `fk_event_bundle_event1` FOREIGN KEY (`event_event_id`,`event_accounts_account_id`) REFERENCES `events` (`event_id`, `accounts_account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_img`
--
ALTER TABLE `event_img`
  ADD CONSTRAINT `fk_event_img_event1` FOREIGN KEY (`event_event_id`,`event_accounts_account_id`) REFERENCES `events` (`event_id`, `accounts_account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_info`
--
ALTER TABLE `event_info`
  ADD CONSTRAINT `fk_event_info_event1` FOREIGN KEY (`event_event_id`,`event_accounts_account_id`) REFERENCES `events` (`event_id`, `accounts_account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_payment`
--
ALTER TABLE `event_payment`
  ADD CONSTRAINT `fk_event_payment_event1` FOREIGN KEY (`event_event_id`,`event_accounts_account_id`) REFERENCES `events` (`event_id`, `accounts_account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_program`
--
ALTER TABLE `event_program`
  ADD CONSTRAINT `fk_event_speaker_event1` FOREIGN KEY (`event_event_id`,`event_accounts_account_id`) REFERENCES `events` (`event_id`, `accounts_account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_accounts` FOREIGN KEY (`accounts_account_id`) REFERENCES `accounts` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login_history`
--
ALTER TABLE `login_history`
  ADD CONSTRAINT `fk_login_history_login1` FOREIGN KEY (`login_id`,`login_accounts_account_id`) REFERENCES `login` (`id`, `accounts_account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `fk_mail_accounts1` FOREIGN KEY (`accounts_account_id`) REFERENCES `accounts` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
