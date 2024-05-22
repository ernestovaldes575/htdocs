-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2024 a las 01:04:18
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `transparencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acopcser`
--

CREATE TABLE `acopcser` (
  `COSTipSer` char(2) COLLATE utf8_spanish2_ci NOT NULL,
  `COSClave` char(3) COLLATE utf8_spanish2_ci NOT NULL,
  `COSDescripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `COSDireccion` varchar(80) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `acopcser`
--

INSERT INTO `acopcser` (`COSTipSer`, `COSClave`, `COSDescripcion`, `COSDireccion`) VALUES
('01', '001', 'Asignara area', 'Transparencia/FacdeAre/FacdeAreCons.php'),
('01', '002', 'Fracciones', 'Transparencia/Ejercicio.php'),
('01', '003', 'Normatividad Aplicable', 'Transparencia/NormApli/NormApliCons.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actipser`
--

CREATE TABLE `actipser` (
  `CTSClave` char(2) COLLATE utf8_spanish2_ci NOT NULL,
  `CTSDescripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `actipser`
--

INSERT INTO `actipser` (`CTSClave`, `CTSDescripcion`) VALUES
('01', 'Transparencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adpermi`
--

CREATE TABLE `adpermi` (
  `PAyuntamiento` char(3) COLLATE utf8_spanish2_ci NOT NULL,
  `PConsServ` int(11) NOT NULL,
  `PTipoServ` char(2) COLLATE utf8_spanish2_ci NOT NULL,
  `POpciServ` char(3) COLLATE utf8_spanish2_ci NOT NULL,
  `PConsulta` char(1) COLLATE utf8_spanish2_ci NOT NULL,
  `PAlta` char(1) COLLATE utf8_spanish2_ci NOT NULL,
  `PModifica` char(1) COLLATE utf8_spanish2_ci NOT NULL,
  `PBaja` char(1) COLLATE utf8_spanish2_ci NOT NULL,
  `PNumePerm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `adpermi`
--

INSERT INTO `adpermi` (`PAyuntamiento`, `PConsServ`, `PTipoServ`, `POpciServ`, `PConsulta`, `PAlta`, `PModifica`, `PBaja`, `PNumePerm`) VALUES
('105', 1, '01', '002', 'A', 'A', 'A', 'A', 1),
('105', 2, '01', '002', 'A', 'A', 'A', 'A', 2),
('105', 2, '01', '001', 'A', 'A', 'A', 'A', 3),
('105', 1, '01', '001', 'A', 'A', 'A', 'A', 5),
('105', 2, '01', '003', 'A', 'A', 'A', 'A', 6),
('105', 1, '01', '003', 'A', 'A', 'A', 'A', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcarea`
--

CREATE TABLE `tcarea` (
  `CARClave` int(11) NOT NULL,
  `CARDescripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tcarea`
--

INSERT INTO `tcarea` (`CARClave`, `CARDescripcion`) VALUES
(1, 'Secretaría del Ayuntamiento'),
(2, 'Instituto de Cultura Física y Deporte'),
(3, 'Unidad de Información, Planeación, Programación y Evaluación'),
(4, 'Dirección de Administración'),
(5, 'Tesorería Municipal'),
(6, 'Dirección de Gestión de Programas Sociales'),
(7, 'Desarrollo Económico'),
(8, 'Presidencia Municipal - Secretario Particular'),
(9, 'Unidad de Transparencia'),
(10, 'Órgano de Control Interno'),
(11, 'Coordinación de Mejora Regulatoria'),
(12, 'Coordinación de Comunicación Social'),
(13, 'Dirección de Infraestructura y Obra Pública'),
(14, 'Dirección de Medio Ambiente'),
(15, 'Defensoría Municipal de Derechos Humanos'),
(16, 'Dirección de Servicios Públicos'),
(17, 'Coordinación Jurídica'),
(18, 'Dirección de Cultura y Educación'),
(19, 'Instituto de  la Juventud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcnormatividad`
--

CREATE TABLE `tcnormatividad` (
  `CNOClave` int(11) NOT NULL,
  `CNODescripcion` varchar(60) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tcnormatividad`
--

INSERT INTO `tcnormatividad` (`CNOClave`, `CNODescripcion`) VALUES
(1, 'Normatividad 01'),
(2, 'Normatividad 02'),
(3, 'Normatividad 03'),
(4, 'Normatividad 04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttfracarea`
--

CREATE TABLE `ttfracarea` (
  `FAConsecutivo` int(11) NOT NULL,
  `FAAyuntamiento` char(3) NOT NULL,
  `FAEjercicio` int(11) NOT NULL,
  `FAUnidad` int(11) NOT NULL,
  `FAFraccion` char(2) NOT NULL,
  `FAInciso` char(2) NOT NULL,
  `FASubinciso` char(1) NOT NULL,
  `FAPeriRepo` char(1) NOT NULL,
  `FATrimes01` int(11) NOT NULL,
  `FATrimes02` int(11) NOT NULL,
  `FATrimes03` int(11) NOT NULL,
  `FATrimes04` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ttfracarea`
--

INSERT INTO `ttfracarea` (`FAConsecutivo`, `FAAyuntamiento`, `FAEjercicio`, `FAUnidad`, `FAFraccion`, `FAInciso`, `FASubinciso`, `FAPeriRepo`, `FATrimes01`, `FATrimes02`, `FATrimes03`, `FATrimes04`) VALUES
(1, '105', 2024, 48, '92', '03', '', 'A', 0, -1, -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttfraccion`
--

CREATE TABLE `ttfraccion` (
  `FFraccion` char(2) NOT NULL,
  `FInciso` char(2) NOT NULL,
  `FSubinciso` char(1) NOT NULL,
  `FNormatividad` varchar(80) NOT NULL,
  `FArea` int(11) NOT NULL,
  `FPeriRepo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ttfraccion`
--

INSERT INTO `ttfraccion` (`FFraccion`, `FInciso`, `FSubinciso`, `FNormatividad`, `FArea`, `FPeriRepo`) VALUES
('92', '03', '', 'Facultades de Área', 1, 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acopcser`
--
ALTER TABLE `acopcser`
  ADD PRIMARY KEY (`COSDescripcion`);

--
-- Indices de la tabla `actipser`
--
ALTER TABLE `actipser`
  ADD PRIMARY KEY (`CTSClave`);

--
-- Indices de la tabla `adpermi`
--
ALTER TABLE `adpermi`
  ADD PRIMARY KEY (`PNumePerm`);

--
-- Indices de la tabla `tcarea`
--
ALTER TABLE `tcarea`
  ADD PRIMARY KEY (`CARClave`);

--
-- Indices de la tabla `tcnormatividad`
--
ALTER TABLE `tcnormatividad`
  ADD PRIMARY KEY (`CNOClave`);

--
-- Indices de la tabla `ttfracarea`
--
ALTER TABLE `ttfracarea`
  ADD PRIMARY KEY (`FAConsecutivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adpermi`
--
ALTER TABLE `adpermi`
  MODIFY `PNumePerm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tcarea`
--
ALTER TABLE `tcarea`
  MODIFY `CARClave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `ttfracarea`
--
ALTER TABLE `ttfracarea`
  MODIFY `FAConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
