-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2023 at 10:41 PM
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
-- Database: `laravel_sumou`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE IF NOT EXISTS `ads` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `plate_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'private',
  `first_letter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_letter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_letter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourth_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validity_of_periodic_examination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validity_of_driving_form` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_insurance_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `are_there_violations` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_auction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'لا',
  `views` int NOT NULL DEFAULT '0',
  `is_featured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ads_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `plate_type`, `first_letter`, `second_letter`, `third_letter`, `first_number`, `second_number`, `third_number`, `fourth_number`, `validity_of_periodic_examination`, `validity_of_driving_form`, `vehicle_insurance_status`, `are_there_violations`, `phone`, `price`, `in_auction`, `views`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 'خصوصي', 'ن', 'ه', 'ل', '١', '١', '١', '١', 'جديد', 'ساري', 'جديد', 'نعم', '0565654654', '12030', 'نعم', 0, 'no', 'قيد المراجعة', '2023-11-08 20:34:55', '2023-11-09 20:10:02'),
(2, 2, 'نقل', 'ه', 'د', 'م', '5', '6', '6', '8', 'منتهي', 'غير ساري', 'منتهي', 'لا', '0565654653', '3000', 'لا', 0, 'no', 'قيد المراجعة', '2023-11-08 20:35:48', '2023-11-08 20:35:48'),
(4, 12, 'نقل', 'أ', 'ب', 'ح', '١', '٢', '٣', '٤', 'منتهي', 'غير ساري', 'منتهي', 'لا', '0522335642', '350', 'نعم', 0, 'no', 'قيد المراجعة', '2023-11-08 21:45:54', '2023-11-09 14:03:04'),
(5, 12, 'خصوصي', 'ن', 'ط', 'أ', '٨', '٥', '٤', '٥', 'جديد', 'ساري', 'جديد', 'نعم', '0585784577', '7800', 'نعم', 0, 'no', 'قيد المراجعة', '2023-11-08 22:38:48', '2023-11-08 22:38:48'),
(7, 12, 'خصوصي', 'ح', 'و', 'ل', '١', '٤', '٥', '٤', 'جديد', 'غير ساري', 'جديد', 'نعم', '0522332323', '122', 'لا', 0, 'no', 'قيد المراجعة', '2023-11-09 20:08:54', '2023-11-09 20:08:54'),
(8, 12, 'خصوصي', 'د', 'ح', 'د', '٤', '٤', '٤', '٤', 'جديد', 'غير ساري', 'منتهي', 'نعم', '0522335645', '5000', 'نعم', 0, 'no', 'قيد المراجعة', '2023-11-09 20:56:25', '2023-11-09 20:56:25'),
(9, 12, 'نقل', 'أ', 'ب', 'ح', '١', '٢', '٣', '٤', 'منتهي', 'ساري', 'منتهي', 'نعم', '0522332328', '123000000', 'لا', 0, 'no', 'منشور', '2023-11-10 15:52:59', '2023-11-11 21:00:23'),
(12, 13, 'خصوصي', 'ي', 'ب', 'أ', '٨', '٣', '٨', '١', 'جديد', 'ساري', 'جديد', 'نعم', '0522332356', '2255500000', 'لا', 0, 'no', 'قيد المراجعة', '2023-11-11 22:03:40', '2023-11-11 22:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_00_000000_create_settings_table', 1),
(2, '2014_10_00_000001_add_group_column_on_settings_table', 1),
(11, '2014_10_12_000000_create_users_table', 2),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(13, '2014_10_12_100000_create_password_resets_table', 2),
(14, '2019_08_19_000000_create_failed_jobs_table', 2),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(16, '2023_05_23_101526_create_categories_table', 2),
(17, '2023_05_23_111421_create_posts_table', 2),
(18, '2023_05_26_112843_add_columns_to_users_table', 2),
(19, '2023_05_28_142342_create_settings_table', 2),
(20, '2023_05_31_233007_add_role_to_users_table', 2),
(21, '2023_08_19_231323_add_whatsapp_to_users_table', 2),
(22, '2023_08_20_165910_laratrust_setup_tables', 2),
(29, '2023_11_06_000858_create_ads_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2023-06-02 21:16:01', '2023-06-02 21:16:01'),
(2, 'users-read', 'Read Users', 'Read Users', '2023-06-02 21:16:01', '2023-06-02 21:16:01'),
(3, 'users-update', 'Update Users', 'Update Users', '2023-06-02 21:16:01', '2023-06-02 21:16:01'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2023-06-02 21:16:01', '2023-06-02 21:16:01'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2023-06-02 21:16:01', '2023-06-02 21:16:01'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2023-06-02 21:16:01', '2023-06-02 21:16:01'),
(15, 'categories-create', 'Create Categories', 'Ability to create categories..', '2023-06-03 20:15:48', '2023-06-04 09:24:26'),
(16, 'categories-read', 'Read Categories', 'Ability to Read Categories..', '2023-06-04 09:25:18', '2023-06-04 09:25:18'),
(17, 'categories-delete', 'Delete Categories', 'Ability to Delete Categories..', '2023-06-04 09:26:13', '2023-06-04 09:26:13'),
(18, 'categories-update', 'Update Categories', 'Ability to Update Categories..', '2023-06-04 09:26:55', '2023-06-04 09:26:55'),
(19, 'posts-read', 'Read Posts..', 'Ability to Read Posts..', '2023-06-04 09:28:15', '2023-06-04 09:28:15'),
(20, 'posts-update', 'Update Posts', 'Ability to Update Posts..', '2023-06-04 09:28:57', '2023-06-04 09:28:57'),
(21, 'posts-create', 'Create Posts', 'Ability to Create Posts..', '2023-06-04 09:29:41', '2023-06-04 09:29:41'),
(22, 'posts-delete', 'Delete Posts', 'Ability to Delete Posts..', '2023-06-04 09:30:36', '2023-06-04 09:30:36'),
(23, 'roles-create', 'Create Role', 'Ability to Create Roles..', '2023-06-04 09:31:40', '2023-06-04 09:31:40'),
(24, 'roles-read', 'Read Roles', 'Ability to Read Roles..', '2023-06-04 09:32:01', '2023-06-04 09:32:01'),
(25, 'roles-update', 'Update Roles', 'Ability to Update Roles..', '2023-06-04 09:33:18', '2023-06-04 09:33:18'),
(26, 'roles-delete', 'Delete Roles', 'Ability to Delete Roles..', '2023-06-04 09:34:00', '2023-06-04 09:34:00'),
(27, 'permissions-create', 'Create Permissions', 'Ability to Create Permissions ..', '2023-06-04 09:35:23', '2023-06-04 09:35:23'),
(28, 'permissions-read', 'Read Permissions', 'Ability to Read Permissions ..', '2023-06-04 09:36:06', '2023-06-04 09:36:06'),
(29, 'permissions-update', 'Update Permissions', 'Ability to Update Permissions ..', '2023-06-04 09:36:51', '2023-06-04 09:36:51'),
(30, 'permissions-delete', 'Delete Permissions', 'Ability to Delete Permissions ..', '2023-06-04 09:37:18', '2023-06-04 09:37:18'),
(31, 'settings-update', 'Update Settings', 'Ability to Update Settings ..', '2023-06-04 09:38:42', '2023-06-04 09:38:42'),
(32, 'settings-read', 'Read Settings', 'Ability to Read Settings..', '2023-06-04 09:39:14', '2023-11-10 13:36:41'),
(33, 'ads-read', 'Read Ads..', 'Ability to Read Ads..', '2023-11-10 09:28:15', '2023-11-10 09:28:16'),
(34, 'ads-update', 'Update Ads', 'Ability to Update Ads..', '2023-11-10 09:29:15', '2023-11-10 09:29:18'),
(35, 'ads-create', 'Create Ads', 'Ability to Create Ads..', '2023-11-10 09:30:15', '2023-11-10 09:30:22'),
(36, 'ads-delete', 'Delete Ads', 'Ability to Delete Ads..', '2023-11-10 09:33:15', '2023-06-04 09:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(9, 1),
(10, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(9, 2),
(10, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(9, 3),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_category_id_foreign` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2023-06-03 16:47:58', '2023-06-03 16:47:58'),
(2, 'administrator', 'المدير', 'Administrator', '2023-06-03 16:48:01', '2023-11-11 15:00:52'),
(3, 'user', 'مستخدم عادي', 'User', '2023-06-03 16:48:02', '2023-11-11 15:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 13, 'App\\Models\\User'),
(3, 2, 'App\\Models\\User'),
(3, 12, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `val` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'string',
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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '0',
  `role` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `whatsapp`, `avatar`, `status`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@wmw.com', NULL, '$2y$10$8ueYFG4IYLFm3L9xzo7zQ.UawN9iWMs71kaBD6RJ3AKxz5alzDtZ6', NULL, '0', NULL, 1, 1, NULL, '2023-06-01 10:03:38', '2023-11-11 16:03:54'),
(2, 'user1', 'user1@test.com', NULL, '$2y$10$LaAsYSVTR/uZdVV1lDoHJu3IQAFjbxby4ixi1Vjk8xVCoB7XqNF6K', '01010', '0', '20230526123415.jpg', 1, 0, NULL, '2023-05-25 20:39:25', '2023-05-26 10:34:15'),
(12, 'hssin bahm', 'test123@test.com', NULL, '$2y$10$geXDTJcnbNCUSl2sXbvTOesTkW/3bvctauYByjBLimuIwU9W4U5cK', '00212600556442', '212600556441', NULL, 1, 0, NULL, '2023-11-03 13:36:17', '2023-11-11 15:56:04'),
(13, 'Admin Man', 'adminman@wmw.com', NULL, '$2y$10$zlufSvNo2Ur8GI9gYtoFXOBitYClZhEesDlbXFu3K3Ae038AFxJxm', NULL, '0', NULL, 1, 0, NULL, '2023-11-10 14:24:44', '2023-11-11 16:03:40');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
