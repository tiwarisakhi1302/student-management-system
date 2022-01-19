-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 06:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `password`) VALUES
('A1001', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `enroll` varchar(15) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_name` varchar(25) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `course_credit` int(11) DEFAULT NULL,
  `dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_name`, `course_id`, `course_credit`, `dept_name`) VALUES
('SDF 1', 'C1001', 10, 'Computer Science'),
('English Communication', 'C1002', 10, 'English'),
('Chemistry', 'C1003', 10, 'Chemistry'),
('Micro Controllers', 'C1004', 10, 'Electronics'),
('Physics 1', 'C1005', 10, 'Physics'),
('Maths 1', 'C1006', 10, 'Mathematics'),
('Electrical Science 1', 'C1007', 10, 'Electronics'),
('Physics 2', 'C1008', 10, 'Physics'),
('Maths 1', 'C1009', 10, 'Mathematics'),
('SDF 2', 'C1010', 10, 'Computer Science'),
('Data Structures', 'C1011', 10, 'Computer Science'),
('DBMS', 'C1012', 10, 'Computer Science'),
('Economics 1', 'C1013', 10, 'Economics'),
('Electrical Science 2', 'C1014', 10, 'Electronics'),
('TFCS', 'C1015', 10, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(30) NOT NULL,
  `dept_HOD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `dept_HOD`) VALUES
('Computer Science', 'Dr. Rakesh Mishra'),
('Economics', 'Dr. Devender Chauhan'),
('Electronics', 'Dr. Sanjay Singh'),
('Mathematics', 'Dr. Aditya Sinha'),
('Physics', 'Dr. Anita Gautam');

-- --------------------------------------------------------

--
-- Table structure for table `exam_sem1`
--

CREATE TABLE `exam_sem1` (
  `enroll` varchar(15) NOT NULL,
  `exam_id` varchar(2) NOT NULL,
  `C1001` int(11) NOT NULL,
  `C1002` int(11) NOT NULL,
  `C1003` int(11) NOT NULL,
  `C1004` int(11) NOT NULL,
  `C1005` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_sem1`
--

INSERT INTO `exam_sem1` (`enroll`, `exam_id`, `C1001`, `C1002`, `C1003`, `C1004`, `C1005`) VALUES
('20103216', 't1', 18, 17, 20, 19, 17),
('20103216', 't2', 17, 14, 18, 13, 15),
('20103216', 't3', 55, 51, 45, 42, 57),
('20103222', 't1', 19, 17, 16, 20, 14),
('20103222', 't2', 15, 17, 19, 15, 14),
('20103222', 't3', 55, 51, 45, 42, 57),
('20103229', 't1', 17, 20, 17, 15, 13),
('20103229', 't2', 16, 19, 14, 16, 15),
('20103229', 't3', 54, 42, 51, 57, 58),
('20103231', 't1', 13, 18, 12, 14, 14),
('20103231', 't2', 14, 18, 15, 15, 16),
('20103231', 't3', 51, 49, 55, 54, 58);

-- --------------------------------------------------------

--
-- Table structure for table `exam_sem2`
--

CREATE TABLE `exam_sem2` (
  `enroll` varchar(15) NOT NULL,
  `exam_id` varchar(2) NOT NULL,
  `C1006` int(11) DEFAULT NULL,
  `C1007` int(11) DEFAULT NULL,
  `C1008` int(11) DEFAULT NULL,
  `C1009` int(11) DEFAULT NULL,
  `C1010` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_sem2`
--

INSERT INTO `exam_sem2` (`enroll`, `exam_id`, `C1006`, `C1007`, `C1008`, `C1009`, `C1010`) VALUES
('20103216', 't1', 18, 19, 17, 18, 20),
('20103216', 't2', 20, 17, 18, 17, 18),
('20103216', 't3', 18, 17, 14, 18, 19),
('20103222', 't1', 18, 16, 19, 18, 17),
('20103222', 't2', 19, 17, 18, 17, 18),
('20103222', 't3', 50, 46, 55, 57, 57),
('20103229', 't1', 16, 19, 18, 18, 13),
('20103229', 't2', 16, 19, 14, 16, 15),
('20103229', 't3', 50, 40, 55, 59, 58),
('20103231', 't1', 18, 15, 17, 19, 17),
('20103231', 't2', 14, 18, 15, 15, 16),
('20103231', 't3', 51, 49, 55, 54, 58);

-- --------------------------------------------------------

--
-- Table structure for table `exam_sem3`
--

CREATE TABLE `exam_sem3` (
  `enroll` varchar(15) NOT NULL,
  `exam_id` varchar(2) NOT NULL,
  `C1011` int(11) DEFAULT NULL,
  `C1012` int(11) DEFAULT NULL,
  `C1013` int(11) DEFAULT NULL,
  `C1014` int(11) DEFAULT NULL,
  `C1015` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_sem3`
--

INSERT INTO `exam_sem3` (`enroll`, `exam_id`, `C1011`, `C1012`, `C1013`, `C1014`, `C1015`) VALUES
('20103216', 't1', NULL, NULL, NULL, NULL, NULL),
('20103216', 't2', NULL, NULL, NULL, NULL, NULL),
('20103216', 't3', NULL, NULL, NULL, NULL, NULL),
('20103222', 't1', 17, 14, 17, 17, 18),
('20103222', 't2', 18, 14, 18, 18, 16),
('20103222', 't3', 58, 48, 57, 53, 54),
('20103229', 't1', 14, 17, 17, 18, 13),
('20103229', 't2', 16, 19, 14, 16, 15),
('20103229', 't3', 50, 40, 55, 59, 58),
('20103231', 't1', 18, 17, 15, 18, 15),
('20103231', 't2', 19, 15, 16, 18, 16),
('20103231', 't3', 50, 44, 57, 55, 56);

-- --------------------------------------------------------

--
-- Table structure for table `exam_sem4`
--

CREATE TABLE `exam_sem4` (
  `enroll` varchar(15) NOT NULL,
  `exam_id` varchar(2) NOT NULL,
  `C1016` int(11) DEFAULT NULL,
  `C1017` int(11) DEFAULT NULL,
  `C1018` int(11) DEFAULT NULL,
  `C1019` int(11) DEFAULT NULL,
  `C1020` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_sem4`
--

INSERT INTO `exam_sem4` (`enroll`, `exam_id`, `C1016`, `C1017`, `C1018`, `C1019`, `C1020`) VALUES
('20103216', 't1', NULL, NULL, NULL, NULL, NULL),
('20103216', 't2', NULL, NULL, NULL, NULL, NULL),
('20103216', 't3', NULL, NULL, NULL, NULL, NULL),
('20103222', 't1', NULL, NULL, NULL, NULL, NULL),
('20103222', 't2', NULL, NULL, NULL, NULL, NULL),
('20103222', 't3', NULL, NULL, NULL, NULL, NULL),
('20103231', 't1', NULL, NULL, NULL, NULL, NULL),
('20103231', 't2', NULL, NULL, NULL, NULL, NULL),
('20103231', 't3', NULL, NULL, NULL, NULL, NULL),
('20103233', 't1', NULL, NULL, NULL, NULL, NULL),
('20103233', 't2', NULL, NULL, NULL, NULL, NULL),
('20103233', 't3', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_sem5`
--

CREATE TABLE `exam_sem5` (
  `enroll` varchar(15) NOT NULL,
  `exam_id` varchar(2) NOT NULL,
  `C1021` int(11) DEFAULT NULL,
  `C1022` int(11) DEFAULT NULL,
  `C1023` int(11) DEFAULT NULL,
  `C1024` int(11) DEFAULT NULL,
  `C1025` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_sem5`
--

INSERT INTO `exam_sem5` (`enroll`, `exam_id`, `C1021`, `C1022`, `C1023`, `C1024`, `C1025`) VALUES
('20103216', 't1', NULL, NULL, NULL, NULL, NULL),
('20103216', 't2', NULL, NULL, NULL, NULL, NULL),
('20103216', 't3', NULL, NULL, NULL, NULL, NULL),
('20103222', 't1', NULL, NULL, NULL, NULL, NULL),
('20103222', 't2', NULL, NULL, NULL, NULL, NULL),
('20103222', 't3', NULL, NULL, NULL, NULL, NULL),
('20103231', 't1', NULL, NULL, NULL, NULL, NULL),
('20103231', 't2', NULL, NULL, NULL, NULL, NULL),
('20103231', 't3', NULL, NULL, NULL, NULL, NULL),
('20103233', 't1', NULL, NULL, NULL, NULL, NULL),
('20103233', 't2', NULL, NULL, NULL, NULL, NULL),
('20103233', 't3', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_sem6`
--

CREATE TABLE `exam_sem6` (
  `enroll` varchar(15) NOT NULL,
  `exam_id` varchar(2) NOT NULL,
  `C1026` int(11) DEFAULT NULL,
  `C1027` int(11) DEFAULT NULL,
  `C1028` int(11) DEFAULT NULL,
  `C1029` int(11) DEFAULT NULL,
  `C1030` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_sem6`
--

INSERT INTO `exam_sem6` (`enroll`, `exam_id`, `C1026`, `C1027`, `C1028`, `C1029`, `C1030`) VALUES
('20103216', 't1', NULL, NULL, NULL, NULL, NULL),
('20103216', 't2', NULL, NULL, NULL, NULL, NULL),
('20103216', 't3', NULL, NULL, NULL, NULL, NULL),
('20103222', 't1', NULL, NULL, NULL, NULL, NULL),
('20103222', 't2', NULL, NULL, NULL, NULL, NULL),
('20103222', 't3', NULL, NULL, NULL, NULL, NULL),
('20103231', 't1', NULL, NULL, NULL, NULL, NULL),
('20103231', 't2', NULL, NULL, NULL, NULL, NULL),
('20103231', 't3', NULL, NULL, NULL, NULL, NULL),
('20103233', 't1', NULL, NULL, NULL, NULL, NULL),
('20103233', 't2', NULL, NULL, NULL, NULL, NULL),
('20103233', 't3', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_sem7`
--

CREATE TABLE `exam_sem7` (
  `enroll` varchar(15) NOT NULL,
  `exam_id` varchar(2) NOT NULL,
  `C1031` int(11) DEFAULT NULL,
  `C1032` int(11) DEFAULT NULL,
  `C1033` int(11) DEFAULT NULL,
  `C1034` int(11) DEFAULT NULL,
  `C1035` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_sem7`
--

INSERT INTO `exam_sem7` (`enroll`, `exam_id`, `C1031`, `C1032`, `C1033`, `C1034`, `C1035`) VALUES
('20103216', 't1', NULL, NULL, NULL, NULL, NULL),
('20103216', 't2', NULL, NULL, NULL, NULL, NULL),
('20103216', 't3', NULL, NULL, NULL, NULL, NULL),
('20103222', 't1', NULL, NULL, NULL, NULL, NULL),
('20103222', 't2', NULL, NULL, NULL, NULL, NULL),
('20103222', 't3', NULL, NULL, NULL, NULL, NULL),
('20103231', 't1', NULL, NULL, NULL, NULL, NULL),
('20103231', 't2', NULL, NULL, NULL, NULL, NULL),
('20103231', 't3', NULL, NULL, NULL, NULL, NULL),
('20103233', 't1', NULL, NULL, NULL, NULL, NULL),
('20103233', 't2', NULL, NULL, NULL, NULL, NULL),
('20103233', 't3', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_sem8`
--

CREATE TABLE `exam_sem8` (
  `enroll` varchar(15) NOT NULL,
  `exam_id` varchar(2) NOT NULL,
  `C1036` int(11) DEFAULT NULL,
  `C1037` int(11) DEFAULT NULL,
  `C1038` int(11) DEFAULT NULL,
  `C1039` int(11) DEFAULT NULL,
  `C1040` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_sem8`
--

INSERT INTO `exam_sem8` (`enroll`, `exam_id`, `C1036`, `C1037`, `C1038`, `C1039`, `C1040`) VALUES
('20103216', 't1', NULL, NULL, NULL, NULL, NULL),
('20103216', 't2', NULL, NULL, NULL, NULL, NULL),
('20103216', 't3', NULL, NULL, NULL, NULL, NULL),
('20103222', 't1', NULL, NULL, NULL, NULL, NULL),
('20103222', 't2', NULL, NULL, NULL, NULL, NULL),
('20103222', 't3', NULL, NULL, NULL, NULL, NULL),
('20103231', 't1', NULL, NULL, NULL, NULL, NULL),
('20103231', 't2', NULL, NULL, NULL, NULL, NULL),
('20103231', 't3', NULL, NULL, NULL, NULL, NULL),
('20103233', 't1', NULL, NULL, NULL, NULL, NULL),
('20103233', 't2', NULL, NULL, NULL, NULL, NULL),
('20103233', 't3', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `teacher_id` varchar(20) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `course_id` varchar(20) DEFAULT NULL,
  `dept_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`teacher_id`, `teacher_name`, `course_id`, `dept_name`) VALUES
('T1001', 'Dr. Himanshu Pandey', 'C1005', 'Physics'),
('T1002', 'Dr. Rahul Singh', 'C1003', 'Chemistry'),
('T1003', 'Dr. Shreya Garg', 'C1002', 'English'),
('T1004', 'Dr. Rakesh Mishra', 'C1002', 'English'),
('T1005', 'Dr. Devender Chauhan', 'C1004', 'Electronics'),
('T1006', 'Dr. Sanjay Singh', 'C1007', 'Electronics'),
('T1007', 'Dr. Aditya Sinha', 'C1006', 'Mathematics'),
('T1008', 'Dr. Anita Gautam', 'C1005', 'Physics'),
('T1009', 'Dr. Archana Bhardwaj', 'C1003', 'Chemistry'),
('T1010', 'Dr. Naveen Kumar', 'C1001', 'Computer Science'),
('T1011', 'Dr. Priyanshu Shukla', 'C1001', 'Computer Science'),
('T1012', 'Dr. Manish Joshi', 'C1004', 'Electronics'),
('T1013', 'Dr. Neetu Garg', 'C1006', 'Mathematics'),
('T1014', 'Dr. Gagan Verma', 'C1007', 'Electronics'),
('T1015', 'Dr. Abhishek Verma', 'C1008', 'Physics'),
('T1016', 'Dr. Kapila Negi', 'C1008', 'Physics'),
('T1017', 'Dr. Karan Gautam', 'C1009', 'Mathematics'),
('T1018', 'Dr. Amit Srivastav', 'C1009', 'Mathematics'),
('T1019', 'Dr. Geeta Dahiya', 'C1010', 'Computer Science'),
('T1020', 'Dr. Riya Sehgal', 'C1010', 'Computer Science'),
('T1021', 'Dr. Robert Blue', 'C1011', 'Computer Science'),
('T1022', 'Dr. Nicolas Smith', 'C1011', 'Computer Science'),
('T1023', 'Dr. Richard Brown', 'C1012', 'Computer Science'),
('T1024', 'Dr. David Warner', 'C1012', 'Computer Science'),
('T1025', 'Dr. Nehal Jain ', 'C1013', 'Economics'),
('T1026', 'Dr. Bhoomika Sharma', 'C1013', 'Economics'),
('T1027', 'Dr. Atul Bhardwaj', 'C1014', 'Electronics'),
('T1028', 'Dr. Sneha Upadhyay', 'C1014', 'Electronics'),
('T1029', 'Dr. Sumit Singh', 'C1015', 'Computer Science'),
('T1030', 'Dr. Anil Khurana', 'C1015', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `fee_details`
--

CREATE TABLE `fee_details` (
  `enroll` varchar(15) NOT NULL,
  `sem1` tinyint(1) DEFAULT 0,
  `sem2` tinyint(1) DEFAULT 0,
  `sem3` tinyint(1) DEFAULT 0,
  `sem4` tinyint(1) DEFAULT 0,
  `sem5` tinyint(1) DEFAULT 0,
  `sem6` tinyint(1) DEFAULT 0,
  `sem7` tinyint(1) DEFAULT 0,
  `sem8` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_details`
--

INSERT INTO `fee_details` (`enroll`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`) VALUES
('20103216', 1, 1, 0, 0, 0, 0, 0, 0),
('20103222', 1, 1, 1, 0, 0, 0, 0, 0),
('20103229', 1, 1, 1, 0, 0, 0, 0, 0),
('20103231', 1, 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_student`
--

CREATE TABLE `login_student` (
  `Enroll` varchar(15) NOT NULL,
  `Password` varchar(15) DEFAULT NULL,
  `stud_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_student`
--

INSERT INTO `login_student` (`Enroll`, `Password`, `stud_name`) VALUES
('20103216', 'sakshi', 'Sakshi Tiwari'),
('20103222', 'khushi', 'Khushi Rana'),
('20103229', 'yatin', 'Yatin Garg'),
('20103231', 'yash', 'Yash Mangla');

-- --------------------------------------------------------

--
-- Table structure for table `sem_courses`
--

CREATE TABLE `sem_courses` (
  `sem` int(1) NOT NULL,
  `course1` varchar(20) NOT NULL,
  `course2` varchar(20) NOT NULL,
  `course3` varchar(20) NOT NULL,
  `course4` varchar(20) NOT NULL,
  `course5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem_courses`
--

INSERT INTO `sem_courses` (`sem`, `course1`, `course2`, `course3`, `course4`, `course5`) VALUES
(1, 'C1001', 'C1002', 'C1003', 'C1004', 'C1005'),
(2, 'C1006', 'C1007', 'C1008', 'C1009', 'C1010'),
(3, 'C1011', 'C1012', 'C1013', 'C1014', 'C1015');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enroll` varchar(15) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `per_email` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_no` varchar(10) DEFAULT NULL,
  `sem` int(2) DEFAULT NULL,
  `batch` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enroll`, `name`, `dob`, `per_email`, `address`, `phone_no`, `sem`, `batch`) VALUES
('20103216', 'Sakshi Tiwari', '2002-02-14', 'tiwarisakshi1302@gmail.com', 'Hno-36, sector-62, greater Noida, UP', '8178076074', 2, 'B8'),
('20103222', 'Khushi Rana', '2002-02-01', 'khushirana@gmail.com', 'Hno-13, sector-62, greater Noida, UP', '8071076072', 3, 'B8'),
('20103229', 'Yatin Garg', '2002-01-01', 'yatingarg@gmail.com', 'Hno-2346, sector-12, Indirapuram, UP', '9645324672', 3, 'B8'),
('20103231', 'Yash Mangla', '2002-07-31', 'yashmangla202@gmail.com', 'Hno-67, sector-128, Greater Noida, UP', '9645627821', 3, 'B8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `exam_sem1`
--
ALTER TABLE `exam_sem1`
  ADD PRIMARY KEY (`enroll`,`exam_id`);

--
-- Indexes for table `exam_sem2`
--
ALTER TABLE `exam_sem2`
  ADD PRIMARY KEY (`enroll`,`exam_id`);

--
-- Indexes for table `exam_sem3`
--
ALTER TABLE `exam_sem3`
  ADD PRIMARY KEY (`enroll`,`exam_id`);

--
-- Indexes for table `exam_sem4`
--
ALTER TABLE `exam_sem4`
  ADD PRIMARY KEY (`enroll`,`exam_id`);

--
-- Indexes for table `exam_sem5`
--
ALTER TABLE `exam_sem5`
  ADD PRIMARY KEY (`enroll`,`exam_id`);

--
-- Indexes for table `exam_sem6`
--
ALTER TABLE `exam_sem6`
  ADD PRIMARY KEY (`enroll`,`exam_id`);

--
-- Indexes for table `exam_sem7`
--
ALTER TABLE `exam_sem7`
  ADD PRIMARY KEY (`enroll`,`exam_id`);

--
-- Indexes for table `exam_sem8`
--
ALTER TABLE `exam_sem8`
  ADD PRIMARY KEY (`enroll`,`exam_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `fee_details`
--
ALTER TABLE `fee_details`
  ADD PRIMARY KEY (`enroll`);

--
-- Indexes for table `login_student`
--
ALTER TABLE `login_student`
  ADD PRIMARY KEY (`Enroll`);

--
-- Indexes for table `sem_courses`
--
ALTER TABLE `sem_courses`
  ADD PRIMARY KEY (`sem`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enroll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
