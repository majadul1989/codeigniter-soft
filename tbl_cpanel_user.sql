-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 09:59 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cpanel_user`
--

CREATE TABLE `tbl_cpanel_user` (
  `UserId` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `NID` varchar(17) NOT NULL,
  `DOB` datetime NOT NULL,
  `CellPhoneNumber` int(13) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `EmailToken` varchar(100) NOT NULL,
  `SMSToken` int(10) NOT NULL,
  `UserType` varchar(30) NOT NULL,
  `RowDescription` varchar(20) NOT NULL,
  `RowStatus` varchar(15) NOT NULL,
  `AddedBy` int(11) NOT NULL,
  `AddedDate` datetime NOT NULL,
  `UpdatedBy` int(11) NOT NULL,
  `UpdatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cpanel_user`
--

INSERT INTO `tbl_cpanel_user` (`UserId`, `Email`, `UserName`, `NID`, `DOB`, `CellPhoneNumber`, `Password`, `EmailToken`, `SMSToken`, `UserType`, `RowDescription`, `RowStatus`, `AddedBy`, `AddedDate`, `UpdatedBy`, `UpdatedDate`) VALUES
(1, 'majadshohagh@gmail.com', 'majadul', '2147483647', '1989-12-24 00:00:00', 1677270944, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'a04f026ed5775740cd69fa05944aeeed2c6b45ca', 42986403, 'user', 'RowDescription', 'Active', 0, '2017-09-25 14:09:31', 0, '2017-09-25 14:09:31'),
(2, 'majadshohagh2@gmail.com', 'majadul2', '2147483647', '1989-12-24 00:00:00', 1677270999, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '3f51669fdb6bb3a4b837b072f161c3daa87d27f3', 22290399, 'user', 'RowDescription', 'Active', 0, '2017-09-25 14:30:03', 0, '2017-09-25 14:30:03'),
(3, 'apusultan@gmail.com', 'M. M. Obayed Quader Sultan', '2147483647', '1981-12-04 00:00:00', 1704800311, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '5684f754f4d051d4ab211b2e585ac06895e3208a', 62901482, 'user', 'RowDescription', 'Active', 0, '2017-09-25 14:34:14', 0, '2017-09-25 14:34:14'),
(4, 'sho@gmail.com', 'shohagh', '1989269640500370', '1989-12-24 00:00:00', 1677270444, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'e35ded172581bce07ad60eb2f27b35e3b9df36eb', 18390570, 'user', 'RowDescription', 'Active', 0, '2017-09-25 14:39:00', 0, '2017-09-25 14:39:00'),
(5, 'alamin.proximasoft009@gmail.com', 'alamin', '01704800310000000', '1995-01-20 00:00:00', 1704800310, '7c222fb2927d828af22f592134e8932480637c0d', 'e3e5c6265590b4e254b64b288a753c5bb8ddff1e', 65753954, 'user', 'RowDescription', 'Active', 0, '2017-09-26 12:49:09', 0, '2017-09-26 12:49:09'),
(6, 'apusultan@proximasoft.net', 'Apu Sultan', '01704800311000001', '1981-12-04 00:00:00', 1704800309, 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '93c4cfec41ac232f0a14e31fec9591a4365c2ad1', 30688577, 'user', 'RowDescription', 'Active', 0, '2017-09-27 11:57:10', 0, '2017-09-27 11:57:10'),
(7, 'admin@gmail.com', 'Admin', '98765432198765432', '1989-12-24 00:00:00', 2147483647, 'f638e2789006da9bb337fd5689e37a265a70f359', '8156713c679e726e424a01a9a88751dbbc1316e8', 98260534, 'user', 'RowDescription', 'Active', 0, '2017-09-27 12:21:29', 0, '2017-09-27 12:21:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cpanel_user`
--
ALTER TABLE `tbl_cpanel_user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cpanel_user`
--
ALTER TABLE `tbl_cpanel_user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
