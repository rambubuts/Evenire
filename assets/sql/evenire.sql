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

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(255) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `speaker`, `venue`, `start_date`, `end_date`, `paid`, `active`, `created_at`) VALUES
(1, 'PSITE', 'Philippine Society of Information Technology Educators', 'Ram Bubuts', 'Big Daddy\'s Hotel and Convention', '2019-04-25 08:00:00', '2019-04-25 17:00:00', 1, 1, '2019-04-27 21:56:24'),
(2, 'Foam Party', 'Foam Party sa ACLC', 'Ram Bubuts', 'ACLC Grounds', '2019-04-25 08:00:00', '2019-04-25 17:00:00', 1, 1, '2019-04-27 22:47:27'),
(3, 'Ratsada', 'Ratsada sa ACLC', 'Ram Bubuts', 'ACLC College of Butuan City', '2019-04-28 08:00:00', '2019-04-28 17:00:00', 1, 0, '2019-04-27 23:47:30'),
(4, 'Sports Fest', 'Sports Fest sa ACLC', 'Ram Bubuts', 'ACLC College of Butuan City', '2019-04-27 08:00:00', '2019-04-28 08:00:00', 1, 1, '2019-04-27 23:47:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
