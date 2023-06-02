-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 10:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshoptool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `passcode` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `passcode`, `name`) VALUES
(1, 'ravimallah@rait.ac.in', 'ravi', 'Ravi Mallah'),
(2, 'firstlast@rait.ac.in', 'admin', 'First Last');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `user_name`, `passcode`, `name`) VALUES
(3, 'ravi.mallah@rait.ac.in', 'ravi', 'Ravi Mallah'),
(4, 'rohan.rathod@rait.ac.in', 'rohan', 'Rohan Rathod'),
(7, 'first.last@rait.ac.in', 'faculty', 'First Last');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `feedback1` varchar(50) NOT NULL,
  `feedback2` varchar(50) NOT NULL,
  `contribution1` varchar(20) NOT NULL,
  `contribution2` varchar(20) NOT NULL,
  `contribution3` varchar(20) NOT NULL,
  `contribution4` varchar(20) NOT NULL,
  `contribution5` varchar(20) NOT NULL,
  `contribution6` varchar(20) NOT NULL,
  `contribution7` varchar(20) NOT NULL,
  `contribution8` varchar(20) NOT NULL,
  `contribution9` varchar(20) NOT NULL,
  `contribution10` varchar(20) NOT NULL,
  `contribution11` varchar(20) NOT NULL,
  `contribution12` varchar(20) NOT NULL,
  `feedback3` varchar(500) NOT NULL,
  `feedback4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `student_id`, `schedule_id`, `feedback1`, `feedback2`, `contribution1`, `contribution2`, `contribution3`, `contribution4`, `contribution5`, `contribution6`, `contribution7`, `contribution8`, `contribution9`, `contribution10`, `contribution11`, `contribution12`, `feedback3`, `feedback4`) VALUES
(1, 3, 19, 'Good', 'No', 'Strong', 'Moderate', 'Low', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Low', 'Moderate', 'Strong', 'Strong', 'Very useful', 'No'),
(3, 3, 18, 'Good', 'Yes', 'Strong', 'Moderate', 'Low', 'Low', 'Low', 'Low', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'done', 'very good'),
(4, 3, 23, 'Could have been better', 'No', 'Strong', 'Strong', 'Strong', 'Strong', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'Low', 'Low', 'Low', 'Low', 'Valuable', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_questions`
--

CREATE TABLE `feedback_questions` (
  `feedback` varchar(15) NOT NULL,
  `question` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_questions`
--

INSERT INTO `feedback_questions` (`feedback`, `question`) VALUES
('feedback1', 'How was your experience?'),
('feedback2', 'Was it helpful?'),
('contribution1', 'Whether the concepts are cleared and will help in course study? '),
('contribution2', 'Are you able to analyze the problem in this domain?'),
('contribution3', 'Did you get knowledge of modern tools and technologies?'),
('contribution4', 'Whether your  interest is developed in this domain?'),
('contribution5', 'Are you able to relate the content learned with society and environmental context?'),
('contribution6', 'Does this knowledge gained help to understand the ethical responsibilities?'),
('contribution7', 'Does this platform helps you for personal growth or team work capabilities? '),
('contribution8', 'Are you able to apply this knowledge for project development and management?'),
('contribution9', 'Does this knowledge helps you for higher education or entrepreneurship?'),
('contribution10', 'Does the knowledge gained help you build competency towards problem solving?'),
('contribution11', 'Are you able to appreciate and use the knowledge of current technologies, skills and tools?'),
('contribution12', 'Will the knowledge gained help to match current industry requirements?'),
('feedback3', 'What aspects of this event were most useful or valuable?'),
('feedback4', 'Any other Suggestions?');

-- --------------------------------------------------------

--
-- Table structure for table `gap_sheet`
--

CREATE TABLE `gap_sheet` (
  `gap_id` int(11) NOT NULL,
  `schedule_id` int(50) NOT NULL,
  `event_type` varchar(20) NOT NULL,
  `controlling_subject` varchar(50) NOT NULL,
  `gap_identified` varchar(50) NOT NULL,
  `resource_person` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `duration` int(12) NOT NULL,
  `organised_by` varchar(50) NOT NULL,
  `internal_participants` varchar(50) NOT NULL,
  `total_students` int(11) NOT NULL,
  `per_student` int(11) NOT NULL,
  `external_participants` int(11) NOT NULL,
  `relevance_pos` varchar(50) NOT NULL,
  `relevance_psos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gap_sheet`
--

INSERT INTO `gap_sheet` (`gap_id`, `schedule_id`, `event_type`, `controlling_subject`, `gap_identified`, `resource_person`, `designation`, `date`, `duration`, `organised_by`, `internal_participants`, `total_students`, `per_student`, `external_participants`, `relevance_pos`, `relevance_psos`) VALUES
(1, 0, '', '', '', '', '', '0000-00-00', 0, '', '', 0, 0, 0, '', ''),
(2, 11, '', '', '', '', '', '0000-00-00', 0, '', '', 0, 0, 0, '', ''),
(3, 15, '', '', '', '', '', '0000-00-00', 0, '', '', 0, 0, 0, '', ''),
(4, 9, '', '', '', '', '', '0000-00-00', 0, '', '', 0, 0, 0, '', ''),
(5, 10, '', '', '', '', '', '0000-00-00', 0, '', '', 0, 0, 0, '', ''),
(6, 14, '', '', '', '', '', '0000-00-00', 0, '', '', 0, 0, 0, '', ''),
(7, 17, '', '', '', '', '', '0000-00-00', 0, '', '', 0, 0, 0, '', ''),
(8, 21, '', '', 'Good', '', '', '2021-07-25', 3, '', 'S.E, T.E', 300, 40, 12, 'N/A', 'N/A'),
(9, 22, 'FDP', 'Web Design', 'Good', 'Mr. Nilesh Singh', 'Assistant Professor', '2021-07-25', 2, 'SUC', 'F.E, S.E, T.E', 120, 40, 0, 'N/A', 'N/A'),
(10, 23, 'Hands-on Session', 'DTSP', 'Average', 'Mr. Prateek Singh', 'Assistant Professor', '2021-07-30', 3, 'SUC', 'S.E', 120, 40, 10, 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `faculty_username` varchar(100) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `schedule_type` varchar(100) NOT NULL,
  `class` varchar(50) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `no_of_days` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `topic` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `speaker_name` varchar(150) NOT NULL,
  `speaker_type` varchar(20) NOT NULL,
  `speaker_designation` varchar(150) NOT NULL,
  `organized_by` varchar(150) NOT NULL,
  `budget` int(11) NOT NULL,
  `upload_done` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `faculty_username`, `faculty_name`, `schedule_type`, `class`, `sem`, `date`, `no_of_days`, `time`, `topic`, `subject`, `speaker_name`, `speaker_type`, `speaker_designation`, `organized_by`, `budget`, `upload_done`) VALUES
(7, 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Expert Talks', 'T.E', '4, 5', '2021-02-24', '1', '13:00:00', 'Data Management & Data Governance', 'Data Encryption and Decryption', 'Ms. Nidhi Shetty', '', 'Vice-President, BNP Paribas', 'IETE', 0, 1),
(8, 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'workshop', 'B.E', '7, 8', '2021-02-24', '3', '17:00:00', 'Visual Cryptography: An Introduction', 'Cryptography', 'Dr. Deepika M P', '', 'Associate Professor, Kerala Technological University', 'SDG', 0, 1),
(9, 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Hands-on Session', 'F.E', '2', '2021-02-27', '5', '15:00:00', 'History about Internet', 'SPA', 'Mr. XYZ', '', 'Assistant Professor, XYZ University', 'DAS', 0, 1),
(10, 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Expert Talks', 'S.E', '3, 4', '2021-02-18', '2', '19:10:00', 'Evolution of Antenna and it\'s types', 'ARWP', 'Ganesh Ingale', '', 'Assistant Professor, Rait College', 'IDK', 0, 1),
(11, 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Hands-on Session', 'B.E', '8', '2021-02-26', '2', '18:00:00', 'Histogram Processing', 'IPMV', 'Mr. Visual Expert', '', 'HOD of Computer Department, Visual University', 'HCIK', 1000, 1),
(12, 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Expert Talks', 'S.E', '4', '2021-02-28', '1', '16:00:00', 'Bootstrap Introduction', 'HTML & CSS', 'Mr. X-men', '', 'Head of X-men Department, X-men University', 'X-men', 2000, 1),
(13, 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Expert Talks', 'S.E', '3, 4', '2021-03-11', '1', '13:00:00', 'XYZ', 'XYZ Subject', 'MR. xyz', '', 'XYZ university', 'IDK', 0, 1),
(14, 'first.last@rait.ac.in', 'First Last', 'Expert Talks', 'T.E', '5', '2021-03-04', '1', '13:00:00', 'avc', 'abc', 'abc', '', 'abc', 'abc', 0, 1),
(15, 'first.last@rait.ac.in', 'First Last', 'Expert Talks', '', '', '2021-07-09', '2', '13:16:00', 'Blockchain', 'Cryptography', 'Mr. Ravi Mallah', '', 'Vice-President, BNP Paribas', 'HCIK', 0, 1),
(16, 'first.last@rait.ac.in', 'First Last', 'Expert Talks', '', '', '2021-07-10', '4', '13:39:00', 'ABCD', 'XYZ', 'Ravi Mallah', '', 'Professor', 'EXTC', 4545, NULL),
(17, 'first.last@rait.ac.in', 'First Last', 'Expert Talks', '', '', '2021-07-16', '2', '14:28:00', 'Basic of DBMS', 'DMBS', 'Mr. nobody', '', 'Assistant Professor', 'SDG', 0, 1),
(18, 'first.last@rait.ac.in', 'First Last', 'Hands-on Session', '', '', '2021-07-25', '4', '02:21:00', 'Bitcoin', 'Cryptography', 'Ms. Computer', '', 'Assistant Professor', 'IEEE', 1212, NULL),
(19, 'first.last@rait.ac.in', 'First Last', 'Hands-on Session', '', '', '2021-07-31', '2', '23:16:00', 'What is big Data ?', 'BDA', 'Mr. Rohan Rathod', '', 'Assistant Professor', 'RAIT', 0, NULL),
(20, 'first.last@rait.ac.in', 'First Last', 'Workshop', '', '', '2021-07-24', '3', '05:43:00', 'Mobile Technology', 'AWRP', 'Ms. Sneeha Singh', '', 'Coder of Day', 'JDK', 0, NULL),
(21, 'first.last@rait.ac.in', 'First Last', 'Expert Talks', 'S.E, T.E', ', 3, 4, 5', '2021-07-25', '3', '12:43:00', 'Sample Topic', 'Sample Subject', 'Sample Speaker', 'External', 'Assistant Professor', 'SUC', 1234, 1),
(22, 'first.last@rait.ac.in', 'First Last', 'FDP', 'F.E, S.E, T.E', '2, 4, 6', '2021-07-25', '2', '15:00:00', 'Web Development', 'Web Design', 'Mr. Nilesh Singh', 'Internal', 'Assistant Professor', 'SUC', 1200, 1),
(23, 'first.last@rait.ac.in', 'First Last', 'Hands-on Session', 'S.E', '3, 4', '2021-07-30', '3', '17:01:00', '5G technology', 'DTSP', 'Mr. Prateek Singh', 'Internal', 'Assistant Professor', 'SUC', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `user_name`, `passcode`, `name`) VALUES
(1, 'ravi', 'ravi', 'Ravi Mallah'),
(2, 'rohan', 'rohan', 'Rohan Rathod'),
(3, 'first.last.rt18@rait.ac.in', 'student', 'First Last');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `student_reg_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `feedback_done` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`student_reg_id`, `student_id`, `schedule_id`, `feedback_done`) VALUES
(1, 3, 16, NULL),
(3, 3, 17, 1),
(10, 3, 18, 1),
(20, 3, 19, 1),
(27, 3, 22, NULL),
(28, 3, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `upload_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `faculty_username` varchar(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `attendance` varchar(50) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `hod` varchar(50) NOT NULL,
  `principal` varchar(50) NOT NULL,
  `gap` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `relevance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`upload_id`, `faculty_id`, `faculty_username`, `faculty_name`, `schedule_id`, `topic`, `attendance`, `feedback`, `hod`, `principal`, `gap`, `photo`, `budget`, `relevance`) VALUES
(4, 7, 'first.last@rait.ac.in', 'First Last', 7, 'Data Management & Data Governance', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf'),
(5, 3, 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 8, 'Visual Cryptography: An Introduction', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf'),
(6, 7, 'first.last@rait.ac.in', 'First Last', 12, 'Bootstrap Introduction', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf'),
(7, 7, 'first.last@rait.ac.in', 'First Last', 17, 'Basic of DBMS', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape'),
(8, 7, 'first.last@rait.ac.in', 'First Last', 0, '', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(9, 7, 'first.last@rait.ac.in', 'First Last', 11, 'Histogram Processing', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(10, 7, 'first.last@rait.ac.in', 'First Last', 15, 'Blockchain', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(11, 7, 'first.last@rait.ac.in', 'First Last', 9, 'History about Internet', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(12, 7, 'first.last@rait.ac.in', 'First Last', 10, 'Evolution of Antenna and it\'s types', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship - Copy.pdf', 'TCS iON Scholarship - Copy (2).pdf', 'TCS iON Scholarship - Copy (3).pdf', '1', 'TCS iON Scholarship - Copy (4).pdf', 'TCS iON Scholarship - Copy (5).pdf', 'TCS iON Scholarship - Copy (6).pdf'),
(13, 7, 'first.last@rait.ac.in', 'First Last', 14, 'avc', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship - Copy.pdf', 'TCS iON Scholarship - Copy (2).pdf', 'TCS iON Scholarship - Copy (3).pdf', '1', 'TCS iON Scholarship - Copy (4).pdf', 'TCS iON Scholarship - Copy (5).pdf', 'TCS iON Scholarship - Copy (6).pdf'),
(14, 7, 'first.last@rait.ac.in', 'First Last', 17, 'Basic of DBMS', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship - Copy.pdf', 'TCS iON Scholarship - Copy (8).pdf', 'TCS iON Scholarship - Copy (7).pdf', '1', 'TCS iON Scholarship - Copy (6).pdf', 'TCS iON Scholarship - Copy (5).pdf', 'TCS iON Scholarship - Copy (4).pdf'),
(15, 7, 'first.last@rait.ac.in', 'First Last', 21, 'Expert Talks', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf', '1', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf'),
(16, 7, 'first.last@rait.ac.in', 'First Last', 21, 'Expert Talks', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(17, 7, 'first.last@rait.ac.in', 'First Last', 21, 'Expert Talks', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(18, 7, 'first.last@rait.ac.in', 'First Last', 21, 'Sample Topic', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(19, 7, 'first.last@rait.ac.in', 'First Last', 22, 'Web Development', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(20, 7, 'first.last@rait.ac.in', 'First Last', 23, '5G technology', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `gap_sheet`
--
ALTER TABLE `gap_sheet`
  ADD PRIMARY KEY (`gap_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`student_reg_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`upload_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gap_sheet`
--
ALTER TABLE `gap_sheet`
  MODIFY `gap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `student_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
