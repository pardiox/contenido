-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2020 a las 08:28:26
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
('', '87sp5s');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `cod_trabajo` int(11) NOT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `material` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `links` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `planes_estudio` varchar(1000) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `mod_examenes` blob NOT NULL,
  `curso` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `materia` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`cod_trabajo`, `titulo`, `material`, `links`, `planes_estudio`, `mod_examenes`, `curso`, `materia`, `Email`) VALUES
(2321323, 'TE', 'queSADasd', 'aloSADsad', 'yASDasd', '', '4to_1ra ', 'lengua', 'lucasg@gmail.com'),
(2321324, 'como esta', 'asa', 'www.cm', 'ni idea', 0x717565206861636d73, '4to_1ra ', 'lengua', 'lucasg@gmail.com'),
(2321325, 'probando 12', 'sadsas', 'dsad', 'asdsa', 0x7777772e636f6d, '3ro_4ta ', 'lengua', 'lucasg@gmail.com'),
(2321326, 'probando 12', 'sadsas', 'dsad', 'asdsa', 0x7777772e636f6d, '3ro_4ta ', 'lengua', 'lucasg@gmail.com'),
(2321327, 'asdsasa', 'dsa', 'asdsa', 'sad', 0x736161616161, '3ro_4ta ', 'lengua', 'lucasg@gmail.com'),
(2321329, 'tp 1', 'ni idea', 'www.facebook.com', 'yaoi', 0x656e2064696369656d627265, '4to_1ra ', 'lengua', 'lucasg@gmail.com'),
(2321330, 'hola', 'presentacion', 'contenido', 'asdsad.com', 0x31323030312d30332d3239, '2do_2da ', 'matematicas', 'mario@gmail.com'),
(2321331, 'Tp1', 'formal', 'revisar el', '222.com', 0x313232322d31322d3132, '2do_2da ', 'matematicas', 'mario@gmail.com'),
(2321332, 'tp1 literatura', 'presentacion', 'leer los ojos del perro siveriano', 'aa.com', '', '2do_2da ', 'literatura', 'mario@gmail.com'),
(2321333, 'tp4 biologia', 'en folio', 'celulas madres', 'clulas.com', 0x323030312d31322d3132, '2do_2da ', 'biologia', 'mario@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `cod_materia` int(11) NOT NULL,
  `curso` varchar(8) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_materia` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `verificado` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`cod_materia`, `curso`, `Email`, `nombre_materia`, `verificado`) VALUES
(1, '6to_2da', 'lucasg@gmail.com', 'mate', '1'),
(2, '4to_1ra', 'lucasg@gmail.com', 'lengua', '0'),
(3, '3ro_4ta', 'lucasg@gmail.com', 'lengua', '1'),
(4, '3ro_6ta', 'lucasg@gmail.com', 'xaxa', '1'),
(7, '2do_2da', '123@gmail.com', 'filosofia', '1'),
(8, '2do_2da', '123@gmail.com', 'aa', '1'),
(9, '2do_2da', '123@gmail.com', 'aaa', '0'),
(10, '2do_2da', '123@gmail.com', 'aaaa', '1'),
(11, '2do_2da', 'mario@gmail.com', 'literatura', '1'),
(12, '2do_2da', 'mario@gmail.com', 'biologia', '1');

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
('123', '123', '123@gmail.com', '1234', 'b4dli7'),
('lucas', 'guerrero', 'lucasg@gmail.com', '123456', '123456'),
('mario', 'silva', 'mario@gmail.com', '12345', '12345'),
('rodolfo', 'andrada', 'rodolfo@gmail.com', '1234', 'varfoaolcVDe66bw');

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
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`cod_materia`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`Email`);

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
  MODIFY `cod_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2321334;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `cod_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
