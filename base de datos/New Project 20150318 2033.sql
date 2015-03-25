-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.16


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema stock
--

CREATE DATABASE IF NOT EXISTS stock;
USE stock;

--
-- Definition of table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `idClientes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apellido` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `idTipoDocumentos` smallint(5) unsigned DEFAULT NULL,
  `documento` int(10) unsigned DEFAULT NULL,
  `idCondFiscales` smallint(5) unsigned DEFAULT NULL,
  `cuit` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `idcalles` smallint(5) unsigned DEFAULT NULL,
  `altura` smallint(5) unsigned DEFAULT NULL,
  `piso` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dpto` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `idBarrios` smallint(5) unsigned DEFAULT NULL,
  `idLocalidad` int(10) unsigned DEFAULT NULL,
  `cp` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `telefono` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `celular` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `fechaBaja` date DEFAULT NULL,
  `observacion` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idClientes`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `clientes`
--

/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;


--
-- Definition of table `detalleventas`
--

DROP TABLE IF EXISTS `detalleventas`;
CREATE TABLE `detalleventas` (
  `idVentas` int(10) unsigned NOT NULL,
  `idProdcutos` int(10) unsigned NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  `idPrecios` int(10) unsigned NOT NULL,
  `descuento` float DEFAULT NULL,
  PRIMARY KEY (`idVentas`,`idProdcutos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detalleventas`
--

/*!40000 ALTER TABLE `detalleventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalleventas` ENABLE KEYS */;


--
-- Definition of table `precios`
--

DROP TABLE IF EXISTS `precios`;
CREATE TABLE `precios` (
  `idprecios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProductos` int(10) unsigned NOT NULL,
  `precioMin` float NOT NULL,
  `precioMay` float NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`idprecios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `precios`
--

/*!40000 ALTER TABLE `precios` DISABLE KEYS */;
/*!40000 ALTER TABLE `precios` ENABLE KEYS */;


--
-- Definition of table `produbica`
--

DROP TABLE IF EXISTS `produbica`;
CREATE TABLE `produbica` (
  `idProductos` int(10) unsigned NOT NULL,
  `idUbicaciones` int(10) unsigned NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idProductos`,`idUbicaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produbica`
--

/*!40000 ALTER TABLE `produbica` DISABLE KEYS */;
/*!40000 ALTER TABLE `produbica` ENABLE KEYS */;


--
-- Definition of table `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `idProductos` int(10) unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `cantidadMinima` int(10) unsigned DEFAULT NULL,
  `cantidadMaxima` int(10) unsigned DEFAULT NULL,
  `fechaAlta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cantidadInicial` int(10) unsigned DEFAULT NULL,
  `fechaBaja` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `idProveedores` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idProductos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- Dumping data for table `productos`
--

/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;


--
-- Definition of table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `idProveedores` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `duenio` varchar(150) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `idCondFiscales` smallint(5) NOT NULL,
  `cuit` varchar(20) DEFAULT NULL,
  `fechaAlta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaBaja` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idProveedores`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proveedores`
--

/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;


--
-- Definition of table `rubros`
--

DROP TABLE IF EXISTS `rubros`;
CREATE TABLE `rubros` (
  `idRubros` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechaBaja` datetime NOT NULL,
  PRIMARY KEY (`idRubros`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rubros`
--

/*!40000 ALTER TABLE `rubros` DISABLE KEYS */;
/*!40000 ALTER TABLE `rubros` ENABLE KEYS */;


--
-- Definition of table `tipos`
--

DROP TABLE IF EXISTS `tipos`;
CREATE TABLE `tipos` (
  `idTipos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechaBaja` datetime NOT NULL,
  PRIMARY KEY (`idTipos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipos`
--

/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;


--
-- Definition of table `ubicaciones`
--

DROP TABLE IF EXISTS `ubicaciones`;
CREATE TABLE `ubicaciones` (
  `idUbicaciones` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechaBaja` datetime NOT NULL,
  PRIMARY KEY (`idUbicaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ubicaciones`
--

/*!40000 ALTER TABLE `ubicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `ubicaciones` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuarios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `apellido` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `idTipoDocumentos` smallint(5) unsigned DEFAULT NULL,
  `documento` int(10) unsigned DEFAULT NULL,
  `idcalles` smallint(5) unsigned DEFAULT NULL,
  `altura` smallint(5) unsigned DEFAULT NULL,
  `piso` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dpto` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `idBarrios` smallint(5) unsigned DEFAULT NULL,
  `idLocalidad` int(10) unsigned DEFAULT NULL,
  `cp` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `telefono` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `celular` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `fechaBaja` date DEFAULT NULL,
  `observacion` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;


--
-- Definition of table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `idVentas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nroComprobante` varchar(13) DEFAULT NULL,
  `idClientes` int(10) unsigned DEFAULT NULL,
  `fechaEmision` datetime NOT NULL,
  `idUsuarios` int(10) unsigned NOT NULL,
  `idTipoComprobante` int(10) unsigned NOT NULL,
  `idTipoVenta` int(10) unsigned NOT NULL,
  `idTipoPago` int(10) unsigned NOT NULL,
  `descuento` float DEFAULT NULL,
  `senia` float DEFAULT NULL,
  `idCondFiscales` int(10) unsigned DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fechaBaja` datetime NOT NULL,
  PRIMARY KEY (`idVentas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ventas`
--

/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;


--
-- Definition of table `zonas`
--

DROP TABLE IF EXISTS `zonas`;
CREATE TABLE `zonas` (
  `idzonas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `clasificacion` varchar(25) DEFAULT NULL,
  `fechaBaja` datetime NOT NULL,
  PRIMARY KEY (`idzonas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zonas`
--

/*!40000 ALTER TABLE `zonas` DISABLE KEYS */;
/*!40000 ALTER TABLE `zonas` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
