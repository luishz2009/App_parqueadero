-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2021 a las 02:50:13
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdparqueadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `identrada` int(11) NOT NULL,
  `placa` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha1` timestamp NOT NULL DEFAULT current_timestamp(),
  `idtipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`identrada`, `placa`, `fecha1`, `idtipo`) VALUES
(1, 'TPS038', '0000-00-00 00:00:00', 1),
(2, 'GVV345', '0000-00-00 00:00:00', 2),
(3, 'CBO984', '2021-06-18 04:49:24', 3),
(4, 'HKB782', '2021-06-18 04:49:24', 3),
(5, 'TKG021', '0000-00-00 00:00:00', 1),
(6, 'HHH021', '2021-06-22 23:53:04', 3),
(12, 'QWE022', '0000-00-00 00:00:00', 1),
(13, 'PLU678', '0000-00-00 00:00:00', 2),
(14, 'EFG234', '2021-06-23 00:11:03', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficial`
--

CREATE TABLE `oficial` (
  `idoficial` int(11) NOT NULL,
  `placa` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `oficial`
--

INSERT INTO `oficial` (`idoficial`, `placa`) VALUES
(1, 'TPS038'),
(2, 'TKG021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residente`
--

CREATE TABLE `residente` (
  `idresidente` int(11) NOT NULL,
  `placa` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `residente`
--

INSERT INTO `residente` (`idresidente`, `placa`) VALUES
(1, 'PLU678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `idsalida` int(11) NOT NULL,
  `placa` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha2` timestamp NOT NULL DEFAULT current_timestamp(),
  `idtipo` int(11) NOT NULL,
  `diferencia` float NOT NULL DEFAULT 0,
  `valor_pago` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`idsalida`, `placa`, `fecha2`, `idtipo`, `diferencia`, `valor_pago`) VALUES
(1, 'TPS038', '0000-00-00 00:00:00', 1, 0, '0.00'),
(4, 'TPS038', '0000-00-00 00:00:00', 1, 6893.58, '0.00'),
(5, 'GVV345', '0000-00-00 00:00:00', 2, 6896.8, '345.00'),
(6, 'CBO984', '2021-06-22 23:49:26', 3, 6900.03, '6900030.00'),
(7, 'QWE022', '0000-00-00 00:00:00', 1, 4.88, '0.00'),
(9, 'PLU678', '0000-00-00 00:00:00', 2, 3.83, '0.00'),
(10, 'EFG234', '2021-06-23 00:16:30', 3, 5.45, '5450.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovehiculo`
--

CREATE TABLE `tipovehiculo` (
  `idtipo` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipovehiculo`
--

INSERT INTO `tipovehiculo` (`idtipo`, `tipo`) VALUES
(1, 'OFICIAL'),
(2, 'RESIDENTE'),
(3, 'NO RESIDENTE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`identrada`),
  ADD KEY `idtipo` (`idtipo`);

--
-- Indices de la tabla `oficial`
--
ALTER TABLE `oficial`
  ADD PRIMARY KEY (`idoficial`);

--
-- Indices de la tabla `residente`
--
ALTER TABLE `residente`
  ADD PRIMARY KEY (`idresidente`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`idsalida`),
  ADD KEY `idtipo` (`idtipo`);

--
-- Indices de la tabla `tipovehiculo`
--
ALTER TABLE `tipovehiculo`
  ADD PRIMARY KEY (`idtipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `identrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `oficial`
--
ALTER TABLE `oficial`
  MODIFY `idoficial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `residente`
--
ALTER TABLE `residente`
  MODIFY `idresidente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `idsalida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipovehiculo`
--
ALTER TABLE `tipovehiculo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `entradas_ibfk_1` FOREIGN KEY (`idtipo`) REFERENCES `tipovehiculo` (`idtipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `salidas_ibfk_1` FOREIGN KEY (`idtipo`) REFERENCES `tipovehiculo` (`idtipo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
