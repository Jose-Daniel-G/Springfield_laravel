-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2023 a las 23:46:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projectjdgo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'dolores', 'dolores', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(2, 'amet', 'amet', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(3, 'neque', 'neque', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(4, 'vitae', 'vitae', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(5, 'Daniel', 'Daniel', '2023-07-09 01:52:04', '2023-07-09 01:52:04'),
(6, 'Daniel', 'Daniel', '2023-07-09 01:52:08', '2023-07-09 01:52:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `imageable_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `url`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(1, 'https://via.placeholder.com/400x400.png/005544?text=similique', 2, 'App\\Models\\User', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(2, 'https://via.placeholder.com/400x400.png/00cc99?text=quis', 3, 'App\\Models\\User', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(3, 'https://via.placeholder.com/400x400.png/0044bb?text=quam', 1, 'App\\Models\\Post', '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(4, 'https://via.placeholder.com/400x400.png/0044ff?text=eligendi', 2, 'App\\Models\\Post', '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(5, 'https://via.placeholder.com/400x400.png/00ee22?text=esse', 3, 'App\\Models\\Post', '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(6, 'https://via.placeholder.com/400x400.png/00bb77?text=tempore', 4, 'App\\Models\\Post', '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(7, 'https://via.placeholder.com/400x400.png/00bbaa?text=tempora', 5, 'App\\Models\\Post', '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(8, 'https://via.placeholder.com/400x400.png/006666?text=corporis', 6, 'App\\Models\\Post', '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(9, 'https://via.placeholder.com/400x400.png/00cccc?text=voluptate', 7, 'App\\Models\\Post', '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(10, 'https://via.placeholder.com/400x400.png/007777?text=expedita', 8, 'App\\Models\\Post', '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(11, '/storage/uploads/1688830961_img5.jpg', 9, 'App\\Models\\Post', '2023-07-08 17:42:41', '2023-07-08 17:42:41'),
(12, '/storage/uploads/1688860205_Cuentame.jpg', 10, 'App\\Models\\Post', '2023-07-09 01:50:05', '2023-07-09 01:50:05'),
(13, '/storage/uploads/1688869039_juan_david.jpg', 11, 'App\\Models\\Post', '2023-07-09 04:17:19', '2023-07-09 04:17:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_10_180127_create_categories_table', 1),
(6, '2022_11_10_180156_create_posts_table', 1),
(7, '2022_11_10_182031_create_tags_table', 1),
(8, '2022_11_10_182335_create_post_tag_table', 1),
(9, '2023_06_03_130821_create_permission_tables', 1),
(10, '2023_06_07_191140_create_images_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jose.jdgo97@gmail.com', '$2y$10$DYfh7Bh6KEHADmVIiicTXO8G9GiNnWfyickK8zryvy5.hDaBscC7a', '2023-07-09 04:21:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `extract` text DEFAULT NULL,
  `body` longtext DEFAULT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `extract`, `body`, `status`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Aliquid nam omnis ut qui molestias quasi sunt.', 'aliquid-nam-omnis-ut-qui-molestias-quasi-sunt', 'Deserunt sit tempora error sunt. Fugit sint eaque voluptatem perferendis et. Expedita error omnis voluptatum consequuntur voluptas.', 'Harum incidunt blanditiis aspernatur qui voluptatum. Voluptatibus natus exercitationem delectus.', '1', 2, 4, '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(2, 'Incidunt nihil repellendus repudiandae magni autem possimus.', 'incidunt-nihil-repellendus-repudiandae-magni-autem-possimus', 'Esse corrupti ipsum similique et. Non at harum repellendus. Ut a nesciunt quasi repudiandae ipsa.', 'Et facere esse aut consequatur et. Enim molestiae autem officia pariatur in quaerat.', '1', 1, 1, '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(3, 'Et amet iusto voluptatem odio aliquam excepturi aliquid sed.', 'et-amet-iusto-voluptatem-odio-aliquam-excepturi-aliquid-sed', 'Temporibus accusamus placeat eos dicta. Et perspiciatis fugit quia. Quasi laudantium autem dolore optio quod voluptas minima magni.', 'Eius et ipsa accusantium qui voluptatem. Iusto odio pariatur ducimus in. Et qui autem distinctio.', '1', 3, 3, '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(4, 'Voluptas laudantium sequi quo ab vero.', 'voluptas-laudantium-sequi-quo-ab-vero', 'Aut sint libero saepe. Laborum facere quasi voluptatem explicabo modi. Perspiciatis veritatis enim et sit amet a amet.', 'Sit quia explicabo unde sint laborum voluptatum cum nostrum. Ut sed velit iusto perferendis.', '2', 2, 3, '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(5, 'Quia ut optio quidem accusantium.', 'quia-ut-optio-quidem-accusantium', 'Omnis nihil quo debitis consequatur. Est ut aspernatur aut. Est adipisci numquam laudantium corporis vel reiciendis quaerat. Sint aperiam necessitatibus earum et accusantium ullam.', 'Enim veniam odit est necessitatibus. Occaecati deserunt saepe sint consequuntur.', '2', 1, 2, '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(6, 'Facilis quaerat repudiandae nihil aut ea esse.', 'facilis-quaerat-repudiandae-nihil-aut-ea-esse', 'Magnam voluptatem culpa ut explicabo tenetur. Aut magni ipsum quis voluptatem dolorem sit repellat. Perspiciatis neque molestiae explicabo aut optio sint deleniti.', 'Quam est nostrum recusandae sed. Quis delectus quia aut omnis. Et sint inventore optio sit modi ut.', '1', 2, 1, '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(7, 'Nostrum autem voluptas id ducimus totam.', 'nostrum-autem-voluptas-id-ducimus-totam', 'Sequi reiciendis voluptas eos odit quas accusamus architecto. Assumenda sit saepe et et ut. Fugiat dicta velit et sed sequi.', 'Minima qui quam officiis occaecati explicabo at. Ipsa quia est aut. Rerum explicabo ea qui.', '1', 3, 1, '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(8, 'Sunt fugiat et dolore sit rem ut nulla laudantium.', 'sunt-fugiat-et-dolore-sit-rem-ut-nulla-laudantium', 'Accusamus accusantium ab saepe est amet nisi tempore. Non aut sunt voluptates harum libero excepturi sit velit. Est ducimus quae rerum praesentium sed consequatur dicta adipisci. Cupiditate minima quod velit autem nostrum eligendi vel nostrum.', 'Vel atque animi quibusdam in consectetur ab autem. Voluptatem explicabo qui magnam doloremque.', '2', 1, 1, '2023-07-08 17:27:41', '2023-07-08 17:27:41'),
(9, 'nosotros', 'nosotros', NULL, 'no somos nada sin ti', '1', 1, 2, '2023-07-08 17:42:41', '2023-07-08 17:42:41'),
(10, 'cuentame', 'cuentame', NULL, 'tus problemas seran resueltos si nos necesitas te puedes comunicar al 318596789', '1', 1, 2, '2023-07-09 01:50:05', '2023-07-09 01:50:05'),
(11, 'juan', 'juan', NULL, 'is the best', '1', 1, 2, '2023-07-09 04:17:19', '2023-07-09 04:17:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 5, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 2, 7, NULL, NULL),
(5, 3, 1, NULL, NULL),
(6, 3, 6, NULL, NULL),
(7, 4, 2, NULL, NULL),
(8, 4, 6, NULL, NULL),
(9, 5, 4, NULL, NULL),
(10, 5, 6, NULL, NULL),
(11, 6, 1, NULL, NULL),
(12, 6, 6, NULL, NULL),
(13, 7, 2, NULL, NULL),
(14, 7, 6, NULL, NULL),
(15, 8, 1, NULL, NULL),
(16, 8, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `color`, `created_at`, `updated_at`) VALUES
(1, 'minima', 'minima', 'indigo', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(2, 'quia', 'quia', 'indigo', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(3, 'aperiam', 'aperiam', 'purple', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(4, 'doloremque', 'doloremque', 'red', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(5, 'molestiae', 'molestiae', 'blue', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(6, 'nesciunt', 'nesciunt', 'pink', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(7, 'ipsa', 'ipsa', 'yellow', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(8, 'eum', 'eum', 'red', '2023-07-08 17:27:40', '2023-07-08 17:27:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` varchar(255) NOT NULL DEFAULT '2',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rol`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jose Daniel Grijalba Osorio', 'jose.jdgo97@gmail.com', NULL, '$2y$10$6hiieUJYFBncsaoTWILKre3ehrnzWUGEdmjZ8hT6KP1OgRaOQq61u', '2', 1, NULL, '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(2, 'Maximillia Hermiston', 'xjenkins@example.com', '2023-07-08 17:27:40', '$2y$10$MzBt716.R6K55d7GBke4Ke4cHKhcH/lbNN7bDQM2ndFamuXy94mbK', '2', 1, 'XGefhCwm8k', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(3, 'Prof. Reva Aufderhar', 'mgrimes@example.com', '2023-07-08 17:27:40', '$2y$10$MzBt716.R6K55d7GBke4Ke4cHKhcH/lbNN7bDQM2ndFamuXy94mbK', '2', 1, 'D4WVqm2U14', '2023-07-08 17:27:40', '2023-07-08 17:27:40'),
(4, 'Joshua Osorio', 'jose.grijalba@aunarcali.edu.co', NULL, '$2y$10$kW/w2iW.S6Cqr6W2a3H9NeDayfewUF3bLuWi5oZ835E4B/H8yNY7m', '2', 1, NULL, '2023-07-08 21:27:31', '2023-07-08 21:27:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
