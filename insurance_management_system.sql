-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 09:26 AM
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
-- Database: `insurance_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `Name` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`Name`, `Description`) VALUES
('Comprehensive insurance ', 'Comprehensive insurance covers all of the above and damage to the vehicle caused by the driver thems'),
('Standard Insurance', ' The standard coverage will usually be the least expensive type of auto insurance available to the d'),
('Third party Insurance', 'third-party insurance or third-party liability cover, which is sometimes also referred to as the \'ac');

-- --------------------------------------------------------

--
-- Table structure for table `buy_policy`
--

CREATE TABLE `buy_policy` (
  `Policy_Type` varchar(30) NOT NULL,
  `Customer_Name` varchar(30) NOT NULL,
  `Vehilcle_Number` varchar(10) NOT NULL,
  `Registration_Date` date NOT NULL,
  `Total_Amount` int(10) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Policy_ID` int(10) NOT NULL,
  `Email_Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy_policy`
--

INSERT INTO `buy_policy` (`Policy_Type`, `Customer_Name`, `Vehilcle_Number`, `Registration_Date`, `Total_Amount`, `Start_Date`, `End_Date`, `Policy_ID`, `Email_Address`) VALUES
('Third Party Insurance', 'Akshi Agarwal', 'RJ14ce0037', '2021-05-11', 9876, '2021-05-26', '2021-06-25', 12375, 'akshiag11@gmail.com'),
('Third Party Insurance', 'Sonal Jain', 'RJ14ce0034', '2021-05-30', 1500, '2021-05-31', '2021-06-30', 12376, 'sonaljain@gmail.com'),
('Third Party Insuarnce', 'Akshay Kumar', 'RJ14er0039', '2021-05-08', 2000, '2021-05-08', '2021-06-07', 12377, 'akshaykumar@gmail.com'),
('Third Party Insurance', 'Ram Bansal', 'RJ14ty7834', '2021-04-16', 5500, '2021-05-30', '2021-07-29', 12378, 'rambansal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `new_policy`
--

CREATE TABLE `new_policy` (
  `Cost` int(10) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Duration` int(2) NOT NULL,
  `Policy_Id` bigint(100) NOT NULL,
  `Policy_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_policy`
--

INSERT INTO `new_policy` (`Cost`, `Description`, `Duration`, `Policy_Id`, `Policy_type`) VALUES
(1500, 'Third-party insurance offers protection against damages to the third-party by the insured vehicle. I', 1, 123, 'Third party Insurance'),
(2000, 'Comprehensive insurance covers all of the above and damage to the vehicle caused by the driver themselves, as well as vandalism and other risks. This is usually the most expensive type of insurance.', 1, 124, 'Comprehensive Insurance'),
(800, 'The standard coverage will usually be the least expensive type of auto insurance available to the driver. Drivers with a clean driving record and a minimal number of claims filed in their past will usually qualify for standard auto insurance.', 1, 12345, 'standard Insurance');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Email_ID` varchar(30) NOT NULL,
  `Card_Holder_Name` varchar(100) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Card_Number` int(16) NOT NULL,
  `Card_Expiry_Month` varchar(20) NOT NULL,
  `Card_Expiry_Year` int(10) NOT NULL,
  `Card_CVC` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Email_ID`, `Card_Holder_Name`, `Amount`, `Date`, `Card_Number`, `Card_Expiry_Month`, `Card_Expiry_Year`, `Card_CVC`) VALUES
('akshiag11@gmail.com', 'Akshi Agarwal', 17000, '2021-05-27', 4, '1a08d9e7988442ac954d', 5531, 24),
('sonaljain@gmail.com', 'Sonal Jain', 1500, '2021-05-31', 0, '1645251b6d67ea710310', 5531, 68053),
('akshaykumar@gmail.com', 'Akshay Kuamr', 2000, '2021-05-08', 7, 'e62834d784d3b70c79bc', 5531, 0),
('rambansal@gmail.com', 'Ram Bansal', 5500, '2021-05-30', 82800916, '49a66f6b7804918488ab', 312351, 8);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Email_Address` varchar(30) NOT NULL,
  `Phone_Number` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Postal_Code` varchar(6) NOT NULL,
  `Role_ID` varchar(30) DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`First_Name`, `Last_Name`, `Password`, `Gender`, `Email_Address`, `Phone_Number`, `Address`, `Postal_Code`, `Role_ID`) VALUES
('Akhil', 'Verma', '25f9e794323b453885f5181f1b624d0b', 'male', 'akhilverma@gmail.com', '765556775', 'UP', '678998', 'Customer'),
('Akshay', 'Kumar', '25f9e794323b453885f5181f1b624d0b', 'male', 'akshaykumar@gmail.com', '786555689', 'Ranchi', '345678', 'Customer'),
('Akshi', 'Agarwal', '25f9e794323b453885f5181f1b624d0b', 'female', 'akshiag11@gmail.com', '8005567185', 'Mansinghpura, Tonk road, Jaipur', '302018', 'Admin'),
('Aman', 'Agarwal', '25f9e794323b453885f5181f1b624d0b', 'male', 'amanagarwal@gmail.com', '5678904321', 'Tamil Nadu', '789067', 'Customer'),
('Krishna ', 'Agarwal', '25f9e794323b453885f5181f1b624d0b', 'female', 'krishnaagarwal@gmail.com', '2344325678', 'Himachal Pradesh', '123456', 'Customer'),
('Manan', 'Garg', '25f9e794323b453885f5181f1b624d0b', 'male', 'manangarg@gmail.com', '2345678900', 'Chennai', '234567', 'Customer'),
('Popat', 'Lal', '25f9e794323b453885f5181f1b624d0b', 'male', 'popatlal@gmail.com', '1234567898', 'Bihar', '123453', 'Customer'),
('Prachika', 'Kanodia', '25f9e794323b453885f5181f1b624d0b', 'female', 'prachikakanodia2507@gmail.com', '9328421260', 'B-504 Banwari Residency, Vesu, Surat, Gujarat', '395007', 'Admin'),
('Ram', 'Bansal', '25f9e794323b453885f5181f1b624d0b', 'male', 'rambansal@gmail.com', '9876543212', 'Gujarat', '456789', 'Customer'),
('Saloni', 'Agarwal', '25f9e794323b453885f5181f1b624d0b', 'female', 'saloniagarwal@gmail.com', '9328253976', 'Rajasthan', '567890', 'Customer'),
('Sonal', 'Jain', '25f9e794323b453885f5181f1b624d0b', 'female', 'sonaljain@gmail.com', '234567876', 'Jodhpur', '326789', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `buy_policy`
--
ALTER TABLE `buy_policy`
  ADD PRIMARY KEY (`Policy_ID`);

--
-- Indexes for table `new_policy`
--
ALTER TABLE `new_policy`
  ADD PRIMARY KEY (`Policy_Id`),
  ADD UNIQUE KEY `Description` (`Description`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Email_Address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy_policy`
--
ALTER TABLE `buy_policy`
  MODIFY `Policy_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12379;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
