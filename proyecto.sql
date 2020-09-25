-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.20-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table proyecto.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `Email` varchar(18) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Dumping data for table proyecto.admin: ~2 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`Email`, `password`) VALUES
	('admin1@gmail.com', '1234'),
	('admin2@gmail.com', '1234');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table proyecto.alumno
CREATE TABLE IF NOT EXISTS `alumno` (
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `curso` varchar(8) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `verificado` int(1) NOT NULL DEFAULT '0',
  `ban_profesor` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Dumping data for table proyecto.alumno: ~17 rows (approximately)
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;

-- Dumping structure for table proyecto.alumnos_verificados
CREATE TABLE IF NOT EXISTS `alumnos_verificados` (
  `curso` varchar(15) NOT NULL,
  `materia` varchar(15) NOT NULL DEFAULT '0',
  `Email` varchar(30) NOT NULL,
  `verificacion` int(1) NOT NULL DEFAULT '0',
  `id` int(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table proyecto.alumnos_verificados: ~19 rows (approximately)
/*!40000 ALTER TABLE `alumnos_verificados` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `alumnos_verificados` ENABLE KEYS */;

-- Dumping structure for table proyecto.codigo
CREATE TABLE IF NOT EXISTS `codigo` (
  `email` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Dumping data for table proyecto.codigo: ~47 rows (approximately)
/*!40000 ALTER TABLE `codigo` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `codigo` ENABLE KEYS */;

-- Dumping structure for table proyecto.contenido
CREATE TABLE IF NOT EXISTS `contenido` (
  `fecha_de_entrega` date NOT NULL,
  `cod_trabajo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `curso` varchar(7) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `materia` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `bibiografia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`cod_trabajo`)
) ENGINE=InnoDB AUTO_INCREMENT=2321336 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Dumping data for table proyecto.contenido: ~2 rows (approximately)
/*!40000 ALTER TABLE `contenido` DISABLE KEYS */;
INSERT INTO `contenido` (`fecha_de_entrega`, `cod_trabajo`, `titulo`, `curso`, `materia`, `contenido`, `bibiografia`, `Email`) VALUES
	('2020-12-12', 2321334, 'tp1 literatura', '4to_1ra', 'lengua', '1. de\r\n2. asd\r\n3. asdsadas\r\n4. sadksakd', 'asdsa.com', 'lucasg@gmail.com'),
	('2020-09-23', 2321335, 'Hola', '2do_2da', '', 'Kskks', 'Iskks', '123@gmail.com');
/*!40000 ALTER TABLE `contenido` ENABLE KEYS */;

-- Dumping structure for table proyecto.cursos_y_materia
CREATE TABLE IF NOT EXISTS `cursos_y_materia` (
  `curso` varchar(10) NOT NULL,
  `materia` varchar(70) NOT NULL,
  `profesor` varchar(40) DEFAULT NULL,
  `tipo` varchar(10) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=359 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table proyecto.cursos_y_materia: ~252 rows (approximately)
/*!40000 ALTER TABLE `cursos_y_materia` DISABLE KEYS */;
INSERT INTO `cursos_y_materia` (`curso`, `materia`, `profesor`, `tipo`, `id`) VALUES
	('1ro_1ra', 'Ciencias Naturales', NULL, 'aula', 107),
	('1ro_1ra', 'Ciencias Sociales', NULL, 'aula', 108),
	('1ro_1ra', 'Educacion Artistica', NULL, 'aula', 109),
	('1ro_1ra', 'Educacion Fisica', NULL, 'aula', 110),
	('1ro_1ra', 'Ingles', NULL, 'aula', 111),
	('1ro_1ra', 'Matematica', NULL, 'aula', 112),
	('1ro_1ra', 'Practicas del Lenguaje', NULL, 'aula', 113),
	('1ro_1ra', 'Construccion Ciudadana', NULL, 'aula', 114),
	('1ro_1ra', 'Procedimientos Tecnicos', NULL, 'taller', 115),
	('1ro_1ra', 'Lenguajes Tecnologicos', NULL, 'taller', 116),
	('1ro_1ra', 'Sistemas Tecnologicos', NULL, 'taller', 117),
	('1ro_2da', 'Ciencias Naturales', NULL, 'aula', 118),
	('1ro_2da', 'Ciencias Sociales', NULL, 'aula', 119),
	('1ro_2da', 'Educacion Artistica', NULL, 'aula', 120),
	('1ro_2da', 'Educacion Fisica', NULL, 'aula', 121),
	('1ro_2da', 'Ingles', NULL, 'aula', 122),
	('1ro_2da', 'Matematica', NULL, 'aula', 123),
	('1ro_2da', 'Practicas del Lenguaje', NULL, 'aula', 124),
	('1ro_2da', 'Construccion Ciudadana', NULL, 'aula', 125),
	('1ro_2da', 'Procedimientos Tecnicos', NULL, 'taller', 126),
	('1ro_2da', 'Lenguajes Tecnologicos', NULL, 'taller', 127),
	('1ro_2da', 'Sistemas Tecnologicos', NULL, 'taller', 128),
	('1ro_3ra', 'Ciencias Naturales', NULL, 'aula', 129),
	('1ro_3ra', 'Ciencias Sociales', NULL, 'aula', 130),
	('1ro_3ra', 'Educacion Artistica', NULL, 'aula', 131),
	('1ro_3ra', 'Educacion Fisica', NULL, 'aula', 132),
	('1ro_3ra', 'Ingles', NULL, 'aula', 133),
	('1ro_3ra', 'Matematica', NULL, 'aula', 134),
	('1ro_3ra', 'Practicas del Lenguaje', NULL, 'aula', 135),
	('1ro_3ra', 'Construccion Ciudadana', NULL, 'aula', 136),
	('1ro_3ra', 'Procedimientos Tecnicos', NULL, 'taller', 137),
	('1ro_3ra', 'Lenguajes Tecnologicos', NULL, 'taller', 138),
	('1ro_3ra', 'Sistemas Tecnologicos', NULL, 'taller', 139),
	('1ro_4ta', 'Ciencias Naturales', NULL, 'aula', 140),
	('1ro_4ta', 'Ciencias Sociales', NULL, 'aula', 141),
	('1ro_4ta', 'Educacion Artistica', NULL, 'aula', 142),
	('1ro_4ta', 'Educacion Fisica', NULL, 'aula', 143),
	('1ro_4ta', 'Ingles', NULL, 'aula', 144),
	('1ro_4ta', 'Matematica', NULL, 'aula', 145),
	('1ro_4ta', 'Practicas del Lenguaje', NULL, 'aula', 146),
	('1ro_4ta', 'Construccion Ciudadana', NULL, 'aula', 147),
	('1ro_4ta', 'Procedimientos Tecnicos', NULL, 'taller', 148),
	('1ro_4ta', 'Lenguajes Tecnologicos', NULL, 'taller', 149),
	('1ro_4ta', 'Sistemas Tecnologicos', NULL, 'taller', 150),
	('1ro_5ta', 'Ciencias Naturales', NULL, 'aula', 151),
	('1ro_5ta', 'Ciencias Sociales', NULL, 'aula', 152),
	('1ro_5ta', 'Educacion Artistica', NULL, 'aula', 153),
	('1ro_5ta', 'Educacion Fisica', NULL, 'aula', 154),
	('1ro_5ta', 'Ingles', NULL, 'aula', 155),
	('1ro_5ta', 'Matematica', NULL, 'aula', 156),
	('1ro_5ta', 'Practicas del Lenguaje', NULL, 'aula', 157),
	('1ro_5ta', 'Construccion Ciudadana', NULL, 'aula', 158),
	('1ro_5ta', 'Procedimientos Tecnicos', NULL, 'taller', 159),
	('1ro_5ta', 'Lenguajes Tecnologicos', NULL, 'taller', 160),
	('1ro_5ta', 'Sistemas Tecnologicos', NULL, 'taller', 161),
	('2do_1ra', 'Biologia', NULL, 'aula', 162),
	('2do_1ra', 'Construccion de Ciudadania', NULL, 'aula', 163),
	('2do_1ra', 'Educacion Artistica', NULL, 'aula', 164),
	('2do_1ra', 'Educacion Fisica', NULL, 'aula', 165),
	('2do_1ra', 'Fisico-Quimica', NULL, 'aula', 166),
	('2do_1ra', 'Geografia', NULL, 'aula', 167),
	('2do_1ra', 'Historia', NULL, 'aula', 168),
	('2do_1ra', 'Ingles', NULL, 'aula', 169),
	('2do_1ra', 'Matematica', NULL, 'aula', 170),
	('2do_1ra', 'Practicas del Lenguaje', NULL, 'aula', 171),
	('2do_1ra', 'Procedimientos Tecnicos', NULL, 'taller', 172),
	('2do_1ra', 'Lenguajes Tecnologicos', NULL, 'taller', 173),
	('2do_1ra', 'Sistemas Tecnologicos', NULL, 'taller', 174),
	('2do_2da', 'Biologia', NULL, 'aula', 175),
	('2do_2da', 'Construccion de Ciudadania', NULL, 'aula', 176),
	('2do_2da', 'Educacion Artistica', NULL, 'aula', 177),
	('2do_2da', 'Educacion Fisica', NULL, 'aula', 178),
	('2do_2da', 'Fisico-Quimica', NULL, 'aula', 179),
	('2do_2da', 'Geografia', NULL, 'aula', 180),
	('2do_2da', 'Historia', NULL, 'aula', 181),
	('2do_2da', 'Ingles', NULL, 'aula', 182),
	('2do_2da', 'Matematica', NULL, 'aula', 183),
	('2do_2da', 'Practicas del Lenguaje', NULL, 'aula', 184),
	('2do_2da', 'Procedimientos Tecnicos', NULL, 'taller', 185),
	('2do_2da', 'Lenguajes Tecnologicos', NULL, 'taller', 186),
	('2do_2da', 'Sistemas Tecnologicos', NULL, 'taller', 187),
	('2do_3ra', 'Biologia', NULL, 'aula', 188),
	('2do_3ra', 'Construccion de Ciudadania', NULL, 'aula', 189),
	('2do_3ra', 'Educacion Artistica', NULL, 'aula', 190),
	('2do_3ra', 'Educacion Fisica', NULL, 'aula', 191),
	('2do_3ra', 'Fisico-Quimica', NULL, 'aula', 192),
	('2do_3ra', 'Geografia', NULL, 'aula', 193),
	('2do_3ra', 'Historia', NULL, 'aula', 194),
	('2do_3ra', 'Ingles', NULL, 'aula', 195),
	('2do_3ra', 'Matematica', NULL, 'aula', 196),
	('2do_3ra', 'Practicas del Lenguaje', NULL, 'aula', 197),
	('2do_3ra', 'Procedimientos Tecnicos', NULL, 'taller', 198),
	('2do_3ra', 'Lenguajes Tecnologicos', NULL, 'taller', 199),
	('2do_3ra', 'Sistemas Tecnologicos', NULL, 'taller', 200),
	('2do_4ta', 'Biologia', NULL, 'aula', 201),
	('2do_4ta', 'Construccion de Ciudadania', NULL, 'aula', 202),
	('2do_4ta', 'Educacion Artistica', NULL, 'aula', 203),
	('2do_4ta', 'Educacion Fisica', NULL, 'aula', 204),
	('2do_4ta', 'Fisico-Quimica', NULL, 'aula', 205),
	('2do_4ta', 'Geografia', NULL, 'aula', 206),
	('2do_4ta', 'Historia', NULL, 'aula', 207),
	('2do_4ta', 'Ingles', NULL, 'aula', 208),
	('2do_4ta', 'Matematica', NULL, 'aula', 209),
	('2do_4ta', 'Practicas del Lenguaje', NULL, 'aula', 210),
	('2do_4ta', 'Procedimientos Tecnicos', NULL, 'taller', 211),
	('2do_4ta', 'Lenguajes Tecnologicos', NULL, 'taller', 212),
	('2do_4ta', 'Sistemas Tecnologicos', NULL, 'taller', 213),
	('2do_5ta', 'Biologia', NULL, 'aula', 214),
	('2do_5ta', 'Construccion de Ciudadania', NULL, 'aula', 215),
	('2do_5ta', 'Educacion Artistica', NULL, 'aula', 216),
	('2do_5ta', 'Educacion Fisica', NULL, 'aula', 217),
	('2do_5ta', 'Fisico-Quimica', NULL, 'aula', 218),
	('2do_5ta', 'Geografia', NULL, 'aula', 219),
	('2do_5ta', 'Historia', NULL, 'aula', 220),
	('2do_5ta', 'Ingles', NULL, 'aula', 221),
	('2do_5ta', 'Matematica', NULL, 'aula', 222),
	('2do_5ta', 'Practicas del Lenguaje', NULL, 'aula', 223),
	('2do_5ta', 'Procedimientos Tecnicos', NULL, 'taller', 224),
	('2do_5ta', 'Lenguajes Tecnologicos', NULL, 'taller', 225),
	('2do_5ta', 'Sistemas Tecnologicos', NULL, 'taller', 226),
	('3ro_1ra', 'Biologia', NULL, 'aula', 227),
	('3ro_1ra', 'Construccion de Ciudadania', NULL, 'aula', 228),
	('3ro_1ra', 'Educacion Artistica', NULL, 'aula', 229),
	('3ro_1ra', 'Educacion Fisica', NULL, 'aula', 230),
	('3ro_1ra', 'Fisico-Quimica', NULL, 'aula', 231),
	('3ro_1ra', 'Geografia', NULL, 'aula', 232),
	('3ro_1ra', 'Historia', NULL, 'aula', 233),
	('3ro_1ra', 'Ingles', NULL, 'aula', 234),
	('3ro_1ra', 'Matematica', NULL, 'aula', 235),
	('3ro_1ra', 'Practicas del Lenguaje', NULL, 'aula', 236),
	('3ro_1ra', 'Procedimientos Tecnicos', NULL, 'taller', 237),
	('3ro_1ra', 'Lenguajes Tecnologicos', NULL, 'taller', 238),
	('3ro_1ra', 'Sistemas Tecnologicos', NULL, 'taller', 239),
	('3ro_2da', 'Biologia', NULL, 'aula', 240),
	('3ro_2da', 'Construccion de Ciudadania', NULL, 'aula', 241),
	('3ro_2da', 'Educacion Artistica', NULL, 'aula', 242),
	('3ro_2da', 'Educacion Fisica', NULL, 'aula', 243),
	('3ro_2da', 'Fisico-Quimica', NULL, 'aula', 244),
	('3ro_2da', 'Geografia', NULL, 'aula', 245),
	('3ro_2da', 'Historia', NULL, 'aula', 246),
	('3ro_2da', 'Ingles', NULL, 'aula', 247),
	('3ro_2da', 'Matematica', NULL, 'aula', 248),
	('3ro_2da', 'Practicas del Lenguaje', NULL, 'aula', 249),
	('3ro_2da', 'Procedimientos Tecnicos', NULL, 'taller', 250),
	('3ro_2da', 'Lenguajes Tecnologicos', NULL, 'taller', 251),
	('3ro_2da', 'Sistemas Tecnologicos', NULL, 'taller', 252),
	('3ro_3ra', 'Biologia', NULL, 'aula', 253),
	('3ro_3ra', 'Construccion de Ciudadania', NULL, 'aula', 254),
	('3ro_3ra', 'Educacion Artistica', NULL, 'aula', 255),
	('3ro_3ra', 'Educacion Fisica', NULL, 'aula', 256),
	('3ro_3ra', 'Fisico-Quimica', NULL, 'aula', 257),
	('3ro_3ra', 'Geografia', NULL, 'aula', 258),
	('3ro_3ra', 'Historia', NULL, 'aula', 259),
	('3ro_3ra', 'Ingles', NULL, 'aula', 260),
	('3ro_3ra', 'Matematica', NULL, 'aula', 261),
	('3ro_3ra', 'Practicas del Lenguaje', NULL, 'aula', 262),
	('3ro_3ra', 'Procedimientos Tecnicos', NULL, 'taller', 263),
	('3ro_3ra', 'Lenguajes Tecnologicos', NULL, 'taller', 264),
	('3ro_3ra', 'Sistemas Tecnologicos', NULL, 'taller', 265),
	('3ro_4ta', 'Biologia', NULL, 'aula', 266),
	('3ro_4ta', 'Construccion de Ciudadania', NULL, 'aula', 267),
	('3ro_4ta', 'Educacion Artistica', NULL, 'aula', 268),
	('3ro_4ta', 'Educacion Fisica', NULL, 'aula', 269),
	('3ro_4ta', 'Fisico-Quimica', NULL, 'aula', 270),
	('3ro_4ta', 'Geografia', NULL, 'aula', 271),
	('3ro_4ta', 'Historia', NULL, 'aula', 272),
	('3ro_4ta', 'Ingles', NULL, 'aula', 273),
	('3ro_4ta', 'Matematica', NULL, 'aula', 274),
	('3ro_4ta', 'Practicas del Lenguaje', NULL, 'aula', 275),
	('3ro_4ta', 'Procedimientos Tecnicos', NULL, 'taller', 276),
	('3ro_4ta', 'Lenguajes Tecnologicos', NULL, 'taller', 277),
	('3ro_4ta', 'Sistemas Tecnologicos', NULL, 'taller', 278),
	('3ro_5ta', 'Biologia', NULL, 'aula', 279),
	('3ro_5ta', 'Construccion de Ciudadania', NULL, 'aula', 280),
	('3ro_5ta', 'Educacion Artistica', NULL, 'aula', 281),
	('3ro_5ta', 'Educacion Fisica', NULL, 'aula', 282),
	('3ro_5ta', 'Fisico-Quimica', NULL, 'aula', 283),
	('3ro_5ta', 'Geografia', NULL, 'aula', 284),
	('3ro_5ta', 'Historia', NULL, 'aula', 285),
	('3ro_5ta', 'Ingles', NULL, 'aula', 286),
	('3ro_5ta', 'Matematica', NULL, 'aula', 287),
	('3ro_5ta', 'Practicas del Lenguaje', NULL, 'aula', 288),
	('3ro_5ta', 'Procedimientos Tecnicos', NULL, 'taller', 289),
	('3ro_5ta', 'Lenguajes Tecnologicos', NULL, 'taller', 290),
	('3ro_5ta', 'Sistemas Tecnologicos', NULL, 'taller', 291),
	('4to_1ra', 'Literatura', NULL, 'aula', 292),
	('4to_1ra', 'Ingles', NULL, 'aula', 293),
	('4to_1ra', 'Educacion Fisica', NULL, 'aula', 294),
	('4to_1ra', 'Salud y Adolescencia', NULL, 'aula', 295),
	('4to_1ra', 'Historia', NULL, 'aula', 296),
	('4to_1ra', 'Geografia', NULL, 'aula', 297),
	('4to_1ra', 'Matematica Ciclo Superior', NULL, 'aula', 298),
	('4to_1ra', 'Quimica', NULL, 'aula', 299),
	('4to_1ra', 'Fisica', NULL, 'aula', 300),
	('4to_1ra', 'Operaciones Unitarias y Tecnologia de los Materiales', NULL, 'aula', 301),
	('4to_1ra', 'Introduccion a la Biologia Celular', NULL, 'aula', 302),
	('4to_1ra', 'Laboratorio de Operaciones Unitarias y Tecnologia de los Materiales', NULL, 'taller', 303),
	('4to_1ra', 'Laboratorio de Ensayos Fisicos', NULL, 'taller', 304),
	('4to_1ra', 'Laboratorio de Quimica', NULL, 'taller', 305),
	('4to_2da', 'Literatura', NULL, 'aula', 306),
	('4to_2da', 'Ingles', NULL, 'aula', 307),
	('4to_2da', 'Educacion Fisica', NULL, 'aula', 308),
	('4to_2da', 'Salud y Adolescencia', NULL, 'aula', 309),
	('4to_2da', 'Historia', NULL, 'aula', 310),
	('4to_2da', 'Matematica Ciclo Superior', NULL, 'aula', 311),
	('4to_2da', 'Fisica', NULL, 'aula', 312),
	('4to_2da', 'Quimica', NULL, 'aula', 313),
	('4to_2da', 'Tecnologias Electronicas', NULL, 'aula', 314),
	('4to_2da', 'Laboratorio de Programacion', NULL, 'taller', 315),
	('4to_2da', 'Laboratorio de Hardware', NULL, 'taller', 316),
	('4to_2da', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 317),
	('4to_2da', 'Laboratorio de Aplicaciones', NULL, 'taller', 318),
	('4to_3ra', 'Literatura', NULL, 'aula', 319),
	('4to_3ra', 'Ingles', NULL, 'aula', 320),
	('4to_3ra', 'Educacion Fisica', NULL, 'aula', 321),
	('4to_3ra', 'Salud y Adolescencia', NULL, 'aula', 322),
	('4to_3ra', 'Historia', NULL, 'aula', 323),
	('4to_3ra', 'Matematica Ciclo Superior', NULL, 'aula', 324),
	('4to_3ra', 'Fisica', NULL, 'aula', 325),
	('4to_3ra', 'Quimica', NULL, 'aula', 326),
	('4to_3ra', 'Tecnologias Electronicas', NULL, 'aula', 327),
	('4to_3ra', 'Laboratorio de Programacion', NULL, 'taller', 328),
	('4to_3ra', 'Laboratorio de Hardware', NULL, 'taller', 329),
	('4to_3ra', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 330),
	('4to_3ra', 'Laboratorio de Aplicaciones', NULL, 'taller', 331),
	('4to_4ta', 'Literatura', NULL, 'aula', 332),
	('4to_4ta', 'Ingles', NULL, 'aula', 333),
	('4to_4ta', 'Educacion Fisica', NULL, 'aula', 334),
	('4to_4ta', 'Salud y Adolescencia', NULL, 'aula', 335),
	('4to_4ta', 'Historia', NULL, 'aula', 336),
	('4to_4ta', 'Geografia', NULL, 'aula', 337),
	('4to_4ta', 'Matematica Ciclo Superior', NULL, 'aula', 338),
	('4to_4ta', 'Quimica', NULL, 'aula', 339),
	('4to_4ta', 'Fisica', NULL, 'aula', 340),
	('4to_4ta', 'Operaciones Unitarias y Tecnologia de los Materiales', NULL, 'aula', 341),
	('4to_4ta', 'Introduccion a la Biologia Celular', NULL, 'aula', 342),
	('4to_4ta', 'Laboratorio de Operaciones Unitarias y Tecnologia de los Materiales', NULL, 'taller', 343),
	('4to_4ta', 'Laboratorio de Ensayos Fisicos', NULL, 'taller', 344),
	('4to_4ta', 'Laboratorio de Quimica', NULL, 'taller', 345),
	('4to_5ta', 'Literatura', NULL, 'aula', 346),
	('4to_5ta', 'Ingles', NULL, 'aula', 347),
	('4to_5ta', 'Educacion Fisica', NULL, 'aula', 348),
	('4to_5ta', 'Salud y Adolescencia', NULL, 'aula', 349),
	('4to_5ta', 'Historia', NULL, 'aula', 350),
	('4to_5ta', 'Matematica Ciclo Superior', NULL, 'aula', 351),
	('4to_5ta', 'Fisica', NULL, 'aula', 352),
	('4to_5ta', 'Quimica', NULL, 'aula', 353),
	('4to_5ta', 'Tecnologias Electronicas', NULL, 'aula', 354),
	('4to_5ta', 'Laboratorio de Programacion', NULL, 'taller', 355),
	('4to_5ta', 'Laboratorio de Hardware', NULL, 'taller', 356),
	('4to_5ta', 'Laboratorio de Sistemas Operativos', NULL, 'taller', 357),
	('4to_5ta', 'Laboratorio de Aplicaciones', NULL, 'taller', 358);
/*!40000 ALTER TABLE `cursos_y_materia` ENABLE KEYS */;

-- Dumping structure for table proyecto.profesor
CREATE TABLE IF NOT EXISTS `profesor` (
  `nombre` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(16) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo` varchar(16) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Dumping data for table proyecto.profesor: ~4 rows (approximately)
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` (`nombre`, `apellido`, `Email`, `password`, `codigo`) VALUES
	('123', '123', '123@gmail.com', '12345', 'b4dli7'),
	('lucas', 'guerrero', 'lucasg@gmail.com', '123456', '123456'),
	('mario', 'silva', 'mario@gmail.com', '12345', '12345'),
	('rodolfo', 'andrada', 'rodolfo@gmail.com', '1234', 'varfoaolcVDe66bw');
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;

-- Dumping structure for table proyecto.recuperar_clave
CREATE TABLE IF NOT EXISTS `recuperar_clave` (
  `Email` varchar(25) NOT NULL,
  `codigo` int(6) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table proyecto.recuperar_clave: ~1 rows (approximately)
/*!40000 ALTER TABLE `recuperar_clave` DISABLE KEYS */;
INSERT INTO `recuperar_clave` (`Email`, `codigo`, `id`) VALUES
	('lucasg3322@gmail.com', 4646, 47);
/*!40000 ALTER TABLE `recuperar_clave` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
