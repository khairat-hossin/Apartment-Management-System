-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2022 at 09:43 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalb_ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_info`
--

CREATE TABLE `billing_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `flat_no` varchar(10) NOT NULL,
  `pay_date` date NOT NULL,
  `billing_month` varchar(10) NOT NULL,
  `billing_year` varchar(5) NOT NULL,
  `service_charge` int(10) DEFAULT NULL,
  `mosjid_bill` int(10) DEFAULT NULL,
  `com_space_service_charge` int(10) DEFAULT NULL,
  `community_charge` int(10) DEFAULT NULL,
  `emergency_fund` int(10) DEFAULT NULL,
  `developmet_fund` int(10) DEFAULT NULL,
  `lift_charge` int(10) DEFAULT NULL,
  `others` int(10) DEFAULT NULL,
  `total_amount` int(10) DEFAULT NULL,
  `paid_by` varchar(100) NOT NULL,
  `date_for_query` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_info`
--

INSERT INTO `billing_info` (`id`, `flat_no`, `pay_date`, `billing_month`, `billing_year`, `service_charge`, `mosjid_bill`, `com_space_service_charge`, `community_charge`, `emergency_fund`, `developmet_fund`, `lift_charge`, `others`, `total_amount`, `paid_by`, `date_for_query`) VALUES
(2, '30A', '2018-01-01', 'January', '2018', 0, 0, 0, 0, 0, 0, 0, 0, 10000, 'rubel', '2018-01-01'),
(3, '2B', '2017-01-24', 'February', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 234, 'Tamil', '2017-02-01'),
(4, '2B', '2018-01-24', 'February', '2016', 0, 0, 0, 0, 0, 0, 0, 0, 234, 'Tamil', '2016-02-01'),
(5, '3B', '2018-01-24', 'February', '2019', 0, 0, 0, 0, 0, 0, 0, 0, 234, 'Tamil', '2019-02-01'),
(6, '5A', '2018-02-06', 'February', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 24, 'asdfasdf', NULL),
(7, '2A', '2018-02-04', 'December', '2015', 0, 0, 0, 0, 0, 0, 0, 0, 270, 'Sakil', NULL),
(8, '5B', '2018-02-07', 'February', '2018', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sdfjkd', NULL),
(9, '5B', '2018-02-07', 'February', '2018', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sdfjkd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 'fvdfv', NULL, NULL, NULL),
(4, 5, 'Dhaka', '2018-01-09 22:11:45', '2018-01-09 22:11:45', NULL),
(5, 4, 'Rangpur', '2018-01-09 22:11:58', '2018-01-09 22:11:58', NULL),
(6, 2, 'Bogra', '2018-01-09 22:12:17', '2018-01-09 22:12:17', NULL),
(7, 4, 'Dinajpur', NULL, NULL, NULL),
(8, 4, 'Nilphamari', NULL, NULL, NULL),
(9, 4, 'Saidpur', NULL, NULL, NULL),
(10, 4, 'Thakurgaon', NULL, NULL, NULL),
(11, 4, 'Kurigram', NULL, NULL, NULL),
(12, 4, 'Bogra', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commitees`
--

CREATE TABLE `commitees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voter_id` int(11) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `email_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_add` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commitees`
--

INSERT INTO `commitees` (`id`, `name`, `designation`, `flat_no`, `voter_id`, `mobile_no`, `email_id`, `present_add`, `picture`) VALUES
(1, 'Khairat Hossin mati', 'asdfds', '53', 345, 4354343, 'fafd@gsdf.com', 'dhaka', 'avatars/xZKZZY7wQdEAFtOG1FLQYufPzWuCFNG6zFMiC58Z.jpeg'),
(2, 'Saiful Islam', 'Managing Director', '5', 265, 76347872, 'gfdehg@yahoo.com', 'Jatrabari', 'avatars/q9YqgDLHvbHCgYydTzocsvzMfKeXG4wkaqAJY4UM.png');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_code`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Bangladesh', NULL, NULL, NULL),
(2, '2', 'Sitzerland', '2018-01-09 22:07:24', '2018-01-09 22:07:24', NULL),
(3, '3', 'India', '2018-01-09 22:07:36', '2018-01-09 22:07:36', NULL),
(4, '4', 'Nepal', '2018-01-09 22:07:55', '2018-01-09 22:07:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'sdafdsfdsf', '2018-01-05 08:43:23', '2018-01-05 08:43:23', NULL),
(9, 'h', '2018-01-05 08:44:22', '2018-01-05 08:44:22', NULL),
(10, 'rrttt', '2018-01-06 02:49:10', '2018-01-06 02:49:10', NULL),
(12, 'biology', '2018-01-07 22:18:32', '2018-01-07 22:18:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Dhaka', NULL, NULL, NULL),
(3, 'Rangpur', '2018-01-06 02:53:48', '2018-01-06 02:53:48', NULL),
(4, 'Rajshahi', NULL, NULL, NULL),
(6, 'Sylhet', NULL, NULL, NULL),
(7, 'Chittagong', NULL, NULL, NULL),
(8, 'Khulna', NULL, NULL, NULL),
(9, 'Barisal', NULL, NULL, NULL),
(10, 'Mymenshingh', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `lastname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathername` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothername` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `zip` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `birthdate` date NOT NULL,
  `date_hired` date NOT NULL,
  `refname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refcontact` int(10) NOT NULL,
  `verification` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` int(20) NOT NULL,
  `emergencyname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergencycontact` int(11) NOT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `division_id` int(10) UNSIGNED DEFAULT NULL,
  `picture` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `lastname`, `firstname`, `middlename`, `nickname`, `fathername`, `mothername`, `address`, `city_id`, `state_id`, `country_id`, `zip`, `phone`, `age`, `birthdate`, `date_hired`, `refname`, `refcontact`, `verification`, `nid`, `emergencyname`, `emergencycontact`, `department_id`, `division_id`, `picture`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asda', 'adaqqq', 'ada', 'abir', 'akhil', 'janina', 'das', 3, 1, 1, '12', 1234567898, 22, '2016-01-02', '2018-01-06', 'khairat', 1234567897, 'not verified', 1234567898, 'keu nai', 1234567898, 5, 2, 'avatars/9SSedjsTdHymCHh8oAShwRumDcjup658BUoIip3J.jpeg', '2018-01-05 14:17:33', '2018-01-13 01:13:03', NULL),
(3, 'v', 'a', 'c', 'x', 'y', 'z', 'q', 5, 4, 1, '123', 1234567891, 24, '1994-08-21', '2018-01-15', 'keu nai', 1234, 'lagbena', 122333, 'keu  nai', 1234567891, NULL, NULL, 'avatars/CS71AdK0xDJO7AA64r5H5bzMpVZpWBIEyYnodOa8.jpeg', '2018-01-15 04:09:49', '2018-01-15 04:09:49', NULL),
(4, 'dfs', 'asda', 'sdfsf', 'sdfsf', 'dfsdf', 'fsd', 'sddsf', 5, 4, 1, '423', 4423423, 3234, '2018-01-02', '2018-01-16', 'sdfs', 322423, 'fsdf', 23423, 'sdfsdf', 3222342, NULL, NULL, 'avatars/1TcaKOHIcTBT6aVvMEynfUtVkwptdpUhOd1GqzfR.jpeg', '2018-01-30 01:12:15', '2018-01-30 01:12:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

CREATE TABLE `expences` (
  `id` int(10) NOT NULL,
  `exp_date` date NOT NULL,
  `exp_amount` int(10) NOT NULL,
  `exp_details` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `exp_by` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `exp_auth_by` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`id`, `exp_date`, `exp_amount`, `exp_details`, `exp_by`, `exp_auth_by`) VALUES
(1, '2018-01-17', 1000, 'Snaks', 'Salman Shah', 'CEO'),
(2, '2018-01-17', 100, 'dsaf', 'sdfasd', 'adfasd'),
(3, '2018-01-17', 100, 'dsaf', 'sdfasd', 'adfasd'),
(4, '2018-01-17', 90, 'kk', 'kkk', 'kkkk'),
(6, '2018-01-18', 909, 'kk', 'kl', 'kk'),
(7, '2018-01-18', 909, 'kk', 'kl', 'kk'),
(8, '2018-01-27', 5000, 'alfkdsf', 'dlsms', 'fsdf'),
(9, '2018-01-01', 3430, 'sffsd', 'adsffasd', 'adsfasdf'),
(10, '2018-01-29', 400, 'addad\r\nasfadsfs', '0', '0'),
(11, '2018-01-29', 22, 'sfsfsdffsdasdfd', '0', '0'),
(12, '2018-01-01', 122, 'fsadf', '0', '0'),
(14, '2018-01-16', 334, 'dfgf', 'a', 'Khairat Hossin mati'),
(15, '2021-03-01', 12002, 'wafasfsdfasdf', 'a', 'Khairat Hossin mati');

-- --------------------------------------------------------

--
-- Table structure for table `flat_info`
--

CREATE TABLE `flat_info` (
  `id` int(10) NOT NULL,
  `flat_no` varchar(10) NOT NULL,
  `flat_size` varchar(20) NOT NULL,
  `car_park` varchar(20) NOT NULL,
  `note` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat_info`
--

INSERT INTO `flat_info` (`id`, `flat_no`, `flat_size`, `car_park`, `note`) VALUES
(1, '2A', '1200', 'P1', 'no note'),
(3, '2B', '1250', 'P2', 'no notes'),
(4, '3A', '1250', 'P3', 'no notes'),
(5, '3B', '1250', 'P4', 'no notes'),
(8, '5A', '1250', 'P7', 'no notes'),
(9, '5B', '1250', 'P8', 'no notes'),
(10, '6A', '1250', 'P9', 'no notes'),
(11, '6B', '1250', 'P10', 'no notes'),
(12, '7A', '1250', 'P11', 'no notes'),
(13, '7B', '1250', 'P12', 'no notes'),
(14, '8A', '1250', 'P13', 'no notes'),
(15, '8B', '1250', 'P14', 'no notes'),
(16, '9A', '1250', 'P15', 'no notes'),
(17, '9B', '1250', 'P16', 'no notes'),
(18, '10A', '1250', 'P17', 'no notes'),
(19, '10B', '1250', 'P18', 'no notes'),
(20, '22', '232', '232', 'asfasdfsaff'),
(21, '2222', '22222', '2222', '22222'),
(22, 'B-613/A', '1440sf', 'a', 'noe 12'),
(23, '4', '5545', 'ssfdas', 'asfsda'),
(24, '11', '4543', 'P1', 'ksl;jdf'),
(25, 'D1', '1200', 'P2', 'gjkasdfksd'),
(26, 'F1', '1230', 'P9', 'No notes');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2017_02_18_003431_create_department_table', 1),
(10, '2017_02_18_004142_create_division_table', 1),
(11, '2017_02_18_004326_create_country_table', 1),
(12, '2017_02_18_005005_create_state_table', 1),
(13, '2017_02_18_005241_create_city_table', 1),
(14, '2017_03_17_163141_create_employees_table', 1),
(17, '2018_01_05_205520_create_commitees_table', 2),
(18, '2018_01_06_090600_create_bills_table', 2),
(19, '2018_01_08_043234_create_rentals_table', 2),
(20, '2018_01_09_073612_create_fixed_bills_table', 3),
(21, '2018_01_15_102551_create_voter_infos_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(10) UNSIGNED NOT NULL,
  `month_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `month_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `month_name`, `month_status`) VALUES
(1, 'January', 0),
(2, 'February', 0),
(3, 'March', 0),
(4, 'April', 0),
(5, 'May', 0),
(6, 'Jun', 0),
(7, 'July', 0),
(8, 'August', 0),
(9, 'September', 0),
(10, 'october', 0),
(11, 'November', 0),
(12, 'December', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `file_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(10) NOT NULL,
  `download` blob NOT NULL,
  `file` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `date`, `file_name`, `file_type`, `file_size`, `download`, `file`) VALUES
(5, 'awawfa', '2018-01-09', '131211-130703-DATABASE MANAGEMENT SYSTEM.pdf', 'pdf', 82838, 0x3133313231312d3133303730332d4441544142415345204d414e4147454d454e542053595354454d2e7064662e706466, NULL),
(6, '34werwe', '2018-01-22', '131212-130703-DATABASE MANAGEMENT SYSTEM.pdf', 'pdf', 24809, 0x3133313231322d3133303730332d4441544142415345204d414e4147454d454e542053595354454d2e7064662e706466, NULL),
(7, '34werwe', '2018-01-22', '131212-130703-DATABASE MANAGEMENT SYSTEM.pdf', 'pdf', 24809, 0x3133313231322d3133303730332d4441544142415345204d414e4147454d454e542053595354454d2e7064662e706466, NULL),
(8, '34werwe', '2018-01-22', '131212-130703-DATABASE MANAGEMENT SYSTEM.pdf', 'pdf', 24809, 0x3133313231322d3133303730332d4441544142415345204d414e4147454d454e542053595354454d2e7064662e706466, NULL),
(9, 'Here you go your Description of notice', '2018-01-22', '131412-130703-DBMS.pdf', 'pdf', 82654, 0x3133313431322d3133303730332d44424d532e7064662e706466, NULL),
(10, 'Here you go your Description of notice', '2018-01-22', '131412-130703-DBMS.pdf', 'pdf', 82654, 0x3133313431322d3133303730332d44424d532e7064662e706466, NULL),
(11, 'Here you go your Description of notice', '2018-01-22', '131412-130703-DBMS.pdf', 'pdf', 82654, 0x3133313431322d3133303730332d44424d532e7064662e706466, NULL),
(12, 'adfasdf', '2018-01-10', '131412-130703-DBMS.pdf', 'pdf', 82654, 0x3133313431322d3133303730332d44424d532e7064662e706466, NULL),
(13, 'adfasdf', '2018-01-10', '131412-130703-DBMS.pdf', 'pdf', 82654, 0x3133313431322d3133303730332d44424d532e7064662e706466, NULL),
(14, 'adfasdf', '2018-01-10', '131412-130703-DBMS.pdf', 'pdf', 82654, 0x3133313431322d3133303730332d44424d532e7064662e706466, NULL),
(15, 'sdfsdf', '2018-01-16', 'bg_img_2.jpg', 'jpg', 393260, 0x62675f696d675f322e6a70672e6a7067, NULL),
(16, 'fasfdsaf', '2018-02-01', 'BGDDV2351818SH700814.pdf', 'pdf', 355828, 0x42474444563233353138313853483730303831342e706466, NULL),
(17, 'fasfdsaf', '2018-02-01', 'BGDDV2351818SH700814.pdf', 'pdf', 355828, 0x42474444563233353138313853483730303831342e706466, NULL),
(18, 'klljk', '2018-02-13', 'BGDDV2351818SH700814.pdf', 'pdf', 355828, 0x42474444563233353138313853483730303831342e706466, NULL),
(19, 'kj;ljk', '2018-02-02', 'BGDDV35F2718MD541020.pdf', 'pdf', 363294, 0x4247444456333546323731384d443534313032302e706466, '5a7836b1d1ca0BGDDV35F2718MD541020.pdf.pdf'),
(20, 'wwew', '2018-02-06', 'NCC_advertisement_1_57-2018.pdf', 'pdf', 478556, 0x4e43435f6164766572746973656d656e745f315f35372d323031382e706466, '5a7956122f455NCC_advertisement_1_57-2018.pdf'),
(21, 'qwerty', '2018-02-06', 'BGDDV35F2718MD541020.pdf', 'pdf', 363294, 0x4247444456333546323731384d443534313032302e706466, '5a7960a8ade64BGDDV35F2718MD541020.pdf'),
(22, 'finnal file', '2018-02-07', 'BGDDV35F2718MD541020.pdf', 'pdf', 363294, 0x4247444456333546323731384d443534313032302e706466, '5a7962e815f4fBGDDV35F2718MD541020.pdf'),
(23, 'adfsadfdsf', '2018-02-15', 'NCC_advertisement_1_57-2018.pdf', 'pdf', 478556, 0x4e43435f6164766572746973656d656e745f315f35372d323031382e706466, '5a7974190df89NCC_advertisement_1_57-2018.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `id` int(10) NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mid_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `flat_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `car_park` int(10) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `email_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_id` int(20) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `present_add` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `parmanent_add` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `emergency_contact` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`id`, `first_name`, `mid_name`, `last_name`, `flat_no`, `car_park`, `mobile_no`, `email_id`, `n_id`, `date_of_birth`, `present_add`, `parmanent_add`, `emergency_contact`, `picture`) VALUES
(1, 'Hasan', 'S1', 'Malik', '2A', 1, 1751767350, 'hasan.malik@gmail.com', 12345678, '2018-02-10', 'Kolabagan, Dhaka', 'Kolabagan, Dhaka-1211', 'name: xyz mob:123555l', 'avatars/MzaNtq4jrBOeysh7NcWQJsFLASsI8KSGth5dXo6W.jpeg'),
(28, 'Hamidul', 'R', 'Islam', '20A', 3, 1234567891, 'hamidul@islam.com', 12345678, NULL, 'Kolabagan dhaka', 'Dhaka', 'Tipu. 1234455555', 'avatars/MzaNtq4jrBOeysh7NcWQJsFLASsI8KSGth5dXo6W.jpeg'),
(32, 'q', 'q', 'q', '2B', 4, 23, 'fsdmfsd', 11212, '1993-08-21', '211312', '3123', '3123', 'avatars/c85KYa1Lizdt9d4n0c6YjdBzANkWYnjyC9ugaKvp.jpeg'),
(33, 'a', 'b', 'c', '9B', 15, 12345, '343', 23424, '1994-08-21', 'fadf', 'dfas', 'sdfsd', 'avatars/7rud7J2immr1zxmMLLDoAB6SGdMwohGbV2ZTYZgL.jpeg'),
(34, 'q', 'q', 'q', '2B', 4, 2312321, 'SDFSDFK', 232, '1994-08-21', 'rwee', 'fasdf', 'asdfsda', 'avatars/egM6fl1cP4K6K4rwXeyAmBTYcRaNTICOCHJlNrvA.jpeg'),
(35, 'wfwe', 'fsf', 'dfgdfg', '2B', 3, 324234, 'sff@fffdsf.com', 1233, '1994-08-21', 'wrrw', 'werwerwe', 'wwrwe', 'avatars/pVEWNgT9OxqjCZqvBmwVPXRtyUaf8dyOU3LKC5LK.jpeg'),
(36, 'wfwe', 'fsf', 'dfgdfg', '2B', 3, 324234, 'sff@fffdsf.com', 1233, '2018-01-24', 'wrrw', 'werwerwe', 'wwrwe', 'avatars/EcDkXarpJLQRDYvGFmIcU2odVDXGzRq6AazKXPCe.jpeg'),
(37, 'hgdf', 'jfg', 'fgh', '18', 5, 533, 'sdsd@dfdf.com', 34343, '2018-01-24', 'fdsfs', 'dfg1', 'gggsf', 'avatars/6OVoqHtKu0MegrplKUAjyWXBliizosj7WEgVzbYT.jpeg'),
(38, 'mati', 'matiur', 'mati', '11', 3, 1232323, 'asd@gmail.com', 2323123, '2018-01-24', 'dasd', 'sdasd', '12323123', 'avatars/ezLJVJMnDOeTdqhrHd2hAzDNbZYsg1dbnCSDxUdf.jpeg'),
(39, 'erjwer', 'fjkwjf', 'jkfjs', '3', 32, 343, 'ksjfskfas', 2423, '2018-01-01', 'asdfds', 'sdf', 'vsd', 'avatars/adTGrDRow4BtSHH9RMHhDmJF1qu7OnlXewUAiGZf.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `parkings`
--

CREATE TABLE `parkings` (
  `id` int(10) NOT NULL,
  `parking_no` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `park_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parkings`
--

INSERT INTO `parkings` (`id`, `parking_no`, `park_status`) VALUES
(1, 'P1', 0),
(2, 'P2', 0),
(3, 'P3', 0),
(4, 'P4', 0),
(5, 'P5', 0),
(6, 'P6', 0),
(7, 'P7', 0),
(8, 'P8', 0),
(9, 'P9', 0),
(10, 'P10', 0),
(11, 'P11', 0),
(12, 'P12', 0),
(13, 'P13', 0),
(14, 'P14', 0),
(15, 'P15', 0),
(16, 'P16', 0),
(17, 'P17', 0),
(18, 'P18', 0),
(19, 'P19', 0),
(20, 'P20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Barishal', NULL, NULL, NULL),
(2, 1, 'Rajshahi', '2018-01-09 22:06:46', '2018-01-09 22:06:46', NULL),
(3, 1, 'Comilla', '2018-01-09 22:09:57', '2018-01-09 22:09:57', NULL),
(4, 1, 'Rangpur', '2018-01-09 22:10:08', '2018-01-09 22:10:08', NULL),
(5, 1, 'Dhaka', '2018-01-09 22:10:18', '2018-01-09 22:10:18', NULL),
(8, 1, 'Chittagong', NULL, NULL, NULL),
(9, 1, 'Sylhet', NULL, NULL, NULL),
(10, 1, 'MymenSing', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `lastname`, `firstname`, `role`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'admin', '$2b$10$vK5Y4Iiaih7D09R/4q27xeAXBSLH8wXihQNewHIGf6aBhwEoZQ6oS', 'fgfgfghfghfgh', 'cvbcvbcvcvbcv', 'admin', '9LKjuXtahPqw4YugrrIk1ErAKl3XnHEnODZWc4usKi2rLcrGYpMBVIDTjav2', NULL, NULL, NULL),
(8, 'SunnyBoy', 'SunnyBoy', '$2y$10$H6.1dshjdmdo9mSlnFSQpubOI6AOgU0Tz2Y.K/9wx.R6ocAihPH4O', 'Boy', 'Sunny', 'employee', '3GZwzakk58w4bujR0lioH3r5E4J2CociQH8BEQHw1hx81kuQsG1R5CQIVhhs', NULL, '2018-01-27 05:22:20', '2018-01-27 05:22:20'),
(18, 'tawfiktest', 'tawfiktest', '$2b$10$vK5Y4Iiaih7D09R/4q27xeAXBSLH8wXihQNewHIGf6aBhwEoZQ6oS', 'tawfik', 'habib', 'owner', 'fV85ncWwYrNSFF3rnqySjHCVpcVshLV00ECcgi9N1Z2bh13gHefD9bFkQrVi', NULL, NULL, NULL),
(19, 'qwerty', NULL, '$2y$10$MgflVu51jOg0Qo/zTI7g0OfwuAayFnxnHPPmqpyKIzhWoMtKTofCW', 'qwerty', 'qwerty', 'owner', NULL, NULL, '2018-01-29 23:57:30', '2018-01-29 23:57:30'),
(20, 'abcdefgh', 'abcdefgh', '$2y$10$D5Fy4Bs05EQWf8vDMB456OXPf0SnmawCeuhzs.gsb6ikMoWhfyoju', 'efgh', 'abcd', 'employee', '1zIyztMu2ZIJWfwGZXOWxUnKTg8UJrextx4hqiJK8gxLHRtBUSwp5BD1o5ux', NULL, '2018-01-30 00:00:55', '2018-01-30 00:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id` int(10) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `flat_no` varchar(10) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `mid_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `relationship` varchar(60) NOT NULL,
  `n_id` int(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(69) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `voter_id`, `flat_no`, `first_name`, `mid_name`, `last_name`, `relationship`, `n_id`, `dob`, `address`, `phone`, `email`, `picture`) VALUES
(1, 1, '3A', 'k', 'h', 'k', 'Brother', 12345678, NULL, 'dhaka', '1234567891', 'khairat564@gmail.com', 'avatars/7EXTZ8h5KR7fnAUDIs1WDvpYHVeWCLclveu1iCOb.jpeg'),
(3, 4, '4A', 'a', 'b', 'c', 'Sister', 12345678, NULL, 'dhakafsdsf', '1234567891', 'khairat564@gmail.com', 'avatars/3XRfhckZtZelMCEkUO3GVjr1fxJwhBr9pC71PrAW.jpeg'),
(4, 23344, '13', 'fasdjfa', 'dsmfsd', 'nmdf', 'fasmdf', 4242, '2018-01-24', 'sndbas', '32423', 'qsdnsdf@gmail.com', 'avatars/3bYmDfiLav1pEdMj6zXS0JiQQTC82juPUUlJ1aA6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`) VALUES
(1, 2015),
(2, 2016),
(3, 2017),
(4, 2018),
(5, 2019),
(6, 2020),
(7, 2021),
(8, 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_state_id_foreign` (`state_id`);

--
-- Indexes for table `commitees`
--
ALTER TABLE `commitees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_city_id_foreign` (`city_id`),
  ADD KEY `employees_state_id_foreign` (`state_id`),
  ADD KEY `employees_country_id_foreign` (`country_id`),
  ADD KEY `employees_department_id_foreign` (`department_id`),
  ADD KEY `employees_division_id_foreign` (`division_id`);

--
-- Indexes for table `expences`
--
ALTER TABLE `expences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat_info`
--
ALTER TABLE `flat_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkings`
--
ALTER TABLE `parkings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_country_id_foreign` (`country_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_info`
--
ALTER TABLE `billing_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `commitees`
--
ALTER TABLE `commitees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expences`
--
ALTER TABLE `expences`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `flat_info`
--
ALTER TABLE `flat_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `owner_info`
--
ALTER TABLE `owner_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `parkings`
--
ALTER TABLE `parkings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `employees_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `employees_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `employees_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`),
  ADD CONSTRAINT `employees_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
