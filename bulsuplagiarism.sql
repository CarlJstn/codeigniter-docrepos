-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 03:20 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulsuplagiarism`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `type`, `title`, `date`) VALUES
(58, 'graduation-cap', 'College Updated: CN', '2018-06-24 14:48:35'),
(59, 'graduation-cap', 'College Updated: CN', '2018-06-24 14:48:44'),
(60, 'user', 'User information updated: maria', '2018-06-22 14:52:59'),
(61, 'user', 'User information updated: maria', '2018-06-22 14:53:11'),
(62, 'user', 'User information updated: justine', '2018-06-23 01:37:51'),
(63, 'user', 'User information updated: justine', '2018-06-23 01:38:02'),
(64, 'user', 'User information updated: maria', '2018-06-24 14:10:00'),
(65, 'user', 'User information updated: maria', '2018-06-24 14:10:06'),
(66, 'book', 'New research added', '2018-06-24 14:13:18'),
(67, 'graduation-cap', 'New college added: CN', '2018-06-24 14:27:47'),
(68, 'graduation-cap', 'New college added: ACT', '2018-06-24 14:33:38'),
(69, 'graduation-cap', 'New college added: ACT', '2018-06-24 14:34:35'),
(70, 'graduation-cap', 'New college added: ACT', '2018-06-24 14:37:06'),
(71, 'graduation-cap', 'New college added: ACT', '2018-06-24 14:39:51'),
(72, 'graduation-cap', 'College Updated: CN', '2018-06-24 14:40:38'),
(73, 'graduation-cap', 'College Updated: CN', '2018-06-24 14:40:55'),
(74, 'book', 'New research added', '2018-06-24 15:21:16'),
(75, 'book', 'New research added', '2018-06-24 15:23:40'),
(76, 'book', 'New research added', '2018-06-24 15:25:01'),
(77, 'book', 'New research added', '2018-06-24 15:27:39'),
(78, 'book', 'New research added', '2018-06-24 15:31:34'),
(79, 'book', 'New research added', '2018-06-24 15:35:58'),
(80, 'book', 'New research added', '2018-06-24 15:39:20'),
(81, 'book', 'New research added', '2018-06-24 15:40:26'),
(82, 'book', 'New research added', '2018-06-24 15:40:42'),
(83, 'book', 'New research added', '2018-06-24 15:46:35'),
(84, 'book', 'New research added', '2018-06-24 15:50:54'),
(85, 'book', 'New research added', '2018-06-24 15:51:42'),
(86, 'book', 'New research added', '2018-06-24 16:20:09'),
(87, 'book', 'New research added', '2018-06-24 16:22:25'),
(88, 'book', 'New research added', '2018-06-24 16:23:54'),
(89, 'book', 'New research added', '2018-06-24 16:28:41'),
(90, 'user', 'User information updated: boom', '2018-06-24 16:29:13'),
(91, 'book', 'New research added', '2018-06-24 16:30:05'),
(92, 'book', 'New research added', '2018-06-24 16:31:02'),
(93, 'book', 'New research added', '2018-06-24 16:32:15'),
(94, 'book', 'New research added', '2018-06-24 16:33:18'),
(95, 'book', 'New research added', '2018-06-24 16:34:48'),
(96, 'book', 'New research added', '2018-06-24 16:35:24'),
(97, 'user', 'New user added: rimaas', '2018-06-25 15:09:25'),
(98, 'user', 'User information updated: rimaas', '2018-06-25 15:09:43'),
(99, 'user', 'New user added: rimaas', '2018-06-25 15:11:07'),
(100, 'user', 'New user added: rimaas', '2018-06-25 15:12:35'),
(101, 'graduation-cap', 'College Updated: CN', '2018-06-26 14:23:02'),
(102, 'bookmark', 'New course created: ACT', '2018-06-26 14:23:08'),
(103, 'bookmark', 'Course deleted: ACT', '2018-06-26 14:23:12'),
(104, 'book', 'New research added', '2018-06-26 14:50:08'),
(105, 'book', 'Research updated', '2018-06-26 15:11:03'),
(106, 'book', 'Research updated', '2018-06-26 15:13:24'),
(107, 'book', 'Research updated', '2018-06-26 15:13:56'),
(108, 'book', 'Research updated', '2018-06-26 15:14:35'),
(109, 'book', 'Research updated', '2018-06-26 15:14:52'),
(110, 'book', 'Research updated', '2018-06-26 15:15:03'),
(111, 'book', 'Research updated', '2018-06-26 15:15:06'),
(112, 'book', 'Research updated', '2018-06-26 15:15:11'),
(113, 'book', 'Research updated', '2018-06-26 15:15:15'),
(114, 'book', 'Research updated', '2018-06-26 15:15:24'),
(115, 'book', 'Research updated', '2018-06-26 15:15:28'),
(116, 'book', 'Research updated', '2018-06-26 15:15:33'),
(117, 'book', 'Research updated', '2018-06-26 15:15:44'),
(118, 'book', 'Research updated', '2018-06-26 15:15:57'),
(119, 'bookmark', 'Course deleted: BSN', '2018-06-26 15:27:42'),
(120, 'bookmark', 'New course created: BSN', '2018-06-26 15:28:20'),
(121, 'user', 'User information updated: boom', '2018-06-26 15:32:05'),
(122, 'book', 'Research updated', '2018-06-26 15:39:27'),
(123, 'book', 'Research updated', '2018-06-26 15:40:46'),
(124, 'bookmark', 'Course deleted: BSN', '2018-06-27 13:36:27'),
(125, 'bookmark', 'New course created: BSN', '2018-06-27 13:36:36'),
(126, 'book', 'Research updated', '2018-06-27 15:15:24'),
(127, 'book', 'Research updated', '2018-06-29 14:44:45'),
(128, 'graduation-cap', 'College Updated: ', '2018-07-02 12:45:32'),
(129, 'graduation-cap', 'College Updated: CBA', '2018-07-02 13:10:16'),
(130, 'graduation-cap', 'New college added: ACT', '2018-07-02 13:12:44'),
(131, 'graduation-cap', 'College Updated: CHE', '2018-07-02 13:41:42'),
(132, 'graduation-cap', 'College Updated: CICT', '2018-07-02 13:45:30'),
(133, 'graduation-cap', 'College Updated: CICT', '2018-07-02 14:25:00'),
(134, 'book', 'New research added', '2018-07-02 14:40:20'),
(135, 'book', 'Research updated', '2018-07-04 12:07:47'),
(136, 'book', 'Research updated', '2018-07-04 12:14:02'),
(137, 'user', 'User information updated: jenaro', '2018-07-04 12:27:28'),
(138, 'book', 'Research updated', '2018-07-04 12:28:32'),
(139, 'graduation-cap', 'College Updated: CHTM', '2018-07-04 12:31:10'),
(140, 'bookmark', 'New course created: BSTM', '2018-07-04 12:31:34'),
(141, 'bookmark', 'New course created: BSHE', '2018-07-04 12:32:00'),
(142, 'bookmark', 'New course created: BSHM', '2018-07-04 12:32:21'),
(143, 'bookmark', 'New course created: BSHRM', '2018-07-04 12:32:41'),
(144, 'bookmark', 'New course created: ACT', '2018-07-04 12:32:49'),
(145, 'bookmark', 'Course deleted: ACT', '2018-07-04 12:32:53'),
(146, 'bookmark', 'New course created: ACT', '2018-07-04 12:34:30'),
(147, 'bookmark', 'Course deleted: BSHM', '2018-07-04 12:35:59'),
(148, 'graduation-cap', 'New college added:              ACT      ', '2018-07-04 12:44:05'),
(149, 'bookmark', 'New course created: ACT', '2018-07-04 12:44:13'),
(150, 'bookmark', 'Course deleted: ACT', '2018-07-04 12:44:25'),
(151, 'graduation-cap', 'College Updated: CON', '2018-07-04 12:50:05'),
(152, 'graduation-cap', 'College Updated:                  CON', '2018-07-04 12:50:12'),
(153, 'book', 'Research updated', '2018-07-04 12:53:01'),
(154, 'bookmark', 'New course created: BSHM', '2018-07-04 12:59:52'),
(155, 'graduation-cap', 'College Updated: CHTM', '2018-07-04 13:01:43'),
(156, 'graduation-cap', 'College Updated: CHTM', '2018-07-04 13:02:18'),
(157, 'graduation-cap', 'College Updated: CHTM', '2018-07-04 13:53:41'),
(158, 'graduation-cap', 'College Updated: CHTM', '2018-07-04 13:54:08'),
(159, 'user', 'User information updated: jenaro', '2018-07-04 14:03:55'),
(160, 'user', 'User information updated: justine', '2018-07-04 14:04:18'),
(161, 'user', 'User information updated: justine', '2018-07-04 14:04:28'),
(162, 'user', 'User information updated: maria', '2018-07-04 14:04:36'),
(163, 'user', 'User information updated: maria', '2018-07-04 14:04:45'),
(164, 'user', 'User information updated: boom', '2018-07-04 14:07:07'),
(165, 'user', 'User information updated: boom', '2018-07-04 14:08:43'),
(166, 'user', 'User information updated: boom', '2018-07-04 14:09:19'),
(167, 'user', 'User information updated: boom', '2018-07-04 14:10:11'),
(168, 'user', 'User information updated: jenaro', '2018-07-04 14:10:28'),
(169, 'user', 'User information updated: boom', '2018-07-04 14:10:35'),
(170, 'user', 'User information updated: jenaro', '2018-07-04 14:10:48'),
(171, 'user', 'User information updated: boom', '2018-07-04 14:11:06'),
(172, 'user', 'User information updated: boom', '2018-07-04 14:11:26'),
(173, 'user', 'User information updated: boom', '2018-07-04 14:11:45'),
(174, 'user', 'User information updated: boom', '2018-07-04 14:12:48'),
(175, 'user', 'User information updated: boom', '2018-07-04 14:13:06'),
(176, 'user', 'User information updated: jenaro', '2018-07-04 14:14:04'),
(177, 'user', 'User information updated: boom', '2018-07-04 14:14:12'),
(178, 'user', 'User information updated: boom', '2018-07-04 14:16:43'),
(179, 'user', 'User information updated: admin', '2018-07-04 14:16:54'),
(180, 'user', 'User information updated: admin', '2018-07-04 14:17:04'),
(181, 'user', 'User information updated: admin', '2018-07-04 14:18:53'),
(182, 'user', 'User information updated: admin', '2018-07-04 14:19:09'),
(183, 'user', 'User information updated: maria', '2018-07-04 14:19:36'),
(184, 'user', 'User information updated: admin', '2018-07-04 14:19:40'),
(185, 'user', 'User information updated: admin', '2018-07-04 14:19:43'),
(186, 'user', 'User information updated: admin', '2018-07-04 14:19:48'),
(187, 'user', 'User information updated: admin', '2018-07-04 14:19:55'),
(188, 'user', 'User information updated: admin', '2018-07-04 14:20:00'),
(189, 'user', 'User information updated: admin', '2018-07-04 14:20:07'),
(190, 'user', 'User information updated: admin', '2018-07-04 14:21:32'),
(191, 'user', 'User information updated: admin', '2018-07-04 14:23:11'),
(192, 'user', 'User information updated: admin', '2018-07-04 14:23:14'),
(193, 'user', 'User information updated: admin', '2018-07-04 14:23:18'),
(194, 'user', 'User information updated: admin', '2018-07-04 14:23:21'),
(195, 'user', 'User information updated: justine', '2018-07-04 14:23:23'),
(196, 'user', 'User information updated: maria', '2018-07-04 14:23:26'),
(197, 'user', 'User information updated: maria', '2018-07-04 14:23:29'),
(198, 'user', 'User information updated: admin', '2018-07-04 14:23:32'),
(199, 'user', 'User information updated: admin', '2018-07-04 14:23:36'),
(200, 'user', 'User information updated: admin', '2018-07-04 14:23:43'),
(201, 'user', 'User information updated: admin', '2018-07-04 14:23:49'),
(202, 'user', 'User information updated: admin', '2018-07-04 14:23:58'),
(203, 'user', 'User information updated: maria', '2018-07-04 14:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `document_id`, `name`) VALUES
(4, 2, 'Dimagiba, Pader'),
(5, 7, 'Bernard Magsakay'),
(6, 7, 'Josie Mendiola'),
(15, 13, 'Carl Justine De Guzman'),
(16, 14, 'Josie Mendiola'),
(17, 15, 'Carl Justine De Guzman'),
(18, 16, 'Bernard Magsakay'),
(19, 17, 'Josie Mendiola'),
(20, 18, 'Carl Justine De Guzman'),
(21, 19, 'Bernard Magsakay'),
(22, 20, 'Bernard Magsakay'),
(23, 21, 'Bernard Magsakay'),
(24, 22, 'Carl Justine De Guzman'),
(25, 23, 'Carl Justine De Guzman'),
(26, 24, 'Josie Mendiola'),
(27, 25, 'Carl Justine De Guzman'),
(28, 26, 'Carl Justine De Guzman'),
(29, 27, 'Carl Justine De Guzman'),
(32, 28, 'Carl Justine De Guzman'),
(33, 29, 'Josie Mendiola'),
(34, 30, 'Bernard Magsakay'),
(35, 31, 'Josie Mendiola'),
(36, 32, 'Josie Mendiola'),
(37, 33, 'Bernard Magsakay'),
(38, 34, 'Carl Justine De Guzman'),
(39, 35, 'Carl Justine De Guzman'),
(97, 37, 'Kris Aquino'),
(98, 37, 'Noynoy Aquino'),
(99, 37, 'Bimby'),
(100, 36, 'Josie Mendiola'),
(101, 38, 'Josie Mendiola'),
(104, 1, 'Bea Bangenge');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_initials` varchar(255) NOT NULL,
  `college_librarian` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `course_total` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `research_total` int(11) NOT NULL,
  `journal_total` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`college_id`, `college_name`, `college_initials`, `college_librarian`, `username`, `course_total`, `status`, `image`, `last_update`, `research_total`, `journal_total`, `color`) VALUES
(1, 'College of Nursing', 'CON', 'Jenaro Lopez', 'jenaro', 1, 'ACTIVE', 'nurse.png', '2018-07-02 15:11:44', 13, 0, '#00C4A6'),
(2, 'College of Information and Communications Technology', 'CICT', 'Carl Justine M. De Guzman', 'justine', 3, 'ACTIVE', 'cict.jpg', '2018-07-04 12:34:30', 7, 0, '#EF560E'),
(3, 'College of Education', 'COED', 'Mariang Palad', 'maria', 2, 'ACTIVE', 'COED.png', '2018-07-02 14:40:20', 5, 2, '#716BE9'),
(32, 'College of Business Administration', 'CBA', 'Rima Lagok', 'rimaas', 1, 'ACTIVE', 'CBA.png', '2018-07-02 13:10:16', 2, 0, '#174331'),
(33, 'College of Hospitality and Tourism Management', 'CHTM', 'Carl Justine M. De Guzman', 'justine', 4, 'ACTIVE', 'che.jpg', '2018-07-04 13:02:18', 3, 1, '#a01f32');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_initials` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `college_id`, `course_name`, `course_initials`) VALUES
(1, 2, 'Bachelor of Science in Information Technology', 'BSIT'),
(6, 3, 'Bachelor in Secondary Education', 'BSE'),
(8, 3, 'Bachelor of Technical-Teacher Education', 'BTTE'),
(30, 32, 'Bachelor of Science in Business Administration', 'BSBA'),
(31, 2, 'Bachelor of Library and Information Service', 'BLIS'),
(34, 1, 'Bachelor of Science in Nursing', 'BSN'),
(35, 33, 'Bachelor of Science in Tourism Management', 'BSTM'),
(36, 33, 'Bachelor of Science in Home Economics', 'BSHE'),
(38, 33, 'Bachelor of Science in Hotel and Restaurant Management', 'BSHRM'),
(40, 2, 'Associate in Communications Technology', 'ACT'),
(42, 33, 'Bachelor of Science in Hospitality Management', 'BSHM');

-- --------------------------------------------------------

--
-- Table structure for table `docuimages`
--

CREATE TABLE `docuimages` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docuimages`
--

INSERT INTO `docuimages` (`id`, `document_id`, `name`) VALUES
(2, 1, 'diagram1.png'),
(8, 28, 'Untitled_Diagram.jpg'),
(9, 28, 'Untitled_Diagram.png'),
(10, 29, '30952742_1628965540556915_2055598706_o.jpg'),
(11, 30, '30952742_1628965540556915_2055598706_o.jpg'),
(12, 31, '30952742_1628965540556915_2055598706_o.jpg'),
(13, 32, '30122194_1606957952757674_78280206_o.jpg'),
(14, 32, '31110831_1628965400556929_1557873646_o.jpg'),
(15, 33, 'Untitled_Diagram_(2).png'),
(16, 34, '6.jpg'),
(17, 34, '15.jpg'),
(18, 35, '9.jpg'),
(20, 36, '14.jpg'),
(21, 36, '151.jpg'),
(22, 1, '31110831_1628965400556929_1557873646_o1.jpg'),
(26, 1, '7.png'),
(27, 1, '11.jpg'),
(28, 36, '84.jpg'),
(29, 36, '12.jpg'),
(30, 1, 'Untitled_Diagram_(1)1.png'),
(31, 1, 'Untitled_Diagram_(2)4.png'),
(32, 36, '31110831_1628965400556929_1557873646_o_-_Copy.jpg'),
(33, 37, '16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `researches`
--

CREATE TABLE `researches` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `titleNoSpace` varchar(255) NOT NULL,
  `abstract` text NOT NULL,
  `pages` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `dateUpload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researches`
--

INSERT INTO `researches` (`id`, `course`, `college_name`, `title`, `type`, `titleNoSpace`, `abstract`, `pages`, `year`, `file`, `dateUpload`) VALUES
(1, 'Bachelor of Science in Information Technology', 'College of Information and Communications Technology', 'Information System for Company', 'thesis', 'InformationSystemforCompany-2018-CollegeofInformationandCommunicationsTechnology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate tincidunt leo, a ornare eros molestie et. Ut lorem risus, ullamcorper a ex quis, faucibus rutrum ex. In lacinia tempor ante, vitae viverra leo mollis et. Nam accumsan dolor eget dolor convallis, vel ullamcorper est pulvinar. Nullam et mattis metus. In id urna ut turpis egestas laoreet nec non lacus. Phasellus a efficitur felis. Donec sapien massa, pellentesque a magna a, varius laoreet neque. Nunc tellus odio, vestibulum vitae ligula non, porta aliquet enim.\r\n\r\nNam cursus venenatis tincidunt. Mauris ac purus quam. Nunc consectetur augue ut urna consequat interdum. Mauris at ultrices purus. In mi sem, congue quis dolor et, elementum pretium elit. Fusce accumsan enim libero, vitae dignissim urna euismod mollis. Aliquam non pharetra arcu. Proin sed elementum ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus consectetur lobortis.\r\n\r\nNulla non pretium nibh. Proin enim orci, vehicula non tempor vel, congue suscipit neque. Suspendisse porta facilisis libero, id aliquam felis tempor vitae. Nunc massa mauris, ultrices nec faucibus sed, mollis sed tortor. Nullam diam nulla, bibendum non metus eu, posuere pharetra nibh. Sed vehicula viverra purus, in ullamcorper felis cursus eu. Nunc aliquam est ac egestas blandit. In nulla diam, suscipit non nisl ac, tristique volutpat arcu. Mauris magna libero, commodo eget tortor a, convallis fermentum risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nAliquam gravida ultrices ipsum, sed lacinia odio feugiat ac. Aenean vel lectus dictum, rhoncus nibh eget, aliquet leo. Nulla facilisi. Vivamus a leo non nunc vehicula semper a ut purus. Cras nec consectetur nisi. Proin justo nisl, sagittis vitae consectetur vel, mattis semper lorem. Aliquam libero odio, pharetra id sodales eu, aliquet eget elit. Nullam et risus ornare, ornare eros et, ultrices odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec diam arcu, rhoncus eget ullamcorper id, maximus vel lacus. Quisque mi mi, gravida id scelerisque in, varius sed quam. Mauris lectus ligula, lobortis a bibendum ac, rhoncus nec mi. Morbi ullamcorper augue non congue sagittis. Quisque a magna at arcu porta placerat quis facilisis nulla. Cras molestie vel dolor eu viverra.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. In non tellus ornare, suscipit libero eget, auctor urna. Vestibulum pretium efficitur luctus. Ut tempus erat at urna rutrum, eu consequat dolor ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum nulla bibendum nisi iaculis egestas. Suspendisse venenatis iaculis enim vitae placerat. Maecenas ac vulputate sapien. Proin ex velit, dictum sit amet dolor id, bibendum dignissim augue. Sed sagittis bibendum tortor id tincidunt. Donec vestibulum ipsum maximus orci iaculis sagittis. Sed fringilla bibendum ante, vitae porta quam feugiat at. Quisque eget rutrum nisi. Pellentesque lacinia quam vitae purus pellentesque aliquet. Etiam nisi dolor, laoreet sed semper nec, pellentesque mattis lectus.a', '121', '2017', '', '2018-06-09 08:21:45'),
(2, 'Bachelor of Science in Nursing', 'College of Nursing', 'Research Title for Nursing', 'thesis', 'CollegeofNursing-2017-ResearchTitleforNursing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tortor lorem, dapibus sit amet volutpat nec, egestas vel mi. Nulla eget justo porttitor, ullamcorper risus ut, vulputate orci. Mauris suscipit erat et efficitur imperdiet. Proin iaculis odio nec orci blandit condimentum. Quisque sagittis, leo vel porta congue, libero felis finibus arcu, a mollis leo ex non neque. Cras rhoncus sollicitudin bibendum. Maecenas eget facilisis est. Vestibulum quis viverra velit. Praesent ac nisi sed urna pretium faucibus. Morbi consequat neque non rhoncus condimentum. Cras tempus fringilla porta. Integer vestibulum vestibulum magna, vel faucibus ligula rutrum sed.\r\n\r\nInteger dictum sapien non convallis volutpat. Vivamus malesuada dolor sit amet luctus sodales. Pellentesque ornare, nisi non interdum porta, ipsum augue euismod metus, vitae pretium sem arcu ac lorem. Cras elementum ipsum eu massa auctor, pellentesque pulvinar tortor ultrices. Nullam consequat accumsan volutpat. Duis dapibus tortor vel pellentesque imperdiet. Etiam id commodo metus, et cursus enim. Nullam scelerisque turpis nisi, ultricies auctor nisl ornare non. Pellentesque volutpat vitae tellus eget elementum. Suspendisse et tellus congue, maximus nibh eget, vulputate magna. Morbi suscipit enim id mauris suscipit tincidunt. Etiam ultricies varius turpis eu dignissim. Duis porttitor turpis magna, pretium placerat erat aliquam non.\r\n\r\nAliquam vestibulum euismod justo. Sed facilisis elementum erat rhoncus sagittis. In fringilla tincidunt elementum. Aliquam sagittis congue lectus, non blandit leo consequat vel. Morbi at augue id metus convallis blandit in sit amet elit. Suspendisse efficitur quam sed sapien lacinia elementum. Suspendisse et turpis sem. Vivamus convallis libero vehicula sollicitudin egestas. Nunc varius augue sed placerat imperdiet. Praesent posuere sit amet dolor non gravida. Fusce convallis dui vitae ipsum tempus, sit amet dictum nibh vehicula. Nam ultrices velit quis dolor rutrum, et elementum est faucibus. Proin et euismod massa. Pellentesque pellentesque libero sed lacus scelerisque rhoncus.\r\n\r\nPellentesque viverra velit eget enim volutpat, sit amet fringilla orci interdum. In id bibendum magna. Sed mattis, ligula in maximus faucibus, nulla dui elementum purus, at viverra massa eros id purus. Donec eget varius nisl, et bibendum sapien. Mauris vehicula nibh vel scelerisque viverra. Donec lobortis nunc ac ante sagittis ultricies. Maecenas eget malesuada tortor. Proin elit felis, interdum quis erat a, elementum placerat felis. Integer quis nisi egestas, mollis ipsum laoreet, blandit nulla. Pellentesque commodo porta neque, nec rutrum tellus porttitor in. In accumsan vitae diam sit amet mollis. Pellentesque et magna magna. Vivamus rhoncus sem justo. Pellentesque non interdum velit. Quisque faucibus felis et nunc molestie tempus.', '239', '2018', '', '2018-06-09 08:21:45'),
(3, 'Associate in Communications Technology', 'College of Information and Communications Technology', 'Adruino Capstone Project', 'thesis', 'AdruinoCapstoneProject-2018-CollegeofInformationandCommunicationsTechnology', 'Etiam lacus orci, elementum et diam sit amet, tristique volutpat ligula. Nam volutpat eget odio at consectetur. Nunc mollis elit et diam aliquam, non fermentum urna vestibulum. Quisque ut placerat orci, in efficitur elit. Donec tortor eros, commodo non suscipit ac, luctus ut eros. Nulla laoreet nisi tortor. Nunc vel augue ut lorem bibendum euismod in ac purus. Sed in varius diam. Integer elementum lacus ut suscipit porttitor. Vestibulum in ipsum nibh. Pellentesque mattis pretium ipsum ut mattis. Praesent luctus vulputate cursus. Vestibulum tempus varius rhoncus. Curabitur in malesuada nibh, id viverra libero. Nulla vehicula vel sem egestas bibendum.\r\n\r\nEtiam vel efficitur risus. Curabitur mattis enim quis urna egestas, vel semper enim blandit. Nulla bibendum pretium nisl, vitae venenatis lorem luctus in. Nam ut cursus turpis. Pellentesque interdum ex nec nulla euismod, a dapibus turpis mollis. Suspendisse sagittis est lectus, nec fringilla lacus gravida id. Phasellus vel eros tristique, lacinia nisi eget, ultricies eros. Sed vel orci non nunc eleifend feugiat id a ligula. Phasellus efficitur egestas leo, at aliquet tellus egestas convallis. Aenean porta erat in pretium tincidunt. Etiam tempus et neque nec pretium. Etiam aliquet porta dui quis finibus.\r\n\r\nNunc ullamcorper ut diam eu ultrices. Aliquam vitae dui lobortis, pellentesque neque ac, efficitur neque. Mauris ullamcorper molestie euismod. Aliquam rhoncus, tortor ac porttitor molestie, lorem dui tempor augue, sit amet ultrices ipsum risus sit amet dui. Etiam pulvinar enim facilisis, tempor nisi porta, bibendum arcu. Etiam non nulla in dolor imperdiet gravida. Duis ex ex, accumsan vitae tellus vel, dictum fermentum libero. Donec nec ex sem.\r\n\r\nProin tempus tellus in eros egestas semper. Etiam non quam orci. Vivamus sed pulvinar sapien. Aenean lobortis massa non ligula luctus condimentum. Donec facilisis tortor quis ligula volutpat tristique. Phasellus magna nisl, pellentesque sed aliquet quis, maximus in lacus. Suspendisse vitae metus eget ex pellentesque pellentesque sit amet sed ipsum. Ut vel venenatis arcu, at eleifend diam. Nulla viverra ut felis quis sodales. Donec imperdiet laoreet sapien, id varius nunc porttitor a. Fusce egestas in ligula sed iaculis.', '200', '2018', 'pdf.pdf', '2018-06-23 14:10:25'),
(4, 'Bachelor of Science in Business Administration', 'College of Business Administration', 'Thesis hehe', 'thesis', 'Thesishehe-2018-CollegeofBusinessAdministration', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '321', '2016', '', '2018-06-23 14:16:49'),
(5, 'Bachelor of Technical-Teacher Education', 'College of Education', 'Sample Title', 'thesis', 'SampleTitle-2018-CollegeofEducation', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '982', '2018', '', '2018-06-23 14:19:58'),
(6, 'Bachelor in Secondary Education', 'College of Education', 'Sample Title 1', 'thesis', 'SampleTitle1-2018-CollegeofEducation', 'Ultricies integer quis auctor elit. Elementum sagittis vitae et leo duis ut diam. At risus viverra adipiscing at in tellus integer feugiat. Aenean sed adipiscing diam donec adipiscing tristique risus nec feugiat. Tempus imperdiet nulla malesuada pellentesque. Purus in massa tempor nec. Non consectetur a erat nam at lectus urna duis. Non blandit massa enim nec dui nunc mattis enim ut. Nunc scelerisque viverra mauris in aliquam sem. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra. Orci sagittis eu volutpat odio. Gravida arcu ac tortor dignissim convallis aenean et. Nunc lobortis mattis aliquam faucibus purus in massa tempor nec. Ut enim blandit volutpat maecenas volutpat blandit. Aliquet nibh praesent tristique magna sit amet purus gravida. Aliquet bibendum enim facilisis gravida neque convallis a cras semper.\r\n\r\nProin sed libero enim sed faucibus. Non consectetur a erat nam at lectus urna duis convallis. Vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet. Odio ut sem nulla pharetra. Sit amet purus gravida quis. Tellus integer feugiat scelerisque varius morbi. Nullam eget felis eget nunc lobortis mattis. Orci eu lobortis elementum nibh tellus molestie nunc. Tincidunt id aliquet risus feugiat in. Pulvinar sapien et ligula ullamcorper malesuada proin libero. Pretium aenean pharetra magna ac placerat vestibulum lectus mauris. Convallis aenean et tortor at. Urna id volutpat lacus laoreet non curabitur gravida. Urna cursus eget nunc scelerisque viverra mauris. Vitae suscipit tellus mauris a diam.\r\n\r\nSapien faucibus et molestie ac feugiat. Dolor morbi non arcu risus quis varius. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Amet luctus venenatis lectus magna fringilla urna. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Vulputate ut pharetra sit amet aliquam id diam. Tristique et egestas quis ipsum suspendisse. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc. Egestas sed sed risus pretium quam vulputate dignissim suspendisse.\r\n\r\nAliquet lectus proin nibh nisl. Sit amet commodo nulla facilisi nullam vehicula ipsum a. Pretium viverra suspendisse potenti nullam ac tortor vitae. At erat pellentesque adipiscing commodo. Ipsum dolor sit amet consectetur adipiscing. A cras semper auctor neque vitae tempus quam pellentesque. Eu consequat ac felis donec et odio pellentesque diam. Egestas tellus rutrum tellus pellentesque eu tincidunt. Posuere morbi leo urna molestie at. Odio facilisis mauris sit amet massa vitae tortor condimentum. Enim sit amet venenatis urna cursus eget. Euismod quis viverra nibh cras pulvinar. Laoreet suspendisse interdum consectetur libero.', '1235', '2018', '', '2018-06-24 13:41:36'),
(7, 'Bachelor of Science in Information Technology', 'College of Information and Communications Technology', 'Sample Title 2', 'thesis', 'SampleTitle2-2018-CollegeofInformationandCommunicationsTechnology', 'Massa id neque aliquam vestibulum morbi blandit cursus risus at. Facilisis gravida neque convallis a cras semper auctor neque vitae. Euismod lacinia at quis risus sed vulputate odio ut enim. Tincidunt augue interdum velit euismod in pellentesque massa. Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit at imperdiet dui accumsan sit amet. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Libero volutpat sed cras ornare arcu. Accumsan sit amet nulla facilisi morbi tempus iaculis urna id. Mauris augue neque gravida in. Netus et malesuada fames ac turpis. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat. Porta non pulvinar neque laoreet suspendisse interdum consectetur libero. Phasellus egestas tellus rutrum tellus. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Nunc sed blandit libero volutpat sed cras ornare arcu. Mauris ultrices eros in cursus turpis massa tincidunt dui. Odio eu feugiat pretium nibh ipsum consequat nisl vel. Orci dapibus ultrices in iaculis nunc sed augue. Tortor at risus viverra adipiscing at in.\r\n\r\nPellentesque nec nam aliquam sem et tortor consequat id porta. Turpis egestas integer eget aliquet. Quam viverra orci sagittis eu volutpat odio. Donec adipiscing tristique risus nec feugiat in. Imperdiet sed euismod nisi porta lorem mollis. Sagittis purus sit amet volutpat consequat. Ultrices in iaculis nunc sed augue lacus viverra vitae congue. Sapien eget mi proin sed. Habitant morbi tristique senectus et netus et malesuada fames. Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Tellus elementum sagittis vitae et leo. Elementum nibh tellus molestie nunc. Placerat duis ultricies lacus sed. Et ultrices neque ornare aenean euismod elementum nisi. Tincidunt vitae semper quis lectus nulla at.\r\n\r\nIpsum dolor sit amet consectetur adipiscing elit duis tristique. Sed felis eget velit aliquet sagittis. Risus pretium quam vulputate dignissim suspendisse in est. Tellus in metus vulputate eu scelerisque felis. Urna neque viverra justo nec ultrices dui sapien eget mi. Ut faucibus pulvinar elementum integer enim neque. Ac auctor augue mauris augue neque gravida in. Fames ac turpis egestas integer eget. Urna duis convallis convallis tellus id. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur. Molestie at elementum eu facilisis sed odio morbi. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque. Faucibus in ornare quam viverra orci. Sed sed risus pretium quam vulputate dignissim suspendisse in est. Cursus in hac habitasse platea dictumst. Ultricies integer quis auctor elit sed vulputate mi. Et pharetra pharetra massa massa. Elementum pulvinar etiam non quam lacus suspendisse. Blandit cursus risus at ultrices mi.', '745', '2018', '', '2018-06-24 13:46:00'),
(13, 'Bachelor of Science in Information Technology', 'College of Home Economics', 'How to cook', 'thesis', 'Howtocook-2018-CollegeofHomeEconomics', 'Ipsum dolor sit amet consectetur adipiscing elit duis tristique. Sed felis eget velit aliquet sagittis. Risus pretium quam vulputate dignissim suspendisse in est. Tellus in metus vulputate eu scelerisque felis. Urna neque viverra justo nec ultrices dui sapien eget mi. Ut faucibus pulvinar elementum integer enim neque. Ac auctor augue mauris augue neque gravida in. Fames ac turpis egestas integer eget. Urna duis convallis convallis tellus id. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur. Molestie at elementum eu facilisis sed odio morbi. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque. Faucibus in ornare quam viverra orci. Sed sed risus pretium quam vulputate dignissim suspendisse in est. Cursus in hac habitasse platea dictumst. Ultricies integer quis auctor elit sed vulputate mi. Et pharetra pharetra massa massa. Elementum pulvinar etiam non quam lacus suspendisse. Blandit cursus risus at ultrices mi.\r\n\r\nEt sollicitudin ac orci phasellus egestas. Purus sit amet luctus venenatis. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Ultrices in iaculis nunc sed augue lacus viverra vitae congue. Libero enim sed faucibus turpis in eu mi bibendum. Enim nunc faucibus a pellentesque sit amet porttitor eget. Vitae purus faucibus ornare suspendisse sed nisi lacus. Mauris pharetra et ultrices neque ornare aenean euismod. Libero nunc consequat interdum varius sit amet mattis vulputate enim. Vulputate mi sit amet mauris commodo quis imperdiet massa. In nulla posuere sollicitudin aliquam ultrices sagittis orci. Nunc consequat interdum varius sit amet mattis. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Fames ac turpis egestas sed tempus urna et pharetra. Egestas maecenas pharetra convallis posuere. Cras adipiscing enim eu turpis egestas pretium aenean pharetra. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Elit duis tristique sollicitudin nibh sit.', '451', '2018', 'samplepdf.pdf', '2018-06-24 14:08:16'),
(14, 'Bachelor of Science in Information Technology', 'College of Home Economics', 'Thesis Sample', 'thesis', 'ThesisSample-2018-CollegeofHomeEconomics', 'Quam viverra orci sagittis eu volutpat odio. Donec adipiscing tristique risus nec feugiat in. Imperdiet sed euismod nisi porta lorem mollis. Sagittis purus sit amet volutpat consequat. Ultrices in iaculis nunc sed augue lacus viverra vitae congue. Sapien eget mi proin sed. Habitant morbi tristique senectus et netus et malesuada fames. Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Tellus elementum sagittis vitae et leo. Elementum nibh tellus molestie nunc. Placerat duis ultricies lacus sed. Et ultrices neque ornare aenean euismod elementum nisi. Tincidunt vitae semper quis lectus nulla at.\r\n\r\nIpsum dolor sit amet consectetur adipiscing elit duis tristique. Sed felis eget velit aliquet sagittis. Risus pretium quam vulputate dignissim suspendisse in est. Tellus in metus vulputate eu scelerisque felis. Urna neque viverra justo nec ultrices dui sapien eget mi. Ut faucibus pulvinar elementum integer enim neque. Ac auctor augue mauris augue neque gravida in. Fames ac turpis egestas integer eget. Urna duis convallis convallis tellus id. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur. Molestie at elementum eu facilisis sed odio morbi. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque. Faucibus in ornare quam viverra orci. Sed sed risus pretium quam vulputate dignissim suspendisse in est. Cursus in hac habitasse platea dictumst. Ultricies integer quis auctor elit sed vulputate mi. Et pharetra pharetra massa massa. Elementum pulvinar etiam non quam lacus suspendisse. Blandit cursus risus at ultrices mi.\r\n\r\nEt sollicitudin ac orci phasellus egestas. Purus sit amet luctus venenatis. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Ultrices in iaculis nunc sed augue lacus viverra vitae congue. Libero enim sed faucibus turpis in eu mi bibendum. Enim nunc faucibus a pellentesque sit amet porttitor eget.', '567', '2018', '', '2018-06-24 14:13:18'),
(15, 'Bachelor of Science in Business Administration', 'College of Business Administration', 'Sample Title 3', 'thesis', 'SampleTitle3-2018-CollegeofBusinessAdministration', 'Upload Class Preferences\r\nIn the example, some basic preferences are used for Upload library configuration ($config). But you can specify various preferences provided by the Upload Class in CodeIgniter.\r\n\r\nupload_path – The path of the directory where the file will be uploaded. The path must be absolute and directory must be writable.\r\nallowed_types – The mime types of the file that allows being uploaded.\r\nfile_name – If specified, the uploaded file will be renamed with this name.\r\nfile_ext_tolower – (TRUE/FALSE) If set to TRUE, file extension will be lower case.\r\noverwrite – (TRUE/FALSE) TRUE – If a file exists with the same name, it will be overwritten. FALSE – If a file exists with the same name, a number will append to the filename.\r\nmax_size – (in kilobytes) The maximum size of the file that allowed to upload. Set to 0 for no limit.\r\nmax_width – (in pixels) The maximum width of the image that allowed to upload. Set to 0 for no limit.\r\nmax_height – (in pixels) The maximum height of the image that allowed to upload. Set to 0 for no limit.\r\nmin_width – (in pixels) The minimum width of the image that allowed to upload. Set to 0 for no limit.\r\nmin_height – (in pixels) The minimum height of the image that allowed to upload. Set to 0 for no limit.\r\nmax_filename – The maximum length of the file name. Set to 0 for no limit.', '213', '2018', '', '2018-06-24 15:21:16'),
(16, 'Bachelor of Technical-Teacher Education', 'College of Education', 'Sample Title 4', 'thesis', 'SampleTitle4-2018-CollegeofEducation', 'Upload Class Preferences\r\nIn the example, some basic preferences are used for Upload library configuration ($config). But you can specify various preferences provided by the Upload Class in CodeIgniter.\r\n\r\nupload_path – The path of the directory where the file will be uploaded. The path must be absolute and directory must be writable.\r\nallowed_types – The mime types of the file that allows being uploaded.\r\nfile_name – If specified, the uploaded file will be renamed with this name.\r\nfile_ext_tolower – (TRUE/FALSE) If set to TRUE, file extension will be lower case.\r\noverwrite – (TRUE/FALSE) TRUE – If a file exists with the same name, it will be overwritten. FALSE – If a file exists with the same name, a number will append to the filename.\r\nmax_size – (in kilobytes) The maximum size of the file that allowed to upload. Set to 0 for no limit.\r\nmax_width – (in pixels) The maximum width of the image that allowed to upload. Set to 0 for no limit.\r\nmax_height – (in pixels) The maximum height of the image that allowed to upload. Set to 0 for no limit.\r\nmin_width – (in pixels) The minimum width of the image that allowed to upload. Set to 0 for no limit.\r\nmin_height – (in pixels) The minimum height of the image that allowed to upload. Set to 0 for no limit.\r\nmax_filename – The maximum length of the file name. Set to 0 for no limit.', '34', '2018', '', '2018-06-24 15:23:40'),
(17, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 5', 'thesis', 'SampleTitle5-2018-CollegeofNursing', '                    \r\nStack Overflow\r\n\r\nSearch…\r\n \r\nLog In Sign Up\r\nThis site uses cookies to deliver our services and to show you relevant ads and job listings. By using our site, you acknowledge that you have read and understand our Cookie Policy, Privacy Policy, and our Terms of Service. Your use of Stack Overflow’s Products and Services, including the Stack Overflow Network, is subject to these policies and terms.\r\n\r\n\r\nJoin Stack Overflow to learn, share knowledge, and build your career.\r\n\r\nEmail Sign Up\r\nOR SIGN IN WITH\r\n Google\r\n Facebook\r\nHome\r\nPUBLIC\r\nStack Overflow\r\nTags\r\nUsers\r\nJobs\r\nTEAMS\r\nCreate Team\r\nResizing an image from the source and setting the upload path with Codeigniter\r\nAsk Question\r\nup vote\r\n1\r\ndown vote\r\nfavorite\r\nI\'m building an image gallery with Codeigniter everything is going good so far, but I had a quick question about image resizing.\r\n\r\nBasically I upload the source image, and make create an id then store it in that path /uploads/$id/source.jpg. Then I try to create two new images of the source image, a thumbnail and a medium image with a watermark.\r\n\r\nWhen using Codeigniter\'s Image Manipulation Class can you set a file name and a upload path? And when you give it the source image does it modify the source image or does it make a copy?\r\n\r\npublic function generateThumnail($source, $screenid) {\r\n        $config[\'image_library\'] = \'gd2\';\r\n        $config[\'source_image\'] = \"$source\";\r\n        $config[\'maintain_ratio\'] = TRUE;\r\n        $config[\'width\'] = 75;\r\n        $config[\'height\'] = 50;\r\n\r\n        //Not sure how I set the upload path and file name.\r\n        $this->load->library(\'image_lib\', $config); \r\n        $this->image_lib->resize();\r\n\r\n        //TODO: Code to be added later\r\n        $this->image_lib->clear();\r\n}\r\nThe upload path and the file name aren\'t include because I\'m not sure how to add them. Is there any way to add them?\r\n\r\nphp codeigniter image-manipulation codeigniter-2\r\nshareimprove this question\r\nasked Jan 16 \'12 at 16:24\r\n\r\nBombcode\r\n124113\r\nadd a comment\r\n1 Answer\r\nactive oldest votes\r\nup vote\r\n2\r\ndown vote\r\naccepted\r\nYes, you can specify an upload path but by using the File Uploading Class, not the Image Manipulation Class.\r\n\r\n$config[\'upload_path\'] = \'./uploads/\';\r\n$config[\'allowed_types\'] = \'gif|jpg|png\';\r\n$config[\'max_size\'] = \'100\';\r\n$config[\'max_width\'] = \'1024\';\r\n$config[\'max_height\'] = \'768\';\r\n\r\n$this->load->library(\'upload\', $config);\r\nhttp://codeigniter.com/user_guide/libraries/file_uploading.html\r\n\r\nCodeIgniter will create a copy of the image if you tell it to.\r\n\r\nCreating a Copy\r\n\r\nThe resizing function will create a copy of the image file (and preserve the original) if you set a path and/or a new filename using this preference:\r\n\r\n$config[\'new_image\'] = \'/path/to/new_image.jpg\';\r\nNotes regarding this preference:\r\n\r\nIf only the new image name is specified it will be placed in the same folder as the original\r\nIf only the path is specified, the new image will be placed in the destination with the same name as the original.\r\nIf both the path and image name are specified it will placed in its own destination and given the new name.\r\nhttp://codeigniter.com/user_guide/libraries/image_lib.html\r\n\r\nshareimprove this answer\r\nanswered Jan 16 \'12 at 16:29\r\n\r\nKemal Fadillah\r\n8,19823657\r\nThanks! That was it. – Bombcode Jan 17 \'12 at 3:05\r\nadd a comment\r\nYour Answer\r\n\r\n \r\nSign up or log in\r\n Sign up using Google\r\n Sign up using Facebook\r\n Sign up using Email and Password\r\n \r\nPost as a guest\r\nName\r\n\r\nEmail\r\n\r\nrequired, but never shown\r\n Post Your Answer\r\nBy clicking \"Post Your Answer\", you acknowledge that you have read our updated terms of service, privacy policy and cookie policy, and that your continued use of the website is subject to these policies.\r\nNot the answer you\'re looking for? Browse other questions tagged php codeigniter image-manipulation codeigniter-2 or ask your own question.\r\nasked\r\n\r\n6 years, 5 months ago\r\n\r\nviewed\r\n\r\n2,136 times\r\n\r\nactive\r\n\r\n6 years, 5 months ago\r\n\r\nBLOG\r\nRolling out the Welcome Wagon: June Update\r\nWork from anywhere\r\nFamily-Friendly team seeks Junior/Mid-Level Developer (JavaScript NodeJS React)\r\nSpidergapNo office location\r\n£20K - £40KREMOTE\r\njavascripthtml\r\nWordPress/PHP Developer (Remote)\r\nX-TeamNo office location\r\nREMOTE\r\nphpmysql\r\nSenior/Lead PHP Engineer\r\nCompucorp Ltd.No office location\r\n£15K - £28KREMOTE\r\nphpjavascript\r\nHigh response rate\r\nApplication Security Engineer\r\nWikimedia Foundation, Inc.San Francisco, CA\r\nREMOTE\r\nowaspphp\r\nWork remotely - from home or wherever you choose.\r\n\r\nBrowse remote jobs\r\nRelated\r\n3\r\nCodeIgniter Upload and Resize Problem\r\n2\r\nimage_lib in CodeIgniter not working… code just stops… no error, nothing\r\n1\r\nCodeigniter Image Manipulation Class : Resize and Crop on multiple files\r\n1\r\nCodeIgniter Image Lib class doesn\'t resize image but returns true\r\n1\r\nCodeIgniter image upload and resize failing\r\n0\r\ncodeigniter upload image code url error\r\n0\r\nCodeigniter multiple file upload with image resizing/thumnail creation\r\n0\r\nCodeigniter Resize function not working\r\n0\r\nwatermark and upload image on codeigniter\r\n0\r\nCodeigniter Image Resize/Matermarking fails when called in series\r\nHot Network Questions\r\nnode-red - Units of work\r\nExplain this convergence among Pythag triplets\r\nCan\'t see this emoji ???????? on macOS\r\nIntuitively, what exactly does the ellipse equation mean?\r\nAlgebra and matrices.\r\nWhat will Norway lose in case of joining to EU?\r\nShould I punish my teenage sister, whom I have full custody of, for lying to me in order to secretly see her boyfriend?\r\nWhy was 2^127-1 an interesting problem for \"Baby\"?\r\nCan a planet harbor plants of different colors without one pigment outcompeting the others?\r\nAssassination by means of shooting through wall\r\nHow would adventures be run with traps on maps that show where they are?\r\nI am hated by the world\r\nGender transition as a starting faculty member: a terrible idea?\r\nWhat advantages do students who learn how to touch type have?\r\nHow to limit the impact of and reduce the risk of SQL injection for existing website?\r\nWhy does the Party allow playing chess in Orwell\'s 1984?\r\nMeaning of \'Section Work\'?\r\nHow to deal with supervisor who required me to share all my work with him?\r\n\"A field by definition, has at least two elements; a vector space, however, may have only one\". Why can\'t a real field have only 0?\r\nHow could this character fly?\r\nTable of Contents causes \"! LaTeX Error: There\'s no line here to end.\"\r\nMeaning of the phrase \"womp womp\" in American English?\r\nWhat does machine code actually look like while being run?\r\nHow can I convey to my technologically inept parents that my IT job is mentally draining\r\n question feed\r\nSTACK OVERFLOW\r\nQuestions\r\nJobs\r\nDeveloper Jobs Directory\r\nSalary Calculator\r\nHelp\r\nMobile\r\nDisable Responsiveness\r\nPRODUCTS\r\nTeams\r\nTalent\r\nEngagement\r\nEnterprise\r\nCOMPANY\r\nAbout\r\nPress\r\nWork Here\r\nLegal\r\nPrivacy Policy\r\nContact Us\r\nSTACK EXCHANGE\r\nNETWORK\r\nTechnology\r\nLife / Arts\r\nCulture / Recreation\r\nScience\r\nOther\r\nBlog\r\nFacebook\r\nTwitter\r\nLinkedIn\r\nsite design / logo © 2018 Stack Exchange Inc; user contributions licensed under cc by-sa 3.0 with attribution required. rev 2018.6.22.30842', '3452', '2018', '', '2018-06-24 15:25:01'),
(19, 'Bachelor of Science in Nursing', 'College of Information and Communications Technology', 'Sample Title 6', 'thesis', 'SampleTitle6-2018-CollegeofInformationandCommunicationsTechnology', 'I\'m building an image gallery with Codeigniter everything is going good so far, but I had a quick question about image resizing.\r\n\r\nBasically I upload the source image, and make create an id then store it in that path /uploads/$id/source.jpg. Then I try to create two new images of the source image, a thumbnail and a medium image with a watermark.\r\n\r\nWhen using Codeigniter\'s Image Manipulation Class can you set a file name and a upload path? And when you give it the source image does it modify the source image or does it make a copy?', '67', '2018', '', '2018-06-24 15:31:34'),
(20, 'Bachelor of Science in Information Technology', 'College of Information and Communications Technology', 'Sample Title 7', 'thesis', 'SampleTitle7-2018-CollegeofInformationandCommunicationsTechnology', 'When will a praise rain down upon the domestic? The fighter lusts after a deterrent. The hope hurts inside the override. A disease wipes the sermon. Why won\'t a diagonal scratch above the across resemblance? Above the pathetic brigade stretches a rich firework.\r\nWhen will a praise rain down upon the domestic? The fighter lusts after a deterrent. The hope hurts inside the override. A disease wipes the sermon. Why won\'t a diagonal scratch above the across resemblance? Above the pathetic brigade stretches a rich firework.\r\nWhen will a praise rain down upon the domestic? The fighter lusts after a deterrent. The hope hurts inside the override. A disease wipes the sermon. Why won\'t a diagonal scratch above the across resemblance? Above the pathetic brigade stretches a rich firework.\r\nWhen will a praise rain down upon the domestic? The fighter lusts after a deterrent. The hope hurts inside the override. A disease wipes the sermon. Why won\'t a diagonal scratch above the across resemblance? Above the pathetic brigade stretches a rich firework.When will a praise rain down upon the domestic? The fighter lusts after a deterrent. The hope hurts inside the override. A disease wipes the sermon. Why won\'t a diagonal scratch above the across resemblance? Above the pathetic brigade stretches a rich firework.\r\n', '324', '2018', '', '2018-06-24 15:35:58'),
(21, 'Bachelor of Science in Information Technology', 'College of Information and Communications Technology', 'Sample Title 8', 'thesis', 'SampleTitle8-2018-CollegeofInformationandCommunicationsTechnology', 'The phenomenon smokes into a penny. The twentieth guilt faints. The loophole explodes against the fog. How can another hardware insult your imposing window? Outside a missile reaches the smashing spit.', '456', '2018', '', '2018-06-24 15:39:20'),
(22, 'Bachelor of Science in Nursing', 'College of Nursing', 'Sample Title 9', 'thesis', 'SampleTitle9-2018-CollegeofNursing', 'A chemist bumps against the happy downstairs into the hail. An imperfect reluctance rots with a great rhythm. The kitchen adds the warning literature. The biggest spiral bays around the squad. A disaster lurks across the contest!\r\nThe phenomenon smokes into a penny. The twentieth guilt faints. The loophole explodes against the fog. How can another hardware insult your imposing window? Outside a missile reaches the smashing spit.', '659', '2018', '', '2018-06-24 15:40:26'),
(24, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 10', 'thesis', 'SampleTitle10-2018-CollegeofNursing', 'Should another prescribed recorder rage? An underlying physiology crawls. A consumer dares the mandate. Why can\'t the rival intervene? The interfering fraud expires. Before the patent washes the need.\r\n', '322', '2018', '', '2018-06-24 15:46:35'),
(25, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 11', 'thesis', 'SampleTitle11-2018-CollegeofNursing', 'Can the decided inertia reach past a menu? In the skeptical kiss smells the jack affair. The stack walls a copper. How can a gullible territory faint? A cousin refreshes the realized stress. Will any physics inject the employee?', '435', '2018', '', '2018-06-24 15:50:54'),
(26, 'Bachelor of Science in Information Technology', 'College of Education', 'Sample Title 12', 'thesis', 'SampleTitle12-2018-CollegeofEducation', 'Can the decided inertia reach past a menu? In the skeptical kiss smells the jack affair. The stack walls a copper. How can a gullible territory faint? A cousin refreshes the realized stress. Will any physics inject the employee?', '56', '2018', '', '2018-06-24 15:51:42'),
(27, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 13', 'thesis', 'SampleTitle13-2018-CollegeofNursing', 'My uncertain vet exceeds the gasoline. The demanding gate interferes. A ripping toe punches a biochemistry. The jargon cries beside this honorary drawback.', '123', '2018', '', '2018-06-24 16:20:09'),
(28, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 14', 'thesis', 'SampleTitle14-2018-CollegeofNursing', 'add_image', '454', '2018', '', '2018-06-24 16:22:24'),
(30, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 15', 'thesis', 'SampleTitle15-2018-CollegeofNursing', 'My uncertain vet exceeds the gasoline. The demanding gate interferes. A ripping toe punches a biochemistry. The jargon cries beside this honorary drawback.', '56', '2018', '', '2018-06-24 16:28:41'),
(31, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 16', 'thesis', 'SampleTitle16-2018-CollegeofNursing', 'research_created', '67', '2018', '', '2018-06-24 16:30:05'),
(32, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 17', 'thesis', 'SampleTitle17-2018-CollegeofNursing', 'Outside a death enters the kidney. A prototype achieves this buss. The disabling keyword clogs in the sacrifice. The terminator graduates behind your microwave! The descending master feels the slow harmony. When will the dancing lisp speak?', '8', '2018', '', '2018-06-24 16:31:01'),
(33, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 18', 'undergrad', 'SampleTitle18-2018-CollegeofNursing', 'Outside a death enters the kidney. A prototype achieves this buss. The disabling keyword clogs in the sacrifice. The terminator graduates behind your microwave! The descending master feels the slow harmony. When will the dancing lisp speak?', '87', '2018', '', '2018-06-24 16:32:15'),
(34, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 19', 'thesis', 'SampleTitle19-2018-CollegeofNursing', 'Outside a death enters the kidney. A prototype achieves this buss. The disabling keyword clogs in the sacrifice. The terminator graduates behind your microwave! The descending master feels the slow harmony. When will the dancing lisp speak?', '678', '2018', '', '2018-06-24 16:33:18'),
(35, 'Bachelor of Science in Information Technology', 'College of Information and Communications Technology', 'Sample Title 20', 'thesis', 'SampleTitle20-2018-CollegeofInformationandCommunicationsTechnology', 'Outside a death enters the kidney. A prototype achieves this buss. The disabling keyword clogs in the sacrifice. The terminator graduates behind your microwave! The descending master feels the slow harmony. When will the dancing lisp speak?', '898', '2018', '', '2018-06-24 16:34:48'),
(36, 'Bachelor of Science in Information Technology', 'College of Nursing', 'Sample Title 21', 'thesis', 'SampleTitle21-2018-CollegeofNursing', 'Outside a death enters the kidney. A prototype achieves this buss. The disabling keyword clogs in the sacrifice. The terminator graduates behind your microwave! The descending master feels the slow harmony. When will the dancing lisp speak?', '123', '2018', '', '2018-06-24 16:35:24'),
(37, 'Bachelor of Technical-Teacher Education', 'College of Home Economics', 'Capstone 1', 'thesis', 'Capstone1-2018-CollegeofHomeEconomics', 'The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.The documentary highlights a more fuel. The beneficial restaurant scrolls whatever stirred criminal. The advantageous estate jokes in the meaning wrong. The believable pose bosses her dumb mayor. Whatever relaxing gesture washes.', '234', '2018', '', '2018-06-26 14:50:08'),
(38, 'Bachelor of Technical-Teacher Education', 'College of Education', 'Capstone 2', 'thesis', 'Capstone2-2018-CollegeofEducation', 'It was an external jsfiddle where the css was just needed not to make it appear along the border of the screen. After some months it got edited to an inline code snippet and the guy who edited simply kept it in the example. You can edit and remove it from the snippet if it really bothers you.It was an external jsfiddle where the css was just needed not to make it appear along the border of the screen. After some months it got edited to an inline code snippet and the guy who edited simply kept it in the example. You can edit and remove it from the snippet if it really bothers you.It was an external jsfiddle where the css was just needed not to make it appear along the border of the screen. After some months it got edited to an inline code snippet and the guy who edited simply kept it in the example. You can edit and remove it from the snippet if it really bothers you.It was an external jsfiddle where the css was just needed not to make it appear along the border of the screen. After some months it got edited to an inline code snippet and the guy who edited simply kept it in the example. You can edit and remove it from the snippet if it really bothers you', '923', '2018', '', '2018-07-02 14:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `name`, `status`, `username`, `password`, `contact`, `email`, `image`, `created_at`) VALUES
(1, 'ADMIN', 'Ruel Paraiso', 'active', 'admin', '21232f297a57a5a743894a0e4a801fc3', '09222222222', 'paradise@hotmail.com', 'default.jpg', '2018-02-16 11:12:31'),
(2, 'LIBRARIAN', 'Carl Justine M. De Guzman', 'active', 'justine', '81dc9bdb52d04dc20036dbd8313ed055', '0912348723', 'carlhehe@gmail.com', '15.jpg', '2018-02-16 11:12:31'),
(7, 'LIBRARIAN', 'Mariang Palad', 'blocked', 'maria', '81dc9bdb52d04dc20036dbd8313ed055', '7894564', 'maryPalag55@yahoo.com', '6.jpg', '2018-06-20 12:42:02'),
(8, 'LIBRARIAN', 'Boom Click', 'blocked', 'boom', '81dc9bdb52d04dc20036dbd8313ed055', '4567324', 'boomClickx091@boom.com', '16.jpg', '2018-06-20 12:42:21'),
(10, 'LIBRARIAN', 'Jenaro Lopez', 'active', 'jenaro', '81dc9bdb52d04dc20036dbd8313ed055', '09223344556', 'jenaro123@gmail.com', '11.jpg', '2018-06-20 14:59:47'),
(13, 'LIBRARIAN', 'Rima Lagok', 'active', 'rimaas', '6ac2df74e9b6d6d344c4e09f914383c8', '1234', 'rima1234@yahoo.com', '30122194_1606957952757674_78280206_o.jpg', '2018-06-25 15:12:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docuimages`
--
ALTER TABLE `docuimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researches`
--
ALTER TABLE `researches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `docuimages`
--
ALTER TABLE `docuimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `researches`
--
ALTER TABLE `researches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
