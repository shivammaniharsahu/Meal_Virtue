-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 08:39 PM
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
-- Database: `food_filler_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_NGO`
--

CREATE TABLE `registered_NGO` (
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
-- Dumping data for table `registered_NGO`
--

INSERT INTO `registered_NGO` (`id`, `ownerfirstname`, `ownerlastname`, `owneremail`, `ownercontact`, `ngoname`, `ngocontact`, `ngoemail`, `ngoaddress`, `ngocity`, `ngopin`, `ngofile`, `ngoid`, `ngostatus`, `registereddate`) VALUES
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
(70, 'first', 'last', 'email@gmail.com', '1234567892', 'ngo_name', '1234567890', 'ngo@gmail.com', 'ngo_address', 'allahabad', '211008', '', 'NGO_ID123', 1, '2021-01-15'),
(71, 'gyuyu', 'ggi', 'uiiu@g', 'gj6997', 'kk', 'jhioj', 'yy89yhu@jhj', 'kjj', 'jkho', 'uui9@jk', '', 'uyo89', 1, '2021-01-16'),
(72, 'asdf', 'jklm', 'emailowner@gmail.com', 'contact12345', 'ngo_name_asdf', '12345', 'hiban5538@gmail.com', 'ngo_address_here', 'Raipur', '492001', '', 'NGO_ID', 1, '2021-01-16'),
(73, 'Bala', 'Ngo', 'bala@gmail.com', '1234567890', 'Bala_NGO', '234567443', 'balango@gmail.com', 'balango_address', 'Bala_NGO_CITY', '211008', '', 'iiu77kh', 1, '2021-01-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_NGO`
--
ALTER TABLE `registered_NGO`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_NGO`
--
ALTER TABLE `registered_NGO`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
