-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2023 at 05:22 AM
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
-- Table structure for table `activity_sheets`
--

DROP TABLE IF EXISTS `activity_sheets`;
CREATE TABLE IF NOT EXISTS `activity_sheets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_sheets`
--

INSERT INTO `activity_sheets` (`id`, `user_id`, `name`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 2, 'Activity Sheet 1', '1695009911-Activity Sheet 1.pdf', '2023-09-17 22:05:11', '2023-09-17 22:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `chapter_no_bangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `chapter_no_bangla`, `name`, `created_at`, `updated_at`) VALUES
(1, '১', 'খাদ্য ও পুষ্টি', '2023-09-15 23:13:15', '2023-09-15 23:13:15'),
(2, '২', 'স্বাস্থ্যসম্মত জীবনধারা', '2023-09-15 23:13:32', '2023-09-15 23:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

DROP TABLE IF EXISTS `home_contents`;
CREATE TABLE IF NOT EXISTS `home_contents` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `chapter_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_no_bangla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `chapter_id`, `name`, `lesson_no_bangla`, `header_description`, `description`, `image`, `audio`, `video`, `created_at`, `updated_at`) VALUES
(1, 1, 'খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি', '১', '<p><strong>খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি</strong><br><br>কৈশোরকালে শরীরের দ্রুত বৃদ্ধি ঘটে। দেহ বৃদ্ধি বিশেষ করে শরীরের কাঠামোগত বৃদ্ধির জন্য এসময় যথেষ্ট পরিমাণ পুষ্টিকর ও সুষম খাবার গ্রহণ করা প্রয়োজন । এসময় দেহের চাহিদা অনুযায়ী পুষ্টিকর খাবার না খেলে শারীরিক বৃদ্ধি অ মানসিক পরিপক্বতা সঠিকভাবে গড়ে উঠেনা।', '<p><strong>খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি</strong><br><br>কৈশোরকালে শরীরের দ্রুত বৃদ্ধি ঘটে। দেহ বৃদ্ধি বিশেষ করে শরীরের কাঠামোগত বৃদ্ধির জন্য এসময় যথেষ্ট পরিমাণ পুষ্টিকর ও সুষম খাবার গ্রহণ করা প্রয়োজন । এসময় দেহের চাহিদা অনুযায়ী পুষ্টিকর খাবার না খেলে শারীরিক বৃদ্ধি অ মানসিক পরিপক্বতা সঠিকভাবে গড়ে উঠেনা। কৈশোরকালীন এই সময়কে&nbsp;Missed Opportunities&nbsp;বলে<strong>&nbsp;</strong>কারণ শিশুকালে যদি শরিরে পুষ্টির কোন ঘাটতি থাকে তা এসময় পূরণ করা সম্ভব <strong>।&nbsp;</strong>তাই এই সময়টি পুষ্টিগত অবস্থা উন্নয়নের জন্য একটা শেষ সুযোগ।<br><br><strong>খাদ্য</strong><br><br>খাদ্য হচ্ছে এমন কতকগুলো প্রয়োজনীয় উপাদানের সমষ্টি যা গ্রহণের মাধ্যমে শরীরের স্বাভাবিক বৃদ্ধি ও কর্মক্ষমতা বজায় থাকে, ক্ষয়পূরণ ও বিভিন্নভাবে কাজের জন্য প্রয়োজনীয় শক্তির যোগান দেয়, এবং সর্বোপরি রোগ প্রতিরোধ ক্ষমতা তৈরী করে।&nbsp;</p><p>&nbsp;</p><p><strong>পুষ্টি</strong></p><p>&nbsp;</p><p>পুষ্টি হচ্ছে এমন একটি প্রক্রিয়া যার মাধ্যমে গ্রহণ করা খাদ্য শোষিত হয়ে শরীরে তাপ ও শক্তি উৎপন্ন করে, শরীরের বৃদ্ধি সাধন করে এবং রোগ প্রতিরোধ ক্ষমতা সৃষ্টি করে।&nbsp;খাদ্যের&nbsp;সাথে স্বাস্থ্যের সম্পর্কই হল পুষ্টি। অর্থাৎ স্বাস্থ্য গঠনে খাদ্যের ভূমিকা অথবা খাদ্যের সাথে সুস্থ-সবল অ কর্মক্ষম স্বাস্থ্য গঠন এবং বজায় রাখার জন্য যে যোগসূত্র সে প্রক্রিয়াকে আমরা পুষ্টি বলি।<br><br><strong>পুষ্টিকর খাদ্য&nbsp;</strong><br><br>যে&nbsp;সব খাদ্য খেলে শরীরে তাপ ও শক্তি উৎপাদিত হয, দেহের গঠন বৃদ্ধি হয়, শরীর সবল, কর্মক্ষম ও নিরোগ থাকে তাই পুষ্টিকর খাদ্য।</p><p>খাদ্য ও পুষ্টি একে অপরের সাথে জড়িত। যে কোন খাদ্য গ্রহণ কলেই হবে না, তা অবশ্যই পুষ্টিকর ও নিরাপদ হতে হবে। পুষ্টিকর খাদ্য গ্রহণ কনা করলে রোগ প্রতিরোধ ক্ষমতা কমে যায় এবং শরীরে বিভিন্ন ধরনের রোগ হয়। পুষ্টিকর খাবার গ্রহণ করলে শরীর ও মন উভয়ই ভাল থাকে।<br><br><br>&nbsp;</p>', '1694954060-খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি.jpg', NULL, NULL, '2023-09-15 23:15:55', '2023-09-17 06:34:20'),
(2, 1, 'খাদ্যের উপাদান ও এদের উৎস সমূহ', '২', '<p><strong>খাদ্যের উপাদান ও এদের উৎস সমূহ</strong><br><br><br><strong>&nbsp;</strong>খাদ্যের যে সব রাসাযনিক পদার্থ দেহের কাজ সুষ্ঠুভাবে সম্পন্ন করে সেগুলোই খাদ্য উপাদান নামে পরিচিত। খাদ্যের পুষ্টি উপাদনা ৬টি।</p><p><strong>১. শ্বেতসার বা শর্করা</strong></p><p>ভাত&nbsp; রুটি&nbsp; আলু&nbsp;মুড়ি &nbsp;পাউরুটি &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; মধু</p><p>শ্বেতসার বা শর্করা জাতীয় খাবারের উৎস&nbsp;&nbsp;</p><p><strong>২. আমিষ</strong></p><p>মাছ&nbsp; মাংস&nbsp;ডিম&nbsp; ডাল&nbsp; বাদাম&nbsp;দুধ</p><p>আমিষ জাতীয় খাবারের উৎস&nbsp;</p><p><strong>৩. স্নেহ বা তেল</strong></p><p>ভোজ্য তেল&nbsp;&nbsp;&nbsp;&nbsp;', '<p><strong>খাদ্যের উপাদান ও এদের উৎস সমূহ</strong><br><br><br><strong>&nbsp;</strong>খাদ্যের যে সব রাসাযনিক পদার্থ দেহের কাজ সুষ্ঠুভাবে সম্পন্ন করে সেগুলোই খাদ্য উপাদান নামে পরিচিত। খাদ্যের পুষ্টি উপাদনা ৬টি।</p><p><strong>১. শ্বেতসার বা শর্করা</strong></p><p>ভাত&nbsp; রুটি&nbsp; আলু&nbsp;মুড়ি &nbsp;পাউরুটি &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; মধু</p><p>শ্বেতসার বা শর্করা জাতীয় খাবারের উৎস&nbsp;&nbsp;</p><p><strong>২. আমিষ</strong></p><p>মাছ&nbsp; মাংস&nbsp;ডিম&nbsp; ডাল&nbsp; বাদাম&nbsp;দুধ</p><p>আমিষ জাতীয় খাবারের উৎস&nbsp;</p><p><strong>৩. স্নেহ বা তেল</strong></p><p>ভোজ্য তেল&nbsp;&nbsp;&nbsp;&nbsp; মাখন&nbsp;&nbsp;&nbsp;&nbsp; ঘি</p><p>স্নেহ বা তেল জাতীয় খাবারের উৎস&nbsp;</p><p><strong>৪. ভিটামিন বা খাদ্যপ্রাণ</strong></p><p>দুধ &nbsp; কলিজা&nbsp;&nbsp;রঙীন শাক&nbsp;রঙীন সবজি&nbsp;&nbsp;&nbsp;&nbsp; ফল&nbsp;</p><p>ভিটামিন জাতীয় খাবারের উৎস&nbsp;</p><p><strong>৫. খনিজ লবণ</strong></p><p>কলিজা গাঢ় সবুজ ও রঙীন শাক-সবজি&nbsp; মাছ&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ফল</p><p>খনিজ লবণ জাতীয় খাবারের উৎস&nbsp;</p><p><strong>৬. পানি</strong></p><p>আর্সেনিকমুক্ত টিউবওয়েল&nbsp;&nbsp;পরিষ্কার-পরিচ্ছন্ন কুয়া</p><p>পানির উৎস&nbsp;</p><p>এই ৬টি উপাদান নির্দিষ্ট পরিমাণে ও সঠিক মাত্রায় আমাদের প্রতিদিনের খাদ্য তারিকায় থাকতে হবে। আমাদের প্রতিদিনের খাদ্যে এদের ঘাটতি হলে শরীরে ঐ নির্দিষ্ট উপাদানের ঘাটতিজনিত লক্ষণ প্রকাশ পায়। এ ঘাটতি বেশি দিন থাকলে মানুষ অসুস্থ হয়ে পড়ে।</p><p><strong>কাজ অনুযায়ী খাদ্যের শ্রেণীবিভাগ</strong></p><p><strong>১. তাপ ও শক্তি উৎপাদনকারী খাদ্য:</strong> (শর্করা ও চর্বি জাতীয়) যেমন: ভাত, রুটি, আলু, গুড় মিষ্টিআলু, পাউরুটি, তেল, মাখন, ঘি, চর্বি, মধু, বাদাম, নারিকেল ইত্যাদি।</p><p><strong>২. ক্ষয়পূরণ ও দেহ বৃদ্ধিকারী খাদ্য</strong>: (আমিষ জাতীয়) যেমন: মাছ (ছোটমাছ, বড়মাছ), মাংস, দুধ, ডিম, সয়াবিন, ডাল, সিমের বীচি, কলিজা ইত্যাদি।</p><p><strong>৩. রোগ প্রতিরোধকারী খাদ্য:</strong> (ভিটামিন ও খনিজ সমৃদ্ধ) যেমন: গাঢ় হলুদ, সবুজ ও কমলা রঙের সব ধরনের শাক-সবজি ও ফলমূল, পাকা তাল, পাকা পেঁপে, পাকা কাঁঠাল, আনারস, পেয়ারা, আমলকি, আমড়া, কলা, লেবু, গাজর, মিষ্টিকুমড়া, শিম, ছোটমাছ, দুধ, ডিম, কলিজা ইত্যাদি।<br><br>&nbsp;</p>', '1694954107-খাদ্যের উপাদান ও এদের উৎস সমূহ.jpg', NULL, NULL, '2023-09-15 23:27:33', '2023-09-17 06:35:07'),
(3, 1, 'সুষম খাবার কি , সুষম খাবার খাওয়ার প্রয়োজনীয়তা', '৩', '<p><br><strong>সুষম খাদ্য:</strong></p><p>সুষম খাদ্য হচ্ছে সেই খাদ্য, যেখানে খাদ্যের সব পুষ্টি উপাদান দেহের প্রয়োজন মত বয়স, লিঙ্গ, কাজের ধরন, শারীরিক অবস্থা ভেদে সঠিক মাত্রায় থাকে। অর্থাৎ সুষম খাদ্য হলো এমন একটি খাবার যেখানে শক্তিদায়ক, শরীর বৃদ্ধিকারক রোগ প্রতিরাধক খাদ্য উপাদান পরিমান মত রয়েছে। বেশি খরচ করে যেমন সুষম খাবার খাওয়া যায়, তেমনি অল্প খরচেও সুষম খাবার খাওয়া যায়।</p><p><strong>সুষম খাদ্যের প্রয়োজনীয়তা</strong>', '<p><br><strong>সুষম খাদ্য:</strong></p><p>সুষম খাদ্য হচ্ছে সেই খাদ্য, যেখানে খাদ্যের সব পুষ্টি উপাদান দেহের প্রয়োজন মত বয়স, লিঙ্গ, কাজের ধরন, শারীরিক অবস্থা ভেদে সঠিক মাত্রায় থাকে। অর্থাৎ সুষম খাদ্য হলো এমন একটি খাবার যেখানে শক্তিদায়ক, শরীর বৃদ্ধিকারক রোগ প্রতিরাধক খাদ্য উপাদান পরিমান মত রয়েছে। বেশি খরচ করে যেমন সুষম খাবার খাওয়া যায়, তেমনি অল্প খরচেও সুষম খাবার খাওয়া যায়।</p><p><strong>সুষম খাদ্যের প্রয়োজনীয়তা</strong></p><ul><li>কৈশোরে শরীরের দ্রুত বৃদ্ধির জন্য</li><li>শরীরের কাঠামোগত বৃদ্ধির জন্য</li><li>শরীরে গ্রোথ হরমোন নামক এক বিশেষ হরমোন বেশি করে তৈরি হয় যা দ্রুত বৃদ্ধির কাজ করে</li><li>দেহের চাহিদা মাফিক পুষ্টিকর ও সুষম খাবার না পেলে শরীরের বৃদ্ধি পুরোপুরি হয় না</li></ul><p>ছেলেমেয়েদের এই সময়কার পুষ্টির উপর নির্ভর করে তাদের শারীরিক উচ্চতা বৃদ্ধি<br><br><br>&nbsp;</p>', '1694954125-সুষম খাবার কি , সুষম খাবার খাওয়ার প্রয়োজনীয়তা.jpg', NULL, NULL, '2023-09-15 23:34:40', '2023-09-17 06:35:25'),
(4, 1, 'কৈশোরকালে বৈচিত্র্যময় খাবার ও পুষ্টির গুরুত্ব', '৪', '<p><strong>খাবারে বৈচিত্র্য:</strong></p><p><strong>কৈশোরকালনি বৈচিত্র্যময় খাবারের গুরুত্ব</strong></p><p>কৈশোরকালে পুষ্টি সমস্যার সাথে প্রথাগত শারীরিক, মানসিক ও আর্থ-সামাজিক কারণ জড়িত থাকে। কৈশোরকালে খাবার এমন হতে হবে যেন সেই খাবার পরিমাণে সঠিক হয় এবং এতে খাদ্যের ৬টি উপাদানই বিদ্যমান থাকে। একই খাবার বার বার খেতে ভালো লাগবে না তাই মাঝে মাঝে ভিন্ন ভিন্ন ধরনের খাবার দেওয়া ভালো। এতে খাবারের রুচি থাকবে।', '<p><strong>খাবারে বৈচিত্র্য:</strong></p><p><strong>কৈশোরকালনি বৈচিত্র্যময় খাবারের গুরুত্ব</strong></p><p>কৈশোরকালে পুষ্টি সমস্যার সাথে প্রথাগত শারীরিক, মানসিক ও আর্থ-সামাজিক কারণ জড়িত থাকে। কৈশোরকালে খাবার এমন হতে হবে যেন সেই খাবার পরিমাণে সঠিক হয় এবং এতে খাদ্যের ৬টি উপাদানই বিদ্যমান থাকে। একই খাবার বার বার খেতে ভালো লাগবে না তাই মাঝে মাঝে ভিন্ন ভিন্ন ধরনের খাবার দেওয়া ভালো। এতে খাবারের রুচি থাকবে। কৈশেরা ছেলে-মেয়েরা লেখাপড়া ও খেলাধূলা নিয়ে ব্যস্ত থাকে। কিশোর-কিশোরী সহ সবার জন্য ঘরে তৈরি খাবারই উত্তম। তাই তাদের ঘরে তৈরি করা পুষ্টির খাবার খেতে দিতে হবে।</p><p>তবে কৈশোরে ছেলে-মেয়েরা রাস্তার খোলা খাবার, চানাচুর, আচার, মুড়ালী, চটপটি, চিপস, আইসক্রিম, কেক, কোমল পানীয়-জুস, এ্যানার্জি ড্রিংক ইত্যাদি মুখরোচক খাবার খায়। এগুলোতে চর্বি ও শর্করার মাত্রা বেশি থাকে যা পরবর্তী জীবনে স্থূলতা, হৃদরোগ এবং ডায়াবেটিসের মতো রোগের ঝুঁকি বাড়িয়ে দেয়।</p><p><strong>কিভাবে খাবারে বৈচিত্র্য আনা যায়</strong></p><ul><li>সব ধরনের খাবার পরিমান মত খেতে হবে কারন ভিন্ন ভিন্ন খাবারে ভিন্ন ভিন্ন পুষ্টি উপাদান থাকে।</li><li>এই সব খাবার যথেষ্ট পরিমাণ শক্তি, আমিষ এবং অনুপুষ্টি চাহিদা পূরণ করে।</li><li>ভিন্ন ভিন্ন ধরনের খাবার খেতে হবে, এতে খাওয়ার রুচি বাড়ে।</li></ul><p>পরিমিত পুষ্টি থেকে আসে সুস্বাস্থ্য। সুস্বাস্থ্য অর্জন ও রক্ষার জন্য সুষম খাদ্য গ্রহণ অপরিহার্য। সেই সাথে দৈনিক কমপক্ষে ১.৫-৩.৫ লিটার অর্থাৎ ৬-১৪ গ্লাস বিশুদ্ধ পানি পান করা প্রয়োজন। দৈনিক কমপক্ষে ১০০ গ্রাম শাক ও ২০০ গ্রাম সবজি এবং ১০০ গ্রাম মৌসুমী ফল খেলে শরীর প্রয়োজনীয় অনুপুষ্টি এবং খাদ্য আঁশ পায়।</p><p><br><strong>কৈশোরকালে পুষ্টির গুরুত্ব:</strong></p><p>১০-১৯ বছর বয়স হলো শরীর বা দেহ বৃদ্ধির সঠিক সময় অর্থাৎ কৈশোরে দেহের দ্রুত বৃদ্ধি হয়, তাই এই বয়সে শরীরে পুষ্টির চাহিদা ও প্রয়োজনীয়তা বেশি থাকে। এটি শারীরিক ও মানসিক বৃদ্ধির একটি গুরুত্বপূর্ণ সময়। এই বৃদ্ধির সাথে মানবিকবোধ, আবেগানুভূতি ও হরমোন জনিত পরিবর্তনও জড়িত।</p><p><strong>কিশোরীদের ক্ষেত্রে পুষ্টির গুরুত্ব:</strong></p><p>১. কৈশোরকালে মেয়েদের উচ্চতা ও ওজন বাড়ে এবং মানসিক পরিপক্কতা আসে। এসময় চাহিদা অনুযায়ী সঠিক পরিমাণে পুষ্টি উপাদান গ্রহণ করলে কিশোরীদের শারীরিক ও মানসিক বৃদ্ধি সঠিকভাবে হয়।</p><p>২. ঋতুস্রাব বা মাসিকের জন্য শরীর থেকে অনেক রক্ত বের হয়ে যায়। একারণে শরীরে রক্তের ঘাটতি পূরণের জন্য পরিমিত পরিমাণ পুষ্টিকর খাবার বিশেষ করে লৌহযুক্ত খাবার গ্রহণের প্রয়োজনীয়তা অপরিসীম।</p><p>৩. গর্ভকালীন, প্রসবকালীন ঝুঁকি ও কম ওজনের শিশু জন্মদানের সম্ভাবনা কমানোর জন্য কিশোরীদের ক্ষেত্রে পুষ্টি গুরুত্বপূর্ণ ভূমিকা রাখে।</p><p><strong>কিশোরদের ক্ষেত্রে পুষ্টির গুরুত্ব:</strong><br><br>&nbsp;</p><p>১. কৈশোরকালে ছেলেদের উচ্চতা ও ওজন বাড়ে, শরীরে দৃঢ়তা আসে, বুক-কাঁধ চওড়া হয়, বীর্যপাত হয়। তাই এসময়ে দেহের চাহিদা অনুযায়ী সঠিক পরিমাণে পুষ্টি উপাদান গ্রহণ করা আবশ্যক।</p><p>২. পুষ্টিকর খাবার গ্রহণের ফলে কিশোরদের শরীরের মাংসপেশী পরিপূর্ণভাবে বৃদ্ধিপ্রাপ্ত হয়।</p><p>৩. পুষ্টিকর খাবার গ্রহণ করলে কিশোরদের প্রজনন ক্ষমতা স্বাভাবিক থাকে।</p><p>কৈশোরকালের সঠিক পুষ্টি উপাদান গ্রহণ কিশোর-কিশোরীদের পড়াশুনায় মনোযোগ বৃদ্ধি করে, পরবর্তীকালে শারীরিক আকার-আকৃতি, কর্মক্ষমতা, সন্তান জন্মদানে সহজসাধ্যতাকে নির্ধারণ করে। কৈশোরে মানুষের জীবনযাত্রা ও খাবারের রুচির পরিবর্তন হয়। কিশোর-কিশোরীরা অনেক সময় অপুষ্টিজনিত সমস্যায় ভুগে থাকে কারণ সে সময় তাদের অধিক মাত্রায় পুষ্টির প্রয়োজন হয় এবং তাদের স্বাস্থ্য ও পুষ্টি সমস্যা প্রায়ই সনাক্ত হয় না।</p><p><strong>অপর্যাপ্ত পুষ্টির কারণে কৈশোরকালীন স্বাস্থ্যের উপর নেতিবাচক প্রভাব পড়ে এবং তা দীর্ঘস্থায়ী রোগের ঝুঁকি বৃদ্ধি করে। যেমন:</strong></p><p>১. আয়রন ঘাটতির কারণে কিশোর-কিশোরীদের শারীরিক ও মানসিক বৃদ্ধি ব্যাহত হয়, স্বাভাবিক জ্ঞান বৃদ্ধির বিকাশ কমে যায় এবং পড়ালেখার প্রতি মনোযোগ অনেকাংশে কমে যায় ফলে স্কুলে যাবার আগ্রহ হারিয়ে ফেলে।</p><p>২. কিশোরীদের মাসিক ঋতুস্রাবের কারণে শরীরে আয়রনের চাহিদা বেড়ে যায়। ফলে পর্যাপ্ত আয়রন সমৃদ্ধি খাবার না খেলে রক্তস্বল্পতা দেখা দেয়।</p><p>৩. পুষ্টিকর খাবার না খাওয়ায় এবং বাইরের মুখরোচক খাবার খাওয়ার কারণে কিশোর-কিশোরীদের দেহে অতিরিক্ত চর্বি জমা হয়ে স্থূলতা সৃষ্টি করে যা পরবর্তীতে অনেক কম বয়সেই ডায়াবেটিস, হৃদরোগ, শ্বাসকষ্ট, কিডনী সমস্যাজনিত অনেক জটিল রোগের জন্ম দেয়।</p><p>৪. সবুজ শাক-সবজি কম গ্রহণের ফলে মেয়েদের ডিম্বাশয়ে ক্যান্সার হওয়ার ঝুঁকি ‍বৃদ্ধি পায়।</p><p>৫. চাহিদা অনুযায়ী পুষ্টিকর খাবার গ্রহণ না করলে কিশোরদের প্রজনন ক্ষমতা হ্রাস পেতে পারে।</p><p>৬. কিশোরী অবস্থায় গর্ভধারণ (বিশেষ করে মা যদি অপুষ্টিতে ভোগেন) মা ও শিশু উভয়ের স্বাস্থ্য ঝুঁকির মধ্যে পড়ে যায়।</p><p>অতিরিক্ত কায়িক পরিশ্রম, মানসিক ও শারীরিক চাপ কৈশোরকালে পুষ্টির প্রয়োজনীয়তাকে আরও বাড়িয়ে দেয়। পরিবারের মধ্যে খাবার বিতরণ ও খাবার গ্রহণে ছেলে-মেয়ের মধ্যে প্রথাগত আচরণের কারণে অনেক দেশে শৈশব থেকে শুরু করে কৈশোরকাল পর্যন্ত মেয়েরা বিশেষভাবে অপুষ্টির শিকার হয়ে থাকে। এসকল কারণে কিশোর-কিশোরীদের পুষ্টির গুরুত্ব অপরিসীম।<br><br>&nbsp;</p>', '1694954163-কৈশোরকালে বৈচিত্র্যময় খাবার ও পুষ্টির গুরুত্ব.jpg', NULL, NULL, '2023-09-15 23:36:40', '2023-09-17 06:36:03'),
(5, 1, 'পুষ্টি উপাদানের উৎসসমূহ', '৫', '<p><br><strong>প্রধানপুষ্টি (Macronutrient):</strong></p><p>যে সকল পুষ্টি উপাদান আমাদের দেহে অধিক পরিমাণে প্রয়োজন হয় সেগুলো হলো প্রধান পুষ্টি উপাদান।</p><p>প্রধানপুষ্টি উপাদানসমূহ:</p><p>১. শর্করা</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;— দেহে কর্মক্ষমতা বৃদ্ধি এবং তাপ শক্তি উৎপাদন করে।</p><p>&nbsp;', '<p><br><strong>প্রধানপুষ্টি (Macronutrient):</strong></p><p>যে সকল পুষ্টি উপাদান আমাদের দেহে অধিক পরিমাণে প্রয়োজন হয় সেগুলো হলো প্রধান পুষ্টি উপাদান।</p><p>প্রধানপুষ্টি উপাদানসমূহ:</p><p>১. শর্করা</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;— দেহে কর্মক্ষমতা বৃদ্ধি এবং তাপ শক্তি উৎপাদন করে।</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;— দেহের কোষ্ঠবদ্ধতা দূর করে।</p><p>উৎসঃ চাল, গম, আলু, খেজুর, চিনি, গুড়, আম, কলা, কমলালেবু, শাক—সবজি, বেল, তরমুজ, আংগুর, আপেল ইত্যাদি।</p><p>(picture)</p><p>২. আমিষ</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; — দেহের বৃদ্ধি, কোষ গঠন, ক্ষয়পূরণ করে।</p><p>&nbsp; &nbsp; &nbsp; &nbsp; — এনজাইম, হরমোন ইত্যাদি সৃষ্টি করে</p><p>উৎস: ডিম, মাংস, বাদাম, ডাল, মাছ ও দুধজাতীয় খাবার প্রোটিনের উৎস।<br>(Picture)</p><p>৩. স্নেহ<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br><br><br>&nbsp;</p><p><strong>অণুপুষ্টি (Micronutrient):</strong></p><p>অণুপুষ্টি উপাদানসমূহ আমাদের অতি সামান্য পরিমাণে প্রয়োজন, কিন্তু এগুলো এতই গুরুত্বপূর্ণ যে নির্দিষ্ট পরিমাণ গ্রহণ করা ন হলে একজন মানুষ অসুস্থ অথবা শারীরিক বা মানসিক প্রতিবন্ধী হতে পারে।</p><p><strong>অণুপুষ্টি উপাদানসমূহ:</strong></p><figure class=\"table\"><table><tbody><tr><td><figure class=\"table\"><table><tbody><tr><td><strong>অভাব</strong><br>-রাতকানা<br>-ত্বক খসখসে হয়<br>-রোগ প্রতিরোধ খমতা হ্রাস পায়<br>-চুল লালচে হয়&nbsp;</td></tr></tbody></table></figure></td></tr></tbody></table></figure><p>খাদ্যে অনেক ধরনের অণুপুষ্টি আছে তার মধ্যে গুরুত্বপূর্ণ হচ্ছে-</p><p>১. ভিটামিন-এ<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -চোখ সুস্থ রাখে এবং দৃষ্টিশক্তি সংরক্ষণ করে।<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-শরীরের ক্যান্সারসহ বিভিন্ন রোগ প্রতিরোধ করে<br>&nbsp; &nbsp; &nbsp; &nbsp; -দেহের স্বাভাবিক বৃদ্ধিতে সহযোগিতা করে।<br>&nbsp;উৎস-মলা মাছ, মিষ্টি কুমড়া, গাজর, রঙিন শাকসবজি অ ফল্মুল,কলিজা<br><br>&nbsp;</p><p>২. ভিটামিন-বি (কমপ্লেক্স)&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -রোগ প্রতিরোধ ক্ষমতা বাড়ায়<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -স্মরণশক্তি বৃদ্ধি করে<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -কর্মশক্তি বাড়ায়<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -হৃদরোগ প্রতিরোধ করে&nbsp;<br>&nbsp; উৎস- ঢেঁকিছাটা চাল, মুরগি/গরুর কলিজা, চিনাবাদাম, বরবটি&nbsp;<br>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><figure class=\"table\"><table><tbody><tr><td><strong>অভাব</strong><br>-জিহ্বা ও ঠোঁটের কোণায় ঘা হয়।<br>-রক্তস্বল্পতা এবং হৃদরোগের ঝুঁকি বেড়ে যায়<br>-স্নায়বিক রগ দেখা দেয়<br>-গর্ভবতী মায়েদের ফলিক এসিডের অভাবে শিশুরা জন্মগত কিছু সমস্যায়&nbsp; ভগে।&nbsp;<br>&nbsp;</td></tr></tbody></table></figure></td></tr></tbody></table></figure><p>৩. ভিটামিন-সি</p><p>৪. ভিটামিন-ডি</p><p>৫. আয়রন</p><p>৬. আয়োডিন</p><p>৭. জিংক</p><p>৮. ক্যালসিয়াম</p><p>একই খাদ্যে একাধিক অণুপুষ্টি পাওয়া যায়। অণুপুষ্টির অভাব প্রতিরোধ করতে হলে নিয়মিত বিভিন্ন রঙের ফলমূল, শাকসবজি এবং প্রাণিজ খাবার খেতে হবে।</p><p>কিশোর-কিশোরীদের প্রত্যেক বয়সের শক্তির চাহিদা ভিন্ন ভিন্ন হয়। এসময় দেহের বিভিন্ন পরিবর্তনের সাথে সাথে শক্তির চাহিদা বৃদ্ধি পায়।<br><br><br>&nbsp;</p>', '1694864341-পুষ্টি উপাদানের উৎসসমূহ.jpg', NULL, NULL, '2023-09-15 23:39:01', '2023-09-15 23:39:01'),
(6, 1, 'বয়স অনুযায়ী প্রতিদিনের শক্তি চাহিদা ও   কৈশোরকালীন নমুনা খাদ্য তালিকার ধারণা', '৬', '<p><strong>&nbsp;বয়স অনুযায়ী প্রতিদিনের শক্তি চাহিদা ও&nbsp;কৈশোর কালীন নমুনা খাদ্য তালিকার ধারণা</strong><br>বয়স অনুযায়ী প্রতিদিনের শক্তি চাহিদা (বিশ্ব স্বাস্থ্য সংস্থা: ২০০১)</p><figure class=\"table\"><table><tbody><tr><td><strong>বয়স (বছর)</strong></td><td><strong>', '<p><strong>&nbsp;বয়স অনুযায়ী প্রতিদিনের শক্তি চাহিদা ও&nbsp;কৈশোর কালীন নমুনা খাদ্য তালিকার ধারণা</strong><br>বয়স অনুযায়ী প্রতিদিনের শক্তি চাহিদা (বিশ্ব স্বাস্থ্য সংস্থা: ২০০১)</p><figure class=\"table\"><table><tbody><tr><td><strong>বয়স (বছর)</strong></td><td><strong>কিশোরীদের জন্য প্রতিদিনের শক্তি চাহিদা (কিলো ক্যালোরী/দিন)</strong></td><td><strong>কিশোরদের জন্য প্রতিদিনের শক্তি চাহিদা (কিলো ক্যালোরী/দিন)</strong></td></tr><tr><td>১০ - ১১</td><td>২০০৬</td><td>২১৫০</td></tr><tr><td>১১ - ১২</td><td>২১৪৯</td><td>২৩৪১</td></tr><tr><td>১২ - ১৩</td><td>২২৭৬</td><td>২৫৪৮</td></tr><tr><td>১৩ - ১৪</td><td>২৩৭৯</td><td>২৭৭০</td></tr><tr><td>১৪ - ১৫</td><td>২৪৪৯</td><td>২৯৯০</td></tr><tr><td>১৫ - ১৬</td><td>২৪৯১</td><td>৩১৭৮</td></tr><tr><td>১৬ - ১৭</td><td>২৫০৩</td><td>৩৩২২</td></tr><tr><td>১৭ - ১৮</td><td>২৫০৩</td><td>৩৪১০</td></tr></tbody></table></figure><p>&nbsp;</p><p>নিম্নে বয়স অনুযায়ী দৈনিক শক্তি ও প্রয়োজনীয় পুষ্টি উপাদানের পরিমাণসমূহ দেয়া হলো:</p><figure class=\"table\"><table><tbody><tr><td rowspan=\"2\"><strong>খাদ্য উপাদান</strong></td><td colspan=\"2\"><strong>কিশোরী</strong></td><td colspan=\"2\"><strong>কিশোরী</strong></td></tr><tr><td>১০ - ১৮ বছর</td><td>১৯ বছর</td><td>১০ - ১৮ বছর</td><td>১৯ বছর</td></tr><tr><td>শর্করা (% মোট শক্তি)*****</td><td colspan=\"2\">৫০-৫৫%</td><td colspan=\"2\">৫০-৫৫%</td></tr><tr><td>আমিষ (গ্রাম)***</td><td>২৬.২-৪৭.৪</td><td>৩৩</td><td>২৫.৯-৫৭.৯</td><td>৩৩</td></tr><tr><td>স্নেহ/তেল (% মোট শক্তি)***</td><td>২৫-৩৫</td><td>২০</td><td>২৫-৩৫</td><td>২০</td></tr><tr><td>ভিটামিন এ (মা.গ্রা.)***&nbsp;</td><td>৬০০</td><td>৫০০</td><td colspan=\"2\">৬০০</td></tr><tr><td>থায়ামিন (মি.গ্রা.)***</td><td colspan=\"2\">১.১</td><td colspan=\"2\">১.২</td></tr><tr><td>রিবোফ্লাভিন (মি.গ্রা.)***&nbsp;</td><td colspan=\"2\">১-১.১</td><td colspan=\"2\">১.৩</td></tr><tr><td>নায়াসিন (মি.গ্রা. NEs)***&nbsp;</td><td>১৬</td><td>১৪</td><td colspan=\"2\">১৬</td></tr><tr><td>ভিটামিন বি ১২ (মা.গ্রা.)***</td><td colspan=\"2\">২.৪</td><td colspan=\"2\">২.৪</td></tr><tr><td>ফোলেট (DEF) (মা.গ্রা.)***</td><td colspan=\"2\">৪০০</td><td colspan=\"2\">৪০০</td></tr><tr><td>ভিটামিনসি (মি.গ্রা.)***</td><td>৪০</td><td>৪৫</td><td>৪০</td><td>৪৫</td></tr><tr><td>ভিটামিন ডি (মা.গ্রা.)***</td><td colspan=\"2\">৫</td><td colspan=\"2\">৫</td></tr><tr><td>ভিটামিন ই (মি.গ্রা.)*****</td><td colspan=\"2\">১১-১৫</td><td colspan=\"2\">১১-১৫</td></tr><tr><td>ক্যালসিয়াম (মি.গ্রা.)***</td><td>১৩০০</td><td>১০০০</td><td>১৩০০</td><td>১০০০</td></tr><tr><td>ফসফরাস (মি.গ্রা.)***</td><td>১২৫০</td><td>৭০০</td><td>১২৫০</td><td>৭০০</td></tr><tr><td>আয়োডিন (মা.গ্রা.)***</td><td colspan=\"2\">১২০-১৫০</td><td colspan=\"2\">১২০-১৫০</td></tr><tr><td>আয়রন (মি.গ্রা.) ১০% বায়ো এভেইলঅ্যাবেলিটি***</td><td>৮.৯-৩২.৭</td><td>২৯.৪</td><td>৮.৯-১৮.৮</td><td>১৩.৭</td></tr><tr><td>জিংক (মি.গ্রা.) মাঝারি বায়ো এভেইলঅ্যাবেলিটি***</td><td>৭.২</td><td>৪.৯</td><td>৮.৬</td><td>৭</td></tr><tr><td>আঁশ (গ্রাম)</td><td colspan=\"2\">২০-২৫</td><td colspan=\"2\">২৪-৩০</td></tr><tr><td>ম্যাগনেসিয়াম (মি.গ্রা.)***</td><td>২৩০</td><td>২৬০</td><td colspan=\"2\">২২০</td></tr></tbody></table></figure><p>&nbsp;</p><p>**Corazon VC Barba PhD and Ma Isabel Z Cabrera Ms, Recommended dietary Allowances harmonization in South East Asia, Appendix: Recommended Dietary Alowances for Southeast Asia (SEA-RDAS, Asia Pac J Clin Nutr 2008; 17(S2): 405 408</p><p>***জাতীয় খাদ্য গ্রহণ নির্দেশিকা, ২০১৫</p><p>*****Stang J, Story M (eds) Guidelines for Adolescent Nutrition Services (2005)</p><p><br><strong>কৈশোর কালীন নমুনা খাদ্য তালিকার ধারণা ( ২৫০ মি লি বাটির হিসাব)</strong></p><p><br><br>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>সকালের নাস্তা</strong></td></tr><tr><td><p>১। মাঝারি সাইজের ২ টি রুটি অথবা ১ কাপ ভাত</p><p>২। ১ বাটি সবজি&nbsp;</p><p>৩। ১ টি ডিম</p></td></tr><tr><td><strong>মধ্য দুপুরের খাবার</strong></td></tr><tr><td><p>১। যেকোনো দেশী মৌসুমি ফল</p><p>২। বাড়িতে তৈরি নাস্তা&nbsp; জাতীয় খাবার</p></td></tr><tr><td><strong>দুপুরের খাবার</strong></td></tr><tr><td><p>১। ২/৩ বাটি ভাত</p><p>২। ১ বাটি শাক সবজি</p><p>৩। ১ বাটি ঘন ডাল</p><p>৪। ১ টুকরা মাছ/ মাংস/ কলিজা</p></td></tr><tr><td><strong>বিকালের খাবার</strong></td></tr><tr><td><p>১। দুধ দিয়ে তৈরি ঘন যেকোনো খাবার</p><p>২।<strong>&nbsp;</strong>যেকোনো দেশী মৌসুমি ফল/ বাড়িতে তৈরি নাস্তা&nbsp; জাতীয় খাবার</p></td></tr><tr><td><strong>রাতের খাবার</strong></td></tr><tr><td><p>১। ২/৩ বাটি ভাত</p><p>২। ১ বাটি শাকসবজি</p><p>৩। ১ বাটি ঘন ডাল<br>(যদি সম্ভব হয় ১ টুকরা মাছ/ মাংস)</p></td></tr></tbody></table></figure><p>&nbsp;</p>', '1694864415-বয়স অনুযায়ী প্রতিদিনের শক্তি চাহিদা ও   কৈশোরকালীন নমুনা খাদ্য তালিকার ধারণা.jpg', NULL, NULL, '2023-09-15 23:40:15', '2023-09-15 23:40:15'),
(7, 1, 'বি এম আই কি', '৭', '<p><br><strong>পুষ্টিগত অবস্থা নির্ণয় করার পদ্ধতি:</strong></p><p><strong>বি. এম. আই. (Body Mass Index)</strong></p><p>কোন ব্যক্তির ওজন এবং উচ্চতার বর্গের অনুপাতই হলা বি এম আই। এটি পুষ্টিগত অবস্থা নির্ণয়ের একটি উল্লেখযেগো্য পদ্ধতি। বি এম আই বের করতে ব্যক্তির ওজন কিলোগ্রাম এককে এবং উচ্চতা মিটার এককে জানা প্রয়োজন। ওজনকে উচ্চতার বর্গ দিয়ে ভাগ করলেই বি এম আই পাওয়া যাবে।', '<p><br><strong>পুষ্টিগত অবস্থা নির্ণয় করার পদ্ধতি:</strong></p><p><strong>বি. এম. আই. (Body Mass Index)</strong></p><p>কোন ব্যক্তির ওজন এবং উচ্চতার বর্গের অনুপাতই হলা বি এম আই। এটি পুষ্টিগত অবস্থা নির্ণয়ের একটি উল্লেখযেগো্য পদ্ধতি। বি এম আই বের করতে ব্যক্তির ওজন কিলোগ্রাম এককে এবং উচ্চতা মিটার এককে জানা প্রয়োজন। ওজনকে উচ্চতার বর্গ দিয়ে ভাগ করলেই বি এম আই পাওয়া যাবে। নিচে সূত্রটি দেয়া হলো-</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ওজন (কিলোগ্রাম)</p><p>বি এম আই= -----------------------</p><p>&nbsp; &nbsp; &nbsp; &nbsp; উচ্চতা (মিটার)²</p><p>&nbsp;</p><p>উদাহরণ হিসেবে ধরা যাক, ১৫ বছরের একজন কিশোরের ওজন ২৮ কিলোগ্রাম এবং উচ্চতা ১.২৫ মিটার, তাহলে তার বি এম আই হবে-&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;২৮</p><p>বি এম আই= ----------------------- = ১৭.৯২</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ১.২৫&nbsp;x ১.২৫</p><p>এবং ১৩ বছরের একজন কিশোরীর ওজন ৫০ কিলোগ্রাম এবং উচ্চতা ১.৫০ মিটার, তাহলে তার বি এম আই হবে-&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;৫০</p><p>বি এম আই= ----------------------- = ২২.২২</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ১.৫০&nbsp;x ১.৫০</p><p>১০ -১৯ বছর বয়সী কিশোর মেয়েদের আদর্শ বি এম আই অনুযায়ী পুষ্টিগত অবস্থা:</p><figure class=\"table\"><table><tbody><tr><td><strong>বয়স (বছর)</strong></td><td><strong>আদর্শ বি এম আই</strong></td><td><strong>মৃদু অপুষ্টি</strong></td><td><strong>মৃদু মুটিয়ে যাওয়া</strong></td></tr><tr><td>১০</td><td>১৬.৬</td><td>১৪.৮</td><td>১৯.০</td></tr><tr><td>১১</td><td>১৭.২</td><td>১৫.৩</td><td>১৯.৯</td></tr><tr><td>১২</td><td>১৮.০</td><td>১৬.০</td><td>২০.৮</td></tr><tr><td>১৩</td><td>১৮.৮</td><td>১৬.৬</td><td>২১.৮</td></tr><tr><td>১৪</td><td>১৯.৬</td><td>১৭.২</td><td>২২.৭</td></tr><tr><td>১৫</td><td>২০.২</td><td>১৭.৮</td><td>২৩.৫</td></tr><tr><td>১৬</td><td>২০.৭</td><td>১৮.২</td><td>২৪.১</td></tr><tr><td>১৭</td><td>২১.০</td><td>১৮.৪</td><td>২৪.৫</td></tr><tr><td>১৮</td><td>২১.৩</td><td>১৮.৬</td><td>২৪.৮</td></tr><tr><td>১৯</td><td>২১.৪</td><td>১৮.৭</td><td>২৫.০</td></tr></tbody></table></figure><p>উৎস: বিশ্ব স্বাস্থ্য সংস্থা (২০০৭)</p><p>&nbsp;</p><p>১০ -১৯ বছর বয়সী কিশোর ছেলেদের আদর্শ বি এম আই অনুযায়ী পুষ্টিগত অবস্থা:</p><figure class=\"table\"><table><tbody><tr><td><strong>বয়স (বছর)</strong></td><td><strong>আদর্শ বি এম আই</strong></td><td><strong>মৃদু অপুষ্টি</strong></td><td><strong>মৃদু মুটিয়ে যাওয়া</strong></td></tr><tr><td>১০</td><td>১৬.৪</td><td>১৪.৯</td><td>১৮.৫</td></tr><tr><td>১১</td><td>১৬.৯</td><td>১৫.৩</td><td>১৯.২</td></tr><tr><td>১২</td><td>১৭.৫</td><td>১৫.৮</td><td>১৯.৯</td></tr><tr><td>১৩</td><td>১৮.২</td><td>১৬.৪</td><td>২০.৮</td></tr><tr><td>১৪</td><td>১৯.০</td><td>১৭.০</td><td>২১.৮</td></tr><tr><td>১৫</td><td>১৯.৮</td><td>১৭.৬</td><td>২২.৭</td></tr><tr><td>১৬</td><td>২০.৫</td><td>১৮.২</td><td>২৩.৫</td></tr><tr><td>১৭</td><td>২১.১</td><td>১৮.৮</td><td>২৪.৩</td></tr><tr><td>১৮</td><td>২১.৭</td><td>১৯.২</td><td>২৪.৯</td></tr><tr><td>১৯</td><td>২২.২</td><td>১৯.৬</td><td>২৫.৪</td></tr></tbody></table></figure><p>উৎস: বিশ্ব স্বাস্থ্য সংস্থা (২০০৭)</p><p>উপরের ছক থেকে দেখা যায় যে, ১৫ বছরের কিশোরের বি এম আই তার আদর্শ মান থেকে তুলনামূলকভাবে কম আছে। নির্ধারিত খাদ্য তালিকা অনুযায়ী সুষম খাবার খেলে তার এই অপুষ্টি দূর হবে।</p><p>আবার ১৩ বছরের কিশোরীর বি এম আই তার আদর্শ মান থেকে তুলনামূলকভাবে বেশী আছে। তাই তাকে কম ক্যালরিযুক্ত খাবার গ্রহণ ও বিভিন্ন ফাস্টফুড বর্জনের মাধ্যমে এবং ব্যায়াম ও শারীরিক পরিশ্রম করে বি এম আই স্বাভাবিক মাত্রায় ফিরিয়ে আনতে হবে। এক্ষেত্রে তার ইচ্ছাশক্তিকে কাজে লাগাতে হবে ও খাবারকে পরিমিত পর্যায়ে আনতে হবে, তবেই সুস্বাস্থ্য বজায় থাকবে।<br><br><br>&nbsp;</p>', '1694866659-বি এম আই কি.jpg', NULL, NULL, '2023-09-16 00:17:39', '2023-09-16 00:17:39'),
(8, 1, 'পুষ্টি জনিত সমস্যা, প্রতিরোধ ও প্রতিকার', '৮', '<p>&nbsp;</p><p><strong>অপুষ্টিজনিত সমস্যা, প্রতিরোধ ও প্রতিকার</strong></p><p><strong>অপুষ্টি</strong></p><p>শরীরে এক বা একাধিক পুষ্টি উপাদানের দীর্ঘদিন ধরে অভাব হলে শরীরের বৃদ্ধি ব্যাহত হয় এবং সুনির্দিষ্ট কিছু অস্বাভাবিক লক্ষণাদি প্রকাশ পায়। এই ধরনের অবস্থাকেই অপুষ্টি বলে।', '<p>&nbsp;</p><p><strong>অপুষ্টিজনিত সমস্যা, প্রতিরোধ ও প্রতিকার</strong></p><p><strong>অপুষ্টি</strong></p><p>শরীরে এক বা একাধিক পুষ্টি উপাদানের দীর্ঘদিন ধরে অভাব হলে শরীরের বৃদ্ধি ব্যাহত হয় এবং সুনির্দিষ্ট কিছু অস্বাভাবিক লক্ষণাদি প্রকাশ পায়। এই ধরনের অবস্থাকেই অপুষ্টি বলে।</p><p><strong>অপুষ্টির পরিণতি (কিশোরীদের):</strong></p><p>&nbsp;</p><p><br><br><br>&nbsp;</p>', '1694866842-পুষ্টি জনিত সমস্যা, প্রতিরোধ ও প্রতিকার.jpg', NULL, NULL, '2023-09-16 00:20:42', '2023-09-16 00:20:42');

-- --------------------------------------------------------

--  
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_12_120826_create_chapters_table', 1),
(6, '2023_09_12_121334_create_lessons_table', 1),
(7, '2023_09_12_121953_create_quizzes_table', 1),
(8, '2023_09_14_085820_create_results_table', 1),
(9, '2023_09_14_173310_create_overviews_table', 1),
(10, '2023_09_16_173726_create_webinars_table', 1),
(11, '2023_09_16_191227_create_teams_table', 1),
(12, '2023_09_17_040800_create_home_contents_table', 1),
(13, '2023_09_17_063154_create_svccs_table', 1),
(14, '2023_09_17_070951_create_activity_sheets_table', 1),
(15, '2023_09_17_074236_create_others_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

DROP TABLE IF EXISTS `others`;
CREATE TABLE IF NOT EXISTS `others` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `user_id`, `url`, `image`, `description`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 'abc.com', '1694984210-dsdsds dsdsdsd ssds.png', '<p>;asd;ksal;kd;ksa;kdask;dksa;kd;ksa;kdaslkdpodfpsdifoidspoifpsidfpidspifpdisfpidspoifpoidsopfidpsifpoisdpofidspifpodipfoidspifpodifopisdpfipsdifpsdifpisdpofiposdifsdipfidspoifposdipfidspoif</p>', 'dsdsds dsdsdsd ssds', '2023-09-17 14:56:50', '2023-09-17 14:56:50');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overviews`
--

INSERT INTO `overviews` (`id`, `user_id`, `current_chapter_id`, `current_lesson_id`, `marks`, `created_at`, `updated_at`) VALUES
(8, 1, 1, 1, 0, '2023-09-17 22:15:36', '2023-09-17 22:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `chapter_id`, `lesson_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'কৈশোরকালীন সময়কে বলে', 'Missed Opportunities ', 'Connected Opportunities', 'Missed Times', 'None', 'Missed Opportunities', '2023-09-15 23:46:18', '2023-09-15 23:46:18'),
(2, 1, 1, 'পুষ্টি হল এমন একটি প্রক্রিয়া যার মাধ্যমে', 'শরীরে তাপ ও শক্তি উৎপন্ন হয়', 'বৃদ্ধি সাধন করে', 'রোগ প্রতিরেোধ ক্ষমতা বৃদ্ধি করে', 'উপরের সবগুলো', 'উপরের সবগুলো', '2023-09-15 23:47:07', '2023-09-15 23:47:07'),
(3, 1, 2, 'খাদ্যের উপাদান কয়টি?', '৫টি', '৬টি', '৪টি', '৭টি', '৬টি', '2023-09-15 23:48:31', '2023-09-15 23:48:31'),
(4, 1, 2, 'দেহে ক্ষয়পূরণ ও বৃদ্ধিসাধনকারী খাদ্য কোনটি?', 'ভাত', 'শাক-সবজি', 'ডিম', 'লেবু', 'ডিম', '2023-09-15 23:49:05', '2023-09-15 23:49:05'),
(5, 1, 3, 'কোন হরমোনের প্রভাবে শরীরের দ্রুত বৃদ্ধি হয়?', 'থাইরক্সিন', 'অক্সিটসিন', 'গ্রোথ হরমোন', 'থাইরয়েড হরমোন', 'গ্রোথ হরমোন', '2023-09-15 23:49:43', '2023-09-15 23:49:43'),
(6, 1, 3, 'কোন ধরনের খাবার শরীরের দ্রুত বৃদ্ধিতে সাহায্য করে?', 'কার্বোহাইড্রেট', 'প্রোটিন', 'সুষম খাবার', 'পানি', 'প্রোটিন', '2023-09-15 23:50:29', '2023-09-15 23:50:29'),
(7, 1, 3, 'সুষম খাদ্যের প্রয়োজনীয় নয় কোনটি?', 'কিশোর কিশোরীর দ্রুত বৃদ্ধি', 'শরীরের কাঠামোগত বৃদ্ধি', 'গ্রোথ হরমোন বেশী তৈরী না হওয়া', 'শারীরিক উচ্চতা বৃদ্ধির জন্য', 'গ্রোথ হরমোন বেশী তৈরী না হওয়া', '2023-09-15 23:51:05', '2023-09-15 23:51:05'),
(8, 1, 4, 'কিশোরীদের মাসিক ঋতুস্রাবের কারণে কোন খাদ্য উপাদানের চাহিদা বেড়ে যায়?', 'আমিষ', 'আয়রন', 'ভিটামিন', 'শর্করা', 'আয়রন', '2023-09-15 23:51:51', '2023-09-15 23:51:51'),
(9, 1, 4, 'কৈশোরকালের সঠিক পুষ্টি  উপাদান গ্রহণ নিশ্চিত করে-', 'কর্মক্ষমতা বৃদ্ধি', 'সন্তান জন্মদানের সহজসাধ্যতা', 'পড়াশোনার মনোযোগ বৃদ্ধি', 'উপরের সবগুলো', 'উপরের সবগুলো', '2023-09-15 23:52:22', '2023-09-15 23:52:22'),
(10, 1, 4, 'দৈনিক কত গ্রাম ফলমূল খাওয়া প্রয়োজন?', '৫০০ গ্রাম', '৫০ গ্রাম', '৩০০ গ্রাম', '১০০-২০০ গ্রাম', '১০০-২০০ গ্রাম', '2023-09-15 23:53:07', '2023-09-15 23:53:07'),
(11, 1, 4, '. দৈনিক কমপক্ষে কত গ্রাম সবজি খাওয়া প্রয়োজন?', '১০০', '২০০', '৩০০', '৫০০', '২০০', '2023-09-15 23:53:35', '2023-09-15 23:53:35'),
(12, 1, 4, 'ভিটামিন সি এর অভাবজনিত সমস্যা কোনটি?', 'মাড়ী দিয়ে রক্ত পড়ে', 'মুখে ব্রণ উঠে', 'দেহের বৃদ্ধি ব্যাহত হয়', 'চুল লালচে হয়', 'মাড়ী দিয়ে রক্ত পড়ে', '2023-09-15 23:54:11', '2023-09-15 23:54:11'),
(13, 1, 4, 'সবুজ শাক কম গ্রহণের ফলে কি ঘটতে পারে?', 'সর্দি-কাশি', 'ডিম্বাশয়ে ক্যান্সার হওয়ার ঝুঁকি', 'ডেঙ্গু', 'রাতকানা', 'ডিম্বাশয়ে ক্যান্সার হওয়ার ঝুঁকি', '2023-09-15 23:54:46', '2023-09-15 23:54:46'),
(14, 1, 5, 'স্নেহ জাতীয় খাবার আমাদের দেহে কেন প্রয়োজন?', 'অত্যাবশ্যকীয় ফ্যাটি এসিডের চাহিদা পূরণ করে', 'শরীর গঠনে সাহায্য করে', 'শরীরের বৃদ্ধি ও ক্ষয়পূরণ করে', 'চোখ সুস্থ রাখে', 'অত্যাবশ্যকীয় ফ্যাটি এসিডের চাহিদা পূরণ করে', '2023-09-15 23:55:21', '2023-09-15 23:55:21'),
(15, 1, 5, 'ক্যালসিয়ামের উপকারিতা লেখ', 'হাড়কে মজবুত করে', 'শরীর গঠন করে', 'মানসিক বিকাশ ঘটায়', 'কোষে অক্সিজেন পরিবহন করে', 'হাড়কে মজবুত করে', '2023-09-15 23:55:52', '2023-09-15 23:55:52'),
(16, 1, 5, 'নিচের কোন উপাদান গুলো অনুপুষ্টি?', 'Vit D', 'Iron', 'Vitamin B complex', 'উপরের সবগুলো', 'উপরের সবগুলো', '2023-09-15 23:56:33', '2023-09-15 23:56:33'),
(17, 1, 6, '১২-১৩ বছরের কিশোরীর প্রতিদিন শক্তি চাহিদা কতো KCal?', '২৫৪৮ Kcal', '২৩৭৯ Kcal', '২১৪৯ Kcal', '২২৭৬ Kcal', '২২৭৬ Kcal', '2023-09-15 23:57:20', '2023-09-15 23:57:20'),
(18, 1, 6, '১৯ বছর বয়সী একজন কিশোরীর দৈনিক কত মি.গ্রা আয়রন গ্রহণ করা উচিত?', '৮.৯-৩২.৭ মি.গ্রা', '৮.৯-১৮.৮ মি.গ্রা', '২৯.৪ মি.গ্রা', '১৩.৭ মি.গ্রা', '২৯.৪ মি.গ্রা', '2023-09-15 23:57:56', '2023-09-15 23:57:56'),
(19, 1, 6, 'একজন কিশোরীর দৈনিক কত % শর্করা গ্রহণ করা প্রয়োজন?', '৩০-৪০%', '৫০-৫৫%', '৭০-৮০%', '২৫-৫৫%', '২৫-৫৫%', '2023-09-15 23:58:25', '2023-09-15 23:58:25'),
(20, 1, 6, 'একজন কিশোরের দৈনিক কত গ্রাম আমিষ গ্রহণ করা প্রয়োজন?', '২০-৪০', '২৫.৯-৫৫.৯', '২৫-৫৫', '২৫.৯-৫৭.৯', '২৫.৯-৫৫.৯', '2023-09-15 23:58:55', '2023-09-15 23:58:55'),
(21, 1, 7, 'BMI এর সূত্র কোনটি ?', 'BMI= ওজন/উচ্চতা(মিটার)^২', 'BMI= ওজন/উচ্চতা', 'BMI= ওজন^২/উচ্চতা^২', 'BMI= ওজন/উচ্চতা(সে.মি)^২', 'BMI= ওজন/উচ্চতা(মিটার)^২', '2023-09-16 00:22:02', '2023-09-16 00:22:02'),
(22, 1, 7, '. ১৬ বছরের একজন কিশোরীর ওজন ৩০ কে.জি এবং উচ্চতা ১.২২মিটার তাহলে তার BMI কত?', '২০.১৫', '২১', '২০.১৯', '২২', '২০.১৫', '2023-09-16 00:22:38', '2023-09-16 00:22:38'),
(23, 1, 7, '১৫ বছর বয়সী কিশোরীর আদর্শ BMI কত?', '২৩', '২১', '১৯', '২০', '২০', '2023-09-16 00:23:10', '2023-09-16 00:23:10'),
(24, 1, 7, '১৮ বছরের  কিশোরের আদর্শ BMI কত?', '২১.৯', '২১.৫', '২০.৭', '১৯.৮', '২১.৫', '2023-09-16 00:23:45', '2023-09-16 00:23:45'),
(25, 1, 7, 'BMI এর পূর্ণরূপ কি?', 'Basal Metabolic Index', 'Basal Mass Index', 'Body Mass Index', 'Body Must Index', 'Body Mass Index', '2023-09-16 00:25:01', '2023-09-16 00:25:01'),
(26, 1, 8, 'অপুষ্টিজনিত সমস্যা কোনটি?', 'ওজনাধিক্য', 'ক্যান্সার', 'টাইফয়েড', 'ম্যালেরিয়া', 'ওজনাধিক্য', '2023-09-16 00:25:57', '2023-09-16 00:25:57'),
(27, 1, 8, 'BMI কত হলে পুষ্টিহীনতা হয়ে থাকে?', '১৯', '২০', '১৮', '১৮ এর নিচে', '১৮ এর নিচে', '2023-09-16 00:26:23', '2023-09-16 00:26:23'),
(28, 1, 8, 'রক্তস্বল্পতা কোন খনিজ লবণের অভাবে হয়ে থাকে?', 'আয়োডিন', 'আয়রন', 'সোডিয়াম', 'জিংক', 'আয়রন', '2023-09-16 00:26:53', '2023-09-16 00:26:53'),
(29, 1, 8, 'ক্যালসিয়ামের অভাবজনিত রোগ কোনটি?', 'গলগন্ড', 'স্কার্ভি', 'অস্টিওপরোসিস', 'স্মৃতিশক্তি হ্রাস', 'অস্টিওপরোসিস', '2023-09-16 00:27:28', '2023-09-16 00:27:28'),
(30, 1, 8, 'কোন খাবারের Vit B complex থাকে?', 'ঢেঁকি ছাঁটা চাল', 'পালংশাক', 'আলু', 'গাজর', 'ঢেঁকি ছাঁটা চাল', '2023-09-16 00:28:04', '2023-09-16 00:28:04');

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
  `status` int NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `svccs`
--

DROP TABLE IF EXISTS `svccs`;
CREATE TABLE IF NOT EXISTS `svccs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `svccs`
--

INSERT INTO `svccs` (`id`, `user_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Md. Tawshiqul Islam Rafi', '1694982536-Md. Tawshiqul Islam Rafi.jpeg', '2023-09-17 14:28:56', '2023-09-17 14:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `enrolled` tinyint(1) NOT NULL DEFAULT '1',
  `school_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_club_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `type`, `enrolled`, `school_name`, `class`, `gender`, `phone_no`, `password`, `present_address`, `division`, `is_club_member`, `image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Tawshiqul Islam Rafi', 'tawshiq.rafi02@gmail.com', 12, 'student', 1, 'abcd', '12', 'পুরুষ', '01999653644', '$2y$10$saQwj1T1GWsLmy1SBXSn8uPaIcaw9lSMz0qmdzBM6RylcQ7KVPoM6', 'Dhaka, Bangladesh', 'ঢাকা', 'yes', NULL, NULL, NULL, '2023-09-17 05:45:12', '2023-09-17 05:45:12'),
(2, 'Md. Tawshiqul Islam Rafi', 'a@a.a', 12, 'admin', 1, 'South Halishahar High School', '8', 'পুরুষ', '01839462106', '$2y$10$GTTKRMZruYax6hROAzSBjuvy.Ohf1sN0E.F7xy/MHwB46B4Wc5QLa', 'Chattogram, Bangladesh', 'চট্রগ্রাম', 'no', NULL, NULL, NULL, '2023-09-17 06:20:16', '2023-09-17 06:20:16'),
(3, 'dsdsds dsdsdsd ssds', 'admin@shojonsl.com', 12, 'student', 1, 'asjdjka', '12', 'পুরুষ', '01839462108', '$2y$10$.HaUk.2z4DeJ6po4z8K1vu7qwCCdjglIGCpWugWAlnXbDLnyRXuzS', '01839462106', 'চট্রগ্রাম', 'yes', NULL, NULL, NULL, '2023-09-17 11:38:44', '2023-09-17 11:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `webinars`
--

DROP TABLE IF EXISTS `webinars`;
CREATE TABLE IF NOT EXISTS `webinars` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
