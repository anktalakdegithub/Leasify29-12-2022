-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2022 at 09:36 AM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leasifydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment`
--

CREATE TABLE `customer_payment` (
  `payment_id` int NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `investor_id` int NOT NULL,
  `proposal_id` int NOT NULL,
  `amount` varchar(255) NOT NULL,
  `pay_date` date DEFAULT NULL,
  `status` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_payment`
--

INSERT INTO `customer_payment` (`payment_id`, `customer_id`, `investor_id`, `proposal_id`, `amount`, `pay_date`, `status`, `created_at`, `updated_at`) VALUES
(5, '1', 3, 1, '101', '2022-10-03', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '1', 1, 1, '101', '2022-10-03', 0, '2022-10-03 22:22:21', '2022-10-03 22:22:21'),
(7, '6', 6, 30, '100', '2022-10-06', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '18', 18, 31, '100', '2022-10-06', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '18', 18, 32, '1', '2022-10-06', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '18', 18, 32, '1', '2022-10-06', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '18', 18, 32, '11', '2022-10-06', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '18', 18, 32, '11', '2022-10-06', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '18', 18, 34, '100', '2022-10-06', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '38', 37, 35, '1000', '2022-10-11', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '38', 37, 36, '1000', '2022-10-12', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `indicative_proposals`
--

CREATE TABLE `indicative_proposals` (
  `proposal_id` int NOT NULL,
  `rfq_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `proposal_title` varchar(255) NOT NULL,
  `pre_tax` varchar(255) NOT NULL,
  `tenure` int NOT NULL,
  `min_investment` varchar(255) NOT NULL,
  `proposal_logo` varchar(255) NOT NULL,
  `proposal_images` varchar(255) NOT NULL,
  `proposal_documents` varchar(255) NOT NULL,
  `proposal_tag` varchar(255) NOT NULL,
  `proposal_slector` varchar(255) NOT NULL,
  `proposal_date` date NOT NULL,
  `proposal_details` varchar(255) NOT NULL,
  `NBFC_publish` int NOT NULL,
  `investor_publish` int NOT NULL,
  `requirementamount` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indicative_proposals`
--

INSERT INTO `indicative_proposals` (`proposal_id`, `rfq_id`, `customer_id`, `proposal_title`, `pre_tax`, `tenure`, `min_investment`, `proposal_logo`, `proposal_images`, `proposal_documents`, `proposal_tag`, `proposal_slector`, `proposal_date`, `proposal_details`, `NBFC_publish`, `investor_publish`, `requirementamount`, `created_at`, `updated_at`) VALUES
(1, '3', '1', 'Petpooja', '13.9 (Post-Tax)', 36, '1,00,000', '/public/proposal/1665985452_f6e2b3bf809b1028477a.jpg', '/public/proposal/1665986862_2bd431be2818d6306276.png', '/public/proposal/1666166986_4d5e811dad51f64e0aa0.pdf', '1', '', '2022-12-01', 'Petpooja is a Point of Sale (POS) Software platform with the usage of more than 35,000+ outlets live across India, with the aim to make restaurant POS simpler than ever. It is trusted by over 45,000+ Restaurant Partners.', 1, 1, 400000, '2022-12-05 04:39:22', '2022-12-05 04:39:22'),
(36, '43', '38', 'bud-e', 'Deal Closed', 36, '10,000', '/public/proposal/1669801963_a3e2e418e42a637903d4.png', '/public/proposal/1665463913_926c2b8219949f90c609.jpg', '/public/proposal/1665463913_fa08d42b1bc5b37e5b92.jpg', '1', '', '2022-11-30', 'bud-e is an all-electric, seamless, short & long term two-wheeler rental service \r\n', 0, 0, 300000000, '2022-12-02 02:56:46', '2022-12-02 02:56:46'),
(39, '31', '1', 'prop', '20', 2, '2', '/public/proposal/1665836748_5a8598f4caa0c7c2aecc.png', '/public/proposal/', '/public/proposal/1665836748_bd936c806653300d102f.pdf', '1', '', '2022-10-28', 'sad', 0, 0, 2, '2022-10-17 11:00:15', '2022-10-17 11:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `indicative_proposals_details`
--

CREATE TABLE `indicative_proposals_details` (
  `proposaldeatil_id` int NOT NULL,
  `proposal_id` varchar(255) NOT NULL,
  `customer_id` int NOT NULL,
  `proposal_tag_title` varchar(255) NOT NULL,
  `proposal_tags_description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indicative_proposals_details`
--

INSERT INTO `indicative_proposals_details` (`proposaldeatil_id`, `proposal_id`, `customer_id`, `proposal_tag_title`, `proposal_tags_description`, `created_at`, `updated_at`) VALUES
(411, '29', 1, 'demo', '<p>demo</p>', '2022-10-03 08:56:35', '2022-10-03 08:56:35'),
(415, '30', 6, 'title', '<p>desz</p>', '2022-10-06 06:40:57', '2022-10-06 06:40:57'),
(416, '31', 18, 'dew', '<p>wqe</p>', '2022-10-06 11:23:47', '2022-10-06 11:23:47'),
(417, '32', 18, 'demo', '<p>demo</p>', '2022-10-06 11:37:24', '2022-10-06 11:37:24'),
(418, '33', 18, 'title', '<p>s</p>', '2022-10-06 11:42:28', '2022-10-06 11:42:28'),
(419, '34', 18, 'dew', '<p>d</p>', '2022-10-06 11:55:52', '2022-10-06 11:55:52'),
(420, '35', 38, 'title1', '<p>xcbvn</p>', '2022-10-10 07:03:19', '2022-10-10 07:03:19'),
(421, '35', 38, 'title2', '<p>xvxfbfgn</p>', '2022-10-10 07:03:19', '2022-10-10 07:03:19'),
(440, '37', 38, 'gch', '<p>des11</p>', '2022-10-11 12:32:12', '2022-10-11 12:32:12'),
(441, '37', 38, 'titl2', '<p>des11</p>', '2022-10-11 12:32:12', '2022-10-11 12:32:12'),
(450, '39', 1, 't1', '<p>des1</p>', '2022-10-17 11:00:15', '2022-10-17 11:00:15'),
(451, '39', 1, 't2', '<p>des3</p>', '2022-10-17 11:00:15', '2022-10-17 11:00:15'),
(474, '40', 38, '', '', '2022-11-29 06:48:40', '2022-11-29 06:48:40'),
(479, '1', 1, 'Description', '<p><span style=\"color: #637381; font-family: Inter, sans-serif; font-size: 16px; background-color: #ffffff;\">Petpooja is a Point of Sale (POS) Software platform with the usage of more than 35,000+ outlets live across India, with the aim to make restaurant', '2022-12-05 04:39:22', '2022-12-05 04:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `kycdetails`
--

CREATE TABLE `kycdetails` (
  `kyc_id` int NOT NULL,
  `user_id` int NOT NULL,
  `dob` date NOT NULL,
  `residentarea` varchar(255) NOT NULL,
  `aadhaarname` varchar(255) NOT NULL,
  `aadhaaraddress` varchar(255) NOT NULL,
  `aadhaarfront` varchar(255) NOT NULL,
  `aadhaarback` varchar(255) NOT NULL,
  `panphoto` varchar(255) DEFAULT NULL,
  `bankaccounttype` varchar(255) NOT NULL,
  `accountnum` varchar(255) NOT NULL,
  `ifsccode` varchar(255) NOT NULL,
  `iskyc` int NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `accountname` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kycdetails`
--

INSERT INTO `kycdetails` (`kyc_id`, `user_id`, `dob`, `residentarea`, `aadhaarname`, `aadhaaraddress`, `aadhaarfront`, `aadhaarback`, `panphoto`, `bankaccounttype`, `accountnum`, `ifsccode`, `iskyc`, `bankname`, `accountname`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-09-02', 'Resident Indian', '', '', '/public/aadhar/1661254534_102180923657d34c6ba8.jpg', '/public/aadhar/1661254534_d256dcc23ad2afdef469.jpg', NULL, 'Saving Account', 'erewrr', '', 1, '', '', '2022-08-23 05:05:34', '2022-08-23 05:05:34'),
(2, 18, '2022-10-14', 'Resident Indian', 'demo', 'demo', '/public/aadhar/1664811255_2c3f5ae378d642603dce.png', '/public/aadhar/1664811255_a71a1f18acfe36330f91.png', NULL, 'Saving Account', '8989898989', '46556', 1, '', '', '2022-10-03 09:04:15', '2022-10-03 09:04:15'),
(3, 6, '2022-10-13', 'Resident Indian', 'demo', 'xyz', '/public/aadhar/1665061254_984618e054f19f6df233.jpeg', '/public/aadhar/1665061254_fa43de083c9e17823150.jpeg', NULL, 'Saving Account', '', '', 1, '', '', '2022-10-06 06:30:54', '2022-10-06 06:30:54'),
(4, 6, '2022-10-13', 'Resident Indian', 'demo', 'xyz', '/public/aadhar/1665061297_20b1e087f90b18afd595.jpeg', '/public/aadhar/1665061297_a703cb1dcfce4e66c4a7.jpeg', NULL, 'Saving Account', '', '', 1, '', '', '2022-10-06 06:31:37', '2022-10-06 06:31:37'),
(5, 6, '2022-10-13', 'Resident Indian', 'demo', 'xyz', '/public/aadhar/1665061355_fc9c47d07d71a773d05e.jpeg', '/public/aadhar/1665061355_89b9fd4ad9bd6320dd5e.jpeg', NULL, 'Saving Account', '', '', 1, '', '', '2022-10-06 06:32:35', '2022-10-06 06:32:35'),
(6, 6, '0000-00-00', 'Resident Indian', 'test', 'demo', '/public/aadhar/1665061463_88ac41dfe8803bd5c1d5.jpg', '/public/aadhar/1665061463_37139024ea5d8c61a5ce.jpg', NULL, 'Saving Account', '', '', 1, '', '', '2022-10-06 06:34:23', '2022-10-06 06:34:23'),
(7, 38, '2022-07-14', 'Resident Indian', '1321325465', 'cnnhgmh', '/public/aadhar/1665407818_88c3ec80980284f9decb.png', '/public/aadhar/1665407818_f3f329589b675cf501a1.png', NULL, 'Saving Account', '', '', 1, '', '', '2022-10-10 06:46:58', '2022-10-10 06:46:58'),
(8, 40, '2022-10-12', 'Resident Indian', 'Rahul Patil', 'Thane', '/public/aadhar/1665557254_eb3c93fae4eb1a74e6ee.png', '/public/aadhar/1665557254_6092c1cbc1c1b5a4e705.jpeg', NULL, 'Current Account', '12345676', 'IDF2323', 1, '', '', '2022-10-12 12:17:34', '2022-10-12 12:17:34'),
(9, 37, '2022-10-29', 'Resident Indian', 'vitendra', 'Aadhar Addresss', '/public/proposal/1666175127_98fae3a152e618073b3d.png', '/public/proposal/1666175127_f57e4d6279b9390bec32.png', '/public/proposal/1666175127_354c79772b2ebcd29f5f.jpg', 'Salary Account', '1222', '46556', 1, 'SBI', 'Vitendra', '2022-10-19 03:55:27', '2022-10-19 03:55:27'),
(10, 27, '2022-03-22', 'Resident Indian', 'ANHAD SINGH ARORA', '23, BH', '/public/proposal/1667045788_8ca5db843694126142de.png', '/public/proposal/1667045788_119a88b5c06569ad02fd.png', '/public/proposal/1667045788_8dd4b5fece3d4476b7fb.pdf', 'Saving Account', '32323', 'KKBK8', 1, 'CITI', 'ANHAD', '2022-10-29 05:46:28', '2022-10-29 05:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `live_deals`
--

CREATE TABLE `live_deals` (
  `deal_id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `resetdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`id`, `email`, `token`, `resetdate`) VALUES
(1, 'testmailcomp0@gmail.com', '2486', '2022-10-03 06:53:25'),
(2, 'testmailcomp0@gmail.com', '8115', '2022-10-03 06:57:55'),
(3, 'testmailcomp0@gmail.com', '4285', '2022-10-03 07:04:58'),
(4, 'testmailcomp0@gmail.com', '6604', '2022-10-04 12:00:27'),
(5, 'testmailcomp0@gmail.com', '4394', '2022-10-04 12:00:32'),
(6, 'testmailcomp0@gmail.com', '2538', '2022-10-04 01:47:18'),
(7, 'testmailcomp0@gmail.com', '5085', '2022-10-04 01:49:54'),
(8, 'testmailcomp0@gmail.com', '7125', '2022-10-04 01:50:47'),
(9, 'career@acceron.in', '3153', '2022-10-07 10:39:15'),
(10, 'rahul@acceron.in', '6624', '2022-11-11 10:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `proposal_bid`
--

CREATE TABLE `proposal_bid` (
  `proposalbid_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `proposal_id` int NOT NULL,
  `investor_id` varchar(255) NOT NULL,
  `proposal_bid` varchar(255) NOT NULL,
  `proposalfiles` varchar(255) NOT NULL,
  `is_poroposal` int NOT NULL,
  `status` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proposal_bid`
--

INSERT INTO `proposal_bid` (`proposalbid_id`, `customer_id`, `proposal_id`, `investor_id`, `proposal_bid`, `proposalfiles`, `is_poroposal`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '3', '10', '/public/nbfc/1664812703_b2690e53180e55190e73.pdf', 0, 1, '2022-10-03', '2022-10-03'),
(2, 1, 1, '18', '1', '/public/nbfc/1664869042_3de7ec475363b8db0596.png', 0, 1, '2022-10-04', '2022-10-04'),
(3, 1, 1, '18', '101', '/public/nbfc/1664869923_9d8a39e774064f5891e4.png', 0, 1, '2022-10-04', '2022-10-04'),
(4, 6, 30, '6', '10', '/public/nbfc/1665061926_dbd5bcc38cef2be58e8c.pdf', 0, 1, '2022-10-06', '2022-10-06'),
(5, 18, 31, '18', '10', '/public/nbfc/1665079000_0e17874dcf537abbb947.jpg', 0, 1, '2022-10-06', '2022-10-06'),
(6, 18, 32, '18', '1', '/public/nbfc/1665079688_3ec1f6c825ff20990048.pdf', 0, 1, '2022-10-06', '2022-10-06'),
(7, 18, 33, '18', '3', '/public/nbfc/1665079991_e272f37225e95eff10b3.jpg', 0, 1, '2022-10-06', '2022-10-06'),
(8, 18, 34, '18', '10', '/public/nbfc/1665080794_1652e4f83dc5789ce547.png', 0, 1, '2022-10-06', '2022-10-06'),
(9, 38, 35, '37', '100', '/public/nbfc/1665409026_4e8c2b97072b8377b4e4.jpg', 0, 1, '2022-10-10', '2022-10-10'),
(10, 38, 36, '37', '100', '/public/nbfc/1665464198_9426f314ab4de6ad083f.jpg', 0, 1, '2022-10-11', '2022-10-11'),
(11, 38, 36, '37', '100', '/public/nbfc/1665464390_ded66fc7c0903132dfbd.jpg', 0, 1, '2022-10-11', '2022-10-11'),
(12, 38, 36, '37', '100', '/public/nbfc/1665464468_a12557aa10b932f98723.jpg', 0, 0, '2022-10-11', '2022-10-11'),
(13, 1, 1, '36', '2', '', 0, 1, '2022-10-15', '2022-10-15'),
(14, 1, 1, '19', 'fgfgf', '', 0, 1, '2022-10-17', '2022-10-17'),
(15, 1, 1, '19', 'gfgfgfsd', '', 0, 1, '2022-10-17', '2022-10-17'),
(16, 1, 1, '19', '1000', '', 0, 0, '2022-10-18', '2022-10-18'),
(17, 1, 1, '19', '10000', '', 0, 0, '2022-10-18', '2022-10-18'),
(18, 1, 1, '36', '10', '', 0, 0, '2022-10-18', '2022-10-18'),
(19, 1, 1, '26', '10000', '', 0, 0, '2022-10-19', '2022-10-19'),
(20, 1, 1, '26', '10000', '', 0, 0, '2022-10-19', '2022-10-19'),
(21, 1, 1, '26', '10000', '', 0, 0, '2022-10-19', '2022-10-19'),
(22, 1, 1, '26', '10000', '', 0, 0, '2022-10-19', '2022-10-19'),
(23, 1, 1, '26', '10000', '', 0, 0, '2022-10-20', '2022-10-20'),
(24, 1, 1, '26', '10000', '', 0, 0, '2022-10-20', '2022-10-20'),
(25, 1, 1, '19', '10000', '', 0, 0, '2022-10-20', '2022-10-20'),
(26, 1, 1, '19', '10000', '', 0, 0, '2022-10-20', '2022-10-20'),
(27, 1, 1, '26', '10000', '', 0, 0, '2022-10-20', '2022-10-20'),
(28, 1, 1, '26', '10000', '', 0, 0, '2022-10-21', '2022-10-21'),
(29, 1, 1, '26', '10000', '', 0, 0, '2022-10-21', '2022-10-21'),
(30, 1, 1, '28', '10000', '', 0, 0, '2022-10-21', '2022-10-21'),
(31, 1, 1, '28', '100', '', 0, 0, '2022-10-21', '2022-10-21'),
(32, 1, 1, '26', '10000', '', 0, 0, '2022-10-27', '2022-10-27'),
(33, 1, 1, '26', '10000', '', 0, 0, '2022-10-28', '2022-10-28'),
(34, 1, 1, '26', '10000', '', 0, 0, '2022-10-28', '2022-10-28'),
(35, 1, 1, '26', '10000', '', 0, 0, '2022-10-31', '2022-10-31'),
(36, 1, 1, '26', '10000', '', 0, 0, '2022-10-31', '2022-10-31'),
(37, 1, 1, '26', '10000', '', 0, 0, '2022-10-31', '2022-10-31'),
(38, 1, 1, '26', '10000', '', 0, 0, '2022-11-02', '2022-11-02'),
(39, 1, 1, '26', '10000', '', 0, 0, '2022-11-04', '2022-11-04'),
(40, 1, 1, '26', '10000', '', 0, 0, '2022-11-05', '2022-11-05'),
(41, 1, 1, '26', '10000', '', 0, 0, '2022-11-15', '2022-11-15'),
(42, 1, 1, '26', '10000', '', 0, 0, '2022-11-16', '2022-11-16'),
(43, 1, 1, '36', '10', '', 0, 0, '2022-11-22', '2022-11-22'),
(44, 1, 1, '7', '10000', '', 0, 0, '2022-11-22', '2022-11-22'),
(45, 1, 1, '36', '10', '', 0, 0, '2022-11-22', '2022-11-22'),
(46, 1, 1, '26', '10000', '', 0, 0, '2022-11-23', '2022-11-23'),
(47, 1, 1, '26', '10000', '', 0, 0, '2022-11-23', '2022-11-23'),
(48, 1, 1, '36', '10', '', 0, 0, '2022-11-23', '2022-11-23'),
(49, 1, 1, '36', '10', '', 0, 0, '2022-11-23', '2022-11-23'),
(50, 1, 1, '36', '10', '', 0, 0, '2022-11-23', '2022-11-23'),
(51, 1, 1, '26', '10000', '', 0, 0, '2022-11-24', '2022-11-24'),
(52, 1, 1, '26', '10000', '', 0, 0, '2022-11-28', '2022-11-28'),
(53, 1, 1, '36', '10', '', 0, 0, '2022-11-28', '2022-11-28'),
(54, 1, 1, '26', '20000', '', 0, 0, '2022-11-29', '2022-11-29'),
(55, 38, 36, '26', '10000', '', 0, 0, '2022-12-02', '2022-12-02'),
(56, 38, 36, '26', '10000', '', 0, 0, '2022-12-02', '2022-12-02'),
(57, 1, 1, '7', '10000', '', 0, 0, '2022-12-02', '2022-12-02'),
(58, 38, 36, '7', '10000', '', 0, 0, '2022-12-02', '2022-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `rfq`
--

CREATE TABLE `rfq` (
  `rfq_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `rfqtitlte` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `expiry_date` date NOT NULL,
  `additional_details` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `resource` varchar(255) NOT NULL,
  `is_approved` int NOT NULL,
  `rfqupload` varchar(255) NOT NULL,
  `is_delete` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rfq`
--

INSERT INTO `rfq` (`rfq_id`, `customer_id`, `rfqtitlte`, `subject`, `expiry_date`, `additional_details`, `total_cost`, `resource`, `is_approved`, `rfqupload`, `is_delete`, `created_at`, `updated_at`) VALUES
(31, 1, 'KNS Infra', 'Opportunities', '2022-09-23', 'KNS Infra is Bangalore’s one of the leading plotted developer enterprise with over 15 years of experience', '8200', 'Website', 0, '', 0, '2022-09-02 01:56:53', '2022-09-02 01:56:53'),
(43, 38, 'jhfty', 'fgjhgj46546', '2022-10-12', 'fhfghnjgmn232', '300', 'Website', 0, '', 0, '2022-10-10 06:55:40', '2022-10-10 06:55:40'),
(44, 40, 'Petpooja', 'Petpooja investment', '2022-10-27', 'Investment for laptops', '305000', 'Website', 0, '', 0, '2022-10-12 12:20:49', '2022-10-12 12:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `rfq_requirement`
--

CREATE TABLE `rfq_requirement` (
  `rfq_requirement_id` int NOT NULL,
  `rfq_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `requiremnet_details` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `is_delete` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rfq_requirement`
--

INSERT INTO `rfq_requirement` (`rfq_requirement_id`, `rfq_id`, `customer_id`, `requiremnet_details`, `cost`, `quantity`, `is_delete`, `created_at`, `updated_at`) VALUES
(25, 43, 0, 'ghjghj', '100', '1', 0, '2022-10-11 12:50:26', '2022-10-11 12:50:26'),
(26, 43, 0, 'gfnghnhg', '100', '1', 0, '2022-10-11 12:50:26', '2022-10-11 12:50:26'),
(27, 43, 0, 'vjhvj', '100', '1', 0, '2022-10-11 12:50:26', '2022-10-11 12:50:26'),
(28, 44, 40, 'Laptop', '30000', '10', 0, '2022-10-12 12:20:49', '2022-10-12 12:20:49'),
(29, 44, 40, 'mouse', '500', '10', 0, '2022-10-12 12:20:49', '2022-10-12 12:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `emailid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `wallet_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_verify` int NOT NULL,
  `is_delete` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `password`, `emailid`, `mobile_number`, `user_role`, `wallet_amount`, `is_verify`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'sdfs', '', 'info@eudaimonis.in', '8888888888', 'customer', '', 1, 0, '2022-08-23 12:57:17', '2022-08-23 12:57:17'),
(2, 'investor', 'invests', '123', 'info@eudaimonis', '9999999999', 'investor', '710', 0, 0, '2022-08-23 12:57:17', '2022-08-23 12:57:17'),
(3, 'nbfc', 'nbfcs', '123', 'admins@gmail.com', '8888888875', 'nbfc', '1991', 0, 0, '2022-08-23 12:57:17', '2022-08-23 12:57:17'),
(5, 'leasify', 'nbfcs', '25d55ad283aa400af464c76d713c07ad', 'admin@gmail.com', '8888888898', 'admin', '1100', 0, 0, '2022-08-23 12:57:17', '2022-08-23 12:57:17'),
(7, 'Rahul', 'Patil', 'Rahul123', 'rahul@acceron.in', '07039205886', 'investor', '', 1, 0, NULL, '2022-11-11 10:29:46'),
(8, 'Rahul', 'Patil', 'Rahul123', 'rahul@acceron.in', '07039205886', 'investor', NULL, 1, 0, NULL, '2022-11-11 10:29:46'),
(9, 'Rahul', 'Patil', 'Rahul123', 'rahul@acceron.in', '07039205886', 'investor', NULL, 0, 0, NULL, '2022-11-11 10:29:46'),
(10, 'Rahul', 'Patil', 'Rahul123', 'rahul@acceron.in', '07039205886', 'investor', NULL, 1, 0, NULL, '2022-11-11 10:29:46'),
(11, 'Anhad ', 'Arora', 'anhad', 'anhadcool@gmail.com', '9811308500', 'investor', NULL, 1, 0, NULL, NULL),
(12, 'Akshat', 'Kundalia', 'akshat', 'akshatkundalia@hotmail.com', '9819600268', 'investor', NULL, 1, 0, NULL, NULL),
(13, 'Rahul', 'Patil', 'Rahul123@', 'info@acceron.in', '07039205886', 'investor', NULL, 0, 0, NULL, NULL),
(14, 'Rahul', 'Patil', 'Info123', 'info@acceron.in', '07039205886', 'investor', NULL, 1, 0, '2022-10-01 03:57:26', '2022-10-01 03:57:26'),
(15, 'Rahul', 'Patil', 'acceronlisting', 'acceronlisting@gmail.com', '7039205886', 'investor', NULL, 0, 0, '2022-10-01 03:58:15', '2022-10-01 03:58:15'),
(16, 'Anhad', 'Arora', '123', 'anhadcool@gmail.com', '9811308500', 'investor', NULL, 1, 0, '2022-10-02 03:58:03', '2022-10-02 03:58:03'),
(17, 'Ruchika', 'solanki', '12345678', 'ruchikasolanki1999@gmail.com', '7039135090', 'investor', '', 1, 0, '2022-10-02 05:02:58', '2022-10-02 05:02:58'),
(19, 'Rahul', 'Patil', 'vandanapatil454', 'vandanapatil454@gmail.com', '07039205886', 'investor', '', 1, 0, '2022-10-03 04:39:37', '2022-10-03 04:39:37'),
(25, 'demos', 'test', 'Rahul123', 'career@acceron.in', '8888888888', 'nbfc', '', 1, 0, '2022-10-07 10:37:46', '2022-10-07 10:40:35'),
(26, 'Kunal', 'Lulla', 'DREAMbig@91', 'kunal200k@gmail.com', '9167451109', 'investor', '', 1, 0, '2022-10-07 01:28:33', '2022-10-07 01:28:33'),
(27, 'Anhad', 'Arora', '123', 'anhadarora20@gmail.com', '9811308500', 'investor', '', 1, 0, '2022-10-07 01:29:44', '2022-10-07 01:29:44'),
(28, 'Kunal', 'Lulla', 'DREAMbig@91', 'kunal@leasify.in', '9167451109', 'investor', NULL, 1, 0, '2022-10-07 01:30:56', '2022-10-07 01:30:56'),
(29, 'demo', 'test', '123', 'jh@acceron.in', '8888888888', 'nbfc', NULL, 0, 0, '2022-10-07 04:59:10', '2022-10-07 04:59:10'),
(30, 'demo', 'test', '', 'i@gmail.com', '+917588659', 'nbfc', NULL, 0, 1, '2022-10-07 05:00:24', '2022-10-07 05:00:24'),
(32, 'demo', 'test', '', 'carer@acceron.in', '88888888', 'investor', NULL, 1, 0, '2022-10-07 07:40:40', '2022-10-07 07:40:40'),
(34, 'demo', 'test', 'Ankita@123', 'ankitalakde06@gmail.com', '7588659834', 'investor', NULL, 0, 1, '2022-10-08 07:39:51', '2022-10-08 07:39:51'),
(35, 'Sarthak', 'Gupta', 'alberteinstein', 'sarthakgupta0014@gmail.com', '8433797871', 'investor', NULL, 1, 0, '2022-10-09 04:16:53', '2022-10-09 04:16:53'),
(36, 'demo', 'test', '123', 'testmailcomp0@gmail.com', '7588659834', 'investor', '', 1, 0, '2022-10-10 06:06:04', '2022-10-10 06:06:04'),
(37, 'Vitendra', 'kumar', '123', 'vitendrakumar123@gmail.com', '8319883894', 'investor', '2', 1, 0, '2022-10-10 06:06:51', '2022-10-10 06:06:51'),
(38, 'vitenn', 'kumar', '123', 'vitendra.jangde@acceron.in', '1234567890', 'customer', NULL, 1, 1, '2022-10-10 06:42:17', '2022-10-10 06:42:17'),
(39, 'test', 'test', '', 'ankitalakde1994@gmail.com', '7588659834', 'customer', NULL, 1, 1, '2022-10-10 11:18:40', '2022-10-10 11:18:40'),
(40, 'Rahul', 'Patil', '', 'searchinfo283@gmail.com', '7039205886', 'customer', NULL, 1, 0, '2022-10-12 12:13:36', '2022-10-12 12:13:36'),
(41, 'demo', 'test', '123', 'ankita.lakde@acceron.in', '7588659834', 'customer', NULL, 1, 0, '2022-10-17 09:21:09', '2022-10-17 09:21:09'),
(42, 'Akshat', 'Kundalia', '', 'akshatkundalia@gmail.com', '9819600268', 'customer', NULL, 0, 0, '2022-10-31 02:10:43', '2022-10-31 02:10:43'),
(43, 'Roli', 'Khanna', 'roli@1907', 'Mittal_dheeraj@hotmail.com', '9324091440', 'investor', NULL, 1, 0, '2022-11-02 01:18:28', '2022-11-02 01:18:28'),
(44, 'Vedant', 'Wanchoo', '', 'vedantwannchoo@gmail.com', '9769644369', 'investor', NULL, 1, 0, '2022-11-19 05:56:14', '2022-11-19 05:56:14'),
(45, 'rohan', 'rautela', 'Ximena@123', 'rohanrautela9@gmail.com', '9967974993', 'investor', NULL, 1, 0, '2022-12-03 03:25:52', '2022-12-03 03:25:52'),
(46, 'Sampath', 'Kumar', 'Sampath@20', 'ksampathkumar91@gmail.com', '9951469116', 'investor', NULL, 1, 0, '2022-12-05 04:55:47', '2022-12-05 04:55:47'),
(47, 'Dhvij', 'Patel', 'Excelease.club', 'dhvijp3@gmail.com', '8080447003', 'investor', '', 1, 0, '2022-12-09 07:07:55', '2022-12-09 07:07:55'),
(48, 'Ash', 'Shah', 'Ramkrupa99', 'ashshah2796@gmail.com', '9321606200', 'investor', NULL, 1, 0, '2022-12-10 10:41:01', '2022-12-10 10:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_wallet`
--

CREATE TABLE `user_wallet` (
  `uwallet_id` int NOT NULL,
  `user_id` int NOT NULL,
  `quote_id` varchar(255) NOT NULL,
  `Amount` varchar(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `paymnet_status` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `is_money` int NOT NULL,
  `pay_date` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_wallet`
--

INSERT INTO `user_wallet` (`uwallet_id`, `user_id`, `quote_id`, `Amount`, `payment_method`, `paymnet_status`, `reason`, `is_money`, `pay_date`, `created_at`, `updated_at`) VALUES
(1, 0, '', '57', 'Gpay', 'Success', '', 0, '2022-08-30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, '', '57', 'Gpay', 'Success', '', 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, '', '900', 'Gpay', 'Success', '', 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 0, '', '800', 'Gpay', 'Success', '', 0, '2022-08-31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 0, '', '800', 'Gpay', 'Success', '', 0, '2022-08-31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 0, '', '2000', 'Gpay', 'Success', '', 0, '2022-09-15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 0, '', '4000', 'Gpay', 'Success', '', 0, '2022-09-02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 0, '', '98', 'Gpay', 'Success', '', 0, '2022-09-13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 0, '', '200', 'Gpay', 'Success', '', 0, '2022-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, '', '100', 'Gpay', 'Success', '', 0, '2022-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, '', '200', 'Gpay', 'Success', '', 0, '2022-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 2, '', '2000', 'Gpay', 'Success', '', 0, '2022-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 2, '', '-100', 'Gpay', 'Success', '', 0, '2022-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 2, '', '-300', 'Gpay', 'Success', 'Withdraw', 1, '2022-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 2, '', '-900', 'Gpay', 'Success', 'Withdraw', 1, '2022-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 2, '', '-100', 'Gpay', 'Success', 'Withdraw', 0, '2022-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 2, '', '-90', 'Gpay', 'Success', 'Withdraw', 0, '2022-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 1, '', '1000', 'Gpay', 'Success', '', 0, '2022-09-22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 1, '', '-9', 'Gpay', 'Success', 'Withdraw', 1, '2022-09-22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 3, '', '1000', 'Gpay', 'Success', '', 0, '2022-09-27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 3, '', '-9', 'Gpay', 'Success', 'Withdraw', 0, '2022-09-27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 3, '', '1000', 'Gpay', 'Success', '', 0, '2022-09-27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 6, '', '1000', 'Gpay', 'Success', '', 0, '2022-09-29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 6, '', '-50', 'Gpay', 'Success', 'Withdraw', 0, '2022-09-29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 18, '', '1000', 'Gpay', 'Success', '', 1, '2022-10-03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 18, '', '2000', 'Gpay', 'Success', '', 1, '2022-10-03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 18, '', '-20', 'Gpay', 'Success', 'Withdraw', 0, '2022-10-03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 3, '', '1', 'Gpay', 'Success', '', 1, '2022-10-03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 3, '', '-2', 'Gpay', 'Success', 'Withdraw', 0, '2022-10-03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 3, '', '1', 'Gpay', 'Success', '', 1, '2022-10-03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 18, '', '-1', 'Gpay', 'Success', 'Withdraw', 0, '2022-10-04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 18, '', '-9', 'Gpay', 'Success', 'Withdraw', 1, '2022-10-04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 18, '', '-1', 'Gpay', 'Success', 'Withdraw', 0, '2022-10-06', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 18, '', '-2', 'Gpay', 'Success', 'Withdraw', 1, '2022-10-06', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 37, '', '1.00', 'DC', '', '', 1, '2022-10-11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 37, '', '1.00', 'DC', '', '', 1, '2022-10-11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 37, '', '1.00', 'DC', '', '', 1, '2022-10-11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 37, '', '-1', 'Gpay', 'Success', 'Withdraw', 1, '2022-10-11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 36, '', '-1', 'Cash', 'Success', 'Withdraw', 0, '2022-11-28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_payment`
--
ALTER TABLE `customer_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `indicative_proposals`
--
ALTER TABLE `indicative_proposals`
  ADD PRIMARY KEY (`proposal_id`);

--
-- Indexes for table `indicative_proposals_details`
--
ALTER TABLE `indicative_proposals_details`
  ADD PRIMARY KEY (`proposaldeatil_id`);

--
-- Indexes for table `kycdetails`
--
ALTER TABLE `kycdetails`
  ADD PRIMARY KEY (`kyc_id`);

--
-- Indexes for table `live_deals`
--
ALTER TABLE `live_deals`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal_bid`
--
ALTER TABLE `proposal_bid`
  ADD PRIMARY KEY (`proposalbid_id`);

--
-- Indexes for table `rfq`
--
ALTER TABLE `rfq`
  ADD PRIMARY KEY (`rfq_id`);

--
-- Indexes for table `rfq_requirement`
--
ALTER TABLE `rfq_requirement`
  ADD PRIMARY KEY (`rfq_requirement_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_wallet`
--
ALTER TABLE `user_wallet`
  ADD PRIMARY KEY (`uwallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_payment`
--
ALTER TABLE `customer_payment`
  MODIFY `payment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `indicative_proposals`
--
ALTER TABLE `indicative_proposals`
  MODIFY `proposal_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `indicative_proposals_details`
--
ALTER TABLE `indicative_proposals_details`
  MODIFY `proposaldeatil_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=480;

--
-- AUTO_INCREMENT for table `kycdetails`
--
ALTER TABLE `kycdetails`
  MODIFY `kyc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `live_deals`
--
ALTER TABLE `live_deals`
  MODIFY `deal_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `proposal_bid`
--
ALTER TABLE `proposal_bid`
  MODIFY `proposalbid_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `rfq`
--
ALTER TABLE `rfq`
  MODIFY `rfq_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `rfq_requirement`
--
ALTER TABLE `rfq_requirement`
  MODIFY `rfq_requirement_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_wallet`
--
ALTER TABLE `user_wallet`
  MODIFY `uwallet_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
