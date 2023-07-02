-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-07-2023 a las 18:08:43
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_rescata`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nueva`
--

DROP TABLE IF EXISTS `nueva`;
CREATE TABLE IF NOT EXISTS `nueva` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Raza` varchar(255) NOT NULL,
  `Genero` varchar(255) NOT NULL,
  `Tamaño` varchar(512) NOT NULL,
  `Vacunas` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nueva`
--

INSERT INTO `nueva` (`Id`, `Nombre`, `Raza`, `Genero`, `Tamaño`, `Vacunas`) VALUES
(1, 'Dani Malón', 'Mestizo', 'Macho', 'Grande', 'Vacunas al día'),
(2, 'Roberto', 'Galgo', 'Macho', 'Grande', 'Vacunas al día'),
(3, 'Negro', 'Mestizo', 'Macho', 'Mediano', 'Vacunas al día');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
