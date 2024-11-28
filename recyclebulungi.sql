-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 03:24 PM
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
-- Database: `recyclebulungi`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `expires_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `code`, `expires_at`) VALUES
(1, 'nyeroryan@gmail.com', 738789, '2024-11-09 19:14:50'),
(2, 'nyeroryan@gmail.com', 767495, '2024-11-09 19:20:17'),
(3, 'nyeroryan@gmail.com', 652526, '2024-11-09 19:40:01'),
(4, 'vivianmujuzi@gmail.com', 542251, '2024-11-09 19:46:22'),
(5, 'vivianmujuzi@gmail.com', 708245, '2024-11-09 20:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `username`) VALUES
(1, 'Bryant', 'Nuwe', 776589203, 'test@test.com', 'ghggg', 'nuwe_b'),
(2, 'John ', 'Doe', 703864621, 'johndoe@must.ac.ug', '$2y$10$Klow3mUoaNObVFgy5AU0l.qZ8jSSYX3dFWK4C0XOOeGjiHXykagDq', 'JD555'),
(3, 'Jane', 'Doe', 700345665, 'janedoe@must.ac.ug', '$2y$10$1xzn.6b/LQSRl4nfLMqLfOMJa1WZ7dKYSGMvk67UMYapc5gPVgH0O', 'JD_F'),
(4, 'James', 'Dorothy', 70034537, 'jamesd@must.ac.ug', '$2y$10$EA8qMjLYwCCqFEuyGIv1v.GwtvMBP52ixhMXpMhqFcwc0jbiBUj3O', 'JD_M'),
(5, 'Ryan', 'Nyero', 704008008, 'nyeroryan@gmail.com', '$2y$10$cPL3vUlVEWJ3KSO3YMZYruajkTFLDspvmmLZ/nZYGLTrmB/3iki7a', 'NyeroR'),
(6, 'badiMan', 'El', 2147483647, 'badimanel56@gmail.com', '$2y$10$NCLknMHf9E4gnL7Y2rWxR.cYBjC2N3maxpBoxS22pf2bppS05YX5q', 'BadiManEl'),
(7, 'Nandawula', 'Vivian', 762946096, 'vivianmujuzi@gmail.com', '$2y$10$VVM5jM16fsWFW79OwYqBvOTlNLQrudHqtxtVY3GAWfL1lWClsqFIe', 'Mujuzi'),
(8, 'Nandawula', 'Vivian', 762946096, 'vivianmujuzi@gmail.com', '$2y$10$OmemcTRF6N6op6AJA4x5v.3zBfmw/yHwcbla4IKW7qKrtvUV8rypK', 'Mujuzi ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
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
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
