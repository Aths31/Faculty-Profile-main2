-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 11:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `Srno` int(11) NOT NULL,
  `SDRN` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `University` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Semester` varchar(11) NOT NULL,
  `Venue` varchar(80) NOT NULL,
  `Date` date NOT NULL,
  `uploads` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`Srno`, `SDRN`, `Name`, `University`, `Subject`, `Semester`, `Venue`, `Date`, `uploads`) VALUES
(1, 150, 'Dr. Ragha Leena R.', 'D.Y.patil Deemed to be University', 'Board Of Studies (Syllabus  Setting and Verificati', 'III', 'Online', '0000-00-00', ''),
(2, 396, 'Mrs. Padiya Puja Y.', 'D Y Patil Deemed to be University', 'Computer NEtworks', 'IV', 'Online - Ramaro Adik Institute of Technology', '0000-00-00', ''),
(3, 295, 'Dr. Mane Vanita M.', 'University of Mumbai', 'Digital Forensic (ECCDLO_6013)', 'VI', 'Pillai HOC College of Engineering and Technology, Rasayani', '0000-00-00', ''),
(4, 407, 'Mrs. Shedge Rajashree A.', 'DYPU', 'SBL-1 & Mini Project', 'III', 'RAIT(online)', '0000-00-00', ''),
(5, 411, 'Mr. Ghorpade Tushar H.', 'D.Y.Patil Deemed to be university', 'Database Management System', 'IV', 'Ramrao Adik Institute of Technology', '0000-00-00', ''),
(6, 393, 'Dr. Vidhate Amarsinh A.', 'Punyashlok Ahilyadevi Holkar Solapur University, S', 'BoS Meeting for syallbus setting', 'III', 'online', '0000-00-00', ''),
(7, 393, 'Dr. Vidhate Amarsinh A.', 'punyashlok Ahilyadevi Hotkar solapur University, s', 'Board of Studies in Information Technology of Walc', 'III', 'Online', '0000-00-00', ''),
(8, 393, 'Dr. Vidhate Amarsinh A.', 'D.Y.patil Deemed to be University', 'Board Of Studies (Syllabus  Setting and Verificati', 'III', 'Online', '0000-00-00', ''),
(9, 898, 'Dr. NarawadeVaibhav E.', 'Dr. BATU, Lonere', 'Computer Engineering', 'VII', 'Online', '2044-01-03', ''),
(10, 898, 'Dr. NarawadeVaibhav E.', 'University of Mumbai', 'Bsc_Computer Science ', 'VII', 'Online', '2044-04-01', ''),
(11, 898, 'Dr. NarawadeVaibhav E.', 'University of Mumbai', 'Information Technology', 'VII', 'Online', '2044-06-04', ''),
(12, 898, 'Dr. NarawadeVaibhav E.', 'University of Mumbai', 'Information Technology', 'VII', 'Online', '0000-00-00', ''),
(13, 396, 'Mrs. Padiya Puja Y.', 'D Y Patil Deemed to be University', 'Operating System and Computer Networks', 'IV', 'Online', '0000-00-00', ''),
(14, 812, 'Mrs. Maktum Tabassum A.', 'D Y Patil Deemed to be University', 'Theoretical Computer Science', 'IV', 'Online', '0000-00-00', ''),
(15, 150, 'Dr. Ragha Leena R.', 'Mumbai University ', 'BOS Information Technology ', 'NA', '', '0000-00-00', ''),
(16, 150, 'Dr. Ragha Leena R.', 'Mumbai University ', 'Syllabus revision workshop at Datta Meghe College ', 'NA', 'Datta Meghe College of Engineering,Airoli', '2044-04-05', ''),
(17, 150, 'Dr. Ragha Leena R.', 'Mumbai University ', 'Chairman and Paper Setter', 'ME Sem-1(AO', 'Mumbai University', '0000-00-00', ''),
(18, 150, 'Dr. Ragha Leena R.', 'Mumbai University ', 'Chairman and Paper Setter', 'ME Sem-2(Ad', 'Mumbai University', '0000-00-00', ''),
(19, 150, 'Dr. Ragha Leena R.', 'Mumbai University ', 'Chairman and Paper Setter', 'TE Sem-5(Mu', 'Mumbai University', '0000-00-00', ''),
(20, 393, 'Dr. Vidhate Amarsinh A.', 'Mumbai University ', 'paper setter', 'BE - Sem-VI', 'Mumbai University', '0000-00-00', ''),
(21, 393, 'Dr. Vidhate Amarsinh A.', 'Mumbai University ', ' Chairman & paper setter', 'BE - Sem-VI', 'Mumbai University', '0000-00-00', ''),
(22, 393, 'Dr. Vidhate Amarsinh A.', 'Mumbai University ', 'paper setter', 'ME (Comp. E', 'Mumbai University', '0000-00-00', ''),
(23, 393, 'Dr. Vidhate Amarsinh A.', 'Mumbai University ', 'paper setter', 'T.E.(COMPUT', 'Mumbai University', '0000-00-00', ''),
(24, 393, 'Dr. Vidhate Amarsinh A.', 'Mumbai University ', 'paper setter', 'BE - Sem-VI', 'Mumbai University', '0000-00-00', ''),
(25, 393, 'Dr. Vidhate Amarsinh A.', 'Mumbai University ', 'paper setter', 'BE - Sem-VI', 'Mumbai University', '0000-00-00', ''),
(26, 393, 'Dr. Vidhate Amarsinh A.', 'Mumbai University ', 'paper setter', 'B.E.(COMPUT', 'Mumbai University', '0000-00-00', ''),
(27, 393, 'Dr. Vidhate Amarsinh A.', 'Mumbai University ', 'paper setter', 'T.E.(COMPUT', 'Mumbai University', '0000-00-00', ''),
(28, 898, 'Dr. NarawadeVaibhav E.', 'Mumbai University ', 'Member, BOS Information Technology ', '', '', '0000-00-00', ''),
(29, 898, 'Dr. NarawadeVaibhav E.', 'Mumbai University ', 'paper setter', 'ME (Comp Ne', 'Mumbai University', '0000-00-00', ''),
(30, 898, 'Dr. NarawadeVaibhav E.', '', 'Member, BOS Computer Science', '', '', '0000-00-00', ''),
(31, 898, 'Dr. NarawadeVaibhav E.', 'Mumbai University', 'Convenor - Java Programming Lab', 'Sem - III', 'Mumbai University', '0000-00-00', ''),
(32, 898, 'Dr. NarawadeVaibhav E.', 'Dr. BATU, Lonere', 'Syllabus Committe Member', 'B. Tech fin', 'Dr. BATU, Lonere', '0000-00-00', ''),
(33, 898, 'Dr. NarawadeVaibhav E.', 'DBATU , Lonere', 'Syllabus Settings', 'VIII', 'Online', '0000-00-00', ''),
(34, 898, 'Dr. NarawadeVaibhav E.', 'Mumbai University', 'Syllabus Setting', 'IV, VI, VII', 'online', '0000-00-00', ''),
(35, 896, 'Dr. Chaudhari Sangita S.', 'AICTE Curriculum', 'C Programming', 'II', 'LTCOE', '0000-00-00', ''),
(36, 874, 'Dr. Barve Amit K.', 'Mumbai University', 'Multimedia System (Paper Setting)', 'III', 'Mumbai University', '0000-00-00', ''),
(37, 295, 'Mrs. Mane Vanita M.', 'Mumbai University', 'Analysis of algorithm and Analysis of algorithm La', 'IV', 'Universal College of Engineering, Kaman Bhivandi road, Kaman village, Vasai.', '0000-00-00', ''),
(38, 295, 'Mrs. Mane Vanita M.', 'Mumbai University', 'Discrete Structures and Automata Theory', 'IV', 'ECS. Fr. CRCE', '0000-00-00', ''),
(39, 295, 'Mrs. Mane Vanita M.', 'University of Mumbai', 'Discrete Structures and Automata Theory', '4th', 'Dept of Electronics and Computer Science Engineering,Fr. Conceicao Rodrigues Col', '0000-00-00', ''),
(40, 811, 'Mrs. Dhumal Rashmi A.', 'Mumbai University', 'Discrete Structure and Graph Theory', 'III', 'VESIT, Chembur', '0000-00-00', ''),
(41, 811, 'Mrs. Dhumal Rashmi A.', 'university of Mumbai', 'Discrete Structure and GraphvTheory', '3rd', 'VESIT, Chembur', '0000-00-00', ''),
(42, 374, 'Mrs. Chhabria Aditi S.', 'University of Mumbai', 'Data structures ', '3rd', 'Pillai College of Engineering', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`Srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
