-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2013 at 03:58 AM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=85 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 164),
(2, 1, NULL, NULL, 'AppointmentForms', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Appointments', 14, 25),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'view', 17, 18),
(11, 8, NULL, NULL, 'add', 19, 20),
(12, 8, NULL, NULL, 'edit', 21, 22),
(13, 8, NULL, NULL, 'delete', 23, 24),
(14, 1, NULL, NULL, 'BusinessCategories', 26, 37),
(15, 14, NULL, NULL, 'index', 27, 28),
(16, 14, NULL, NULL, 'view', 29, 30),
(17, 14, NULL, NULL, 'add', 31, 32),
(18, 14, NULL, NULL, 'edit', 33, 34),
(19, 14, NULL, NULL, 'delete', 35, 36),
(20, 1, NULL, NULL, 'Businesses', 38, 49),
(21, 20, NULL, NULL, 'index', 39, 40),
(22, 20, NULL, NULL, 'view', 41, 42),
(23, 20, NULL, NULL, 'add', 43, 44),
(24, 20, NULL, NULL, 'edit', 45, 46),
(25, 20, NULL, NULL, 'delete', 47, 48),
(26, 1, NULL, NULL, 'Countries', 50, 61),
(27, 26, NULL, NULL, 'index', 51, 52),
(28, 26, NULL, NULL, 'view', 53, 54),
(29, 26, NULL, NULL, 'add', 55, 56),
(30, 26, NULL, NULL, 'edit', 57, 58),
(31, 26, NULL, NULL, 'delete', 59, 60),
(32, 1, NULL, NULL, 'FilledForms', 62, 73),
(33, 32, NULL, NULL, 'index', 63, 64),
(34, 32, NULL, NULL, 'view', 65, 66),
(35, 32, NULL, NULL, 'add', 67, 68),
(36, 32, NULL, NULL, 'edit', 69, 70),
(37, 32, NULL, NULL, 'delete', 71, 72),
(38, 1, NULL, NULL, 'Groups', 74, 85),
(39, 38, NULL, NULL, 'index', 75, 76),
(40, 38, NULL, NULL, 'view', 77, 78),
(41, 38, NULL, NULL, 'add', 79, 80),
(42, 38, NULL, NULL, 'edit', 81, 82),
(43, 38, NULL, NULL, 'delete', 83, 84),
(44, 1, NULL, NULL, 'Pages', 86, 89),
(45, 44, NULL, NULL, 'display', 87, 88),
(46, 1, NULL, NULL, 'Schedules', 90, 101),
(47, 46, NULL, NULL, 'index', 91, 92),
(48, 46, NULL, NULL, 'view', 93, 94),
(49, 46, NULL, NULL, 'add', 95, 96),
(50, 46, NULL, NULL, 'edit', 97, 98),
(51, 46, NULL, NULL, 'delete', 99, 100),
(52, 1, NULL, NULL, 'Services', 102, 113),
(53, 52, NULL, NULL, 'index', 103, 104),
(54, 52, NULL, NULL, 'view', 105, 106),
(55, 52, NULL, NULL, 'add', 107, 108),
(56, 52, NULL, NULL, 'edit', 109, 110),
(57, 52, NULL, NULL, 'delete', 111, 112),
(58, 1, NULL, NULL, 'ServicesUsers', 114, 125),
(59, 58, NULL, NULL, 'index', 115, 116),
(60, 58, NULL, NULL, 'view', 117, 118),
(61, 58, NULL, NULL, 'add', 119, 120),
(62, 58, NULL, NULL, 'edit', 121, 122),
(63, 58, NULL, NULL, 'delete', 123, 124),
(64, 1, NULL, NULL, 'TimeBreaks', 126, 137),
(65, 64, NULL, NULL, 'index', 127, 128),
(66, 64, NULL, NULL, 'view', 129, 130),
(67, 64, NULL, NULL, 'add', 131, 132),
(68, 64, NULL, NULL, 'edit', 133, 134),
(69, 64, NULL, NULL, 'delete', 135, 136),
(70, 1, NULL, NULL, 'Users', 138, 149),
(71, 70, NULL, NULL, 'index', 139, 140),
(72, 70, NULL, NULL, 'view', 141, 142),
(73, 70, NULL, NULL, 'add', 143, 144),
(74, 70, NULL, NULL, 'edit', 145, 146),
(75, 70, NULL, NULL, 'delete', 147, 148),
(78, 1, NULL, NULL, 'AclExtras', 150, 151),
(79, 1, NULL, NULL, 'Locations', 152, 163),
(80, 79, NULL, NULL, 'index', 153, 154),
(81, 79, NULL, NULL, 'view', 155, 156),
(82, 79, NULL, NULL, 'add', 157, 158),
(83, 79, NULL, NULL, 'edit', 159, 160),
(84, 79, NULL, NULL, 'delete', 161, 162);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'registered client id (not required)',
  `time` datetime NOT NULL,
  `name` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `message` text COLLATE utf8_bin,
  `status` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `schedule_id` (`schedule_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_forms`
--

CREATE TABLE IF NOT EXISTS `appointment_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `full_name` int(11) NOT NULL DEFAULT '11',
  `address` int(11) NOT NULL DEFAULT '10',
  `email` int(11) NOT NULL DEFAULT '11',
  `phone` int(11) NOT NULL DEFAULT '11',
  `cell` int(11) NOT NULL DEFAULT '10',
  `fax` int(11) NOT NULL DEFAULT '10',
  `comment` int(11) NOT NULL DEFAULT '10',
  `col1` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `col1_type` int(11) DEFAULT NULL,
  `col2` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `col2_type` int(11) DEFAULT NULL,
  `col3` varchar(100) COLLATE utf8_bin NOT NULL,
  `col3_type` int(11) DEFAULT NULL,
  `col4` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `col4_type` int(11) DEFAULT NULL,
  `col5` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `col5_type` int(11) DEFAULT NULL,
  `col6` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `col6_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 9, NULL, 1, 4),
(2, NULL, 'Group', 10, NULL, 5, 10),
(3, NULL, 'Group', 11, NULL, 11, 14),
(4, NULL, 'Group', 12, NULL, 15, 18),
(5, 1, 'User', 4, NULL, 2, 3),
(6, 2, 'User', 5, NULL, 6, 7),
(7, 3, 'User', 6, NULL, 12, 13),
(8, 4, 'User', 7, NULL, 16, 17),
(9, 2, 'User', 8, NULL, 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `_read` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `_update` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `_delete` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '1', '1', '1', '1'),
(3, 3, 1, '1', '1', '1', '1'),
(4, 4, 1, '-1', '-1', '-1', '-1'),
(5, 4, 46, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE IF NOT EXISTS `businesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `business_category_id` int(11) NOT NULL,
  `description` text COLLATE utf8_bin,
  `website` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `timezone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `cell` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fax` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `business_category_id` (`business_category_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `user_id`, `name`, `business_category_id`, `description`, `website`, `timezone`, `email`, `phone`, `cell`, `fax`) VALUES
(1, 8, 'Biz 1', 5, 'Biz 1 is a good Biz', 'biz.com', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `business_categories`
--

CREATE TABLE IF NOT EXISTS `business_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Dumping data for table `business_categories`
--

INSERT INTO `business_categories` (`id`, `name`) VALUES
(1, 'Dentist'),
(2, 'Law Office'),
(3, 'Chiropractor'),
(4, 'Massage Therapist'),
(5, 'Attorney'),
(6, 'Veterinarian'),
(7, 'Optometrist'),
(8, 'Opticion'),
(9, 'Beauty Salon'),
(10, 'Spa'),
(11, 'Hair Salon'),
(12, 'Physiotherapist'),
(13, 'Psychologist'),
(14, 'Ortodontist'),
(15, 'Dietitians'),
(16, 'Dental Hygienist'),
(17, 'Pet Care Service'),
(18, 'Esthetician');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Canada'),
(2, 'USA'),
(3, 'Mexico'),
(4, 'Brazil');

-- --------------------------------------------------------

--
-- Table structure for table `filled_forms`
--

CREATE TABLE IF NOT EXISTS `filled_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_form_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `full_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `address` varchar(300) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `phone` varchar(100) COLLATE utf8_bin NOT NULL,
  `fax` varchar(100) COLLATE utf8_bin NOT NULL,
  `cell` varchar(100) COLLATE utf8_bin NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  `col1` text COLLATE utf8_bin NOT NULL,
  `col2` text COLLATE utf8_bin NOT NULL,
  `col3` text COLLATE utf8_bin NOT NULL,
  `col4` text COLLATE utf8_bin NOT NULL,
  `col5` text COLLATE utf8_bin NOT NULL,
  `col6` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `appointment_form_id` (`appointment_form_id`),
  KEY `appointment_id` (`appointment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `created`, `modified`) VALUES
(9, 'admins', '2013-04-05 08:30:06', '2013-04-05 08:30:06'),
(10, 'companies', '2013-04-05 08:30:20', '2013-04-05 08:30:30'),
(11, 'staff_members', '2013-04-05 08:30:45', '2013-04-05 08:30:45'),
(12, 'customers', '2013-04-05 08:30:53', '2013-04-05 08:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `country_id`, `name`) VALUES
(1, 1, 'NW Calgary'),
(2, 1, 'NE Calgary'),
(3, 1, 'SE Calgary'),
(4, 1, 'SW Calgary'),
(5, 1, 'Airdrie'),
(6, 1, 'Chestermare'),
(7, 1, 'Okotoks'),
(8, 1, 'Bragg Creek'),
(9, 1, 'Stratmore'),
(10, 1, 'Cochrane');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `business_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'staff id',
  `service_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `mon` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '9:00-17:00',
  `tue` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '9:00-17:00',
  `wed` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '9:00-17:00',
  `thu` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '9:00-17:00',
  `fri` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '9:00-17:00',
  `sat` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT 'none',
  `sun` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`),
  KEY `business_id` (`business_id`),
  KEY `user_id` (`user_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `business_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin,
  `length` int(11) NOT NULL DEFAULT '30',
  `reminder_days_prior` int(11) DEFAULT NULL,
  `reminder_message` text COLLATE utf8_bin,
  `min_days_before` int(11) NOT NULL DEFAULT '0',
  `max_days_before` int(11) NOT NULL DEFAULT '60',
  `confirmation_message` text COLLATE utf8_bin,
  PRIMARY KEY (`id`),
  KEY `business_id` (`business_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `services_users`
--

CREATE TABLE IF NOT EXISTS `services_users` (
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `service_id` (`service_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `time_breaks`
--

CREATE TABLE IF NOT EXISTS `time_breaks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_id` int(11) NOT NULL,
  `from` datetime NOT NULL,
  `to` datetime NOT NULL,
  `note` text COLLATE utf8_bin,
  PRIMARY KEY (`id`),
  KEY `schedule_id` (`schedule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `group_id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `full_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL,
  `phone` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `cell` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fax` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `state` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `note` text COLLATE utf8_bin,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`),
  KEY `group_id` (`group_id`),
  KEY `location_id` (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `group_id`, `email`, `full_name`, `password`, `phone`, `cell`, `fax`, `address`, `city`, `state`, `zip`, `country_id`, `location_id`, `note`) VALUES
(4, 'admin', 9, 'admin@admin.com', 'admin', '431cdeff693e6a446b4144c7f9da7b29eff7a02a', '', '', '', '', '', '', '', NULL, NULL, ''),
(5, 'company', 10, 'company@company.com', 'company', '72b609383da3ab76881660084a0f498e7cb38ec6', '', '', '', '', '', '', '', NULL, NULL, ''),
(6, 'staff', 11, 'staff@staff.com', 'staff', 'ad02180b1a0892d4a681cf7e9ff6232022b2a6e7', '', '', '', '', '', '', '', NULL, NULL, ''),
(7, 'customer', 12, 'customer@customer.com', 'customer', '4b29fd11a535560e44e172a319cdb555ab852f87', '', '', '', '', '', '', '', NULL, NULL, ''),
(8, 'zoran', 10, 'zoran@gmail.com', 'zoran v', '746de4a35ce36f7c1809c95e3657f5e72029d9ca', '111', '111', '111', 'asd', 'asd', NULL, '12000', 1, 5, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment_forms`
--
ALTER TABLE `appointment_forms`
  ADD CONSTRAINT `appointment_forms_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `businesses_ibfk_1` FOREIGN KEY (`business_category_id`) REFERENCES `business_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `businesses_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `filled_forms`
--
ALTER TABLE `filled_forms`
  ADD CONSTRAINT `filled_forms_ibfk_1` FOREIGN KEY (`appointment_form_id`) REFERENCES `appointment_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `filled_forms_ibfk_2` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedules_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedules_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services_users`
--
ALTER TABLE `services_users`
  ADD CONSTRAINT `services_users_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `services_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `time_breaks`
--
ALTER TABLE `time_breaks`
  ADD CONSTRAINT `time_breaks_ibfk_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_4` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
