-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2024 a las 21:23:54
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
-- Base de datos: `paginaweb`
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
('01', '001', 'Creación', 'PaginaWeb/BaneLayeNoti/Alta/PWRegistroInic.php?Param1=01'),
('01', '002', 'Recepción', 'PaginaWeb/BaneLayeNoti/Revision/PWRegistroInic.php?Param1=01'),
('01', '003', 'Análisis', 'PaginaWeb/BaneLayeNoti/Publica/PWRegistroInic.php?Param1=01'),
('01', '004', 'Cierre', 'PaginaWeb/BaneLayeNoti/Cierre/PWRegistroInic.php?Param1=01'),
('02', '001', 'Creación', 'PaginaWeb/BaneLayeNoti/Alta/PWRegistroInic.php?Param1=02'),
('02', '002', 'Recepción', 'PaginaWeb/BaneLayeNoti/Revision/PWRegistroInic.php?Param1=02'),
('02', '003', 'Análisis', 'PaginaWeb/BaneLayeNoti/Publica/PWRegistroInic.php?Param1=02'),
('02', '004', 'Cierre', 'PaginaWeb/BaneLayeNoti/Cierre/PWRegistroInic.php?Param1=02'),
('03', '001', 'Creación', 'PaginaWeb/BaneLayeNoti/Alta/PWRegistroInic.php?Param1=03'),
('03', '002', 'Recepción', 'PaginaWeb/BaneLayeNoti/Revision/PWRegistroInic.php?Param1=03'),
('03', '003', 'Análisis', 'PaginaWeb/BaneLayeNoti/Publica/PWRegistroInic.php?Param1=03'),
('03', '004', 'Cierre', 'PaginaWeb/BaneLayeNoti/Cierre/PWRegistroInic.php?Param1=03'),
('04', '001', 'Creación', 'PaginaWeb/BaneLayeNoti/Alta/PWRegistroInic.php?Param1=04'),
('04', '002', 'Recepción', 'PaginaWeb/BaneLayeNoti/Revision/PWRegistroInic.php?Param1=04'),
('04', '003', 'Análisis', 'PaginaWeb/BaneLayeNoti/Publica/PWRegistroInic.php?Param1=04'),
('04', '004', 'Cierre', 'PaginaWeb/BaneLayeNoti/Cierre/PWRegistroInic.php?Param1=04'),
('05', '001', 'Unidad', '/Intranet/ComSocial/Supervisores/SupeUnidRegi.php'),
('05', '002', 'Registro', '/Intranet/ComSocial/Supervisores/SuperviDepe.php'),
('07', '001', 'Registro', '/Intranet/CONAC/ConacClasInic.php?Param1=01');

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
('01', 'Baners'),
('02', 'Layers Informativo'),
('03', 'Layers Seguridad'),
('04', 'Noticias'),
('05', 'Supervisores'),
('06', 'Empresas'),
('07', 'CONAC');

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
('105', 1, '01', '001', 'A', 'A', 'A', 'A', 1),
('105', 1, '02', '001', 'A', 'A', 'A', 'A', 2),
('105', 1, '03', '001', 'A', 'A', 'A', 'A', 3),
('105', 1, '04', '001', 'A', 'A', 'A', 'A', 4),
('105', 1, '02', '002', 'A', 'A', 'A', 'A', 5),
('105', 1, '02', '003', 'A', 'A', 'A', 'A', 6),
('105', 1, '02', '004', 'A', 'A', 'A', 'A', 7),
('105', 1, '01', '002', 'A', 'A', 'A', 'A', 8),
('105', 1, '01', '003', 'A', 'A', 'A', 'A', 9),
('105', 1, '01', '004', 'A', 'A', 'A', 'A', 10),
('105', 1, '04', '002', 'A', 'A', 'A', 'A', 11),
('105', 1, '04', '003', 'A', 'A', 'A', 'A', 12),
('105', 1, '04', '004', 'A', 'A', 'A', 'A', 13),
('105', 1, '05', '001', 'A', 'A', 'A', 'A', 14),
('105', 1, '05', '002', 'A', 'A', 'A', 'A', 15),
('105', 1, '07', '001', 'A', 'A', 'A', 'A', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ccclasifica`
--

CREATE TABLE `ccclasifica` (
  `CCLTipoDocu` char(2) NOT NULL,
  `CCLClave` char(2) NOT NULL,
  `CCLDescripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ccclasifica`
--

INSERT INTO `ccclasifica` (`CCLTipoDocu`, `CCLClave`, `CCLDescripcion`) VALUES
('01', '01', '1er Trimestre'),
('01', '02', '2do Trimestre'),
('01', '03', '3er Trimestre'),
('01', '04', '4to Trimestre'),
('01', '05', 'Presupuesto'),
('01', '06', 'Informacion Contable'),
('01', '07', 'Transparencia y Difusion de la'),
('01', '08', 'Ley de Disiplina Financiera'),
('01', '09', 'Cueta Publica'),
('02', '01', '1er Trimestre'),
('02', '02', '2do Trimestre'),
('02', '03', '3er Trimestre'),
('02', '04', '4to Trimestre'),
('02', '05', 'Cierre'),
('03', '01', 'PAE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ccsubclasifica`
--

CREATE TABLE `ccsubclasifica` (
  `CSCClasifi` char(2) NOT NULL,
  `CSCClave` char(2) NOT NULL,
  `CSCDescripcion` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ccsubclasifica`
--

INSERT INTO `ccsubclasifica` (`CSCClasifi`, `CSCClave`, `CSCDescripcion`) VALUES
('01', '01', 'Estado de Actividades'),
('01', '02', 'Estado de la Situción Financiera'),
('01', '03', 'Estado de Cambios en la Situación Financiera'),
('01', '04', 'Estado de Variación en la hacienda Pública'),
('02', '1', 'Clasificación Por Objeto de Gasto'),
('02', '2', 'stado Analitico de Egresos por Clasificación Económica'),
('03', '1', 'BALANCE PRESUPUESTARIO-LDF'),
('03', '2', 'ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION ADMINISTRATIVA '),
('04', '1', 'Programas con Recursos Concurrentes por Ordenes de Gobierno.'),
('04', '2', 'Seguimiento a Recursos Federales Ejercicio del Gasto FORTAMUN.'),
('1', '5', 'Estado de Flujo de Efectivo'),
('1', '6', 'Notas a los Estados Financieros'),
('1', '7', 'Estado Analítico del Activo'),
('1', '8', 'Estado Analítico de Deuda y Otros Pasivos'),
('2', '3', 'Estado Analitico de Egresos por Clasificacion Program?tica'),
('2', '4', 'Estado Analitico de Egresos por Clasificación Administrativa'),
('2', '5', 'Estado Analitico de Egresos por Clasificación Funcional'),
('2', '6', 'Estado Analítico de Ingresos'),
('2', '7', 'Estado Comparativo presupuestal de Egresos'),
('2', '8', 'Estado Comparativo presupuestal de Ingresos'),
('3', '3', 'ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION FUNCIONAL'),
('3', '4', 'ESTADO ANALITICO DEL P.EGRESOS DETALLADO POR OBJETO DE GASTO'),
('3', '5', 'ESTADO ANAL?TICO DE DE INGRESOS DETALLADO -LDF'),
('4', '3', 'Seguimiento de Recursos Federales Destino del Gasto FAIS.'),
('4', '4', 'Ejercicio y Destino de Gasto Federalizado y Reintegros.'),
('4', '5', 'Avance Aplicacion Recursos Asignados a Seguridad Publica.'),
('4', '6', 'Obligaciones pagadas o garantizadas con Fondos Federales.'),
('4', '7', 'Montos Pagados por Ayudas y Subsidios.'),
('4', '8', 'Difusion de los Resultados de las Evaluaciones.'),
('4', '9', 'Informe sobre pasivos contingentes'),
('5', '1', 'Estado de Actividades'),
('5', '2', 'Estado de la Situci?n Financiera'),
('5', '3', 'Estado de Cambios en la Situaci?n Financiera'),
('5', '4', 'Estado de Variaci?n en la hacienda P?blica'),
('5', '5', 'Estado de Flujo de Efectivo'),
('5', '6', 'Notas a los Estados Financieros'),
('5', '7', 'Estado Anal?tico del Activo'),
('5', '8', 'Estado Anal?tico de Deuda y Otros Pasivos'),
('5', '9', 'INFORME SOBRE PASIVOS CONTINGENTES'),
('50', '1', 'ACUSE OFICIO CUENTA PUBLICA'),
('50', '10', 'Notas a los estados financieros'),
('50', '11', ' Estado analitico de la deuda y otros pasivos'),
('50', '12', 'Estado analitico de egresos clasificacion administrativa'),
('50', '13', 'Estado analitico de egresos clasificacion economica'),
('50', '14', 'Estado analitico de egresos clasificacion objeto del gasto'),
('50', '15', 'Estado analitico de egresos clasificacion funcional'),
('50', '16', 'Endeudamiento neto'),
('50', '17', 'intereses de la deuda'),
('50', '18', 'inventario de bienes muebles '),
('50', '19', 'inventario de bienes inmuebles 2022'),
('50', '2', 'Estado analitico de ingresos'),
('50', '3', 'Estado analitico del activo'),
('50', '4', 'estado analitico del ejercicio del presupuesto de egreso'),
('50', '5', 'Estado actividades comparativo'),
('50', '6', 'Estado de cambios en la situacion financiera'),
('50', '7', 'Estado de flujos de efectivo'),
('50', '8', 'Estado de situacion financiera comparativo'),
('50', '9', 'Estado de variacion en la hacienda publica'),
('60', '1', 'PAE '),
('60', '2', 'TDR_EVALUACIÓN PROGRAMÁTICA.'),
('60', '3', 'TDR_FORTAMUNDF.'),
('60', '4', 'INFORME DE EVALUACIÓN PP GESTI?N INTEGRAL DE RESIDUOS SOLIDOS'),
('60', '5', 'INFORME DE EVALUACI?N FORMATUNDF'),
('70', '1', 'Norma para armonizar la información adicional a la iniciativa de la Ley de Ingre'),
('70', '2', 'Norma para armonizar la presentación de la informaci?n adicional del Proyecto de'),
('70', '3', 'Norma para establecer la estructura del Calendario de Ingresos base mensual.'),
('70', '4', 'Norma para establecer la estructura del Calendario del Presupuesto de Egresos ba'),
('70', '5', 'Norma para la difusión a la ciudadana de la Ley de Ingresos y del Presupuesto d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctconac`
--

CREATE TABLE `ctconac` (
  `CConsect` int(11) NOT NULL DEFAULT 0,
  `CAyuntamiento` int(11) NOT NULL,
  `CEjercicio` int(11) NOT NULL,
  `CTipo` char(3) NOT NULL,
  `CClasifica` varchar(11) NOT NULL,
  `Csubclasifi` varchar(30) NOT NULL,
  `CNumeCona` int(11) NOT NULL,
  `CDescDocu` varchar(801) NOT NULL,
  `CArchivo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ctconac`
--

INSERT INTO `ctconac` (`CConsect`, `CAyuntamiento`, `CEjercicio`, `CTipo`, `CClasifica`, `Csubclasifi`, `CNumeCona`, `CDescDocu`, `CArchivo`) VALUES
(2, 105, 2024, '01', '01', '01', 1, '-Estado de Actividades.pdf', '1.-Estado de Actividades.pdf'),
(3, 105, 2024, '01', '01', '02', 2, '-Estado de la Situci?n Financiera.pdf', '2.-Estado de la Situci?n Financiera.pdf'),
(4, 105, 2024, '01', '01', '03', 3, '-Estado de Cambios en la Situaci?n Financiera.pdf', '3.-Estado de Cambios en la Situaci?n Financiera.pdf'),
(5, 105, 2024, '01', '01', '04', 4, '-Estado de Variaci?n en la hacienda P?blica.pdf', '4.-Estado de Variaci?n en la hacienda P?blica.pdf'),
(6, 105, 2024, '02', '60', '01', 5, '-Estado de Flujo de Efectivo.pdf', '5.-Estado de Flujo de Efectivo.pdf'),
(7, 105, 2024, '02', '60', '02', 6, '-Notas a los Estados Financieros.pdf', '6.-Notas a los Estados Financieros.pdf'),
(8, 105, 2024, '', '1T', '1 CONTABLE', 7, '-Estado Anal?tico del Activo.pdf', '7.-Estado Anal?tico del Activo.pdf'),
(9, 105, 2024, '', '1T', '1 CONTABLE', 8, '-Estado Anal?tico de Deuda y Otros Pasivos.pdf', '8.-Estado Anal?tico de Deuda y Otros Pasivos.pdf'),
(10, 105, 2024, '', '1T', '1 CONTABLE', 0, 'stado_archivos_con_ruta.txt', 'listado_archivos_con_ruta.txt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcestapagi`
--

CREATE TABLE `pcestapagi` (
  `CEPClave` char(2) NOT NULL,
  `CEPDescri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pcestapagi`
--

INSERT INTO `pcestapagi` (`CEPClave`, `CEPDescri`) VALUES
('01', 'Elaboracion'),
('02', 'Envio de Solicitud'),
('03', 'Recepcion de Sol.'),
('04', 'Aignar SP Revisar'),
('05', 'Enviar Sol para Revisar'),
('06', 'Recibir Solicitud para Rev'),
('07', 'Analisis'),
('08', 'Publicacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcmostdoclig`
--

CREATE TABLE `pcmostdoclig` (
  `CMDClave` char(1) NOT NULL,
  `CMDDescri` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pcmostdoclig`
--

INSERT INTO `pcmostdoclig` (`CMDClave`, `CMDDescri`) VALUES
('A', 'Mostrar Archivo'),
('I', 'Imagen'),
('L', 'Liga'),
('N', 'No Mostra  Documento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pctipodocu`
--

CREATE TABLE `pctipodocu` (
  `CTDClave` char(2) NOT NULL,
  `CTDDescri` varchar(30) NOT NULL,
  `CTDCarpeta` varchar(30) NOT NULL,
  `CTDAncImgPag` int(11) NOT NULL,
  `CTDLagImgPag` int(11) NOT NULL,
  `CTDAncImgSub` int(11) NOT NULL,
  `CTDLarImgSub` int(11) NOT NULL,
  `CTDTamImgSub` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pctipodocu`
--

INSERT INTO `pctipodocu` (`CTDClave`, `CTDDescri`, `CTDCarpeta`, `CTDAncImgPag`, `CTDLagImgPag`, `CTDAncImgSub`, `CTDLarImgSub`, `CTDTamImgSub`) VALUES
('01', 'Baners', 'Baners', 1000, 250, 1000, 0, 2097150),
('02', 'Layer informativo', 'LayerInfo', 1280, 1280, 0, 0, 2097150),
('03', 'Layer de seguridad', 'LayerSegu', 0, 0, 0, 0, 2097150),
('04', 'Noticias', 'Noticias', 650, 370, 800, 560, 2097150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcverdoclig`
--

CREATE TABLE `pcverdoclig` (
  `CVDClave` char(1) NOT NULL,
  `CVDDescrip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pcverdoclig`
--

INSERT INTO `pcverdoclig` (`CVDClave`, `CVDDescrip`) VALUES
('N', 'No Visualizar Documento'),
('P', 'Visualizar en Pagina'),
('V', 'Visualizar en Ventana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ptpagina`
--

CREATE TABLE `ptpagina` (
  `PConsecut` int(11) NOT NULL,
  `PAyuntamiento` char(3) NOT NULL,
  `PUnidad` int(11) NOT NULL,
  `PEjercicio` int(4) NOT NULL,
  `PMesRegi` char(2) NOT NULL,
  `PTipoDocu` char(2) NOT NULL,
  `PTitulo` varchar(20) NOT NULL,
  `PDescripcion` text NOT NULL,
  `PFechPublI` date DEFAULT NULL,
  `PFechPublF` date DEFAULT NULL,
  `PImagenPagi` varchar(30) NOT NULL,
  `PDocuLiga` char(1) NOT NULL,
  `PDocumento` varchar(30) NOT NULL,
  `PLiga` varchar(50) NOT NULL,
  `PVentRefe` char(1) NOT NULL,
  `PSenaSord` varchar(30) NOT NULL,
  `PSerPubCre` int(11) NOT NULL,
  `PFechAlta` date NOT NULL,
  `PSerPubRec` int(11) NOT NULL,
  `PFechReci` date DEFAULT NULL,
  `PSerPubRev` int(11) NOT NULL,
  `PFechRevi` date DEFAULT NULL,
  `PSerPubPub` int(11) NOT NULL,
  `PFechPubl` date DEFAULT NULL,
  `PSerPubCier` int(11) NOT NULL,
  `PFechaCier` date DEFAULT NULL,
  `PEstaSegu` char(2) NOT NULL,
  `PEstado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ptpagina`
--

INSERT INTO `ptpagina` (`PConsecut`, `PAyuntamiento`, `PUnidad`, `PEjercicio`, `PMesRegi`, `PTipoDocu`, `PTitulo`, `PDescripcion`, `PFechPublI`, `PFechPublF`, `PImagenPagi`, `PDocuLiga`, `PDocumento`, `PLiga`, `PVentRefe`, `PSenaSord`, `PSerPubCre`, `PFechAlta`, `PSerPubRec`, `PFechReci`, `PSerPubRev`, `PFechRevi`, `PSerPubPub`, `PFechPubl`, `PSerPubCier`, `PFechaCier`, `PEstaSegu`, `PEstado`) VALUES
(77, '105', 37, 2024, '03', '01', 'Layer01', 'Layer', '2024-03-25', '2024-12-31', '77_I.png', 'N', '', '', '', '', 1, '2024-03-25', -1, NULL, 1, '2024-04-03', -1, NULL, -1, NULL, '08', 'A'),
(78, '105', 37, 2024, '03', '01', 'Layer02', 'layer', '2024-03-25', '2024-12-31', '78_I.png', 'N', '', '', '', '', 1, '2024-03-25', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(79, '105', 37, 2024, '03', '01', 'Layer03', 'Layer', '2024-03-25', '2024-12-31', '79_I.png', 'N', '', '', '', '', 1, '2024-03-25', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(80, '105', 37, 2024, '04', '02', 'Convocatoria Sistema', 'Convocatoriaa', '2024-04-01', '2024-04-30', '80_I.jpeg', 'N', '', '', '', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'B'),
(81, '105', 37, 2024, '04', '02', 'Telecomm', 'Telecomm', '2024-04-01', '2024-04-30', '81_I.jpg', 'I', '81_I.jpg', '', 'V', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(82, '105', 37, 2024, '04', '02', 'Seguridad Pública y ', 'Seguridad Pública y Protección Civil', '2024-04-01', '2024-04-30', '82_I.jpeg', 'I', '82_I.jpeg', '', 'V', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(83, '105', 37, 2024, '04', '02', 'Convocatoria Sistema', 'Convocatoria Sistema Anticorrupción', '2024-04-01', '2024-04-30', '83_I.jpeg', 'I', '83_I.jpeg', '', 'V', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(84, '105', 37, 2024, '04', '02', 'XXXX', 'XXXX', '2024-04-01', '2024-04-30', '84_I.jpeg', 'I', '84_I.jpeg', '', 'V', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'B'),
(85, '105', 37, 2024, '04', '03', 'Carrusel01', 'Carrusel01', '2024-04-01', '2024-04-30', '85_I.jpeg', 'I', '', '', 'V', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(86, '105', 37, 2024, '04', '03', 'Carrusel02', 'Carrusel02', '2024-04-01', '2024-04-30', '86_I.jpeg', 'I', '', '', 'V', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(87, '105', 37, 2024, '04', '03', 'Carrusel03', 'Carrusel04', '2024-04-01', '2024-04-30', '87_I.jpeg', 'I', '', '', 'V', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(88, '105', 37, 2024, '04', '04', 'DETIENEN A PRESUNTOS', 'El Ayuntamiento de #Zinacantepec a través del #IMCUFIDEZ, te invita a la clase nuestra de AUTOCARGAS este sábado 13 de enero en Plaza Estado de México. ', '2024-04-01', '2024-04-30', '88_I.png', 'I', '', '', 'V', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(89, '105', 37, 2024, '04', '04', 'Los uniformados les ', 'Entra de obra, inaguración de obra de pavimentación de calle Morelo ', '2024-04-01', '2024-04-30', '89_I.png', 'I', '', '', 'V', '', 1, '2024-04-01', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ptserpub`
--

CREATE TABLE `ptserpub` (
  `SConsecutivo` int(11) NOT NULL,
  `SAyuntamiento` char(3) NOT NULL,
  `SNombre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ptserpub`
--

INSERT INTO `ptserpub` (`SConsecutivo`, `SAyuntamiento`, `SNombre`) VALUES
(1, '105', 'Iliana'),
(2, '105', 'Angy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `streporte`
--

CREATE TABLE `streporte` (
  `RConsecut` int(11) NOT NULL DEFAULT 0,
  `RAyuntamiento` char(3) NOT NULL,
  `RConsSupe` int(11) NOT NULL,
  `RFechaRepo` date NOT NULL,
  `RHoraRepo` varchar(5) NOT NULL,
  `RLugarEchos` varchar(250) NOT NULL,
  `RReporte` text NOT NULL,
  `RCiudadano` varchar(80) NOT NULL,
  `RServAsiga` varchar(80) NOT NULL,
  `RFechAsig` date NOT NULL,
  `REstaRepo` char(1) NOT NULL,
  `RSerPubMo` int(11) NOT NULL,
  `RFechMovi` date NOT NULL,
  `REstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `streporte`
--

INSERT INTO `streporte` (`RConsecut`, `RAyuntamiento`, `RConsSupe`, `RFechaRepo`, `RHoraRepo`, `RLugarEchos`, `RReporte`, `RCiudadano`, `RServAsiga`, `RFechAsig`, `REstaRepo`, `RSerPubMo`, `RFechMovi`, `REstado`) VALUES
(1, '105', 3, '2023-09-25', '22:44', 'Tienda ,calle pipila no 10', 'pidio soborno', '', '0', '0000-00-00', 'R', 0, '2023-09-25', 0),
(2, '105', 3, '2023-09-26', '10:00', 'Calle pipila 106', 'Extorsion ', 'anonimo', '0', '0000-00-00', 'R', 0, '2023-09-26', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stsupervisor`
--

CREATE TABLE `stsupervisor` (
  `SConsecut` int(11) NOT NULL DEFAULT 0,
  `SAyuntamiento` char(3) NOT NULL,
  `SUnidad` int(11) NOT NULL,
  `SNumeEmpl` varchar(10) NOT NULL,
  `SServPubli` varchar(80) NOT NULL,
  `SCategoria` varchar(80) NOT NULL,
  `SFoto` varchar(20) NOT NULL,
  `SSerPubMo` int(11) NOT NULL,
  `SFechModi` date NOT NULL,
  `SEstado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `stsupervisor`
--

INSERT INTO `stsupervisor` (`SConsecut`, `SAyuntamiento`, `SUnidad`, `SNumeEmpl`, `SServPubli`, `SCategoria`, `SFoto`, `SSerPubMo`, `SFechModi`, `SEstado`) VALUES
(1, '105', 97, '6114', 'Maria del Carmen Guadalupe', 'Inspector', '1_Insp.png', 1, '2023-09-20', 'A'),
(2, '105', 97, '006180', 'Jesus Escalona Jimenez', 'Inspector', '2_Insp.png', 1, '2023-09-21', 'A'),
(3, '105', 97, '006115', 'Antonio Davila Zarza', 'Inspector', '3_Insp.png', 1, '2023-09-21', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acopcser`
--
ALTER TABLE `acopcser`
  ADD PRIMARY KEY (`COSTipSer`,`COSClave`);

--
-- Indices de la tabla `pcmostdoclig`
--
ALTER TABLE `pcmostdoclig`
  ADD PRIMARY KEY (`CMDClave`);

--
-- Indices de la tabla `pctipodocu`
--
ALTER TABLE `pctipodocu`
  ADD PRIMARY KEY (`CTDClave`);

--
-- Indices de la tabla `pcverdoclig`
--
ALTER TABLE `pcverdoclig`
  ADD PRIMARY KEY (`CVDClave`);

--
-- Indices de la tabla `ptpagina`
--
ALTER TABLE `ptpagina`
  ADD PRIMARY KEY (`PConsecut`);

--
-- Indices de la tabla `ptserpub`
--
ALTER TABLE `ptserpub`
  ADD PRIMARY KEY (`SConsecutivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ptpagina`
--
ALTER TABLE `ptpagina`
  MODIFY `PConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `ptserpub`
--
ALTER TABLE `ptserpub`
  MODIFY `SConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
