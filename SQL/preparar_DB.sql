-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-04-2014 a las 16:50:43
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `base_datos_dss`
--
CREATE DATABASE IF NOT EXISTS `base_datos_dss` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `base_datos_dss`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Albaran`
--

DROP TABLE IF EXISTS `Albaran`;
CREATE TABLE IF NOT EXISTS `Albaran` (
  `idAlbaran` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Pedido_Identificador` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idAlbaran`),
  KEY `Albaran_FKIndex3` (`Pedido_Identificador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Albaran`
--

INSERT INTO `Albaran` (`idAlbaran`, `Pedido_Identificador`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Calendario_Eventos`
--

DROP TABLE IF EXISTS `Calendario_Eventos`;
CREATE TABLE IF NOT EXISTS `Calendario_Eventos` (
  `Fecha` date NOT NULL,
  `Evento` varchar(20) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Fecha`,`Evento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Calendario_Eventos`
--

INSERT INTO `Calendario_Eventos` (`Fecha`, `Evento`, `Descripcion`) VALUES
('2013-04-27', 'Charla 10', 'Charla sobre el servicio 23'),
('2013-05-25', 'Charla 14', 'Charla presentando el servicio 34 al cliente'),
('2013-07-24', 'Evento 04', 'Incorporacion de nuevo hardware'),
('2013-08-16', 'Reunion 19', 'Reunion equipo de desarrollo'),
('2013-09-04', 'Evento 20', 'Fin del desarrollo del servicio 27'),
('2013-10-23', 'Reunion 31', 'Reunion con el cliente 56'),
('2013-12-03', 'Charla 25', 'Charla de marketing'),
('2013-12-26', 'Reunion 35', 'Reunion equipo de marketing'),
('2014-02-22', 'Evento 20', 'Fumigacion'),
('2014-04-05', 'Evento 32', 'Evento de presentacion'),
('2014-04-06', 'Reunion 33', 'Reunion equipo de marketing'),
('2014-05-20', 'Charla 30', 'Charla del director a la plantilla'),
('2014-08-30', 'Evento 53', 'Backup de BD'),
('2014-11-11', 'Evento 64', 'Nuevo software de diseño'),
('2014-11-27', 'Reunion 43', 'Reunion equipo de desarrollo'),
('2014-12-25', 'Evento 70', 'Navidad'),
('2014-12-31', 'Evento 71', 'Fiesta de fin de año'),
('2015-02-17', 'Charla 99', NULL),
('2015-04-19', 'Reunion 99', NULL),
('2015-04-30', 'Evento 99', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

DROP TABLE IF EXISTS `Cliente`;
CREATE TABLE IF NOT EXISTS `Cliente` (
  `NIF` varchar(9) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` varchar(9) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`NIF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`NIF`, `Nombre`, `Apellidos`, `Direccion`, `Telefono`, `Email`) VALUES
('12079623T', 'Alva', 'Stannard', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('12610196D', 'Florian', 'Baltec', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('13520389T', 'Fabian', 'Davis', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('14104365Y', 'Luca', 'Bergdahl', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('17723414M', 'Taylor', 'Petterson', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('18651716G', 'Janet', 'Waddell', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('21909395D', 'Anne', 'Heyn', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('23447981X', 'Cian', 'Lejarette', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('41503082L', 'Madison', 'Zimmerman', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('42150068S', 'Scottie', 'Turk', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('45605932Z', 'Emilio', 'Otto', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('45806292K', 'Liza', 'Grote', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('52317225E', 'Kay', 'Rauch', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('53246157F', 'Klara', 'Emerson', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('59726909A', 'Cathy', NULL, 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('69648885D', 'Babette', 'Clark', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('77079534W', 'Philippa', 'Crocetti', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('77296325H', 'Jose Vicente', NULL, 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('82436439T', 'Marieke', 'Naff', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('83991951E', 'Dirk', 'Ecchevarri', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('92689923S', 'Geoff', 'Voigt', 'calle falsa 123', '678123456', 'falso@asdf.qwerty');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Factura`
--

DROP TABLE IF EXISTS `Factura`;
CREATE TABLE IF NOT EXISTS `Factura` (
  `idFactura` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Pedido_Identificador` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idFactura`),
  KEY `Factura_FKIndex1` (`Pedido_Identificador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Factura`
--

INSERT INTO `Factura` (`idFactura`, `Pedido_Identificador`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Gasto`
--

DROP TABLE IF EXISTS `Gasto`;
CREATE TABLE IF NOT EXISTS `Gasto` (
  `Identificador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NombreOperacion` varchar(20) NOT NULL,
  `Coste` double NOT NULL,
  PRIMARY KEY (`Identificador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `Gasto`
--

INSERT INTO `Gasto` (`Identificador`, `NombreOperacion`, `Coste`) VALUES
(1, 'Operacion 1', 99.33),
(2, 'Operacion 2', 115.68),
(3, 'Operacion 3', 14.35),
(4, 'Operacion 4', 24.93),
(5, 'Operacion 5', 4.32),
(6, 'Operacion 6', 919.15),
(7, 'Operacion 7', 5.46),
(8, 'Operacion 8', 7.7),
(9, 'Operacion 9', 1.48),
(10, 'Operacion 10', 195.01),
(11, 'Operacion 11', 5.11),
(12, 'Operacion 12', 896.74),
(13, 'Operacion 13', 284.06),
(14, 'Operacion 14', 7.02),
(15, 'Operacion 15', 39.11),
(16, 'Operacion 16', 4.96),
(17, 'Operacion 17', 10.8),
(18, 'Operacion 18', 3.56),
(19, 'Operacion 19', 2.78),
(20, 'Operacion 20', 70.42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Informes_albaran`
--

DROP TABLE IF EXISTS `Informes_albaran`;
CREATE TABLE IF NOT EXISTS `Informes_albaran` (
  `Albaran_idAlbaran` int(10) unsigned NOT NULL,
  `RutaFichero` varchar(255) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`Albaran_idAlbaran`),
  KEY `Informes_albaran_FKIndex1` (`Albaran_idAlbaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Informes_albaran`
--

INSERT INTO `Informes_albaran` (`Albaran_idAlbaran`, `RutaFichero`, `Descripcion`, `Fecha`, `Tipo`) VALUES
(1, 'C:\\Documentos\\Albaran\\Operacion 1.pdf', 'Albaran del pedido 1', '2013-04-27', 'PDF'),
(2, 'C:\\Documentos\\Albaran\\Operacion 2.pdf', 'Albaran del pedido 2', '2013-04-27', 'PDF'),
(3, 'C:\\Documentos\\Albaran\\Operacion 3.pdf', 'Albaran del pedido 3', '2013-04-27', 'PDF'),
(4, 'C:\\Documentos\\Albaran\\Operacion 4.pdf', 'Albaran del pedido 4', '2013-04-27', 'PDF'),
(5, 'C:\\Documentos\\Albaran\\Operacion 5.pdf', 'Albaran del pedido 5', '2013-04-27', 'PDF'),
(6, 'C:\\Documentos\\Albaran\\Operacion 6.pdf', 'Albaran del pedido 6', '2013-04-27', 'PDF'),
(7, 'C:\\Documentos\\Albaran\\Operacion 7.pdf', 'Albaran del pedido 7', '2013-04-27', 'PDF'),
(8, 'C:\\Documentos\\Albaran\\Operacion 8.pdf', 'Albaran del pedido 8', '2013-04-27', 'PDF'),
(9, 'C:\\Documentos\\Albaran\\Operacion 9.pdf', 'Albaran del pedido 9', '2013-04-27', 'PDF'),
(10, 'C:\\DocumentosAlbaran\\Operacion 10.pdf', 'Albaran del pedido 10', '2014-08-30', 'PDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Informes_factura`
--

DROP TABLE IF EXISTS `Informes_factura`;
CREATE TABLE IF NOT EXISTS `Informes_factura` (
  `Factura_idFactura` int(10) unsigned NOT NULL,
  `RutaFichero` varchar(255) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`Factura_idFactura`),
  KEY `Informes_factura_FKIndex1` (`Factura_idFactura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Informes_factura`
--

INSERT INTO `Informes_factura` (`Factura_idFactura`, `RutaFichero`, `Descripcion`, `Fecha`, `Tipo`) VALUES
(1, 'C:\\Documentos\\Factura\\Operacion 1.pdf', 'Factura del pedido 1', '2013-04-27', 'PDF'),
(2, 'C:\\Documentos\\Factura\\Operacion 2.pdf', 'Factura del pedido 2', '2013-04-27', 'PDF'),
(3, 'C:\\Documentos\\Factura\\Operacion 3.pdf', 'Factura del pedido 3', '2013-04-27', 'PDF'),
(4, 'C:\\Documentos\\Factura\\Operacion 4.pdf', 'Factura del pedido 4', '2013-04-27', 'PDF'),
(5, 'C:\\Documentos\\Factura\\Operacion 5.pdf', 'Factura del pedido 5', '2013-04-27', 'PDF'),
(6, 'C:\\Documentos\\Factura\\Operacion 6.pdf', 'Factura del pedido 6', '2013-04-27', 'PDF'),
(7, 'C:\\Documentos\\Factura\\Operacion 7.pdf', 'Factura del pedido 7', '2013-04-27', 'PDF'),
(8, 'C:\\Documentos\\Factura\\Operacion 8.pdf', 'Factura del pedido 8', '2013-04-27', 'PDF'),
(9, 'C:\\Documentos\\Factura\\Operacion 9.pdf', 'Factura del pedido 9', '2013-04-27', 'PDF'),
(10, 'C:\\DocumentosFactura\\Operacion 10.pdf', 'Factura del pedido 10', '2014-08-30', 'PDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Informes_gasto`
--

DROP TABLE IF EXISTS `Informes_gasto`;
CREATE TABLE IF NOT EXISTS `Informes_gasto` (
  `Gasto_Identificador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `RutaFichero` varchar(255) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`Gasto_Identificador`),
  KEY `Informes_FKIndex1` (`Gasto_Identificador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `Informes_gasto`
--

INSERT INTO `Informes_gasto` (`Gasto_Identificador`, `RutaFichero`, `Descripcion`, `Fecha`, `Tipo`) VALUES
(1, 'C:\\Documentos\\Gasto\\Operacion 1.pdf', 'Gasto del servicio 1', '2013-04-27', 'PDF'),
(2, 'C:\\Documentos\\Gasto\\Operacion 2.pdf', 'Gasto del servicio 2', '2013-04-27', 'PDF'),
(3, 'C:\\Documentos\\Gasto\\Operacion 3.pdf', 'Gasto del servicio 3', '2013-04-27', 'PDF'),
(4, 'C:\\Documentos\\Gasto\\Operacion 4.pdf', 'Gasto del servicio 4', '2013-04-27', 'PDF'),
(5, 'C:\\Documentos\\Gasto\\Operacion 5.pdf', 'Gasto del servicio 5', '2013-04-27', 'PDF'),
(6, 'C:\\Documentos\\Gasto\\Operacion 6.pdf', 'Gasto del servicio 6', '2013-04-27', 'PDF'),
(7, 'C:\\Documentos\\Gasto\\Operacion 7.pdf', 'Gasto del servicio 7', '2013-04-27', 'PDF'),
(8, 'C:\\Documentos\\Gasto\\Operacion 8.pdf', 'Gasto del servicio 8', '2013-04-27', 'PDF'),
(9, 'C:\\Documentos\\Gasto\\Operacion 9.pdf', 'Gasto del servicio 9', '2013-04-27', 'PDF'),
(10, 'C:\\Documentos\\Gasto\\Operacion 10.pdf', 'Gasto del servicio 10', '2014-08-30', 'PDF'),
(11, 'C:\\Documentos\\Gasto\\Operacion 11.pdf', 'Gasto del servicio 11', '2014-08-30', 'PDF'),
(12, 'C:\\Documentos\\Gasto\\Operacion 12.pdf', 'Gasto del servicio 12', '2014-08-30', 'PDF'),
(13, 'C:\\Documentos\\Gasto\\Operacion 13.pdf', 'Gasto del servicio 13', '2014-08-30', 'PDF'),
(14, 'C:\\Documentos\\Gasto\\Operacion 14.pdf', 'Gasto del servicio 14', '2014-08-30', 'PDF'),
(15, 'C:\\Documentos\\Gasto\\Operacion 15.pdf', 'Gasto del servicio 15', '2014-08-30', 'PDF'),
(16, 'C:\\Documentos\\Gasto\\Operacion 16.pdf', 'Gasto del servicio 16', '2014-08-30', 'PDF'),
(17, 'C:\\Documentos\\Gasto\\Operacion 17.pdf', 'Gasto del servicio 17', '2014-08-30', 'PDF'),
(18, 'C:\\Documentos\\Gasto\\Operacion 18.pdf', 'Gasto del servicio 18', '2014-08-30', 'PDF'),
(19, 'C:\\Documentos\\Gasto\\Operacion 19.pdf', 'Gasto del servicio 19', '2014-08-30', 'PDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Informes_ingreso`
--

DROP TABLE IF EXISTS `Informes_ingreso`;
CREATE TABLE IF NOT EXISTS `Informes_ingreso` (
  `Ingreso_Identificador` int(10) unsigned NOT NULL,
  `RutaFichero` varchar(255) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`Ingreso_Identificador`),
  KEY `Informes_ingreso_FKIndex1` (`Ingreso_Identificador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Informes_ingreso`
--

INSERT INTO `Informes_ingreso` (`Ingreso_Identificador`, `RutaFichero`, `Descripcion`, `Fecha`, `Tipo`) VALUES
(1, 'C:\\Documentos\\Ingreso\\Operacion 1.pdf', 'Ingreso del servicio 1', '2013-04-27', 'PDF'),
(2, 'C:\\Documentos\\Ingreso\\Operacion 2.pdf', 'Ingreso del servicio 2', '2013-04-27', 'PDF'),
(3, 'C:\\Documentos\\Ingreso\\Operacion 3.pdf', 'Ingreso del servicio 3', '2013-04-27', 'PDF'),
(4, 'C:\\Documentos\\Ingreso\\Operacion 4.pdf', 'Ingreso del servicio 4', '2013-04-27', 'PDF'),
(5, 'C:\\Documentos\\Ingreso\\Operacion 5.pdf', 'Ingreso del servicio 5', '2013-04-27', 'PDF'),
(6, 'C:\\Documentos\\Ingreso\\Operacion 6.pdf', 'Ingreso del servicio 6', '2013-04-27', 'PDF'),
(7, 'C:\\Documentos\\Ingreso\\Operacion 7.pdf', 'Ingreso del servicio 7', '2013-04-27', 'PDF'),
(8, 'C:\\Documentos\\Ingreso\\Operacion 8.pdf', 'Ingreso del servicio 8', '2013-04-27', 'PDF'),
(9, 'C:\\Documentos\\Ingreso\\Operacion 9.pdf', 'Ingreso del servicio 9', '2013-04-27', 'PDF'),
(10, 'C:\\Documentos\\Ingreso\\Operacion 10.pdf', 'Ingreso del servicio 10', '2014-08-30', 'PDF'),
(11, 'C:\\Documentos\\Ingreso\\Operacion 11.pdf', 'Ingreso del servicio 11', '2014-08-30', 'PDF'),
(12, 'C:\\Documentos\\Ingreso\\Operacion 12.pdf', 'Ingreso del servicio 12', '2014-08-30', 'PDF'),
(13, 'C:\\Documentos\\Ingreso\\Operacion 13.pdf', 'Ingreso del servicio 13', '2014-08-30', 'PDF'),
(14, 'C:\\Documentos\\Ingreso\\Operacion 14.pdf', 'Ingreso del servicio 14', '2014-08-30', 'PDF'),
(15, 'C:\\Documentos\\Ingreso\\Operacion 15.pdf', 'Ingreso del servicio 15', '2014-08-30', 'PDF'),
(16, 'C:\\Documentos\\Ingreso\\Operacion 16.pdf', 'Ingreso del servicio 16', '2014-08-30', 'PDF'),
(17, 'C:\\Documentos\\Ingreso\\Operacion 17.pdf', 'Ingreso del servicio 17', '2014-08-30', 'PDF'),
(18, 'C:\\Documentos\\Ingreso\\Operacion 18.pdf', 'Ingreso del servicio 18', '2014-08-30', 'PDF'),
(19, 'C:\\Documentos\\Ingreso\\Operacion 19.pdf', 'Ingreso del servicio 19', '2014-08-30', 'PDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Informes_pedido`
--

DROP TABLE IF EXISTS `Informes_pedido`;
CREATE TABLE IF NOT EXISTS `Informes_pedido` (
  `Pedido_Identificador` int(10) unsigned NOT NULL,
  `RutaFichero` varchar(255) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`Pedido_Identificador`),
  KEY `Informes_pedido_FKIndex1` (`Pedido_Identificador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Informes_pedido`
--

INSERT INTO `Informes_pedido` (`Pedido_Identificador`, `RutaFichero`, `Descripcion`, `Fecha`, `Tipo`) VALUES
(1, 'C:\\Documentos\\Pedido\\Operacion 1.pdf', 'Informe del pedido 1', '2013-04-27', 'PDF'),
(2, 'C:\\Documentos\\Pedido\\Operacion 2.pdf', 'Informe del pedido 2', '2013-04-27', 'PDF'),
(3, 'C:\\Documentos\\Pedido\\Operacion 3.pdf', 'Informe del pedido 3', '2013-04-27', 'PDF'),
(4, 'C:\\Documentos\\Pedido\\Operacion 4.pdf', 'Informe del pedido 4', '2013-04-27', 'PDF'),
(5, 'C:\\Documentos\\Pedido\\Operacion 5.pdf', 'Informe del pedido 5', '2013-04-27', 'PDF'),
(6, 'C:\\Documentos\\Pedido\\Operacion 6.pdf', 'Informe del pedido 6', '2013-04-27', 'PDF'),
(7, 'C:\\Documentos\\Pedido\\Operacion 7.pdf', 'Informe del pedido 7', '2013-04-27', 'PDF'),
(8, 'C:\\Documentos\\Pedido\\Operacion 8.pdf', 'Informe del pedido 8', '2013-04-27', 'PDF'),
(9, 'C:\\Documentos\\Pedido\\Operacion 9.pdf', 'Informe del pedido 9', '2013-04-27', 'PDF'),
(10, 'C:\\Documentos\\Pedido\\Operacion 10.pdf', 'Informe del pedido 10', '2014-08-30', 'PDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Informes_presupuesto`
--

DROP TABLE IF EXISTS `Informes_presupuesto`;
CREATE TABLE IF NOT EXISTS `Informes_presupuesto` (
  `Presupuesto_idPresupuesto` int(10) unsigned NOT NULL,
  `RutaFichero` varchar(255) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`Presupuesto_idPresupuesto`),
  KEY `Informes_presupuesto_FKIndex1` (`Presupuesto_idPresupuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Informes_presupuesto`
--

INSERT INTO `Informes_presupuesto` (`Presupuesto_idPresupuesto`, `RutaFichero`, `Descripcion`, `Fecha`, `Tipo`) VALUES
(1, 'C:\\Documentos\\Presupuestos\\Operacion 1.pdf', 'Presupuesto del pedido 1', '2013-04-27', 'PDF'),
(2, 'C:\\Documentos\\Presupuestos\\Operacion 2.pdf', 'Presupuesto del pedido 2', '2013-04-27', 'PDF'),
(3, 'C:\\Documentos\\Presupuestos\\Operacion 3.pdf', 'Presupuesto del pedido 3', '2013-04-27', 'PDF'),
(4, 'C:\\Documentos\\Presupuestos\\Operacion 4.pdf', 'Presupuesto del pedido 4', '2013-04-27', 'PDF'),
(5, 'C:\\Documentos\\Presupuestos\\Operacion 5.pdf', 'Presupuesto del pedido 5', '2013-04-27', 'PDF'),
(6, 'C:\\Documentos\\Presupuestos\\Operacion 6.pdf', 'Presupuesto del pedido 6', '2013-04-27', 'PDF'),
(7, 'C:\\Documentos\\Presupuestos\\Operacion 7.pdf', 'Presupuesto del pedido 7', '2013-04-27', 'PDF'),
(8, 'C:\\Documentos\\Presupuestos\\Operacion 8.pdf', 'Presupuesto del pedido 8', '2013-04-27', 'PDF'),
(9, 'C:\\Documentos\\Presupuestos\\Operacion 9.pdf', 'Presupuesto del pedido 9', '2013-04-27', 'PDF'),
(10, 'C:\\DocumentosPresupuestos\\Operacion 10.pdf', 'Presupuesto del pedido 10', '2014-08-30', 'PDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ingreso`
--

DROP TABLE IF EXISTS `Ingreso`;
CREATE TABLE IF NOT EXISTS `Ingreso` (
  `Identificador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NombreOperacion` varchar(20) NOT NULL,
  `Coste` double NOT NULL,
  PRIMARY KEY (`Identificador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `Ingreso`
--

INSERT INTO `Ingreso` (`Identificador`, `NombreOperacion`, `Coste`) VALUES
(1, 'Operacion 1', 7.99),
(2, 'Operacion 2', 139.99),
(3, 'Operacion 3', 2.55),
(4, 'Operacion 4', 6.79),
(5, 'Operacion 5', 406.96),
(6, 'Operacion 6', 76.22),
(7, 'Operacion 7', 200.47),
(8, 'Operacion 8', 7.21),
(9, 'Operacion 9', 608.64),
(10, 'Operacion 10', 673.51),
(11, 'Operacion 11', 4.37),
(12, 'Operacion 12', 35.1),
(13, 'Operacion 13', 2.14),
(14, 'Operacion 14', 59.96),
(15, 'Operacion 15', 311.73),
(16, 'Operacion 16', 47.09),
(17, 'Operacion 17', 302.68),
(18, 'Operacion 18', 11.92),
(19, 'Operacion 19', 75.19),
(20, 'Operacion 20', 155.74);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `IVA`
--

DROP TABLE IF EXISTS `IVA`;
CREATE TABLE IF NOT EXISTS `IVA` (
  `id` int(10) unsigned NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `IVA`
--

INSERT INTO `IVA` (`id`, `valor`) VALUES
(1, 21),
(2, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LineaServicio`
--

DROP TABLE IF EXISTS `LineaServicio`;
CREATE TABLE IF NOT EXISTS `LineaServicio` (
  `idLineaServicio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Servicio_idServicio` int(10) unsigned NOT NULL,
  `Pedido_Identificador` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idLineaServicio`),
  KEY `LineaServicio_FKIndex1` (`Servicio_idServicio`),
  KEY `LineaServicio_FKIndex2` (`Pedido_Identificador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `LineaServicio`
--

INSERT INTO `LineaServicio` (`idLineaServicio`, `Servicio_idServicio`, `Pedido_Identificador`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 5, 2),
(4, 7, 3),
(5, 8, 3),
(6, 9, 3),
(7, 3, 4),
(8, 4, 4),
(9, 1, 5),
(10, 2, 5),
(11, 3, 5),
(12, 4, 5),
(13, 5, 5),
(14, 6, 5),
(15, 7, 5),
(16, 8, 5),
(17, 9, 5),
(18, 3, 6),
(19, 7, 7),
(20, 4, 8),
(21, 2, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

DROP TABLE IF EXISTS `Pedido`;
CREATE TABLE IF NOT EXISTS `Pedido` (
  `Identificador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Proveedor_NIF` varchar(9) NOT NULL,
  `Cliente_NIF` varchar(9) NOT NULL,
  PRIMARY KEY (`Identificador`),
  KEY `Pedido_FKIndex1` (`Cliente_NIF`),
  KEY `Pedido_FKIndex2` (`Proveedor_NIF`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Pedido`
--

INSERT INTO `Pedido` (`Identificador`, `Proveedor_NIF`, `Cliente_NIF`) VALUES
(1, '12138685K', '53246157F'),
(2, '03751210W', '53246157F'),
(3, '36208777S', '21909395D'),
(4, '11565398D', '77296325H'),
(5, '02476364T', '18651716G'),
(6, '47423415Z', '12079623T'),
(7, '41719341D', '69648885D'),
(8, '54686122B', '12610196D'),
(9, '12947533M', '23447981X'),
(10, '12138685K', '77079534W');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Presupuesto`
--

DROP TABLE IF EXISTS `Presupuesto`;
CREATE TABLE IF NOT EXISTS `Presupuesto` (
  `idPresupuesto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Pedido_Identificador` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idPresupuesto`),
  KEY `Presupuesto_FKIndex1` (`Pedido_Identificador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Presupuesto`
--

INSERT INTO `Presupuesto` (`idPresupuesto`, `Pedido_Identificador`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proveedor`
--

DROP TABLE IF EXISTS `Proveedor`;
CREATE TABLE IF NOT EXISTS `Proveedor` (
  `NIF` varchar(9) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` varchar(9) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`NIF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Proveedor`
--

INSERT INTO `Proveedor` (`NIF`, `Nombre`, `Apellidos`, `Direccion`, `Telefono`, `Email`) VALUES
('02476364T', 'Tim', 'Geoppo', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('03751210W', 'Gerrit', 'Storrs', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('05698341E', 'Bas', NULL, 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('11565398D', 'Thelma', 'Sharp', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('12138685K', 'Leo', 'Goodnight', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('12947533M', 'Karen', NULL, 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('27018442C', 'Jolanda', 'Mcgrew', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('34302047P', 'Frederik', 'Hardoon', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('36208777S', 'Catherine', 'Orcutt', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('41719341D', 'Maximilian', 'Buchholz', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('47423415Z', 'Leontien', NULL, 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('49704176A', 'Kaylee', 'Friedman', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('54686122B', 'Teun', 'Freeman', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('72578308Z', 'Siska', 'Hummel', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('74627472Q', 'Georgina', NULL, 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('74870235Z', 'Femke', 'DelRosso', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('77233496W', 'Mary', 'Bitmacs', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('81763970M', 'Raul', 'Conley', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('82334176H', 'Pip', 'Weaver', 'calle falsa 123', '678123456', 'falso@asdf.qwerty'),
('89053418V', 'Ross', NULL, 'calle falsa 123', '678123456', 'falso@asdf.qwerty');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reunion`
--

DROP TABLE IF EXISTS `Reunion`;
CREATE TABLE IF NOT EXISTS `Reunion` (
  `Usuario_NIF` varchar(9) NOT NULL,
  `Calendario_Eventos_Fecha` date NOT NULL,
  `Calendario_Eventos_Evento` varchar(20) NOT NULL,
  PRIMARY KEY (`Usuario_NIF`,`Calendario_Eventos_Fecha`,`Calendario_Eventos_Evento`),
  KEY `Usuario_has_Calendario_FKIndex1` (`Usuario_NIF`),
  KEY `Usuario_has_Calendario_FKIndex2` (`Calendario_Eventos_Fecha`,`Calendario_Eventos_Evento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Reunion`
--

INSERT INTO `Reunion` (`Usuario_NIF`, `Calendario_Eventos_Fecha`, `Calendario_Eventos_Evento`) VALUES
('08011026B', '2013-08-16', 'Reunion 19'),
('10963613L', '2013-08-16', 'Reunion 19'),
('12787163Z', '2013-12-03', 'Charla 25'),
('12787163Z', '2014-05-20', 'Charla 30'),
('19265708B', '2014-05-20', 'Charla 30'),
('20248210E', '2014-12-31', 'Evento 71'),
('20880871E', '2014-05-20', 'Charla 30'),
('31098062S', '2014-05-20', 'Charla 30'),
('35848183S', '2014-12-31', 'Evento 71'),
('36224842A', '2013-12-03', 'Charla 25'),
('37671633W', '2014-12-31', 'Evento 71'),
('45949884R', '2013-12-03', 'Charla 25'),
('85651511V', '2013-08-16', 'Reunion 19'),
('85651511V', '2013-12-03', 'Charla 25'),
('85964668Y', '2014-12-31', 'Evento 71'),
('90446453B', '2013-08-16', 'Reunion 19'),
('90446453B', '2014-12-31', 'Evento 71'),
('94381920V', '2013-08-16', 'Reunion 19'),
('97372160G', '2014-05-20', 'Charla 30'),
('98497885V', '2013-12-03', 'Charla 25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Servicio`
--

DROP TABLE IF EXISTS `Servicio`;
CREATE TABLE IF NOT EXISTS `Servicio` (
  `idServicio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Precio` double NOT NULL,
  `IVA` int(11) NOT NULL,
  PRIMARY KEY (`idServicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `Servicio`
--

INSERT INTO `Servicio` (`idServicio`, `Nombre`, `Descripcion`, `Precio`, `IVA`) VALUES
(1, 'Servicio 1', 'Creacion de panfletos', 100, 1),
(2, 'Servicio 2', 'Creacion de ortadillas', 100, 1),
(3, 'Servicio 3', 'Creacion de flyer', 100, 2),
(4, 'Servicio 4', 'Creacion de anuncio de periodico', 100, 1),
(5, 'Servicio 5', 'Creacion de anuncio en carteles', 100, 1),
(6, 'Servicio 6', 'Creacion de anuncio en revistas', 100, 1),
(7, 'Servicio 7', 'Creacion de anuncio en radio', 100, 1),
(8, 'Servicio 8', 'Creacion de anuncio en television', 100, 1),
(9, 'Servicio 9', 'Creacion de anuncio en la web', 100, 1),
(10, 'Servicio 10', NULL, 100, 1),
(11, 'Servicio 11', NULL, 100, 1),
(12, 'Servicio 12', NULL, 100, 1),
(13, 'Servicio 13', NULL, 100, 1),
(14, 'Servicio 14', NULL, 100, 1),
(15, 'Servicio 15', NULL, 100, 1),
(16, 'Servicio 16', NULL, 100, 1),
(17, 'Servicio 17', NULL, 100, 1),
(18, 'Servicio 18', NULL, 100, 1),
(19, 'Servicio 19', NULL, 100, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
CREATE TABLE IF NOT EXISTS `Usuario` (
  `NIF` varchar(9) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `NvAcceso` varchar(20) NOT NULL DEFAULT 'Minimo',
  `Pass` varchar(128) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` varchar(9) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`NIF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`NIF`, `Nombre`, `Apellidos`, `NvAcceso`, `Pass`, `Direccion`, `Telefono`, `Email`) VALUES
('00000000A', 'root', NULL, 'ROLE_ADMIN', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'c/root', '666999666', 'root@root.org'),
('08011026B', 'Nathan', 'Young', 'Minimo', 'f3d040edc80ff9d786284b23669e4dac52d5bb73', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('10963613L', 'Jeffery', 'Stannard', 'Intermedio', '3b38f57a9971668cf1268d65de5d8fc94b90f8b3', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('12787163Z', 'Dick', NULL, 'Alto', 'da55b5597ceae1fefaa10674dcf855c2fa288c97', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('19265708B', 'Cameron', NULL, 'Minimo', 'c7fcb5b6eb49ed761f196c566931f3aedb7a7917', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('20248210E', 'Hannah', 'Kuehn', 'Minimo', '4760a96cffcbc391e5d50b3c04ea9b9d24d4d806', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('20880871E', 'Maggie', 'Chwatal', 'Alto', 'e8bba0bcabd40598afd4c04e10fd22f22423c83b', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('31098062S', 'Jaap', 'Scheffold', 'Intermedio', 'ae45619af5d7b1dea2e2a12559975d1805402846', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('35848183S', 'Duncan', NULL, 'Minimo', '13cf09462156abcecd6bd4f65355880da16e2508', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('36224842A', 'Lisa', 'Allison', 'Minimo', 'c0a5caf150d31c03b85274f525295b20ecb0b51f', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('37671633W', 'Amy', 'Little', 'Intermedio', 'b4789905e966b4ee8dad2a57fa4ac996158120b9', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('45949884R', 'Conor', 'Duvall', 'Intermedio', 'a0cd8f48fd9bbca529092400878938fa26fc37c6', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('48675340A', 'Pablo', 'Guijarro Ramirez', 'ROLE_ADMIN', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Avd. Fotografo Francisco Cano', '965657613', 'sky10pg@gmail.com'),
('48764103D', 'Jose Vicente', 'Romero', 'Bajo', '7bfb37ea85d953f3861167e87344cdacd5807d5d', 'Logroño 19', '669832255', 'jvortsromero@gmail.com'),
('62744229E', 'Cathy', NULL, 'Intermedio', 'b17e620da7e04c3715c7f8bca968425f9d060dfb', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('85389868E', 'Lizzy', NULL, 'Intermedio', 'd2fc98bd41749a6a6223cc3b48f13c7bab9b54de', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('85651511V', 'Fabian', 'Mariojnisk', 'Alto', '75e62e88e90d640d25cfd5dd93ea276723362984', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('85964668Y', 'Koos', 'Naff', 'Minimo', '0ad953696db51b3125a0ac9ef2fb8a0f59e2c0ae', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('89314326J', 'Ron', NULL, 'Minimo', '3c5feda44766aa04c6caa001cc63895f4e0bbb69', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('90446453B', 'Joey', 'Helfrich', 'Intermedio', 'ce7169ba6c7dea1ca07fdbff5bd508d4bb3e5832', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('94381920V', 'Martien', 'Fox', 'Alto', 'cab1846e7b96bbda438aeda56aa886f48d758b5f', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('97372160G', 'Charlotte', 'van Dijk', 'Alto', 'e2f120b86282d738af1a8fc7e9f7952df4f90b55', 'calle falsa 123', '678456231', 'inventado@falso.org'),
('98497885V', 'Lena', 'Toler', 'Minimo', '2afc307a224d6fc67f10e48134f4949bba988124', 'calle falsa 123', '678456231', 'inventado@falso.org');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Albaran`
--
ALTER TABLE `Albaran`
  ADD CONSTRAINT `Albaran_ibfk_1` FOREIGN KEY (`Pedido_Identificador`) REFERENCES `Pedido` (`Identificador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Factura`
--
ALTER TABLE `Factura`
  ADD CONSTRAINT `Factura_ibfk_1` FOREIGN KEY (`Pedido_Identificador`) REFERENCES `Pedido` (`Identificador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Informes_albaran`
--
ALTER TABLE `Informes_albaran`
  ADD CONSTRAINT `Informes_albaran_ibfk_1` FOREIGN KEY (`Albaran_idAlbaran`) REFERENCES `Albaran` (`idAlbaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Informes_factura`
--
ALTER TABLE `Informes_factura`
  ADD CONSTRAINT `Informes_factura_ibfk_1` FOREIGN KEY (`Factura_idFactura`) REFERENCES `Factura` (`idFactura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Informes_gasto`
--
ALTER TABLE `Informes_gasto`
  ADD CONSTRAINT `Informes_gasto_ibfk_1` FOREIGN KEY (`Gasto_Identificador`) REFERENCES `Gasto` (`Identificador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Informes_ingreso`
--
ALTER TABLE `Informes_ingreso`
  ADD CONSTRAINT `Informes_ingreso_ibfk_1` FOREIGN KEY (`Ingreso_Identificador`) REFERENCES `Ingreso` (`Identificador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Informes_pedido`
--
ALTER TABLE `Informes_pedido`
  ADD CONSTRAINT `Informes_pedido_ibfk_1` FOREIGN KEY (`Pedido_Identificador`) REFERENCES `Pedido` (`Identificador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Informes_presupuesto`
--
ALTER TABLE `Informes_presupuesto`
  ADD CONSTRAINT `Informes_presupuesto_ibfk_1` FOREIGN KEY (`Presupuesto_idPresupuesto`) REFERENCES `Presupuesto` (`idPresupuesto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `LineaServicio`
--
ALTER TABLE `LineaServicio`
  ADD CONSTRAINT `LineaServicio_ibfk_1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `Servicio` (`idServicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LineaServicio_ibfk_2` FOREIGN KEY (`Pedido_Identificador`) REFERENCES `Pedido` (`Identificador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Pedido`
--
ALTER TABLE `Pedido`
  ADD CONSTRAINT `Pedido_ibfk_1` FOREIGN KEY (`Cliente_NIF`) REFERENCES `Cliente` (`NIF`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Pedido_ibfk_2` FOREIGN KEY (`Proveedor_NIF`) REFERENCES `Proveedor` (`NIF`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Presupuesto`
--
ALTER TABLE `Presupuesto`
  ADD CONSTRAINT `Presupuesto_ibfk_1` FOREIGN KEY (`Pedido_Identificador`) REFERENCES `Pedido` (`Identificador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Reunion`
--
ALTER TABLE `Reunion`
  ADD CONSTRAINT `Reunion_ibfk_1` FOREIGN KEY (`Usuario_NIF`) REFERENCES `Usuario` (`NIF`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Reunion_ibfk_2` FOREIGN KEY (`Calendario_Eventos_Fecha`, `Calendario_Eventos_Evento`) REFERENCES `Calendario_Eventos` (`Fecha`, `Evento`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
