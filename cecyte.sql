-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2024 a las 22:16:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cecyte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a201`
--

CREATE TABLE `a201` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidop` varchar(30) NOT NULL,
  `apellidom` varchar(30) NOT NULL,
  `matricula` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `a201`
--

INSERT INTO `a201` (`id`, `nombre`, `apellidop`, `apellidom`, `matricula`) VALUES
(1, 'Jonathan Alexander', 'Acevedo', 'De la paz', '0000000001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `grupo` varchar(30) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `alumnos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `grupo`, `especialidad`, `alumnos`) VALUES
(1, '201', 'PROGRAMACION', '38'),
(2, '202', 'SYMEC', '39'),
(3, '203', 'ELECTRICIDAD', '40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i201`
--

CREATE TABLE `i201` (
  `id` int(11) NOT NULL,
  `grupo` varchar(30) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `alumnos` varchar(30) NOT NULL,
  `tutor` varchar(30) NOT NULL,
  `jefe` varchar(30) NOT NULL,
  `subjefe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `i201`
--

INSERT INTO `i201` (`id`, `grupo`, `especialidad`, `alumnos`, `tutor`, `jefe`, `subjefe`) VALUES
(1, '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `a201`
--
ALTER TABLE `a201`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `i201`
--
ALTER TABLE `i201`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `a201`
--
ALTER TABLE `a201`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `i201`
--
ALTER TABLE `i201`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
