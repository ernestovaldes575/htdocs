-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2024 a las 21:23:24
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
-- Base de datos: `deseconomico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acopcser`
--

CREATE TABLE `acopcser` (
  `COSTipSer` char(2) NOT NULL,
  `COSClave` char(3) NOT NULL,
  `COSDescripcion` varchar(50) NOT NULL,
  `COSDireccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acopcser`
--

INSERT INTO `acopcser` (`COSTipSer`, `COSClave`, `COSDescripcion`, `COSDireccion`) VALUES
('01', '001', 'Registro ', '/Intranet/DesaEcono/Empresa/EmpresaList.php'),
('01', '002', 'Empleos', '/Intranet/DesaEcono/Empleos/EmpresaList.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actipser`
--

CREATE TABLE `actipser` (
  `CTSClave` char(2) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `CTSDescripcion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actipser`
--

INSERT INTO `actipser` (`CTSClave`, `CTSDescripcion`) VALUES
('01', 'Empresas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adpermi`
--

CREATE TABLE `adpermi` (
  `PAyuntamiento` char(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `PConsServ` int(11) NOT NULL,
  `PTipoServ` char(2) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `POpciServ` char(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `PConsulta` char(1) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `PAlta` char(1) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `PModifica` char(1) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `PBaja` char(1) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `PNumePerm` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `adpermi`
--

INSERT INTO `adpermi` (`PAyuntamiento`, `PConsServ`, `PTipoServ`, `POpciServ`, `PConsulta`, `PAlta`, `PModifica`, `PBaja`, `PNumePerm`) VALUES
('105', 1, '01', '001', 'A', 'A', 'A', 'A', 0),
('105', 1, '01', '002', 'A', 'A', 'A', 'A', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecsexo`
--

CREATE TABLE `ecsexo` (
  `CSEClave` char(1) NOT NULL,
  `CSEDescripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ecsexo`
--

INSERT INTO `ecsexo` (`CSEClave`, `CSEDescripcion`) VALUES
('F', 'Femenino'),
('I', 'Indistinto'),
('M', 'Masculino s');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edplaza`
--

CREATE TABLE `edplaza` (
  `PConsecut` int(11) NOT NULL,
  `PConsEmpr` int(11) NOT NULL,
  `PPuesto` varchar(80) NOT NULL,
  `PSexo` varchar(1) NOT NULL,
  `PEdad` varchar(50) NOT NULL,
  `PSueldo` varchar(80) NOT NULL,
  `PEscolaridad` varchar(30) NOT NULL,
  `PExperiencia` varchar(200) NOT NULL,
  `EDeEcEmpr` char(1) NOT NULL,
  `PServModi` int(11) NOT NULL,
  `PFechModi` date NOT NULL,
  `PPlazAcIn` char(1) NOT NULL,
  `PEstado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `edplaza`
--

INSERT INTO `edplaza` (`PConsecut`, `PConsEmpr`, `PPuesto`, `PSexo`, `PEdad`, `PSueldo`, `PEscolaridad`, `PExperiencia`, `EDeEcEmpr`, `PServModi`, `PFechModi`, `PPlazAcIn`, `PEstado`) VALUES
(1, 1, 'Promotor de ventas', 'I', '19 a 67 años', '1,452 sueldo base + bono + comisiones ', 'Primaria', 'No es necesaria solo manejar el celular', 'E', 1, '2023-09-23', 'A', 'A'),
(2, 1, 'Almacen', 'I', 'de 18 a 40 años', '1,500 semanales', 'Primaria', 'sin experiencia', 'E', 1, '2023-09-24', 'A', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etempresa`
--

CREATE TABLE `etempresa` (
  `EConsecut` int(11) NOT NULL,
  `EAyuntamiento` char(3) NOT NULL,
  `EEmpresa` varchar(100) NOT NULL,
  `ERespresentante` varchar(80) NOT NULL,
  `EContacto` varchar(80) NOT NULL,
  `ETeleCont` varchar(20) NOT NULL,
  `EHoraAten` varchar(20) NOT NULL,
  `ECorreo` varchar(50) NOT NULL,
  `EContra` varchar(20) NOT NULL,
  `ESerPubMo` int(11) NOT NULL,
  `EFechModi` date NOT NULL,
  `EEstado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etempresa`
--

INSERT INTO `etempresa` (`EConsecut`, `EAyuntamiento`, `EEmpresa`, `ERespresentante`, `EContacto`, `ETeleCont`, `EHoraAten`, `ECorreo`, `EContra`, `ESerPubMo`, `EFechModi`, `EEstado`) VALUES
(1, '105', 'Implore Ideal S.A. de C.V', '', 'Daniel Serrano', '55 71 98 12 35', '9 a.m a 5 p.m de lun', 'daniel@implore.com.mx', 'd4n13l', 1, '2023-09-22', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acopcser`
--
ALTER TABLE `acopcser`
  ADD PRIMARY KEY (`COSTipSer`,`COSClave`);

--
-- Indices de la tabla `ecsexo`
--
ALTER TABLE `ecsexo`
  ADD PRIMARY KEY (`CSEClave`);

--
-- Indices de la tabla `edplaza`
--
ALTER TABLE `edplaza`
  ADD PRIMARY KEY (`PConsecut`);

--
-- Indices de la tabla `etempresa`
--
ALTER TABLE `etempresa`
  ADD PRIMARY KEY (`EConsecut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `edplaza`
--
ALTER TABLE `edplaza`
  MODIFY `PConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `etempresa`
--
ALTER TABLE `etempresa`
  MODIFY `EConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
