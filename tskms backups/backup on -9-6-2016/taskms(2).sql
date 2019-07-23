-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2016 at 08:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `taskms`
--

-- --------------------------------------------------------

--
-- Table structure for table `flag_tasks`
--

CREATE TABLE IF NOT EXISTS `flag_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flag_status` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `flag_start_time` varchar(100) NOT NULL,
  `flag_end_time` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `flag_tasks`
--

INSERT INTO `flag_tasks` (`id`, `flag_status`, `usr_id`, `task_id`, `task_name`, `flag_start_time`, `flag_end_time`, `created_at`, `updated_at`) VALUES
(1, 0, 32, 70, 'my task', '2016-06-09 06:00:26', '', '2016-06-06 10:28:35', '2016-06-09 01:00:34'),
(2, 0, 33, 78, 'my task', '2016-06-07 12:36:41', '', '2016-06-03 10:25:28', '2016-06-07 07:36:44'),
(3, 0, 34, 0, '', '', '', '2016-06-06 12:50:38', '2016-06-06 12:50:38'),
(4, 0, 35, 81, 'datemy new task', '2016-06-06 12:54:10', '', '2016-06-06 12:50:53', '2016-06-06 07:54:13'),
(5, 0, 36, 80, 'integrate datase', '2016-06-06 12:12:29', '', '2016-06-06 07:02:19', '2016-06-06 07:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE IF NOT EXISTS `leaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_name` varchar(50) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `approval_from_tl` varchar(60) NOT NULL,
  `approval_from_tl_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `leave_type` varchar(64) NOT NULL,
  `tl_comment` varchar(100) NOT NULL,
  `applicant_comment` varchar(100) NOT NULL,
  `Status_updated_by` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `applicant_name`, `applicant_id`, `start_date`, `end_date`, `approval_from_tl`, `approval_from_tl_id`, `status`, `leave_type`, `tl_comment`, `applicant_comment`, `Status_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Asad', 16, '2016-05-07 00:00:00', '2016-05-14 00:00:00', 'basharat', 6, 'cancelled', 'sick leave', '', 'dont need ok now', 'Asad Mehmood', '2016-05-03 04:57:05', '2016-05-06 00:44:54'),
(2, 'Asad', 16, '2016-05-13 00:00:00', '2016-05-14 00:00:00', 'basharat', 6, 'cancelled', 'casual', 'yes approved', 'ok', '', '2016-05-03 04:59:11', '2016-05-05 00:39:29'),
(3, 'Asad', 16, '2016-05-24 00:00:00', '2016-05-28 00:00:00', 'Naseem', 10, 'Approved', 'annual', 'ok to proceed', 'annuals', 'Naseem Ahmed', '2016-05-03 04:50:12', '2016-05-05 00:11:28'),
(4, 'Asad', 16, '2016-05-07 00:00:00', '2016-05-20 00:00:00', 'basharat', 6, 'cancelled', 'sick leave', '', 'sick leave', 'Asad Mehmood', '2016-05-03 05:11:59', '2016-05-06 00:02:47'),
(5, 'Asad', 16, '2016-05-12 00:00:00', '2016-05-17 00:00:00', 'basharat', 6, 'cancelled', 'urgent', '', 'urgent', 'Asad Mehmood', '2016-05-03 05:17:40', '2016-05-06 00:05:05'),
(6, 'Asad', 16, '2016-05-06 00:00:00', '2016-05-14 00:00:00', 'Naseem', 10, 'Approved', 'other', 'approved', 'very sick', 'Naseem Ahmed', '2016-05-03 05:19:59', '2016-05-05 00:19:53'),
(7, 'Asad', 16, '2016-05-13 00:00:00', '2016-05-24 00:00:00', 'Naseem', 10, 'Approved', 'casual', 'yes approved', 'need annuals', '', '2016-05-03 05:26:59', '2016-05-05 00:36:26'),
(8, 'Asad', 16, '2016-05-04 00:00:00', '2016-05-05 00:00:00', 'Naseem', 10, 'cancelled', 'sick', 'cancelled', 'sick leave', '', '2016-05-03 04:44:52', '2016-05-05 00:36:47'),
(9, 'Asad', 16, '2016-05-04 00:00:00', '2016-05-07 00:00:00', 'Naseem', 10, 'Approved', 'sick', 'yes approved', 'fever and cold', 'Naseem Ahmed', '2016-05-03 04:47:24', '2016-05-05 00:20:39'),
(11, 'Asad', 16, '2016-05-06 00:00:00', '2016-05-16 00:00:00', 'Naseem', 10, 'cancelled', 'sick', 'not required', 'very sick', 'Naseem Ahmed', '2016-05-03 05:32:15', '2016-05-05 00:24:19'),
(12, 'Asad', 16, '2016-05-05 00:00:00', '2016-05-08 00:00:00', 'basharat', 6, 'Approved', 'sick', 'ok to progress', 'annuals', 'Basharat Ch', '2016-05-04 05:32:19', '2016-05-17 06:02:14'),
(13, 'Nazim', 24, '2016-05-06 00:00:00', '2016-05-20 00:00:00', 'Naseem', 10, 'cancelled', 'sick', 'not required', 'very sick', 'Naseem Ahmed', '2016-05-04 05:35:26', '2016-05-05 00:15:26'),
(14, 'Nazim', 24, '2016-05-06 00:00:00', '2016-05-24 00:00:00', 'Naseem', 10, 'Approved', 'casual', 'ok to progress', 'casual', 'Naseem Ahmed', '2016-05-04 05:36:27', '2016-05-06 00:08:32'),
(15, 'Asad', 16, '2016-05-04 00:00:00', '2016-05-07 00:00:00', 'basharat', 7, 'Approved', 'casual', 'ok', 'casual', 'Basharat Ch', '2016-05-06 05:07:45', '2016-05-17 05:17:04'),
(16, 'Asad', 16, '2016-05-11 00:00:00', '2016-05-20 00:00:00', 'Naseem', 10, 'cancelled', 'sick', 'not required', 'very sick', 'Naseem Ahmed', '2016-05-09 05:25:46', '2016-05-09 00:18:42'),
(17, 'Asad', 16, '2016-05-20 00:00:00', '2016-05-24 00:00:00', 'Naseem', 10, 'Approved', 'casual', 'ok', 'casual', 'Naseem Ahmed', '2016-05-09 05:26:18', '2016-05-09 00:19:30'),
(18, 'Asad', 16, '2016-05-10 00:00:00', '2016-05-27 00:00:00', 'basharat', 6, 'cancelled', 'sick', 'cancelled', 'I need sick leave', 'Basharat Ch', '2016-05-09 05:17:50', '2016-05-17 05:18:51'),
(19, 'Asad', 16, '2016-05-12 00:00:00', '2016-06-30 00:00:00', 'Naseem', 10, 'Approved', 'sick', 'ok', 'very sick', 'Naseem Ahmed', '2016-05-09 05:20:15', '2016-05-11 00:45:29'),
(20, 'Asad', 16, '2016-04-29 00:00:00', '2016-05-31 00:00:00', 'Naseem', 10, 'Approved', 'sick', 'ok', 'very sick', 'Naseem Ahmed', '2016-05-09 05:20:45', '2016-05-18 23:54:11'),
(21, 'Asad', 16, '2016-05-01 00:00:00', '2016-05-30 00:00:00', 'Naseem', 10, 'cancelled', 'casual', '', 'casual', 'Asad Mehmood', '2016-05-11 05:24:58', '2016-05-11 00:25:18'),
(22, 'Asad', 16, '2016-05-01 00:00:00', '2016-05-28 00:00:00', 'Naseem', 10, 'pending', 'very sick', '', 'very sick', 'Asad Mehmood', '2016-05-11 05:03:47', '2016-06-01 00:45:51'),
(23, 'Asad', 16, '2016-05-09 00:00:00', '2016-05-04 00:00:00', 'Naseem', 10, 'pending', 'very sick', '', 'very sick', 'Asad Mehmood', '2016-05-11 05:05:57', '2016-06-01 00:46:10'),
(24, 'Asad', 16, '2016-05-20 00:00:00', '2016-05-25 00:00:00', 'Naseem', 10, 'cancelled', 'other', 'cannot provide', 'sick leave', 'Naseem Ahmed', '2016-05-18 05:26:54', '2016-05-18 23:54:35'),
(25, 'Naseem', 10, '2016-05-01 00:00:00', '2016-05-27 00:00:00', '', 0, 'cancelled', 'sick', 'cannot provide', 'very sick', 'Basharat Ch', '2016-05-19 05:39:37', '2016-05-19 00:46:20'),
(26, 'Naseem', 10, '2016-05-20 00:00:00', '2016-05-31 00:00:00', '', 0, 'cancelled', 'dont need ok now', '', 'dont need ok now', 'Naseem Ahmed', '2016-05-19 04:49:33', '2016-05-19 00:23:45'),
(27, 'Naseem', 10, '2016-05-01 00:00:00', '2016-05-30 00:00:00', 'Junaid', 22, 'pending', 'casual', '', 'casual', 'Naseem Ahmed', '2016-05-19 05:24:14', '2016-05-19 00:08:50'),
(28, 'Naseem', 10, '2016-05-01 00:00:00', '2016-05-30 00:00:00', 'Junaid', 22, 'pending', 'very sick', '', 'very sick', 'Naseem Ahmed', '2016-05-19 05:24:53', '2016-05-19 00:09:03'),
(29, 'Naseem', 10, '2016-05-18 00:00:00', '2016-05-30 00:00:00', 'Basharat', 9, 'pending', 'need annuals', '', 'need annuals', 'Naseem Ahmed', '2016-05-19 05:29:08', '2016-05-19 00:09:22'),
(30, 'Naseem', 10, '2016-05-01 00:00:00', '2016-05-30 00:00:00', 'Junaid', 22, 'pending', 'To travel', '', 'To travel', 'Naseem Ahmed', '2016-05-19 05:29:38', '2016-05-19 00:09:41'),
(31, 'Naseem', 10, '2016-05-01 00:00:00', '2016-05-30 00:00:00', 'Basharat', 9, 'pending', 'sick', '', 'very sick', '', '2016-05-19 05:06:03', '2016-05-19 00:06:03'),
(32, 'Naseem', 10, '2016-05-01 00:00:00', '2016-05-30 00:00:00', 'Basharat', 9, 'approved', 'sick', '', 'very sick', '', '2016-05-19 05:06:52', '2016-05-19 05:40:54'),
(33, 'Asad', 16, '2016-05-02 00:00:00', '2016-05-31 00:00:00', 'Naseem', 10, 'cancelled', 'casual', 'canceled', 'casual', 'Naseem Ahmed', '2016-05-19 05:12:19', '2016-05-31 23:58:46'),
(34, 'Naseem', 10, '2016-05-01 00:00:00', '2016-05-01 00:00:00', 'Junaid', 22, 'pending', 'sick', '', 'very sick', '', '2016-05-20 10:31:48', '2016-05-20 05:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_lead_id` int(11) NOT NULL,
  `team_member_id` int(11) NOT NULL,
  `date_of_points` timestamp NOT NULL,
  `points_of_day` int(4) NOT NULL,
  `comments_of_day` varchar(255) NOT NULL,
  `point_task_id` int(11) NOT NULL,
  `point_task_name` varchar(255) NOT NULL,
  `Evaluated_by` varchar(255) NOT NULL,
  `status` varchar(22) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `team_lead_id`, `team_member_id`, `date_of_points`, `points_of_day`, `comments_of_day`, `point_task_id`, `point_task_name`, `Evaluated_by`, `status`, `updated_at`, `created_at`) VALUES
(71, 10, 15, '0000-00-00 00:00:00', 2, '', 0, '', 'Naseem Ahmed', 'done', '2016-04-11 04:50:31', '2016-04-11 04:50:31'),
(72, 10, 11, '0000-00-00 00:00:00', -1, '', 0, '', 'Naseem Ahmed', 'done', '2016-04-11 04:41:28', '2016-04-11 04:41:28'),
(73, 10, 14, '0000-00-00 00:00:00', 1, '', 0, '', 'Naseem Ahmed', 'done', '2016-04-11 04:41:38', '2016-04-11 04:41:38'),
(74, 10, 14, '0000-00-00 00:00:00', 1, '', 0, '', 'Naseem Ahmed', 'done', '2016-04-12 00:18:12', '2016-04-12 00:18:12'),
(75, 10, 11, '0000-00-00 00:00:00', 1, '', 0, '', 'Naseem Ahmed', 'done', '2016-04-12 00:01:05', '2016-04-12 00:01:05'),
(76, 10, 15, '0000-00-00 00:00:00', 0, '', 22, '', 'Naseem Ahmed', 'done', '2016-04-12 00:09:40', '2016-04-12 00:09:40'),
(82, 10, 16, '0000-00-00 00:00:00', 2, '', 16, 'Data analysis', 'Naseem Ahmed', 'done', '2016-04-12 04:31:47', '2016-04-12 04:31:47'),
(83, 10, 17, '0000-00-00 00:00:00', 1, '', 17, 'database connection', 'Naseem Ahmed', 'done', '2016-04-12 04:43:51', '2016-04-12 04:43:51'),
(84, 10, 11, '0000-00-00 00:00:00', 2, '', 11, 'database connection', 'Naseem Ahmed', 'done', '2016-04-13 00:12:41', '2016-04-13 00:12:41'),
(85, 10, 14, '0000-00-00 00:00:00', 1, 'done better', 14, 'web e ticket form', 'Naseem Ahmed', 'done', '2016-04-13 00:25:12', '2016-04-13 00:25:12'),
(86, 10, 15, '0000-00-00 00:00:00', 1, 'good', 15, 'Data analysis', 'Naseem Ahmed', 'done', '2016-04-13 00:00:24', '2016-04-13 00:00:24'),
(87, 10, 16, '0000-00-00 00:00:00', 2, 'going ok', 16, 'database connection', 'Naseem Ahmed', 'done', '2016-04-13 04:54:02', '2016-04-13 04:54:02'),
(88, 10, 17, '0000-00-00 00:00:00', 1, 'performing good', 17, 'Data analysis', 'Naseem Ahmed', 'done', '2016-04-13 04:54:41', '2016-04-13 04:54:41'),
(89, 10, 14, '0000-00-00 00:00:00', 1, 'good job', 14, 'Ecommerce analysis', 'Naseem Ahmed', 'done', '2016-04-14 00:24:30', '2016-04-14 00:24:30'),
(90, 10, 11, '0000-00-00 00:00:00', 2, 'very good done', 11, 'formbuilding', 'Naseem Ahmed', 'done', '2016-04-14 00:24:55', '2016-04-14 00:24:55'),
(91, 10, 15, '0000-00-00 00:00:00', 1, 'done better', 15, 'new task for editor', 'Naseem Ahmed', 'done', '2016-04-14 00:14:35', '2016-04-14 00:14:35'),
(92, 10, 16, '0000-00-00 00:00:00', 1, 'good show', 16, 'database connection', 'Naseem Ahmed', 'done', '2016-04-14 04:43:30', '2016-04-14 04:43:30'),
(93, 10, 17, '0000-00-00 00:00:00', 1, 'done', 17, 'database connection', 'Naseem Ahmed', 'done', '2016-04-14 08:18:04', '2016-04-14 08:18:04'),
(94, 10, 18, '0000-00-00 00:00:00', 2, 'very well', 18, 'web e ticket form', 'Naseem Ahmed', 'done', '2016-04-14 08:18:24', '2016-04-14 08:18:24'),
(95, 10, 19, '0000-00-00 00:00:00', 0, 'nice', 19, 'Ecommerce analysis', 'Naseem Ahmed', 'done', '2016-04-14 08:18:42', '2016-04-14 08:18:42'),
(96, 10, 11, '0000-00-00 00:00:00', 1, 'fine', 11, 'web e ticket form', 'Naseem Ahmed', 'done', '2016-04-15 04:55:27', '2016-04-15 04:55:27'),
(97, 10, 14, '0000-00-00 00:00:00', 2, 'very good', 14, 'formbuilding', 'Naseem Ahmed', 'done', '2016-04-15 04:55:44', '2016-04-15 04:55:44'),
(98, 10, 15, '0000-00-00 00:00:00', 0, 'average', 15, 'Data analysis', 'Naseem Ahmed', 'done', '2016-04-15 04:56:00', '2016-04-15 04:56:00'),
(99, 10, 16, '0000-00-00 00:00:00', 1, 'done', 16, 'new Data analysis', 'Naseem Ahmed', 'done', '2016-04-15 04:56:19', '2016-04-15 04:56:19'),
(100, 10, 11, '0000-00-00 00:00:00', 0, 'average', 11, 'formbuilding', 'Naseem Ahmed', 'done', '2016-04-19 04:38:14', '2016-04-19 04:38:14'),
(101, 10, 14, '0000-00-00 00:00:00', 1, '', 14, 'database connection', 'Naseem Ahmed', 'done', '2016-04-19 04:38:21', '2016-04-19 04:38:21'),
(102, 10, 15, '0000-00-00 00:00:00', 2, 'awesome work', 15, 'Data analysis', 'Naseem Ahmed', 'done', '2016-04-19 04:38:55', '2016-04-19 04:38:55'),
(103, 10, 16, '0000-00-00 00:00:00', 1, 'nice', 16, 'web e ticket form', 'Naseem Ahmed', 'done', '2016-04-19 04:39:12', '2016-04-19 04:39:12'),
(104, 10, 17, '0000-00-00 00:00:00', 1, 'done nicely', 17, 'database connection', 'Naseem Ahmed', 'done', '2016-04-19 04:28:29', '2016-04-19 04:28:29'),
(105, 10, 18, '0000-00-00 00:00:00', 2, 'very good done', 18, 'web e ticket form', 'Naseem Ahmed', 'done', '2016-04-19 04:28:44', '2016-04-19 04:28:44'),
(106, 10, 19, '0000-00-00 00:00:00', -1, 'not up to mark', 19, 'Ecommerce analysis', 'Naseem Ahmed', 'done', '2016-04-19 04:29:00', '2016-04-19 04:29:00'),
(107, 7, 11, '0000-00-00 00:00:00', 1, 'good', 11, 'web e ticket form', 'basharat Kamal', 'done', '2016-04-20 00:42:28', '2016-04-20 00:42:28'),
(108, 10, 43, '0000-00-00 00:00:00', 1, 'done well', 14, 'Ecommerce analysis', 'Naseem Ahmed', 'done', '2016-04-20 23:46:32', '2016-04-20 23:46:32'),
(109, 10, 44, '0000-00-00 00:00:00', 1, 'ok', 15, 'Adding form functionality', 'Naseem Ahmed', 'done', '2016-04-20 23:48:22', '2016-04-20 23:48:22'),
(110, 10, 44, '0000-00-00 00:00:00', 1, 'ok', 15, 'Adding form functionality', 'Naseem Ahmed', 'done', '2016-04-20 23:48:56', '2016-04-20 23:48:56'),
(111, 10, 45, '0000-00-00 00:00:00', 1, 'ok', 11, 'formbuilding', 'Naseem Ahmed', 'done', '2016-04-20 23:51:01', '2016-04-20 23:51:01'),
(112, 10, 45, '0000-00-00 00:00:00', 0, '', 11, 'formbuilding', 'Naseem Ahmed', 'done', '2016-04-21 00:04:44', '2016-04-21 00:04:44'),
(113, 10, 14, '0000-00-00 00:00:00', 0, 'well', 0, 'Ecommerce analysis', 'Naseem Ahmed', 'done', '2016-04-21 00:11:48', '2016-04-21 00:11:48'),
(114, 7, 0, '0000-00-00 00:00:00', 0, 'nyc', 0, '', 'basharat Kamal', 'done', '2016-04-21 00:33:10', '2016-04-21 00:33:10'),
(115, 7, 16, '0000-00-00 00:00:00', 0, 'ok', 0, 'Adding form functionality', 'basharat Kamal', 'done', '2016-04-21 00:34:25', '2016-04-21 00:34:25'),
(116, 7, 11, '0000-00-00 00:00:00', 1, 'going ok', 0, 'web e ticket form', 'basharat Kamal', 'done', '2016-04-20 23:39:56', '2016-04-20 23:39:56'),
(117, 7, 0, '0000-00-00 00:00:00', 0, 'yes nice', 0, '', 'basharat Kamal', 'done', '2016-04-20 23:40:32', '2016-04-20 23:40:32'),
(118, 10, 15, '0000-00-00 00:00:00', 0, '', 0, 'new task for editor', 'Naseem Ahmed', 'done', '2016-04-21 00:27:19', '2016-04-21 00:27:19'),
(119, 10, 17, '0000-00-00 00:00:00', 0, 'average', 0, 'database connection', 'Naseem Ahmed', 'done', '2016-04-21 05:19:53', '2016-04-21 05:19:53'),
(120, 10, 14, '0000-00-00 00:00:00', 1, 'ok', 0, 'Ecommerce analysis', 'Naseem Ahmed', 'done', '2016-04-21 23:42:33', '2016-04-21 23:42:33'),
(121, 10, 15, '0000-00-00 00:00:00', 2, 'good', 0, 'new task for editor', 'Naseem Ahmed', 'done', '2016-04-21 23:42:59', '2016-04-21 23:42:59'),
(122, 10, 11, '0000-00-00 00:00:00', 0, 'good', 0, 'formbuilding', 'Naseem Ahmed', 'done', '2016-04-22 00:00:38', '2016-04-22 00:00:38'),
(123, 10, 14, '0000-00-00 00:00:00', 1, '', 0, 'Ecommerce analysis', 'Naseem Ahmed', 'done', '2016-04-26 05:13:05', '2016-04-26 05:13:05'),
(124, 6, 15, '0000-00-00 00:00:00', 1, 'good', 0, 'this ist for test', 'basharat khankhan', 'done', '2016-04-28 00:16:57', '2016-04-28 00:16:57'),
(125, 10, 16, '0000-00-00 00:00:00', 1, 'good', 0, 'new task for editor', 'Naseem Ahmed', 'done', '2016-05-01 23:59:51', '2016-05-01 23:59:51'),
(126, 10, 14, '0000-00-00 00:00:00', 1, 'ok', 0, 'testing text area', 'Naseem Ahmed', 'done', '2016-05-04 00:37:57', '2016-05-04 00:37:57'),
(127, 10, 14, '0000-00-00 00:00:00', 1, 'ok', 0, 'testing text area', 'Naseem Ahmed', 'done', '2016-05-09 00:11:37', '2016-05-09 00:11:37'),
(128, 10, 16, '0000-00-00 00:00:00', 1, 'ok', 0, 'database connection', 'Naseem Ahmed', 'done', '2016-05-09 00:12:25', '2016-05-09 00:12:25'),
(129, 10, 15, '0000-00-00 00:00:00', 2, '', 0, 'database connection', 'Naseem Ahmed', 'done', '2016-05-09 00:15:50', '2016-05-09 00:15:50'),
(130, 10, 15, '0000-00-00 00:00:00', 1, 'ok', 0, 'now task', 'Naseem Ahmed', 'done', '2016-05-11 00:39:15', '2016-05-11 00:39:15'),
(131, 10, 15, '0000-00-00 00:00:00', 1, 'ok', 0, 'Data analysis', 'Naseem Ahmed', 'done', '2016-05-15 23:47:28', '2016-05-15 23:47:28'),
(132, 10, 24, '0000-00-00 00:00:00', 0, '', 0, 'for new proj', 'Naseem Ahmed', 'done', '2016-05-15 23:54:41', '2016-05-15 23:54:41'),
(133, 10, 14, '0000-00-00 00:00:00', 0, '', 0, 'Ecommerce analysis', 'Naseem Ahmed', 'done', '2016-05-15 23:55:11', '2016-05-15 23:55:11'),
(134, 10, 14, '0000-00-00 00:00:00', 1, 'ok', 0, 'Ecommerce analysis', 'Naseem Ahmed', 'done', '2016-05-19 00:05:09', '2016-05-19 00:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `project_description` text NOT NULL,
  `assigned_to` varchar(255) NOT NULL,
  `proj_assign_to_id` int(11) NOT NULL,
  `proj_assign_by` varchar(100) NOT NULL,
  `proj_assign_by_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `expected_comp_date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_description`, `assigned_to`, `proj_assign_to_id`, `proj_assign_by`, `proj_assign_by_id`, `status`, `start_date`, `expected_comp_date`, `created_at`, `updated_at`) VALUES
(9, 'Vehicle tkmsdsfs', 'online shop', 'Naseem', 10, 'basharat Khan', 8, 'complete', '2016-05-24', '2016-05-27', '2016-05-31 13:13:55', '2016-05-31 13:13:55'),
(10, 'task system', 'evaluation system', 'Naseem', 10, 'basharat Khan', 8, 'cancelled', '2016-05-01', '2016-05-30', '2016-05-31 13:14:12', '2016-05-31 13:14:12'),
(11, 'Vehicle tkms', 'health', 'Naseem', 10, 'basharat Khan', 8, 'complete', '2016-05-30', '2016-07-30', '2016-05-31 13:14:30', '2016-05-31 13:14:30'),
(12, 'E-shop', 'health', 'HAMDAN', 0, '', 0, '', '26-09-2015', '11-09-2016', '2016-03-31 05:01:23', '2016-03-31 05:01:23'),
(13, 'task system', 'evaluation system', 'HAMDAN', 0, '', 0, '', '26-09-2015', '11-09-2016', '2016-03-31 05:03:03', '2016-03-31 05:03:03'),
(14, 'Auto detection and car scanning', 'Auto detection and car scanning', 'Akhter', 0, '', 0, '', '26-09-2015', '11-09-2016', '2016-04-01 00:37:22', '2016-04-01 00:37:22'),
(15, 'Weather forcasting system', 'weather forcasting', 'basharat', 0, '', 0, '', '26-09-2015', '11-09-2016', '2016-04-01 00:36:43', '2016-04-01 00:36:43'),
(16, 'Vehicle tkms', 'evaluation systemok', 'Shahmeer', 0, '', 0, '', '26-09-2015', '11-09-2016', '2016-04-11 04:49:13', '2016-04-11 04:49:13'),
(17, 'Vehicle tkms', 'evaluation systemok', 'basharat', 6, 'basharat Khan', 8, 'pending', '2016-05-01', '2016-07-28', '2016-04-11 04:50:29', '2016-05-31 08:07:35'),
(18, 'Vehicle tkms', 'evaluation systemok', 'basharat', 6, 'basharat Khan', 8, 'cancelled', '2016-05-30', '2016-07-30', '2016-04-11 04:50:54', '2016-05-31 08:15:37'),
(19, 'Vehicle tkms', 'evaluation systemok', 'Naseem', 10, 'basharat Khan', 8, 'complete', '2016-05-15', '2016-05-23', '2016-05-31 12:54:31', '2016-06-06 07:45:47'),
(21, 'task system', 'evaluation systemok', 'basharat', 6, 'basharat Khan', 8, 'pending', '2016-05-01', '2016-05-26', '2016-04-12 04:28:19', '2016-05-31 08:09:03'),
(22, 'Vehicle tkms', 'health', 'Naseem', 10, 'basharat Khan', 8, 'pending', '2016-05-30', '2016-07-16', '2016-04-13 05:20:30', '2016-05-31 08:15:59'),
(23, 'Vehicle tkms', 'evaluation system', 'Naseem', 10, 'basharat Khan', 8, 'complete', '2016-05-25', '2016-05-30', '2016-04-14 04:44:25', '2016-05-31 08:16:22'),
(26, 'just for test desc proj', 'description for project', 'basharat', 7, 'basharat Khan', 8, 'complete', '2016-05-25', '2016-05-28', '2016-04-27 05:40:12', '2016-05-31 08:16:44'),
(27, 'text area project', 'this is for test', 'Aslam', 4, 'basharat Khan', 8, '', '22/4/2016', '22/05/2016', '2016-04-27 23:54:07', '2016-04-27 23:54:07'),
(29, 'Concurrent backup', 'back up in many servers', 'basharat', 6, 'basharat Khan', 8, 'pending', '2016-07-01', '2016-07-30', '2016-04-29 00:42:48', '2016-05-31 08:18:01'),
(30, 'Tracking system', 'telecom', 'Aslam', 4, 'basharat Khan', 8, '', '26-09-2015', '11-09-2016', '2016-04-28 23:46:53', '2016-04-28 23:46:53'),
(31, 'bash', 'abc test', 'Aslam', 4, 'basharat Khan', 8, '', '22/4/2016', '22/05/2016', '2016-04-29 05:05:18', '2016-04-29 05:05:18'),
(32, 'new for test', 'new for test', 'Aslam', 4, 'basharat Khan', 8, '', '22/4/2016', '22/05/2016', '2016-04-29 05:17:43', '2016-04-29 05:17:43'),
(33, 'new for test', 'new for test', 'Aslam', 4, 'basharat Khan', 8, '', '22/4/2016', '22/05/2016', '2016-04-29 05:18:28', '2016-04-29 05:18:28'),
(34, 'Intelligent diagnostics', 'test', 'basharat', 6, 'basharat Khan', 8, '', '22/4/2016', '22/5/2016', '2016-04-29 05:18:49', '2016-04-29 05:18:49'),
(35, 'Vehicle tkms', 'Vehicle tkms', 'basharat', 6, 'basharat Khan', 8, '', '22/4/2016', '11-09-2016', '2016-04-29 05:21:13', '2016-04-29 05:21:13'),
(39, 'new for test', 'new for test', 'basharat', 6, 'basharat Khan', 8, '', '22/4/2016', '11-09-2016', '2016-04-29 04:46:10', '2016-04-29 04:46:10'),
(41, 'text area project', 'nice state of the art', 'basharat', 6, 'basharat Khan', 8, '', '22/4/2016', '22/05/2016', '2016-05-02 00:23:41', '2016-05-02 00:23:41'),
(42, 'best of best', 'best of best', 'basharat', 6, 'basharat Khan', 8, 'pending', '2016-05-01', '2016-07-01', '2016-05-02 00:24:36', '2016-05-31 08:17:05'),
(46, 'data project', 'data project', 'Naseem', 10, 'basharat Khan', 8, 'pending', '2016-05-30', '2016-06-30', '2016-05-31 02:04:08', '2016-05-31 02:04:08'),
(47, 'now project', 'now project now project', 'Naseem', 10, 'basharat Khan', 8, 'pending', '2016-05-30', '2016-05-31', '2016-05-31 02:11:04', '2016-05-31 08:17:30'),
(48, 'Date specific project', 'date', 'Naseem', 10, 'basharat Khan', 8, 'complete', '2016-05-24', '2016-06-09', '2016-05-31 08:23:13', '2016-05-31 23:56:21'),
(49, 'Realestate website', 'Realestate website', 'Naseem', 10, 'basharat Khan', 8, 'pending', '2016-06-01', '2016-06-04', '2016-06-08 05:06:23', '2016-06-08 05:07:52'),
(50, 'dash board for admin', 'dash board for admin', 'Naseem', 10, 'basharat Khan', 8, 'pending', '2016-06-02', '2016-06-18', '2016-06-08 05:10:26', '2016-06-08 05:14:58'),
(51, 'data warehousing', 'data warehousing', 'Naseem', 10, 'basharat Khan', 8, 'pending', '2016-06-01', '2016-06-30', '2016-06-08 05:13:50', '2016-06-08 05:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `short_leaves`
--

CREATE TABLE IF NOT EXISTS `short_leaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_name` varchar(100) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `start_time` varchar(144) NOT NULL,
  `end_time` varchar(144) NOT NULL,
  `approval_from_tl` varchar(255) NOT NULL,
  `approval_from_tl_id` int(11) NOT NULL,
  `status` varchar(26) NOT NULL,
  `leave_type` varchar(30) NOT NULL,
  `tl_comment` varchar(255) NOT NULL,
  `applicant_comment` varchar(255) NOT NULL,
  `Status_updated_by` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `short_leaves`
--

INSERT INTO `short_leaves` (`id`, `applicant_name`, `applicant_id`, `start_time`, `end_time`, `approval_from_tl`, `approval_from_tl_id`, `status`, `leave_type`, `tl_comment`, `applicant_comment`, `Status_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Asad Mehmood', 16, '-0001-11-30 00:00:00', '2016-05-16 03:00:00', 'Naseem', 10, 'cancelled', 'sick', 'cancel', 'very sick', 'Naseem Ahmed', '2016-05-15 23:50:26', '2016-05-16 00:04:06'),
(2, 'Asad Mehmood', 16, '-0001-11-30 00:00:00', '2016-05-17 01:00:00', 'Naseem', 10, 'cancelled', 'sick', '', 'very sick', 'Asad Mehmood', '2016-05-15 23:56:58', '2016-05-17 00:02:20'),
(4, 'Asad Mehmood', 16, '2016-05-16 10:01:23', '2016-05-18 05:00:00', 'Naseem', 10, 'approved', 'sick', 'ok to proceed', 'very sick', 'Basharat Ch', '2016-05-16 05:01:23', '2016-05-17 23:46:03'),
(5, 'Asad Mehmood', 16, '2016-05-16 06:30:00', '2016-05-16 14:30:00', 'Naseem', 10, 'approved', 'sick', 'yes approved', 'very sick', 'Naseem Ahmed', '2016-05-16 00:29:16', '2016-05-16 00:03:42'),
(6, 'Asad Mehmood', 16, '2016-05-16 10:30:00', '2016-05-16 11:00:00', 'Naseem', 10, 'approved', 'sick', 'ok', 'very sick', 'Naseem Ahmed', '2016-05-18 04:49:32', '2016-05-20 08:07:02'),
(7, 'Asad Mehmood', 16, '2016-05-16 16:30:00', '2016-05-16 22:00:00', 'Naseem', 10, 'cancelled', 'sick', '', 'very sick', 'Asad Mehmood', '2016-05-16 00:37:18', '2016-05-17 00:05:11'),
(8, 'Asad Mehmood', 16, '2016-05-17 10:00:00', '2016-05-17 12:30:00', 'Naseem', 10, 'pending', 'sick', 'sick', '', 'Asad Mehmood', '2016-05-17 00:16:30', '2016-05-17 00:16:30'),
(9, 'Naseem Ahmed', 10, '2016-05-19 11:30:00', '2016-05-19 12:30:00', 'Junaid', 22, 'cancelled', 'sick', 'not required', 'very sick', 'Basharat Ch', '2016-05-19 00:35:55', '2016-05-18 23:55:00'),
(10, 'Naseem Ahmed', 10, '2016-05-19 10:00:00', '2016-05-19 12:00:00', 'Basharat', 9, 'pending', 'casual', 'very sick', 'ok', 'Naseem Ahmed', '2016-05-18 23:53:52', '2016-05-19 00:02:27'),
(11, 'Naseem Ahmed', 10, '2016-05-19 11:30:00', '2016-05-19 13:30:00', 'Junaid', 22, 'approved', 'sick', 'very sick', '', 'Basharat Ch', '2016-05-19 00:06:08', '2016-05-19 00:07:11'),
(12, 'Ibrahim Ch', 32, '2016-06-06 17:00:00', '2016-06-06 18:30:00', 'Naseem', 10, 'pending', 'sick', '', 'very sick', 'Ibrahim Ch', '2016-06-06 07:19:42', '2016-06-06 07:19:42'),
(13, 'Ibrahim Ch', 32, '2016-06-06 17:00:00', '2016-06-06 18:30:00', 'Naseem', 10, 'pending', 'sick', '', 'very sick', 'Ibrahim Ch', '2016-06-06 08:20:19', '2016-06-06 08:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(255) NOT NULL,
  `task_assigned_to` varchar(255) NOT NULL,
  `assgn_to_id` int(11) NOT NULL,
  `status` varchar(44) NOT NULL,
  `task_assigned_by` varchar(255) NOT NULL,
  `task_assigned_by_id` int(11) NOT NULL,
  `task_description` varchar(255) NOT NULL,
  `task_comp_comment` varchar(255) NOT NULL,
  `task_project_name` varchar(255) NOT NULL,
  `assigned_on_date` varchar(255) NOT NULL,
  `task_expected_comp_date` varchar(255) NOT NULL,
  `task_total_time` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `task_assigned_to`, `assgn_to_id`, `status`, `task_assigned_by`, `task_assigned_by_id`, `task_description`, `task_comp_comment`, `task_project_name`, `assigned_on_date`, `task_expected_comp_date`, `task_total_time`, `created_at`, `updated_at`) VALUES
(27, 'web e ticket form', 'Jamil', 18, 'complete', 'Naseem', 10, 'Analytical system', 'well done', 'Vehicle tkms', '20-04-2016', '30-04-2016', '', '2016-04-12 04:43:38', '2016-04-15 00:01:33'),
(28, 'database connection', 'Saleem', 17, 'complete', 'Naseem Ahmed', 10, 'db designing and implementation', '', 'E-shop1234', '20-04-2016', '30-04-2016', '', '2016-04-12 04:45:24', '2016-04-13 05:27:43'),
(29, 'Data analysis', 'Saleem', 17, 'complete', 'Naseem Ahmed', 10, 'Analytical system', '', 'E-shop', '20-04-2016', '30-04-2016', '', '2016-04-12 04:30:04', '2016-04-19 04:56:11'),
(30, 'new task for editor', 'Asad', 16, 'cancelled', 'Naseem Ahmed', 10, 'text editor', 'no more needed', 'E-shop', '20-04-2016', '30-04-2016', '', '2016-04-13 00:21:59', '2016-04-13 05:06:41'),
(31, 'new Data analysis', 'Asad', 16, 'complete', 'Naseem Ahmed', 10, 'data ware housing', 'done', 'task system', '20-04-2016', '30-04-2016', '', '2016-04-13 00:23:41', '2016-04-21 00:18:07'),
(32, 'Adding form functionality', 'Fazle', 19, 'complete', 'Naseem Ahmed', 10, 'form building', 'done', 'task system', '20-04-2016', '30-04-2016', '', '2016-04-13 04:59:48', '2016-04-26 05:31:31'),
(33, 'database connection', 'Asad', 16, 'complete', 'Naseem Ahmed', 10, 'form building', ' done', 'Vehicle tkms', '20-04-2016', '30-04-2016', '', '2016-04-13 05:14:16', '2016-05-01 23:59:05'),
(34, 'Adding form functionality', 'Usman', 15, 'complete', 'Naseem Ahmed', 10, 'Analytical system', 'ok', 'E-shop1234', '20-04-2016', '30-04-2016', '', '2016-04-13 05:15:26', '2016-05-09 00:10:44'),
(35, 'Data analysis', 'Asad', 16, 'complete', 'Naseem Ahmed', 10, 'form building', 'completed', 'E-shop', '20-04-2016', '30-04-2016', '', '2016-04-13 05:28:49', '2016-05-15 23:50:53'),
(36, 'formbuilding', 'Aqib', 11, 'complete', 'Naseem Ahmed', 10, 'form building', 'completed', 'E-shop1234', '20-04-2016', '30-04-2016', '', '2016-04-14 00:22:38', '2016-05-15 23:59:48'),
(37, 'Ecommerce analysis', 'Usman', 14, 'complete', 'Naseem Ahmed', 10, 'data ware housing', 'done completed', 'task system', '20-04-2016', '30-04-2016', '', '2016-04-14 00:23:01', '2016-05-20 05:13:31'),
(38, 'new task for editor', 'Usman', 15, 'complete', 'Naseem Ahmed', 10, 'data ware housing', 'done now', 'Vehicle tkms', '20-04-2016', '30-04-2016', '', '2016-04-14 00:23:27', '2016-06-01 01:37:29'),
(39, 'web e ticket form', 'Aqib', 11, 'complete', 'Naseem Ahmed', 10, 'Analytical system', 'ok', 'Vehicle tkms', '20-04-2016', '30-04-2016', '', '2016-04-14 00:23:57', '2016-06-01 01:37:47'),
(40, 'web e ticket form', 'Jamil', 18, 'pending', 'Naseem Ahmed', 10, 'db designing and implementation', '', 'E-shop1234', '20-04-2016', '30-04-2016', '', '2016-04-14 00:13:41', '2016-04-14 00:13:41'),
(41, 'web e ticket form', 'Aqib', 11, 'pending', 'Naseem Ahmed', 10, 'Analytical system', '', 'Vehicle tkms', '20-04-2016', '30-04-2016', '', '2016-04-15 00:21:28', '2016-04-15 00:21:28'),
(42, 'web e ticket form', 'Aqib', 11, 'pending', 'Naseem Ahmed', 10, 'Analytical system', '', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-04-20 00:18:27', '2016-04-20 00:18:27'),
(43, 'web e ticket form', 'Aqib', 11, 'pending', 'basharat Kamal', 7, 'Analytical system', '', 'Vehicle tkms', '20-04-2016', '30-04-2016', '', '2016-04-20 00:20:22', '2016-04-20 00:20:22'),
(44, 'Adding form functionality', 'Asad', 16, 'pending', 'basharat Kamal', 7, 'Analytical system', '', 'Vehicle tkms', '20-04-2016', '30-04-2016', '', '2016-04-21 00:34:08', '2016-04-21 00:34:08'),
(45, 'testing text area', 'Usman', 14, 'pending', 'Naseem Ahmed', 10, 'just testing text area', '', 'Shipping management system', '27-04-2016', '30-04-2016', '', '2016-04-27 05:13:48', '2016-04-27 05:13:48'),
(46, 'this ist for test', 'Usman', 15, 'pending', 'basharat khankhan', 6, 'this is for test                          ', '', '', '14/06/2016', '15-6-20169', '', '2016-04-28 00:16:15', '2016-04-28 00:16:15'),
(47, 'Greater today', 'Usman', 14, 'pending', 'Naseem Ahmed', 10, 'Greater today', '', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-04-29 05:19:44', '2016-04-29 05:19:44'),
(48, 'Data analysis', 'Usman', 15, 'complete', 'Naseem Ahmed', 10, 'new task', 'done now', 'Shipping management system', '20-04-2016', '15-6-20169', '', '2016-05-01 23:43:45', '2016-05-20 06:35:56'),
(49, 'database connection', 'Usman', 15, 'pending', 'Naseem Ahmed', 10, 'fds', '', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-05-01 23:58:58', '2016-05-01 23:58:58'),
(50, 'now task', 'Usman', 15, 'pending', 'Naseem Ahmed', 10, 'test abc', '', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-05-02 00:08:58', '2016-05-02 00:08:58'),
(51, 'new telling', 'Asad', 16, 'complete', 'Naseem Ahmed', 10, 'new telling', 'good job', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-05-02 00:37:57', '2016-05-16 00:12:40'),
(52, 'web e ticket form', 'Usman', 15, 'complete', 'Naseem Ahmed', 10, 'yrd', 'ok', 'Shipping management system', '20-04-2016', '15-6-20169', '', '2016-05-02 00:39:47', '2016-06-01 01:38:06'),
(53, 'new task for editor', 'Usman', 15, 'pending', 'Naseem Ahmed', 10, 'new', '', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-05-02 00:18:41', '2016-05-02 00:18:41'),
(54, 'New test task', 'Usman', 15, 'pending', 'Naseem Ahmed', 10, 'hello project', '', 'Shipping management system', '20-04-2016', '15-6-20169', '', '2016-05-02 00:20:10', '2016-05-02 00:20:10'),
(55, 'yes', 'Usman', 15, 'pending', 'Naseem Ahmed', 10, 'nice', '', 'Shipping management system', '12', '30-04-2016', '', '2016-05-02 00:04:19', '2016-05-02 00:04:19'),
(56, 'for new proj', 'Usman', 15, 'pending', 'Naseem Ahmed', 10, 'dsaf', '', 'Car showroom inventry system', '12', '30-04-2016', '', '2016-05-02 00:04:57', '2016-05-02 00:04:57'),
(57, 'for new proj', 'Nazim', 24, 'complete', 'Naseem Ahmed', 10, 'new project', 'completed', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-05-06 00:11:27', '2016-05-15 23:52:33'),
(58, 'Data analysis', 'Nazim', 24, 'complete', 'Naseem Ahmed', 10, 'ok', 'ok', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-05-06 00:11:55', '2016-05-15 23:53:40'),
(59, 'Data analysis', 'Asad', 16, 'pending', 'Naseem Ahmed', 10, 'make data', '', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-05-15 23:50:18', '2016-05-15 23:50:18'),
(60, 'new task for check', 'Asad', 16, 'pending', 'Naseem Ahmed', 10, 'new task for check', '', 'Shipping management system', '20-04-2016', '30-04-2016', '', '2016-05-16 00:25:33', '2016-05-16 00:25:33'),
(61, 'my task', 'Asad', 16, 'cancelled', 'Naseem Ahmed', 10, 'my project front end', 'not needed', 'Shipping management system', '2016-05-20', '2016-05-28', '', '2016-05-20 05:15:32', '2016-05-20 05:16:01'),
(62, 'my new task', 'Asad', 16, 'pending', 'Naseem Ahmed', 10, 'my new task', '', 'Car showroom inventry system', '2016-05-20', '2016-05-30', '', '2016-05-20 05:24:11', '2016-05-20 05:24:11'),
(63, 'with date', 'Nazim', 24, 'pending', 'Naseem Ahmed', 10, 'with date assigned', '', 'Shipping management system', '2016-05-21 00:00:00', '2016-05-28 00:00:00', '', '2016-05-20 05:41:31', '2016-05-20 05:41:31'),
(64, 'datemy new task', 'Nazim', 24, 'complete', 'Naseem Ahmed', 10, 'my new task', 'ok', 'Shipping management system', '2016-05-01 00:00:00', '2016-05-18 00:00:00', '', '2016-05-20 06:13:50', '2016-05-20 07:11:19'),
(65, 'my new task future', 'Asad', 16, 'complete', 'Naseem Ahmed', 10, 'my new task future', '0done', 'Shipping management system', '2016-05-01 00:00:00', '2016-05-31 00:00:00', '', '2016-05-20 06:14:51', '2016-05-31 00:22:46'),
(66, 'best task', 'Usman', 15, 'complete', 'Naseem Ahmed', 10, 'best task', 'done now', 'Shipping management system', '2016-05-16 00:00:00', '2016-05-19 00:00:00', '', '2016-05-20 06:16:26', '2016-05-20 06:16:48'),
(67, 'best task', 'Asad', 16, 'pending', 'Naseem Ahmed', 10, 'best website for kids toys', '', 'Shipping management system', '2016-05-03 00:00:00', '2016-05-30 00:00:00', '', '2016-05-20 06:56:11', '2016-05-20 06:56:11'),
(68, 'my new task', 'Asad', 16, 'pending', 'Naseem Ahmed', 10, 'my new gym website ', '', 'Shipping management system', '2016-05-01 00:00:00', '2016-05-18 00:00:00', '', '2016-05-20 06:56:42', '2016-05-20 06:56:42'),
(69, 'my task', 'Asad', 16, 'pending', 'Naseem Ahmed', 10, 'ok', '', 'Shipping management system', '2016-05-02 00:00:00', '2016-05-16 00:00:00', '', '2016-05-20 06:57:37', '2016-05-20 06:57:37'),
(70, 'my task', 'Ibrahim', 32, 'pending', 'Naseem Ahmed', 10, 'my task for indentation', '', 'task system', '2016-06-03 00:00:00', '2016-06-30 00:00:00', '0.54999999999998', '2016-06-03 05:33:04', '2016-06-09 01:00:35'),
(71, 'datemy new task', 'Ibrahim', 32, 'pending', 'Naseem Ahmed', 10, 'datemy new task datemy new task', '', 'Vehicle tkms', '2016-06-03 00:00:00', '2016-06-29 00:00:00', '0.28777777777778', '2016-06-03 05:33:34', '2016-06-07 04:27:21'),
(72, 'with date', 'Asif', 33, 'pending', 'Naseem Ahmed', 10, 'date integration in project', '', 'Vehicle tkmsdsfs', '2016-06-03 00:00:00', '2016-06-28 00:00:00', '0.017222222222222', '2016-06-03 05:34:07', '2016-06-07 07:36:38'),
(73, 'my new task future', 'Asif', 33, 'pending', 'Naseem Ahmed', 10, 'yes', '', 'now project', '2016-06-04 00:00:00', '2016-06-27 00:00:00', '0.0225', '2016-06-03 05:34:31', '2016-06-07 06:45:17'),
(74, 'integrate datase', 'Asif', 33, 'pending', 'Naseem Ahmed', 10, 'integrate datase', '', 'now project', '2016-06-06 00:00:00', '2016-06-30 00:00:00', '0.0083333333333333', '2016-06-06 00:14:48', '2016-06-07 07:29:46'),
(75, 'front end designed amendments', 'Asif', 33, 'pending', 'Naseem Ahmed', 10, 'front end designed amendments for proj', '', 'Vehicle tkms', '2016-06-07 00:00:00', '2016-06-30 00:00:00', '0.0052777777777777', '2016-06-06 00:18:00', '2016-06-06 08:21:45'),
(76, 'uni web design', 'Ibrahim', 32, 'pending', 'Naseem Ahmed', 10, 'uni web design for web', '', 'task system', '2016-06-06 00:00:00', '2016-06-22 00:00:00', '0.21972222222222', '2016-06-06 00:23:41', '2016-06-08 04:05:02'),
(77, 'my web task', 'Ibrahim', 32, 'pending', 'Naseem Ahmed', 10, 'my web', '', 'Vehicle tkms', '2016-06-06 00:00:00', '2016-06-18 00:00:00', '16.469444444443', '2016-06-06 11:10:45', '2016-06-08 07:20:14'),
(78, 'my task', 'Asif', 33, 'pending', 'Naseem Ahmed', 10, 'my task do', '', 'now project', '2016-06-07 00:00:00', '2016-06-29 00:00:00', '10.610555555554', '2016-06-06 00:31:47', '2016-06-07 07:36:44'),
(79, 'integrate datase', 'Ibrahim', 32, 'pending', 'Naseem Ahmed', 10, 'integrate datase done', '', 'Vehicle tkmsdsfs', '2016-06-06 00:00:00', '2016-06-30 00:00:00', '10.6125', '2016-06-06 00:33:42', '2016-06-07 04:28:28'),
(80, 'integrate datase', 'Muslim', 36, 'pending', 'Naseem Ahmed', 10, 'integrate datase', '', 'Vehicle tkms', '2016-06-06 00:00:00', '2016-06-28 00:00:00', '0.0041666666666666', '2016-06-06 07:11:04', '2016-06-06 07:12:32'),
(81, 'datemy new task', 'Saleem', 35, 'pending', 'Naseem Ahmed', 10, 'datemy new task', '', 'data project', '2016-06-07 00:00:00', '2016-06-30 00:00:00', '0.0041666666666666', '2016-06-06 07:53:17', '2016-06-06 07:54:13'),
(82, 'integrate datase', 'Mehmood', 34, 'pending', 'Naseem Ahmed', 10, 'integrate database ', '', 'data project', '2016-06-01 00:00:00', '2016-06-16 00:00:00', '0', '2016-06-08 04:52:43', '2016-06-08 04:52:43'),
(83, 'my task', 'Mehmood', 34, 'pending', 'Naseem Ahmed', 10, 'my task admin module', '', 'Date specific project', '2016-06-01 00:00:00', '2016-06-18 00:00:00', '0', '2016-06-08 04:53:14', '2016-06-08 04:53:14'),
(84, 'web task', 'Mehmood', 34, 'pending', 'Naseem Ahmed', 10, 'web task for pharma web', '', 'task system', '2016-06-09 00:00:00', '2016-06-30 00:00:00', '0', '2016-06-08 04:58:25', '2016-06-08 04:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) NOT NULL,
  `team_made_by_id` int(11) NOT NULL,
  `team_made_by` varchar(100) NOT NULL,
  `team_project_id` int(11) NOT NULL,
  `team_proj_name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `team_made_by_id`, `team_made_by`, `team_project_id`, `team_proj_name`, `status`, `created_at`, `updated_at`) VALUES
(8, 'team for ship', 10, 'Naseem', 24, 'Shipping management system', '', '2016-04-17 23:59:35', '2016-04-17 23:59:35'),
(9, 'new team123', 10, 'Naseem', 25, 'Car showroom inventry system', '', '2016-04-18 00:00:03', '2016-04-18 00:00:03'),
(16, 'newassign for test', 10, 'Naseem', 24, 'Shipping management system', '', '2016-04-20 00:11:46', '2016-04-20 00:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE IF NOT EXISTS `team_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mem_team_made_by_id` int(11) NOT NULL,
  `mem_team_made_by` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `member_name` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `mem_team_made_by_id`, `mem_team_made_by`, `member_id`, `member_name`, `created_at`, `updated_at`) VALUES
(51, 7, 'basharat', 16, 'Asad', '2016-04-20 00:05:38', '2016-04-20 00:05:38'),
(52, 6, 'basharat', 14, 'Usman', '2016-04-28 00:14:38', '2016-04-28 00:14:38'),
(53, 6, 'basharat', 15, 'Usman', '2016-04-28 00:14:39', '2016-04-28 00:14:39'),
(54, 6, 'basharat', 16, 'Asad', '2016-04-28 00:14:39', '2016-04-28 00:14:39'),
(70, 10, 'Naseem', 14, 'Usman', '2016-05-10 00:05:42', '2016-05-10 00:05:42'),
(71, 10, 'Naseem', 16, 'Asad', '2016-05-10 00:05:42', '2016-05-10 00:05:42'),
(72, 10, 'Naseem', 15, 'Usman', '2016-05-17 05:41:24', '2016-05-17 05:41:24'),
(73, 10, 'Naseem', 24, 'Nazim', '2016-05-20 07:19:51', '2016-05-20 07:19:51'),
(74, 10, 'Naseem', 32, 'Ibrahim', '2016-06-03 05:32:23', '2016-06-03 05:32:23'),
(75, 10, 'Naseem', 33, 'Asif', '2016-06-03 05:32:23', '2016-06-03 05:32:23'),
(76, 10, 'Naseem', 36, 'Muslim', '2016-06-06 07:04:03', '2016-06-06 07:04:03'),
(77, 10, 'Naseem', 35, 'Saleem', '2016-06-06 07:52:09', '2016-06-06 07:52:09'),
(78, 10, 'Naseem', 34, 'Mehmood', '2016-06-08 04:52:05', '2016-06-08 04:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `to_dos_tasks`
--

CREATE TABLE IF NOT EXISTS `to_dos_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_do_name` varchar(40) NOT NULL,
  `to_do_description` varchar(255) NOT NULL,
  `weightage` int(8) NOT NULL,
  `to_made_by_id` int(11) NOT NULL,
  `to_made_by` varchar(100) NOT NULL,
  `to_task_id` int(11) NOT NULL,
  `to_task_name` varchar(64) NOT NULL,
  `to_proj_id` int(11) NOT NULL,
  `to_proj_name` varchar(64) NOT NULL,
  `to_tl_id` int(11) NOT NULL,
  `to_tl_name` varchar(64) NOT NULL,
  `status` varchar(44) NOT NULL,
  `tm_comment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `to_dos_tasks`
--

INSERT INTO `to_dos_tasks` (`id`, `to_do_name`, `to_do_description`, `weightage`, `to_made_by_id`, `to_made_by`, `to_task_id`, `to_task_name`, `to_proj_id`, `to_proj_name`, `to_tl_id`, `to_tl_name`, `status`, `tm_comment`, `created_at`, `updated_at`) VALUES
(1, 'front end', 'front end form', 0, 16, 'Asad', 67, 'best task', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'cancelled', 'cancelled', '2016-06-01 06:24:54', '2016-06-02 08:00:16'),
(2, 'database design', 'database design req', 0, 16, 'Asad', 67, 'best task', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'complete', 'ok now done', '2016-06-01 06:26:19', '2016-06-02 02:47:23'),
(3, 'database table', 'database table', 3, 16, 'Asad', 67, 'best task', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'pending', '', '2016-06-01 06:28:07', '2016-06-01 06:28:07'),
(4, 'identity module', 'identity module', 3, 16, 'Asad Mehmood', 67, 'best task', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'pending', '', '2016-06-01 06:51:27', '2016-06-01 06:51:27'),
(5, 'Back end admin ', 'back end for this project', 3, 16, 'Asad Mehmood', 67, 'best task', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'cancelled', 'not needed any more', '2016-06-02 01:17:20', '2016-06-02 05:02:25'),
(6, 'Resizing images', 'Resizing images', 1, 16, 'Asad Mehmood', 67, 'best task', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'pending', '', '2016-06-02 01:21:14', '2016-06-02 01:21:14'),
(7, 'store images', 'store images', 2, 16, 'Asad Mehmood', 67, 'best task', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'complete', 'done', '2016-06-02 01:23:58', '2016-06-02 02:46:30'),
(8, 'video uploading', 'video uploading to web ', 2, 16, 'Asad Mehmood', 67, 'best task', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'pending', '', '2016-06-02 01:30:03', '2016-06-02 01:30:03'),
(9, 'front end', 'front end for website', 3, 16, 'Asad Mehmood', 23, 'Data analysis', 0, 'E-shop', 0, '', 'pending', '', '2016-06-02 03:10:52', '2016-06-02 03:10:52'),
(10, 'database design', 'database design and erd', 2, 16, 'Asad Mehmood', 23, 'Data analysis', 0, 'E-shop', 0, '', 'pending', '', '2016-06-02 03:11:37', '2016-06-02 03:11:37'),
(11, 'front end', 'front end making', 1, 16, 'Asad Mehmood', 24, 'web e ticket form', 0, 'E-shop', 0, '', 'complete', 'done ok', '2016-06-02 03:13:11', '2016-06-02 03:13:34'),
(12, 'sad', 'test', 2, 16, 'Asad Mehmood', 67, 'best task', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'pending', '', '2016-06-02 03:16:11', '2016-06-02 03:16:11'),
(13, 'front end', 'front end front end', 2, 16, 'Asad Mehmood', 62, 'my new task', 0, 'Car showroom inventry system', 10, 'Naseem Ahmed', 'complete', 'ok now done', '2016-06-02 03:16:50', '2016-06-02 03:17:11'),
(14, 'database design', 'database design for web', 2, 16, 'Asad Mehmood', 60, 'new task for check', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'complete', 'done', '2016-06-02 07:56:28', '2016-06-02 07:57:35'),
(15, 'tables implementation', 'tables implementation for web', 3, 16, 'Asad Mehmood', 60, 'new task for check', 0, 'Shipping management system', 10, 'Naseem Ahmed', 'pending', '', '2016-06-02 07:57:18', '2016-06-02 07:57:18'),
(16, 'front end', 'front end for jobs portal', 2, 32, 'Ibrahim Ch', 70, 'my task', 0, 'task system', 10, 'Naseem Ahmed', 'complete', 'ok now done', '2016-06-08 07:22:18', '2016-06-08 02:39:50'),
(17, 'video uploading', 'video uploading for web', 2, 32, 'Ibrahim Ch', 70, 'my task', 0, 'task system', 10, 'Naseem Ahmed', 'complete', 'done', '2016-06-08 07:23:56', '2016-06-08 02:24:55'),
(18, 'database design', 'database design for web', 2, 33, 'Asif Khan', 72, 'with date', 0, 'Vehicle tkmsdsfs', 10, 'Naseem Ahmed', 'pending', '', '2016-06-03 07:08:26', '2016-06-03 07:08:26'),
(19, 'database design', 'research made for project ', 2, 36, 'Muslim Aqeel', 80, 'integrate datase', 0, 'Vehicle tkms', 10, 'Naseem Ahmed', 'pending', '', '2016-06-06 07:13:15', '2016-06-06 07:13:15'),
(20, 'identity module', 'identity module description', 2, 33, 'Asif Khan', 73, 'my new task future', 0, 'now project', 10, 'Naseem Ahmed', 'pending', '', '2016-06-06 08:06:30', '2016-06-06 08:06:30'),
(21, 'identity module', 'identity module', 1, 32, 'Ibrahim Ch', 70, 'my task', 0, 'task system', 10, 'Naseem Ahmed', 'complete', 'hmmm yes done', '2016-06-07 04:52:58', '2016-06-08 01:38:56'),
(24, 'front end', 'front end', 2, 32, 'Ibrahim Ch', 70, 'my task', 0, 'task system', 10, 'Naseem Ahmed', 'cancelled', 'cancelled', '2016-06-07 05:51:42', '2016-06-08 01:39:56'),
(25, 'Digital logic design', 'Digital logic design  do', 3, 32, 'Ibrahim Ch', 70, 'my task', 0, 'task system', 10, 'Naseem Ahmed', 'pending', 'done', '2016-06-08 07:19:38', '2016-06-08 07:19:38'),
(26, 'date time recorder', 'date time recorder for web', 2, 33, 'Asif Khan', 72, 'with date', 0, 'Vehicle tkmsdsfs', 10, 'Naseem Ahmed', 'pending', '', '2016-06-07 07:08:36', '2016-06-07 07:08:36'),
(27, 'database design', 'database design for date ', 3, 33, 'Asif Khan', 72, 'with date', 0, 'Vehicle tkmsdsfs', 10, 'Naseem Ahmed', 'pending', '', '2016-06-07 07:09:01', '2016-06-07 07:09:01'),
(28, 'Resizing images', 'Resizing images for web', 3, 33, 'Asif Khan', 72, 'with date', 0, 'Vehicle tkmsdsfs', 10, 'Naseem Ahmed', 'pending', '', '2016-06-07 07:43:11', '2016-06-07 07:43:11'),
(29, 'front end', 'front end', 2, 32, 'Ibrahim Ch', 70, 'my task', 0, 'task system', 10, 'Naseem Ahmed', 'pending', '', '2016-06-08 02:43:01', '2016-06-08 02:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `type_of` varchar(40) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `type_of`, `email`, `password`, `dept`, `created_at`, `updated_at`, `remember_token`) VALUES
(6, 'basharat', 'khankhan', 'team_lead', 'uajddfsdfhfdfasls@abc.com', '$2y$10$JmvoMMGrByhBVx9/GI8.R.tOKxfxbSjZWEprQhMb7ckQ18T6HFVnm', 'web_designer', '2016-03-29 05:33:00', '2016-04-28 00:17:00', 'E5LizHD6nI8gxriT6bcjKYraffUBa8l1qXnP6cJsH9DQAhJ0yU7DEdXXeZ6d'),
(7, 'basharat', 'Kamal', 'team_lead', 'uadfffds@abc.com', '$2y$10$3wmL1TznxGv6cthOVUFvs.asfe.D7JHI25dhFJs3Fb.BAIF5elLlq', 'ALL', '2016-03-29 05:42:39', '2016-04-20 23:51:15', 'aYSd4S0GCT1p6cp80zZZi9eBRsXakgfHVDie8o5DxfW0VqsRfEJ3EgS9rGPx'),
(8, 'basharat', 'Khan', 'proj_manager', 'uadfafs@abc.com', '$2y$10$xM3IkOBMfyyk5JT02WGte.yEKmQ3FnH2NdPMxoNt1Zyl/tTgmXyS6', 'ALL', '2016-03-29 05:44:32', '2016-06-08 06:38:14', '44PVtzzkZtl9jNq6LBNRq66pCn5mCMkOZsNAgsIxvQifb0Ofyisdl96823qm'),
(9, 'Basharat', 'Ch', 'admin', 'us@abc.com', '$2y$10$mpS1fP/vofTh9NUZK.dKk.zsXBViNQx6six7fXgzftU4xCMSZrHWq', 'all', '2016-03-30 05:41:30', '2016-06-06 07:02:23', 'izDGVwwMerWMQwQkQoA2FVv1e6MkWdMpZoeyOX5GwWNm4sZ73luj9gh2XnmL'),
(10, 'Naseem', 'Ahmed', 'team_lead', 'naseemus@abc.com', '$2y$10$0I/7Bl8BigtKY2NURofB9.oTCV0z2zAEHO2bL9gPxJjsiyZ5jJqwm', 'web_designer', '2016-03-30 00:05:37', '2016-06-08 05:05:20', 'M4kmsOh3OzhcbtwSSxgVF4cmamM22lwkN6bteIIbUNrir7QUq0SZAScztZTF'),
(14, 'Usman', 'Ameen', 'team_member', 'usmantm@abc.com', '$2y$10$AKVEhE/eKguf9b5LmiDO2OsZiuc5ygFP7tO0dFEYIWHnwAdjdYr5G', 'web_developer', '2016-04-01 05:31:28', '2016-04-27 05:54:11', 'eNWLoZ342f7cK19XCij1TJi4WbgDUNoEc8vy0rHdQJ6ORHYGdr86JTwZAtz9'),
(15, 'Usman', 'Chaudry', 'team_member', 'hashas@w.com', '123456', 'web', '2016-04-05 09:49:27', '2016-04-05 09:49:27', ''),
(16, 'Asad', 'Mehmood', 'team_member', 'best@home.com', '$2y$10$cj57E9UwOXofnk0SsT67tefPxdJFqWhCXJtEyqK0VYuDvTkt1A7YO', 'web_designer', '2016-04-11 04:47:27', '2016-06-08 02:54:37', 'CxprXZE4qbSzVtTCDiMYMp6K36RclHoFKtHMTMJrE3gdx8DpEFkpR8Adldbd'),
(22, 'Junaid', 'Akhtar', 'admin', 'junaid@pkteam.com', '$2y$10$Y5Xx5Yh8NTidJA5gguFamuVU66N1lgo1JiDs1miQJ5BAWkD1wGg6i', 'all', '2016-04-22 04:47:15', '2016-04-22 06:18:47', 'CaaGvCRf5TD6LlQAz2PBig1LwJNPMuIGpmV2u1XaZJDB14JxI1Hj6YXrwqOg'),
(23, 'Safeer', 'Ahmad', 'proj_manager', 'safeer@gmail.com', '$2y$10$NgD97OTFhhyBmVnCZoOjfu/PRwRLOMlegmYruhoDz9tOLzlBAFD3a', 'web_designer', '2016-04-29 00:04:44', '2016-04-29 00:04:44', ''),
(24, 'Nazim', 'Khan', 'team_member', 'abcbest@home.com', '$2y$10$KQjnb8gLIcJA8OG1l0LIcOiKK0p8F2KJL87WnqxuwvSxSk4.XwTLi', 'web_developer', '2016-04-29 05:00:11', '2016-05-20 07:13:38', '7HEXQ0SXufhOMWSPlE19VCwavVPlBcwHQ9xNVYCcbMzkRRsqMzTeCAJCxTaZ'),
(25, 'Muhammad', 'Khan', 'proj_manager', 'bdfasfaest@home.com', '$2y$10$XSNO3tVslDwGfnIq6vEs4.ScGV6PNBAOClxRS2rIs/rvDeKjaUjhO', 'web_designer', '2016-05-02 00:24:37', '2016-05-03 00:06:40', '1xuU0a6ziWMB3td9TGD2vvFGnxtyXubYujfkVYvgUxJBZX0bTxKF8vmFzx8G'),
(26, 'Muhammad', 'Basharat', 'team_lead', 'naseemusadfs@abc.com', '$2y$10$lI3DRiRe1Weoob4/xL6UNeXrV8T.4pn9Ca7yHJnqUJdpHUMhezGeO', 'web_designer', '2016-05-01 23:43:52', '2016-05-01 23:43:52', ''),
(27, 'testtime', 'time', 'team_member', 'testte@test.com', '$2y$10$tBXAWJSLuPu0BC4r3fPIfOAAfDIhB0w84hhUMWISjabP31a3P93km', 'web_developer', '2016-06-02 08:15:08', '2016-06-02 08:15:08', ''),
(28, 'testtime', 'time', 'team_member', 'get@abc.com', '$2y$10$MwEL.Jl9rBrwcDjWhpEZhuhbRBCYgGxX4AUaKijgN2VBrr60tdLRa', 'all', '2016-06-02 11:18:09', '2016-06-02 11:18:09', ''),
(29, 'Faheem', 'Anwar', 'team_member', 'faheem@gmail.com', '$2y$10$/D7ckNUmK1CCQ/Emx3GrQON5PZjHZof.4ykk7z2pG1/CXu832LeMy', 'all', '2016-06-03 02:29:24', '2016-06-03 02:29:24', ''),
(30, 'Ehsan', 'Qadeer', 'team_member', 'ehsan@hotmail.com', '$2y$10$aGv/9X6dxfymin4LC6SJ2uPLXrOs14llwZO0KxNbp2EkQoZ9akFIe', 'all', '2016-06-03 02:33:24', '2016-06-03 02:33:24', ''),
(31, 'Hammad', 'Khan', 'team_lead', 'hammade@gmail.com', '$2y$10$Co57kBwBgPxvzGHtk2IaFOgIAcigwijuthKLahjA8ZunYk/yzg9ry', 'all', '2016-06-03 02:34:47', '2016-06-03 02:34:47', ''),
(32, 'Ibrahim', 'Ch', 'team_member', 'ibrahim@gmai.com', '$2y$10$nBuRm8D3sxM./UkQ.fqEe.fWoCQO/eweppJBpetqVq.45SMlyWRL.', 'web_developer', '2016-06-03 02:41:48', '2016-06-08 07:24:06', 'HP2wbQqF0yV3Pq2UajbXkSn1EEXIfOSib0GTmPr2t75yBGf2oYjgtm2yvlDx'),
(33, 'Asif', 'Khan', 'team_member', 'asif@hotmail.com', '$2y$10$IQEZ.11Lx5x5TsVQe4QfLOJqtWGShMILq0kTj0iJ8IOwRCeOpwISC', 'web_developer', '2016-06-03 02:44:34', '2016-06-07 07:51:14', 'sm9NvuoYcJ3DWFrRIJyNW5jaOwn3moIQlVlwscr7hGxZLx7919LX4teRLM1l'),
(34, 'Mehmood', 'Ahmed', 'team_member', 'mehmood@yahoo.com', '$2y$10$E.kOhXR6/NWK2XUo6B1GB.ua2VQTxuLgb8kI4vUetaYJ1wYph40gC', 'web_developer', '2016-06-03 07:35:30', '2016-06-08 03:30:38', 'KyeNXn2VJVCRfJ3Vt1dh4uwcK5l0doF3TZNTi6lclhY0eKbOsOlpGkE0s6xd'),
(35, 'Saleem', 'Ahmed', 'team_member', 'saleekhan@gmail.com', '$2y$10$y.Sj75XWDQBBEExz7WLvYOGcbhHMb3IzYw.7INbEexbU8p0hJDTKa', 'app_developer', '2016-06-06 06:56:42', '2016-06-06 07:54:41', '0jVPiBs0icBzmDWElUPP5xE6XALkzHdZLpiSpRQYuQQKJJXU92c1S4AvdHFx'),
(36, 'Muslim', 'Aqeel', 'team_member', 'aqeela@hotmail.com', '$2y$10$9lC5tnIelbq6DAGLsazA..odEevBrCkzsYFwzA66SBBuHhOxylpgK', 'web_developer', '2016-06-06 07:02:19', '2016-06-06 07:15:19', 'AF1obYOj75dWeWNeXzDiYuQEnR0T1LdaLdPUmuIYhlUSIxNJ3RbxhRqiKvtk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
