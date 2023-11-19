-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 10:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Input a valid username';

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`username`, `password`, `email`) VALUES
('mukut', 'mukut123', 'mukut@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blood_information`
--

CREATE TABLE `blood_information` (
  `Blood_Group` varchar(15) NOT NULL,
  `Bag_Available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_information`
--

INSERT INTO `blood_information` (`Blood_Group`, `Bag_Available`) VALUES
('A(+ve)', 3),
('AB(+ve)', 7),
('B(+ve)', 6),
('O(+ve)', 5),
('O(-ve)', 2);

-- --------------------------------------------------------

--
-- Table structure for table `confirmation_message`
--

CREATE TABLE `confirmation_message` (
  `username` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation_message`
--

INSERT INTO `confirmation_message` (`username`, `message`) VALUES
('hassan123', 'Your request has been accepted.And please collect the bags from ours head office in Badda.'),
('mahamudun013', 'Your request has been rejected.And please try again later.');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `Full_Name` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Blood_Group` varchar(10) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`Full_Name`, `Gender`, `Blood_Group`, `District`, `Email`, `Mobile`, `User_Name`, `Password`) VALUES
('Mukut', 'Male', 'A(+ve)', 'Dhaka', 'mahamudun013@gmail.com', '0177777777', 'mahamudun013', 'maNiOnjLsBZdc'),
('Hassan', 'Male', 'A(+ve)', 'Dhaka', 'mahamuduncse013@gmail.com', '01777799778', 'hassan123', 'haTCw1NlWXqWI');

-- --------------------------------------------------------

--
-- Table structure for table `request_table`
--

CREATE TABLE `request_table` (
  `Blood_Group` varchar(10) NOT NULL,
  `Bag_Need` int(5) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_table`
--

INSERT INTO `request_table` (`Blood_Group`, `Bag_Need`, `Date`, `user_name`) VALUES
('O(+ve)', 3, '2019-10-27', 'mahamudun013');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blood_information`
--
ALTER TABLE `blood_information`
  ADD PRIMARY KEY (`Blood_Group`);

--
-- Indexes for table `confirmation_message`
--
ALTER TABLE `confirmation_message`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`Email`,`User_Name`);

--
-- Indexes for table `request_table`
--
ALTER TABLE `request_table`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
