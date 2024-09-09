-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2024 a las 20:05:34
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
-- Base de datos: `entrega`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acopcser`
--

CREATE TABLE `acopcser` (
  `COSTipSer` char(2) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `COSClave` char(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `COSDescripcion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `COSDireccion` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acopcser`
--

INSERT INTO `acopcser` (`COSTipSer`, `COSClave`, `COSDescripcion`, `COSDireccion`) VALUES
('01', '001', 'Configuracion de area', 'Entrega/Formatos/FormatoLista.php'),
('01', '002', 'Entrega', 'Entrega/Formato.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actipser`
--

CREATE TABLE `actipser` (
  `CTSClave` char(2) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `CTSDescripcion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actipser`
--

INSERT INTO `actipser` (`CTSClave`, `CTSDescripcion`) VALUES
('01', 'Configuracion'),
('02', 'Entrega');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adpermi`
--

INSERT INTO `adpermi` (`PAyuntamiento`, `PConsServ`, `PTipoServ`, `POpciServ`, `PConsulta`, `PAlta`, `PModifica`, `PBaja`, `PNumePerm`) VALUES
('105', 1, '01', '001', 'I', 'A', 'I', 'A', 3),
('105', 1, '01', '002', 'A', 'A', 'A', 'A', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `et03estrprog`
--

CREATE TABLE `et03estrprog` (
  `EPConsecut` int(11) NOT NULL COMMENT 'Consecutivo',
  `EPAyuntamiento` char(3) NOT NULL COMMENT 'Ayuntamiento',
  `EPConsForm` int(11) NOT NULL COMMENT 'Consecutivo del Formulario',
  `EPNumeProg` int(11) NOT NULL COMMENT 'Numero Progresivo',
  `EPNumeActa` int(11) NOT NULL COMMENT 'Número de Acta',
  `EPFechApro` date NOT NULL COMMENT 'Fecha de Aprobación',
  `EPNumeGace` int(11) NOT NULL COMMENT 'Número de Gaceta Municipal',
  `EPFechPUbli` int(11) NOT NULL COMMENT 'Fecha de Publicación',
  `EPUltiRevi` int(11) NOT NULL COMMENT 'Última revisión',
  `EPMediDifu` varchar(80) NOT NULL COMMENT 'Medios de Difusión',
  `EPUnidResg` varchar(80) NOT NULL COMMENT 'Dependencia/Unidad Administrativa Responsable del Resguardo',
  `EPObservacion` int(11) NOT NULL COMMENT 'Observaciones',
  `EPModiSePu` int(11) NOT NULL COMMENT 'Servidor Público que modifica',
  `EPFechModi` date NOT NULL COMMENT 'Fecha de la modificación',
  `EPEstado` char(1) NOT NULL COMMENT 'Estado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eter02reglinte`
--

CREATE TABLE `eter02reglinte` (
  `RIConsecu` int(11) NOT NULL COMMENT 'Consecutivo',
  `RIConsForm` int(11) NOT NULL COMMENT 'Consecutivo del formato',
  `RIAyuntamiento` char(4) NOT NULL COMMENT 'Ayuntamiento',
  `RINumeProg` int(11) NOT NULL COMMENT 'Numero Progresivo',
  `RINombRegl` varchar(80) NOT NULL COMMENT 'Nombre del Reglamento',
  `RIFechEmis` date NOT NULL COMMENT 'Fecha de Emisión',
  `RIVigencia` varchar(30) NOT NULL COMMENT 'Vigencia',
  `RIDepeSuje` varchar(80) NOT NULL COMMENT 'Unidad Admo. Responsable de sujeto a su uso',
  `RINumeEjem` int(11) NOT NULL COMMENT 'Numero de Ejemplar',
  `RIDepeRespElab` varchar(80) NOT NULL COMMENT 'Unidad Admo. Responsable de su elaboración',
  `RIDepeRespAuto` varchar(80) NOT NULL COMMENT 'Unidad Admo. Responsable de su autorización',
  `RIObserva` varchar(250) NOT NULL COMMENT 'Observacioón',
  `RIModiSePu` int(11) NOT NULL COMMENT 'Servidor Publico que modifica',
  `RIFechModi` int(11) NOT NULL COMMENT 'Fecha de Modificacion',
  `RIEstasdo` char(1) NOT NULL COMMENT 'Estado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eter02reglinte`
--

INSERT INTO `eter02reglinte` (`RIConsecu`, `RIConsForm`, `RIAyuntamiento`, `RINumeProg`, `RINombRegl`, `RIFechEmis`, `RIVigencia`, `RIDepeSuje`, `RINumeEjem`, `RIDepeRespElab`, `RIDepeRespAuto`, `RIObserva`, `RIModiSePu`, `RIFechModi`, `RIEstasdo`) VALUES
(1, 8, '105', 1, 'Regla 01', '2024-08-24', 'vigencia', 'Uso 01', 1, 'Elabo 05', 'Auto 01', 'obser', 1, 20240825, 'A'),
(2, 8, '105', 2, 'Regla 02', '2024-08-17', 'Vigen02', 'Uso 02', 0, 'Elabo 06', 'Auto 02', 'Observ', 1, 20240825, 'A'),
(3, 8, '105', 3, 'Regla03', '2024-08-24', 'Vigen03', 'Uso 03', 0, 'Elabo 07', 'Auto 03', 'Obser', 1, 20240825, 'A'),
(13, 8, '105', 4, 'Regla04', '2024-08-24', 'Vigen04', 'uso 04', 0, 'Elabo 08', 'Auto 04', 'obserb', 1, 20240825, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etformarea`
--

CREATE TABLE `etformarea` (
  `FAConsecutivo` int(11) NOT NULL,
  `FAAyuntamiento` char(3) NOT NULL,
  `FAUnidad` int(11) NOT NULL,
  `FAFormato` char(2) NOT NULL,
  `FAEstado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `etformarea`
--

INSERT INTO `etformarea` (`FAConsecutivo`, `FAAyuntamiento`, `FAUnidad`, `FAFormato`, `FAEstado`) VALUES
(2, '105', 2, '01', 'A'),
(3, '105', 30, '01', 'A'),
(4, '105', 125, '01', 'A'),
(5, '105', 125, '01', 'A'),
(6, '105', 119, '02', 'A'),
(7, '105', 48, '01', 'A'),
(8, '105', 48, '02', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etformato`
--

CREATE TABLE `etformato` (
  `FNumero` char(2) NOT NULL,
  `FFormato` varchar(133) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `etformato`
--

INSERT INTO `etformato` (`FNumero`, `FFormato`) VALUES
('01', 'Plan de Desarrollo Municpal'),
('02', 'Reglamento Interior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `FFraccion` int(2) NOT NULL,
  `FInciso` char(2) CHARACTER SET utf8 NOT NULL,
  `FSubinciso` varchar(4) CHARACTER SET utf8 NOT NULL,
  `FNormatividad` varchar(133) CHARACTER SET utf8 DEFAULT NULL,
  `FPeriodo` varchar(1) CHARACTER SET utf8 DEFAULT NULL,
  `FSalida` varchar(1) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formato`
--

INSERT INTO `formato` (`FFraccion`, `FInciso`, `FSubinciso`, `FNormatividad`, `FPeriodo`, `FSalida`) VALUES
(92, '01', '', 'Normatividad Aplicable', 'T', 'E'),
(92, '03', '', 'Facultades de ?rea', 'T', 'E'),
(92, '10', ' A', 'Plazas Vacantes', 'T', 'E'),
(92, '10', ' B', 'Total de Plazas Vacantes Ocupadas', 'T', 'E'),
(92, '11', '', 'Contrataciones de Servicios Profesionales', 'T', 'E'),
(92, '12', '', 'Perfil de Puestos de Servidores P?blicos', 'T', 'E'),
(92, '13', '', 'Declaraciones Patrimoniales de los Servidores P?blicos', '', ''),
(92, '14', '', 'Programas de Subsidio, estimulos y Apoyos', 'T', 'E'),
(92, '14', ' B', 'Padr?n de Beneficiarios', 'T', 'E'),
(92, '15', '', 'Agenda de Reuniones', 'T', 'E'),
(92, '16', '', 'Domicilio de la Unidad de Transparencia', 'T', 'N'),
(92, '17', '', 'Registro de solicitudes de Acceso a la Informaci?n recibidas y atendidas', 'T', 'E'),
(92, '18', '', 'Convocatorias a concursos para ocupar cargos P?blicos', 'T', 'E'),
(92, '19', '', 'Indices a los expedientes clasificados como reservados', 'T', 'E'),
(92, '2', ' A', 'Estructura Org?nica', 'T', 'N'),
(92, '2', ' B', 'Organigrama', 'T', 'N'),
(92, '20', ' A', 'Normatividad Laboral', 'T', 'E'),
(92, '20', ' B', 'Recursos P?blicos entregados a Sindicatos', 'T', 'E'),
(92, '21', '', 'Informaci?n Curricular y Sanciones Administrativas', 'T', 'E'),
(92, '22', '', 'Servidores P?blicos con Sanciones Administrativas Definitivas', 'T', 'E'),
(92, '23', '', 'Servicios requisitos para acceder a ellos', 'T', 'E'),
(92, '24', '', 'Tramites, requisitos y formatos que ofrecen', 'T', 'E'),
(92, '25', ' A', 'Presupuesto Asignado', 'T', 'E'),
(92, '25', ' B', 'Ejercicio de los Egresos Presupuestarios', 'T', 'E'),
(92, '25', ' C', 'Informacion Financiera de Cuenta P?blica', 'A', 'E'),
(92, '26', '', 'Deuda P?blica', 'A', 'E'),
(92, '27', ' A', 'Programa Anual de Comunicaci?n Social o Equivalente', 'T', 'E'),
(92, '27', ' B', 'Erogaci?n de Recursos por contrataci?n de Servicios', 'N', ''),
(92, '27', ' C', 'Utilizaci?n de Tiempos Oficiales', '', ''),
(92, '27', ' D', 'Mensaje e Hipervinculo a la informaci?n relacionada con los tiempos oficiales', '', ''),
(92, '28', '', 'Resultados de Auditorias Realizadas', 'T', 'E'),
(92, '29', ' A', 'Resultado de Procedimientos de licitaci?n p?blica e invitaci?n cuando menos a tres personas realiza', 'T', 'E'),
(92, '29', ' B', 'Resultados de procedimientos de adjudicaci?n directa', 'T', 'E'),
(92, '30', '', 'Resultado de la dictaminaci?n de los Estados Financierios', 'A', 'E'),
(92, '31', '', 'Personas que usan Recursos P?blicos', '', ''),
(92, '32', '', 'Las conceciones, contratos, convenios, permisos, licencias o autorizaciones otrogadas', 'T', 'E'),
(92, '33', '', 'Informes Emitidos', 'T', 'E'),
(92, '34', '', 'Estadisticas Generales', 'T', 'E'),
(92, '35', ' A', 'Gasto por Capitulo, Concepto y Partida', 'T', 'E'),
(92, '35', ' B', 'Informes financieros, contables, presupuestales', 'T', 'E'),
(92, '36', '', 'Padr?n de Proveedores', 'T', 'E'),
(92, '37', '', 'Convenios de coordinaci?n, de concentraci?n con el sector privado o p?blico', 'T', 'E'),
(92, '38', ' A', 'Inventario de Bienes Muebles', 'S', 'E'),
(92, '38', ' B', 'Inventario de altas practicadas a bienes muebles', 'S', 'E'),
(92, '38', ' C', 'Inventario de bajas practicadas a bienes muebles', 'S', 'E'),
(92, '38', ' D', 'Inventario de Bienes Inmuebles', 'S', 'E'),
(92, '38', ' E', 'Inventario de altas practicadas a bienes inmuebles', 'S', 'E'),
(92, '38', ' F', 'Inventario de bajas practicadas a bienes inmuebles', 'S', 'E'),
(92, '38', ' G', 'Inventario de bienes muebles e inmuebles donados', 'S', 'E'),
(92, '39', ' A', 'Recomendaciones emitidas por la CNDH', 'T', 'E'),
(92, '39', ' B', 'Casos especiales emitidos por la CNDH u otros organismos', 'T', 'E'),
(92, '39', ' C', 'Recomendaciones emitidas por organismos internacionales', 'T', 'E'),
(92, '4', '', 'Metas y Objetivos de ?rea', 'A', 'E'),
(92, '40', '', 'Resoluciones y Laudos Emitidos', 'T', 'E'),
(92, '41', ' A', 'Mecanismos de participaci?n ciudadana', 'T', 'E'),
(92, '41', ' B', 'Resultado de los mecanismos de participaci?n ', 'T', 'E'),
(92, '42', ' A', 'Programas que ofrecen ', 'T', 'E'),
(92, '42', ' B', 'Tramites para acceder a los programas que ofrecen', 'T', 'E'),
(92, '43', ' A ', 'Informe de Sesiones del comit? de Transparencia', 'S', 'E'),
(92, '43', ' B', 'Informe de Resoluciones del Comit? de Transparencia', 'S', 'E'),
(92, '43', ' C', 'Intgrantes del Comit? de Transparencia', 'S', 'E'),
(92, '43', ' D', 'Calendario de Sesiones ordinarias del Comit? de Transparencia', 'S', 'E'),
(92, '44', ' A', 'Evaluaciones y encuestas a programas financiados con recursos p?blicos', 'A', 'E'),
(92, '44', ' B', 'Encuestas sobre programas financiados con recurso', 'A', 'E'),
(92, '45', '', 'Estados finaciados con recursos p?blicos', 'T', 'E'),
(92, '46', ' A', 'Hipervinculo al listado de pensionados y jubilados', 'T', ''),
(92, '46', ' B', 'Listado de Jubilados y Pensionados y el monto que reciben', '', ''),
(92, '47', ' A', 'Ingresos Recibidos', 'T', ''),
(92, '47', ' B', 'Responsables de recibir, administrar y ejercer los ingresos', 'S', ''),
(92, '48', ' A', 'Donaciones en dinero realizada', 'S', ''),
(92, '48', ' B', 'Donaciones en especie realizadas', 'S', ''),
(92, '49', '', 'Cat?logo de disposici?n y gu?a de archivo documental', 'A', ''),
(92, '5', ' A', 'Indicadores Interes P?blico', 'A', 'E'),
(92, '5', ' B', 'Indicadores para Resultados relacionados con temas de Interes P?blico o Trascendecia Social', 'A', 'E'),
(92, '50', '', 'Actas de consejo consultivo ', '', ''),
(92, '50', ' B', 'Opiniones y recomendaciones del consejo consultivo', '', ''),
(92, '51', ' A', 'Solicitudes de intervenci?n de comunicaciones', '', ''),
(92, '51', ' B', 'Solicitudes de registros de comunicaciones y de registro de localizaci?n geografica', '', ''),
(92, '51', ' C', 'Mensaje ', '', ''),
(92, '52', ' A', 'Informaci?n de interes p?blico ', 'T', ''),
(92, '52', ' B', 'Preguntas frecuentes', 'T', ''),
(92, '52', ' C', 'Transparencia Proactiva', 'T', ''),
(92, '6', ' A', 'Indicadores de  Objetivos y Resultados ', 'A', 'E'),
(92, '6', ' B', 'Matriz de Indicadores de Resultados', 'A', 'E'),
(92, '7', '', 'Directorio de los Servidores P?blicos', 'T', 'E'),
(92, '8', '', 'Remuneraciones', 'T', 'E'),
(92, '9', '', 'Gastos por vi?ticos y gastos de representaci?n', 'T', 'E'),
(93, '1', '', 'Tablas de aplicabilidad ', 'A', ''),
(94, '1', ' A1', 'Hiperv?nculo al plan nacional de desarrollo', 'A', ''),
(94, '1', ' A2', 'Plan de desarrollo', 'A', ''),
(94, '1', ' B1', 'Presupuesto de egresos', 'A', ''),
(94, '1', ' B2', 'Egreos y formulas de distribuci?n de recursos', 'A', ''),
(94, '1', ' C1', 'Hipervinculo al listado de expropiaciones', '', ''),
(94, '1', ' C2', 'Listado de exproipaciones', '', ''),
(94, '1', ' D1', 'Hipervinculo a las cancelaciones y condonaciones', 'T', ''),
(94, '1', ' D2', 'Coontribuyentes que recibieron cancelaci?n o condonaci?n de cr?ditos fiscales', 'T', ''),
(94, '1', ' E1', 'Hipervinculo a la informaci?n de los corredores ', 'T', ''),
(94, '1', ' E2', 'Corredores y notarios p?blicos', 'T', ''),
(94, '1', ' E3', 'Sanciones aplicadas a corredores y notarios', '', ''),
(94, '1', ' F1', 'Hipervinculo a los planes de desarrollo urbano', 'T', ''),
(94, '1', ' F2', 'Planes y /o Programas de desarrollo urbano', 'T', ''),
(94, '1', ' F3', 'Planes y Programas de ordenamiento territorial', 'T', ''),
(94, '1', ' F4', 'Planes y Programas de ordenamiento ecologico', 'T', ''),
(94, '1', ' F5', 'Tipos de uso de suelo', 'T', ''),
(94, '1', ' F6', 'Licencias de uso de suelo', 'T', ''),
(94, '1', ' F7', 'Licencias de construcci?n', 'T', ''),
(94, '1', ' G', 'Disposiciones Administrativas', 'T', ''),
(94, '1', ' H1', 'Requisitos para ser Oficial de registro civil', '', ''),
(94, '1', ' H2', 'Resultados de los examenes de aptitud', '', ''),
(94, '1', ' H3', 'Resultados de las supervisiones, investigaciones e inspecciones a las Oficinas y Oficilias de registro civil', '', ''),
(94, '1', ' H4', 'Oficialias del registro civil en el Estado de M?xico, domicilios de las mismas e informaci?n curricular y antig?edad de los titulares', '', ''),
(94, '1', ' H5', 'Estadisticas de los tramites ante el registro civil', '', ''),
(94, '1', ' I ', 'Calendario Escolar', '', ''),
(94, '1', ' I2', 'Directorio de Escuelas Incorporadas', '', ''),
(94, '1', ' I3', 'Lista de materiales y ?tiles escolares autoriazados', '', ''),
(94, '1', ' I4', 'Directorio de Bibliotecas Estatales', '', ''),
(94, '1', ' J', 'Atlas de Riesgos', '', ''),
(94, '1', ' K', 'Informaci?n para el conocimiento  y evaluaci?n de las funcionesy politicas p?blicas implementadas por el poder ejecutivo7 ', '', ''),
(94, '1', 'D3', 'Estadisticas sobre conexiciones ', 'T', ''),
(94, '2', ' A1 ', 'Hipervinculo a las gacetas municipales', 'T', ''),
(94, '2', ' A2 ', 'Contenido de Gacetas Municipales', 'T', ''),
(94, '2', ' B1', 'Calendario de Sesiones de Cabildo', 'T', ''),
(94, '2', ' B2', 'Sesiones Celebradas de Cabildo', 'T', ''),
(94, '2', ' C', 'Participaciones y Aportaciones recibidas, derivadas de la Ley de Coordinaci?n Fiscal', 'T', ''),
(94, '2', ' D', 'Recursos federales recibidos, derivados del titulo 2? Del federalismo del prespuesto de egresos de la federaci?n', 'T', '');

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
-- Indices de la tabla `et03estrprog`
--
ALTER TABLE `et03estrprog`
  ADD PRIMARY KEY (`EPConsecut`);

--
-- Indices de la tabla `eter02reglinte`
--
ALTER TABLE `eter02reglinte`
  ADD PRIMARY KEY (`RIConsecu`);

--
-- Indices de la tabla `etformarea`
--
ALTER TABLE `etformarea`
  ADD PRIMARY KEY (`FAConsecutivo`);

--
-- Indices de la tabla `etformato`
--
ALTER TABLE `etformato`
  ADD PRIMARY KEY (`FNumero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `et03estrprog`
--
ALTER TABLE `et03estrprog`
  MODIFY `EPConsecut` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Consecutivo';

--
-- AUTO_INCREMENT de la tabla `eter02reglinte`
--
ALTER TABLE `eter02reglinte`
  MODIFY `RIConsecu` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Consecutivo', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `etformarea`
--
ALTER TABLE `etformarea`
  MODIFY `FAConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
