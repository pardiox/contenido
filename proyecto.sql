-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2020 a las 10:18:37
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
('aswd', 'asd', '0000-00-00', '1@gmail.com', '1234', '2do_2da', 0, 0),
('luc', 'as', '0000-00-00', '1234@gmail.com', '1234', '2do_2da', 1, 1),
('asdasd', 'sad', '0000-00-00', '12344@gmail.com', '1', '2do_2da', 0, 0),
('matematicas', 'as', '0000-00-00', '126l34@gmail.com', '12', '2do_2da', 0, 0),
('luc', 'asd', '0000-00-00', 'a@gmail.com', '12', '2do_2da', 0, 0),
('aswd', 'asd', '0000-00-00', 'aa1d@gmail.com1', '', '2do_2da', 0, 0),
('aswd', 'asd', '0000-00-00', 'aad@gmail.com1', '', '2do_2da', 0, 0),
('asd', 'sdaa', '0000-00-00', 'aas@gmail.com', '1234', '2do_2da', 0, 0),
('aswd', 'asd', '0000-00-00', 'ad@gmail.com1', '1', '2do_2da', 0, 0),
('asdasd', 'asd', '0000-00-00', 'as@gmail.com', '1', '2do_2da', 0, 0),
('s', 'as', '0000-00-00', 'as2@gmail.com', '', '2do_2da', 0, 0),
('aaa', 'as', '0000-00-00', 'lu@gmail.com', '1', '2do_2da', 0, 0),
('lasa', 'dsad', '2001-11-24', 'lu123@gmail.com', '12345', '2do_2da', 1, 0),
('Lucas', 'Guerrero', '1111-11-24', 'lucasg3322@gmail.com', '1234', '2do_2da', 1, 0),
('asdasd', 'asd', '0000-00-00', 'lucasg3322@gmail.com1', '1', '2do_2da', 1, 0),
('luc', 'as', '0000-00-00', 'lusg3322@gmail.com', '123', '2do_2da', 0, 0),
('12312', '32132', '0000-00-00', 'luucasg@gmail.com', '1234', '3ro_4ta', 1, 0);

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
('2do_2da', 'literatura', '1@gmail.com', 1, 2),
('2do_2da', 'literatura', 'a@gmail.com', 1, 3),
('2do_2da', 'aaaa', 'as2@gmail.com', 1, 7),
('2do_2da', 'literatura', 'as2@gmail.com', 1, 8),
('2do_2da', 'aaaa', 'lu@gmail.com', 1, 10),
('2do_2da', 'literatura', 'lu@gmail.com', 1, 11),
('2do_2da', 'aaaa', 'lucasg3322@gmail.com1', 1, 13),
('2do_2da', 'literatura', 'as2@gmail.com', 1, 14),
('2do_2da', 'literatura', 'lu@gmail.com', 1, 15),
('2do_2da', 'literatura', 'lucasg3322@gmail.com1', 1, 16),
('2do_2da', 'biologia', '1@gmail.com', 1, 17),
('2do_2da', 'biologia', 'a@gmail.com', 1, 18),
('2do_2da', 'biologia', 'as2@gmail.com', 0, 19),
('2do_2da', 'biologia', 'as2@gmail.com', 0, 20),
('2do_2da', 'biologia', 'lu@gmail.com', 1, 21),
('2do_2da', 'biologia', 'lu@gmail.com', 1, 22),
('2do_2da', 'biologia', 'as2@gmail.com', 0, 24),
('2do_2da', 'biologia', 'lu@gmail.com', 1, 25),
('2do_2da', 'biologia', 'lucasg3322@gmail.com1', 1, 26);

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
('rodolfo@gmail.com', 'varfoaolcVDe66bw'),
('lucasg3322@gmail.c', '12345'),
('lucasg3322@gmail.c', '12345'),
('lucasg3322@gmail.com', '12345'),
('123@gmail.com', 'b4dli7'),
('1234@gmail.com', '0321'),
('1@gmail.com', '9958'),
('a@gmail.com', '1348'),
('lusg3322@gmail.com', '8901'),
('12344@gmail.com', '9073'),
('aas@gmail.com', '2172'),
('126l34@gmail.com', '6272'),
('as@gmail.com', '3945'),
('as2@gmail.com', '6116'),
('lu@gmail.com', '1165'),
('ad@gmail.com1', '3614'),
('aad@gmail.com1', '0826'),
('aa1d@gmail.com1', '6491'),
('lucasg3322@gmail.com1', '5058'),
('', '87sp5s'),
('', '87sp5s'),
('', ''),
('', ''),
('', ''),
('admin1@gmail.com', ' kfroi8'),
('', ' 02pkm6'),
('', ' rs8c14'),
('admin1@gmail.com', ' i0ji5k'),
('', ' snk85n'),
('', ' m8o7bq'),
('', ' 352eji'),
('', ' 352eji'),
('', ' 352eji'),
('', ' 352eji'),
('', ' 352eji'),
('', ' 352eji'),
('', ' 352eji'),
('', ' 352eji'),
('', ' 352eji'),
('', ' 352eji'),
('', ' 8ipqqe'),
('', ' a7irof'),
('', ' a7irof'),
('', ' efjlkd'),
('', ' efjlkd'),
('', ' efjlkd'),
('', ' aqg00i'),
('', ' cdhasj'),
('', ' me9f12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `fecha_de_entrega` date NOT NULL,
  `cod_trabajo` int(11) NOT NULL,
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

INSERT INTO `contenido` (`fecha_de_entrega`, `cod_trabajo`, `titulo`, `curso`, `materia`, `contenido`, `bibiografia`, `Email`) VALUES
('2020-12-12', 2321334, 'tp1 literatura', '4to_1ra', 'lengua', '1. de\r\n2. asd\r\n3. asdsadas\r\n4. sadksakd', 'asdsa.com', 'lucasg@gmail.com'),
('2020-09-23', 2321335, 'Hola', '2do_2da', '', 'Kskks', 'Iskks', '123@gmail.com'),
('2020-12-12', 2321336, 'trabajo practico numero 1', '1ro_1ra', '', 'asdas', 'asdsa', 'mario@gmail.com'),
('2020-12-12', 2321337, 'trabajo practico numero 1', '1ro_1ra', 'matematicas', '1. 2+2=¿?\r\n2. 2.2=¿?\r\n3. 3*5/7=¿?\r\n4. si la raix cuadrada de 2 la multiplicamos a la hipotenusa de un chanco elevado al cuadrado y...\r\n(va en el examen)', 'julioprofe.net', 'mario@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_y_materia`
--

CREATE TABLE `cursos_y_materia` (
  `curso` varchar(10) NOT NULL,
  `materia` varchar(70) NOT NULL,
  `profesor` varchar(40) DEFAULT NULL,
  `tipo` varchar(10) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos_y_materia`
--

INSERT INTO `cursos_y_materia` (`curso`, `materia`, `profesor`, `tipo`, `id`) VALUES
	('1ro_1ra', 'Ciencias Naturales', NULL, 'aula', 359),
	('1ro_1ra', 'Ciencias Sociales', NULL, 'aula', 360),
	('1ro_1ra', 'Educacion Artistica', NULL, 'aula', 361),
	('1ro_1ra', 'Educacion Fisica', NULL, 'aula', 362),
	('1ro_1ra', 'Ingles', NULL, 'aula', 363),
	('1ro_1ra', 'Matematica', NULL, 'aula', 364),
	('1ro_1ra', 'Practicas del Lenguaje', NULL, 'aula', 365),
	('1ro_1ra', 'Construccion Ciudadana', NULL, 'aula', 366),
	('1ro_1ra', 'Procedimientos Tecnicos', NULL, 'taller', 367),
	('1ro_1ra', 'Lenguajes Tecnologicos', NULL, 'taller', 368),
	('1ro_1ra', 'Sistemas Tecnologicos', NULL, 'taller', 369),
	('1ro_2da', 'Ciencias Naturales', NULL, 'aula', 370),
	('1ro_2da', 'Ciencias Sociales', NULL, 'aula', 371),
	('1ro_2da', 'Educacion Artistica', NULL, 'aula', 372),
	('1ro_2da', 'Educacion Fisica', NULL, 'aula', 373),
	('1ro_2da', 'Ingles', NULL, 'aula', 374),
	('1ro_2da', 'Matematica', NULL, 'aula', 375),
	('1ro_2da', 'Practicas del Lenguaje', NULL, 'aula', 376),
	('1ro_2da', 'Construccion Ciudadana', NULL, 'aula', 377),
	('1ro_2da', 'Procedimientos Tecnicos', NULL, 'taller', 378),
	('1ro_2da', 'Lenguajes Tecnologicos', NULL, 'taller', 379),
	('1ro_2da', 'Sistemas Tecnologicos', NULL, 'taller', 380),
	('1ro_3ra', 'Ciencias Naturales', NULL, 'aula', 381),
	('1ro_3ra', 'Ciencias Sociales', NULL, 'aula', 382),
	('1ro_3ra', 'Educacion Artistica', NULL, 'aula', 383),
	('1ro_3ra', 'Educacion Fisica', NULL, 'aula', 384),
	('1ro_3ra', 'Ingles', NULL, 'aula', 385),
	('1ro_3ra', 'Matematica', NULL, 'aula', 386),
	('1ro_3ra', 'Practicas del Lenguaje', NULL, 'aula', 387),
	('1ro_3ra', 'Construccion Ciudadana', NULL, 'aula', 388),
	('1ro_3ra', 'Procedimientos Tecnicos', NULL, 'taller', 389),
	('1ro_3ra', 'Lenguajes Tecnologicos', NULL, 'taller', 390),
	('1ro_3ra', 'Sistemas Tecnologicos', NULL, 'taller', 391),
	('1ro_4ta', 'Ciencias Naturales', NULL, 'aula', 392),
	('1ro_4ta', 'Ciencias Sociales', NULL, 'aula', 393),
	('1ro_4ta', 'Educacion Artistica', NULL, 'aula', 394),
	('1ro_4ta', 'Educacion Fisica', NULL, 'aula', 395),
	('1ro_4ta', 'Ingles', NULL, 'aula', 396),
	('1ro_4ta', 'Matematica', NULL, 'aula', 397),
	('1ro_4ta', 'Practicas del Lenguaje', NULL, 'aula', 398),
	('1ro_4ta', 'Construccion Ciudadana', NULL, 'aula', 399),
	('1ro_4ta', 'Procedimientos Tecnicos', NULL, 'taller', 400),
	('1ro_4ta', 'Lenguajes Tecnologicos', NULL, 'taller', 401),
	('1ro_4ta', 'Sistemas Tecnologicos', NULL, 'taller', 402),
	('1ro_5ta', 'Ciencias Naturales', NULL, 'aula', 403),
	('1ro_5ta', 'Ciencias Sociales', NULL, 'aula', 404),
	('1ro_5ta', 'Educacion Artistica', NULL, 'aula', 405),
	('1ro_5ta', 'Educacion Fisica', NULL, 'aula', 406),
	('1ro_5ta', 'Ingles', NULL, 'aula', 407),
	('1ro_5ta', 'Matematica', NULL, 'aula', 408),
	('1ro_5ta', 'Practicas del Lenguaje', NULL, 'aula', 409),
	('1ro_5ta', 'Construccion Ciudadana', NULL, 'aula', 410),
	('1ro_5ta', 'Procedimientos Tecnicos', NULL, 'taller', 411),
	('1ro_5ta', 'Lenguajes Tecnologicos', NULL, 'taller', 412),
	('1ro_5ta', 'Sistemas Tecnologicos', NULL, 'taller', 413),
	('2do_1ra', 'Biologia', NULL, 'aula', 414),
	('2do_1ra', 'Construccion de Ciudadania', NULL, 'aula', 415),
	('2do_1ra', 'Educacion Artistica', NULL, 'aula', 416),
	('2do_1ra', 'Educacion Fisica', NULL, 'aula', 417),
	('2do_1ra', 'Fisico-Quimica', NULL, 'aula', 418),
	('2do_1ra', 'Geografia', NULL, 'aula', 419),
	('2do_1ra', 'Historia', NULL, 'aula', 420),
	('2do_1ra', 'Ingles', NULL, 'aula', 421),
	('2do_1ra', 'Matematica', NULL, 'aula', 422),
	('2do_1ra', 'Practicas del Lenguaje', NULL, 'aula', 423),
	('2do_1ra', 'Procedimientos Tecnicos', NULL, 'taller', 424),
	('2do_1ra', 'Lenguajes Tecnologicos', NULL, 'taller', 425),
	('2do_1ra', 'Sistemas Tecnologicos', NULL, 'taller', 426),
	('2do_2da', 'Biologia', NULL, 'aula', 427),
	('2do_2da', 'Construccion de Ciudadania', NULL, 'aula', 428),
	('2do_2da', 'Educacion Artistica', NULL, 'aula', 429),
	('2do_2da', 'Educacion Fisica', NULL, 'aula', 430),
	('2do_2da', 'Fisico-Quimica', NULL, 'aula', 431),
	('2do_2da', 'Geografia', NULL, 'aula', 432),
	('2do_2da', 'Historia', NULL, 'aula', 433),
	('2do_2da', 'Ingles', NULL, 'aula', 434),
	('2do_2da', 'Matematica', NULL, 'aula', 435),
	('2do_2da', 'Practicas del Lenguaje', NULL, 'aula', 436),
	('2do_2da', 'Procedimientos Tecnicos', NULL, 'taller', 437),
	('2do_2da', 'Lenguajes Tecnologicos', NULL, 'taller', 438),
	('2do_2da', 'Sistemas Tecnologicos', NULL, 'taller', 439),
	('2do_3ra', 'Biologia', NULL, 'aula', 440),
	('2do_3ra', 'Construccion de Ciudadania', NULL, 'aula', 441),
	('2do_3ra', 'Educacion Artistica', NULL, 'aula', 442),
	('2do_3ra', 'Educacion Fisica', NULL, 'aula', 443),
	('2do_3ra', 'Fisico-Quimica', NULL, 'aula', 444),
	('2do_3ra', 'Geografia', NULL, 'aula', 445),
	('2do_3ra', 'Historia', NULL, 'aula', 446),
	('2do_3ra', 'Ingles', NULL, 'aula', 447),
	('2do_3ra', 'Matematica', NULL, 'aula', 448),
	('2do_3ra', 'Practicas del Lenguaje', NULL, 'aula', 449),
	('2do_3ra', 'Procedimientos Tecnicos', NULL, 'taller', 450),
	('2do_3ra', 'Lenguajes Tecnologicos', NULL, 'taller', 451),
	('2do_3ra', 'Sistemas Tecnologicos', NULL, 'taller', 452),
	('2do_4ta', 'Biologia', NULL, 'aula', 453),
	('2do_4ta', 'Construccion de Ciudadania', NULL, 'aula', 454),
	('2do_4ta', 'Educacion Artistica', NULL, 'aula', 455),
	('2do_4ta', 'Educacion Fisica', NULL, 'aula', 456),
	('2do_4ta', 'Fisico-Quimica', NULL, 'aula', 457),
	('2do_4ta', 'Geografia', NULL, 'aula', 458),
	('2do_4ta', 'Historia', NULL, 'aula', 459),
	('2do_4ta', 'Ingles', NULL, 'aula', 460),
	('2do_4ta', 'Matematica', NULL, 'aula', 461),
	('2do_4ta', 'Practicas del Lenguaje', NULL, 'aula', 462),
	('2do_4ta', 'Procedimientos Tecnicos', NULL, 'taller', 463),
	('2do_4ta', 'Lenguajes Tecnologicos', NULL, 'taller', 464),
	('2do_4ta', 'Sistemas Tecnologicos', NULL, 'taller', 465),
	('2do_5ta', 'Biologia', NULL, 'aula', 466),
	('2do_5ta', 'Construccion de Ciudadania', NULL, 'aula', 467),
	('2do_5ta', 'Educacion Artistica', NULL, 'aula', 468),
	('2do_5ta', 'Educacion Fisica', NULL, 'aula', 469),
	('2do_5ta', 'Fisico-Quimica', NULL, 'aula', 470),
	('2do_5ta', 'Geografia', NULL, 'aula', 471),
	('2do_5ta', 'Historia', NULL, 'aula', 472),
	('2do_5ta', 'Ingles', NULL, 'aula', 473),
	('2do_5ta', 'Matematica', NULL, 'aula', 474),
	('2do_5ta', 'Practicas del Lenguaje', NULL, 'aula', 475),
	('2do_5ta', 'Procedimientos Tecnicos', NULL, 'taller', 476),
	('2do_5ta', 'Lenguajes Tecnologicos', NULL, 'taller', 477),
	('2do_5ta', 'Sistemas Tecnologicos', NULL, 'taller', 478),
	('3ro_1ra', 'Biologia', NULL, 'aula', 479),
	('3ro_1ra', 'Construccion de Ciudadania', NULL, 'aula', 480),
	('3ro_1ra', 'Educacion Artistica', NULL, 'aula', 481),
	('3ro_1ra', 'Educacion Fisica', NULL, 'aula', 482),
	('3ro_1ra', 'Fisico-Quimica', NULL, 'aula', 483),
	('3ro_1ra', 'Geografia', NULL, 'aula', 484),
	('3ro_1ra', 'Historia', NULL, 'aula', 485),
	('3ro_1ra', 'Ingles', NULL, 'aula', 486),
	('3ro_1ra', 'Matematica', NULL, 'aula', 487),
	('3ro_1ra', 'Practicas del Lenguaje', NULL, 'aula', 488),
	('3ro_1ra', 'Procedimientos Tecnicos', NULL, 'taller', 489),
	('3ro_1ra', 'Lenguajes Tecnologicos', NULL, 'taller', 490),
	('3ro_1ra', 'Sistemas Tecnologicos', NULL, 'taller', 491),
	('3ro_2da', 'Biologia', NULL, 'aula', 492),
	('3ro_2da', 'Construccion de Ciudadania', NULL, 'aula', 493),
	('3ro_2da', 'Educacion Artistica', NULL, 'aula', 494),
	('3ro_2da', 'Educacion Fisica', NULL, 'aula', 495),
	('3ro_2da', 'Fisico-Quimica', NULL, 'aula', 496),
	('3ro_2da', 'Geografia', NULL, 'aula', 497),
	('3ro_2da', 'Historia', NULL, 'aula', 498),
	('3ro_2da', 'Ingles', NULL, 'aula', 499),
	('3ro_2da', 'Matematica', NULL, 'aula', 500),
	('3ro_2da', 'Practicas del Lenguaje', NULL, 'aula', 501),
	('3ro_2da', 'Procedimientos Tecnicos', NULL, 'taller', 502),
	('3ro_2da', 'Lenguajes Tecnologicos', NULL, 'taller', 503),
	('3ro_2da', 'Sistemas Tecnologicos', NULL, 'taller', 504),
	('3ro_3ra', 'Biologia', NULL, 'aula', 505),
	('3ro_3ra', 'Construccion de Ciudadania', NULL, 'aula', 506),
	('3ro_3ra', 'Educacion Artistica', NULL, 'aula', 507),
	('3ro_3ra', 'Educacion Fisica', NULL, 'aula', 508),
	('3ro_3ra', 'Fisico-Quimica', NULL, 'aula', 509),
	('3ro_3ra', 'Geografia', NULL, 'aula', 510),
	('3ro_3ra', 'Historia', NULL, 'aula', 511),
	('3ro_3ra', 'Ingles', NULL, 'aula', 512),
	('3ro_3ra', 'Matematica', NULL, 'aula', 513),
	('3ro_3ra', 'Practicas del Lenguaje', NULL, 'aula', 514),
	('3ro_3ra', 'Procedimientos Tecnicos', NULL, 'taller', 515),
	('3ro_3ra', 'Lenguajes Tecnologicos', NULL, 'taller', 516),
	('3ro_3ra', 'Sistemas Tecnologicos', NULL, 'taller', 517),
	('3ro_4ta', 'Biologia', NULL, 'aula', 518),
	('3ro_4ta', 'Construccion de Ciudadania', NULL, 'aula', 519),
	('3ro_4ta', 'Educacion Artistica', NULL, 'aula', 520),
	('3ro_4ta', 'Educacion Fisica', NULL, 'aula', 521),
	('3ro_4ta', 'Fisico-Quimica', NULL, 'aula', 522),
	('3ro_4ta', 'Geografia', NULL, 'aula', 523),
	('3ro_4ta', 'Historia', NULL, 'aula', 524),
	('3ro_4ta', 'Ingles', NULL, 'aula', 525),
	('3ro_4ta', 'Matematica', NULL, 'aula', 526),
	('3ro_4ta', 'Practicas del Lenguaje', NULL, 'aula', 527),
	('3ro_4ta', 'Procedimientos Tecnicos', NULL, 'taller', 528),
	('3ro_4ta', 'Lenguajes Tecnologicos', NULL, 'taller', 529),
	('3ro_4ta', 'Sistemas Tecnologicos', NULL, 'taller', 530),
	('3ro_5ta', 'Biologia', NULL, 'aula', 531),
	('3ro_5ta', 'Construccion de Ciudadania', NULL, 'aula', 532),
	('3ro_5ta', 'Educacion Artistica', NULL, 'aula', 533),
	('3ro_5ta', 'Educacion Fisica', NULL, 'aula', 534),
	('3ro_5ta', 'Fisico-Quimica', NULL, 'aula', 535),
	('3ro_5ta', 'Geografia', NULL, 'aula', 536),
	('3ro_5ta', 'Historia', NULL, 'aula', 537),
	('3ro_5ta', 'Ingles', NULL, 'aula', 538),
	('3ro_5ta', 'Matematica', NULL, 'aula', 539),
	('3ro_5ta', 'Practicas del Lenguaje', NULL, 'aula', 540),
	('3ro_5ta', 'Procedimientos Tecnicos', NULL, 'taller', 541),
	('3ro_5ta', 'Lenguajes Tecnologicos', NULL, 'taller', 542),
	('3ro_5ta', 'Sistemas Tecnologicos', NULL, 'taller', 543),
	('4to_1ra', 'Literatura', NULL, 'aula', 544),
	('4to_1ra', 'Ingles', NULL, 'aula', 545),
	('4to_1ra', 'Educacion Fisica', NULL, 'aula', 546),
	('4to_1ra', 'Salud y Adolescencia', NULL, 'aula', 547),
	('4to_1ra', 'Historia', NULL, 'aula', 548),
	('4to_1ra', 'Geografia', NULL, 'aula', 549),
	('4to_1ra', 'Matematica Ciclo Superior', NULL, 'aula', 550),
	('4to_1ra', 'Quimica', NULL, 'aula', 551),
	('4to_1ra', 'Fisica', NULL, 'aula', 552),
	('4to_1ra', 'Operaciones Unitarias y Tecnologia de los Materiales', NULL, 'aula', 553),
	('4to_1ra', 'Introduccion a la Biologia Celular', NULL, 'aula', 554),
	('4to_1ra', 'Laboratorio de Operaciones Unitarias y Tecnologia de los Materiales', NULL, 'taller', 555),
	('4to_1ra', 'Laboratorio de Ensayos Fisicos', NULL, 'taller', 556),
	('4to_1ra', 'Laboratorio de Quimica', NULL, 'taller', 557),
	('4to_2da', 'Literatura', NULL, 'aula', 558),
	('4to_2da', 'Ingles', NULL, 'aula', 559),
	('4to_2da', 'Educacion Fisica', NULL, 'aula', 560),
	('4to_2da', 'Salud y Adolescencia', NULL, 'aula', 561),
	('4to_2da', 'Historia', NULL, 'aula', 562),
	('4to_2da', 'Matematica Ciclo Superior', NULL, 'aula', 563),
	('4to_2da', 'Fisica', NULL, 'aula', 564),
	('4to_2da', 'Quimica', NULL, 'aula', 565),
	('4to_2da', 'Tecnologias Electronicas', NULL, 'aula', 566),
	('4to_2da', 'Laboratorio de Programacion', NULL, 'taller', 567),
	('4to_2da', 'Laboratorio de Hardware', NULL, 'taller', 568),
	('4to_2da', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 569),
	('4to_2da', 'Laboratorio de Aplicaciones', NULL, 'taller', 570),
	('4to_3ra', 'Literatura', NULL, 'aula', 571),
	('4to_3ra', 'Ingles', NULL, 'aula', 572),
	('4to_3ra', 'Educacion Fisica', NULL, 'aula', 573),
	('4to_3ra', 'Salud y Adolescencia', NULL, 'aula', 574),
	('4to_3ra', 'Historia', NULL, 'aula', 575),
	('4to_3ra', 'Matematica Ciclo Superior', NULL, 'aula', 576),
	('4to_3ra', 'Fisica', NULL, 'aula', 577),
	('4to_3ra', 'Quimica', NULL, 'aula', 578),
	('4to_3ra', 'Tecnologias Electronicas', NULL, 'aula', 579),
	('4to_3ra', 'Laboratorio de Programacion', NULL, 'taller', 580),
	('4to_3ra', 'Laboratorio de Hardware', NULL, 'taller', 581),
	('4to_3ra', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 582),
	('4to_3ra', 'Laboratorio de Aplicaciones', NULL, 'taller', 583),
	('4to_4ta', 'Literatura', NULL, 'aula', 584),
	('4to_4ta', 'Ingles', NULL, 'aula', 585),
	('4to_4ta', 'Educacion Fisica', NULL, 'aula', 586),
	('4to_4ta', 'Salud y Adolescencia', NULL, 'aula', 587),
	('4to_4ta', 'Historia', NULL, 'aula', 588),
	('4to_4ta', 'Geografia', NULL, 'aula', 589),
	('4to_4ta', 'Matematica Ciclo Superior', NULL, 'aula', 590),
	('4to_4ta', 'Quimica', NULL, 'aula', 591),
	('4to_4ta', 'Fisica', NULL, 'aula', 592),
	('4to_4ta', 'Operaciones Unitarias y Tecnologia de los Materiales', NULL, 'aula', 593),
	('4to_4ta', 'Introduccion a la Biologia Celular', NULL, 'aula', 594),
	('4to_4ta', 'Laboratorio de Operaciones Unitarias y Tecnologia de los Materiales', NULL, 'taller', 595),
	('4to_4ta', 'Laboratorio de Ensayos Fisicos', NULL, 'taller', 596),
	('4to_4ta', 'Laboratorio de Quimica', NULL, 'taller', 597),
	('4to_5ta', 'Literatura', NULL, 'aula', 598),
	('4to_5ta', 'Ingles', NULL, 'aula', 599),
	('4to_5ta', 'Educacion Fisica', NULL, 'aula', 600),
	('4to_5ta', 'Salud y Adolescencia', NULL, 'aula', 601),
	('4to_5ta', 'Historia', NULL, 'aula', 602),
	('4to_5ta', 'Matematica Ciclo Superior', NULL, 'aula', 603),
	('4to_5ta', 'Fisica', NULL, 'aula', 604),
	('4to_5ta', 'Quimica', NULL, 'aula', 605),
	('4to_5ta', 'Tecnologias Electronicas', NULL, 'aula', 606),
	('4to_5ta', 'Laboratorio de Programacion', NULL, 'taller', 607),
	('4to_5ta', 'Laboratorio de Hardware', NULL, 'taller', 608),
	('4to_5ta', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 609),
	('4to_5ta', 'Laboratorio de Aplicaciones', NULL, 'taller', 610),
	('5to_1ra', 'Literatura', NULL, 'aula', 611),
	('5to_1ra', 'Ingles', NULL, 'aula', 612),
	('5to_1ra', 'Educacion Fisica', NULL, 'aula', 613),
	('5to_1ra', 'Politica y Ciudadania', NULL, 'aula', 614),
	('5to_1ra', 'Historia', NULL, 'aula', 615),
	('5to_1ra', 'Analisis Matematico', NULL, 'aula', 616),
	('5to_1ra', 'Quimica Organica', NULL, 'aula', 617),
	('5to_1ra', 'Quimica General e Inorganica', NULL, 'aula', 618),
	('5to_1ra', 'Procesos Quimicos y Control', NULL, 'aula', 619),
	('5to_1ra', 'Laboratorio de Procesos Industriales', NULL, 'taller', 620),
	('5to_1ra', 'Laboratorio de Tecnicas Analiticas', NULL, 'taller', 621),
	('5to_1ra', 'Laboratorio de Quimica Organica', NULL, 'taller', 622),
	('5to_2da', 'Literatura', NULL, 'aula', 623),
	('5to_2da', 'Ingles', NULL, 'aula', 624),
	('5to_2da', 'Educacion Fisica', NULL, 'aula', 625),
	('5to_2da', 'Politica y Ciudadania', NULL, 'aula', 626),
	('5to_2da', 'Historia', NULL, 'aula', 627),
	('5to_2da', 'Geografia', NULL, 'aula', 628),
	('5to_2da', 'Analisis Matematico', NULL, 'aula', 629),
	('5to_2da', 'Sistemas Digitales', NULL, 'aula', 630),
	('5to_2da', 'Desconocido', NULL, 'aula', 631),
	('5to_2da', 'Laboratorio de Programacion', NULL, 'taller', 632),
	('5to_2da', 'Laboratorio de Hardware', NULL, 'taller', 633),
	('5to_2da', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 634),
	('5to_2da', 'Laboratorio de Aplicaciones', NULL, 'taller', 635),
	('5to_3ra', 'Literatura', NULL, 'aula', 636),
	('5to_3ra', 'Ingles', NULL, 'aula', 637),
	('5to_3ra', 'Educacion Fisica', NULL, 'aula', 638),
	('5to_3ra', 'Politica y Ciudadania', NULL, 'aula', 639),
	('5to_3ra', 'Historia', NULL, 'aula', 640),
	('5to_3ra', 'Geografia', NULL, 'aula', 641),
	('5to_3ra', 'Analisis Matematico', NULL, 'aula', 642),
	('5to_3ra', 'Sistemas Digitales', NULL, 'aula', 643),
	('5to_3ra', 'Desconocido', NULL, 'aula', 644),
	('5to_3ra', 'Laboratorio de Programacion', NULL, 'taller', 645),
	('5to_3ra', 'Laboratorio de Hardware', NULL, 'taller', 646),
	('5to_3ra', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 647),
	('5to_3ra', 'Laboratorio de Aplicaciones', NULL, 'taller', 648),
	('5to_4ta', 'Literatura', NULL, 'aula', 649),
	('5to_4ta', 'Ingles', NULL, 'aula', 650),
	('5to_4ta', 'Educacion Fisica', NULL, 'aula', 651),
	('5to_4ta', 'Politica y Ciudadania', NULL, 'aula', 652),
	('5to_4ta', 'Historia', NULL, 'aula', 653),
	('5to_4ta', 'Analisis Matematico', NULL, 'aula', 654),
	('5to_4ta', 'Quimica Organica', NULL, 'aula', 655),
	('5to_4ta', 'Quimica General e Inorganica', NULL, 'aula', 656),
	('5to_4ta', 'Procesos Quimicos y Control', NULL, 'aula', 657),
	('5to_4ta', 'Laboratorio de Procesos Industriales', NULL, 'taller', 658),
	('5to_4ta', 'Laboratorio de Tecnicas Analiticas', NULL, 'taller', 659),
	('5to_4ta', 'Laboratorio de Quimica Organica', NULL, 'taller', 660),
	('6to_1ra', 'Literatura', NULL, 'aula', 661),
	('6to_1ra', 'Ingles', NULL, 'aula', 662),
	('6to_1ra', 'Educacion Fisica', NULL, 'aula', 663),
	('6to_1ra', 'Filosofia', NULL, 'aula', 664),
	('6to_1ra', 'Arte', NULL, 'aula', 665),
	('6to_1ra', 'Matematica Aplicada', NULL, 'aula', 666),
	('6to_1ra', 'Quimica Organica y Biologica', NULL, 'aula', 667),
	('6to_1ra', 'Quimica Industrial', NULL, 'aula', 668),
	('6to_1ra', 'Quimica Analitica', NULL, 'aula', 669),
	('6to_1ra', 'Derechos del Trabajo', NULL, 'aula', 670),
	('6to_1ra', 'Laboratorio de Quimica Organica, Biologica y Microbiologica', NULL, 'taller', 671),
	('6to_1ra', 'Laboratorio de Tecnicas Analiticas', NULL, 'taller', 672),
	('6to_1ra', 'Laboratorio de Procesos Industriales', NULL, 'taller', 673),
	('6to_2da', 'Literatura', NULL, 'aula', 674),
	('6to_2da', 'Ingles', NULL, 'aula', 675),
	('6to_2da', 'Educacion Fisica', NULL, 'aula', 676),
	('6to_2da', 'Filosofia', NULL, 'aula', 677),
	('6to_2da', 'Arte', NULL, 'aula', 678),
	('6to_2da', 'Matematica Aplicada', NULL, 'aula', 679),
	('6to_2da', 'Sistemas Digitales', NULL, 'aula', 680),
	('6to_2da', 'Desconocido', NULL, 'aula', 681),
	('6to_2da', 'Seguridad Informatica', NULL, 'aula', 682),
	('6to_2da', 'Derechos del Trabajo', NULL, 'aula', 683),
	('6to_2da', 'Laboratorio de Programacion', NULL, 'taller', 684),
	('6to_2da', 'Laboratorio de Hardware', NULL, 'taller', 685),
	('6to_2da', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 686),
	('6to_2da', 'Laboratorio de Aplicaciones', NULL, 'taller', 687),
	('6to_3ra', 'Literatura', NULL, 'aula', 688),
	('6to_3ra', 'Ingles', NULL, 'aula', 689),
	('6to_3ra', 'Educacion Fisica', NULL, 'aula', 690),
	('6to_3ra', 'Filosofia', NULL, 'aula', 691),
	('6to_3ra', 'Arte', NULL, 'aula', 692),
	('6to_3ra', 'Matematica Aplicada', NULL, 'aula', 693),
	('6to_3ra', 'Sistemas Digitales', NULL, 'aula', 694),
	('6to_3ra', 'Desconocido', NULL, 'aula', 695),
	('6to_3ra', 'Seguridad Informatica', NULL, 'aula', 696),
	('6to_3ra', 'Derechos del Trabajo', NULL, 'aula', 697),
	('6to_3ra', 'Laboratorio de Programacion', NULL, 'taller', 698),
	('6to_3ra', 'Laboratorio de Hardware', NULL, 'taller', 699),
	('6to_3ra', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 700),
	('6to_3ra', 'Laboratorio de Aplicaciones', NULL, 'taller', 701),
	('7mo_1ra', 'Practicas Profesionalizantes del Sector Industria de Procesos', NULL, 'aula', 702),
	('7mo_1ra', 'Emprendimientos Productivos y Desarrollo Local', NULL, 'aula', 703),
	('7mo_1ra', 'Bromatologia y Nutricion', NULL, 'aula', 704),
	('7mo_1ra', 'Gestion de la Calidad y Legislacion', NULL, 'aula', 705),
	('7mo_1ra', 'Organizacion y Gestion Industrial', NULL, 'aula', 706),
	('7mo_1ra', 'Microbiologia de los Alimentos', NULL, 'taller', 707),
	('7mo_1ra', 'Laboratorio de Bromatologia', NULL, 'taller', 708),
	('7mo_1ra', 'Laboratorio de Procesos Industriales', NULL, 'taller', 709),
	('7mo_2da', 'Practicas Profesionalizantes del Sector Programacion', NULL, 'aula', 710),
	('7mo_2da', 'Emprendimientos Productivos y Desarrollo Local', NULL, 'aula', 711),
	('7mo_2da', 'Evaluacion de Proyectos', NULL, 'aula', 712),
	('7mo_2da', 'Modelos y Sistemas', NULL, 'aula', 713),
	('7mo_2da', 'Bases de Datos', NULL, 'aula', 714),
	('7mo_2da', 'Desconocido', NULL, 'taller', 715),
	('7mo_2da', 'Desconocido', NULL, 'taller', 716),
	('7mo_2da', 'Desconocido', NULL, 'taller', 717),
	('7mo_3ra', 'Practicas Profesionalizantes del Sector Informatica', NULL, 'aula', 718),
	('7mo_3ra', 'Emprendimientos Productivos y Desarrollo Local', NULL, 'aula', 719),
	('7mo_3ra', 'Evaluacion de Proyectos', NULL, 'aula', 720),
	('7mo_3ra', 'Modelos y Sistemas', NULL, 'aula', 721),
	('7mo_3ra', 'Bases de Datos', NULL, 'aula', 722),
	('7mo_3ra', 'Proyecto, Diseño e Implementacion de Sistemas Computacionales', NULL, 'taller', 723),
	('7mo_3ra', 'Instalacion, Mantenimiento y Reparacion de Sistemas Computacionales', NULL, 'taller', 724),
	('7mo_3ra', 'Instalacion, Mantenimiento y Reparacion de Redes Informaticas', NULL, 'taller', 725);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `cod_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2321338;

--
-- AUTO_INCREMENT de la tabla `cursos_y_materia`
--
ALTER TABLE `cursos_y_materia`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `recuperar_clave`
--
ALTER TABLE `recuperar_clave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
