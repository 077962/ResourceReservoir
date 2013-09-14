-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2013 at 02:52 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resourcereservoir`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(70) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vertical_id` int(11) DEFAULT NULL,
  `projectstatus_id` int(11) DEFAULT NULL,
  `runit_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `user_id`, `vertical_id`, `projectstatus_id`, `runit_id`, `is_active`, `created`, `modified`) VALUES
(1, 'Other', 1001, 1, 1, 1, 1, '2013-09-13 15:38:30', '2013-09-14 04:45:18'),
(2, 'AX11', NULL, 3, 1, 2, 1, '2013-09-14 14:06:58', '2013-09-14 14:06:58'),
(3, 'MEDICA', NULL, 5, 1, 3, 1, '2013-09-14 14:21:53', '2013-09-14 14:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `projectstatuses`
--

CREATE TABLE IF NOT EXISTS `projectstatuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projectstatuses`
--

INSERT INTO `projectstatuses` (`id`, `status`, `created`, `modified`) VALUES
(1, 'Green', '2013-09-14 04:44:46', '2013-09-14 04:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` float NOT NULL DEFAULT '0',
  `rating_cycle` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`, `rating_cycle`, `created`, `modified`) VALUES
(1, 0, '2013-07-01', '2013-09-14 04:48:39', '2013-09-14 04:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `ratings_users`
--

CREATE TABLE IF NOT EXISTS `ratings_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ratings_users`
--

INSERT INTO `ratings_users` (`id`, `rating_id`, `user_id`, `created`, `modified`) VALUES
(1, 1, 1001, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(70) NOT NULL,
  `short_form` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `short_form`, `is_active`, `created`, `modified`) VALUES
(1, 'Other', 'OTR', 1, '2013-09-13 15:38:05', '2013-09-13 15:38:05'),
(2, 'Project Manager', 'PM', 1, '2013-09-14 10:35:19', '2013-09-14 10:35:19'),
(3, 'Assistant Project Manager', 'APM', 1, '2013-09-14 10:35:39', '2013-09-14 10:35:39'),
(4, 'Program Manager', 'PGM', 1, '2013-09-14 10:36:46', '2013-09-14 10:36:46'),
(5, 'Senior Program Manager', 'SPM', 1, '2013-09-14 10:37:10', '2013-09-14 10:37:10'),
(6, 'System Admin', 'ADM', 1, '2013-09-14 10:37:44', '2013-09-14 10:37:44'),
(7, 'Team Lead', 'TL', 1, '2013-09-14 10:38:22', '2013-09-14 10:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `runits`
--

CREATE TABLE IF NOT EXISTS `runits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ru_name` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `runits`
--

INSERT INTO `runits` (`id`, `ru_name`, `user_id`, `is_active`, `created`, `modified`) VALUES
(1, '00-00-OTR', 1001, 1, '2013-09-14 04:45:09', '2013-09-14 04:45:09'),
(2, 'PC-001', 1002, 1, '2013-09-14 13:23:35', '2013-09-14 13:23:44'),
(3, 'PC-002', 1001, 1, '2013-09-14 14:19:58', '2013-09-14 14:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(70) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `is_active`, `created`, `modified`) VALUES
(1, 'Other', 1, '2013-09-13 15:39:24', '2013-09-13 15:39:24'),
(2, '.net', 1, '2013-09-14 14:26:50', '2013-09-14 14:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `skills_users`
--

CREATE TABLE IF NOT EXISTS `skills_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `skills_users`
--

INSERT INTO `skills_users` (`id`, `skill_id`, `user_id`) VALUES
(1, 1, 1001),
(2, 1, 1002),
(3, 1, 1003),
(4, 1, 1004),
(5, 1, 5),
(6, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `userinfos`
--

CREATE TABLE IF NOT EXISTS `userinfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `contact_number` text NOT NULL,
  `address` text NOT NULL,
  `extra_comments` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userinfos`
--

INSERT INTO `userinfos` (`id`, `user_id`, `username`, `password`, `email`, `photo`, `contact_number`, `address`, `extra_comments`, `created`, `modified`) VALUES
(1, 1001, 'test', 'test', 'test@nttdata.com', 'test.jpg', '00-000-000-0000', 'Test', 'Test', '2013-09-14 04:47:00', '2013-09-14 04:47:00'),
(2, 1002, 'admin', 'admin123', 'admin@nttdata.com', 'admin.jpg', '123-456-7890', 'admin', 'System admin\r\nRoot User', '2013-09-14 06:38:19', '2013-09-14 06:38:19'),
(3, 1003, 'test_pm', 'testpm', 'test_pm@nttdata.com', 'Chrysanthemum.jpg', '123456', 'test', 'Test PM', '2013-09-14 12:07:52', '2013-09-14 12:39:55'),
(4, 1004, 'test_spm', 'test', 'test_pm@nttdata.com', 'Penguins.jpg', '132131', 'Test', 'Test SPM', '2013-09-14 12:46:35', '2013-09-14 12:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `role_id`, `project_id`, `manager_id`, `is_active`, `created`, `modified`) VALUES
(5, 'Navdeep', 'Singh', 7, 3, 1004, 1, '2013-09-14 14:23:48', '2013-09-14 14:23:48'),
(1001, 'Test', 'Test', 1, 1, NULL, 1, '2013-09-13 15:39:43', '2013-09-14 06:36:39'),
(1002, 'admin', 'admin', 6, 1, NULL, 1, '2013-09-14 06:37:17', '2013-09-14 11:05:45'),
(1003, 'Test', 'PM', 2, 1, 1004, 1, '2013-09-14 12:06:43', '2013-09-14 13:18:30'),
(1004, 'Anil', 'Saluja', 5, 2, 1001, 1, '2013-09-14 12:42:23', '2013-09-14 14:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `verticals`
--

CREATE TABLE IF NOT EXISTS `verticals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vertical_name` varchar(70) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `verticals`
--

INSERT INTO `verticals` (`id`, `vertical_name`, `user_id`, `is_active`, `created`, `modified`) VALUES
(1, 'Other', 1001, 1, '2013-09-14 04:43:26', '2013-09-14 04:43:26'),
(2, 'Life Science', NULL, 1, '2013-09-14 13:32:05', '2013-09-14 13:32:05'),
(3, 'Finance', NULL, 1, '2013-09-14 14:06:15', '2013-09-14 14:06:15'),
(4, 'Insurance', NULL, 1, '2013-09-14 14:15:47', '2013-09-14 14:15:47'),
(5, 'HealthCare', NULL, 1, '2013-09-14 14:18:10', '2013-09-14 14:18:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
