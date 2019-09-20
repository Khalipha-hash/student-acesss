-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2018 at 11:04 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u15061401`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activityid` int(4) NOT NULL,
  `student` varchar(30) NOT NULL,
  `activity` text NOT NULL,
  `dateactivity` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activityid`, `student`, `activity`, `dateactivity`) VALUES
(124, 'jeremyolu', 'jeremyolu just posted a message', '2018-04-11 20:25:41'),
(125, 'jeremyolu', 'jeremyolu just posted a message', '2018-04-11 20:25:48'),
(126, 'jeremyolu', 'jeremyolu just created a forum discussion', '2018-04-11 20:29:31'),
(127, 'jeremyolu', 'jeremyolu just joined in a forum discussion', '2018-04-11 20:32:08'),
(128, 'rachelryan', 'rachelryan has just logged in now', '2018-04-11 20:34:59'),
(129, 'rachelryan', 'rachelryan shared a file called testing phase example', '2018-04-11 20:35:22'),
(130, 'rachelryan', 'rachelryan has just submitted their 1 assignment', '2018-04-11 20:45:06'),
(131, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-11 23:46:57'),
(132, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-12 01:30:25'),
(133, 'rachelryan', 'rachelryan has just logged in now', '2018-04-12 01:59:05'),
(134, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-12 17:24:54'),
(135, 'jeremyolu', 'jeremyolu shared a file called gant', '2018-04-12 23:19:24'),
(136, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-13 19:33:01'),
(137, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-19 14:45:04'),
(138, 'jeremyolu', 'jeremyolu has just submitted their module: 1 assignment', '2018-04-19 15:16:11'),
(139, 'rachelryan', 'rachelryan has just logged in now', '2018-04-19 19:22:33'),
(140, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-19 20:03:16'),
(141, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-19 20:25:15'),
(142, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-19 20:26:00'),
(143, 'jeremyolu', 'jeremyolu shared a file called h', '2018-04-19 21:35:31'),
(144, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-19 22:48:39'),
(145, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-19 23:47:15'),
(146, 'jeremyolu', 'jeremyolu shared a file called gantt', '2018-04-20 00:03:50'),
(147, 'jeremyolu', 'jeremyolu shared a file called scores', '2018-04-20 00:08:21'),
(148, 'jeremyolu', 'jeremyolu shared a file called app', '2018-04-20 00:09:55'),
(149, 'jeremyolu', 'jeremyolu shared a file called capture', '2018-04-20 00:13:43'),
(150, 'jeremyolu', 'jeremyolu shared a file called sb', '2018-04-20 00:18:45'),
(151, 'jeremyolu', 'jeremyolu shared a file called motive logo updated version', '2018-04-20 00:24:08'),
(152, 'jeremyolu', 'jeremyolu shared a file called attempt', '2018-04-20 00:34:37'),
(153, 'jeremyolu', 'jeremyolu shared a file called jeremy smiling', '2018-04-20 00:49:01'),
(154, 'jeremyolu', 'jeremyolu shared a file called jo', '2018-04-20 00:50:34'),
(155, 'rachelryan', 'rachelryan has just logged in now', '2018-04-20 00:52:43'),
(156, 'rachelryan', 'rachelryan shared a file called jhh', '2018-04-20 00:57:05'),
(157, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-20 00:57:34'),
(158, 'jeremyolu', 'jeremyolu shared a file called tes', '2018-04-20 00:57:48'),
(159, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-20 20:04:16'),
(160, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-20 20:06:04'),
(161, 'jeremyolu', 'jeremyolu shared a file called test', '2018-04-20 20:16:30'),
(162, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-21 14:11:28'),
(163, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-21 14:15:22'),
(164, 'jeremyolu', 'jeremyolu just posted a message', '2018-04-21 14:30:10'),
(165, 'jeremyolu', 'jeremyolu just posted a message', '2018-04-21 14:30:56'),
(166, 'rachelryan', 'rachelryan has just logged in now', '2018-04-21 14:36:51'),
(167, 'rachelryan', 'rachelryan just joined in a forum discussion', '2018-04-21 14:40:17'),
(168, 'rachelryan', 'rachelryan just joined in a forum discussion', '2018-04-21 14:41:29'),
(169, 'rachelryan', 'rachelryan shared a file called research group task', '2018-04-21 19:40:03'),
(170, 'rachelryan', 'rachelryan just posted a message', '2018-04-22 14:29:09'),
(171, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-22 18:37:15'),
(172, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-25 22:19:13'),
(173, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-25 22:57:56'),
(174, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-26 00:32:56'),
(175, 'jeremyolu', 'jeremyolu has just logged in now', '2018-04-26 01:09:56'),
(176, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-25 01:44:05'),
(177, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-25 01:55:01'),
(178, 'jeremyolu', 'jeremyolu shared a file called We need to work on this file', '2018-10-25 01:59:51'),
(179, 'jeremyolu', 'jeremyolu shared a file called We need to work on this file guys', '2018-10-25 02:02:02'),
(180, 'rachelryan', 'rachelryan has just logged in now', '2018-10-25 02:04:16'),
(181, 'rachelryan', 'rachelryan has just logged in now', '2018-10-25 02:07:05'),
(182, 'jeremyolu', 'jeremyolu and jeremyolu are now friends', '2018-10-25 02:07:21'),
(183, 'rachelryan', 'rachelryan has just logged in now', '2018-10-25 03:53:01'),
(184, 'rachelryan', 'rachelryan has just submitted their module: 1 assignment', '2018-10-25 03:57:06'),
(185, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-25 03:57:56'),
(186, 'rachelryan', 'rachelryan has just logged in now', '2018-10-25 03:58:17'),
(187, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-25 04:14:36'),
(188, 'jeremyolu', 'jeremyolu just posted a message', '2018-10-25 04:28:24'),
(189, 'jeremyolu', 'jeremyolu just created a forum discussion', '2018-10-25 04:34:10'),
(190, 'jeremyolu', 'jeremyolu just posted a message', '2018-10-25 04:40:04'),
(191, 'jeremyolu', 'jeremyolu shared a file called test', '2018-10-25 04:48:16'),
(192, 'jeremyolu', 'jeremyolu shared a file called updated', '2018-10-25 04:49:16'),
(193, 'jeremyolu', 'jeremyolu has just submitted their module: 1 assignment', '2018-10-25 04:54:05'),
(194, 'jeremyolu', 'jeremyolu has just submitted their module: 1 assignment', '2018-10-25 04:57:32'),
(195, 'jeremyolu', 'jeremyolu just joined in a forum discussion', '2018-10-25 05:23:42'),
(196, 'jeremyolu', 'jeremyolu just joined in a forum discussion', '2018-10-25 05:24:20'),
(197, 'jeremyolu', 'jeremyolu just updated their bio', '2018-10-25 10:52:44'),
(198, 'jeremyolu', 'jeremyolu just sent a friend request to me', '2018-10-25 11:36:04'),
(199, 'jeremyolu', 'jeremyolu just sent a friend request to me', '2018-10-25 11:36:29'),
(200, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-25 15:47:27'),
(201, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-25 15:50:21'),
(202, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-25 16:09:52'),
(203, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-26 01:58:10'),
(204, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-26 02:51:49'),
(205, 'israelsqlr', 'israelsqlr has just logged in now', '2018-10-26 03:37:25'),
(206, 'like', 'like has just logged in now', '2018-10-26 03:40:51'),
(207, 'like', 'like just posted a message', '2018-10-26 03:45:40'),
(208, 'like', 'like shared a file called databse', '2018-10-26 03:49:36'),
(209, 'like', 'like just created a forum discussion', '2018-10-26 04:10:45'),
(210, 'like', 'like just updated their bio', '2018-10-26 04:42:23'),
(211, 'like', 'like has just changed their profile picture', '2018-10-26 04:55:54'),
(212, 'like', 'like just joined in a forum discussion', '2018-10-26 05:42:46'),
(213, 'israelsqlr', 'israelsqlr has just logged in now', '2018-10-26 06:08:31'),
(214, '123', '123 has just logged in now', '2018-10-26 06:26:37'),
(215, 'jhon', 'jhon has just logged in now', '2018-10-26 06:42:32'),
(216, 'jhon', 'jhon just updated their bio', '2018-10-26 07:41:46'),
(217, 'jeremyolu', 'jeremyolu has just logged in now', '2018-10-26 07:53:10'),
(218, 'jhon', 'jhon has just logged in now', '2018-10-26 08:23:42'),
(219, 'jhon', 'jhon just sent a friend request to me', '2018-10-26 08:27:08'),
(220, 'like', 'like has just logged in now', '2018-10-26 08:27:40'),
(221, 'like', 'like and like are now friends', '2018-10-26 08:29:37'),
(222, 'like', 'like just sent a friend request to me', '2018-10-26 08:32:46'),
(223, 'ekseTops', 'ekseTops has just logged in now', '2018-10-26 08:33:24'),
(224, 'ekseTops', 'ekseTops and ekseTops are now friends', '2018-10-26 08:33:42'),
(225, 'ekseTops', 'ekseTops just sent a friend request to me', '2018-10-26 08:42:38'),
(226, '123', '123 has just logged in now', '2018-10-26 08:42:51'),
(227, '123', '123 and 123 are now friends', '2018-10-26 08:42:58'),
(228, '123', '123 has just submitted their module: 1 assignment', '2018-10-26 09:32:56'),
(229, '123', '123 has just changed their profile picture', '2018-10-26 09:35:46'),
(230, '123', '123 shared a file called We need to work on this file guys', '2018-10-26 09:37:49'),
(231, '123', '123 just updated their bio', '2018-10-26 09:39:33'),
(232, '123', '123 has just submitted their module: 1 assignment', '2018-10-26 09:47:09'),
(233, '123', '123 has just submitted their module: 1 assignment', '2018-10-26 09:51:09'),
(234, '123', '123 has just submitted their module: 1 assignment', '2018-10-26 09:53:16'),
(235, '123', '123 shared a file called Search function, you can edit if you like.', '2018-10-26 10:00:00'),
(236, 'Sasko', 'Sasko has just logged in now', '2018-10-26 10:29:40'),
(237, 'Sasko', 'Sasko has just logged in now', '2018-10-26 10:36:37'),
(238, 'Sasko', 'Sasko has just logged in now', '2018-10-26 11:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `asid` int(4) NOT NULL,
  `staff` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `instructions` text NOT NULL,
  `yeargroup` int(2) NOT NULL,
  `dateset` datetime DEFAULT CURRENT_TIMESTAMP,
  `datedue` date NOT NULL,
  `hyperlink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`asid`, `staff`, `subject`, `assignment`, `filename`, `instructions`, `yeargroup`, `dateset`, `datedue`, `hyperlink`) VALUES
(1, 'olusmith', 'c++', 'complete project group', 'revision-guide-foundation-number-worksheet.doc', 'Choose to owrk individually', 11, '2018-02-03 19:40:49', '2018-02-25', 'https://www.bbc.com/education/subjects/z38pycw');

-- --------------------------------------------------------

--
-- Table structure for table `assignments_uploads`
--

CREATE TABLE `assignments_uploads` (
  `uploadid` int(4) NOT NULL,
  `asid` int(4) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `student` varchar(30) NOT NULL,
  `submitdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `grade` int(3) DEFAULT NULL,
  `feedback` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments_uploads`
--

INSERT INTO `assignments_uploads` (`uploadid`, `asid`, `filename`, `student`, `submitdate`, `grade`, `feedback`) VALUES
(3, 1, 'banner3.jpg', 'jeremyolu', '2018-02-03 22:52:54', 35, 'great peace of writing jeremy, i like the way you described the methods used in the text. Discriptions were great, keep up the work mate!!'),
(5, 1, 'happy.svg', 'rachelryan', '2018-02-03 22:58:20', 60, 'great work mate!'),
(6, 1, 'mpd-report.docx', 'rachelryan', '2018-04-11 20:45:06', 22, NULL),
(7, 1, 'images.jpg', 'jeremyolu', '2018-04-19 15:16:11', 45, NULL),
(8, 1, 'TimeTable.xlsx', 'rachelryan', '2018-10-25 03:57:06', NULL, NULL),
(9, 1, 'response', 'jeremyolu', '2018-10-25 04:54:05', NULL, NULL),
(10, 1, 'TimeTable.xlsx', 'jeremyolu', '2018-10-25 04:57:32', NULL, NULL),
(11, 1, 'position_Surname.xlsx', '123', '2018-10-26 09:32:56', NULL, NULL),
(12, 1, 'u15061401.sql', '123', '2018-10-26 09:47:09', NULL, NULL),
(13, 1, 'search.php', '123', '2018-10-26 09:51:09', NULL, NULL),
(14, 1, 'logout.php', '123', '2018-10-26 09:53:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `friends_requests`
--

CREATE TABLE `friends_requests` (
  `id` int(11) NOT NULL,
  `from_student` varchar(30) NOT NULL,
  `to_student` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends_requests`
--

INSERT INTO `friends_requests` (`id`, `from_student`, `to_student`) VALUES
(2, 'jeremyolu', 'rachelryan'),
(3, 'jeremyolu', 'JosephMoss');

-- --------------------------------------------------------

--
-- Table structure for table `inbox_messages`
--

CREATE TABLE `inbox_messages` (
  `id` int(11) NOT NULL,
  `from_student` varchar(30) NOT NULL,
  `to_student` varchar(30) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `datesent` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox_messages`
--

INSERT INTO `inbox_messages` (`id`, `from_student`, `to_student`, `title`, `message`, `datesent`) VALUES
(1, 'jeremyolu', 'rachelryan', 'Greetings', 'Hello I have a crush', '2018-10-25 02:08:23'),
(3, 'jeremyolu', 'rachelryan', 'Help', 'I need help with c++', '2018-10-25 11:48:12'),
(4, 'jeremyolu', 'rachelryan', '', 'ok', '2018-10-25 11:49:16'),
(5, 'jhon', 'jeremyolu', '', 'hi', '2018-10-26 07:52:53'),
(6, 'jeremyolu', 'jhon', '', 'hey John', '2018-10-26 08:22:29'),
(7, 'jeremyolu', 'jhon', '', 'hello', '2018-10-26 08:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(5) NOT NULL,
  `student` varchar(30) NOT NULL,
  `postto` varchar(30) NOT NULL,
  `post` text NOT NULL,
  `dateposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `student`, `postto`, `post`, `dateposted`) VALUES
(6, 'rachelryan', 'rachelryan', 'testing the post', '2018-04-12 19:58:55'),
(7, 'jeremyolu', 'jeremyolu', 'the science mock test was alright, it\'s a good thing i revised!', '2018-04-21 13:30:10'),
(8, 'jeremyolu', 'rachelryan', 'Hey Rachel, how did you find the exam? I thought it was cool!', '2018-04-21 13:30:56'),
(10, 'jeremyolu', 'jeremyolu', 'Does it Work?', '2018-10-25 02:28:24'),
(11, 'jeremyolu', 'rachelryan', 'nothing much', '2018-10-25 02:40:04'),
(12, 'like', 'like', 'Test', '2018-10-26 01:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `datesent` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`id`, `username`, `message`, `datesent`) VALUES
(18, 'rachelryan', 'ha', '2018-04-12 02:07:09'),
(19, 'jeremyolu', 'ha', '2018-04-12 18:25:53'),
(20, 'rachelryan', 'hello', '2018-04-22 16:59:20'),
(21, 'jeremyolu', 'hello', '2018-10-25 01:47:11'),
(22, 'like', 'Hi there!', '2018-10-26 03:44:18'),
(23, 'jhon', 'Hi Like\r\n', '2018-10-26 06:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum`
--

CREATE TABLE `tbl_forum` (
  `forumid` int(4) NOT NULL,
  `student` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forum`
--

INSERT INTO `tbl_forum` (`forumid`, `student`, `subject`, `title`, `body`, `date`) VALUES
(7, 'jeremyolu', 'jQuery', 'Help', 'Php is killing me', '2018-10-25 04:34:09'),
(8, 'like', 'C++', 'Classes', 'I am struggling with OOP, HELP!', '2018-10-26 04:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum_replies`
--

CREATE TABLE `tbl_forum_replies` (
  `replyid` int(4) NOT NULL,
  `forumid` int(4) NOT NULL,
  `replybody` text NOT NULL,
  `replystudent` varchar(30) NOT NULL,
  `replydate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forum_replies`
--

INSERT INTO `tbl_forum_replies` (`replyid`, `forumid`, `replybody`, `replystudent`, `replydate`) VALUES
(9, 7, 'This is actually a test', 'jeremyolu', '2018-10-25 05:23:42'),
(10, 7, 'This is actually a test', 'jeremyolu', '2018-10-25 05:24:19'),
(11, 7, 'Hang in there buddy!', 'like', '2018-10-26 05:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shared_files`
--

CREATE TABLE `tbl_shared_files` (
  `fileid` int(4) NOT NULL,
  `student` varchar(30) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `dateshared` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shared_files`
--

INSERT INTO `tbl_shared_files` (`fileid`, `student`, `filename`, `description`, `dateshared`) VALUES
(60, 'rachelryan', 'Lab - Research Task.doc', 'research group task', '2018-04-21 19:40:03'),
(61, 'jeremyolu', 'index.php', 'We need to work on this file', '2018-10-25 01:59:51'),
(62, 'jeremyolu', 'mpd-report.docx', 'We need to work on this file guys', '2018-10-25 02:02:02'),
(63, 'jeremyolu', 'TimeTable.xlsx', 'test', '2018-10-25 04:48:15'),
(64, 'jeremyolu', 'TimeTable.xlsx', 'updated', '2018-10-25 04:49:16'),
(65, 'like', 'daowat_db.sql', 'databse', '2018-10-26 03:49:36'),
(66, '123', 'position_Surname.xlsx', 'We need to work on this file guys', '2018-10-26 09:37:49'),
(67, '123', 'search.php', 'Search function, you can edit if you like.', '2018-10-26 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student` varchar(30) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `bio` text,
  `profileimg` varchar(200) NOT NULL DEFAULT 'user.svg',
  `memorable` varchar(20) NOT NULL DEFAULT 'default',
  `password` char(32) NOT NULL DEFAULT 'default',
  `last_activity` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `engagement` int(2) NOT NULL DEFAULT '0',
  `friends` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student`, `firstname`, `surname`, `bio`, `profileimg`, `memorable`, `password`, `last_activity`, `engagement`, `friends`) VALUES
('123', '123', '123', 'macT', 'jeremy.jpg', 'default', '123', '2018-10-26 08:42:51', 30, NULL),
('coke', 'coke', 'fanta', NULL, 'user.svg', 'default', 'asd', '0000-00-00 00:00:00', 0, NULL),
('ekseTops', 'ekse', 'Tops', NULL, 'user.svg', 'default', '123', '2018-10-26 08:33:24', 1, NULL),
('israelsqlr', 'Israel', 'Sekhwela', NULL, 'user.svg', 'default', 'asd', '2018-10-26 06:08:31', 2, NULL),
('jamessqlr', 'James', 'SQlr', NULL, 'user.svg', 'default', '', '0000-00-00 00:00:00', 0, NULL),
('jeremyolu', 'Jeremy', 'Olu', 'I am a coder!', 'jeremy.PNG', 'default', 'pass1', '2018-10-26 07:53:10', 70, 'learnbe,rachelryan,test,rachelryan,rachelryan'),
('jhon', 'jhon', 'like', 'I am John', 'user.svg', 'default', 'asd', '2018-10-26 08:23:42', 2, NULL),
('JosephMoss', 'Joseph', 'Moss', NULL, 'user.svg', 'default', 'default', '0000-00-00 00:00:00', 0, 'learnbe'),
('learnbe', 'Matete', 'Sekhwela', 'Tuks Lecture', 'learnbe.png', 'sd86sd', 'sd86sd21', '2018-01-24 00:18:59', 0, 'learnbe,jeremyolu'),
('like', 'like', 'SQlr', 'Hey Preety Cool', 'Izzy.jpg', 'default', 'asd', '2018-10-26 08:27:40', 12, NULL),
('like@like.com', 'like', 'like', NULL, 'user.svg', 'default', 'asd', '0000-00-00 00:00:00', 0, NULL),
('rachelryan', 'Rachel', 'Ryan', 'Project Team Learder!', 'rachel.jpg', 'mem2', '2345', '2018-10-25 03:58:17', 39, 'learnbe,jeremyolu,jeremyolu,jeremyolu'),
('sasko', 'Sasko', 'Sam', NULL, 'user.svg', 'default', '123', '2018-10-26 11:01:13', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_photos`
--

CREATE TABLE `tbl_student_photos` (
  `photid` int(4) NOT NULL,
  `student` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `dateuploaded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_photos`
--

INSERT INTO `tbl_student_photos` (`photid`, `student`, `photo`, `caption`, `dateuploaded`) VALUES
(1, 'jeremyolu', 'olubook.jpg', 'olu book picture', '2018-04-11 18:24:56'),
(3, 'jeremyolu', 'jo.jpg', '', '2018-04-11 19:11:44'),
(4, 'jeremyolu', 'motivelogo.png', 'my logo', '2018-04-11 19:20:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activityid`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`asid`);

--
-- Indexes for table `assignments_uploads`
--
ALTER TABLE `assignments_uploads`
  ADD PRIMARY KEY (`uploadid`);

--
-- Indexes for table `friends_requests`
--
ALTER TABLE `friends_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox_messages`
--
ALTER TABLE `inbox_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  ADD PRIMARY KEY (`forumid`);

--
-- Indexes for table `tbl_forum_replies`
--
ALTER TABLE `tbl_forum_replies`
  ADD PRIMARY KEY (`replyid`);

--
-- Indexes for table `tbl_shared_files`
--
ALTER TABLE `tbl_shared_files`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `tbl_student_photos`
--
ALTER TABLE `tbl_student_photos`
  ADD PRIMARY KEY (`photid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activityid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;
--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `asid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `assignments_uploads`
--
ALTER TABLE `assignments_uploads`
  MODIFY `uploadid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `friends_requests`
--
ALTER TABLE `friends_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `inbox_messages`
--
ALTER TABLE `inbox_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  MODIFY `forumid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_forum_replies`
--
ALTER TABLE `tbl_forum_replies`
  MODIFY `replyid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_shared_files`
--
ALTER TABLE `tbl_shared_files`
  MODIFY `fileid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tbl_student_photos`
--
ALTER TABLE `tbl_student_photos`
  MODIFY `photid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
