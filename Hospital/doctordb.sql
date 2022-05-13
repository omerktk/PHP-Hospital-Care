-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 08:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin'),
(2, 'adminname', 'adminmail', 'adminpass');

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `app_id` int(11) NOT NULL,
  `app_doc_id` int(11) NOT NULL,
  `app_p_id` int(11) NOT NULL,
  `app_weak` varchar(50) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` varchar(50) NOT NULL,
  `app_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`app_id`, `app_doc_id`, `app_p_id`, `app_weak`, `app_date`, `app_time`, `app_number`) VALUES
(14, 16, 1, 'Monday', '2022-01-07', 'Morning', '032222222'),
(15, 15, 9, 'Monday', '2022-01-07', 'Morning', '23032263'),
(16, 19, 9, 'Monday', '2022-01-07', 'Morning', '651456156'),
(17, 19, 1, 'Wednesday', '2022-01-07', 'Noon', '99999999999999999999');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Lahore'),
(2, 'Karachi'),
(3, 'Islamabad'),
(4, 'Hyderabad'),
(5, 'Faisalabad');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `doc_firstname` varchar(150) NOT NULL,
  `doc_lastname` varchar(50) NOT NULL,
  `doc_gender` varchar(50) NOT NULL,
  `doc_contact` varchar(50) NOT NULL,
  `doc_address` varchar(200) NOT NULL,
  `doc_email` varchar(100) NOT NULL,
  `doc_pass` varchar(50) NOT NULL,
  `doc_city` varchar(150) NOT NULL,
  `doc_study` varchar(150) NOT NULL,
  `doc_speciality` varchar(150) NOT NULL,
  `doc_exp` varchar(150) NOT NULL,
  `doc_from` varchar(50) NOT NULL,
  `doc_to` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `doc_firstname`, `doc_lastname`, `doc_gender`, `doc_contact`, `doc_address`, `doc_email`, `doc_pass`, `doc_city`, `doc_study`, `doc_speciality`, `doc_exp`, `doc_from`, `doc_to`) VALUES
(15, 'Dr', 'Talha', 'Male', '03017099252', 'Centrum Shopping Mall, Block-21, Opp.UBL Sport Complex', 'talha@gmail.com', 'admin', 'Karachi', 'matric', 'Lungs Specialist', '2 years', 'Monday', 'Sunday'),
(16, 'Dr', 'ali', 'Male', '03222027196', '50-Iftikhar Building Chouburji, Punjab', 'admin@gmai.com', 'admin1', 'Hyderabad', 'mbbs', 'Heart Specialist', '3 years', 'Monday', 'Sunday'),
(19, 'Dr', 'Sameer', 'Male', '03222027196', 'Peoples Colony No.2, Punjab', 'Sameer@gmail.com', 'Sameer', 'Islamabad', 'mbbs', 'Skin Specialist', '3 years', 'Monday', 'Sunday'),
(20, 'Dr', 'Faiz', 'Male', '03222027196', 'near zam zam medical', 'admin@gmai.com', 'faiz', 'Faisalabad', 'mbbs', 'Eyes Specialist', '+5 years', 'Monday', 'Friday'),
(21, 'Dr', 'sajid', 'Male', '03222027196', 'Javed bahria', 'admin@gmai.com', 'admin', 'Lahore', 'mbbs', 'Lungs Specialist', '3 years', 'Monday', 'Friday'),
(22, 'Dr', 'Raheema', 'Female', '0322222097', 'Grax colony', 'Doctor@gmail.com', 'drdrdr', 'Karachi', 'Mbbs', 'Bone Specialist', '+5 years', 'Monday', 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `p_firstname` varchar(50) NOT NULL,
  `p_lastname` varchar(50) NOT NULL,
  `p_gender` varchar(50) NOT NULL,
  `p_contact` varchar(50) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_pass` varchar(50) NOT NULL,
  `p_age` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_firstname`, `p_lastname`, `p_gender`, `p_contact`, `p_email`, `p_pass`, `p_age`) VALUES
(1, 'Muhmmad', 'Omer', 'Male', '03333333', 'omer@gmail.com', 'omer', 17),
(8, 'Dr', 'ali1', 'Male', '3333333333333', 'admin@gmai.com1', 'sdf', 33),
(9, 'Saad', 'Jiskani', 'Male', '3333333333333', 'saad@gmail.com', 'saad', 35),
(14, 'Dr', 'ali', 'Male', '3333333333333', 'admin@gmai.com', '456456456', 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
