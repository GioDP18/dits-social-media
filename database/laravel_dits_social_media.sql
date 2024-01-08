-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 06:22 AM
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
-- Database: `laravel_dits_social_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `image`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 'Vel et ut id officia incidunt.', 'https://via.placeholder.com/640x480.png/00ff00?text=voluptas', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(2, 4, 7, 'Velit odit voluptatem fugit qui ut aliquam.', 'https://via.placeholder.com/640x480.png/006633?text=eum', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(3, 1, 10, 'Qui distinctio provident molestias.', 'https://via.placeholder.com/640x480.png/008800?text=doloremque', '2024-01-07 21:03:31', '2024-01-07 21:03:31'),
(4, 10, 8, 'Aut molestias eos temporibus in.', 'https://via.placeholder.com/640x480.png/00cc44?text=harum', '2024-01-07 21:03:31', '2024-01-07 21:03:31'),
(5, 8, 9, 'Ullam laboriosam voluptates eaque blanditiis.', 'https://via.placeholder.com/640x480.png/00cc11?text=sit', '2024-01-07 21:03:31', '2024-01-07 21:03:31'),
(6, 8, 7, 'Aut modi est quaerat saepe.', 'https://via.placeholder.com/640x480.png/005599?text=minima', '2024-01-07 21:03:31', '2024-01-07 21:03:31'),
(7, 8, 1, 'Non aspernatur aut voluptatum et totam.', 'https://via.placeholder.com/640x480.png/00ccee?text=doloribus', '2024-01-07 21:03:31', '2024-01-07 21:03:31'),
(8, 4, 4, 'Laudantium provident sit et voluptatum.', 'https://via.placeholder.com/640x480.png/0000dd?text=omnis', '2024-01-07 21:03:31', '2024-01-07 21:03:31'),
(9, 4, 4, 'Sed soluta ut ut.', 'https://via.placeholder.com/640x480.png/001122?text=nulla', '2024-01-07 21:03:31', '2024-01-07 21:03:31'),
(10, 1, 5, 'Libero numquam temporibus quo doloribus.', 'https://via.placeholder.com/640x480.png/000022?text=vero', '2024-01-07 21:03:31', '2024-01-07 21:03:31');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2024_01_08_044110_create_posts_table', 1),
(18, '2024_01_08_044123_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Autem magnam omnis et nemo.', 'https://via.placeholder.com/640x480.png/0066ee?text=laborum', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(2, 1, 'Amet voluptate accusantium qui consequuntur delectus provident vero.', 'https://via.placeholder.com/640x480.png/00aa77?text=aut', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(3, 2, 'Voluptas accusamus nihil molestiae.', 'https://via.placeholder.com/640x480.png/009977?text=voluptatem', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(4, 1, 'Qui nesciunt cupiditate cumque assumenda iure.', 'https://via.placeholder.com/640x480.png/0099ee?text=quasi', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(5, 1, 'Molestias eum magni vero natus.', 'https://via.placeholder.com/640x480.png/004477?text=et', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(6, 2, 'Impedit ut quod autem ut est.', 'https://via.placeholder.com/640x480.png/00aa44?text=et', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(7, 1, 'Commodi eos voluptate et.', 'https://via.placeholder.com/640x480.png/0044ff?text=sit', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(8, 1, 'Amet aut magni ut inventore eveniet nihil sint.', 'https://via.placeholder.com/640x480.png/00ccff?text=eos', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(9, 1, 'Fuga dolorem autem accusantium tempore tempora.', 'https://via.placeholder.com/640x480.png/004400?text=dolores', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(10, 1, 'Corporis qui molestias sapiente eos nemo.', 'https://via.placeholder.com/640x480.png/002244?text=repellat', '2024-01-07 21:03:30', '2024-01-07 21:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mack Stokes', 'Mr. Tom Stanton', 'female', 'https://via.placeholder.com/640x480.png/00ffcc?text=quis', 'ohara.guillermo@example.org', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', 'vf7soNQtFp', '2024-01-07 21:03:29', '2024-01-07 21:03:29'),
(2, 'Broderick Carroll', 'Mr. Clement Corwin III', 'female', 'https://via.placeholder.com/640x480.png/0088cc?text=assumenda', 'madyson.schowalter@example.com', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', 'zf9NtESkLV', '2024-01-07 21:03:29', '2024-01-07 21:03:29'),
(3, 'Lowell Kuvalis', 'Caleigh Welch', 'male', 'https://via.placeholder.com/640x480.png/0000dd?text=harum', 'joesph62@example.com', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', 'qzppcW7fvG', '2024-01-07 21:03:29', '2024-01-07 21:03:29'),
(4, 'Sharon Schinner', 'Hester McCullough', 'female', 'https://via.placeholder.com/640x480.png/0022ee?text=alias', 'jast.kasey@example.net', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', 'cbPxhmHF4l', '2024-01-07 21:03:29', '2024-01-07 21:03:29'),
(5, 'Ona Runte', 'Dr. Richard Reinger', 'male', 'https://via.placeholder.com/640x480.png/009977?text=sequi', 'mohr.jocelyn@example.net', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', '4zpO7vlj1G', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(6, 'Florida Abernathy', 'Zora Goldner', 'male', 'https://via.placeholder.com/640x480.png/0099dd?text=quisquam', 'xmaggio@example.net', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', 'UuIzWUWQ1p', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(7, 'Prof. Ramona Strosin Jr.', 'Sedrick Kertzmann', 'female', 'https://via.placeholder.com/640x480.png/0033aa?text=consequatur', 'theodora79@example.net', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', 'adVNl3OeC5', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(8, 'Leola Zemlak', 'Rosalind Cummings', 'male', 'https://via.placeholder.com/640x480.png/00ddbb?text=animi', 'xrippin@example.com', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', 'Lctjb1l3lg', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(9, 'Alexys Wintheiser IV', 'Prof. Daron Jones', 'male', 'https://via.placeholder.com/640x480.png/005588?text=quia', 'dell.nicolas@example.net', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', 'Y1B5Eb4ki3', '2024-01-07 21:03:30', '2024-01-07 21:03:30'),
(10, 'Aiyana Monahan', 'Jordy Boyle', 'female', 'https://via.placeholder.com/640x480.png/0044dd?text=consequatur', 'santiago.reynolds@example.org', '2024-01-07 21:03:29', '$2y$12$VqhsudORoA7dkw542ri9ouQUBoAslAXLPBWcxGX2tYcI1lw.U0r/2', 'lGONm5GGkm', '2024-01-07 21:03:30', '2024-01-07 21:03:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
