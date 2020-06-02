-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 05:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yiiadvanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', '_36DtLz3DRqWDCnAjbqqs2LgT4cSKF5e', '$2y$13$EbncX9jdxJXipqbDV3E4BO2rYR0N1jHBPXJtseWtI5FkdcF2dhrhS', NULL, 'ricardskirsholcs7@gmail.com', 10, 1590254530, 1590254598, 'ob91dyDWQj2Ni84f8SKCGst-_6feA2ll_1590254530'),
(2, 'asdasd', 'XTKAoUQQeEKMpF-Jew29Bck9M4VyZ2gr', '$2y$13$5qKZMytmVX7wN2mBkSHxzO36rZzi36n2En70ntvGpH6r5hhs.74Eq', NULL, 'asdasd@asdasd.lv', 11, 1590879635, 1590879635, 'nXEJz9iE46LQoYrmUAD3pYjWoSUO5Xst_1590879635');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `body`, `created_at`) VALUES
(1, 'dfg', 'wqe@gmail.com', 'asdasd', 'asd', '2020-05-09 20:52:57'),
(2, 'dfg', 'wqe@gmail.com', 'qwe', 'sd', '2020-05-10 09:31:14'),
(3, 'Andris', 'andris@gmail.com', 'kluda', 'nevar ielogoties', '2020-05-11 08:01:37'),
(4, 'Ricards', 'ricards@gmail.com', 'Not loging in', 'I cant login', '2020-05-23 18:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1590254210),
('m130524_201442_init', 1590254221),
('m190124_110200_add_verification_token_column_to_user_table', 1590254221);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` varchar(50) NOT NULL,
  `avalibility` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_email`, `name`, `description`, `price`, `avalibility`, `type`, `stock`, `image`, `created_at`) VALUES
(2, 'ricardskirsholcs7@gmail.com', 'Hot Tub', 'Hot Tub\r\nDiameter - 1,80m,\r\nHeight – 1,10m,', '76', '1', '1', 6, 'balla.jpg', '2020-06-01 19:50:16'),
(3, 'ricardskirsholcs7@gmail.com', 'Canopy 6x12m', 'Length - 1200cm,\r\nWidth - 600cm,\r\nHeight 302cm/378cm.\r\n', '50', '1', '2', 3, 'nojume.jpg', '2020-06-01 19:51:59'),
(4, 'ricardskirsholcs7@gmail.com', 'Table 182.9x75.2cm', 'Table for outside\r\nWeight - 14kg,\r\nCan supply 315kg,\r\nSize - 182.9x75.2x74.3 cm\r\n', '10', '1', '3', 30, 'galds.png', '2020-06-01 19:53:05'),
(5, 'ricardskirsholcs7@gmail.com', 'Cutlery', 'Fork\r\nKnife,\r\nBig spoon,\r\nSmall spoon.\r\n', '1.5', '1', '4', 220, 'galda_piederumi.jpg', '2020-06-01 19:53:55'),
(6, 'ricardskirsholcs7@gmail.com', 'Chair', 'Weight- 2.75 kg,\r\nRecommended maximum weight- 190 kg,\r\nSizes - 46.6 x 49.5 x 80.3 cm.\r\n', '2', '1', '5', 220, 'kresls.jpg', '2020-06-01 19:54:42'),
(7, 'ricardskirsholcs7@gmail.com', 'Charcoal grill ', 'Diameter - 59cm,\r\nBaking grid diameter - 49cm,\r\nWeight -112kg\r\n', '25', '1', '6', 20, 'grills.png', '2020-06-01 19:55:36'),
(12, 'ricardskirsholcs7@gmail.com', 'Hot Tub', 'Diameter - 200cm\r\nHeight - 150cm', '50', '1', '1', 50, 'balla2.jpg', '2020-06-01 19:56:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `admin`) VALUES
(1, 'RicardsK', '_36DtLz3DRqWDCnAjbqqs2LgT4cSKF5e', '$2y$13$EbncX9jdxJXipqbDV3E4BO2rYR0N1jHBPXJtseWtI5FkdcF2dhrhS', '', 'ricardskirsholcs7@gmail.com', 10, 1590254530, 1590933241, 'ob91dyDWQj2Ni84f8SKCGst-_6feA2ll_1590254530', 1),
(6, 'Skola', 'OO-QdB4aLqYs4tjFOcsmY0B7GYmclFtf', '$2y$13$5mWEDnNPVeO/pjUAywwRROI3Rs4xWW0CHKNAypZ2x0OG8XZrC6GUO', NULL, 'skola@gmail.com', 10, 1591013524, 1591013524, 'uPaZsTdJlFfn--j59zOnvHV6iG1DgRUb_1591013524', 0),
(7, 'TomPeters', 'IxABDoomTAJNlYM1wcZxWw60D0ZZKb1e', '$2y$13$FyPXX.7hKyjSTjnIiauKNeTiIqBVWyIVKaiIlJMujBVksAqZ9Bfoi', NULL, 'TomPeters@gmail.com', 10, 1591041884, 1591041884, 'xoHv0LibdtaypVN-74reurpvqliSD1cF_1591041884', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
