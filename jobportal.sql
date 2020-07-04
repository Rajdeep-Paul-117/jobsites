-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 08:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `application_id` int(3) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`application_id`, `job_id`, `name`, `email`, `phone_no`, `qualification`, `DOB`, `address`) VALUES
(17, 1, 'asd', 'asasa@gmail.com', '9087654321', 'asasa', '2020-06-09', 'asasasas'),
(18, 3, 'asd', 'asasa@gmail.com', '9087654321', 'asasa', '2020-06-13', 'asasasas'),
(19, 2, 'asd', 'asasa@gmail.com', '9087654321', 'asasa', '2020-06-26', 'asasasas'),
(20, 1, 'asd', 'asasa@gmail.com', '9087654321', 'asasa', '2020-07-15', 'asasasas'),
(21, 6, 'Nit', 'hs@gmail.com', '9874521354', 'Mtech ', '2020-07-23', 'Bsbshsjjs');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(3) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `last_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `post_name`, `org_name`, `eligibility`, `salary`, `vacancy`, `last_date`, `user_id`) VALUES
(1, 'adfsaf', 'asasas', 'gadhgdhgjas', '12333', 0, '2020-06-30', 0),
(2, 'professor', 'mit', 'B.tech,phd', '200000 p/m', 5, '2020-06-30', 0),
(3, 'asas', 'aad', 'assas', '1212121', 5, '2020-07-08', 0),
(4, 'asas', 'aad', 'assas', '1212121', 5, '2020-07-08', 0),
(9, 'proffessor', 'nit', 'phd', '100000', 10, '2020-07-22', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `phone_no`, `password`) VALUES
(1, 'asfdfg', 'asasa@gmail.com', '2147483647', '123345566'),
(2, 'asfdfg', 'asasa@gmail.com', '2147483647', '123345566'),
(3, 'asfdfg', 'asasa@gmail.com', '2147483647', '12345678'),
(4, 'aad', 'asasa@gmail.com', '9087654321', '12345'),
(5, 'aad', 'asasa@gmail.com', '9087654321', '$2y$10$SkJfS3MJ3pUrmXfsD7yeZ.fwx26oMnSFMC0ChmZlMpGa2qjZ35Myi'),
(6, 'aad', 'asasa@gmail.com', '9087654321', '$2y$10$zDHK/1cNOEsrSeecL0F39eL1sZA5TosULvV2tlu/C6NW6QtWDhSR.'),
(7, 'aad', 'asasa@gmail.com', '9087654321', '$2y$10$xUMWJV5V9vXlrZMKMUeapO3Hlv1cnEMcj6RVP9Bqvd96nn8UgS5bW'),
(8, 'aad', 'asasa@gmail.com', 'asas', '$2y$10$RRCUTVMzHgWxbAezWjvKbu1b9.bHLpZ2otSFtdrgWirHdmWPKakz2'),
(9, 'aad', 'asasa@gmail.com', 'asas', '$2y$10$JkgFq4jpeI2skHdEAH.JFu//4ANP.gEJ/YP.bN4253WMsL0g9zroC'),
(10, 'asfdfg', 'asasa@gmail.com', '9087654321', '$2y$10$JBG3VAfbzYhTZIYnfq0zs.S3bWsKeDlyuFR9dDlWZg7Nurk879IDa'),
(11, 'aad', 'asasa@gmail.com', '1234567890', '$2y$10$2GKDrHIxeZdW1GRGzeHdBuM8AvbgsxLkxFrJyCCfW43DnvZ.IzBFa'),
(12, 'aad', 'asasa@gmail.com', '9087654321', '$2y$10$jJcBfmyoiTOT1KnIPg7PZ.CBBX6i2MNReFhciRYqGtDSFPX174l1.'),
(13, 'aad', 'asasa@gmail.com', 'asas', '$2y$10$8Dsf8ZXr5m9MylnLnQIHeeFMVQHUTEseKpCD5Zmta866K.pYuSiaO'),
(14, 'aad', 'asasa@gmail.com', 'asas', '$2y$10$4DEuNvS5xwGZyXOUEao6vuZ6Bw12hQn/Z34kBE4T71t6vBSVkUG.O'),
(15, 'aad', 'asasa@gmail.com', '9087654321', '$2y$10$2jo87Ly14wnZoADrxujS0.yT9rgtjPT6nyvDCWjRTD7zIs0biiG.S'),
(16, 'asfdfg', 'asasa@gmail.com', '9087654321', '$2y$10$ii8wXXcaSLWYkqZF20jfTOaEpiZ..cwS7YMRbU3pJi/UKJa1Qr4Ze'),
(17, 'asfdfg', 'asasa@gmail.com', '9087654321', '$2y$10$ulprRIUqx.rFkWwfuTzbFuM5cfj1T3J85aSV8vasSeME4j1fLUPgK'),
(18, 'asfdfg', 'asasa@gmail.com', '9087654321', '$2y$10$UkV9kFw57fRQ0AIJGH8yM.stYT8eVkXV7jCGSoytmTuZ9Jzmzq6Mi'),
(19, 'aad', 'asasa@gmail.com', '9087654321', '$2y$10$8J06zM/JydcvS1Ysvs8l.unX0IntwBh5yQ50e94fpuV.zC7luSO/6'),
(20, 'nit', 'nit@gmail.com', '9087654321', '$2y$10$J7c7HurOHcJYd3QM81Lt1uRlDubhj34NENCiYM50PElWN0VuCWSo.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `application_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
