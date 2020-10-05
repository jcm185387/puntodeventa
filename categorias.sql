-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2020 a las 16:46:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `puntodeventa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoryName`, `Description`, `Picture`, `Active`, `created_at`, `updated_at`) VALUES
(1, 'Dulces', 'Gran variedad de dulces para niños y adultos', '', 0, '2020-10-05 01:12:06', '2020-10-05 01:12:12'),
(2, 'Refrescos', 'Gran variedad de refrescos: coca cola y de sabores en varios tamaños', '', 0, '2020-10-05 01:12:06', '2020-10-05 01:12:12'),
(3, 'Galletas', 'Gran variedad de galletas: emperador, arcoiris, maravillas, etc.', '', 0, '2020-10-05 01:12:06', '2020-10-05 01:12:12'),
(4, 'Papas', 'Gran variedad de papas marca: Sabritas, rancheritos, churrumais, rufles, etc', '', 0, '2020-10-05 01:12:06', '2020-10-05 01:12:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
