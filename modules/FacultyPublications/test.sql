-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 12:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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
-- Table structure for table `book_chapter`
--

CREATE TABLE `book_chapter` (
  `id` int(11) NOT NULL,
  `sdrn` int(20) NOT NULL,
  `faculty_name` varchar(128) NOT NULL,
  `author1` varchar(128) NOT NULL,
  `author2` varchar(128) NOT NULL,
  `author3` varchar(128) NOT NULL,
  `author4` varchar(128) NOT NULL,
  `chapter_name` varchar(128) NOT NULL,
  `book_name` varchar(128) NOT NULL,
  `through` varchar(128) NOT NULL,
  `publisher_name` varchar(128) NOT NULL,
  `isbn_no` int(13) NOT NULL,
  `reg_date` date NOT NULL,
  `publication_year` date NOT NULL,
  `sanction_amt` int(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `awards` varchar(255) NOT NULL,
  `desgn` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `opt1` varchar(128) NOT NULL,
  `opt2` varchar(128) NOT NULL,
  `opt3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_chapter`
--

INSERT INTO `book_chapter` (`id`, `sdrn`, `faculty_name`, `author1`, `author2`, `author3`, `author4`, `chapter_name`, `book_name`, `through`, `publisher_name`, `isbn_no`, `reg_date`, `publication_year`, `sanction_amt`, `org_name`, `awards`, `desgn`, `institute`, `opt1`, `opt2`, `opt3`) VALUES
(1, 811, 'Mrs. Dhumal Rashmi A.', 'Sangita Chaudhari', 'Tabassum Maktum', '', '', 'Blockchain of Things: Benefits and Research Challenges', 'Real-Life Applications of the Internet of Things Challenges, Applications, and Advances', 'Direct', 'CRC Press taylor & Francis', 2147483647, '2021-02-28', '2021-07-10', 0, '', 'NA', 'Assistant Professor', '', '', '', ''),
(2, 482, 'Mrs. Bhoir Smita V.', 'Jyoti Kundale', 'Smita Bharne', '', '', 'Applications of Machine Learning in Fakey News Detection', 'Design of Intelligent System using Machine Learning and Deep Learning', 'Direct', 'CRC Press Taylor and Francis Group', 0, '0000-00-00', '0000-00-00', 0, '', 'NA', 'Assistant Professor', '\r\n', '', '', ''),
(3, 896, 'Dr. Choudhari Sangeeta S.\r\n', 'Rashmi Dhumal', 'Tabassum Maktum', '', '', 'Blockchain of Things: Benefits and Research Challenge', 'Real-Life Applications of the Internet of Things Challenges, Applications, and Advances', 'Direct', 'Apple Academic Press (CRC)', 2147483647, '2021-02-28', '2020-07-10', 0, '', 'NA', 'Professor', '', '', '', ''),
(4, 878, 'Dr. Joshi Bharti A.', 'Dr Shivangi Agarwal\r\n', 'Riddhi Vinchhi', 'Neha Zimare', '', 'Low Cost Bone Mineral Densitometer', 'Computational Intelligence in Healthcare, Springer', 'Direct', 'Springer', 2147483647, '2021-05-18', '2020-09-30', 0, '', 'NA', 'Professor', '', '', '', ''),
(7, 7, 'test  ', 'Tanvi', 'Shreya', '', '', 'demo', 'demo1', 'direct', 'Springer', 2147483647, '2021-07-01', '2021-07-08', 1000, 'RAIT', 'NA', 'student', 'RAIT', '--SELECT--', '', ''),
(8, 7, 'test  ', 'Tanvi', 'Shreya', '', '', 'ww', 'qqq', 'direct', 'ghdjqidp', 1234545, '2021-07-01', '2021-07-08', 1000, '500', 'NA', 'student', 'rait', '--SELECT--', '', ''),
(10, 999, 'a a a', 'prachi', 'prachi', 'prachi', 'prachi', 'prachi', 'prachi', 'prachi', 'prachi', 12365, '2021-07-30', '2021-07-02', 0, 'prachi', 'prachi', 'prachi', 'prachi', 'UG', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_publication`
--

CREATE TABLE `book_publication` (
  `id` int(11) NOT NULL,
  `sdrn` int(20) NOT NULL,
  `faculty_name` varchar(128) NOT NULL,
  `author1` varchar(128) NOT NULL,
  `author2` varchar(128) NOT NULL,
  `author3` varchar(128) NOT NULL,
  `author4` varchar(128) NOT NULL,
  `book_name` varchar(128) NOT NULL,
  `publisher_name` varchar(128) NOT NULL,
  `isbn_no` varchar(20) NOT NULL,
  `year` date NOT NULL,
  `desgn` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `opt1` varchar(128) NOT NULL,
  `opt2` varchar(128) NOT NULL,
  `opt3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_publication`
--

INSERT INTO `book_publication` (`id`, `sdrn`, `faculty_name`, `author1`, `author2`, `author3`, `author4`, `book_name`, `publisher_name`, `isbn_no`, `year`, `desgn`, `institute`, `opt1`, `opt2`, `opt3`) VALUES
(8, 7, 'test  ', 'test', 'test', 'test', 'test', 'test', 'test', '0', '2021-07-01', 'test', 'test', 'PG', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `id` int(11) NOT NULL,
  `sdrn` varchar(20) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `author1` varchar(128) NOT NULL,
  `author2` varchar(128) NOT NULL,
  `author3` varchar(128) NOT NULL,
  `author4` varchar(128) NOT NULL,
  `paper_title` varchar(128) NOT NULL,
  `con_name` varchar(128) NOT NULL,
  `con_place` varchar(128) NOT NULL,
  `con_date` date NOT NULL,
  `ntnl_no` varchar(128) NOT NULL,
  `isbn_no` varchar(128) NOT NULL,
  `doi` varchar(128) NOT NULL,
  `year` date NOT NULL,
  `org` varchar(40) NOT NULL,
  `institute` varchar(40) NOT NULL,
  `indexed_in` varchar(128) NOT NULL,
  `no_of_times` int(128) NOT NULL,
  `reg_amount` int(128) NOT NULL,
  `amount_sanctioned` int(128) NOT NULL,
  `presented_personally` varchar(128) NOT NULL,
  `awards` varchar(128) NOT NULL,
  `opt1` varchar(128) NOT NULL,
  `opt2` varchar(128) NOT NULL,
  `opt3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `sdrn`, `faculty_name`, `author1`, `author2`, `author3`, `author4`, `paper_title`, `con_name`, `con_place`, `con_date`, `ntnl_no`, `isbn_no`, `doi`, `year`, `org`, `institute`, `indexed_in`, `no_of_times`, `reg_amount`, `amount_sanctioned`, `presented_personally`, `awards`, `opt1`, `opt2`, `opt3`) VALUES
(1, '482', '', 'Mrs. Bhoir Smita V.\r\n', 'Kshitij Pawar\r\n', 'Siddhi Jagtap\r\n', '', 'Efficient pothole detection using smartphone sensors \r\n', 'International Conference on Automation, Computing and Communication 2020 (ICACC-2020)\r\n', 'RAIT, NERUL, NAVI MUMBAI, MAHARASHTRA, INDIA\r\n', '0000-00-00', '', '', 'https://doi.org/10.1051/itmconf/20203203013\r\n', '0000-00-00', '', '', 'Google Scholar - EDP Sciences database\r\n', 0, 3500, 0, 'Yes', '', '', '', ''),
(2, '896', '', 'Dr. Chaudhari Sangita S.\r\n', 'Abid Kapadi\r\n', 'Chinmay Kavimandan\r\n', 'Chinmay mandke\r\n', 'Wildlife Video Captioning based on ResNet and LSTM\r\n', '2nd International Conference on Cybernetics, Cognition and Machine Learning Applications (ICCCMLA 2020)\r\n', 'Goa, India\r\n', '0000-00-00', '', '', 'https://doi.org/10.1007/978-3-030-68291-0\r\n', '0000-00-00', '', '', 'Springer/Scopus\r\n', 0, 8500, 0, 'Yes', '', '', '', ''),
(3, '330', '', 'Mrs. Pulgam Namita D.\r\n', 'Shagun Gupta\r\n', 'Riya Thakur\r\n', 'Vinay Maheshwari\r\n', 'Sign Language Converter Using Hand Gestures\r\n', '3rd International Conference on Intelligent Sustainable Systems (ICISS)\r\n', 'Thoothukudi, Tamilnadu, India\r\n', '0000-00-00', '', '', '10.1109/ICISS49785.2020.9315964\r\n', '0000-00-00', '', '', 'ISBN: 978-1-7281-7088-6\r\n', 0, 7000, 0, 'Yes', '', '', '', ''),
(5, '007', 'test  ', 'prachi', 'prachi', 'prachi', 'prachi', 'prachi', 'prachi', 'prachi', '2021-07-01', 'prachi', 'prachi', 'prachi', '2021-07-16', 'prachi', 'prachi', 'prachi', 2, 500, 300, 'no', 'prachi', 'PhD', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` int(11) NOT NULL,
  `sdrn` varchar(20) NOT NULL,
  `faculty_name` varchar(128) NOT NULL,
  `author1` varchar(128) NOT NULL,
  `author2` varchar(128) NOT NULL,
  `author3` varchar(128) NOT NULL,
  `author4` varchar(128) NOT NULL,
  `designation` varchar(128) NOT NULL,
  `copyright` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `application_no` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `reg_amount` int(128) NOT NULL,
  `amount_funded` int(128) NOT NULL,
  `reg_date` date NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `ntnl` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `opt1` varchar(128) NOT NULL,
  `opt2` varchar(128) NOT NULL,
  `opt3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`id`, `sdrn`, `faculty_name`, `author1`, `author2`, `author3`, `author4`, `designation`, `copyright`, `title`, `application_no`, `status`, `reg_amount`, `amount_funded`, `reg_date`, `publisher`, `ntnl`, `institute`, `opt1`, `opt2`, `opt3`) VALUES
(1, '687', 'Mrs. Sumithra T.V\r\n', '', '', '', '', 'Assistant Professor\r\n', '', 'Multi Level Context based search in chat engines for hybrid business models\r\n', 'Diary Number: 11459/2020-CO/SW\r\n', 'Published\r\n', 500, 0, '0000-00-00', '', '', 'RAIT only - No collaboration\r\n', '', '', ''),
(2, '896', 'Dr. Choudhari Sangeeta S.\r\n', 'Preet Chandan Kaur\r\n', 'Esha Kalokhe\r\n', 'Shehal Khedekar, Prakarsha Dahat\r\n', '', 'Professor\r\n', '', 'PREEMPTIVE DIAGNOSIS AND STAGE IDENTIFIER OF CHRONIC KIDNEY DISEASE\r\n', '', 'Published\r\n', 500, 0, '0000-00-00', '', '', '', '', '', ''),
(3, '482', 'Mrs. Bhoir Smita V.\r\n', 'Dr. Leena Ragha\r\n', '', '', '', 'Assistant Professor\r\n', '', 'Transcript System\r\n', '15968/2020-CO/SW\r\n', 'Published', 500, 0, '0000-00-00', '', '', '', '', '', ''),
(5, '007', 'test  ', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 0, 20, '2021-07-01', 'test', 'test', 'test', 'Personal', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
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

INSERT INTO `faculty` (`id`, `Sdrn`, `First_name`, `Middle_name`, `Last_name`, `DOB`, `Department`, `Contact_no`, `Addr`, `Email`, `Doj`, `Qualification`, `Desig`, `Password`, `OTP`) VALUES
(1, '007', 'test', NULL, NULL, '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', 'hncqx5d61o'),
(2, '150', 'Leena', NULL, 'Ragha', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
(3, '197', 'Snehal', '', 'Gaikwad', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
(4, '248', 'Arpita', 'Goutam', 'Palchoudhury', '1967-06-21', 'COMP', 1234567890, '-', '@', '2001-09-10', 'Ph.D  ( English Literature)', ' Associate Professor', '123', NULL),
(5, '295', 'Vanita', NULL, 'Mane', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
(6, '330', 'Namita', 'Damodar', 'Pulgam', '1983-09-10', 'COMP', 1234567890, '-', '@', '2005-12-23', 'M.E. Computer', 'A.P.', '123', 'bb9cad60'),
(7, '374', 'Aditi', 'Sunil', 'Chhabria', '1984-07-23', 'COMP', 1234567890, '-', '@', '2006-07-17', 'M.E. Computers', 'Assistant Professor', '123', '362394c6'),
(8, '377', 'Vaishali', 'Satish', 'Jadhav', '1971-09-17', 'COMP', 1234567890, '-', '@', '2007-07-13', 'Pursuing Ph.D.', 'Assistant Professor', '123', NULL),
(9, '381', 'Narendrakumar ', 'Ramchandra', 'Dasre', '1980-08-01', 'COMP', 1234567890, '-', '@', '2007-07-23', 'Ph. D.', ' Professor', '123', '3cde8181'),
(10, '383', 'Shital', 'Sunil', 'Mali', '1979-05-16', 'COMPS', 1234567890, '-', '@', '2007-07-09', 'Ph,D, pursing', 'Associate Professor', '123', NULL),
(11, '393', 'Dr. Amarsinh', 'V.', 'Vidhate', '1974-05-21', 'COMP', 1234567890, '-', '@', '2007-07-17', 'Ph.D.(Computer Engineering), M.Tech. (Computer Eng', 'Professor', '123', 'ZxpgBY'),
(12, '396', 'Puja', '', 'Padiya', '1979-09-09', 'COMP', 1234567890, '-', '@', '2007-01-08', 'Ph.D. Pursuing', 'Assistant Professor', '123', NULL),
(13, '407', 'Rajshree', NULL, 'Shedge', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
(14, '411', 'TUSHAR ', 'HINDURAO', 'GHORPADE ', '1979-02-03', 'COMP', 1234567890, '-', '@', '2008-01-18', 'ME in Computer Engineering', 'Assistant Professor', '123', 'ec71de5a'),
(15, '419', 'Sheetal', NULL, 'Ahir', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', '2MYHy6'),
(16, '482', 'Smita', '', 'Patil-Bhoir', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', '', '', '123', 'JQ76CN'),
(17, '526', 'Vilas', 'Janardan', 'Rane', '1986-11-11', 'COMP', 1234567890, '-', '@', '2011-02-03', 'M.Sc.', 'Assistant Professor', '123', NULL),
(18, '528', 'Swarupa', NULL, 'Bodhe', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
(19, '536', 'nilam', 'sangram', 'patil', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'ME electronics', 'Assistant professor', '123', NULL),
(20, '566', 'Pramod', 'Jagannath', 'Bide', '1989-01-25', 'COMP', 1234567890, '-', '@', '2012-08-16', 'M.E', 'AP', '123', 'NULL'),
(21, '570', 'ASHWINI ', 'ANIL', 'RAORANE', '1990-04-23', 'COMP', 1234567890, '-', '@', '2012-08-16', 'ME (Electronics)', 'Lecturer', '123', NULL),
(22, '576', 'Smita', 'dinesh', 'Bharne', '1982-06-14', 'COMP', 1234567890, '-', '@', '2012-09-13', 'M.Tech', 'Assistant Professor', '123', 'a22bc9ae'),
(23, '583', 'Snehal', NULL, 'Mumbailkar', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', 'RKfwZg'),
(24, '586', 'Vijaylaxmi', 'S', 'Bittal', '1984-07-31', 'COMP', 1234567890, '-', '@', '2013-01-10', 'M.Tech', 'assistant professor', '123', NULL),
(25, '587', 'Trupti', 'prashant', 'Patil', '1984-07-08', 'COMP', 1234567890, '-', '@', '2013-01-07', 'ME (copmuter)', 'Assistant Professor', '123', NULL),
(26, '593', 'Prathmesh', 'Narayan', 'Gunjgur', '1988-10-18', 'COMP', 1234567890, '-', '@', '2013-01-24', 'M.E Computer Engineering', 'Assistant Professor', '123', NULL),
(27, '601', 'Kriti', '', 'Karnam', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'B.E.,Mtech', 'Assistant Professor', '123', 'e7fa430d'),
(28, '603', 'Harsha', '', 'Saxena', '1990-11-06', 'COMP', 1234567890, '-', '@', '2013-07-01', 'mtech', 'assistant proffesor', '123', '2ff22efa'),
(29, '609', 'Nazia', '', 'S', '1982-01-02', 'COMP', 1234567890, '-', '@', '2013-07-08', 'M.Tech', 'Asst Professor', '123', NULL),
(30, '615', 'Shilpa', 'Tushar', 'Bhangale', '1976-07-27', 'CE', 1234567890, '-', '@', '2013-07-15', 'MPHIL- SET', 'assistant professor', '123', NULL),
(31, '618', 'Rubi', '', 'Mandal', '1986-01-19', 'COMP', 1234567890, '-', '@', '2013-07-25', 'Mtech', 'Lecturer', '123', NULL),
(32, '627', 'Apurva', 'Swapnil', 'Shinde', '1991-12-18', 'COMP', 1234567890, '-', '@', '2013-08-13', 'M.E. (Computers)', 'Assistant Professor', '123', '8023ed41'),
(33, '631', 'Savita', 'Kiran', 'Sawant', '1983-12-15', 'COMP', 1234567890, '-', '@', '2016-01-02', 'M.Tech in Computer Engg', 'Assistant Professor', '123', 'd2367116'),
(34, '638', 'Ekta', NULL, 'Sarda', '0000-00-00', '', 1234567890, '-', '@', '0000-00-00', '', '', '123', NULL),
(35, '650', 'Bhavana', 'Bhimsen', 'Turorikar', '1983-07-03', 'COMP', 1234567890, '-', '@', '2014-08-07', 'ME(Computer Networks)', 'Assistant Professor', '123', '694a090f'),
(36, '654', 'MANSI', 'BHUSHAN', 'JAWALE', '1991-10-31', 'COMP', 1234567890, '-', '@', '2014-06-15', 'M.A.', 'Lecturer', '123', NULL),
(37, '657', 'KHUSHBOO', 'SHIVKUMAR', 'PICHHODE', '1989-12-03', 'COMPS', 1234567890, '-', '@', '2014-07-16', 'M.E', 'Assistant Professor', '123', NULL),
(38, '663', 'Shilpa', 'Vilas', 'Mahagaonkar', '1984-05-24', 'COMP', 1234567890, '-', '@', '2014-07-16', 'ME', 'Assistant Professor', '123', NULL),
(39, '672', 'Pallavi', 'H.', 'Chitte', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.E.Computer Engineering', 'Assistant Professor', '123', '41fd65ae'),
(40, '677', 'kamlesh', 'lekhraj', 'nenwani', '1987-04-04', 'CE', 1234567890, '-', '@', '2014-08-01', 'M.E.', 'Lecturer', '123', NULL),
(41, '679', 'Dhanashri', 'Ashok', 'Bhosale', '1989-03-10', 'COMP', 1234567890, '-', '@', '2013-02-09', 'ME', 'lecturer', '123', '8aa5381f'),
(42, '687', 'Sumithra', '', 'T.V', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH', '', '123', NULL),
(43, '693', 'vishvas', 'hasuram', 'patil', '1986-01-15', 'COMP', 1234567890, '-', '@', '2015-07-01', 'M.sc.', 'Lecturer', '123', '703141b6'),
(44, '696', 'varsha', 'ramesh', 'patil', '0091-04-29', 'COMP', 1234567890, '-', '@', '2015-06-17', 'M.E.Computer Engineering', 'Assistant Professor', '123', NULL),
(45, '699', 'Preet Chandan', '', 'Kaur', '1989-02-09', 'COMP', 1234567890, '-', '@', '2015-07-15', 'M.E.Computer Engineering', 'Assistant professor', '123', 'CZtPQs'),
(46, '700', 'Pranali', 'Mohan', 'Yadav', '1990-12-18', 'CE', 1234567890, '-', '@', '2015-06-15', 'BE, ME (persuing)', 'Teaching Assistant', '123', NULL),
(47, '711', 'PRAMOD ', 'HARIBHAU', 'KACHARE', '1991-04-24', 'COMP', 1234567890, '-', '@', '2015-07-07', 'M.Tech.', 'Assistant Professor', '123', '536de3d5'),
(48, '712', 'DIAMBAR', 'VITTHALBUWA', 'PURI', '1990-09-29', 'COMP', 1234567890, '-', '@', '2015-07-07', 'M.Tech.', 'Assistant Professor', '123', '4241a33d'),
(49, '717', 'SWARALI', 'PRASHANT', 'SHETH', '1985-01-24', 'COMP', 1234567890, '-', '@', '2015-07-23', 'M.Tech.', 'Lecturer', '123', 'a862f9af'),
(50, '719', 'CHANDRAKANT', 'JAGANNATH', 'GAIKWAD', '1972-08-02', 'COMP', 1234567890, '-', '@', '2015-08-10', 'Ph.D.', 'Professor', '123', '36ed2611'),
(51, '721', 'Nivedita', 'Elan', 'Shekhar', '1992-04-28', 'COMPS', 1234567890, '-', '@', '2015-08-11', 'M.E.Computer Engineering', 'Assitance Professor', '123', NULL),
(52, '726', 'Krupi', 'Pranav', 'Saraf', '1989-07-19', 'COMPS', 1234567890, '-', '@', '2016-01-06', 'ME', 'Assistant Professor', '123', NULL),
(53, '728', 'saguna', 'kailas', 'ingle', '1983-08-05', 'COMP', 1234567890, '-', '@', '2016-12-03', 'M.E.(IT)', 'Assistant Professor', '123', NULL),
(54, '752', 'Shilpa', 'Gulabrao', 'Kolte', '1977-06-17', 'COMP', 1234567890, '-', '@', '2016-06-22', 'M.E.', 'A.P.', '123', '0bf3ade3'),
(55, '765', 'Pornima', 'Kailas', 'Gidhe', '1993-04-06', 'COMP', 1234567890, '-', '@', '2016-07-12', 'M.E.Computer Engineering', 'Assistant professor', '123', NULL),
(56, '767', 'Bijal', 'Chandubhai', 'Panchal', '1989-12-11', 'COMP', 1234567890, '-', '@', '2016-07-12', 'M.E', 'Assistant Professor', '123', '3acb890f'),
(57, '769', 'SAYALI', 'ASHOK', 'SAPKAL', '1989-05-08', 'COMP', 1234567890, '-', '@', '2016-07-13', 'M.E', 'Lecturer', '123', NULL),
(58, '770', 'Siddhi', 'Nikhil', 'Kadu', '1989-12-01', 'COMP', 1234567890, '-', '@', '2016-07-12', 'M.E', 'Assistant Professor', '123', '5b6a61d0'),
(59, '772', 'SAMEER', 'SHAMRAO', 'CHIKANE', '1993-09-03', 'COMPS', 1234567890, '-', '@', '2016-07-13', 'ME', 'ASSISTANT PROFESSOR', '123', NULL),
(60, '785', 'Snehal', 'Shashikant', 'Bhoir', '1992-08-15', 'COMP', 1234567890, '-', '@', '2016-07-21', 'M.E.Computer Engineering', 'Assistant Professor', '123', NULL),
(61, '786', 'JYOTI', 'VINAYAK', 'DEOGIRIKAR', '1994-01-14', 'COMP', 1234567890, '-', '@', '2016-08-01', 'ME', 'Assistant professor', '123', NULL),
(62, '787', 'SHRADDHA', 'ANANT', 'NARHARI', '1989-07-31', 'COMP', 1234567890, '-', '@', '2017-12-15', 'ME', 'Assitant Professor', '123', NULL),
(63, '800', 'Prof. Prashant', 's', 'Lokhande', '1974-06-16', 'COMP', 1234567890, '-', '@', '2017-01-16', 'ME IT', 'Associate Professor', '123', NULL),
(64, '802', 'PAYAL', 'FATEHLAL', 'SANCHETI', '1994-04-02', 'COMP', 1234567890, '-', '@', '2017-01-23', 'B.E', 'LAB INSTRUCTOR', '123', NULL),
(65, '803', 'Snehal', 'Suresh', 'Nikalje', '1992-10-27', 'COMP', 1234567890, '-', '@', '2017-02-01', 'BE', 'Lab Instructor', '123', NULL),
(66, '804', 'roshni', 'satish', 'singh', '1993-06-18', 'COMP', 1234567890, '-', '@', '2017-02-01', 'BE', 'lab instructor', '123', NULL),
(67, '806', 'Sathya', ' ', 'Arumugam', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'Ph.D', 'Assistant Professor', '123', NULL),
(68, '807', 'vishwanath', 'subhaschandra', 'chikkareddi', '1988-02-24', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH( COMPUTER SCIENCE AND ENGG), PhD(pursuing)', 'Assistant Professor', '123', NULL),
(69, '811', 'Rashmi', 'Amol', 'Dhumal', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.E.Computer Engineering', 'Associate Professor', '123', NULL),
(70, '812', 'Tabassum', 'Altaf', 'Maktum', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.E.Computer Engineering', 'Assistant Professor', '123', NULL),
(71, '817', 'PRACHI', 'DEEPAK', 'JUNWALE', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH( COMPUTER SCIENCE AND ENGG)', 'ASSISTANT PROFESSOR', '123', NULL),
(72, '821', 'NEERAJ', 'KUMAR', 'SHARMA', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'PhD', 'PROFESSOR', '123', NULL),
(73, '826', 'Ida', 'Hector', 'Lionel', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.Tech(Information Technology)', 'Assistant Professor', '123', 'NULL'),
(74, '827', 'PRIYANKA', 'RAMRAO', 'GUTTE', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.Tech(Control system)', 'Asst. Professor', '123', NULL),
(75, '829', 'Himani', 'Mohan', 'Jawale', '0000-00-00', 'COMP', 1234567890, '-', '@', '0000-00-00', 'M.TECH( COMPUTER ENGG)', 'Assistant Professor', '123', NULL),
(76, '840', 'Dr. Dhiraj', 'B', 'Magare', '1981-02-02', 'COMP', 1234567890, '-', '@', '2017-11-20', 'Doctor', 'Associate Professor', '123', NULL),
(77, '842', 'Suchita', 'Suresh', 'Dange', '1993-04-26', 'COMP', 1234567890, '-', '@', '2017-12-04', 'M.TECH( COMPUTER ENGG)', 'Assistant Professor', '123', NULL),
(78, '848', 'Rohini', 'Lakhanlal', 'Damahe', '1988-02-03', 'COMP', 1234567890, '-', '@', '2017-11-12', 'ME(Computer Engineering)', 'Assistant Professor', '123', NULL),
(79, '858', 'SHITAL', 'HARIBHAU', 'GADE', '1983-06-06', 'COMP', 1234567890, '-', '@', '2018-01-02', 'M.E.Computer Engineering', 'ASSISTANT PROFESSOR', '123', NULL),
(80, '874', 'AMIT', 'KAILASH', 'BARVE', '1985-08-26', 'COMP', 1234567890, '-', '@', '2018-02-16', 'Phd', 'Assiciate Professor', '123', NULL),
(81, '876', 'BHARTI', 'VISHANDAS', 'NATHWANI', '1984-07-27', 'COMPS', 1234567890, '-', '@', '2018-02-20', 'Ph.D.', 'Assistant Professor', '123', NULL),
(82, '878', 'Bharti', 'A', 'Joshi', '1970-04-25', 'COMPS', 1234567890, '-', '@', '2018-03-01', 'Phd', 'Professor', '123', 'bHhwYV'),
(83, '888', 'Dr Dhananjay', 'Manohar', 'Dakhane', '1972-04-06', 'COMP', 1234567890, '-', '@', '1972-04-06', 'PhD', 'Professor', '123', 'hDvgGJ'),
(84, '892', 'Dr. Yogita ', 'Dhanraj', 'Mistry', '1979-07-26', 'COMP', 1234567890, '-', '@', '2018-12-17', 'Ph. D.', 'Associate Professor', '123', 'euFpRr'),
(85, '894', 'B', 'J', 'Gorad', '1988-04-04', 'COMP', 1234567890, '-', '@', '2018-12-24', 'M.Tech CST,  PhD Pursuing', 'Assistant Professor', '123', NULL),
(86, '896', 'SANGITA', 'SANTOSH', 'CHAUDHARI', '1977-06-10', 'COMP', 1234567890, '-', '@', '2019-01-01', 'PhD', 'professor', '123', '4GoHWM'),
(87, '897', 'R', 'D', 'Suryawanshi', '1986-05-12', 'COMP', 1234567890, '-', '@', '2019-01-01', 'Msc, Net,Phd Persuing', 'Assistant Professor', '123', 'D7qHRm'),
(88, '898', 'vaibhav', 'Eknath', 'Narawade', '1977-08-08', 'COMP', 1234567890, '-', '@', '2019-01-03', 'PhD Computer Enggineering', 'Professor', '123', 'uWzgp2'),
(89, '999', 'a', 'a', 'a', '0000-00-00', 'INSTR', 1234567890, '-', '@', '0000-00-00', 'a', 'a', '123', 'dd867ff4'),
(90, 'abc', 'sf', 'f', 'h', '2016-01-07', 'CE', 1234567890, '-', '@', '2016-01-12', 'ME pursuing', 'ap', '123', '1225dbb4');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `sdrn` varchar(128) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `author1` varchar(128) NOT NULL,
  `author2` varchar(128) NOT NULL,
  `author3` varchar(128) NOT NULL,
  `author4` varchar(128) NOT NULL,
  `title` varchar(255) NOT NULL,
  `journal_name` varchar(255) NOT NULL,
  `volume_no` varchar(128) NOT NULL,
  `page_no` int(128) NOT NULL,
  `isbn_no` varchar(255) NOT NULL,
  `doi` varchar(128) NOT NULL,
  `year` date NOT NULL,
  `desg` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `publication_date` date NOT NULL,
  `paper_index` varchar(255) NOT NULL,
  `funding_org` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `impact_factor` varchar(20) NOT NULL,
  `ntnl_no` varchar(255) NOT NULL,
  `indexed_in` varchar(255) NOT NULL,
  `no_of_times` int(20) NOT NULL,
  `reg_amount` int(200) NOT NULL,
  `amount_sanctioned` int(255) NOT NULL,
  `awards` varchar(255) NOT NULL,
  `opt1` varchar(128) NOT NULL,
  `opt2` varchar(128) NOT NULL,
  `opt3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `sdrn`, `faculty_name`, `author1`, `author2`, `author3`, `author4`, `title`, `journal_name`, `volume_no`, `page_no`, `isbn_no`, `doi`, `year`, `desg`, `status`, `publication_date`, `paper_index`, `funding_org`, `institute`, `impact_factor`, `ntnl_no`, `indexed_in`, `no_of_times`, `reg_amount`, `amount_sanctioned`, `awards`, `opt1`, `opt2`, `opt3`) VALUES
(1, '482', 'Mrs. Bhoir Smita V.', 'Mrs. Bhoir Smita V.', 'Dr. Sunita Patil', '', '', 'ICT-based Learner-Centric Evolutionary Learning Model: An effective solution to Teaching-Learning process', 'IOP Conf. Series: Materials Science and Engineering\r\n', '1074', 1, 'doi:10.1088/1757-899X/1074/1/012028\r\n', 'doi:10.1088/1757-899X/1074/1/012028', '0000-00-00', '', 'Scopus', '0000-00-00', '', 'NA', 'K.J. Somaiya Institute of Engineering and Information Technology, Mumbai, Maharashtra, India.', '0.53', '', '0', 0, 6000, 0, 'NA', '', '', ''),
(2, '812', 'Mrs. Maktum Tabassum A.\r\n', 'Mrs. Maktum Tabassum A.\r\n', 'Dr. Lokesh B. Bhajantri\r\n', '', '', 'Behavior and Feedback based Trust Computation in Cloud Environment\r\n', 'Journal of King Saud University - Computer and Information Sciences\r\n', 'Article in press\r\n', 1, 'ISSN: 1319-1578\r\n', 'https://doi.org/10.1016/j.jksuci.2020.12.003', '0000-00-00', 'Assistant Professor', '', '0000-00-00', '', '', 'Basaveshwar Engineering College, Bagalkot\r\n', '3.5', '', 'Scopus\r\n', 0, 0, 0, 'NA', '', '', ''),
(4, '007', 'test  ', 'test   ', 'test   ', 'test   ', 'test   ', 'test   ', 'test   ', 'test   ', 50, 'test   ', 'test   ', '2021-07-02', 'test   ', 'test   ', '2021-07-09', 'test   ', 'test   ', 'test   ', 'test   ', 'test   ', 'test   ', 2, 500, 100, 'test   ', 'PhD', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patent`
--

CREATE TABLE `patent` (
  `id` int(11) NOT NULL,
  `sdrn` varchar(20) NOT NULL,
  `faculty_name` varchar(128) NOT NULL,
  `author1` varchar(128) NOT NULL,
  `author2` varchar(128) NOT NULL,
  `author3` varchar(128) NOT NULL,
  `author4` varchar(128) NOT NULL,
  `designation` varchar(128) NOT NULL,
  `patent` date NOT NULL,
  `title` varchar(128) NOT NULL,
  `application_no` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `reg_amount` int(128) NOT NULL,
  `amount_funded` int(128) NOT NULL,
  `reg_date` date NOT NULL,
  `opt1` varchar(128) NOT NULL,
  `opt2` varchar(128) NOT NULL,
  `opt3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patent`
--

INSERT INTO `patent` (`id`, `sdrn`, `faculty_name`, `author1`, `author2`, `author3`, `author4`, `designation`, `patent`, `title`, `application_no`, `status`, `reg_amount`, `amount_funded`, `reg_date`, `opt1`, `opt2`, `opt3`) VALUES
(1, '687', 'Mrs. Sumithra T.V\r\n', 'Mrs. Sumithra T.V\r\n', '', '', '', 'Assistant Professor\r\n', '2020-08-17', 'Multilevel context based search in chat engines for hybrid business models.\r\n', '11459/2020-CO/SW\r\n', 'Published', 500, 0, '2020-10-22', '', '', ''),
(2, '699', 'Preetchandan Kaur', 'Preet Chandan Kaur', 'Dr. Chaudhari Sangita S.', 'Esha Kalokhe', 'Shehal Khedekar, Prakarsha Dahat', 'Assistant Professor', '2020-11-01', 'PREEMPTIVE DIAGNOSIS AND STAGE IDENTIFIER OF CHRONIC KIDNEY DISEASE ', '17337/2020-CO/SW ', 'Published', 500, 0, '2021-03-02', '', '', ''),
(3, '482', 'Mrs. Bhoir Smita V.\r\n', 'Dr. Leena Ragha\r\n', '', '', '', 'Assistant Professor\r\n', '2020-10-16', 'Transcript System\r\n', '15968/2020-CO/SW\r\n', 'Published', 500, 0, '2021-03-24', '', '', ''),
(6, '007', 'test  ', 'test', 'test', 'test', 'test', 'test', '2021-07-17', 'test', 'test', 'test', 200, 50, '2021-07-01', 'PhD', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rd`
--

CREATE TABLE `rd` (
  `id` int(25) NOT NULL,
  `sdrn` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `First_name` text NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Middle_name` text NOT NULL,
  `Last_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rd`
--

INSERT INTO `rd` (`id`, `sdrn`, `Password`, `Email`, `First_name`, `Contact_no`, `Middle_name`, `Last_name`) VALUES
(7, 'verify1', '123', 'preramane@gmail.com', 'Prachi', '0', '', ''),
(8, 'hod1', 'hod@123', '', '', '', '', ''),
(9, 'verify1', '123', 'preramane@gmail.com', 'Prachi', '0', '', ''),
(10, 'hod1', 'hod@123', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_chapter`
--
ALTER TABLE `book_chapter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chapter_name` (`chapter_name`,`book_name`);

--
-- Indexes for table `book_publication`
--
ALTER TABLE `book_publication`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_name` (`book_name`,`isbn_no`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paper_title` (`paper_title`,`isbn_no`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patent`
--
ALTER TABLE `patent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`,`application_no`);

--
-- Indexes for table `rd`
--
ALTER TABLE `rd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_chapter`
--
ALTER TABLE `book_chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_publication`
--
ALTER TABLE `book_publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patent`
--
ALTER TABLE `patent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rd`
--
ALTER TABLE `rd`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
