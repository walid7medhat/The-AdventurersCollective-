-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2025 at 01:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rox2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext NOT NULL,
  `vision` longtext NOT NULL,
  `objective` longtext DEFAULT NULL,
  `description` longtext NOT NULL,
  `image_description` varchar(255) DEFAULT NULL,
  `image_vision` varchar(255) DEFAULT NULL,
  `image_message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expedition` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `message`, `vision`, `objective`, `description`, `image_description`, `image_vision`, `image_message`, `created_at`, `updated_at`, `expedition`, `image`, `image2`, `image3`) VALUES
(1, '<h3>\r\n                                    CONCEPT\r\n                                </h3>\r\n                                <p>\r\n                                    Imagine driving a capable machine into uncharted regions. The terrains are unlike anything you\'ve driven before. Landscapes look fictitious, predictability doesn’t exist, and a sense of freedom dominates. But planning overland expeditions demands grit, resources, and time. That’s where we come in. All it takes for you to embark on these epic expeditions – fearless passion and a drive to venture into the unknown.\r\n                                </p>', '<h3>\r\n                                    Craftsmanship\r\n                                </h3>\r\n                                <p>\r\n                                    We stand firm in our belief: real adventures await outside our comfort zones. On our overland expeditions, Mother Nature has the last word. We can’t script this level of reality. Our adventures are designed to push limits, where challenges are embraced rather than feared. The catharsis that follows is unmatched. Know that we prepare thoroughly, with our expert team always watching from the sidelines.\r\n                                </p>', 'جوين للشقق المخدومة الفاخرة ... صُممت لتناسبك راحتك ، أستمتع بأعلى معاير الراحة سواءً كنت تقضي اجازتك المميزة مع عائلتك او في رحلة عمل فستجد جميع الخدمات و المرافق التي تحتاجها و التي تحافظ على راحة نزلائنا.', '<h3>\r\n                                    Coterie\r\n                                </h3>\r\n                                <p>\r\n                                    We believe in breaking away from the pack. Our overland journeys are for the curious and the bold. We keep our expeditions intimate, with just 10 explorers. These adventurers have journeyed far and wide but seek to experience the world in a new light. They dare to defy the status quo and travel with strangers beyond borders. The outcome? Transformative journeys and connections that live on. Still, if you prefer to do it yourself, consider our custom expeditions.\r\n                                </p>', 'public/storage/abouts/logo-modal.svg1655724884.svg', 'public/storage/abouts/about1.png1655718217.png', 'public/storage/abouts/about2.png1655718217.png', '2022-06-20 08:27:58', '2025-03-22 22:22:43', '<h2 style=\"font-family: \"Source Sans Pro\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; color: rgb(0, 0, 0);\">Curate A Personal Expedition</h2><p>For years, Nomadic Road has made dream journeys a reality for countless explorers. Adventurers turn to us for thrilling overland expeditions they once only imagined.</p><p>With four wheels, the world is at your fingertips. Accessibility takes on a new meaning. Be it across a country or a continent, we craft adventurous expeditions to your specifications.</p><p>No dream is too far-fetched. We’ll take you anywhere you dare to go.</p>', 'public/storage/abouts/bg2.webp1742678563.webp', 'public/storage/abouts/bg3.webp1742678563.webp', 'public/storage/abouts/bg4.webp1742678563.webp');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `neCoordinates` varchar(199) DEFAULT NULL,
  `swCoordinates` varchar(199) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `title2` varchar(191) NOT NULL,
  `description2` text NOT NULL,
  `link_video` varchar(191) DEFAULT NULL,
  `video` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `title`, `parent_id`, `neCoordinates`, `swCoordinates`, `created_at`, `updated_at`, `description`, `image`, `name`, `title2`, `description2`, `link_video`, `video`) VALUES
(6, 'tttttttttttt', NULL, NULL, NULL, '2025-04-08 00:19:17', '2025-04-08 00:19:17', 'tttttttttttttt', 'public/storage/categories/black-white-view-adventure-time-with-off-road-vehicle-rough-terrain (2).jpg1744067957.jpg', 'test', 'tttttttttttt', 'ttttttttttttttttt', 'https://www.youtube.com/embed/tgbNymZ7vqY', 'public/storage/areas/a.webm1744067957.webm');

-- --------------------------------------------------------

--
-- Table structure for table `area_images`
--

CREATE TABLE `area_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `area_images`
--

INSERT INTO `area_images` (`id`, `image`, `area_id`, `created_at`, `updated_at`) VALUES
(3, 'public/storage/areas/young-female-refugee-dirty-clothes-carrying-cart-desert-she-escaping-from-slavery (2).jpg1744067957.jpg', 6, '2025-04-08 00:19:17', '2025-04-08 00:19:17'),
(4, 'public/storage/areas/black-white-view-adventure-time-with-off-road-vehicle-rough-terrain (2).jpg1744067957.jpg', 6, '2025-04-08 00:19:17', '2025-04-08 00:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address_ar` varchar(255) DEFAULT NULL,
  `address_en` varchar(255) DEFAULT NULL,
  `link_map` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`, `phone`, `address_ar`, `address_en`, `link_map`) VALUES
(6, 'فرع  شارع فلسطين', 'Palestine street branch', '2023-09-04 17:24:21', '2023-10-02 17:03:14', '0096612665465', 'شارع فلسطين', 'Palestine St, Jeddah - Saudi Arabia', 'https://maps.app.goo.gl/mEfP1qpww97iMJXE8'),
(7, 'فرع حى الحمرا', 'Alhamra Branch', '2023-09-17 20:24:21', '2023-10-02 17:06:08', '00966126650558', 'حي الحمرا', 'Alhamra, Jeddah - Saudi Arabia', 'https://maps.app.goo.gl/ejDgMwrpYUn2B6gj8');

-- --------------------------------------------------------

--
-- Table structure for table `breadcrumbs`
--

CREATE TABLE `breadcrumbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `breadcrumbs`
--

INSERT INTO `breadcrumbs` (`id`, `image`, `page`, `created_at`, `updated_at`) VALUES
(1, 'public/storage/breadcrumb/159928-2.jpg1696264731.jpg', 'index', '2022-06-20 13:46:11', '2023-10-02 16:38:51'),
(2, 'public/storage/breadcrumb/Rectangle 3.png1693855343 copy.png1696265066.png', 'index2', '2023-09-04 19:22:23', '2023-10-02 16:44:26'),
(3, 'public/storage/breadcrumb/3B0A9156.jpg1696265160.jpg', 'about_us2', '2023-09-05 19:15:30', '2023-10-02 16:46:00'),
(6, 'public/storage/breadcrumb/Banner-2.png1696272106.png', 'contact_us', '2023-10-02 17:32:13', '2023-10-02 18:41:46'),
(7, 'public/storage/breadcrumb/Banner-3.png1696272405.png', 'posts', '2023-10-02 17:33:14', '2023-10-02 18:46:45'),
(8, 'public/storage/breadcrumb/Banner-4.png1696272585.png', 'about_us', '2023-10-02 17:33:52', '2023-10-02 18:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(20, 'Offroad Exploration', '2025-03-22 18:46:10', '2025-03-22 18:46:10'),
(21, 'Canyoning', '2025-03-22 18:46:10', '2025-03-22 18:46:10'),
(22, 'Waterfall Abseiling', '2025-03-22 18:46:10', '2025-03-22 18:46:10'),
(23, 'Hiking', '2025-03-22 18:46:10', '2025-03-22 18:46:10'),
(24, 'Snorkeling', '2025-03-22 18:46:10', '2025-03-22 18:46:10'),
(25, 'Diving', '2025-03-22 18:46:10', '2025-03-22 18:46:10'),
(26, 'Freediving', '2025-03-22 18:46:10', '2025-03-22 18:46:10'),
(27, 'Camping', '2025-03-22 18:46:10', '2025-03-22 18:46:10'),
(28, 'Glamping', '2025-03-22 18:46:10', '2025-03-22 18:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `common_questions`
--

CREATE TABLE `common_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `common_questions`
--

INSERT INTO `common_questions` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(15, 'دعم 24/7', 'نقدم دعم فنيا علي مدار الساعه طوال ايام الاسبوع لضمان التشغيل دون انقطاع و راحه بالكم التامه.', '2025-03-14 23:39:05', '2025-03-14 23:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `read` tinyint(4) DEFAULT 0 COMMENT '0->unRead,1->Read',
  `message` text NOT NULL,
  `star` int(11) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL COMMENT '1->go as site raye',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `logo_footer` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `tw` varchar(255) DEFAULT NULL,
  `inst` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `snapchat` varchar(255) DEFAULT NULL,
  `whatsapp_phone` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `hint1` varchar(255) DEFAULT NULL,
  `hint2` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `logo`, `logo_footer`, `icon`, `name`, `email`, `phone`, `address`, `description`, `fb`, `tw`, `inst`, `youtube`, `linkedin`, `snapchat`, `whatsapp_phone`, `map`, `hint1`, `hint2`, `image`, `created_at`, `updated_at`, `video`) VALUES
(1, '', 'public/storage/infos/logo2.png1741991969.png', 'public/storage/infos/logo.svg1741992273.svg', 'rox', 'info@royaltech-sa.com', '+966 56 244 6622', 'السعودية، جدة، 3711، العباس  بن محمد بن ابراهيم،7992', 'رويال تيك', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instgram.com/', 'https://www.youtube.com/', 'https://www.linkedin.com/', 'https://www.snapchat.com/', '+966 54 911 0202', 'https://maps.app.goo.gl/LJ2kCnazo7dCpUet9', 'Motoring Expeditions into the Uncharted', 'Step into the World of Nomadic Road', 'public/storage/infos/banner.png1675715504.png', '2022-03-21 08:23:16', '2025-03-22 22:35:06', 'public/storage/infos/hero_video.mp41742679057.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_01_24_145629_create_packages_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_02_25_231036_create_scheduled_notifications_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2021_09_10_130000_add_meta_to_scheduled_notifications', 1),
(8, '2022_01_23_145651_create_areas_table', 1),
(9, '2022_01_24_145536_create_services_table', 1),
(10, '2022_02_24_145421_create_slidears_table', 1),
(11, '2022_02_24_145435_create_abouts_table', 1),
(12, '2022_02_24_145449_create_contacts_table', 1),
(13, '2022_02_24_145503_create_infos_table', 1),
(14, '2022_02_24_145521_create_pages_table', 1),
(15, '2022_02_27_123202_laratrust_setup_tables', 1),
(16, '2022_02_27_135056_create_visitors_table', 1),
(17, '2022_03_03_153033_create_breadcrumbs_table', 1),
(18, '2022_03_21_155838_add_video_image_to_abouts', 1),
(19, '2022_05_08_093533_create_subscribes_table', 1),
(20, '2022_05_08_095149_add_column_to_infos', 1),
(21, '2022_05_08_145744_create_notifications_table', 1),
(22, '2022_06_16_092306_create_package_details_table', 1),
(23, '2022_06_16_092335_create_service_images_table', 1),
(24, '2022_06_16_092323_create_service_details_table', 2),
(25, '2022_06_19_122008_add_column_to_users', 3),
(26, '2023_02_05_223920_create_categories_table', 4),
(27, '2023_02_05_224503_create_subject_categories_table', 5),
(28, '2023_02_05_224525_create_subject_types_table', 5),
(29, '2023_02_05_235418_create_posts_table', 6),
(30, '2023_02_06_000148_create_post_media_table', 7),
(31, '2025_03_14_165623_add_description_to_categories_table', 8),
(32, '2025_03_14_220437_add_description_to_slidears_table', 9),
(33, '2025_03_15_001536_create_news_letters_table', 10),
(34, '2025_03_28_211451_create_post_details_table', 11),
(35, '2025_04_08_015102_add_details_to_areas_table', 12),
(36, '2025_04_08_015521_create_area_images_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'maheKhalifa87@gmail.com', '2025-03-14 23:15:43', '2025-03-14 23:15:43'),
(4, 'admin@gmail.com', '2025-03-14 23:16:44', '2025-03-14 23:16:44'),
(5, 'munjze@com', '2025-03-14 23:17:44', '2025-03-14 23:17:44'),
(6, 'ahmed@gmail.com', '2025-03-14 23:18:34', '2025-03-14 23:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('19374084-3d64-48d3-bcf0-fa61316a63ed', 'App\\Notifications\\contactNotification', 'App\\Models\\User', 1, '{\"name\":\"Keane Olson\",\"id\":20}', NULL, '2023-09-05 23:23:19', '2023-09-05 23:23:19'),
('29acb8d3-78ef-4aec-b35f-a2b462e091e6', 'App\\Notifications\\contactNotification', 'App\\Models\\User', 1, '{\"name\":\"Brent Vang\",\"id\":21}', NULL, '2023-09-19 21:06:07', '2023-09-19 21:06:07'),
('41322a0a-9a58-49e7-9509-4b042904bc0d', 'App\\Notifications\\contactNotification', 'App\\Models\\User', 1, '{\"name\":\"Brynne Webb\",\"id\":19}', NULL, '2023-09-05 20:35:21', '2023-09-05 20:35:21'),
('783accb3-d959-44fe-b411-4612768329be', 'App\\Notifications\\bookNotification', 'App\\Models\\User', 1, '{\"name\":\"Dahlia Henry\",\"id\":16}', NULL, '2023-09-05 21:22:56', '2023-09-05 21:22:56'),
('d4ebb421-a757-466d-b719-24309df81ad8', 'App\\Notifications\\contactNotification', 'App\\Models\\User', 1, '{\"name\":\"Anna Wilson\",\"id\":22}', NULL, '2023-12-01 18:24:46', '2023-12-01 18:24:46'),
('d820fb57-2db8-4e54-ba9a-9330a39ab3b9', 'App\\Notifications\\contactNotification', 'App\\Models\\User', 1, '{\"name\":\"Robin Solis\",\"id\":23}', NULL, '2025-03-14 23:48:08', '2025-03-14 23:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `page_ar` longtext NOT NULL,
  `page_en` longtext DEFAULT NULL,
  `breadcrumb_logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('work@admin.com', '$2y$10$87RRTbitAH4QD0ubiQmZqegD0okK6yc4XsJf4nFKYandk5Ipfo8tG', '2022-06-22 15:30:55'),
('info@elryad.com', '$2y$10$9bHD2a.k.1hIcZbP.dp8yOQzhDw9LzKXM/RaYjvgMQ3BHUk6PDJ3q', '2022-06-23 12:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'browse_dashboard', 'Browse dashboard', 'can browse dashboard', NULL, NULL),
(2, 'access_roles_permissions', 'Access Roles Permissions', NULL, NULL, NULL),
(3, 'browse_users', 'Browse Users', NULL, NULL, NULL),
(4, 'create_users', 'Create Users', 'Create Users', NULL, NULL),
(5, 'update_users', 'Update Users', 'Update Users', NULL, NULL),
(6, 'delete_users', 'Delete Users', 'Delete Users', NULL, NULL),
(7, 'active_users', 'Active Users', 'Active Users', NULL, NULL),
(19, 'site_setting', 'Site Setting', 'Site Setting', NULL, NULL),
(49, 'browse_categories', 'Browse Categories', 'Browse Categories', NULL, NULL),
(50, 'create_categories', 'Create Categories', 'Create Categories', NULL, NULL),
(51, 'update_categories', 'Update Categories', 'Update Categories', NULL, NULL),
(52, 'delete_categories', 'Delete Categories', 'Delete Categories', NULL, NULL),
(69, 'browse_posts', 'Browse Posts', 'Browse Posts', NULL, NULL),
(70, 'create_posts', 'Create Posts', 'Create Posts', NULL, NULL),
(71, 'update_posts', 'Update Posts', 'Update Posts', NULL, NULL),
(72, 'delete_posts', 'Delete Posts', 'Delete Posts', NULL, NULL),
(73, 'active_posts', 'Active Posts', 'Active Posts', NULL, NULL),
(74, 'browse_contact', 'Browse Contact', 'Browse Contact', NULL, NULL),
(75, 'delete_contact', 'Delete Contact', 'Delete Contact', NULL, NULL),
(76, 'update_contact', 'Update Contact', 'Update Contact', NULL, NULL),
(84, 'browse_common_questions', 'Browse common questions', 'Browse  common questions', NULL, NULL),
(85, 'create_common_questions', 'Create common questions', 'Create common questions', NULL, NULL),
(86, 'update_common_questions', 'Update common questions', 'Update common questions', NULL, NULL),
(87, 'delete_common_questions', 'Delete common questions', 'Delete common questions', NULL, NULL),
(91, 'browse_areas', 'Browse Countries', 'Browse Countries', NULL, NULL),
(92, 'create_areas', 'Create Countries', 'Create Countries', NULL, NULL),
(93, 'update_areas', 'Update Countries', 'Update Countries', NULL, NULL),
(94, 'delete_areas', 'Delete Countries', 'Delete Countries', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(7, 2),
(19, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `description2` longtext DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` int(11) DEFAULT 0,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `reason_unactivate` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `link_video` varchar(255) DEFAULT NULL,
  `video_Cover_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_details`
--

CREATE TABLE `post_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `descripition` varchar(191) NOT NULL,
  `type` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_media`
--

CREATE TABLE `post_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `media` text NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '0->image,1->video',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `notes` text NOT NULL,
  `star` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `name`, `avatar`, `notes`, `star`, `created_at`, `updated_at`) VALUES
(11, 'عبد الله', 'public/storage/rates/user.png1696443100.png', 'تجربتي كانت جيدة بفرع فلسطين المكان رايق ر الخدمة كويسة و الغرف مريحة', NULL, '2023-10-04 18:11:40', '2023-10-04 18:11:40'),
(12, 'احمد محمد', 'public/storage/rates/user.png1696443207.png', 'جيتهم اجازة من الرياض و نزلت بفرع الحمرا المكان هادي و الغرف نظيفة و قريب على المطاعم', NULL, '2023-10-04 18:13:27', '2023-10-04 18:13:27'),
(13, 'عبد الله الزهراني', 'public/storage/rates/user.png1696443263.png', 'حجزت بفرع فلسطين ٣ أيام و كانت تجربة جيدة و الغرف مريحة', NULL, '2023-10-04 18:14:23', '2023-10-04 18:14:23'),
(14, 'سالم عبد الله', 'public/storage/rates/user.png1696443337.png', 'انصح بفرع الحمرا نزلت فيه قبل ٦ شهور و كان هادي و قريب على الخدمات و جنبه في مطاعم و قريب على الكورنيش', NULL, '2023-10-04 18:15:37', '2023-10-04 18:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'Super Admin', 'has permission to do any thing in admin panel', '2022-02-27 07:58:19', '2022-02-28 08:49:41'),
(2, 'Admin', 'Admin', '', '2022-02-27 07:58:19', '2022-06-08 08:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_notifications`
--

CREATE TABLE `scheduled_notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `target_id` varchar(255) DEFAULT NULL,
  `target_type` varchar(255) NOT NULL,
  `target` text NOT NULL,
  `notification_type` varchar(255) NOT NULL,
  `notification` text NOT NULL,
  `send_at` datetime NOT NULL,
  `sent_at` datetime DEFAULT NULL,
  `rescheduled_at` datetime DEFAULT NULL,
  `cancelled_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `scheduled_notifications`
--

INSERT INTO `scheduled_notifications` (`id`, `target_id`, `target_type`, `target`, `notification_type`, `notification`, `send_at`, `sent_at`, `rescheduled_at`, `cancelled_at`, `created_at`, `updated_at`, `meta`) VALUES
(1, '2', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:2;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2071-08-14 01:53:59', NULL, NULL, NULL, '2022-06-21 11:53:59', '2022-06-21 11:53:59', '[]'),
(2, '2', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:2;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2177-06-14 01:59:45', NULL, NULL, NULL, '2022-06-21 11:59:45', '2022-06-21 11:59:45', '[]'),
(3, '3', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:3;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2177-06-15 09:45:08', NULL, NULL, NULL, '2022-06-22 07:45:08', '2022-06-22 07:45:08', '[]'),
(4, '1', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2177-06-15 10:21:19', NULL, NULL, NULL, '2022-06-22 08:21:19', '2022-06-22 08:21:19', '[]'),
(5, '1', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2177-06-15 10:21:23', NULL, NULL, NULL, '2022-06-22 08:21:23', '2022-06-22 08:21:23', '[]'),
(6, '1', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2177-06-15 10:21:41', NULL, NULL, NULL, '2022-06-22 08:21:41', '2022-06-22 08:21:41', '[]'),
(7, '1', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2071-08-15 10:40:08', NULL, NULL, NULL, '2022-06-22 08:40:08', '2022-06-22 08:40:08', '[]'),
(8, '1', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2071-08-15 10:40:38', NULL, NULL, NULL, '2022-06-22 08:40:38', '2022-06-22 08:40:38', '[]'),
(9, '13', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:13;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2023-08-16 01:26:08', NULL, NULL, NULL, '2022-06-22 23:26:08', '2022-06-22 23:26:08', '[]'),
(10, '13', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:13;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2023-08-16 01:31:55', NULL, NULL, NULL, '2022-06-22 23:31:55', '2022-06-22 23:31:55', '[]'),
(11, '7', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:7;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2023-08-16 12:38:01', NULL, NULL, NULL, '2022-06-23 10:38:01', '2022-06-23 10:38:01', '[]'),
(12, '7', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:7;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2023-08-19 10:35:15', NULL, NULL, NULL, '2022-06-26 08:35:15', '2022-06-26 08:35:15', '[]'),
(13, '16', 'App\\Models\\User', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":4:{s:5:\"class\";s:15:\"App\\Models\\User\";s:2:\"id\";i:16;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";}', 'App\\Notifications\\expireDateNotification', 'O:40:\"App\\Notifications\\expireDateNotification\":11:{s:2:\"id\";N;s:6:\"locale\";N;s:10:\"connection\";N;s:5:\"queue\";N;s:15:\"chainConnection\";N;s:10:\"chainQueue\";N;s:19:\"chainCatchCallbacks\";N;s:5:\"delay\";N;s:11:\"afterCommit\";N;s:10:\"middleware\";a:0:{}s:7:\"chained\";a:0:{}}', '2023-08-21 12:52:08', NULL, NULL, NULL, '2022-06-28 10:52:08', '2022-06-28 10:52:08', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `slidears`
--

CREATE TABLE `slidears` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slidears`
--

INSERT INTO `slidears` (`id`, `image`, `created_at`, `updated_at`, `title`, `description`) VALUES
(32, 'public/storage/slidears/2.webp1742677388.webp', '2023-10-02 16:55:56', '2025-03-22 22:03:08', 'Your seze', NULL),
(36, 'public/storage/slidears/3.webp1742677418.webp', '2025-03-22 22:03:38', '2025-03-22 22:03:38', 'You uncover', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `active` tinyint(4) DEFAULT 0,
  `reason_unactivate` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `phone`, `avatar`, `active`, `reason_unactivate`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'مشرف الموقع', 'السعودية -الرياض-حى الربوة', 'admin@admin.com', '123123123', 'public/storage/users/person.png1742667078.png', 1, NULL, NULL, '$2y$10$y7q0FxFPnZT.0iDoiC9aAerrcbBvjYEWnKnSsWACQ97RdReIV6fHO', 'KniDZJM0IrJDGpO6f5Jqne9qfuqAPbyPZd3l2QPaPGuUZLEgwl30vn2e2SDA', '2022-06-19 11:30:41', '2025-03-22 19:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `created_at`, `updated_at`) VALUES
(1, '::1', '2022-10-25 21:19:54', '2022-10-25 21:19:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `area_images`
--
ALTER TABLE `area_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breadcrumbs`
--
ALTER TABLE `breadcrumbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_questions`
--
ALTER TABLE `common_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `post_details`
--
ALTER TABLE `post_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post_media`
--
ALTER TABLE `post_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_media_post_id_foreign` (`post_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `scheduled_notifications`
--
ALTER TABLE `scheduled_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidears`
--
ALTER TABLE `slidears`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `area_images`
--
ALTER TABLE `area_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `breadcrumbs`
--
ALTER TABLE `breadcrumbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `common_questions`
--
ALTER TABLE `common_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `post_details`
--
ALTER TABLE `post_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_media`
--
ALTER TABLE `post_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `scheduled_notifications`
--
ALTER TABLE `scheduled_notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slidears`
--
ALTER TABLE `slidears`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_details`
--
ALTER TABLE `post_details`
  ADD CONSTRAINT `post_details_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `post_media`
--
ALTER TABLE `post_media`
  ADD CONSTRAINT `post_media_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
