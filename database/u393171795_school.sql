-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2024 at 10:25 AM
-- Server version: 10.11.6-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u393171795_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `dateofbirth` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rollnumber` int(100) NOT NULL,
  `adharno` int(100) NOT NULL,
  `samgrano` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `droppoint` varchar(100) NOT NULL,
  `parent` varchar(255) NOT NULL DEFAULT 'delhipbscl',
  `trans` varchar(11) NOT NULL,
  `rte` varchar(11) NOT NULL,
  `year` int(255) NOT NULL,
  `studentimg` varchar(255) NOT NULL,
  `SCHOLERS` varchar(20) NOT NULL,
  `attendence` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`id`, `fullname`, `fathername`, `mothername`, `dateofbirth`, `mobileno`, `class`, `rollnumber`, `adharno`, `samgrano`, `address`, `gender`, `category`, `droppoint`, `parent`, `trans`, `rte`, `year`, `studentimg`, `SCHOLERS`, `attendence`) VALUES
(2, 'Taruna Galodiya', 'rahul', 'payal', '2013-02-04', '1234556', '5th', 2341, 2147483647, 4546645, 'devli', 'Male', 'category', 'kanheriya6000', '1', 'yes', 'yes', 2023, '', '', ''),
(3, 'goutam1', 'rajesh', 'seeta', '1998-02-15', '64685728941', '1st', 2314, 817582487, 7852456, 'dewas', 'Male', 'obc', 'Fatanpur6000', '1', 'yes', '', 2023, 'abhay.jpg', '', ''),
(4, 'goutam', 'rajesh', 'seeta', '1998-02-15', '64685728941', '2nd', 2314, 817582487, 7852456, '0', 'Male', 'obc', 'Fatanpur(Rs6000)', '2', '', '', 2023, '', '', ''),
(5, 'Taruna Galodiya', 'shivam', 'payal', '2014-01-04', '1234433', '1st', 345, 553223344, 3456, 'dewas', 'Male', 'obc', 'kanheriya6000', '1', 'yes', 'yes', 2022, '', '', ''),
(8, 'kunal choudhary', 'jeevan choudhary', 'prem choudhary', '2004-03-29', '6264883292', '5th', 5456, 2147483647, 4959149, 'dewas', 'Male', 'obc', 'Tonkkhurd5000', '2', 'yes', 'yes', 2023, '', '', ''),
(9, 'Taruna Galodiya', 'rahul', 'seeta', '2019-01-04', '455775425', '1st', 235465, 2147483647, 4563344, 'dewas', 'Male', 'obc', 'kanheriya6000', '1', 'yes', '', 2023, '', '', ''),
(10, 'Taruna Galodiya', 'rahul', 'seeta', '4/13/2001', '455775425', '7th', 235465, 2147483647, 4563344, '0', 'Male', 'obc', 'Devli(Rs8000)', '1', 'yes', 'yes', 2023, '', '', ''),
(11, 'Taruna Galodiya', 'shivam', 'seeta', '4/13/2001', '243543333', '8th', 344657744, 454664774, 67576, '0', 'Male', 'Sc', 'Devli(Rs8000)', '1', 'yes', 'yes', 2023, '', '', ''),
(12, 'Taruna Galodiya', 'shivam', 'bhavna', '2013-10-30', '652355465', '4th', 3433443, 2147483647, 45324, '0', 'Male', 'obc', 'kanheriya6000', '1', 'yes', 'yes', 2023, '', '', ''),
(31, 'raju chouhan', 'rajesh chouhan', 'reena chouhan', '2004-12-12', '654645464', '2nd', 944945, 456546545, 456445, 'devli', 'Male', 'obc', 'devli8000', '2', 'yes', 'yes', 2023, '', '', ''),
(42, 'Shailendra Dangi', 'Balram Dangi', 'Saraswati Dangi', '2000-09-23', '7000238748', '3rd', 123, 123, 123, 'fg', 'Male', 'obc', 'Dewas22', '1', 'yes', 'yes', 2023, '44364f90-8dc5-4e47-92d0-59ecce1f69b7.jpg', '', ''),
(43, 'shailendra dangi', 'b', 'Saraswati Dangi', '2023-06-28', '3223', '2ND', 3, 3, 3, 'fg', 'Male', 'obc', 'Indore1200', '12', 'yes', 'yes', 2023, 'IMG-20170815-WA0026-removebg.png', '', ''),
(44, 'mohini diwakar', 'munnalal diwakar', 'Jaydevi diwakar', '2023-07-16', '0987654321', '2nd', 2147483647, 2147483647, 2147483647, '48b jay Bajrang nagar dewas', 'Female', 'st', 'jawahr nagar3000', '13', 'yes', 'yes', 2023, 'about.jpg', '', ''),
(45, 'priya  kushwah', 'Ramkumar kushwah', 'ramshri', '2004-04-24', '09876556789', '3rd', 123465768, 2147483647, 12235677, '48b jay Bajrang nagar dewas', 'Female', 'st', 'kaloni-bag3000', '13', 'yes', 'yes', 2023, 'logo2.png', '', ''),
(46, 'mohini diwakar', 'munnalal diwakar', 'Jaydevi diwakar', '2023-07-16', '0987654321', '3rd', 2147483647, 2147483647, 2147483647, '48b jay Bajrang nagar dewas', 'Female', 'st', 'jawahr nagar3000', '13', 'yes', 'yes', 2024, 'about.jpg', '', ''),
(47, 'priya  kushwah', 'Ramkumar kushwah', 'ramshri', '2004-04-24', '09876556789', '4th', 123465768, 2147483647, 12235677, '48b jay Bajrang nagar dewas', 'Female', 'st', 'kaloni-bag3000', '13', 'yes', 'yes', 2024, '', '', ''),
(48, 'kunal choudhary', 'jeevan choudhary', 'prem choudhary', '2004-09-14', '5635765', '2nd', 5674567, 567456745, 5675654, '788568656', 'Male', 'obc', 'tonkkhurd5000', '4', 'yes', 'yes', 2023, '', '', ''),
(52, 'Sneha Rajput', 'Mr. Javar Singh Rajput', 'Mrs. Manju Devi Rajput', '1/17/2007', '', '6th', 140, 2147483647, 105238418, 'Londia', '', '', '', '1', '', '', 2023, '', '12', '211'),
(53, 'Snehlata Kushwah', 'Mr. Dheeraj Singh Kushwah ', 'Mrs. Archana Kushwah', '9/15/2007', '', '6th', 139, 2147483647, 105048827, 'Londia', '', '', '', '1', '', '', 2023, '', '22', '198'),
(54, 'Rajnandini Rajput', 'Mr. Pawan Singh Rajput', 'Mrs. Seeta Rajput', '7/28/2007', '', '6th', 141, 2147483647, 167508235, 'Londia', '', '', '', '1', '', '', 2023, '', '108', '200'),
(55, 'ram', 'shayam', 'sita', '2007-04-07', '9876556789', 'class', 101, 2147483647, 2147483647, 'pipal', 'Male', 'sc', 'Select Pickup and Drop Point', '14', 'yes', '', 2023, '', '', ''),
(56, 'Taruna Galodiya', 'rahul', 'payal', '2013-02-04', '1234556', '6th', 2341, 2147483647, 4546645, 'devli', 'Male', 'category', 'kanheriya6000', '1', 'yes', 'yes', 2024, '', '', ''),
(57, 'Taruna Galodiya', 'rahul', 'seeta', '4/13/2001', '455775425', '8th', 235465, 2147483647, 4563344, '0', 'Male', 'obc', 'Devli(Rs8000)', '1', 'yes', 'yes', 2024, '', '', ''),
(58, 'Sneha Rajput', 'Mr. Javar Singh Rajput', 'Mrs. Manju Devi Rajput', '1/17/2007', '', '7th', 140, 2147483647, 105238418, 'Londia', '', '', '', '1', '', '', 2024, '', '', ''),
(59, 'Snehlata Kushwah', 'Mr. Dheeraj Singh Kushwah ', 'Mrs. Archana Kushwah', '9/15/2007', '', '7th', 139, 2147483647, 105048827, 'Londia', '', '', '', '1', '', '', 2024, '', '', ''),
(60, 'Rajnandini Rajput', 'Mr. Pawan Singh Rajput', 'Mrs. Seeta Rajput', '7/28/2007', '', '7th', 141, 2147483647, 167508235, 'Londia', '', '', '', '1', '', '', 2024, '', '', ''),
(61, 'Taruna Galodiya', 'rahul', 'payal', '2013-02-04', '1234556', '6th', 2341, 2147483647, 4546645, 'devli', 'Male', 'category', 'kanheriya6000', '1', 'yes', 'yes', 2024, '', '', ''),
(62, 'Taruna Galodiya', 'rahul', 'seeta', '4/13/2001', '455775425', '8th', 235465, 2147483647, 4563344, '0', 'Male', 'obc', 'Devli(Rs8000)', '1', 'yes', 'yes', 2024, '', '', ''),
(63, 'Sneha Rajput', 'Mr. Javar Singh Rajput', 'Mrs. Manju Devi Rajput', '1/17/2007', '', '7th', 140, 2147483647, 105238418, 'Londia', '', '', '', '1', '', '', 2024, '', '', ''),
(64, 'Snehlata Kushwah', 'Mr. Dheeraj Singh Kushwah ', 'Mrs. Archana Kushwah', '9/15/2007', '', '7th', 139, 2147483647, 105048827, 'Londia', '', '', '', '1', '', '', 2024, '', '', ''),
(65, 'Rajnandini Rajput', 'Mr. Pawan Singh Rajput', 'Mrs. Seeta Rajput', '7/28/2007', '', '7th', 141, 2147483647, 167508235, 'Londia', '', '', '', '1', '', '', 2024, '', '', ''),
(66, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '1', '', '', 2023, '', '', ''),
(67, '?????m{?g6T?e?|?3x?Y????l?c?%??	????\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0G?Ũ?~????g)d<?k?l^????7??3?????#????X?x??T', '', '', '?K???JW?u??Ē ??5W????Zœf?{R?Wo??\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\019?:?_??I', '', '', 0, 0, 0, '', '', '', '', '1', '', '', 2023, '', '', ''),
(68, 'ZZV???ƝH?7HBF S??9?Кƭ\rT?ka?\0W??\0*\0\0\0\0\0\0\0\0 1P!A`0Q\"@aq2??\0??5ձ??Ҷ????V/?5', '', 'r??X荩-???ʌ?J?h?Qt?X?????d??q2	?L?s-??؃?b????b:%?X???m?r??\r]]E[r[zވ?U?W/I?n=?n=?:w.???~?', '????2', '', '', 0, 0, 0, '', '', '', '', '1', '', '', 2023, '', '', ''),
(69, ']cSx??L??9*9&J???', '', '', '?b???w?Mr?CYv?z??ͪ=??*?SKP?bCh|??L0???????f?b*?\r??]?o=:L	:????z??˼a???l?fT^??\0p?-czW)', '', '', 0, 0, 0, '', '', '', '', '1', '', '', 2023, '', '', ''),
(70, 'NҐ-L??2_??4B??A?S??`?⹔ǟ???q*PC9?=PD?z??m??????)??=??c*????\rPm??`ZD??KYU(?+?Z?????K8UD', '', '', '?Kp/y?PJ{?Ȧ6???R???祍??!??tC_@??Qswq?;', '', '', 0, 0, 0, '', '', '', '', '1', '', '', 2023, '', '', ''),
(71, '?0??(??0E²?????wiߏ??\"???6?q?[ո???^?腅6???3|-Bs??e8??{\Z?(???U)?>??_?&!t?VP5???\0|r???H??K?', '', '????~?]?Ķ??oL???b??????!???;B', '???E?Z??W?]??aq?ş???L\0>H??X?LN?gOHG6????Z|??n?&Èl	XTcQ?)?&$?	bN?&?ȥ%??t??????\0?\0Y`\r??%?', '', '', 0, 0, 0, '', '', '', '', '1', '', '', 2023, '', '', ''),
(72, '	͙??	?E??ˉ?E??}?ݘ?j?????>߀|lU?gQZI_??偶`', '', '', 'b?k??R?u?K????q??g??׬_????\0fh???#???[', '', '', 0, 0, 0, '', '', '', '', '1', '', '', 2023, '', '', ''),
(73, ' ?~#?????/פW?⢄?\0??\"?C_g??[[G', '', '', 'T???Bb???=.^#+?=QC\r??1?h\Z? ]?Lo(I|??tJ?u{L?p}`??Tp?-.?58B?y?#?6Nm/??9Wv+oq-?S???\0gC??~', '', '', 0, 0, 0, '', '', '', '', '1', '', '', 2023, '', '', ''),
(74, '&M?H', '', '??٤??ƌ?FXS?4??', '??Ic', '', '', 0, 0, 0, '', '', '', '', '1', '', '', 2023, '', '', ''),
(75, 'Taruna Galodiya', 'rahul', 'seeta', '4/13/2001', '455775425', '8th', 235465, 2147483647, 4563344, '0', 'Male', 'obc', 'Devli(Rs8000)', '1', 'yes', 'yes', 2024, '', '', ''),
(76, 'Taruna Galodiya', 'shivam', 'bhavna', '2013-10-30', '652355465', '5th', 3433443, 2147483647, 45324, '0', 'Male', 'obc', 'kanheriya6000', '1', 'yes', 'yes', 2024, '', '', ''),
(77, 'Taruna Galodiya', 'rahul', 'seeta', '4/13/2001', '455775425', '8th', 235465, 2147483647, 4563344, '0', 'Male', 'obc', 'Devli(Rs8000)', '1', 'yes', 'yes', 2024, '', '', ''),
(78, 'Taruna Galodiya', 'shivam', 'bhavna', '2013-10-30', '652355465', '5th', 3433443, 2147483647, 45324, '0', 'Male', 'obc', 'kanheriya6000', '1', 'yes', 'yes', 2024, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(5) NOT NULL,
  `student` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `obtmarks` varchar(100) NOT NULL,
  `halfyear` int(255) NOT NULL,
  `project` int(100) NOT NULL,
  `totalmarks` int(100) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `student`, `class`, `subject`, `obtmarks`, `halfyear`, `project`, `totalmarks`, `parent`, `year`) VALUES
(31, 8, '5th', 'Hindi', '48', 20, 18, 100, '1', 2023),
(32, 8, '5th', 'English', '49', 20, 18, 100, '1', 2023),
(33, 8, '5th', 'Science', '55', 20, 18, 100, '1', 2023),
(34, 8, '5th', 'Maths', '50', 20, 17, 100, '1', 2023),
(36, 39, '6th', 'hindi', '76', 0, 0, 100, '1', 2023),
(37, 39, '6th', 'maths', '53', 0, 0, 100, '1', 2023),
(38, 39, '6th', 'english', '97', 0, 0, 100, '1', 2023),
(39, 39, '6th', 'science', '58', 0, 0, 100, '1', 2023),
(40, 39, '6th', 'sst', '68', 0, 0, 100, '1', 2023),
(41, 40, '6th', 'hindi', '76', 0, 0, 100, '1', 2023),
(42, 40, '6th', 'maths', '60', 0, 0, 100, '1', 2023),
(43, 40, '6th', 'english', '97', 0, 0, 100, '1', 2023),
(44, 40, '6th', 'science', '82', 0, 0, 100, '1', 2023),
(45, 40, '6th', 'sst', '68', 0, 0, 100, '1', 2023),
(46, 41, '6th', 'hindi', '79', 0, 0, 100, '1', 2023),
(47, 41, '6th', 'maths', '59', 0, 0, 100, '1', 2023),
(48, 41, '6th', 'english', '95', 0, 0, 100, '1', 2023),
(49, 41, '6th', 'science', '76', 0, 0, 100, '1', 2023),
(50, 41, '6th', 'sst', '70', 0, 0, 100, '1', 2023),
(53, 2, '5th', 'Hindi', '60', 20, 20, 100, '1', 0),
(55, 2, '5th', 'Maths', '60', 20, 20, 100, '1', 0),
(56, 41, '6th', 'EVS', '80', 0, 0, 100, '', 0),
(57, 2, '5th', 'English', '50', 19, 18, 100, '1', 0),
(58, 2, '5th', 'Science', '55', 19, 18, 100, '1', 0),
(59, 2, '5th', 'Sst', '55', 20, 18, 100, '1', 0),
(60, 2, '5th', 'EVS', '55', 20, 18, 100, '1', 0),
(61, 8, '5th', 'Sst', '60', 20, 18, 100, '1', 0),
(62, 8, '5th', 'EVS', '60', 20, 17, 100, '1', 0),
(63, 44, '2nd', 'Hindi', '50', 15, 12, 100, '13', 0),
(64, 44, '2nd', 'English', '060', 12, 14, 100, '13', 0),
(65, 44, '2nd', 'Science', '082', 8, 7, 100, '13', 0),
(66, 44, '2nd', 'Maths', '073', 7, 10, 100, '13', 0),
(67, 44, '2nd', 'Sst', '048', 6, 19, 100, '13', 0),
(68, 44, '2nd', 'EVS', '083', 9, 15, 100, '13', 0),
(69, 5, '1st', 'Hindi', '50', 20, 20, 100, '1', 0),
(70, 5, '1st', 'English', '50', 20, 20, 100, '1', 0),
(71, 5, '1st', 'Science', '50', 20, 20, 100, '1', 0),
(72, 5, '1st', 'Maths', '50', 20, 20, 100, '1', 0),
(73, 5, '1st', 'Sst', '50', 20, 20, 100, '1', 0),
(74, 5, '1st', 'EVS', '50', 20, 20, 100, '1', 0),
(75, 45, '3rd', 'Hindi', '044', 12, 15, 100, '13', 0),
(76, 45, '3rd', 'English', '055', 12, 12, 100, '13', 0),
(77, 45, '3rd', 'Science', '066', 7, 13, 100, '13', 0),
(78, 45, '3rd', 'Maths', '077', 8, 14, 100, '13', 0),
(79, 45, '3rd', 'Sst', '045', 9, 15, 100, '13', 0),
(80, 45, '3rd', 'EVS', '065', 10, 16, 100, '13', 0),
(101, 52, '6th', 'hindi', '76', 0, 0, 100, '1', 2023),
(102, 52, '6th', 'maths', '53', 0, 0, 100, '1', 2023),
(103, 52, '6th', 'english', '97', 0, 0, 100, '1', 2023),
(104, 52, '6th', 'science', '58', 0, 0, 100, '1', 2023),
(105, 52, '6th', 'sst', '68', 0, 0, 100, '1', 2023),
(106, 53, '6th', 'hindi', '76', 0, 0, 100, '1', 2023),
(107, 53, '6th', 'maths', '60', 0, 0, 100, '1', 2023),
(108, 53, '6th', 'english', '97', 0, 0, 100, '1', 2023),
(109, 53, '6th', 'science', '82', 0, 0, 100, '1', 2023),
(110, 53, '6th', 'sst', '68', 0, 0, 100, '1', 2023),
(111, 54, '6th', 'hindi', '79', 0, 0, 100, '1', 2023),
(112, 54, '6th', 'maths', '59', 0, 0, 100, '1', 2023),
(113, 54, '6th', 'english', '95', 0, 0, 100, '1', 2023),
(114, 54, '6th', 'science', '76', 0, 0, 100, '1', 2023),
(115, 54, '6th', 'sst', '70', 0, 0, 100, '1', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `scl_addfees`
--

CREATE TABLE `scl_addfees` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `parent` varchar(20) DEFAULT 'delhipbscl',
  `order_column` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scl_addfees`
--

INSERT INTO `scl_addfees` (`id`, `class`, `fees`, `parent`, `order_column`) VALUES
(25, '4th', '7000', '1', 1),
(26, '5th', '8000', '1', 2),
(28, '7th', '10000', '1', 4),
(29, '8th', '11000', '1', 5),
(30, '1s', '20000', '12', 2),
(31, '2nd', '20000', '12', 3),
(32, '3rd', '20000', '12', 1),
(33, '4th', '30000', '12', 4),
(34, '1st', '4000', '2', 4),
(35, '2nd', '5000', '2', 1),
(36, '3rd', '15000', '2', 2),
(37, '4th', '3000', '2', 3),
(38, '5th', '15000', '2', 5),
(39, '6th', '15000', '2', 8),
(40, '7th', '15000', '2', 6),
(41, '8th', '15000', '2', 7),
(42, '1st', '3000', '13', 1),
(45, '2nd', '3000', '13', 2),
(46, '3rd', '5000', '13', 3),
(47, '4th', '6000', '13', 4),
(48, '1st', '3000', '4', 4),
(49, '2nd', '4000', '4', 1),
(50, '3rd', '5000', '4', 2),
(51, '4th', '6000', '4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `scl_dailyspend`
--

CREATE TABLE `scl_dailyspend` (
  `id` int(11) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `parent` varchar(255) NOT NULL DEFAULT 'delhipbscl',
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scl_dailyspend`
--

INSERT INTO `scl_dailyspend` (`id`, `disc`, `amount`, `date`, `parent`, `year`) VALUES
(2, 'khana', '120', '2023-07-05 06:07:29', '1', 2022),
(6, 'water-bill', '120', '2023-07-05 05:38:42', '2', 2023),
(12, 'khana', '2000', '2023-07-14 06:22:54', '13', 2023),
(14, 'tea', '500', '2023-07-14 06:24:10', '13', 2023),
(15, 'trip', '5000', '2023-07-14 06:26:54', '13', 2023),
(16, 'water', '300', '2023-07-14 08:02:08', '13', 2023),
(17, 'water-bill', '300', '2023-07-17 09:35:09', '1', 2023),
(19, 'dieseal 4565', '4000', '2023-09-14 07:28:56', '1', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `scl_staff`
--

CREATE TABLE `scl_staff` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `dobirth` varchar(255) NOT NULL,
  `mobileno` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `sallery` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `staffimg` varchar(255) NOT NULL,
  `parent` varchar(20) NOT NULL DEFAULT 'delhipbscl'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scl_staff`
--

INSERT INTO `scl_staff` (`id`, `fullname`, `fathername`, `dobirth`, `mobileno`, `address`, `designation`, `sallery`, `gender`, `staffimg`, `parent`) VALUES
(3, 'kunal choudhary', 'jeevan choudhary', '2004-12-12', '654646456', 'dewas', 'teacher', '20000', 'Male', '', '2'),
(4, 'kunal choudhary', 'jeevan choudhary', '2004-03-29', '6264883292', 'dewas', 'principal', '50000', 'Male', 'Penguins.jpg', '1'),
(5, 'Suraj Kushwah', 'Ramkumar kushwah', '1973-09-12', '1234987651', '432 Trilok Nagar dewas', 'Office Employee', '11000', 'Male', '', '13'),
(7, 'ankit kushwah', 'Ramkumar kushwah', '2007-02-02', '1234567890', '433 Kalani Bagh Dewas', 'principal', '41000', 'Male', '', '13'),
(8, 'kunal choudhary', 'jeevan choudhary', '2004-12-12', '4352345', '3245324', 'Peone', '453534', 'Male', '', '4'),
(10, 'kuldeep choudhary', 'jeevan choudhary', '2009-05-14', '6534564', '546546', 'Peone', '456456', 'Male', 'abhay.jpg', '4'),
(13, 'kuldeep choudhary', 'rajendra choudhary', '2004-12-12', '5345656', 'dewas', 'Designation', '45645', 'Male', '', '1'),
(14, 'surendra singh sendhav', 'harisingh sendhav', '1984-04-08', '9827382277', 'sitaram nagar dewas', 'Principal', '', 'Male', '', '14');

-- --------------------------------------------------------

--
-- Table structure for table `scl_tranfees`
--

CREATE TABLE `scl_tranfees` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `parent` varchar(20) NOT NULL DEFAULT 'delhipbscl'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scl_tranfees`
--

INSERT INTO `scl_tranfees` (`id`, `location`, `fees`, `parent`) VALUES
(10, 'Dewas', '1000', '12'),
(11, 'Indore', '1200', '12'),
(12, 'Dewas', '22', '12'),
(13, 'Dewas', '22', '12'),
(14, 'sdfads', '23', '12'),
(15, 'sdfasd', '2222', '12'),
(16, 'sdfsd', '2', '12'),
(17, 'tonkkhurd', '5000', '2'),
(18, 'kaloni-bag', '3000', '13'),
(19, 'jawahr nagar', '3000', '13'),
(20, 'keladevi', '2000', '13'),
(21, 'tonkkhurd', '5000', '4'),
(24, 'Kanheriya', '5000', '1'),
(26, 'dewas', '1000', '1'),
(27, 'dewas', '1000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `scl_update`
--

CREATE TABLE `scl_update` (
  `id` int(11) NOT NULL,
  `sclname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL,
  `register` varchar(255) NOT NULL,
  `dise` varchar(255) NOT NULL,
  `scode` int(20) NOT NULL,
  `scladdress` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scl_update`
--

INSERT INTO `scl_update` (`id`, `sclname`, `email`, `password`, `register`, `dise`, `scode`, `scladdress`, `year`) VALUES
(1, 'DELHI PUBLIC SCOOL TONKKHURD DEWAS (MP) INDIA', 'rohit@gmail.com', '12345', '78976', '2323508098', 0, '04 Tonkkhurd dewas', '2240'),
(2, 'govt. model school', 'model@gmail.com', '6264', '8832', '968556', 5695, 'dewas mp', '2023-24'),
(4, 'df', 'c', 'v', 'xc', 'cv', 0, 'cv', ''),
(5, 'df', 'c', 'v', 'xc', 'cv', 0, 'cv', ''),
(6, 'df', 'c', 'v', 'xc', 'cv', 0, 'cv', ''),
(7, 'df', 'c', 'v', 'xc', 'cv', 0, 'cv', ''),
(8, 'gf', 'gf', 'g', 'gf', 'gf', 0, 'gf', 'gf'),
(9, 'gf', 'gf', 'g', 'gf', 'gf', 0, 'gf', 'gf'),
(10, 'gf', 'gf', 'g', 'gf', 'gf', 0, 'gf', 'gf'),
(11, 'adroit', 'adroitteachteam1@gmail.com', '9685', '7415', '8787', 45, 'dewas', '2023-24'),
(12, 'Eminence Public School24', 'shailkdangi@gmail.com', '12345', '123', '2', 0, 'Tonk Khurd', '2024'),
(13, ' excellence school ', 'sobhadiwakar@530gimal.com', '12345678', 'qwertyuiopoi', 'dewas', 0, '48b jay Bajrang nagar dewas', '2023'),
(14, 'Eminence public school ', 'shaikdangi@gmail.com', '12345', '', '23230321007', 462211, 'Sonkatch road Pipalrawan  ', '2009'),
(15, 'mohan', 'mohan123', 'mohan123', '123456', '12345', 123456, 'dewas', '2012'),
(16, 'uk school', 'rohit@', '123', '12341', '1232', 122, 'uttrakhand', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `socialqualitie`
--

CREATE TABLE `socialqualitie` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `Literary` int(100) NOT NULL,
  `cultural` int(100) NOT NULL,
  `scientificity` int(100) NOT NULL,
  `creative` int(100) NOT NULL,
  `sports` int(100) NOT NULL,
  `regularity` int(100) NOT NULL,
  `hygiene` int(100) NOT NULL,
  `dutiful` int(100) NOT NULL,
  `cooperation` int(100) NOT NULL,
  `environmental` int(100) NOT NULL,
  `Honesty` int(100) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `socialqualitie`
--

INSERT INTO `socialqualitie` (`id`, `student`, `Literary`, `cultural`, `scientificity`, `creative`, `sports`, `regularity`, `hygiene`, `dutiful`, `cooperation`, `environmental`, `Honesty`, `parent`) VALUES
(3, 8, 70, 80, 90, 70, 40, 50, 60, 10, 20, 30, 70, 1),
(12, 2, 90, 90, 84, 81, 86, 87, 87, 88, 88, 88, 90, 1),
(13, 2, 90, 90, 84, 81, 86, 87, 87, 88, 88, 88, 90, 1),
(14, 5, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 1),
(15, 44, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89, 13),
(16, 45, 56, 56, 56, 65, 56, 65, 65, 65, 56, 65, 56, 13);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` varchar(20) NOT NULL DEFAULT 'delhipbscl'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `parent`) VALUES
(7, 'English', '1'),
(8, 'Science', '1'),
(9, 'Maths', '1'),
(11, 'EVS', '1'),
(29, 'english', '1'),
(30, 'sst', '1'),
(31, 'dfsdfs', '12'),
(32, 'dsfadsf', '12'),
(33, 'sdfsdf', '12'),
(34, 'dsfsdf', '12'),
(35, 'ffffffffffff', '12'),
(36, 'fsdfs', '12'),
(37, 'fsdfs', '12'),
(38, '3sd', '12'),
(39, '3sd', ''),
(40, 'english', '13'),
(41, 'math', '13'),
(43, 'hindi', '13'),
(44, 'hindi', '4'),
(45, 'english', '4'),
(46, 'hindi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scl_addfees`
--
ALTER TABLE `scl_addfees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scl_dailyspend`
--
ALTER TABLE `scl_dailyspend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scl_staff`
--
ALTER TABLE `scl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scl_tranfees`
--
ALTER TABLE `scl_tranfees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scl_update`
--
ALTER TABLE `scl_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialqualitie`
--
ALTER TABLE `socialqualitie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addstudent`
--
ALTER TABLE `addstudent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `scl_addfees`
--
ALTER TABLE `scl_addfees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `scl_dailyspend`
--
ALTER TABLE `scl_dailyspend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `scl_staff`
--
ALTER TABLE `scl_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `scl_tranfees`
--
ALTER TABLE `scl_tranfees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `scl_update`
--
ALTER TABLE `scl_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `socialqualitie`
--
ALTER TABLE `socialqualitie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
