-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2015 at 11:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_unpguidancerms`
--

-- --------------------------------------------------------

--
-- Table structure for table `absences_records`
--

CREATE TABLE IF NOT EXISTS `absences_records` (
  `id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `absent_date` date NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `absences_records`
--

INSERT INTO `absences_records` (`id`, `student_id`, `year_level`, `absent_date`, `subject`, `reason`, `created_at`, `updated_at`) VALUES
(1, 24, '1st Year', '2015-11-11', 'tesasdfasdf', 'asdfasdf', '2015-11-10 19:14:44', '2015-11-10 19:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `academic_performances`
--

CREATE TABLE IF NOT EXISTS `academic_performances` (
  `id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `academic_performances`
--

INSERT INTO `academic_performances` (`id`, `student_id`, `year_level`, `semester`, `remark`, `subject`, `created_at`, `updated_at`) VALUES
(1, 24, '1st Year', '1st', 'PASSED', 'r', '2015-11-10 19:10:57', '2015-11-10 19:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activity_date` date NOT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `student_id`, `year_level`, `activity_date`, `activity`, `sponsor`, `created_at`, `updated_at`) VALUES
(1, 24, '', '2015-11-11', 'test', 'asdfasd', '2015-11-10 19:04:32', '2015-11-10 19:04:32'),
(2, 24, '', '2015-11-11', 'd', 'd', '2015-11-10 19:05:35', '2015-11-10 19:05:35'),
(3, 24, '1st Year', '2015-11-11', 'test', 'sdf', '2015-11-10 19:13:11', '2015-11-10 19:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CCIT', '2015-10-18 03:53:13', '2015-11-09 21:39:05'),
(2, 'CBAA', '2015-10-18 04:03:03', '2015-10-19 06:21:44'),
(3, 'CAS', '2015-10-19 05:16:52', '2015-10-19 06:23:29'),
(4, 'tryzx', '2015-10-19 14:07:06', '2015-10-19 14:07:44'),
(5, 'CHS', '2015-10-23 10:42:57', '2015-10-23 10:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `counselling_records`
--

CREATE TABLE IF NOT EXISTS `counselling_records` (
  `id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `problem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `counselling_records`
--

INSERT INTO `counselling_records` (`id`, `student_id`, `year_level`, `date`, `problem`, `action`, `created_at`, `updated_at`) VALUES
(1, 24, '1st Year', '2015-11-11', 'rt', 'rt', '2015-11-10 19:13:21', '2015-11-10 19:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL,
  `college_id` int(10) unsigned NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `college_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'BS-Computer Science', '2015-10-18 03:53:35', '2015-10-18 03:53:35'),
(2, 2, 'BS-Accountancy', '2015-10-18 04:03:30', '2015-10-19 07:24:43'),
(3, 1, 'BS-Information Technology', '2015-10-18 12:22:14', '2015-10-18 12:22:14'),
(4, 2, 'BS-Business Ad', '2015-10-19 06:32:34', '2015-10-19 06:32:34'),
(5, 1, 'CompTech', '2015-10-19 06:32:50', '2015-10-19 06:32:50'),
(6, 2, 'BS-Business Logic', '2015-10-19 06:45:13', '2015-10-19 06:45:13'),
(7, 4, 'try', '2015-10-19 15:26:23', '2015-10-19 15:26:23'),
(8, 4, 'try2', '2015-10-23 10:27:47', '2015-10-23 10:27:47'),
(9, 5, 'Nursing', '2015-10-23 10:43:18', '2015-10-23 10:43:18'),
(10, 3, 'PolSci', '2015-10-25 12:55:34', '2015-10-25 12:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `educational_backgrounds`
--

CREATE TABLE IF NOT EXISTS `educational_backgrounds` (
  `id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `school_name_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_graduated` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_from` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0000-00-00 00:00:00',
  `date_to` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0000-00-00 00:00:00',
  `general_average` double(8,2) NOT NULL,
  `awards` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `educational_backgrounds`
--

INSERT INTO `educational_backgrounds` (`id`, `student_id`, `level`, `school_name_address`, `degree`, `year_graduated`, `date_from`, `date_to`, `general_average`, `awards`, `created_at`, `updated_at`) VALUES
(1, 24, 'Elementary', 'teasd', NULL, '2015', '2015', '2015', 33.00, NULL, '2015-11-10 19:02:35', '2015-11-10 19:02:35'),
(2, 24, 'Secondary', 'dsaf', NULL, '2015', '2015', '2015', 434.00, 'asdfasdf', '2015-11-10 19:02:36', '2015-11-10 19:02:36'),
(3, 24, 'Elementary', 'ere', NULL, '2015', '2015', '2015', 4.00, 'ere', '2015-11-10 19:09:58', '2015-11-10 19:09:58'),
(4, 24, 'Secondary', 'asdfasdf', NULL, '2015', '2015', '2015', 454.00, 'asdf', '2015-11-10 19:09:58', '2015-11-10 19:09:58'),
(5, 22, 'Pre-School/Kindergarten', 'asdf', NULL, '2015', '2015', '2015', 3.00, 'asdf', '2015-11-10 19:26:08', '2015-11-10 19:26:08'),
(6, 22, 'Elementary', 'dfds', NULL, '2015', '2015', '2015', 3.00, 'sdf', '2015-11-10 19:26:08', '2015-11-10 19:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `family_backgrounds`
--

CREATE TABLE IF NOT EXISTS `family_backgrounds` (
  `id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `members` text COLLATE utf8_unicode_ci NOT NULL,
  `birth_order` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_brothers` int(11) DEFAULT NULL,
  `number_of_sisters` int(11) DEFAULT NULL,
  `parent_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_of_living` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family_income` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `family_backgrounds`
--

INSERT INTO `family_backgrounds` (`id`, `student_id`, `members`, `birth_order`, `number_of_brothers`, `number_of_sisters`, `parent_status`, `others`, `type_of_living`, `family_income`, `created_at`, `updated_at`) VALUES
(1, 24, '[{"member":"Mother","name":"sadf","address":"adsf","occupation":"dfa","educational_attainment":"sadf","contact_number":"3434343434"}]', 'Eldest', 4, 4, 'Legally Married', '', 'Living w/ parents', 0.00, '2015-11-10 19:10:47', '2015-11-10 19:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_07_110821_create_colleges_table', 1),
('2015_10_07_110917_create_courses_table', 1),
('2015_10_07_110958_create_scholarships_table', 1),
('2015_10_07_111107_create_students_table', 1),
('2015_10_07_111237_create_activities_table', 1),
('2015_10_07_111732_create_educational_backgrounds_table', 1),
('2015_10_07_111801_create_family_backgrounds_table', 1),
('2015_10_14_044908_create_academic_performances_table', 1),
('2015_10_14_045545_create_oraganizational_affilations_table', 1),
('2015_10_14_045941_create_psychological_tests_table', 1),
('2015_10_14_050340_create_counselling_records_table', 1),
('2015_10_14_050447_create_absences_records_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizational_affiliations`
--

CREATE TABLE IF NOT EXISTS `organizational_affiliations` (
  `id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `school_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `organizational_affiliations`
--

INSERT INTO `organizational_affiliations` (`id`, `student_id`, `year_level`, `name`, `position`, `school_year`, `created_at`, `updated_at`) VALUES
(2, 24, '1st Year', 'ff', 'fg', 'fg', '2015-11-10 19:12:10', '2015-11-10 19:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psychological_tests`
--

CREATE TABLE IF NOT EXISTS `psychological_tests` (
  `id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_taken` date NOT NULL,
  `percentile` double(8,2) NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `psychological_tests`
--

INSERT INTO `psychological_tests` (`id`, `student_id`, `name`, `date_taken`, `percentile`, `remarks`, `created_at`, `updated_at`) VALUES
(2, 24, 'tes', '2015-11-11', 33.00, '3fd', '2015-11-10 19:12:51', '2015-11-10 19:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE IF NOT EXISTS `scholarships` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Study Privellege', '2015-10-18 03:52:31', '2015-10-18 03:52:31'),
(2, 'CHED', '2015-10-18 03:52:40', '2015-10-18 03:52:40'),
(3, 'Provincial Scholar', '2015-10-18 03:52:52', '2015-10-18 03:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL,
  `school_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `college_id` int(10) unsigned DEFAULT NULL,
  `course_id` int(10) unsigned DEFAULT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unp_cat_rating` double(8,2) DEFAULT NULL,
  `scholarship_id` int(10) unsigned DEFAULT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `place_of_birth` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `citizenship` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `civil_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_marriage` date DEFAULT NULL,
  `height` double(10,2) NOT NULL,
  `weight` double(10,2) NOT NULL,
  `bloodtype` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `illness` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disability` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ethnic` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `present_addresses` text COLLATE utf8_unicode_ci,
  `dorms` text COLLATE utf8_unicode_ci,
  `archived` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `school_id`, `lname`, `fname`, `mname`, `college_id`, `course_id`, `year_level`, `section`, `unp_cat_rating`, `scholarship_id`, `birthdate`, `age`, `place_of_birth`, `citizenship`, `sex`, `civil_status`, `date_of_marriage`, `height`, `weight`, `bloodtype`, `contact_number`, `email`, `religion`, `illness`, `disability`, `ethnic`, `home_address`, `present_addresses`, `dorms`, `archived`, `created_at`, `updated_at`) VALUES
(15, '11-11111', 'Binary', 'Hexa', 'Lexical', 1, 1, '1st Year', 'a', 87.00, 2, '1931-12-24', 83, 'Don''t care', 'filipino', 'Gay', 'Single', '0000-00-00', 2.00, 12.40, 'A+', '0763-4534-543', '', 'asdf', '', '', '', 'asdf', '[{"year_level":"1st Year","address":"asdfasdf"}]', '[]', '0', '2015-10-25 14:16:46', '2015-11-08 15:44:50'),
(16, '14-43354', 'Graham', 'Cracker', 'Balls', 5, 9, '2nd Year', 'Scalpel', 82.00, 1, '1998-01-11', 17, 'Hospital', 'filipino', 'Bisexual', 'Married', '2014-06-10', 1.40, 2.40, 'A+', '0935-2389-478', 'graham@rocketmail.com', 'Atheist', '', '', '', 'London, UK', '[{"year_level":"1st Year","address":"Caoayan, Vigan Ciy, Ilocos Sur"},{"year_level":"2nd Year","address":"Caoayan, Vigan Ciy, Ilocos Sur"}]', '[]', '0', '2015-10-25 15:37:04', '2015-11-08 08:11:11'),
(17, '11-23423', 'Fabellon', 'Alvin', 'Rasca', 4, 7, '4th Year', 'C', 79.90, 3, '1994-07-12', 21, 'Vigan', 'filipino', 'Male', 'Single', '0000-00-00', 2.20, 59.80, 'A+', '0754-4243-243', 'albino@gmail.com', 'INC', '', '', '', 'Vigan City', '[{"year_level":"1st Year","address":"Vigan City"},{"year_level":"2nd Year","address":"Vigan City"},{"year_level":"3rd Year","address":"Vigan City"},{"year_level":"4th Year","address":"Vigan City"}]', '[{"year_level":"1st Year","address":"Vigan City"},{"year_level":"2nd Year","address":"Vigan City"},{"year_level":"3rd Year","address":"Vigan City"},{"year_level":"4th Year","address":"Vigan City"}]', '0', '2015-10-25 17:31:26', '2015-11-10 20:58:09'),
(18, '24-53425', 'Tesla', 'Nikola', 'Genius', 2, 2, '1st Year', 'Invento', 90.40, 2, '1910-12-21', 104, 'Russia', 'russian', 'Male', 'Married', '1977-05-18', 2.40, 61.90, 'AB-', '3454-3543-544', 'light.bulb@tesla.com', 'Atheist', NULL, NULL, NULL, 'Russia', '[{"year_level":"1st Year","address":"Caoayan, Vigan Ciy, Ilocos Sur"}]', '[{"year_level":"1st Year","address":"Caoayan, Vigan Ciy, Ilocos Sur"}]', '0', '2015-10-25 17:36:11', '2015-10-25 17:36:11'),
(19, '46-54554', 'Dela Peña', 'George', 'Purisima', 1, 5, '1st Year', 'Z', 87.10, 2, '1998-01-12', 17, 'Ayusan Norte, Vigan City, Ilocos Sur', 'filipino', 'Lesbian', 'Widow/Widower', '2015-10-25', 0.00, 0.00, '', '3242-3432-423', '', 'Atheist', '', '', '', 'Ayusan Norte, Vigan City, Ilocos Sur', '[{"year_level":"1st Year","address":"Ayusan Norte, Vigan City, Ilocos Sur"}]', '[]', '0', '2015-10-25 17:39:45', '2015-10-26 16:07:22'),
(20, '12-34342', 'Testsldkfj', 'Tejjsdt', 'Testtdjksfjk', 2, 6, '1st Year', 'Blah', 43.00, 2, '1990-05-14', 25, 'TEst', 'filipino', 'Bisexual', 'Married', '2015-11-08', 3.00, 34.00, 'B-', '3423-4234-234', '', 'Atheist', 'tesdfjkc', 'sdklsdfkjsdj', 'Testdfjksd', 'djfskf', '[{"year_level":"1st Year","address":"Test"}]', NULL, '0', '2015-11-08 14:10:29', '2015-11-09 21:48:26'),
(21, '76-46423', 'Testname', 'jtesldf', 'jtefdflk', 1, 3, '1st Year', 'er', 100.00, 1, '1996-01-24', 19, 'ghhjghghjghj', 'filipino', 'Male', 'Single', NULL, 3.50, 4.80, '', '4343-4343-344', NULL, 'fgfgghhghjghj', NULL, NULL, NULL, '9gt5v8f', '[{"year_level":"1st Year","address":"Test"}]', NULL, '1', '2015-11-08 15:02:39', '2015-11-10 22:20:25'),
(22, '54-54555', 'Test ', 'auto', 'testdasdf', 1, 5, '1st Year', 'e3', 85.00, 2, '2015-11-10', 0, 'tdfdfds', 'filipino', 'Male', 'Single', NULL, 2.00, 2.00, 'A-', NULL, NULL, 'asdf', NULL, NULL, NULL, 'asdf', '[{"year_level":"1st Year","address":"Test"}]', NULL, '0', '2015-11-09 21:46:43', '2015-11-09 21:46:43'),
(23, '33-25454', 'dfs', 'fdsafdsafsdafdsadfs', 'tersater', 1, 3, '1st Year', NULL, 45.00, 2, '1960-06-23', 55, 'fdas', 'filipino', 'Female', 'Single', NULL, 3.00, 3.00, '', NULL, NULL, 'asdf', NULL, NULL, NULL, 'asdf', '[{"year_level":"1st Year","address":"asdf"}]', NULL, '0', '2015-11-09 21:49:39', '2015-11-09 21:49:39'),
(24, '65-63657', 'Last Added', 'Hey', 'You', 2, 6, '2nd Year', 'tr', 76.00, 1, '1994-11-11', 21, 'testfdasdfas', 'filipino', 'Female', 'Single', '0000-00-00', 1.60, 1.70, 'A-', NULL, NULL, 'tes', NULL, NULL, NULL, 'asdf', '[{"year_level":"1st Year","address":"asdf"}]', NULL, '0', '2015-11-10 18:54:06', '2015-11-10 18:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'myadmin', '$2y$10$GLIsfGB8.wO7I9YsQbXl3.9Om65z3/.V8orLbunc0fuWPXPSTb7ry', 'admin', 'gxKjibkNFNE681t5QmMmL61gmkUiNDdx5y8H6b34adwa9xH8RIrJ3PvvlPEo', '2015-10-25 20:26:40', '2015-10-25 20:32:39'),
(20, 'myuser', 'eyJpdiI6Im9uVW5Nd2wyZERhNHNkeEZrT1VqUEE9PSIsInZhbHVlIjoiNVRLanoyNkRVRkNYSjVhOW5ldVUzUT09IiwibWFjIjoiMmM0ZGMwYmU1Mjg1MWFjYmM0MmQ1YzQ5YzgxMDIwNjlhOGMxYzkxODUwNmY3NjRjMjJiOWVmMGEyYjY5ZjVlYiJ9', 'user', NULL, '2015-10-25 20:31:58', '2015-10-25 21:25:44'),
(21, 'master1', 'eyJpdiI6Im5MajZIc0tWUjVxblYxMUpoOGU2K2c9PSIsInZhbHVlIjoiRW1MNndwY1hSXC9xRjV4RzZZYjM3b1E9PSIsIm1hYyI6ImJlZDA0YTgwNDA1Y2VmYWYwMTk2NTM3YWU1MTUwNmE3ZDIxNWVlMDI4ZmU2YmJlNzNkMDU3NmI2YTQwNDljMmIifQ==', 'admin', NULL, '2015-10-25 20:58:00', '2015-10-25 20:58:00'),
(22, 'master2', '$2y$10$Ta.0vNn5xc6w2TRzMVyxE.SsIXDyXlfW8q8oG3ryBgA9ErQQpIiL.', 'admin', 'MMfgQtFFM4T4IGGLf5QddmLXeo9zbXpJJbSHzswB1uOp8SjkEWgOB1yihuBi', '2015-10-25 20:58:46', '2015-10-25 22:21:02'),
(23, 'testUser', '$2y$10$PBbeBGj259bLwxpJ2D9xuOKrmDbE7.IuRWU4BWXi8YK.kVYW8qw1K', 'user', '4DcJCGXKxltMUTb1IdJIyn9El2jC4dWw2oMEgRMhIjOpntDOABbMmUTOJaEx', '2015-10-25 21:26:52', '2015-10-25 21:48:37'),
(24, 'superuser', '$2y$10$schJxQsSqnba4thUmpyLPuIcfqUtnRQdFvpdhOLDN1nz7tMO8T2v6', 'admin', 'jFfpbMC4YkFwvXtqWxWdZlpSoXMqcwLvyrknrIFE5FtaDn1YO5TepSL7lHX5', '2015-10-25 22:20:58', '2015-10-26 16:24:05');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_bystatus`
--
CREATE TABLE IF NOT EXISTS `vw_bystatus` (
`single` decimal(23,0)
,`married` decimal(23,0)
,`widow` decimal(23,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_genderbycolleges`
--
CREATE TABLE IF NOT EXISTS `vw_genderbycolleges` (
`name` varchar(60)
,`male_pop` decimal(23,0)
,`female_pop` decimal(23,0)
,`gay_pop` decimal(23,0)
,`lesbian_pop` decimal(23,0)
,`bisexual_pop` decimal(23,0)
,`transgender_pop` decimal(23,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_genderwhole`
--
CREATE TABLE IF NOT EXISTS `vw_genderwhole` (
`male_pop` decimal(23,0)
,`female_pop` decimal(23,0)
,`gay_pop` decimal(23,0)
,`lesbian_pop` decimal(23,0)
,`bisexual_pop` decimal(23,0)
,`transgender_pop` decimal(23,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_percollege`
--
CREATE TABLE IF NOT EXISTS `vw_percollege` (
`name` varchar(60)
,`pop` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_perscholarship`
--
CREATE TABLE IF NOT EXISTS `vw_perscholarship` (
`name` varchar(60)
,`pop` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_bystatus`
--
DROP TABLE IF EXISTS `vw_bystatus`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_bystatus` AS select sum((`students`.`civil_status` = 'Single')) AS `single`,sum((`students`.`civil_status` = 'Married')) AS `married`,sum((`students`.`civil_status` = 'Widow/Widower')) AS `widow` from `students` where (`students`.`archived` = '0');

-- --------------------------------------------------------

--
-- Structure for view `vw_genderbycolleges`
--
DROP TABLE IF EXISTS `vw_genderbycolleges`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_genderbycolleges` AS select `c`.`name` AS `name`,sum((`s`.`sex` = 'Male')) AS `male_pop`,sum((`s`.`sex` = 'Female')) AS `female_pop`,sum((`s`.`sex` = 'Gay')) AS `gay_pop`,sum((`s`.`sex` = 'Lesbian')) AS `lesbian_pop`,sum((`s`.`sex` = 'Bisexual')) AS `bisexual_pop`,sum((`s`.`sex` = 'Transgender')) AS `transgender_pop` from (`students` `s` join `colleges` `c`) where ((`s`.`archived` = '0') and (`s`.`college_id` = `c`.`id`)) group by `c`.`name`;

-- --------------------------------------------------------

--
-- Structure for view `vw_genderwhole`
--
DROP TABLE IF EXISTS `vw_genderwhole`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_genderwhole` AS select sum((`s`.`sex` = 'Male')) AS `male_pop`,sum((`s`.`sex` = 'Female')) AS `female_pop`,sum((`s`.`sex` = 'Gay')) AS `gay_pop`,sum((`s`.`sex` = 'Lesbian')) AS `lesbian_pop`,sum((`s`.`sex` = 'Bisexual')) AS `bisexual_pop`,sum((`s`.`sex` = 'Transgender')) AS `transgender_pop` from `students` `s` where (`s`.`archived` = '0');

-- --------------------------------------------------------

--
-- Structure for view `vw_percollege`
--
DROP TABLE IF EXISTS `vw_percollege`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_percollege` AS select `c`.`name` AS `name`,count(`s`.`college_id`) AS `pop` from (`students` `s` join `colleges` `c`) where ((`s`.`college_id` = `c`.`id`) and (`s`.`archived` = '0')) group by `s`.`college_id` order by `pop`;

-- --------------------------------------------------------

--
-- Structure for view `vw_perscholarship`
--
DROP TABLE IF EXISTS `vw_perscholarship`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_perscholarship` AS select `sc`.`name` AS `name`,count(`s`.`scholarship_id`) AS `pop` from (`students` `s` join `scholarships` `sc`) where ((`s`.`archived` = '0') and (`s`.`scholarship_id` = `sc`.`id`)) group by `s`.`scholarship_id`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absences_records`
--
ALTER TABLE `absences_records`
  ADD PRIMARY KEY (`id`), ADD KEY `absences_records_student_id_index` (`student_id`);

--
-- Indexes for table `academic_performances`
--
ALTER TABLE `academic_performances`
  ADD PRIMARY KEY (`id`), ADD KEY `academic_performances_student_id_index` (`student_id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`), ADD KEY `activities_student_id_index` (`student_id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counselling_records`
--
ALTER TABLE `counselling_records`
  ADD PRIMARY KEY (`id`), ADD KEY `counselling_records_student_id_index` (`student_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`), ADD KEY `courses_college_id_index` (`college_id`);

--
-- Indexes for table `educational_backgrounds`
--
ALTER TABLE `educational_backgrounds`
  ADD PRIMARY KEY (`id`), ADD KEY `educational_backgrounds_student_id_index` (`student_id`);

--
-- Indexes for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
  ADD PRIMARY KEY (`id`), ADD KEY `family_backgrounds_student_id_index` (`student_id`);

--
-- Indexes for table `organizational_affiliations`
--
ALTER TABLE `organizational_affiliations`
  ADD PRIMARY KEY (`id`), ADD KEY `organizational_affiliations_student_id_index` (`student_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `psychological_tests`
--
ALTER TABLE `psychological_tests`
  ADD PRIMARY KEY (`id`), ADD KEY `psychological_tests_student_id_index` (`student_id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`), ADD KEY `students_college_id_index` (`college_id`), ADD KEY `students_course_id_index` (`course_id`), ADD KEY `students_scholarship_id_index` (`scholarship_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absences_records`
--
ALTER TABLE `absences_records`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `academic_performances`
--
ALTER TABLE `academic_performances`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `counselling_records`
--
ALTER TABLE `counselling_records`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `educational_backgrounds`
--
ALTER TABLE `educational_backgrounds`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `organizational_affiliations`
--
ALTER TABLE `organizational_affiliations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `psychological_tests`
--
ALTER TABLE `psychological_tests`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absences_records`
--
ALTER TABLE `absences_records`
ADD CONSTRAINT `absences_records_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `academic_performances`
--
ALTER TABLE `academic_performances`
ADD CONSTRAINT `academic_performances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
ADD CONSTRAINT `activities_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `counselling_records`
--
ALTER TABLE `counselling_records`
ADD CONSTRAINT `counselling_records_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
ADD CONSTRAINT `courses_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`);

--
-- Constraints for table `educational_backgrounds`
--
ALTER TABLE `educational_backgrounds`
ADD CONSTRAINT `educational_backgrounds_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
ADD CONSTRAINT `family_backgrounds_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `organizational_affiliations`
--
ALTER TABLE `organizational_affiliations`
ADD CONSTRAINT `organizational_affiliations_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `psychological_tests`
--
ALTER TABLE `psychological_tests`
ADD CONSTRAINT `psychological_tests_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
ADD CONSTRAINT `students_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`),
ADD CONSTRAINT `students_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
ADD CONSTRAINT `students_scholarship_id_foreign` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarships` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
