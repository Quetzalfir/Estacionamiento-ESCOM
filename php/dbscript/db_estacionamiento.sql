-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2018 a las 16:27:40
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_estacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_automovil`
--

CREATE TABLE `tb_automovil` (
  `placas` varchar(12) NOT NULL,
  `IDConductor` varchar(45) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `compañia` varchar(45) DEFAULT NULL,
  `colorAutomovil` varchar(45) DEFAULT NULL,
  `tb_automovilcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cajon`
--

CREATE TABLE `tb_cajon` (
  `noCajon` int(11) NOT NULL,
  `tipoCajon` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conductor`
--

CREATE TABLE `tb_conductor` (
  `IDConductor` varchar(45) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidoPat` varchar(45) DEFAULT NULL,
  `apellidoMat` varchar(45) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `boletaRFC` varchar(45) DEFAULT NULL,
  `tipo` enum('Admin','Alumno','Profesor','Discapacitado','Vigilante','Otro') NOT NULL,
  `password` varchar(45) NOT NULL,
  `fechaRegistro` date DEFAULT NULL,
  `autorizado` tinyint(1) DEFAULT NULL,
  `noCajon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_conductor`
--

INSERT INTO `tb_conductor` (`IDConductor`, `nombre`, `apellidoPat`, `apellidoMat`, `telefono`, `correo`, `boletaRFC`, `tipo`, `password`, `fechaRegistro`, `autorizado`, `noCajon`) VALUES
('admin', 'Vladimir', 'Azpeitia', 'Hernández', '7721084968', 'vladimir@correo.com', '2017895120', 'Admin', 'admin', '2018-12-03', 1, NULL),
('vladimirah', 'Vladimir', 'Azpeitia', 'Hernandez', '5521054892', 'vladimir@hotmail.com', '2017350201', 'Alumno', 'D1ng0', '2018-12-03', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mapa`
--

CREATE TABLE `tb_mapa` (
  `IDAdmin` varchar(45) NOT NULL,
  `JSONModel` mediumblob,
  `imagenFondo` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_reporte`
--

CREATE TABLE `tb_reporte` (
  `noReporte` int(11) NOT NULL,
  `IDConductor` varchar(45) DEFAULT NULL,
  `fechaReporte` date DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `IDDenunciante` varchar(45) DEFAULT NULL,
  `imagen` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_automovil`
--
ALTER TABLE `tb_automovil`
  ADD PRIMARY KEY (`placas`),
  ADD KEY `fk_tb_reporte_tb_conductor1_idx` (`IDConductor`);

--
-- Indices de la tabla `tb_cajon`
--
ALTER TABLE `tb_cajon`
  ADD PRIMARY KEY (`noCajon`);

--
-- Indices de la tabla `tb_conductor`
--
ALTER TABLE `tb_conductor`
  ADD PRIMARY KEY (`IDConductor`),
  ADD KEY `fk_tb_conductor_tb_cajon_idx` (`noCajon`);

--
-- Indices de la tabla `tb_mapa`
--
ALTER TABLE `tb_mapa`
  ADD PRIMARY KEY (`IDAdmin`),
  ADD KEY `fk_tb_mapa_tb_conductor1_idx` (`IDAdmin`);

--
-- Indices de la tabla `tb_reporte`
--
ALTER TABLE `tb_reporte`
  ADD PRIMARY KEY (`noReporte`),
  ADD KEY `fk_tb_reporte_tb_conductor2_idx` (`IDConductor`),
  ADD KEY `fk_tb_reporte_tb_conductor3_idx` (`IDDenunciante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_reporte`
--
ALTER TABLE `tb_reporte`
  MODIFY `noReporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_automovil`
--
ALTER TABLE `tb_automovil`
  ADD CONSTRAINT `fk_tb_reporte_tb_conductor1` FOREIGN KEY (`IDConductor`) REFERENCES `tb_conductor` (`IDConductor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_conductor`
--
ALTER TABLE `tb_conductor`
  ADD CONSTRAINT `fk_tb_conductor_tb_cajon` FOREIGN KEY (`noCajon`) REFERENCES `tb_cajon` (`noCajon`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_mapa`
--
ALTER TABLE `tb_mapa`
  ADD CONSTRAINT `fk_tb_mapa_tb_conductor1` FOREIGN KEY (`IDAdmin`) REFERENCES `tb_conductor` (`IDConductor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_reporte`
--
ALTER TABLE `tb_reporte`
  ADD CONSTRAINT `fk_tb_reporte_tb_conductor2` FOREIGN KEY (`IDConductor`) REFERENCES `tb_conductor` (`IDConductor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_reporte_tb_conductor3` FOREIGN KEY (`IDDenunciante`) REFERENCES `tb_conductor` (`IDConductor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
