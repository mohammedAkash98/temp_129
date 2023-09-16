-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 16, 2023 at 08:52 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-pushti`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `chapter_no_bangla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `chapter_no_bangla`, `name`, `created_at`, `updated_at`) VALUES
(1, '১', 'শাওন', '2023-09-15 22:24:36', '2023-09-15 22:24:36'),
(2, '২', 'সাইফুল ইসলাম শাওন', '2023-09-15 22:24:49', '2023-09-15 22:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `chapter_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_no_bangla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `chapter_id`, `name`, `lesson_no_bangla`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'শাওন-১', '১', '<h2><strong>প্যারাগ্রাফ – Paragraph লেখার নিয়ম গুলো কি?</strong></h2><p>সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়। তবে আপনি যদি আরো কয়েকটি বিষয়ের উপর তীক্ষ্ণ নজর দেন,তাহলে পূর্বের চেয়ে ব্যাটার প্যারাগ্রাফ লিখতে পারবেন। এখন প্রশ্ন আসতে পারে যে, কি কি বিষয়গুলোকে কেন্দ্র করে একটি ভালো ও সৌন্দর্যময় প্যারাগ্রায় লিখতে পারবো? হ্যাঁ, খুবই সিম্পল এটি। এখানে বেশ কয়েকটি দিককে চিহ্নিত করে দেওয়া হলো, যেগুলোর প্রতি নজর দেওয়ার মাধ্যমে আপনিও বেশ ভালো একটি প্যারাগ্রাফ লিখতে পারবেন। সেগুলো হলো-</p><ul><li>কেবল মাত্র একটি মূলভাব অবলম্বনে একটি Paragraph লিখতে হবে</li><li>মূলভাব সম্বন্ধে ভালোভাবে চিন্তা করতে হবে</li><li>Paragraph টি অযথা দীর্ঘ করা যাবে না। এর মাঝে কোন বক্তব্যের পুনরাবৃত্তি থাকবে না</li><li>paragraph এর বাক্যগুলোকে ধারাবাহিকভাবে বিন্যস্ত করতে হবে। বিশেষ করে শুরু এবং শেষে ব্যবহৃত বাক্যকে একে অপরের অনুগামী হতে হবে।</li></ul><p>মূলত আপনাকে এই বিষয়গুলোর প্রতি যত্নশীল হতে হবে হোক সেটা Bangla Paragraph অথবা ইংলিশ প্যারাগ্রাফ। মূলত সকল প্যারাগ্রায়ের গঠনমূলত অবস্থা একই। তাই যখন আপনি একটি প্যারাগ্রাফ লিখতে চাইবেন, ঠিক তখনই আপনাকে উক্ত জিনিসগুলোর উপর দৃঢ়ভাবে নজর রাখতে হবে।</p>', '1694843194-শাওন-১.jpg', '2023-09-15 22:25:56', '2023-09-15 23:46:34'),
(2, 2, 'সাইফুল-১', '১', '<h2><strong>প্যারাগ্রাফ – Paragraph লেখার নিয়ম গুলো কি?</strong></h2><p>সাধারণভাবে আমরা বই-পত্রে যেভাবে প্যারাগ্রাফ লিখতে দেখি, মূলত সেভাবেই প্যারাগ্রাফ লেখা হয়। তবে আপনি যদি আরো কয়েকটি বিষয়ের উপর তীক্ষ্ণ নজর দেন,তাহলে পূর্বের চেয়ে ব্যাটার প্যারাগ্রাফ লিখতে পারবেন। এখন প্রশ্ন আসতে পারে যে, কি কি বিষয়গুলোকে কেন্দ্র করে একটি ভালো ও সৌন্দর্যময় প্যারাগ্রায় লিখতে পারবো? হ্যাঁ, খুবই সিম্পল এটি। এখানে বেশ কয়েকটি দিককে চিহ্নিত করে দেওয়া হলো, যেগুলোর প্রতি নজর দেওয়ার মাধ্যমে আপনিও বেশ ভালো একটি প্যারাগ্রাফ লিখতে পারবেন। সেগুলো হলো-</p><ul><li>কেবল মাত্র একটি মূলভাব অবলম্বনে একটি Paragraph লিখতে হবে</li><li>মূলভাব সম্বন্ধে ভালোভাবে চিন্তা করতে হবে</li><li>Paragraph টি অযথা দীর্ঘ করা যাবে না। এর মাঝে কোন বক্তব্যের পুনরাবৃত্তি থাকবে না</li><li>paragraph এর বাক্যগুলোকে ধারাবাহিকভাবে বিন্যস্ত করতে হবে। বিশেষ করে শুরু এবং শেষে ব্যবহৃত বাক্যকে একে অপরের অনুগামী হতে হবে।</li></ul><p>মূলত আপনাকে এই বিষয়গুলোর প্রতি যত্নশীল হতে হবে হোক সেটা Bangla Paragraph অথবা ইংলিশ প্যারাগ্রাফ। মূলত সকল প্যারাগ্রায়ের গঠনমূলত অবস্থা একই। তাই যখন আপনি একটি প্যারাগ্রাফ লিখতে চাইবেন, ঠিক তখনই আপনাকে উক্ত জিনিসগুলোর উপর দৃঢ়ভাবে নজর রাখতে হবে।</p>', '1694838412-সাইফুল-১.jpeg', '2023-09-15 22:26:52', '2023-09-15 22:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2023_09_12_120826_create_chapters_table', 1),
(33, '2023_09_12_121334_create_lessons_table', 1),
(34, '2023_09_12_121953_create_quizzes_table', 1),
(35, '2023_09_14_085820_create_results_table', 1),
(36, '2023_09_14_173310_create_overviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

DROP TABLE IF EXISTS `overviews`;
CREATE TABLE IF NOT EXISTS `overviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `current_chapter_id` int NOT NULL DEFAULT '1',
  `current_lesson_id` int NOT NULL DEFAULT '0',
  `marks` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overviews`
--

INSERT INTO `overviews` (`id`, `user_id`, `current_chapter_id`, `current_lesson_id`, `marks`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 0, '2023-09-15 23:14:57', '2023-09-15 23:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `chapter_id` bigint UNSIGNED NOT NULL,
  `lesson_id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `chapter_id`, `lesson_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Laboriosam qui ea q', 'Laborum Aut cupidit', 'Dolorem aut autem fu', 'Suscipit qui id iuIpsum quia expeditast', 'Ipsum quia expedita', 'Ipsum quia expedita', '2023-09-15 22:39:07', '2023-09-15 22:39:07'),
(3, 1, 1, 'Velit recusandae Pr', 'Deserunt est soluta', 'Aut velit ipsum ad', 'Aute quae dolores no', 'Suscipit similique c', 'Suscipit similique c', '2023-09-15 22:39:30', '2023-09-15 22:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `lesson_id` int NOT NULL,
  `chapter_id` int NOT NULL,
  `correct_ans` int DEFAULT NULL,
  `wrong_ans` int DEFAULT NULL,
  `skip_ans` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `lesson_id`, `chapter_id`, `correct_ans`, `wrong_ans`, `skip_ans`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, 0, 2, '2023-09-15 23:15:09', '2023-09-15 23:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `enrolled` tinyint(1) NOT NULL DEFAULT '1',
  `school_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_club_member` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `type`, `enrolled`, `school_name`, `class`, `gender`, `phone_no`, `password`, `present_address`, `permanent_address`, `is_club_member`, `image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Colby Bennett', 'lubeq@mailinator.com', 68, 'admin', 1, 'Oren Dunlap', 'Molestias fugiat si', 'female', '+1 (116) 628-1876', '$2y$10$R35qEGP/3rLXtnq0My2OHemf2Y7phCyvDFDH33C/Xo.B48tHd7zQ2', 'Eos quia aut corpori', 'Tempore velit illo', 'no', '1694841405-Colby Bennett.jpg', NULL, NULL, '2023-09-15 23:14:48', '2023-09-15 23:16:45'),
(2, 'Md. Tawshiqul Islam Rafi', 'tawshiq.rafi02@gmail.com', 12, 'student', 1, 'abcd', '12', 'male', '01999653644', '$2y$10$d7T7Su/K0o8XTqmooYUG2eC5i.YV48LiseReDth3u9JapSFXma9bK', '01999653644', '01999653644', 'yes', NULL, NULL, NULL, '2023-09-16 02:52:36', '2023-09-16 02:52:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
