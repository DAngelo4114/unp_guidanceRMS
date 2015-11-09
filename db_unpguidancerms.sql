-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2015 at 03:58 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `absent_date` date NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `absences_records_student_id_index` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `absences_records`
--

INSERT INTO `absences_records` (`id`, `student_id`, `year_level`, `absent_date`, `subject`, `reason`, `created_at`, `updated_at`) VALUES
(9, 1, '1st Year', '2015-10-18', 'Programming', 'Boring', '2015-10-18 05:51:40', '2015-10-18 05:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `academic_performances`
--

CREATE TABLE IF NOT EXISTS `academic_performances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `academic_performances_student_id_index` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `academic_performances`
--

INSERT INTO `academic_performances` (`id`, `student_id`, `year_level`, `semester`, `remark`, `subject`, `created_at`, `updated_at`) VALUES
(1, 1, '1st Year', '1st', 'PASSED', 'Malware analysis and Reverse Engineering', '2015-10-18 07:39:43', '2015-10-18 07:39:43'),
(4, 7, '4th Year', '1st', 'PASSED', 'data comm.', '2015-10-20 15:52:20', '2015-10-20 15:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activity_date` date NOT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `activities_student_id_index` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `student_id`, `year_level`, `activity_date`, `activity`, `sponsor`, `created_at`, `updated_at`) VALUES
(1, 1, '1st Year', '2015-10-18', 'Clean & Green', 'Two Brothers Grocery', '2015-10-18 06:27:27', '2015-10-18 06:27:27'),
(3, 7, '4th Year', '2015-10-20', 'microsoft', 'microsoft', '2015-10-20 15:54:56', '2015-10-20 15:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CCIT', '2015-10-18 03:53:13', '2015-10-18 03:53:13'),
(2, 'CBAA', '2015-10-18 04:03:03', '2015-10-19 06:21:44'),
(3, 'CAS', '2015-10-19 05:16:52', '2015-10-19 06:23:29'),
(4, 'tryzx', '2015-10-19 14:07:06', '2015-10-19 14:07:44'),
(5, 'CHS', '2015-10-23 10:42:57', '2015-10-23 10:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `counselling_records`
--

CREATE TABLE IF NOT EXISTS `counselling_records` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `problem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `counselling_records_student_id_index` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `counselling_records`
--

INSERT INTO `counselling_records` (`id`, `student_id`, `year_level`, `date`, `problem`, `action`, `created_at`, `updated_at`) VALUES
(2, 1, '1st Year', '2015-10-18', 'Sdfasdf', 'asdfsafdasdfasdfsad', '2015-10-18 06:09:29', '2015-10-18 06:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college_id` int(10) unsigned NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `courses_college_id_index` (`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

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
(9, 5, 'Nursing', '2015-10-23 10:43:18', '2015-10-23 10:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `educational_backgrounds`
--

CREATE TABLE IF NOT EXISTS `educational_backgrounds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `educational_backgrounds_student_id_index` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `educational_backgrounds`
--

INSERT INTO `educational_backgrounds` (`id`, `student_id`, `level`, `school_name_address`, `degree`, `year_graduated`, `date_from`, `date_to`, `general_average`, `awards`, `created_at`, `updated_at`) VALUES
(11, 2, 'Pre-School/Kindergarten', 'Childish Pre-school', NULL, '2001', 'June 2000', 'March 2001', 90.00, NULL, '2015-10-18 23:55:01', '2015-10-18 23:55:01'),
(12, 2, 'Elementary', 'Puberty Elementary School', NULL, '2006', 'June 2002', 'March 2006', 98.00, 'Best Teacher haha', '2015-10-18 23:55:01', '2015-10-18 23:55:01'),
(13, 2, 'Secondary', 'Rebelde National High School', NULL, '2011', 'June 2006', 'March 2011', 83.00, NULL, '2015-10-18 23:55:01', '2015-10-18 23:55:01'),
(14, 1, 'Pre-School/Kindergarten', 'sdf', NULL, '2015', 'October 2015', 'October 2015', 44.50, 'Best in Programming - Assembly Language', '2015-10-19 00:00:31', '2015-10-19 00:00:31'),
(15, 1, 'Pre-School/Kindergarten', 'sdfsdf', NULL, '2015', 'October 2015', 'October 2015', 4343.00, 'asdfasdf', '2015-10-19 14:20:44', '2015-10-19 14:20:44'),
(17, 7, 'Elementary', 'BNES', NULL, '2006', 'January 2000', 'January 2006', 98.00, 'Salutatorian ', '2015-10-20 15:47:35', '2015-10-20 15:47:35'),
(18, 7, 'Secondary', 'CBGMHS', NULL, '2010', 'January 2006', 'January 2010', 99.00, NULL, '2015-10-20 15:47:35', '2015-10-20 15:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `family_backgrounds`
--

CREATE TABLE IF NOT EXISTS `family_backgrounds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `family_backgrounds_student_id_index` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `family_backgrounds`
--

INSERT INTO `family_backgrounds` (`id`, `student_id`, `members`, `birth_order`, `number_of_brothers`, `number_of_sisters`, `parent_status`, `others`, `type_of_living`, `family_income`, `created_at`, `updated_at`) VALUES
(4, 1, '[{"member":"Mother","name":"Mila Lopez","address":"Sagsagat, San Vicente, Ilocos Sur","occupation":"Teacher","educational_attainment":"College Graduate","contact_number":"9023-9489-823"}]', 'Eldest', 0, 1, 'Legally Married', NULL, 'Living w/ parents', 19999.00, '2015-10-18 11:37:50', '2015-10-18 11:37:50'),
(5, 7, '[{"member":"Mother","name":"Cerila Moises","address":"Siblong, Bucay Abra","occupation":"Teacher","educational_attainment":"college grad.","contact_number":"0936-8499-483"}]', 'Eldest', 1, 1, 'Legally Married', NULL, 'Living w/ parents', 15000.00, '2015-10-20 15:50:34', '2015-10-20 15:50:34');

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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `year_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `school_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `organizational_affiliations_student_id_index` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `organizational_affiliations`
--

INSERT INTO `organizational_affiliations` (`id`, `student_id`, `year_level`, `name`, `position`, `school_year`, `created_at`, `updated_at`) VALUES
(1, 1, '2nd Year', 'MyFirstORG', 'President', '2015-2016', '2015-10-18 07:20:51', '2015-10-18 07:20:51'),
(2, 7, '4th Year', 'ACTS', 'member', '2015', '2015-10-20 15:53:36', '2015-10-20 15:53:36'),
(3, 7, '4th Year', 'SITE', 'member', '2015', '2015-10-20 15:53:36', '2015-10-20 15:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psychological_tests`
--

CREATE TABLE IF NOT EXISTS `psychological_tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_taken` date NOT NULL,
  `percentile` double(8,2) NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `psychological_tests_student_id_index` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `psychological_tests`
--

INSERT INTO `psychological_tests` (`id`, `student_id`, `name`, `date_taken`, `percentile`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 1, 'Crazy Test', '2015-10-17', 89.70, 'Passed', '2015-10-18 07:13:46', '2015-10-18 07:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE IF NOT EXISTS `scholarships` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `home_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `present_addresses` text COLLATE utf8_unicode_ci,
  `dorms` text COLLATE utf8_unicode_ci,
  `archived` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `students_college_id_index` (`college_id`),
  KEY `students_course_id_index` (`course_id`),
  KEY `students_scholarship_id_index` (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `school_id`, `lname`, `fname`, `mname`, `college_id`, `course_id`, `year_level`, `section`, `unp_cat_rating`, `scholarship_id`, `birthdate`, `age`, `place_of_birth`, `citizenship`, `sex`, `civil_status`, `date_of_marriage`, `height`, `weight`, `bloodtype`, `contact_number`, `email`, `religion`, `illness`, `disability`, `ethnic`, `home_address`, `present_addresses`, `dorms`, `archived`, `created_at`, `updated_at`) VALUES
(1, '11-02451', 'Dela cruz', 'Juana', 'Lunas', 4, 7, '4th Year', '', 85.00, 1, '1995-01-27', 20, 'Sagsagat, San Vicente, Ilocos sur', 'filipino', 'Male', 'Single', '0000-00-00', 2.00, 70.00, 'O+', '0913-4532-355', 'juandelacruz@yahoo.com', 'Atheist', 'Asthma', '', '', 'Sagsagat, San Vicente, Ilocos Sur', 'Array', '[]', '1', '2015-10-18 03:55:05', '2015-10-20 04:11:34'),
(2, '14-63457', 'Explorer', 'Dora', 'Pabebe', 2, 2, '2nd Year', 'A', 89.00, 2, '1997-02-14', 18, 'Cuta, Vigan City', 'filipino', 'Male', 'Widow/Widower', NULL, 2.00, 70.00, 'O+', '0935-9587-140', 'dora@explorer.com', 'Born Again', NULL, 'Brain Defect', NULL, 'Cuta, Vigan City', '[{"year_level":"1st Year","address":"Cuta, Vigan City"},{"year_level":"2nd Year","address":"Cuta, Vigan City"}]', NULL, '0', '2015-10-18 04:05:45', '2015-10-19 15:10:32'),
(3, '12-35779', 'Ipsum', 'Dolor ', 'Hex', 1, 3, '1st Year', 'A', 97.00, 3, '1996-06-18', 19, 'San Juan, Ilocos Sur', 'filipino', 'Female', 'Married', '2015-10-19', 2.10, 51.30, 'B+', '0953-2234-464', 'lorem@gmail.com', 'Atheist', '', '', '', 'San Juan, Ilocos Sur', '[{"year_level":"1st Year","address":"San Juan, Ilocos Sur"}]', '[]', '0', '2015-10-18 12:27:23', '2015-10-19 13:25:27'),
(4, '12-33243', 'Fabellon', 'Alvin', 'Rasca', 1, 3, '4th Year', '4c', 80.00, NULL, '1995-01-18', 20, 'jhsdfjkhsdf', 'filipino', 'Male', 'Single', '0000-00-00', 1.00, 1.00, 'B-', '1231-2324-343', 'sfd@g.com', 'INC', 'sfdsf', '', '', 'quezon City', '[{"year_level":"1st Year","address":"test"}]', '[]', '0', '2015-10-19 14:45:45', '2015-10-19 15:02:04'),
(5, '11-22222', 'Fabellon', 'Alvin', 'Rasca', 1, 3, '4th Year', '4C', 89.00, NULL, '1986-04-23', 29, 'Project IV Quezon City', 'filipino', 'Transgender', 'Single', '0000-00-00', 2.00, 59.00, 'A+', '0926-4192-321', 'fabellon.alvin@yahoo.com', 'Iglesia ni cristo', 'none', 'none', 'n/a', 'Quezon city', 'Array', NULL, '0', '2015-10-20 03:44:17', '2015-10-23 10:49:56'),
(6, '33-33333', 'try', 'gay', 'gender', 1, 1, '1st Year', '2d', 33.00, 1, '2007-01-17', 8, 'dyan lang', 'filipino', 'Gay', 'Single', NULL, 2.00, 23.00, 'A-', NULL, NULL, 'sdfsdf', NULL, NULL, NULL, 'sdfsdfsdfsdf', '[{"year_level":"3rd Year","address":"sdfdfasdf"}]', NULL, '0', '2015-10-20 04:24:48', '2015-10-20 04:24:48'),
(7, '12-77744', 'moises', 'charina', 'metura', 1, 3, '4th Year', '4C', 90.00, NULL, '1994-11-09', 20, 'bucay,abra', 'filipino', 'Female', 'Single', '0000-00-00', 1.10, 42.00, 'A-', NULL, 'cha@gmail.com', 'INC', 'asthma', 'NONE', 'NONE', 'Bucay,Abra ', '[{"year_level":"4th Year","address":"Burgos, Solid North"}]', '[{"year_level":"4th Year","address":"Burgos, Solid North"}]', '0', '2015-10-20 15:36:52', '2015-10-20 15:36:52'),
(8, '77-77777', 'Dela cruz', 'Lovely', 'Manuel', 4, 8, '1st Year', '3c', 89.00, 1, '2011-06-22', 4, 'tabi tabi', 'filipino', 'Bisexual', 'Single', '0000-00-00', 2.60, 45.00, 'A+', '0923-2132-334', 'delacruz@yahoo.com', 'INC', 'none', 'none', 'none', 'quezon city philippines', 'Array', 'Array', '0', '2015-10-23 10:39:37', '2015-10-23 10:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'admintest', '$2y$10$Cp34I/lRtRpDePW4JYwAI./5pSNo/2zhahrCWSCVmdOEOrR71Noyq', 'admin', 'eX4SY9lSGQ3QrwYMyWoeNEKYouomox9kS8J4SnIFuasrkXMGV8pU0hFPu9S7', '2015-10-19 13:03:22', '2015-10-23 10:32:56'),
(12, 'alvin', '$2y$10$6myuQ2otRunFH1XDollp/OScxW29EhghEj/A8GdOFSzP9iWGZuZLi', 'user', NULL, '2015-10-19 14:06:09', '2015-10-19 14:06:09'),
(13, 'admin', '$2y$10$1gMyH2X3dOh3VQck99Lhgu.jUDidt9vXZXyvheT9XmnKBCpOmRkIG', 'admin', '98fucdY5g4Z7mmgOkCZ7wNhCaY7VrhlnGTZ8rUXvjAxLuZPdK0XQf2ZDiVSl', '2015-10-20 03:39:14', '2015-10-20 03:51:24'),
(14, 'alvinuser', '$2y$10$Ig5XZWRfMSv5GCYXIx5Y6.TJiqCaUfc1xAh5pTNr1YyKwpcN.1D3q', 'user', '1Ixr24QalBBHpQjtvYFtbaxd2wdRSrX1gCAyZ4SStOBWWKxUCBDMZOS7ff0p', '2015-10-23 10:32:47', '2015-10-23 10:45:55');

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
`male_pop` decimal(23,0)
,`female_pop` decimal(23,0)
,`gay_pop` decimal(23,0)
,`lesbian_pop` decimal(23,0)
,`bisexual_pop` decimal(23,0)
,`transgender_pop` decimal(23,0)
,`name` varchar(60)
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
-- Structure for view `vw_bystatus`
--
DROP TABLE IF EXISTS `vw_bystatus`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_bystatus` AS select sum((`students`.`civil_status` = 'Single')) AS `single`,sum((`students`.`civil_status` = 'Married')) AS `married`,sum((`students`.`civil_status` = 'Widow/Widower')) AS `widow` from `students` where (`students`.`archived` <> 1);

-- --------------------------------------------------------

--
-- Structure for view `vw_genderbycolleges`
--
DROP TABLE IF EXISTS `vw_genderbycolleges`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_genderbycolleges` AS select sum((`students`.`sex` = 'Male')) AS `male_pop`,sum((`students`.`sex` = 'Female')) AS `female_pop`,sum((`students`.`sex` = 'Gay')) AS `gay_pop`,sum((`students`.`sex` = 'Lesbian')) AS `lesbian_pop`,sum((`students`.`sex` = 'Bisexual')) AS `bisexual_pop`,sum((`students`.`sex` = 'Transgender')) AS `transgender_pop`,`c`.`name` AS `name` from (`students` join `colleges` `c`) where (`students`.`college_id` = `c`.`id`) group by `students`.`college_id`;

-- --------------------------------------------------------

--
-- Structure for view `vw_genderwhole`
--
DROP TABLE IF EXISTS `vw_genderwhole`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_genderwhole` AS select sum((`students`.`sex` = 'Male')) AS `male_pop`,sum((`students`.`sex` = 'Female')) AS `female_pop`,sum((`students`.`sex` = 'Gay')) AS `gay_pop`,sum((`students`.`sex` = 'Lesbian')) AS `lesbian_pop`,sum((`students`.`sex` = 'Bisexual')) AS `bisexual_pop`,sum((`students`.`sex` = 'Transgender')) AS `transgender_pop` from `students`;

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
