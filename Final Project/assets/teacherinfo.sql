-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 09:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfo`
--

CREATE TABLE `teacherinfo` (
  `name` varchar(35) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`name`, `email`, `id`, `password`, `usertype`, `gender`, `phone`) VALUES
('Bulbul Ahmed', 'bulbul@gmail.com', '123456', 'Bulbul123', 'Admin', 'Male', '01745612323'),
('Alimul Reza', 'abbas@gmail.com', '123459', '123456', 'Admin', 'Male', '01745612323'),
('Sadia Afrin', 'sadia@gmail.com', '123789', 'sadia123', 'Teacher', 'Female', '01734103370'),
('asif', 'arshawon73@gmail.com', 'a2', '123456aA', 'Teacher', 'Male', '01534540901'),
('asif', 'arshawon73@gmail.com', 'aaa', '123', 'Admin', 'Male', '01534540903'),
('asif reza', 'arshawon73@gmail.com', 'asifreza2', '123456', 'Admin', 'Male', '01534540903'),
('Dipto Mondol', 'dipto@gmail.com', 'Dipto123', 'Dipto123', 'Teacher', 'Male', '01734103280');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
