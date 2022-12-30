-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 01:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eji_laravel9`
--

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(27, '2022_11_29_045146_create_theme_categories_table', 2),
(28, '2022_11_29_111515_create_theme_products_table', 2),
(29, '2022_11_30_032828_create_theme_configs_table', 2),
(30, '2022_12_02_163822_create_theme_category_translations_table', 2),
(31, '2022_11_27_152649_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `theme_blogs`
--

CREATE TABLE `theme_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_canonical` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_blogs`
--

INSERT INTO `theme_blogs` (`id`, `status`, `thumbnail`, `seo_title`, `seo_description`, `seo_keyword`, `seo_canonical`, `created_at`, `updated_at`) VALUES
(1, 1, '/upload/images/images/banner/slide-down-1.jpg', 'Bộ đồ', 'Bộ đồ', 'Bộ đồ', 'Bộ đồ', '2022-12-02 09:59:57', '2022-12-07 20:17:54'),
(3, 1, '/upload/images/images/banner/slide-down-1.jpg', 'Áo', 'Áo', 'Áo', 'Áo', '2022-12-07 01:09:45', '2022-12-07 20:17:52'),
(4, 1, '/upload/images/images/banner/slide-down-1.jpg', 'Váy', 'Váy', 'Váy', 'Váy', '2022-12-07 19:38:19', '2022-12-07 20:17:50'),
(6, 1, '/upload/images/images/banner/slide-down-1.jpg', 'Giá tốt', 'Giá tốt', 'Giá tốt', 'Giá tốt', '2022-12-07 20:02:26', '2022-12-07 20:13:04'),
(97, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(98, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(99, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(100, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(101, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(102, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(103, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(104, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(105, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(106, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(107, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(108, 1, '/upload/images/images/demo/1.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(109, 1, '/upload/images/images/demo/1.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(110, 1, '/upload/images/images/demo/5.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(111, 1, '/upload/images/images/demo/3.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(112, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(113, 1, '/upload/images/images/demo/3.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(114, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(115, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(116, 1, '/upload/images/images/demo/4.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(117, 1, '/upload/images/images/demo/3.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(118, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(119, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(120, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(121, 1, '/upload/images/images/demo/4.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(122, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(123, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(124, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(125, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(126, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(127, 1, '/upload/images/images/demo/2.jpeg', 'ád', 'dá', 'ád', 'ádá', '2022-12-13 08:48:25', '2022-12-13 08:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `theme_blog_translations`
--

CREATE TABLE `theme_blog_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_blog_id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_blog_translations`
--

INSERT INTO `theme_blog_translations` (`id`, `theme_blog_id`, `language`, `name`, `subname`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'vi', 'Bộ đồ', 'Bộ đồ', '<p>Bộ đồ</p>', '2022-12-08 01:16:21', '2022-12-08 01:16:21'),
(2, 3, 'vi', 'Áo', 'Áo', '<p>&Aacute;o</p>', '2022-12-08 01:16:31', '2022-12-08 01:16:31'),
(3, 4, 'vi', 'Váy', 'Váy', '<p>V&aacute;y</p>', '2022-12-08 01:16:40', '2022-12-08 01:16:40'),
(4, 6, 'vi', 'Giá tốt', 'Giá tốt', '<p>Gi&aacute; tốt</p>', '2022-12-08 01:16:47', '2022-12-08 01:16:47'),
(65, 106, 'vi', 'Ullam dolorem mollitia.', 'At molestiae dolore quaerat id et dolores magnam dolorum aut sit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(66, 121, 'vi', 'Sint iusto nobis.', 'Laboriosam nulla quia et sunt doloribus aut quia eum repudiandae odit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(67, 121, 'vi', 'Exercitationem laboriosam corporis.', 'Voluptatem temporibus aperiam culpa ut quia repellat aut sed hic delectus rerum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(68, 102, 'vi', 'Minus ea.', 'Est error quam dolorem est et ipsum tempora minus aut quia expedita rerum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(69, 105, 'vi', 'Consequuntur quia nam.', 'Voluptatibus voluptatibus quis neque et quod quia natus adipisci et itaque rerum nemo.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(70, 113, 'vi', 'Et consequatur.', 'Quas tenetur corporis sit delectus expedita enim sit molestiae voluptas.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(71, 99, 'vi', 'Ut explicabo.', 'Et numquam molestiae voluptas autem eius odio nisi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(72, 105, 'vi', 'Debitis aperiam.', 'Illum possimus magnam molestias est cumque sunt voluptatem et culpa ab facere qui eius.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(73, 101, 'vi', 'Sunt illo.', 'Vero sunt officia temporibus totam aut quia aspernatur amet.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(74, 123, 'vi', 'Sunt nihil est.', 'Assumenda est provident vel nostrum fuga sequi molestiae nesciunt odit dolorum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(75, 113, 'vi', 'Beatae eos.', 'Eos consectetur sit temporibus nihil reiciendis perferendis odit ab repellat quam est repudiandae.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(76, 119, 'vi', 'Voluptate laudantium ut.', 'Tempore excepturi possimus minima voluptatem et id maiores.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(77, 97, 'vi', 'Ut quibusdam sed.11', 'Qui sunt atque asperiores necessitatibus voluptas voluptatem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-11 03:44:08'),
(78, 105, 'vi', 'Quo aspernatur vel.', 'Eum aperiam error facilis ipsum ad culpa doloribus laborum et possimus eveniet.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(79, 105, 'vi', 'Ipsum quia.', 'Quibusdam atque voluptate veritatis qui unde facilis saepe.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(80, 120, 'vi', 'Repellendus eum.', 'Ad sit quas quo ab quia error delectus reiciendis atque deleniti eaque.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(81, 108, 'vi', 'Repudiandae quis.', 'Saepe saepe reprehenderit repellendus sed error pariatur nisi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(82, 126, 'vi', 'Quia sunt.', 'Fugiat ut illum modi et et quasi qui atque ut.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(83, 98, 'vi', 'Quibusdam deleniti.', 'Laboriosam labore qui alias in quidem voluptatum excepturi praesentium ratione praesentium ab voluptatem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(84, 103, 'vi', 'Iste officia aut.', 'Temporibus illo quis ratione itaque dolore maxime voluptatum laborum quia sint sit unde.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(85, 117, 'vi', 'Qui nostrum incidunt.', 'Rerum amet quo temporibus et ipsum dolores commodi autem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(86, 118, 'vi', 'Nihil veritatis voluptatibus.', 'Ab fugiat quam eum fuga fugiat illum in aut animi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(87, 108, 'vi', 'Facilis ullam iure.', 'Provident voluptatem minus dolorem unde et vel distinctio tenetur temporibus inventore omnis provident eaque.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(88, 113, 'vi', 'Nulla dolorum.', 'Harum nihil nemo velit quibusdam commodi officiis velit doloribus quo tempore ipsum dolor.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(89, 123, 'vi', 'Amet distinctio sed.', 'Expedita eius esse consequatur et ea ab incidunt sit sunt et.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(90, 97, 'vi', 'Iste illum.', 'Dolor iste consequatur ut cum molestiae nihil sequi qui dolor suscipit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(91, 105, 'vi', 'Nobis praesentium eligendi.', 'Eligendi quaerat voluptatem sed officia veritatis enim minima sit possimus est.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(92, 112, 'vi', 'Id et.', 'Temporibus dolores qui reiciendis et excepturi nulla accusantium enim et ratione molestias earum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(93, 97, 'vi', 'Qui itaque praesentium.', 'Fugit ipsa consequuntur labore et esse est quibusdam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(94, 122, 'vi', 'Esse eligendi.', 'Perferendis natus consequatur quidem qui quasi officia ullam accusantium quia.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(95, 99, 'vi', 'Ut exercitationem.', 'Inventore id ut magni doloremque nobis pariatur provident quam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(96, 104, 'vi', 'Nulla et.', 'Doloribus nam sunt nam rerum cum autem omnis quia veniam quam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(97, 124, 'vi', 'Minima quia rerum.', 'Et et eius illo amet impedit magni veritatis aut ea sit laboriosam tempora animi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(98, 120, 'vi', 'Possimus non ut.', 'Eum est et ab corporis velit aspernatur est maiores vitae in qui facilis.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(99, 126, 'vi', 'Natus quam.', 'Odit deleniti in animi omnis eum debitis voluptas maiores voluptates.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(100, 121, 'vi', 'Repudiandae nulla.', 'Commodi omnis sed dolor non aut id.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(101, 106, 'vi', 'Non quia unde.', 'Voluptas consequuntur repellat dicta officiis id accusamus a aliquam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(102, 102, 'vi', 'Aut vero.', 'Corrupti fuga perspiciatis sunt at rem delectus laborum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(103, 116, 'vi', 'Officia sit illo.', 'Magni repellat vitae minus voluptatem error est nam corporis est rerum et vitae.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(104, 105, 'vi', 'Velit maiores voluptatem.', 'Atque excepturi est saepe dolorem iste doloribus sint distinctio odio aliquam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(105, 104, 'vi', 'Neque nulla vero.', 'Ut officia in at animi perferendis sunt corporis pariatur quidem voluptatem qui velit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(106, 123, 'vi', 'Hic maiores dolores.', 'Sunt minima officia aperiam et non est ducimus a ipsum ea qui dolorem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(107, 126, 'vi', 'Nostrum at quaerat.', 'Ut omnis optio quidem et est esse quia.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(108, 107, 'vi', 'Id aperiam maiores.', 'Molestiae itaque alias est alias perspiciatis est.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(109, 99, 'vi', 'Et sed voluptatem.', 'Necessitatibus voluptatem harum magnam dicta est et aut optio reprehenderit ut libero eos excepturi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(110, 105, 'vi', 'Dolor dolores.', 'Iusto tempore et sit quis quaerat et delectus minima.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(111, 120, 'vi', 'Vero molestias mollitia.', 'Porro ullam quia corporis voluptates aut autem accusantium esse voluptas sit voluptatibus ullam numquam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(112, 103, 'vi', 'Aut explicabo.', 'Dolorem qui et voluptatum commodi natus reiciendis.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(113, 103, 'vi', 'Ratione sed sint.', 'Sequi molestiae odit consequatur at provident beatae ducimus.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(114, 97, 'vi', 'Et in qui.', 'Id expedita at sint nihil libero esse in voluptatem dolorum doloribus vero dolor.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(115, 126, 'vi', 'Odit quisquam nihil.', 'Maxime blanditiis at rerum qui voluptatem sed rerum molestias rerum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(116, 115, 'vi', 'Aliquid odit sint.', 'In est sunt et neque aperiam quis pariatur ut voluptas.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(117, 119, 'vi', 'Vel aut.', 'Cupiditate nam quo ipsum dolore non quia.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(118, 109, 'vi', 'Accusantium non ipsa.', 'Non tenetur fugit ullam fuga esse culpa veniam eum unde sit in est.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(119, 100, 'vi', 'Alias quas ut.', 'Rerum qui qui vitae illum quae voluptatem consequatur.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(120, 121, 'vi', 'Ut qui.', 'Saepe possimus nulla nulla est aut fugit quibusdam minima cum veritatis et at qui.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(121, 109, 'vi', 'Et similique.', 'Molestias veritatis qui consequuntur minima nihil impedit aut reprehenderit quisquam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(122, 101, 'vi', 'Amet pariatur.', 'Libero alias et beatae rerum non doloribus nam dolorum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(123, 112, 'vi', 'Tenetur ut amet.', 'Dolore pariatur minus in sed et est consectetur ut dignissimos ut labore exercitationem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(124, 116, 'vi', 'Id sequi assumenda.', 'Eligendi incidunt nulla consequatur dolores atque et temporibus laborum quae sint voluptatem sunt porro.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(125, 125, 'vi', 'Minima quia rerum.', 'Minima quia rerum.', '<p>Minima quia rerum.</p>', '2022-12-08 01:18:46', '2022-12-08 01:18:46'),
(126, 110, 'vi', 'Minima quia rerum.', 'Minima quia rerum.', '<p>Minima quia rerum.</p>', '2022-12-08 01:18:56', '2022-12-08 01:18:56'),
(127, 111, 'vi', 'Minima quia rerum.', 'Minima quia rerum.', '<p>Minima quia rerum.</p>', '2022-12-08 01:19:06', '2022-12-08 01:19:06'),
(128, 114, 'vi', 'Minima quia rerum.', 'Minima quia rerum.', '<p>Minima quia rerum.</p>', '2022-12-08 01:19:17', '2022-12-08 01:19:17'),
(129, 127, 'vi', 'ád1', 'ádas', '<p>đ&aacute;đ&acirc;sd</p>', '2022-12-13 08:48:25', '2022-12-13 08:49:32'),
(130, 127, 'en', '11', '1', '<p>1</p>', '2022-12-13 08:49:47', '2022-12-13 08:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `theme_categories`
--

CREATE TABLE `theme_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_canonical` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_categories`
--

INSERT INTO `theme_categories` (`id`, `parent_id`, `status`, `thumbnail`, `seo_title`, `seo_description`, `seo_keyword`, `seo_canonical`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, '/upload/images/images/banner/slide-down-1.jpg', 'Bộ đồ', 'Bộ đồ', 'Bộ đồ', 'Bộ đồ', '2022-12-02 09:59:57', '2022-12-07 20:17:54'),
(3, NULL, 1, '/upload/images/images/banner/slide-down-1.jpg', 'Áo', 'Áo', 'Áo', 'Áo', '2022-12-07 01:09:45', '2022-12-07 20:17:52'),
(4, NULL, 1, '/upload/images/images/banner/slide-down-1.jpg', 'Váy', 'Váy', 'Váy', 'Váy', '2022-12-07 19:38:19', '2022-12-07 20:17:50'),
(6, NULL, 1, '/upload/images/images/banner/slide-down-1.jpg', 'Giá tốt', 'Giá tốt', 'Giá tốt', 'Giá tốt', '2022-12-07 20:02:26', '2022-12-07 20:13:04'),
(97, 3, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-13 08:46:02'),
(98, 4, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-13 08:45:56'),
(99, 1, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(100, 6, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(101, 3, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(102, 4, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(103, 6, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(104, 3, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(105, 6, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(106, 4, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(107, 6, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(108, 4, 1, '/upload/images/images/demo/1.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(109, 1, 1, '/upload/images/images/demo/1.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(110, 3, 1, '/upload/images/images/demo/5.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(111, 3, 1, '/upload/images/images/demo/3.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(112, 6, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(113, 4, 1, '/upload/images/images/demo/3.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(114, 6, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(115, 6, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(116, 3, 1, '/upload/images/images/demo/4.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(117, 1, 1, '/upload/images/images/demo/3.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(118, 6, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(119, 6, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(120, 4, 1, '/upload/images/images/demo/2.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(121, 4, 1, '/upload/images/images/demo/4.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(122, 6, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(123, 4, 1, '/upload/images/images/demo/7.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(124, 3, 1, '/upload/images/images/demo/6.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(125, 6, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(126, 3, 1, '/upload/images/images/demo/8.jpeg', '#', '#', '#', '#', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(127, NULL, 1, '/upload/images/images/demo/1.jpeg', 'asd', 'asdasdasd', 'asdasd', 'dasdas', '2022-12-24 08:49:10', '2022-12-24 08:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `theme_category_translations`
--

CREATE TABLE `theme_category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_category_id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_category_translations`
--

INSERT INTO `theme_category_translations` (`id`, `theme_category_id`, `language`, `name`, `subname`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'vi', 'Bộ đồ', 'Bộ đồ', '<p>Bộ đồ</p>', '2022-12-08 01:16:21', '2022-12-08 01:16:21'),
(2, 3, 'vi', 'Áo', 'Áo', '<p>&Aacute;o</p>', '2022-12-08 01:16:31', '2022-12-08 01:16:31'),
(3, 4, 'vi', 'Váy', 'Váy', '<p>V&aacute;y</p>', '2022-12-08 01:16:40', '2022-12-08 01:16:40'),
(4, 6, 'vi', 'Giá tốt', 'Giá tốt', '<p>Gi&aacute; tốt</p>', '2022-12-08 01:16:47', '2022-12-08 01:16:47'),
(65, 106, 'vi', 'Ullam dolorem mollitia.', 'At molestiae dolore quaerat id et dolores magnam dolorum aut sit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(66, 121, 'vi', 'Sint iusto nobis.', 'Laboriosam nulla quia et sunt doloribus aut quia eum repudiandae odit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(67, 121, 'vi', 'Exercitationem laboriosam corporis.', 'Voluptatem temporibus aperiam culpa ut quia repellat aut sed hic delectus rerum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(68, 102, 'vi', 'Minus ea.', 'Est error quam dolorem est et ipsum tempora minus aut quia expedita rerum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(69, 105, 'vi', 'Consequuntur quia nam.', 'Voluptatibus voluptatibus quis neque et quod quia natus adipisci et itaque rerum nemo.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(70, 113, 'vi', 'Et consequatur.', 'Quas tenetur corporis sit delectus expedita enim sit molestiae voluptas.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(71, 99, 'vi', 'Ut explicabo.', 'Et numquam molestiae voluptas autem eius odio nisi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(72, 105, 'vi', 'Debitis aperiam.', 'Illum possimus magnam molestias est cumque sunt voluptatem et culpa ab facere qui eius.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(73, 101, 'vi', 'Sunt illo.', 'Vero sunt officia temporibus totam aut quia aspernatur amet.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(74, 123, 'vi', 'Sunt nihil est.', 'Assumenda est provident vel nostrum fuga sequi molestiae nesciunt odit dolorum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(75, 113, 'vi', 'Beatae eos.', 'Eos consectetur sit temporibus nihil reiciendis perferendis odit ab repellat quam est repudiandae.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(76, 119, 'vi', 'Voluptate laudantium ut.', 'Tempore excepturi possimus minima voluptatem et id maiores.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(77, 97, 'vi', 'Ut quibusdam sed.11', 'Qui sunt atque asperiores necessitatibus voluptas voluptatem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-11 03:44:08'),
(78, 105, 'vi', 'Quo aspernatur vel.', 'Eum aperiam error facilis ipsum ad culpa doloribus laborum et possimus eveniet.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(79, 105, 'vi', 'Ipsum quia.', 'Quibusdam atque voluptate veritatis qui unde facilis saepe.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(80, 120, 'vi', 'Repellendus eum.', 'Ad sit quas quo ab quia error delectus reiciendis atque deleniti eaque.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(81, 108, 'vi', 'Repudiandae quis.', 'Saepe saepe reprehenderit repellendus sed error pariatur nisi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(82, 126, 'vi', 'Quia sunt.', 'Fugiat ut illum modi et et quasi qui atque ut.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(83, 98, 'vi', 'Quibusdam deleniti.', 'Laboriosam labore qui alias in quidem voluptatum excepturi praesentium ratione praesentium ab voluptatem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(84, 103, 'vi', 'Iste officia aut.', 'Temporibus illo quis ratione itaque dolore maxime voluptatum laborum quia sint sit unde.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(85, 117, 'vi', 'Qui nostrum incidunt.', 'Rerum amet quo temporibus et ipsum dolores commodi autem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(86, 118, 'vi', 'Nihil veritatis voluptatibus.', 'Ab fugiat quam eum fuga fugiat illum in aut animi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(87, 108, 'vi', 'Facilis ullam iure.', 'Provident voluptatem minus dolorem unde et vel distinctio tenetur temporibus inventore omnis provident eaque.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(88, 113, 'vi', 'Nulla dolorum.', 'Harum nihil nemo velit quibusdam commodi officiis velit doloribus quo tempore ipsum dolor.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(89, 123, 'vi', 'Amet distinctio sed.', 'Expedita eius esse consequatur et ea ab incidunt sit sunt et.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(90, 97, 'vi', 'Iste illum.', 'Dolor iste consequatur ut cum molestiae nihil sequi qui dolor suscipit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(91, 105, 'vi', 'Nobis praesentium eligendi.', 'Eligendi quaerat voluptatem sed officia veritatis enim minima sit possimus est.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(92, 112, 'vi', 'Id et.', 'Temporibus dolores qui reiciendis et excepturi nulla accusantium enim et ratione molestias earum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(93, 97, 'vi', 'Qui itaque praesentium.', 'Fugit ipsa consequuntur labore et esse est quibusdam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(94, 122, 'vi', 'Esse eligendi.', 'Perferendis natus consequatur quidem qui quasi officia ullam accusantium quia.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(95, 99, 'vi', 'Ut exercitationem.', 'Inventore id ut magni doloremque nobis pariatur provident quam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(96, 104, 'vi', 'Nulla et.', 'Doloribus nam sunt nam rerum cum autem omnis quia veniam quam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(97, 124, 'vi', 'Minima quia rerum.', 'Et et eius illo amet impedit magni veritatis aut ea sit laboriosam tempora animi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(98, 120, 'vi', 'Possimus non ut.', 'Eum est et ab corporis velit aspernatur est maiores vitae in qui facilis.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(99, 126, 'vi', 'Natus quam.', 'Odit deleniti in animi omnis eum debitis voluptas maiores voluptates.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(100, 121, 'vi', 'Repudiandae nulla.', 'Commodi omnis sed dolor non aut id.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(101, 106, 'vi', 'Non quia unde.', 'Voluptas consequuntur repellat dicta officiis id accusamus a aliquam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(102, 102, 'vi', 'Aut vero.', 'Corrupti fuga perspiciatis sunt at rem delectus laborum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(103, 116, 'vi', 'Officia sit illo.', 'Magni repellat vitae minus voluptatem error est nam corporis est rerum et vitae.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(104, 105, 'vi', 'Velit maiores voluptatem.', 'Atque excepturi est saepe dolorem iste doloribus sint distinctio odio aliquam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(105, 104, 'vi', 'Neque nulla vero.', 'Ut officia in at animi perferendis sunt corporis pariatur quidem voluptatem qui velit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(106, 123, 'vi', 'Hic maiores dolores.', 'Sunt minima officia aperiam et non est ducimus a ipsum ea qui dolorem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(107, 126, 'vi', 'Nostrum at quaerat.', 'Ut omnis optio quidem et est esse quia.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(108, 107, 'vi', 'Id aperiam maiores.', 'Molestiae itaque alias est alias perspiciatis est.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(109, 99, 'vi', 'Et sed voluptatem.', 'Necessitatibus voluptatem harum magnam dicta est et aut optio reprehenderit ut libero eos excepturi.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(110, 105, 'vi', 'Dolor dolores.', 'Iusto tempore et sit quis quaerat et delectus minima.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(111, 120, 'vi', 'Vero molestias mollitia.', 'Porro ullam quia corporis voluptates aut autem accusantium esse voluptas sit voluptatibus ullam numquam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(112, 103, 'vi', 'Aut explicabo.', 'Dolorem qui et voluptatum commodi natus reiciendis.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(113, 103, 'vi', 'Ratione sed sint.', 'Sequi molestiae odit consequatur at provident beatae ducimus.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(114, 97, 'vi', 'Et in qui.', 'Id expedita at sint nihil libero esse in voluptatem dolorum doloribus vero dolor.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(115, 126, 'vi', 'Odit quisquam nihil.', 'Maxime blanditiis at rerum qui voluptatem sed rerum molestias rerum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(116, 115, 'vi', 'Aliquid odit sint.', 'In est sunt et neque aperiam quis pariatur ut voluptas.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(117, 119, 'vi', 'Vel aut.', 'Cupiditate nam quo ipsum dolore non quia.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(118, 109, 'vi', 'Accusantium non ipsa.', 'Non tenetur fugit ullam fuga esse culpa veniam eum unde sit in est.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(119, 100, 'vi', 'Alias quas ut.', 'Rerum qui qui vitae illum quae voluptatem consequatur.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:23', '2022-12-08 01:18:23'),
(120, 121, 'vi', 'Ut qui.', 'Saepe possimus nulla nulla est aut fugit quibusdam minima cum veritatis et at qui.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(121, 109, 'vi', 'Et similique.', 'Molestias veritatis qui consequuntur minima nihil impedit aut reprehenderit quisquam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(122, 101, 'vi', 'Amet pariatur.', 'Libero alias et beatae rerum non doloribus nam dolorum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(123, 112, 'vi', 'Tenetur ut amet.', 'Dolore pariatur minus in sed et est consectetur ut dignissimos ut labore exercitationem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(124, 116, 'vi', 'Id sequi assumenda.', 'Eligendi incidunt nulla consequatur dolores atque et temporibus laborum quae sint voluptatem sunt porro.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 01:18:24', '2022-12-08 01:18:24'),
(125, 125, 'vi', 'Minima quia rerum.', 'Minima quia rerum.', '<p>Minima quia rerum.</p>', '2022-12-08 01:18:46', '2022-12-08 01:18:46'),
(126, 110, 'vi', 'Minima quia rerum.', 'Minima quia rerum.', '<p>Minima quia rerum.</p>', '2022-12-08 01:18:56', '2022-12-08 01:18:56'),
(127, 111, 'vi', 'Minima quia rerum.', 'Minima quia rerum.', '<p>Minima quia rerum.</p>', '2022-12-08 01:19:06', '2022-12-08 01:19:06'),
(128, 114, 'vi', 'Minima quia rerum.', 'Minima quia rerum.', '<p>Minima quia rerum.</p>', '2022-12-08 01:19:17', '2022-12-08 01:19:17'),
(129, 127, 'vi', 'asdasd', 'asdasd', '<p>asdasdasdasd</p>', '2022-12-24 08:49:10', '2022-12-24 08:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `theme_products`
--

CREATE TABLE `theme_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_category_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `off` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_price` decimal(10,0) NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_canonical` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_products`
--

INSERT INTO `theme_products` (`id`, `theme_category_id`, `status`, `thumbnail`, `label`, `price`, `off`, `sale_price`, `seo_title`, `seo_description`, `seo_keyword`, `seo_canonical`, `created_at`, `updated_at`, `color`, `size`) VALUES
(9, 99, 1, '/upload/images/images/demo/5.jpeg', 'new', '848', '8', '67', 'Est sed voluptas cum', 'Harum iusto et optio', 'Odio amet nesciunt', 'Sunt saepe earum eli', '2022-12-08 01:40:07', '2022-12-08 01:42:14', '[\"#e82626\"]', '[\"L\"]'),
(10, 120, 1, '/upload/images/images/demo/2.jpeg', 'new', '317', '275', '870', 'Aliqua Debitis quos', 'Sint temporibus prov', 'Aliquam pariatur Ma', 'Aut possimus eius h', '2022-12-08 04:07:03', '2022-12-08 04:07:03', '[\"#e8aef5\"]', '[\"S\"]'),
(11, 125, 1, '/upload/images/images/demo/1.jpeg', 'normal', '479', '205', '978', 'Porro quam dolorem n', 'Quia commodi quasi c', 'Et mollitia non face', 'Est id fugiat sint', '2022-12-08 04:18:10', '2022-12-08 04:18:10', '[\"#4ee075\",\"#d74747\",\"#4b2ce8\",\"#e7e008\"]', '[\"S\",\"L\",\"XL\",\"XXL\"]'),
(12, 108, 1, '/upload/images/images/demo/1.jpeg', 'normal', '457', '148', '675', 'Est repellendus Et', 'Corrupti veniam cu', 'Enim id ex proident', 'Labore ex dignissimo', '2022-12-08 19:40:56', '2022-12-08 19:40:56', '[\"#0a61cc\"]', '[\"S\"]'),
(13, 108, 1, '/upload/images/images/demo/7.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#1ecd3d\",\"#b3e429\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(14, 123, 1, '/upload/images/images/demo/1.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#2b4a15\",\"#8f0816\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(15, 124, 1, '/upload/images/images/demo/6.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:37:53', '[\"#2072b4\",\"#e5d5f8\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(16, 120, 1, '/upload/images/images/demo/3.jpeg', 'hot', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#65eada\",\"#8f1aab\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(17, 125, 1, '/upload/images/images/demo/2.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#c93a04\",\"#738be5\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(18, 104, 1, '/upload/images/images/demo/8.jpeg', 'hot', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#151fe0\",\"#791848\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(19, 124, 1, '/upload/images/images/demo/2.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#51fc61\",\"#633c66\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(20, 116, 1, '/upload/images/images/demo/7.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#818376\",\"#b6214f\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(21, 107, 1, '/upload/images/images/demo/1.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#4a1176\",\"#674243\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(22, 116, 1, '/upload/images/images/demo/1.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#9b497c\",\"#6a8314\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(23, 109, 1, '/upload/images/images/demo/8.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#c96882\",\"#c3d3e9\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(24, 114, 1, '/upload/images/images/demo/1.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:38:34', '[\"#febae2\",\"#8d38aa\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(25, 104, 1, '/upload/images/images/demo/3.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#f93c93\",\"#c48eb0\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(26, 111, 1, '/upload/images/images/demo/6.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#7ea616\",\"#9e7c6a\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(27, 100, 1, '/upload/images/images/demo/4.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#72bbcc\",\"#45dda0\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(28, 107, 1, '/upload/images/images/demo/3.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#da8c06\",\"#81b543\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(29, 122, 1, '/upload/images/images/demo/4.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#4a08b6\",\"#791492\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(30, 100, 1, '/upload/images/images/demo/6.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#13fb79\",\"#8c4471\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(31, 124, 1, '/upload/images/images/demo/5.jpeg', 'hot', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#30e3d0\",\"#af53d8\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(32, 118, 1, '/upload/images/images/demo/1.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#a575ff\",\"#3e956f\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(33, 121, 1, '/upload/images/images/demo/3.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:39:00', '[\"#361a00\",\"#eb9503\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(34, 107, 1, '/upload/images/images/demo/8.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#0ac3c1\",\"#059625\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(35, 116, 1, '/upload/images/images/demo/4.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#e224c0\",\"#a9f9a2\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(36, 113, 1, '/upload/images/images/demo/6.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#e55476\",\"#46c620\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(37, 118, 1, '/upload/images/images/demo/8.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#da40fc\",\"#d204a5\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(38, 119, 1, '/upload/images/images/demo/7.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#a14d97\",\"#c6a194\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(39, 113, 1, '/upload/images/images/demo/4.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#fd950f\",\"#eaef11\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(40, 99, 1, '/upload/images/images/demo/2.jpeg', 'hot', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#589a23\",\"#757498\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(41, 118, 1, '/upload/images/images/demo/1.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#04425f\",\"#57ebf4\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(42, 118, 1, '/upload/images/images/demo/7.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#d47b5b\",\"#e58f63\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(43, 106, 1, '/upload/images/images/demo/8.jpeg', 'hot', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#b7cdbe\",\"#e13aa7\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(44, 110, 1, '/upload/images/images/demo/7.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#9f4fa1\",\"#39e51b\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(45, 97, 1, '/upload/images/images/demo/1.jpeg', 'hot', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#222d11\",\"#9d688a\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(46, 109, 1, '/upload/images/images/demo/5.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#cfb391\",\"#d7f934\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(47, 115, 1, '/upload/images/images/demo/3.jpeg', 'hot', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#65d0e5\",\"#cdc4c0\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(48, 125, 1, '/upload/images/images/demo/8.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#dfb6fa\",\"#1b7473\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(49, 97, 1, '/upload/images/images/demo/1.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#149bf2\",\"#fc86a3\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(50, 105, 1, '/upload/images/images/demo/8.jpeg', 'hot', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#c4383a\",\"#b02471\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(51, 109, 1, '/upload/images/images/demo/7.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#006ade\",\"#46905c\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(52, 111, 1, '/upload/images/images/demo/4.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#2901c2\",\"#a05845\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(53, 124, 1, '/upload/images/images/demo/4.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#697ac0\",\"#495f5b\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(54, 119, 1, '/upload/images/images/demo/1.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#6677c0\",\"#272829\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(55, 114, 1, '/upload/images/images/demo/7.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:39:52', '[\"#ca8b83\",\"#228acb\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(56, 108, 1, '/upload/images/images/demo/1.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#79e5db\",\"#4496d0\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(57, 124, 1, '/upload/images/images/demo/4.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#b9571b\",\"#0df91d\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(58, 118, 1, '/upload/images/images/demo/4.jpeg', 'hot', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#e7d3e5\",\"#7fa110\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(59, 110, 1, '/upload/images/images/demo/3.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#157aed\",\"#b78c63\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(60, 105, 1, '/upload/images/images/demo/7.jpeg', 'sale', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#95b657\",\"#fbbb08\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(61, 103, 1, '/upload/images/images/demo/6.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-08 20:01:16', '[\"#bb0ee4\",\"#94afb3\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(62, 107, 1, '/upload/images/images/demo/7.jpeg', 'new', '400000', '25', '300000', '#', '#', '#', '#', '2022-12-08 20:01:16', '2022-12-09 01:25:20', '[\"#de5a2a\",\"#7dbdc1\"]', '[\"L\",\"XL\",\"XXL\",\"M\",\"S\"]'),
(63, 119, 1, '/upload/images/images/demo/1.jpeg', 'hot', '68', '1446', '983', 'Magna quas magna et', 'Quam dolor omnis vol', 'Et laboriosam eum e', 'Eu vero quo veniam', '2022-12-11 02:16:36', '2022-12-11 02:16:36', '[\"#3ca507\"]', '[\"S\"]'),
(64, 114, 1, '/upload/images/images/demo/2.jpeg', 'normal', '97', '554', '537', 'Expedita sed asperio', 'Cupidatat dolore cul', 'Quia quis odit eos v', 'Reprehenderit delec', '2022-12-11 03:33:14', '2022-12-11 03:33:14', '[\"#200ace\"]', '[\"Quasi consequuntur o\"]'),
(65, 99, 1, '/upload/images/images/demo/1.jpeg', 'normal', '1231', '123123123', '-1515644413', 'asd', 'adasd', 'asd', 'asds', '2022-12-24 08:50:09', '2022-12-24 08:50:09', '[\"#000000\"]', '[\"S\"]');

-- --------------------------------------------------------

--
-- Table structure for table `theme_product_images`
--

CREATE TABLE `theme_product_images` (
  `id` int(11) NOT NULL,
  `theme_product_id` int(11) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme_product_images`
--

INSERT INTO `theme_product_images` (`id`, `theme_product_id`, `image`) VALUES
(1, 10, '/upload/images/images/demo/1.jpeg'),
(2, 10, '/upload/images/images/demo/2.jpeg'),
(3, 10, '/upload/images/images/demo/3.jpeg'),
(4, 10, '/upload/images/images/demo/4.jpeg'),
(5, 11, '/upload/images/images/demo/1.jpeg'),
(6, 11, '/upload/images/images/demo/2.jpeg'),
(7, 11, '/upload/images/images/demo/4.jpeg'),
(8, 12, '/upload/images/images/demo/2.jpeg'),
(9, 12, '/upload/images/images/demo/1.jpeg'),
(10, 60, '/upload/images/images/demo/3.jpeg'),
(11, 29, '/upload/images/images/demo/1.jpeg'),
(12, 13, '/upload/images/images/demo/7.jpeg'),
(13, 36, '/upload/images/images/demo/6.jpeg'),
(14, 28, '/upload/images/images/demo/5.jpeg'),
(15, 30, '/upload/images/images/demo/5.jpeg'),
(16, 32, '/upload/images/images/demo/1.jpeg'),
(17, 43, '/upload/images/images/demo/1.jpeg'),
(18, 23, '/upload/images/images/demo/7.jpeg'),
(19, 15, '/upload/images/images/demo/1.jpeg'),
(20, 59, '/upload/images/images/demo/2.jpeg'),
(21, 30, '/upload/images/images/demo/5.jpeg'),
(22, 26, '/upload/images/images/demo/8.jpeg'),
(23, 40, '/upload/images/images/demo/5.jpeg'),
(24, 33, '/upload/images/images/demo/1.jpeg'),
(25, 32, '/upload/images/images/demo/8.jpeg'),
(26, 30, '/upload/images/images/demo/8.jpeg'),
(27, 45, '/upload/images/images/demo/8.jpeg'),
(28, 55, '/upload/images/images/demo/6.jpeg'),
(29, 20, '/upload/images/images/demo/4.jpeg'),
(30, 38, '/upload/images/images/demo/2.jpeg'),
(31, 47, '/upload/images/images/demo/7.jpeg'),
(32, 22, '/upload/images/images/demo/2.jpeg'),
(33, 40, '/upload/images/images/demo/2.jpeg'),
(34, 50, '/upload/images/images/demo/2.jpeg'),
(35, 29, '/upload/images/images/demo/8.jpeg'),
(36, 38, '/upload/images/images/demo/6.jpeg'),
(37, 42, '/upload/images/images/demo/5.jpeg'),
(38, 14, '/upload/images/images/demo/4.jpeg'),
(39, 61, '/upload/images/images/demo/4.jpeg'),
(40, 9, '/upload/images/images/demo/2.jpeg'),
(41, 9, '/upload/images/images/demo/3.jpeg'),
(42, 12, '/upload/images/images/demo/4.jpeg'),
(43, 62, '/upload/images/images/demo/7.jpeg'),
(44, 52, '/upload/images/images/demo/8.jpeg'),
(45, 12, '/upload/images/images/demo/7.jpeg'),
(46, 62, '/upload/images/images/demo/1.jpeg'),
(47, 22, '/upload/images/images/demo/7.jpeg'),
(48, 49, '/upload/images/images/demo/7.jpeg'),
(49, 15, '/upload/images/images/demo/6.jpeg'),
(50, 40, '/upload/images/images/demo/5.jpeg'),
(51, 62, '/upload/images/images/demo/7.jpeg'),
(52, 37, '/upload/images/images/demo/1.jpeg'),
(53, 28, '/upload/images/images/demo/7.jpeg'),
(54, 18, '/upload/images/images/demo/4.jpeg'),
(55, 58, '/upload/images/images/demo/7.jpeg'),
(56, 61, '/upload/images/images/demo/1.jpeg'),
(57, 36, '/upload/images/images/demo/4.jpeg'),
(58, 9, '/upload/images/images/demo/7.jpeg'),
(59, 39, '/upload/images/images/demo/7.jpeg'),
(60, 41, '/upload/images/images/demo/5.jpeg'),
(61, 54, '/upload/images/images/demo/7.jpeg'),
(62, 39, '/upload/images/images/demo/2.jpeg'),
(63, 57, '/upload/images/images/demo/2.jpeg'),
(64, 46, '/upload/images/images/demo/7.jpeg'),
(65, 22, '/upload/images/images/demo/4.jpeg'),
(66, 33, '/upload/images/images/demo/8.jpeg'),
(67, 23, '/upload/images/images/demo/1.jpeg'),
(68, 35, '/upload/images/images/demo/8.jpeg'),
(69, 52, '/upload/images/images/demo/8.jpeg'),
(70, 20, '/upload/images/images/demo/2.jpeg'),
(71, 22, '/upload/images/images/demo/5.jpeg'),
(72, 24, '/upload/images/images/demo/7.jpeg'),
(73, 24, '/upload/images/images/demo/5.jpeg'),
(74, 17, '/upload/images/images/demo/5.jpeg'),
(75, 50, '/upload/images/images/demo/5.jpeg'),
(76, 16, '/upload/images/images/demo/4.jpeg'),
(77, 62, '/upload/images/images/demo/4.jpeg'),
(78, 49, '/upload/images/images/demo/4.jpeg'),
(79, 62, '/upload/images/images/demo/7.jpeg'),
(80, 13, '/upload/images/images/demo/5.jpeg'),
(81, 33, '/upload/images/images/demo/2.jpeg'),
(82, 16, '/upload/images/images/demo/7.jpeg'),
(83, 49, '/upload/images/images/demo/4.jpeg'),
(84, 23, '/upload/images/images/demo/3.jpeg'),
(85, 27, '/upload/images/images/demo/3.jpeg'),
(86, 22, '/upload/images/images/demo/8.jpeg'),
(87, 19, '/upload/images/images/demo/3.jpeg'),
(88, 20, '/upload/images/images/demo/7.jpeg'),
(89, 60, '/upload/images/images/demo/4.jpeg'),
(90, 46, '/upload/images/images/demo/4.jpeg'),
(91, 59, '/upload/images/images/demo/5.jpeg'),
(92, 55, '/upload/images/images/demo/1.jpeg'),
(93, 53, '/upload/images/images/demo/3.jpeg'),
(94, 28, '/upload/images/images/demo/1.jpeg'),
(95, 45, '/upload/images/images/demo/5.jpeg'),
(96, 9, '/upload/images/images/demo/1.jpeg'),
(97, 35, '/upload/images/images/demo/3.jpeg'),
(98, 25, '/upload/images/images/demo/7.jpeg'),
(99, 35, '/upload/images/images/demo/2.jpeg'),
(100, 27, '/upload/images/images/demo/1.jpeg'),
(101, 9, '/upload/images/images/demo/7.jpeg'),
(102, 50, '/upload/images/images/demo/2.jpeg'),
(103, 26, '/upload/images/images/demo/5.jpeg'),
(104, 12, '/upload/images/images/demo/2.jpeg'),
(105, 20, '/upload/images/images/demo/8.jpeg'),
(106, 50, '/upload/images/images/demo/5.jpeg'),
(107, 43, '/upload/images/images/demo/7.jpeg'),
(108, 26, '/upload/images/images/demo/5.jpeg'),
(109, 45, '/upload/images/images/demo/6.jpeg'),
(110, 61, '/upload/images/images/demo/4.jpeg'),
(111, 58, '/upload/images/images/demo/7.jpeg'),
(112, 20, '/upload/images/images/demo/1.jpeg'),
(113, 24, '/upload/images/images/demo/8.jpeg'),
(114, 17, '/upload/images/images/demo/5.jpeg'),
(115, 22, '/upload/images/images/demo/1.jpeg'),
(116, 33, '/upload/images/images/demo/8.jpeg'),
(117, 11, '/upload/images/images/demo/6.jpeg'),
(118, 27, '/upload/images/images/demo/7.jpeg'),
(119, 34, '/upload/images/images/demo/1.jpeg'),
(120, 44, '/upload/images/images/demo/7.jpeg'),
(121, 48, '/upload/images/images/demo/8.jpeg'),
(122, 50, '/upload/images/images/demo/7.jpeg'),
(123, 35, '/upload/images/images/demo/7.jpeg'),
(124, 17, '/upload/images/images/demo/4.jpeg'),
(125, 62, '/upload/images/images/demo/4.jpeg'),
(126, 38, '/upload/images/images/demo/4.jpeg'),
(127, 47, '/upload/images/images/demo/8.jpeg'),
(128, 11, '/upload/images/images/demo/1.jpeg'),
(129, 50, '/upload/images/images/demo/5.jpeg'),
(130, 49, '/upload/images/images/demo/5.jpeg'),
(131, 27, '/upload/images/images/demo/3.jpeg'),
(132, 15, '/upload/images/images/demo/8.jpeg'),
(133, 19, '/upload/images/images/demo/2.jpeg'),
(134, 34, '/upload/images/images/demo/1.jpeg'),
(135, 20, '/upload/images/images/demo/3.jpeg'),
(136, 59, '/upload/images/images/demo/4.jpeg'),
(137, 32, '/upload/images/images/demo/6.jpeg'),
(138, 10, '/upload/images/images/demo/7.jpeg'),
(139, 60, '/upload/images/images/demo/8.jpeg'),
(140, 18, '/upload/images/images/demo/7.jpeg'),
(141, 11, '/upload/images/images/demo/6.jpeg'),
(142, 59, '/upload/images/images/demo/2.jpeg'),
(143, 13, '/upload/images/images/demo/6.jpeg'),
(144, 52, '/upload/images/images/demo/5.jpeg'),
(145, 16, '/upload/images/images/demo/6.jpeg'),
(146, 31, '/upload/images/images/demo/4.jpeg'),
(147, 37, '/upload/images/images/demo/2.jpeg'),
(148, 51, '/upload/images/images/demo/1.jpeg'),
(149, 18, '/upload/images/images/demo/2.jpeg'),
(150, 37, '/upload/images/images/demo/3.jpeg'),
(151, 38, '/upload/images/images/demo/4.jpeg'),
(152, 31, '/upload/images/images/demo/6.jpeg'),
(153, 56, '/upload/images/images/demo/3.jpeg'),
(154, 13, '/upload/images/images/demo/4.jpeg'),
(155, 62, '/upload/images/images/demo/1.jpeg'),
(156, 61, '/upload/images/images/demo/7.jpeg'),
(157, 10, '/upload/images/images/demo/8.jpeg'),
(158, 39, '/upload/images/images/demo/7.jpeg'),
(159, 52, '/upload/images/images/demo/6.jpeg'),
(160, 56, '/upload/images/images/demo/8.jpeg'),
(161, 50, '/upload/images/images/demo/5.jpeg'),
(162, 25, '/upload/images/images/demo/1.jpeg'),
(163, 13, '/upload/images/images/demo/7.jpeg'),
(164, 44, '/upload/images/images/demo/2.jpeg'),
(165, 38, '/upload/images/images/demo/6.jpeg'),
(166, 13, '/upload/images/images/demo/5.jpeg'),
(167, 34, '/upload/images/images/demo/2.jpeg'),
(168, 36, '/upload/images/images/demo/1.jpeg'),
(169, 50, '/upload/images/images/demo/5.jpeg'),
(170, 46, '/upload/images/images/demo/7.jpeg'),
(171, 24, '/upload/images/images/demo/1.jpeg'),
(172, 35, '/upload/images/images/demo/2.jpeg'),
(173, 34, '/upload/images/images/demo/5.jpeg'),
(174, 29, '/upload/images/images/demo/7.jpeg'),
(175, 62, '/upload/images/images/demo/8.jpeg'),
(176, 20, '/upload/images/images/demo/5.jpeg'),
(177, 38, '/upload/images/images/demo/1.jpeg'),
(178, 45, '/upload/images/images/demo/3.jpeg'),
(179, 56, '/upload/images/images/demo/1.jpeg'),
(180, 62, '/upload/images/images/demo/2.jpeg'),
(181, 49, '/upload/images/images/demo/8.jpeg'),
(182, 27, '/upload/images/images/demo/6.jpeg'),
(183, 62, '/upload/images/images/demo/6.jpeg'),
(184, 35, '/upload/images/images/demo/2.jpeg'),
(185, 53, '/upload/images/images/demo/8.jpeg'),
(186, 14, '/upload/images/images/demo/5.jpeg'),
(187, 33, '/upload/images/images/demo/3.jpeg'),
(188, 32, '/upload/images/images/demo/1.jpeg'),
(189, 10, '/upload/images/images/demo/4.jpeg'),
(190, 60, '/upload/images/images/demo/3.jpeg'),
(191, 11, '/upload/images/images/demo/3.jpeg'),
(192, 40, '/upload/images/images/demo/2.jpeg'),
(193, 17, '/upload/images/images/demo/1.jpeg'),
(194, 15, '/upload/images/images/demo/6.jpeg'),
(195, 42, '/upload/images/images/demo/4.jpeg'),
(196, 22, '/upload/images/images/demo/1.jpeg'),
(197, 32, '/upload/images/images/demo/4.jpeg'),
(198, 24, '/upload/images/images/demo/4.jpeg'),
(199, 10, '/upload/images/images/demo/5.jpeg'),
(200, 61, '/upload/images/images/demo/6.jpeg'),
(201, 15, '/upload/images/images/demo/2.jpeg'),
(202, 23, '/upload/images/images/demo/6.jpeg'),
(203, 29, '/upload/images/images/demo/5.jpeg'),
(204, 28, '/upload/images/images/demo/3.jpeg'),
(205, 14, '/upload/images/images/demo/6.jpeg'),
(206, 14, '/upload/images/images/demo/3.jpeg'),
(207, 44, '/upload/images/images/demo/8.jpeg'),
(208, 31, '/upload/images/images/demo/4.jpeg'),
(209, 55, '/upload/images/images/demo/7.jpeg'),
(219, 64, '/upload/images/images/demo/2.jpeg'),
(220, 64, '/upload/images/images/demo/1.jpeg'),
(221, 63, '/upload/images/images/demo/1.jpeg'),
(222, 63, '/upload/images/images/demo/2.jpeg'),
(223, 65, '/upload/images/images/demo/1.jpeg'),
(224, 65, '/upload/images/images/demo/2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `theme_product_translations`
--

CREATE TABLE `theme_product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_product_id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_product_translations`
--

INSERT INTO `theme_product_translations` (`id`, `theme_product_id`, `language`, `name`, `subname`, `description`, `created_at`, `updated_at`) VALUES
(10, 9, 'vi', 'Hilary Valentine', 'Walter Rodgers', '<p>asd</p>', '2022-12-08 01:40:07', '2022-12-08 01:40:07'),
(11, 10, 'vi', 'Jarrod Eaton', 'May Houston', '<p>asdasds</p>', '2022-12-08 04:07:03', '2022-12-08 04:07:03'),
(12, 11, 'vi', 'Kaitlin Walls', 'Bert Rosales', '<p>asdasd</p>', '2022-12-08 04:18:10', '2022-12-08 04:18:10'),
(13, 12, 'vi', 'Wing Conley', 'Garrett Forbes', '<p>asdas</p>', '2022-12-08 19:40:56', '2022-12-08 19:40:56'),
(14, 17, 'vi', 'Voluptatum facilis.', 'Voluptatem et quia dolor autem quidem ratione repudiandae ipsam sint non praesentium.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(15, 41, 'vi', 'Id sed.', 'Ex quia quibusdam officia blanditiis neque corrupti fugiat.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(16, 32, 'vi', 'Nemo ut.', 'Quae debitis rerum ad non quasi ex omnis et tempora sed cupiditate.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(17, 26, 'vi', 'Officia cum.', 'Labore magnam iste quia dolorem at explicabo aut ea et dolores aspernatur rerum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(18, 35, 'vi', 'Voluptatem maiores.', 'Eius et et libero ducimus exercitationem quos animi quas blanditiis ab at fuga.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(19, 30, 'vi', 'Odit esse.', 'A recusandae voluptatem similique placeat eaque numquam sint fuga saepe placeat aperiam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(20, 9, 'vi', 'Dolorem laborum.', 'Omnis dolorem dolore eum quia dolorem repudiandae quos autem molestias ea similique qui.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(21, 9, 'vi', 'Praesentium saepe.', 'Dolorum sed sunt velit nihil est atque unde suscipit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(22, 40, 'vi', 'Eius voluptatem.', 'Quia est aperiam nostrum atque error dolore aliquid quisquam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(23, 47, 'vi', 'Id deserunt.', 'Et voluptas quia velit tempora ipsam culpa illo unde quia animi in sit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(24, 37, 'vi', 'Eligendi quisquam.', 'Ipsam autem omnis magni labore repudiandae nostrum officiis.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(25, 14, 'vi', 'Cupiditate sint.', 'Dignissimos inventore adipisci iste sit odio quia.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(26, 9, 'vi', 'Mollitia non.', 'Nemo molestiae minima ex odit molestias consequatur optio non impedit dolores in laborum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(27, 21, 'vi', 'Magni odio.', 'Id fugiat voluptatem fugit quia dignissimos quia.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(28, 29, 'vi', 'Consequatur velit.', 'Laborum nisi magnam aut nihil aperiam deserunt consequatur quod.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(29, 27, 'vi', 'Neque ea.', 'Et qui distinctio est aperiam et voluptas expedita ipsa exercitationem ipsum est.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(30, 22, 'vi', 'Voluptates molestiae soluta.', 'Facere at modi voluptatum earum dolor ut vitae at sed.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(31, 50, 'vi', 'Magni repellendus.', 'Dolorem rem delectus error aut illo dolores molestias non et qui.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(32, 35, 'vi', 'Omnis voluptatum.', 'Ut omnis velit officia ut earum sed commodi dolor iusto aut et ea et.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(33, 48, 'vi', 'Eos ipsum.', 'Aspernatur autem est debitis quia rerum ut distinctio eum nulla velit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(34, 11, 'vi', 'Nesciunt hic.', 'Sunt est sequi tempore ut et itaque quisquam fugiat excepturi rerum velit ut.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(35, 44, 'vi', 'Velit dignissimos.', 'Qui non perferendis iusto ullam nihil placeat.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(36, 21, 'vi', 'Deleniti sit.', 'Praesentium eos a enim velit ut iure corrupti autem quidem harum quia.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(37, 16, 'vi', 'Molestiae maiores.', 'Excepturi dolores tenetur mollitia quia veritatis consequatur sit ducimus amet.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(38, 43, 'vi', 'Cupiditate perspiciatis repellat.', 'Quis voluptas molestiae facere ea est unde.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(39, 47, 'vi', 'Nihil provident atque.', 'Aperiam ea vitae maiores quia officiis quibusdam odio neque earum et corporis saepe.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(40, 25, 'vi', 'Iste culpa dolore.', 'Ad ut quia voluptates exercitationem nesciunt aspernatur id nesciunt iure et.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(41, 32, 'vi', 'Quia est.', 'Temporibus non dolores qui dolore numquam cupiditate nulla ut ea mollitia magni.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(42, 52, 'vi', 'Explicabo aut voluptatem.', 'Voluptatum laudantium et ut officia maxime excepturi perferendis maiores.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(43, 51, 'vi', 'Dolore ex autem.', 'In molestias aut sed perspiciatis rerum molestiae autem iste at.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(44, 41, 'vi', 'Eaque deserunt dolore.', 'Impedit perferendis blanditiis perferendis tempora architecto repudiandae eius reprehenderit qui.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(45, 17, 'vi', 'Sed eum est.', 'Earum repellendus porro facere voluptatum aut sequi enim.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(46, 28, 'vi', 'Ipsam laborum et.', 'Fugiat et maiores quisquam sint quidem sapiente voluptatem voluptates non aliquam voluptatem consequatur in.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(47, 46, 'vi', 'Autem eos ut.', 'Laudantium minus voluptatem et inventore vitae quo totam nam nam libero eos non eum accusamus.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(48, 51, 'vi', 'Sit similique.', 'Qui voluptatem rerum placeat nulla eum omnis quis reprehenderit consequatur aliquam natus.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(49, 54, 'vi', 'Dolores autem voluptatem.', 'Qui laborum ut id ratione unde et.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(50, 57, 'vi', 'Id accusamus ea.', 'Rerum ut quia deleniti necessitatibus possimus vitae molestias quia beatae.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(51, 59, 'vi', 'Molestias non.', 'Cupiditate nostrum vel ad rem perferendis veniam impedit non quod.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(52, 30, 'vi', 'Amet tempora perspiciatis.', 'Sed facere quas facilis rerum et quis perferendis at consequuntur eveniet illo doloribus.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(53, 53, 'vi', 'Ipsam excepturi ea.', 'Neque est sunt deleniti ea quod est in quam nulla in aliquam quod voluptatem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(54, 56, 'vi', 'Nemo blanditiis nam.', 'Inventore numquam et porro non quaerat sapiente vel.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(55, 52, 'vi', 'Officiis nemo quibusdam.', 'Ea dolorem quam quia laborum quisquam facilis fugit qui dolore exercitationem est molestiae.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(56, 28, 'vi', 'Necessitatibus praesentium.', 'Nemo dolores quidem quo perspiciatis et magnam beatae excepturi consequatur consequuntur.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(57, 46, 'vi', 'Vero dolorem nemo.', 'Accusantium dolor adipisci ut sunt perferendis et laboriosam veniam incidunt aspernatur qui dolor.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(58, 28, 'vi', 'Vero omnis.', 'Consequuntur quam voluptate voluptates et dolor nostrum qui in delectus pariatur dignissimos animi dolore.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(59, 21, 'vi', 'Minima aperiam rerum.', 'Atque aut modi earum dolorum soluta sunt non molestiae magnam eum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(60, 20, 'vi', 'Saepe est aspernatur.', 'Nam vero facere delectus magnam explicabo eveniet et quas omnis odit voluptatum dolorem sit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(61, 49, 'vi', 'Dolor impedit reprehenderit.', 'Omnis totam eius nihil dolore laboriosam et et perspiciatis dolorem beatae.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(62, 14, 'vi', 'Nulla culpa repudiandae.', 'Fuga vero fugiat quia est voluptatem voluptatem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(63, 30, 'vi', 'Reprehenderit natus.', 'Tenetur distinctio est culpa quis iusto minus voluptas alias qui dolores laudantium magni nulla.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(64, 52, 'vi', 'Consequuntur eveniet.', 'Dolores temporibus quasi rerum et ullam sit consequatur aut saepe et quibusdam quia consequatur.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(65, 38, 'vi', 'Ab recusandae.', 'Eveniet enim molestiae et in et sint ut est dolores tempore eum sint.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(66, 35, 'vi', 'Perferendis dignissimos.', 'Porro voluptas quisquam architecto fugit dolores necessitatibus iusto culpa illo maxime non et quidem.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(67, 10, 'vi', 'Temporibus ut.', 'Voluptatem adipisci cum explicabo eos et id molestiae sed alias.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(68, 14, 'vi', 'Suscipit quam nisi.', 'Pariatur alias rem mollitia laudantium officia maiores.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(69, 39, 'vi', 'Aut temporibus ea.', 'Ut qui reprehenderit quia deleniti odio ullam.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(70, 37, 'vi', 'Voluptas optio pariatur.', 'Magnam repellendus modi quia officiis ea earum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(71, 41, 'vi', 'Eum libero.', 'Dolore et sit aperiam rerum non voluptatum dolorum minima numquam repellendus accusamus est atque.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(72, 10, 'vi', 'Consequatur dolor.', 'Possimus sed nulla qui eum molestiae ex veritatis magni corrupti sequi est.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(73, 53, 'vi', 'Ducimus illum explicabo.', 'Repellendus omnis sed sed tempora voluptas pariatur aliquid iste dolorum optio qui.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(74, 45, 'vi', 'Ex aperiam alias.', 'Aut tempore vero non delectus rerum quas perferendis.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(75, 30, 'vi', 'Dolores deserunt veritatis.', 'Voluptatum dicta ex porro unde optio similique fugiat voluptatem recusandae harum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(76, 29, 'vi', 'Rerum aspernatur vel.', 'Iure fuga accusantium unde ut provident necessitatibus iusto fugit.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(77, 54, 'vi', 'Est omnis.', 'Quia quis omnis et labore ipsam aut sunt placeat nemo labore corporis eum quos.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16');
INSERT INTO `theme_product_translations` (`id`, `theme_product_id`, `language`, `name`, `subname`, `description`, `created_at`, `updated_at`) VALUES
(78, 19, 'vi', 'Dolor dolores.', 'Et perspiciatis qui voluptates corrupti amet sed dolor exercitationem nihil.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(79, 57, 'vi', 'Rerum quisquam vel.', 'Eos vitae necessitatibus aliquid voluptas hic ut suscipit dolorem culpa et ducimus.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(80, 60, 'vi', 'Rem reiciendis.', 'Pariatur aut vitae nemo cumque quia et eius optio eos libero.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(81, 21, 'vi', 'Consequatur voluptatem ut.', 'Adipisci voluptatum et maxime dignissimos et provident voluptatibus.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(82, 17, 'vi', 'In sit eum.', 'Quos voluptatem excepturi molestiae ea repellendus et impedit veniam impedit adipisci officia accusamus quod.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(83, 10, 'vi', 'Modi ipsa.', 'Fugiat ad maiores voluptatem reiciendis officia eos ex reprehenderit aliquam aut.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-12-08 20:01:16', '2022-12-08 20:01:16'),
(84, 13, 'vi', 'Cupiditat.', 'Cupiditat.', '<p>Cupiditate sint.</p>', '2022-12-08 20:37:44', '2022-12-08 20:37:44'),
(85, 15, 'vi', 'Molestiae', 'Molestiae', '<p>Molestiae</p>', '2022-12-08 20:37:53', '2022-12-08 20:37:53'),
(86, 18, 'vi', 'Saepe', 'Saepe', '<p>Saepe</p>', '2022-12-08 20:38:07', '2022-12-08 20:38:07'),
(87, 23, 'vi', 'dolore', 'dolore', '<p>dolore</p>', '2022-12-08 20:38:20', '2022-12-08 20:38:20'),
(88, 24, 'vi', 'dolore ila', 'dolore ila', '<p>dolore ila</p>', '2022-12-08 20:38:34', '2022-12-08 20:38:34'),
(89, 31, 'vi', 'Odit', 'Odit', '<p>Odit</p>', '2022-12-08 20:38:47', '2022-12-08 20:38:47'),
(90, 33, 'vi', 'temporibus', 'temporibus', '<p>temporibus</p>', '2022-12-08 20:39:00', '2022-12-08 20:39:00'),
(91, 36, 'vi', 'quisquam', 'quisquam', '<p>quisquam</p>', '2022-12-08 20:39:13', '2022-12-08 20:39:13'),
(92, 34, 'vi', 'voluptatem', 'voluptatem', '<p>voluptatem</p>', '2022-12-08 20:39:27', '2022-12-08 20:39:27'),
(93, 58, 'vi', 'Molestias', 'Molestias', '<p>Molestias</p>', '2022-12-08 20:39:38', '2022-12-08 20:39:38'),
(94, 55, 'vi', 'non', 'non', '<p>non</p>', '2022-12-08 20:39:52', '2022-12-08 20:39:52'),
(95, 61, 'vi', 'reiciendis', 'reiciendis', '<p>reiciendis</p>', '2022-12-08 20:40:03', '2022-12-08 20:40:03'),
(96, 62, 'vi', 'Rem', 'Rem', '<p>Rem</p>', '2022-12-08 20:40:13', '2022-12-08 20:40:13'),
(97, 63, 'vi', 'Buckminster George1111222', 'Lavinia Foreman', '<p>12323123</p>', '2022-12-11 02:16:36', '2022-12-11 03:43:33'),
(98, 64, 'vi', 'Felix Kline', 'Rebekah Huff', '<p>sdfsdf</p>', '2022-12-11 03:33:14', '2022-12-11 03:33:14'),
(99, 65, 'vi', 'asdasdasdas', 'dasdasdasdasd', '<p>asdsadasd</p>', '2022-12-24 08:50:09', '2022-12-24 08:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'peasant',
  `is_verified` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `is_verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dog1', 'admin@demo.com', '$2y$10$9aTh0ng2dQW.dl7LSwSSTukueipDTmX36iLXjCIWukV3h3mxgobaC', 'god', 0, NULL, '2022-12-02 09:52:54', '2022-12-09 04:03:20'),
(2, 'admintest', 'admintest@gmail.com', '$2y$10$c5Oj8Scjx.WGaqHlLoD/I.L9w4gbp1PEg4iGOyKy1VMnGVxqwlTvq', 'peasant', 0, NULL, '2022-12-09 02:04:04', '2022-12-09 02:04:04'),
(9, 'enju', 'notenjuu@gmail.com', '$2y$10$3btIPpmkDwsBCYz5ePKzXeh1NJj3Rctx0R/UD4tJsxw7D6oMpK1lG', 'peasant', 1, NULL, '2022-12-26 08:33:21', '2022-12-26 08:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `user_id`, `phone`, `address`) VALUES
(1, 1, '0982398421', 'Trụ sở chính: Số 609 Định An, xã Hiệp An, huyện Đức Trọng, tỉnh Lâm Đồng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_blogs`
--
ALTER TABLE `theme_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_blog_translations`
--
ALTER TABLE `theme_blog_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_category_id` (`theme_blog_id`),
  ADD KEY `category_id` (`theme_blog_id`),
  ADD KEY `theme_category_id_2` (`theme_blog_id`),
  ADD KEY `theme_blog_id` (`theme_blog_id`);

--
-- Indexes for table `theme_categories`
--
ALTER TABLE `theme_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `theme_category_translations`
--
ALTER TABLE `theme_category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`theme_category_id`),
  ADD KEY `theme_blog_id` (`theme_category_id`),
  ADD KEY `theme_category_id` (`theme_category_id`);

--
-- Indexes for table `theme_products`
--
ALTER TABLE `theme_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_category_id` (`theme_category_id`),
  ADD KEY `category_id` (`theme_category_id`);

--
-- Indexes for table `theme_product_images`
--
ALTER TABLE `theme_product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_product_id` (`theme_product_id`);

--
-- Indexes for table `theme_product_translations`
--
ALTER TABLE `theme_product_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_category_id` (`theme_product_id`),
  ADD KEY `category_id` (`theme_product_id`),
  ADD KEY `product_id` (`theme_product_id`),
  ADD KEY `theme_product_id` (`theme_product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `theme_blogs`
--
ALTER TABLE `theme_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `theme_blog_translations`
--
ALTER TABLE `theme_blog_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `theme_categories`
--
ALTER TABLE `theme_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `theme_category_translations`
--
ALTER TABLE `theme_category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `theme_products`
--
ALTER TABLE `theme_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `theme_product_images`
--
ALTER TABLE `theme_product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `theme_product_translations`
--
ALTER TABLE `theme_product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
