-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 09:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatify`
--

-- --------------------------------------------------------

--
-- Table structure for table `a01_divisions`
--

CREATE TABLE `a01_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a01_divisions`
--

INSERT INTO `a01_divisions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Barishal', NULL, NULL),
(2, 'Chattogram', NULL, NULL),
(3, 'Dhaka', NULL, NULL),
(4, 'Khulna', NULL, NULL),
(5, 'Rajshahi', NULL, NULL),
(6, 'Rangpur', NULL, NULL),
(7, 'Sylhet ', NULL, NULL),
(8, 'Mymensingh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a02_districts`
--

CREATE TABLE `a02_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a02_districts`
--

INSERT INTO `a02_districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 3, NULL, NULL),
(2, 'Faridpur', 3, NULL, NULL),
(3, 'Gazipur', 3, NULL, NULL),
(4, 'Gopalgonj', 3, NULL, NULL),
(5, 'Jamalpur', 8, NULL, NULL),
(6, 'Kishoregonj', 3, NULL, NULL),
(7, 'Madaripur', 3, NULL, NULL),
(8, 'Manikganj', 3, NULL, NULL),
(9, 'Munshigonj', 3, NULL, NULL),
(10, 'Mymensingh', 8, NULL, NULL),
(11, 'Narayangonj', 3, NULL, NULL),
(12, 'Narsingdi', 3, NULL, NULL),
(13, 'Netrokona', 8, NULL, NULL),
(14, 'Rajbari', 3, NULL, NULL),
(15, 'Shariatpur', 3, NULL, NULL),
(16, 'Sherpur', 8, NULL, NULL),
(17, 'Tangail', 3, NULL, NULL),
(18, 'Bandarban', 2, NULL, NULL),
(19, 'Brahmanbaria', 2, NULL, NULL),
(20, 'Chandpur', 2, NULL, NULL),
(21, 'Chattogram', 2, NULL, NULL),
(22, 'Cumilla', 2, NULL, NULL),
(23, 'Cox Bazar', 2, NULL, NULL),
(24, 'Feni', 2, NULL, NULL),
(25, 'Khagrachari', 2, NULL, NULL),
(26, 'Lakshmipur', 2, NULL, NULL),
(27, 'Noakhali', 2, NULL, NULL),
(28, 'Rangamati', 2, NULL, NULL),
(29, 'Bogura', 5, NULL, NULL),
(30, 'Dinajpur', 6, NULL, NULL),
(31, 'Gaibandha', 6, NULL, NULL),
(32, 'Joypurhat', 5, NULL, NULL),
(33, 'Kurigram', 6, NULL, NULL),
(34, 'Lalmonirhat', 6, NULL, NULL),
(35, 'Naogaon', 5, NULL, NULL),
(36, 'Natore', 5, NULL, NULL),
(37, 'Chapai Nawabgonj', 5, NULL, NULL),
(38, 'Nilphamari', 6, NULL, NULL),
(39, 'Pabna', 5, NULL, NULL),
(40, 'Panchagar', 6, NULL, NULL),
(41, 'Rajshahi', 5, NULL, NULL),
(42, 'Rangpur', 6, NULL, NULL),
(43, 'Sirajgonj', 5, NULL, NULL),
(44, 'Thakurgaon', 6, NULL, NULL),
(45, 'Bagerhat', 4, NULL, NULL),
(46, 'Chuadanga', 4, NULL, NULL),
(47, 'Jashore', 4, NULL, NULL),
(48, 'Jhenaidah', 4, NULL, NULL),
(49, 'Khulna', 4, NULL, NULL),
(50, 'Kushtia', 4, NULL, NULL),
(51, 'Magura', 4, NULL, NULL),
(52, 'Meherpur', 4, NULL, NULL),
(53, 'Narail', 4, NULL, NULL),
(54, 'Satkhira', 4, NULL, NULL),
(55, 'Barishal', 1, NULL, NULL),
(56, 'Bhola', 1, NULL, NULL),
(57, 'Jhalokati', 1, NULL, NULL),
(58, 'Patuakhali', 1, NULL, NULL),
(59, 'Pirojpur', 1, NULL, NULL),
(60, 'Habiganj', 7, NULL, NULL),
(61, 'Moulvibazar', 7, NULL, NULL),
(62, 'Sunamgonj', 7, NULL, NULL),
(63, 'Sylhet', 7, NULL, NULL),
(64, 'Barguna', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a04_specialties`
--

CREATE TABLE `a04_specialties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a04_specialties`
--

INSERT INTO `a04_specialties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Criminal', NULL, NULL),
(2, 'Personal Injury', NULL, NULL),
(3, 'Workers Compensation', NULL, NULL),
(4, 'Bankruptcy', NULL, NULL),
(5, 'Family', NULL, NULL),
(6, 'Immigration', NULL, NULL),
(7, 'Estate Planning', NULL, NULL),
(8, 'Intellectual Property', NULL, NULL),
(9, 'Employment', NULL, NULL),
(10, 'Corporate', NULL, NULL),
(11, 'Medical Malpractice', NULL, NULL),
(12, 'Tax', NULL, NULL),
(13, 'Civil Litigation', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a01_divisions`
--
ALTER TABLE `a01_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a02_districts`
--
ALTER TABLE `a02_districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a02_districts_division_id_foreign` (`division_id`);

--
-- Indexes for table `a04_specialties`
--
ALTER TABLE `a04_specialties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a01_divisions`
--
ALTER TABLE `a01_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `a02_districts`
--
ALTER TABLE `a02_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `a04_specialties`
--
ALTER TABLE `a04_specialties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `a02_districts`
--
ALTER TABLE `a02_districts`
  ADD CONSTRAINT `a02_districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `a01_divisions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
