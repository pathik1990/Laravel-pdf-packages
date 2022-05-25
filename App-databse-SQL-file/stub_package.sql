-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 12:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stub_package`
--

-- --------------------------------------------------------

--
-- Table structure for table `apikeys`
--

CREATE TABLE `apikeys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apikeys`
--

INSERT INTO `apikeys` (`id`, `user_id`, `project_name`, `public_key`, `secret_key`, `status`, `ip_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, 29, 'Default Project', 'public_key_j4wuUws7HzRd5nntRLLY', 'secret_key_KHBzkaq2iCLQ4f9C0VRG', 0, '127.0.0.1', '2022-04-20 12:16:55', '2022-04-22 10:05:27', '2022-04-22 10:05:27'),
(24, 29, 'Online Paystubs', 'public_key_NpnjIKj4jYnYUUzVY7UF', 'secret_key_spinZvwnvD4SCWX8BQUx', 1, '127.0.0.1', '2022-04-22 09:27:43', '2022-04-22 09:27:43', NULL),
(25, 29, 'Stubcreator', 'public_key_RTM8Hh6tRenhApipnwKC', 'secret_key_BughdQ5Nd2LfO8s2iTQn', 1, '127.0.0.1', '2022-04-22 09:27:51', '2022-04-22 09:27:51', NULL),
(26, 29, 'Stubbuilder', 'public_key_tGMYossCbQL5tRwml3T8', 'secret_key_lVz8QYjlil6snYNMhIlt', 1, '127.0.0.1', '2022-04-22 09:28:04', '2022-04-22 09:28:04', NULL),
(28, 29, 'dfgdfs', 'public_key_WwL9m8T9d5KbTRGlLhbu', 'secret_key_1TRGrnopZpUSVQFMcwW4', 0, '127.0.0.1', '2022-04-22 10:05:42', '2022-04-22 10:13:23', '2022-04-22 10:13:23'),
(29, 29, 'dfgdfgds', 'public_key_LQMyudp6cKUPiblQFDvJ', 'secret_key_HzM5TTkMvxN55bzQTTbO', 0, '127.0.0.1', '2022-04-22 10:05:47', '2022-04-22 10:13:36', '2022-04-22 10:13:36'),
(30, 29, 'TESt', 'public_key_wIkW7ZNJrJ9iODXE7Vzm', 'secret_key_rU1Q0D30ta5SmwIJfNx7', 0, '127.0.0.1', '2022-04-22 10:18:02', '2022-04-22 10:18:10', '2022-04-22 10:18:10'),
(31, 29, 'hjvhghghh', 'public_key_3uiniiXJEBXlE8EaEpRl', 'secret_key_sF5qEfaeo7W16htlc8Cu', 0, '127.0.0.1', '2022-04-22 10:18:57', '2022-04-22 10:19:04', '2022-04-22 10:19:04'),
(36, 35, 'Default Project', 'public_key_vTj9wyXXoZ2t9E5S9GlH', 'secret_key_dliObevjGhfX3I97xoi0', 1, '127.0.0.1', '2022-05-19 09:12:35', '2022-05-19 09:12:35', NULL),
(37, 36, 'Default Project', 'public_key_Le3x7VFtIiQvhPK84VyT', 'secret_key_OG73R0fU1YMXtHSprFPp', 1, '127.0.0.1', '2022-05-19 09:42:30', '2022-05-19 09:42:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_details`
--

CREATE TABLE `business_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` mediumint(8) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_details`
--

INSERT INTO `business_details` (`id`, `company_name`, `website_url`, `address`, `city`, `state`, `country`, `postal_code`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Webby Genius Infotech Pvt. Ltd.', 'https://webbygenius.com/', 'A-403 Swastik Universal, Near Valentine Multiplex, Magdalla road', 'Surat', 'Gujarat', 'India', 395007, '2022-04-20 12:16:55', '2022-04-20 12:29:52', 29),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 09:12:35', '2022-05-19 09:12:35', 35),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 09:42:30', '2022-05-19 09:42:30', 36);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_04_15_095256_create_apikeys_table', 1),
(11, '2022_04_20_075158_add_ip_address_to_apikeys', 2),
(12, '2022_04_20_075956_add_status_to_apikeys', 3),
(13, '2022_04_20_162408_create_business_details_table', 4),
(14, '2022_04_20_171148_add_user_id_to_business_details_table', 5),
(15, '2022_04_22_163820_create_plans_and_packages_table', 6),
(16, '2022_04_23_104052_create_paypal_details_table', 6),
(17, '2022_04_23_114825_create_paypal_details_table', 7),
(18, '2022_04_27_103406_create_payment_table', 8),
(19, '2022_04_27_110913_create_payment_table', 9),
(20, '2022_04_27_122256_create_plans_and_packages_table', 10),
(21, '2022_05_09_175721_add_invoice_id_to_payment_table', 11),
(22, '2022_05_09_175912_add_invoice_id_to_payment_table', 12),
(23, '2022_05_09_183417_add_transaction_id_to_payment_table', 13),
(24, '2022_05_18_164408_create_notifications_table', 14),
(25, '2022_05_18_165338_create_notifications_table', 15),
(26, '2022_05_19_143607_create_notifications_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('6c8487af-8def-4643-8a84-89792262dd8a', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"name\":\"Madhav Surati\",\"email\":\"dev9@webbygenius.com\"}', NULL, '2022-05-19 09:12:38', '2022-05-19 09:12:38'),
('9ae5909c-a946-436d-939e-9e93f376eb72', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{\"name\":\"Vivek Ahir\",\"email\":\"dev1@webbygenius.com\"}', NULL, '2022-05-19 09:42:33', '2022-05-19 09:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `invoice_id`, `transaction_id`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 29, 'PAYPAL_13130', '7HJ5973493687745C', '5J330641HV473171T', 'DNQ2EDKEA5KAN', 'sopari-buyer@technog33k.com', 349.50, 'USD', 'COMPLETED', '2022-05-12 11:04:40', '2022-05-12 11:04:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paypal_details`
--

CREATE TABLE `paypal_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `paypal_sandbox_client_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_sandbox_client_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_live_client_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_live_client_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypal_details`
--

INSERT INTO `paypal_details` (`id`, `status`, `paypal_sandbox_client_id`, `paypal_sandbox_client_secret`, `paypal_live_client_id`, `paypal_live_client_secret`, `created_at`, `updated_at`) VALUES
(2, 1, 'AbzdzHEptj04HppUZfOdl6oOskU7Trb2UjMefPer2cly-w8F-7CnSkKwIXK7iGUVzcJVFA0KIuZNqvMu', 'EJBhKkn4a-X42eW6xIkPTShV7sUe2SJuOf_Y9kUwKvgCQd8kaHEAR3V4RDer3Hh5jazkE8R-I14Hs-dV', 'AQb_uhCxkswoDV-msDRSEvBrENNqphJo-cGxMJ7nUa9hSArJhefMfdMvtVRN065kc4e2jp8rJ0X8yQrz', 'EOkxH5vbF4tWYGZTf84TOUuxTJHJ4d4iq7ADmuhm-xD4ziaZLym2JnJNoeS7KXD9sQCrxR0D7tR3tH_2', NULL, '2022-04-23 06:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans_and_packages`
--

CREATE TABLE `plans_and_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage_package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans_and_packages`
--

INSERT INTO `plans_and_packages` (`id`, `user_id`, `payment_id`, `package_name`, `usage_package`, `total_package`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 29, 15, 'Prepaid Plan', '0', '50', '2022-05-12 11:04:40', '2022-05-12 11:04:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('developer','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'developer',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mayur Patel', 'dev4@webbygenius.com', NULL, '$2y$10$scKxNCHbGBuBS9L3sSUyRepnVRjtphuLJEZHSykHZleXALdEVenxS', 'admin', NULL, NULL, NULL, NULL),
(29, 'Dhaval Patel', 'dev5@webbygenius.com', NULL, '$2y$10$8R9.cC1yBBeXZjIUcQE/r.BXTl0kmgVt/nvdY.lbZicyZ.gCor3La', 'developer', NULL, '2022-04-20 12:16:55', '2022-04-20 12:16:55', NULL),
(35, 'Madhav Surati', 'dev9@webbygenius.com', NULL, '$2y$10$9T5uwLC8YjYF8Z0ErpwGveDL87r/LRWIMZw2TXLl3plSxxJtFzY2q', 'developer', NULL, '2022-05-19 09:12:35', '2022-05-19 09:12:35', NULL),
(36, 'Vivek Ahir', 'dev1@webbygenius.com', NULL, '$2y$10$5/jGvViO/ykl.eVYaS5hKempxfBb.pah0iaUpjGBXdYAU6G.rRkU6', 'developer', NULL, '2022-05-19 09:42:30', '2022-05-19 09:42:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apikeys`
--
ALTER TABLE `apikeys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apikeys_user_id_foreign` (`user_id`);

--
-- Indexes for table `business_details`
--
ALTER TABLE `business_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_user_id_foreign` (`user_id`);

--
-- Indexes for table `paypal_details`
--
ALTER TABLE `paypal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans_and_packages`
--
ALTER TABLE `plans_and_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plans_and_packages_user_id_foreign` (`user_id`),
  ADD KEY `plans_and_packages_payment_id_foreign` (`payment_id`);

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
-- AUTO_INCREMENT for table `apikeys`
--
ALTER TABLE `apikeys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `business_details`
--
ALTER TABLE `business_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `paypal_details`
--
ALTER TABLE `paypal_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans_and_packages`
--
ALTER TABLE `plans_and_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apikeys`
--
ALTER TABLE `apikeys`
  ADD CONSTRAINT `apikeys_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `business_details`
--
ALTER TABLE `business_details`
  ADD CONSTRAINT `business_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `plans_and_packages`
--
ALTER TABLE `plans_and_packages`
  ADD CONSTRAINT `plans_and_packages_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plans_and_packages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
