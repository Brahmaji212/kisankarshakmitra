-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 09:54 AM
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
  `admin2cnfpass` varchar(100) NOT NULL,
  `Delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin2list`
--

INSERT INTO `admin2list` (`admin2id`, `admin2name`, `admin2email`, `admin2pass`, `admin2cnfpass`, `Delete`) VALUES
(4, 'sumeet', 'sumeet.aarushgroup@gmail.com', 'sumeet', 'sumeet', 0),
(5, 'brahmaji', 'brahmaji@gmail.com', 'Brahmaji@123', 'Brahmaji@123', NULL);

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
(3, 'kkmadmin', 'kkm@gmail.com', 'kkm123', 'kkm123'),
(4, 'sumeet', 'sumeet.aarushgroup@gmail.com', 'SUMEET', 'SUMEET'),
(11, 'brahmaji', 'superadmin@gmail.com', 'Superadmin@123', 'Superadmin@123');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agentid` int(11) NOT NULL,
  `agentname` varchar(100) NOT NULL,
  `agentaadhar` int(11) NOT NULL,
  `agentpan` varchar(25) NOT NULL,
  `agentphone` varchar(12) NOT NULL,
  `agentemail` varchar(100) NOT NULL,
  `agentdistrict` varchar(100) NOT NULL,
  `agentaddress` varchar(100) NOT NULL,
  `Approval` varchar(12) DEFAULT NULL,
  `Delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agentid`, `agentname`, `agentaadhar`, `agentpan`, `agentphone`, `agentemail`, `agentdistrict`, `agentaddress`, `Approval`, `Delete`) VALUES
(1, 'brahmaji', 2147483647, 'DG14FP5684', '2147483647', 'newuser@gmail.com', 'visakhaptnam', 'akkayyapalem', 'Success', 0),
(2, 'abdhulla', 2147483647, 'd123pjh98', '850026059412', 'newagent@gmail.com', 'visakhapatnam', '1-20,akkayyapalem,visakhapatnam,andhrapradesh,530021', 'Success', NULL),
(3, 'ganesh', 2147483647, 'abc123bc43', '9159159154', 'ganesh@gmail.com', 'visakhapatnam', 'narasimha nagar colony\r\nakkayyapalem', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `associateslist`
--

CREATE TABLE `associateslist` (
  `assoid` int(10) NOT NULL,
  `assoname` varchar(100) NOT NULL,
  `assoaadhar` int(100) NOT NULL,
  `assopan` varchar(100) NOT NULL,
  `assomobile` varchar(12) NOT NULL,
  `assoemail` varchar(100) NOT NULL,
  `assodistrict` varchar(100) NOT NULL,
  `assoaddress` varchar(100) NOT NULL,
  `Delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `associateslist`
--

INSERT INTO `associateslist` (`assoid`, `assoname`, `assoaadhar`, `assopan`, `assomobile`, `assoemail`, `assodistrict`, `assoaddress`, `Delete`) VALUES
(1, 'techninfo', 2147483647, 'ASD456DF4', '2147483647', 'techinfo@gmail.com', 'visp', 'gurudwar\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart_admin`
--

CREATE TABLE `cart_admin` (
  `id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `conf_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_admin`
--

INSERT INTO `cart_admin` (`id`, `name`, `email`, `password`, `conf_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'Admin@123', 'Admin@123'),
(3, 'raj', 'raj@gmail.com', 'Raj@123', 'Raj@123');

-- --------------------------------------------------------

--
-- Table structure for table `cart_super_admin`
--

CREATE TABLE `cart_super_admin` (
  `id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `conf_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_super_admin`
--

INSERT INTO `cart_super_admin` (`id`, `name`, `email`, `password`, `conf_password`) VALUES
(1, 'Aarush Group', 'aarush@gmail.com', 'Aarush@123', 'Aarush@123'),
(2, 'Brahmaji', 'brahmajig@gmail.com', 'Br@hmaji123', 'Br@hmaji123');

-- --------------------------------------------------------

--
-- Table structure for table `customer_cart`
--

CREATE TABLE `customer_cart` (
  `id` int(12) NOT NULL,
  `product_id` int(12) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_exp_date` text NOT NULL,
  `product_stock` int(100) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total_price` float(10,2) DEFAULT NULL,
  `cart_total` int(255) DEFAULT NULL,
  `Delete` tinyint(12) DEFAULT NULL,
  `order_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_cart`
--

INSERT INTO `customer_cart` (`id`, `product_id`, `customer_email`, `product_name`, `product_description`, `product_category`, `product_exp_date`, `product_stock`, `product_img`, `product_price`, `quantity`, `total_price`, `cart_total`, `Delete`, `order_id`) VALUES
(1, 5727, 'brahmaji@gmail.com', 'Sprinkler', 'This is Sprinkler useful for farmer more.', 'wholesale', '03/18/2022', 82, 'sprinkler.png', 924.00, 1, 924.00, 556, 1, '346624'),
(3, 8953, 'brahmaji@gmail.com', 'Lawn-Mover', 'This is for cleaning area.', 'wholesale', '03/17/2022', 120, 'lawn.jpg', 556.00, 1, 556.00, 556, 1, '510756'),
(4, 9430, 'brahmaji@gmail.com', 'Farm-Tools', 'this is for cleaning the farming area', 'wholesale', '10/16/2021', 7, 'farm2.jpg', 50000.00, 1, 50000.00, 556, 1, ''),
(5, 7078, 'brahmaji@gmail.com', 'Insecticides-Killer', 'very healthy food and low cost organic fruits.', 'exo', '10/15/2021', 169, 'killer.png', 256.00, 1, 256.00, 556, 1, ''),
(6, 7078, 'brahmaji@gmail.com', 'Insecticides-Killer', 'very healthy food and low cost organic fruits.', 'exo', '10/15/2021', 169, 'killer.png', 256.00, 1, 256.00, 556, 1, ''),
(13, 8953, 'brahmaji@gmail.com', 'Lawn-Mover', 'This is for cleaning area.', 'wholesale', '03/17/2022', 120, 'lawn.jpg', 556.00, 1, 556.00, 556, 0, '');

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
  `mobile_1` varchar(12) NOT NULL,
  `whatsapp_number` varchar(12) NOT NULL,
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
(1, 'Aarush', 'AarushGroup', '2021-10-14', '30/4/22, krishna gardens, dabagardens', 'Vishakhapatnam', 531002, '2147483647', '2147483647', 'aarush@gamil.com', 0x6d756c7469636f6c6f722d64726965642d736565642d6261636b67726f756e642d646966666572656e742d6472792d6c6567756d65732d656174696e672d6865616c7468795f333233362d313832362e6a7067, 'B+', '2001-07-20', 'visakhapatnam', 'helloworld', 'aruna', 'single', 'DGC123DF564', 2147483647, '0', 'Not Paid/ Pending', 'Admin'),
(2, 'satyam', 'Gonnainstitute', '2021-10-21', '                               aganampudi,visakhapatnam,gonna', 'visakhapatnam', 531004, '2147483647', '2147483647', 'gonna@gmail.com', 0x6b6973616e2e504e47, 'O+', '2021-10-21', 'aganampudi', 'sathyanarayana', 'annapurna', 'single', 'dh123hk2', 2147483647, 'Standard', 'Not Paid/ Pending', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `employeelist`
--

CREATE TABLE `employeelist` (
  `empid` int(10) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `empaadhar` varchar(100) NOT NULL,
  `emppan` varchar(100) NOT NULL,
  `empmobile` varchar(12) NOT NULL,
  `empmail` varchar(100) NOT NULL,
  `empdistrict` varchar(100) NOT NULL,
  `empaddress` varchar(100) NOT NULL,
  `Delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeelist`
--

INSERT INTO `employeelist` (`empid`, `empname`, `empaadhar`, `emppan`, `empmobile`, `empmail`, `empdistrict`, `empaddress`, `Delete`) VALUES
(1, 'sharath', '123441234569', '456ASD45D5', '2147483647', 'sharath@gmail.com', 'visakhaptnam', 'akkayyapelm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `franchiseslist`
--

CREATE TABLE `franchiseslist` (
  `franid` int(10) NOT NULL,
  `franname` varchar(100) NOT NULL,
  `franaadhar` int(100) NOT NULL,
  `franpan` varchar(100) NOT NULL,
  `franmoblie` varchar(12) NOT NULL,
  `franemail` varchar(100) NOT NULL,
  `frandistrict` varchar(100) NOT NULL,
  `franaddress` varchar(100) NOT NULL,
  `Delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `franchiseslist`
--

INSERT INTO `franchiseslist` (`franid`, `franname`, `franaadhar`, `franpan`, `franmoblie`, `franemail`, `frandistrict`, `franaddress`, `Delete`) VALUES
(3, 'aarush', 2147483647, 'DPA123J65D', '07702932545', 'franchise.aarush@gmail.com', 'visakhapatnam', 'tarakarama colony\r\nakkireddivanipalem', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(52) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_note` varchar(100) NOT NULL,
  `status` varchar(12) NOT NULL,
  `subtotal` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `user_id`, `first_name`, `last_name`, `country`, `address1`, `address2`, `city`, `state`, `pin`, `phone`, `email`, `order_note`, `status`, `subtotal`, `total`, `quantity`, `booking_date`, `delivery_date`, `payment_method`) VALUES
(346624, 5727, 'brahmaji@gmail.com', 'hanouk', 'Doe', 'India', 'anakapalli', 'visakhapatnam', 'anakapalli', 'andhrapradesh', 531004, '9902853472', 'brahmaji@gmail.com', '', 'started', 924, 924, 1, '12-11-2021', '18-11-2021 ', 'COD'),
(510756, 8953, 'brahmaji@gmail.com', 'kranthi', 'karanam', 'India', 'anakapalli', 'visakhapatnam', 'anakapalli', 'andhrapradesh', 531004, '7702932545', 'kranthikumar123@gmail.com', '', 'started', 556, 556, 1, '13-11-2021', '19-11-2021 ', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(12) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_subcategory` varchar(225) NOT NULL,
  `product_exp_date` text NOT NULL,
  `product_stock` int(255) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `Delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_category`, `product_subcategory`, `product_exp_date`, `product_stock`, `product_img`, `product_price`, `Delete`) VALUES
(3719, 'weat ', 'weat for health', 'seeds', 'veg', '11/12/2021', 200, 'vegseeds.jpg', 170.00, 0),
(3728, 'Bio-Fertilizer ', 'Fertilizers that should useful to the growth of farming.', 'wholesale', '', '02/01/2022', 350, 'Bio-Fertilizer.jpg', 212.00, 0),
(4473, 'Hydroponic ', 'useful to health that should made by the organic farm and flowers.', 'wholesale', '', '01/15/2022', 25, 'hydro2.jpg', 810.00, 0),
(4680, 'Spray-Pumps', 'this product is for farmers to put the water to their farm fields.', 'wholesale', '', '03/10/2022', 34, 'spray.jpg', 1500.00, 0),
(5436, 'Hydroponics', 'this is temporary data', 'wholesale', '', '05/07/2022', 29, 'hydro1.jpg', 799.00, 0),
(5727, 'Sprinkler', 'This is Sprinkler useful for farmer more.', 'wholesale', '', '03/18/2022', 82, 'sprinkler.png', 924.00, 0),
(6783, 'Farm-Machinery', 'taken from farming society', 'spices', '', '10/22/2021', 124, 'farm1.jpg', 20000.00, 0),
(7078, 'Insecticides-Killer', 'very healthy food and low cost organic fruits.', 'exo', '', '10/15/2021', 169, 'killer.png', 256.00, 0),
(7600, 'Bio-Virucide', 'this is taken from farmers and import to you.', 'wholesale', '', '01/15/2022', 120, 'Bio-Virucide.jpg', 154.00, 0),
(8953, 'Lawn-Mover', 'This is for cleaning area.', 'wholesale', '', '03/17/2022', 120, 'lawn.jpg', 556.00, 0),
(9160, 'Tracktor', 'this is for farmers need to cultivate the land before producing weat', 'farm_machines', 'wholesale', '11/13/2021', 20, 'tracktor.png', 30000.00, 0),
(9430, 'Farm-Tools', 'this is for cleaning the farming area', 'wholesale', '', '10/16/2021', 7, 'farm2.jpg', 50000.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registeradmin`
--

CREATE TABLE `registeradmin` (
  `regid` int(10) NOT NULL,
  `regemail` varchar(100) NOT NULL,
  `regpass` varchar(100) NOT NULL,
  `regcnfpass` varchar(100) NOT NULL,
  `Delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registercse`
--

CREATE TABLE `registercse` (
  `regid` int(10) NOT NULL,
  `regemail` varchar(100) NOT NULL,
  `regpass` varchar(100) NOT NULL,
  `regcnfpass` varchar(100) NOT NULL,
  `Delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registercse`
--

INSERT INTO `registercse` (`regid`, `regemail`, `regpass`, `regcnfpass`, `Delete`) VALUES
(3, 'chandu@gmail.com', 'Chandu@123', 'Chandu@123', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `store_customer_registration`
--

CREATE TABLE `store_customer_registration` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alt_email` varchar(1000) DEFAULT NULL,
  `phone` varchar(12) NOT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `pin` int(12) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `conf_password` varchar(100) NOT NULL,
  `Delete` tinyint(1) DEFAULT NULL,
  `profile_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_customer_registration`
--

INSERT INTO `store_customer_registration` (`user_id`, `first_name`, `middle_name`, `last_name`, `email`, `alt_email`, `phone`, `address1`, `address2`, `pin`, `area`, `state`, `country`, `password`, `conf_password`, `Delete`, `profile_img`) VALUES
(1, 'brahmaji', '', 'guntapalli', 'brahmaji@gmail.com', 'brahmajig@gmail.com', '9154206837', '1-9,t.r colony', 'ankapalli', 531002, 'anakapalli', 'andhrapradesh', 'india', 'brahmaji@123', 'brahmaji@123', 0, 'logo.png'),
(8, 'kranthi', '', 'karanam', 'kranthi@gmail.com', 'kranthi1998@gmai.com', '7702932545', '1-20, jagannadhapuram', 'godicherla thuni', 532001, 'thuni', 'andrapradesh', 'india', 'Kranthi@123', 'Kranthi@123', NULL, 'logo1.png');

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
-- Indexes for table `cart_admin`
--
ALTER TABLE `cart_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_super_admin`
--
ALTER TABLE `cart_super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_cart`
--
ALTER TABLE `customer_cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

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
-- Indexes for table `store_customer_registration`
--
ALTER TABLE `store_customer_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin2list`
--
ALTER TABLE `admin2list`
  MODIFY `admin2id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adminlist`
--
ALTER TABLE `adminlist`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `associateslist`
--
ALTER TABLE `associateslist`
  MODIFY `assoid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_admin`
--
ALTER TABLE `cart_admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_super_admin`
--
ALTER TABLE `cart_super_admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_cart`
--
ALTER TABLE `customer_cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_form`
--
ALTER TABLE `customer_form`
  MODIFY `form_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employeelist`
--
ALTER TABLE `employeelist`
  MODIFY `empid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `franchiseslist`
--
ALTER TABLE `franchiseslist`
  MODIFY `franid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registeradmin`
--
ALTER TABLE `registeradmin`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registercse`
--
ALTER TABLE `registercse`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registerfranchise`
--
ALTER TABLE `registerfranchise`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_customer_registration`
--
ALTER TABLE `store_customer_registration`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
