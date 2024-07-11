-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2024 at 05:48 PM
-- Server version: 5.7.44-log
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devsupremekitche_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--
  

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `description`, `is_active`) VALUES
(1, 'Admin', 'For internal supreme use.', 'Yes'),
(2, 'Cashier', 'A Cashier is a retail professional who scans items to ensure prices and quantities are correct, assists those who need help or advice on products, and handles returns and exchanges when necessary.', 'Yes'),
(3, 'Store Manager', 'Can process a sale/return and manage customers. Assign this permission group to in store manager.', 'Yes'),
(4, 'Sales User', 'Can enter and edit user, apply payments and manage customers.', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google2fa_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_2fa_enable` int(11) DEFAULT NULL,
  `two_fa_now` int(11) DEFAULT NULL,
  `menu_collapse` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT 'Yes',
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('Super Admin','Admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','deactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google2fa_secret`, `is_2fa_enable`, `two_fa_now`, `menu_collapse`, `designation`, `role`, `first_name`, `last_name`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `img`, `phone`, `status`) VALUES
(1, 'ACPMMATMUFZBA2AC', 1, 1, 'Yes', '', 'Admin', 'Dev', 'Auswide', 'Dev', 'development@auswideservices.net', NULL, '$2y$10$ASNKcKT41540EZuruqhrtuIfWyxMXvQ.rUpGLDV6zNCDY.KuSioS2', NULL, '2024-05-22 20:53:50', '2024-06-25 20:48:31', '1716960835.png', '123456780', 'active');
 
--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
