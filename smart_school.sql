-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 10:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smart_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics_subject`
--

CREATE TABLE IF NOT EXISTS `academics_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(50) NOT NULL,
  `subject_type` varchar(50) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `academics_subject`
--

INSERT INTO `academics_subject` (`id`, `subject_name`, `subject_type`, `subject_code`) VALUES
(4, 'English', 'Theory', '102'),
(8, 'Mathmathics', 'Theory', '120'),
(14, 'Hindi', 'Theory', '100'),
(25, 'Arabic', 'Theory', '100'),
(29, 'Bangla', 'Theory', '104');

-- --------------------------------------------------------

--
-- Table structure for table `academic_classes`
--

CREATE TABLE IF NOT EXISTS `academic_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classes` varchar(50) NOT NULL,
  `class_section` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `academic_classes`
--

INSERT INTO `academic_classes` (`id`, `classes`, `class_section`) VALUES
(1, '', 'B'),
(2, 'one', 'B'),
(3, 'Two', 'B'),
(4, 'one', 'B'),
(5, 'Theree', '');

-- --------------------------------------------------------

--
-- Table structure for table `academic_sections`
--

CREATE TABLE IF NOT EXISTS `academic_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `academic_sections`
--

INSERT INTO `academic_sections` (`id`, `section`) VALUES
(3, 'C'),
(4, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE IF NOT EXISTS `accountant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accountant_name` varchar(70) NOT NULL,
  `accountant_email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `accountant_phone` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`id`, `accountant_name`, `accountant_email`, `gender`, `dob`, `address`, `accountant_phone`, `image`) VALUES
(1, 'Rayhan Ahmed', 'max.rayhanahmed@gmail.com', 'Male', '01/01/97', 'Jalalabad, Sylhet.', '01684652137', '4219be3ca7.jpg'),
(3, 'cgv', 'feg@gmail.com', 'Male', '04/17/2018', 'brjmnge', '2852', ''),
(4, 'fdrth', 'rhgf@gnail.com', 'Male', '04/02/2018', 'grtyhr', '5875', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `username`, `pass`) VALUES
(1, 'rayhan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `exam_list`
--

CREATE TABLE IF NOT EXISTS `exam_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(50) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `exam_list`
--

INSERT INTO `exam_list` (`id`, `exam_name`, `des`) VALUES
(2, '2st semister', 'This is second.');

-- --------------------------------------------------------

--
-- Table structure for table `exam_marks_grade`
--

CREATE TABLE IF NOT EXISTS `exam_marks_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_name` varchar(50) NOT NULL,
  `percent_from` float(10,2) NOT NULL,
  `percent_upto` float(10,2) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `exam_marks_grade`
--

INSERT INTO `exam_marks_grade` (`id`, `grade_name`, `percent_from`, `percent_upto`, `des`) VALUES
(2, 'A+', 80.00, 100.00, 'this is A+'),
(3, 'A', 70.00, 80.00, 'Genaral A');

-- --------------------------------------------------------

--
-- Table structure for table `expenses_head`
--

CREATE TABLE IF NOT EXISTS `expenses_head` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expenses_head` varchar(50) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `expenses_head`
--

INSERT INTO `expenses_head` (`id`, `expenses_head`, `des`) VALUES
(1, 'Stationary', 'this i'),
(3, 'dayli laver', 'this is perous'),
(4, 'stationarys', 'this is first'),
(6, 'office', '');

-- --------------------------------------------------------

--
-- Table structure for table `expense_add`
--

CREATE TABLE IF NOT EXISTS `expense_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_head` varchar(50) NOT NULL,
  `expense_name` varchar(50) NOT NULL,
  `expense_date` varchar(50) NOT NULL,
  `expense_amount` varchar(50) NOT NULL,
  `expense_document` varchar(50) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `expense_add`
--

INSERT INTO `expense_add` (`id`, `expense_head`, `expense_name`, `expense_date`, `expense_amount`, `expense_document`, `des`) VALUES
(2, 'stationary', 'ju,km', '04/24/2018', '123', '133dc28c94.jpg', 'gtykjn'),
(3, 'Stationary', 'Elecrtic', '04/24/2018', '1200', '198e218151.jpg', 'No Caption.');

-- --------------------------------------------------------

--
-- Table structure for table `fees_discount`
--

CREATE TABLE IF NOT EXISTS `fees_discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_discount` varchar(50) NOT NULL,
  `discount_code` varchar(50) NOT NULL,
  `discount_amount` varchar(50) NOT NULL,
  `des` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fees_discount`
--

INSERT INTO `fees_discount` (`id`, `fees_discount`, `discount_code`, `discount_amount`, `des`) VALUES
(2, 'poor', '1st-poor', '300', 'This is test.');

-- --------------------------------------------------------

--
-- Table structure for table `fees_groups`
--

CREATE TABLE IF NOT EXISTS `fees_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_group` varchar(50) NOT NULL,
  `fees_des` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fees_groups`
--

INSERT INTO `fees_groups` (`id`, `fees_group`, `fees_des`) VALUES
(2, 'Genaral', 'This is first test.');

-- --------------------------------------------------------

--
-- Table structure for table `fees_master`
--

CREATE TABLE IF NOT EXISTS `fees_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_group` varchar(50) NOT NULL,
  `fees_type` varchar(50) NOT NULL,
  `due_date` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fees_master`
--

INSERT INTO `fees_master` (`id`, `fees_group`, `fees_type`, `due_date`, `amount`) VALUES
(1, 'Genaral', '1st semister', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fees_type`
--

CREATE TABLE IF NOT EXISTS `fees_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_type` varchar(50) NOT NULL,
  `fees_code` varchar(50) NOT NULL,
  `fees_des` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fees_type`
--

INSERT INTO `fees_type` (`id`, `fees_type`, `fees_code`, `fees_des`) VALUES
(1, '1st semister', '1st semister', '1st semister test.'),
(2, '2nd semister', '2nd semister', '');

-- --------------------------------------------------------

--
-- Table structure for table `income_add`
--

CREATE TABLE IF NOT EXISTS `income_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `income_head` varchar(50) NOT NULL,
  `income_name` varchar(50) NOT NULL,
  `income_date` varchar(50) NOT NULL,
  `income_amount` float(10,2) NOT NULL DEFAULT '0.00',
  `income_document` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `column` float(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `income_add`
--

INSERT INTO `income_add` (`id`, `income_head`, `income_name`, `income_date`, `income_amount`, `income_document`, `des`, `column`) VALUES
(13, 'Donation', 'Rayhan', '04/09/2018', 1000.00, '', 'This is Rayhan donation.', 0.00),
(14, 'Donation', 'pagla', '04/17/2018', 2000.00, '0d9a7b42e1.jpg', '', 0.00),
(15, 'Donation', 'hamkil', '04/23/2018', 523.23, '', 'dtdg4t', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `income_head`
--

CREATE TABLE IF NOT EXISTS `income_head` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `income_head` varchar(50) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `income_head`
--

INSERT INTO `income_head` (`id`, `income_head`, `des`) VALUES
(1, 'Donation', 'This is first Donation.');

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE IF NOT EXISTS `students_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_number` varchar(50) NOT NULL,
  `roll_number` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `cast` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admission_date` varchar(50) NOT NULL,
  `rte` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_phone` varchar(50) NOT NULL,
  `father_occup` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_phone` varchar(50) NOT NULL,
  `mother_occup` varchar(50) NOT NULL,
  `guardian_is` varchar(50) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `guardian_relation` varchar(50) NOT NULL,
  `guardian_email` varchar(50) NOT NULL,
  `guardian_phone` varchar(50) NOT NULL,
  `guardian_occup` varchar(50) NOT NULL,
  `guardian_address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`id`, `admission_number`, `roll_number`, `class`, `section`, `first_name`, `last_name`, `gender`, `dob`, `category`, `religion`, `cast`, `mobile_no`, `email`, `admission_date`, `rte`, `image`, `father_name`, `father_phone`, `father_occup`, `mother_name`, `mother_phone`, `mother_occup`, `guardian_is`, `guardian_name`, `guardian_relation`, `guardian_email`, `guardian_phone`, `guardian_occup`, `guardian_address`) VALUES
(1, '1245', '01', 'one', 'C', 'Rayhan', 'Ahmed', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '1254', '02', 'one', 'C', 'Hasan', 'Iqbal', 'Male', '04/02/2018', '2', 'Islam', 'pagla', '', 'rana07ce@yahoo.com', '23/04/18', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '1254', '02', 'one', 'B', 'Hasan', 'Iqbal', 'Male', '04/10/2018', '2', 'Islam', 'pagla', 'mobile_no', 'rana07ce@yahoo.com', '23/04/18', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '1254', '02', 'Two', 'C', 'Hasan', 'Iqbal', 'Male', '04/11/2018', '2', 'Islam', 'pagla', '012345', 'rana07ce@yahoo.com', '23/04/18', 'No', '', '', '125446', 'etdf', 'pagli', '2862', 'vesrg', '', '', '', '', '', '', ''),
(5, '1254', '02', 'Two', 'B', 'Hasan', 'Iqbal', 'Female', '04/02/2018', '2', 'Islam', 'pagla', '012345', 'rana07ce@yahoo.com', '23/04/18', 'No', '', '', '125446', 'etdf', 'pagli', '2862', 'vesrg', '', '', '', '', '', '', ''),
(6, '1254', '02', 'one', 'B', 'Hasan', 'Iqbal', 'Male', '04/17/2018', '2', 'Islam', 'pagla', '012345', 'rana07ce@yahoo.com', '23/04/18', 'No', '', 'Hakim', '125446', 'etdf', 'pagli', '2862', 'vesrg', '', '', '', '', '', '', ''),
(7, '245', '65', 'Two', 'B', 'kamrul', 'Islam', 'Male', '04/11/2018', '2', 'Islam', 'test', '12354', 'rana@gmail.com', '23/04/18', 'No', '782e066abd.jpg', 'pagla', '456', 'fighter', 'pagli', '47645', 'fighter', 'Other', 'hakmot', 'Brother', 'hakmot@gmail.com', '12354', 'paglami', 'pagla goune, pagla.'),
(8, '1254', '04', 'one', 'B', 'Hasan', 'Iqbal', 'Female', '04/11/2018', '2', 'Islam', 'pagla', '012345', 'rana07ce@yahoo.com', '23/04/18', 'No', 'eefb197c6d.jpg', 'Hakim', '125446', 'etdf', 'pagli', '2862', 'vesrg', 'Other', 'Pagla', 'gasf', 'pagla@gmail.com', '1655', 'rfdvsg', 'pagla bari, pagla.');

-- --------------------------------------------------------

--
-- Table structure for table `student_cat`
--

CREATE TABLE IF NOT EXISTS `student_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_cat`
--

INSERT INTO `student_cat` (`id`, `category`) VALUES
(1, 'test'),
(2, 'pagla');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
