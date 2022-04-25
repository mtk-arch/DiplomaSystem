-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 10:05 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diplomna`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diplomni`
--

CREATE TABLE `diplomni` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `student_first_name` varchar(50) NOT NULL,
  `student_last_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diplomni`
--

INSERT INTO `diplomni` (`id`, `title`, `student_first_name`, `student_last_name`, `description`) VALUES
(5, 'asdasdasdas', 'sadsdada', 'sadsdada', ''),
(6, 'ssssas', 'dsadasd', 'dsadasd', 'ssssas');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `classId` int(11) NOT NULL,
  `diplomna` varchar(255) NOT NULL,
  `diplomna_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `classId`, `diplomna`, `diplomna_description`) VALUES
(2, 'mitko', 'mitkov', 1, '1', ''),
(3, 'mitko111', 'mitkovv', 1, 'trararara', ''),
(4, 'asdadasda', 'asdasdasd', 2, 'asdasdasda', ''),
(5, 'vanesa', 'vanesova', 2, 'koza', ''),
(6, 'sadsdada', 'asdasdasd', 2, 'asdasdasdas', ''),
(7, 'dsadasd', 'asdasasda', 1, 'ssssas', 'ssssas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `userKey` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `userKey`) VALUES
(3, 'admin', '$2y$10$bHj5dpGXk2pR2RuTpOEkc.VlgQ3ZfE2KZua9qWxeCK.9ukBAVBSRK', '945a6d3f907be87cd238d31aedcec70c'),
(4, 'admin1', 'admin1', 'bf7a75164abdd399bff53df55d42e1ee'),
(5, 'admin2', 'admin2', 'b9aa7fc10732af1fb5e069ab74682996'),
(6, 'dimitar', 'dimitar', '42b4efc18044234f06b45e3820aa9119'),
(7, 'TEST', 'TEST', '8ffe0ccf18a312759323703636d926bf'),
(8, 'test_test', '$2y$10$cQM/ef58wrnjVxpXwUYln.8Vu4006g6hArRDo9Npq1tn7iAJpUT/.', '352a2e7901b5acce07895123122cb0a1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diplomni`
--
ALTER TABLE `diplomni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diplomni`
--
ALTER TABLE `diplomni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
