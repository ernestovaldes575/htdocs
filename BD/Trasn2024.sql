-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2024 a las 21:09:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trasn2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tta9207`
--

CREATE TABLE `tta9207` (
  `AAyuntamiento` char(3) DEFAULT NULL,
  `AEjercicio` int(11) DEFAULT NULL,
  `AFechaInicio` datetime DEFAULT NULL,
  `AFechaTermino` datetime DEFAULT NULL,
  `AClavePuesto` varchar(50) DEFAULT NULL,
  `ADenominacion` varchar(50) DEFAULT NULL,
  `ANombreSP` varchar(50) DEFAULT NULL,
  `APrimerApellidoSP` varchar(50) DEFAULT NULL,
  `ASegundoApellidoSP` varchar(50) DEFAULT NULL,
  `AAreaAdscripcion` int(11) DEFAULT NULL,
  `AFechaAltaPuesto` datetime DEFAULT NULL,
  `ATipoVialidad` int(11) DEFAULT NULL,
  `ATipoVialidadOtro` varchar(50) DEFAULT NULL,
  `ANombreVialidad` varchar(50) DEFAULT NULL,
  `ANumeroExterior` int(11) DEFAULT NULL,
  `ANumeroInterior` int(11) DEFAULT NULL,
  `ATipoAsentamiento` int(11) DEFAULT NULL,
  `ATipoAsentamientoOtro` varchar(50) DEFAULT NULL,
  `ANombreAsentamiento` varchar(50) DEFAULT NULL,
  `AClaveEntidad` int(11) DEFAULT NULL,
  `AClaveMunicipio` int(11) DEFAULT NULL,
  `AClaveLocalidad` int(11) DEFAULT NULL,
  `ACodigoPostal` int(11) DEFAULT NULL,
  `ATelefonoOficial` int(11) DEFAULT NULL,
  `AExtension` int(11) DEFAULT NULL,
  `ACorreoElectronico` varchar(50) DEFAULT NULL,
  `AAreaResp` int(11) DEFAULT NULL,
  `ANota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
