-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 05:55 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `institute`, `admin_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DevAdmin', 'admin@admin.io', '$2y$10$12tnU2MolnC1WycSn1QmlORWGOAX3JwxgBX/juHRpO.kFXhPOjqWK', 'All', 'Super_Admin', 'BBxJQ0INoQIxLIA0HXlWExEyGPRDGN7qmPvTium6N5IT5Ndmi45pB7g7wdUh', '2018-02-02 12:33:21', '2018-02-03 12:20:37'),
(2, 'Ravi', 'ravi@nibm.lk', '$2y$10$rWtN/8bmKdN08JHk/LbgaOn11cV.JwYvJnxAlfmaK5i0.oxzQLzb6', 'NIBM', 'Head_Admin', NULL, '2018-02-03 14:34:34', '2018-02-03 14:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `exampprid` int(10) UNSIGNED NOT NULL,
  `questionid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `answer` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`exampprid`, `questionid`, `id`, `answer`, `created_at`, `updated_at`) VALUES
(28, 1, 1, 'Waterfall model', '2018-02-04 12:04:44', '2018-02-04 12:04:44'),
(28, 2, 1, 'Transaction processing system', '2018-02-04 12:08:09', '2018-02-04 12:08:09'),
(28, 3, 1, 'A system user', '2018-02-04 12:09:35', '2018-02-04 12:09:35'),
(28, 4, 1, 'Requirement analysis', '2018-02-04 12:11:31', '2018-02-04 12:11:31'),
(28, 5, 1, 'primitive process', '2018-02-04 12:13:49', '2018-02-04 12:13:49'),
(28, 6, 1, 'Entity Relationship Diagrams', '2018-02-04 12:16:43', '2018-02-04 12:16:43'),
(28, 7, 1, 'loose cohesion and tight coupling.', '2018-02-04 12:18:28', '2018-02-04 12:18:28'),
(28, 8, 1, 'Transaction processing system.', '2018-02-04 12:20:47', '2018-02-04 12:20:47'),
(28, 9, 1, 'A system user', '2018-02-04 12:22:06', '2018-02-04 12:22:06'),
(28, 10, 1, 'Requirement analysis', '2018-02-04 12:23:52', '2018-02-04 12:23:52'),
(28, 1, 2, 'V model', '2018-02-04 12:04:45', '2018-02-04 12:04:45'),
(28, 2, 2, 'Executive information system', '2018-02-04 12:08:09', '2018-02-04 12:08:09'),
(28, 3, 2, 'A system owner', '2018-02-04 12:09:35', '2018-02-04 12:09:35'),
(28, 4, 2, 'Project initiation', '2018-02-04 12:11:31', '2018-02-04 12:11:31'),
(28, 5, 2, 'external agent', '2018-02-04 12:13:49', '2018-02-04 12:13:49'),
(28, 6, 2, 'Coupling', '2018-02-04 12:16:43', '2018-02-04 12:16:43'),
(28, 7, 2, 'high cohesion and tight coupling.', '2018-02-04 12:18:28', '2018-02-04 12:18:28'),
(28, 8, 2, 'Executive information system', '2018-02-04 12:20:47', '2018-02-04 12:20:47'),
(28, 9, 2, 'A system owner', '2018-02-04 12:22:06', '2018-02-04 12:22:06'),
(28, 10, 2, 'Project initiation', '2018-02-04 12:23:52', '2018-02-04 12:23:52'),
(28, 1, 3, 'XP', '2018-02-04 12:04:45', '2018-02-04 12:04:45'),
(28, 2, 3, 'Expert system', '2018-02-04 12:08:09', '2018-02-04 12:08:09'),
(28, 3, 3, 'A systems analyst', '2018-02-04 12:09:35', '2018-02-04 12:09:35'),
(28, 4, 3, 'System design', '2018-02-04 12:11:31', '2018-02-04 12:11:31'),
(28, 5, 3, 'data store', '2018-02-04 12:13:49', '2018-02-04 12:13:49'),
(28, 6, 3, 'Data Flow Diagrams', '2018-02-04 12:16:43', '2018-02-04 12:16:43'),
(28, 7, 3, 'high coupling and high cohesion.', '2018-02-04 12:18:28', '2018-02-04 12:18:28'),
(28, 8, 3, 'Expert system.', '2018-02-04 12:20:48', '2018-02-04 12:20:48'),
(28, 9, 3, 'A systems analyst', '2018-02-04 12:22:06', '2018-02-04 12:22:06'),
(28, 10, 3, 'System design', '2018-02-04 12:23:52', '2018-02-04 12:23:52'),
(28, 1, 4, 'Agile', '2018-02-04 12:04:45', '2018-02-04 12:04:45'),
(28, 2, 4, 'Communication and Collaboration System', '2018-02-04 12:08:10', '2018-02-04 12:08:10'),
(28, 3, 4, 'A project manager', '2018-02-04 12:09:35', '2018-02-04 12:09:35'),
(28, 4, 4, 'System development', '2018-02-04 12:11:31', '2018-02-04 12:11:31'),
(28, 5, 4, 'data flow', '2018-02-04 12:13:49', '2018-02-04 12:13:49'),
(28, 6, 4, 'Structure Starts', '2018-02-04 12:16:43', '2018-02-04 12:16:43'),
(28, 7, 4, 'loose coupling and loose cohesion.', '2018-02-04 12:18:28', '2018-02-04 12:18:28'),
(28, 8, 4, 'Communication and Collaboration System.', '2018-02-04 12:20:48', '2018-02-04 12:20:48'),
(28, 9, 4, 'A project manager', '2018-02-04 12:22:06', '2018-02-04 12:22:06'),
(28, 10, 4, 'System development', '2018-02-04 12:23:52', '2018-02-04 12:23:52'),
(28, 1, 5, 'Spiral Model', '2018-02-04 12:04:45', '2018-02-04 12:04:45'),
(28, 2, 5, 'Office Automation System', '2018-02-04 12:08:10', '2018-02-04 12:08:10'),
(28, 3, 5, 'A system designer', '2018-02-04 12:09:35', '2018-02-04 12:09:35'),
(28, 4, 5, 'Scope definition', '2018-02-04 12:11:31', '2018-02-04 12:11:31'),
(28, 5, 5, 'process', '2018-02-04 12:13:49', '2018-02-04 12:13:49'),
(28, 6, 5, 'Event Diagrams', '2018-02-04 12:16:43', '2018-02-04 12:16:43'),
(28, 7, 5, 'low coupling and high cohesion.', '2018-02-04 12:18:28', '2018-02-04 12:18:28'),
(28, 8, 5, 'Office Automation System.', '2018-02-04 12:20:48', '2018-02-04 12:20:48'),
(28, 9, 5, 'A system designer', '2018-02-04 12:22:06', '2018-02-04 12:22:06'),
(28, 10, 5, 'Scope definition', '2018-02-04 12:23:52', '2018-02-04 12:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `correct_answers`
--

CREATE TABLE `correct_answers` (
  `exampprid` int(10) UNSIGNED NOT NULL,
  `questionid` int(10) UNSIGNED NOT NULL,
  `answerid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `correct_answers`
--

INSERT INTO `correct_answers` (`exampprid`, `questionid`, `answerid`, `created_at`, `updated_at`) VALUES
(28, 1, 1, '2018-02-04 12:04:45', '2018-02-04 12:04:45'),
(28, 2, 3, '2018-02-04 12:08:10', '2018-02-04 12:08:10'),
(28, 3, 3, '2018-02-04 12:09:35', '2018-02-04 12:09:35'),
(28, 4, 1, '2018-02-04 12:11:31', '2018-02-04 12:11:31'),
(28, 5, 3, '2018-02-04 12:13:49', '2018-02-04 12:13:49'),
(28, 6, 4, '2018-02-04 12:16:43', '2018-02-04 12:16:43'),
(28, 7, 5, '2018-02-04 12:18:28', '2018-02-04 12:18:28'),
(28, 8, 5, '2018-02-04 12:20:48', '2018-02-04 12:20:48'),
(28, 9, 5, '2018-02-04 12:22:06', '2018-02-04 12:22:06'),
(28, 10, 1, '2018-02-04 12:23:53', '2018-02-04 12:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `exam_papers`
--

CREATE TABLE `exam_papers` (
  `id` int(10) UNSIGNED NOT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edufield` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gradyear` int(10) UNSIGNED NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timeduration` int(10) UNSIGNED NOT NULL,
  `noquestions` int(10) UNSIGNED NOT NULL,
  `lecturerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_papers`
--

INSERT INTO `exam_papers` (`id`, `institute`, `edufield`, `gradyear`, `module`, `type`, `timeduration`, `noquestions`, `lecturerName`, `created_at`, `updated_at`) VALUES
(28, 'NIBM', 'Computer Science', 1, 'SAD', 'EXAM', 45, 10, 'Lakmini', '2018-02-04 12:03:31', '2018-02-04 12:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `email`, `password`, `institute`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lakmini', 'lakmini@nibm.lk', '$2y$10$CuFjbFK7CIeFP4BBFzoww.euruSwflvomRSvYyM/.MNnHXIwkYL/q', 'NIBM', 'pgEevhMJBvqCu2fgvXo31FCIleTKyDMz5P8XCQw6YKVjXzgwoqb5CruQ0fkH', '2018-02-02 12:45:31', '2018-02-03 12:36:05'),
(2, 'Chandrika', 'chandrika@nibm.lk', '$2y$10$afB5UZ89wxABbC1DUNGU3.D0GQz.ta.4C8NvCGc/3WUYeXFYnP1V2', 'NIBM', NULL, '2018-02-04 01:30:10', '2018-02-04 01:30:10');

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
(3, '2018_02_02_055046_create_exam_papers_table', 1),
(4, '2018_02_02_061637_create_questions_table', 1),
(5, '2018_02_02_061741_create_answers_table', 1),
(6, '2018_02_02_061816_create_correct_answers_table', 1),
(7, '2018_02_02_072712_create_admins_table', 1),
(8, '2018_02_02_072748_create_lecturers_table', 1),
(9, '2018_02_04_123110_drop_unique_create_answers', 2),
(10, '2018_02_04_123453_drop_unique_create_questions', 3),
(11, '2018_02_04_151744_create_student_answers_table', 4),
(12, '2018_02_04_204519_add_user_id_to_student_marks', 5),
(13, '2018_02_05_020837_add_primary_key_to_student_answers', 6),
(14, '2018_02_05_035003_create_student_results_table', 6),
(15, '2018_02_05_040954_change_module_type_student_result', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `exampprid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `question` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `noans` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`exampprid`, `id`, `question`, `noans`, `created_at`, `updated_at`) VALUES
(28, 1, 'Select Preemptive SDLC models', 5, '2018-02-04 12:04:44', '2018-02-04 12:04:44'),
(28, 2, 'Which of the following are types of information systems that capture the expertise of workers and then simulate that expertise to the benefit of non-experts?', 5, '2018-02-04 12:08:09', '2018-02-04 12:08:09'),
(28, 3, 'What is the best way of filling the blanks in the following incomplete sentence?\r\n.………………… is a specialist who analyses a complex process or operation in order to improve its\r\nefficiency, especially by applying a computer system.', 5, '2018-02-04 12:09:35', '2018-02-04 12:09:35'),
(28, 4, 'Fill in the blank space.\r\n....................... phase in the system development life cycle defines business requirements for the new system.', 5, '2018-02-04 12:11:31', '2018-02-04 12:11:31'),
(28, 5, 'Fill in the blank space.\r\nIdeally, essential ……….. should describe ‘things’ about which the business wants to store data', 5, '2018-02-04 12:13:49', '2018-02-04 12:13:49'),
(28, 6, '……………… show program modules and their interconnections', 5, '2018-02-04 12:16:43', '2018-02-04 12:16:43'),
(28, 7, 'The two overreaching goals of object oriented design are', 5, '2018-02-04 12:18:27', '2018-02-04 12:18:27'),
(28, 8, 'Which of the following are types of information systems that help employees create and share documents that support day-to-day workplace activities.', 5, '2018-02-04 12:20:47', '2018-02-04 12:20:47'),
(28, 9, 'What is the best way of filling the blanks in the following uncompleted sentence? .………………… is a technical specialist such as web architect who translates system users’ business requirements and constraints into technical solutions.', 5, '2018-02-04 12:22:06', '2018-02-04 12:22:06'),
(28, 10, 'Fill in the blank space.\r\n....................... phase in the system development life cycle defines and prioritizes the business requirements..', 5, '2018-02-04 12:23:52', '2018-02-04 12:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `student_answers`
--

CREATE TABLE `student_answers` (
  `exampprid` int(10) UNSIGNED NOT NULL,
  `questionid` int(10) UNSIGNED NOT NULL,
  `stuanswerid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_answers`
--

INSERT INTO `student_answers` (`exampprid`, `questionid`, `stuanswerid`, `created_at`, `updated_at`, `user_id`) VALUES
(28, 1, 1, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1),
(28, 2, 2, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1),
(28, 3, 2, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1),
(28, 4, 4, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1),
(28, 5, 4, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1),
(28, 6, 4, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1),
(28, 7, 4, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1),
(28, 8, 4, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1),
(28, 9, 5, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1),
(28, 10, 3, '2018-02-04 22:38:37', '2018-02-04 22:38:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_results`
--

CREATE TABLE `student_results` (
  `user_id` int(11) NOT NULL,
  `exampprid` int(11) NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_results`
--

INSERT INTO `student_results` (`user_id`, `exampprid`, `module`, `result`, `created_at`, `updated_at`) VALUES
(1, 28, 'SAD', 30, '2018-02-04 22:47:55', '2018-02-04 22:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gradYear` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `institute`, `gradYear`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Devin', 'dev@gmail.com', '$2y$10$T5KUqdT1Y86yNSNqvrSbau5EAnzn83pKyRRxAyupk7veNJckmVMdy', 'NIBM', 1, 'A2EivENcSl6NXZT63L1Rw33d1kvq9keNgKWbqEc4Y0pTFiicRtiggMLp9ZFM', '2018-02-02 09:57:15', '2018-02-03 12:34:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`,`exampprid`,`questionid`),
  ADD KEY `answers_exampprid_foreign` (`exampprid`),
  ADD KEY `answers_questionid_foreign` (`questionid`);

--
-- Indexes for table `correct_answers`
--
ALTER TABLE `correct_answers`
  ADD PRIMARY KEY (`exampprid`,`questionid`,`answerid`),
  ADD KEY `correct_answers_questionid_foreign` (`questionid`),
  ADD KEY `correct_answers_answerid_foreign` (`answerid`);

--
-- Indexes for table `exam_papers`
--
ALTER TABLE `exam_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lecturers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`,`exampprid`),
  ADD KEY `questions_exampprid_foreign` (`exampprid`);

--
-- Indexes for table `student_answers`
--
ALTER TABLE `student_answers`
  ADD PRIMARY KEY (`exampprid`,`questionid`),
  ADD KEY `student_answers_questionid_foreign` (`questionid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_papers`
--
ALTER TABLE `exam_papers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_exampprid_foreign` FOREIGN KEY (`exampprid`) REFERENCES `exam_papers` (`id`),
  ADD CONSTRAINT `answers_questionid_foreign` FOREIGN KEY (`questionid`) REFERENCES `questions` (`id`);

--
-- Constraints for table `correct_answers`
--
ALTER TABLE `correct_answers`
  ADD CONSTRAINT `correct_answers_answerid_foreign` FOREIGN KEY (`answerid`) REFERENCES `answers` (`id`),
  ADD CONSTRAINT `correct_answers_exampprid_foreign` FOREIGN KEY (`exampprid`) REFERENCES `exam_papers` (`id`),
  ADD CONSTRAINT `correct_answers_questionid_foreign` FOREIGN KEY (`questionid`) REFERENCES `questions` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_exampprid_foreign` FOREIGN KEY (`exampprid`) REFERENCES `exam_papers` (`id`);

--
-- Constraints for table `student_answers`
--
ALTER TABLE `student_answers`
  ADD CONSTRAINT `student_answers_exampprid_foreign` FOREIGN KEY (`exampprid`) REFERENCES `exam_papers` (`id`),
  ADD CONSTRAINT `student_answers_questionid_foreign` FOREIGN KEY (`questionid`) REFERENCES `questions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
