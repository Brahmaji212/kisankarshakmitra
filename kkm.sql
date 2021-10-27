-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 01:07 PM
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
-- Database: `kkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin2list`
--

CREATE TABLE `admin2list` (
  `admin2id` int(10) NOT NULL,
  `admin2name` varchar(100) NOT NULL,
  `admin2email` varchar(100) NOT NULL,
  `admin2pass` varchar(100) NOT NULL,
  `admin2cnfpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin2list`
--

INSERT INTO `admin2list` (`admin2id`, `admin2name`, `admin2email`, `admin2pass`, `admin2cnfpass`) VALUES
(4, 'Aarush', 'tejaswinibotta@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adminlist`
--

CREATE TABLE `adminlist` (
  `adminid` int(10) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `adminpass` varchar(100) NOT NULL,
  `admincnfpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlist`
--

INSERT INTO `adminlist` (`adminid`, `adminname`, `adminemail`, `adminpass`, `admincnfpass`) VALUES
(2, 'Brahmaji', 'brahmajig@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agentid` int(11) NOT NULL,
  `agentname` varchar(100) NOT NULL,
  `agentaadhar` int(11) NOT NULL,
  `agentpan` varchar(25) NOT NULL,
  `agentphone` int(12) NOT NULL,
  `agentemail` varchar(100) NOT NULL,
  `agentdistrict` varchar(100) NOT NULL,
  `agentaddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agentid`, `agentname`, `agentaadhar`, `agentpan`, `agentphone`, `agentemail`, `agentdistrict`, `agentaddress`) VALUES
(1, 'brahmaji', 2147483647, 'DG14FP5684', 2147483647, 'newuser@gmail.com', 'visakhaptnam', 'akkayyapalem');

-- --------------------------------------------------------

--
-- Table structure for table `associateslist`
--

CREATE TABLE `associateslist` (
  `assoid` int(10) NOT NULL,
  `assoname` varchar(100) NOT NULL,
  `assoaadhar` int(100) NOT NULL,
  `assopan` varchar(100) NOT NULL,
  `assomobile` int(12) NOT NULL,
  `assoemail` varchar(100) NOT NULL,
  `assodistrict` varchar(100) NOT NULL,
  `assoaddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `associateslist`
--

INSERT INTO `associateslist` (`assoid`, `assoname`, `assoaadhar`, `assopan`, `assomobile`, `assoemail`, `assodistrict`, `assoaddress`) VALUES
(1, 'techninfo', 2147483647, 'ASD456DF4', 2147483647, 'techinfo@gmail.com', 'visp', 'gurudwar\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customer_form`
--

CREATE TABLE `customer_form` (
  `form_id` int(10) NOT NULL,
  `name_of_applicant` varchar(100) NOT NULL,
  `fathers_name` varchar(100) NOT NULL,
  `date_of_application` date NOT NULL,
  `mailing_address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(50) NOT NULL,
  `mobile_1` int(12) NOT NULL,
  `whatsapp_number` int(12) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `photograph` varbinary(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `married_status` varchar(100) NOT NULL,
  `pan_card_number` varchar(100) NOT NULL,
  `aadhar_number` int(100) NOT NULL,
  `cardmembership` varchar(100) NOT NULL,
  `paymentstatus` varchar(100) NOT NULL,
  `executives` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_form`
--

INSERT INTO `customer_form` (`form_id`, `name_of_applicant`, `fathers_name`, `date_of_application`, `mailing_address`, `city`, `pin`, `mobile_1`, `whatsapp_number`, `email_address`, `photograph`, `blood_group`, `date_of_birth`, `place_of_birth`, `father_name`, `mother_name`, `married_status`, `pan_card_number`, `aadhar_number`, `cardmembership`, `paymentstatus`, `executives`) VALUES
(1, 'Aarush', 'AarushGroup', '2021-10-14', '30/4/22, krishna gardens, dabagardens', 'Vishakhapatnam', 531002, 2147483647, 2147483647, 'aarush@gamil.com', 0x6d756c7469636f6c6f722d64726965642d736565642d6261636b67726f756e642d646966666572656e742d6472792d6c6567756d65732d656174696e672d6865616c7468795f333233362d313832362e6a7067, 'B+', '2001-07-20', 'visakhapatnam', 'helloworld', 'aruna', 'single', 'DGC123DF564', 2147483647, '0', 'Not Paid/ Pending', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `employeelist`
--

CREATE TABLE `employeelist` (
  `empid` int(10) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `empaadhar` varchar(100) NOT NULL,
  `emppan` varchar(100) NOT NULL,
  `empmobile` int(12) NOT NULL,
  `empmail` varchar(100) NOT NULL,
  `empdistrict` varchar(100) NOT NULL,
  `empaddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeelist`
--

INSERT INTO `employeelist` (`empid`, `empname`, `empaadhar`, `emppan`, `empmobile`, `empmail`, `empdistrict`, `empaddress`) VALUES
(1, 'sharath', '123441234569', '456ASD45D5', 2147483647, 'sharath@gmail.com', 'visakhaptnam', 'akkayyapelm');

-- --------------------------------------------------------

--
-- Table structure for table `franchiseslist`
--

CREATE TABLE `franchiseslist` (
  `franid` int(10) NOT NULL,
  `franname` varchar(100) NOT NULL,
  `franaadhar` int(100) NOT NULL,
  `franpan` varchar(100) NOT NULL,
  `franmoblie` int(12) NOT NULL,
  `franemail` varchar(100) NOT NULL,
  `frandistrict` varchar(100) NOT NULL,
  `franaddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `franchiseslist`
--

INSERT INTO `franchiseslist` (`franid`, `franname`, `franaadhar`, `franpan`, `franmoblie`, `franemail`, `frandistrict`, `franaddress`) VALUES
(1, 'aarushhead', 2147483647, 'dgf123df54', 2147483647, 'aarush@gmail.com', 'visakhatapnam', 'narasimhareddinagar');

-- --------------------------------------------------------

--
-- Table structure for table `registeradmin`
--

CREATE TABLE `registeradmin` (
  `regid` int(10) NOT NULL,
  `regemail` varchar(100) NOT NULL,
  `regpass` varchar(100) NOT NULL,
  `regcnfpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registercse`
--

CREATE TABLE `registercse` (
  `regid` int(10) NOT NULL,
  `regemail` varchar(100) NOT NULL,
  `regpass` varchar(100) NOT NULL,
  `regcnfpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registerfranchise`
--

CREATE TABLE `registerfranchise` (
  `regid` int(10) NOT NULL,
  `regemail` varchar(100) NOT NULL,
  `regpass` varchar(100) NOT NULL,
  `regcnfpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin2list`
--
ALTER TABLE `admin2list`
  ADD PRIMARY KEY (`admin2id`);

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
-- AUTO_INCREMENT for table `admin2list`
--
ALTER TABLE `admin2list`
  MODIFY `admin2id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adminlist`
--
ALTER TABLE `adminlist`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `associateslist`
--
ALTER TABLE `associateslist`
  MODIFY `assoid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_form`
--
ALTER TABLE `customer_form`
  MODIFY `form_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employeelist`
--
ALTER TABLE `employeelist`
  MODIFY `empid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `franchiseslist`
--
ALTER TABLE `franchiseslist`
  MODIFY `franid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registeradmin`
--
ALTER TABLE `registeradmin`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registercse`
--
ALTER TABLE `registercse`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registerfranchise`
--
ALTER TABLE `registerfranchise`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
