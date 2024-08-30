-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2024 a las 22:00:29
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
-- Base de datos: `transpa2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tt9201norma`
--

CREATE TABLE `tt9201norma` (
  `NConsecutivo` int(11) NOT NULL,
  `NAyuntamiento` char(3) NOT NULL,
  `NEjercicio` int(11) NOT NULL,
  `NFechade Inicio` date NOT NULL,
  `NFecha de termino` date NOT NULL,
  `NTipoNorma` int(11) NOT NULL,
  `NTipoNormaOtro` varchar(50) NOT NULL,
  `NDenomina` varchar(50) NOT NULL,
  `NFechPublDO` date NOT NULL,
  `NFechUltiModi` date NOT NULL,
  `NHipervinculo` varchar(50) NOT NULL,
  `NAreaResp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tt9201norma`
--

INSERT INTO `tt9201norma` (`NConsecutivo`, `NAyuntamiento`, `NEjercicio`, `NFechade Inicio`, `NFecha de termino`, `NTipoNorma`, `NTipoNormaOtro`, `NDenomina`, `NFechPublDO`, `NFechUltiModi`, `NHipervinculo`, `NAreaResp`) VALUES
(1, '105', 2024, '2024-06-01', '2024-06-13', 1, 'aaa', 'aaa', '0000-00-00', '0000-00-00', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tt9203facare`
--

CREATE TABLE `tt9203facare` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AConsFrac` int(11) NOT NULL,
  `ANumeTrim` char(2) NOT NULL,
  `ANumeRegi` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `AArea` int(11) NOT NULL,
  `ADenominacion` varchar(50) NOT NULL,
  `AFunadamento` varchar(50) NOT NULL,
  `AHipervinculo` varchar(50) NOT NULL,
  `AAreaRespon` int(50) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tt9203facare`
--

INSERT INTO `tt9203facare` (`AConsecutivo`, `AAyuntamiento`, `AEjercicio`, `AConsFrac`, `ANumeTrim`, `ANumeRegi`, `AFechaInicio`, `AFechaTermino`, `AArea`, `ADenominacion`, `AFunadamento`, `AHipervinculo`, `AAreaRespon`, `ANota`) VALUES
(2, '105', 2024, 1, '01', 1, '2024-05-25', '2024-05-25', 1, 'Denomi', 'Funda', 'A9203-1-2.png', 48, '1'),
(4, '105', 2024, 1, '01', 2, '2024-05-28', '2024-12-31', 1, 'Denomin', 'Fundam', 'A9203-2-4.pdf', 1, 'ejemplo'),
(5, '105', 2024, 1, '01', 3, '2024-06-10', '2024-06-28', 3, '333', '333', '', 3, 'w'),
(6, '105', 2024, 1, '01', 4, '2024-06-10', '2024-06-28', 4, '44', '44', 'A9203-4-6.png', 4, '44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tt9201norma`
--
ALTER TABLE `tt9201norma`
  ADD PRIMARY KEY (`NConsecutivo`);

--
-- Indices de la tabla `tt9203facare`
--
ALTER TABLE `tt9203facare`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tt9201norma`
--
ALTER TABLE `tt9201norma`
  MODIFY `NConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tt9203facare`
--
ALTER TABLE `tt9203facare`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
