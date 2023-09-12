-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-09-2023 a las 19:07:49
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `olimpiadas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Areas`
--

CREATE TABLE `Areas` (
  `id_areas` int(11) NOT NULL,
  `quirofano` tinyint(1) NOT NULL,
  `emergencias` tinyint(1) NOT NULL,
  `salas` tinyint(1) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Enfermero`
--

CREATE TABLE `Enfermero` (
  `id_enfermero` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `DNI` int(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente`
--

CREATE TABLE `Paciente` (
  `id_paciente` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `DNI` int(11) NOT NULL,
  `edad` int(2) NOT NULL,
  `peso` int(3) NOT NULL,
  `obra_social` tinyint(1) NOT NULL,
  `medicacion` tinyint(1) NOT NULL,
  `id_areas` int(11) NOT NULL,
  `id_enfermero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_llamada`
--

CREATE TABLE `tipo_llamada` (
  `id_tipo` int(11) NOT NULL,
  `normal` tinyint(1) NOT NULL,
  `emergencia` tinyint(1) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Areas`
--
ALTER TABLE `Areas`
  ADD PRIMARY KEY (`id_areas`),
  ADD KEY `id_paciente` (`id_paciente`) USING BTREE;

--
-- Indices de la tabla `Enfermero`
--
ALTER TABLE `Enfermero`
  ADD PRIMARY KEY (`id_enfermero`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `Paciente`
--
ALTER TABLE `Paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `id_areas` (`id_areas`),
  ADD KEY `id_enfermero` (`id_enfermero`);

--
-- Indices de la tabla `tipo_llamada`
--
ALTER TABLE `tipo_llamada`
  ADD PRIMARY KEY (`id_tipo`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Areas`
--
ALTER TABLE `Areas`
  MODIFY `id_areas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Enfermero`
--
ALTER TABLE `Enfermero`
  MODIFY `id_enfermero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Paciente`
--
ALTER TABLE `Paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_llamada`
--
ALTER TABLE `tipo_llamada`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
