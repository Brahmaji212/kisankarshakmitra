-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 03:21 AM
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
-- Database: `sbpdasboard`
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
(1, 'varun', 'varunrex97@gmail.com', 'varun', 'varun');

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

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agentid`, `agentname`, `agentaadhar`, `agentpan`, `agentphone`, `agentemail`, `agentdistrict`, `agentaddress`) VALUES
(1, 'varun', '880281952790', 'erodkfjgh2', '91955334861', 'varunrex97@gmail.com', 'vizag', '31-50-11/111\r\nVyshnavi gardens STBL kapujaggarajupeta vsez so');

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

--
-- Dumping data for table `associateslist`
--

INSERT INTO `associateslist` (`assoid`, `assoname`, `assoaadhar`, `assopan`, `assomobile`, `assoemail`, `assodistrict`, `assoaddress`) VALUES
(1, 'Varun KasimKota', '880281952790', 'eqoikj8879', '19553348615', 'varunrex97@gmail.com', 'vizag', '31-50-11/111\r\nVyshnavi gardens STBL kapujaggarajupeta vsez so');

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

--
-- Dumping data for table `franchiseslist`
--

INSERT INTO `franchiseslist` (`franid`, `franname`, `franaadhar`, `franpan`, `franmoblie`, `franemail`, `frandistrict`, `franaddress`) VALUES
(1, 'alwar', '880281952790', 'eoqzk9876', '91955334861', 'varunrex97@gmail.com', 'vizag', '31-50-11/111\r\nVyshnavi gardens STBL kapujaggarajupeta vsez so'),
(2, 'alwar', '880281952790', 'eoqzk9876', '91955334861', 'varunrex97@gmail.com', 'vizag', '31-50-11/111\r\nVyshnavi gardens STBL kapujaggarajupeta vsez so');

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
  MODIFY `agentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `associateslist`
--
ALTER TABLE `associateslist`
  MODIFY `assoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employeelist`
--
ALTER TABLE `employeelist`
  MODIFY `empid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `franchiseslist`
--
ALTER TABLE `franchiseslist`
  MODIFY `franid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
