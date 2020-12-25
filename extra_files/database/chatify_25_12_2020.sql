-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 01:39 PM
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
-- Table structure for table `a03_cities`
--

CREATE TABLE `a03_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `a05_court_divisions`
--

CREATE TABLE `a05_court_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a05_court_divisions`
--

INSERT INTO `a05_court_divisions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'District Judge Court', NULL, NULL),
(2, 'Additional District Judge Court', NULL, NULL),
(3, 'Joint District Judge Court', NULL, NULL),
(4, 'Senior Assistant Judge Court', NULL, NULL),
(5, 'Assistant Judge Court', NULL, NULL),
(6, 'Small Causes Court', NULL, NULL),
(7, 'Family Courts', NULL, NULL),
(8, 'Sessions Judge', NULL, NULL),
(9, 'Additional Sessions Judge', NULL, NULL),
(10, 'Assistant Sessions Judge', NULL, NULL),
(11, 'Metropolitan Sessions Judge', NULL, NULL),
(12, 'Additional Metropolitan Sessions Judge', NULL, NULL),
(13, 'Joint Metropolitan Sessions Judge', NULL, NULL),
(14, 'Chief Judicial Magistrate', NULL, NULL),
(15, 'Additional Chief Judicial Magistrate', NULL, NULL),
(16, 'Magistrate of the first Class', NULL, NULL),
(17, 'Magistrate of the Second Class', NULL, NULL),
(18, 'Magistrate of the Third Class', NULL, NULL),
(19, 'Chief Metropolitan Magistrate', NULL, NULL),
(20, 'Additional Chief Metropolitan Magistrate', NULL, NULL),
(21, 'Senior Judicial Magistrate', NULL, NULL),
(22, 'Judicial Magistrate', NULL, NULL),
(23, 'Additional Judge', NULL, NULL),
(24, 'Joint Sessions Judge', NULL, NULL),
(25, 'Women and Children Harassment Tribunal', NULL, NULL),
(26, 'Special Judge', NULL, NULL),
(27, 'Cyber Tribunal', NULL, NULL),
(28, 'Administrative Tribunal', NULL, NULL),
(29, 'Fast Trial Tribunal', NULL, NULL),
(30, 'Public Safety Tribunal', NULL, NULL),
(31, 'Special Tribunal', NULL, NULL),
(32, 'Juvenile Court', NULL, NULL),
(33, 'Environment Appellate Court', NULL, NULL),
(34, 'Court of Settlement', NULL, NULL),
(35, 'Money Loan Court', NULL, NULL),
(36, 'Labour Court', NULL, NULL),
(37, 'Special Tribunal Securities and Exchange Commision', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a06_degree_levels`
--

CREATE TABLE `a06_degree_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a06_degree_levels`
--

INSERT INTO `a06_degree_levels` (`id`, `level_name`, `created_at`, `updated_at`) VALUES
(1, 'Associate\'s', NULL, NULL),
(2, 'Bachelor\'s', NULL, NULL),
(3, 'Master\'s', NULL, NULL),
(4, 'Doctorate', NULL, NULL),
(5, 'Certificate / Diploma', NULL, NULL),
(6, 'Graduate Certificates', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a07_degree_categories`
--

CREATE TABLE `a07_degree_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree_level_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a07_degree_categories`
--

INSERT INTO `a07_degree_categories` (`id`, `category_name`, `degree_level_id`, `created_at`, `updated_at`) VALUES
(1, 'Art & Design', 1, NULL, NULL),
(2, 'Business & Management', 1, NULL, NULL),
(3, 'Computers & Technology', 1, NULL, NULL),
(4, 'Criminal Justice & Legal', 1, NULL, NULL),
(5, 'Education & Teaching', 1, NULL, NULL),
(6, 'Liberal Arts & Humanities', 1, NULL, NULL),
(7, 'Nursing & Healthcare', 1, NULL, NULL),
(8, 'Science & Engineering', 1, NULL, NULL),
(9, 'Trades & Careers', 1, NULL, NULL),
(10, 'Art & Design', 2, NULL, NULL),
(11, 'Business & Management', 2, NULL, NULL),
(12, 'Computers & Technology', 2, NULL, NULL),
(13, 'Criminal Justice & Legal', 2, NULL, NULL),
(14, 'Education & Teaching', 2, NULL, NULL),
(15, 'Liberal Arts & Humanities', 2, NULL, NULL),
(16, 'Nursing & Healthcare', 2, NULL, NULL),
(17, 'Psychology & Counseling', 2, NULL, NULL),
(18, 'Science & Engineering', 2, NULL, NULL),
(19, 'Trades & Careers', 2, NULL, NULL),
(20, 'Art & Design', 3, NULL, NULL),
(21, 'Business & Management', 3, NULL, NULL),
(22, 'Computers & Technology', 3, NULL, NULL),
(23, 'Criminal Justice & Legal', 3, NULL, NULL),
(24, 'Education & Teaching', 3, NULL, NULL),
(25, 'Liberal Arts & Humanities', 3, NULL, NULL),
(26, 'Nursing & Healthcare', 3, NULL, NULL),
(27, 'Psychology & Counseling', 3, NULL, NULL),
(28, 'Science & Engineering', 3, NULL, NULL),
(29, 'Art & Design', 4, NULL, NULL),
(30, 'Business & Management', 4, NULL, NULL),
(31, 'Computers & Technology', 4, NULL, NULL),
(32, 'Criminal Justice & Legal', 4, NULL, NULL),
(33, 'Education & Teaching', 4, NULL, NULL),
(34, 'Liberal Arts & Humanities', 4, NULL, NULL),
(35, 'Nursing & Healthcare', 4, NULL, NULL),
(36, 'Psychology & Counseling', 4, NULL, NULL),
(37, 'Science & Engineering', 4, NULL, NULL),
(38, 'Art & Design', 5, NULL, NULL),
(39, 'Business & Management', 5, NULL, NULL),
(40, 'Computers & Technology', 5, NULL, NULL),
(41, 'Criminal Justice & Legal', 5, NULL, NULL),
(42, 'Education & Teaching', 5, NULL, NULL),
(43, 'Liberal Arts & Humanities', 5, NULL, NULL),
(44, 'Nursing & Healthcare', 5, NULL, NULL),
(45, 'Psychology & Counseling', 5, NULL, NULL),
(46, 'Science & Engineering', 5, NULL, NULL),
(47, 'Trades & Careers', 5, NULL, NULL),
(48, 'Art & Design', 6, NULL, NULL),
(49, 'Business & Management', 6, NULL, NULL),
(50, 'Computers & Technology', 6, NULL, NULL),
(51, 'Criminal Justice & Legal', 6, NULL, NULL),
(52, 'Education & Teaching', 6, NULL, NULL),
(53, 'Liberal Arts & Humanities', 6, NULL, NULL),
(54, 'Nursing & Healthcare', 6, NULL, NULL),
(55, 'Psychology & Counseling', 6, NULL, NULL),
(56, 'Science & Engineering', 6, NULL, NULL),
(57, 'Trades & Careers', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a08_boards`
--

CREATE TABLE `a08_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `board_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a08_boards`
--

INSERT INTO `a08_boards` (`id`, `board_name`, `created_at`, `updated_at`) VALUES
(1, 'Barisal', NULL, NULL),
(2, 'Chittagong', NULL, NULL),
(3, 'Comilla', NULL, NULL),
(4, 'Dhaka', NULL, NULL),
(5, 'Dinajpur', NULL, NULL),
(6, 'Jessore', NULL, NULL),
(7, 'Mymensingh', NULL, NULL),
(8, 'Rajshahi', NULL, NULL),
(9, 'Sylhet', NULL, NULL),
(10, 'Madrasah', NULL, NULL),
(11, 'Technical', NULL, NULL),
(12, 'DIBS(Dhaka)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a1_users`
--

CREATE TABLE `a1_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `messenger_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `dark_mode` tinyint(1) NOT NULL DEFAULT '0',
  `active_status` tinyint(1) NOT NULL DEFAULT '0',
  `contact` char(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `type` enum('admin','lawyer','client') COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a1_users`
--

INSERT INTO `a1_users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `messenger_color`, `dark_mode`, `active_status`, `contact`, `type`, `location`, `gender`, `birthdate`, `district_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$MHJ9PzcQqYtedK.l.lw33.aIvDcsCDGmF72kkObbe8eM1qMBGSu5y', 'avatar.png', '#2180f3', 0, 0, '01900000000', 'admin', 'Dhaka', 'male', '1995-10-01', NULL, NULL, '2020-12-11 03:11:43', '2020-12-18 10:10:07'),
(13, 'SAKIB SIKDER', 'juralacuity@gmail.com', NULL, '$2y$10$bDraIZGVH9SKRHS1ex1vseyg7aR312zRKVNnWnkhgooXQvUWB/zHO', '05325671-40f4-4014-948e-c9cf08f8b337.jpg', '#2180f3', 0, 0, '01707108000', 'lawyer', 'Banani', 'male', '1990-10-10', 1, NULL, '2020-12-24 11:13:21', '2020-12-24 12:04:44'),
(14, 'AFRIN AHMED', 'info@juralacuity.com', NULL, '$2y$10$hrGaM5T4.LiPUfK0g7G2VewkTyI1R6GvQsnLiraeqrDYvzeMtoO1K', '6b01f6c7-07ef-412a-b631-1e563a632873.jpg', '#2180f3', 0, 0, '01707108000', 'lawyer', 'majar road', 'female', '1971-05-11', 45, NULL, '2020-12-24 11:41:14', '2020-12-24 12:12:26'),
(15, 'S M SAIFULLAH RAHMAN', 'juralacuity20@gmail.com', NULL, '$2y$10$6ILs5fAF3y1.gzrvwIcANuRSYPLGSQSxucXliRjYnzVi5xiuMhsGm', 'bf9531e8-6dc3-45de-a0c1-8d3ba3cf2c63.JPG', '#2180f3', 0, 0, '01707108000', 'lawyer', 'hatem ali road', 'male', '1995-09-12', 55, NULL, '2020-12-24 11:46:04', '2020-12-24 11:54:36'),
(16, 'MD. SHAHABUDDIN MOLLA', 'juralacuity50@gmail.com', NULL, '$2y$10$THuHvI/nJiMVooggXPCn1uxfTlOEoP69e4spH8L.58DTDex0wpIVi', 'f18fe728-a6a5-43b6-88ab-16ce8f3a367f.jpg', '#2180f3', 0, 0, '8801707108000', 'lawyer', 'bonarpara', 'male', '1975-06-22', 30, NULL, '2020-12-24 12:18:21', '2020-12-24 12:22:11'),
(17, 'SYED AZIZUL IQBAL', 'juralacuity55@gmail.com', NULL, '$2y$10$f61qLTgNy/mLW.LrVZo9B.nlCO6sr5obvhda02LD2Y3sqcyaSVnEC', '1920005f-be5b-4afa-8b0b-87f7f6576de3.jpg', '#2180f3', 0, 0, '8801707108000', 'lawyer', 'lalbagh', 'male', '1995-03-08', 1, NULL, '2020-12-24 12:27:06', '2020-12-24 12:32:37'),
(18, 'MD. RASEL MIAH', 'info00@juralacuity.com', NULL, '$2y$10$NezI03tNqFIF8W5Ot7Nem.OZf8pQzuIVFPW/4pBAHvio9UM84LcE6', 'd791bcf0-666b-45d2-8898-bb5dd1b0d210.jpg', '#2180f3', 0, 0, '01707108000', 'lawyer', 'poliaha', 'male', '1991-01-14', 5, NULL, '2020-12-24 12:37:19', '2020-12-24 12:46:05'),
(19, 'ASHRAFUN NAHAR', 'info22@juralacuity.com', NULL, '$2y$10$JE0t19RC6J2XjJGcs.xYAu22HRG.Kumc9VVrFYiRRhNA6acYrhq0a', 'e4b26236-3966-4ec2-9a41-c9a485a9bf88.jpg', '#2180f3', 0, 0, '8801707108000', 'lawyer', 'mirpur', 'female', '1992-06-26', 1, NULL, '2020-12-24 12:50:26', '2020-12-24 12:53:31'),
(20, 'MR. MUJIBUL HAQUE', 'juralacuity110@gmail.com', NULL, '$2y$10$CyL7rbDteO5JXjdyXfHWxeMyuv2ksY6XYHi7Gtt18Vpcvsd76xzOC', 'f3a9234f-05cb-4be7-b479-b6e4e3dde1fd.jpg', '#2180f3', 0, 0, '8801707108000', 'lawyer', 'alekanda', 'male', '1974-07-03', 55, NULL, '2020-12-24 12:58:05', '2020-12-24 13:02:31'),
(21, 'Shajib Mahmood Alam', 'info@bdlplaw.com', NULL, '$2y$10$ptV4D5AwGGsBpEZT/NxhhOXE1ViW6WqWnCwK38VK3XNhPmfWXbULi', 'cbbeb0a5-74b9-4d1e-9126-d4402d577b65.jpg', '#2180f3', 0, 0, '01714404050', 'lawyer', 'uttra', 'male', '1990-01-22', 1, NULL, '2020-12-24 13:07:41', '2020-12-24 13:10:33'),
(22, 'Md Rafinur Rahman', 'info1@bdlplaw.com', NULL, '$2y$10$oh6A5hCkPZ3r.stTCfSL2e3UZLYXzbNEmW1mtnH4hOcw020Ut1Q7G', '20bca83b-9ffc-4a6d-b71c-49f5dbb594e6.jpg', '#2180f3', 0, 0, '01714404050', 'lawyer', 'Baridhara DOHS', 'male', '1987-05-24', 1, NULL, '2020-12-24 13:30:20', '2020-12-24 13:35:27'),
(23, 'TAJUL ISLAM', 'tajulislam@gmail.com', NULL, '$2y$10$6OymT11kq6Zpq8opLIB92OqDAoG5QEx2gMZ8lSONjUckCeIIn6E8i', 'avatar.png', '#2180f3', 0, 0, '11111111111111', 'client', 'Medical Road', 'male', '1992-09-09', 54, NULL, '2020-12-25 01:06:11', '2020-12-25 01:06:11'),
(24, 'Mehedi hasan', 'mehedihasan221@gmail.com', NULL, '$2y$10$O6xMdxZ7H3RJ63SMww0S6uT5SDDAFNEzb03WT4GiXM6f4ZIP7t3V6', 'avatar.png', '#2180f3', 0, 0, '01746509698', 'client', 'polashi', 'male', '1999-06-20', 1, NULL, '2020-12-25 01:29:14', '2020-12-25 01:29:14'),
(25, 'Nishat Tasnim', 'tasnim005@gmail.com', NULL, '$2y$10$f4DLqgipGdQtLmedKhgUPueLVY3ypLKjGHb0TELxvaWTmiUf2U6Xa', 'avatar.png', '#2180f3', 0, 0, '01750151515', 'client', 'fulbari', 'female', '1991-12-12', 29, NULL, '2020-12-25 01:33:50', '2020-12-25 01:33:50'),
(26, 'Suraiya Parvin', 'suraiyaparvinprity00@gmail.com', NULL, '$2y$10$jgov4p.WFUpS0spbT1JB9eiIKjaM7i12Z2K7wbJ8QRZDtYCnnCM0O', 'avatar.png', '#2180f3', 0, 0, '01575522552', 'client', 'lalbagh', 'female', '2000-08-19', 1, NULL, '2020-12-25 02:00:46', '2020-12-25 02:00:46'),
(27, 'Shams Al Rifat', 'shamsal94@gmail.com', NULL, '$2y$10$ZBhDhHTxc.peOWex7uerLe2xNouHOwMNXHlNt8zCYnHLD3jYqCn8a', 'avatar.png', '#2180f3', 0, 0, '01735453509', 'client', 'mirpur2', 'male', '1994-01-19', 1, NULL, '2020-12-25 02:04:52', '2020-12-25 02:04:52'),
(28, 'Nusaiba Binte', 'binte0090@gmail.com', NULL, '$2y$10$6bprcYIJs8ZZSRr0zRxn1.8qylDgPfK37Fo6knfl8u1ZN6ODVdZ8i', 'avatar.png', '#2180f3', 0, 0, '01950000102', 'client', 'police fari', 'female', '1990-09-04', 5, NULL, '2020-12-25 02:12:45', '2020-12-25 02:12:45'),
(29, 'Khaleda Binte', 'binte.khaleda12@gmail.com', NULL, '$2y$10$7R5S.XQJlIRETHTIv8FwTeE1yhk7x75FGEIWCS40YSxCvKOV96rmy', 'avatar.png', '#2180f3', 0, 0, '01521425134', 'client', 'Gulshan', 'female', '1999-09-09', 1, NULL, '2020-12-25 02:53:57', '2020-12-25 02:53:57'),
(30, 'Fakirul Haque', 'fakir@gmail.com', NULL, '$2y$10$de0.rQ2JZVBQjd9P9PqH/eFFO1v5X7o86Mhd64cOPVsFiS7fGJ9bK', 'avatar.png', '#2180f3', 0, 0, '01542635142', 'client', 'beach road', 'male', '1999-09-09', 23, NULL, '2020-12-25 03:02:22', '2020-12-25 03:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `a2_password_resets`
--

CREATE TABLE `a2_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a3_failed_jobs`
--

CREATE TABLE `a3_failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a4_messages`
--

CREATE TABLE `a4_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a5_favorites`
--

CREATE TABLE `a5_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b1_courts`
--

CREATE TABLE `b1_courts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `court_division_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b1_courts`
--

INSERT INTO `b1_courts` (`id`, `name`, `court_division_id`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka Judge Court', 1, 1, NULL, NULL),
(2, 'Dhaka Additional Judge Court', 2, 1, NULL, NULL),
(3, 'Dhaka Joint District Judge Court', 3, 1, NULL, NULL),
(4, 'Dhaka Senior Assistant Judge Court', 4, 1, NULL, NULL),
(5, 'Dhaka Assistant Judge Court', 5, 1, NULL, NULL),
(6, 'Dhaka Small Causes Court', 6, 1, NULL, NULL),
(7, 'Dhaka Family Court', 7, 1, NULL, NULL),
(8, 'Dhaka Sessions Judge Court', 8, 1, NULL, NULL),
(9, 'Dhaka Additional Sessions Judge Court', 9, 1, NULL, NULL),
(10, 'Dhaka Assistant Sessions Judge Court', 10, 1, NULL, NULL),
(11, 'Dhaka Metropolitan Sessions Judge Court', 11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b2_faqs`
--

CREATE TABLE `b2_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b5_admins`
--

CREATE TABLE `b5_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('superadmin','admin','moderator','editor','viewer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b6_lawyers`
--

CREATE TABLE `b6_lawyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_bio` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `court_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` enum('advocate','magistrate','barrister') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialties_id` bigint(20) UNSIGNED DEFAULT NULL,
  `member_id` smallint(6) DEFAULT NULL,
  `ratings` bigint(20) NOT NULL DEFAULT '0',
  `reviews` int(11) NOT NULL DEFAULT '0',
  `cases` int(11) NOT NULL DEFAULT '0',
  `admin_approval` int(11) NOT NULL DEFAULT '0',
  `nid_front` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nid_front.png',
  `nid_back` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nid_back.png',
  `success_rate` double(3,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b6_lawyers`
--

INSERT INTO `b6_lawyers` (`id`, `profile_bio`, `user_id`, `court_id`, `type`, `specialties_id`, `member_id`, `ratings`, `reviews`, `cases`, `admin_approval`, `nid_front`, `nid_back`, `success_rate`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Sakib Sikder is a seasoned commercial & corporate counsel having over 13 years of legal experiences. He developed his core expertise on Commercial, Indirect Taxation and Company Law. Later on his carrier, Mr. Sakib developed expertise on telecommunication laws, intellectual property laws, indirect tax litigations, merger & acquisitions and regulatory licensing. Mr. Sakib is currently working for foreign and local investors on number of Greenfield projects.\r\n\r\nMr. Sakib has vast expertise in conducting litigations before the High Court Division, Customs and VAT Appellate Tribunal & Labour Tribunals in Bangladesh. He also participates in hearing before Magistrate Courts and District Courts in Bangladesh.\r\n\r\nMr. Sakib is a Member of the Lincoln’s Inn & an Advocate of the Supreme Court of Bangladesh. Mr. Sakib completed his LL.M in International Business Law from City University of London & LL.B (Hons) from University of London. He has also undertaken number of professional courses including PGDL in Professional Studies from City University of London; Rethinking International Taxation from Leiden University, Sweden and Finance from Non Finance Professional from University of California, Irvine. Mr. Sakib is an Associate of Chartered Institute of Arbitrators, UK.', 13, NULL, 'advocate', 8, 2200, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 11:13:21', '2020-12-24 12:04:44'),
(2, 'Afrin Ahmed is an Advocate having 13 years of professional experience in corporate legal field. She has completed her Diploma-in-Law from University of London and did her LL.B (Hons.) from University of Wolverhampton, UK. In her professional life, she has worked in Juris Counsel with Advocate Tawfique Nawaz as well as a Legal Associate in Syed Ishtiaq Ahmed and Associates in her early career. She was the Senior Legal Counsel at Bangladesh International Arbitration Center (BIAC) for 6 years which is a project funded by IFC (World Bank). She was involved in policy making, International & local training arrangements & administration, facilitation of arbitration and mediation and communication & PR with stakeholders including Government, Corporate & International Organizations.\r\n\r\nIn addition to that during her 2 years at Rancon Group, she was involved in providing legal opinions & advice, strategies & planning, company policy making, evaluating processes & finding gaps, monitoring and ensuring compliance and managing legal team in their 13 SBUs. She is an Associate Member of the Chartered Institute of Arbitrators (CIArb), U.K. She get appointed as the International Consultant of Kunming International Commercial Arbitration Service Centre, Kunming, China in 2019. She is currently holding the position as a Partner at Jural Acuity, a renowned Law Firm situated in Banani, Dhaka, Bangladesh. Apart from her the legal practice she provides trainings in various institutions and took part in seminars on ADR. She facilitates ADR for Bangladesh International Arbitration Centre (BIAC) and Bangladesh Employers’ Federation (BEF). She also trained high officials of KAFCO (Karnaphuli Fertilizer Company Limited) in Chottogram, Dhaka International University, Bhuiyan Academy, Bangladesh Security Exchange Commission (BSEC), South East University, Daffodil University, Eastern University, London College of Legal Studies (LCLS- South) and many more.\r\n\r\nShe was born in UK and worked in the Administration Department at the National Health Service (NHS) in her early career.', 14, NULL, 'advocate', 2, 3133, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 11:41:14', '2020-12-24 12:12:36'),
(3, 'Mr. Saifullah has extensive knowledge in commercial laws and corporate practice. He regularly assists the chamber in drafting commercial agreements, dealing with corporate clients and providing opinion on complex commercial issues including dispute settlement, contractual issues and debt recovery for foreign clients.  He has also keen interest on dealing with international trade and customs related disputes.', 15, NULL, 'barrister', 12, 1000, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 11:46:04', '2020-12-24 11:54:37'),
(4, 'Mr. Molla has more than 8 years of professional experiences including practice, teaching and research. He is an enrolled Advocate of the Dhaka Judge Court. He is skilled in criminal cases, civil suits and litigation in lower court, tribunals, revenue authority, land administration authority and registration authority. He has also extensive knowledge in property vetting and land documentation. Mr. Sabuj is currently conducting a number of Civil and Criminal cases  for the Chamber.', 16, NULL, 'advocate', 1, 5555, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 12:18:21', '2020-12-24 12:22:11'),
(5, 'Mr. Iqbal has completed his LL.B. (Hons.) and LL.M accordingly in the year 2017 and 2019. Now he is working as an associate in Jural Acuity. His major responsibilities include providing legal opinions and obtaining regulatory approvals such as works in BIDA, RJSC, IRC, Tax certificates etc. He has also gathered experience regarding Trademark and Patent registration.', 17, NULL, 'advocate', 12, 7777, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 12:27:06', '2020-12-24 12:32:37'),
(6, 'Mr. Rasel Miah has completed his LL.B. (Hons.) in 2018.He has joined the chamber as an associate. His major responsibilities, Include providing legal opinions and obtaining regulatory approvals such as works in BIDA, RJSC, IRC, Tax certificates etc. He has also gathered experience regarding property vetting, conducting property investigation and registration formalities.', 18, NULL, 'advocate', 12, 9595, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 12:37:19', '2020-12-24 12:46:05'),
(7, 'Ms. Ashrafun Nahar completed her LL.M in 2014. She is\r\na practicing Advocate in Dhaka District Court and\r\nMagistrate Court. She has started her carrier with a Senior\r\nAdvocate practicing Civil laws in the District Court, where\r\nshe gathered her experience in Drafting and Civil\r\nLitigation. She has also handled a number of Criminal and\r\nfamily related cases. She joined Jural Acuity in 2019 and is\r\ncurrently looking after drafting and litigation management\r\nfor the firm.', 19, NULL, 'advocate', 7, 6666, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 12:50:26', '2020-12-24 12:53:40'),
(8, 'Mr. Mujibul Haque vital role for the company in relation to managing the work relating to work permit  & renewal, E Visa, PI Visa, On Arrival Visa, VIP Protocol.  Branch Office Registration, SB /NSI Clearance, Security Clearance, Visa renewals License Registrations and Renewal etc. Mr. Mujib also works closely with the firm in order to collect property related search reports including Khatians, Parchas, Mutation Records, Lease Deed, Registration Documents for the Company', 20, NULL, 'advocate', 8, 8568, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 12:58:05', '2020-12-24 13:02:31'),
(9, NULL, 21, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 13:07:41', '2020-12-24 13:07:41'),
(10, 'Advocate Rahman is a young and talented lawyer with expertise in trial courts & service matters. He was offered partnership based on his long list of clientelle and expertise in handling company set-up and licensing related issues in addition to his trial excellence. Mr. Rahman had completed his LLB form the reputed Stamford University. At present, he assists in managing the firm\'s case load and being in charge of trial court cases and lower court advocacy.\r\n\r\n\r\nHe advises several local and international companies on Intellectual Property and brand protection matters.\r\n\r\n\r\n\r\nMr. Rahman is also an expert on family matter litigations & mediations. Apart from his regular work, Mr. Rahman also takes part in pro-bono employment tribunal litigations.', 22, NULL, 'advocate', 10, 2, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-24 13:30:20', '2020-12-24 13:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `b7_clients`
--

CREATE TABLE `b7_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cases` int(11) NOT NULL DEFAULT '0',
  `rating` double(2,2) NOT NULL DEFAULT '0.00',
  `reviews` int(11) NOT NULL DEFAULT '0',
  `blocked` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b7_clients`
--

INSERT INTO `b7_clients` (`id`, `user_id`, `cases`, `rating`, `reviews`, `blocked`, `created_at`, `updated_at`) VALUES
(1, 23, 0, 0.00, 0, 0, '2020-12-25 01:06:11', '2020-12-25 01:06:11'),
(2, 24, 0, 0.00, 0, 0, '2020-12-25 01:29:14', '2020-12-25 01:29:14'),
(3, 25, 0, 0.00, 0, 0, '2020-12-25 01:33:50', '2020-12-25 01:33:50'),
(4, 26, 0, 0.00, 0, 0, '2020-12-25 02:00:46', '2020-12-25 02:00:46'),
(5, 27, 0, 0.00, 0, 0, '2020-12-25 02:04:53', '2020-12-25 02:04:53'),
(6, 28, 0, 0.00, 0, 0, '2020-12-25 02:12:45', '2020-12-25 02:12:45'),
(7, 29, 0, 0.00, 0, 0, '2020-12-25 02:53:57', '2020-12-25 02:53:57'),
(8, 30, 0, 0.00, 0, 0, '2020-12-25 03:02:22', '2020-12-25 03:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `b8_casefiles`
--

CREATE TABLE `b8_casefiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_identity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('civil','family','criminal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_type` enum('prosecutor','defendant') COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `lawyer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `court_id` bigint(20) UNSIGNED NOT NULL,
  `result` enum('waiting','running','won','lost') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b8_casefiles`
--

INSERT INTO `b8_casefiles` (`id`, `case_identity`, `description`, `type`, `client_type`, `client_id`, `lawyer_id`, `court_id`, `result`, `created_at`, `updated_at`) VALUES
(1, 'tajul-001', 'A tenant in a duplex owned by Shakil, filed a civil lawsuit against her landlord, claiming he had not given her enough notice before raising her rent, citing a new state law that requires a minimum of 90 days’ notice. Shakil argues that the new law applies only to landlords of large multi-tenant properties. When the state court hearing the case reviews the law, he finds that, while it mentions large multi-tenant properties in some context, it is actually quite vague about whether the 90-day provision applies to all landlords. The judge, based on the specific circumstances of Tajul’s case, decides that all landlords are held to the 90-day notice requirement, and rules in Tajul’s favor.\r\n\r\nA year later, Frank and Adel have a similar problem. When they sue their landlord, the court must use the previous court’s decision in applying the law. This example of case law refers to two cases heard in the state court, at the same level. The ruling of the first court created case law that must be followed by other courts until or unless either new law is created, or a higher court rules differently.', 'criminal', 'prosecutor', 1, NULL, 11, 'waiting', '2020-12-25 02:31:33', '2020-12-25 02:31:33'),
(2, 'hasan-002', 'It took nine years and three trips to the Sixth Circuit U.S. Court of Appeals, but clinic students stopped the deportation of a mentally retarded man who had come to the United States with his family at age 14 and lived here for 33 years. Nearly 40 students worked on the case in the Immigration Court, the Board of Immigration Appeals, the Federal District Court in Detroit, and the Sixth Circuit in Cincinnati. At the final hearing, the immigration judge granted a waiver of deportation, restoring the client\'s permanent resident status. Students are now helping the client gain U.S. citizenship.', 'civil', 'prosecutor', 2, NULL, 1, 'waiting', '2020-12-25 02:33:57', '2020-12-25 02:33:57'),
(3, 'nishat-003', 'Nishat is no ordinary farmer. As part of the growing national movement to find a more environmentally friendly and sustainable way of life, Tasnim began raising goats and chickens on his 1/10th-acre lot in downtown Ypsilanti, Michigan. He did this to bring attention to the movement and as a challenge to a city ordinance that prohibited such activities. Students litigated issues of first impression through the trial and appellate process while Tasnim and others continued to press the city to permit urban farming. Using the leverage of the lawsuit and public support for Tasnim\'s activities, the city ultimately changed its ordinance permitting residents to raise chickens and bees within city limits. Tasnim aptly noted that \"the case helped generate support for, and raise awareness of, urban agriculture while, at the same time, giving students a tremendous learning opportunity serving the behind-the-scenes needs of a significant social movement.\"', 'civil', 'prosecutor', 3, NULL, 6, 'waiting', '2020-12-25 02:44:02', '2020-12-25 02:44:02'),
(4, 'suraiya-005', 'Civil-Criminal Litigation Clinic students came to the aid of a woman who wanted to clear up a criminal misdemeanor bench warrant. After investigation, students found that she had not one, but at least seven bench warrants for misdemeanors, mostly traffic offenses, going back many years. Her student attorneys tackled her cases one by one, appearing in three different courts more than a dozen times. They eventually secured placement for her in an alternative program. Through creativity and persistence, they helped the client resolve the outstanding cases in a way that permitted her to keep working to support her family.', 'civil', 'prosecutor', 4, NULL, 1, 'waiting', '2020-12-25 02:45:39', '2020-12-25 02:45:39'),
(5, 'rifat-007', 'The clinic persuaded a federal district court that a state prisoner had been unconstitutionally denied effective assistance of counsel. The state appealed and the students not only wrote the brief to the Sixth Circuit, which covered questions of constitutional law and complex habeas procedure, but one student also co-argued the case. The three-judge panel of the Sixth Circuit reversed the district court\'s grant of the habeas petition. Undeterred, a new student attorney filed a motion for rehearing en banc, which was granted. With the assistance of students, the case was re-argued in front of the entire Sixth Circuit, which ultimately granted the habeas petition. Since his release from prison, the client is busy taking care of his elderly parents and playing with his grandkids.', 'family', 'prosecutor', 5, NULL, 7, 'waiting', '2020-12-25 02:47:33', '2020-12-25 02:47:33'),
(6, 'binte-009', 'A 20-year-old woman came to the clinic after fleeing her home country under threat of genital mutilation in preparation for a forced marriage to a 60-year-old man. Students conducted an exhaustive investigation and obtained statements from multiple witnesses and experts. Based on that work, students prepared and filed an application for asylum, tackling novel legal issues and showing that their client would not be protected by her government if she were forced to return to her homeland. The client was granted asylum and enjoys her new life in the United States.', 'criminal', 'prosecutor', 6, NULL, 5, 'waiting', '2020-12-25 02:51:08', '2020-12-25 02:51:08'),
(7, 'khaleda-012', 'A disabled woman in her sixties was faced with a tax foreclosure on the home she had inherited from her mother. Clinic students filed a probate court action to give her clear title to the home and persuaded government authorities that she was eligible for property tax reductions. With clear title and reduced taxes, the woman was able to keep her home. In another case, an elderly woman suffering from a mental disability was referred to the clinic by a community organization because she had been evicted. Clinic students determined that the eviction was invalid and brought a motion to set aside the eviction. Using their investigation and legal research, students were able to negotiate a settlement in which the landlord agreed to move the client into a new apartment.', 'criminal', 'defendant', 7, NULL, 6, 'waiting', '2020-12-25 02:54:37', '2020-12-25 02:54:37'),
(8, 'fakir-006', 'A prisoner got into an argument with staff over a grievance he had filed about slow mail service. Within days he was transferred to a prison in the Upper Peninsula, 250 miles from his family. The transfer interrupted his therapy, which was required for his upcoming parole. Students took the case to federal district court, alleging that the transfer was in retaliation for the exercise of First Amendment rights. They deposed the staff and supervisors at both prisons, subpoenaed all the transfer records, and used that evidence to defeat the state\'s motion for summary judgment. The case settled for $25,000, even though the prisoner had been returned to the first prison after just 10 days.', 'criminal', 'defendant', 8, NULL, 8, 'waiting', '2020-12-25 03:03:01', '2020-12-25 03:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `b9_feedbacks`
--

CREATE TABLE `b9_feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `feedback` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b10_notices`
--

CREATE TABLE `b10_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_bn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c1_requests`
--

CREATE TABLE `c1_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` enum('pending','accepted','rejected','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `lawyer_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `casefile_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c2_ratings`
--

CREATE TABLE `c2_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `taker_id` bigint(20) UNSIGNED NOT NULL,
  `giver_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c3_reviews`
--

CREATE TABLE `c3_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `taker_id` bigint(20) UNSIGNED NOT NULL,
  `giver_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c4_educations`
--

CREATE TABLE `c4_educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ssc_year` smallint(6) DEFAULT NULL,
  `ssc_result` double(8,2) DEFAULT NULL,
  `ssc_board_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hsc_year` smallint(6) DEFAULT NULL,
  `hsc_result` double(8,2) DEFAULT NULL,
  `hsc_board_id` bigint(20) UNSIGNED DEFAULT NULL,
  `degree_year` smallint(6) DEFAULT NULL,
  `degree_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uni` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree_result` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c4_educations`
--

INSERT INTO `c4_educations` (`id`, `user_id`, `ssc_year`, `ssc_result`, `ssc_board_id`, `hsc_year`, `hsc_result`, `hsc_board_id`, `degree_year`, `degree_category_id`, `uni`, `sub`, `degree_result`, `created_at`, `updated_at`) VALUES
(1, 13, NULL, NULL, NULL, NULL, NULL, NULL, 2007, 23, 'City University of London', 'LL.M', 3.94, '2020-12-24 11:13:21', '2020-12-24 12:04:44'),
(2, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-24 11:41:14', '2020-12-24 11:41:14'),
(3, 15, NULL, NULL, NULL, NULL, NULL, NULL, 2020, 13, 'University of London', 'LLB', 3.50, '2020-12-24 11:46:04', '2020-12-24 11:54:37'),
(4, 16, NULL, NULL, NULL, NULL, NULL, NULL, 2012, 13, 'Uttara University', 'LL.B', 3.23, '2020-12-24 12:18:21', '2020-12-24 12:22:11'),
(5, 17, NULL, NULL, NULL, NULL, NULL, NULL, 2019, 23, 'university of dhaka', 'LL.M', 3.83, '2020-12-24 12:27:06', '2020-12-24 12:32:37'),
(6, 18, NULL, NULL, NULL, NULL, NULL, NULL, 2015, 23, 'agricultural university', 'LL.M', 3.11, '2020-12-24 12:37:19', '2020-12-24 12:46:05'),
(7, 19, NULL, NULL, NULL, NULL, NULL, NULL, 2014, 23, 'BUBT', 'LL.M', 3.00, '2020-12-24 12:50:26', '2020-12-24 12:53:32'),
(8, 20, NULL, NULL, NULL, NULL, NULL, NULL, 2000, 13, 'university of barisal', 'Bachelor of Arts', 3.44, '2020-12-24 12:58:05', '2020-12-24 13:02:31'),
(9, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-24 13:07:41', '2020-12-24 13:07:41'),
(10, 22, NULL, NULL, NULL, NULL, NULL, NULL, 2010, 23, 'Stamford University', 'LL.M', 3.56, '2020-12-24 13:30:20', '2020-12-24 13:35:27'),
(11, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-25 01:06:11', '2020-12-25 01:06:11'),
(12, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-25 01:29:14', '2020-12-25 01:29:14'),
(13, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-25 01:33:50', '2020-12-25 01:33:50'),
(14, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-25 02:00:46', '2020-12-25 02:00:46'),
(15, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-25 02:04:53', '2020-12-25 02:04:53'),
(16, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-25 02:12:45', '2020-12-25 02:12:45'),
(17, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-25 02:53:57', '2020-12-25 02:53:57'),
(18, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-25 03:02:22', '2020-12-25 03:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_11_30_092658_create_divisions_table', 1),
(2, '2020_11_30_092803_create_districts_table', 1),
(3, '2020_11_30_092819_create_cities_table', 1),
(4, '2020_11_30_092820_create_specialties_table', 1),
(5, '2020_11_30_092821_create_court_divisions_table', 1),
(6, '2020_11_30_092821_create_users_table', 2),
(7, '2020_11_30_092822_create_password_resets_table', 2),
(8, '2020_11_30_092823_create_failed_jobs_table', 2),
(9, '2020_11_30_092824_create_messages_table', 2),
(10, '2020_11_30_092825_create_favorites_table', 2),
(23, '2020_11_30_092826_create_courts_table', 3),
(24, '2020_11_30_092827_create_faqs_table', 3),
(27, '2020_11_30_092830_create_admins_table', 3),
(28, '2020_11_30_092831_create_lawyers_table', 3),
(29, '2020_11_30_092832_create_clients_table', 3),
(30, '2020_11_30_092833_create_case_files_table', 3),
(31, '2020_11_30_092834_create_feedback_table', 3),
(32, '2020_11_30_092835_create_notices_table', 3),
(33, '2020_11_30_092836_create_requests_table', 4),
(34, '2020_12_04_160055_create_cache_table', 4),
(38, '2020_11_30_092837_create_ratings_table', 5),
(39, '2020_11_30_092838_create_reviews_table', 5),
(49, '2020_12_21_122104_create_degree_levels_table', 6),
(50, '2020_12_21_122324_create_degree_categories_table', 7),
(55, '2020_12_22_043638_create_boards_table', 8),
(58, '2020_12_22_043740_create_education_table', 9);

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
-- Indexes for table `a03_cities`
--
ALTER TABLE `a03_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a03_cities_district_id_foreign` (`district_id`);

--
-- Indexes for table `a04_specialties`
--
ALTER TABLE `a04_specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a05_court_divisions`
--
ALTER TABLE `a05_court_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a06_degree_levels`
--
ALTER TABLE `a06_degree_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a07_degree_categories`
--
ALTER TABLE `a07_degree_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a07_degree_categories_degree_level_id_foreign` (`degree_level_id`);

--
-- Indexes for table `a08_boards`
--
ALTER TABLE `a08_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a1_users`
--
ALTER TABLE `a1_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `a1_users_email_unique` (`email`),
  ADD KEY `a1_users_district_id_foreign` (`district_id`);

--
-- Indexes for table `a2_password_resets`
--
ALTER TABLE `a2_password_resets`
  ADD KEY `a2_password_resets_email_index` (`email`);

--
-- Indexes for table `a3_failed_jobs`
--
ALTER TABLE `a3_failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a4_messages`
--
ALTER TABLE `a4_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a5_favorites`
--
ALTER TABLE `a5_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b1_courts`
--
ALTER TABLE `b1_courts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b1_courts_court_division_id_foreign` (`court_division_id`),
  ADD KEY `b1_courts_district_id_foreign` (`district_id`);

--
-- Indexes for table `b2_faqs`
--
ALTER TABLE `b2_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b5_admins`
--
ALTER TABLE `b5_admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b5_admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `b6_lawyers`
--
ALTER TABLE `b6_lawyers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b6_lawyers_court_id_foreign` (`court_id`),
  ADD KEY `b6_lawyers_specialties_id_foreign` (`specialties_id`),
  ADD KEY `b6_lawyers_user_id_foreign` (`user_id`);

--
-- Indexes for table `b7_clients`
--
ALTER TABLE `b7_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b7_clients_user_id_foreign` (`user_id`);

--
-- Indexes for table `b8_casefiles`
--
ALTER TABLE `b8_casefiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b8_casefiles_client_id_foreign` (`client_id`),
  ADD KEY `b8_casefiles_court_id_foreign` (`court_id`),
  ADD KEY `b8_casefiles_lawyer_id_foreign` (`lawyer_id`);

--
-- Indexes for table `b9_feedbacks`
--
ALTER TABLE `b9_feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b10_notices`
--
ALTER TABLE `b10_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c1_requests`
--
ALTER TABLE `c1_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c1_requests_client_id_foreign` (`client_id`),
  ADD KEY `c1_requests_casefile_id_foreign` (`casefile_id`),
  ADD KEY `c1_requests_lawyer_id_foreign` (`lawyer_id`);

--
-- Indexes for table `c2_ratings`
--
ALTER TABLE `c2_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c2_ratings_giver_id_foreign` (`giver_id`),
  ADD KEY `c2_ratings_taker_id_foreign` (`taker_id`);

--
-- Indexes for table `c3_reviews`
--
ALTER TABLE `c3_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c3_reviews_taker_id_foreign` (`taker_id`),
  ADD KEY `c3_reviews_giver_id_foreign` (`giver_id`);

--
-- Indexes for table `c4_educations`
--
ALTER TABLE `c4_educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c4_educations_user_id_foreign` (`user_id`),
  ADD KEY `c4_educations_ssc_board_id_foreign` (`ssc_board_id`),
  ADD KEY `c4_educations_hsc_board_id_foreign` (`hsc_board_id`),
  ADD KEY `c4_educations_degree_category_id_foreign` (`degree_category_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `a03_cities`
--
ALTER TABLE `a03_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a04_specialties`
--
ALTER TABLE `a04_specialties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `a05_court_divisions`
--
ALTER TABLE `a05_court_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `a06_degree_levels`
--
ALTER TABLE `a06_degree_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `a07_degree_categories`
--
ALTER TABLE `a07_degree_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `a08_boards`
--
ALTER TABLE `a08_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `a1_users`
--
ALTER TABLE `a1_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `a3_failed_jobs`
--
ALTER TABLE `a3_failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b1_courts`
--
ALTER TABLE `b1_courts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `b2_faqs`
--
ALTER TABLE `b2_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b5_admins`
--
ALTER TABLE `b5_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b6_lawyers`
--
ALTER TABLE `b6_lawyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `b7_clients`
--
ALTER TABLE `b7_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `b8_casefiles`
--
ALTER TABLE `b8_casefiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `b9_feedbacks`
--
ALTER TABLE `b9_feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b10_notices`
--
ALTER TABLE `b10_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c1_requests`
--
ALTER TABLE `c1_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c2_ratings`
--
ALTER TABLE `c2_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c3_reviews`
--
ALTER TABLE `c3_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c4_educations`
--
ALTER TABLE `c4_educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `a02_districts`
--
ALTER TABLE `a02_districts`
  ADD CONSTRAINT `a02_districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `a01_divisions` (`id`);

--
-- Constraints for table `a03_cities`
--
ALTER TABLE `a03_cities`
  ADD CONSTRAINT `a03_cities_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `a02_districts` (`id`);

--
-- Constraints for table `a07_degree_categories`
--
ALTER TABLE `a07_degree_categories`
  ADD CONSTRAINT `a07_degree_categories_degree_level_id_foreign` FOREIGN KEY (`degree_level_id`) REFERENCES `a06_degree_levels` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `a1_users`
--
ALTER TABLE `a1_users`
  ADD CONSTRAINT `a1_users_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `a02_districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `b1_courts`
--
ALTER TABLE `b1_courts`
  ADD CONSTRAINT `b1_courts_court_division_id_foreign` FOREIGN KEY (`court_division_id`) REFERENCES `a05_court_divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `b1_courts_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `a02_districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `b5_admins`
--
ALTER TABLE `b5_admins`
  ADD CONSTRAINT `b5_admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `b6_lawyers`
--
ALTER TABLE `b6_lawyers`
  ADD CONSTRAINT `b6_lawyers_court_id_foreign` FOREIGN KEY (`court_id`) REFERENCES `b1_courts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `b6_lawyers_specialties_id_foreign` FOREIGN KEY (`specialties_id`) REFERENCES `a04_specialties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `b6_lawyers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `b7_clients`
--
ALTER TABLE `b7_clients`
  ADD CONSTRAINT `b7_clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `b8_casefiles`
--
ALTER TABLE `b8_casefiles`
  ADD CONSTRAINT `b8_casefiles_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `b7_clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `b8_casefiles_court_id_foreign` FOREIGN KEY (`court_id`) REFERENCES `b1_courts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `b8_casefiles_lawyer_id_foreign` FOREIGN KEY (`lawyer_id`) REFERENCES `b6_lawyers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `c1_requests`
--
ALTER TABLE `c1_requests`
  ADD CONSTRAINT `c1_requests_casefile_id_foreign` FOREIGN KEY (`casefile_id`) REFERENCES `b8_casefiles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c1_requests_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `b7_clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c1_requests_lawyer_id_foreign` FOREIGN KEY (`lawyer_id`) REFERENCES `b6_lawyers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `c2_ratings`
--
ALTER TABLE `c2_ratings`
  ADD CONSTRAINT `c2_ratings_giver_id_foreign` FOREIGN KEY (`giver_id`) REFERENCES `b7_clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c2_ratings_taker_id_foreign` FOREIGN KEY (`taker_id`) REFERENCES `b6_lawyers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `c3_reviews`
--
ALTER TABLE `c3_reviews`
  ADD CONSTRAINT `c3_reviews_giver_id_foreign` FOREIGN KEY (`giver_id`) REFERENCES `b7_clients` (`id`),
  ADD CONSTRAINT `c3_reviews_taker_id_foreign` FOREIGN KEY (`taker_id`) REFERENCES `b6_lawyers` (`id`);

--
-- Constraints for table `c4_educations`
--
ALTER TABLE `c4_educations`
  ADD CONSTRAINT `c4_educations_degree_category_id_foreign` FOREIGN KEY (`degree_category_id`) REFERENCES `a07_degree_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c4_educations_hsc_board_id_foreign` FOREIGN KEY (`hsc_board_id`) REFERENCES `a08_boards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c4_educations_ssc_board_id_foreign` FOREIGN KEY (`ssc_board_id`) REFERENCES `a08_boards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c4_educations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
