-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 05:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `event` varchar(255) DEFAULT NULL,
  `fooditem` varchar(255) DEFAULT NULL,
  `plate` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `upi` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `donateddate` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(250) NOT NULL,
  `pointsearned` int(11) DEFAULT NULL,
  `uniqueid` int(11) NOT NULL,
  `overallpointearned` int(11) DEFAULT NULL,
  `d_name` varchar(245) NOT NULL,
  `d_address` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`event`, `fooditem`, `plate`, `weight`, `upi`, `money`, `id`, `donateddate`, `email`, `pointsearned`, `uniqueid`, `overallpointearned`, `d_name`, `d_address`) VALUES
('Party_khchidi', 'Khichdi', 10, 20, '', 0, NULL, '2021-01-14', 'userajay89@gmail.com', 30, 82, 30, 'aj  kumar', 'aj_address_mzp'),
('', 'Rs. 500', 0, 0, 'aj@oksbi', 500, NULL, '2021-01-15', 'aj@gmail.com', 500, 83, 500, 'aj  kumar', 'aj_address_mzp'),
('', 'Rs. 2000', 0, 0, 'sd@oksbi', 2000, NULL, '2021-01-15', 'userajay89@gmail.com', 2000, 84, 2000, 'nishan singh', 'n@gmail.com'),
('', 'Rs. 10000', 0, 0, 'gh@oksbi', 10000, NULL, '2021-01-15', 'kj@gmail.com', 10000, 85, 10000, 'kj_first kj_last', 'kj_address'),
('', 'Rs. 45', 0, 0, '', 45, NULL, '2021-01-15', 'n@gmail.com', 45, 86, 45, 'ssfdvs sdfs', 'ghsdt'),
('', 'Rs. 500', 0, 0, '', 500, NULL, '2021-01-15', 'userajay89@gmail.com', 500, 87, 500, 'nishan singh', 'user_address_here'),
('sadi', 'roti,chawal, ghee', 45, 67, '', 0, NULL, '2021-01-15', 'userajay89@gmail.com', 112, 88, 2642, 'nishan singh', 'user_address_here'),
('', '', 0, 0, '', 30, NULL, '2021-01-15', 'userajay89@gmail.com', NULL, 89, NULL, '', ''),
('', 'Rs. 70', 0, 0, '', 70, NULL, '2021-01-15', 'userajay89@gmail.com', 70, 90, 2600, 'nishan singh', 'user_address_here'),
('chay party', 'dal', 67, 89, '', 0, NULL, '2021-01-15', 'userajay89@gmail.com', 156, 91, 2686, 'nishan singh', 'user_address_here'),
('holi', 'Puri, sabji, halwa', 23, 24, '', 0, NULL, '2021-01-15', 'ajay@gmail.com', 47, 92, 47, 'Ajay Kumar', 'Ajay_kumar shivnagar'),
('', 'Rs. 250000', 0, 0, 'fake@oksbi', 250000, NULL, '2021-01-15', 'u@gmail.com', 250000, 93, 250000, 'f l', 'add'),
('sadi', 'roti', 23, 45, '', 0, NULL, '2021-01-15', 'shivam@gmail.com', 68, 94, 68, 'shivam sahu', 'shivam_adress');

-- --------------------------------------------------------

--
-- Table structure for table `ngotable`
--

CREATE TABLE `ngotable` (
  `id` int(11) NOT NULL,
  `ownerfirstname` varchar(250) NOT NULL,
  `ownerlastname` varchar(250) NOT NULL,
  `owneremail` varchar(250) NOT NULL,
  `ownercontact` varchar(250) NOT NULL,
  `ngoname` varchar(250) NOT NULL,
  `ngocontact` varchar(250) NOT NULL,
  `ngoemail` varchar(250) NOT NULL,
  `ngoaddress` varchar(250) NOT NULL,
  `ngocity` varchar(250) NOT NULL,
  `ngopin` varchar(250) NOT NULL,
  `ngofile` blob NOT NULL,
  `ngoid` varchar(250) NOT NULL,
  `ngostatus` tinyint(1) NOT NULL,
  `registereddate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngotable`
--

INSERT INTO `ngotable` (`id`, `ownerfirstname`, `ownerlastname`, `owneremail`, `ownercontact`, `ngoname`, `ngocontact`, `ngoemail`, `ngoaddress`, `ngocity`, `ngopin`, `ngofile`, `ngoid`, `ngostatus`, `registereddate`) VALUES
(1, 'f_name', 'l_name', 'email@gmail.com', '67545354365', 'ngo1', '475869879878', 'ngo@gmail.com', 'ngo address', 'Prayagraj', '211008', '', 'ngo_id1', 1, '0000-00-00'),
(55, 'hdks', 'jd', 'hf@gmail', 'hf@gmail', 'hf@gmail', 'hf@gmail', 'hf@gmail', 'hf@gmail', 'Prayagraj', '211008', '', 'hf@gmail', 1, '2021-01-12'),
(56, 'ajay', 'kumar', 'ajay@gmail.com', '27348923', 'ngo name', '783648723', 'ngo@gmail.com', 'ngo address', 'Prayagraj', '211008', '', 'ngoid', 1, '2021-01-12'),
(57, 'hdks', 'jd', 'hf@gmail', 'hf@gmail', 'hf@gmail', 'hf@gmail', 'hf@gmail', 'hf@gmail', 'Prayagraj', '211008', '', 'hf@gmail', 1, '2021-01-12'),
(58, 'frst', 'lst', 'owner@gmail', '12345', 'ngo name', '1234567', 'ngor@gmail', 'address', 'mirzapur', '123456', 0x656e657267792e6a7067, '43665', 1, '2021-01-12'),
(59, 'Ajay', 'Kr', 'ajay_ngo@gmail.com', '1234567890', 'Ajay Kumar NGO, 2020 Established', '7266026387', 'hiban5538@gmail.com', '647 gali no 4, rail marg, shiv nagar mirzapur', 'mirzapur', '123456', '', 'NGOID12345', 1, '2021-01-12'),
(60, 'ajay', 'kumar', 'ajay@gmail.com', '123456789', 'ajay_ngo_select_it', '123456789', 'hiban5538@gmail.com', 'ajay ngo address', 'mirzapur', '123456', '', 'AD_NGO_ID', 1, '2021-01-12'),
(61, 'ram', 'lakhan', 'ramlakhan@gmail.com', '123456791', 'ram ngo', '4235367876', 'ramngo@gmail.com', 'ram ngo address', 'mirzapur', '123456', '', 'ram ngo id', 1, '2021-01-12'),
(62, 'ram', 'lakhan', 'ramlakhan@gmail.com', '123456791', 'ram ngo', '4235367876', 'ramngo@gmail.com', 'ram ngo address', 'mirzapur', '123456', '', 'ram ngo id', 1, '2021-01-12'),
(63, 'aj', 'kr', 'ajemail@gmail.com', '1234567', 'aj_ngo', '876543', 'ajngo@gmail.com', 'ajngo_address', 'mirzapur', '123456', '', 'hdskjakda', 1, '2021-01-13'),
(64, 'shasy_f', 'shasy_l', 'shashy@gmail.com', '1234567891', 'shashy_ngo', '987654321', 'shashy_ngo@gmail.com', 'shashy_ng0_address', 'Raipur', '492001', '', 'ABCDEF', 1, '2021-01-13'),
(65, 'rahul', 'singh', 'rahul@gmail.com', '3634e8274982739', 'rahul_ngo', '9723982', 'rahulngo@gmail.com', 'rahul raipur ljdos', 'raipur', '492001', '', 'khfkdj', 1, '2021-01-13'),
(66, 'nishan', 'singh', 'nishan@owner', 'w3324345', 'ngo_n', '32423423', 'n_ngo@gmail.com', 'ngo_n_address', 'Raipur', '492001', '', 'n_id', 1, '2021-01-13'),
(67, 'Daily', 'Singh', 'daily@gmail.com', '123456', 'Daily@ngo', '65426267', 'daily@ngogmail.com', 'daily_address', 'Raipur', '492001', '', 'bkhjdhw987yw', 1, '2021-01-14'),
(68, 'abc', 'jkl', 'abc@gmail.com', '1234567890', 'abc_ngo', '1232123432', 'abc_ngo@gmail.com', 'abc_ngo_address', 'abc_ngo_city', '12345', '', 'abc_ngo_id', 1, '2021-01-14'),
(69, 'xdv', 'sdfs', 'sdfs@gmail', 'sfsdf', 'dsf', 'sdfssfs', 'jd@gmail', 'sdsf', 'dhd', '454635', '', 'cbcv', 1, '2021-01-15'),
(70, 'first', 'last', 'email@gmail.com', '1234567892', 'ngo_name', '1234567890', 'ngo@gmail.com', 'ngo_address', 'allahabad', '211008', '', 'NGO_ID123', 1, '2021-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `testimonial_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `name`, `address`, `date`, `testimonial_text`) VALUES
(150, 'kj_first kj_last', 'kj_address', '2021-01-14', 'ajay'),
(151, 'kj_first kj_last', 'kj_address', '2021-01-14', 'ajay'),
(171, 'kj_first kj_last', 'kj_address', '2021-01-14', 'hfghgf'),
(184, 'aj  kumar', 'aj_address_mzp', '2021-01-15', 'Hurrey!! Now working fine!\r\nMove on another feature.'),
(188, 'aj  kumar', 'aj_address_mzp', '2021-01-15', 'Ja bhai, ho gya fix'),
(189, 'aj  kumar', 'aj_address_mzp', '2021-01-15', 'Abhi gya nhi!!!!!!!!!!!!!!\r\n Ja'),
(190, 'aj  kumar', 'aj_address_mzp', '2021-01-15', 'hurrey, thanks'),
(191, 'nishan singh', 'n@gmail.com', '2021-01-15', 'Donated 2000 rupye'),
(192, 'nishan singh', 'n@gmail.com', '2021-01-15', 'Wow'),
(193, 'nishan singh', 'n@gmail.com', '2021-01-15', 'Final, done'),
(194, 'kj_first kj_last', 'kj_address', '2021-01-15', 'Well done'),
(195, 'kj_first kj_last', 'kj_address', '2021-01-15', 'Smile :)'),
(196, 'ssfdvs sdfs', 'ghsdt', '2021-01-15', 'done'),
(197, 'f l', 'add', '2021-01-15', ''),
(198, 'f l', 'add', '2021-01-15', ''),
(199, 'f l', 'add', '2021-01-15', 'hellooo'),
(200, 'nishan singh', 'user_address_here', '2021-01-15', 'Nice'),
(201, 'nishan singh', 'user_address_here', '2021-01-15', 'Good'),
(202, 'shivam sahu', 'shivam_adress', '2021-01-15', 'Shivam is awesome and living with her'),
(203, 'nishan singh', 'user_address_here', '2021-01-15', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` int(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `avatar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobile`, `dob`, `occupation`, `address`, `pincode`, `password`, `avatar`) VALUES
(1, 'f', 'l', 'u@gmail.com', '678687678546', '2021-01-11', 'occup', 'add', 876876, '7b774effe4a349c6dd82ad4f4f21d34c', ''),
(11, 'kj_first', 'kj_last', 'kj@gmail.com', '763479293487', '2021-01-13', 'kj_occuation', 'kj_address', 682634, '771f01104d905386a134a676167edccc', ''),
(15, 'shivam', 'sahu', 'shivam@gmail.com', '743937283490', '2021-01-13', 'Student', 'shivam_adress', 226021, '3ae9d8799d1bb5e201e5704293bb54ef', ''),
(16, 'nishan', 'singh', 'userajay89@gmail.com', '7492789349', '2021-01-13', 'nishanoccupation', 'user_address_here', 123456, '7b8b965ad4bca0e41ab51de7b31363a1', ''),
(17, 'aj ', 'kumar', 'aj@gmail.com', '769768658787', '2021-01-14', 'student', 'aj_address_mzp', 123456, '3b6f421e7550395e28e091c5565ac80a', ''),
(18, 'ssfdvs', 'sdfs', 'n@gmail.com', '453464564634', '2021-01-15', 'wrwer', 'ghsdt', 454635, '7b8b965ad4bca0e41ab51de7b31363a1', ''),
(19, 'Ajay', 'Kumar', 'ajay@gmail.com', '1234567897', '2021-01-15', 'Student', 'Ajay_kumar shivnagar', 211008, '29e457082db729fa1059d4294ede3909', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`uniqueid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ngotable`
--
ALTER TABLE `ngotable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `uniqueid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `ngotable`
--
ALTER TABLE `ngotable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
