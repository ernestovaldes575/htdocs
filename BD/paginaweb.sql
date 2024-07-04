-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2024 a las 21:59:27
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
('01', '001', 'Estado Pagina', 'PaginaWeb/Catalogos/EstaPagiList.php'),
('02', '001', 'Creación', 'PaginaWeb/BaneLayeNoti/Alta/PWRegistroInic.php?Param1=01'),
('02', '002', 'Recepción', 'PaginaWeb/BaneLayeNoti/Revision/PWRegistroInic.php?Param1=01'),
('02', '003', 'Análisis', 'PaginaWeb/BaneLayeNoti/Publica/PWRegistroInic.php?Param1=01'),
('02', '004', 'Cierre', 'PaginaWeb/BaneLayeNoti/Cierre/PWRegistroInic.php?Param1=01'),
('03', '001', 'Creación', 'PaginaWeb/BaneLayeNoti/Alta/PWRegistroInic.php?Param1=02'),
('03', '002', 'Recepción', 'PaginaWeb/BaneLayeNoti/Revision/PWRegistroInic.php?Param1=02'),
('03', '003', 'Análisis', 'PaginaWeb/BaneLayeNoti/Publica/PWRegistroInic.php?Param1=02'),
('03', '004', 'Cierre', 'PaginaWeb/BaneLayeNoti/Cierre/PWRegistroInic.php?Param1=02'),
('04', '001', 'Creación', 'PaginaWeb/BaneLayeNoti/Alta/PWRegistroInic.php?Param1=03'),
('04', '002', 'Recepción', 'PaginaWeb/BaneLayeNoti/Revision/PWRegistroInic.php?Param1=03'),
('04', '003', 'Análisis', 'PaginaWeb/BaneLayeNoti/Publica/PWRegistroInic.php?Param1=03'),
('04', '004', 'Cierre', 'PaginaWeb/BaneLayeNoti/Cierre/PWRegistroInic.php?Param1=03'),
('05', '001', 'Creación', 'PaginaWeb/BaneLayeNoti/Alta/PWRegistroInic.php?Param1=04'),
('05', '002', 'Recepción', 'PaginaWeb/BaneLayeNoti/Revision/PWRegistroInic.php?Param1=04'),
('05', '003', 'Análisis', 'PaginaWeb/BaneLayeNoti/Publica/PWRegistroInic.php?Param1=04'),
('05', '004', 'Cierre', 'PaginaWeb/BaneLayeNoti/Cierre/PWRegistroInic.php?Param1=04'),
('06', '001', 'Unidad', '/Intranet/PaginaWeb/Supervisores/SupeUnidRegi.php'),
('06', '002', 'Registro', '/Intranet/PaginaWeb/Supervisores/SuperviDepe.php'),
('07', '001', 'Empresas', '/Intranet/PaginaWeb/DesaEcono/Empresa/EmpresaLista.php'),
('07', '002', 'Empleos', '/Intranet/PaginaWeb/DesaEcono/Empleos/EmpresaList.php'),
('08', '001', 'Registro', '/Intranet/CONAC/ConacClasInic.php?Param1=01'),
('09', '001', 'Personas Extraviadas', '/Intranet/PaginaWeb/Boletin/Boletinlist.php');

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
('01', 'Catalogos'),
('02', 'Baners'),
('03', 'Layers Informativo'),
('04', 'Layers Seguridad'),
('05', 'Noticias'),
('06', 'Supervisores'),
('07', 'Empleo'),
('08', 'CONAC'),
('09', 'Boletin Extravio');

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
  `PNumePerm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `adpermi`
--

INSERT INTO `adpermi` (`PAyuntamiento`, `PConsServ`, `PTipoServ`, `POpciServ`, `PConsulta`, `PAlta`, `PModifica`, `PBaja`, `PNumePerm`) VALUES
('105', 1, '01', '001', 'A', 'A', 'A', 'A', 1),
('105', 1, '02', '001', 'A', 'A', 'A', 'A', 2),
('105', 1, '02', '002', 'A', 'A', 'A', 'A', 3),
('105', 1, '02', '003', 'A', 'A', 'A', 'A', 4),
('105', 1, '02', '004', 'A', 'A', 'A', 'A', 5),
('105', 1, '03', '001', 'A', 'A', 'A', 'A', 6),
('105', 1, '03', '002', 'A', 'A', 'A', 'A', 7),
('105', 1, '03', '003', 'A', 'A', 'A', 'A', 8),
('105', 1, '03', '004', 'A', 'A', 'A', 'A', 9),
('105', 1, '04', '001', 'A', 'A', 'A', 'A', 10),
('105', 1, '05', '001', 'A', 'A', 'A', 'A', 11),
('105', 1, '05', '002', 'A', 'A', 'A', 'A', 12),
('105', 1, '05', '003', 'A', 'A', 'A', 'A', 13),
('105', 1, '05', '004', 'A', 'A', 'A', 'A', 14),
('105', 1, '06', '001', 'A', 'A', 'A', 'A', 15),
('105', 1, '06', '002', 'A', 'A', 'A', 'A', 16),
('105', 1, '07', '001', 'A', 'A', 'A', 'A', 17),
('105', 1, '07', '002', 'A', 'A', 'A', 'A', 18),
('105', 1, '08', '001', 'A', 'A', 'A', 'A', 19),
('105', 1, '09', '001', 'A', 'A', 'A', 'A', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `btboletinextr`
--

CREATE TABLE `btboletinextr` (
  `BConsecut` int(11) NOT NULL,
  `BAyuntamiento` char(3) NOT NULL,
  `BPersoExtra` varchar(80) NOT NULL,
  `BFechExtra` varchar(80) NOT NULL,
  `BFoto` varchar(20) NOT NULL,
  `BSerPubMo` int(11) NOT NULL,
  `BFechModi` date NOT NULL,
  `BEstado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `btboletinextr`
--

INSERT INTO `btboletinextr` (`BConsecut`, `BAyuntamiento`, `BPersoExtra`, `BFechExtra`, `BFoto`, `BSerPubMo`, `BFechModi`, `BEstado`) VALUES
(1, '105', 'Pedro Morales Gonzalez', '2024-03-21', '1_Bole.jpg', 1, '2024-05-27', 'A');

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
-- Estructura de tabla para la tabla `cctipoclas`
--

CREATE TABLE `cctipoclas` (
  `CTCClave` char(2) NOT NULL,
  `CTCDescri` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cctipoclas`
--

INSERT INTO `cctipoclas` (`CTCClave`, `CTCDescri`) VALUES
('01', 'CONAC'),
('02', 'SFRT'),
('03', 'PAE'),
('04', 'ejemplo'),
('05', '');

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
  `PConsecut` int(11) NOT NULL DEFAULT 0,
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
(1, 1, 'aaa', 'M', '', '', '', '', 'E', 1, '2024-04-22', '', 'A'),
(2, 1, '', '', '', '', '', '', 'E', 1, '2024-04-17', '', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etempresa`
--

CREATE TABLE `etempresa` (
  `EConsecut` int(11) NOT NULL DEFAULT 0,
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
(1, '105', 'Implore Ideal S.A. de C.V', 'gggg', 'Daniel Serrano', '55 71 98 12 35', '9 a.m a 5 p.m de lun', 'daniel@implore.com.mx', 'd4n13l', 1, '2023-09-22', 'A');

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
('01', 'Elaboracion www'),
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
('02', 'Layer informativo', 'LayerInfo', 0, 0, 0, 0, 2097150),
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
(23, '', 4, 0, '', '1', '1', 'aa', '0000-00-00', '0000-00-00', '', 'd', '', 'e', 'f', '', 0, '2024-04-03', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(24, '105', 37, 2024, '05', '01', 'Baner', 'Baner', '2024-05-28', '2024-12-31', '24_I.png', 'N', '', '', 'N', '', 1, '2024-05-28', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(25, '105', 37, 2024, '05', '01', 'baner02', 'baner02', '2024-05-28', '2024-12-31', '25_I.png', 'N', '', '', 'N', '', 1, '2024-05-28', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(26, '105', 37, 2024, '05', '01', 'Baner03Modi', 'Baner03Modi', '2024-05-28', '2024-12-31', '26_I.png', 'N', '', '', '', '', 1, '2024-05-28', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(27, '105', 37, 2024, '05', '02', 'info01', 'info01', '2024-05-28', '2024-12-31', '27_I.jpg', 'I', '', '', 'V', '', 1, '2024-05-28', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(28, '105', 37, 2024, '05', '02', 'info02', 'info02', '2024-05-28', '2024-12-31', '28_I.jpeg', 'I', '', '', 'V', '', 1, '2024-05-28', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(30, '105', 37, 2024, '05', '02', 'info03', 'info03', '2024-05-28', '2024-12-31', '30_I.jpeg', 'I', '', '', 'V', '', 1, '2024-05-28', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(31, '105', 37, 2024, '05', '04', 'Lorem ipsum dolor si', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repellendus sint, inventore distinctio ipsam deleniti molestiae culpa molestias. Quas, adipisci.', '2024-05-29', '2024-12-31', '31_I.jpg', 'I', '', '', 'V', '', 1, '2024-05-29', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(32, '105', 37, 2024, '05', '04', 'Lorem ipsum dolor si', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repellendus sint, inventore distinctio ipsam deleniti molestiae culpa molestias. Quas, adipisci.', '2024-05-29', '2024-12-31', '32_I.jpg', 'I', '', '', 'V', '', 1, '2024-05-29', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(33, '105', 37, 2024, '05', '04', 'Lorem ipsum dolor si', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repellendus sint, inventore distinctio ipsam deleniti molestiae culpa molestias. Quas, adipisci.', '2024-05-29', '2024-12-31', '33_I.jpg', 'I', '', '', 'V', '', 1, '2024-05-29', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(34, '105', 37, 2024, '05', '03', 'Ejemplo01', 'Ejemplo01', '2024-05-31', '2024-12-31', '34_I.jpeg', 'I', '', '', 'V', '', 1, '2024-05-31', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(35, '105', 37, 2024, '05', '03', 'Ejemplo02', 'Ejemplo02', '2024-05-31', '2024-12-31', '35_I.jpeg', 'I', '', '', 'V', '', 1, '2024-05-31', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A'),
(36, '105', 37, 2024, '05', '03', 'Ejemplo03', 'Ejemplo03', '2024-05-31', '2024-12-31', '36_I.jpeg', 'I', '', '', 'V', '', 1, '2024-05-31', -1, NULL, -1, NULL, -1, NULL, -1, NULL, '01', 'A');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stdire`
--

CREATE TABLE `stdire` (
  `CAyuntamiento` char(3) NOT NULL,
  `CTipo` char(1) NOT NULL,
  `CNumero` int(11) NOT NULL,
  `CNombre` varchar(80) NOT NULL,
  `CCargo` varchar(80) NOT NULL,
  `CTelefono` varchar(25) NOT NULL,
  `CCorreo` varchar(40) NOT NULL,
  `CImagen` varchar(50) NOT NULL,
  `CFondo` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `stdire`
--

INSERT INTO `stdire` (`CAyuntamiento`, `CTipo`, `CNumero`, `CNombre`, `CCargo`, `CTelefono`, `CCorreo`, `CImagen`, `CFondo`) VALUES
('105', 'D', 1, 'Ernesto Palma Mejía', 'SECRETARÍA DEL AYUNTAMIENTO', '(722)1 57 85 07 ext 129', 'secretaria.ayuntamiento@zinacantepec.gob', 'SriAyto.webp', 'color01'),
('105', 'D', 2, 'Oscar Bernal Torres', 'TESORERÍA MUNICIPAL', '(722)2187019', 'tesoreria.municipal@zinacantepec.gob.mx', 'tesorero.webp', 'color01'),
('105', 'D', 4, 'Sandra Jaqueline Mondragón Mendoza', 'DIRECCIÓN DE ADMINISTRACIÓN', '(722)9177206', 'administracion@zinacantepec.gob.mx', 'administracion.webp', 'color03'),
('105', 'D', 5, 'Valeria Toledo Flores', 'CONTRALORÍA MUNICIPAL', '(722)9177206', 'contraloria.municipal@zinacantepec.gob.m', 'contralora.webp', 'color03'),
('105', 'D', 6, 'Arturo Galicia Carballar', 'DIRECCIÓN JURÍDICA', ' (722)9177206', 'cordinacion.juridica@zinacantepec.gob.mx', 'juridico.webp', 'color03'),
('105', 'D', 7, 'Brenda Selene Hernández López', 'UNIDAD DE TRANSPARENCIA', '(722) 917 84 73', 'transparencia@zinacantepec.gob.mx', 'mejoraregulatoria.webp', 'color03'),
('105', 'D', 8, 'Ismael Enrique Terrón López', 'UIPPE', '(722) 917 84 73', 'uippe@zinacantepec.gob.mx', 'uippe.webp', 'color01'),
('105', 'D', 9, 'Liliana Estefani Cruz Bacilio', 'MEJORA REGULATORIA', '(722)2188241', 'mejora.regulatoria@zinacantepec.gob.mx', 'mejoraregulatoria.webp', 'color03'),
('105', 'D', 10, 'Víctor Hugo García Esquivel', 'DIRECCIÓN DE GOBERNACIÓN', '(722) 917 84 73', 'gobernacion@zinacantepec.gob.mx', 'gob.webp', 'color01'),
('105', 'D', 11, 'Roberto Germán Flores Patoni', 'DESARROLLO ECONÓMICO', '(722)1903771', 'desarrollo.economico@zinacantepec.gob.mx', 'deconomico.webp', 'color01'),
('105', 'D', 12, 'Uriel Pedro Ramírez Zarza', 'SERVICIOS PÚBLICOS', '(722)917 7188', 'servicios.publicos@zinacantepec.gob.mx', 'serviciosp.webp', 'color03'),
('105', 'D', 13, 'Dayana Fabiola Julio Pérez', 'MEDIO AMBIENTE', '(722) 917 84 73', 'medio.ambiente@zinacantepec.gob.mx', 'medioambiente.webp', 'color03'),
('105', 'D', 14, 'Gabriel Valdez Albarrán', 'DIRECCIÓN DE DESARROLLO SOCIAL', '(722)2188241', 'atencion.ciudadana@zinacantepec.gob.mx', 'dsocial.webp', 'color01'),
('105', 'D', 15, 'Jessica Arroyo Ramírez', 'CULTURA Y TURISMO', '(722) 1903691', 'turismo.cultura@zinacantepec.gob.mx', 'turismo.webp', 'color03'),
('105', 'D', 16, 'María del Carmen Sánchez Carbajal', 'DIRECCIÓN DE EDUCACIÓN', '(722) 917 84 57', 'educacion@zinacantepec.gob.mx', 'deducacion.webp', 'color03'),
('105', 'D', 17, 'Aldo Octavio Peña Vilchis', 'DIRECCIÓN DE OBRAS PÚBLICAS', '(722)9177206', 'obras.publicas@zinacantepec.gob.mx', 'dobras.webp', 'color03'),
('105', 'D', 18, 'Humberto Delgado Fabela', 'DESARROLLO TERRITORIAL Y URBANO', '(722)2180686', 'desarrollo.urbano@zinacantepec.gob.mx', 'durbano.webp', 'color01'),
('105', 'D', 19, 'Patricia Luna Delgado', 'DESARROLLO METROPOLITANO Y MOVILIDAD', '(722) 917 84 73', 'desarrollo.metropolitano@zinacantepec.go', 'patricia.webp', 'color03'),
('105', 'D', 20, 'Guillermo Colín Jaramíllo', 'COORDINACIÓN MUNICIPAL DE PROTECCIÓN CIVIL Y BOMBEROS', '(722) 132 0818', 'proteccion.civil@zinacantepec.gob.mx', 'dbomberos.webp', 'color01'),
('105', 'D', 21, 'Héctor Hugo Osorno Reyes', 'SEGURIDAD PÚBLICA Y TRÁNSITO', '722-190-3502', 'seguridad.publica@zinacantepec.gob.mx', 'seguridad.webp', 'color03'),
('105', 'I', 1, 'Allexae Trejo Velázquez', 'DIRECCIÓN MUNICIPAL DE LA MUJER', '(722)9177207', 'instituto.mujer@zinacantepec.gob.mx', 'mujer.webp', 'color03'),
('105', 'I', 2, 'Luis Fernando Ortiz Hill', 'INSTITUTO DE LA JUVENTUD', '(722)9177207', 'instituto.juventud@zinacantepec.gob.mx', 'dinjuve.webp', 'color01'),
('105', 'O', 1, 'Jessica Rios Lara', 'Presidenta Honorifica del DIF', '(722)9177207', 'imcufidez@zinacantepec.gob.mx', 'dif.webp', 'color01'),
('105', 'O', 2, 'Iván Saucedo Sánchez', 'OPDAPAS', '(722) 218 3290', 'zinacantepecopdapas@gmail.com', 'dopdapas.webp', 'color01'),
('105', 'O', 3, 'Daniel Agallo Vicent', 'IMCUFIDEZ', '(722) 9177206', 'imcufidez@zinacantepec.gob.mx', 'incu.webp', 'color01');

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
  `SConsecut` int(11) NOT NULL,
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
(3, '105', 97, '006115', 'Antonio Davila Zarza', 'Inspector', '3_Insp.png', 1, '2023-09-21', 'A'),
(4, '105', 97, '04586', 'Horacio Reyes Ramirez', 'Lider', '4_Insp.jpg', 1, '2024-03-20', 'A'),
(5, '105', 97, '', '', '', '', 1, '2024-03-21', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stsupeunid`
--

CREATE TABLE `stsupeunid` (
  `SAyuntamiento` char(3) NOT NULL,
  `SUnidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `stsupeunid`
--

INSERT INTO `stsupeunid` (`SAyuntamiento`, `SUnidad`) VALUES
('105', 97),
('105', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acopcser`
--
ALTER TABLE `acopcser`
  ADD PRIMARY KEY (`COSTipSer`,`COSClave`);

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
-- Indices de la tabla `btboletinextr`
--
ALTER TABLE `btboletinextr`
  ADD PRIMARY KEY (`BConsecut`);

--
-- Indices de la tabla `cctipoclas`
--
ALTER TABLE `cctipoclas`
  ADD KEY `CTCClave` (`CTCClave`);

--
-- Indices de la tabla `edplaza`
--
ALTER TABLE `edplaza`
  ADD PRIMARY KEY (`PConsecut`);

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
-- Indices de la tabla `stcabidire`
--
ALTER TABLE `stcabidire`
  ADD KEY `CAyuntamiento` (`CAyuntamiento`);

--
-- Indices de la tabla `stsupervisor`
--
ALTER TABLE `stsupervisor`
  ADD PRIMARY KEY (`SConsecut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adpermi`
--
ALTER TABLE `adpermi`
  MODIFY `PNumePerm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `btboletinextr`
--
ALTER TABLE `btboletinextr`
  MODIFY `BConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ptpagina`
--
ALTER TABLE `ptpagina`
  MODIFY `PConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `ptserpub`
--
ALTER TABLE `ptserpub`
  MODIFY `SConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stsupervisor`
--
ALTER TABLE `stsupervisor`
  MODIFY `SConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
