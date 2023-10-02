-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-10-2023 a las 23:51:25
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

--
-- Volcado de datos para la tabla `Enfermero`
--

INSERT INTO `Enfermero` (`id_enfermero`, `nombre`, `apellido`, `DNI`, `id_paciente`) VALUES
(1, 'gerardo', 'gomez', 433221, 1),
(2, 'colo', 'lommo', 5784417, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamadas`
--

CREATE TABLE `llamadas` (
  `id_llamada` int(11) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `duracion` time NOT NULL,
  `tipo` varchar(23) NOT NULL,
  `atendido` varchar(23) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `area` varchar(10) NOT NULL,
  `origen` varchar(23) NOT NULL,
  `lugar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `llamadas`
--

INSERT INTO `llamadas` (`id_llamada`, `genero`, `duracion`, `tipo`, `atendido`, `fecha_hora`, `area`, `origen`, `lugar`) VALUES
(1, 'femenino', '00:20:00', 'comun', 'si', '2023-09-07 15:09:01', 'ciruguia', 'emergencia', 'cama'),
(2, 'masculino', '00:12:00', 'comun', 'si', '2023-09-22 22:21:03', 'ciruguia', 'normal', 'dede'),
(3, 'masculino', '00:19:00', 'comun', 'si', '2023-09-19 18:38:52', 'ciruguia', 'emergencia', 'cama'),
(4, 'femenino', '00:26:00', 'equivocado', 'si', '2023-09-26 18:38:52', 'emergencia', 'emergencia', 'recepcion'),
(5, 'femenino', '00:10:00', 'comun', 'si', '2023-09-09 19:08:15', 'ciruguia', 'emergencia', 'cama'),
(6, 'femenino\r\n', '00:00:20', 'equivocado', 'si', '2023-09-08 19:08:15', 'recepcion', 'normal', 'recepcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente`
--

CREATE TABLE `Paciente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `DNI` varchar(11) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `peso` varchar(3) NOT NULL,
  `obra_social` varchar(10) NOT NULL,
  `medicacion` varchar(10) NOT NULL,
  `sintomas` varchar(100) NOT NULL,
  `genero` varchar(110) NOT NULL,
  `tipo_llamada` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `enfermero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Paciente`
--

INSERT INTO `Paciente` (`id`, `nombre`, `apellido`, `DNI`, `edad`, `peso`, `obra_social`, `medicacion`, `sintomas`, `genero`, `tipo_llamada`, `area`, `enfermero`) VALUES
(29, 'rosales', 'sucio', '46225311', '18', '44', 'si', 'si', 'caca roja', 'femenino', 'urgente', 'Quirofano', 'Maria Paz'),
(30, 'queque', 'sucio', '46225311', '18', '44', 'si', 'si', 'caca roja', 'femenino', 'urgente', 'Quirofano', 'pedro alfonso'),
(31, 'culo', 'sucio', '46225311', '18', '44', 'si', 'si', 'caca roja', 'femenino', 'urgente', 'sala de espera', 'Maria Paz');

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
(8, 'ew', 'wewe', 'ewwe', '03/12/2023', 'psi', 'sa'),
(11, 'asd', 'awsw', '1231', '2023/04/04', 'pasillo', 'comun'),
(21, 'rosa', 'gonzales', '323221', '21/05/20023', 'normal', 'recepcion'),
(22, 'rosa', 'gonzales', '323221', '21/05/20023', 'normal', 'recepcion'),
(23, 'rosa', 'gonzales', '323221', '21/05/20023', 'normal', 'recepcion'),
(24, 'rosa', 'gonzales', '323221', '21/05/20023', 'normal', 'recepcion'),
(25, 'rosa', 'gonzales', '323221', '21/05/20023', 'normal', 'recepcion'),
(26, 'rosa', 'gonzales', '323221', '21/05/20023', 'normal', 'recepcion'),
(27, 'carlos', 'gonzales', '323221', '14/09/2023', 'emergencia ', 'cirugia');

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
(12, 'uhlali', '1234567'),
(13, 'ce', 'ce46455670'),
(14, '123', '123ce'),
(15, '123', '123ce'),
(16, '123', '123ce'),
(17, '123', '123ce'),
(18, '123', '123ce'),
(19, '123', '123ce'),
(20, '1232', 'e');

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
  ADD PRIMARY KEY (`id_llamada`);

--
-- Indices de la tabla `Paciente`
--
ALTER TABLE `Paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secretaria`);

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
  MODIFY `id_enfermero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  MODIFY `id_llamada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Paciente`
--
ALTER TABLE `Paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_secretaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
