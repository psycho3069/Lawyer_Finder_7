-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 11:43 AM
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
-- Database: `paprzpgr_aspada`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dis_id` int(10) NOT NULL,
  `division_id` int(10) NOT NULL,
  `dis_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dis_id`, `division_id`, `dis_name`) VALUES
(1, 3, 'Dhaka'),
(2, 3, 'Faridpur'),
(3, 3, 'Gazipur'),
(4, 3, 'Gopalgonj'),
(5, 8, 'Jamalpur'),
(6, 8, 'Kishoregonj'),
(7, 3, 'Madaripur'),
(8, 3, 'Manikganj'),
(9, 3, 'Munshigonj'),
(10, 8, 'Mymensingh'),
(11, 3, 'Narayangonj'),
(12, 3, 'Narsingdi'),
(13, 8, 'Netrokona'),
(14, 3, 'Rajbari'),
(15, 3, 'Shariatpur'),
(16, 8, 'Sherpur'),
(17, 3, 'Tangail'),
(18, 2, 'Bandarban'),
(19, 2, 'Brahmanbaria'),
(20, 2, 'Chandpur'),
(21, 2, 'Chattogram'),
(22, 2, 'Cumilla'),
(23, 2, 'Cox Bazar'),
(24, 2, 'Feni'),
(25, 2, 'Khagrachari'),
(26, 2, 'Lakshmipur'),
(27, 2, 'Noakhali'),
(28, 2, 'Rangamati'),
(29, 5, 'Bogura'),
(30, 6, 'Dinajpur'),
(31, 1, 'Gaibandha'),
(32, 5, 'Joypurhat'),
(33, 5, 'Kurigram'),
(34, 6, 'Lalmonirhat'),
(35, 5, 'Naogaon'),
(36, 5, 'Natore'),
(37, 5, 'Chapai Nawabgonj'),
(38, 6, 'Nilphamari'),
(39, 5, 'Pabna'),
(40, 6, 'Panchagar'),
(41, 5, 'Rajshahi'),
(42, 6, 'Rangpur'),
(43, 5, 'Sirajgonj'),
(44, 6, 'Thakurgaon'),
(45, 4, 'Bagerhat'),
(46, 4, 'Chuadanga'),
(47, 4, 'Jashore'),
(48, 4, 'Jhenaidah'),
(49, 4, 'Khulna'),
(50, 4, 'Kushtia'),
(51, 4, 'Magura'),
(52, 4, 'Meherpur'),
(53, 4, 'Narail'),
(54, 4, 'Satkhira'),
(55, 1, 'Barishal'),
(56, 1, 'Bhola'),
(57, 1, 'Jhalokati'),
(58, 1, 'Patuakhali'),
(59, 1, 'Pirojpur'),
(60, 7, 'HABIGANJ'),
(61, 7, 'Moulvibazar'),
(62, 7, 'Sunamgonj'),
(63, 7, 'Sylhet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dis_id`),
  ADD KEY `fk_division_id` (`division_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dis_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `fk_division_id` FOREIGN KEY (`division_id`) REFERENCES `division` (`div_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
