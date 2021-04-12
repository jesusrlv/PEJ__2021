-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2021 a las 23:05:52
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `PEJ21`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `curp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tematica` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(72) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usr` int(11) NOT NULL,
  `validacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `id_ext`, `apellido`, `nombre`, `curp`, `tematica`, `telefono`, `email`, `tipo_usr`, `validacion`) VALUES
(1, 1, 'leañso', 'jesus', 'LEVJ810924', 0, 0, '', 1, 0),
(2, 0, '', '', '', 0, 0, '', 1, 0),
(3, 0, '', '', '', 0, 0, '', 1, 0),
(4, 0, 'LeaÃ±os', 'Villegas', 'LEVJ810924HZSXLS04', 0, 0, '', 1, 0),
(20, 12, '', '', '', 0, 0, '', 2, 1),
(21, 15, 'LeaÃ±os V', 'Rodolfo', 'LEVJ810924HZSXLS04', 1, 2147483647, 'jesusrlv_rojo@hotmail.com', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `colonia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `n_int` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `n_ext` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel_of` int(11) NOT NULL,
  `tel_cel` int(11) NOT NULL,
  `validacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `id_ext`, `colonia`, `cp`, `n_int`, `n_ext`, `email`, `tel_of`, `tel_cel`, `validacion`) VALUES
(1, 12, 'xss', 999999, '99999', '99999', 'jesusrlvrojo@gmail.com', 99999, 99999, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docs`
--

CREATE TABLE `docs` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `ruta` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `validacion` int(11) NOT NULL,
  `observaciones` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_agregado` datetime NOT NULL,
  `fecha_actualizado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `docs`
--

INSERT INTO `docs` (`id`, `id_ext`, `ruta`, `tipo_doc`, `validacion`, `observaciones`, `fecha_agregado`, `fecha_actualizado`) VALUES
(25, 12, '../archivos/archivo3_12.pdf', 3, 0, '', '2021-03-25 15:55:50', '0000-00-00 00:00:00'),
(26, 12, '../archivos/archivo4_12.pdf', 4, 0, '', '2021-03-25 15:55:55', '0000-00-00 00:00:00'),
(27, 12, '../archivos/archivo5_12.pdf', 5, 1, '', '2021-03-25 15:55:59', '0000-00-00 00:00:00'),
(28, 12, '../archivos/archivo6_12.pdf', 6, 1, '', '2021-03-25 15:56:03', '0000-00-00 00:00:00'),
(29, 12, '../archivos/archivo7_12.pdf', 7, 1, '', '2021-03-25 15:56:06', '0000-00-00 00:00:00'),
(30, 12, '../archivos/archivo1_12.pdf', 1, 1, '', '2021-03-25 15:56:40', '0000-00-00 00:00:00'),
(31, 12, '../archivos/archivo2_12.pdf', 2, 1, '', '2021-03-25 15:56:43', '0000-00-00 00:00:00'),
(32, 12, '../archivos/archivo8_12.pdf', 8, 1, '', '2021-03-25 16:06:04', '0000-00-00 00:00:00'),
(33, 15, '../archivos/archivo1_15.pdf', 1, 1, '', '2021-04-08 11:54:02', '0000-00-00 00:00:00'),
(34, 15, '../archivos/archivo2_15.pdf', 2, 1, '', '2021-04-08 11:54:07', '0000-00-00 00:00:00'),
(35, 15, '../archivos/archivo3_15.pdf', 3, 1, '', '2021-04-08 11:54:14', '0000-00-00 00:00:00'),
(36, 15, '../archivos/archivo4_15.pdf', 4, 1, '', '2021-04-08 11:54:18', '0000-00-00 00:00:00'),
(37, 15, '../archivos/archivo5_15.pdf', 5, 1, '', '2021-04-08 11:54:23', '0000-00-00 00:00:00'),
(38, 15, '../archivos/archivo6_15.pdf', 6, 1, '', '2021-04-08 11:54:27', '0000-00-00 00:00:00'),
(40, 15, '../archivos/archivo8_15.pdf', 8, 1, '', '2021-04-08 11:54:33', '0000-00-00 00:00:00'),
(41, 15, '../archivos/archivo9_15.pdf', 9, 1, '', '2021-04-08 11:54:36', '0000-00-00 00:00:00'),
(43, 15, '../archivos/archivo7_15.pdf', 7, 1, '', '2021-04-09 13:10:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_h_ref` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `nombre`, `usuario`, `pwd`, `perfil`, `categoria`) VALUES
(1, 'uno', 'jesusrlv@correo.com', '123456789', 1, 0),
(2, 'Rodolfo LeaÃ±os', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, 0),
(6, 'Rodolfo LeaÃ±os', 'jesusrl@gmail.com.mx', '9a0c3013dbacdda1873e4a153346dc5c', 1, 0),
(12, 'JesusRLV', 'jesusr@gmail.com', '18a9f76e9e5f5d1237a02a27a3246a1c', 1, 0),
(14, 'Rodolfo LeaÃ±os', 'LEVJ8109248K3', 'edeb8297f1a049cf8a4e38a14c021f45', 1, 0),
(15, 'Rodolfo LeaÃ±os', 'LEVJ810924HZSXLS04', 'edeb8297f1a049cf8a4e38a14c021f45', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validacion`
--

CREATE TABLE `validacion` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `tipo_validacion` int(11) NOT NULL COMMENT '1 para datos, 2 para docs, 3 para general',
  `observaciones` varchar(700) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `validacion`
--
ALTER TABLE `validacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `validacion`
--
ALTER TABLE `validacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
