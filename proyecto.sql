-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2020 a las 06:48:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(18) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`Email`, `password`) VALUES
('admin1@gmail.com', '1234'),
('admin2@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `curso` varchar(8) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `verificado` int(1) NOT NULL DEFAULT 0,
  `ban_profesor` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`nombre`, `apellido`, `fecha`, `Email`, `password`, `curso`, `verificado`, `ban_profesor`) VALUES
('Guerrero', 'Lucas', '0000-00-00', 'lucasg3322@gmail.com', '1234', '2do_2da', 0, 0),
('Matias', 'Alvarado', '0000-00-00', 'mati123@gmail.com', '1234', '2do_2da', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_verificados`
--

CREATE TABLE `alumnos_verificados` (
  `curso` varchar(15) NOT NULL,
  `materia` varchar(15) NOT NULL DEFAULT '0',
  `Email` varchar(30) NOT NULL,
  `verificacion` int(1) NOT NULL DEFAULT 0,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos_verificados`
--

INSERT INTO `alumnos_verificados` (`curso`, `materia`, `Email`, `verificacion`, `id`) VALUES
('2do_2da', 'Biologia', 'lucasg3322@gmail.com', 1, 41),
('2do_2da', 'Construccion de', 'lucasg3322@gmail.com', 0, 42),
('2do_2da', 'Educacion Artis', 'lucasg3322@gmail.com', 0, 43),
('2do_2da', 'Educacion Fisic', 'lucasg3322@gmail.com', 0, 44),
('2do_2da', 'Fisico-Quimica', 'lucasg3322@gmail.com', 1, 45),
('2do_2da', 'Geografia', 'lucasg3322@gmail.com', 0, 46),
('2do_2da', 'Historia', 'lucasg3322@gmail.com', 0, 47),
('2do_2da', 'Ingles', 'lucasg3322@gmail.com', 0, 48),
('2do_2da', 'Matematica', 'lucasg3322@gmail.com', 0, 49),
('2do_2da', 'Practicas del L', 'lucasg3322@gmail.com', 0, 50),
('2do_2da', 'Procedimientos ', 'lucasg3322@gmail.com', 0, 51),
('2do_2da', 'Lenguajes Tecno', 'lucasg3322@gmail.com', 0, 52),
('2do_2da', 'Sistemas Tecnol', 'lucasg3322@gmail.com', 0, 53),
('2do_2da', 'Biologia', 'mati123@gmail.com', 1, 54),
('2do_2da', 'Construccion de', 'mati123@gmail.com', 0, 55),
('2do_2da', 'Educacion Artis', 'mati123@gmail.com', 0, 56),
('2do_2da', 'Educacion Fisic', 'mati123@gmail.com', 0, 57),
('2do_2da', 'Fisico-Quimica', 'mati123@gmail.com', 1, 58),
('2do_2da', 'Geografia', 'mati123@gmail.com', 0, 59),
('2do_2da', 'Historia', 'mati123@gmail.com', 0, 60),
('2do_2da', 'Ingles', 'mati123@gmail.com', 0, 61),
('2do_2da', 'Matematica', 'mati123@gmail.com', 0, 62),
('2do_2da', 'Practicas del L', 'mati123@gmail.com', 0, 63),
('2do_2da', 'Procedimientos ', 'mati123@gmail.com', 0, 64),
('2do_2da', 'Lenguajes Tecno', 'mati123@gmail.com', 0, 65),
('2do_2da', 'Sistemas Tecnol', 'mati123@gmail.com', 0, 66);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE `codigo` (
  `email` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `codigo`
--

INSERT INTO `codigo` (`email`, `codigo`) VALUES
('mati123@gmail.com', '0615');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `fecha_de_entrega` date NOT NULL,
  `cod_trabajo` int(11) NOT NULL,
  `fecha_de_subida` date NOT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `curso` varchar(7) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `materia` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `bibiografia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`fecha_de_entrega`, `cod_trabajo`, `fecha_de_subida`, `titulo`, `curso`, `materia`, `contenido`, `bibiografia`, `Email`) VALUES
('2020-12-12', 2321334, '0000-00-00', 'tp1 literatura', '4to_1ra', 'lengua', '1. de\r\n2. asd\r\n3. asdsadas\r\n4. sadksakd', 'asdsa.com', 'lucasg@gmail.com'),
('2020-09-23', 2321335, '0000-00-00', 'Hola', '2do_2da', '', 'Kskks', 'Iskks', '123@gmail.com'),
('2020-12-12', 2321337, '0000-00-00', 'trabajo practico numero 1', '1ro_1ra', 'matematicas', '1. 2+2=¿?\r\n2. 2.2=¿?\r\n3. 3*5/7=¿?\r\n4. si la raix cuadrada de 2 la multiplicamos a la hipotenusa de un chanco elevado al cuadrado y...\r\n(va en el examen)', 'julioprofe.net', 'mario@gmail.com'),
('2001-12-12', 2321338, '0000-00-00', 'tp1 fisica', '3ro_4ta', '', 'hola, como estas¿?\r\n-\r\n-\r\n-\r\n-\r\n-\r\n\r\n-\r\n-\r\n', 'google.com/', 'mario@gmail.com'),
('2001-12-12', 2321339, '2020-10-08', 'tp1 fisica', '3ro_4ta', 'Fisico-Quimica', 'hola, como estas¿?\r\n-\r\n-\r\n-\r\n-\r\n-\r\n\r\n-\r\n-\r\n', 'google.com/', 'mario@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_y_materia`
--

CREATE TABLE `cursos_y_materia` (
  `curso` varchar(10) NOT NULL,
  `materia` varchar(20) NOT NULL,
  `profesor` varchar(40) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos_y_materia`
--

INSERT INTO `cursos_y_materia` (`curso`, `materia`, `profesor`, `tipo`, `id`) VALUES
('1ro_1ra', 'Ciencias Naturales', 'mario@gmail.com', 'aula', 359),
('1ro_1ra', 'Ciencias Sociales', 'mario@gmail.com', 'aula', 360),
('1ro_1ra', 'Educacion Artistica', 'mario@gmail.com', 'aula', 361),
('1ro_1ra', 'Educacion Fisica', 'mario@gmail.com', 'aula', 362),
('1ro_1ra', 'Ingles', 'mario@gmail.com', 'aula', 363),
('1ro_1ra', 'Matematica', 'mario@gmail.com', 'aula', 364),
('1ro_1ra', 'Practicas del Lengua', 'mario@gmail.com', 'aula', 365),
('1ro_1ra', 'Construccion Ciudada', 'lucasg@gmail.com', 'aula', 366),
('1ro_1ra', 'Procedimientos Tecni', 'mario@gmail.com', 'taller', 367),
('1ro_1ra', 'Lenguajes Tecnologic', 'lucasg@gmail.com', 'taller', 368),
('1ro_1ra', 'Sistemas Tecnologico', 'mario@gmail.com', 'taller', 369),
('1ro_2da', 'Ciencias Naturales', 'mario@gmail.com', 'aula', 370),
('1ro_2da', 'Ciencias Sociales', '', 'aula', 371),
('1ro_2da', 'Educacion Artistica', '', 'aula', 372),
('1ro_2da', 'Educacion Fisica', 'mario@gmail.com', 'aula', 373),
('1ro_2da', 'Ingles', '', 'aula', 374),
('1ro_2da', 'Matematica', '', 'aula', 375),
('1ro_2da', 'Practicas del Lengua', '', 'aula', 376),
('1ro_2da', 'Construccion Ciudada', '', 'aula', 377),
('1ro_2da', 'Procedimientos Tecni', '', 'taller', 378),
('1ro_2da', 'Lenguajes Tecnologic', '', 'taller', 379),
('1ro_2da', 'Sistemas Tecnologico', '', 'taller', 380),
('1ro_3ra', 'Ciencias Naturales', '', 'aula', 381),
('1ro_3ra', 'Ciencias Sociales', '', 'aula', 382),
('1ro_3ra', 'Educacion Artistica', '', 'aula', 383),
('1ro_3ra', 'Educacion Fisica', '', 'aula', 384),
('1ro_3ra', 'Ingles', '', 'aula', 385),
('1ro_3ra', 'Matematica', '', 'aula', 386),
('1ro_3ra', 'Practicas del Lengua', '', 'aula', 387),
('1ro_3ra', 'Construccion Ciudada', '', 'aula', 388),
('1ro_3ra', 'Procedimientos Tecni', '', 'taller', 389),
('1ro_3ra', 'Lenguajes Tecnologic', '', 'taller', 390),
('1ro_3ra', 'Sistemas Tecnologico', '', 'taller', 391),
('1ro_4ta', 'Ciencias Naturales', '', 'aula', 392),
('1ro_4ta', 'Ciencias Sociales', '', 'aula', 393),
('1ro_4ta', 'Educacion Artistica', '', 'aula', 394),
('1ro_4ta', 'Educacion Fisica', '', 'aula', 395),
('1ro_4ta', 'Ingles', '', 'aula', 396),
('1ro_4ta', 'Matematica', '', 'aula', 397),
('1ro_4ta', 'Practicas del Lengua', '', 'aula', 398),
('1ro_4ta', 'Construccion Ciudada', '', 'aula', 399),
('1ro_4ta', 'Procedimientos Tecni', '', 'taller', 400),
('1ro_4ta', 'Lenguajes Tecnologic', '', 'taller', 401),
('1ro_4ta', 'Sistemas Tecnologico', '', 'taller', 402),
('1ro_5ta', 'Ciencias Naturales', '', 'aula', 403),
('1ro_5ta', 'Ciencias Sociales', '', 'aula', 404),
('1ro_5ta', 'Educacion Artistica', '', 'aula', 405),
('1ro_5ta', 'Educacion Fisica', '', 'aula', 406),
('1ro_5ta', 'Ingles', '', 'aula', 407),
('1ro_5ta', 'Matematica', '', 'aula', 408),
('1ro_5ta', 'Practicas del Lengua', '', 'aula', 409),
('1ro_5ta', 'Construccion Ciudada', '', 'aula', 410),
('1ro_5ta', 'Procedimientos Tecni', '', 'taller', 411),
('1ro_5ta', 'Lenguajes Tecnologic', '', 'taller', 412),
('1ro_5ta', 'Sistemas Tecnologico', '', 'taller', 413),
('2do_1ra', 'Biologia', '', 'aula', 414),
('2do_1ra', 'Construccion de Ciud', '', 'aula', 415),
('2do_1ra', 'Educacion Artistica', '', 'aula', 416),
('2do_1ra', 'Educacion Fisica', '', 'aula', 417),
('2do_1ra', 'Fisico-Quimica', '', 'aula', 418),
('2do_1ra', 'Geografia', '', 'aula', 419),
('2do_1ra', 'Historia', '', 'aula', 420),
('2do_1ra', 'Ingles', '', 'aula', 421),
('2do_1ra', 'Matematica', '', 'aula', 422),
('2do_1ra', 'Practicas del Lengua', '', 'aula', 423),
('2do_1ra', 'Procedimientos Tecni', '', 'taller', 424),
('2do_1ra', 'Lenguajes Tecnologic', '', 'taller', 425),
('2do_1ra', 'Sistemas Tecnologico', '', 'taller', 426),
('2do_2da', 'Biologia', 'mario@gmail.com', 'aula', 427),
('2do_2da', 'Construccion de Ciud', 'mario@gmail.com', 'aula', 428),
('2do_2da', 'Educacion Artistica', 'mario@gmail.com', 'aula', 429),
('2do_2da', 'Educacion Fisica', 'mario@gmail.com', 'aula', 430),
('2do_2da', 'Fisico-Quimica', 'mario@gmail.com', 'aula', 431),
('2do_2da', 'Geografia', 'mario@gmail.com', 'aula', 432),
('2do_2da', 'Historia', 'mario@gmail.com', 'aula', 433),
('2do_2da', 'Ingles', 'mario@gmail.com', 'aula', 434),
('2do_2da', 'Matematica', '', 'aula', 435),
('2do_2da', 'Practicas del Lengua', '', 'aula', 436),
('2do_2da', 'Procedimientos Tecni', '', 'taller', 437),
('2do_2da', 'Lenguajes Tecnologic', 'mario@gmail.com', 'taller', 438),
('2do_2da', 'Sistemas Tecnologico', '', 'taller', 439),
('2do_3ra', 'Biologia', '', 'aula', 440),
('2do_3ra', 'Construccion de Ciud', '', 'aula', 441),
('2do_3ra', 'Educacion Artistica', '', 'aula', 442),
('2do_3ra', 'Educacion Fisica', '', 'aula', 443),
('2do_3ra', 'Fisico-Quimica', '', 'aula', 444),
('2do_3ra', 'Geografia', '', 'aula', 445),
('2do_3ra', 'Historia', '', 'aula', 446),
('2do_3ra', 'Ingles', '', 'aula', 447),
('2do_3ra', 'Matematica', '', 'aula', 448),
('2do_3ra', 'Practicas del Lengua', '', 'aula', 449),
('2do_3ra', 'Procedimientos Tecni', '', 'taller', 450),
('2do_3ra', 'Lenguajes Tecnologic', '', 'taller', 451),
('2do_3ra', 'Sistemas Tecnologico', '', 'taller', 452),
('2do_4ta', 'Biologia', '', 'aula', 453),
('2do_4ta', 'Construccion de Ciud', '', 'aula', 454),
('2do_4ta', 'Educacion Artistica', '', 'aula', 455),
('2do_4ta', 'Educacion Fisica', '', 'aula', 456),
('2do_4ta', 'Fisico-Quimica', '', 'aula', 457),
('2do_4ta', 'Geografia', '', 'aula', 458),
('2do_4ta', 'Historia', '', 'aula', 459),
('2do_4ta', 'Ingles', '', 'aula', 460),
('2do_4ta', 'Matematica', '', 'aula', 461),
('2do_4ta', 'Practicas del Lengua', '', 'aula', 462),
('2do_4ta', 'Procedimientos Tecni', '', 'taller', 463),
('2do_4ta', 'Lenguajes Tecnologic', '', 'taller', 464),
('2do_4ta', 'Sistemas Tecnologico', '', 'taller', 465),
('2do_5ta', 'Biologia', '', 'aula', 466),
('2do_5ta', 'Construccion de Ciud', '', 'aula', 467),
('2do_5ta', 'Educacion Artistica', '', 'aula', 468),
('2do_5ta', 'Educacion Fisica', '', 'aula', 469),
('2do_5ta', 'Fisico-Quimica', '', 'aula', 470),
('2do_5ta', 'Geografia', '', 'aula', 471),
('2do_5ta', 'Historia', '', 'aula', 472),
('2do_5ta', 'Ingles', '', 'aula', 473),
('2do_5ta', 'Matematica', '', 'aula', 474),
('2do_5ta', 'Practicas del Lengua', '', 'aula', 475),
('2do_5ta', 'Procedimientos Tecni', '', 'taller', 476),
('2do_5ta', 'Lenguajes Tecnologic', '', 'taller', 477),
('2do_5ta', 'Sistemas Tecnologico', '', 'taller', 478),
('3ro_1ra', 'Biologia', '', 'aula', 479),
('3ro_1ra', 'Construccion de Ciud', '', 'aula', 480),
('3ro_1ra', 'Educacion Artistica', '', 'aula', 481),
('3ro_1ra', 'Educacion Fisica', '', 'aula', 482),
('3ro_1ra', 'Fisico-Quimica', '', 'aula', 483),
('3ro_1ra', 'Geografia', '', 'aula', 484),
('3ro_1ra', 'Historia', '', 'aula', 485),
('3ro_1ra', 'Ingles', '', 'aula', 486),
('3ro_1ra', 'Matematica', '', 'aula', 487),
('3ro_1ra', 'Practicas del Lengua', '', 'aula', 488),
('3ro_1ra', 'Procedimientos Tecni', '', 'taller', 489),
('3ro_1ra', 'Lenguajes Tecnologic', '', 'taller', 490),
('3ro_1ra', 'Sistemas Tecnologico', '', 'taller', 491),
('3ro_2da', 'Biologia', '', 'aula', 492),
('3ro_2da', 'Construccion de Ciud', '', 'aula', 493),
('3ro_2da', 'Educacion Artistica', '', 'aula', 494),
('3ro_2da', 'Educacion Fisica', '', 'aula', 495),
('3ro_2da', 'Fisico-Quimica', '', 'aula', 496),
('3ro_2da', 'Geografia', '', 'aula', 497),
('3ro_2da', 'Historia', '', 'aula', 498),
('3ro_2da', 'Ingles', '', 'aula', 499),
('3ro_2da', 'Matematica', '', 'aula', 500),
('3ro_2da', 'Practicas del Lengua', '', 'aula', 501),
('3ro_2da', 'Procedimientos Tecni', '', 'taller', 502),
('3ro_2da', 'Lenguajes Tecnologic', '', 'taller', 503),
('3ro_2da', 'Sistemas Tecnologico', '', 'taller', 504),
('3ro_3ra', 'Biologia', '', 'aula', 505),
('3ro_3ra', 'Construccion de Ciud', '', 'aula', 506),
('3ro_3ra', 'Educacion Artistica', '', 'aula', 507),
('3ro_3ra', 'Educacion Fisica', '', 'aula', 508),
('3ro_3ra', 'Fisico-Quimica', '', 'aula', 509),
('3ro_3ra', 'Geografia', '', 'aula', 510),
('3ro_3ra', 'Historia', '', 'aula', 511),
('3ro_3ra', 'Ingles', '', 'aula', 512),
('3ro_3ra', 'Matematica', '', 'aula', 513),
('3ro_3ra', 'Practicas del Lengua', '', 'aula', 514),
('3ro_3ra', 'Procedimientos Tecni', '', 'taller', 515),
('3ro_3ra', 'Lenguajes Tecnologic', '', 'taller', 516),
('3ro_3ra', 'Sistemas Tecnologico', '', 'taller', 517),
('3ro_4ta', 'Biologia', 'mario@gmail.com', 'aula', 518),
('3ro_4ta', 'Construccion de Ciud', '', 'aula', 519),
('3ro_4ta', 'Educacion Artistica', '', 'aula', 520),
('3ro_4ta', 'Educacion Fisica', '', 'aula', 521),
('3ro_4ta', 'Fisico-Quimica', '', 'aula', 522),
('3ro_4ta', 'Geografia', '', 'aula', 523),
('3ro_4ta', 'Historia', '', 'aula', 524),
('3ro_4ta', 'Ingles', '', 'aula', 525),
('3ro_4ta', 'Matematica', '', 'aula', 526),
('3ro_4ta', 'Practicas del Lengua', '', 'aula', 527),
('3ro_4ta', 'Procedimientos Tecni', '', 'taller', 528),
('3ro_4ta', 'Lenguajes Tecnologic', '', 'taller', 529),
('3ro_4ta', 'Sistemas Tecnologico', '', 'taller', 530),
('3ro_5ta', 'Biologia', '', 'aula', 531),
('3ro_5ta', 'Construccion de Ciud', '', 'aula', 532),
('3ro_5ta', 'Educacion Artistica', '', 'aula', 533),
('3ro_5ta', 'Educacion Fisica', '', 'aula', 534),
('3ro_5ta', 'Fisico-Quimica', '', 'aula', 535),
('3ro_5ta', 'Geografia', '', 'aula', 536),
('3ro_5ta', 'Historia', '', 'aula', 537),
('3ro_5ta', 'Ingles', '', 'aula', 538),
('3ro_5ta', 'Matematica', '', 'aula', 539),
('3ro_5ta', 'Practicas del Lengua', '', 'aula', 540),
('3ro_5ta', 'Procedimientos Tecni', '', 'taller', 541),
('3ro_5ta', 'Lenguajes Tecnologic', '', 'taller', 542),
('3ro_5ta', 'Sistemas Tecnologico', '', 'taller', 543),
('4to_1ra', 'Literatura', '', 'aula', 544),
('4to_1ra', 'Ingles', '', 'aula', 545),
('4to_1ra', 'Educacion Fisica', '', 'aula', 546),
('4to_1ra', 'Salud y Adolescencia', '', 'aula', 547),
('4to_1ra', 'Historia', '', 'aula', 548),
('4to_1ra', 'Geografia', '', 'aula', 549),
('4to_1ra', 'Matematica Ciclo Sup', '', 'aula', 550),
('4to_1ra', 'Quimica', '', 'aula', 551),
('4to_1ra', 'Fisica', '', 'aula', 552),
('4to_1ra', 'Operaciones Unitaria', '', 'aula', 553),
('4to_1ra', 'Introduccion a la Bi', '', 'aula', 554),
('4to_1ra', 'Laboratorio de Opera', '', 'taller', 555),
('4to_1ra', 'Laboratorio de Ensay', '', 'taller', 556),
('4to_1ra', 'Laboratorio de Quimi', '', 'taller', 557),
('4to_2da', 'Literatura', '', 'aula', 558),
('4to_2da', 'Ingles', '', 'aula', 559),
('4to_2da', 'Educacion Fisica', '', 'aula', 560),
('4to_2da', 'Salud y Adolescencia', '', 'aula', 561),
('4to_2da', 'Historia', '', 'aula', 562),
('4to_2da', 'Matematica Ciclo Sup', '', 'aula', 563),
('4to_2da', 'Fisica', '', 'aula', 564),
('4to_2da', 'Quimica', '', 'aula', 565),
('4to_2da', 'Tecnologias Electron', '', 'aula', 566),
('4to_2da', 'Laboratorio de Progr', '', 'taller', 567),
('4to_2da', 'Laboratorio de Hardw', '', 'taller', 568),
('4to_2da', 'Laboratorio de Siste', '', 'taller', 569),
('4to_2da', 'Laboratorio de Aplic', '', 'taller', 570),
('4to_3ra', 'Literatura', '', 'aula', 571),
('4to_3ra', 'Ingles', '', 'aula', 572),
('4to_3ra', 'Educacion Fisica', '', 'aula', 573),
('4to_3ra', 'Salud y Adolescencia', '', 'aula', 574),
('4to_3ra', 'Historia', '', 'aula', 575),
('4to_3ra', 'Matematica Ciclo Sup', '', 'aula', 576),
('4to_3ra', 'Fisica', '', 'aula', 577),
('4to_3ra', 'Quimica', '', 'aula', 578),
('4to_3ra', 'Tecnologias Electron', '', 'aula', 579),
('4to_3ra', 'Laboratorio de Progr', '', 'taller', 580),
('4to_3ra', 'Laboratorio de Hardw', '', 'taller', 581),
('4to_3ra', 'Laboratorio de Siste', '', 'taller', 582),
('4to_3ra', 'Laboratorio de Aplic', '', 'taller', 583),
('4to_4ta', 'Literatura', '', 'aula', 584),
('4to_4ta', 'Ingles', '', 'aula', 585),
('4to_4ta', 'Educacion Fisica', '', 'aula', 586),
('4to_4ta', 'Salud y Adolescencia', '', 'aula', 587),
('4to_4ta', 'Historia', '', 'aula', 588),
('4to_4ta', 'Geografia', '', 'aula', 589),
('4to_4ta', 'Matematica Ciclo Sup', '', 'aula', 590),
('4to_4ta', 'Quimica', '', 'aula', 591),
('4to_4ta', 'Fisica', '', 'aula', 592),
('4to_4ta', 'Operaciones Unitaria', '', 'aula', 593),
('4to_4ta', 'Introduccion a la Bi', '', 'aula', 594),
('4to_4ta', 'Laboratorio de Opera', '', 'taller', 595),
('4to_4ta', 'Laboratorio de Ensay', '', 'taller', 596),
('4to_4ta', 'Laboratorio de Quimi', '', 'taller', 597),
('4to_5ta', 'Literatura', '', 'aula', 598),
('4to_5ta', 'Ingles', '', 'aula', 599),
('4to_5ta', 'Educacion Fisica', '', 'aula', 600),
('4to_5ta', 'Salud y Adolescencia', '', 'aula', 601),
('4to_5ta', 'Historia', '', 'aula', 602),
('4to_5ta', 'Matematica Ciclo Sup', '', 'aula', 603),
('4to_5ta', 'Fisica', '', 'aula', 604),
('4to_5ta', 'Quimica', '', 'aula', 605),
('4to_5ta', 'Tecnologias Electron', '', 'aula', 606),
('4to_5ta', 'Laboratorio de Progr', '', 'taller', 607),
('4to_5ta', 'Laboratorio de Hardw', '', 'taller', 608),
('4to_5ta', 'Laboratorio de Siste', '', 'taller', 609),
('4to_5ta', 'Laboratorio de Aplic', '', 'taller', 610),
('5to_1ra', 'Literatura', '', 'aula', 611),
('5to_1ra', 'Ingles', '', 'aula', 612),
('5to_1ra', 'Educacion Fisica', '', 'aula', 613),
('5to_1ra', 'Politica y Ciudadani', '', 'aula', 614),
('5to_1ra', 'Historia', '', 'aula', 615),
('5to_1ra', 'Analisis Matematico', '', 'aula', 616),
('5to_1ra', 'Quimica Organica', '', 'aula', 617),
('5to_1ra', 'Quimica General e In', '', 'aula', 618),
('5to_1ra', 'Procesos Quimicos y ', '', 'aula', 619),
('5to_1ra', 'Laboratorio de Proce', '', 'taller', 620),
('5to_1ra', 'Laboratorio de Tecni', '', 'taller', 621),
('5to_1ra', 'Laboratorio de Quimi', '', 'taller', 622),
('5to_2da', 'Literatura', '', 'aula', 623),
('5to_2da', 'Ingles', '', 'aula', 624),
('5to_2da', 'Educacion Fisica', '', 'aula', 625),
('5to_2da', 'Politica y Ciudadani', '', 'aula', 626),
('5to_2da', 'Historia', '', 'aula', 627),
('5to_2da', 'Geografia', '', 'aula', 628),
('5to_2da', 'Analisis Matematico', '', 'aula', 629),
('5to_2da', 'Sistemas Digitales', '', 'aula', 630),
('5to_2da', 'Desconocido', '', 'aula', 631),
('5to_2da', 'Laboratorio de Progr', '', 'taller', 632),
('5to_2da', 'Laboratorio de Hardw', '', 'taller', 633),
('5to_2da', 'Laboratorio de Siste', '', 'taller', 634),
('5to_2da', 'Laboratorio de Aplic', '', 'taller', 635),
('5to_3ra', 'Literatura', '', 'aula', 636),
('5to_3ra', 'Ingles', '', 'aula', 637),
('5to_3ra', 'Educacion Fisica', '', 'aula', 638),
('5to_3ra', 'Politica y Ciudadani', '', 'aula', 639),
('5to_3ra', 'Historia', '', 'aula', 640),
('5to_3ra', 'Geografia', '', 'aula', 641),
('5to_3ra', 'Analisis Matematico', '', 'aula', 642),
('5to_3ra', 'Sistemas Digitales', '', 'aula', 643),
('5to_3ra', 'Desconocido', '', 'aula', 644),
('5to_3ra', 'Laboratorio de Progr', '', 'taller', 645),
('5to_3ra', 'Laboratorio de Hardw', '', 'taller', 646),
('5to_3ra', 'Laboratorio de Siste', '', 'taller', 647),
('5to_3ra', 'Laboratorio de Aplic', '', 'taller', 648),
('5to_4ta', 'Literatura', '', 'aula', 649),
('5to_4ta', 'Ingles', '', 'aula', 650),
('5to_4ta', 'Educacion Fisica', '', 'aula', 651),
('5to_4ta', 'Politica y Ciudadani', '', 'aula', 652),
('5to_4ta', 'Historia', '', 'aula', 653),
('5to_4ta', 'Analisis Matematico', '', 'aula', 654),
('5to_4ta', 'Quimica Organica', '', 'aula', 655),
('5to_4ta', 'Quimica General e In', '', 'aula', 656),
('5to_4ta', 'Procesos Quimicos y ', '', 'aula', 657),
('5to_4ta', 'Laboratorio de Proce', '', 'taller', 658),
('5to_4ta', 'Laboratorio de Tecni', '', 'taller', 659),
('5to_4ta', 'Laboratorio de Quimi', '', 'taller', 660),
('6to_1ra', 'Literatura', '', 'aula', 661),
('6to_1ra', 'Ingles', '', 'aula', 662),
('6to_1ra', 'Educacion Fisica', '', 'aula', 663),
('6to_1ra', 'Filosofia', '', 'aula', 664),
('6to_1ra', 'Arte', '', 'aula', 665),
('6to_1ra', 'Matematica Aplicada', '', 'aula', 666),
('6to_1ra', 'Quimica Organica y B', '', 'aula', 667),
('6to_1ra', 'Quimica Industrial', '', 'aula', 668),
('6to_1ra', 'Quimica Analitica', '', 'aula', 669),
('6to_1ra', 'Derechos del Trabajo', '', 'aula', 670),
('6to_1ra', 'Laboratorio de Quimi', '', 'taller', 671),
('6to_1ra', 'Laboratorio de Tecni', '', 'taller', 672),
('6to_1ra', 'Laboratorio de Proce', '', 'taller', 673),
('6to_2da', 'Literatura', '', 'aula', 674),
('6to_2da', 'Ingles', '', 'aula', 675),
('6to_2da', 'Educacion Fisica', '', 'aula', 676),
('6to_2da', 'Filosofia', '', 'aula', 677),
('6to_2da', 'Arte', '', 'aula', 678),
('6to_2da', 'Matematica Aplicada', '', 'aula', 679),
('6to_2da', 'Sistemas Digitales', '', 'aula', 680),
('6to_2da', 'Desconocido', '', 'aula', 681),
('6to_2da', 'Seguridad Informatic', '', 'aula', 682),
('6to_2da', 'Derechos del Trabajo', '', 'aula', 683),
('6to_2da', 'Laboratorio de Progr', '', 'taller', 684),
('6to_2da', 'Laboratorio de Hardw', '', 'taller', 685),
('6to_2da', 'Laboratorio de Siste', '', 'taller', 686),
('6to_2da', 'Laboratorio de Aplic', '', 'taller', 687),
('6to_3ra', 'Literatura', '', 'aula', 688),
('6to_3ra', 'Ingles', '', 'aula', 689),
('6to_3ra', 'Educacion Fisica', '', 'aula', 690),
('6to_3ra', 'Filosofia', '', 'aula', 691),
('6to_3ra', 'Arte', '', 'aula', 692),
('6to_3ra', 'Matematica Aplicada', '', 'aula', 693),
('6to_3ra', 'Sistemas Digitales', '', 'aula', 694),
('6to_3ra', 'Desconocido', '', 'aula', 695),
('6to_3ra', 'Seguridad Informatic', '', 'aula', 696),
('6to_3ra', 'Derechos del Trabajo', '', 'aula', 697),
('6to_3ra', 'Laboratorio de Progr', '', 'taller', 698),
('6to_3ra', 'Laboratorio de Hardw', '', 'taller', 699),
('6to_3ra', 'Laboratorio de Siste', '', 'taller', 700),
('6to_3ra', 'Laboratorio de Aplic', '', 'taller', 701),
('7mo_1ra', 'Practicas Profesiona', '', 'aula', 702),
('7mo_1ra', 'Emprendimientos Prod', '', 'aula', 703),
('7mo_1ra', 'Bromatologia y Nutri', '', 'aula', 704),
('7mo_1ra', 'Gestion de la Calida', '', 'aula', 705),
('7mo_1ra', 'Organizacion y Gesti', '', 'aula', 706),
('7mo_1ra', 'Microbiologia de los', '', 'taller', 707),
('7mo_1ra', 'Laboratorio de Broma', '', 'taller', 708),
('7mo_1ra', 'Laboratorio de Proce', '', 'taller', 709),
('7mo_2da', 'Practicas Profesiona', '', 'aula', 710),
('7mo_2da', 'Emprendimientos Prod', '', 'aula', 711),
('7mo_2da', 'Evaluacion de Proyec', '', 'aula', 712),
('7mo_2da', 'Modelos y Sistemas', '', 'aula', 713),
('7mo_2da', 'Bases de Datos', '', 'aula', 714),
('7mo_2da', 'Desconocido', '', 'taller', 715),
('7mo_2da', 'Desconocido', '', 'taller', 716),
('7mo_2da', 'Desconocido', '', 'taller', 717),
('7mo_3ra', 'Practicas Profesiona', '', 'aula', 718),
('7mo_3ra', 'Emprendimientos Prod', '', 'aula', 719),
('7mo_3ra', 'Evaluacion de Proyec', '', 'aula', 720),
('7mo_3ra', 'Modelos y Sistemas', '', 'aula', 721),
('7mo_3ra', 'Bases de Datos', '', 'aula', 722),
('7mo_3ra', 'Proyecto, Diseño e I', '', 'taller', 723),
('7mo_3ra', 'Instalacion, Manteni', '', 'taller', 724),
('7mo_3ra', 'Instalacion, Manteni', '', 'taller', 725);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `nombre` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(16) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo` varchar(16) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`nombre`, `apellido`, `Email`, `password`, `codigo`) VALUES
('123', '123', '123@gmail.com', '12345', 'b4dli7'),
('lucas', 'guerrero', 'lucasg@gmail.com', '123456', '123456'),
('mario', 'silva', 'mario@gmail.com', '12345', '12345'),
('rodolfo', 'andrada', 'rodolfo@gmail.com', '1234', 'varfoaolcVDe66bw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperar_clave`
--

CREATE TABLE `recuperar_clave` (
  `Email` varchar(25) NOT NULL,
  `codigo` int(6) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recuperar_clave`
--

INSERT INTO `recuperar_clave` (`Email`, `codigo`, `id`) VALUES
('lucasg3322@gmail.com', 4646, 47);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`Email`);

--
-- Indices de la tabla `alumnos_verificados`
--
ALTER TABLE `alumnos_verificados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`cod_trabajo`);

--
-- Indices de la tabla `cursos_y_materia`
--
ALTER TABLE `cursos_y_materia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`Email`);

--
-- Indices de la tabla `recuperar_clave`
--
ALTER TABLE `recuperar_clave`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos_verificados`
--
ALTER TABLE `alumnos_verificados`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `cod_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2321340;

--
-- AUTO_INCREMENT de la tabla `cursos_y_materia`
--
ALTER TABLE `cursos_y_materia`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=726;

--
-- AUTO_INCREMENT de la tabla `recuperar_clave`
--
ALTER TABLE `recuperar_clave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
