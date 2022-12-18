-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-11-2022 a las 07:42:18
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19126711_diazlopez_angelodavid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumnos` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `fecha_nac` date NOT NULL,
  `ciudad` varchar(150) NOT NULL,
  `fk_id_casa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumnos`, `nombre`, `apellido`, `fecha_nac`, `ciudad`, `fk_id_casa`) VALUES
(9, 'Angel', 'Lopez', '2003-12-11', 'Londres', 1),
(10, 'Mateo', 'Passos', '2007-05-20', 'Londres', 1),
(11, 'Angelica', 'Lopez', '2004-12-12', 'Buenos Aires', 1),
(12, 'Sofia', 'Lopez', '2005-12-13', 'Buenos Aires', 1),
(13, 'Gabriela', 'Lopez', '2006-12-14', 'Paris', 1),
(14, 'Sanis', 'Guerra', '2018-08-08', 'Londres', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE `casas` (
  `id_casa` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `fundador` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`id_casa`, `nombre`, `fundador`) VALUES
(1, 'Gryffindor', 'Godric Gryffindor'),
(2, 'Hufflepuff', 'Helga Hufflepuff'),
(3, 'Gryffindor', 'Godric Gryffindor'),
(4, 'Hufflepuff', 'Helga Hufflepuff'),
(5, 'Ravenclaw', 'Rowena Ravenclaw'),
(6, 'Slytherin', 'Salazar Slytherin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `mensaje` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`, `apellido`, `correo`, `mensaje`) VALUES
(1, 'prueba', 'pruebaapellido', 'prueba@gmail.com', 'esta es una prueba'),
(2, 'prueba2', 'p', 'angel@gmail.com', 'prueba 2 de mensjae'),
(3, 'claudia', 'lopez', 'valeryelenad@gmail.com', 'your'),
(4, 'SOL', 'TNT', 'angellodiaz@hotmail.com', 'yOUR'),
(5, '', '', '', ''),
(6, 'sol', 'sslls', 'angellodiazlopez@gmail.com', 'aaaaaaaaa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumnos`),
  ADD KEY `fk_alumnos_casas` (`fk_id_casa`);

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`id_casa`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `casas`
--
ALTER TABLE `casas`
  MODIFY `id_casa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_alumnos_casas` FOREIGN KEY (`fk_id_casa`) REFERENCES `casas` (`id_casa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
