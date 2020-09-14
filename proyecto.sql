-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-07-2019 a las 22:24:39
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Email` varchar(18) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcar la base de datos para la tabla `admin`
--

INSERT INTO `admin` (`Email`, `password`) VALUES
('admin1@gmail.com', '1234'),
('admin2@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `curso` varchar(8) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcar la base de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`nombre`, `apellido`, `fecha`, `Email`, `password`, `curso`) VALUES
('ewq', 'ewqewqewqe', '1312-02-12', '12312312@gmail.com', 'sadasdsadasd', ''),
('lasa', 'dsad', '2001-11-24', 'lu123@gmail.com', '12345', ''),
('lasa', 'dsad', '2001-11-24', 'lu1231@gmail.com', 'AAq', ''),
('Lucas', 'Guerrero', '1111-11-24', 'lucasg3322@gmail.com', '1234', '2do_2da'),
('asa', 'saSA', '0000-00-00', 'lucassg@gmail.com', '1234', '6to_2da'),
('12312', '32132', '0000-00-00', 'luucasg@gmail.com', '1234', '3ro_4ta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE IF NOT EXISTS `codigo` (
  `email` varchar(18) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcar la base de datos para la tabla `codigo`
--

INSERT INTO `codigo` (`email`, `codigo`) VALUES
('rodolfo@gmail.com', 'varfoaolcVDe66bw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
  `cod_trabajo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `material` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `links` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `planes_estudio` varchar(1000) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `mod_examenes` blob NOT NULL,
  `curso` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `materia` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`cod_trabajo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=2321330 ;

--
-- Volcar la base de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`cod_trabajo`, `titulo`, `material`, `links`, `planes_estudio`, `mod_examenes`, `curso`, `materia`, `Email`) VALUES
(2321322, 'tp 1', 'JODance', 'nos', 'cometa', '', '6to_2da', 'mate', 'lucasg@gmail.com'),
(2321323, 'TE', 'queSADasd', 'aloSADsad', 'yASDasd', '', '4to_1ra ', 'lengua', 'lucasg@gmail.com'),
(2321324, 'como esta', 'asa', 'www.cm', 'ni idea', 0x717565206861636d73, '4to_1ra ', 'lengua', 'lucasg@gmail.com'),
(2321325, 'probando 12', 'sadsas', 'dsad', 'asdsa', 0x7777772e636f6d, '3ro_4ta ', 'lengua', 'lucasg@gmail.com'),
(2321326, 'probando 12', 'sadsas', 'dsad', 'asdsa', 0x7777772e636f6d, '3ro_4ta ', 'lengua', 'lucasg@gmail.com'),
(2321327, 'asdsasa', 'dsa', 'asdsa', 'sad', 0x736161616161, '3ro_4ta ', 'lengua', 'lucasg@gmail.com'),
(2321328, 'asdsasaaa', 'dsa', 'asdsa', 'sad', 0x736161616161, '', '', 'lucasg@gmail.com'),
(2321329, 'tp 1', 'ni idea', 'www.facebook.com', 'yaoi', 0x656e2064696369656d627265, '4to_1ra ', 'lengua', 'lucasg@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `cod_materia` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(8) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_materia` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `verificado` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`cod_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `materia`
--

INSERT INTO `materia` (`cod_materia`, `curso`, `Email`, `nombre_materia`, `verificado`) VALUES
(1, '6to_2da', 'lucasg@gmail.com', 'mate', '0'),
(2, '4to_1ra', 'lucasg@gmail.com', 'lengua', '0'),
(3, '3ro_4ta', 'lucasg@gmail.com', 'lengua', '1'),
(4, '3ro_6ta', 'lucasg@gmail.com', 'xaxa', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `nombre` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(16) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo` varchar(16) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcar la base de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`nombre`, `apellido`, `Email`, `password`, `codigo`) VALUES
('lucas', 'guerrero', 'lucasg@gmail.com', '123456', '123456'),
('mario', 'silva', 'mario@gmail.com', '12345', '12345'),
('rodolfo', 'andrada', 'rodolfo@gmail.com', '1234', 'varfoaolcVDe66bw');
