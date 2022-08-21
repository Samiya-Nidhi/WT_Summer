-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 07:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `praddress` varchar(200) NOT NULL,
  `pmaddress` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `gender`, `dob`, `religion`, `praddress`, `pmaddress`, `phone`, `email`, `website`, `username`, `password`, `confirmpassword`) VALUES
('dipto', 'roy', 'male', '10-03-2000', 'hinduism', 'ssssssss', 'sssss', '01878378365', 'dipto@gmail.com', 'dipto.com', 'dipraj', '1234', '1234'),
('Dipto', 'Roy', 'male', '2022-04-12', 'Hinduism', 'jhklj', 'kjklj', '01717567435', 'dipto.roy.aiub@gmail.com', 'https://github.com/roydipto/WEB-TECHNOLOGIES/tree/main', 'dipraj', '1234', '1234'),
('Dipto', 'Roy', 'male', '2022-04-12', 'Hinduism', 'jhklj', 'kjklj', '01717567435', 'dipto.roy.aiub@gmail.com', 'https://github.com/roydipto/WEB-TECHNOLOGIES/tree/main', 'dipraj', '1234', '1234'),
('Dipto', 'Roy', 'male', '2022-04-12', 'Hinduism', 'jhklj', 'kjklj', '01717567435', 'dipto.roy.aiub@gmail.com', 'https://github.com/roydipto/WEB-TECHNOLOGIES/tree/main', 'dipraj', '1234', '1234'),
('Dipto', 'Roy', 'male', '2022-04-12', 'Hinduism', 'jhklj', 'kjklj', '01717567435', 'dipto.roy.aiub@gmail.com', 'https://github.com/roydipto/WEB-TECHNOLOGIES/tree/main', 'dipraj', '1234', '1234'),
('samiya', 'nidhi', 'female', '2022-08-10', 'Islam', 'assa', 'asaa', '01717567435', 'samiyanedhi@gmail.com', 'https://www.aiub.edu/', 'nidhi', '11', '11'),
('Neha', 'nidhi', 'female', '2022-08-17', 'Islam', 'ffff', 'fffffff', '01717567435', 'samiyanedhi@gmail.com', 'https://www.aiub.edu/', 'nidhi', '1234', '1234'),
('Anik', 'das', 'male', '1998-11-12', 'Hinduism', 'ctg', 'ctg', '01717567435', 'samiyanedhi@gmail.com', 'https://www.aiub.edu/', 'anikdas', '55', '55');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('dipto', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `manu`
--

CREATE TABLE `manu` (
  `User_SerialNo` int(20) NOT NULL,
  `User_Id` varchar(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Deliver_Date` date NOT NULL,
  `Payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manufac`
--

CREATE TABLE `manufac` (
  `fname` varchar(100) NOT NULL,
  `userserial` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Deliver_Date` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufac`
--

INSERT INTO `manufac` (`fname`, `userserial`, `id`, `User_Name`, `Deliver_Date`, `payment`) VALUES
('imran', '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
('Nidhi', '1111', '1111', 'nidhi', '11-1-11', 'done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manu`
--
ALTER TABLE `manu`
  ADD PRIMARY KEY (`User_SerialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manu`
--
ALTER TABLE `manu`
  MODIFY `User_SerialNo` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
