-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 07:30 AM
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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$MHJ9PzcQqYtedK.l.lw33.aIvDcsCDGmF72kkObbe8eM1qMBGSu5y', 'avatar.png', '#2180f3', 0, 0, '01900000000', 'admin', 'Dhaka', 'male', '1995-10-01', NULL, NULL, '2020-12-11 03:11:43', '2020-12-11 03:11:43'),
(2, 'Abul Kashem', 'abul.kashem@gmail.com', NULL, '$2y$10$1aZOlGB6BOzd4BcGdEPSi.MUfZvG34oEZMnx.5ysxV2e2jz15l0Bi', '710bbfdb-3fa5-4828-be30-ce35e2feeb1f.jpg', '#2180f3', 0, 0, '01700000000', 'lawyer', 'Firmgate', 'male', '1995-10-10', 20, NULL, '2020-12-11 04:18:05', '2020-12-12 02:46:34'),
(3, 'Farhan Khan', 'farhan@gmail.com', NULL, '$2y$10$S1GfeVPwSPtdG.yJX2hFFOQfpkVDECDeFiunJOdAUkI1efZHciem2', 'c10e4ec4-638c-49f2-b773-8e1d4d5e6fc5.gif', '#2180f3', 0, 0, '01600000000', 'client', 'Dhalapara', 'male', '1995-10-01', 58, NULL, '2020-12-12 01:49:39', '2020-12-12 03:49:54'),
(4, 'Abdul Mannan', 'abdul.mannan@gmail.com', NULL, '$2y$10$tjS.iWYCfNRhvxGD5zviSeQn580pXkmOCu1a2qcmXG30DamDTpnBS', 'avatar.png', '#2180f3', 0, 0, '01500000000', 'lawyer', 'Circular road', 'male', '1990-12-16', 55, NULL, '2020-12-13 09:28:48', '2020-12-13 09:28:48');

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
(1817118954, 'user', 3, 3, '', '37ddaa25-2d5c-4c46-a50b-f46848bd223a.JPG,m_1.JPG', 1, '2020-12-12 03:03:24', '2020-12-12 03:03:25'),
(1970447783, 'user', 3, 3, '', '8db8a219-ae0e-447a-b3a4-e2dffcfffcf6.zip,first.zip', 1, '2020-12-12 03:09:12', '2020-12-12 03:09:12');

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
  `type` enum('advocate','judge','magistrate','barrister') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialties_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ratings` bigint(20) NOT NULL DEFAULT '0',
  `reviews` int(11) NOT NULL DEFAULT '0',
  `cases` int(11) NOT NULL DEFAULT '0',
  `success_rate` double(3,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b6_lawyers`
--

INSERT INTO `b6_lawyers` (`id`, `profile_bio`, `user_id`, `court_id`, `type`, `specialties_id`, `ratings`, `reviews`, `cases`, `success_rate`, `created_at`, `updated_at`) VALUES
(1, 'asda sddfdfgdf gdfgdfgsdfgsdfsdfsdasdasd dfdfgdfgdfgd fgsdfgsd fsdfsdasd a sdd f dfgdfgdfg dfgsdf gsdfsdfsdas dasddfdfgd fgdfgdfgs dfgsdfsdfsdas dasdd  fdfgdfgdf gdfgsdfgsdfsdf sdasdasddfd fgdfgdfgdfgsdfgsdfs dfsdasdasddfdfg dfgdfgdfg s g df g sdf gsdfsd fsdasdasddfdfgdfgdf gdfgsdfg sdf sdf sdasdasd dfdfgdfg dfgdfgsdfgsdfsdf sdasdasddfdfgdfg dfgdfgsdfgsdfsdf sd asdasddf df gdfgdfgdfgsdfgsdfsdf sdasda  sddfdfgdfgdfgdfgsd fgs dfs dfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdf  gdfgdfgdfgsdfgs dfsdfsd asdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdas   ddfdfgdfgdfgdfg \r\n dfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasda sd dfdfgdfg dfgdfgsdfg sdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdf gdfgdfgdfgsdfgsdfs dfsdasdasddfdf gdfgdfgdfgsdfgsdfs dfsdasda \r\n sddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdf gdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsd fsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdf gsdfs dfsdasd asddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfg sdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfg dfgdfgsdfgsdfs dfsdasdasd dfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfg sdf sdfsdasdasddfdfg dfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdf gdfgdfgdfg sdfgsdfsdfsdasdasddfdfgd fgdfgdfgsdfgsdf sdfsdasdasddfdfgd fgdfgdfgsdfgsdfsdfsdasdasddfdf gd fgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasd   asddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgs df  gsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdf gdfgdf gdfg s dfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdf gdfgsdfgsdfsdfsdas dasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgd fg dfgsdfg sdfsdfsdasdasddfdfg dfgdfgdfgsdf  gsdfsdfsdasdasddfdf gdfgdfgdfgsdf gsdfsdfsd asdasddfdfg   dfgdfgdfgsdf gsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfs dfsda sdasddfdfgdfgdfgdfg sdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfg  sdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfg sdfgsdfsdfsdasdasddf \r\n dfgdfgdfgdfgsd fgsdfsdfsdasdasdd  dasdasddfdfgdfgdfgdfgsdfgsd \r\n  fgdfgsdfgsdfsdfsd asdasddfdfgdfgd  sddfd fgdfgdfgdf gsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdf sdasdas dfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdfgsdfgsdfsdfsdasdasddfdfgdfgdfgdf g dfgsd fsdfsda dasddfdfgdfgdfg dfgsdfg sdfsdfsd asdas  dd fdfgdfgdfgdfgsd  fgsdfsdf sdasdas ddfdfgdfgdfgdfgsdfgsdfsd fsdasdasddfdfgdfgdfgdf   ', 2, NULL, 'judge', 1, 0, 0, 0, 0.00, '2020-12-11 04:18:05', '2020-12-12 01:28:33'),
(2, NULL, 4, NULL, NULL, NULL, 0, 0, 0, 0.00, '2020-12-13 09:28:48', '2020-12-13 09:28:48');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b7_clients`
--

INSERT INTO `b7_clients` (`id`, `user_id`, `cases`, `rating`, `reviews`, `created_at`, `updated_at`) VALUES
(1, 3, 0, 0.00, 0, '2020-12-12 01:49:39', '2020-12-12 01:49:39');

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
(3, 'xdxc', 'vxcvxcvxcv', 'criminal', 'defendant', 1, 1, 1, 'running', '2020-12-12 09:59:52', '2020-12-13 10:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `b9_feedbacks`
--

CREATE TABLE `b9_feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b9_feedbacks`
--

INSERT INTO `b9_feedbacks` (`id`, `name`, `email`, `contact`, `subject`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'Farhan Zaman Khan', 'farha100669@gmail.com', '01625975405', 'background', 'i dont like the background, please change it', '2020-12-13 00:26:22', '2020-12-13 00:26:22');

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
(11, 'accepted', 1, 1, 3, '2020-12-13 09:27:20', '2020-12-13 10:17:20');

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
(4, 5, 'asfasfdasfasfa', 1, 1, '2020-12-13 17:08:33', '2020-12-13 22:32:32'),
(5, 3, NULL, 2, 1, '2020-12-13 22:32:47', '2020-12-13 22:40:05');

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
(39, '2020_11_30_092838_create_reviews_table', 5);

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
-- AUTO_INCREMENT for table `a1_users`
--
ALTER TABLE `a1_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b8_casefiles`
--
ALTER TABLE `b8_casefiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `b9_feedbacks`
--
ALTER TABLE `b9_feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `c3_reviews`
--
ALTER TABLE `c3_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
