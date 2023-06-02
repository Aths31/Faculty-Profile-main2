-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 11:46 AM
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
-- Database: `faculty_par`
--

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
(1, 150, 'Dr. Ragha Leena R.', 'University of Mumbai', 'Orientation on AI and SC', 'VII', 'RAIT on behalf of Mumbai University', '2019-07-09', ''),
(2, 393, 'Dr. Vidhate Amarsinh A.', 'University of Mumbai', 'Mobile Communication & Computing', 'VII', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', ''),
(3, 393, 'Dr. Vidhate Amarsinh A.', 'University of Mumbai', 'Mobile Application Development Lab', 'VII', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', ''),
(4, 393, 'Dr. Vidhate Amarsinh A.', 'University of Mumbai', 'Ad-hoc Wireless Network of BE Computer Engineering', 'VIII', 'K.J. Somaiyya institute of engineering and information Technology, Sion, Mumbai', '0000-00-00', ''),
(5, 393, 'Dr. Vidhate Amarsinh A.', 'University of Mumbai', 'Computational Lab-II of BE Computer Engineering of', 'VIII', 'K.J. Somaiyya institute of engineering and information Technology, Sion, Mumbai', '0000-00-00', ''),
(6, 898, 'Dr. NarawadeVaibhav E.', 'University of Mumbai', 'Advanced Computer Network', 'VI (CS DLO', 'VESIT, Mumbai', '0000-00-00', ''),
(7, 898, 'Dr. NarawadeVaibhav E.', 'University of Mumbai', 'Syllabus Setting', 'VIII', 'Online DBATU University', '0000-00-00', ''),
(8, 878, 'Dr. Joshi Bharti A.', 'University of Mumbai', 'Orientation on MIS', 'VII', 'Pillai College of Engineering, Panvel', '0000-00-00', ''),
(9, 896, 'Dr. Chaudhari Sangita S.', 'University of Mumbai', 'HPC ', 'VII(IT)', 'Terna Engineering College, Nerul', '0000-00-00', ''),
(10, 821, 'Dr. Sharma Neeraj K.', 'University of Mumbai', 'Orientation AI &SC ', 'VII(CE)', 'RAIT', '0000-00-00', ''),
(11, 407, 'Mrs. Shedge Rajashree A.', 'University of Mumbai', 'Orientation of NLP', 'VIII', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', ''),
(12, 396, 'Mrs. Padiya Puja Y.', 'University of Mumbai', 'Mobile Communication & Computing', 'VII', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', ''),
(13, 396, 'Mrs. Padiya Puja Y.', 'University of Mumbai', 'Mobile Application Development Lab', 'VII', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', ''),
(14, 396, 'Mrs. Padiya Puja Y.', 'University of Mumbai', 'Ad-hoc Wireless Network of BE Computer Engineering', 'VIII', 'K.J. Somaiyya institute of engineering and information Technology, Sion, Mumbai', '0000-00-00', ''),
(15, 396, 'Mrs. Padiya Puja Y.', 'University of Mumbai', 'Computational Lab-II of BE Computer Engineering of', 'VIII', 'K.J. Somaiyya institute of engineering and information Technology, Sion, Mumbai', '0000-00-00', ''),
(16, 396, 'Mrs. Padiya Puja Y.', 'University of Mumbai', 'Distributed Computing ', 'VIII', 'Vivekanand Institute of Technology', '0000-00-00', ''),
(17, 396, 'Mrs. Padiya Puja Y.', 'University of Mumbai', 'Distributed Computing Lab', 'VIII', 'Vivekanand Institute of Technology', '0000-00-00', ''),
(18, 396, 'Mrs. Padiya Puja Y.', 'University of Mumbai', 'HPC ', 'VII(IT)', 'Terna Engineering College, Nerul', '0000-00-00', ''),
(19, 374, 'Mrs. Chhabria Aditi S.', 'University of Mumbai', 'Big Data Analytics', 'VII', 'DBIT,Mumbai', '0000-00-00', ''),
(20, 374, 'Mrs. Chhabria Aditi S.', 'University of Mumbai', 'Human Machine Interaction', 'VIII', 'TSEC, Mumbai', '0000-00-00', ''),
(21, 812, 'Mrs. Maktum Tabassum A.', 'University of Mumbai', 'ASSDF', 'VII', 'D. J. Sangvi COE', '0000-00-00', ''),
(22, 807, 'Mr. Chikkareddi Vishwanath S.', 'University of Mumbai', 'Ad-hoc Wireless Network of BE Computer Engineering', 'VIII', 'K.J. Somaiyya institute of engineering and information Technology, Sion, Mumbai', '0000-00-00', ''),
(23, 807, 'Mr. Chikkareddi Vishwanath S.', 'University of Mumbai', 'Computational Lab-II of BE Computer Engineering of', 'VIII', 'K.J. Somaiyya institute of engineering and information Technology, Sion, Mumbai', '0000-00-00', ''),
(24, 411, 'Mr. Ghorpade Tushar H.', 'University of Mumbai', 'BDA', 'VII', 'DBIT,Mumbai', '0000-00-00', ''),
(25, 687, 'Mrs. Sumithra T.V', 'University of Mumbai', 'Orientation on AI and SC', 'VII', 'RAIT on behalf of Mumbai University', '0000-00-00', ''),
(26, 894, 'Mr. Gorad Balwant J.', 'University of Mumbai', 'Big Data Analytics', 'VI', 'DBIT, Kurla', '0000-00-00', ''),
(27, 650, 'Mrs. Alte Bhavna A.', 'University of Mumbai', 'Mobile Communication & Computing', 'VII', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', ''),
(28, 650, 'Mrs. Alte Bhavna A.', 'University of Mumbai', 'Mobile Application Development Lab', 'VII', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', ''),
(29, 650, 'Mrs. Alte Bhavna A.', 'University of Mumbai', 'Distributed Computing ', 'VIII', 'Vivekanand Institute of Technology', '0000-00-00', ''),
(30, 650, 'Mrs. Alte Bhavna A.', 'University of Mumbai', 'Distributed Computing Lab', 'VIII', 'Vivekanand Institute of Technology', '0000-00-00', ''),
(31, 593, 'Mr. GunjgurPrathmesh N.', 'University of Mumbai', 'Mobile Communication & Computing', 'VII', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', ''),
(32, 593, 'Mr. GunjgurPrathmesh N.', 'University of Mumbai', 'Mobile Application Development Lab', 'VII', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', ''),
(33, 638, 'Mrs. Ekta K. Sarda', 'University of Mumbai', 'Orientation on DSIP', 'VII', 'Rajiv Gandhi Institute of Technology, Andhrei', '0000-00-00', ''),
(34, 603, 'Ms. Saxena Harsha A.', 'University of Mumbai', 'Distributed Computing ', 'VIII', 'Vivekanand Institute of Technology', '0000-00-00', ''),
(35, 603, 'Ms. Saxena Harsha A.', 'University of Mumbai', 'Distributed Computing Lab', 'VIII', 'Vivekanand Institute of Technology', '0000-00-00', ''),
(36, 0, '', '', '', '', '', '0000-00-00', ''),
(37, 374, 'Mrs. Chhabria Aditi S.', 'University of Mumbai ', 'Data Structures', 'III', 'Pillai College of Engineering', '0000-00-00', ''),
(38, 407, 'Mrs. Shedge Rajashree A.', 'University of Mumbai', 'Mini Project-IA', 'III', 'LT College of Engg.(online )', '2044-02-08', ''),
(39, 411, 'Mr. Ghorpade Tushar H.', 'Mumbai ', 'Database Management System (ITC303)', 'III', 'K.J.Somaiya -Online', '2044-01-04', ''),
(40, 411, 'Mr. Ghorpade Tushar H.', 'Mumbai University', 'DBMS and SQL Lab', 'III', 'K.J.Somaya Sion', '2044-01-04', ''),
(41, 419, 'Mrs. Ahir Sheetal A.', 'Universityof Mumbai', 'Skill Base Lab.Course :Object Oriented Programming', 'III', 'Online', '2044-02-05', ''),
(42, 576, 'Mrs. Bharne Smita D.', 'Universityof Mumbai', 'Skill Base Lab Course: Object Oriented Programming', 'III', 'Online', '2044-02-05', ''),
(43, 583, 'Ms. Mumbaikar Snehal J.', 'University of Mumbai', 'Mini project A', 'III', 'online', '2044-02-08', ''),
(44, 583, 'Ms. Mumbaikar Snehal J.', 'Mumbai', 'SBL-JAVA', 'III', 'online', '2044-02-05', ''),
(45, 627, 'Mrs. Shinde Apurva S.', 'University of Mumbai', 'Computer Graphics and Computer Graphics Lab', 'III', 'TSEC Bandra(Online)', '2044-02-02', ''),
(46, 638, 'Mrs. Ekta K. Sarda', 'Mumbai University', 'Computer Graphics', 'III', 'Thadomal Shahani Engineering College, Bandra', '2044-02-02', ''),
(47, 650, 'Mrs. Alte Bhavna A.', 'Mumbai University', 'Digital Logic & Computer Organization and Architec', 'III', 'Datta Meghe College of Engineering', '2044-02-07', ''),
(48, 677, 'Mr. Nenwani Kamlesh L.', 'Mumbai University', 'Data Strcuture', 'III', 'online by PILLAI COLLEGE OF ENGINEERING', '2044-02-06', ''),
(49, 679, 'Ms. Bhosale Dhanashri A.', 'Mumbai University', 'Digital Logic and Computer Organization and Organi', 'III', 'Datta Meghe College Of Engineering', '2044-02-07', ''),
(50, 752, 'Dr. Kolte Shilpa G.', 'Mumbai University ', 'Mini Project-IA (CSM301) ', 'III', 'LTCOE,Navi Mumbai', '2044-02-08', ''),
(51, 752, 'Dr. Kolte Shilpa G.', 'Mumbai University', 'SBL JAVA', 'III', 'RGIT, MUMBAI', '2044-02-05', ''),
(52, 811, 'Mrs. Dhumal Rashmi A.', 'Mumbai University', 'Discrete Structure and Graph Theory', 'III', 'Online', '2044-02-03', ''),
(53, 811, 'Mrs. Dhumal Rashmi A.', 'Mumbai University', 'SBL-Java', 'III', 'RGIT Mumbai', '2044-02-05', ''),
(54, 812, 'Mrs. Maktum Tabassum A.', 'University of Mumbai', 'Data Structures', 'III', 'PIllai College of Engineering (Online)', '2044-02-06', ''),
(55, 878, 'Dr. Joshi Bharti A.', 'Mumbai UNiversity', 'Discrete Structures and Graph Theory', 'III', 'Online', '2044-02-03', ''),
(56, 896, 'Dr. Choudhari Sangeeta S.', 'Mumbai University', 'Computer Graphics', 'III', 'Thadomal Shahani Engineering College, Bandra', '2044-02-02', ''),
(57, 898, 'Dr. NarawadeVaibhav E.', 'University of Mumbai', 'Java', 'III', 'Online', '2044-01-08', ''),
(58, 898, 'Dr. NarawadeVaibhav E.', 'University of Mumbai ', 'Mini Project ', 'V', 'Online', '2044-02-08', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orientation`
--
ALTER TABLE `orientation`
  ADD PRIMARY KEY (`Srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orientation`
--
ALTER TABLE `orientation`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
