-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 08:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab-6`
--

-- --------------------------------------------------------

--
-- Table structure for table `pusers`
--

CREATE TABLE `pusers` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `ConfirmPassword` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `DoB` varchar(100) NOT NULL,
  `Get_Result` varchar(100) NOT NULL,
  `Clear_Payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pusers`
--

INSERT INTO `pusers` (`id`, `Name`, `Email`, `UserName`, `Password`, `ConfirmPassword`, `Image`, `Gender`, `DoB`, `Get_Result`, `Clear_Payment`) VALUES
(4, 'patient one', 'patientone@gmail.com', 'one', '210b48b542659fb951a80a15c5997513', '210b48b542659fb951a80a15c5997513', 'Annotation 2020-02-23 103837.png', 'male', '2021-04-13', '', ''),
(6, 'patient three', 'patientthree@gmail.com', 'three', '210b48b542659fb951a80a15c5997513', '210b48b542659fb951a80a15c5997513', 'Annotation 2020-02-23 103837.png', 'male', '2021-04-20', '', ''),
(7, 'patient four', 'patientfour@gmail.com', 'four', '210b48b542659fb951a80a15c5997513', '210b48b542659fb951a80a15c5997513', 'Annotation 2020-02-23 103837.png', 'male', '2021-04-20', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `ConfirmPassword` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `DoB` varchar(100) NOT NULL,
  `Get Result` varchar(100) NOT NULL,
  `Set Payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `UserName`, `Password`, `ConfirmPassword`, `Image`, `Gender`, `DoB`, `Get Result`, `Set Payment`) VALUES
(1, 'dsad', 'zihad.jamil2018@gmail.com', 'faysal_jami', '210b48b542659fb951a80a15c5997513', '210b48b542659fb951a80a15c5997513', 'IMG-20200102-WA0004.jpg', 'male', '', '', ''),
(2, 'dsad', 'zihad.jamil208@gmail.com', 'faysal_jam', '81c7581e45ebb212980031ae3c8b9188', '81c7581e45ebb212980031ae3c8b9188', 'cad3.PNG', 'male', '', '', ''),
(3, 'Patient one', 'patientone@gmail.com', 'Faysal', '210b48b542659fb951a80a15c5997513', '210b48b542659fb951a80a15c5997513', 'WIN_20190119_20_12_01_Pro.jpg', 'male', '', '', ''),
(4, 'heo ho', 'heo@gail.com', 'hello-hello', '81c7581e45ebb212980031ae3c8b9188', '81c7581e45ebb212980031ae3c8b9188', 'IMG-20200102-WA0004.jpg', 'female', '', '', ''),
(5, 'Faysal Jamil', 'jim@gmail.com', 'arafat_jamil', '5448552005f7f5b2f011d13667317d5d', '5448552005f7f5b2f011d13667317d5d', 'WIN_20190501_20_21_39_Pro.jpg', 'male', '', '', ''),
(6, 'Patnt one', '19-40115-1@student.aiub.edu', 'sakib_al', 'dbfb5f6b16cdefb70aa7b0875db30279', 'dbfb5f6b16cdefb70aa7b0875db30279', 'WIN_20190501_20_21_29_Pro.jpg', 'male', '2021-04-22', '', ''),
(7, 'Faysal Jamil Zihad', 'zad.jamil2018@gmail.com', 'f-j', '210b48b542659fb951a80a15c5997513', '210b48b542659fb951a80a15c5997513', 'Annotation 2020-02-23 103837.png', 'male', '2021-04-14', '', ''),
(8, 'Fsl Jamil Zihad', 'zad.jil2018@gmail.com', 'daddasd', '210b48b542659fb951a80a15c5997513', '210b48b542659fb951a80a15c5997513', 'Annotation 2020-02-23 103837.png', 'female', '2021-04-19', '', ''),
(9, 'Faysal K', 'had.18@gmail.com', 'happy', '210b48b542659fb951a80a15c5997513', '210b48b542659fb951a80a15c5997513', 'cad.PNG', 'male', '2021-04-19', '', ''),
(11, 'Faysal', 'zihad.j8@gmail.com', 'fays', '210b48b542659fb951a80a15c5997513', '210b48b542659fb951a80a15c5997513', 'Annotation 2020-02-23 103837.pngfg.png', 'male', '2021-04-20', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pusers`
--
ALTER TABLE `pusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pusers`
--
ALTER TABLE `pusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
