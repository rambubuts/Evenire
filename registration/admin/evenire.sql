-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 07:16 AM
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
(1, 'Shim Bardo', 'Dira lang sa unahan', '09123456789', 'shimbardo@gmail.com', NULL, 1),
(12, 'ram', 'Brgy Obrero Butuan', '091010101010', 'rambubuts@gmail.com', 'type kita', 1),
(13, 'ed', 'Brgy No Where To go', '09230402344', 'asda@gmail.com', 'di kita type', 1);

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
(5, 'Hope Not', 'Conference', 'Goverment & Politics', 1, 0),
(6, 'Signal', 'Conference', 'School Activities', 1, 0),
(7, 'Fancy', 'Seminar or Talk', 'Science & Technology', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_bundle`
--

CREATE TABLE `event_bundle` (
  `event_bundle_id` int(11) NOT NULL,
  `event_bundle_description` varchar(100) DEFAULT NULL,
  `event_bundle_type` varchar(255) NOT NULL,
  `event_event_id` int(11) NOT NULL,
  `event_accounts_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_bundle`
--

INSERT INTO `event_bundle` (`event_bundle_id`, `event_bundle_description`, `event_bundle_type`, `event_event_id`, `event_accounts_account_id`) VALUES
(2, 'Latnamin', 'Foods', 5, 1),
(3, 'Latnamin', 'T-Shirts', 6, 1),
(4, 'Latnamin', 'Stickers', 7, 12);

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

--
-- Dumping data for table `event_img`
--

INSERT INTO `event_img` (`event_img_id`, `event_img`, `event_event_id`, `event_accounts_account_id`) VALUES
(3, 'Cosmetic_icon_Blades_of_Voth_Domosh.png', 5, 1),
(4, 'Cosmetic_icon_Demon_Eater.png', 6, 1),
(5, 'Cosmetic_icon_Feast_of_Abscession.png', 7, 12);

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
  `event_attendees` int(11) NOT NULL,
  `event_setting` varchar(45) DEFAULT NULL,
  `event_event_id` int(11) NOT NULL,
  `event_accounts_account_id` int(11) NOT NULL,
  `event_description` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_id`, `event_location`, `event_started_date`, `event_end_date`, `event_start_time`, `event_end_time`, `event_attendees`, `event_setting`, `event_event_id`, `event_accounts_account_id`, `event_description`) VALUES
(4, 'Ila pakbet', '2019-06-25', '2019-06-25', '08:00:00', '13:00:00', 10, 'Private Event', 5, 1, '$event_img_data = array(\"event_img\"=>$this->input->post(\"file_image\"),\"event_event_id\"=>$result,\"event_accounts_account_id\" =>\"1\");'),
(5, 'Ila pakbet', '2019-06-25', '2019-06-25', '20:00:00', '22:00:00', 15, 'Public Event', 6, 1, 'Science teacher dirty mind'),
(6, 'Ila pakbet', '2019-06-26', '2019-06-28', '08:00:00', '17:00:00', 25, 'Private Event', 7, 12, 'CREATE  TABLE IF NOT EXISTS `mydb`.`certificate` (\r\n  `certificate_id` INT(11) NOT NULL ,\r\n  `event_event_id` INT(11) NOT NULL ,\r\n  `event_accounts_account_id` INT(11) NOT NULL ,\r\n  PRIMARY KEY (`certificate_id`, `event_event');

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

--
-- Dumping data for table `event_program`
--

INSERT INTO `event_program` (`event_program_id`, `event_program_topic`, `event_handle`, `event_handle_sched`, `event_event_id`, `event_accounts_account_id`) VALUES
(3, 'How to', 'No Idea', '01:00:00', 5, 1),
(4, 'How to', 'No Idea', '01:00:00', 6, 1),
(5, 'How to', 'No Idea', '10:00:00', 7, 12);

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

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `accounts_account_id`) VALUES
(1, 'shimbardo', '1234', 1),
(2, 'pakbet', '1234', 12);

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
  ADD KEY `fk_attendance_event1_idx` (`event_event_id`,`event_accounts_account_id`),
  ADD KEY `attendance_ibfk_1` (`event_accounts_account_id`,`event_event_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`certificate_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_certificate_event1_idx` (`event_event_id`,`event_accounts_account_id`),
  ADD KEY `event_accounts_account_id` (`event_accounts_account_id`,`event_event_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `accounts_account_id` (`accounts_account_id`);

--
-- Indexes for table `event_bundle`
--
ALTER TABLE `event_bundle`
  ADD PRIMARY KEY (`event_bundle_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_bundle_event1_idx` (`event_event_id`,`event_accounts_account_id`),
  ADD KEY `event_accounts_account_id` (`event_accounts_account_id`,`event_event_id`);

--
-- Indexes for table `event_img`
--
ALTER TABLE `event_img`
  ADD PRIMARY KEY (`event_img_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_img_event1_idx` (`event_event_id`,`event_accounts_account_id`),
  ADD KEY `event_accounts_account_id` (`event_accounts_account_id`,`event_event_id`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_info_event1_idx` (`event_event_id`,`event_accounts_account_id`),
  ADD KEY `event_accounts_account_id_2` (`event_accounts_account_id`,`event_id`),
  ADD KEY `event_info_ibfk_1` (`event_accounts_account_id`,`event_event_id`);

--
-- Indexes for table `event_payment`
--
ALTER TABLE `event_payment`
  ADD PRIMARY KEY (`event_payment_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_payment_event1_idx` (`event_event_id`,`event_accounts_account_id`),
  ADD KEY `event_accounts_account_id` (`event_accounts_account_id`,`event_event_id`);

--
-- Indexes for table `event_program`
--
ALTER TABLE `event_program`
  ADD PRIMARY KEY (`event_program_id`,`event_event_id`,`event_accounts_account_id`),
  ADD KEY `fk_event_speaker_event1_idx` (`event_event_id`,`event_accounts_account_id`),
  ADD KEY `event_program_ibfk_1` (`event_accounts_account_id`,`event_event_id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event_bundle`
--
ALTER TABLE `event_bundle`
  MODIFY `event_bundle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_img`
--
ALTER TABLE `event_img`
  MODIFY `event_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_payment`
--
ALTER TABLE `event_payment`
  MODIFY `event_payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_program`
--
ALTER TABLE `event_program`
  MODIFY `event_program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`event_accounts_account_id`,`event_event_id`) REFERENCES `events` (`accounts_account_id`, `event_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `certificate_ibfk_1` FOREIGN KEY (`event_accounts_account_id`,`event_event_id`) REFERENCES `events` (`accounts_account_id`, `event_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_bundle`
--
ALTER TABLE `event_bundle`
  ADD CONSTRAINT `event_bundle_ibfk_1` FOREIGN KEY (`event_accounts_account_id`,`event_event_id`) REFERENCES `events` (`accounts_account_id`, `event_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_img`
--
ALTER TABLE `event_img`
  ADD CONSTRAINT `event_img_ibfk_1` FOREIGN KEY (`event_accounts_account_id`,`event_event_id`) REFERENCES `events` (`accounts_account_id`, `event_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_info`
--
ALTER TABLE `event_info`
  ADD CONSTRAINT `event_info_ibfk_1` FOREIGN KEY (`event_accounts_account_id`,`event_event_id`) REFERENCES `events` (`accounts_account_id`, `event_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_payment`
--
ALTER TABLE `event_payment`
  ADD CONSTRAINT `event_payment_ibfk_1` FOREIGN KEY (`event_accounts_account_id`,`event_event_id`) REFERENCES `events` (`accounts_account_id`, `event_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_program`
--
ALTER TABLE `event_program`
  ADD CONSTRAINT `event_program_ibfk_1` FOREIGN KEY (`event_accounts_account_id`,`event_event_id`) REFERENCES `events` (`accounts_account_id`, `event_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`accounts_account_id`) REFERENCES `accounts` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login_history`
--
ALTER TABLE `login_history`
  ADD CONSTRAINT `fk_login_history_login1` FOREIGN KEY (`login_id`,`login_accounts_account_id`) REFERENCES `login` (`id`, `accounts_account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `mail_ibfk_1` FOREIGN KEY (`accounts_account_id`) REFERENCES `accounts` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
