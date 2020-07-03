-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2019 at 01:21 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pensions`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowances-queue`
--

CREATE TABLE `allowances-queue` (
  `FormB-I-queuesubmissionid` int(10) NOT NULL,
  `title` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `amount` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Data_Officer`
--

CREATE TABLE `Data_Officer` (
  `useruserid` int(10) NOT NULL,
  `Name` varchar(255) COLLATE ascii_bin NOT NULL,
  `Division` int(10) NOT NULL,
  `Photo` varchar(255) COLLATE ascii_bin NOT NULL,
  `Email` varchar(255) COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE `dependent` (
  `dependentid` int(11) NOT NULL,
  `Pensionernic` int(12) NOT NULL,
  `Name` varchar(255) COLLATE ascii_bin NOT NULL,
  `dependent_nic` int(12) DEFAULT NULL,
  `Relationship` int(11) NOT NULL,
  `DateofBirth` int(11) NOT NULL,
  `percentage` decimal(19,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `dept_employee`
--

CREATE TABLE `dept_employee` (
  `useruserid` int(10) NOT NULL,
  `Name` varchar(255) COLLATE ascii_bin NOT NULL,
  `Email` varchar(255) COLLATE ascii_bin NOT NULL,
  `EmployeeID` int(10) NOT NULL,
  `Photo` varchar(255) COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `evidence_index`
--

CREATE TABLE `evidence_index` (
  `evidenceid` int(10) NOT NULL,
  `Data_Officeruseruserid` int(10) NOT NULL,
  `nic` int(10) NOT NULL,
  `personal_file_no` int(10) DEFAULT NULL,
  `evidence_type` int(10) NOT NULL,
  `path` int(10) NOT NULL,
  `notes` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `FormB-I-queue`
--

CREATE TABLE `FormB-I-queue` (
  `submissionid` int(10) NOT NULL,
  `nic` int(12) NOT NULL,
  `fullname` varchar(255) COLLATE ascii_bin NOT NULL,
  `name_with_initials` varchar(255) COLLATE ascii_bin NOT NULL,
  `ServiceID_number` int(10) NOT NULL,
  `Rank` int(10) NOT NULL COMMENT 'RankID\r\nRank\r\n1\r\nSoldier\r\n2\r\n\r\n3\r\n\r\n\r\n\r\n ',
  `Official_Address` varchar(255) COLLATE ascii_bin NOT NULL,
  `Residential_Address` varchar(255) COLLATE ascii_bin NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `start_of_service` date NOT NULL,
  `date_of_retirement` date NOT NULL,
  `serviceyears` int(10) NOT NULL,
  `quartermasteruseruserid` int(10) NOT NULL,
  `Reason` varchar(255) COLLATE ascii_bin NOT NULL,
  `MaritalStat` int(10) NOT NULL,
  `WOPFONumber` int(10) NOT NULL,
  `Bank` int(10) NOT NULL,
  `Bank_branch` varchar(255) COLLATE ascii_bin NOT NULL,
  `DivisionalSec` int(10) NOT NULL,
  `Gratuity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msgid` int(11) NOT NULL,
  `nic` text COLLATE ascii_bin NOT NULL,
  `subject` text COLLATE ascii_bin NOT NULL,
  `body` text COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgid`, `nic`, `subject`, `body`) VALUES
(2, '941141714V', 'Application Review', 'Please attach the necessary files along with the application.\r\nAnd revise the marked fields'),
(6, '941141714V', 'Application Approved', '\n		Congratulations! Your Application has been approved'),
(7, '941141714V', 'Application Approved', '\n		Congratulations! Your Application has been approved'),
(8, '941141714V', 'Application Approved', '\n		Congratulations! Your Application has been approved'),
(9, '961393531V', 'Application Approved', '\n		Congratulations! Your Application has been approved'),
(10, '0000000', 'Application Review', 'dfkgdj');

-- --------------------------------------------------------

--
-- Table structure for table `Pensioner`
--

CREATE TABLE `Pensioner` (
  `nic` varchar(12) COLLATE ascii_bin NOT NULL,
  `fullname` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `surname` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `ServiceID_number` int(10) DEFAULT NULL,
  `Rank` text COLLATE ascii_bin COMMENT 'RankIDRank1Soldier23 ',
  `Official_Address` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `Residential_Address` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `start_of_service` date DEFAULT NULL,
  `date_of_retirement` date DEFAULT NULL,
  `Reason` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `MaritalStat` int(10) DEFAULT NULL,
  `WOPFONumber` int(10) DEFAULT NULL,
  `Bank` int(10) DEFAULT NULL,
  `Bank_branch` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `DivisionalSec` int(10) DEFAULT NULL,
  `Gratuity` int(2) DEFAULT NULL,
  `password` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `Deceased` int(2) DEFAULT NULL,
  `service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `Pensioner`
--

INSERT INTO `Pensioner` (`nic`, `fullname`, `surname`, `ServiceID_number`, `Rank`, `Official_Address`, `Residential_Address`, `Date_of_Birth`, `start_of_service`, `date_of_retirement`, `Reason`, `MaritalStat`, `WOPFONumber`, `Bank`, `Bank_branch`, `DivisionalSec`, `Gratuity`, `password`, `Deceased`, `service`) VALUES
('0000000', 'Bruce Wayne', '', 111, '', '            ', '            ', '0000-00-00', '2019-01-01', '2019-01-30', NULL, 3, NULL, NULL, NULL, NULL, NULL, '123', NULL, 3),
('941141714V', 'Shehan Ruwantha Kulathilake', '', 0, '', '    ', '    ', '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', NULL, 0),
('961393531V', 'Oshadha Senanayale', '', 13456, '', '    ', '    ', '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_file`
--

CREATE TABLE `personal_file` (
  `file_number` int(10) NOT NULL,
  `Pensionernic` int(12) NOT NULL,
  `file_status` int(10) NOT NULL,
  `calculation_method` int(10) NOT NULL,
  `calculation_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `personal_file_dept_employee_mapping`
--

CREATE TABLE `personal_file_dept_employee_mapping` (
  `dept_employeeuseruserid` int(10) NOT NULL,
  `personal_filefile_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `quartermaster`
--

CREATE TABLE `quartermaster` (
  `useruserid` int(10) NOT NULL,
  `Name` int(10) DEFAULT NULL,
  `Company` int(10) DEFAULT NULL,
  `Division` int(10) DEFAULT NULL,
  `Regiment` int(10) DEFAULT NULL,
  `Photo` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `Email` varchar(255) COLLATE ascii_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `quartermaster_Pensioner_mapping`
--

CREATE TABLE `quartermaster_Pensioner_mapping` (
  `owner` int(10) NOT NULL,
  `pensioner` int(12) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `report_index`
--

CREATE TABLE `report_index` (
  `reportid` int(11) NOT NULL,
  `personal_filefile_number` int(10) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `filepath` varchar(11) COLLATE ascii_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `revise-form`
--

CREATE TABLE `revise-form` (
  `nic` varchar(12) COLLATE ascii_bin NOT NULL,
  `field` varchar(50) COLLATE ascii_bin NOT NULL,
  `comment` varchar(255) COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `revise-form`
--

INSERT INTO `revise-form` (`nic`, `field`, `comment`) VALUES
('0000000', 'surname', ''),
('0000000', 'Date_of_Birth', ''),
('0000000', 'fullname', ''),
('0000000', 'Rank', ''),
('0000000', 'Residential_Address', ''),
('0000000', 'service', ''),
('0000000', 'date_of_retirement', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `username` varchar(255) COLLATE ascii_bin NOT NULL,
  `password` varchar(255) COLLATE ascii_bin NOT NULL,
  `user_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `user_role`) VALUES
(1, 'admin', 'pass', 0),
(2, 'testuser', 'pass', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `nic` varchar(11) COLLATE ascii_bin NOT NULL,
  `otp` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`nic`, `otp`, `owner`, `status`) VALUES
('0000000', 50227, 0, 3),
('941141714V', 63425, 0, 4),
('961393531V', 42360, 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowances-queue`
--
ALTER TABLE `allowances-queue`
  ADD KEY `has` (`FormB-I-queuesubmissionid`);

--
-- Indexes for table `Data_Officer`
--
ALTER TABLE `Data_Officer`
  ADD PRIMARY KEY (`useruserid`);

--
-- Indexes for table `dependent`
--
ALTER TABLE `dependent`
  ADD PRIMARY KEY (`dependentid`),
  ADD KEY `fknic` (`Pensionernic`);

--
-- Indexes for table `dept_employee`
--
ALTER TABLE `dept_employee`
  ADD PRIMARY KEY (`useruserid`);

--
-- Indexes for table `evidence_index`
--
ALTER TABLE `evidence_index`
  ADD PRIMARY KEY (`evidenceid`),
  ADD KEY `FKevidence_i404725` (`Data_Officeruseruserid`);

--
-- Indexes for table `FormB-I-queue`
--
ALTER TABLE `FormB-I-queue`
  ADD PRIMARY KEY (`submissionid`,`nic`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `ServiceID_number` (`ServiceID_number`),
  ADD KEY `sends` (`quartermasteruseruserid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `Pensioner`
--
ALTER TABLE `Pensioner`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `ServiceID_number` (`ServiceID_number`),
  ADD KEY `nic` (`nic`);

--
-- Indexes for table `personal_file`
--
ALTER TABLE `personal_file`
  ADD PRIMARY KEY (`file_number`);

--
-- Indexes for table `personal_file_dept_employee_mapping`
--
ALTER TABLE `personal_file_dept_employee_mapping`
  ADD KEY `FKpersonal_f385765` (`personal_filefile_number`),
  ADD KEY `FKpersonal_f830161` (`dept_employeeuseruserid`);

--
-- Indexes for table `quartermaster`
--
ALTER TABLE `quartermaster`
  ADD PRIMARY KEY (`useruserid`);

--
-- Indexes for table `quartermaster_Pensioner_mapping`
--
ALTER TABLE `quartermaster_Pensioner_mapping`
  ADD KEY `FKquartermas102317` (`pensioner`),
  ADD KEY `creates` (`owner`);

--
-- Indexes for table `report_index`
--
ALTER TABLE `report_index`
  ADD PRIMARY KEY (`reportid`),
  ADD KEY `fkreport` (`personal_filefile_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dependent`
--
ALTER TABLE `dependent`
  MODIFY `dependentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evidence_index`
--
ALTER TABLE `evidence_index`
  MODIFY `evidenceid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_file`
--
ALTER TABLE `personal_file`
  MODIFY `file_number` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_index`
--
ALTER TABLE `report_index`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowances-queue`
--
ALTER TABLE `allowances-queue`
  ADD CONSTRAINT `has` FOREIGN KEY (`FormB-I-queuesubmissionid`) REFERENCES `FormB-I-queue` (`submissionid`);

--
-- Constraints for table `Data_Officer`
--
ALTER TABLE `Data_Officer`
  ADD CONSTRAINT `FKData_Offic904764` FOREIGN KEY (`useruserid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `dept_employee`
--
ALTER TABLE `dept_employee`
  ADD CONSTRAINT `FKdept_emplo90580` FOREIGN KEY (`useruserid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `evidence_index`
--
ALTER TABLE `evidence_index`
  ADD CONSTRAINT `FKevidence_i404725` FOREIGN KEY (`Data_Officeruseruserid`) REFERENCES `Data_Officer` (`useruserid`);

--
-- Constraints for table `FormB-I-queue`
--
ALTER TABLE `FormB-I-queue`
  ADD CONSTRAINT `sends` FOREIGN KEY (`quartermasteruseruserid`) REFERENCES `quartermaster` (`useruserid`);

--
-- Constraints for table `personal_file_dept_employee_mapping`
--
ALTER TABLE `personal_file_dept_employee_mapping`
  ADD CONSTRAINT `FKpersonal_f385765` FOREIGN KEY (`personal_filefile_number`) REFERENCES `personal_file` (`file_number`),
  ADD CONSTRAINT `FKpersonal_f767859` FOREIGN KEY (`dept_employeeuseruserid`) REFERENCES `dept_employee` (`useruserid`),
  ADD CONSTRAINT `FKpersonal_f830161` FOREIGN KEY (`dept_employeeuseruserid`) REFERENCES `dept_employee` (`useruserid`);

--
-- Constraints for table `quartermaster`
--
ALTER TABLE `quartermaster`
  ADD CONSTRAINT `FKquartermas730736` FOREIGN KEY (`useruserid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `quartermaster_Pensioner_mapping`
--
ALTER TABLE `quartermaster_Pensioner_mapping`
  ADD CONSTRAINT `creates` FOREIGN KEY (`owner`) REFERENCES `quartermaster` (`useruserid`);

--
-- Constraints for table `report_index`
--
ALTER TABLE `report_index`
  ADD CONSTRAINT `fkreport` FOREIGN KEY (`personal_filefile_number`) REFERENCES `personal_file` (`file_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
