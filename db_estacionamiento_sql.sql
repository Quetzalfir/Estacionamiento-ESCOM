-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-12-2018 a las 08:02:27
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_estacionamiento.sql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_automovil`
--

DROP TABLE IF EXISTS `tb_automovil`;
CREATE TABLE IF NOT EXISTS `tb_automovil` (
  `placas` varchar(12) NOT NULL,
  `IDConductor` varchar(45) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `compañia` varchar(45) DEFAULT NULL,
  `colorAutomovil` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`placas`),
  KEY `fk_tb_reporte_tb_conductor1_idx` (`IDConductor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_automovil`
--

INSERT INTO `tb_automovil` (`placas`, `IDConductor`, `tipo`, `modelo`, `compañia`, `colorAutomovil`) VALUES
('234-FTH', 'Santidad', 'coche', 'i10', 'Hyundai', 'negro'),
('345-JUT', 'anajulom', 'coche', 'Beattle', 'Volkswagen', 'amarillo'),
('456-GTH', 'jcsm', 'coche', 'Forte', 'Kia', 'Azul'),
('496-SIA', 'Dag_45', 'coche', 'Tsuru', 'Nissan', 'Gris'),
('567-JTC', 'azr_67', 'coche', 'Río Sedán', 'Kia', 'negro'),
('616-SRT', 'dianahua', 'coche', 'Sentra', 'Nissan', 'Plata'),
('782-KEC', 'bonafont65', 'coche', 'a4', 'Audi', 'rojo'),
('897-TGH', 'carfghy', 'coche', 'Versa', 'Nissan', 'Azul'),
('A54-BJT', 'baldillo', 'coche', 'Figo', 'Ford', 'Arena'),
('ABC-123', 'admin', 'camioneta', 'Avanza', 'Toyota', 'Blanco'),
('AFG-371', 'yakio_midna', 'camioneta', 'ram', 'Dodge', 'gris'),
('DAH-041', 'macomo11', 'coche', 'Fiesta', 'Ford', 'Gris'),
('DFB-678', 'JosAln', 'coche', 'Focus', 'Ford', 'Azul'),
('ERF-184', 'xiqui_45', 'moto', 'RT 250', 'Italika', 'negro'),
('FGB-693', 'jolu23', 'coche', 'Jetta', 'Volkswagen', 'rojo'),
('GTH-542', 'vladimirah', 'camioneta', 'CRV', 'Honda', 'Negro'),
('MGE-723', 'migu_hiesq', 'camioneta', 'X-Trial', 'Nissan', 'Plata'),
('RGT-678', 'omyaperi', 'camioneta', 'Tiguan', 'Volkswagen', 'Blanco'),
('V89-G56', 'alesdfg', 'coche', 'Spark', 'Chevrolet', 'Verde'),
('VSC-089', 'xavisotu', 'moto', 'CB190R', 'Toyota', 'Negra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cajon`
--

DROP TABLE IF EXISTS `tb_cajon`;
CREATE TABLE IF NOT EXISTS `tb_cajon` (
  `noCajon` int(11) NOT NULL,
  `tipoCajon` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`noCajon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_cajon`
--

INSERT INTO `tb_cajon` (`noCajon`, `tipoCajon`, `estado`) VALUES
(1, 'Discapacitado', NULL),
(2, 'Discapacitado', NULL),
(3, 'Discapacitado', NULL),
(4, 'Discapacitado', NULL),
(5, 'Discapacitado', NULL),
(6, 'Normal', NULL),
(7, 'Normal', NULL),
(8, 'Normal', NULL),
(9, 'Normal', NULL),
(10, 'Normal', NULL),
(11, 'Normal', NULL),
(12, 'Normal', NULL),
(13, 'Normal', NULL),
(14, 'Normal', NULL),
(15, 'Normal', NULL),
(16, 'Normal', NULL),
(17, 'Normal', NULL),
(18, 'Normal', NULL),
(19, 'Moto', NULL),
(20, 'Moto', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_conductor`
--

DROP TABLE IF EXISTS `tb_conductor`;
CREATE TABLE IF NOT EXISTS `tb_conductor` (
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
  `noCajon` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDConductor`),
  KEY `fk_tb_conductor_tb_cajon_idx` (`noCajon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_conductor`
--

INSERT INTO `tb_conductor` (`IDConductor`, `nombre`, `apellidoPat`, `apellidoMat`, `telefono`, `correo`, `boletaRFC`, `tipo`, `password`, `fechaRegistro`, `autorizado`, `noCajon`) VALUES
('admin', 'Vladimir', 'Azpeitia', 'Hernández', '7721084968', 'vladimir@correo.com', '2017895120', 'Admin', 'admin', '2018-12-03', 1, NULL),
('alesdfg', 'Alejandro', 'Soto', 'Ramirez', '5567894323', 'sotoram@hotmail.com', '2016780456', 'Alumno', 'Alsoram', '2018-12-03', 1, 13),
('anajulom', 'Ana Julia', 'Ortega', 'Martinez', '5546789324', 'Anajuormar@gmail.com', '2016630456', 'Alumno', 'anaormar', '2018-12-03', 1, 17),
('azr_67', 'Aaron', 'Zepeda', 'Ramirez', '5567788909', 'aazepramfre@gmail.com', 'ZERA950702HKH9', 'Profesor', 'zepramar3456', '2018-12-04', 1, 8),
('baldillo', 'Alexis', 'Badillo', 'Mendez', '5534564638', 'alexbad@hotmail.com', '201309856', 'Alumno', 'alexbadg76', '2018-12-04', 1, 16),
('bonafont65', 'Michelle', 'Benanvent', 'Diaz', '5546931270', 'Michbenroj@hotmail.com', '2013020567', 'Alumno', 'asdfe456', '2018-12-04', NULL, 15),
('carfghy', 'Carla', 'Fernandez', 'Gonzalez', '5512345678', 'carlafer@gmail.com', '23456789012', 'Discapacitado', 'carfergon23', '2018-12-04', NULL, 1),
('Dag_45', 'Antonio', 'Hurtado', 'Dagda', '5520487304', 'dagaantonio@gmail.com', '2014630230', 'Discapacitado', 'dag45uhy', '2018-12-04', 1, 2),
('dianahua', 'Diana', 'Huerta', 'Alvarez', '5543739149', 'dianahuer35@outlook.com', '2014630230', 'Alumno', 'dianita22', '2018-12-03', 1, 14),
('jcsm', 'Juan', 'Sánchez', 'Nuño', '5564789023', 'jusanuño@gmail.com', 'SANJ871002HMCRLN09', 'Profesor', 'jusanukl', '2018-12-04', NULL, 7),
('jolu23', 'Jose', 'Alfredo', 'Fruch', '5546776433', 'joselafredo@gmail.com', 'ALFJ561204HMJK', 'Otro', 'fuchs54', '2018-12-04', NULL, 18),
('JosAln', 'José Alan', 'Arriaga', 'García', '5528966480', 'alanarriagarcia@hotmail.com', '2012630256', 'Alumno', 'alanarrgarcuh', '2018-12-04', 1, 9),
('macomo11', 'Miguel Ángel ', 'Contreras', 'Moreno', '5573023991', 'micconm@hotmail.com', 'COMM920701HDF78', 'Vigilante', 'macm', '2018-12-04', NULL, 6),
('migu_hiesq', 'Miguel Alejandro', 'Hinojosa', 'Esquivel', '5551801195', 'hinojosa_mig@hotmail.com', '2015630456', 'Alumno', 'Mighij789', '2018-12-04', NULL, 12),
('omyaperi', 'Omar', 'Perez', 'Rico', '5525715918', 'Omarpay@hotmail.com', '2016400788', 'Discapacitado', 'paypay557', '2018-12-04', 1, 3),
('Santidad', 'Santiago', 'Hernandez', 'Robles', '5546738291', 'sanherrob@gmail.com', '201509786', 'Alumno', 'sanher23', '2018-12-03', 1, 11),
('vladimirah', 'Vladimir', 'Azpeitia', 'Hernandez', '5521054892', 'vladimir@hotmail.com', '2017350201', 'Alumno', 'D1ng0', '2018-12-03', 1, 10),
('xavisotu', 'Xavi', 'Sotu', 'Ramirez', '5532115548', 'xaviersotuyo@hotmail.com', 'SORX890421HDF56', 'Vigilante', 'xavysot56', '2018-12-04', NULL, 20),
('xiqui_45', 'Luis Francisco', 'Sosa', 'Xiqui', '5511420956', 'xiqui_franlu@gmail.com', '2014090580', 'Discapacitado', 'lufrso12', '2018-12-04', 1, 19),
('yakio_midna', 'Jessica', 'Robles', 'Calderon', '5518364758', 'yakio_midna@gmail.com', '2010630789', 'Discapacitado', 'yakiohusb', '2018-12-04', NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mapa`
--

DROP TABLE IF EXISTS `tb_mapa`;
CREATE TABLE IF NOT EXISTS `tb_mapa` (
  `IDAdmin` varchar(45) NOT NULL,
  `JSONModel` mediumblob,
  `imagenFondo` mediumblob,
  PRIMARY KEY (`IDAdmin`),
  KEY `fk_tb_mapa_tb_conductor1_idx` (`IDAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_reporte`
--

DROP TABLE IF EXISTS `tb_reporte`;
CREATE TABLE IF NOT EXISTS `tb_reporte` (
  `noReporte` int(11) NOT NULL AUTO_INCREMENT,
  `IDConductor` varchar(45) DEFAULT NULL,
  `fechaReporte` date DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `IDDenunciante` varchar(45) DEFAULT NULL,
  `imagen` mediumblob,
  PRIMARY KEY (`noReporte`),
  KEY `fk_tb_reporte_tb_conductor2_idx` (`IDConductor`),
  KEY `fk_tb_reporte_tb_conductor3_idx` (`IDDenunciante`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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
