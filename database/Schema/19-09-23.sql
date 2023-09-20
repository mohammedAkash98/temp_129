-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 06:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

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

CREATE TABLE `activity_sheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'খাদ্য ও পুষ্টি', '2023-09-17 06:05:07', '2023-09-17 06:05:07'),
(2, 'স্বাস্থ্যসম্মত জীবনধারা', '2023-09-17 06:52:40', '2023-09-17 06:52:40'),
(3, 'মানসিক স্বাস্থ্য', '2023-09-17 06:52:57', '2023-09-17 06:52:57'),
(4, 'নেতৃত্ব', '2023-09-17 06:53:37', '2023-09-17 06:53:37'),
(5, 'সামাজিক ক্ষেত্র', '2023-09-17 06:54:02', '2023-09-17 06:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

CREATE TABLE `home_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chapter_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `header_description` text DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `audio` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `chapter_id`, `name`, `header_description`, `description`, `image`, `audio`, `video`, `created_at`, `updated_at`) VALUES
(1, 1, 'খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি', NULL, '<p><strong>খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি</strong><br><br>কৈশোরকালে শরীরের দ্রুত বৃদ্ধি ঘটে। দেহ বৃদ্ধি বিশেষ করে শরীরের কাঠামোগত বৃদ্ধির জন্য এসময় যথেষ্ট পরিমাণ পুষ্টিকর ও সুষম খাবার গ্রহণ করা প্রয়োজন । এসময় দেহের চাহিদা অনুযায়ী পুষ্টিকর খাবার না খেলে শারীরিক বৃদ্ধি অ মানসিক পরিপক্বতা সঠিকভাবে গড়ে উঠেনা। কৈশোরকালীন এই সময়কে&nbsp;Missed Opportunities&nbsp;বলে<strong>&nbsp;</strong>কারণ শিশুকালে যদি শরিরে পুষ্টির কোন ঘাটতি থাকে তা এসময় পূরণ করা সম্ভব <strong>।&nbsp;</strong>তাই এই সময়টি পুষ্টিগত অবস্থা উন্নয়নের জন্য একটা শেষ সুযোগ।<br><br><strong>খাদ্য</strong><br><br>খাদ্য হচ্ছে এমন কতকগুলো প্রয়োজনীয় উপাদানের সমষ্টি যা গ্রহণের মাধ্যমে শরীরের স্বাভাবিক বৃদ্ধি ও কর্মক্ষমতা বজায় থাকে, ক্ষয়পূরণ ও বিভিন্নভাবে কাজের জন্য প্রয়োজনীয় শক্তির যোগান দেয়, এবং সর্বোপরি রোগ প্রতিরোধ ক্ষমতা তৈরী করে।&nbsp;</p><p>&nbsp;</p><p><strong>পুষ্টি</strong></p><p>&nbsp;</p><p>পুষ্টি হচ্ছে এমন একটি প্রক্রিয়া যার মাধ্যমে গ্রহণ করা খাদ্য শোষিত হয়ে শরীরে তাপ ও শক্তি উৎপন্ন করে, শরীরের বৃদ্ধি সাধন করে এবং রোগ প্রতিরোধ ক্ষমতা সৃষ্টি করে।&nbsp;খাদ্যের&nbsp;সাথে স্বাস্থ্যের সম্পর্কই হল পুষ্টি। অর্থাৎ স্বাস্থ্য গঠনে খাদ্যের ভূমিকা অথবা খাদ্যের সাথে সুস্থ-সবল অ কর্মক্ষম স্বাস্থ্য গঠন এবং বজায় রাখার জন্য যে যোগসূত্র সে প্রক্রিয়াকে আমরা পুষ্টি বলি।<br><br><strong>পুষ্টিকর খাদ্য&nbsp;</strong><br><br>যে&nbsp;সব খাদ্য খেলে শরীরে তাপ ও শক্তি উৎপাদিত হয, দেহের গঠন বৃদ্ধি হয়, শরীর সবল, কর্মক্ষম ও নিরোগ থাকে তাই পুষ্টিকর খাদ্য।</p><p>খাদ্য ও পুষ্টি একে অপরের সাথে জড়িত। যে কোন খাদ্য গ্রহণ কলেই হবে না, তা অবশ্যই পুষ্টিকর ও নিরাপদ হতে হবে। পুষ্টিকর খাদ্য গ্রহণ কনা করলে রোগ প্রতিরোধ ক্ষমতা কমে যায় এবং শরীরে বিভিন্ন ধরনের রোগ হয়। পুষ্টিকর খাবার গ্রহণ করলে শরীর ও মন উভয়ই ভাল থাকে।<br><br><br>&nbsp;</p>', '1694953777-খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি.jpg', NULL, NULL, '2023-09-17 06:12:43', '2023-09-17 06:29:37'),
(2, 1, 'খাদ্যের উপাদান ও এদের উৎস সমূহ', NULL, '<p><strong>খাদ্যের উপাদান ও এদের উৎস সমূহ</strong><br><br><br><strong>&nbsp;</strong>খাদ্যের যে সব রাসাযনিক পদার্থ দেহের কাজ সুষ্ঠুভাবে সম্পন্ন করে সেগুলোই খাদ্য উপাদান নামে পরিচিত। খাদ্যের পুষ্টি উপাদনা ৬টি।</p><p><strong>১. শ্বেতসার বা শর্করা</strong></p><p>ভাত&nbsp; রুটি&nbsp; আলু&nbsp;মুড়ি &nbsp;পাউরুটি &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; মধু</p><p>শ্বেতসার বা শর্করা জাতীয় খাবারের উৎস&nbsp; (Add pic)</p><p><strong>২. আমিষ</strong></p><p>মাছ&nbsp; মাংস&nbsp;ডিম&nbsp; ডাল&nbsp; বাদাম&nbsp;দুধ</p><p>আমিষ জাতীয় খাবারের উৎস (Add pic)</p><p><strong>৩. স্নেহ বা তেল</strong></p><p>ভোজ্য তেল&nbsp;&nbsp;&nbsp;&nbsp; মাখন&nbsp;&nbsp;&nbsp;&nbsp; ঘি</p><p>স্নেহ বা তেল জাতীয় খাবারের উৎস (Add pic)</p><p><strong>৪. ভিটামিন বা খাদ্যপ্রাণ</strong></p><p>দুধ &nbsp; কলিজা&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; রঙীন শাক&nbsp;রঙীন সবজি&nbsp;&nbsp;&nbsp;&nbsp; ফল&nbsp;</p><p>ভিটামিন জাতীয় খাবারের উৎস (Add pic)</p><p><strong>৫. খনিজ লবণ</strong></p><p>কলিজা&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; গাঢ় সবুজ ও রঙীন শাক-সবজি&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; মাছ&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ফল</p><p>খনিজ লবণ জাতীয় খাবারের উৎস (Add pic)</p><p><strong>৬. পানি</strong></p><p>আর্সেনিকমুক্ত টিউবওয়েল&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; পরিষ্কার-পরিচ্ছন্ন কুয়া</p><p>পানির উৎস (Add pic)</p><p>এই ৬টি উপাদান নির্দিষ্ট পরিমাণে ও সঠিক মাত্রায় আমাদের প্রতিদিনের খাদ্য তারিকায় থাকতে হবে। আমাদের প্রতিদিনের খাদ্যে এদের ঘাটতি হলে শরীরে ঐ নির্দিষ্ট উপাদানের ঘাটতিজনিত লক্ষণ প্রকাশ পায়। এ ঘাটতি বেশি দিন থাকলে মানুষ অসুস্থ হয়ে পড়ে।</p><p><strong>কাজ অনুযায়ী খাদ্যের শ্রেণীবিভাগ</strong></p><p><strong>১. তাপ ও শক্তি উৎপাদনকারী খাদ্য:</strong> (শর্করা ও চর্বি জাতীয়) যেমন: ভাত, রুটি, আলু, গুড় মিষ্টিআলু, পাউরুটি, তেল, মাখন, ঘি, চর্বি, মধু, বাদাম, নারিকেল ইত্যাদি।</p><p><strong>২. ক্ষয়পূরণ ও দেহ বৃদ্ধিকারী খাদ্য</strong>: (আমিষ জাতীয়) যেমন: মাছ (ছোটমাছ, বড়মাছ), মাংস, দুধ, ডিম, সয়াবিন, ডাল, সিমের বীচি, কলিজা ইত্যাদি।</p><p><strong>৩. রোগ প্রতিরোধকারী খাদ্য:</strong> (ভিটামিন ও খনিজ সমৃদ্ধ) যেমন: গাঢ় হলুদ, সবুজ ও কমলা রঙের সব ধরনের শাক-সবজি ও ফলমূল, পাকা তাল, পাকা পেঁপে, পাকা কাঁঠাল, আনারস, পেয়ারা, আমলকি, আমড়া, কলা, লেবু, গাজর, মিষ্টিকুমড়া, শিম, ছোটমাছ, দুধ, ডিম, কলিজা ইত্যাদি।</p><p><br><br>&nbsp;</p>', '1694953516-খাদ্যের উপাদান ও এদের উৎস সমূহ.jpg', NULL, NULL, '2023-09-17 06:25:16', '2023-09-17 06:25:16'),
(3, 1, 'সুষম খাবার কি , সুষম খাবার খাওয়ার প্রয়োজনীয়তা', NULL, '<p><strong>সুষম খাবার কি , সুষম খাবার খাওয়ার প্রয়োজনীয়তা</strong><br><br><strong>সুষম খাদ্য:</strong></p><p>সুষম খাদ্য হচ্ছে সেই খাদ্য, যেখানে খাদ্যের সব পুষ্টি উপাদান দেহের প্রয়োজন মত বয়স, লিঙ্গ, কাজের ধরন, শারীরিক অবস্থা ভেদে সঠিক মাত্রায় থাকে। অর্থাৎ সুষম খাদ্য হলো এমন একটি খাবার যেখানে শক্তিদায়ক, শরীর বৃদ্ধিকারক রোগ প্রতিরাধক খাদ্য উপাদান পরিমান মত রয়েছে। বেশি খরচ করে যেমন সুষম খাবার খাওয়া যায়, তেমনি অল্প খরচেও সুষম খাবার খাওয়া যায়।</p><p><strong>সুষম খাদ্যের প্রয়োজনীয়তা</strong></p><ul><li>কৈশোরে শরীরের দ্রুত বৃদ্ধির জন্য</li><li>শরীরের কাঠামোগত বৃদ্ধির জন্য</li><li>শরীরে গ্রোথ হরমোন নামক এক বিশেষ হরমোন বেশি করে তৈরি হয় যা দ্রুত বৃদ্ধির কাজ করে</li><li>দেহের চাহিদা মাফিক পুষ্টিকর ও সুষম খাবার না পেলে শরীরের বৃদ্ধি পুরোপুরি হয় না</li></ul><p>ছেলেমেয়েদের এই সময়কার পুষ্টির উপর নির্ভর করে তাদের শারীরিক উচ্চতা বৃদ্ধি<br><br>&nbsp;</p>', '1694954310-সুষম খাবার কি , সুষম খাবার খাওয়ার প্রয়োজনীয়তা.jpg', NULL, NULL, '2023-09-17 06:38:30', '2023-09-17 06:38:30'),
(4, 1, 'কৈশোরকালে বৈচিত্র্যময় খাবার ও পুষ্টির গুরুত্ব', NULL, '<p><strong>খাবারে বৈচিত্র্য:</strong></p><p><strong>কৈশোরকালনি বৈচিত্র্যময় খাবারের গুরুত্ব</strong></p><p>কৈশোরকালে পুষ্টি সমস্যার সাথে প্রথাগত শারীরিক, মানসিক ও আর্থ-সামাজিক কারণ জড়িত থাকে। কৈশোরকালে খাবার এমন হতে হবে যেন সেই খাবার পরিমাণে সঠিক হয় এবং এতে খাদ্যের ৬টি উপাদানই বিদ্যমান থাকে। একই খাবার বার বার খেতে ভালো লাগবে না তাই মাঝে মাঝে ভিন্ন ভিন্ন ধরনের খাবার দেওয়া ভালো। এতে খাবারের রুচি থাকবে। কৈশেরা ছেলে-মেয়েরা লেখাপড়া ও খেলাধূলা নিয়ে ব্যস্ত থাকে। কিশোর-কিশোরী সহ সবার জন্য ঘরে তৈরি খাবারই উত্তম। তাই তাদের ঘরে তৈরি করা পুষ্টির খাবার খেতে দিতে হবে।</p><p>তবে কৈশোরে ছেলে-মেয়েরা রাস্তার খোলা খাবার, চানাচুর, আচার, মুড়ালী, চটপটি, চিপস, আইসক্রিম, কেক, কোমল পানীয়-জুস, এ্যানার্জি ড্রিংক ইত্যাদি মুখরোচক খাবার খায়। এগুলোতে চর্বি ও শর্করার মাত্রা বেশি থাকে যা পরবর্তী জীবনে স্থূলতা, হৃদরোগ এবং ডায়াবেটিসের মতো রোগের ঝুঁকি বাড়িয়ে দেয়।</p><p><strong>কিভাবে খাবারে বৈচিত্র্য আনা যায়</strong></p><ul><li>সব ধরনের খাবার পরিমান মত খেতে হবে কারন ভিন্ন ভিন্ন খাবারে ভিন্ন ভিন্ন পুষ্টি উপাদান থাকে।</li><li>এই সব খাবার যথেষ্ট পরিমাণ শক্তি, আমিষ এবং অনুপুষ্টি চাহিদা পূরণ করে।</li><li>ভিন্ন ভিন্ন ধরনের খাবার খেতে হবে, এতে খাওয়ার রুচি বাড়ে।</li></ul><p>পরিমিত পুষ্টি থেকে আসে সুস্বাস্থ্য। সুস্বাস্থ্য অর্জন ও রক্ষার জন্য সুষম খাদ্য গ্রহণ অপরিহার্য। সেই সাথে দৈনিক কমপক্ষে ১.৫-৩.৫ লিটার অর্থাৎ ৬-১৪ গ্লাস বিশুদ্ধ পানি পান করা প্রয়োজন। দৈনিক কমপক্ষে ১০০ গ্রাম শাক ও ২০০ গ্রাম সবজি এবং ১০০ গ্রাম মৌসুমী ফল খেলে শরীর প্রয়োজনীয় অনুপুষ্টি এবং খাদ্য আঁশ পায়।</p><p><strong>কৈশোরকালে পুষ্টির গুরুত্ব:</strong></p><p>১০-১৯ বছর বয়স হলো শরীর বা দেহ বৃদ্ধির সঠিক সময় অর্থাৎ কৈশোরে দেহের দ্রুত বৃদ্ধি হয়, তাই এই বয়সে শরীরে পুষ্টির চাহিদা ও প্রয়োজনীয়তা বেশি থাকে। এটি শারীরিক ও মানসিক বৃদ্ধির একটি গুরুত্বপূর্ণ সময়। এই বৃদ্ধির সাথে মানবিকবোধ, আবেগানুভূতি ও হরমোন জনিত পরিবর্তনও জড়িত।</p><p><strong>কিশোরীদের ক্ষেত্রে পুষ্টির গুরুত্ব:</strong></p><p>১. কৈশোরকালে মেয়েদের উচ্চতা ও ওজন বাড়ে এবং মানসিক পরিপক্কতা আসে। এসময় চাহিদা অনুযায়ী সঠিক পরিমাণে পুষ্টি উপাদান গ্রহণ করলে কিশোরীদের শারীরিক ও মানসিক বৃদ্ধি সঠিকভাবে হয়।</p><p>২. ঋতুস্রাব বা মাসিকের জন্য শরীর থেকে অনেক রক্ত বের হয়ে যায়। একারণে শরীরে রক্তের ঘাটতি পূরণের জন্য পরিমিত পরিমাণ পুষ্টিকর খাবার বিশেষ করে লৌহযুক্ত খাবার গ্রহণের প্রয়োজনীয়তা অপরিসীম।</p><p>৩. গর্ভকালীন, প্রসবকালীন ঝুঁকি ও কম ওজনের শিশু জন্মদানের সম্ভাবনা কমানোর জন্য কিশোরীদের ক্ষেত্রে পুষ্টি গুরুত্বপূর্ণ ভূমিকা রাখে।</p><p><strong>কিশোরদের ক্ষেত্রে পুষ্টির গুরুত্ব:</strong><br><br>&nbsp;</p><p>১. কৈশোরকালে ছেলেদের উচ্চতা ও ওজন বাড়ে, শরীরে দৃঢ়তা আসে, বুক-কাঁধ চওড়া হয়, বীর্যপাত হয়। তাই এসময়ে দেহের চাহিদা অনুযায়ী সঠিক পরিমাণে পুষ্টি উপাদান গ্রহণ করা আবশ্যক।</p><p>২. পুষ্টিকর খাবার গ্রহণের ফলে কিশোরদের শরীরের মাংসপেশী পরিপূর্ণভাবে বৃদ্ধিপ্রাপ্ত হয়।</p><p>৩. পুষ্টিকর খাবার গ্রহণ করলে কিশোরদের প্রজনন ক্ষমতা স্বাভাবিক থাকে।</p><p>কৈশোরকালের সঠিক পুষ্টি উপাদান গ্রহণ কিশোর-কিশোরীদের পড়াশুনায় মনোযোগ বৃদ্ধি করে, পরবর্তীকালে শারীরিক আকার-আকৃতি, কর্মক্ষমতা, সন্তান জন্মদানে সহজসাধ্যতাকে নির্ধারণ করে। কৈশোরে মানুষের জীবনযাত্রা ও খাবারের রুচির পরিবর্তন হয়। কিশোর-কিশোরীরা অনেক সময় অপুষ্টিজনিত সমস্যায় ভুগে থাকে কারণ সে সময় তাদের অধিক মাত্রায় পুষ্টির প্রয়োজন হয় এবং তাদের স্বাস্থ্য ও পুষ্টি সমস্যা প্রায়ই সনাক্ত হয় না।</p><p><strong>অপর্যাপ্ত পুষ্টির কারণে কৈশোরকালীন স্বাস্থ্যের উপর নেতিবাচক প্রভাব পড়ে এবং তা দীর্ঘস্থায়ী রোগের ঝুঁকি বৃদ্ধি করে। যেমন:</strong></p><p>১. আয়রন ঘাটতির কারণে কিশোর-কিশোরীদের শারীরিক ও মানসিক বৃদ্ধি ব্যাহত হয়, স্বাভাবিক জ্ঞান বৃদ্ধির বিকাশ কমে যায় এবং পড়ালেখার প্রতি মনোযোগ অনেকাংশে কমে যায় ফলে স্কুলে যাবার আগ্রহ হারিয়ে ফেলে।</p><p>২. কিশোরীদের মাসিক ঋতুস্রাবের কারণে শরীরে আয়রনের চাহিদা বেড়ে যায়। ফলে পর্যাপ্ত আয়রন সমৃদ্ধি খাবার না খেলে রক্তস্বল্পতা দেখা দেয়।</p><p>৩. পুষ্টিকর খাবার না খাওয়ায় এবং বাইরের মুখরোচক খাবার খাওয়ার কারণে কিশোর-কিশোরীদের দেহে অতিরিক্ত চর্বি জমা হয়ে স্থূলতা সৃষ্টি করে যা পরবর্তীতে অনেক কম বয়সেই ডায়াবেটিস, হৃদরোগ, শ্বাসকষ্ট, কিডনী সমস্যাজনিত অনেক জটিল রোগের জন্ম দেয়।</p><p>৪. সবুজ শাক-সবজি কম গ্রহণের ফলে মেয়েদের ডিম্বাশয়ে ক্যান্সার হওয়ার ঝুঁকি ‍বৃদ্ধি পায়।</p><p>৫. চাহিদা অনুযায়ী পুষ্টিকর খাবার গ্রহণ না করলে কিশোরদের প্রজনন ক্ষমতা হ্রাস পেতে পারে।</p><p>৬. কিশোরী অবস্থায় গর্ভধারণ (বিশেষ করে মা যদি অপুষ্টিতে ভোগেন) মা ও শিশু উভয়ের স্বাস্থ্য ঝুঁকির মধ্যে পড়ে যায়।</p><p>অতিরিক্ত কায়িক পরিশ্রম, মানসিক ও শারীরিক চাপ কৈশোরকালে পুষ্টির প্রয়োজনীয়তাকে আরও বাড়িয়ে দেয়। পরিবারের মধ্যে খাবার বিতরণ ও খাবার গ্রহণে ছেলে-মেয়ের মধ্যে প্রথাগত আচরণের কারণে অনেক দেশে শৈশব থেকে শুরু করে কৈশোরকাল পর্যন্ত মেয়েরা বিশেষভাবে অপুষ্টির শিকার হয়ে থাকে। এসকল কারণে কিশোর-কিশোরীদের পুষ্টির গুরুত্ব অপরিসীম।<br><br>&nbsp;</p>', '1694955417-কৈশোরকালে বৈচিত্র্যময় খাবার ও পুষ্টির গুরুত্ব.jpg', NULL, NULL, '2023-09-17 06:56:58', '2023-09-17 06:56:58'),
(5, 1, 'পুষ্টি জনিত সমস্যা, প্রতিরোধ ও প্রতিকার', NULL, '<p><strong>অপুষ্টিজনিত সমস্যা, প্রতিরোধ ও প্রতিকার</strong></p><p><strong>অপুষ্টি</strong></p><p>শরীরে এক বা একাধিক পুষ্টি উপাদানের দীর্ঘদিন ধরে অভাব হলে শরীরের বৃদ্ধি ব্যাহত হয় এবং সুনির্দিষ্ট কিছু অস্বাভাবিক লক্ষণাদি প্রকাশ পায়। এই ধরনের অবস্থাকেই অপুষ্টি বলে।</p><p><strong>অপুষ্টির পরিণতি (কিশোরীদের):</strong></p>', '1694957261-পুষ্টি জনিত সমস্যা, প্রতিরোধ ও প্রতিকার.jpg', NULL, NULL, '2023-09-17 07:27:41', '2023-09-17 07:27:41'),
(7, 1, 'বি. এম. আই কি, পুষ্টিগত অবস্থা নির্ণয় প্রক্রিয়া', NULL, '<p><strong>পুষ্টিগত অবস্থা নির্ণয় করার পদ্ধতি:</strong></p><p><strong>বি. এম. আই. (Body Mass Index)</strong></p><p>কোন ব্যক্তির ওজন এবং উচ্চতার বর্গের অনুপাতই হলা বি এম আই। এটি পুষ্টিগত অবস্থা নির্ণয়ের একটি উল্লেখযেগো্য পদ্ধতি। বি এম আই বের করতে ব্যক্তির ওজন কিলোগ্রাম এককে এবং উচ্চতা মিটার এককে জানা প্রয়োজন। ওজনকে উচ্চতার বর্গ দিয়ে ভাগ করলেই বি এম আই পাওয়া যাবে। নিচে সূত্রটি দেয়া হলো-</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ওজন (কিলোগ্রাম)</p><p>বি এম আই= -----------------------</p><p>&nbsp; &nbsp; &nbsp; &nbsp; উচ্চতা (মিটার)²</p><p>&nbsp;</p><p>উদাহরণ হিসেবে ধরা যাক, ১৫ বছরের একজন কিশোরের ওজন ২৮ কিলোগ্রাম এবং উচ্চতা ১.২৫ মিটার, তাহলে তার বি এম আই হবে-&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;২৮</p><p>বি এম আই= ----------------------- = ১৭.৯২</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ১.২৫&nbsp;x ১.২৫</p><p>এবং ১৩ বছরের একজন কিশোরীর ওজন ৫০ কিলোগ্রাম এবং উচ্চতা ১.৫০ মিটার, তাহলে তার বি এম আই হবে-&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;৫০</p><p>বি এম আই= ----------------------- = ২২.২২</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ১.৫০&nbsp;x ১.৫০</p><p>১০ -১৯ বছর বয়সী কিশোর মেয়েদের আদর্শ বি এম আই অনুযায়ী পুষ্টিগত অবস্থা:</p><figure class=\"table\"><table><tbody><tr><td><strong>বয়স (বছর)</strong></td><td><strong>আদর্শ বি এম আই</strong></td><td><strong>মৃদু অপুষ্টি</strong></td><td><strong>মৃদু মুটিয়ে যাওয়া</strong></td></tr><tr><td>১০</td><td>১৬.৬</td><td>১৪.৮</td><td>১৯.০</td></tr><tr><td>১১</td><td>১৭.২</td><td>১৫.৩</td><td>১৯.৯</td></tr><tr><td>১২</td><td>১৮.০</td><td>১৬.০</td><td>২০.৮</td></tr><tr><td>১৩</td><td>১৮.৮</td><td>১৬.৬</td><td>২১.৮</td></tr><tr><td>১৪</td><td>১৯.৬</td><td>১৭.২</td><td>২২.৭</td></tr><tr><td>১৫</td><td>২০.২</td><td>১৭.৮</td><td>২৩.৫</td></tr><tr><td>১৬</td><td>২০.৭</td><td>১৮.২</td><td>২৪.১</td></tr><tr><td>১৭</td><td>২১.০</td><td>১৮.৪</td><td>২৪.৫</td></tr><tr><td>১৮</td><td>২১.৩</td><td>১৮.৬</td><td>২৪.৮</td></tr><tr><td>১৯</td><td>২১.৪</td><td>১৮.৭</td><td>২৫.০</td></tr></tbody></table></figure><p>উৎস: বিশ্ব স্বাস্থ্য সংস্থা (২০০৭)</p><p>&nbsp;</p><p>১০ -১৯ বছর বয়সী কিশোর ছেলেদের আদর্শ বি এম আই অনুযায়ী পুষ্টিগত অবস্থা:</p><figure class=\"table\"><table><tbody><tr><td><strong>বয়স (বছর)</strong></td><td><strong>আদর্শ বি এম আই</strong></td><td><strong>মৃদু অপুষ্টি</strong></td><td><strong>মৃদু মুটিয়ে যাওয়া</strong></td></tr><tr><td>১০</td><td>১৬.৪</td><td>১৪.৯</td><td>১৮.৫</td></tr><tr><td>১১</td><td>১৬.৯</td><td>১৫.৩</td><td>১৯.২</td></tr><tr><td>১২</td><td>১৭.৫</td><td>১৫.৮</td><td>১৯.৯</td></tr><tr><td>১৩</td><td>১৮.২</td><td>১৬.৪</td><td>২০.৮</td></tr><tr><td>১৪</td><td>১৯.০</td><td>১৭.০</td><td>২১.৮</td></tr><tr><td>১৫</td><td>১৯.৮</td><td>১৭.৬</td><td>২২.৭</td></tr><tr><td>১৬</td><td>২০.৫</td><td>১৮.২</td><td>২৩.৫</td></tr><tr><td>১৭</td><td>২১.১</td><td>১৮.৮</td><td>২৪.৩</td></tr><tr><td>১৮</td><td>২১.৭</td><td>১৯.২</td><td>২৪.৯</td></tr><tr><td>১৯</td><td>২২.২</td><td>১৯.৬</td><td>২৫.৪</td></tr></tbody></table></figure><p>উৎস: বিশ্ব স্বাস্থ্য সংস্থা (২০০৭)</p><p>উপরের ছক থেকে দেখা যায় যে, ১৫ বছরের কিশোরের বি এম আই তার আদর্শ মান থেকে তুলনামূলকভাবে কম আছে। নির্ধারিত খাদ্য তালিকা অনুযায়ী সুষম খাবার খেলে তার এই অপুষ্টি দূর হবে।</p><p>আবার ১৩ বছরের কিশোরীর বি এম আই তার আদর্শ মান থেকে তুলনামূলকভাবে বেশী আছে। তাই তাকে কম ক্যালরিযুক্ত খাবার গ্রহণ ও বিভিন্ন ফাস্টফুড বর্জনের মাধ্যমে এবং ব্যায়াম ও শারীরিক পরিশ্রম করে বি এম আই স্বাভাবিক মাত্রায় ফিরিয়ে আনতে হবে। এক্ষেত্রে তার ইচ্ছাশক্তিকে কাজে লাগাতে হবে ও খাবারকে পরিমিত পর্যায়ে আনতে হবে, তবেই সুস্বাস্থ্য বজায় থাকবে।<br><br><br>&nbsp;</p>', '1694956969-বি. এম. আই কি, পুষ্টিগত অবস্থা নির্ণয় প্রক্রিয়া.png', NULL, NULL, '2023-09-17 07:22:49', '2023-09-17 07:22:49'),
(9, 2, 'নিরাপদ খাবার, খাদ্য ক্ষতি ও অপচয়', NULL, '<p><strong>খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি</strong><br><br>কৈশোরকালে শরীরের দ্রুত বৃদ্ধি ঘটে। দেহ বৃদ্ধি বিশেষ করে শরীরের কাঠামোগত বৃদ্ধির জন্য এসময় যথেষ্ট পরিমাণ পুষ্টিকর ও সুষম খাবার গ্রহণ করা প্রয়োজন । এসময় দেহের চাহিদা অনুযায়ী পুষ্টিকর খাবার না খেলে শারীরিক বৃদ্ধি অ মানসিক পরিপক্বতা সঠিকভাবে গড়ে উঠেনা। কৈশোরকালীন এই সময়কে&nbsp;Missed Opportunities&nbsp;বলে<strong>&nbsp;</strong>কারণ শিশুকালে যদি শরিরে পুষ্টির কোন ঘাটতি থাকে তা এসময় পূরণ করা সম্ভব <strong>।&nbsp;</strong>তাই এই সময়টি পুষ্টিগত অবস্থা উন্নয়নের জন্য একটা শেষ সুযোগ।<br><br><strong>খাদ্য</strong><br><br>খাদ্য হচ্ছে এমন কতকগুলো প্রয়োজনীয় উপাদানের সমষ্টি যা গ্রহণের মাধ্যমে শরীরের স্বাভাবিক বৃদ্ধি ও কর্মক্ষমতা বজায় থাকে, ক্ষয়পূরণ ও বিভিন্নভাবে কাজের জন্য প্রয়োজনীয় শক্তির যোগান দেয়, এবং সর্বোপরি রোগ প্রতিরোধ ক্ষমতা তৈরী করে।&nbsp;</p><p>&nbsp;</p><p><strong>পুষ্টি</strong></p><p>&nbsp;</p><p>পুষ্টি হচ্ছে এমন একটি প্রক্রিয়া যার মাধ্যমে গ্রহণ করা খাদ্য শোষিত হয়ে শরীরে তাপ ও শক্তি উৎপন্ন করে, শরীরের বৃদ্ধি সাধন করে এবং রোগ প্রতিরোধ ক্ষমতা সৃষ্টি করে।&nbsp;খাদ্যের&nbsp;সাথে স্বাস্থ্যের সম্পর্কই হল পুষ্টি। অর্থাৎ স্বাস্থ্য গঠনে খাদ্যের ভূমিকা অথবা খাদ্যের সাথে সুস্থ-সবল অ কর্মক্ষম স্বাস্থ্য গঠন এবং বজায় রাখার জন্য যে যোগসূত্র সে প্রক্রিয়াকে আমরা পুষ্টি বলি।<br><br><strong>পুষ্টিকর খাদ্য&nbsp;</strong><br><br>যে&nbsp;সব খাদ্য খেলে শরীরে তাপ ও শক্তি উৎপাদিত হয, দেহের গঠন বৃদ্ধি হয়, শরীর সবল, কর্মক্ষম ও নিরোগ থাকে তাই পুষ্টিকর খাদ্য।</p><p>খাদ্য ও পুষ্টি একে অপরের সাথে জড়িত। যে কোন খাদ্য গ্রহণ কলেই হবে না, তা অবশ্যই পুষ্টিকর ও নিরাপদ হতে হবে। পুষ্টিকর খাদ্য গ্রহণ কনা করলে রোগ প্রতিরোধ ক্ষমতা কমে যায় এবং শরীরে বিভিন্ন ধরনের রোগ হয়। পুষ্টিকর খাবার গ্রহণ করলে শরীর ও মন উভয়ই ভাল থাকে।<br><br><br>&nbsp;</p>', '1694980582-নিরাপদ খাবার, খাদ্য ক্ষতি ও অপচয়.jpg', NULL, NULL, '2023-09-17 13:56:22', '2023-09-17 13:56:22'),
(10, 3, 'পুষ্টি জনিত সমস্যা, প্রতিরোধ ও প্রতিকার', NULL, '<p>asfasfgf</p>', '1695027125-পুষ্টি জনিত সমস্যা, প্রতিরোধ ও প্রতিকার.jpg', NULL, NULL, '2023-09-18 02:52:05', '2023-09-18 02:52:05'),
(11, 4, 'বি. এম. আই কি', NULL, '<p>if you add this type of lesson name it still crashes.</p>', '1695032103-বি. এম. আই কি.jpg', NULL, NULL, '2023-09-18 04:15:03', '2023-09-18 04:15:03'),
(12, 5, 'খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি', NULL, '<p>asdkkghksgfjihhgdfkhgdk</p>', '1695106030-খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি.jpg', NULL, NULL, '2023-09-19 00:47:10', '2023-09-19 00:47:10'),
(13, 5, 'খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি', '<p>খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি&nbsp;</p>', '<p>খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি&nbsp;</p>', '1695113525-খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি.jpg', NULL, NULL, '2023-09-19 02:52:05', '2023-09-19 02:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, '2023_09_17_074236_create_others_table', 1),
(16, '2023_09_18_054241_create_seminars_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

CREATE TABLE `overviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `current_chapter_id` int(11) NOT NULL DEFAULT 1,
  `current_lesson_id` int(11) NOT NULL DEFAULT 0,
  `marks` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overviews`
--

INSERT INTO `overviews` (`id`, `user_id`, `current_chapter_id`, `current_lesson_id`, `marks`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 9, 3, '2023-09-17 06:28:22', '2023-09-19 05:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chapter_id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `chapter_id`, `lesson_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'কৈশোরকালীন সময়কে বলে', 'Missed Opportunities', 'Connected Opportunities', 'Missed Times', 'none', 'Missed Opportunities', '2023-09-17 06:44:15', '2023-09-17 06:44:15'),
(2, 1, 1, 'পুষ্টি হল এমন একটি প্রক্রিয়া যার মাধ্যমে-', 'শরীরে তাপ ও শক্তি উৎপন্ন হয়', 'বৃদ্ধি সাধন করে', 'রোগ প্রতিরেোধ ক্ষমতা বৃদ্ধি করে', 'উপরের সবগুলো', 'উপরের সবগুলো', '2023-09-17 06:44:52', '2023-09-17 06:44:52'),
(3, 1, 2, 'খাদ্যের উপাদান কয়টি?', '৫টি', '৬টি', '৪টি', '৭টি', '৬টি', '2023-09-17 06:48:07', '2023-09-17 06:48:07'),
(4, 1, 2, 'দেহে ক্ষয়পূরণ ও বৃদ্ধিসাধনকারী খাদ্য কোনটি?', 'ভাত', 'শাক-সবজি', 'ডিম', 'লেবু', 'ডিম', '2023-09-17 06:48:42', '2023-09-17 06:48:42'),
(5, 1, 3, '. কোন হরমোনের প্রভাবে শরীরের দ্রুত বৃদ্ধি হয়?', 'থাইরক্সিন', 'অক্সিটসিন', 'গ্রোথ হরমোন', 'থাইরয়েড হরমোন', 'থাইরয়েড হরমোন', '2023-09-17 06:49:32', '2023-09-17 06:49:32'),
(6, 1, 3, 'কোন ধরনের খাবার শরীরের দ্রুত বৃদ্ধিতে সাহায্য করে?', 'কার্বোহাইড্রেট', 'প্রোটিন', 'সুষম খাবার', 'পানি', 'সুষম খাবার', '2023-09-17 06:50:13', '2023-09-17 06:50:13'),
(8, 1, 4, 'কিশোরীদের মাসিক ঋতুস্রাবের কারণে কোন খাদ্য উপাদানের চাহিদা বেড়ে যায়?', 'আমিষ', 'আয়রন', 'ভিটামিন', 'শর্করা', 'আয়রন', '2023-09-17 06:57:46', '2023-09-17 06:57:46'),
(9, 1, 4, 'কৈশোরকালের সঠিক পুষ্টি  উপাদান গ্রহণ নিশ্চিত করে-', 'কর্মক্ষমতা বৃদ্ধি', 'সন্তান জন্মদানের সহজসাধ্যতা', 'পড়াশোনার মনোযোগ বৃদ্ধি', 'উপরের সবগুলো', 'উপরের সবগুলো', '2023-09-17 06:58:27', '2023-09-17 06:58:27'),
(10, 1, 4, 'দৈনিক কমপক্ষে কত গ্রাম সবজি খাওয়া প্রয়োজন?', '১০০', '২০০', '৩০০', '৫০০', '২০০', '2023-09-17 06:59:09', '2023-09-17 06:59:09'),
(11, 1, 4, 'ভিটামিন সি এর অভাবজনিত সমস্যা কোনটি?', 'মাড়ী দিয়ে রক্ত পড়ে', 'মুখে ব্রণ উঠে', 'দেহের বৃদ্ধি ব্যাহত হয়', 'চুল লালচে হয়', 'মাড়ী দিয়ে রক্ত পড়ে', '2023-09-17 06:59:52', '2023-09-17 06:59:52'),
(12, 1, 4, 'সবুজ শাক কম গ্রহণের ফলে কি ঘটতে পারে?', 'সর্দি-কাশি', 'ডিম্বাশয়ে ক্যান্সার হওয়ার ঝুঁকি', 'ডেঙ্গু', 'রাতকানা', 'ডিম্বাশয়ে ক্যান্সার হওয়ার ঝুঁকি', '2023-09-17 07:01:00', '2023-09-17 07:01:00'),
(13, 1, 4, 'স্নেহ জাতীয় খাবার আমাদের দেহে কেন প্রয়োজন?', 'অত্যাবশ্যকীয় ফ্যাটি এসিডের চাহিদা পূরণ করে', 'শরীর গঠনে সাহায্য করে', 'শরীরের বৃদ্ধি ও ক্ষয়পূরণ করে', 'চোখ সুস্থ রাখে', 'অত্যাবশ্যকীয় ফ্যাটি এসিডের চাহিদা পূরণ করে', '2023-09-17 07:01:36', '2023-09-17 07:01:36'),
(14, 1, 4, 'ক্যালসিয়ামের উপকারিতা লেখ', 'হাড়কে মজবুত করে', 'শরীর গঠন করে', 'মানসিক বিকাশ ঘটায়', 'কোষে অক্সিজেন পরিবহন করে', 'হাড়কে মজবুত করে', '2023-09-17 07:02:14', '2023-09-17 07:02:14'),
(15, 1, 5, 'নিচের কোন উপাদান গুলো অনুপুষ্টি?', 'Vit D', 'Iron', 'Vitamin B complex', 'উপরের সবগুলো', 'উপরের সবগুলো', '2023-09-17 07:15:40', '2023-09-17 07:15:40'),
(16, 1, 5, 'প্রধান পুষ্টি উপাদান কয়টি?', '৬ টি', '৩ টি', '৫ টি', '৪ টি', '৩ টি', '2023-09-17 07:16:15', '2023-09-17 07:16:15'),
(17, 1, 6, '১২-১৩ বছরের কিশোরীর প্রতিদিন শক্তি চাহিদা কতো KCal?', '২৫৪৮ Kcal', '২৩৭৯ Kcal', '২১৪৯ Kcal', '২২৭৬ Kcal', '২২৭৬ Kcal', '2023-09-17 07:18:37', '2023-09-17 07:18:37'),
(18, 1, 6, '১৯ বছর বয়সী একজন কিশোরীর দৈনিক কত মি.গ্রা আয়রন গ্রহণ করা উচিত?', '৮.৯-৩২.৭ মি.গ্রা', '৮.৯-১৮.৮ মি.গ্রা', '১৩.৭ মি.গ্রা', '২৯.৪ মি.গ্রা', '২৯.৪ মি.গ্রা', '2023-09-17 07:19:38', '2023-09-17 07:19:38'),
(19, 1, 6, 'একজন কিশোরীর দৈনিক কত % শর্করা গ্রহণ করা প্রয়োজন?', '৩০-৪০%', '৫০-৫৫%', '৭০-৮০%', '২৫-৫৫%', '৫০-৫৫%', '2023-09-17 07:20:10', '2023-09-17 07:20:10'),
(20, 1, 6, 'একজন কিশোরের দৈনিক কত গ্রাম আমিষ গ্রহণ করা প্রয়োজন?', '২০-৪০', '২৫.৯-৫৫.৯', '২৫-৫৫', '২৫.৯-৫৭.৯', '২৫.৯-৫৭.৯', '2023-09-17 07:20:45', '2023-09-17 07:20:45'),
(21, 1, 7, 'BMI এর সূত্র কোনটি ?', 'BMI= ওজন/উচ্চতা(মিটার)^২', 'BMI= ওজন/উচ্চতা', 'BMI= ওজন^২/উচ্চতা^২', 'BMI= ওজন/উচ্চতা(সে.মি)^২', 'BMI= ওজন/উচ্চতা(মিটার)^২', '2023-09-17 07:23:36', '2023-09-17 07:23:36'),
(22, 1, 7, '১৬ বছরের একজন কিশোরীর ওজন ৩০ কে.জি এবং উচ্চতা ১.২২মিটার তাহলে তার BMI কত?', '২০.১৫', '২১', '২০.১৯', '২২', '২০.১৫', '2023-09-17 07:24:15', '2023-09-17 07:24:15'),
(23, 1, 7, '১৫ বছর বয়সী কিশোরীর আদর্শ BMI কত?', '২৩', '২১', '১৯', '২০', '২০', '2023-09-17 07:25:07', '2023-09-17 07:25:07'),
(24, 1, 7, '১৮ বছরের  কিশোরের আদর্শ BMI কত?', '২১.৯', '২১.৫', '২০.৭', '১৯.৮', '২১.৫', '2023-09-17 07:25:45', '2023-09-17 07:25:45'),
(25, 1, 7, 'BMI এর পূর্ণরূপ কি?', 'Basal Metabolic Index', 'Basal Mass Index', 'Body Mass Index', 'Body Massive Index', 'Body Mass Index', '2023-09-17 07:26:16', '2023-09-17 07:26:16'),
(26, 1, 8, 'অপুষ্টিজনিত সমস্যা কোনটি?', 'ওজনাধিক্য', 'ক্যান্সার', 'টাইফয়েড', 'ম্যালেরিয়া', 'ওজনাধিক্য', '2023-09-17 07:28:18', '2023-09-17 07:28:18'),
(27, 1, 8, 'BMI কত হলে পুষ্টিহীনতা হয়ে থাকে?', '১৯', '২০', '১৮', '১৮ এর নিচে', '১৮ এর নিচে', '2023-09-17 07:28:45', '2023-09-17 07:28:45'),
(28, 1, 8, 'রক্তস্বল্পতা কোন খনিজ লবণের অভাবে হয়ে থাকে?', 'আয়োডিন', 'আয়রন', 'সোডিয়াম', 'জিংক', 'আয়রন', '2023-09-17 07:29:15', '2023-09-17 07:29:15'),
(29, 1, 8, 'ক্যালসিয়ামের অভাবজনিত রোগ কোনটি?', 'গলগন্ড', 'স্কার্ভি', 'অস্টিওপরোসিস', 'স্মৃতিশক্তি হ্রাস', 'অস্টিওপরোসিস', '2023-09-17 07:29:42', '2023-09-17 07:29:42'),
(30, 1, 8, 'কোন খাবারের Vit B complex থাকে?', 'ঢেঁকি ছাঁটা চাল', 'পালংশাক', 'আলু', 'গাজর', 'ঢেঁকি ছাঁটা চাল', '2023-09-17 07:30:16', '2023-09-17 07:30:16'),
(31, 2, 9, 'কৈশোরকালীন সময়কে বলে', 'Missed Opportunities', 'Connected Opportunities', 'Missed Times', 'None', 'Missed Opportunities', '2023-09-17 13:57:19', '2023-09-17 13:57:19'),
(32, 2, 9, 'পুষ্টি হল এমন একটি প্রক্রিয়া যার মাধ্যমে-', 'শরীরে তাপ ও শক্তি উৎপন্ন হয়', 'বৃদ্ধি সাধন করে', 'রোগ প্রতিরেোধ ক্ষমতা বৃদ্ধি করে', 'উপরের সবগুলো', 'উপরের সবগুলো', '2023-09-17 13:57:53', '2023-09-17 13:57:53'),
(33, 1, 10, 'who is besT?', 'messi', 'ronaldo', 'pele', 'maradona', 'pele', '2023-09-18 02:56:06', '2023-09-18 02:56:06'),
(34, 3, 10, 'asakfdsjla', 'q', 'w', 'e', 'r', 'e', '2023-09-18 02:59:08', '2023-09-18 02:59:08'),
(35, 4, 11, 'BMI এর পূর্ণরূপ কি?', 'Basal Metabolic Index', 'Connected Opportunities', 'Body Mass Index', 'None', 'Body Mass Index', '2023-09-18 04:15:35', '2023-09-18 04:15:35'),
(36, 4, 11, 'BMI এর পূর্ণরূপ কি?', 'Basal Metabolic Index', 'Connected Opportunities', 'Body Mass Index', 'None', 'Body Mass Index', '2023-09-19 00:44:53', '2023-09-19 00:44:53'),
(37, 5, 12, 'BMI এর পূর্ণরূপ কি?', 'Basal Metabolic Index', 'Connected Opportunities', 'Body Mass Index', 'None', 'Body Mass Index', '2023-09-19 00:47:40', '2023-09-19 00:47:40'),
(38, 5, 12, 'কৈশোরকালীন সময়কে বলে', 'Missed Opportunities', 'Connected Opportunities', 'Missed Times', 'None', 'Body Mass Index', '2023-09-19 00:48:01', '2023-09-19 00:48:01'),
(39, 5, 13, 'খাদ্যের উপাদান কয়টি?', '৫টি', 'আয়রন', '৪টি', 'লেবু', 'লেবু', '2023-09-19 02:52:35', '2023-09-19 02:52:35'),
(40, 4, 11, 'কৈশোরকালীন সময়কে বলে', '৫টি', 'Connected Opportunities', 'Missed Times', 'None', 'Missed Times', '2023-09-19 02:54:46', '2023-09-19 02:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `correct_ans` int(11) DEFAULT NULL,
  `wrong_ans` int(11) DEFAULT NULL,
  `skip_ans` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `lesson_id`, `chapter_id`, `correct_ans`, `wrong_ans`, `skip_ans`, `created_at`, `updated_at`) VALUES
(27, 2, 1, 1, 1, 0, 1, '2023-09-19 03:00:22', '2023-09-19 03:00:44'),
(28, 2, 2, 1, 1, 0, 1, '2023-09-19 03:00:58', '2023-09-19 03:01:30'),
(30, 2, 3, 1, 1, 1, 0, '2023-09-19 03:03:41', '2023-09-19 03:03:41'),
(35, 2, 4, 1, 4, 3, 0, '2023-09-19 05:32:11', '2023-09-19 05:32:11'),
(37, 2, 5, 1, 1, 1, 0, '2023-09-19 05:33:33', '2023-09-19 05:33:34'),
(38, 2, 7, 1, 3, 2, 0, '2023-09-19 05:34:15', '2023-09-19 05:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `svccs`
--

CREATE TABLE `svccs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'student',
  `enrolled` tinyint(1) NOT NULL DEFAULT 1,
  `school_name` text NOT NULL,
  `class` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `present_address` text NOT NULL,
  `division` varchar(255) NOT NULL,
  `is_club_member` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `type`, `enrolled`, `school_name`, `class`, `gender`, `phone_no`, `password`, `present_address`, `division`, `is_club_member`, `image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed Akash', 'thebadbrad970@gmail.com', 25, 'admin', 1, 'afas', '10', 'পুরুষ', '01315007189', '$2y$10$DJgANSfZb360Vglhoi1oGeWohJGXSR0Uyu93T1c1FVXF8GMddzae.', '01315007189', 'ঢাকা', 'no', NULL, NULL, NULL, '2023-09-17 06:03:51', '2023-09-17 06:03:51'),
(2, 'safasf', 'aifas@gmail.com', 22, 'student', 1, 'asas', '4', 'পুরুষ', '1234567890', '$2y$10$A7RGa421bTDLcapI94IOqOZfc490K3cOc/xUEYJRknxFo4CzMRS5u', '1234567890', 'ঢাকা', 'no', '1695123170-safasf.jpg', NULL, NULL, '2023-09-17 06:28:14', '2023-09-19 05:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `webinars`
--

CREATE TABLE `webinars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_sheets`
--
ALTER TABLE `activity_sheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_contents`
--
ALTER TABLE `home_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overviews`
--
ALTER TABLE `overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `svccs`
--
ALTER TABLE `svccs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `webinars`
--
ALTER TABLE `webinars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_sheets`
--
ALTER TABLE `activity_sheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_contents`
--
ALTER TABLE `home_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `overviews`
--
ALTER TABLE `overviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `svccs`
--
ALTER TABLE `svccs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `webinars`
--
ALTER TABLE `webinars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
