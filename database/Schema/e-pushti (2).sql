-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2023 at 09:47 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `chapter_no_bangla`, `name`, `created_at`, `updated_at`) VALUES
(2, '১', 'খাদ্য ও পুষ্টি', '2023-09-14 01:43:47', '2023-09-14 01:43:47'),
(3, '২', 'স্বাস্থ্যসম্মত জীবনধারা', '2023-09-14 01:43:57', '2023-09-14 01:43:57'),
(4, '৩', 'মানসিক স্বাস্থ্য', '2023-09-14 01:44:08', '2023-09-14 01:44:08'),
(5, '৪', 'নেতৃত্ব', '2023-09-14 01:44:19', '2023-09-14 01:44:19'),
(6, '৫', 'সামাজিক ক্ষেত্র', '2023-09-14 01:44:28', '2023-09-14 01:44:28');

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
  `lesson_no_bangla` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `chapter_id`, `lesson_no_bangla`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, '১', 'খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি', 'কৈশোরকালে শরীরের দ্রুত বৃদ্ধি ঘটে। দেহ বৃদ্ধি বিশেষ করে শরীরের কাঠামোগত বৃদ্ধির\r\n                                        জন্য এসময় যথেষ্ট পরিমাণ পুষ্টিকর ও সুষম খাবার গ্রহণ করা প্রয়োজন । এসময় দেহের\r\n                                        চাহিদা অনুযায়ী পুষ্টিকর খাবার না খেলে শারীরিক বৃদ্ধি অ মানসিক পরিপক্বতা সঠিকভাবে\r\n                                        গড়ে উঠেনা। কৈশোরকালীন এই সময়কে Missed Opportunities বলে কারণ শিশুকালে যদি শরিরে\r\n                                        পুষ্টির কোন ঘাটতি থাকে তা এসময় পূরণ করা সম্ভব । তাই এই সময়টি পুষ্টিগত অবস্থা\r\n                                        উন্নয়নের জন্য একটা শেষ সুযোগ।', '1694682639-খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি.jpg', '2023-09-14 03:10:39', '2023-09-14 03:10:39'),
(2, 2, '২', 'খাদ্যের উপাদান ও এদের উৎস সমূহ', 'খাদ্যের যে সব রাসাযনিক পদার্থ দেহের কাজ সুষ্ঠুভাবে সম্পন্ন করে সেগুলোই খাদ্য উপাদান নামে পরিচিত। খাদ্যের পুষ্টি উপাদনা ৬টি। পাঠ সম্পর্কিত তথ্য\r\n\r\n১. শ্বেতসার বা শর্করা\r\nভাত রুটি আলু মুড়ি পাউরুটি মধু শ্বেতসার বা শর্করা জাতীয় খাবারের উৎস image\r\n\r\n২. আমিষ\r\nমাছ মাংস ডিম ডাল বাদাম দুধ আমিষ জাতীয় খাবারের উৎস (Add pic)\r\n\r\n৩. স্নেহ বা তেল\r\nভোজ্য তেল মাখন ঘি স্নেহ বা তেল জাতীয় খাবারের উৎস (Add pic)\r\n\r\n৪. ভিটামিন বা খাদ্যপ্রাণ\r\nদুধ কলিজা রঙীন শাক রঙীন সবজি ফল ভিটামিন জাতীয় খাবারের উৎস (Add pic)\r\n\r\n৫. খনিজ লবণ\r\nকলিজা গাঢ় সবুজ ও রঙীন শাক-সবজি মাছ ফল খনিজ লবণ জাতীয় খাবারের উৎস (Add pic)\r\n\r\n৬. পানি\r\nআর্সেনিকমুক্ত টিউবওয়েল পরিষ্কার-পরিচ্ছন্ন কুয়া পানির উৎস (Add pic)\r\n\r\nএই ৬টি উপাদান নির্দিষ্ট পরিমাণে ও সঠিক মাত্রায় আমাদের প্রতিদিনের খাদ্য তারিকায় থাকতে হবে। আমাদের প্রতিদিনের খাদ্যে এদের ঘাটতি হলে শরীরে ঐ নির্দিষ্ট উপাদানের ঘাটতিজনিত লক্ষণ প্রকাশ পায়। এ ঘাটতি বেশি দিন থাকলে মানুষ অসুস্থ হয়ে পড়ে।\r\n\r\nকাজ অনুযায়ী খাদ্যের শ্রেণীবিভাগ\r\n১. তাপ ও শক্তি উৎপাদনকারী খাদ্য: (শর্করা ও চর্বি জাতীয়) যেমন: ভাত, রুটি, আলু, গুড় মিষ্টিআলু, পাউরুটি, তেল, মাখন, ঘি, চর্বি, মধু, বাদাম, নারিকেল ইত্যাদি।\r\n২. ক্ষয়পূরণ ও দেহ বৃদ্ধিকারী খাদ্য: (আমিষ জাতীয়) যেমন: মাছ (ছোটমাছ, বড়মাছ), মাংস, দুধ, ডিম, সয়াবিন, ডাল, সিমের বীচি, কলিজা ইত্যাদি।\r\n৩. রোগ প্রতিরোধকারী খাদ্য: (ভিটামিন ও খনিজ সমৃদ্ধ) যেমন: গাঢ় হলুদ, সবুজ ও কমলা রঙের সব ধরনের শাক-সবজি ও ফলমূল, পাকা তাল, পাকা পেঁপে, পাকা কাঁঠাল, আনারস, পেয়ারা, আমলকি, আমড়া, কলা, লেবু, গাজর, মিষ্টিকুমড়া, শিম, ছোটমাছ, দুধ, ডিম, কলিজা ইত্যাদি।', '1694683249-খাদ্যের উপাদান ও এদের উৎস সমূহ.jpg', '2023-09-14 03:20:49', '2023-09-14 03:20:49'),
(3, 2, '৩', 'সুষম খাবার কি, সুষম খাবার খাওয়ার প্রয়োজনীয়তা', 'সুষম খাদ্য\r\nসুষম খাদ্য হচ্ছে সেই খাদ্য, যেখানে খাদ্যের সব পুষ্টি উপাদান দেহের প্রয়োজন মত বয়স, লিঙ্গ, কাজের ধরন, শারীরিক অবস্থা ভেদে সঠিক মাত্রায় থাকে। অর্থাৎ সুষম খাদ্য হলো এমন একটি খাবার যেখানে শক্তিদায়ক, শরীর বৃদ্ধিকারক রোগ প্রতিরাধক খাদ্য উপাদান পরিমান মত রয়েছে। বেশি খরচ করে যেমন সুষম খাবার খাওয়া যায়, তেমনি অল্প খরচেও সুষম খাবার খাওয়া যায়। পাঠ সম্পর্কিত তথ্য\r\n\r\nসুষম খাদ্যের প্রয়োজনীয়তা\r\nকৈশোরে শরীরের দ্রুত বৃদ্ধির জন্য।\r\nশরীরের কাঠামোগত বৃদ্ধির জন্য।\r\nশরীরে গ্রোথ হরমোন নামক এক বিশেষ হরমোন বেশি করে তৈরি হয় যা দ্রুত বৃদ্ধির কাজ করে।\r\nদেহের চাহিদা মাফিক পুষ্টিকর ও সুষম খাবার না পেলে শরীরের বৃদ্ধি পুরোপুরি হয় না।\r\nছেলেমেয়েদের এই সময়কার পুষ্টির উপর নির্ভর করে তাদের শারীরিক উচ্চতা বৃদ্ধি।', '1694683422-সুষম খাবার কি, সুষম খাবার খাওয়ার প্রয়োজনীয়তা.jpg', '2023-09-14 03:23:42', '2023-09-14 03:23:42'),
(5, 3, '৪', 'নিরাপদ খাবার, খাদ্য ক্ষতি এবং অপচয়', 'নিরাপদ খাবার, খাদ্য ক্ষতি এবং অপচয়', '1694685089-নিরাপদ খাবার, খাদ্য ক্ষতি এবং অপচয়.jpg', '2023-09-14 03:51:29', '2023-09-14 03:51:29'),
(6, 3, '২', 'নিরাপদ পানি ও ব্যবস্থাপনা', 'নিরাপদ পানি ও ব্যবস্থাপনা', '1694685161-নিরাপদ পানি ও ব্যবস্থাপনা.jpg', '2023-09-14 03:52:41', '2023-09-14 03:52:41'),
(7, 3, '৩', 'ব্যক্তিগত পরিষ্কার পরিছন্নতা ও স্বাস্থ্য সুরক্ষা', 'ব্যক্তিগত পরিষ্কার পরিছন্নতা ও স্বাস্থ্য সুরক্ষা', '1694685236-ব্যক্তিগত পরিষ্কার পরিছন্নতা ও স্বাস্থ্য সুরক্ষা.jpg', '2023-09-14 03:53:56', '2023-09-14 03:53:56'),
(8, 4, '১', 'মানসিক স্বাস্থ্য', 'মানসিক স্বাস্থ্য', '1694685270-মানসিক স্বাস্থ্য.jpg', '2023-09-14 03:54:30', '2023-09-14 03:54:30'),
(9, 5, '১', 'নেতৃত্ব', 'নেতৃত্ব', '1694685291-নেতৃত্ব.jpg', '2023-09-14 03:54:51', '2023-09-14 03:54:51'),
(10, 6, '১', 'সামাজিক ক্ষেত্র', 'সামাজিক ক্ষেত্র', '1694685337-সামাজিক ক্ষেত্র.jpg', '2023-09-14 03:55:37', '2023-09-14 03:55:37');

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
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(57, '2014_10_12_000000_create_users_table', 1),
(58, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(59, '2019_08_19_000000_create_failed_jobs_table', 1),
(60, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(61, '2023_09_12_120826_create_chapters_table', 1),
(62, '2023_09_12_121334_create_lessons_table', 1),
(63, '2023_09_12_121953_create_quizzes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

DROP TABLE IF EXISTS `overviews`;
CREATE TABLE IF NOT EXISTS `overviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `current_chapter_id` int NOT NULL DEFAULT '0',
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
(1, 5, 1, 2, 0, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `quizze_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `type`, `enrolled`, `school_name`, `class`, `gender`, `phone_no`, `password`, `present_address`, `permanent_address`, `is_club_member`, `image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'shaon', 'fuvego@mailinator.com', 59, 'admin', 1, 'Jemima Bryant', 'Quia quam natus alia', 'male', '01670046492', '$2y$10$wXJ7XeElAgXhQfzFrxGhIeSuIf1ZTpnGY01j5U017u8sUeLX/BV3e', 'Voluptatem harum a', 'Voluptatem vel id i', 'yes', NULL, NULL, NULL, '2023-09-13 14:31:47', '2023-09-13 22:37:12'),
(3, 'Brock Price', 'kilejykuw@mailinator.com', 47, 'admin', 1, 'Ava Duffy', 'Aperiam aut dolor co', 'male', '+1 (369) 837-9689', '$2y$10$O6/Sj19wtdGjHyhoezQCfeENt7wOoWDryaVamGc.vKVhgHZlIY12S', 'Ea vero animi disti', 'Rem aspernatur dicta', 'yes', NULL, NULL, NULL, '2023-09-13 22:52:47', '2023-09-13 22:59:06'),
(4, 'Burke Cleveland', 'suledi@mailinator.com', 61, 'student', 1, 'Madeline Briggs', 'Non voluptas obcaeca', 'female', '+1 (454) 206-2744', '$2y$10$I950iP.uiuwZX0mEdnWXAOSxI3dM.kFK7A/CVmLN1blxQ1Cem9WKG', 'Hic iure vel adipisi', 'Eum qui dolore sint', 'no', NULL, NULL, NULL, '2023-09-13 22:57:19', '2023-09-13 22:57:19'),
(5, 'Md.Tawshiqul Islam Rafi', 'admin@shojonsl.com', 12, 'student', 1, 'abcd', '12', 'male', '01999653644', '$2y$10$1gZfC3S2bIDI7v8SAUmfF.FBUGKA/u2ZEHUGz1WBnaVsjaxUMKwWG', 'Islam Mansion, Navy Hospital Gate, EPZ, Chittagong, Bangladesh', '01999653644', 'yes', '1694707716-Md. Tawshiqul Islam Rafi.jpg', NULL, NULL, '2023-09-14 09:49:33', '2023-09-14 10:08:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
