-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 07:25 AM
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
(2, 'Abul Kashem', 'abul.kashem@gmail.com', NULL, '$2y$10$1aZOlGB6BOzd4BcGdEPSi.MUfZvG34oEZMnx.5ysxV2e2jz15l0Bi', '664a97de-fb05-45f7-ae68-8faf8baecad5.jpg', '#9C27B0', 0, 0, '01700000000', 'lawyer', 'Firmgate', 'male', '1995-10-10', 20, NULL, '2020-12-11 04:18:05', '2020-12-17 10:18:04'),
(3, 'Farhan Khan', 'farhan@gmail.com', NULL, '$2y$10$S1GfeVPwSPtdG.yJX2hFFOQfpkVDECDeFiunJOdAUkI1efZHciem2', 'c10e4ec4-638c-49f2-b773-8e1d4d5e6fc5.gif', '#2180f3', 0, 0, '01600000000', 'client', 'Dhalapara', 'male', '1995-10-01', 58, NULL, '2020-12-12 01:49:39', '2020-12-12 03:49:54'),
(4, 'Abdul Mannan', 'abdul.mannan@gmail.com', NULL, '$2y$10$tjS.iWYCfNRhvxGD5zviSeQn580pXkmOCu1a2qcmXG30DamDTpnBS', '082d528e-18b4-4a89-8320-552b5540d205.jpg', '#2180f3', 1, 0, '01500000000', 'lawyer', 'Circular road', 'male', '1990-12-16', 55, NULL, '2020-12-13 09:28:48', '2020-12-20 09:48:13'),
(5, 'Farhan Khan', 'farhan.etolet@gmail.com', NULL, '$2y$10$zl3hfoEhciQbqX4bHg3nKetS1yZD5CS8d9aYTVIjvfkyEaE/rO/5y', 'avatar.png', '#2180f3', 0, 0, '01625975405', 'client', 'Signboard, Sahebpara', 'male', '1995-01-10', 11, '92U14Eeh3vCV8pHPK3UYjPwdMtEpBT3va4dX2A3imm6epENiHEKvSYJPtBfe', '2020-12-18 04:17:29', '2020-12-18 09:57:37'),
(6, 'test', 'test@gmail.com', NULL, '$2y$10$c29.QkHw9xSjMlDdHCMdy.s/vPS6Q8EIRyzqvM8iuP95xmIfHwPnS', 'avatar.png', '#2180f3', 0, 0, '12312312312312', 'client', 'sdfwfsd', 'male', '1990-10-17', 36, NULL, '2020-12-21 08:25:35', '2020-12-21 08:25:35');

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

--
-- Dumping data for table `a4_messages`
--

INSERT INTO `a4_messages` (`id`, `type`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
(1730402146, 'user', 4, 3, 'amne vala ni ?', NULL, 1, '2020-12-18 03:02:50', '2020-12-21 09:40:25'),
(1751259465, 'user', 3, 3, 'রফত্যহ্রত্রত', NULL, 1, '2020-12-17 10:20:57', '2020-12-17 10:20:58'),
(1754569858, 'user', 3, 4, 'মান্নান ভাই ভালানি :p', NULL, 1, '2020-12-17 10:21:26', '2020-12-18 03:01:43'),
(1787257434, 'user', 4, 3, 'mhgvkjb', NULL, 1, '2020-12-20 10:24:52', '2020-12-21 09:40:25'),
(1817118954, 'user', 3, 3, '', '37ddaa25-2d5c-4c46-a50b-f46848bd223a.JPG,m_1.JPG', 1, '2020-12-12 03:03:24', '2020-12-12 03:03:25'),
(1864116362, 'user', 2, 2, 'sdfsd', NULL, 1, '2020-12-17 10:17:01', '2020-12-17 10:17:02'),
(1970447783, 'user', 3, 3, '', '8db8a219-ae0e-447a-b3a4-e2dffcfffcf6.zip,first.zip', 1, '2020-12-12 03:09:12', '2020-12-12 03:09:12'),
(2110092547, 'user', 4, 3, 'ami vala', NULL, 1, '2020-12-18 03:02:44', '2020-12-21 09:40:25'),
(2149365959, 'user', 4, 3, 'dfgdfdfgd', NULL, 1, '2020-12-18 03:02:31', '2020-12-21 09:40:25'),
(2266524545, 'user', 4, 3, '1 2 3', NULL, 1, '2020-12-20 10:24:57', '2020-12-21 09:40:25'),
(2309017505, 'user', 2, 2, 'দস্ফগস্ফদ', NULL, 1, '2020-12-17 10:17:06', '2020-12-17 10:17:07');

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
(1, 'asda sddfdfgdf gdfgdfgsdfgsdfsdfsdasdasd dfdfgdfgdfgd fgsdfgsd fsdfsdasd a sdd f dfgdfgdfg dfgsdf gsdfsdfsdas dasddfdfgd fgdfgdfgs dfgsdfsdfsdas dasdd  fdfgdfgdf gdfgsdfgsdfsdf sdasdasddfd fgdfgdfgdfgsdfgsdfs dfsdasdasddfdfg dfgdfgdfg s g df g sdf gsdfsd fsdasdasddfdfgdfgdf gdfgsdfg sdf sdf sdasdasd dfdfgdfg dfgdfgsdfgsdfsdf sdasdasddfdfgdfg dfgdfgsdfgsdfsdf sd asdasddf df gdfgdfgdfgsdfgsdfsdf sdasda  sddfdfgdfgdfgdfgsd fgs dfs dfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdf  gdfgdfgdfgsdfgs dfsdfsd asdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdas   ddfdfgdfgdfgdfg \r\n dfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasda sd dfdfgdfg dfgdfgsdfg sdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdf gdfgdfgdfgsdfgsdfs dfsdasdasddfdf gdfgdfgdfgsdfgsdfs dfsdasda \r\n sddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdf gdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsd fsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdf gsdfs dfsdasd asddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfg sdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfg dfgdfgsdfgsdfs dfsdasdasd dfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfg sdf sdfsdasdasddfdfg dfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdf gdfgdfgdfg sdfgsdfsdfsdasdasddfdfgd fgdfgdfgsdfgsdf sdfsdasdasddfdfgd fgdfgdfgsdfgsdfsdfsdasdasddfdf gd fgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasd   asddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgs df  gsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdf gdfgdf gdfg s dfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdf gdfgsdfgsdfsdfsdas dasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgd fg dfgsdfg sdfsdfsdasdasddfdfg dfgdfgdfgsdf  gsdfsdfsdasdasddfdf gdfgdfgdfgsdf gsdfsdfsd asdasddfdfg   dfgdfgdfgsdf gsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfs dfsda sdasddfdfgdfgdfgdfg sdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfg  sdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfg sdfgsdfsdfsdasdasddf \r\n dfgdfgdfgdfgsd fgsdfsdfsdasdasdd  dasdasddfdfgdfgdfgdfgsdfgsd \r\n  fgdfgsdfgsdfsdfsd asdasddfdfgdfgd  sddfd fgdfgdfgdf gsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdf sdasdas dfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdf g dfgsd fsdfsda dasddfdfgdfgdfg dfgsdfg sdfsdfsd asdas  dd fdfgdfgdfgdfgsd  fgsdfsdf sdasdas ddfdfgdfgdfgdfgsdfgsdfsd fsdasdasddfdfgdfgdfgdf', 2, NULL, 'advocate', 1, NULL, 0, 0, 0, 2, '30bd7423-4930-4fce-bf3d-0d94e62b0674.jpg', 'd11e9b90-d7ac-4e8f-9aa5-97cc6098c26b.jpg', 0.00, '2020-12-11 04:18:05', '2020-12-17 01:03:15'),
(2, 'I am the best lawyer', 4, NULL, 'barrister', 2, 5454, 0, 0, 0, 0, 'nid_front.png', 'nid_back.png', 0.00, '2020-12-13 09:28:48', '2020-12-21 22:31:26');

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
(1, 3, 0, 0.00, 0, 0, '2020-12-12 01:49:39', '2020-12-12 01:49:39'),
(2, 5, 0, 0.00, 0, 0, '2020-12-18 04:17:29', '2020-12-18 04:17:29'),
(3, 6, 0, 0.00, 0, 0, '2020-12-21 08:25:35', '2020-12-21 08:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `b8_casefiles`
--

CREATE TABLE `b8_casefiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_identity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
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
(2, 'familycase-101', 'sdfgsdfsdfsdf kj bj n lnlk  nj njn  kjnkjl nkj jbn kbk buj nbjln jln ljkn ljn jln ljnlj njlk njl bjlbn ljnb jlnlj nlnnl sdfgsdfsdfsdf kj bj n lnlk  nj njn  kjnkjl nkj jbn kbk buj nbjln jln ljkn ljn jln ljnlj njlk njl bjlbn ljnb jlnlj nlnnl sdfgsdfsdfsdf kj bj n lnlk  nj njn  kjnkjl nkj jbn kbk buj nbjln jln ljkn ljn jln ljnlj njlk njl bjlbn ljnb jlnlj nlnnl sdfgsdfsdfsdf kj bj n lnlk  nj njn  kjnkjl nkj jbn kbk buj nbjln jln ljkn ljn jln ljnlj njlk njl bjlbn ljnb jlnlj nlnnl sdfgsdfsdfsdf kj bj n lnlk  nj njn  kjnkjl nkj jbn kbk buj nbjln jln ljkn ljn jln ljnlj njlk njl bjlbn ljnb jlnlj nlnnl sdfgsdfsdfsdf kj bj n lnl', 'family', 'prosecutor', 1, 1, 7, 'won', '2020-12-12 07:54:52', '2020-12-12 12:51:16'),
(3, 'xdxc', 'vxcvxcvxcv', 'criminal', 'defendant', 1, 1, 1, 'lost', '2020-12-12 09:59:52', '2020-12-16 10:43:01');

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
  `feedback` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b9_feedbacks`
--

INSERT INTO `b9_feedbacks` (`id`, `name`, `email`, `contact`, `subject`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'Farhan Zaman Khan', 'farha100669@gmail.com', '01625975405', 'background', 'i dont like the background, please change it', '2020-12-13 00:26:22', '2020-12-13 00:26:22'),
(2, 'Farhan Zaman Khan', 'farha100669@gmail.com', NULL, 'nmvbnm', 'bnmbnmbn', '2020-12-20 14:16:34', '2020-12-20 14:16:34');

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

--
-- Dumping data for table `b10_notices`
--

INSERT INTO `b10_notices` (`id`, `title`, `details`, `title_bn`, `details_bn`, `created_at`, `updated_at`) VALUES
(1, 'title', 'details', 'title bangla', 'details bangla', '2020-12-13 01:24:00', '2020-12-13 01:24:00');

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

--
-- Dumping data for table `c1_requests`
--

INSERT INTO `c1_requests` (`id`, `state`, `lawyer_id`, `client_id`, `casefile_id`, `created_at`, `updated_at`) VALUES
(10, 'closed', 1, 1, 2, '2020-12-12 09:55:12', '2020-12-12 12:51:16'),
(11, 'closed', 1, 1, 3, '2020-12-13 09:27:20', '2020-12-16 10:43:01');

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

--
-- Dumping data for table `c2_ratings`
--

INSERT INTO `c2_ratings` (`id`, `value`, `text`, `taker_id`, `giver_id`, `created_at`, `updated_at`) VALUES
(6, 3, 'dfgdfgd', 1, 1, '2020-12-20 12:43:01', '2020-12-20 12:43:01'),
(7, 4, 'azsfdasdasdas', 2, 1, '2020-12-20 12:50:54', '2020-12-20 12:52:32');

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
(1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 4, 2011, 4.94, 4, 2013, 5.00, 4, 2019, 18, 'KUET', 'ECE', 2.79, NULL, '2020-12-21 23:35:32'),
(4, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(56, '2020_12_22_043740_create_education_table', 8);

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
  ADD KEY `b6_lawyers_user_id_foreign` (`user_id`),
  ADD KEY `b6_lawyers_court_id_foreign` (`court_id`),
  ADD KEY `b6_lawyers_specialties_id_foreign` (`specialties_id`);

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
  ADD KEY `c1_requests_casefile_id_foreign` (`casefile_id`),
  ADD KEY `c1_requests_client_id_foreign` (`client_id`),
  ADD KEY `c1_requests_lawyer_id_foreign` (`lawyer_id`);

--
-- Indexes for table `c2_ratings`
--
ALTER TABLE `c2_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c2_ratings_taker_id_foreign` (`taker_id`),
  ADD KEY `c2_ratings_giver_id_foreign` (`giver_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `b7_clients`
--
ALTER TABLE `b7_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `b8_casefiles`
--
ALTER TABLE `b8_casefiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `b9_feedbacks`
--
ALTER TABLE `b9_feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `b10_notices`
--
ALTER TABLE `b10_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c1_requests`
--
ALTER TABLE `c1_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `c2_ratings`
--
ALTER TABLE `c2_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `c3_reviews`
--
ALTER TABLE `c3_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c4_educations`
--
ALTER TABLE `c4_educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
  ADD CONSTRAINT `a1_users_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `a02_districts` (`id`);

--
-- Constraints for table `b1_courts`
--
ALTER TABLE `b1_courts`
  ADD CONSTRAINT `b1_courts_court_division_id_foreign` FOREIGN KEY (`court_division_id`) REFERENCES `a05_court_divisions` (`id`),
  ADD CONSTRAINT `b1_courts_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `a02_districts` (`id`);

--
-- Constraints for table `b5_admins`
--
ALTER TABLE `b5_admins`
  ADD CONSTRAINT `b5_admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`);

--
-- Constraints for table `b6_lawyers`
--
ALTER TABLE `b6_lawyers`
  ADD CONSTRAINT `b6_lawyers_court_id_foreign` FOREIGN KEY (`court_id`) REFERENCES `b1_courts` (`id`),
  ADD CONSTRAINT `b6_lawyers_specialties_id_foreign` FOREIGN KEY (`specialties_id`) REFERENCES `a04_specialties` (`id`),
  ADD CONSTRAINT `b6_lawyers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`);

--
-- Constraints for table `b7_clients`
--
ALTER TABLE `b7_clients`
  ADD CONSTRAINT `b7_clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`);

--
-- Constraints for table `b8_casefiles`
--
ALTER TABLE `b8_casefiles`
  ADD CONSTRAINT `b8_casefiles_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `b7_clients` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `b8_casefiles_court_id_foreign` FOREIGN KEY (`court_id`) REFERENCES `b1_courts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `b8_casefiles_lawyer_id_foreign` FOREIGN KEY (`lawyer_id`) REFERENCES `b6_lawyers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `c1_requests`
--
ALTER TABLE `c1_requests`
  ADD CONSTRAINT `c1_requests_casefile_id_foreign` FOREIGN KEY (`casefile_id`) REFERENCES `b8_casefiles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c1_requests_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `b7_clients` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c1_requests_lawyer_id_foreign` FOREIGN KEY (`lawyer_id`) REFERENCES `b6_lawyers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `c2_ratings`
--
ALTER TABLE `c2_ratings`
  ADD CONSTRAINT `c2_ratings_giver_id_foreign` FOREIGN KEY (`giver_id`) REFERENCES `b7_clients` (`id`),
  ADD CONSTRAINT `c2_ratings_taker_id_foreign` FOREIGN KEY (`taker_id`) REFERENCES `b6_lawyers` (`id`);

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
  ADD CONSTRAINT `c4_educations_degree_category_id_foreign` FOREIGN KEY (`degree_category_id`) REFERENCES `a07_degree_categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c4_educations_hsc_board_id_foreign` FOREIGN KEY (`hsc_board_id`) REFERENCES `a08_boards` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c4_educations_ssc_board_id_foreign` FOREIGN KEY (`ssc_board_id`) REFERENCES `a08_boards` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `c4_educations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
