-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 12:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stu_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `given_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `true_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `stu_id`, `question`, `given_answer`, `true_answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'What is the base of binary', '2', '2', '2021-03-15 08:56:48', '2021-03-15 08:56:48'),
(2, 1, 'What is the full form of html', 'Hypertext markup language', 'Hypertext markup language', '2021-03-15 08:56:51', '2021-03-15 08:56:51'),
(3, 1, 'What is the base of decimal', '10', '10', '2021-03-15 08:56:55', '2021-03-15 08:56:55'),
(4, 1, 'What is the base of octal', '8', '8', '2021-03-15 08:56:57', '2021-03-15 08:56:57'),
(5, 1, 'What is the full form of css', 'Cascading Style Sheets', 'Cascading Style Sheets', '2021-03-15 08:57:01', '2021-03-15 08:57:01'),
(6, 1, 'What is the base of hexa-decimal', '16', '16', '2021-03-15 08:57:04', '2021-03-15 08:57:04'),
(7, 2, 'What is the base of binary', '2', '2', '2021-03-15 09:02:03', '2021-03-15 09:02:03'),
(8, 2, 'What is the base of octal', '8', '8', '2021-03-15 09:02:09', '2021-03-15 09:02:09'),
(9, 2, 'What is the base of decimal', '10', '10', '2021-03-15 09:02:13', '2021-03-15 09:02:13'),
(10, 2, 'What is the base of hexa-decimal', '16', '16', '2021-03-15 09:02:26', '2021-03-15 09:02:26'),
(11, 2, 'What is the full form of html', 'Hypertext markup language', 'Hypertext markup language', '2021-03-15 09:02:31', '2021-03-15 09:02:31'),
(12, 2, 'What is the full form of css', 'Cascading Style Sheets', 'Cascading Style Sheets', '2021-03-15 09:02:34', '2021-03-15 09:02:34'),
(13, 3, 'What is the full form of css', 'Cascading Style Sheets', 'Cascading Style Sheets', '2021-03-15 09:06:09', '2021-03-15 09:06:09'),
(14, 3, 'What is the full form of html', 'Hypertext Language', 'Hypertext markup language', '2021-03-15 09:06:12', '2021-03-15 09:06:12'),
(15, 3, 'What is the base of hexa-decimal', '16', '16', '2021-03-15 09:06:13', '2021-03-15 09:06:13'),
(16, 3, 'What is the base of decimal', '10', '10', '2021-03-15 09:06:14', '2021-03-15 09:06:14'),
(17, 3, 'What is the base of binary', '2', '2', '2021-03-15 09:06:15', '2021-03-15 09:06:15'),
(18, 3, 'What is the base of octal', '8', '8', '2021-03-15 09:06:16', '2021-03-15 09:06:16'),
(19, 3, 'w', 'q', 'r', '2021-03-16 03:59:49', '2021-03-16 03:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'CSE', 'cse', '2021-03-15 08:40:11', '2021-03-15 08:40:11'),
(2, 'EEE', 'eee', '2021-03-15 08:40:16', '2021-03-15 08:40:16'),
(3, 'LAW', 'law', '2021-03-15 08:40:19', '2021-03-15 08:40:19'),
(4, 'CIVIL', 'civil', '2021-03-15 08:40:29', '2021-03-15 08:40:29'),
(5, 'ENGLISH', 'english', '2021-03-15 08:40:39', '2021-03-15 08:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `examtypes`
--

CREATE TABLE `examtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examtypes`
--

INSERT INTO `examtypes` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Mid', 'mid', '2021-03-15 08:41:41', '2021-03-15 08:41:41'),
(2, 'Final', 'final', '2021-03-15 08:41:47', '2021-03-15 08:41:47'),
(3, 'Tutorial', 'tutorial', '2021-03-15 08:41:57', '2021-03-15 08:41:57'),
(4, 'Class test', 'class-test', '2021-03-15 08:42:05', '2021-03-15 08:42:05'),
(5, 'Make up', 'make-up', '2021-03-15 08:42:13', '2021-03-15 08:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `exam_infos`
--

CREATE TABLE `exam_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `examtype_id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_question` int(11) NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_infos`
--

INSERT INTO `exam_infos` (`id`, `teacher_code`, `department_id`, `examtype_id`, `course_title`, `course_code`, `number_of_question`, `unique_id`, `time`, `created_at`, `updated_at`, `teacher_id`) VALUES
(1, 'Teacher', 1, 1, 'Introduction To computer', 'CSE-1111', 6, 'qOaJz', '3', '2021-03-15 08:45:05', '2021-03-15 08:45:05', 2),
(2, 'Teacher', 1, 2, 'Introduction To computer', 'CSE-1111', 2, 'AkMEw', '5', '2021-03-16 03:57:14', '2021-03-16 03:57:14', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_01_04_103229_create_departments_table', 1),
(4, '2021_01_06_085432_create_examtypes_table', 1),
(5, '2021_01_09_064752_update_users_table', 1),
(6, '2021_01_25_193601_create_exam_infos_table', 1),
(7, '2021_01_26_193410_create_questions_table', 1),
(8, '2021_02_01_120350_update_exam_infos_table', 1),
(9, '2021_02_08_114753_create_participations_table', 1),
(10, '2021_02_24_095145_update_participation_table', 1),
(11, '2021_03_02_182024_create_writtens_table', 1),
(12, '2021_03_02_182331_create_written_questions_table', 1),
(13, '2021_12_04_200730_create_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participations`
--

CREATE TABLE `participations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `std_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participations`
--

INSERT INTO `participations` (`id`, `student_id`, `unique_id`, `score`, `created_at`, `updated_at`, `std_id`) VALUES
(1, 1712020103, 'qOaJz', 6, '2021-03-15 08:56:44', '2021-03-15 08:57:04', 3),
(2, 1712020116, 'qOaJz', 6, '2021-03-15 09:01:19', '2021-03-15 09:02:34', 4),
(3, 1712020122, 'qOaJz', 5, '2021-03-15 09:05:41', '2021-03-15 09:06:16', 7),
(4, 1712020122, 'AkMEw', 0, '2021-03-16 03:59:27', '2021-03-16 03:59:27', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `quiz_id`, `created_at`, `updated_at`) VALUES
(1, 'What is the base of binary', '2', '8', '10', '16', '2', 1, '2021-03-15 08:45:44', '2021-03-15 08:45:44'),
(2, 'What is the base of hexa-decimal', '10', '8', '2', '16', '16', 1, '2021-03-15 08:46:21', '2021-03-15 08:46:21'),
(3, 'What is the base of octal', '10', '8', '2', '16', '8', 1, '2021-03-15 08:46:46', '2021-03-15 08:46:46'),
(4, 'What is the base of decimal', '2', '8', '10', '16', '10', 1, '2021-03-15 08:47:11', '2021-03-15 08:47:11'),
(5, 'What is the full form of html', 'Hypertext markup language', 'Hypertext Language', 'Hypertext Markup Programming', 'Hypertext  Language Programming', 'Hypertext markup language', 1, '2021-03-15 08:49:11', '2021-03-15 08:49:11'),
(6, 'What is the full form of css', 'Cascading Style Sheets', 'Cascading  Sheets Style', 'Cascading Style Programming', 'Cascading Programming Style', 'Cascading Style Sheets', 1, '2021-03-15 08:50:56', '2021-03-15 08:50:56'),
(7, 'w', 'q', 'w', 'e', 'r', 'r', 2, '2021-03-16 03:57:36', '2021-03-16 03:57:36'),
(8, 'w', 'v', 'bn', 'm', 'v', 'm', 2, '2021-03-16 03:57:53', '2021-03-16 03:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StdID` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountType` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Student',
  `isVerified` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `department`, `StdID`, `accountType`, `isVerified`) VALUES
(1, 'default.jpg', 'Admin', 'sst9790@gmail.com', '2021-03-15 08:37:59', '$2y$10$iGJ5cSydf/MJdWD6xf9H.umGIXBWg6c62q/Uo9eU.s4ps/gVt0cW6', NULL, '2021-03-15 08:37:44', '2021-03-15 08:37:59', NULL, NULL, 'Admin', 'Pending'),
(2, 'default.jpg', 'Teacher', 'sstc9790@gmail.com', '2021-03-15 08:44:13', '$2y$10$I3KQQ41YGwhSmzhkbv2lPOsef55e7MgZAdVNQFbD5qV/iVHY0CBXW', NULL, '2021-03-15 08:43:53', '2021-03-15 08:44:13', 'CSE', NULL, 'Teacher', 'Pending'),
(3, 'default.jpg', 'Supriyo', 'bissotalukder103@gmail.com', '2021-03-15 08:56:15', '$2y$10$c0oBa49Zj1D8hmYlY46YoumYytk4c8egz3LsitNut.JvVvWGrDvgO', NULL, '2021-03-15 08:55:51', '2021-03-15 08:56:15', 'CSE', '1712020103', 'Student', 'Pending'),
(4, 'default.jpg', 'Kolpo', 'komolkolpo06@gmail.com', '2021-03-15 09:01:10', '$2y$10$O9BBGGsgv0f4nf0EfTxkLe8xTacxOZ4MNmSvDVrRDwAit.DA.hwdq', NULL, '2021-03-15 09:01:01', '2021-03-15 09:01:10', 'CSE', '1712020116', 'Student', 'Pending'),
(7, 'default.jpg', 'Fabiha', 'upoma96@gmail.com', '2021-03-15 09:05:32', '$2y$10$HcjxGIBHnWtV15xkVCWKS.hmPtEghRU/onAA/Cm7Stx9424p4FjoG', NULL, '2021-03-15 09:05:04', '2021-03-15 09:05:32', 'CSE', '1712020122', 'Student', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `writtens`
--

CREATE TABLE `writtens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `examtype_id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_question` int(11) NOT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writtens`
--

INSERT INTO `writtens` (`id`, `teacher_code`, `department_id`, `examtype_id`, `course_title`, `course_code`, `number_of_question`, `marks`, `time`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'Teacher', 2, 3, 'Introduction To computer', 'CSE-1111', 6, '30', '20', 2, '2021-03-15 08:51:49', '2021-03-15 08:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `written_questions`
--

CREATE TABLE `written_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `written_questions`
--

INSERT INTO `written_questions` (`id`, `question`, `mark`, `quiz_id`, `created_at`, `updated_at`) VALUES
(1, 'Write details of css', '5', 1, '2021-03-15 08:52:22', '2021-03-15 08:52:22'),
(2, 'What is tag in html, explain', '5', 1, '2021-03-15 08:53:04', '2021-03-15 08:53:04'),
(3, 'What is the computer system', '5', 1, '2021-03-15 08:53:52', '2021-03-15 08:53:52'),
(4, 'List out components of a computer system', '5', 1, '2021-03-15 08:54:04', '2021-03-15 08:54:04'),
(5, 'List out some computer processors', '5', 1, '2021-03-15 08:54:19', '2021-03-15 08:54:19'),
(6, 'What Is A Super-class', '5', 1, '2021-03-15 08:54:31', '2021-03-15 08:54:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_stu_id_foreign` (`stu_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examtypes`
--
ALTER TABLE `examtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_infos`
--
ALTER TABLE `exam_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_infos_department_id_foreign` (`department_id`),
  ADD KEY `exam_infos_examtype_id_foreign` (`examtype_id`),
  ADD KEY `exam_infos_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participations`
--
ALTER TABLE `participations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participations_std_id_foreign` (`std_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_index` (`quiz_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writtens`
--
ALTER TABLE `writtens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `writtens_department_id_foreign` (`department_id`),
  ADD KEY `writtens_examtype_id_foreign` (`examtype_id`),
  ADD KEY `writtens_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `written_questions`
--
ALTER TABLE `written_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `written_questions_quiz_id_index` (`quiz_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `examtypes`
--
ALTER TABLE `examtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam_infos`
--
ALTER TABLE `exam_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `participations`
--
ALTER TABLE `participations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `writtens`
--
ALTER TABLE `writtens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `written_questions`
--
ALTER TABLE `written_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_stu_id_foreign` FOREIGN KEY (`stu_id`) REFERENCES `participations` (`id`);

--
-- Constraints for table `exam_infos`
--
ALTER TABLE `exam_infos`
  ADD CONSTRAINT `exam_infos_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exam_infos_examtype_id_foreign` FOREIGN KEY (`examtype_id`) REFERENCES `examtypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exam_infos_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `participations`
--
ALTER TABLE `participations`
  ADD CONSTRAINT `participations_std_id_foreign` FOREIGN KEY (`std_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `exam_infos` (`id`);

--
-- Constraints for table `writtens`
--
ALTER TABLE `writtens`
  ADD CONSTRAINT `writtens_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `writtens_examtype_id_foreign` FOREIGN KEY (`examtype_id`) REFERENCES `examtypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `writtens_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `written_questions`
--
ALTER TABLE `written_questions`
  ADD CONSTRAINT `written_questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `writtens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
