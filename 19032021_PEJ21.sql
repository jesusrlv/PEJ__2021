-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-04-2021 a las 20:06:31
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
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id` int(11) NOT NULL,
  `id_ext1` int(11) NOT NULL COMMENT 'postulante',
  `id_ext2` int(11) NOT NULL COMMENT 'revisor',
  `doc1` int(11) NOT NULL COMMENT 'Currículum vitae',
  `doc2` int(11) NOT NULL COMMENT 'Semblanza de trayectoria',
  `doc3` int(11) NOT NULL COMMENT 'Material bibliográfico',
  `doc4` int(11) NOT NULL COMMENT 'Video',
  `observaciones` varchar(300) NOT NULL,
  `hora_calificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id`, `id_ext1`, `id_ext2`, `doc1`, `doc2`, `doc3`, `doc4`, `observaciones`, `hora_calificacion`) VALUES
(1, 16, 25, 1, 2, 3, 4, 'Excelente trabajo, muy nutrido.', '2021-04-16 00:31:06'),
(2, 15, 25, 1, 2, 3, 2, '22111', '2021-04-16 00:48:34'),
(3, 17, 25, 1, 2, 3, 2, '1111', '2021-04-16 00:50:00'),
(4, 15, 23, 10, 9, 9, 8, 'Texto', '2021-04-16 00:50:46'),
(5, 17, 23, 10, 2, 3, 6, 'nada', '2021-04-16 00:51:25'),
(7, 16, 23, 10, 10, 10, 9, 'Le señalo que le falto mas diseño a su trabajo.', '2021-04-16 01:03:09'),
(8, 26, 27, 1, 5, 10, 10, 'Sin comentarios', '2021-04-16 03:21:23'),
(9, 17, 44, 10, 9, 5, 6, 'ninguno', '2021-04-17 18:32:42'),
(10, 15, 44, 10, 7, 8, 8, '', '2021-04-17 18:35:07'),
(11, 15, 45, 10, 8, 6, 8, '', '2021-04-17 18:51:30'),
(12, 34, 46, 9, 8, 9, 8, 'Buen expediente', '2021-04-18 02:48:22'),
(13, 15, 22, 4, 7, 7, 4, 'Pésimo expediente', '2021-04-18 11:31:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'LOGRO ACADÉMICO (12 - 19 AÑOS)'),
(2, 'LOGRO ACADÉMICO (20 - 29 AÑOS)'),
(3, 'DISCAPACIDAD E INTEGRACIÓN'),
(4, 'INGENIO EMPRENDEDOR'),
(5, 'RESPONSABILIDAD SOCIAL'),
(6, 'MÉRITO MIGRANTE'),
(7, 'MÉRITO CAMPESINO'),
(8, 'PROTECCIÓN AL MEDIO AMBIENTE'),
(9, 'CULTURA CÍVICA, POLÍTICA Y DEMOCRACIA'),
(10, 'LITERATURA'),
(11, 'ARTES ESCÉNICAS (MÚSICA)'),
(12, 'ARTES ESCÉNICAS (TEATRO)'),
(13, 'ARTES ESCÉNICAS (DANZA)'),
(14, 'ARTES PLÁSTICAS, VISUALES Y POPULARES'),
(15, 'ARTE URBANO'),
(16, 'CIENCIA Y TECNOLOGÍA');

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
  `telefono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(72) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` int(11) NOT NULL,
  `grado` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `tipo_usr` int(11) NOT NULL,
  `validacion` int(11) NOT NULL,
  `medal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `id_ext`, `apellido`, `nombre`, `curp`, `tematica`, `telefono`, `email`, `municipio`, `grado`, `edad`, `tipo_usr`, `validacion`, `medal`) VALUES
(1, 1, 'leañso', 'jesus', 'LEVJ810924', 0, '0', '', 0, 0, 0, 1, 0, 0),
(2, 0, '', '', '', 0, '0', '', 0, 0, 0, 1, 0, 0),
(3, 0, '', '', '', 0, '0', '', 0, 0, 0, 1, 0, 0),
(20, 12, '', '', '', 0, '0', '', 0, 0, 0, 2, 1, 0),
(21, 15, 'LeaÃ±os V', 'Rodolfo', 'LEVJ810924HZSXLS03', 1, '2147483647', 'jesusrlv_rojo@hotmail.com', 0, 0, 0, 1, 1, 1),
(23, 17, 'Rodolfo Ingenio emprendedor', 'Jesus', 'Levj810924', 1, '9999999', 'hesus@htoma.con', 0, 0, 0, 1, 2, 0),
(24, 26, 'Leaños Villegas', 'Jesus Rodolfo', 'LEVJ810924HZSXLS04', 10, '4927951930', 'jesusrlv_rojo@hotmail.com', 2, 1, 0, 1, 2, 0),
(25, 16, 'Leaños Villegas', 'Jesus Rodolfo 2', 'LEVC860629MZSXLL06', 9, '4927951930', 'jesusrlv_rojo@hotmail.com', 58, 5, 21, 1, 2, 1),
(26, 28, 'UNO', 'UNO', 'AUMS980808MZSCNL09', 1, '11111111', 'uno@uno', 1, 1, 12, 1, 2, 0),
(27, 29, 'dos', 'dos', 'EORJ971212MZSSSS01', 2, '22222', 'dos@dos', 2, 2, 19, 1, 2, 0),
(28, 30, 'trwes', 'tres', 'RORC000516MJCMDTA1', 3, '333333', 'tres@tres.com', 4, 5, 20, 1, 2, 0),
(29, 31, '4', '4', 'ROMM960813MZSMRT06', 4, '4', 'cuatro@cuatro', 13, 4, 19, 1, 2, 0),
(30, 32, '5', 'cinco', 'CAAD990907MZSSCN00', 5, 'cinco', 'cinco@cinco', 12, 2, 24, 1, 2, 0),
(31, 33, 'seis', 'seis', 'SIBS920824MZSMCT05', 6, '66662666', 'seis@seis', 4, 4, 26, 1, 2, 0),
(32, 34, 'siete', 'siete', 'AIPB920602MZSMLR07', 7, '7777777', 'siete@siete', 25, 6, 26, 1, 2, 0),
(33, 35, 'ocho', 'ocho', 'OIRG941107MZSLMD08', 8, '888888888', 'ocho@ocho', 11, 5, 19, 1, 2, 0),
(34, 36, 'nueve', 'nueve', 'LEBJ960610MZSDCN09', 9, '99999', 'nueve@nueve', 13, 2, 23, 1, 2, 0),
(35, 37, '10', 'diez', 'ROTD930516MZSSRL00', 10, '1010101010', 'diez@diez', 33, 5, 26, 1, 2, 0),
(36, 38, 'once', 'once', 'OXOJ921219MZSXRN07', 11, '11111111111111', 'once@once', 16, 5, 27, 1, 2, 0),
(37, 39, 'doce', 'doce', 'RORV980624MZSMML08', 12, '12112112121212121', 'doce@doce', 13, 4, 25, 1, 2, 0),
(38, 40, 'trece', 'trece', 'LOSG010417MASPCLA2', 13, '113131311313', 'trece@trece', 17, 6, 26, 1, 2, 0),
(39, 41, 'catorce', 'catorce', 'IAAA940119MCLBLL08', 14, '1414141414', 'catorce@catorce', 16, 3, 26, 1, 2, 0),
(40, 42, 'quince', 'quince', 'HERE960831MZSRDS06', 15, '15151515', 'quince@quince', 15, 4, 27, 1, 2, 0),
(41, 43, '16', '16', 'ROOF921011MZSSLB09', 16, '161616161', 'diesiseis@16', 14, 5, 27, 1, 2, 0);

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
  `observaciones` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_agregado` datetime NOT NULL,
  `fecha_actualizado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `docs`
--

INSERT INTO `docs` (`id`, `id_ext`, `ruta`, `tipo_doc`, `validacion`, `observaciones`, `fecha_agregado`, `fecha_actualizado`) VALUES
(25, 12, 'archivos/archivo3_12.pdf', 3, 0, '', '2021-03-25 15:55:50', '0000-00-00 00:00:00'),
(26, 12, 'archivos/archivo4_12.pdf', 4, 0, '', '2021-03-25 15:55:55', '0000-00-00 00:00:00'),
(27, 12, 'archivos/archivo5_12.pdf', 5, 1, '', '2021-03-25 15:55:59', '0000-00-00 00:00:00'),
(28, 12, 'archivos/archivo6_12.pdf', 6, 1, '', '2021-03-25 15:56:03', '0000-00-00 00:00:00'),
(29, 12, 'archivos/archivo7_12.pdf', 7, 1, '', '2021-03-25 15:56:06', '0000-00-00 00:00:00'),
(30, 12, 'archivos/archivo1_12.pdf', 1, 1, '', '2021-03-25 15:56:40', '0000-00-00 00:00:00'),
(31, 12, 'archivos/archivo2_12.pdf', 2, 1, '', '2021-03-25 15:56:43', '0000-00-00 00:00:00'),
(32, 12, 'archivos/archivo8_12.pdf', 8, 1, '', '2021-03-25 16:06:04', '0000-00-00 00:00:00'),
(33, 15, 'archivos/archivo1_15.pdf', 1, 1, '', '2021-04-08 11:54:02', '0000-00-00 00:00:00'),
(34, 15, 'archivos/archivo2_15.pdf', 2, 1, '', '2021-04-08 11:54:07', '0000-00-00 00:00:00'),
(35, 15, 'archivos/archivo3_15.pdf', 3, 1, '', '2021-04-08 11:54:14', '0000-00-00 00:00:00'),
(36, 15, 'archivos/archivo4_15.pdf', 4, 1, '', '2021-04-08 11:54:18', '0000-00-00 00:00:00'),
(37, 15, 'archivos/archivo5_15.pdf', 5, 1, '', '2021-04-08 11:54:23', '0000-00-00 00:00:00'),
(38, 15, 'archivos/archivo6_15.pdf', 6, 1, '', '2021-04-08 11:54:27', '0000-00-00 00:00:00'),
(39, 15, 'archivos/archivo7_15.pdf', 7, 1, '', '2021-04-08 11:54:30', '0000-00-00 00:00:00'),
(40, 15, 'archivos/archivo8_15.pdf', 8, 1, '', '2021-04-08 11:54:33', '0000-00-00 00:00:00'),
(41, 15, 'archivos/archivo9_15.pdf', 9, 1, '', '2021-04-08 11:54:36', '0000-00-00 00:00:00'),
(42, 16, 'archivos/archivo1_16.pdf', 1, 1, NULL, '2021-04-09 18:36:34', NULL),
(43, 16, 'archivos/archivo4_16.pdf', 4, 1, NULL, '2021-04-09 20:30:57', NULL),
(44, 17, 'archivos/archivo1_17.pdf', 1, 1, NULL, '2021-04-13 01:37:41', NULL),
(45, 17, 'archivos/archivo2_17.pdf', 2, 1, NULL, '2021-04-13 01:37:44', NULL),
(46, 17, 'archivos/archivo3_17.pdf', 3, 1, NULL, '2021-04-13 01:37:47', NULL),
(47, 17, 'archivos/archivo4_17.pdf', 4, 1, NULL, '2021-04-13 01:37:50', NULL),
(48, 17, 'archivos/archivo5_17.pdf', 5, 1, NULL, '2021-04-13 01:37:53', NULL),
(49, 17, 'archivos/archivo6_17.pdf', 6, 1, NULL, '2021-04-13 01:37:55', NULL),
(50, 17, 'archivos/archivo7_17.pdf', 7, 1, NULL, '2021-04-13 01:37:58', NULL),
(51, 17, 'archivos/archivo8_17.pdf', 8, 1, NULL, '2021-04-13 01:38:01', NULL),
(52, 17, 'archivos/archivo9_17.pdf', 9, 1, NULL, '2021-04-13 01:38:04', NULL),
(53, 16, 'archivos/archivo8_16.pdf', 8, 1, NULL, '2021-04-15 00:55:22', NULL),
(55, 16, 'archivos/archivo5_16.pdf', 5, 1, NULL, '2021-04-15 19:07:30', NULL),
(56, 16, 'archivos/archivo6_16.pdf', 6, 1, NULL, '2021-04-15 19:07:36', NULL),
(57, 16, 'archivos/archivo2_16.pdf', 2, 1, NULL, '2021-04-15 19:07:43', NULL),
(58, 16, 'archivos/archivo3_16.pdf', 3, 1, NULL, '2021-04-15 19:07:47', NULL),
(59, 16, 'archivos/archivo7_16.pdf', 7, 1, NULL, '2021-04-15 19:07:53', NULL),
(60, 26, 'archivos/archivo1_26.pdf', 1, 1, NULL, '2021-04-16 03:19:34', NULL),
(61, 26, 'archivos/archivo2_26.pdf', 2, 1, NULL, '2021-04-16 03:19:39', NULL),
(62, 26, 'archivos/archivo3_26.pdf', 3, 1, NULL, '2021-04-16 03:19:44', NULL),
(63, 26, 'archivos/archivo4_26.pdf', 4, 1, NULL, '2021-04-16 03:19:46', NULL),
(64, 26, 'archivos/archivo5_26.pdf', 5, 1, NULL, '2021-04-16 03:19:50', NULL),
(65, 26, 'archivos/archivo6_26.pdf', 6, 1, NULL, '2021-04-16 03:19:53', NULL),
(66, 26, 'archivos/archivo7_26.pdf', 7, 1, NULL, '2021-04-16 03:19:56', NULL),
(67, 26, 'archivos/archivo8_26.pdf', 8, 1, NULL, '2021-04-16 03:20:03', NULL),
(68, 26, 'https://www.youtube.com/watch?v=p-Es099SUGk', 9, 1, NULL, '2021-04-16 03:20:31', NULL),
(69, 16, 'https://www.youtube.com/watch?v=v7lmrZWu5Ws', 9, 1, NULL, '2021-04-16 23:51:20', NULL),
(70, 42, 'archivos/archivo1_42.pdf', 1, 1, NULL, '2021-04-17 23:27:07', NULL),
(71, 42, 'archivos/archivo2_42.pdf', 2, 1, NULL, '2021-04-17 23:27:15', NULL),
(72, 42, 'archivos/archivo3_42.pdf', 3, 1, NULL, '2021-04-17 23:27:18', NULL),
(73, 42, 'archivos/archivo4_42.pdf', 4, 1, NULL, '2021-04-17 23:27:22', NULL),
(74, 42, 'archivos/archivo5_42.pdf', 5, 1, NULL, '2021-04-17 23:27:28', NULL),
(75, 42, 'archivos/archivo6_42.pdf', 6, 1, NULL, '2021-04-17 23:27:31', NULL),
(76, 42, 'archivos/archivo7_42.pdf', 7, 1, NULL, '2021-04-17 23:27:35', NULL),
(77, 42, 'archivos/archivo8_42.pdf', 8, 1, NULL, '2021-04-17 23:27:40', NULL),
(78, 42, 'https://www.youtube.com/watch?v=ChbMLofTV-A', 9, 1, NULL, '2021-04-17 23:27:59', NULL),
(79, 34, 'archivos/archivo1_34.pdf', 1, 1, NULL, '2021-04-18 02:42:31', NULL),
(80, 34, 'archivos/archivo2_34.pdf', 2, 1, NULL, '2021-04-18 02:42:34', NULL),
(81, 34, 'archivos/archivo3_34.pdf', 3, 1, NULL, '2021-04-18 02:42:38', NULL),
(82, 34, 'archivos/archivo4_34.pdf', 4, 1, NULL, '2021-04-18 02:42:42', NULL),
(83, 34, 'archivos/archivo5_34.pdf', 5, 1, NULL, '2021-04-18 02:42:46', NULL),
(84, 34, 'archivos/archivo6_34.pdf', 6, 1, NULL, '2021-04-18 02:42:51', NULL),
(85, 34, 'archivos/archivo7_34.pdf', 7, 1, NULL, '2021-04-18 02:42:55', NULL),
(86, 34, 'archivos/archivo8_34.pdf', 8, 1, NULL, '2021-04-18 02:42:59', NULL),
(87, 34, 'https://www.youtube.com/watch?v=zy5sgg_QD-Q', 9, 1, NULL, '2021-04-18 02:43:32', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `grado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `grado`) VALUES
(1, 'Primaria'),
(2, 'Secundaria'),
(3, 'Preparatoria'),
(4, 'Universidad'),
(5, 'Maestría'),
(6, 'Doctorado'),
(7, 'Otro');

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
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `municipio`) VALUES
(1, 'Apozol'),
(2, 'Apulco'),
(3, 'Atolinga'),
(4, 'Benito Juárez'),
(5, 'Calera'),
(6, 'Cañitas de Felipe Pescador'),
(7, 'Concepción del Oro'),
(8, 'Cuauhtémoc'),
(9, 'Chalchihuites'),
(10, 'Fresnillo'),
(11, 'Trinidad García de la Cadena'),
(12, 'Genaro Codina'),
(13, 'General Enrique Estrada'),
(14, 'General Francisco R. Murguía'),
(15, 'El Plateado de Joaquín Amaro'),
(16, 'General Pánfilo Natera'),
(17, 'Guadalupe'),
(18, 'Huanusco'),
(19, 'Jalpa'),
(20, 'Jerez'),
(21, 'Jiménez del Teul'),
(22, 'Juan Aldama'),
(23, 'Juchipila'),
(24, 'Loreto'),
(25, 'Luis Moya'),
(26, 'Mazapil'),
(27, 'Melchor Ocampo'),
(28, 'Mezquital del Oro'),
(29, 'Miguel Auza'),
(30, 'Momax'),
(31, 'Monte Escobedo'),
(32, 'Morelos'),
(33, 'Moyahua de Estrada'),
(34, 'Nochistlán de Mejía'),
(35, 'Noria de Ángeles'),
(36, 'Ojocaliente'),
(37, 'Pánuco'),
(38, 'Pinos'),
(39, 'Río Grande'),
(40, 'Sain Alto'),
(41, 'El Salvador'),
(42, 'Sombrerete'),
(43, 'Susticacán'),
(44, 'Tabasco'),
(45, 'Tepechitlán'),
(46, 'Tepetongo'),
(47, 'Teúl de González Ortega'),
(48, 'Tlaltenango de Sánchez Román'),
(49, 'Valparaíso'),
(50, 'Vetagrande'),
(51, 'Villa de Cos'),
(52, 'Villa García'),
(53, 'Villa González Ortega'),
(54, 'Villa Hidalgo'),
(55, 'Villanueva'),
(56, 'Zacatecas'),
(57, 'Trancoso'),
(58, 'Santa María de la Paz');

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
  `categoria` int(11) DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `nombre`, `usuario`, `pwd`, `perfil`, `categoria`, `correo`) VALUES
(19, 'jesusrlvrojo', 'jesusrlv', '25f9e794323b453885f5181f1b624d0b', 2, NULL, ''),
(20, 'Rodolfo', 'jesusrlv', '25f9e794323b453885f5181f1b624d0b', 2, NULL, ''),
(21, 'jesusrlv', 'qwertyuiop', 'e588700cf182161aa9805981d7fe42bd', 2, NULL, ''),
(22, 'Jesus', 'rodo', 'edeb8297f1a049cf8a4e38a14c021f45', 3, 1, ''),
(23, 'wwww', 'wwww', '25f9e794323b453885f5181f1b624d0b', 3, 1, ''),
(24, 'Jesus Rodolfo', 'usr1', '25f9e794323b453885f5181f1b624d0b', 2, NULL, ''),
(25, 'jesusrlvrojo', 'revisor1', '25f9e794323b453885f5181f1b624d0b', 3, 1, ''),
(26, 'Jesus Rodolfo Leaños Villegas', 'LEVJ810924HZSXLS04', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(27, 'Revisor 3', 'CyT', '25f9e794323b453885f5181f1b624d0b', 3, 10, ''),
(28, 'USR1', 'AUMS980808MZSCNL09', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(29, 'USR2', 'EORJ971212MZSSSS01', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(30, 'USR3', 'RORC000516MJCMDTA1', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(31, 'USR4', 'ROMM960813MZSMRT06', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(32, 'USR5', 'CAAD990907MZSSCN00', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(33, 'USR6', 'SIBS920824MZSMCT05', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(34, 'USR7', 'AIPB920602MZSMLR07', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(35, 'USR8', 'OIRG941107MZSLMD08', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(36, 'USR9', 'LEBJ960610MZSDCN09', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(37, 'USR10', 'ROTD930516MZSSRL00', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(38, 'USR11', 'OXOJ921219MZSXRN07', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(39, 'USR12', 'RORV980624MZSMML08', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(40, 'USR13', 'LOSG010417MASPCLA2', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(41, 'USR14', 'IAAA940119MCLBLL08', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(42, 'USR15', 'HERE960831MZSRDS06', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(43, 'USR16', 'ROOF921011MZSSLB09', 'edeb8297f1a049cf8a4e38a14c021f45', 1, NULL, ''),
(44, 'Revisor10', 'Revisor10', '25f9e794323b453885f5181f1b624d0b', 3, 1, ''),
(45, 'Revisor4', 'Revisor4', '25f9e794323b453885f5181f1b624d0b', 3, 1, ''),
(46, 'MC1', 'MC1', '25f9e794323b453885f5181f1b624d0b', 3, 7, ''),
(47, 'Administrador', 'admininj', 'edeb8297f1a049cf8a4e38a14c021f45', 2, NULL, ''),
(48, 'notarioInj', 'notarioInj', 'edeb8297f1a049cf8a4e38a14c021f45', 4, NULL, ''),
(49, 'LAINJ1-1', 'LAINJ1-1', '24dbd9768887bd8d92a99bbb59ddd02b', 3, 1, ''),
(50, 'LAINJ1-2', 'LAINJ1-2', '0803c7b4751b12332093b8c43cb74572', 3, 1, ''),
(51, 'LAINJ1-3', 'LAINJ1-3', '1ee25dc349912ec3396b77419edb8731', 3, 1, ''),
(52, 'LAINJ2-1', 'LAINJ2-1', '288bec60d7beb5bcbca51f510f72c427', 3, 2, ''),
(53, 'LAINJ2-2', 'LAINJ2-2', '68abcbfc56ae2117120be46ee9909a58', 3, 2, ''),
(54, 'LAINJ2-3', 'LAINJ2-3', 'b700d088ac3dc30bf4be9f9f0f2f016b', 3, 2, ''),
(55, 'DIINJ1', 'DIINJ1', '7f991bdad6297e749f5b40e2979b24f1', 3, 3, ''),
(56, 'DIINJ2', 'DIINJ2', '21f195b70ec6bd753e66f8f9794bdfbe', 3, 3, ''),
(57, 'DIINJ3', 'DIINJ3', 'e95f36f38042e43c6ef2f6d24936ab63', 3, 3, ''),
(58, 'IEINJ1', 'IEINJ1', 'c1a041ed25a19131d7a29308eca920b3', 3, 4, ''),
(59, 'IEINJ2', 'IEINJ2', 'b40b6aebf1756eff6ceef683e5e130f7', 3, 4, ''),
(60, 'IEINJ3', 'IEINJ3', '859172a3ff6b4496e3d07f7bc57e357f', 3, 4, ''),
(61, 'RSINJ1', 'RSINJ1', 'cbcbb4827800f66d3ad5986b95b2f383', 3, 5, ''),
(62, 'RSINJ2', 'RSINJ2', '65b62c6f85f826d63fd50e0c3cb93e24', 3, 5, ''),
(63, 'RSINJ3', 'RSINJ3', '6a85a97684c57468bc4815dcf3d9ab29', 3, 5, ''),
(64, 'MMINJ1', 'MMINJ1', 'f71526f7bc8b3588ce7aad922f3a293f', 3, 6, ''),
(65, 'MMINJ2', 'MMINJ2', '2d6398ecc734bf43ce6098f7a7a0f6a1', 3, 6, ''),
(66, 'MMINJ3', 'MMINJ3', 'e4af5ecf5f7315b0358f5287cbba4a85', 3, 7, ''),
(67, 'MCINJ1', 'MCINJ1', '10b94510ff9acdf95120b9eefc213094', 3, 7, ''),
(68, 'MCINJ2', 'MCINJ2', 'e00b58daf7d20bbd92ff23330921ad03', 3, 7, ''),
(69, 'MCINJ3', 'MCINJ3', '9ba23e8d883f56ff94b861c6297366e2', 3, 7, ''),
(70, 'PMAINJ1', 'PMAINJ1', '16033424cab528d4fd7039c2c308ac2f', 3, 8, ''),
(71, 'PMAINJ2', 'PMAINJ2', '9199edd2a4152b38e4ded6b501f5e648', 3, 8, ''),
(72, 'PMAINJ3', 'PMAINJ3', '501f0c5f930188a34fa089c58bce8b42', 3, 8, ''),
(73, 'CPDINJ1', 'CPDINJ1', '0224abc418aae0fef828996f42e0b3b8', 3, 9, ''),
(74, 'CPDINJ2', 'CPDINJ2', '4904aecfd82658d6433eb8489c3ff4bf', 3, 9, ''),
(75, 'CPDINJ3', 'CPDINJ3', '87c7e880a96fb044ffcba5f57bea7723', 3, 9, ''),
(76, 'LIINJ1', 'LIINJ1', 'c0be45bf02df747152bb54eecb282f1c', 3, 10, ''),
(77, 'LIINJ2', 'LIINJ2', '562d74159e325460166ed6eefbde304d', 3, 10, ''),
(78, 'LIINJ3', 'LIINJ3', '5f77f987b41bb7b20f75dfd8ebc47d31', 3, 10, ''),
(79, 'AEMINJ1', 'AEMINJ1', '44935c3f468b9545582cef46ebd0e1f5', 3, 11, ''),
(80, 'AEMINJ2', 'AEMINJ2', 'c85b2588c4ed573dc7ac519039083e11', 3, 11, ''),
(81, 'AEMINJ3', 'AEMINJ3', '7ac0b09a2c250c23357aecc89c60d800', 3, 11, ''),
(82, 'AETINJ1', 'AETINJ1', 'e62af46ba26752c22337fe52e20ef9ca', 3, 12, ''),
(83, 'AETINJ2', 'AETINJ2', '567676cce78855b3ac756817088d560a', 3, 12, ''),
(84, 'AETINJ3', 'AETINJ3', '959f1caa09b9948ad2ae494db2640293', 3, 12, ''),
(85, 'AEDINJ1', 'AEDINJ1', 'd46631f6ca73dcd61cfe31866ca8a3d3', 3, 13, ''),
(86, 'AEMINJ2', 'AEMINJ2', 'eef1e5fd75eaf37ff587695e792aa764', 3, 13, ''),
(87, 'AEMINJ3', 'AEMINJ3', '024050d667483b9e52f6e8d65c4fd5ba', 3, 13, ''),
(88, 'AUINJ1', 'AUINJ1', '2c679fd7a1a0de2d635a536e010e4911', 3, 15, ''),
(89, 'AUINJ2', 'AUINJ2', '450b6c72b64aea4e123376e96c65759c', 3, 15, ''),
(90, 'AUINJ3', 'AUINJ3', '818dfe40c2c4f6899db726d5118550b8', 3, 15, ''),
(91, 'CTINJ1', 'CTINJ1', 'a2ef5e8fbf1be4a7b67839397cec7bc8', 3, 16, ''),
(92, 'CTINJ2', 'CTINJ2', '7da157b23e449c485764abf9e07e4fb8', 3, 16, ''),
(93, 'CTINJ3', 'CTINJ3', '2eb2ae8709c12d23a019bf113335c73d', 3, 16, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validacion`
--

CREATE TABLE `validacion` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `datos` int(11) NOT NULL,
  `documentos` int(11) NOT NULL,
  `observaciones` varchar(700) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
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
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
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
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `validacion`
--
ALTER TABLE `validacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
