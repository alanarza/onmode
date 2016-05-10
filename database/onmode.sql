-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2016 a las 22:21:25
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `onmode`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `on_post` int(10) unsigned NOT NULL DEFAULT '0',
  `from_user` int(10) unsigned NOT NULL DEFAULT '0',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_on_post_foreign` (`on_post`),
  KEY `comments_from_user_foreign` (`from_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `on_post`, `from_user`, `body`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'gordo\r\n', '2016-04-30 07:46:49', '2016-04-30 07:46:49'),
(2, 1, 2, 'holanda', '2016-04-30 07:47:35', '2016-04-30 07:47:35'),
(3, 6, 1, 'ajajaja', '2016-05-04 07:22:57', '2016-05-04 07:22:57'),
(4, 6, 5, 'gil', '2016-05-04 07:28:35', '2016-05-04 07:28:35'),
(5, 7, 1, 'PELUCAAA', '2016-05-05 21:27:21', '2016-05-05 21:27:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE IF NOT EXISTS `destacados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `post_id`) VALUES
(1, 6),
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_29_144602_posts', 1),
('2016_04_29_144608_comments', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Mi Descripcion Personalizada',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_title_unique` (`title`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_author_id_foreign` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `description`, `body`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Primer post del blog', 'Mi Descrip', '<p>Hola bienvenidos al blog</p>\r\n<p>&nbsp;<img src="../images/Anybondstodaybugsblackface_1_.jpg" alt="" /></p>', 'primer-post-del-blog', 1, '2016-04-30 07:07:57', '2016-04-30 07:08:14'),
(2, 1, 'pochis', 'Mi Descripcion Personalizada', '<p>hola</p>', 'pochis', 1, '2016-04-30 07:46:33', '2016-04-30 07:46:33'),
(3, 3, 'test', 'Mi Descripcion Personalizada', '<p>teas</p>', 'test', 1, '2016-05-04 06:08:50', '2016-05-04 06:08:50'),
(4, 1, 'test 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '<p>test 2</p>', 'test-2', 1, '2016-05-04 06:09:54', '2016-05-04 06:09:54'),
(5, 1, 'test 3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '<p>asdfasdfasdfasdf</p>', 'test-3', 1, '2016-05-04 06:48:42', '2016-05-04 06:48:42'),
(6, 1, 'Todo el dia choni', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus..........texto adicional luego de los 200 caracteres', '<p><img src="../images/Anybondstodaybugsblackface_1_1.jpg" alt="" /></p>', 'asdasdasfd', 1, '2016-05-04 07:20:35', '2016-05-04 07:22:51'),
(7, 5, 'pichu gil', 'este es un post de pichu', '<p>asdfsadfasdf asdfasdfghasdfg</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;<img src="/images/Anybondstodaybugsblackface_1_2.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>SOY OMAR</p>', 'pichu-gil', 1, '2016-05-04 07:27:10', '2016-05-04 07:27:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','contCreator','author','subscriber') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'author',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eliezer Arza', 'arzapersonal@gmail.com', '$2y$10$JrEf85wWPi/fIyDUXjdE5OjAgZYLOjJgZH45.yxq09M2Hx.aufuRK', 'admin', '7GdSuPTV61n5pNpmHJdFfqCG12sjKgzY291O6mmLmBO78aaYSn4qmjsNvsG8', '2016-04-30 07:07:23', '2016-05-08 06:08:26'),
(2, 'elian', 'pocho@gmail.com', '$2y$10$0lBd7dpOQChRaNmcX7pFp.77ATr3MC0d3KZl6wxuAuayxBkoiA3uS', 'author', NULL, '2016-04-30 07:47:22', '2016-04-30 07:47:22'),
(3, 'elian arza', 'ernestito-a@hotmail.com', '$2y$10$dxyG.nMC0C5MN9VnQSCXQ.CZWTujoSISUWRYbhqCkMKTV7sMbgApi', 'admin', 'FMHtw98B6ySxsb4Ur4aBlGg07ftpbVJ4QLjQ3NPr8k5VcGsCUlmbHINYHHJp', '2016-05-04 06:07:14', '2016-05-04 06:09:03'),
(4, 'lautaro contrera', 'laucon@gmail.com', '$2y$10$Uv4UHVT4PQVRoUrUApZfMujFDtoDfZVd23oHQr3X3UImoYzxpw5Fa', 'author', 'xx1todUv4XDPd9iVYshbTml6QbUaqYYncWelbKGctWiPGIfYSOK8isWPD30g', '2016-05-04 06:08:11', '2016-05-04 06:08:37'),
(5, 'ernesto omar arza', 'omar@gmail.com', '$2y$10$VKqlpZq6XaWmj49tjZ7Om.4DliGlsMvnEMZYLoEn4Aw99xWZGFE7q', 'author', NULL, '2016-05-04 07:25:49', '2016-05-04 07:25:49');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_from_user_foreign` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_on_post_foreign` FOREIGN KEY (`on_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD CONSTRAINT `destacados_post_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
