-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 12:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `Aid` int(15) NOT NULL,
  `Aname` varchar(40) NOT NULL,
  `Acontact` varchar(40) NOT NULL,
  `Aemail` varchar(40) NOT NULL,
  `Apwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`Aid`, `Aname`, `Acontact`, `Aemail`, `Apwd`) VALUES
(2, 'Mugiwara luffy', '3000000000', 'Kaizukunaru@onepiece.com', 'Onepiece@1'),
(3, 'Pratham Vichare', '7894587445', 'pv@xyz.in', 'Pratham@09');

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE `booktable` (
  `Bid` int(15) NOT NULL,
  `Bdate` date NOT NULL,
  `Bsource` varchar(29) NOT NULL,
  `Bcharge` varchar(29) NOT NULL,
  `Bdestination` varchar(15) NOT NULL,
  `Bpincode` int(29) NOT NULL,
  `Uid` int(29) NOT NULL,
  `Bassign` varchar(29) NOT NULL,
  `Did` int(40) NOT NULL,
  `BDeliDate` date NOT NULL,
  `Pid` int(16) NOT NULL,
  `Bstatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`Bid`, `Bdate`, `Bsource`, `Bcharge`, `Bdestination`, `Bpincode`, `Uid`, `Bassign`, `Did`, `BDeliDate`, `Pid`, `Bstatus`) VALUES
(3, '2022-11-02', 'Vadodara', '', 'mumbai', 20291922, 1200, 'pending', 0, '2022-11-09', 0, ''),
(4, '2022-09-13', 'Goa', '2000', '', 0, 0, '', 0, '0000-00-00', 0, ''),
(5, '2022-11-02', 'Vadodara', '1200', 'mumbai', 20291922, 0, 'pending', 0, '2022-11-09', 0, ''),
(6, '2022-11-02', 'tadodara', '0', 'mumbai', 2029122, 1200, 'pending', 0, '2022-11-09', 0, 'Delivered'),
(7, '0000-00-00', '', '3', '', 0, 0, '', 0, '0000-00-00', 0, ''),
(9, '2022-11-02', 'Vadodara', '', 'mumbai', 20291922, 1200, 'pending', 0, '2022-11-09', 0, ''),
(10, '0000-00-00', '', '', '', 0, 0, '', 2, '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `chargetable`
--

CREATE TABLE `chargetable` (
  `Chargeid` int(15) NOT NULL,
  `Source` varchar(29) NOT NULL,
  `Destination` varchar(29) NOT NULL,
  `charge` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chargetable`
--

INSERT INTO `chargetable` (`Chargeid`, `Source`, `Destination`, `charge`) VALUES
(2, 'Mumbai', 'Pune', '500'),
(3, 'Vadodara', 'Mumbai', '800'),
(4, 'Mumbai', 'Ratnagiri', '300');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryperson`
--

CREATE TABLE `deliveryperson` (
  `Did` int(15) NOT NULL,
  `Dname` varchar(50) NOT NULL,
  `Dcontact` varchar(15) NOT NULL,
  `Daadhar` int(15) NOT NULL,
  `Dcity` varchar(20) NOT NULL,
  `Daddress` varchar(100) NOT NULL,
  `Demail` varchar(40) NOT NULL,
  `Dpwd` varchar(25) NOT NULL,
  `Dlicense` text NOT NULL,
  `Dphoto` text NOT NULL,
  `latitute` varchar(6) NOT NULL,
  `longitude` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryperson`
--

INSERT INTO `deliveryperson` (`Did`, `Dname`, `Dcontact`, `Daadhar`, `Dcity`, `Daddress`, `Demail`, `Dpwd`, `Dlicense`, `Dphoto`, `latitute`, `longitude`) VALUES
(2, 'Vineeta choudhry', '78784855', 0, '', '', 'Vinny22@gmail.com', '12092', '', '', '90', '69'),
(7, 'Vineera choudhry', '7834855', 0, '', '', 'Vinny11@gmail.com', '12332', '', '', '90', '69');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `Pid` int(15) NOT NULL,
  `Paddress` varchar(100) NOT NULL,
  `Psize` varchar(40) NOT NULL,
  `Pdetails` varchar(50) NOT NULL,
  `Plocation` varchar(45) NOT NULL,
  `Pquantity` varchar(55) NOT NULL,
  `Uid` int(15) NOT NULL,
  `PdeliveryDT` date NOT NULL,
  `PdeliveryBY` date NOT NULL,
  `PdeliveryID` int(22) NOT NULL,
  `PdeliveryStatus` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`Pid`, `Paddress`, `Psize`, `Pdetails`, `Plocation`, `Pquantity`, `Uid`, `PdeliveryDT`, `PdeliveryBY`, `PdeliveryID`, `PdeliveryStatus`) VALUES
(2, 'c33,karelibaug,vadodara', 'large', '', 'Vadodara', '', 0, '2022-09-12', '2022-09-29', 0, ''),
(3, 'A54,shantata theva society,vadodoara', 'Medium', '', 'Vaodara', '', 0, '2022-09-07', '2022-09-21', 0, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `paymentable`
--

CREATE TABLE `paymentable` (
  `PayID` int(15) NOT NULL,
  `PayDate` date NOT NULL,
  `Uid` int(29) NOT NULL,
  `PayAmount` int(29) NOT NULL,
  `PayStatus` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentable`
--

INSERT INTO `paymentable` (`PayID`, `PayDate`, `Uid`, `PayAmount`, `PayStatus`) VALUES
(2, '2022-09-01', 0, 1200, 'paid cod'),
(3, '2022-09-07', 0, 19122, 'paid online'),
(4, '0000-00-00', 3, 0, ''),
(9, '2022-09-01', 0, 1200, 'paid cod'),
(10, '2022-11-18', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `Uid` int(15) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Ucontact` varchar(12) NOT NULL,
  `Ucity` varchar(20) NOT NULL,
  `Uaddress` varchar(100) NOT NULL,
  `Uemail` varchar(40) NOT NULL,
  `Upwd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`Uid`, `Uname`, `Ucontact`, `Ucity`, `Uaddress`, `Uemail`, `Upwd`) VALUES
(3, 'Aman Chahal', '8160653449', 'haryana', 'harayana ke paas ek gaav me', 'amanC69@go.com', '12092'),
(4, '', '', '', '', '', ''),
(5, 'ds', 'sd', 'dsd', '', 'weer', 'qqw'),
(9, 'ds', 'sd', 'dsd', 'wew', 'weer@gmail.com', 'qqw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `chargetable`
--
ALTER TABLE `chargetable`
  ADD PRIMARY KEY (`Chargeid`);

--
-- Indexes for table `deliveryperson`
--
ALTER TABLE `deliveryperson`
  ADD PRIMARY KEY (`Did`),
  ADD UNIQUE KEY `Demail` (`Demail`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `paymentable`
--
ALTER TABLE `paymentable`
  ADD PRIMARY KEY (`PayID`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`Uid`),
  ADD UNIQUE KEY `Uemail` (`Uemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `Aid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
  MODIFY `Bid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chargetable`
--
ALTER TABLE `chargetable`
  MODIFY `Chargeid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deliveryperson`
--
ALTER TABLE `deliveryperson`
  MODIFY `Did` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `Pid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paymentable`
--
ALTER TABLE `paymentable`
  MODIFY `PayID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `Uid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
