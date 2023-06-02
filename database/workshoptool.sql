-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 06:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.9

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
  `passcode` text NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `passcode`, `name`) VALUES
(1, 'ravimallah@rait.ac.in', '83577e7cd64e45ce8046d131162d846b043e19df', 'Ravi Mallah'),
(2, 'firstlast@rait.ac.in', 'c7f1c42149a2e9e52bc572da05f8eb41cd78f6c3', 'First Last');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `sdrn` varchar(8) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `passcode` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `ph_no` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `otp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `sdrn`, `first_name`, `middle_name`, `last_name`, `dob`, `user_name`, `passcode`, `name`, `department`, `qualification`, `designation`, `email_id`, `doj`, `ph_no`, `address`, `otp`) VALUES
(3, '', '', '', '', '0000-00-00', 'ravi.mallah@rait.ac.in', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', 'Ravi Mallah', '', '', '', '', '0000-00-00', 0, '', ''),
(4, '', '', '', '', '0000-00-00', 'rohan.rathod@rait.ac.in', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', 'Rohan Rathod', '', '', '', '', '0000-00-00', 0, '', ''),
(7, '001', '', '', '', '0000-00-00', 'first.last@rait.ac.in', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', 'First Middle Last', 'EXTC', 'Pursuing Ph.D', 'Associate Professor', 'example@rait.ac.in', '0000-00-00', 1234567892, ' ', ''),
(8, '007', 'test', '', '', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '', '', '', '@', '0000-00-00', 1234567890, '-', 'hncqx5d61o'),
(9, '150', 'Leena', '', 'Ragha', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'Computer Engineering', '', 'HOD', '@', '0000-00-00', 1234567890, '', ''),
(10, '197', 'Snehal', '', 'Gaikwad', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', '', '', '@', '0000-00-00', 1234567890, '-', ''),
(11, '248', 'Arpita', 'Goutam', 'Palchoudhury', '1967-06-21', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'Computer Engineering', 'Ph.D  ( English Literature)', ' Associate Professor', '@', '2001-09-10', 1234567890, '', ''),
(12, '295', 'Vanita', '', 'Mane', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '', '', '', '@', '0000-00-00', 1234567890, '-', ''),
(13, '330', 'Namita', 'Damodar', 'Pulgam', '1983-09-10', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E. Computer', 'A.P.', '@', '2005-12-23', 1234567890, '-', 'bb9cad60'),
(14, '374', 'Aditi', 'Sunil', 'Chhabria', '1984-07-23', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E. Computers', 'Assistant Professor', '@', '2006-07-17', 1234567890, '-', '362394c6'),
(15, '377', 'Vaishali', 'Satish', 'Jadhav', '1971-09-17', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Pursuing Ph.D.', 'Assistant Professor', '@', '2007-07-13', 1234567890, '-', ''),
(16, '381', 'Narendrakumar ', 'Ramchandra', 'Dasre', '1980-08-01', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Ph. D.', ' Professor', '@', '2007-07-23', 1234567890, '-', '3cde8181'),
(17, '383', 'Shital', 'Sunil', 'Mali', '1979-05-16', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMPS', 'Ph,D, pursing', 'Associate Professor', '@', '2007-07-09', 1234567890, '-', ''),
(18, '393', 'Dr. Amarsinh', 'V.', 'Vidhate', '1974-05-21', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Ph.D.(Computer Engineering), M.Tech. (Computer Eng', 'Professor', '@', '2007-07-17', 1234567890, '-', 'ZxpgBY'),
(19, '396', 'Puja', '', 'Padiya', '1979-09-09', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Ph.D. Pursuing', 'Assistant Professor', '@', '2007-01-08', 1234567890, '-', ''),
(20, '407', 'Rajshree', '', 'Shedge', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '', '', '', '@', '0000-00-00', 1234567890, '-', ''),
(21, '411', 'TUSHAR ', 'HINDURAO', 'GHORPADE ', '1979-02-03', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME in Computer Engineering', 'Assistant Professor', '@', '2008-01-18', 1234567890, '-', 'ec71de5a'),
(22, '419', 'Sheetal', '', 'Ahir', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '', '', '', '@', '0000-00-00', 1234567890, '-', '2MYHy6'),
(23, '482', 'Smita', '', 'Patil-Bhoir', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', '', '', '@', '0000-00-00', 1234567890, '-', 'JQ76CN'),
(24, '526', 'Vilas', 'Janardan', 'Rane', '1986-11-11', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Sc.', 'Assistant Professor', '@', '2011-02-03', 1234567890, '-', ''),
(25, '528', 'Swarupa', '', 'Bodhe', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '', '', '', '@', '0000-00-00', 1234567890, '-', ''),
(26, '536', 'nilam', 'sangram', 'patil', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME electronics', 'Assistant professor', '@', '0000-00-00', 1234567890, '-', ''),
(27, '566', 'Pramod', 'Jagannath', 'Bide', '1989-01-25', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E', 'AP', '@', '2012-08-16', 1234567890, '-', 'NULL'),
(28, '570', 'ASHWINI ', 'ANIL', 'RAORANE', '1990-04-23', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME (Electronics)', 'Lecturer', '@', '2012-08-16', 1234567890, '-', ''),
(29, '576', 'Smita', 'dinesh', 'Bharne', '1982-06-14', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech', 'Assistant Professor', '@', '2012-09-13', 1234567890, '-', 'a22bc9ae'),
(30, '583', 'Snehal', '', 'Mumbailkar', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '', '', '', '@', '0000-00-00', 1234567890, '-', 'RKfwZg'),
(31, '586', 'Vijaylaxmi', 'S', 'Bittal', '1984-07-31', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech', 'assistant professor', '@', '2013-01-10', 1234567890, '-', ''),
(32, '587', 'Trupti', 'prashant', 'Patil', '1984-07-08', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME (copmuter)', 'Assistant Professor', '@', '2013-01-07', 1234567890, '-', ''),
(33, '593', 'Prathmesh', 'Narayan', 'Gunjgur', '1988-10-18', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E Computer Engineering', 'Assistant Professor', '@', '2013-01-24', 1234567890, '-', ''),
(34, '601', 'Kriti', '', 'Karnam', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'B.E.,Mtech', 'Assistant Professor', '@', '0000-00-00', 1234567890, '-', 'e7fa430d'),
(35, '603', 'Harsha', '', 'Saxena', '1990-11-06', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'mtech', 'assistant proffesor', '@', '2013-07-01', 1234567890, '-', '2ff22efa'),
(36, '609', 'Nazia', '', 'S', '1982-01-02', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech', 'Asst Professor', '@', '2013-07-08', 1234567890, '-', ''),
(37, '615', 'Shilpa', 'Tushar', 'Bhangale', '1976-07-27', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'CE', 'MPHIL- SET', 'assistant professor', '@', '2013-07-15', 1234567890, '-', ''),
(38, '618', 'Rubi', '', 'Mandal', '1986-01-19', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Mtech', 'Lecturer', '@', '2013-07-25', 1234567890, '-', ''),
(39, '627', 'Apurva', 'Swapnil', 'Shinde', '1991-12-18', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E. (Computers)', 'Assistant Professor', '@', '2013-08-13', 1234567890, '-', '8023ed41'),
(40, '631', 'Savita', 'Kiran', 'Sawant', '1983-12-15', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech in Computer Engg', 'Assistant Professor', '@', '2016-01-02', 1234567890, '-', 'd2367116'),
(41, '638', 'Ekta', '', 'Sarda', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'Computer Engineering', 'M.E Computer', 'Assistant Professor', '@', '0000-00-00', 1234567890, '', ''),
(42, '650', 'Bhavana', 'Bhimsen', 'Turorikar', '1983-07-03', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME(Computer Networks)', 'Assistant Professor', '@', '2014-08-07', 1234567890, '-', '694a090f'),
(43, '654', 'MANSI', 'BHUSHAN', 'JAWALE', '1991-10-31', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.A.', 'Lecturer', '@', '2014-06-15', 1234567890, '-', ''),
(44, '657', 'KHUSHBOO', 'SHIVKUMAR', 'PICHHODE', '1989-12-03', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMPS', 'M.E', 'Assistant Professor', '@', '2014-07-16', 1234567890, '-', ''),
(45, '663', 'Shilpa', 'Vilas', 'Mahagaonkar', '1984-05-24', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME', 'Assistant Professor', '@', '2014-07-16', 1234567890, '-', ''),
(46, '672', 'Pallavi', 'H.', 'Chitte', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.Computer Engineering', 'Assistant Professor', '@', '0000-00-00', 1234567890, '-', '41fd65ae'),
(47, '677', 'kamlesh', 'lekhraj', 'nenwani', '1987-04-04', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'CE', 'M.E.', 'Lecturer', '@', '2014-08-01', 1234567890, '-', ''),
(48, '679', 'Dhanashri', 'Ashok', 'Bhosale', '1989-03-10', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME', 'lecturer', '@', '2013-02-09', 1234567890, '-', '8aa5381f'),
(49, '687', 'Sumithra', '', 'T.V', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.TECH', '', '@', '0000-00-00', 1234567890, '-', ''),
(50, '693', 'vishvas', 'hasuram', 'patil', '1986-01-15', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.sc.', 'Lecturer', '@', '2015-07-01', 1234567890, '-', '703141b6'),
(51, '696', 'varsha', 'ramesh', 'patil', '0091-04-29', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.Computer Engineering', 'Assistant Professor', '@', '2015-06-17', 1234567890, '-', ''),
(52, '699', 'Preet Chandan', '', 'Kaur', '1989-02-09', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.Computer Engineering', 'Assistant professor', '@', '2015-07-15', 1234567890, '-', 'CZtPQs'),
(53, '700', 'Pranali', 'Mohan', 'Yadav', '1990-12-18', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'CE', 'BE, ME (persuing)', 'Teaching Assistant', '@', '2015-06-15', 1234567890, '-', ''),
(54, '711', 'PRAMOD ', 'HARIBHAU', 'KACHARE', '1991-04-24', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech.', 'Assistant Professor', '@', '2015-07-07', 1234567890, '-', '536de3d5'),
(55, '712', 'DIAMBAR', 'VITTHALBUWA', 'PURI', '1990-09-29', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech.', 'Assistant Professor', '@', '2015-07-07', 1234567890, '-', '4241a33d'),
(56, '717', 'SWARALI', 'PRASHANT', 'SHETH', '1985-01-24', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech.', 'Lecturer', '@', '2015-07-23', 1234567890, '-', 'a862f9af'),
(57, '719', 'CHANDRAKANT', 'JAGANNATH', 'GAIKWAD', '1972-08-02', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Ph.D.', 'Professor', '@', '2015-08-10', 1234567890, '-', '36ed2611'),
(58, '721', 'Nivedita', 'Elan', 'Shekhar', '1992-04-28', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMPS', 'M.E.Computer Engineering', 'Assitance Professor', '@', '2015-08-11', 1234567890, '-', ''),
(59, '726', 'Krupi', 'Pranav', 'Saraf', '1989-07-19', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMPS', 'ME', 'Assistant Professor', '@', '2016-01-06', 1234567890, '-', ''),
(60, '728', 'saguna', 'kailas', 'ingle', '1983-08-05', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.(IT)', 'Assistant Professor', '@', '2016-12-03', 1234567890, '-', ''),
(61, '752', 'Shilpa', 'Gulabrao', 'Kolte', '1977-06-17', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.', 'A.P.', '@', '2016-06-22', 1234567890, '-', '0bf3ade3'),
(62, '765', 'Pornima', 'Kailas', 'Gidhe', '1993-04-06', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.Computer Engineering', 'Assistant professor', '@', '2016-07-12', 1234567890, '-', ''),
(63, '767', 'Bijal', 'Chandubhai', 'Panchal', '1989-12-11', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E', 'Assistant Professor', '@', '2016-07-12', 1234567890, '-', '3acb890f'),
(64, '769', 'SAYALI', 'ASHOK', 'SAPKAL', '1989-05-08', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E', 'Lecturer', '@', '2016-07-13', 1234567890, '-', ''),
(65, '770', 'Siddhi', 'Nikhil', 'Kadu', '1989-12-01', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E', 'Assistant Professor', '@', '2016-07-12', 1234567890, '-', '5b6a61d0'),
(66, '772', 'SAMEER', 'SHAMRAO', 'CHIKANE', '1993-09-03', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMPS', 'ME', 'ASSISTANT PROFESSOR', '@', '2016-07-13', 1234567890, '-', ''),
(67, '785', 'Snehal', 'Shashikant', 'Bhoir', '1992-08-15', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.Computer Engineering', 'Assistant Professor', '@', '2016-07-21', 1234567890, '-', ''),
(68, '786', 'JYOTI', 'VINAYAK', 'DEOGIRIKAR', '1994-01-14', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME', 'Assistant professor', '@', '2016-08-01', 1234567890, '-', ''),
(69, '787', 'SHRADDHA', 'ANANT', 'NARHARI', '1989-07-31', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME', 'Assitant Professor', '@', '2017-12-15', 1234567890, '-', ''),
(70, '800', 'Prof. Prashant', 's', 'Lokhande', '1974-06-16', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME IT', 'Associate Professor', '@', '2017-01-16', 1234567890, '-', ''),
(71, '802', 'PAYAL', 'FATEHLAL', 'SANCHETI', '1994-04-02', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'B.E', 'LAB INSTRUCTOR', '@', '2017-01-23', 1234567890, '-', ''),
(72, '803', 'Snehal', 'Suresh', 'Nikalje', '1992-10-27', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'BE', 'Lab Instructor', '@', '2017-02-01', 1234567890, '-', ''),
(73, '804', 'roshni', 'satish', 'singh', '1993-06-18', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'BE', 'lab instructor', '@', '2017-02-01', 1234567890, '-', ''),
(74, '806', 'Sathya', ' ', 'Arumugam', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Ph.D', 'Assistant Professor', '@', '0000-00-00', 1234567890, '-', ''),
(75, '807', 'vishwanath', 'subhaschandra', 'chikkareddi', '1988-02-24', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.TECH( COMPUTER SCIENCE AND ENGG), PhD(pursuing)', 'Assistant Professor', '@', '0000-00-00', 1234567890, '-', ''),
(76, '811', 'Rashmi', 'Amol', 'Dhumal', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.Computer Engineering', 'Associate Professor', '@', '0000-00-00', 1234567890, '-', ''),
(77, '812', 'Tabassum', 'Altaf', 'Maktum', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.Computer Engineering', 'Assistant Professor', '@', '0000-00-00', 1234567890, '-', ''),
(78, '817', 'PRACHI', 'DEEPAK', 'JUNWALE', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.TECH( COMPUTER SCIENCE AND ENGG)', 'ASSISTANT PROFESSOR', '@', '0000-00-00', 1234567890, '-', ''),
(79, '821', 'NEERAJ', 'KUMAR', 'SHARMA', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'PhD', 'PROFESSOR', '@', '0000-00-00', 1234567890, '-', ''),
(80, '826', 'Ida', 'Hector', 'Lionel', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech(Information Technology)', 'Assistant Professor', '@', '0000-00-00', 1234567890, '-', 'NULL'),
(81, '827', 'PRIYANKA', 'RAMRAO', 'GUTTE', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech(Control system)', 'Asst. Professor', '@', '0000-00-00', 1234567890, '-', ''),
(82, '829', 'Himani', 'Mohan', 'Jawale', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.TECH( COMPUTER ENGG)', 'Assistant Professor', '@', '0000-00-00', 1234567890, '-', ''),
(83, '840', 'Dr. Dhiraj', 'B', 'Magare', '1981-02-02', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Doctor', 'Associate Professor', '@', '2017-11-20', 1234567890, '-', ''),
(84, '842', 'Suchita', 'Suresh', 'Dange', '1993-04-26', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.TECH( COMPUTER ENGG)', 'Assistant Professor', '@', '2017-12-04', 1234567890, '-', ''),
(85, '848', 'Rohini', 'Lakhanlal', 'Damahe', '1988-02-03', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'ME(Computer Engineering)', 'Assistant Professor', '@', '2017-11-12', 1234567890, '-', ''),
(86, '858', 'SHITAL', 'HARIBHAU', 'GADE', '1983-06-06', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.E.Computer Engineering', 'ASSISTANT PROFESSOR', '@', '2018-01-02', 1234567890, '-', ''),
(87, '874', 'AMIT', 'KAILASH', 'BARVE', '1985-08-26', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Phd', 'Assiciate Professor', '@', '2018-02-16', 1234567890, '-', ''),
(88, '876', 'BHARTI', 'VISHANDAS', 'NATHWANI', '1984-07-27', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMPS', 'Ph.D.', 'Assistant Professor', '@', '2018-02-20', 1234567890, '-', ''),
(89, '878', 'Bharti', 'A', 'Joshi', '1970-04-25', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMPS', 'Phd', 'Professor', '@', '2018-03-01', 1234567890, '-', 'bHhwYV'),
(90, '888', 'Dr Dhananjay', 'Manohar', 'Dakhane', '1972-04-06', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'PhD', 'Professor', '@', '1972-04-06', 1234567890, '-', 'hDvgGJ'),
(91, '892', 'Dr. Yogita ', 'Dhanraj', 'Mistry', '1979-07-26', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Ph. D.', 'Associate Professor', '@', '2018-12-17', 1234567890, '-', 'euFpRr'),
(92, '894', 'B', 'J', 'Gorad', '1988-04-04', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'M.Tech CST,  PhD Pursuing', 'Assistant Professor', '@', '2018-12-24', 1234567890, '-', ''),
(93, '896', 'SANGITA', 'SANTOSH', 'CHAUDHARI', '1977-06-10', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'PhD', 'professor', '@', '2019-01-01', 1234567890, '-', '4GoHWM'),
(94, '897', 'R', 'D', 'Suryawanshi', '1986-05-12', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'Msc, Net,Phd Persuing', 'Assistant Professor', '@', '2019-01-01', 1234567890, '-', 'D7qHRm'),
(95, '898', 'vaibhav', 'Eknath', 'Narawade', '1977-08-08', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'COMP', 'PhD Computer Enggineering', 'Professor', '@', '2019-01-03', 1234567890, '-', 'uWzgp2'),
(96, '999', 'a', 'a', 'a', '0000-00-00', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'INSTR', 'a', 'a', '@', '0000-00-00', 1234567890, '-', 'dd867ff4'),
(97, 'abc', 'sf', 'f', 'h', '2016-01-07', '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', 'CE', 'ME pursuing', 'ap', '@', '2016-01-12', 1234567890, '-', '1225dbb4');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `student_roll_no` varchar(11) NOT NULL,
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

INSERT INTO `feedback` (`feedback_id`, `student_roll_no`, `schedule_id`, `feedback1`, `feedback2`, `contribution1`, `contribution2`, `contribution3`, `contribution4`, `contribution5`, `contribution6`, `contribution7`, `contribution8`, `contribution9`, `contribution10`, `contribution11`, `contribution12`, `feedback3`, `feedback4`) VALUES
(1, '3', 19, 'Good', 'No', 'Strong', 'Moderate', 'Low', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Low', 'Moderate', 'Strong', 'Strong', 'Very useful', 'No'),
(3, '3', 18, 'Good', 'Yes', 'Strong', 'Moderate', 'Low', 'Low', 'Low', 'Low', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'done', 'very good'),
(4, '3', 23, 'Could have been better', 'No', 'Strong', 'Strong', 'Strong', 'Strong', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'Low', 'Low', 'Low', 'Low', 'Valuable', 'no'),
(5, '18ET7051', 22, 'Good', 'Yes', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'g', 'df'),
(6, '18ET7051', 22, 'Good', 'Yes', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'g', 'df'),
(7, '18ET7051', 27, 'Good', 'No', 'Strong', 'Strong', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'fdsdf', 'df'),
(8, '18ET1125', 27, 'Good', 'No', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'Strong', 'Moderate', 'Strong', 'Strong', 'Moderate', 'Moderate', 'Moderate', 'Moderate', 'No', 'NO'),
(9, '18ET1125', 28, 'Good', 'Yes', 'Low', 'Low', 'Strong', 'Moderate', 'Low', 'Strong', 'N/A', 'Moderate', 'Low', 'Moderate', 'Moderate', 'Moderate', 'Yes', 'Good'),
(10, '18ET1125', 28, 'Good', 'Yes', 'Low', 'Low', 'Strong', 'Moderate', 'Low', 'Strong', 'N/A', 'Moderate', 'Low', 'Moderate', 'Moderate', 'Moderate', 'Yes', 'Good'),
(11, '18ET1125', 29, 'Could have been better', 'Yes', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'df', 'df'),
(12, '18ET1125', 29, 'Could have been better', 'Yes', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'Strong', 'df', 'df');

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
(10, 23, 'Hands-on Session', 'DTSP', 'Average', 'Mr. Prateek Singh', 'Assistant Professor', '2021-07-30', 3, 'SUC', 'S.E', 120, 40, 10, 'N/A', 'N/A'),
(11, 29, 'Expert Talks', 'MCS', 'Good', 'Mr. ABC', 'Assistant Professor', '2021-08-14', 2, 'DAS', 'F.E, S.E', 0, 0, 0, '', ''),
(12, 29, 'Expert Talks', 'MCS', 'Good', 'Mr. ABC', 'Assistant Professor', '2021-08-14', 2, 'DAS', 'F.E, S.E', 0, 0, 0, '', ''),
(13, 32, 'Expert Talks', 'Sample Subject 2', 'Good', 'Mr. NIlesh', 'HOD', '2021-08-28', 3, 'IETE', 'T.E', 0, 0, 0, '', ''),
(14, 30, 'Hands-on Session', 'CS', 'Good', 'Mr. Maqrues Brownlee', 'YouTuber', '2021-08-28', 2, 'DTSP', 'S.E', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `organized`
--

CREATE TABLE `organized` (
  `organized_id` int(11) NOT NULL,
  `faculty_sdrn` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `type_of_organize` varchar(300) NOT NULL,
  `type_of_activity` varchar(300) NOT NULL,
  `class` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `no_of_days` varchar(50) NOT NULL,
  `upload_done` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organized`
--

INSERT INTO `organized` (`organized_id`, `faculty_sdrn`, `faculty_name`, `type_of_organize`, `type_of_activity`, `class`, `sem`, `date`, `time`, `no_of_days`, `upload_done`) VALUES
(307, 482, 'Ms. Smita Bohir', 'Hands on Session', 'A Step towards Data Science', 'TE', 'VI', '2020-01-24', '00:00:00', '2', NULL),
(308, 728, 'Ms. Shaguna Ingle', 'Hands on Session', 'A Step towards Data Science', 'TE', 'VI', '2020-01-24', '00:00:00', '2', NULL),
(309, 894, 'Mr. Balwant J. Gorad', 'Hands on Session', 'A Step towards Data Science', 'TE', 'VI', '2020-01-24', '00:00:00', '2', NULL),
(310, 898, 'Dr. Vaibhav Naravade ', 'Hands on Session', 'Framework Approach towards projects Development', 'SE', 'IV', '2020-02-29', '00:00:00', '2', NULL),
(311, 687, 'Ms. Sumithra T.V', 'Hands on Session', 'Framework Approach towards projects Development', 'SE', 'IV', '2020-02-29', '00:00:00', '2', NULL),
(312, 638, 'Ekta Sarda', 'FDP', 'IEEE-GPRS Sponered FDP On High Performance Computing', 'Faculty/ Students', '', '2019-12-11', '00:00:00', '6', NULL),
(313, 807, 'Vishwanath Chikkareddi', 'Hands on Session', 'Android App Development', 'BE', 'VII', '2019-12-11', '00:00:00', '2', NULL),
(314, 812, 'Tabassum Altaf Maktum', 'FDP', 'High Performance Computing, Application Perspective', 'Faculty/ Students', '', '2019-11-11', '00:00:00', '6', NULL),
(315, 679, 'Dhanashri Ashok Bhosale', 'FDP', 'IEEE-GPRS Sponered FDP On High Performance Computing', 'Faculty/ Students', '', '2019-11-11', '00:00:00', '6', NULL),
(316, 874, 'Dr. Amit Barve', 'FDP', 'IEEE-GPRS Sponered FDP On High Performance Computing', 'Faculty/ Students', '', '2019-11-11', '00:00:00', '6', NULL),
(317, 811, 'Rashmi Amol Dhumal', 'FDP', 'IEEE-GPRS Sponered FDP On High Performance Computing', 'Faculty/ Students', '', '2019-11-11', '00:00:00', '6', NULL),
(318, 295, 'Prof. Vanita Mane', 'FDP', 'IEEE-GPRS Sponered FDP On High Performance Computing', 'Faculty/ Students', '', '2019-11-11', '00:00:00', '6', NULL),
(319, 677, 'Kamlesh Lekhraj Nenwani', 'FDP', 'IEEE-GPRS Sponered FDP On High Performance Computing', 'Faculty/ Students', '', '2019-11-11', '00:00:00', '6', NULL),
(320, 593, 'Prathmesh Gunjgur', 'FDP', 'IEEE-GPRS Sponered FDP On High Performance Computing', 'Faculty/ Students', '', '2019-11-11', '00:00:00', '6', NULL),
(321, 807, 'Vishwanath Chikkareddi', 'FDP', 'IEEE-GPRS Sponered FDP On High Performance Computing', 'Faculty/ Students', '', '2019-11-11', '00:00:00', '5', NULL),
(322, 896, 'Dr. (Mrs.) Sangita Santosh Chaudhari', 'FDP', 'IEEE-GPRS Sponered FDP On High Performance Computing', 'Faculty/ Students', '', '2019-11-11', '00:00:00', '6', NULL),
(323, 672, 'Ms Pallavi H. Chitte', 'FDP', 'Mobile Communication Beyond 4G', 'Faculty/ Students', '', '2019-10-14', '00:00:00', '1', NULL),
(324, 679, 'Dhanashri Ashok Bhosale', 'FDP', 'PMMMNMTT, MHRD Sponsered FDP on \"Data Science Using Python', 'Faculty/ Students', '', '2019-10-09', '00:00:00', '6', NULL),
(325, 672, 'Ms Pallavi H. Chitte', 'FDP', 'PMMMNMTT, MHRD Sponsered FDP on \"Data Science Using Python', 'Faculty/ Students', '', '2019-10-09', '00:00:00', '6', NULL),
(326, 894, 'Mr. Gorad Balwant Jaywant', 'FDP', 'PMMMNMTT, MHRD Sponsered FDP on \"Data Science Using Python', 'Faculty/ Students', '', '2019-10-09', '00:00:00', '6', NULL),
(327, 811, 'Rashmi Amol Dhumal', 'FDP', 'PMMMNMTT, MHRD Sponsered FDP on \"Data Science Using Python', 'Faculty/ Students', '', '2019-10-09', '00:00:00', '6', NULL),
(328, 888, 'Dr. Dhananjay Dakhane', 'FDP', 'PMMMNMTT, MHRD Sponsered FDP on \"Data Science Using Python', 'Faculty/ Students', '', '2019-10-09', '00:00:00', '6', NULL),
(329, 812, 'Tabassum Altaf Maktum', 'FDP', 'PMMMNMTT, MHRD Sponsered FDP on \"Data Science Using Python', 'Faculty/ Students', '', '2019-10-09', '00:00:00', '6', NULL),
(330, 627, 'Mrs. Shinde Apurva Swapnil', 'FDP', 'PMMMNMTT, MHRD Sponsered FDP on \"Data Science Using Python', 'Faculty/ Students', '', '2019-10-09', '00:00:00', '6', NULL),
(331, 728, 'Saguna Kailas Ingle', 'FDP', 'PMMMNMTT, MHRD Sponsered FDP on \"Data Science Using Python', 'Faculty/ Students', '', '2019-10-09', '00:00:00', '6', NULL),
(332, 672, 'Ms Pallavi H. Chitte', 'FDP', 'VHDL(VHSIC Hardware Description Language)', 'Faculty/ Students', '', '2019-06-10', '00:00:00', '2', NULL),
(333, 583, 'Snehal Jayaram Mumbaikar', 'Hands on Session', 'Electronic Design Automation Using VHDL', 'SE', 'III', '2019-06-10', '00:00:00', '1', NULL),
(334, 638, 'Ekta Sarda', 'Hands on Session', 'Practical Demonstration of Interfacing With 8086 ', 'TE', 'V', '2019-04-10', '00:00:00', '1', NULL),
(335, 894, 'Mr. Gorad Balwant Jaywant', 'Hands on Session', 'Object Oriented Relational DBMS', 'TE', 'V', '2019-03-10', '00:00:00', '1', NULL),
(336, 482, 'Prof. Smita Vinit Bhoir(Patil)', 'Hands on Session', 'Object Oriented Relational Database', 'TE', 'V', '2019-09-30', '00:00:00', '1', NULL),
(337, 576, 'Mrs. Smita Dinesh Bharne (Khangar)', 'Hands on Session', 'Object Oriented Ralational Database Managment System', 'TE', 'V', '2019-09-30', '00:00:00', '1', NULL),
(338, 699, 'Preet Chandan Kaur', 'Hands on Session', 'Cloud Computing and Linux', 'BE', 'VII', '2019-09-28', '00:00:00', '1', NULL),
(339, 728, 'Saguna Kailas Ingle', 'Hands on Session', ' Cloud Computing', 'BE', 'VII', '2019-09-28', '00:00:00', '', NULL),
(340, 0, 'Mrs. Snehal Prashant Gaikwad', 'Hands on Session', 'Emerging Trends in Pattern Recognition', 'BE', 'VII', '2019-09-28', '00:00:00', '3', NULL),
(341, 821, 'Neeraj Kumar Sharma', 'Hands on Session', 'Cloud Computing', 'BE', 'VII', '2019-09-28', '00:00:00', '1', NULL),
(342, 807, 'Vishwanath Chikkareddi', 'Hands on Session', 'Cloud Computing', 'BE', 'VII', '2019-09-28', '00:00:00', '1', NULL),
(343, 295, 'Prof. Vanita Mane', 'Hands on Session', 'Report/ Research Paper Writing Tool-Latex', 'BE/ME', 'VII/I', '2019-09-26', '00:00:00', '1', NULL),
(344, 583, 'Snehal Jayaram Mumbaikar', 'Hands on Session', 'Evolution and Application of Mobile Network \"', 'BE', 'VII', '2019-09-24', '00:00:00', '1', NULL),
(345, 295, 'Prof. Vanita Mane', 'Hands on Session', 'Web Application and Wireless Security.', 'BE', 'VII', '2019-09-23', '00:00:00', '3', NULL),
(346, 687, 'Sumithra T.V', 'Hands on Session', 'Frameworks - An Effective Approach Towards Web Developmen', 'SE', 'III', '2019-09-21', '00:00:00', '1', NULL),
(347, 419, 'Sheetal A. Ahir', 'Hands on Session', 'Frameworks- An Effective Approach Towards Web Development', 'SE', 'III', '2019-09-21', '00:00:00', '1', NULL),
(348, 627, 'Mrs. Shinde Apurva Swapnil', 'Hands on Session', 'Framework- An Efficient Approach Towards Web Development', 'SE', 'III', '2019-09-21', '00:00:00', '1', NULL),
(349, 874, 'Dr. Amit Barve', 'Hands on Session', 'Framework- An Efficient Approach Towards Web Development', 'SE', 'III', '2019-09-21', '00:00:00', '1', NULL),
(350, 874, 'Dr. Amit Barve', 'Hands on Session', 'Parallel Programming', 'BE', 'VII', '2019-07-27', '00:00:00', '1', NULL),
(351, 807, 'Vishwanath Chikkareddi', 'Hands on Session', 'Parallel Processing', 'BE', 'VII', '2019-07-27', '00:00:00', '1', NULL),
(352, 295, 'Prof. Vanita Mane', 'Hands on Session', 'Latex-Scientific Report Writing', 'BE', 'VII', '2019-07-27', '00:00:00', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organized_uploads`
--

CREATE TABLE `organized_uploads` (
  `organized_upload_id` int(11) NOT NULL,
  `faculty_sdrn` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `organized_id` int(11) NOT NULL,
  `certificate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organized_uploads`
--

INSERT INTO `organized_uploads` (`organized_upload_id`, `faculty_sdrn`, `faculty_name`, `organized_id`, `certificate`) VALUES
(1, 150, 'First Middle Last', 2, 'TCS iON Scholarship.'),
(2, 150, 'First Middle Last', 3, 'TCS iON Scholarship.'),
(3, 150, 'First Middle Last', 4, 'Tpdf'),
(4, 638, '', 7, 'TCS iON Scholarship.'),
(5, 638, 'Ekta  Sarda', 10, 'TCS iON Scholarship.'),
(6, 638, 'Ekta  Sarda', 11, 'TCS iON Scholarship.');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `faculty_sdrn` varchar(20) NOT NULL,
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
  `speaker_sdrn` varchar(50) NOT NULL,
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

INSERT INTO `schedule` (`schedule_id`, `faculty_sdrn`, `faculty_username`, `faculty_name`, `schedule_type`, `class`, `sem`, `date`, `no_of_days`, `time`, `topic`, `subject`, `speaker_sdrn`, `speaker_name`, `speaker_type`, `speaker_designation`, `organized_by`, `budget`, `upload_done`) VALUES
(7, '', 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Expert Talks', 'T.E', '4, 5', '2021-02-24', '1', '13:00:00', 'Data Management & Data Governance', 'Data Encryption and Decryption', '', 'Ms. Nidhi Shetty', '', 'Vice-President, BNP Paribas', 'IETE', 0, 1),
(8, '', 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'workshop', 'B.E', '7, 8', '2021-02-24', '3', '17:00:00', 'Visual Cryptography: An Introduction', 'Cryptography', '', 'Dr. Deepika M P', '', 'Associate Professor, Kerala Technological University', 'SDG', 0, 1),
(9, '', 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Hands-on Session', 'F.E', '2', '2021-02-27', '5', '15:00:00', 'History about Internet', 'SPA', '', 'Mr. XYZ', '', 'Assistant Professor, XYZ University', 'DAS', 0, 1),
(10, '', 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Expert Talks', 'S.E', '3, 4', '2021-02-18', '2', '19:10:00', 'Evolution of Antenna and it\'s types', 'ARWP', '', 'Ganesh Ingale', '', 'Assistant Professor, Rait College', 'IDK', 0, 1),
(11, '', 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Hands-on Session', 'B.E', '8', '2021-02-26', '2', '18:00:00', 'Histogram Processing', 'IPMV', '', 'Mr. Visual Expert', '', 'HOD of Computer Department, Visual University', 'HCIK', 1000, 1),
(12, '', 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Expert Talks', 'S.E', '4', '2021-02-28', '1', '16:00:00', 'Bootstrap Introduction', 'HTML & CSS', '', 'Mr. X-men', '', 'Head of X-men Department, X-men University', 'X-men', 2000, 1),
(13, '', 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 'Expert Talks', 'S.E', '3, 4', '2021-03-11', '1', '13:00:00', 'XYZ', 'XYZ Subject', '', 'MR. xyz', '', 'XYZ university', 'IDK', 0, 1),
(14, '', 'first.last@rait.ac.in', 'First Last', 'Expert Talks', 'T.E', '5', '2021-03-04', '1', '13:00:00', 'avc', 'abc', '', 'abc', '', 'abc', 'abc', 0, 1),
(15, '', 'first.last@rait.ac.in', 'First Last', 'Expert Talks', '', '', '2021-07-09', '2', '13:16:00', 'Blockchain', 'Cryptography', '', 'Mr. Ravi Mallah', '', 'Vice-President, BNP Paribas', 'HCIK', 0, 1),
(16, '', 'first.last@rait.ac.in', 'First Last', 'Expert Talks', '', '', '2021-07-10', '4', '13:39:00', 'ABCD', 'XYZ', '', 'Ravi Mallah', '', 'Professor', 'EXTC', 4545, NULL),
(17, '', 'first.last@rait.ac.in', 'First Last', 'Expert Talks', '', '', '2021-07-16', '2', '14:28:00', 'Basic of DBMS', 'DMBS', '', 'Mr. nobody', '', 'Assistant Professor', 'SDG', 0, 1),
(18, '', 'first.last@rait.ac.in', 'First Last', 'Hands-on Session', '', '', '2021-07-25', '4', '02:21:00', 'Bitcoin', 'Cryptography', '', 'Ms. Computer', '', 'Assistant Professor', 'IEEE', 1212, NULL),
(19, '', 'first.last@rait.ac.in', 'First Last', 'Hands-on Session', '', '', '2021-07-31', '2', '23:16:00', 'What is big Data ?', 'BDA', '', 'Mr. Rohan Rathod', '', 'Assistant Professor', 'RAIT', 0, NULL),
(20, '', 'first.last@rait.ac.in', 'First Last', 'Workshop', '', '', '2021-07-24', '3', '05:43:00', 'Mobile Technology', 'AWRP', '', 'Ms. Sneeha Singh', '', 'Coder of Day', 'JDK', 0, NULL),
(21, '', 'first.last@rait.ac.in', 'First Last', 'Expert Talks', 'S.E, T.E', ', 3, 4, 5', '2021-07-25', '3', '12:43:00', 'Sample Topic', 'Sample Subject', '', 'Sample Speaker', 'External', 'Assistant Professor', 'SUC', 1234, 1),
(22, '', 'first.last@rait.ac.in', 'First Last', 'FDP', 'F.E, S.E, T.E', '2, 4, 6', '2021-07-25', '2', '15:00:00', 'Web Development', 'Web Design', '', 'Mr. Nilesh Singh', 'Internal', 'Assistant Professor', 'SUC', 1200, 1),
(23, '', 'first.last@rait.ac.in', 'First Last', 'Hands-on Session', 'S.E', '3, 4', '2021-07-30', '3', '17:01:00', '5G technology', 'DTSP', '', 'Mr. Prateek Singh', 'Internal', 'Assistant Professor', 'SUC', 0, 1),
(25, '', 'first.last@rait.ac.in', 'First Last', 'Hands-on Session', 'F.E, S.E', '1, 2', '2021-08-04', '3', '05:30:00', 'Basic of Machine Learning', 'CS', 'Internal|External|Industry', 'Mr. Sohan|Mr. Mohan|Mr. Rohan', 'Internal|External|In', 'Assistant Professor|Assistant Professor|Assistant Professor', 'SDG', 0, NULL),
(27, '', 'first.last@rait.ac.in', 'First Last', 'Workshop', 'F.E, S.E', '3, 4', '2021-08-29', '5', '02:00:00', 'Cryptography Analysis', 'DCE', '234', 'Mrs. Preeti Chauhan', 'Internal', 'Assistant Professor', 'IETE', 0, NULL),
(28, '', 'first.last@rait.ac.in', 'First Last', 'STTP', 'Faculty', 'N/A', '2021-08-21', '2', '03:34:00', 'Growth Funnel', 'Digital Marketing', '3234', 'Ms. Sakshi Tiwari', 'External', 'Senior Professor', 'ICT', 0, NULL),
(29, '248', '', 'Arpita Goutam Palchoudhury', 'Expert Talks', 'F.E, S.E', '1', '2021-08-14', '2', '01:14:00', 'Mobile Communnicaton', 'MCS', '23', 'Mr. ABC', 'External', 'Assistant Professor', 'DAS', 0, 1),
(30, '638', '', 'Ekta  Sarda', 'Hands-on Session', 'S.E', '3, 4', '2021-08-28', '2', '03:12:00', 'Computer Basics', 'CS', '355', 'Mr. Maqrues Brownlee', 'External', 'YouTuber', 'DTSP', 0, 1),
(31, '377', '', 'Vaishali Satish Jadhav', 'Expert Talks', 'S.E', '3', '2021-08-06', '4', '12:29:00', 'Topic Name 1', 'Subject Name 1', '23', 'Mr. ABC', 'Internal', 'Assistant Professor', 'DAS', 0, NULL),
(32, '638', '', 'Ekta  Sarda', 'Expert Talks', 'T.E', '3', '2021-08-28', '3', '20:22:00', 'Sample Topic 2', 'Sample Subject 2', '12', 'Mr. NIlesh', 'Internal', 'HOD', 'IETE', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `passcode` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `department` varchar(80) NOT NULL,
  `class` varchar(8) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `ph_no` bigint(12) NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `user_name`, `passcode`, `name`, `roll_no`, `first_name`, `middle_name`, `last_name`, `department`, `class`, `email_id`, `ph_no`, `address`) VALUES
(1, 'ravi', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', 'Ravi Mallah', '18ET7051', 'Ravi', '', 'Mallah', 'Electronics & Telecommunication Engineering', 'S.E', '', 0, ''),
(2, 'rohan', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', 'Rohan Rathod', '', '', '', '', '', '', '', 0, ''),
(3, 'first.last.rt18@rait.ac.in', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', 'First Middle Last', '', '', '', '', 'Electronics & Telecommunication Engineering', 'B.E', 'email@gmail.com', 8978685014, ' '),
(4, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET1125', 'Rohan', '', 'Rathod', 'Electronics & Telecommunication Engineering', 'B.E', '', 0, ''),
(5, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '19ET5511', '', '', '', '', '', '', 0, ''),
(6, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET8007', '', '', '', '', '', '', 0, ''),
(7, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7044', '', '', '', '', '', '', 0, ''),
(8, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7047', '', '', '', '', '', '', 0, ''),
(9, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7008', '', '', '', '', '', '', 0, ''),
(10, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET3501', '', '', '', '', '', '', 0, ''),
(11, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7001', '', '', '', '', '', '', 0, ''),
(12, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET8006', '', '', '', '', '', '', 0, ''),
(13, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET8015', '', '', '', '', '', '', 0, ''),
(14, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7012', '', '', '', '', '', '', 0, ''),
(15, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7020', '', '', '', '', '', '', 0, ''),
(16, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7007', '', '', '', '', '', '', 0, ''),
(17, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET8005', '', '', '', '', '', '', 0, ''),
(18, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7005', 'Onkar', '', 'Raut', '', '', '', 0, ''),
(19, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET8008', '', '', '', '', '', '', 0, ''),
(20, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7029', '', '', '', '', '', '', 0, ''),
(21, '', '35dbaf63ff266216a75eb49bc7c7cb2e601b9dd6', '', '18ET7013', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `student_reg_id` int(11) NOT NULL,
  `student_roll_no` varchar(20) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `feedback_done` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`student_reg_id`, `student_roll_no`, `schedule_id`, `feedback_done`) VALUES
(1, '18', 16, NULL),
(3, '18ET7051', 17, 1),
(10, '18ET7051', 18, 1),
(20, '18ET7051', 19, 1),
(27, '18ET7051', 22, 1),
(28, '18ET7051', 23, 1),
(29, '18ET7051', 28, NULL),
(30, '18ET7051', 30, NULL),
(31, '18ET7051', 31, NULL),
(32, '18ET7051', 0, NULL),
(33, '18ET7051', 27, 1),
(34, '18ET7051', 29, NULL),
(35, '18ET1125', 27, 1),
(36, '18ET1125', 28, 1),
(37, '18ET1125', 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `upload_id` int(11) NOT NULL,
  `faculty_sdrn` varchar(11) NOT NULL,
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

INSERT INTO `uploads` (`upload_id`, `faculty_sdrn`, `faculty_username`, `faculty_name`, `schedule_id`, `topic`, `attendance`, `feedback`, `hod`, `principal`, `gap`, `photo`, `budget`, `relevance`) VALUES
(4, '7', 'first.last@rait.ac.in', 'First Last', 7, 'Data Management & Data Governance', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf'),
(5, '3', 'ravi.mallah@rait.ac.in', 'Ravi Mallah', 8, 'Visual Cryptography: An Introduction', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf'),
(6, '7', 'first.last@rait.ac.in', 'First Last', 12, 'Bootstrap Introduction', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf', 'Pre requisite TT TE D.pdf'),
(7, '7', 'first.last@rait.ac.in', 'First Last', 17, 'Basic of DBMS', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape', 'Copy of Hands on session on_ Report_ research Pape'),
(8, '7', 'first.last@rait.ac.in', 'First Last', 0, '', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(9, '7', 'first.last@rait.ac.in', 'First Last', 11, 'Histogram Processing', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(10, '7', 'first.last@rait.ac.in', 'First Last', 15, 'Blockchain', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(11, '7', 'first.last@rait.ac.in', 'First Last', 9, 'History about Internet', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(12, '7', 'first.last@rait.ac.in', 'First Last', 10, 'Evolution of Antenna and it\'s types', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship - Copy.pdf', 'TCS iON Scholarship - Copy (2).pdf', 'TCS iON Scholarship - Copy (3).pdf', '1', 'TCS iON Scholarship - Copy (4).pdf', 'TCS iON Scholarship - Copy (5).pdf', 'TCS iON Scholarship - Copy (6).pdf'),
(13, '7', 'first.last@rait.ac.in', 'First Last', 14, 'avc', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship - Copy.pdf', 'TCS iON Scholarship - Copy (2).pdf', 'TCS iON Scholarship - Copy (3).pdf', '1', 'TCS iON Scholarship - Copy (4).pdf', 'TCS iON Scholarship - Copy (5).pdf', 'TCS iON Scholarship - Copy (6).pdf'),
(14, '7', 'first.last@rait.ac.in', 'First Last', 17, 'Basic of DBMS', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship - Copy.pdf', 'TCS iON Scholarship - Copy (8).pdf', 'TCS iON Scholarship - Copy (7).pdf', '1', 'TCS iON Scholarship - Copy (6).pdf', 'TCS iON Scholarship - Copy (5).pdf', 'TCS iON Scholarship - Copy (4).pdf'),
(15, '7', 'first.last@rait.ac.in', 'First Last', 21, 'Expert Talks', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf', '1', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf', 'HackerRank Test Series .pdf'),
(16, '7', 'first.last@rait.ac.in', 'First Last', 21, 'Expert Talks', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(17, '7', 'first.last@rait.ac.in', 'First Last', 21, 'Expert Talks', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(18, '7', 'first.last@rait.ac.in', 'First Last', 21, 'Sample Topic', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(19, '7', 'first.last@rait.ac.in', 'First Last', 22, 'Web Development', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(20, '7', 'first.last@rait.ac.in', 'First Last', 23, '5G technology', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', '1', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf', 'Apurva_Ekta_Project Proposal Submission Format.pdf'),
(21, '248', '', 'Arpita Goutam Palchoudhury', 29, '', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', '1', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf'),
(22, '638', '', 'Ekta  Sarda', 32, '', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', '1', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf'),
(23, '638', '', 'Ekta  Sarda', 30, '', 'TCS iON Scholarship.pdf', 'TE-OR_PR_2020-21 Even Sem TIme Table.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', '1', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf', 'TCS iON Scholarship.pdf');

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
-- Indexes for table `organized`
--
ALTER TABLE `organized`
  ADD PRIMARY KEY (`organized_id`);

--
-- Indexes for table `organized_uploads`
--
ALTER TABLE `organized_uploads`
  ADD PRIMARY KEY (`organized_upload_id`);

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
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gap_sheet`
--
ALTER TABLE `gap_sheet`
  MODIFY `gap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `organized`
--
ALTER TABLE `organized`
  MODIFY `organized_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `organized_uploads`
--
ALTER TABLE `organized_uploads`
  MODIFY `organized_upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `student_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
