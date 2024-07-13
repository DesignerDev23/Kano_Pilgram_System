-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 08:24 PM
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
-- Database: `kano_pilgrims`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pilgrims`
--

CREATE TABLE `pilgrims` (
  `id` int(11) NOT NULL,
  `pil_name` varchar(255) NOT NULL,
  `pil_lga` varchar(255) NOT NULL,
  `pil_nin` varchar(255) NOT NULL,
  `pil_bvn` varchar(255) NOT NULL,
  `passport_no` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pilgrims`
--

INSERT INTO `pilgrims` (`id`, `pil_name`, `pil_lga`, `pil_nin`, `pil_bvn`, `passport_no`, `gender`, `dob`, `phone_number`, `email`, `password`, `account_number`, `registration_date`) VALUES
(3, 'Musa Abdulkadir', 'KTG', '70480444511', '22648615194', 'aexf666', 'Male', '2003-05-18', '09072874728', 'binabdulkadir456@gmail.com', '$2y$10$UBxeFA4cMDitsSJ7YR1IHev9irFvgNSTMLd8VC1905.utKc5SwARO', '6000138474', '2024-07-13 08:52:18'),
(4, 'Musa Abdulkadir', 'KTG', '70480444511', '22648615194', 'aexf666', 'Male', '2003-05-18', '09072874728', 'binabdulkadir456@gmail.com', '$2y$10$n9UvTWqPsP2hrNxc.g1DyO4Sfs3CjaomFZfoAMfSP8BdxwZ.szZ1i', '3000046546', '2024-07-13 08:59:36'),
(5, 'Musa Abdulkadir', 'KTG', '70480444511', '22648615194', 'aexf666', 'Male', '2003-05-18', '09072874728', 'binabdulkadir456@gmail.com', '$2y$10$Mv38nRO//Hh/tdc6w7S.5eBa./48KXhFden9s1Z9RvmhePG0RHwJq', '3000046574', '2024-07-13 09:30:09'),
(6, 'Musa Abdulkadir', 'KTG', '70480444511', '22648615194', 'aexf666', 'Male', '2003-05-18', '09072874728', 'binabdulkadir456@gmail.com', '$2y$10$to/egrnnqjpTYHuRESju0.XvhaVHUF79XSp6oSu8UX8dwb5idA2s6', '3000046781', '2024-07-13 14:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `pilgrim_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilgrims`
--
ALTER TABLE `pilgrims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pilgrim_id` (`pilgrim_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilgrims`
--
ALTER TABLE `pilgrims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`pilgrim_id`) REFERENCES `pilgrims` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
