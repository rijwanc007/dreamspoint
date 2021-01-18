-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 12:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreampoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_head_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `sub_head_category`, `sub_category`, `created_at`, `updated_at`) VALUES
(3, 'men', 'All Clothing', 'CASUAL & PARTY WEAR SHIRTS', '2020-12-21 23:56:03', '2020-12-24 05:27:15'),
(4, 'men', 'All Clothing', 'JEANS', '2020-12-21 23:56:24', '2020-12-24 05:27:09'),
(5, 'men', 'All Clothing', 'FORMAL SHIRTS', '2020-12-21 23:56:31', '2020-12-24 05:27:03'),
(6, 'men', 'All Clothing', 'SPORTS WEAR', '2020-12-21 23:56:45', '2020-12-24 05:26:57'),
(7, 'men', 'All Footwear', 'FLATS', '2020-12-21 23:56:51', '2020-12-24 05:26:50'),
(8, 'men', 'All Footwear', 'SLIPPERS & FLIP FLOPS', '2020-12-21 23:57:07', '2020-12-24 05:26:44'),
(9, 'men', 'All Footwear', 'SPORTS SHOES', '2020-12-21 23:57:16', '2020-12-24 05:26:36'),
(10, 'men', 'All Footwear', 'SPORTS SANDLES', '2020-12-21 23:57:24', '2020-12-24 05:26:29'),
(11, 'women', 'All Clothing', 'FORMAL SHIRTS', '2020-12-21 23:59:04', '2020-12-24 05:26:22'),
(12, 'women', 'All Clothing', 'JEANS', '2020-12-21 23:59:10', '2020-12-24 05:26:15'),
(13, 'women', 'All Clothing', 'BAGS', '2020-12-21 23:59:32', '2020-12-24 05:26:10'),
(14, 'kids', 'All Clothing', 'JACKETS', '2020-12-22 00:01:24', '2020-12-24 05:26:05'),
(15, 'kids', 'All Clothing', 'JEANS', '2020-12-22 00:01:28', '2020-12-24 05:26:00'),
(16, 'groceries', 'Groceries', 'CANNED FOOD', '2020-12-22 00:01:47', '2020-12-24 05:25:56'),
(17, 'groceries', 'Fresh Produce', 'FRUITS', '2020-12-22 00:02:03', '2020-12-24 05:25:51'),
(18, 'groceries', 'Fresh Produce', 'VEGETABLES', '2020-12-22 00:02:10', '2020-12-24 05:25:47'),
(19, 'groceries', 'Fish & Meat', 'DRY FISH', '2020-12-22 00:02:19', '2020-12-24 05:25:41'),
(20, 'groceries', 'Fish & Meat', 'MUTTON', '2020-12-22 00:02:35', '2020-12-24 05:25:37'),
(21, 'groceries', 'Fish & Meat', 'CHICKEN', '2020-12-22 00:02:41', '2020-12-24 05:25:33'),
(22, 'accessories', 'Computer Accessories', 'MEMORY', '2020-12-22 00:03:08', '2020-12-24 05:25:28'),
(23, 'accessories', 'Computer Accessories', 'HEADPHONE & EARPHONE', '2020-12-22 00:03:22', '2020-12-24 05:24:25'),
(24, 'accessories', 'Computer Accessories', 'MOUSE & KEYBOARD', '2020-12-22 00:03:40', '2020-12-24 05:24:18'),
(26, 'men', 'All Clothing', 'T-SHIRTS', '2021-01-04 05:10:07', '2021-01-04 05:10:07'),
(27, 'women', 'All Footwear', 'SHOES', '2021-01-06 02:58:04', '2021-01-06 02:58:04'),
(28, 'kids', 'All Clothing', 'SHIRT', '2021-01-06 03:19:14', '2021-01-06 03:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotdeals`
--

CREATE TABLE `hotdeals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotdeals`
--

INSERT INTO `hotdeals` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(5, 'h1', '932220098.png', '2020-12-30 23:23:06', '2020-12-30 23:23:06'),
(6, 'h2', '869753262.png', '2020-12-30 23:23:16', '2020-12-30 23:23:16'),
(7, 'h3', '1708557592.png', '2020-12-30 23:23:28', '2020-12-30 23:23:28'),
(9, 'h4', '93237959.png', '2020-12-30 23:28:24', '2020-12-30 23:28:24'),
(10, 'h5', '1980964459.png', '2020-12-30 23:29:30', '2020-12-30 23:29:30'),
(12, 'h6', '856688777.png', '2020-12-30 23:58:59', '2020-12-30 23:58:59');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_22_045429_create_categories_table', 1),
(5, '2020_12_22_070731_create_products_table', 2),
(7, '2020_12_26_055833_create_reviews_table', 3),
(8, '2020_12_26_065901_create_offers_table', 4),
(9, '2020_12_30_113924_create_subscribers_table', 5),
(10, '2020_12_31_044121_create_hotdeals_table', 6),
(11, '2020_12_31_091121_create_navoffers_table', 7),
(12, '2020_12_31_093859_create_wishlists_table', 8),
(13, '2021_01_17_121002_create_orders_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `navoffers`
--

CREATE TABLE `navoffers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navoffers`
--

INSERT INTO `navoffers` (`id`, `category`, `image`, `created_at`, `updated_at`) VALUES
(2, 'men', '754223681.jpg', '2020-12-31 03:22:11', '2020-12-31 03:22:11'),
(3, 'women', '1992059316.png', '2020-12-31 03:22:41', '2020-12-31 03:22:41'),
(5, 'kids', '1336343805.jpg', '2020-12-31 03:28:45', '2020-12-31 03:28:45'),
(6, 'accessories', '1740234535.png', '2020-12-31 04:10:18', '2020-12-31 04:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `image`, `duration`, `display`, `created_at`, `updated_at`) VALUES
(1, 'Black Friday', '1804779762.jpg', '2021-01-02', 'no', '2020-11-11 04:57:21', '2021-01-06 04:31:56'),
(2, 'New Year Sale', '88650996.jpg', '2021-01-26', 'yes', '2020-12-26 04:12:42', '2021-01-09 06:57:15'),
(5, 'Valentines Day', '1792153236.jpg', '2021-02-28', NULL, '2021-01-06 02:54:47', '2021-01-06 02:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_sub_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `product_qty`, `product_price`, `product_sub_total`, `status`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `created_at`, `updated_at`) VALUES
(1, '[\"Headphone\",\"Pendrive 64 GB\",\"Gaming Mouse\"]', '[\"1\",\"2\",\"2\"]', '[\"2375\",\"522\",\"1620\"]', '6659.00', 'delivered', 'Mehedy Hassan', '01758945236', 'mehedy@gmail.com', 'Bashundhara Dhaka Bangladesh', '2021-01-17 06:37:59', '2021-01-18 00:47:11'),
(10, '[\"Pendrive 64 GB\",\"Gaming Mouse\"]', '[\"2\",\"1\"]', '[\"522\",\"1620\"]', '2664.00', 'pending', 'Rezaul Bari', '01825895727', 'rz@email.com', 'Bashundhara Dhaka Bangladesh', '2021-01-18 01:14:36', '2021-01-18 01:14:36'),
(16, '[\"Blue Jeans\",\"Men Jeans\",\"Ladies Shoes\",\"Ladies Shoes\"]', '[\"2\",\"1\",\"1\",\"1\"]', '[\"1080\",\"799\",\"1080\",\"1080\"]', '5119.00', 'pending', 'rijwan chowdhury', '01825895465', 'rijwanc007@gmail.com', 'sharif complex', '2021-01-18 04:28:21', '2021-01-18 04:28:21'),
(17, '[\"Blue Jeans\",\"Men Jeans\",\"Ladies Shoes\",\"Ladies Shoes\"]', '[\"1\",\"1\",\"1\",\"1\"]', '[\"1080\",\"799\",\"1080\",\"1080\"]', '4039', 'pending', 'rijwan chowdhury', '01825895465', 'rijwanc007@gmail.com', 'sharif complex', '2021-01-18 04:29:52', '2021-01-18 04:29:52'),
(18, '[\"Blue Jeans\",\"Men Jeans\",\"Ladies Shoes\",\"Ladies Shoes\"]', '[\"1\",\"1\",\"1\",\"1\"]', '[\"1080\",\"799\",\"1080\",\"1080\"]', '4039', 'pending', 'rijwan chowdhury', '01825895465', 'rijwanc007@gmail.com', 'sharif complex', '2021-01-18 04:32:12', '2021-01-18 04:32:12'),
(19, '[\"Blue Jeans\",\"Men Jeans\",\"Ladies Shoes\",\"Ladies Shoes\"]', '[\"1\",\"1\",\"1\",\"1\"]', '[\"1080\",\"799\",\"1080\",\"1080\"]', '4039', 'pending', 'rijwan chowdhury', '01825895465', 'rijwanc007@gmail.com', 'sharif complex', '2021-01-18 04:37:19', '2021-01-18 04:37:19'),
(20, '[\"Blue Jeans\",\"Kids Shirt\",\"Kids Jacket\",\"Kid Dress\",\"Women Jeans\",\"Men Sport Boot\"]', '[\"2\",\"2\",\"2\",\"1\",\"1\",\"2\"]', '[\"1080\",\"475\",\"1665\",\"810\",\"1140\",\"1620\"]', '10010.00', 'pending', 'rijwan chowdhury', '01825895465', 'rijwanc007@gmail.com', 'sharif complex', '2021-01-18 04:48:32', '2021-01-18 04:48:32'),
(21, '[\"Men Sport Boot\"]', '[\"2\"]', '[\"1620\"]', '3240', 'pending', 'rijwan chowdhury', '01825895465', 'rijwanc007@gmail.com', 'sharif complex', '2021-01-18 04:53:10', '2021-01-18 04:53:10');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `category`, `sub_category`, `image`, `title`, `description`, `pf`, `offer`, `prev_price`, `new_price`, `discount`, `created_at`, `updated_at`) VALUES
(46, 'j1', 'men', 'JEANS', '1822256286.jpg', 'Men Jeans', 'Men Jeans', NULL, NULL, '850', '799', '6', '2021-01-04 04:10:34', '2021-01-04 04:10:34'),
(47, 'j2', 'men', 'JEANS', '2110648938.jpg', 'Blue Jeans', 'Blue Jeans', NULL, NULL, '1200', '1080', '10', '2021-01-04 04:12:18', '2021-01-04 04:12:18'),
(48, 's1', 'men', 'SPORTS SHOES', '540433200.jpg', 'Men Sport Keds', 'Men Sport Keds', 'featured', '2', '1500', '1425', '5', '2021-01-04 04:13:14', '2021-01-04 04:13:14'),
(49, 's2', 'men', 'SPORTS SHOES', '1985158377.jpg', 'Men Sport Boot', 'Men Sport Boot', 'featured', '2', '1800', '1620', '10', '2021-01-04 04:13:53', '2021-01-04 04:13:53'),
(50, 'wj1', 'women', 'JEANS', '1351292654.jpg', 'Women Jeans', 'Women Jeans', 'new', NULL, '1200', '1140', '5', '2021-01-04 04:14:36', '2021-01-04 04:14:36'),
(51, 'wj3', 'women', 'JEANS', '1804153104.jpg', 'Women Jeans', 'Women Jeans', 'best', NULL, '1650', '1485', '10', '2021-01-04 04:19:15', '2021-01-04 04:19:15'),
(52, 'h1', 'accessories', 'HEADPHONE & EARPHONE', '340156565.jpg', 'Head Phone', 'Head Phone', NULL, NULL, '1800', '1620', '10', '2021-01-04 04:19:42', '2021-01-04 04:19:42'),
(53, 'p1', 'groceries', 'VEGETABLES', '976850997.jpg', 'Spinach', 'Spinach', NULL, NULL, NULL, '55', NULL, '2021-01-04 04:20:11', '2021-01-04 04:20:11'),
(54, 'k2', 'groceries', 'FRUITS', '1052580754.jpg', 'kiwi', 'Kiwi', NULL, NULL, NULL, '250', NULL, '2021-01-04 04:20:42', '2021-01-04 04:20:42'),
(56, 'ts1', 'men', 'T-SHIRTS', '1004516321.jpg', 'Men T-shirt', 'Men T-shirts', 'new', NULL, NULL, '250', NULL, '2021-01-04 05:10:50', '2021-01-04 05:10:50'),
(57, 'apple1', 'groceries', 'FRUITS', '1213823023.jpg', 'Red Apple', NULL, NULL, '1', '250', '225', '10', '2021-01-04 22:16:40', '2021-01-04 22:16:40'),
(58, 'he1', 'accessories', 'HEADPHONE & EARPHONE', '448645964.jpg', 'Blue Head Phones', NULL, 'featured', '1', '1500', '1350', '10', '2021-01-04 22:24:51', '2021-01-06 02:31:16'),
(59, 'kj43', 'kids', 'JACKETS', '178665057.jpg', 'Kids Jacket', NULL, 'featured', '2', '1850', '1665', '10', '2021-01-04 22:25:39', '2021-01-04 22:25:39'),
(60, 'gm2', 'accessories', 'MOUSE & KEYBOARD', '287480117.jpg', 'Gaming Mouse', NULL, 'featured', '2', '1800', '1620', '10', '2021-01-04 22:26:44', '2021-01-04 22:26:44'),
(61, 'bbg', 'women', 'BAGS', '651719284.jpg', 'Blue Bag', NULL, 'featured', '2', '2500', '2250', '10', '2021-01-04 22:27:34', '2021-01-04 22:27:34'),
(62, 'rbbg', 'women', 'BAGS', '493121705.jpg', 'Red Velvet Bag', NULL, 'new', '2', '2850', '2565', '10', '2021-01-04 22:28:10', '2021-01-04 22:28:10'),
(63, 'hp5', 'accessories', 'HEADPHONE & EARPHONE', '2011290828.jpg', 'Head Phone', NULL, 'featured', '1', '2500', '2250', '10', '2021-01-04 22:30:32', '2021-01-04 22:30:32'),
(64, 'pp', 'accessories', 'MEMORY', '1912387944.jpg', 'Pendrive 64 GB', NULL, 'featured', '2', '580', '522', '10', '2021-01-04 22:31:36', '2021-01-04 22:55:08'),
(66, 'pendrive', 'accessories', 'MEMORY', '808090531.jpg', 'Pendrive Sandisk', NULL, 'featured', NULL, NULL, '300', NULL, '2021-01-04 22:54:40', '2021-01-04 22:55:34'),
(67, 'htr5', 'accessories', 'HEADPHONE & EARPHONE', '2004223717.jpg', 'Headphone', NULL, 'new', '5', '2500', '2375', '5', '2021-01-06 02:57:12', '2021-01-06 02:57:12'),
(68, 'hfre5', 'accessories', 'HEADPHONE & EARPHONE', '1170131893.jpg', 'HeadPhone', NULL, NULL, '5', '2500', '2375', '5', '2021-01-06 02:57:39', '2021-01-06 02:57:39'),
(69, 'ls4', 'women', 'SHOES', '1493643966.jpg', 'Ladies Shoes', NULL, 'new', '5', '1200', '1080', '10', '2021-01-06 02:58:33', '2021-01-06 02:58:33'),
(70, 'ls56', 'women', 'SHOES', '1304377340.jpg', 'Ladies Shoes', NULL, 'new', '5', '1200', '1080', '10', '2021-01-06 02:59:01', '2021-01-06 02:59:01'),
(71, 'ls89', 'women', 'SHOES', '1909920546.jpg', 'Ladies Shoes', NULL, 'best', '5', '1200', '1080', '10', '2021-01-06 02:59:29', '2021-01-06 02:59:29'),
(72, 'kids3', 'kids', 'SHIRT', '489608955.jpg', 'Kids Shirt', NULL, 'new', '1', '500', '475', '5', '2021-01-06 03:19:42', '2021-01-06 03:19:42'),
(73, 'kids6', 'kids', 'SHIRT', '1812285799.jpeg', 'Kid Dress', NULL, NULL, '1', '900', '810', '10', '2021-01-06 03:20:21', '2021-01-06 03:20:21'),
(74, 'kids8', 'kids', 'SHIRT', '1767893698.jpg', 'Girls Dress', NULL, NULL, '1', '1500', '1425', '5', '2021-01-06 03:20:59', '2021-01-06 03:20:59'),
(75, 'kis9', 'kids', 'SHIRT', '557841001.jpg', 'Girls Dress', NULL, NULL, '1', '1500', '1350', '10', '2021-01-06 03:23:11', '2021-01-06 03:23:24'),
(76, 'ws3', 'women', 'FORMAL SHIRTS', '1353414100.jpg', 'Women Formal Shirt', NULL, NULL, '5', '850', '765', '10', '2021-01-06 03:24:00', '2021-01-06 03:24:00'),
(77, 'wshio90', 'women', 'FORMAL SHIRTS', '942620142.jpg', 'Women Formal Shirt', NULL, 'best', '5', '1500', '1350', '10', '2021-01-06 03:24:33', '2021-01-06 03:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `image`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Rezaul Bari', '964436928.png', 'rz@email.com', 'Dream point is like dream comes true. Their product is as good as they show.', 'approved', '2020-12-26 00:57:24', '2021-01-06 22:44:38'),
(6, 'Maria Mustafa', '39648694.png', 'maria@gmail.com', 'The Sop has exclusive Collection. I love their product and service.\r\nHope they add more interesting Product.', 'approved', '2021-01-05 23:57:19', '2021-01-06 22:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mehedy@gmail.com', '2020-12-30 05:48:58', '2020-12-30 05:48:58'),
(3, 'mahfuz@gmail.com', '2021-01-04 05:13:23', '2021-01-04 05:13:23'),
(4, 'rijwanc007@gmail.com', '2021-01-06 22:45:15', '2021-01-06 22:45:15'),
(5, 'uniliver@mail.com', '2021-01-09 06:08:27', '2021-01-09 06:08:27');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rijwan Chowdhury', 'rijwanc007@gmail.com', NULL, '$2y$10$GmEJlswadjOEsJ.n.lXINem9Hrzoh55d78QAIoKg6592wWpUPI80O', NULL, '2020-12-30 06:05:03', '2020-12-30 06:05:03'),
(3, 'Mehedy Hassan', 'mehedy@gmail.com', NULL, '$2y$10$IKeZaf4lq53AHa9LhUBdaeZYNnNW524SSBqafIf.1wBYsLuWBVNC2', NULL, '2020-12-30 06:07:55', '2020-12-30 06:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liked` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `ip`, `product_id`, `liked`, `created_at`, `updated_at`) VALUES
(25, '127.0.0.1', '63', 'yes', '2021-01-04 23:47:20', '2021-01-04 23:47:20'),
(42, '127.0.0.1', '61', 'yes', '2021-01-09 04:16:06', '2021-01-09 04:16:06'),
(43, '127.0.0.1', '50', 'yes', '2021-01-09 04:26:59', '2021-01-09 04:26:59'),
(52, '127.0.0.1', '75', 'yes', '2021-01-09 04:27:59', '2021-01-09 04:27:59'),
(53, '127.0.0.1', '74', 'yes', '2021-01-09 04:28:08', '2021-01-09 04:28:08'),
(59, '127.0.0.1', '70', 'yes', '2021-01-09 06:39:16', '2021-01-09 06:39:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotdeals`
--
ALTER TABLE `hotdeals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navoffers`
--
ALTER TABLE `navoffers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotdeals`
--
ALTER TABLE `hotdeals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `navoffers`
--
ALTER TABLE `navoffers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
