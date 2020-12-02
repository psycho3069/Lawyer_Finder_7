-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 06:27 AM
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
(6, 'Kishoregonj', 8, NULL, NULL),
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
(31, 'Gaibandha', 1, NULL, NULL),
(32, 'Joypurhat', 5, NULL, NULL),
(33, 'Kurigram', 5, NULL, NULL),
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
(60, 'HABIGANJ', 7, NULL, NULL),
(61, 'Moulvibazar', 7, NULL, NULL),
(62, 'Sunamgonj', 7, NULL, NULL),
(63, 'Sylhet', 7, NULL, NULL);

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
-- Table structure for table `a1_users`
--

CREATE TABLE `a1_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` char(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `type` enum('admin','lawyer','client') COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '0',
  `dark_mode` tinyint(1) NOT NULL DEFAULT '0',
  `messenger_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a1_users`
--

INSERT INTO `a1_users` (`id`, `name`, `email`, `contact`, `type`, `location`, `gender`, `birthdate`, `active_status`, `dark_mode`, `messenger_color`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@gmail.com', '0', 'admin', 'Dhaka', 'male', NULL, 0, 1, '#ff2522', '6a4c3aae-24eb-4094-8f75-64c4333acdbc.jpg', NULL, '$2y$10$623.z6ZYn5EpGcrazhBvrOJf7kc8EelMeZuinVVfeTorqcDEEDndG', '3EMHYZwYImoMKJ29CW9pTebmqslk2j4CQmKGLSGL1esZ5FMHDuQpbmFbWafW', '2020-10-13 23:07:11', '2020-10-13 23:08:20'),
(6, 'Name', 'name@gmail.com', '12312312312312', 'client', 'Dhaka', 'male', '1991-10-10', 0, 1, '#2180f3', '7220e681-0472-43b3-b9be-4bb3c23e6b79.jpg', NULL, '$2y$10$RCqWjlHhahV8fd3NhASskOKtNZ15eObOOzHRkc1iQk2wQr1UC9bpi', 'z6d0JvGqkEppg3rUeM1Q4lZp1DO9PFLPG6BRtsXd3RM8v6Zjp4Ql1kHL4OhE', '2020-10-14 06:50:55', '2020-11-05 05:18:17'),
(14, 'Test Lawyer', 'test_lawyer@gmail.com', '01705151515', 'lawyer', 'Khulna', 'male', '2000-01-10', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$gIqM.qv44Nc6PaDzU5VWKumP2v1lMhhQBgI2q.pkfbB0DTFZPh/oe', NULL, '2020-10-14 11:24:40', '2020-10-20 04:43:34'),
(15, 'lawyer2', 'lawyer2@gmail.com', '13412312312', 'lawyer', 'Barisal', 'male', '1909-09-09', 0, 1, '#ff2522', 'avatar.png', NULL, '$2y$10$zui3T4Qr2p3kiHtahkrPruZ8LxZgJ.REcFmEeXgyE8DkWH8RBvKtu', NULL, '2020-10-21 09:55:08', '2020-10-30 09:25:51'),
(16, 'client2', 'client2@gmail.com', '7236548132', 'client', 'Khulna', 'female', '1909-09-09', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$iGt7ZaafRT8ahEljuLbjj.897oMd13.W6uMbWbptoWIiHJiOLI8pK', NULL, '2020-10-21 09:55:46', '2020-10-21 09:55:46'),
(17, 'client3', 'client3@gmail.com', '4524457452757', 'client', 'Rangpur', 'male', '1999-10-10', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$sqjpU/uOFZg/I/FGgP4JLeAMgOO5aWsa.8WWDJCcxjESi.oZhutBe', NULL, '2020-11-04 23:53:01', '2020-11-04 23:53:01'),
(18, 'lawyer4', 'lawyer4@gmail.com', '5242442525424', 'lawyer', 'Sylhet', 'female', '1990-12-12', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$jTDaSxtoalVnf3GhVoz5quf0qedrj5VrfsOurL5JhtTnX9xEEiieO', NULL, '2020-11-04 23:53:50', '2020-11-04 23:53:50'),
(19, 'lawyer3', 'lawyer3@gmail.com', '45676767865785', 'lawyer', 'Mymensigh', 'male', '1999-09-09', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$tybSgWX5N/cxgfkPN8pV8emKza2UmLZJft9MIj6YQWsbZ8AnUGDGa', NULL, '2020-11-04 23:56:35', '2020-11-04 23:56:35');

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
(1628901125, 'user', 16, 14, 'jhgiuhui', NULL, 0, '2020-11-25 00:27:13', '2020-11-25 00:27:13'),
(1658144714, 'user', 14, 6, 'you', NULL, 1, '2020-10-30 09:23:47', '2020-11-05 04:45:17'),
(1675356735, 'user', 14, 14, 'hello', NULL, 1, '2020-10-20 09:38:47', '2020-10-20 09:38:50'),
(1846574451, 'user', 6, 14, '', '99fd065e-53a8-4852-98ad-da996e0607f1.jpg,f3b20bd3-e921-4b2b-ae6b-6bca021f434a.jpg', 1, '2020-10-30 09:18:59', '2020-10-30 09:23:31'),
(1886226154, 'user', 1, 1, 'sdrtwsf', NULL, 1, '2020-10-14 07:17:58', '2020-10-14 07:17:59'),
(1907892630, 'user', 6, 14, '', 'fe3a1292-bab3-49e2-a4de-67e1254be0ac.txt,fb page.txt', 1, '2020-10-30 09:19:37', '2020-10-30 09:23:31'),
(1977758737, 'user', 6, 15, 'sxdfsdfsdfsdcgvdfgdfgdfgdfgdfg\r\nd', NULL, 0, '2020-11-16 11:35:18', '2020-11-16 11:35:18'),
(2018000541, 'user', 15, 15, 'fghfdgdfgdf', NULL, 1, '2020-10-30 09:25:15', '2020-10-30 09:25:16'),
(2066576980, 'user', 6, 15, 'sdfsdfs', NULL, 0, '2020-11-16 10:17:29', '2020-11-16 10:17:29'),
(2067617982, 'user', 16, 1, 'rfghdfg', NULL, 0, '2020-10-21 10:00:17', '2020-10-21 10:00:17'),
(2098398445, 'user', 6, 15, 'dfgdfgdfgdfgnkmdbfkjbgkjdnfjgn dnfjngdnfjkgndfg\r\nmsdknfgbjksbdfkjfbsdfkjsb djfbsjbdjfbshkdf\r\nskjdbfsjkb dfbskjdbfkhsbkdbfhksbhdkbfhksbdhkfb\r\nmsd bfkjbskjdfbksbdkfbshkdbfbskdf', NULL, 0, '2020-11-16 11:35:31', '2020-11-16 11:35:31'),
(2122506520, 'user', 14, 6, 'thank', NULL, 1, '2020-10-30 09:23:41', '2020-11-05 04:45:17'),
(2263428331, 'user', 16, 15, 'iujyhiuooi', NULL, 0, '2020-11-25 00:28:24', '2020-11-25 00:28:24'),
(2576855044, 'user', 6, 15, 'fg', NULL, 0, '2020-11-16 11:35:19', '2020-11-16 11:35:19'),
(2596274248, 'user', 15, 15, '', '6094be40-c9d7-4073-9175-410403fee88b.txt,fb page.txt', 1, '2020-10-30 09:25:30', '2020-10-30 09:25:31');

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

--
-- Dumping data for table `a5_favorites`
--

INSERT INTO `a5_favorites` (`id`, `user_id`, `favorite_id`, `created_at`, `updated_at`) VALUES
(2407541, 14, 6, '2020-10-30 09:24:03', '2020-10-30 09:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `b1_courts`
--

CREATE TABLE `b1_courts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('supreme','high','judge','magistrate','tribunale') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b1_courts`
--

INSERT INTO `b1_courts` (`id`, `name`, `location`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka Supreme Court', 'dhaka', 'supreme', NULL, NULL),
(2, 'Dhaka High Court', 'dhaka', 'high', NULL, NULL),
(3, 'Barisal Judge Court', 'barisal', 'judge', NULL, NULL),
(4, 'Khulna Judge Court', 'khulna', 'judge', NULL, NULL),
(6, 'Dhaka Judge Court', 'dhaka', 'judge', NULL, NULL),
(7, 'Sylhet Judge Court', 'sylhet', 'judge', NULL, NULL),
(8, 'Rangpur Judge Court', 'rangpur', 'judge', NULL, NULL),
(9, 'Dhaka Magistrate Court', 'dhaka', 'magistrate', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b2_casefiles`
--

CREATE TABLE `b2_casefiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_identity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `type` enum('civil','family','criminal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_type` enum('prosecutor','defendant') COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `lawyer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `court_id` bigint(20) UNSIGNED DEFAULT NULL,
  `result` enum('waiting','pending','running','won','lost') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b2_casefiles`
--

INSERT INTO `b2_casefiles` (`id`, `case_identity`, `description`, `type`, `client_type`, `client_id`, `lawyer_id`, `court_id`, `result`, `created_at`, `updated_at`) VALUES
(1, 'jim-321', 'dfgdfgdfgdfgdfgdf', 'criminal', 'prosecutor', 6, NULL, NULL, 'waiting', '2020-10-19 00:00:00', '2020-10-19 00:00:00'),
(2, 'jim-325', 'dgfgsdfgsdfsdfsdfsdfsdfsdfsdfsdf', 'family', 'defendant', 6, NULL, NULL, 'waiting', '2020-10-19 01:15:05', '2020-10-19 01:15:05'),
(3, 'kim-545', 'sadfkjsgadkjhfblsaasdnfkjask\r\nerfgerge\r\nwrfgw\r\nef\r\nw\r\ne\r\nf\r\nw\r\nefwef', 'civil', 'defendant', 6, NULL, NULL, 'waiting', '2020-10-30 09:29:49', '2020-10-30 09:29:49'),
(4, 'rfgerge-452', 'sdsdfnbwsghdfgbqwebdfkbwjef', 'family', 'prosecutor', 16, 14, NULL, 'pending', '2020-10-30 09:40:11', '2020-11-19 02:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `b3_ratings`
--

CREATE TABLE `b3_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL,
  `giver_id` bigint(20) UNSIGNED NOT NULL,
  `taker_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b4_reviews`
--

CREATE TABLE `b4_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `giver_id` bigint(20) UNSIGNED NOT NULL,
  `taker_id` bigint(20) UNSIGNED NOT NULL,
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
  `specialty` enum('prosecutor','defendant') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` double(2,2) NOT NULL DEFAULT '0.00',
  `reviews` int(11) NOT NULL DEFAULT '0',
  `cases` int(11) NOT NULL DEFAULT '0',
  `success_rate` double(3,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b6_lawyers`
--

INSERT INTO `b6_lawyers` (`id`, `profile_bio`, `user_id`, `court_id`, `type`, `specialty`, `rating`, `reviews`, `cases`, `success_rate`, `created_at`, `updated_at`) VALUES
(1, 'I am a decent kind of Barrister and really good at defending my client', 14, 4, 'barrister', 'defendant', 0.00, 0, 0, 0.00, '2020-10-14 11:24:40', '2020-10-20 04:43:35'),
(2, 'ersfwsefqwefwefwefwefwef', 15, 3, 'judge', 'defendant', 0.00, 0, 0, 0.00, '2020-10-21 09:55:09', '2020-10-24 07:33:04'),
(3, NULL, 18, NULL, NULL, NULL, 0.00, 0, 0, 0.00, '2020-11-04 23:53:50', '2020-11-04 23:53:50'),
(4, NULL, 19, NULL, NULL, NULL, 0.00, 0, 0, 0.00, '2020-11-04 23:56:35', '2020-11-04 23:56:35');

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
(2, 6, 0, 0.00, 0, NULL, NULL),
(3, 16, 0, 0.00, 0, '2020-10-21 09:55:46', '2020-10-21 09:55:46'),
(4, 17, 0, 0.00, 0, '2020-11-04 23:53:01', '2020-11-04 23:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `b8_faqs`
--

CREATE TABLE `b8_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Farhan Zaman Khan', 'farha100669@gmail.com', '01625975405', 'asdasd', 'asdasdasdas', '2020-11-30 11:50:15', '2020-11-30 11:50:15'),
(2, 'Farhan Zaman Khan', 'farha100669@gmail.com', '121212121', '12121212', '121221', '2020-11-30 12:25:40', '2020-11-30 12:25:40'),
(3, 'Farhan Khan', 'farhan.etolet@gmail.com', '34234234234', 'dsfadf', 'asdasda', '2020-11-30 13:44:02', '2020-11-30 13:44:02'),
(4, 'Farhan Khan', 'farhan.etolet@gmail.com', '34234234234', 'dsfadf', 'asdasda', '2020-11-30 13:44:37', '2020-11-30 13:44:37'),
(5, 'Farhan Zaman Khan', 'farha100669@gmail.com', 'asdasda', 'asdasda', 'asdasdas', '2020-11-30 13:44:52', '2020-11-30 13:44:52');

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
(1, 'new title', 'sdfsdfsdfsdsdfsdfsdfsd\r\nsdfsdfsdfsdsdfsdfsdfsd\r\nsdfsdfsdfsdsdfsdfsdfsd\r\nsdfsdfsdfsdsdfsdfsdfsd\r\nsdfsdfsdfsdsdfsdfsdfsd\r\nsdfsdfsdfsdsdfsdfsdfsd\r\nsdfsdfsdfsdsdfsdfsdfsd\r\nsdfsdfsdfsdsdfsdfsdfsd', 'করার', 'হোম\r\nআবেদন করার পদ্ধতি\r\nনোটিস বোর্ড', '2020-12-01 19:47:55', '2020-12-01 20:44:03');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_22_192348_create_messages_table', 1),
(5, '2019_10_16_211433_create_favorites_table', 1),
(6, '2019_10_18_223259_add_avatar_to_users', 1),
(7, '2019_10_20_211056_add_messenger_color_to_users', 1),
(8, '2019_10_22_000539_add_dark_mode_to_users', 1),
(9, '2019_10_25_214038_add_active_status_to_users', 1),
(10, '2020_10_12_085026_add_contact_to_users_table', 1),
(11, '2020_10_13_040033_add_type_to_users_table', 1),
(12, '2020_10_13_050458_add_location_to_users_table', 1),
(13, '2020_10_13_050646_add_gender_to_users_table', 1),
(14, '2020_10_13_050753_add_birthdate_to_users_table', 1),
(15, '2020_10_13_182129_create_courts_table', 1),
(16, '2020_10_13_183002_create_case_files_table', 1),
(17, '2020_10_13_183119_create_ratings_table', 1),
(18, '2020_10_13_183212_create_reviews_table', 1),
(19, '2020_10_13_183319_create_admins_table', 1),
(26, '2020_10_13_183412_create_lawyers_table', 2),
(28, '2020_10_13_183459_create_clients_table', 3),
(37, '2020_11_30_092658_create_divisions_table', 4),
(38, '2020_11_30_092803_create_districts_table', 4),
(39, '2020_11_30_092819_create_cities_table', 4),
(40, '2020_11_30_092956_create_faqs_table', 4),
(42, '2020_11_30_093014_create_feedback_table', 4),
(44, '2020_12_01_105006_create_notices_table', 5);

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
-- Indexes for table `a1_users`
--
ALTER TABLE `a1_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `a1_users_email_unique` (`email`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b2_casefiles`
--
ALTER TABLE `b2_casefiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b2_casefiles_client_id_foreign` (`client_id`),
  ADD KEY `b2_casefiles_lawyer_id_foreign` (`lawyer_id`),
  ADD KEY `b2_casefiles_court_id_foreign` (`court_id`);

--
-- Indexes for table `b3_ratings`
--
ALTER TABLE `b3_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b3_ratings_giver_id_foreign` (`giver_id`),
  ADD KEY `b3_ratings_taker_id_foreign` (`taker_id`);

--
-- Indexes for table `b4_reviews`
--
ALTER TABLE `b4_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b4_reviews_giver_id_foreign` (`giver_id`),
  ADD KEY `b4_reviews_taker_id_foreign` (`taker_id`);

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
  ADD KEY `b6_lawyers_court_id_foreign` (`court_id`);

--
-- Indexes for table `b7_clients`
--
ALTER TABLE `b7_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b7_clients_user_id_foreign` (`user_id`);

--
-- Indexes for table `b8_faqs`
--
ALTER TABLE `b8_faqs`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `a03_cities`
--
ALTER TABLE `a03_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a1_users`
--
ALTER TABLE `a1_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `a3_failed_jobs`
--
ALTER TABLE `a3_failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b1_courts`
--
ALTER TABLE `b1_courts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `b2_casefiles`
--
ALTER TABLE `b2_casefiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `b3_ratings`
--
ALTER TABLE `b3_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b4_reviews`
--
ALTER TABLE `b4_reviews`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `b7_clients`
--
ALTER TABLE `b7_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `b8_faqs`
--
ALTER TABLE `b8_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b9_feedbacks`
--
ALTER TABLE `b9_feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `b10_notices`
--
ALTER TABLE `b10_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
-- Constraints for table `b2_casefiles`
--
ALTER TABLE `b2_casefiles`
  ADD CONSTRAINT `b2_casefiles_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `a1_users` (`id`),
  ADD CONSTRAINT `b2_casefiles_court_id_foreign` FOREIGN KEY (`court_id`) REFERENCES `b1_courts` (`id`),
  ADD CONSTRAINT `b2_casefiles_lawyer_id_foreign` FOREIGN KEY (`lawyer_id`) REFERENCES `a1_users` (`id`);

--
-- Constraints for table `b3_ratings`
--
ALTER TABLE `b3_ratings`
  ADD CONSTRAINT `b3_ratings_giver_id_foreign` FOREIGN KEY (`giver_id`) REFERENCES `a1_users` (`id`),
  ADD CONSTRAINT `b3_ratings_taker_id_foreign` FOREIGN KEY (`taker_id`) REFERENCES `a1_users` (`id`);

--
-- Constraints for table `b4_reviews`
--
ALTER TABLE `b4_reviews`
  ADD CONSTRAINT `b4_reviews_giver_id_foreign` FOREIGN KEY (`giver_id`) REFERENCES `a1_users` (`id`),
  ADD CONSTRAINT `b4_reviews_taker_id_foreign` FOREIGN KEY (`taker_id`) REFERENCES `a1_users` (`id`);

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
  ADD CONSTRAINT `b6_lawyers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`);

--
-- Constraints for table `b7_clients`
--
ALTER TABLE `b7_clients`
  ADD CONSTRAINT `b7_clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `a1_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
