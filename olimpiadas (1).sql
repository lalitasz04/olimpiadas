-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-09-2023 a las 19:56:00
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
-- Estructura de tabla para la tabla `llamadas`
--

CREATE TABLE `llamadas` (
  `id_llamadas` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `hora` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente`
--

CREATE TABLE `Paciente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `DNI` int(11) NOT NULL,
  `edad` year(2) NOT NULL,
  `peso` int(3) NOT NULL,
  `obra_social` varchar(10) NOT NULL,
  `medicacion` varchar(10) NOT NULL,
  `sintomas` varchar(100) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_areas` int(11) NOT NULL,
  `id_enfermero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Paciente`
--

INSERT INTO `Paciente` (`id`, `nombre`, `apellido`, `DNI`, `edad`, `peso`, `obra_social`, `medicacion`, `sintomas`, `id_tipo`, `id_areas`, `id_enfermero`) VALUES
(16, 'grgrgr', 'dede', 464382989, 34, 78, 'si', 'no', 'popo tojoj', 1, 1, 1),
(17, 'ewdwdw', 'pop', 455563, 43, 89, 'no', 'no', 'loco popo', 2, 2, 3),
(18, 'moilods', 'aylu', 43332, 34, 65, 'si', 'si', 'fsssa', 3, 3, 3),
(19, 'lolo', 'lococo', 5667454, 32, 23, 'si', 'no', 'dolor abdominal', 4, 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `id_secretaria` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `turno` varchar(12) NOT NULL,
  `lugar` varchar(14) NOT NULL,
  `tipo_llamada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`id_secretaria`, `nombre`, `apellido`, `dni`, `turno`, `lugar`, `tipo_llamada`) VALUES
(1, 'ss', 'zz', '212312', '2023-05-05', 'pasillo', ''),
(2, 'ce', 'sanchez', '213231211', '2023-04-04', 'comun', ''),
(3, 'ce', 'sanchez', '213231211', '2023-04-04', 'comun', ''),
(4, 'ce', 'zz', '212312', '2023-04-04', 'we', ''),
(5, 'ce', 'zz', '212312', '2023/04/04', 'we', ''),
(6, 'ce', 'zz', '212312', '2023/04/04', 'we', ''),
(7, 'ew', 'wewe', 'ewwe', '12/03/2023', 'comuin', ''),
(8, 'ew', 'wewe', 'ewwe', '03/12/2023', 'psi', 'sa'),
(9, 'ew', 'wewe', 'ewwe', '12/03/2023', 'comuin', ''),
(11, 'asd', 'awsw', '1231', '2023/04/04', 'pasillo', 'comun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_llamada`
--

CREATE TABLE `tipo_llamada` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(156) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `password`) VALUES
(1, '12', '12'),
(2, '123', '123'),
(3, 'fra', '123'),
(4, 'aylu', 'gabiteamo123'),
(5, 'lalita', 'camilover'),
(6, '12D', '123'),
(7, '1232', '12w1'),
(8, '12D', 'w2'),
(9, 'celeequispe._', 'wqdw'),
(10, 'aylu', '123'),
(11, 'lali', '1234567'),
(12, 'uhlali', '1234567');

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
-- Indices de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  ADD PRIMARY KEY (`id_llamadas`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `Paciente`
--
ALTER TABLE `Paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_areas` (`id_areas`),
  ADD KEY `id_enfermero` (`id_enfermero`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secretaria`);

--
-- Indices de la tabla `tipo_llamada`
--
ALTER TABLE `tipo_llamada`
  ADD PRIMARY KEY (`id_tipo`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

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
-- AUTO_INCREMENT de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  MODIFY `id_llamadas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Paciente`
--
ALTER TABLE `Paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_secretaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipo_llamada`
--
ALTER TABLE `tipo_llamada`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
