-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 19:49:19
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
-- Base de datos: `comsocialcopy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stcabidire`
--

CREATE TABLE `stcabidire` (
  `CAyuntamiento` char(3) NOT NULL,
  `CCabiDir` char(1) NOT NULL,
  `CTipo` char(1) NOT NULL,
  `CNumero` int(11) NOT NULL,
  `CNombre` varchar(80) NOT NULL,
  `CCargo` varchar(80) NOT NULL,
  `CTelefono` varchar(20) NOT NULL,
  `CDireccion` varchar(80) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `CodiPost` int(8) NOT NULL,
  `CImagen` varchar(50) NOT NULL,
  `CFondo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `stcabidire`
--

INSERT INTO `stcabidire` (`CAyuntamiento`, `CCabiDir`, `CTipo`, `CNumero`, `CNombre`, `CCargo`, `CTelefono`, `CDireccion`, `Colonia`, `CodiPost`, `CImagen`, `CFondo`) VALUES
('105', 'C', 'P', 1, 'Manuel Vilchis Viveros', 'Presidente', '7222222222', 'Constitucion 101, San Miguel', 'Centro', 51350, '', ''),
('105', 'C', 'R', 1, 'José Alfredo Guizar Arreola', 'Primera Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi01.webp', 'color01'),
('105', 'C', 'R', 2, 'Mayté Jaramillo López', 'Segunda Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi02.webp', 'color03'),
('105', 'C', 'R', 3, 'Ernesto Guzmán Camacho', 'Tercera Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi03.webp', 'color01'),
('105', 'C', 'R', 4, 'karen Nayeli Castrejón Gómez', 'Cuarta Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi04.webp', 'color03'),
('105', 'C', 'R', 5, 'Alfredo Esquivel Cuarenta', 'Quinta Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi05.webp', 'color01'),
('105', 'C', 'R', 6, 'Leopoldo Romero Mejia', 'Sexta Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi06.webp', 'color01'),
('105', 'C', 'R', 7, 'Blanca Paulina Vilchis Sánchez', 'Septima Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi07.webp', 'color03'),
('105', 'C', 'R', 8, 'Leonardo Joaquin Bravo Villanueva', 'Octava Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi08.webp', 'color01'),
('105', 'C', 'R', 9, 'Alfredo Díaz de Jesús', 'Novena Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi09.webp', 'color01'),
('105', 'C', 'S', 1, 'Dulce María Bastida Alvarez', 'Síndico Municipal', '7222183966', 'Constitucion 101, San Miguel', 'Centro', 51350, 'sindico.webp', 'color03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `stcabidire`
--
ALTER TABLE `stcabidire`
  ADD KEY `CAyuntamiento` (`CAyuntamiento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
