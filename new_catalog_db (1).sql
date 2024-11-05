-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 05:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_catalog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `views` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `userid`, `image`, `views`, `date`, `url_address`, `title`) VALUES
(1, 1, 'uploads/12.jpeg', 0, '2024-11-04 00:19:00', '118spq', 'Abu Sayed'),
(3, 1, 'uploads/1.jpeg', 0, '2024-11-04 00:22:43', 'gebahap3Z9pSxHCX', 'Shabag'),
(4, 1, 'uploads/6.jpeg', 1, '2024-11-04 01:26:05', 'MQnuH', 'Newspaper Headlines'),
(7, 1, 'uploads/4.jpeg', 0, '2024-11-04 16:07:22', 'fTEZ5l9aF0aHcHN8XPVghmm9dUy7ih', 'Curfew'),
(8, 1, 'uploads/11.jpeg', 0, '2024-11-04 17:29:15', 'wMX0IuZFfAw6xfCnd2w3BKlbqtK2HSO9vZMkiXIJyDZQLloz6i2TH', 'Students being attacked'),
(9, 1, 'uploads/9.jpeg', 0, '2024-11-04 17:31:49', '9yCwkMhzSPRfxjaKaZtJSxkLYGDtKO', 'march to dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `url_address`, `email`, `password`, `date`, `image`) VALUES
(1, 'qco33ZkJAhL', 'tanvir@gmail.com', 'abcd1234', '2024-11-04 00:18:05', ''),
(2, 'fKhhZxVq6Mq5uJE77KYy52PMSEWQi6Y4F', 'ashrafmdrony@gmail.com', 'abcd1234', '2024-11-04 17:30:23', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `image` (`image`),
  ADD KEY `views` (`views`),
  ADD KEY `date` (`date`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`password`),
  ADD KEY `date` (`date`),
  ADD KEY `image` (`image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
