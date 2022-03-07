-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2019 at 07:43 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `possible`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'possible@gmail.com', 'possible');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `hall` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `programme` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `contact`, `email`, `gender`, `hall`, `room`, `programme`) VALUES
(1, 'Frederick ', 'Ennin', '0556676471', '100', 'male', 'Kwame Nkrumah Hall', 'A012', 'Bsc Computer Science'),
(2, 'Josh', 'Pong', '023454446', '100', 'male', 'Kwame Nkrumah Hall', 'A012', 'Bsc Computer Science'),
(3, 'Kent', 'Baido', '054667438', '100', 'male', 'Kwame Nkrumah Hall', 'A014', 'Bsc Accounting'),
(4, 'Richard ', 'Obiri', '0244556547', '100', 'male', 'Caseford', '197', 'Bsc Computer Science'),
(5, 'Kweku', 'Amoateng', '02023323232', '100', 'male', 'KNH', 'C105', 'Bsc Maths'),
(6, 'Ampofo', 'Agyei', '0232344434', '200', 'male', 'Supernuation', 'c02', 'Bsc Computer Science'),
(7, 'ALEXANDER', 'OSEI-POSSIBLE', '0548537258', '300', 'male', 'VALCO', 'TOP HOSTEL', 'BACHELOR OF COMMERCE, ACCOUNTING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
