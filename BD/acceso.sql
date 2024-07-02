-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2024 a las 21:05:43
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
-- Base de datos: `acceso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acayuntamiento`
--

CREATE TABLE `acayuntamiento` (
  `CAYClave` char(3) NOT NULL,
  `CAYDescripcion` varchar(50) NOT NULL,
  `CAYCalle` varchar(65) NOT NULL,
  `CAYNoExt` varchar(10) NOT NULL,
  `CAYNoInt` varchar(30) NOT NULL,
  `CAYColonia` varchar(65) NOT NULL,
  `CAYCodPostal` varchar(5) NOT NULL,
  `CAYMunicipio` varchar(3) NOT NULL,
  `CAYEstado` varchar(2) NOT NULL,
  `CAYTelefono` varchar(10) NOT NULL,
  `CAYCorreo` varchar(30) NOT NULL,
  `CAYPaginaWeb` varchar(40) NOT NULL,
  `CAYTelefonoN` varchar(10) NOT NULL,
  `CAYCorreoN` varchar(30) NOT NULL,
  `CAYRFC` varchar(15) NOT NULL,
  `CAYCuentaPago` varchar(30) NOT NULL,
  `CAYRegistroPatronal` varchar(30) NOT NULL,
  `CAYAdquiValiTitu` char(1) NOT NULL,
  `CAYAreaConsTallMec` int(11) NOT NULL,
  `CAYIGECEM` char(3) NOT NULL,
  `CAYINEGI` char(3) NOT NULL,
  `CAYTipo` char(1) NOT NULL,
  `CAYOSFEM` char(3) NOT NULL,
  `CAYToponimia` char(1) NOT NULL,
  `CAYPalacio` char(1) NOT NULL,
  `CAYLatitud` varchar(20) NOT NULL,
  `CAYLongitud` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acayuntamiento`
--

INSERT INTO `acayuntamiento` (`CAYClave`, `CAYDescripcion`, `CAYCalle`, `CAYNoExt`, `CAYNoInt`, `CAYColonia`, `CAYCodPostal`, `CAYMunicipio`, `CAYEstado`, `CAYTelefono`, `CAYCorreo`, `CAYPaginaWeb`, `CAYTelefonoN`, `CAYCorreoN`, `CAYRFC`, `CAYCuentaPago`, `CAYRegistroPatronal`, `CAYAdquiValiTitu`, `CAYAreaConsTallMec`, `CAYIGECEM`, `CAYINEGI`, `CAYTipo`, `CAYOSFEM`, `CAYToponimia`, `CAYPalacio`, `CAYLatitud`, `CAYLongitud`) VALUES
('105', 'Zinacantepec', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acejercicio`
--

CREATE TABLE `acejercicio` (
  `CEJClave` int(11) NOT NULL,
  `CEJDescri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acejercicio`
--

INSERT INTO `acejercicio` (`CEJClave`, `CEJDescri`) VALUES
(2022, 'Ejercicio 2022'),
(2023, 'Ejercicio 2023'),
(2024, 'Ejercicio 2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acmenu`
--

CREATE TABLE `acmenu` (
  `CMEClave` int(11) NOT NULL,
  `CMETitulo` char(20) NOT NULL,
  `CMEDescri` varchar(80) NOT NULL,
  `CMEBasDat` varchar(25) NOT NULL,
  `CMEConexion` varchar(25) NOT NULL,
  `CMEVariable` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `acmenu`
--

INSERT INTO `acmenu` (`CMEClave`, `CMETitulo`, `CMEDescri`, `CMEBasDat`, `CMEConexion`, `CMEVariable`) VALUES
(1, 'Acceso', 'Acceso', 'acceso', 'conlogin.php', ''),
(2, 'Transparencia', 'Transparencia', 'transparencia', 'conexion.php', ''),
(3, 'TecnInfo', 'Tecnologías de la Información', 'tecninfo', 'conteinf.php', ''),
(4, 'ComuniSocial', 'Com. Social', 'comsocial', 'ConBasComSoc.php', ''),
(5, 'Des. Economico', 'Des. Economico', 'deseconomico', 'ConBasDesEcon', '1'),
(6, 'Pagina Web', 'Pagina Web', 'Paginaweb', '', ''),
(10, 'Seguimiento', 'Seguimiento', 'Seguimiento', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acopcser`
--

CREATE TABLE `acopcser` (
  `COSTipSer` char(2) NOT NULL,
  `COSClave` char(3) NOT NULL,
  `COSDescripcion` varchar(30) NOT NULL,
  `COSDireccion` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `acopcser`
--

INSERT INTO `acopcser` (`COSTipSer`, `COSClave`, `COSDescripcion`, `COSDireccion`) VALUES
('01', '001', 'Usuarios', 'Acceso/Usuarios/UsuarioCons.php'),
('01', '002', 'Programas', 'Acceso/Programas/BaseDato.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actipser`
--

CREATE TABLE `actipser` (
  `CTSClave` char(2) NOT NULL,
  `CTSDescripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `actipser`
--

INSERT INTO `actipser` (`CTSClave`, `CTSDescripcion`) VALUES
('01', 'Catalogos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acunidades`
--

CREATE TABLE `acunidades` (
  `CUNConsecutivo` int(11) DEFAULT NULL,
  `CUNAyuntamiento` int(11) DEFAULT NULL,
  `CUNDepeGeneral` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNDepeAuxiliar` int(11) DEFAULT NULL,
  `CUNDependencia` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNClaveUnidad` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNDescripcion` varchar(120) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNDescriCorta` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNClasOrga` int(11) DEFAULT NULL,
  `CUNNivel` int(11) DEFAULT NULL,
  `CUNNivelOrga` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNSiglaNivel` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNDomicilio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNHorario` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNTelefonoOficina` int(11) DEFAULT NULL,
  `CUNCorreo` int(11) DEFAULT NULL,
  `CUNFoto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNLatitud` int(11) DEFAULT NULL,
  `CUNLongitud` int(11) DEFAULT NULL,
  `CUNProfesion` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNTitular` int(11) DEFAULT NULL,
  `CUNTitularEncarga` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNCargoTitular` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNTelefonoTitular` int(11) NOT NULL,
  `CUNCorreoTitular` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNFotoTitular` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNEnlaceAdministrativo` int(11) DEFAULT NULL,
  `CUNTelefonoEnlace` int(11) DEFAULT NULL,
  `CUNCorreroEnlace` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNFotoEnlace` varchar(90) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNTituPresi` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CUNEstado` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acunidades`
--

INSERT INTO `acunidades` (`CUNConsecutivo`, `CUNAyuntamiento`, `CUNDepeGeneral`, `CUNDepeAuxiliar`, `CUNDependencia`, `CUNClaveUnidad`, `CUNDescripcion`, `CUNDescriCorta`, `CUNClasOrga`, `CUNNivel`, `CUNNivelOrga`, `CUNSiglaNivel`, `CUNDomicilio`, `CUNHorario`, `CUNTelefonoOficina`, `CUNCorreo`, `CUNFoto`, `CUNLatitud`, `CUNLongitud`, `CUNProfesion`, `CUNTitular`, `CUNTitularEncarga`, `CUNCargoTitular`, `CUNTelefonoTitular`, `CUNCorreoTitular`, `CUNFotoTitular`, `CUNEnlaceAdministrativo`, `CUNTelefonoEnlace`, `CUNCorreroEnlace`, `CUNFotoEnlace`, `CUNTituPresi`, `CUNEstado`) VALUES
(1, 105, 'A00', 101, 'A00', 'A00', 'Presidencia', 'Presidencia', 1, 1, '      ', 'PM', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 85, -180, 'LIC.  ', 4041, 'T', 'PRESIDENTE MUNICIPAL                                                            ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1035, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(2, 105, 'A00', 100, 'A00', 'A00-01', 'Secretaria Particular', 'Secretaria Particular', 1, 2, 'Presidencia', 'SP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1100000, 0, 'LIC.  ', 5857, 'T', 'Secretaria Particular                                                           ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(3, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-01-02', 'Coordinacion de Giras y Logistica', 'Coord. Giras y Logistica', 1, 3, 'Presidencia/Sria. Particular', 'SP/CGyL', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1100000, 0, 'C.    ', 3985, 'T', 'Coordinador de Giras y Log?stica                                                ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(5, 105, 'A01', 103, 'A01', 'A00-01-03', 'Coordinacion de Comunicacion Social', 'Coord. Comunicacion Social', 1, 3, 'Presidencia/Sria. Particular', 'SP/CCS', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1304000, 0, 'C.    ', 3986, 'T', 'Coordinador de Comunicacion Social                                              ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 67, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(8, 105, 'A02', 102, 'A02', 'A00-27', 'Derechos Humanos', 'Derechos Humanos', 4, 2, '   ', 'DMDH', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1305000, 0, 'Lic.  ', 4456, 'E', 'Defensor Municipal de Derechos Humanos                                          ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 334, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(9, 105, 'B00', 0, 'B01', 'B01', 'Sindicatura', 'Sindicatura', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1200000, 0, 'Lic.  ', 3994, 'T', 'Sindica Municipal                                                               ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2721, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(16, 105, 'C00', 0, 'C01', 'C01', 'Primer Regiduria', 'Primer Regiduria', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1501000, 0, 'Mtro  ', 3995, 'T', 'Primer Regidor                                                                  ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 3049, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(17, 105, 'C00', 0, 'C02', 'C02', 'Segunda Regiduria', 'Segunda Regiduria', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1502000, 0, 'Lic.  ', 3996, 'T', 'Segunda Regidora                                                                ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1950, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(18, 105, 'C00', 0, '0', 'C03', 'Tercer Regiduria', 'Tercer Regiduria', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1503000, 0, 'Lic.  ', 3997, 'T', 'Tercer Regidor                                                                  ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 455, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(19, 105, 'C00', 0, '0', 'C04', 'Cuarta Regiduria', 'Cuarta Regiduria', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1504000, 0, 'C.    ', 3998, 'T', 'Cuarta Regidora                                                                 ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2655, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(20, 105, 'C00', 0, 'C05', 'C05', 'Quinta Regiduria', 'Quinta Regiduria', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1505000, 0, 'Lic.  ', 3999, 'T', 'Quinto Regidor                                                                  ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2521, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(21, 105, 'C00', 0, 'C06', 'C06', 'Sexta Regiduria', 'Sexta Regiduria', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1506000, 0, 'Lic.  ', 4000, 'T', 'Sexto Regidor                                                                   ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2679, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(22, 105, 'C00', 0, '0', 'C07', 'S?ptima Regiduria', 'S?ptima Regiduria', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1507000, 0, 'Lic.  ', 4001, 'T', 'S?ptima Regidora                                                                ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2536, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(23, 105, 'C00', 0, '0', 'C08', 'Octava Regiduria', 'Octava Regiduria', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1508000, 0, 'Lic.  ', 2522, 'T', 'Octavo Regidor                                                                  ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2662, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(24, 105, 'C00', 0, 'C09', 'C09', 'Novena Regiduria', 'Novena Regiduria', 1, 1, '   ', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1509000, 0, 'Lic.  ', 2536, 'T', 'Noveno Regidor                                                                  ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 3450, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(29, 105, 'D00', 100, 'D00', 'A00-09', 'Secretaria del Ayuntamiento', 'Sria.  del Ayuntamiento', 1, 2, '   ', 'SCA', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1300000, 0, 'Lic.', 3958, 'E', 'Secretario del Ayuntamiento                                                     ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1053, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(30, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'D00', 'A00-09-01', 'Cronista Municipal', 'Cronista Municipal', 1, 0, 'Sria. Ayto.', 'SCA/CM', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1300000, 0, 'C.    ', -1, 'T', 'Cronista Municipal                                                              ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(37, 105, 'E00', 120, 'E00', 'A00-12', 'Direccion de Administracion', 'Dir. Administracion', 1, 2, '    ', 'DA', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3300000, 0, 'Lic.  ', 4007, 'T', 'Directora de Administracion                                                     ', 0, 'E00', '? ? ? ? ? ? ? ? ? ? ', 1868, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(38, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'E00', 'A00-12-01', 'Subdireccion de Recursos Humanos', 'Subdir. Recursos Humanos', 1, 4, 'Dir. Admon.', 'DA/SRH', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3300000, 0, 'Lic.  ', 2554, 'T', 'Subdireccion de Recursos Humanos                                                ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1385, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(39, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'E00', 'A00-12-01-01', 'Departamento de Relaciones Laborales', 'Depto. Relaciones Laborales', 1, 5, 'Dir. Admon./ Subdir. Rec. Hum.', 'DA/DRL', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3300000, 0, 'Lic.  ', 2554, 'T', 'Departamento de Relaciones Laborales                                            ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1385, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(40, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'E00', 'A00-12-01-02', 'Departamento de Nomina', 'Depto. Nomina', 1, 5, 'Dir. Admon./ Subdir. Rec. Hum.', 'DA/DN', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3300000, 0, 'C.    ', 4260, 'T', 'Departamento de Nominas                                                         ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(41, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'E00', 'A00-12-02', 'Coordinacion de Recursos Materiales', 'Coord. Recursos Materiales', 1, 3, 'Dir. Admon.', 'DA/CRM', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3300000, 0, 'Lic.  ', 2829, 'T', 'Subdireccion de Recursos Materiales                                             ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1385, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(42, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'E00', 'A00-12-02-01', 'Departamento de Control Vehicular y Servicos Generales', 'Depto. de Control Vehicular y Servicios Gral.', 1, 5, 'Dir. Admon./Rec. Mat.', 'DA/DCVySG', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3300000, 0, 'C.    ', 1175, 'T', 'Departamento de Servicios Generales                                             ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1385, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(48, 105, 'S00', 100, 'S00', 'A00-03', 'Unidad de Informacion  Planeacion Programacion y Evaluacion', 'UIPPE', 1, 2, '    ', 'UIPPE', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1101000, 0, 'Ing.  ', 3987, 'T', 'TITULAR DE LA UNIDAD DE INFORMACI?N, PLANEACI?N, PROGRAMACI?N Y EVALUACI?N      ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1046, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(50, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'S00', 'A00-03-01', 'Departamento  de Planeacion y Evaluacion', 'Depto. Planeacion y Evaluacion', 1, 5, 'UIPPE', 'UIPPE/DPyE', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1101000, 0, 'Mtro. ', 1658, 'T', 'Subdireccion de Planeacion                                                      ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(51, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'E01', 'A00-03-03', 'Departamento  de Gobierno Digital', 'Depto.  Gobierno Digital', 1, 5, 'UIPPE', 'UIPPE/DGD', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1101000, 0, 'Ing.  ', 558, 'T', 'Jefe del Departamento de  Gobierno Digital                                      ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(53, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'E01', 'A00-03-02', 'Departamento  de Innovacion Gubernamental', 'Depto. Innovacion Gubernamental', 1, 5, 'UIPPE', 'UIPPE/DIG', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1101000, 0, 'Lic.  ', 1335, 'T', 'Subdireccion de Financiamiento de Proyectos                                     ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(55, 105, 'F00', 123, 'F00', 'A00-15', 'Direccion Desarrollo Territorial y Urbano', 'Dir. Desarrollo Territorial', 1, 2, '    ', 'DDTyU', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1710000, 0, 'Arq.  ', 3976, 'T', 'Director de Desarrollo Territorial y Urbano                                     ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1972, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(58, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'F00', 'A00-15-01-02', 'Departamento de Licencias y Permisos de Construccion', 'Depto de Licencias y Permisos', 1, 5, 'Dir. de Des. Terr. y Urbano/Subdir. de Des. Terr. y Urbano', 'DDTyU/DLyPC', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1700000, 0, 'Lic.. ', 195, 'T', 'Departamento de Licencias de Construccion y Uso de Suelo                        ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(59, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'F00', 'A00-15-01-03', 'Departamento de Nomenclatura', 'Depto. de Nomenclatura', 1, 5, 'Dir. de Des. Terr. y Urbano/Subdir. de Des. Terr. y Urbano', 'DDTyU/DN', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1700000, 0, 'C.    ', -1, 'T', 'Departamento de Normatividad y Publicidad Vial                                  ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(62, 105, 'F00', 124, 'F00', 'A00-13', 'Direccion de Obras Publicas', 'Dir. de Obras Publicas', 1, 2, '   ', 'DOP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1700000, 0, 'Arq.  ', 3962, 'T', 'Director de Obras P?blicas                                                      ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1734, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(63, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'L00', 'A00-13-01-02', 'Departamento de Construccion', 'Depto. de Construccion', 1, 5, 'Dir. de Obras Publicas/ Subdir. Obras P?blicas', 'DOP/DC', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1800000, 0, 'C.    ', 183, 'T', 'Departamento de Control Presupuestal                                            ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(64, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'F00', 'A00-13-01', 'Subdireccion Obras P?blicas', 'Subdir. Obras P?blicas', 1, 4, 'Dir. de Obras Publicas', 'DOP/SOP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1700000, 0, 'Ing.  ', 2744, 'T', 'Subdireccion de Construccion                                                    ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(66, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'F00', 'A00-13-01-04', 'Departamento de Planeacion Normatividad Y Manejo de Plataformas', 'Depto. de Plan. Norm. Y Manj. Plataf.', 1, 5, 'Dir. de Obras Publicas/ Subdir. Obras P?blicas', 'DOP/DPNyMP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1700000, 0, 'C.    ', 2742, 'T', 'Subdireccion de Normatividad                                                    ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(67, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'F00', 'A00-13-01-01', 'Departamento de Estudios, Proyectos y Precios Unitarios', 'Depto. de Estudios, Proyec. Y Prec. Uni.', 1, 5, 'Dir. de Obras Publicas/ Subdir. Obras P?blicas', 'DOP/DEPyPU', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1700000, 0, 'C.    ', 180, 'T', 'Departamento de Concursos Contratos, Estimaciones y Precios Unita               ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(68, 105, 'G00', 160, 'G00', 'A00-20', 'Direccion de Medio Ambiente', 'Dir. de Medio Ambiente', 1, 2, '    ', 'DMA', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 2800000, 0, 'Lic.  ', 3973, 'T', 'Directora de Medio Ambiente                                                     ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 391, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(69, 105, 'H00', 126, 'H00', 'A00-19', 'Direccion de Servicios P?blicos', 'Dir. de Servicios P?blicos', 1, 2, '   ', 'DSP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1720000, 0, 'Lic.  ', 3964, 'T', 'Director de Servicios P?blicos                                                  ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 248, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(74, 105, 'I00', 112, 'I00', 'A00-17', 'Direccion de Desarrollo Social', 'Dir. de Desarrollo Social', 1, 2, '    ', 'DDS', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3900000, 0, 'Lic.  ', 3972, 'T', 'Director de Desarrollo Social                                                   ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 463, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(75, 105, '? ? ? ? ? ? ? ? ? ? ', 0, '00I', 'A00-17-01-01', 'Departamento de Evaluacion y Seguimientos de Programas Municipales', 'Depto. de Eval. Seg. Prog. Mun.', 1, 5, 'Dir. de Des. Social/Subdir. Des. Social', 'DDS/DEySPM', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3900000, 0, 'C.    ', 876, 'T', 'Departamento de Planeacion y An?lisis                                           ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(76, 105, '? ? ? ? ? ? ? ? ? ? ', 0, '00I', 'A00-17-01-02', 'Deparatamento de Desarrollo Comunitario y Participacion Social', 'Depto.de Desarr. Comun. Y Part. Soc.', 1, 5, 'Dir. de Des. Social/Subdir. Des. Social', 'DDS/DCyPS', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3900000, 0, 'Lic.  ', 556, 'T', 'Departamento de Programas Sociales Federales                                    ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(77, 105, 'J00', 144, 'J00', 'A00-23', 'Direccion de Gobernacion', 'Dir. de Gobernacion', 1, 2, '    ', 'DG', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1600000, 0, 'C. ', 4161, 'E', 'Direcctor de Gobierno                                                           ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 159, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(81, 105, 'K00', 136, 'K00', 'A00-11', 'Contraloria Municipal', 'Contraloria Municipal', 1, 2, '    ', 'CM', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1201000, 0, 'MAP  ', 4427, 'T', 'Contralora Municipal                                                            ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1050, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(83, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'K00', 'A00-11-01', 'Subcontraloria', 'Subcontraloria', 1, 4, 'Contraloria', 'CM/SB', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1201000, 0, 'C.P.  ', 543, 'T', 'Subcontraloria                                                                  ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 31, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(84, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'K00', 'A00-11-01-01', 'Departamento de Fiscalizacion control y Evaluacion   Interna de Gobierno  P?blico', 'Depto. de Fiscalizacion Ctrl. y Evaluacion', 1, 5, 'Contraloria/Subcontraloria', 'CM/DFCyEIGP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1201000, 0, 'C.P.  ', 1400, 'T', 'Departamento de Auditoria                                                       ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 31, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(85, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'K00', 'A00-11-01-02', 'Departamento de Prevencion Deteccion Distribucion, Sancion y Combate de la Corrupcion', 'Depto. de Prev. Deteccion Distr. Sanc. Comb. Corrup..', 1, 5, 'Contraloria/Subcontraloria', 'CM/DPDDSyCC', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1201000, 0, 'Lic.  ', 888, 'T', 'Departamento de Quejas y Procedimientos                                         ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 31, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(87, 105, 'L00', 117, 'L00', 'A00-10', 'Tesoreria', 'Tesoreria', 1, 2, '    ', 'TM', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1800000, 0, 'L.A.F', 5853, 'T', 'Tesorero Municipal                                                              ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 3387, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(88, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'L00', 'A00-10-01', 'Subdirector de Ingresos', 'Subdir. Ingresos', 1, 4, 'Tesoreria', 'TM/SI', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1800000, 0, 'L.C.  ', 526, 'T', 'Subdireccion de Ingresos                                                        ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(89, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'L00', 'A00-10-01-01', 'Coordinacion de Fiscalizacion', 'Coord. Fisacalizacion.', 1, 0, 'Tesoreria/ Subdir. Ingresos', 'TM/CF', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1800000, 0, 'Lic.  ', 844, 'T', 'Departamento de Fiscalizacion                                                   ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(90, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'L00', 'A00-10-02-03', 'Coordinacion de Cajas General', 'Coord. Caja Gral.', 1, 0, 'Tesoreria/ Subdir. Egresos', 'TM/CCG', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1800000, 0, 'C.P.  ', 308, 'T', 'Caja General                                                                    ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(91, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'L00', 'A00-10-01-03', 'Coordinacion de Catastro', 'Coord. Catastro', 1, 0, 'Tesoreria/ Subdir. Ingresos', 'TM/CC', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1800000, 0, 'Ing.  ', 528, 'T', 'Subdireccion de Catastro                                                        ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(94, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'L00', 'A00-10-02', 'Subdireccion de Egresos', 'Subdir. Egresos', 1, 4, 'Tesoreria', 'TM/SE', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1800000, 0, 'C.P.  ', 544, 'T', 'Subdireccion de Egresos                                                         ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(95, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'L00', 'A00-10-02-02', 'Coordinacion de Presupuesto', 'Coord. Presupuesto', 1, 0, 'Tesoreria/ Subdir. Egresos', 'TM/CP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1800000, 0, 'Lic.  ', 546, 'T', 'Departamento de Presupuesto                                                     ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(96, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'L00', 'A00-10-02-01', 'Coordinacion de Contabilidad', 'Coord. Contabilidad', 1, 0, 'Tesoreria/ Subdir. Egresos', 'TM/CC', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1800000, 0, 'C.P.  ', 303, 'T', 'Departamento de Contabilidad                                                    ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(97, 105, 'N00', 130, 'N00', 'A00-16', 'Direccion de Desarrollo EcoNomico', 'Dir. de Desarrollo Ec?nomico', 1, 2, '    ', 'DDE', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3200000, 0, 'Lic.  ', 3971, 'T', 'Director de Desarrollo EcoNomico                                                ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2568, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(98, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'N00', 'A00-16-04', 'Departamento  de Regulacion Comercial', 'Depto. Regul. Comer.', 1, 5, 'Dir. de Des. Ec?no.', 'DDE/DRC', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3200000, 0, 'Lic.  ', 541, 'T', 'Departamento  de Regulacion Comercial                                           ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(102, 105, 'O00', 141, 'O00', 'A00-22', 'Direccion de Educacion .', 'Dir. de Educacion .', 1, 2, '     ', 'DE', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 4000000, 0, 'Lic.  ', 4549, 'T', 'Directora de Educacion                                                          ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 77, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(103, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'O00', 'A00-22-01', 'Departamento  de Enlace con instituciones Educativas', 'Depto. Enlace Inst. Educat', 1, 5, 'Dir. de Educacion', 'DE/DEIE', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 4000000, 0, 'C.    ', -1, 'T', 'Coordinador de Educacion                                                        ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(104, 105, 'O00', 150, 'U00', 'A00-21', 'Direccion de Cultura y Turismo', 'Dir. de Cultura y Turismo', 1, 2, '    ', 'DCyT', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 4000000, 0, 'Lic.  ', 3978, 'T', 'Directora de Cultura y Turismo                                                  ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2807, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(105, 105, 'Q00', 104, 'Q00', 'A00-18', 'Direccion Seguridad P?blica y Tr?nsito', 'Dir. Seguridad P?blica y Tr?nsito', 1, 2, '    ', 'DSPyT', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 2100000, 0, 'C.    ', 3965, 'T', 'Director de Seguridad P?blica                                                   ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1440, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(109, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'Q00', 'A00-18-02', 'Subdireccion de Seguridad P?blica y Tr?nsito', 'Subdirec. de Seg. P?blica y Tr?nsito', 1, 4, 'Dir. Seg. P?b. y Tr?ns.', 'DSPyT/SDSPyT', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 2100000, 0, 'C.    ', -1, 'T', 'Subdireccion de Seguridad P?blica                                               ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(111, 105, 'T00', 105, 'T00', 'A00-28', 'Coordinacion de Proteccion Civil Y bomberos.', 'Coor. de Proteccion Civil Y bomberos.', 1, 2, '     ', 'CMPCyB', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 4300000, 0, 'C.    ', 3984, 'T', 'Coordinador de Proteccion Civil                                                 ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 496, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(113, 105, 'A00', 159, 'A00', 'A00-06', 'Secretaria T?cnica del Consejo Municipal de Seguridad P?blica', 'Sria. T?cnica de Seguridad P?blica', 1, 2, 'Presidencia', 'STCMSP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 2100000, 0, 'C     ', 1774, 'T', 'Secretario T?cnico del Consejo Municipal de Seguridad Publica                   ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 1909, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(119, 105, 'A00', 101, 'A00', 'A00-02', 'Secretaria T?cnica', 'Secretaria T?cnica', 1, 2, 'Presidencia', 'ST', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1110000, 0, 'Arq.  ', 4041, 'T', 'Secretario T?cnico                                                              ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(125, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'D00', 'A00-09-02', 'Registro Civil 01', 'Registro Civil 01', 1, 0, 'Sria. Ayto.', 'SCA/RC01', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1300000, 0, 'Lic.', 328, 'T', 'Registro Civil 01                                                               ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(142, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'H00', 'A00-19-02', 'Departamento del  Rastro', 'Depto. de Rastro', 1, 5, 'Dir. de Serv. P?b.', 'DSP/DR', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 1720000, 0, 'C.    ', -1, 'T', 'Rastro Municpal                                                                 ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(147, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-25-01', 'Oficial?a Mediadora Conciliadora', 'Oficilia Media. Concilia.', 1, 0, 'Dir. Juridica', 'DJ/OMC', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', 364, 'T', 'Oficilia Mediadora y Conciciliadora                                             ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(149, 105, 'M00', 108, 'M00', 'A00-25', 'Direccion del Jur?dico', 'Dir. del Juridico', 1, 2, '    ', 'DJ', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'Lic.  ', 3980, 'T', 'Director del Jur?dico                                                           ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2736, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(150, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'D00', 'A00-09-03', 'Registro Civil 02', 'Registro Civil 02', 1, 0, 'Sria. Ayto.', 'SCA/RG02', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', -1, 'T', 'Registro Civil 02                                                               ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(153, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'D00', 'A00-09-04-05', 'Departamento de la Junta Municipal de Reclutamiento', 'Depto.Reclutamiento', 1, 5, 'Sria. Ayto./Subdir. T?cinca', 'SCA/DJMR', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', -1, 'T', 'Reclutamiento                                                                   ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(154, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'H00', 'A00-19-01', 'Departamento de Panteones', 'Depto. de Panteones', 1, 5, 'Dir. de Serv. P?b.', 'DSP/DP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', -1, 'T', 'Panteones                                                                       ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(156, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'E00', 'A00-09-04-03', 'Departamento de Control Patrimonial', 'Depto. de Control Patrimonial', 1, 5, 'Sria. Ayto./Subdir. T?cinca', 'SCA/DCP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', -1, 'T', 'Control Patrominial                                                             ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(158, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'D00', 'A00-09-04-02', 'Direccion de Archivo Municipal', 'Dir. Archivo Municipal', 1, 0, 'Sria. Ayto./Subdir. T?cinca', 'SCA/DAM', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'Lic.  ', 3983, 'T', 'Archivo Municipal                                                               ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(159, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'H00', 'A00-19-05', 'Departamento deProteccion y Control Animal', 'Depto. de Prot. Ctrol. Anim.', 1, 5, 'Dir. de Serv. P?b.', 'DSP/DPyCA', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', -1, 'T', 'Antirrabico                                                                     ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(161, 105, 'I00', 143, 'I00', 'A00-26', 'Instituto Municipal de la Juventud', 'Inst.  Mpal. de la Juventud', 3, 2, '    ', 'IMJU', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'Lic.  ', 3968, 'T', 'Director del Instituto de la Juventud                                           ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 3388, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(162, 105, 'V00', 152, 'I00', 'A00-24', 'Direccion  Municipal de la Mujer', 'Dir.  Municipal de la Mujer', 1, 2, '   ', 'DMM', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'LCDA', 5831, 'T', 'Directora Municipal de la Mujer                                                 ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2619, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(166, 105, 'A00', 122, 'A00', 'A00-04', 'Unidad de Transparencia', 'Unidad Transparencia', 1, 2, 'Presidencia', 'UT', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.', 5669, 'E', 'Titular de la Unidad de Transparencia                                           ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2760, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(167, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'H00', 'A00-19-03', 'Departamento de Alumbrado P?blico', 'Depto. de Alumb. P?b.', 1, 5, 'Dir. de Serv. P?b.', 'DSP/DAP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', -1, 'T', 'Area de Alumbrado Publico                                                       ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(168, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'H00', 'A00-19-06', 'Departamento de Parques y Jardines', 'Depto. de Parques  Jardines', 1, 5, 'Dir. de Serv. P?b.', 'DSP/DPyJ', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', -1, 'T', 'Area de Parques y Jardines                                                      ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(169, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'N00', 'A00-16-05', 'Departamento del Empleo', 'Depto Empleo', 1, 5, 'Dir. de Des. Ec?no.', 'DDE/DE', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', -1, 'T', 'Departamento del Empleo                                                         ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(170, 105, 'A00', 137, 'A00', 'A00-05', 'Coordinacion de Mejora Regulatoria', 'Coord. de Mejora Regulatoria', 1, 2, 'Presidencia', 'CMMR', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'Lic.  ', 3974, 'T', 'Directora de Mejora Regulatoria                                                 ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 70, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(171, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'N00', 'A00-16-02', 'Departamento  de Desarrollo Agropecuario', 'Depto Desarr. Agrope.', 1, 5, 'Dir. de Des. Ec?no.', 'DDE/DDA', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', 2300, 'T', 'Departamento  de Desarrollo Agropecuario                                        ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(172, 105, 'F00', 154, 'F00', 'A00-14', 'Direccion Desarrollo Metropolitano y Movilidad', 'Dir.  Des. Metro. y Mov.', 1, 2, '   ', 'DDMyM', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'Mtra  ', 4546, 'E', 'Directora de Des. Metropolitano y Movilidad                                     ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 2858, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(176, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-01-01', 'Coordinacion de Atencion Ciudadana', 'Coord. Atencion Ciudadana', 1, 3, 'Presidencia/Sria. Particular', 'SP/CAC', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', 2614, 'T', 'Coordinacion de Atencion Ciudadana                                              ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(207, 105, 'A00', 100, 'A00', 'A00-07', 'Coordinacion Asuntos Intergubernamentales.', 'Coord. Asunt. Intergubernamentales', 1, 2, 'Presidencia', NULL, 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'Lic.  ', 4114, 'T', 'Coordinadora de Asuntos Gubernamentales                                         ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(208, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'K00', 'A00-11-01-03', 'Unidad Subtanciadora y Resolutoria', 'Unidad Subtanciadora y Resolutoria', 1, 0, 'Contraloria/Subcontraloria', 'CM/USyR', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'Lic.  ', 0, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', NULL, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(212, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-18-01', 'Asuntos Interno', 'Asuntos Internos', 1, 0, 'Dir. Seg. P?b. y Tr?ns.', 'DSPyT/AI', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'LIC   ', 4317, 'T', 'Titular de Asuntos Internos                                                     ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(213, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'D00', 'A00-09-04', 'Subdireccion T?cnica', 'Subdire. T?cnica', 1, 4, 'Sria. Ayto.', 'SCA/ST', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(214, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-15-01-01', 'Departamento de Planeacion Territorial', 'Depto Planeacion Territorial', 1, 5, 'Dir. de Des. Terr. y Urbano/Subdir. de Des. Terr. y Urbano', 'DDTyU/DPT', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(215, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-13-01-03', 'Departamento de Mantenimiento y Urbanizacion', 'Depto. De Matto. Y Urban.', 1, 5, 'Dir. de Obras Publicas/ Subdir. Obras P?blicas', 'DOP/DMyU', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(216, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-14-01', 'Subdireccion de Desarrollo  Metropolitano  Y Movilidad', 'Subdir. Des. Metro. y Mov.', 1, 4, 'Dir. Des. Metro. y Mov.', 'DDMyM/SD', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(217, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-14-01-01', 'Deparatmento de Desarrollo Metropolitano', 'Depto. Desarr. Metropolitano', 1, 5, 'Dir. Des. Metro. y Mov./Subdir Des. Metro. yMov.', 'DDMyM/DDM', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(218, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-20-01', 'Subdireccion de Medio Ambiente', 'Subdir. Medio Ambiente', 1, 4, 'Dir. Medio Ambiente', 'DMA/SMA', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(219, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-19-04', 'Departamento de Aseo Urbano y recoleccion de Basura', 'Depto. de Aseo Urb. Y Rec. Bas.', 1, 5, 'Dir. de Serv. P?b.', 'DSP/DAUyRB', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(220, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-20-01-02', 'Departamento de ordenamiento ecologico y juridico, proteccion y Reastauracion Forestal', 'Depto. de Ord. Ecolog. Jurid. Protecc. Restau. Forest.', 1, 5, 'Dir. Medio Ambiente/Subdir. Medio Ambiente', 'DMA/DOEyJPyRF', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(221, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-26-01', '?rea de Planeacion Estrat?gica  y Desarrollo Integral', '?rea de Planea. Estrat. Desarr. Integal', 3, 0, 'Instituto Mpal.de la  Juv.', 'IMJU/APEyDI', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(222, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-24-02', 'Departamento de Igualdad Sustantiva', 'Depto. Igualdad Sustantiva', 1, 5, 'Dir.  Mpal. de la Mujer', 'DMM/DIS', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(223, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-23-01', 'Subdireccion de Gobernacion', 'Subdir. Gobernacion', 1, 4, 'Dir. de Gober.', 'DG/SG', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(224, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-23-01-02', 'Departamento de Atencion  de Organizaciones Sociales  y Civiles', 'Depto. de Attn.Org. Soc. Civiles', 1, 5, 'Dir. de Gober./Subdir. Gober.', 'DG/DAOSyC', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A');
INSERT INTO `acunidades` (`CUNConsecutivo`, `CUNAyuntamiento`, `CUNDepeGeneral`, `CUNDepeAuxiliar`, `CUNDependencia`, `CUNClaveUnidad`, `CUNDescripcion`, `CUNDescriCorta`, `CUNClasOrga`, `CUNNivel`, `CUNNivelOrga`, `CUNSiglaNivel`, `CUNDomicilio`, `CUNHorario`, `CUNTelefonoOficina`, `CUNCorreo`, `CUNFoto`, `CUNLatitud`, `CUNLongitud`, `CUNProfesion`, `CUNTitular`, `CUNTitularEncarga`, `CUNCargoTitular`, `CUNTelefonoTitular`, `CUNCorreoTitular`, `CUNFotoTitular`, `CUNEnlaceAdministrativo`, `CUNTelefonoEnlace`, `CUNCorreroEnlace`, `CUNFotoEnlace`, `CUNTituPresi`, `CUNEstado`) VALUES
(225, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-10-01-02', 'Coordinacion de Recaudacion', 'Coord. Recaudacion.', 1, 1, 'Tesoreria/ Subdir. Ingresos', 'TM/ CR', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(226, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-25-03', 'Calificador de Hechos de Tr?nsito Terrestre', 'Calific. de  Hechos de Trans. Terres.', 1, 0, 'Dir. Juridica', 'DJ/CHTT', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(227, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-18-02-01', 'Departamento de Administrativo', 'Depto. Admvo.', 1, 5, 'Dir. Seg. P?b. y Tr?ns./Subdirec. de Seg. P?b. y Tr?ns.', 'DSPyT/DA', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(228, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-18-02-03', 'Departamento de Transito', 'Depto. Transito', 1, 5, 'Dir. Seg. P?b. y Tr?ns./Subdirec. de Seg. P?b. y Tr?ns.', 'DSPyT/DT', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(229, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-21-02', 'Departamento de Turismo', 'Depto Turismo', 1, 5, 'Dir. de Cultura y Turismo', 'DCyT/DT', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(230, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-21-01', 'Departamento  de cultura', 'Depto Cultura', 1, 5, 'Dir. de Cultura y Turismo', 'DCyT/DC', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(231, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-08', 'Asesores', 'Asesores', 1, 2, 'Presidencia', NULL, '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(232, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-17-01', 'Subdirector de Desarrollo Social', 'Subdir. Des. Social', 1, 4, 'Dir. de Des. Social/', 'DDS/SDS', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(233, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-17-02', 'Coordimacion de Asuntos indigenas', 'Coor. Asunt. Indigenas', 1, 3, 'Dir. de Des. Social/', 'DDS/CAI', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(234, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-26-02', '?rea  de Comunicacion y Vinculacion  Interinstitucional', '?rea de Comuni. y Vincu. Interinst.', 3, 0, 'Instituto Mpal.de la  Juv.', 'IMJU/ACyVI', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(235, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-24-01', 'Departamento de Perspectiva de G?nero', 'Depto de Persp. Gener.', 1, 5, 'Dir.  Mpal. de la Mujer', 'DMM/DPG', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(236, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-23-01-01', 'Departamento de Concertacion  Pol?tica', 'Depto. de Concert. Polit.', 1, 5, 'Dir. de Gober./Subdir. Gober.', 'DG/DCP', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(237, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-25-02', 'Oficial Calificador', 'Oficial Calificador', 1, 0, 'Dir. Juridica', 'DJ/OC', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(238, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-22-02', 'Departamento  Administrativo', 'Depto. Admvo.', 1, 5, 'Dir. de Educacion', 'DE/DA', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(239, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-18-02-02', 'Departamento  del Centro de Mando  Municipal', 'Depto. Centro Mano. Mpal.', 1, 5, 'Dir. Seg. P?b. y Tr?ns./Subdirec. de Seg. P?b. y Tr?ns.', 'DSPyT/DCMM', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(240, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-15-01', 'Subdireccion de Desarrollo territorial y Urbano.', 'Subdir. Des. Urb. Y Terr.', 1, 4, 'Dir. de Des. Terr. y Urbano', 'DDTyU/SD', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(241, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-14-01-02', 'Departamento de Movilidad', 'Depto. Movilidad', 1, 5, 'Dir. Des. Metro. y Mov./Subdir Des. Metro. yMov.', 'DDMyM/DM', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(242, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'A00', 'A00-20-01-01', 'Departamento de Planeacion y Educacion Ambiental', 'Depto. de Planea. y Edu. Ambie.', 1, 5, 'Dir. Medio Ambiente/Subdir. Medio Ambiente', 'DMA/DPyEA', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, '      ', -1, 'T', '? ? ? ? ? ? ? ? ? ? ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(243, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'D00', 'A00-09-04-04', 'Coordinacion de Autoridades Auxiliares', 'Coor. Autoridades Auxiliares', 1, 0, 'Sria. Ayto./Subdir. T?cinca', 'SCA/CAA', '? ? ? ? ? ? ? ? ? ? ', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 0, 0, 'C.    ', 4187, 'T', 'Coordinador de Autoridades Auxiliares                                           ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'T', 'A'),
(245, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'N00', 'A00-16-03', 'Departamento  de Desarrollo Proyecto', 'Depto. Des. Proyectos', 1, 5, 'Dir. de Des. Ec?no.', 'DDE/DDP', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3200000, 0, 'Lic.  ', 541, 'T', 'Departamento  de Desarrollo Proyecto                                            ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A'),
(246, 105, '? ? ? ? ? ? ? ? ? ? ', 0, 'N00', 'A00-16-01', 'Departamento  de Operacion Administrativa', 'Depto. Operacion Admon', 1, 5, 'Dir. de Des. Ec?no.', 'DDE/DOA', 'Jardin Constitucion', 'DE 9:00 a.m. a 18:00 p.m.                                             ', 0, 0, '? ? ? ? ? ? ? ? ? ? ', 3200000, 0, 'Lic.  ', 541, 'T', 'Departamento  de Operacion Administrativa                                       ', 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', -1, 0, '? ? ? ? ? ? ? ? ? ? ', '? ? ? ? ? ? ? ? ? ? ', 'N', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adacceso`
--

CREATE TABLE `adacceso` (
  `AAyuntamiento` varchar(3) NOT NULL,
  `AConsecut` int(11) NOT NULL,
  `ANivel` int(11) NOT NULL,
  `AMenu` int(11) NOT NULL,
  `ASubmenu` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `adacceso`
--

INSERT INTO `adacceso` (`AAyuntamiento`, `AConsecut`, `ANivel`, `AMenu`, `ASubmenu`) VALUES
('105', 1, 3, 6, '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adpermi`
--

CREATE TABLE `adpermi` (
  `PAyuntamiento` char(3) NOT NULL,
  `PConsServ` int(11) NOT NULL,
  `PTipoServ` char(2) NOT NULL,
  `POpciServ` char(3) NOT NULL,
  `PConsulta` char(1) NOT NULL,
  `PAlta` char(1) NOT NULL,
  `PModifica` char(1) NOT NULL,
  `PBaja` char(1) NOT NULL,
  `PNumePerm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `adpermi`
--

INSERT INTO `adpermi` (`PAyuntamiento`, `PConsServ`, `PTipoServ`, `POpciServ`, `PConsulta`, `PAlta`, `PModifica`, `PBaja`, `PNumePerm`) VALUES
('105', 2, '01', '001', 'A', 'A', 'A', 'A', 1),
('105', 2, '01', '002', 'A', 'A', 'A', 'A', 2),
('105', 1, '01', '001', 'I', 'A', 'I', 'A', 3),
('105', 2, '01', '003', 'A', 'A', 'A', 'A', 4),
('105', 1, '01', '002', 'A', 'A', 'A', 'A', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atacceso`
--

CREATE TABLE `atacceso` (
  `AConsecut` int(11) NOT NULL,
  `AClaceAcce` char(6) NOT NULL,
  `AContAcce` char(6) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `ANombre` varchar(50) NOT NULL,
  `AUnidAdmi` char(5) NOT NULL,
  `ATipoUnid` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `atacceso`
--

INSERT INTO `atacceso` (`AConsecut`, `AClaceAcce`, `AContAcce`, `AAyuntamiento`, `ANombre`, `AUnidAdmi`, `ATipoUnid`) VALUES
(1, '000001', '000001', '105', 'Horacio Reyes Ramirez', '37', 'A'),
(2, '000002', '000002', '105', 'Diego Castro de Jesus', '87', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atpermen`
--

CREATE TABLE `atpermen` (
  `PAyuntamiento` char(3) NOT NULL,
  `PConsServ` int(11) NOT NULL,
  `PMenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `atpermen`
--

INSERT INTO `atpermen` (`PAyuntamiento`, `PConsServ`, `PMenu`) VALUES
('105', 1, 2),
('105', 2, 2),
('105', 1, 1),
('105', 2, 1),
('105', 2, 3),
('105', 1, 3),
('105', 1, 4),
('105', 1, 5),
('105', 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atusuario`
--

CREATE TABLE `atusuario` (
  `UConsecut` int(11) NOT NULL,
  `UAyuntamiento` char(3) NOT NULL,
  `UNumeroEmpleado` char(10) NOT NULL,
  `UStatus` char(1) NOT NULL,
  `UNombre` varchar(50) NOT NULL,
  `UPaterno` varchar(50) NOT NULL,
  `UMaterno` varchar(50) NOT NULL,
  `UUnidad` int(30) NOT NULL,
  `UFoto` varchar(20) NOT NULL,
  `UFechaAlta` date NOT NULL,
  `UFechaBaja` date NOT NULL,
  `UFechMod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `atusuario`
--

INSERT INTO `atusuario` (`UConsecut`, `UAyuntamiento`, `UNumeroEmpleado`, `UStatus`, `UNombre`, `UPaterno`, `UMaterno`, `UUnidad`, `UFoto`, `UFechaAlta`, `UFechaBaja`, `UFechMod`) VALUES
(1, '105', '04682', 'O', 'Horacio', 'Reyes', 'Ramirez', 37, 'hh', '2021-11-16', '2021-12-01', '2021-11-25'),
(2, '105', '00002', 'O', 'Ernesto', 'Valdes', 'Lujano', 87, '123', '2021-11-02', '2021-11-18', '2021-12-02'),
(3, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, '105', '10000', 'O', 'OSCAR IVAN', 'DIAZ', '   MACEDO', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, '105', '10000', 'O', 'GABRIELA', 'REYES', '  COBOS', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(6, '105', '10000', 'O', 'MONICA MYRIAM', 'COLIN', '  VALDEZ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, '105', '10000', 'O', 'ROSARIO', 'GONZALEZ', '  SALGADO', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(8, '105', '10000', 'O', 'ENRIQUE ', 'VAZQUEZ', ' CASTANEDA', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 143, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(11, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(12, '105', '10000', 'O', 'RUBI', 'RODR?GUEZ', '  CORDOBA', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(13, '105', '10000', 'O', 'ALEJANDRO', 'PABLO', '  VARGAS', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(14, '105', '10000', 'O', 'SANDRA', 'MORAN', '  VELAZQUEZ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(15, '105', '10000', 'O', 'MARIA DEL CARMEN', 'SANCHEZ', '  REYES', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(16, '105', '10000', 'O', 'STEPHANY', 'FLORES', '  FALCON', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(17, '105', '10000', 'O', 'INOCENTA', 'DE LA CRUZ', '  VILLACETIN', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(18, '105', '10000', 'O', 'RICARDO', 'MEJ?A', '  DIAZ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(19, '105', '10000', 'O', 'MIGUEL', 'LOPEZ', '  ARAUJO', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(20, '105', '10000', 'O', 'MARIA SOLEDAD', 'ORTEGA', '  MENDOZA', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(21, '105', '10000', 'O', 'LETICIA', 'PEREZ', '  ROJAS', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(22, '105', '10000', 'O', 'ADRIANA', 'SANCHEZ', '  M?NDEZ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(23, '105', '10000', 'O', 'ROBERTO', 'GONZALEZ', '  REYES', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(24, '105', '10000', 'O', 'Lic. Jos? Antonio ', 'Pacheco', ' Palma', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(25, '105', '10000', 'O', 'LITZY', 'GUADALUPE', '  HERRERA', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(26, '105', '10000', 'O', 'FABIOLA', 'MEJIA', '  VALLEJO', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(27, '105', '10000', 'O', 'Yolanda', 'Engrande', '  Villalva', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(28, '105', '10000', 'O', 'Lic. Ivan Ramon', 'Iba?ez', '  Hernandez', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(29, '105', '10000', 'O', 'NORMA ANG?LICA', 'ITURBE', '  RODRIGUEZ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(30, '105', '10000', 'O', 'LAURA SANDRA', 'LUJANO', '  BALLINA', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(31, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(32, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(33, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(34, '105', '10000', 'O', 'NAVIL', 'GONZALEZ', '  SANCHEZ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(35, '105', '10000', 'O', 'SARA VANESA', 'VEGA', '  RAMIREZ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(36, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(37, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(38, '105', '10000', 'O', 'ARMANDO', 'JASSO', '  ENCASTIN', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(39, '105', '10000', 'O', 'JOSUE HIRAM', 'REYNOSO', '  OROZCO', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(40, '105', '10000', 'O', 'JUANA ELIZABETH', 'MARQUEZ', '  ALVAREZ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(41, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(42, '105', '10000', 'O', '? ? ? ? ? ', '? ? ? ? ? ', '? ? ? ? ? ', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00'),
(43, '105', '10000', 'O', 'ANNET FERNANDA', 'GAMBOA', '  GARCIA', 0, '123', '0000-00-00', '0000-00-00', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acejercicio`
--
ALTER TABLE `acejercicio`
  ADD PRIMARY KEY (`CEJClave`);

--
-- Indices de la tabla `acmenu`
--
ALTER TABLE `acmenu`
  ADD PRIMARY KEY (`CMEClave`);

--
-- Indices de la tabla `acopcser`
--
ALTER TABLE `acopcser`
  ADD PRIMARY KEY (`COSTipSer`,`COSClave`);

--
-- Indices de la tabla `adpermi`
--
ALTER TABLE `adpermi`
  ADD PRIMARY KEY (`PNumePerm`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adpermi`
--
ALTER TABLE `adpermi`
  MODIFY `PNumePerm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
