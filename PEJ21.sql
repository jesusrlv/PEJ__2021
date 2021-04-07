-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 07-04-2021 a las 05:59:23
-- Versión del servidor: 5.7.32
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `PEJ21`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `id` int(11) NOT NULL,
  `banco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_cuenta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_clabe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `concepto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_ext` int(11) NOT NULL,
  `validacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`id`, `banco`, `no_cuenta`, `no_clabe`, `sucursal`, `concepto`, `id_ext`, `validacion`) VALUES
(1, 'banorte', '1', '1', '1', 'tahona', 12, 2),
(2, 'BANORTE', '123456789', 'A1W32E4E', '1', 'pago en banco', 12, 2),
(3, 'BANREGIO', '123456789', 'QQA133ED4', 'tahona', 'Zacatecas', 12, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `fisc_apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fisc_nombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `fisc_curp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `moral_razon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `moral_denominacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `moral_archivo_acta` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usr` int(11) NOT NULL,
  `validacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `id_ext`, `fisc_apellido`, `fisc_nombre`, `fisc_curp`, `rfc`, `moral_razon`, `moral_denominacion`, `moral_archivo_acta`, `tipo_usr`, `validacion`) VALUES
(1, 1, 'leañso', 'jesus', 'LEVJ810924', 'LEVJ810924', '', '', '', 1, 0),
(2, 0, '', '', '', '', '', '', '', 1, 0),
(3, 0, '', '', '', '', '', '', '', 1, 0),
(4, 0, 'LeaÃ±os', 'Villegas', 'LEVJ810924HZSXLS04', 'LEV', '', '', '', 1, 0),
(20, 12, '', '', '', 'LEVJ8109248K3', 'X', 'x', '../archivos/acta_personas_morales_12.pdf', 2, 1);

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
(32, 12, '../archivos/archivo8_12.pdf', 8, 1, '', '2021-03-25 16:06:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `rcb1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_prov` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `const_fiscal` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `comp_domicilio` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `caratula_edo_cuenta` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ine` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `formato_d32` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `opinion_estatal` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `validacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `nombre`, `usuario`, `pwd`, `perfil`) VALUES
(1, 'uno', 'jesusrlv@correo.com', '123456789', 1),
(2, 'Rodolfo LeaÃ±os', '', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(6, 'Rodolfo LeaÃ±os', 'jesusrl@gmail.com.mx', '9a0c3013dbacdda1873e4a153346dc5c', 1),
(12, 'JesusRLV', 'jesusr@gmail.com', '18a9f76e9e5f5d1237a02a27a3246a1c', 1),
(13, 'Jesus Rodolfo', 'jesusrlvrojo2@gmail.com', 'edeb8297f1a049cf8a4e38a14c021f45', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validacion`
--

CREATE TABLE `validacion` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `datos` int(11) NOT NULL,
  `direccion` int(11) NOT NULL,
  `banco` int(11) NOT NULL,
  `documentos` int(11) NOT NULL,
  `observaciones` varchar(700) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
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
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `validacion`
--
ALTER TABLE `validacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
