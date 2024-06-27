-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 20:59:14
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
('01', '002', 'Asignara area', 'Transparencia/FacdeAre/FacdeAreCons.php'),
('01', '003', 'Fracciones', 'Transparencia/Ejercicio.php'),
('01', '001', 'Normatividad Aplicable', 'Transparencia/NormApli/ArtiLista.php');

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
(212, 'ZINACANTEPEC'),
(4632, 'Sindicatura Municipal'),
(4633, 'Primera Regidur?a'),
(4634, 'Segunda Regidur?a'),
(4635, 'Tercer Regidur?a'),
(4636, 'Cuarto Regidur?a'),
(4637, 'Quinta Regidur?a'),
(4638, 'Sexta Regidur?a'),
(4639, 'S?ptima Regidur?a'),
(4640, 'Octava Regidur?a'),
(4641, 'Novena Regidur?a'),
(4642, 'D?cima Regidur?a'),
(4643, 'D?cima Primera Regidur?a'),
(4644, 'D?cimo Segunda Regidur?a'),
(4645, 'D?cimo Tercer Regidur?a'),
(4650, 'Contraloria Municipal'),
(4800, 'Secretar?a del Ayuntamiento'),
(4801, 'Secretar?a Particular'),
(4803, 'Secretar?a T?cnica'),
(4804, 'Unidad de Informaci?n, Planeaci?n, Programaci?n y '),
(4807, 'Tesorer?a Municipal'),
(4808, 'Coordinaci?n de Comunicaci?n Social'),
(4810, 'Direcci?n de Servicios P?blicos'),
(4811, 'Direcci?n de Desarrollo Urbano'),
(4812, 'Direcci?n de Obras P?blicas y Desarrollo Urbano'),
(4813, 'Direcci?n de Administraci?n'),
(4820, 'Direcci?n de Medio Ambiente'),
(4821, 'Direcci?n de Gobierno'),
(4822, 'Direcci?n de Educaci?n, Cultura y Turismo'),
(4823, 'Direcci?n de Desarrollo Econ?mico'),
(4824, 'Direcci?n de Programas Sociales'),
(4825, 'Direcci?n de Seguridad P?blica y Tr?nsito'),
(4826, 'Coordinaci?n Jur?dica'),
(4830, 'Defensor?a Municipal de Derechos Humanos'),
(4833, 'Instituto Municipal de la Mujer'),
(14870, 'Unidad de Transparencia'),
(22432, 'Direcci?n de Desarrollo Metropolitano y Movilidad'),
(22433, 'Coordinaci?n Municipal de Protecci?n Civil'),
(22435, 'Instituto Municipal de la Juventud'),
(22944, 'Coordinaci?n de Log?stica'),
(28233, 'Ayuntamiento'),
(28234, 'Presidencia Municipal'),
(34665, 'Instituto de Cultura F?sica y Deporte'),
(37386, 'DIRECCI?N GENERAL'),
(37387, 'SUBDIRECCI?N DE CULTURA F?SICA Y DEPORTE'),
(37389, 'DEPARTAMENTO DE ACTIVACI?N F?SICA'),
(37390, 'DEPARTAMENTO DE NATACI?N\r'),
(37392, 'DEPARTAMENTO DE FUTBOL Y BASQUETBOL'),
(37393, 'DEPARTAMENTO DE CONTABILIDAD Y TESORER?A'),
(43829, 'SUBDIRECCI?N DE ADMINISTRACI?N Y FINANZAS DEL IMCU'),
(44462, 'Organo Interno de Control'),
(45743, 'Secretar?a T?cnica del Consejo de Seguridad P?blic'),
(54697, 'Direcci?n de Desarrollo Humano y Bienestar Social'),
(57038, 'Direcci?n de Educaci?n y Cultura'),
(57039, 'DIRECCI?N DE TURISMO'),
(57047, 'Instituto Municipal de la Juventud'),
(57084, 'Coordinaci?n General Municipal de Mejora Regulator'),
(58055, 'DIRECCI?N '),
(58057, 'SUBDIRECCI?N '),
(58058, 'SUBDIRECCI?N\r'),
(58064, 'DEPARTAMENTO '),
(58065, 'DEPARTAMENTO '),
(58066, 'DEPARTAMENTO '),
(58074, 'UNIDAD DE INFORMACI?N, PLANEACI?N, PROGRAMACI?N Y '),
(58075, 'CONTRALOR?A'),
(58076, 'Descri');

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
(1, '105', 2024, 48, '92', '03', '', 'A', 0, -1, -1, -1),
(2, '105', 2024, 6, '92', '1', '', 'T', -1, -1, -1, -1),
(3, '105', 2024, 1, '92', '1', '', 'T', -1, -1, -1, -1),
(7, '105', 2024, 5, '92', '1', '', 'T', -1, -1, -1, -1),
(8, '105', 2024, 48, '92', '1', '', 'T', -1, -1, -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttfraccion`
--

CREATE TABLE `ttfraccion` (
  `FFraccion` int(2) DEFAULT NULL,
  `FInciso` int(2) DEFAULT NULL,
  `FSubinciso` varchar(4) DEFAULT NULL,
  `FNormatividad` varchar(133) DEFAULT NULL,
  `FPeriodo` varchar(1) DEFAULT NULL,
  `FSalida` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ttfraccion`
--

INSERT INTO `ttfraccion` (`FFraccion`, `FInciso`, `FSubinciso`, `FNormatividad`, `FPeriodo`, `FSalida`) VALUES
(92, 1, '', 'Normatividad Aplicable', 'T', 'E'),
(92, 2, ' A', 'Estructura Org?nica', 'T', 'N'),
(92, 2, ' B', 'Organigrama', 'T', 'N'),
(92, 3, '', 'Facultades de ?rea', 'T', 'E'),
(92, 4, '', 'Metas y Objetivos de ?rea', 'A', 'E'),
(92, 5, ' A', 'Indicadores Interes P?blico', 'A', 'E'),
(92, 5, ' B', 'Indicadores para Resultados relacionados con temas de Interes P?blico o Trascendecia Social', 'A', 'E'),
(92, 6, ' A', 'Indicadores de  Objetivos y Resultados ', 'A', 'E'),
(92, 6, ' B', 'Matriz de Indicadores de Resultados', 'A', 'E'),
(92, 7, '', 'Directorio de los Servidores P?blicos', 'T', 'E'),
(92, 8, '', 'Remuneraciones', 'T', 'E'),
(92, 9, '', 'Gastos por vi?ticos y gastos de representaci?n', 'T', 'E'),
(92, 10, ' A', 'Plazas Vacantes', 'T', 'E'),
(92, 10, ' B', 'Total de Plazas Vacantes Ocupadas', 'T', 'E'),
(92, 11, '', 'Contrataciones de Servicios Profesionales', 'T', 'E'),
(92, 12, '', 'Perfil de Puestos de Servidores P?blicos', 'T', 'E'),
(92, 13, '', 'Declaraciones Patrimoniales de los Servidores P?blicos', '', ''),
(92, 14, '', 'Programas de Subsidio, estimulos y Apoyos', 'T', 'E'),
(92, 14, ' B', 'Padr?n de Beneficiarios', 'T', 'E'),
(92, 15, '', 'Agenda de Reuniones', 'T', 'E'),
(92, 16, '', 'Domicilio de la Unidad de Transparencia', 'T', 'N'),
(92, 17, '', 'Registro de solicitudes de Acceso a la Informaci?n recibidas y atendidas', 'T', 'E'),
(92, 18, '', 'Convocatorias a concursos para ocupar cargos P?blicos', 'T', 'E'),
(92, 19, '', 'Indices a los expedientes clasificados como reservados', 'T', 'E'),
(92, 20, ' A', 'Normatividad Laboral', 'T', 'E'),
(92, 20, ' B', 'Recursos P?blicos entregados a Sindicatos', 'T', 'E'),
(92, 21, '', 'Informaci?n Curricular y Sanciones Administrativas', 'T', 'E'),
(92, 22, '', 'Servidores P?blicos con Sanciones Administrativas Definitivas', 'T', 'E'),
(92, 23, '', 'Servicios requisitos para acceder a ellos', 'T', 'E'),
(92, 24, '', 'Tramites, requisitos y formatos que ofrecen', 'T', 'E'),
(92, 25, ' A', 'Presupuesto Asignado', 'T', 'E'),
(92, 25, ' B', 'Ejercicio de los Egresos Presupuestarios', 'T', 'E'),
(92, 25, ' C', 'Informacion Financiera de Cuenta P?blica', 'A', 'E'),
(92, 26, '', 'Deuda P?blica', 'A', 'E'),
(92, 27, ' A', 'Programa Anual de Comunicaci?n Social o Equivalente', 'T', 'E'),
(92, 27, ' B', 'Erogaci?n de Recursos por contrataci?n de Servicios', 'N', ''),
(92, 27, ' C', 'Utilizaci?n de Tiempos Oficiales', '', ''),
(92, 27, ' D', 'Mensaje e Hipervinculo a la informaci?n relacionada con los tiempos oficiales', '', ''),
(92, 28, '', 'Resultados de Auditorias Realizadas', 'T', 'E'),
(92, 29, ' A', 'Resultado de Procedimientos de licitaci?n p?blica e invitaci?n cuando menos a tres personas realiza', 'T', 'E'),
(92, 29, ' B', 'Resultados de procedimientos de adjudicaci?n directa', 'T', 'E'),
(92, 30, '', 'Resultado de la dictaminaci?n de los Estados Financierios', 'A', 'E'),
(92, 31, '', 'Personas que usan Recursos P?blicos', '', ''),
(92, 32, '', 'Las conceciones, contratos, convenios, permisos, licencias o autorizaciones otrogadas', 'T', 'E'),
(92, 33, '', 'Informes Emitidos', 'T', 'E'),
(92, 34, '', 'Estadisticas Generales', 'T', 'E'),
(92, 35, ' A', 'Gasto por Capitulo, Concepto y Partida', 'T', 'E'),
(92, 35, ' B', 'Informes financieros, contables, presupuestales', 'T', 'E'),
(92, 36, '', 'Padr?n de Proveedores', 'T', 'E'),
(92, 37, '', 'Convenios de coordinaci?n, de concentraci?n con el sector privado o p?blico', 'T', 'E'),
(92, 38, ' A', 'Inventario de Bienes Muebles', 'S', 'E'),
(92, 38, ' B', 'Inventario de altas practicadas a bienes muebles', 'S', 'E'),
(92, 38, ' C', 'Inventario de bajas practicadas a bienes muebles', 'S', 'E'),
(92, 38, ' D', 'Inventario de Bienes Inmuebles', 'S', 'E'),
(92, 38, ' E', 'Inventario de altas practicadas a bienes inmuebles', 'S', 'E'),
(92, 38, ' F', 'Inventario de bajas practicadas a bienes inmuebles', 'S', 'E'),
(92, 38, ' G', 'Inventario de bienes muebles e inmuebles donados', 'S', 'E'),
(92, 39, ' A', 'Recomendaciones emitidas por la CNDH', 'T', 'E'),
(92, 39, ' B', 'Casos especiales emitidos por la CNDH u otros organismos', 'T', 'E'),
(92, 39, ' C', 'Recomendaciones emitidas por organismos internacionales', 'T', 'E'),
(92, 40, '', 'Resoluciones y Laudos Emitidos', 'T', 'E'),
(92, 41, ' A', 'Mecanismos de participaci?n ciudadana', 'T', 'E'),
(92, 41, ' B', 'Resultado de los mecanismos de participaci?n ', 'T', 'E'),
(92, 42, ' A', 'Programas que ofrecen ', 'T', 'E'),
(92, 42, ' B', 'Tramites para acceder a los programas que ofrecen', 'T', 'E'),
(92, 43, ' A ', 'Informe de Sesiones del comit? de Transparencia', 'S', 'E'),
(92, 43, ' B', 'Informe de Resoluciones del Comit? de Transparencia', 'S', 'E'),
(92, 43, ' C', 'Intgrantes del Comit? de Transparencia', 'S', 'E'),
(92, 43, ' D', 'Calendario de Sesiones ordinarias del Comit? de Transparencia', 'S', 'E'),
(92, 44, ' A', 'Evaluaciones y encuestas a programas financiados con recursos p?blicos', 'A', 'E'),
(92, 44, ' B', 'Encuestas sobre programas financiados con recurso', 'A', 'E'),
(92, 45, '', 'Estados finaciados con recursos p?blicos', 'T', 'E'),
(92, 46, ' A', 'Hipervinculo al listado de pensionados y jubilados', 'T', ''),
(92, 46, ' B', 'Listado de Jubilados y Pensionados y el monto que reciben', '', ''),
(92, 47, ' A', 'Ingresos Recibidos', 'T', ''),
(92, 47, ' B', 'Responsables de recibir, administrar y ejercer los ingresos', 'S', ''),
(92, 48, ' A', 'Donaciones en dinero realizada', 'S', ''),
(92, 48, ' B', 'Donaciones en especie realizadas', 'S', ''),
(92, 49, '', 'Cat?logo de disposici?n y gu?a de archivo documental', 'A', ''),
(92, 50, '', 'Actas de consejo consultivo ', '', ''),
(92, 50, ' B', 'Opiniones y recomendaciones del consejo consultivo', '', ''),
(92, 51, ' A', 'Solicitudes de intervenci?n de comunicaciones', '', ''),
(92, 51, ' B', 'Solicitudes de registros de comunicaciones y de registro de localizaci?n geografica', '', ''),
(92, 51, ' C', 'Mensaje ', '', ''),
(92, 52, ' A', 'Informaci?n de interes p?blico ', 'T', ''),
(92, 52, ' B', 'Preguntas frecuentes', 'T', ''),
(92, 52, ' C', 'Transparencia Proactiva', 'T', ''),
(93, 1, '', 'Tablas de aplicabilidad ', 'A', ''),
(94, 1, ' A1', 'Hiperv?nculo al plan nacional de desarrollo', 'A', ''),
(94, 1, ' A2', 'Plan de desarrollo', 'A', ''),
(94, 1, ' B1', 'Presupuesto de egresos', 'A', ''),
(94, 1, ' B2', 'Egreos y formulas de distribuci?n de recursos', 'A', ''),
(94, 1, ' C1', 'Hipervinculo al listado de expropiaciones', '', ''),
(94, 1, ' C2', 'Listado de exproipaciones', '', ''),
(94, 1, ' D1', 'Hipervinculo a las cancelaciones y condonaciones', 'T', ''),
(94, 1, ' D2', 'Coontribuyentes que recibieron cancelaci?n o condonaci?n de cr?ditos fiscales', 'T', ''),
(94, 1, 'D3', 'Estadisticas sobre conexiciones ', 'T', ''),
(94, 1, ' E1', 'Hipervinculo a la informaci?n de los corredores ', 'T', ''),
(94, 1, ' E2', 'Corredores y notarios p?blicos', 'T', ''),
(94, 1, ' E3', 'Sanciones aplicadas a corredores y notarios', '', ''),
(94, 1, ' F1', 'Hipervinculo a los planes de desarrollo urbano', 'T', ''),
(94, 1, ' F2', 'Planes y /o Programas de desarrollo urbano', 'T', ''),
(94, 1, ' F3', 'Planes y Programas de ordenamiento territorial', 'T', ''),
(94, 1, ' F4', 'Planes y Programas de ordenamiento ecologico', 'T', ''),
(94, 1, ' F5', 'Tipos de uso de suelo', 'T', ''),
(94, 1, ' F6', 'Licencias de uso de suelo', 'T', ''),
(94, 1, ' F7', 'Licencias de construcci?n', 'T', ''),
(94, 1, ' G', 'Disposiciones Administrativas', 'T', ''),
(94, 1, ' H1', 'Requisitos para ser Oficial de registro civil', '', ''),
(94, 1, ' H2', 'Resultados de los examenes de aptitud', '', ''),
(94, 1, ' H3', 'Resultados de las supervisiones, investigaciones e inspecciones a las Oficinas y Oficilias de registro civil', '', ''),
(94, 1, ' H4', 'Oficialias del registro civil en el Estado de M?xico, domicilios de las mismas e informaci?n curricular y antig?edad de los titulares', '', ''),
(94, 1, ' H5', 'Estadisticas de los tramites ante el registro civil', '', ''),
(94, 1, ' I ', 'Calendario Escolar', '', ''),
(94, 1, ' I2', 'Directorio de Escuelas Incorporadas', '', ''),
(94, 1, ' I3', 'Lista de materiales y ?tiles escolares autoriazados', '', ''),
(94, 1, ' I4', 'Directorio de Bibliotecas Estatales', '', ''),
(94, 1, ' J', 'Atlas de Riesgos', '', ''),
(94, 1, ' K', 'Informaci?n para el conocimiento  y evaluaci?n de las funcionesy politicas p?blicas implementadas por el poder ejecutivo7 ', '', ''),
(94, 2, ' A1 ', 'Hipervinculo a las gacetas municipales', 'T', ''),
(94, 2, ' A2 ', 'Contenido de Gacetas Municipales', 'T', ''),
(94, 2, ' B1', 'Calendario de Sesiones de Cabildo', 'T', ''),
(94, 2, ' B2', 'Sesiones Celebradas de Cabildo', 'T', ''),
(94, 2, ' C', 'Participaciones y Aportaciones recibidas, derivadas de la Ley de Coordinaci?n Fiscal', 'T', ''),
(94, 2, ' D', 'Recursos federales recibidos, derivados del titulo 2? Del federalismo del prespuesto de egresos de la federaci?n', 'T', '');

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
  MODIFY `CARClave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58077;

--
-- AUTO_INCREMENT de la tabla `ttfracarea`
--
ALTER TABLE `ttfracarea`
  MODIFY `FAConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
