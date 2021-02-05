-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 07:28 AM
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
(3, 'nishat-003', 'Nishat is no ordinary farmer. As part of the growing national movement to find a more environmentally friendly and sustainable way of life, Tasnim began raising goats and chickens on his 1/10th-acre lot in downtown Ypsilanti, Michigan. He did this to bring attention to the movement and as a challenge to a city ordinance that prohibited such activities. Students litigated issues of first impression through the trial and appellate process while Tasnim and others continued to press the city to permit urban farming. Using the leverage of the lawsuit and public support for Tasnim\'s activities, the city ultimately changed its ordinance permitting residents to raise chickens and bees within city limits. Tasnim aptly noted that \"the case helped generate support for, and raise awareness of, urban agriculture while, at the same time, giving students a tremendous learning opportunity serving the behind-the-scenes needs of a significant social movement.\"', 'civil', 'prosecutor', 3, 1, 6, 'lost', '2020-12-25 02:44:02', '2020-12-27 00:27:19'),
(4, 'suraiya-005', 'Civil-Criminal Litigation Clinic students came to the aid of a woman who wanted to clear up a criminal misdemeanor bench warrant. After investigation, students found that she had not one, but at least seven bench warrants for misdemeanors, mostly traffic offenses, going back many years. Her student attorneys tackled her cases one by one, appearing in three different courts more than a dozen times. They eventually secured placement for her in an alternative program. Through creativity and persistence, they helped the client resolve the outstanding cases in a way that permitted her to keep working to support her family.', 'civil', 'prosecutor', 4, NULL, 1, 'waiting', '2020-12-25 02:45:39', '2020-12-25 02:45:39'),
(5, 'rifat-007', 'The clinic persuaded a federal district court that a state prisoner had been unconstitutionally denied effective assistance of counsel. The state appealed and the students not only wrote the brief to the Sixth Circuit, which covered questions of constitutional law and complex habeas procedure, but one student also co-argued the case. The three-judge panel of the Sixth Circuit reversed the district court\'s grant of the habeas petition. Undeterred, a new student attorney filed a motion for rehearing en banc, which was granted. With the assistance of students, the case was re-argued in front of the entire Sixth Circuit, which ultimately granted the habeas petition. Since his release from prison, the client is busy taking care of his elderly parents and playing with his grandkids.', 'family', 'prosecutor', 5, NULL, 7, 'waiting', '2020-12-25 02:47:33', '2020-12-25 02:47:33'),
(6, 'binte-009', 'A 20-year-old woman came to the clinic after fleeing her home country under threat of genital mutilation in preparation for a forced marriage to a 60-year-old man. Students conducted an exhaustive investigation and obtained statements from multiple witnesses and experts. Based on that work, students prepared and filed an application for asylum, tackling novel legal issues and showing that their client would not be protected by her government if she were forced to return to her homeland. The client was granted asylum and enjoys her new life in the United States.', 'criminal', 'prosecutor', 6, NULL, 5, 'waiting', '2020-12-25 02:51:08', '2020-12-25 02:51:08'),
(7, 'khaleda-012', 'A disabled woman in her sixties was faced with a tax foreclosure on the home she had inherited from her mother. Clinic students filed a probate court action to give her clear title to the home and persuaded government authorities that she was eligible for property tax reductions. With clear title and reduced taxes, the woman was able to keep her home. In another case, an elderly woman suffering from a mental disability was referred to the clinic by a community organization because she had been evicted. Clinic students determined that the eviction was invalid and brought a motion to set aside the eviction. Using their investigation and legal research, students were able to negotiate a settlement in which the landlord agreed to move the client into a new apartment.', 'criminal', 'defendant', 7, NULL, 6, 'waiting', '2020-12-25 02:54:37', '2020-12-25 02:54:37'),
(8, 'fakir-006', 'A prisoner got into an argument with staff over a grievance he had filed about slow mail service. Within days he was transferred to a prison in the Upper Peninsula, 250 miles from his family. The transfer interrupted his therapy, which was required for his upcoming parole. Students took the case to federal district court, alleging that the transfer was in retaliation for the exercise of First Amendment rights. They deposed the staff and supervisors at both prisons, subpoenaed all the transfer records, and used that evidence to defeat the state\'s motion for summary judgment. The case settled for $25,000, even though the prisoner had been returned to the first prison after just 10 days.', 'criminal', 'defendant', 8, 1, 8, 'won', '2020-12-25 03:03:01', '2020-12-27 00:14:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b8_casefiles`
--
ALTER TABLE `b8_casefiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b8_casefiles_client_id_foreign` (`client_id`),
  ADD KEY `b8_casefiles_court_id_foreign` (`court_id`),
  ADD KEY `b8_casefiles_lawyer_id_foreign` (`lawyer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b8_casefiles`
--
ALTER TABLE `b8_casefiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `b8_casefiles`
--
ALTER TABLE `b8_casefiles`
  ADD CONSTRAINT `b8_casefiles_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `b7_clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `b8_casefiles_court_id_foreign` FOREIGN KEY (`court_id`) REFERENCES `b1_courts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `b8_casefiles_lawyer_id_foreign` FOREIGN KEY (`lawyer_id`) REFERENCES `b6_lawyers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
