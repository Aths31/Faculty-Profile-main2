-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 03:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Sdrn` varchar(8) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Contact_no` bigint(10) NOT NULL,
  `Addr` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Doj` date NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Desig` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `OTP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Sdrn`, `First_name`, `Middle_name`, `Last_name`, `DOB`, `Department`, `Contact_no`, `Addr`, `Email`, `Doj`, `Qualification`, `Desig`, `Password`, `OTP`) VALUES
('007', 'test', NULL, NULL, '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', 'hncqx5d61o'),
('150', 'Leena', NULL, 'Ragha', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('197', 'Snehal', '', 'Gaikwad', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('248', 'Arpita', 'Goutam', 'Palchoudhury', '1967-06-21', 'COMP', 1234567890, '-', '@', '2001-09-10', 'Ph.D  ( English Literature)', ' Associate Professor', '123', NULL),
('295', 'Vanita', NULL, 'Mane', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('330', 'Namita', 'Damodar', 'Pulgam', '1983-09-10', 'COMP', 1234567890, '-', '@', '2005-12-23', 'M.E. Computer', 'A.P.', '123', 'bb9cad60'),
('374', 'Aditi', 'Sunil', 'Chhabria', '1984-07-23', 'COMP', 1234567890, '-', '@', '2006-07-17', 'M.E. Computers', 'Assistant Professor', '123', '362394c6'),
('377', 'Vaishali', 'Satish', 'Jadhav', '1971-09-17', 'COMP', 1234567890, '-', '@', '2007-07-13', 'Pursuing Ph.D.', 'Assistant Professor', '123', NULL),
('381', 'Narendrakumar ', 'Ramchandra', 'Dasre', '1980-08-01', 'COMP', 1234567890, '-', '@', '2007-07-23', 'Ph. D.', ' Professor', '123', '3cde8181'),
('383', 'Shital', 'Sunil', 'Mali', '1979-05-16', 'COMPS', 1234567890, '-', '@', '2007-07-09', 'Ph,D, pursing', 'Associate Professor', '123', NULL),
('393', 'Dr. Amarsinh', 'V.', 'Vidhate', '1974-05-21', 'COMP', 1234567890, '-', '@', '2007-07-17', 'Ph.D.(Computer Engineering), M.Tech. (Computer Eng', 'Professor', '123', 'ZxpgBY'),
('396', 'Puja', '', 'Padiya', '1979-09-09', 'COMP', 1234567890, '-', '@', '2007-01-08', 'Ph.D. Pursuing', 'Assistant Professor', '123', NULL),
('407', 'Rajshree', NULL, 'Shedge', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('411', 'TUSHAR ', 'HINDURAO', 'GHORPADE ', '1979-02-03', 'COMP', 1234567890, '-', '@', '2008-01-18', 'ME in Computer Engineering', 'Assistant Professor', '123', 'ec71de5a'),
('419', 'Sheetal', NULL, 'Ahir', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', '2MYHy6'),
('482', 'Smita', '', 'Patil-Bhoir', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', '', '', '123', 'JQ76CN'),
('526', 'Vilas', 'Janardan', 'Rane', '1986-11-11', 'COMP', 1234567890, '-', '@', '2011-02-03', 'M.Sc.', 'Assistant Professor', '123', NULL),
('528', 'Swarupa', NULL, 'Bodhe', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('536', 'nilam', 'sangram', 'patil', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'ME electronics', 'Assistant professor', '123', NULL),
('566', 'Pramod', 'Jagannath', 'Bide', '1989-01-25', 'COMP', 1234567890, '-', '@', '2012-08-16', 'M.E', 'AP', '123', 'NULL'),
('570', 'ASHWINI ', 'ANIL', 'RAORANE', '1990-04-23', 'COMP', 1234567890, '-', '@', '2012-08-16', 'ME (Electronics)', 'Lecturer', '123', NULL),
('576', 'Smita', 'dinesh', 'Bharne', '1982-06-14', 'COMP', 1234567890, '-', '@', '2012-09-13', 'M.Tech', 'Assistant Professor', '123', 'a22bc9ae'),
('583', 'Snehal', NULL, 'Mumbailkar', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', 'RKfwZg'),
('586', 'Vijaylaxmi', 'S', 'Bittal', '1984-07-31', 'COMP', 1234567890, '-', '@', '2013-01-10', 'M.Tech', 'assistant professor', '123', NULL),
('587', 'Trupti', 'prashant', 'Patil', '1984-07-08', 'COMP', 1234567890, '-', '@', '2013-01-07', 'ME (copmuter)', 'Assistant Professor', '123', NULL),
('593', 'Prathmesh', 'Narayan', 'Gunjgur', '1988-10-18', 'COMP', 1234567890, '-', '@', '2013-01-24', 'M.E Computer Engineering', 'Assistant Professor', '123', NULL),
('601', 'Kriti', '', 'Karnam', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'B.E.,Mtech', 'Assistant Professor', '123', 'e7fa430d'),
('603', 'Harsha', '', 'Saxena', '1990-11-06', 'COMP', 1234567890, '-', '@', '2013-07-01', 'mtech', 'assistant proffesor', '123', '2ff22efa'),
('609', 'Nazia', '', 'S', '1982-01-02', 'COMP', 1234567890, '-', '@', '2013-07-08', 'M.Tech', 'Asst Professor', '123', NULL),
('615', 'Shilpa', 'Tushar', 'Bhangale', '1976-07-27', 'CE', 1234567890, '-', '@', '2013-07-15', 'MPHIL- SET', 'assistant professor', '123', NULL),
('618', 'Rubi', '', 'Mandal', '1986-01-19', 'COMP', 1234567890, '-', '@', '2013-07-25', 'Mtech', 'Lecturer', '123', NULL),
('627', 'Apurva', 'Swapnil', 'Shinde', '1991-12-18', 'COMP', 1234567890, '-', '@', '2013-08-13', 'M.E. (Computers)', 'Assistant Professor', '123', '8023ed41'),
('631', 'Savita', 'Kiran', 'Sawant', '1983-12-15', 'COMP', 1234567890, '-', '@', '2016-01-02', 'M.Tech in Computer Engg', 'Assistant Professor', '123', 'd2367116'),
('638', 'Ekta', NULL, 'Sarda', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
('650', 'Bhavana', 'Bhimsen', 'Turorikar', '1983-07-03', 'COMP', 1234567890, '-', '@', '2014-08-07', 'ME(Computer Networks)', 'Assistant Professor', '123', '694a090f'),
('654', 'MANSI', 'BHUSHAN', 'JAWALE', '1991-10-31', 'COMP', 1234567890, '-', '@', '2014-06-15', 'M.A.', 'Lecturer', '123', NULL),
('657', 'KHUSHBOO', 'SHIVKUMAR', 'PICHHODE', '1989-12-03', 'COMPS', 1234567890, '-', '@', '2014-07-16', 'M.E', 'Assistant Professor', '123', NULL),
('663', 'Shilpa', 'Vilas', 'Mahagaonkar', '1984-05-24', 'COMP', 1234567890, '-', '@', '2014-07-16', 'ME', 'Assistant Professor', '123', NULL),
('672', 'Pallavi', 'H.', 'Chitte', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.E.Computer Engineering', 'Assistant Professor', '123', '41fd65ae'),
('677', 'kamlesh', 'lekhraj', 'nenwani', '1987-04-04', 'CE', 1234567890, '-', '@', '2014-08-01', 'M.E.', 'Lecturer', '123', NULL),
('679', 'Dhanashri', 'Ashok', 'Bhosale', '1989-03-10', 'COMP', 1234567890, '-', '@', '2013-02-09', 'ME', 'lecturer', '123', '8aa5381f'),
('687', 'Sumithra', '', 'T.V', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH', '', '123', NULL),
('693', 'vishvas', 'hasuram', 'patil', '1986-01-15', 'COMP', 1234567890, '-', '@', '2015-07-01', 'M.sc.', 'Lecturer', '123', '703141b6'),
('696', 'varsha', 'ramesh', 'patil', '0091-04-29', 'COMP', 1234567890, '-', '@', '2015-06-17', 'M.E.Computer Engineering', 'Assistant Professor', '123', NULL),
('699', 'Preet Chandan', '', 'Kaur', '1989-02-09', 'COMP', 1234567890, '-', '@', '2015-07-15', 'M.E.Computer Engineering', 'Assistant professor', '123', 'CZtPQs'),
('700', 'Pranali', 'Mohan', 'Yadav', '1990-12-18', 'CE', 1234567890, '-', '@', '2015-06-15', 'BE, ME (persuing)', 'Teaching Assistant', '123', NULL),
('711', 'PRAMOD ', 'HARIBHAU', 'KACHARE', '1991-04-24', 'COMP', 1234567890, '-', '@', '2015-07-07', 'M.Tech.', 'Assistant Professor', '123', '536de3d5'),
('712', 'DIAMBAR', 'VITTHALBUWA', 'PURI', '1990-09-29', 'COMP', 1234567890, '-', '@', '2015-07-07', 'M.Tech.', 'Assistant Professor', '123', '4241a33d'),
('717', 'SWARALI', 'PRASHANT', 'SHETH', '1985-01-24', 'COMP', 1234567890, '-', '@', '2015-07-23', 'M.Tech.', 'Lecturer', '123', 'a862f9af'),
('719', 'CHANDRAKANT', 'JAGANNATH', 'GAIKWAD', '1972-08-02', 'COMP', 1234567890, '-', '@', '2015-08-10', 'Ph.D.', 'Professor', '123', '36ed2611'),
('721', 'Nivedita', 'Elan', 'Shekhar', '1992-04-28', 'COMPS', 1234567890, '-', '@', '2015-08-11', 'M.E.Computer Engineering', 'Assitance Professor', '123', NULL),
('726', 'Krupi', 'Pranav', 'Saraf', '1989-07-19', 'COMPS', 1234567890, '-', '@', '2016-01-06', 'ME', 'Assistant Professor', '123', NULL),
('728', 'saguna', 'kailas', 'ingle', '1983-08-05', 'COMP', 1234567890, '-', '@', '2016-12-03', 'M.E.(IT)', 'Assistant Professor', '123', NULL),
('752', 'Shilpa', 'Gulabrao', 'Kolte', '1977-06-17', 'COMP', 1234567890, '-', '@', '2016-06-22', 'M.E.', 'A.P.', '123', '0bf3ade3'),
('765', 'Pornima', 'Kailas', 'Gidhe', '1993-04-06', 'COMP', 1234567890, '-', '@', '2016-07-12', 'M.E.Computer Engineering', 'Assistant professor', '123', NULL),
('767', 'Bijal', 'Chandubhai', 'Panchal', '1989-12-11', 'COMP', 1234567890, '-', '@', '2016-07-12', 'M.E', 'Assistant Professor', '123', '3acb890f'),
('769', 'SAYALI', 'ASHOK', 'SAPKAL', '1989-05-08', 'COMP', 1234567890, '-', '@', '2016-07-13', 'M.E', 'Lecturer', '123', NULL),
('770', 'Siddhi', 'Nikhil', 'Kadu', '1989-12-01', 'COMP', 1234567890, '-', '@', '2016-07-12', 'M.E', 'Assistant Professor', '123', '5b6a61d0'),
('772', 'SAMEER', 'SHAMRAO', 'CHIKANE', '1993-09-03', 'COMPS', 1234567890, '-', '@', '2016-07-13', 'ME', 'ASSISTANT PROFESSOR', '123', NULL),
('785', 'Snehal', 'Shashikant', 'Bhoir', '1992-08-15', 'COMP', 1234567890, '-', '@', '2016-07-21', 'M.E.Computer Engineering', 'Assistant Professor', '123', NULL),
('786', 'JYOTI', 'VINAYAK', 'DEOGIRIKAR', '1994-01-14', 'COMP', 1234567890, '-', '@', '2016-08-01', 'ME', 'Assistant professor', '123', NULL),
('787', 'SHRADDHA', 'ANANT', 'NARHARI', '1989-07-31', 'COMP', 1234567890, '-', '@', '2017-12-15', 'ME', 'Assitant Professor', '123', NULL),
('800', 'Prof. Prashant', 's', 'Lokhande', '1974-06-16', 'COMP', 1234567890, '-', '@', '2017-01-16', 'ME IT', 'Associate Professor', '123', NULL),
('802', 'PAYAL', 'FATEHLAL', 'SANCHETI', '1994-04-02', 'COMP', 1234567890, '-', '@', '2017-01-23', 'B.E', 'LAB INSTRUCTOR', '123', NULL),
('803', 'Snehal', 'Suresh', 'Nikalje', '1992-10-27', 'COMP', 1234567890, '-', '@', '2017-02-01', 'BE', 'Lab Instructor', '123', NULL),
('804', 'roshni', 'satish', 'singh', '1993-06-18', 'COMP', 1234567890, '-', '@', '2017-02-01', 'BE', 'lab instructor', '123', NULL),
('806', 'Sathya', ' ', 'Arumugam', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'Ph.D', 'Assistant Professor', '123', NULL),
('807', 'vishwanath', 'subhaschandra', 'chikkareddi', '1988-02-24', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH( COMPUTER SCIENCE AND ENGG), PhD(pursuing)', 'Assistant Professor', '123', NULL),
('811', 'Rashmi', 'Amol', 'Dhumal', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.E.Computer Engineering', 'Associate Professor', '123', NULL),
('812', 'Tabassum', 'Altaf', 'Maktum', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.E.Computer Engineering', 'Assistant Professor', '123', NULL),
('817', 'PRACHI', 'DEEPAK', 'JUNWALE', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH( COMPUTER SCIENCE AND ENGG)', 'ASSISTANT PROFESSOR', '123', NULL),
('821', 'NEERAJ', 'KUMAR', 'SHARMA', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'PhD', 'PROFESSOR', '123', NULL),
('826', 'Ida', 'Hector', 'Lionel', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.Tech(Information Technology)', 'Assistant Professor', '123', 'NULL'),
('827', 'PRIYANKA', 'RAMRAO', 'GUTTE', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.Tech(Control system)', 'Asst. Professor', '123', NULL),
('829', 'Himani', 'Mohan', 'Jawale', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH( COMPUTER ENGG)', 'Assistant Professor', '123', NULL),
('840', 'Dr. Dhiraj', 'B', 'Magare', '1981-02-02', 'COMP', 1234567890, '-', '@', '2017-11-20', 'Doctor', 'Associate Professor', '123', NULL),
('842', 'Suchita', 'Suresh', 'Dange', '1993-04-26', 'COMP', 1234567890, '-', '@', '2017-12-04', 'M.TECH( COMPUTER ENGG)', 'Assistant Professor', '123', NULL),
('848', 'Rohini', 'Lakhanlal', 'Damahe', '1988-02-03', 'COMP', 1234567890, '-', '@', '2017-11-12', 'ME(Computer Engineering)', 'Assistant Professor', '123', NULL),
('858', 'SHITAL', 'HARIBHAU', 'GADE', '1983-06-06', 'COMP', 1234567890, '-', '@', '2018-01-02', 'M.E.Computer Engineering', 'ASSISTANT PROFESSOR', '123', NULL),
('874', 'AMIT', 'KAILASH', 'BARVE', '1985-08-26', 'COMP', 1234567890, '-', '@', '2018-02-16', 'Phd', 'Assiciate Professor', '123', NULL),
('876', 'BHARTI', 'VISHANDAS', 'NATHWANI', '1984-07-27', 'COMPS', 1234567890, '-', '@', '2018-02-20', 'Ph.D.', 'Assistant Professor', '123', NULL),
('878', 'Bharti', 'A', 'Joshi', '1970-04-25', 'COMPS', 1234567890, '-', '@', '2018-03-01', 'Phd', 'Professor', '123', 'bHhwYV'),
('888', 'Dr Dhananjay', 'Manohar', 'Dakhane', '1972-04-06', 'COMP', 1234567890, '-', '@', '1972-04-06', 'PhD', 'Professor', '123', 'hDvgGJ'),
('892', 'Dr. Yogita ', 'Dhanraj', 'Mistry', '1979-07-26', 'COMP', 1234567890, '-', '@', '2018-12-17', 'Ph. D.', 'Associate Professor', '123', 'euFpRr'),
('894', 'B', 'J', 'Gorad', '1988-04-04', 'COMP', 1234567890, '-', '@', '2018-12-24', 'M.Tech CST,  PhD Pursuing', 'Assistant Professor', '123', NULL),
('896', 'SANGITA', 'SANTOSH', 'CHAUDHARI', '1977-06-10', 'COMP', 1234567890, '-', '@', '2019-01-01', 'PhD', 'professor', '123', '4GoHWM'),
('897', 'R', 'D', 'Suryawanshi', '1986-05-12', 'COMP', 1234567890, '-', '@', '2019-01-01', 'Msc, Net,Phd Persuing', 'Assistant Professor', '123', 'D7qHRm'),
('898', 'vaibhav', 'Eknath', 'Narawade', '1977-08-08', 'COMP', 1234567890, '-', '@', '2019-01-03', 'PhD Computer Enggineering', 'Professor', '123', 'uWzgp2'),
('999', 'a', 'a', 'a', '0000-00-00', 'INSTR', 1234567890, '-', '@', '0000-00-00', 'a', 'a', '123', 'dd867ff4'),
('abc', 'sf', 'f', 'h', '2016-01-07', 'CE', 1234567890, '-', '@', '2016-01-12', 'ME pursuing', 'ap', '123', '1225dbb4');

-- --------------------------------------------------------

--
-- Table structure for table `orientation`
--

CREATE TABLE `orientation` (
  `Srno` int(11) NOT NULL,
  `SDRN` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `University` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Venue` varchar(80) NOT NULL,
  `Date` date NOT NULL,
  `uploads` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orientation`
--

INSERT INTO `orientation` (`Srno`, `SDRN`, `Name`, `University`, `Subject`, `Semester`, `Venue`, `Date`, `uploads`) VALUES
(9, 150, 'Leena Ragha', 'rait', 'adbms', '4', 'Ramrao Adik Institute of Technology, Nerul', '2021-08-03', 'uploads/150_Leena Ragha_adbms_orientation_2021-08-'),
(10, 150, 'Leena Ragha', 'dypatil', 'dbms', '4', 'Don Bosco Institute of Technology, Kurla (West)', '2021-07-29', 'uploads/150_Leena Ragha_dbms_orientation_2021-07-29.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `Srno` int(11) NOT NULL,
  `SDRN` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `University` varchar(50) NOT NULL,
  `Subject` varchar(8) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Venue` varchar(80) NOT NULL,
  `Date` date NOT NULL,
  `uploads` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`Srno`, `SDRN`, `Name`, `University`, `Subject`, `Semester`, `Venue`, `Date`, `uploads`) VALUES
(3, 150, 'Leena Ra', 'rait', 'dwm', 3, 'Bharati Vidyapeeth College of Engineerin', '2021-08-18', 'uploads/150_Leena Ragha_dwm_syllabus_2021-08-18.pdf'),
(4, 150, 'Leena Ragha', 'rait', 'cloud co', 3, 'Dwarkadas J. Sanghvi College of Engineering, Vile Parle West', '2021-07-27', 'uploads/150_Leena Ragha_cloud computing_syllabus_2021-07-27.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `Srno` int(11) NOT NULL,
  `SDRN` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `criteria` varchar(16) NOT NULL,
  `Name_workshop` varchar(5) NOT NULL,
  `sponsor` varchar(4) NOT NULL,
  `venue` varchar(80) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `ndays` int(11) NOT NULL,
  `organiser` varchar(28) NOT NULL,
  `org_type` varchar(8) NOT NULL,
  `sfunding` varchar(21) NOT NULL,
  `ramount` int(11) NOT NULL,
  `amount_funded` int(11) NOT NULL,
  `TA` int(11) NOT NULL,
  `uploads` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`Srno`, `SDRN`, `Name`, `criteria`, `Name_workshop`, `sponsor`, `venue`, `sdate`, `edate`, `ndays`, `organiser`, `org_type`, `sfunding`, `ramount`, `amount_funded`, `TA`, `uploads`) VALUES
(15, 150, 'Leena Ragha', 'Training Program', 'data ', 'CSI', 'Datta Meghe College of Engineering, Airoli, Navi M', '2021-08-12', '2021-08-03', 10, 'CSI', 'National', 'Self', 500, 0, 50, 'uploads/150_Leena Ragha_Training Program_data mining_CSI_2021-08-03.pdf'),
(16, 150, 'Leena Ragha', 'STTP', 'Big D', 'CSI', 'Fr. Conceicao Rodrigues Institute of Technology, Vashi', '2021-07-30', '2021-07-25', 6, 'CSI', 'local', 'Self', 50, 0, 20, 'uploads/150_Leena Ragha_STTP_Big Data_CSI_2021-07-25.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orientation`
--
ALTER TABLE `orientation`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`Srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orientation`
--
ALTER TABLE `orientation`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
