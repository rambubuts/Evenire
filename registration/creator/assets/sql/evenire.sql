-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 06:35 PM
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
-- Table structure for table `events`
--

CREATE TABLE `events_info` (
  `id` int(11) NOT NULL,
  `event_name` varchar(128) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `event_category` varchar(255) NOT NULL,
  `event_venue` varchar(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_start_date` date NOT NULL,
  `event_start_time` time NOT NULL,
  `event_end_date` date NOT NULL,
  `event_end_time` time NOT NULL,
  `event_setting` varchar(255) NOT NULL,
  `event_description` varchar(128) NOT NULL,
  `event_image` varchar(255) NOT NULL,
  `event_participant` varchar(255) NOT NULL,
  `event_payable` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `events_speakers` (
  `id` int(11) NOT NULL,
  `event_topics` varchar(255) NOT NULL,
  `event_speaker` varchar(255) NOT NULL,
  `event_time` time NOT NULL,
  `fk_ei_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `events_bundles` (
  `id` int(11) NOT NULL,
  `event_bundle_type` varchar(255) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_time` time NOT NULL,
  `fk_ei_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `events_payment` (
  `id` int(11) NOT NULL,
  `event_payment_type` varchar(255) NOT NULL,
  `event_payment_amount` varchar(255) NOT NULL,
  `fk_ei_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for table `events_participants`
--
CREATE TABLE `events_participants` (
  `id` int(11) NOT NULL,
  `ep_fname` varchar(255) NOT NULL,
  `ep_lname` varchar(255) NOT NULL,
  `ep_email` varchar(255) NOT NULL,
  `ep_cp` varchar(255) NOT NULL,
  `ep_work_info` varchar(255) NOT NULL,
  `fk_ei_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `events`
--
--
-- Indexes for dumped tables
--
--
-- Indexes for table `events`
--
ALTER TABLE `events_info`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `events_speakers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `events_bundles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `events_payment`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `events_participants`
--
ALTER TABLE `events_participants`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

ALTER TABLE `events_speakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

ALTER TABLE `events_bundles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

ALTER TABLE `events_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

ALTER TABLE `events_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Foreign Keys for table events
--
ALTER TABLE `events_speakers`
  ADD FOREIGN KEY fk_event_speaker(`fk_ei_id`)
  REFERENCES events_info(`id`)
  ON DELETE NO ACTION
  ON UPDATE CASCADE;

ALTER TABLE `events_bundles`
  ADD FOREIGN KEY fk_event_bundles(`fk_ei_id`)
  REFERENCES events_info(`id`)
  ON DELETE NO ACTION
  ON UPDATE CASCADE;

ALTER TABLE `events_payment`
  ADD FOREIGN KEY fk_event_payment(`fk_ei_id`)
  REFERENCES events_info(`id`)
  ON DELETE NO ACTION
  ON UPDATE CASCADE;
--
-- AUTO_INCREMENT for table `events`
--
--
-- Foreign Keys for table events
--
ALTER TABLE `events_participants`
  ADD FOREIGN KEY fk_event_participants(`fk_ei_id`)
  REFERENCES events_info(`id`)
  ON DELETE NO ACTION
  ON UPDATE CASCADE;


