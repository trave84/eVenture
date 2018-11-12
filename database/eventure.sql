-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2018 at 02:35 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(127) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'mood', 1, NULL, NULL),
(2, 'energy', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_venue`
--

CREATE TABLE `attribute_venue` (
  `id` int(10) UNSIGNED NOT NULL,
  `venue_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `owner_value` int(11) NOT NULL,
  `review_value` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_venue`
--

INSERT INTO `attribute_venue` (`id`, `venue_id`, `attribute_id`, `owner_value`, `review_value`) VALUES
(1, 1, 1, 7, '6.5'),
(2, 1, 2, 3, '2.5');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Attributes', NULL, NULL),
(2, 'Venue Type', NULL, NULL),
(3, 'Night Type', NULL, NULL),
(4, 'Features', NULL, NULL),
(5, 'Location', NULL, NULL),
(6, 'Openings', NULL, NULL),
(7, 'Closings', NULL, NULL),
(8, 'Budget', NULL, NULL),
(9, 'Music Type', NULL, NULL),
(10, 'Cuisine', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_tag`
--

CREATE TABLE `category_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Beer Pong', NULL, NULL),
(2, 'Bowling', NULL, NULL),
(3, 'Burlesque', NULL, NULL),
(4, 'Cabaret', NULL, NULL),
(5, 'Casino', NULL, NULL),
(6, 'Comedy', NULL, NULL),
(7, 'Drink tasting', NULL, NULL),
(8, 'Karaoke', NULL, NULL),
(9, 'Live music', NULL, NULL),
(10, 'Ping Pong', NULL, NULL),
(11, 'Pool', NULL, NULL),
(12, 'Table football', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groceries`
--

CREATE TABLE `groceries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_10_22_133304_create_venues_table', 1),
(13, '2018_10_22_135152_create_features_table', 1),
(16, '2018_10_22_142924_create_attributes_table', 1),
(18, '2018_10_24_191421_add_music_type_column_to_venues_table', 2),
(19, '2018_10_25_212716_create_reviews_table', 3),
(20, '2018_10_25_215542_add_user_id_to_reviews_table', 4),
(21, '2018_10_27_105341_add_title_col_to_reviews_table', 5),
(22, '2018_10_27_105936_add_body_mood_energy_cols_to_reviews_table', 6),
(23, '2018_10_27_161749_create_attribute_venue_table', 7),
(25, '2018_10_30_144156_create_tag_venue_table', 8),
(26, '2018_10_30_144613_create_tags_table', 9),
(27, '2018_10_31_123007_create_categories_table', 10),
(28, '2018_11_03_202258_add_owner_value_and_review_value_to_attribute_venue_table', 11),
(29, '2018_11_04_011836_create_groceries_table', 12);

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mood` int(11) NOT NULL,
  `energy` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `body`, `mood`, `energy`, `created_at`, `updated_at`, `user_id`) VALUES
(3, 'Title no1', 'Body no1', 4, 8, '2018-10-25 08:24:23', '2018-10-26 05:20:21', 1),
(4, 'Title no2', 'Body no2', 3, 6, '2018-10-24 05:21:21', '2018-10-25 05:15:15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Bar Crawl', '2', NULL, NULL),
(2, 'Brewery', '2', NULL, NULL),
(3, 'Cocktail Bar', '2', NULL, NULL),
(4, 'Gastro Pub ', '2', NULL, NULL),
(5, 'Lounge Bar', '2', NULL, NULL),
(6, 'Night Club', '2', NULL, NULL),
(7, 'Party Bar', '2', NULL, NULL),
(8, 'Restuarant', '2', NULL, NULL),
(9, 'Restaurant Bar', '2', NULL, NULL),
(10, 'Sisha Bar', '2', NULL, NULL),
(11, 'Wine Bar', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag_venue`
--

CREATE TABLE `tag_venue` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `venue_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Item 1', '1.jpg', 3500.00),
(2, 'Item 2', '2.jpg', 4600.00),
(3, 'Item 3', '3.jpg', 4000.00),
(4, 'Item 4', '4.jpg', 13000.00),
(5, 'Item 5', '5.jpg', 4000.00),
(6, 'Item 6', '6.jpg', 16000.00),
(7, 'Item 7', '7.jpg', 2700.00),
(8, 'Item 8', '8.jpg', 5000.00),
(9, 'Item 9', '9.jpg', 7000.00),
(10, 'Item 10', '10.jpg', 9000.00),
(11, 'Item 11', '11.jpg', 8000.00),
(12, 'Item 12', '12.jpg', 15000.00),
(13, 'Item 13', '13.jpg', 11000.00),
(14, 'Item 14', '14.jpg', 6000.00),
(15, 'Item 15', '15.jpg', 7200.00),
(16, 'Item 16', '16.jpg', 6600.00),
(17, 'Item 17', '17.jpg', 8000.00),
(18, 'Item 18', '18.jpg', 4500.00),
(19, 'Item 19', '19.jpg', 10500.00),
(20, 'Item 20', '20.jpg', 9200.00),
(21, 'Item 21', '21.jpg', 7400.00),
(22, 'Item 22', '22.jpg', 5600.00),
(23, 'Item 23', '23.jpg', 4000.00),
(24, 'Item 24', '24.jpg', 5000.00),
(25, 'Item 25', '25.jpg', 8900.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arpad', 'a.kajari@yahoo.com', NULL, '$2y$10$ad3HprspOywhxDkzwmrE8OE34IG1kqT9SZInm4eU.tYyhIuUtCjWa', NULL, '2018-10-24 12:56:37', '2018-10-24 12:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `night_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `closing_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuisine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `music_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `location`, `description`, `venue_type`, `night_type`, `budget`, `opening_time`, `closing_time`, `cuisine`, `link`, `banner_img`, `created_at`, `updated_at`, `music_type`) VALUES
(1, 'The First Bar', 'Praha 2', '', 'Cocktail Bar', 'Chill with mates', 'Mid-range', '12:00', '02:00', 'Spanish tapas', 'www.thefirstbar.cz', '', NULL, '2018-10-24 20:01:51', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_venue`
--
ALTER TABLE `attribute_venue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_venue_venue_id_foreign` (`venue_id`),
  ADD KEY `attribute_venue_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_tag`
--
ALTER TABLE `category_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groceries`
--
ALTER TABLE `groceries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_venue`
--
ALTER TABLE `tag_venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attribute_venue`
--
ALTER TABLE `attribute_venue`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_tag`
--
ALTER TABLE `category_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groceries`
--
ALTER TABLE `groceries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tag_venue`
--
ALTER TABLE `tag_venue`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_venue`
--
ALTER TABLE `attribute_venue`
  ADD CONSTRAINT `attribute_venue_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`),
  ADD CONSTRAINT `attribute_venue_venue_id_foreign` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
