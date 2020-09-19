-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2020 a las 05:25:21
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
('', ' aqg00i');

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
('2020-09-23', 2321335, 'Hola', '2do_2da', '', 'Kskks', 'Iskks', '123@gmail.com');

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
('1ro_1ra', 'matematicas', '', 'aula', 1),
('1ro_1ra', 'lengua', '', 'aula', 2),
('1ro_1ra', 'ciencia sociales', '', 'aula', 3),
('1ro_1ra', 'ingles', '', 'aula', 4),
('5to_2da', 'diseño web', '', 'taller', 9),
('5to_2da', 'base de datos(aula)', '', 'aula', 10),
('5to_2da', 'Salud y adolescencia', '', 'aula', 12);

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
  MODIFY `cod_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2321336;

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
