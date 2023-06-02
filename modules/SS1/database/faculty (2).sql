-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 12:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `Username` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`Username`, `Password`) VALUES
('admin', '12345'),
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `Faculty_name` varchar(60) NOT NULL,
  `Award_name` varchar(60) NOT NULL,
  `Title_of_innovation` varchar(30) NOT NULL,
  `Name_of_awardee` varchar(30) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Event_name` varchar(60) NOT NULL,
  `Awarding_agency` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Date` date DEFAULT NULL,
  `University` varchar(60) NOT NULL,
  `College_name` varchar(60) NOT NULL,
  `Level` varchar(60) NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `Sdrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `Faculty_name`, `Award_name`, `Title_of_innovation`, `Name_of_awardee`, `Position`, `Event_name`, `Awarding_agency`, `Category`, `Date`, `University`, `College_name`, `Level`, `pdf`, `Sdrn`) VALUES
(3, 'Leena R Ragha', ' Avishkar Research Convention 2019-21', '-', 'Leena Ragha', '3rd', ' 14th Intercollegiate / Institute / Department Avishkar', '-', 'Fr. C. Rodrigues Institute of ', '0001-01-01', 'Mumbai', 'Fr. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai', 'Local level', 'upload_files/awards/Edu_JSTSP1.pdf', 1),
(4, 'Amarsinh A Vidhate', 'Avishkar Research Convention 2019-20', '-', 'Dr Amarsinh A Vidhate', 'Participating', '14th Intercollegiate / Institute / Department Avishkar Resea', '', '-', '0000-00-00', 'University of Mumbai', 'RAIT', 'District', '', 2),
(5, 'Amarsinh A Vidhate', ' Avishkar Research Convention 2019-20', '-', 'Amarsinh A Vidhate', 'Participating', '14th Intercollegiate / Institute / Department Avishkar Resea', '-', '-', '0000-00-00', 'University of Mumbai', 'Fr. C. Rodrigues Institute of Technology, Vashi, Navi Mumbai', 'Local level', '', 2),
(6, 'Vaibhav E Narawade', 'Outstanding Research Paper', '-', 'Vaibhav E Narawade', 'Participating', 'International Commerce & Management Co', 'Mumbai University', '', '0000-00-00', 'Mumbai University', 'RAIT', 'Local level', '', 3),
(7, 'Dhanajay M Dakhane', 'Significant Contribution for AY 2018-2019', '', '', 'Participating', '', '', '', '0000-00-00', '', '', 'Local level', '', 5),
(8, 'Vanita M Mane', 'Appreciation Letter', '', '', 'Participating', '', '', '', '0000-00-00', 'Cyber Crime cell, Crime Branch CBD Belapur', 'Navi Mumbai', 'National level', '', 6),
(9, 'Vishwanath S Chikkareddi', 'Moodle for Teachers', '-', 'Vishwanath S Chikkareddi', '1st', 'Online test by SPOKEN TREE, IIT BOMBAY', '-', '-', '0000-00-00', 'Mumbai University & IIT Bombay', 'Vidyalankar Institute of Technology With Spoken tree IIT Bom', '-', '', 16),
(10, 'Tushar H Ghorpade ', 'Data Science ', '-', 'Tushar H Ghorpade', 'Participating', 'Quiz', '-', '-', '0000-00-00', '-', 'NBNSCOE, Solapur', 'National', '', 19),
(11, 'Smita D Bharne', 'Faculty Program on NBA', '-', 'Smita D Bharne', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University', 'Bharati Vidyapeeth College Of Engineering, Navi Mumbai', 'National Level', '', 20),
(12, 'Smita D Bharne', 'Covid -19 Awareness Program ', '-', 'Smita D Bharne', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Shivaji  University, Kolhapur ', 'National Service Scheme and Shiv Shayata Disaster Managment ', 'National Level', '', 20),
(13, 'Smita D Bharne', 'Awareness Quiz on  -Covid -19 ', '-', 'Smita D Bharne', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University ', 'RAIT, Nerul', 'National Level', '', 20),
(14, 'Sheetal A Ahir', 'Fundamentals of Computer Science', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', '-', 'VIVA Institute of Technology', '-', '', 21),
(15, 'Sheetal A Ahir', 'Ayush Sanjivani Quiz', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Ministry of Ayush and MyGov.', '-', 'National', '', 21),
(16, 'Sheetal A Ahir', 'Covid -19 Awareness Program ', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Anna University', 'Thiagarajar Collage of Engg.', 'National', '', 21),
(17, 'Sheetal A Ahir', 'Intercollegiate Environmental Quiz', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University', 'SIES College of Comm.', 'National', '', 21),
(18, 'Sheetal A Ahir', 'Covid -19 Awareness Program ', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Social Wing RAIT', 'RAIT', 'National', '', 21),
(19, 'Sheetal A Ahir', 'E-Quiz on \"Research Methodology', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Savitribai Phule Pune University', 'Pratibha Institute of Business Management', 'National', '', 21),
(20, 'Sheetal A Ahir', 'E-Quiz on \"Machine Learning', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'SBITMRJ', 'S B Jain Institute of Technology, Managemet and Research', 'National', '', 21),
(21, 'Sheetal A Ahir', 'E-Quiz on \"Atmanirbhar Bharat-Strength of the Fututre', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Institutions Innovative Council', 'Institutions Innovative Council', 'National', '', 21),
(22, 'Sheetal A Ahir', 'R-Programming', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'SBITMRJ', 'S B Jain Institute of Technology, Managemet and Research', 'National', '', 21),
(23, 'Sheetal A Ahir', 'Data Analytics', '-', 'Sheetal A Ahir', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'SBITMRJ', 'S B Jain Institute of Technology, Managemet and Research', 'National', '', 21),
(24, 'Ekta K Sarda', 'Awareness of Outcome -Based Education Paradigm', '-', 'Ekta K Sarda', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University', 'L.R. Tiwari CoE', 'National', '', 22),
(25, 'Ekta K Sarda', 'Cloud Compiting', '-', 'Ekta K Sarda', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'D Y Patil University', 'D Y Patil School of Engg & Technology', 'National', '', 22),
(26, 'Ekta K Sarda', 'Intellectual Property Rights', '-', 'Ekta K Sarda', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University', 'New Horizon institute of Technology', 'National', '', 22),
(27, 'Ekta K Sarda', 'Research Schemes and Funding Awareness ', '-', 'Ekta K Sarda', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University', 'New Horizon institute of Technology', 'National', '', 22),
(28, 'Ekta K Sarda', 'Faculty Program on NBA', '-', 'Ekta K Sarda', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University', 'Bharati Vidyapeeth CoE', 'National', '', 22),
(29, 'Ekta K Sarda', 'Covid -19 Awareness Program ', '-', 'Ekta K Sarda', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University', 'Pillai College of Engg.', 'National', '', 22),
(30, 'Ekta K Sarda', 'Advanced Data Structure', '-', 'Ekta K Sarda', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University', 'Jaihind CoE', 'National', '', 22),
(31, 'Ekta K Sarda', 'Google Cloud Computing', '-', 'Ekta K Sarda', 'Participating', 'Quiz', '-', '-', '0000-00-00', 'Mumbai University', 'Dhole Patil CoE', 'National', '', 22),
(32, 'Pallavi H Chitte ', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 33),
(33, 'Dhanashri A Bhosle ', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 34),
(34, 'Siddhi N Kadu ', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 35),
(35, 'Apurva S Shinde ', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 36),
(36, 'Preet Kaur ', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 38),
(37, 'Leena R Ragha', 'fhfhf', 'fhghf', '', '1st', '', '', '', '0000-00-00', '', '', 'State level', 'upload_files/awards/__', 1),
(40, 'Leena R Ragha', 'technical', 'rait', 'leena raghe', '1st', '', '', '', '0001-01-01', '', '', 'Local level', 'upload_files/awards/0001_Leena R Ragha_2021-01-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `competitive_exam`
--

CREATE TABLE `competitive_exam` (
  `id` int(26) NOT NULL,
  `Faculty_name` varchar(60) NOT NULL,
  `PET_appeared` varchar(60) NOT NULL,
  `PET_date` date NOT NULL,
  `PET_score` int(60) NOT NULL,
  `GATE_appeared` varchar(60) NOT NULL,
  `GATE_date` date NOT NULL,
  `GATE_score` int(60) NOT NULL,
  `Exam_Name` varchar(50) NOT NULL,
  `Exam_Appered` varchar(50) NOT NULL,
  `Date_Of_Exam` date DEFAULT NULL,
  `Exam_Score` varchar(50) NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `Sdrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitive_exam`
--

INSERT INTO `competitive_exam` (`id`, `Faculty_name`, `PET_appeared`, `PET_date`, `PET_score`, `GATE_appeared`, `GATE_date`, `GATE_score`, `Exam_Name`, `Exam_Appered`, `Date_Of_Exam`, `Exam_Score`, `pdf`, `Sdrn`) VALUES
(4, 'Dr. Joshi Bharti A.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 4),
(5, 'Dr. Dakhane Dhanajay M.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 5),
(6, 'Dr. Chaudhari Sangita S.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 6),
(7, 'Dr. Sharma Neeraj K.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 7),
(8, 'Dr. Barve Amit K.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 8),
(9, 'Dr.Shinde Shilpa G.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 9),
(10, 'Mrs. Mane Vanita M.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 10),
(11, 'Mrs. Shedge Rajashree A', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 11),
(12, 'Mrs. Padiya Puja Y.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 12),
(13, 'Mrs. Dhumal Rashmi A.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 13),
(14, 'Mrs. Chhabria Aditi S.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 14),
(15, 'Mrs. Maktum Tabassum A.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 15),
(16, 'Mr. Chikkareddi Vishwanath S.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 16),
(17, 'Mrs. Gaikwad Snehal P.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 17),
(18, 'Mrs. Pulgam Namita D', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 18),
(19, 'Mr. Ghorpade Tushar H.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 19),
(20, 'Mrs. Bharne Smita D.', 'MU-PET', '0000-00-00', 50, '', '0000-00-00', 0, '', '', NULL, '', '', 20),
(21, 'Mrs. Ahir Sheetal A.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 21),
(22, 'Mrs. Ekta K. Sarda', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 22),
(23, 'Mrs. Bodhe Swarupa', 'PET', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 23),
(24, 'Mrs. Bhoir Smita V.', 'MU-PET', '0000-00-00', 48, '', '0000-00-00', 0, '', '', NULL, '', '', 24),
(25, 'Mrs. Sumithra T.V', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 25),
(26, 'Mr. Gorad Balwant J.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 26),
(27, 'Mrs. Alte Bhavna A.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 27),
(28, 'Mr. Nenwani Kamlesh L.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 28),
(29, 'Ms. Mumbaikar Snehal J.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 29),
(30, 'Mr. Gunjgur Prathmesh N.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 30),
(31, 'Ms. Saxena Harsha A.', '', '0000-00-00', 0, '', '0000-00-00', 421, '', '', NULL, '', '', 31),
(32, 'Mrs. Ingle Saguna K.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 32),
(33, 'Mrs. Chitte Pallavi H.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 33),
(34, 'Ms. Bhosale Dhanashri A.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 34),
(35, 'Mrs. Kadu Siddhi N.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 35),
(36, 'Mrs. Shinde Apurva S.', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 36),
(37, 'Bhavana Alte', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', NULL, '', '', 37),
(38, 'Leena R Ragha', '', '0000-00-00', 0, '', '0000-00-00', 0, 'cat', '', '0000-00-00', '', '', 1),
(39, 'Leena R Ragha', '', '0000-00-00', 0, '', '0000-00-00', 0, '', '', '0000-00-00', '900', '', 1),
(40, 'Leena R Ragha', '', '0000-00-00', 900, '', '0000-00-00', 0, '', '', '0000-00-00', '', '', 1),
(41, 'Leena R Ragha', '', '0000-00-00', 999, '', '0000-00-00', 0, '', '', '0000-00-00', '', '', 1),
(43, 'Leena R Ragha', '', '0000-00-00', 0, '', '0000-00-00', 0, 'cat', '1', '0001-01-01', '450', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_as_resource`
--

CREATE TABLE `faculty_as_resource` (
  `id` int(26) NOT NULL,
  `Faculty_name` varchar(60) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Resource_person` varchar(60) NOT NULL,
  `Topic_name` varchar(30) NOT NULL,
  `Event_name` varchar(30) NOT NULL,
  `Sponsored` varchar(100) NOT NULL,
  `Funded` varchar(100) NOT NULL,
  `Academic` varchar(100) NOT NULL,
  `Level` varchar(60) NOT NULL,
  `Venue` varchar(60) NOT NULL,
  `Date` date NOT NULL,
  `Other` varchar(100) NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `Sdrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_as_resource`
--

INSERT INTO `faculty_as_resource` (`id`, `Faculty_name`, `Email`, `Resource_person`, `Topic_name`, `Event_name`, `Sponsored`, `Funded`, `Academic`, `Level`, `Venue`, `Date`, `Other`, `pdf`, `Sdrn`) VALUES
(9, 'Amarsinh A Vidhate', '', 'Resource Person', 'Ad-hoc Wireless Network of BE ', 'Orientation of Ad-hoc Wireless', '', '', '', 'Local level', 'K.J. Somaiyya institute of engineering and information Techn', '2020-01-16', '', '', 2),
(10, 'Amarsinh A Vidhate', '', 'Resource Person', 'Advancements in mobile computi', 'Experts Talk', '', '', '', 'Local level', 'RAIT', '2019-10-04', '', '', 2),
(11, 'Amarsinh A Vidhate', '', 'Resource Person', 'Computational Lab-II of BE Com', 'Orientation of Computational L', '', '', '', 'Local level', 'KJ Somaiya Institute of Technology', '2020-01-16', '', '', 2),
(12, 'Amarsinh A Vidhate', '', 'Reviewer (for paper orPh.D. related)', '5th International Conference o', 'International Conference on Co', '', '', '', 'International level', 'Pimpri Chinchwad College of Engineering , Pune, Maharashtra', '2019-09-19', '', '', 2),
(13, 'Amarsinh A Vidhate', '', 'Resource Person', 'CN-OSI to IOT Workshop', 'IoT', '', '', '', 'Local level', 'RAIT', '2019-10-05', '', '', 2),
(14, 'Amarsinh A Vidhate', '', 'Coordinator', '-', 'Certification course in Advanc', '', '', '', 'Local level', 'RAIT', '2020-01-02', '', '', 2),
(15, 'Amarsinh A Vidhate', '', 'Reviewer (for paper orPh.D. related)', ' International Conference on A', 'Second International Conferenc', '', '', '', 'International level', 'Mumbai University', '2020-02-28', '', '', 2),
(16, 'Vaibhav E Narawade', '', 'Reviewer (for paper orPh.D. related)', 'International Conference on Ad', 'Second International Conferenc', '', '', '', 'International level', 'Mumbai', '2020-02-28', '', '', 3),
(17, 'Vaibhav E Narawade', '', 'Resource Person', 'Wireless Sensor Networks', 'Kokan Gyanpith COE, Karjat', '', '', '', 'Local level', 'Mumbai', '2019-08-19', '', '', 3),
(18, 'Vaibhav E Narawade', '', 'Resource Person', 'Workshop on OSI to IOT', 'Hands on Workshop , RAIT', '', '', '', 'Local level', 'Mumbai', '2019-10-05', '', '', 3),
(19, 'Vaibhav E Narawade', '', 'Resource Person', 'BlockChain and its Application', 'FDP on Blockchain and its Appl', '', '', '', 'Local level', 'RAIT IT DEPT', '2019-12-09', '', '', 3),
(20, 'Vaibhav E Narawade', '', 'Resource Person', 'Network Security and Shell Scr', 'Hands on Workshop , RAIT', '', '', '', 'Local level', 'RAIT', '2019-09-28', '', '', 3),
(21, 'Vaibhav E Narawade', '', 'Resource Person', 'Draft on New Education Policy ', 'One Day Seminar organized by G', '', '', '', 'Local level', 'Gogate Jogalekar College, Ratnagiri ', '2019-07-20', '', '', 3),
(22, 'Bharti A Joshi', '', 'Panel Member', 'Stratagic Plan for improving m', 'National Conference on Occupat', '', '', '', 'National level', 'Ahemdabad', '2019-10-11', '', '', 4),
(23, 'Bharti A Joshi', '', 'Reviewer (for paper orPh.D. related)', 'Research Paper', '2nd International Conference o', '', '', '', 'International level', 'Mumbai', '2020-02-28', '', '', 4),
(24, 'Bharti A Joshi', '', 'Resource Person', 'CN-OSI to IOT Workshop', 'BGP,RIP in Packet Tracer', '', '', '', 'Local level', 'RAIT', '2019-10-05', '', '', 4),
(26, 'Dhanajay M Dakhane', '', 'Reviewer (for paper orPh.D. related)', '-', 'Second International Conferenc', '', '', '', 'International level', 'Mumbai', '2020-02-28', '', '', 5),
(27, 'Dhanajay M Dakhane', '', 'Resource Person', 'Secure communication: A new Pa', 'Kokan Gyanpith COE, Karjat', '', '', '', 'Local level', 'Mumbai', '2019-08-19', '', '', 5),
(28, 'Dhanajay M Dakhane', '', 'Resource Person', 'Network Security and Shell Scr', 'Skill Development Program', '', '', '', 'Local level', 'Mumbai', '2019-09-28', '', '', 5),
(29, 'Dhanajay M Dakhane', '', 'Resource Person', 'BlockChain and its Application', 'FDP on Blockchain and its Appl', '', '', '', 'Local level', 'RAIT IT DEPT', '2019-12-09', '', '', 5),
(30, 'Dhanajay M Dakhane', '', 'Mentor', 'SDG Internship Project Competi', '-', '', '', '', 'Local level', 'RAIT', '2019-09-25', '', '', 5),
(32, 'Sangita S Chaudhari', '', 'Judge', 'SDG Internship Project Competi', '-', '', '', '', 'Local', 'RAIT', '2019-07-26', '', '', 6),
(33, 'Sangita S Chaudhari', '', 'Judge', 'Regional Level of NURTURING IN', '-', '', '', '', 'External', 'KJSIEIT, Sion', '2019-08-25', '', '', 6),
(34, 'Sangita S Chaudhari', '', 'Resource Person', 'Applications of Discete struct', 'Expert Talk', '', '', '', 'Local level', 'RAIT', '2019-09-13', '', '', 6),
(35, 'Sangita S Chaudhari', '', 'Research Talk', 'GIS and Remote Sensing: Resear', 'Computer Engineering Dept', '', '', '', 'Local level', 'RAIT', '0000-00-00', '', '', 6),
(36, 'Sangita S Chaudhari', '', 'Resource Person', 'Medical Records-Security Persp', 'Induction Program', '', '', '', 'External level', 'DY Patil School of medicine,Nerul', '2019-07-25', '', '', 6),
(37, 'Sangita S Chaudhari', '', 'Resource Person', 'HPC Orientation', 'HPC- VII(IT) orientation', '', '', '', 'External level', 'Terna college of engineering,Nerul', '2019-08-28', '', '', 6),
(38, 'Sangita S Chaudhari', '', 'Resource Person', 'Network Security and Shell Scr', 'Skill Devlopment Program', '', '', '', 'Local level', 'RAIT', '2019-12-09', '', '', 6),
(39, 'Sangita S Chaudhari', '', 'Resource Person', 'Applications of Signal Process', 'AICTE sponsored two week FDP o', '', '', '', 'Local level', 'RAIT', '2020-02-29', '', '', 6),
(40, 'Sangita S Chaudhari', '', 'Reviewer', 'Reviewer', 'Second International Conferenc', '', '', '', 'Interational level', 'Mumbai', '0000-00-00', '', '', 6),
(41, 'Sangita S Chaudhari', '', 'Reviewer', 'Reviewer', 'Journal of the Indian Society ', '', '', '', 'National level', '-', '0000-00-00', '', '', 6),
(42, 'Sangita S Chaudhari', '', 'Reviewer', 'Reviewer', 'IEEE Access', '', '', '', 'Interational level', '-', '2020-05-28', '', '', 6),
(43, 'Sangita S Chaudhari', '', 'Reviewer', 'Reviewer', '3rd International Conference o', '', '', '', 'International level', 'Mumbai', '2020-05-11', '', '', 6),
(44, 'Sangita S Chaudhari', '', 'Resource Person', 'SDG Internship Project Competi', 'One Day National Workshop on G', '', '', '', 'National level', 'SNDI- Mumbai', '2020-05-20', '', '', 6),
(45, 'Sangita S Chaudhari', '', 'Resource Person', 'SDG Internship Project Competi', 'Tech Insight: A Webinar Series', '', '', '', 'National level', 'DBCE-Mumbai', '2019-07-25', '', '', 6),
(46, 'Neeraj K Sharma', '', 'NIL', 'NIL', 'NIL', '', '', '', 'NIL', 'NIL', '0000-00-00', '', '', 7),
(47, 'Amit K Barve', '', 'Chairman', 'Multimdia System', 'TE Computer Engineering Univer', '', '', '', 'External', 'Mumbai University', '2019-10-08', '', '', 8),
(48, 'Amit K Barve', '', 'Resource Person', 'NIL', 'Parallel Programming Workshop', '', '', '', 'Local', 'RAIT', '2019-07-27', '', '', 8),
(49, 'Amit K Barve', '', 'Resource Person', 'High Performance Computing ', 'HPC Workshop', '', '', '', 'Local', 'RAIT', '2019-10-16', '', '', 8),
(50, 'Amit K Barve', '', 'Reviewer', 'Reviewer', 'Second International Conferenc', '', '', '', 'International', 'RAIT', '2020-02-29', '', '', 8),
(51, 'Amit K Barve', '', 'Metor', 'SDG Internship Project ', 'Software Developement Group', '', '', '', 'Local', 'RAIT', '2019-08-25', '', '', 8),
(52, 'Amit K Barve', '', 'Resource Person', 'High Performance Computing ', 'Summer Internship Program ', '', '', '', 'External', 'RAIT', '2019-06-20', '', '', 8),
(53, 'Shilpa G Shinde', '', 'Judge', 'SDG Internship Project ', 'Software Developement Group Pr', '', '', '', 'Local', 'Mumbai', '2019-12-02', '', '', 9),
(54, 'Vanita M Mane', '', 'Resource Person ', 'Report/Research Paper Writing ', 'Hands-on Session', '', '', '', 'Local', 'RAIT', '2019-08-26', '', '', 10),
(55, 'Vanita M Mane', '', 'Reviewer', 'Research Paper', 'ICCDW 2020', '', '', '', 'International', 'Mumbai', '2019-12-12', '', '', 10),
(56, 'Mrs. Shedge Rajashree A.', '', 'Resource Person', 'NLP Stages and Syllabus Discus', 'AICTE-ISTE Approved STTP on Na', '', '', '', 'National', 'Mumbai', '2019-12-02', '', '', 11),
(57, 'Mrs. Shedge Rajashree A.', '', 'Resource Person', 'Natural Language Processing', 'Orientation of NLP', '', '', '', 'National', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '2020-01-08', '', '', 11),
(58, 'Mrs. Padiya Puja Y', '', 'Resource Person', 'Mobile Communication & Computi', 'Orientaion of Mobile Communica', '', '', '', 'Local', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '0000-00-00', '', '', 12),
(59, 'Mrs. Padiya Puja Y', '', 'Resource Person', 'HPC Orientation of BE Computer', 'HPC- VII(IT) orientation', '', '', '', 'External', 'Terna College of Engineering, Nerul', '2020-01-16', '', '', 12),
(60, 'Mrs. Padiya Puja Y', '', 'Resource Person', 'Ad-hoc Wireless Network of BE ', 'Orientation of Ad-hoc Wireless', '', '', '', 'Local', 'K.J. Somaiyya institute of engineering and information Techn', '0000-00-00', '', '', 12),
(61, 'Mrs. Dhumal Rashmi A.', '', 'Resource Person', 'Application Development using ', 'Workshop on Application Develo', '', '', '', 'Local', 'RAIT', '2019-10-05', '', '', 13),
(62, 'Mrs. Dhumal Rashmi A.', '', 'Judge', 'SDG Internship Project Competi', 'SDG Internship Project Competi', '', '', '', 'Local', 'RAIT', '2019-09-25', '', '', 13),
(63, 'Mrs. Chhabria Aditi S', '', 'Resource Person', '', '', '', '', '', 'Local', 'RAIT', '0000-00-00', '', '', 14),
(64, 'Mrs. Maktum Tabassum A.', '', 'Resource Person', 'Application Development using ', 'Workshop on Application Develo', '', '', '', 'Local', 'RAIT', '0000-00-00', '', '', 15),
(65, 'Vishwanath S Chikkareddi', '', 'Mentor', 'SDG Internship Project Competi', 'SDG Internship Project Competi', '', '', '', 'Local', 'RAIT', '2019-09-25', '', '', 16),
(66, 'Vishwanath S Chikkareddi', '', 'Resource Person', 'CN-OSI to IOT Workshop', 'IoT', '', '', '', 'Local', 'RAIT', '2019-10-05', '', '', 16),
(67, 'Vishwanath S Chikkareddi', '', 'Resource Person', 'Computer Networks 101', 'Computer Networks', '', '', '', 'Local', 'Atharva College of Engineering, Shri Sevantilal Khandwala Ma', '2019-08-11', '', '', 16),
(68, 'Vishwanath S Chikkareddi', '', 'Resource Person', 'Ad-hoc Wireless Network of BE ', 'Orientation of Ad-hoc Wireless', '', '', '', 'University', 'K.J. Somaiyya institute of engineering and information Techn', '2020-01-16', '', '', 16),
(69, 'Vishwanath S Chikkareddi', '', 'Resource Person', 'Computational Lab-II of BE Com', 'Orientation of Computational L', '', '', '', 'University', 'K.J. Somaiyya institute of engineering and information Techn', '2020-01-16', '', '', 16),
(70, 'Tushar H Ghorpade ', '', 'Expert Speaker', 'ORDBMS', 'Expert Talk', '', '', '', 'Local', 'RAIT', '2019-09-30', '', '', 19),
(71, 'Smita D Bharne', '', 'Judge', 'ISTE Event Tech Debate', 'ISTE TECHDEBATE -TECHFEST', '', '', '', 'Local', 'RAIT', '2019-10-05', '', '', 20),
(72, 'Smita D Bharne', '', 'Resource Person', 'Application Development using ', '-', '', '', '', 'Local', 'RAIT', '2019-10-05', '', '', 20),
(73, 'Smita D Bharne', '', 'Resource Person', 'Database and SQL ', 'Certification course in Advanc', '', '', '', 'Local', ' Dyanpushpa Jr. College ', '2020-01-04', '', '', 20),
(74, 'Smita D Bharne', '', 'Resource Person', 'Software Development Life Cycl', 'SDG-RAIT Summer Internship 202', '', '', '', 'Local', 'RAIT', '2020-06-04', '', '', 20),
(75, 'Ekta K Sarda', '', 'Resource Person', 'Operating System Lab', 'Certification course in Advanc', '', '', '', 'Local', 'RAIT', '2020-01-02', '', '', 22),
(76, 'Mrs. Bodhe Swarupa', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', 23),
(77, 'Mrs. Bhoir Smita V.', '', 'Resource Person', 'Application Development using ', 'Workshop on Application Develo', '', '', '', 'Local', 'RAIT', '2019-10-05', '', '', 24),
(78, 'Mrs. Bhoir Smita V.', '', 'Resource Person', 'Web and Android Development ', 'Skill set Development Program', '', '', '', 'Local', 'RAIT', '2019-12-12', '', '', 24),
(79, 'Mrs. Bhoir Smita V.', '', 'Resource Person', 'Computer Application ', '', '', '', '', 'Local', 'Dyanpushpa Jr. College', '2020-01-06', '', '', 24),
(80, 'Mrs. Bhoir Smita V.', '', 'Resource Person', 'A Step towards Data Science ', 'Skill set Development Program', '', '', '', 'Local', 'RAIT', '2020-01-24', '', '', 24),
(81, 'Mrs. Bhoir Smita V.', '', 'Resource Person', 'Project based Development usin', 'Workshop on Project based Deve', '', '', '', 'Local', 'RAIT', '2020-02-29', '', '', 24),
(82, 'Mrs. Bhoir Smita V.', '', 'Resource Person', 'web developement', 'SDG-RAIT Summer Internship 202', '', '', '', 'Local', 'RAIT', '2020-06-06', '', '', 24),
(83, 'Mrs. Bhoir Smita V.', '', 'Resource Person', 'Android & GUI Development', 'SDG-RAIT Summer Internship 202', '', '', '', 'Local', 'RAIT', '2020-06-12', '', '', 24),
(84, 'Mrs. Bhoir Smita V.', '', 'Resource Person', 'Working with MYSQL for Structu', 'SDG-RAIT Summer Internship 202', '', '', '', 'Local', 'RAIT', '2020-06-18', '', '', 24),
(85, 'Mrs. Bhoir Smita V.', '', 'Reviewer ', 'International Conference on Ad', 'International Conference on Ad', '', '', '', 'International', 'KJSIEIT SIon', '2020-04-09', '', '', 24),
(86, 'Mrs. Sumithra T.V', '', 'Resource Person ', 'Web search and Online  learnin', 'Foundation course for MBBS stu', '', '', '', 'Local', 'D Y Patil Medical college', '2019-08-30', '', '', 25),
(87, 'Mr. Gorad Balwant J.', '', 'Resource Person ', 'Towards Data Science and Machi', 'Hands-on Webinar', '', '', '', 'National', 'Yenepoya Institute of Technology, Mangalore, Karnataka', '2020-05-20', '', '', 26),
(88, 'Mr. Gorad Balwant J.', '', 'Resource Person ', 'Applications of Machine Learni', 'FDP on “Recent Trends in Compu', '', '', '', 'National', 'PIET, Nagpur, Maharashtra', '2020-06-16', '', '', 26),
(89, 'Mr. Gorad Balwant J.', '', 'Resource Person ', 'Linux Administration and Shell', '', '', '', '', 'Local', 'rait, Maharashtra', '2019-09-28', '', '', 26),
(90, 'Mr. Gorad Balwant J.', '', 'Resource Person', 'Cloud Computing using ownCloud', '', '', '', '', 'Local', 'RAIT', '2019-09-29', '', '', 26),
(91, 'Mr. Gorad Balwant J.', '', 'Resource Person', 'Data Science', 'Faculty Development Program', '', '', '', 'National', 'SVIT, Nashik', '2019-12-21', '', '', 26),
(92, 'Mrs. Alte Bhavna A.', '', 'Resource Person', 'Mobile Communication & Computi', 'Orientaion of Mobile Communica', '', '', '', 'National', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '2019-07-11', '', '', 27),
(93, 'Mrs. Alte Bhavna A.', '', 'Resource Person', 'Operating System Lab', 'Certification course in Advanc', '', '', '', 'Local', 'RAIT', '2020-01-02', '', '', 27),
(94, 'Kamlesh L Nenwani', '', 'Resource Person', 'Talk on Powerpoint Presentatio', 'Foundation course for MBBS stu', '', '', '', 'Local', 'D Y Patil Medical college', '0000-00-00', '', '', 28),
(95, 'Prathmesh N Gunjgur', '', 'Resource Person', 'Mobile Communication & Computi', 'Orientaion of Mobile Communica', '', '', '', 'University of Mumbai', 'Shah Anchor Kutchhi College of Engineering, Chembur, Mumbai', '2019-11-07', '', '', 30),
(96, 'Prathmesh N Gunjgur', '', 'Resource Person', 'Computer Skills-Text Editing U', 'Foundation course for MBBS stu', '', '', '', 'Local', 'D Y Patil Medical college', '0000-00-00', '', '', 30),
(97, 'Prathmesh N Gunjgur', '', 'Resource Person', 'CN-OSI to IOT Workshop', 'Subnetting', '', '', '', 'Local', 'RAIT', '2019-05-10', '', '', 30),
(98, 'Prathmesh N Gunjgur', '', 'Resource Person', 'Computer Fundamentals', 'Foundation course for GNM Firs', '', '', '', 'Local', 'RAIT', '2019-01-10', '', '', 30),
(99, ' Harsha A Saxena', '', 'Resource Person', 'Operating System Lab', 'Certification course in Advanc', '', '', '', 'Local', 'RAIT', '2020-01-02', '', '', 31),
(100, ' Harsha A Saxena', '', 'Resource Person', 'Developing Expertise for probl', 'Workshop', '', '', '', 'Local', 'RAIT', '2020-02-07', '', '', 31),
(101, 'Saguna K  Ingle', '', 'Resource Person', 'CN-OSI to IOT Workshop', 'BGP,RIP in Packet Tracer', '', '', '', 'Local', 'RAIT', '0000-00-00', '', '', 32),
(102, 'Pallavi Chitte H', '', 'Resource Person as expert Speaker', 'Linux Administration and Shell', 'null', '', '', '', 'local', 'RAIT', '2019-09-28', '', '', 33),
(103, 'Dhanashri Bhosle A', '', 'Resource Person', 'Application Development Using ', '', '', '', '', 'local', 'RAIT', '2019-10-05', '', '', 34),
(104, 'Siddhi Kadu N', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', 35),
(105, 'Apurva Shinde S', '', 'Resource Person as Expert Speaker', 'Soft Computing Tool Database M', 'One-Day Workshop', '', '', '', 'Local', 'RAIT', '2019-10-05', '', '', 36),
(106, 'Apurva Shinde S', '', 'Resource Person as Expert Speaker', 'Database Management System Lab', 'Certification Course in advanc', '', '', '', 'local', 'RAIT', '2020-01-03', '', '', 36),
(107, 'Bhavana Alte', '', 'Resource Person', 'Mobile communication and compu', 'Orientation of Mobile communic', '', '', '', 'Local', 'Shah Anchor Kutchhi College of Engineering , Chembur ,mumbai', '2019-07-11', '', '', 37),
(111, 'Leena R Ragha', '', 'Judge', '', '', '', '', '', 'Local level', '', '0000-00-00', '', 'upload_files/resource_person/748-Edu_JSTSP1.pdf', 1),
(112, 'Leena R Ragha', '', 'Lectures in Industry', '', '', '', '', '', 'Local level', '', '0001-01-01', '', 'upload_files/resource_person/Leena R Ragha', 1),
(113, 'Leena R Ragha', '', 'Reviewer (for paper orPh.D. related)', '', '', '', '', '', 'Local level', '', '0001-11-11', '', 'upload_files/resource_person/_Leena R Ragha_0001-11-11', 1),
(114, 'Leena R Ragha', '', 'Chairperson', '', '', '', '', '', 'Local level', '', '0000-00-00', '', 'upload_files/resource_person/Array_Leena R Ragha_', 1),
(115, 'Leena R Ragha', '', 'Reviewer (for paper orPh.D. related)', '', '', '', '', '', 'Local level', '', '0000-00-00', 'dhdfhd', 'upload_files/resource_person/_Leena R Ragha_application/pdf', 1),
(117, 'Leena R Ragha', '', 'Chairperson', '', '', '', '', '', 'National level', '', '0001-01-01', 'gfjfgjff', 'upload_files/resource_person/_Leena R Ragha_0001-01-01', 1),
(118, 'Leena R Ragha', '', 'Chairperson', '', '', '', '', '', 'State level', '', '0001-01-01', 'hfjfj', 'upload_files/resource_person/_Leena R Ragha_0001-01-01_application/pdf', 1),
(122, 'Leena R Ragha', 'leenaragha@123', 'Judge', 'science', 'techfest', 'Dy patil college', 'No', '2022', 'International level', 'navi mumbai', '0001-01-01', 'nothing', 'upload_files/resource_person/0001_Leena R Ragha_2020-01-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
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
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`Sdrn`, `First_name`, `Middle_name`, `Last_name`, `DOB`, `Department`, `Contact_no`, `Addr`, `Email`, `Doj`, `Qualification`, `Desig`, `Password`, `OTP`) VALUES
('0001', 'Leena', 'R', 'Ragha', '1960-07-22', 'Computer E', 1234567892, '209 A, XYZ, Navi Mumbai', 'leenaragha@gmail.com', '1992-11-11', 'PhD', 'HOD Computer Engineering Dept', '123', '55555'),
('0002', 'Amarsinh', 'A', 'Vidhate', '1960-07-17', 'Computer E', 123456789, 'Navi Mumbai', 'AVidhate@gmail.com', '2007-08-17', 'PhD', 'Professor', '123', '55555'),
('0003', 'Vaibhav', 'E', 'Narawade', '1976-07-22', 'Computer E', 12345678911, 'Navi Mumbai', 'vaibhav@gmail.com', '2015-06-27', 'PhD', 'Professor', '123', '55555'),
('0004', 'Bharti', 'A', 'Joshi', '1960-09-10', 'Computer E', 12345678911, 'Navi Mumbai', 'BhartiJoshi@gmail.com', '2018-02-15', 'PhD', 'Professor', '123', '55555'),
('0005', 'Dhanajay', 'M', 'Dakhane', '1975-07-10', 'Computer E', 1234567891, 'Navi Mumbai', 'DhanajayD@gmail.com', '2018-05-15', 'PhD', 'Professor', '123', '55555'),
('0006', 'Sangita', 'S', 'Chaudhari', '1976-04-10', 'Computer E', 1234567891, 'Navi Mumbai', 'ChaudhariS@gmail.com', '2018-02-11', 'PhD', 'Professor', '123', '55555'),
('0007', 'Neeraj', 'K', 'Sharma', '1977-02-10', 'Computer E', 9764875452, 'Navi Mumbai', 'NeerajiS@gmail.com', '2018-02-11', 'PhD', 'Professor', '123', '55555'),
('0008', 'Amit', 'K', 'Barve', '1975-04-10', 'Computer E', 976487662, 'Navi Mumbai', 'AmitS@gmail.com', '2018-02-11', 'PhD', 'Professor', '123', '55555'),
('0009', 'Shilpa', 'G', 'Shinde', '1986-02-16', 'Computer E', 9764335452, 'Navi Mumbai', 'ShilpaS@gmail.com', '2018-02-11', 'PhD', 'Professor', '123', '55555'),
('0010', 'Vanita', 'M', 'Mane', '1986-01-19', 'Computer E', 9761175452, 'Navi Mumbai', 'VanitaS@gmail.com', '2018-02-11', 'PhD', 'Professor', '123', '55555'),
('0011', 'Rajashree', ' A.', 'Shedge', '1986-05-05', 'Computer E', 1234567898, 'vashi,navi Mumbai', 'rajashree@gmail.com', '2001-11-11', 'Ph.D', 'Assistant Professor', '123', '55555'),
('0012', 'Puja', ' Y', 'Padiya', '1983-06-03', 'Computer E', 1236767898, 'Dombivali, Mumbai', 'puja@gmail.com', '2007-01-08', 'Ph.D', 'Assistant Professor', '123', '55555'),
('0013', 'Rashmi', ' A', 'Dhumal', '1980-06-12', 'Computer E', 1236767898, 'Nerul,NaviMumbai', 'rashmi@gmail.com', '2010-02-02', 'Ph.D', 'Assistant Professor', '123', '55555'),
('0014', 'Aditi', ' S', 'Chhabria', '1985-06-12', 'Computer E', 1236790898, 'NaviMumbai', 'aditi@gmail.com', '2010-02-02', 'Ph.D', 'Assistant Professor', '123', '55555'),
('0015', 'Tabassum', ' A', 'Maktum', '1977-06-04', 'Computer E', 1236790898, 'Mumbai', 'tabassum@gmail.com', '2010-02-10', 'Ph.D', 'Assistant Professor', '123', '55555'),
('0016', 'Vishwanath', 'S', 'Chikkareddi', '1975-02-16', 'Computer E', 9761175452, 'Navi Mumabai', 'VishwanathS@gmail.com', '0000-00-00', 'PhD', 'Assistant Professor', '123', '55555'),
('0017', 'Snehal', 'P', 'Gaikwad', '1977-07-10', 'Computer E', 9764875452, 'Navi Mumbai', 'SnehalP@gmail.com', '0000-00-00', '-', 'Assistant Professor', '123', '55555'),
('0018', 'Namita', 'D', 'Pulgam', '1976-04-10', 'Computer E', 1234567892, 'Navi Mumbai', 'NamitaP@gmail.com', '0000-00-00', 'PhD', 'Assistant Professor', '123', '55555'),
('0019', 'Tushar', 'H', 'Ghorpade', '1976-07-22', 'Computer E', 1234567892, 'Navi Mumbai', 'TusharH@gmail.com', '0000-00-00', 'PhD', 'Assistant Professor', '123', '55555'),
('0020', 'Smita', 'D', 'Bharne', '1976-12-22', 'Computer E', 1234567892, 'Navi Mumbai', 'SmitaD@gmail.com', '0000-00-00', 'PhD', 'Assistant Professor', '123', '55555'),
('0021', 'Shetal', 'A', 'Ahir', '1976-09-22', 'Computer E', 1234567892, 'Navi Mumbai', 'SheetalA@gmail.com', '0000-00-00', '-', 'Assistant Professor', '123', '55555'),
('0022', 'Ekta', 'K', 'Sarda', '1976-09-15', 'Computer E', 1234567892, 'Navi Mumbai', 'EktaK@gmail.com', '0000-00-00', 'PhD', 'Assistant Professor', '123', '55555'),
('0023', 'Swarupa', 'M', 'Bodhe', '1989-07-23', 'Computer E', 8867175452, 'Navi Mumbai', 'Swarupa@gmail.com', '0000-00-00', 'PhD', 'Professor', '123', '55555'),
('0024', 'Smita', 'M', 'Bhoir', '1996-01-19', 'Computer E', 9761175452, 'Navi Mumbai', 'smitab@gmail.com', '0000-00-00', 'PhD', 'Professor', '123', '55555'),
('0025', 'Sumithra', 'V', 'T', '1986-01-19', 'Computer E', 9799975452, 'Navi Mumbai', 'sumithra@gmail.com', '0000-00-00', 'PhD', 'Professor', '123', '55555'),
('0026', 'Balwant', 'J', 'Gorad', '1985-01-19', 'Computer E', 9761175452, 'Navi Mumbai', 'BalwantG@gmail.com', '0000-00-00', 'PhD', 'Professor', '123', '55555'),
('0027', 'Bhavna', 'A', 'Alte', '1989-07-13', 'Computer E', 9760075452, 'Navi Mumbai', 'BhavnaA@gmail.com', '0000-00-00', 'PhD', 'Professor', '123', '55555'),
('0028', 'Prathmesh', 'N', 'Gunjgur', '1976-06-13', 'Computer E', 9763355452, 'Navi Mumbai', 'PrathmeshN@gmail.com', '0000-00-00', '-', 'Assistant Professor', '123', '55555'),
('0029', 'Snehal', 'P', 'Gaikwad', '1981-05-12', 'Computer E', 9761056542, 'Navi Mumbai', 'SnehalP@gmail.com', '0000-00-00', '-', 'Assistant Professor', '123', '55555'),
('0030', 'Sheetal', 'A', 'Ahir', '1980-01-14', 'Computer E', 9761189561, 'Navi Mumbai', 'SheetalA@gmail.com', '0000-00-00', '-', 'Assistant Professor', '123', '55555'),
('0031', 'Sumithra', 'T', 'V', '1982-03-19', 'Computer E', 9123175487, 'Navi Mumbai', 'SumithraTV@gmail.com', '0000-00-00', 'PhD', 'Assistant Professor', '123', '55555'),
('0032', 'Kamlesh', 'L', 'Nenwani', '1978-02-19', 'Computer E', 9881275463, 'Navi Mumbai', 'KamleshL@gmail.com', '0000-00-00', '-', 'Assistant Professor', '123', '55555'),
('0033', 'Pallavi', 'H', 'Chitte', '1980-03-23', 'Computer E', 1234567890, 'Navi Mumbai', 'pallavi@gmail.com', '0000-00-00', 'PhD', 'Assistant Proffessor', '123', '55555'),
('0034', 'Dhanashri', 'A', 'Bhosle', '1984-08-10', 'Computer E', 1234567890, 'Navi Mumbai', 'Dhanashri@gmail.com', '0000-00-00', '-', 'Assistant Professor', '123', '55555'),
('0035', 'Siddhi', 'N', 'Kadu', '1989-04-12', 'Computer E', 1234567890, 'Navi Mumbai', 'Siddhi@gmail.com', '0000-00-00', 'phD', 'Assistant Professor', '123', '55555'),
('0036', 'Apurva', 'S', 'Shinde', '1980-05-12', 'Computer E', 1234567890, 'Navi Mumbai', 'Apurva@gmail.com', '0000-00-00', 'phd', 'Assistant Professor', '123', '55555'),
('0037', 'Bhavana', 'S', 'Alte', '1984-04-02', 'Computer E', 1234567890, 'Navi Mumbai', 'bhavana@gmail.com', '0000-00-00', 'phd', 'Assistant Professor', '123', '55555'),
('0555', 'dd', '', '', '0000-00-00', '', 0, '', 'admin@ee', '0000-00-00', '', '', '12345', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicals`
--

CREATE TABLE `medicals` (
  `id` int(20) NOT NULL,
  `Faculty_Name` varchar(50) NOT NULL,
  `AIAPGET_Appered` varchar(50) NOT NULL,
  `AIAPGET_Date` date NOT NULL,
  `AIAPGET_Score` varchar(50) NOT NULL,
  `NEET_SS_Appered` varchar(50) NOT NULL,
  `NEET_SS_Date` date NOT NULL,
  `NEET_SS_Score` varchar(50) NOT NULL,
  `Exam_Name` varchar(50) NOT NULL,
  `Exam_Appered` varchar(50) NOT NULL,
  `Date_Of_Exam` date DEFAULT NULL,
  `Exam_Score` varchar(50) NOT NULL,
  `PDF` varchar(100) NOT NULL,
  `sdrn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicals`
--

INSERT INTO `medicals` (`id`, `Faculty_Name`, `AIAPGET_Appered`, `AIAPGET_Date`, `AIAPGET_Score`, `NEET_SS_Appered`, `NEET_SS_Date`, `NEET_SS_Score`, `Exam_Name`, `Exam_Appered`, `Date_Of_Exam`, `Exam_Score`, `PDF`, `sdrn`) VALUES
(10, 'Leena R Ragha', '1', '0000-00-00', '120', '1', '0000-00-00', '220', '', '', NULL, '', '', '0001'),
(11, 'Amarsinh A Vidhate', '1', '0000-00-00', '345', '1', '0000-00-00', '231', '', '', NULL, '', '', '0002'),
(12, 'Vanita M Mane', '1', '0000-00-00', '232', '1', '0000-00-00', '555', '', '', NULL, '', '', '0010'),
(13, 'Shetal A Ahir', '1', '0000-00-00', '77', '1', '0000-00-00', '128', '', '', NULL, '', 'upload_files/exams/333-280.pdf', '0021'),
(14, 'Leena R Ragha', '', '0000-00-00', '', '', '0000-00-00', '', 'cat', '', '0000-00-00', '', '', '0001'),
(15, 'Leena R Ragha', '', '0000-00-00', '', '', '0000-00-00', '', 'cat', '', '0001-01-01', '60', '', '0001'),
(16, 'Leena R Ragha', '', '0000-00-00', '', '', '0000-00-00', '', 'neet', '', '0001-01-01', '550', '', '0001'),
(17, 'Leena R Ragha', '', '0000-00-00', '', '', '0000-00-00', '', 'jee', '1', '0001-01-01', '120', '', '0001'),
(19, 'Leena R Ragha', '', '0000-00-00', '', '', '0000-00-00', '', 'other', '', '0000-00-00', '500', '', '0001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitive_exam`
--
ALTER TABLE `competitive_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_as_resource`
--
ALTER TABLE `faculty_as_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicals`
--
ALTER TABLE `medicals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `competitive_exam`
--
ALTER TABLE `competitive_exam`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `faculty_as_resource`
--
ALTER TABLE `faculty_as_resource`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `medicals`
--
ALTER TABLE `medicals`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
