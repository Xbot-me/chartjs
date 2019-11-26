-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 04:30 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `uni_id` int(11) NOT NULL,
  `university` varchar(100) NOT NULL,
  `school` varchar(20) NOT NULL DEFAULT '2014',
  `department` varchar(20) NOT NULL,
  `year` int(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `major` varchar(20) NOT NULL,
  `student` varchar(20) NOT NULL,
  `total_students` varchar(20) NOT NULL,
  `male_s` varchar(20) NOT NULL,
  `female_s` varchar(50) NOT NULL,
  `graduated_students` varchar(20) NOT NULL,
  `total_teachers` varchar(20) NOT NULL,
  `total_professors` varchar(20) NOT NULL,
  `total_earns` varchar(20) NOT NULL,
  `total_expens` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uni_id`, `university`, `school`, `department`, `year`, `semester`, `major`, `student`, `total_students`, `male_s`, `female_s`, `graduated_students`, `total_teachers`, `total_professors`, `total_earns`, `total_expens`) VALUES
(1, 'North South University', '2014', '265637', 0, '4', '14', '5546', '13990', '30', '10', '1928', '907', '181', '21855', '18795'),
(2, 'University of Science and Technology Chittagong', '2014', '272250', 0, '5', '30', '2265', '4203', '31', '25', '1128', '365', '46', '3372', '2939'),
(3, 'Independent University', '2014', '129373.2', 0, '6', '15', '2400', '5376', '32', '30', '1164', '271', '43', '10167', '9011'),
(4, 'International University Of Busin. Agri. and Tec.', '2014', '4595580', 0, '7', '31', '5250', '7992', '33', '35', '770', '261', '47', '3331.13', '3426.88'),
(5, 'Ahsanullah Science and Tec. University', '2014', '71438.4', 0, '4', '9', '1942', '6843', '34', '40', '1542', '350', '30', '7731.76', '8093.74'),
(6, 'East West University', '2014', '106286.4', 0, '4', '11', '3215', '10400', '35', '45', '1341', '350', '79', '11470.16', '9020.86'),
(7, 'Brac University', '2014', '412513.2', 0, '6', '10', '3900', '6523', '36', '50', '1495', '658', '90', '16258.52', '14785.62'),
(8, 'Primier University Chittagong', '2014', '119319.552', 0, '6', '9', '5600', '9585', '37', '55', '1594', '301', '51', '3285.79', '3281.82'),
(9, 'Stamford University Bangladesh', '2014', '334497.24', 0, '5', '13', '4315', '10787', '38', '60', '2420', '452', '69', '9504.73', '9658.99'),
(10, 'City University', '2014', '114500', 0, '3', '10', '2655', '9463', '39', '65', '1547', '108', '6', '2022.34', '1755.1'),
(11, 'Bangladesh University of Business and Tech.', '2014', '47916', 0, '6', '8', '3275', '8317', '40', '70', '1513', '295', '16', '5083.04', '5083.04'),
(12, 'American International University Bangladesh', '2014', '1300000', 0, '4', '16', '3646', '10571', '41', '75', '2755', '359', '29', '1942371036', '1595072504'),
(13, 'The University Of Asia Pacific', '2014', '158558.4', 0, '7', '9', '1527', '4288', '42', '80', '1193', '292', '15', '5441.24', '1373.27'),
(14, 'Gono University', '2014', '703058.4', 0, '4', '15', '1138', '4376', '43', '85', '444', '240', '40', '262902930', '279720441'),
(15, 'Bangladesh University', '2014', '119790', 0, '3', '10', '1812', '5591', '44', '90', '1186', '145', '23', '1670.73', '1565.43'),
(16, 'Leading University', '2014', '89733.6', 0, '4', '9', '1754', '4618', '45', '95', '316', '159', '24', '2282.9', '2065.67'),
(17, 'South East University', '2014', '65000', 45354, '3', '14', '3307', '11410', '46', '100', '4509', '372', '60', '935318085', '450947432'),
(18, 'Daffodil International University', '2014', '784080', 0, '5', '18', '5743', '13679', '47', '105', '1893', '393', '88', '8458.73', '217.34'),
(19, 'Shanto Mariam University', '2014', '273995', 0, '3', '18', '1758', '5621', '48', '110', '1592', '302', '28', '4554', '3844'),
(20, 'University of Development and Alternative', '2014', '256763', 0, '7', '28', '1499', '4091', '49', '115', '883', '334', '32', '182081620', '180893569'),
(21, 'Green University of Bangladesh', '2014', '230432.4', 0, '4', '8', '1124', '4192', '50', '120', '335', '172', '11', '1617.2', '2320.02'),
(22, 'World University of Bangladesh', '2014', '390998', 0, '3', '12', '1631', '5424', '51', '125', '1981', '250', '17', '2508.25', '2030.69'),
(23, 'Metropoliton University', '2014', '87555.6', 0, '4', '6', '1422', '2467', '52', '130', '429', '106', '10', '1220905349', '125732281'),
(24, 'University of South Asia', '2014', '43560', 0, '4', '8', '983', '3274', '53', '135', '538', '126', '7', '510.1', '404.69'),
(25, 'State University of Bangladesh', '2014', '64094', 0, '3', '10', '1668', '3157', '54', '140', '832', '238', '48', '235736450', '235736450'),
(26, 'North South University', '2013', '265637', 0, '4', '12', '4982', '21896', '55', '145', '1928', '465', '99', '0', '0'),
(27, 'University of Science and Technology Chittagong', '2013', '1322917.2', 0, '5', '33', '1500', '4698', '56', '150', '1128', '350', '43', '3211.94', '2799.9'),
(28, 'Independent University', '2013', '129373.2', 0, '6', '10', '1997', '4989', '57', '155', '1955', '234', '41', '8849.06', '7986.92'),
(29, 'International University Of Busin. Agri. and Tec.', '2013', '239680', 0, '7', '7', '3684', '8000', '58', '160', '770', '256', '41', '2615.17', '2639.68'),
(30, 'Ahsanullah Science and Tec. University', '2013', '71438.4', 0, '4', '9', '1743', '6328', '59', '165', '7323', '396', '51', '7056.23', '5082.32'),
(31, 'East West University', '2013', '106286.4', 0, '3', '10', '2941', '9355', '60', '170', '1341', '516', '72', '10179.23', '2403.07'),
(32, 'Brac University', '2013', '412513.2', 0, '6', '7', '2837', '7236', '61', '175', '679', '535', '110', '9656.6', '3509.8'),
(33, 'Primier University Chittagong', '2013', '204841', 0, '5', '5', '2890', '8077', '62', '180', '1594', '273', '53', '2672.01', '2157.62'),
(34, 'Stamford University Bangladesh', '2013', '84070.8', 0, '4', '13', '4512', '10714', '63', '185', '2371', '447', '70', '9801.77', '2100.4'),
(35, 'City University', '2013', '158073', 0, '3', '3', '2029', '7603', '64', '190', '1410', '130', '5', '1584.49', '22.56'),
(36, 'Bangladesh University of Business and Tech.', '2013', '132865', 0, '6', '8', '3440', '7522', '65', '195', '1056', '265', '15', '4029.94', '2700.81'),
(37, 'American International University Bangladesh', '2013', '203150', 0, '4', '4', '3782', '11056', '66', '200', '2730', '363', '17', '17275.33', '18824.8'),
(38, 'The University Of Asia Pacific', '2013', '158558.4', 0, '7', '9', '1379', '4288', '67', '205', '9687', '292', '15', '4454.46', '1544.97'),
(39, 'Gono University', '2013', '703058.4', 0, '3', '13', '868', '3681', '68', '210', '382', '235', '40', '2619.48', '2586.38'),
(40, 'Bangladesh University', '2013', '119790', 0, '3', '10', '2089', '6972', '69', '215', '1012', '131', '13', '1317.23', '1270.48'),
(41, 'Leading University', '2013', '89733.6', 0, '4', '9', '1501', '3453', '70', '220', '411', '147', '21', '2569.23', '966.94'),
(42, 'South East University', '2013', '239886', 0, '3', '3', '4446', '8673', '71', '225', '2619', '372', '60', '3378.04', '4272.61'),
(43, 'Daffodil International University', '2013', '899514', 0, '4', '18', '4824', '11240', '72', '230', '1488', '405', '72', '4043', '2384'),
(44, 'Shanto Mariam University', '2013', '221350', 0, '3', '18', '2214', '6018', '73', '235', '1031', '302', '22', '3610.5', '3390.27'),
(45, 'University of Development and Alternative', '2013', '201763', 0, '7', '7', '1466', '4474', '74', '240', '727', '334', '33', '1790.46', '1780.39'),
(46, 'Green University of Bangladesh', '2013', '230432.4', 0, '4', '8', '1307', '3165', '75', '245', '366', '174', '22', '2015.62', '2015.62'),
(47, 'World University of Bangladesh', '2013', '87120', 10008, '3', '11', '1860', '5501', '76', '250', '801', '242', '16', '2038.11', '2038.11'),
(48, 'Metropoliton University', '2013', '87555.6', 0, '4', '5', '1365', '3268', '77', '255', '301', '110', '13', '1287.78', '1239.61'),
(49, 'University of South Asia', '2013', '43560', 0, '4', '8', '1115', '3347', '78', '260', '919', '85', '9', '488.25', '365.23'),
(50, 'State University of Bangladesh', '2013', '64094', 0, '3', '10', '1653', '3091', '79', '265', '1082', '209', '13', '2373.51', '2373.51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `s_ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `email`, `phone`, `s_ans`) VALUES
(4, 'shawon', 'Shawon', '827ccb0eea8a706c4c34a16891f84e7b', 'Xbot@me.com', 1478523692, 'qeqweq'),
(5, 'Shawon', 'Islam', '827ccb0eea8a706c4c34a16891f84e7b', 'ssajidulislam@gmail.com', 1478523692, 'qeqweq'),
(6, 'Shawon', 'Islam', '827ccb0eea8a706c4c34a16891f84e7b', 'anikbaruanirob@gmail.com', 1231231231, 'qeqweq'),
(7, 'asdasd', 'asdas', '827ccb0eea8a706c4c34a16891f84e7b', 'asdfsa@sdf.com', 1231231231, 'qeqweq'),
(8, 'Md Sabbir', 'Sajan', 'e10adc3949ba59abbe56e057f20f883e', 'sabbir.sajan67@gmail.com', 1733818553, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`uni_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `uni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
