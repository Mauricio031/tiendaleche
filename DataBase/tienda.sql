-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-05-2019 a las 06:37:53
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
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `name`) VALUES
(1, 'boscan', '123456', 'Anyelber');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

DROP TABLE IF EXISTS `carro`;
CREATE TABLE IF NOT EXISTS `carro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(2, 'Tecnologia'),
(3, 'Alimentos'),
(4, 'En Linea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pago` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `username`, `password`, `name`, `correo`, `pago`) VALUES
(2, 'Mauricio', 'Tecate03', 'Axel', 'mauricioaxelra@gmail.com', 'Credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `monto` float NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `id_cliente`, `fecha`, `monto`, `estado`) VALUES
(3, 1, '2019-02-24 12:39:04', 16400, 1),
(4, 1, '2019-04-12 20:03:40', 1360, 0),
(5, 2, '2019-05-25 22:37:10', 8.25, 0),
(6, 2, '2019-05-26 01:11:56', 30, 0),
(7, 2, '2019-05-26 01:13:02', 0, 0),
(8, 2, '2019-05-26 01:13:45', 8.25, 0),
(9, 2, '2019-05-26 01:15:45', 8.25, 0),
(10, 2, '2019-05-26 01:15:46', 8.25, 0),
(11, 2, '2019-05-26 01:16:09', 14, 0),
(12, 2, '2019-05-26 01:18:20', 0, 0),
(13, 2, '2019-05-26 01:23:35', 8.25, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `oferta` int(11) DEFAULT NULL,
  `descargable` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `price`, `imagen`, `name`, `id_categoria`, `oferta`, `descargable`) VALUES
(12, 30, 'lechiiiiLight_2L81.png', 'lechiiiiLight_2L', 3, 0, NULL),
(13, 25, 'lechiiiiLight_1L272.png', 'lechiiiiLight_1L', 3, 30, NULL),
(14, 12, 'lechiiiiLight_500ml239.png', 'lechiiiiLight_500ml', 3, 40, NULL),
(15, 7, 'lechiiiiLight_250ml377.png', 'lechiiiiLight_250ml', 3, 50, NULL),
(16, 35, 'lechiiiiEntera_2L509.png', 'lechiiiiEntera_2L', 3, 0, NULL),
(17, 28, 'lechiiiiEntera_1L760.png', 'lechiiiiEntera_1L', 3, 0, NULL),
(18, 20, 'lechiiiiEntera_500ml341.png', 'lechiiiiEntera_500ml', 3, 20, NULL),
(19, 10, 'lechiiiiEntera_250ml793.png', 'lechiiiiEntera_250ml', 3, 50, NULL),
(20, 40, 'lechiiiiDeslactosada_2L895.png', 'lechiiiiDeslactosada_2L', 3, 0, NULL),
(21, 30, 'lechiiiiDeslactosada_1L329.png', 'lechiiiiDeslactosada_1L', 3, 0, NULL),
(22, 20, 'lechiiiiDeslactosada_500ml416.png', 'lechiiiiDeslactosada_500ml', 3, 30, NULL),
(23, 15, 'lechiiiiDeslactosada_250ml84.png', 'lechiiiiDeslactosada_250ml', 3, 45, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_compra`
--

DROP TABLE IF EXISTS `productos_compra`;
CREATE TABLE IF NOT EXISTS `productos_compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `monto` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_compra`
--

INSERT INTO `productos_compra` (`id`, `id_compra`, `id_producto`, `cantidad`, `monto`) VALUES
(1, 3, 5, 7, 400),
(2, 3, 4, 4, 1000),
(3, 3, 3, 4, 1200),
(4, 3, 2, 4, 200),
(5, 3, 1, 4, 1000),
(6, 4, 5, 1, 400),
(7, 4, 7, 1, 1000),
(8, 5, 23, 1, 15),
(9, 6, 21, 1, 30),
(10, 8, 23, 1, 15),
(11, 11, 22, 1, 20),
(12, 13, 23, 1, 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
