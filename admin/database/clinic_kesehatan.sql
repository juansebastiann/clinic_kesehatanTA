-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 03:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_kesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `service_type` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `address` text DEFAULT NULL,
  `complaint` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `service_type`, `full_name`, `nik`, `email`, `phone_number`, `date_of_birth`, `gender`, `doctor`, `appointment_date`, `appointment_time`, `address`, `complaint`) VALUES
(36, '12312', '3333333', '2156745674560', 'nattagaming2411@gmail.com', '77777777', '2002-01-05', 'Laki-laki', 'dr Boyke', '2024-04-07', '01:47:00', 'afa', 'diubah oke'),
(38, 'Pelayanan Pemeriksaan Umum', 'Juan Sebastian Khan', '1234567890123456', 'sebastiankhan241@gmail.com', '82284219585', '2002-06-06', 'Laki-laki', 'dr Boyke', '2024-12-06', '07:00:00', 'asdfasdf', 'asdfasdfasdf'),
(39, 'Pelayanan Pemeriksaan Umum', 'erwin', '11111', 'nattagaming2411@gmail.com', '1111', '2003-08-06', 'Laki-laki', 'dr Boyke', '2024-12-06', '01:47:00', 'brayan', 'medan'),
(40, 'Pelayanan Pemeriksaan Umum', '987', '01111112', 'nattagaming2411@gmail.com', '82284219858', '2000-01-01', 'Laki-laki', 'dr Boyke', '2024-12-06', '25:00:00', 'medan selyan', 'kenapa biji ada 3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `testimonial_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `NIK` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Nomor_Handphone` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`NIK`, `nama_lengkap`, `Email`, `Nomor_Handphone`, `Password`) VALUES
('0000000000000000', '987', '987@gmail.com', '6228132690', '987'),
('1234123412333333', 'gilang', 'gilang@gmail.com', '123456789090000', '123'),
('1234567812341233', 'christian doni', 'christian@gmail.com', '055981743823', '12345'),
('1234567890123456', 'Rafif Raja', 'rafif123@gmail.com', '055981743823', '123'),
('1321323244444444', 'Rafif Raja', 'rafif@gmail.com', '055981743823', '123'),
('2120206200602000', 'juan', 'sebastiankhan241@gmail.com', '82284219858', '123'),
('8293084091384091', 'kjsgjdfjg', 'kamfk@gmail.com', '8374819237489', '1234'),
('8293084134524134', 'kjsgjdfjg', 'kamfdsfk@gmail.com', '8374819237489', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`NIK`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
