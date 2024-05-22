-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2024 a las 01:02:16
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
-- Base de datos: `comsocial`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acopcser`
--

INSERT INTO `acopcser` (`COSTipSer`, `COSClave`, `COSDescripcion`, `COSDireccion`) VALUES
('01', '001', 'Creación', 'ComSocial/PaginaWeb/Alta/PWRegistroInic.php?Param1=01'),
('02', '001', 'Creación', 'ComSocial/PaginaWeb/Alta/PWRegistroInic.php?Param1=02'),
('03', '001', 'Creación', 'ComSocial/PaginaWeb/Alta/PWRegistroInic.php?Param1=03'),
('04', '001', 'Creación', 'ComSocial/PaginaWeb/Alta/PWRegistroInic.php?Param1=04'),
('05', '001', 'Unidad', '/Intranet/ComSocial/Supervisores/SupeUnidRegi.php'),
('07', '001', 'Registro', '/Intranet/CONAC/ConacClasInic.php?Param1=01'),
('01', '002', 'Revición', 'ComSocial/PaginaWeb/Revision/PWRegistroInic.php?Param1=01'),
('02', '002', 'Revicion', 'ComSocial/PaginaWeb/Revision/LayNotTriInic.php?Param1=02'),
('03', '002', 'Revicion', 'ComSocial/PaginaWeb/Revision/LayNotTriInic.php?Param1=04'),
('04', '002', 'Revicion', 'ComSocial/PaginaWeb/Revision/LayNotTriInic.php?Param1=04'),
('05', '002', 'Registro', '/Intranet/ComSocial/Supervisores/SuperviDepe.php'),
('01', '003', 'Publicación', 'ComSocial/PaginaWeb/Publica/LayNotTriInic.php?Param1=01'),
('02', '003', 'Publicacion', 'ComSocial/PaginaWeb/Publica/LayNotTriInic.php?Param1=02'),
('04', '003', 'Publicacion', 'ComSocial/PaginaWeb/Publica/LayNotTriInic.php?Param1=04'),
('01', '004', 'Cierre', 'ComSocial/PaginaWeb/Cierre/LayNotTriInic.php?Param1=01'),
('02', '004', 'Cierre', 'ComSocial/PaginaWeb/Cierre/LayNotTriInic.php?Param1=02'),
('03', '004', 'Cierre', 'ComSocial/PaginaWeb/Cierre/LayNotTriInic.php?Param1=03'),
('04', '004', 'Cierre', 'ComSocial/PaginaWeb/Cierre/LayNotTriInic.php?Param1=04');

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
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `edad`) VALUES
(1, 'Horaacio Reyes', 52),
(2, 'Jorge', 52),
(3, 'Daniela', 19),
(5, 'Gabriela', 23),
(8, 'Erenesto', 23),
(9, 'Claudia', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ccclasifica`
--

CREATE TABLE `ccclasifica` (
  `CCLTipoDocu` char(2) NOT NULL,
  `CCLClave` char(2) NOT NULL,
  `CCLDescripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estructura de tabla para la tabla `ccsubcalsifica`
--

CREATE TABLE `ccsubcalsifica` (
  `CSCClasifi` char(2) NOT NULL,
  `CSCClave` char(2) NOT NULL,
  `CSCDescripcion` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ccsubcalsifica`
--

INSERT INTO `ccsubcalsifica` (`CSCClasifi`, `CSCClave`, `CSCDescripcion`) VALUES
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
  `CTCDescripcion` varchar(30) NOT NULL,
  `CTCNivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cctipoclas`
--

INSERT INTO `cctipoclas` (`CTCClave`, `CTCDescripcion`, `CTCNivel`) VALUES
('CP', 'Cuenta Publica', 1),
('P1', 'Primer Trimestre', 2),
('P2', 'Segundo trimestre', 2),
('P3', 'Tercer Trimestre', 2),
('P4', 'Cuarto Trimestre', 2),
('PA', 'PAE', 1),
('PR', 'Presupuesto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cctipodocu`
--

CREATE TABLE `cctipodocu` (
  `CTDClave` char(2) NOT NULL,
  `CTDDescri` varchar(30) NOT NULL,
  `CTDCarpeta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cctipodocu`
--

INSERT INTO `cctipodocu` (`CTDClave`, `CTDDescri`, `CTDCarpeta`) VALUES
('', '', ''),
('01', 'Conac', 'Conac'),
('02', 'SRTF', 'srft'),
('03', 'PAE', 'pae');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cestapagi`
--

CREATE TABLE `cestapagi` (
  `CEPClave` char(2) NOT NULL,
  `CEPDescri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cestapagi`
--

INSERT INTO `cestapagi` (`CEPClave`, `CEPDescri`) VALUES
('01', 'Elaboracion'),
('02', 'Envio de Solicitud'),
('03', 'Recepcion de Sol.'),
('04', 'Aignar SP Revisar'),
('05', 'Enviar Sol para Revisar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctconac`
--

CREATE TABLE `ctconac` (
  `CConsect` int(11) NOT NULL,
  `CAyuntamiento` int(11) NOT NULL,
  `CEjercicio` int(11) NOT NULL,
  `CTipo` char(3) NOT NULL,
  `CClasifica` varchar(11) NOT NULL,
  `Csubclasifi` varchar(30) NOT NULL,
  `CNumeCona` int(11) NOT NULL,
  `CDescDocu` varchar(801) NOT NULL,
  `CArchivo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estructura de tabla para la tabla `etsupeunid`
--

CREATE TABLE `etsupeunid` (
  `SAyuntamiento` char(3) NOT NULL,
  `SUnidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `etsupeunid`
--

INSERT INTO `etsupeunid` (`SAyuntamiento`, `SUnidad`) VALUES
('105', 97);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcdonmost`
--

CREATE TABLE `pcdonmost` (
  `CDMClave` char(1) NOT NULL,
  `CDMDescrip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pcdonmost`
--

INSERT INTO `pcdonmost` (`CDMClave`, `CDMDescrip`) VALUES
('N', 'No Mostrar'),
('V', 'Ventana'),
('P', 'Pagina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcmostrar`
--

CREATE TABLE `pcmostrar` (
  `CMOClave` char(1) NOT NULL,
  `CMODescrip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pcmostrar`
--

INSERT INTO `pcmostrar` (`CMOClave`, `CMODescrip`) VALUES
('D', 'Imag/Docu'),
('L', 'Liga'),
('N', 'No Mostrar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pctipodocu`
--

CREATE TABLE `pctipodocu` (
  `CTDClave` char(2) NOT NULL,
  `CTDDescrpcion` varchar(30) NOT NULL,
  `CTDCarpeta` varchar(30) NOT NULL,
  `CTDAncImgPag` int(11) NOT NULL,
  `CTDLagImgPag` int(11) NOT NULL,
  `CTDAncImgSub` int(11) NOT NULL,
  `CTDLarImgSub` int(11) NOT NULL,
  `CTDTamImgSub` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pctipodocu`
--

INSERT INTO `pctipodocu` (`CTDClave`, `CTDDescrpcion`, `CTDCarpeta`, `CTDAncImgPag`, `CTDLagImgPag`, `CTDAncImgSub`, `CTDLarImgSub`, `CTDTamImgSub`) VALUES
('01', 'Baners', 'Baners', 1000, 250, 1000, 0, '0'),
('02', 'Layer informativo', 'LayerInfo', 0, 0, 0, 0, '0'),
('03', 'Layer de seguridad', 'LayerSegu', 0, 0, 0, 0, '0'),
('04', 'Noticias', 'Noticias', 0, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcverdoclig`
--

CREATE TABLE `pcverdoclig` (
  `CVIClave` char(1) NOT NULL,
  `CVIDescrip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pcverdoclig`
--

INSERT INTO `pcverdoclig` (`CVIClave`, `CVIDescrip`) VALUES
('N', 'Nada'),
('P', 'Pagina'),
('V', 'Ventana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcverinfor`
--

CREATE TABLE `pcverinfor` (
  `CVIClave` char(1) NOT NULL,
  `CVIDescrip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pcverinfor`
--

INSERT INTO `pcverinfor` (`CVIClave`, `CVIDescrip`) VALUES
('N', 'Nada'),
('P', 'Pagina'),
('V', 'Ventana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `imagen` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `imagen`) VALUES
(1, 'Pelicula 01', 'postre01.jpeg'),
(2, 'Pelicula 02', 'poster02.jpeg'),
(3, 'Pelicula 03', 'postre03.jpeg'),
(4, 'Pelicula 04', 'poster04.jpeg'),
(5, 'ejemplo 02', '2.jpg'),
(6, 'ejemplo 03', '3.png'),
(7, '', '3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scmedidas`
--

CREATE TABLE `scmedidas` (
  `CMEClave` char(2) NOT NULL,
  `CMEBytes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `scmedidas`
--

INSERT INTO `scmedidas` (`CMEClave`, `CMEBytes`) VALUES
('00', 0),
('02', 2097152),
('03', 3145728),
('04', 4194304),
('05', 5242880),
('06', 6291456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sctipodocu`
--

CREATE TABLE `sctipodocu` (
  `CTDClave` char(2) NOT NULL,
  `CTDDescrpcion` varchar(30) NOT NULL,
  `CTDCarpeta` varchar(30) NOT NULL,
  `CTDAncImgPag` int(11) NOT NULL,
  `CTDLagImgPag` int(11) NOT NULL,
  `CTDAncImgSub` int(11) NOT NULL,
  `CTDLarImgSub` int(11) NOT NULL,
  `CTDTamImgSub` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sctipodocu`
--

INSERT INTO `sctipodocu` (`CTDClave`, `CTDDescrpcion`, `CTDCarpeta`, `CTDAncImgPag`, `CTDLagImgPag`, `CTDAncImgSub`, `CTDLarImgSub`, `CTDTamImgSub`) VALUES
('01', 'Baners', 'Baners', 1000, 250, 1000, 0, '0'),
('02', 'Layer informativo', 'LayerInfo', 0, 0, 0, 0, '0'),
('03', 'Layer de seguridad', 'LayerSegu', 0, 0, 0, 0, '0'),
('04', 'Noticias', 'Noticias', 0, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stlayers`
--

CREATE TABLE `stlayers` (
  `LConsecut` int(11) NOT NULL,
  `LAyuntamiento` char(3) NOT NULL,
  `LUnidad` int(11) NOT NULL,
  `LEjercicio` int(4) NOT NULL,
  `LMesRegi` char(2) NOT NULL,
  `LTipoDocu` char(2) NOT NULL,
  `LTitulo` varchar(20) NOT NULL,
  `LDescripcion` text NOT NULL,
  `LFechPublI` date DEFAULT NULL,
  `LFechPublF` date DEFAULT NULL,
  `LImagen` varchar(30) NOT NULL,
  `LAbrirLiDoIm` char(1) NOT NULL,
  `LAImagDocu` varchar(30) NOT NULL,
  `LLiga` varchar(50) NOT NULL,
  `LVentRefe` char(1) NOT NULL,
  `LSenaSord` varchar(30) NOT NULL,
  `LSerPubCre` int(11) NOT NULL,
  `LFechAlta` date NOT NULL,
  `LEstaCrea` char(1) NOT NULL,
  `LSerPubRev` int(11) NOT NULL,
  `LFechRevi` date NOT NULL,
  `LEstaRevi` char(1) NOT NULL,
  `LSerPubPub` int(11) NOT NULL,
  `LFechPubl` date NOT NULL,
  `LEstaPubl` char(1) NOT NULL,
  `LSerPubCier` int(11) NOT NULL,
  `LFechaCier` date DEFAULT NULL,
  `LEstaSegu` char(2) NOT NULL,
  `LEstado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stlayers`
--

INSERT INTO `stlayers` (`LConsecut`, `LAyuntamiento`, `LUnidad`, `LEjercicio`, `LMesRegi`, `LTipoDocu`, `LTitulo`, `LDescripcion`, `LFechPublI`, `LFechPublF`, `LImagen`, `LAbrirLiDoIm`, `LAImagDocu`, `LLiga`, `LVentRefe`, `LSenaSord`, `LSerPubCre`, `LFechAlta`, `LEstaCrea`, `LSerPubRev`, `LFechRevi`, `LEstaRevi`, `LSerPubPub`, `LFechPubl`, `LEstaPubl`, `LSerPubCier`, `LFechaCier`, `LEstaSegu`, `LEstado`) VALUES
(13, '105', 37, 2023, '10', '01', 'Palacio', 'Ayuntamiento de Zinacantepec', '2022-01-01', '2024-12-31', '13_I.png', 'N', '', '', 'N', 'N', 1, '2023-10-04', 'C', -1, '0000-00-00', 'P', 0, '0000-00-00', 'P', -1, '0000-00-00', '01', 'A'),
(14, '105', 37, 2023, '10', '01', 'Palacio', 'Palacio Municipal', '2022-01-01', '2024-12-31', '14_I.jpg', 'N', '', '', 'N', '', 1, '2023-10-04', 'C', -1, '0000-00-00', 'P', 0, '0000-00-00', 'P', -1, '0000-00-00', '01', 'A'),
(15, '105', 37, 2023, '11', '01', 'Fuente', 'Fuente de Palacio', '2022-01-01', '2024-12-31', '', 'N', '', 'paso asa', 'N', '', 1, '2023-11-11', 'C', -1, '0000-00-00', 'P', -1, '0000-00-00', 'P', -1, '0000-00-00', '01', 'A'),
(16, '105', 37, 2023, '11', '02', 'Ejemplo 01', 'Ejemplo 01', '2022-01-01', '2023-12-31', '', 'I', '', '', 'N', '', 1, '2023-11-12', 'C', -1, '0000-00-00', 'P', -1, '0000-00-00', 'P', -1, '0000-00-00', '01', 'A'),
(17, '105', 37, 2024, '1', '01', 'Reyes Contadoro', 'Los Reyes Magos en Contadero', '2024-01-27', '2024-01-27', '17_I.jpg', 'N', '', 'wjwmplo', 'N', '', 1, '2024-01-11', 'C', -1, '0000-00-00', 'P', -1, '0000-00-00', 'P', -1, '0000-00-00', '01', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `streporte`
--

CREATE TABLE `streporte` (
  `RConsecut` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`COSClave`,`COSTipSer`);

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
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ccclasifica`
--
ALTER TABLE `ccclasifica`
  ADD PRIMARY KEY (`CCLTipoDocu`,`CCLClave`),
  ADD UNIQUE KEY `CCLTipoDocu` (`CCLTipoDocu`,`CCLClave`),
  ADD KEY `CCLTipoDocu_2` (`CCLTipoDocu`,`CCLClave`),
  ADD KEY `CCLTipoDocu_3` (`CCLTipoDocu`,`CCLClave`);

--
-- Indices de la tabla `ccsubcalsifica`
--
ALTER TABLE `ccsubcalsifica`
  ADD PRIMARY KEY (`CSCClasifi`,`CSCClave`);

--
-- Indices de la tabla `cctipoclas`
--
ALTER TABLE `cctipoclas`
  ADD PRIMARY KEY (`CTCClave`);

--
-- Indices de la tabla `cctipodocu`
--
ALTER TABLE `cctipodocu`
  ADD PRIMARY KEY (`CTDClave`);

--
-- Indices de la tabla `cestapagi`
--
ALTER TABLE `cestapagi`
  ADD PRIMARY KEY (`CEPClave`);

--
-- Indices de la tabla `ctconac`
--
ALTER TABLE `ctconac`
  ADD PRIMARY KEY (`CConsect`);

--
-- Indices de la tabla `pcmostrar`
--
ALTER TABLE `pcmostrar`
  ADD PRIMARY KEY (`CMOClave`);

--
-- Indices de la tabla `pcverinfor`
--
ALTER TABLE `pcverinfor`
  ADD PRIMARY KEY (`CVIClave`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `scmedidas`
--
ALTER TABLE `scmedidas`
  ADD PRIMARY KEY (`CMEClave`);

--
-- Indices de la tabla `sctipodocu`
--
ALTER TABLE `sctipodocu`
  ADD PRIMARY KEY (`CTDClave`);

--
-- Indices de la tabla `stlayers`
--
ALTER TABLE `stlayers`
  ADD UNIQUE KEY `LConsecut` (`LConsecut`);

--
-- Indices de la tabla `streporte`
--
ALTER TABLE `streporte`
  ADD PRIMARY KEY (`RConsecut`);

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
  MODIFY `PNumePerm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ctconac`
--
ALTER TABLE `ctconac`
  MODIFY `CConsect` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `stlayers`
--
ALTER TABLE `stlayers`
  MODIFY `LConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `streporte`
--
ALTER TABLE `streporte`
  MODIFY `RConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stsupervisor`
--
ALTER TABLE `stsupervisor`
  MODIFY `SConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
