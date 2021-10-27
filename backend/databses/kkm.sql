-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 07:33 AM
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
-- Database: `kkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlist`
--

CREATE TABLE `adminlist` (
  `adminid` int(11) NOT NULL,
  `adminname` text NOT NULL,
  `adminemail` varchar(55) NOT NULL,
  `adminpass` varchar(55) NOT NULL,
  `admincnfpass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlist`
--

INSERT INTO `adminlist` (`adminid`, `adminname`, `adminemail`, `adminpass`, `admincnfpass`) VALUES
(1, 'Subbas Adla', 'aarushtechno@gmail.com', 'subbasadmin', 'subbasadmin');

-- --------------------------------------------------------

Table structure for table `admin2list`
--

CREATE TABLE `admin2list` (
  `admin2id` int(11) NOT NULL,
  `admin2name` text NOT NULL,
  `admin2email` varchar(55) NOT NULL,
  `admin2pass` varchar(55) NOT NULL,
  `admin2cnfpass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin2list`
--

INSERT INTO `admin2list` (`admin2id`, `admin2name`, `admin2email`, `admin2pass`, `admin2cnfpass`) VALUES
(1, 'Admin', 'aarushtechno@gmail.com', 'Aarush@2018', 'Aarush@2018');

-- --------------------------------------------------------
--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agentid` int(255) NOT NULL,
  `agentname` text NOT NULL,
  `agentaadhar` varchar(20) NOT NULL,
  `agentpan` varchar(20) NOT NULL,
  `agentphone` varchar(11) NOT NULL,
  `agentemail` varchar(20) NOT NULL,
  `agentdistrict` text NOT NULL,
  `agentaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `associateslist`
--

CREATE TABLE `associateslist` (
  `assoid` int(11) NOT NULL,
  `assoname` text NOT NULL,
  `assoaadhar` varchar(55) NOT NULL,
  `assopan` varchar(55) NOT NULL,
  `assomobile` varchar(11) NOT NULL,
  `assoemail` varchar(20) NOT NULL,
  `assodistrict` text NOT NULL,
  `assoaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_form`
--

CREATE TABLE `customer_form` (
  `form_id` int(255) NOT NULL,
  `name_of_applicant` text NOT NULL,
  `fathers_name` text NOT NULL,
  `date_of_application` varchar(11) NOT NULL,
  `mailing_address` text NOT NULL,
  `city` text NOT NULL,
  `pin` text NOT NULL,
  `mobile_1` varchar(11) NOT NULL,
  `whatsapp_number` varchar(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `photograph` blob DEFAULT NULL,
  `blood_group` varchar(50) NOT NULL,
  `date_of_birth` varchar(155) NOT NULL,
  `place_of_birth` varchar(80) NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `married_status` varchar(80) NOT NULL,
  `pan_card_number` varchar(110) NOT NULL,
  `aadhar_number` varchar(110) NOT NULL,
  `cardmembership` varchar(99) NOT NULL,
  `paymentstatus` varchar(99) NOT NULL,
  `executives` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employeelist`
--

CREATE TABLE `employeelist` (
  `empid` int(255) NOT NULL,
  `empname` text NOT NULL,
  `empaadhar` varchar(50) NOT NULL,
  `emppan` varchar(50) NOT NULL,
  `empmobile` varchar(11) NOT NULL,
  `empmail` varchar(20) NOT NULL,
  `empdistrict` text NOT NULL,
  `empaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `franchiseslist`
--

CREATE TABLE `franchiseslist` (
  `franid` int(255) NOT NULL,
  `franname` text NOT NULL,
  `franaadhar` varchar(55) NOT NULL,
  `franpan` varchar(55) NOT NULL,
  `franmoblie` varchar(11) NOT NULL,
  `franemail` varchar(20) NOT NULL,
  `frandistrict` varchar(55) NOT NULL,
  `franaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registeradmin`
--

CREATE TABLE `registeradmin` (
  `regid` int(11) NOT NULL,
  `regemail` text NOT NULL,
  `regpass` varchar(99) NOT NULL,
  `regcnfpass` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registercse`
--

CREATE TABLE `registercse` (
  `regid` int(11) NOT NULL,
  `regemail` varchar(99) NOT NULL,
  `regpass` varchar(99) NOT NULL,
  `regcnfpass` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registerfranchise`
--

CREATE TABLE `registerfranchise` (
  `regid` int(11) NOT NULL,
  `regemail` varchar(99) NOT NULL,
  `regpass` varchar(99) NOT NULL,
  `regcnfpass` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlist`
--
ALTER TABLE `adminlist`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agentid`);

--
-- Indexes for table `associateslist`
--
ALTER TABLE `associateslist`
  ADD PRIMARY KEY (`assoid`);

--
-- Indexes for table `customer_form`
--
ALTER TABLE `customer_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `employeelist`
--
ALTER TABLE `employeelist`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `franchiseslist`
--
ALTER TABLE `franchiseslist`
  ADD PRIMARY KEY (`franid`);

--
-- Indexes for table `registeradmin`
--
ALTER TABLE `registeradmin`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `registercse`
--
ALTER TABLE `registercse`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `registerfranchise`
--
ALTER TABLE `registerfranchise`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlist`
--
ALTER TABLE `adminlist`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agentid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `associateslist`
--
ALTER TABLE `associateslist`
  MODIFY `assoid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_form`
--
ALTER TABLE `customer_form`
  MODIFY `form_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employeelist`
--
ALTER TABLE `employeelist`
  MODIFY `empid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `franchiseslist`
--
ALTER TABLE `franchiseslist`
  MODIFY `franid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registeradmin`
--
ALTER TABLE `registeradmin`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registercse`
--
ALTER TABLE `registercse`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registerfranchise`
--
ALTER TABLE `registerfranchise`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
