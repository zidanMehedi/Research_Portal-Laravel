-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2020 at 05:32 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain_research`
--

DROP TABLE IF EXISTS `domain_research`;
CREATE TABLE IF NOT EXISTS `domain_research` (
  `dom_id` int(11) NOT NULL AUTO_INCREMENT,
  `dom_name` text NOT NULL,
  `dom_desc` text NOT NULL,
  PRIMARY KEY (`dom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain_research`
--

INSERT INTO `domain_research` (`dom_id`, `dom_name`, `dom_desc`) VALUES
(3, 'Data Science', 'test'),
(4, 'Machine Learning', 'mmmc');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` varchar(11) NOT NULL,
  `faculty_fname` varchar(50) NOT NULL,
  `faculty_lname` varchar(40) NOT NULL,
  `faculty_email` varchar(30) NOT NULL,
  `faculty_contact` varchar(14) NOT NULL,
  `faculty_regDate` varchar(30) NOT NULL,
  `faculty_dept` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `faculty_id`, `faculty_fname`, `faculty_lname`, `faculty_email`, `faculty_contact`, `faculty_regDate`, `faculty_dept`, `status`) VALUES
(1, '1701-1751-2', 'MOHAIMEN BIN', 'NOOR', 'niloy@aiub.edu', '8801987456321', '2020-03-12', 'CS', 1),
(2, '1709-181-2', 'Md', 'Al Amin', 'alamin@auib.edu', '8801812345678', '2020-3-15', 'CS', 1),
(3, '0809-775-2', 'MOHAMMOD HAFIZUR', 'RAHMAN', 'hafiz@aiub.edu', '+8801612345678', '2020-4-2', 'CS', 0),
(6, '0209-187-2', 'S A M MANZUR HOSSAIN', 'KHAN', 'manzur@aiub.edu', '8801987456321', '2020-05-18', 'CS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `fileName` varchar(100) NOT NULL,
  `filePath` varchar(100) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `fileName`, `filePath`, `group_id`) VALUES
(5, 'ATP-3__admin__2020-3-16.pdf', '', 2),
(6, 'JIS_2014040110394271__admin__2', '', 2),
(7, 'admin_400243991_Moving Animations.docx', 'public/upload/admin/d02Lt1hF6whpiV8RxLgNb9LyjtQ6XkKOXMutglOT.docx', 5),
(8, 'admin_Group_No.-3_Research Management System(NodeJS Report).pdf', 'public/upload/admin/Fn8RFCsP86pTmx8TC096aH8S4OiW7dfMCriuzkly.pdf', 3),
(9, 'admin_Group_No.-2_City View.docx', 'public/upload/verification/W3ZYh7aQpDWPewHNgkI2k5GkDDLlauCjzvupolAz.docx', 2);

-- --------------------------------------------------------

--
-- Table structure for table `research_group`
--

DROP TABLE IF EXISTS `research_group`;
CREATE TABLE IF NOT EXISTS `research_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `subDom_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`),
  KEY `subDom_id` (`subDom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_group`
--

INSERT INTO `research_group` (`group_id`, `subDom_id`) VALUES
(2, 2),
(3, 3),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(10) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rid`, `role_name`) VALUES
(1, 'admin'),
(2, 'faculty'),
(3, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `sem_name` varchar(30) NOT NULL,
  `sem_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem_name`, `sem_status`) VALUES
(1, '2019-2020, Spring', 0),
(2, '2019-2020, Summer', 0),
(6, '2020-2021,Spring', 0),
(7, '2021-2022,Spring', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(10) NOT NULL,
  `student_fname` varchar(50) NOT NULL,
  `student_lname` varchar(40) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `student_contact` varchar(14) NOT NULL,
  `student_credit` int(3) NOT NULL,
  `student_cgpa` float NOT NULL,
  `student_regDate` varchar(30) NOT NULL,
  `student_dept` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `student_id`, `student_fname`, `student_lname`, `student_email`, `student_contact`, `student_credit`, `student_cgpa`, `student_regDate`, `student_dept`, `status`) VALUES
(7, '17-33950-1', 'Md Sameull', 'Islam', 'sameull@gmail.com', '8801931245678', 122, 3.9, '2020-04-17', 'SE', 1),
(23, '17-33956-1', 'Khandakar Anim Hassan', 'Adnan Anim', 'khandakar.adnan21@gmail.com', '01931245678', 134, 3.9, '2020-04-18', 'CSE', 1),
(24, '17-33954-1', 'asd', 'asdd', 'sc@yahoo.com', '8801234567891', 134, 3.9, '2020-04-18', 'CS', 1),
(26, '17-33963-1', 'Atick', 'Shuvo', 'atick@outlook.com', '8801987456321', 122, 3.98, '2020-05-18', 'CS', 0),
(28, '17-33333-1', 'asdf', 'ghjkl', 'alamin@auib.edu', '01812345678', 120, 3.9, '2020-05-25', 'CSE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_thesis`
--

DROP TABLE IF EXISTS `student_thesis`;
CREATE TABLE IF NOT EXISTS `student_thesis` (
  `thesis_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `subDom_id` int(11) NOT NULL,
  `external` varchar(100) NOT NULL,
  `thesis_progress` int(3) NOT NULL,
  `ext_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`thesis_id`),
  KEY `sid` (`sid`),
  KEY `student_thesis_ibfk_1` (`subDom_id`),
  KEY `sem_id` (`sem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_thesis`
--

INSERT INTO `student_thesis` (`thesis_id`, `group_id`, `sid`, `sem_id`, `subDom_id`, `external`, `thesis_progress`, `ext_status`) VALUES
(1, 2, 2, 7, 2, 'S A M MANZUR HOSSAIN KHAN', 80, 1),
(2, 2, 7, 7, 2, 'S A M MANZUR HOSSAIN KHAN', 80, 1),
(3, 2, 23, 7, 2, 'S A M MANZUR HOSSAIN KHAN', 80, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_domain`
--

DROP TABLE IF EXISTS `sub_domain`;
CREATE TABLE IF NOT EXISTS `sub_domain` (
  `subDom_id` int(11) NOT NULL AUTO_INCREMENT,
  `subDom_name` text NOT NULL,
  `subDom_desc` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `dom_id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  PRIMARY KEY (`subDom_id`),
  KEY `type_id` (`type_id`),
  KEY `dom_id` (`dom_id`),
  KEY `fid` (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_domain`
--

INSERT INTO `sub_domain` (`subDom_id`, `subDom_name`, `subDom_desc`, `type_id`, `dom_id`, `fid`) VALUES
(2, 'Agent Robot', 'Arduno', 2, 4, 1),
(3, 'Doctor\'s Hub', 'About doctor', 2, 3, 1),
(5, 'abc', 'all alphabets arranging', 5, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `thesis_type`
--

DROP TABLE IF EXISTS `thesis_type`;
CREATE TABLE IF NOT EXISTS `thesis_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis_type`
--

INSERT INTO `thesis_type` (`type_id`, `type_name`) VALUES
(1, 'SOFTWARE PROJECT 1'),
(2, 'SOFTWARE PROJECT 2'),
(3, 'THESIS BSCS'),
(4, 'THESIS MSCS'),
(5, 'THESIS CONTINUED');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_name` varchar(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  `rid` int(11) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `user_id_name`, `password`, `rid`) VALUES
(1, 'admin', 'asd', 1),
(2, '1701-1751-2', '1234', 2),
(6, '1709-1811-2', '1709-1811-2	', 2),
(10, '0809-775-2', '789', 2),
(13, '17-33950-1', 'o&$TEP7rC9', 3),
(18, '17-33956-1', 'asdf', 3),
(19, '17-33956-1', 'Nhet9qngac', 3),
(20, '17-33956-1', 'ax7!$!luv8', 3),
(21, '17-33956-1', '&reP8gt4%7', 3),
(22, '17-33956-1', 't$RZwdC!y&', 3),
(23, '17-33956-1', 'r8Docl9sfM', 3),
(24, '17-33956-1', 'hG5!$eP3QT', 3),
(25, '17-33956-1', 'wU^9%oc$P$', 3),
(26, '17-33956-1', 'P^$CcS8pvb', 3),
(27, '17-33956-1', 'c%j7ZX%n!5', 3),
(28, '17-33956-1', 'KeW8Jm!SLd', 3),
(29, '17-33956-1', '7!&K$%2VZx', 3),
(30, '17-33954-1', 'AO^mtq5Xu9', 3),
(32, '17-33963-1', '123', 3),
(33, '0001-047-2', 'D!yX2G%4mM', 2),
(35, '17-33333-1', 'BL3iYBpv', 3);

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

DROP TABLE IF EXISTS `verification`;
CREATE TABLE IF NOT EXISTS `verification` (
  `ver_id` int(11) NOT NULL AUTO_INCREMENT,
  `ver_fileName` varchar(100) NOT NULL,
  `filePath` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`ver_id`),
  KEY `sid` (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`ver_id`, `ver_fileName`, `filePath`, `sid`) VALUES
(6, '_933955604_Bio.docx', 'public/upload/verification/MK6sUEOHrgpRTw7Ix0CQcN7U2zGeWHun47CDJcBj.docx', 28);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `research_group`
--
ALTER TABLE `research_group`
  ADD CONSTRAINT `research_group_ibfk_1` FOREIGN KEY (`subDom_id`) REFERENCES `sub_domain` (`subDom_id`);

--
-- Constraints for table `sub_domain`
--
ALTER TABLE `sub_domain`
  ADD CONSTRAINT `sub_domain_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `thesis_type` (`type_id`),
  ADD CONSTRAINT `sub_domain_ibfk_2` FOREIGN KEY (`dom_id`) REFERENCES `domain_research` (`dom_id`),
  ADD CONSTRAINT `sub_domain_ibfk_3` FOREIGN KEY (`fid`) REFERENCES `faculty` (`fid`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `role` (`rid`);

--
-- Constraints for table `verification`
--
ALTER TABLE `verification`
  ADD CONSTRAINT `verification_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
