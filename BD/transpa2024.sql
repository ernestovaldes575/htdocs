-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2024 a las 01:24:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

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
-- Estructura de tabla para la tabla `a9203`
--

CREATE TABLE `a9203` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `AArea` int(11) NOT NULL,
  `ADenominacion` varchar(50) NOT NULL,
  `AFundamento` varchar(50) NOT NULL,
  `AHipervinculo` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `a9203`
--

INSERT INTO `a9203` (`AConsecutivo`, `AAyuntamiento`, `AEjercicio`, `AFechaInicio`, `AFechaTermino`, `AArea`, `ADenominacion`, `AFundamento`, `AHipervinculo`, `AAreaResp`, `ANota`) VALUES
(1, '105', 2024, '2024-06-04', '2024-06-20', 2, 'a', 'bb', 'ads', 2, 'asad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9206a`
--

CREATE TABLE `a9206a` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `ANombrePrograma` varchar(50) NOT NULL,
  `AObjetivo` varchar(50) NOT NULL,
  `ANombreIndicador` varchar(50) NOT NULL,
  `ADimensionesAMedir` varchar(50) NOT NULL,
  `ADefinicionIndicador` varchar(50) NOT NULL,
  `AMetodoCalculo` varchar(50) NOT NULL,
  `AUnidadMedida` varchar(50) NOT NULL,
  `AFrecuenciaMedicion` varchar(50) NOT NULL,
  `ALineaBase` varchar(50) NOT NULL,
  `AMetasProgramadas` varchar(50) NOT NULL,
  `AMetasAjustadas` varchar(50) NOT NULL,
  `AAvance` varchar(50) NOT NULL,
  `ASentidoIndicador` int(11) NOT NULL,
  `ASentidoIndicadorOtro` varchar(50) NOT NULL,
  `AFuenteInformacion` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `a9206a`
--

INSERT INTO `a9206a` (`AConsecutivo`, `AAyuntamiento`, `AEjercicio`, `AFechaInicio`, `AFechaTermino`, `ANombrePrograma`, `AObjetivo`, `ANombreIndicador`, `ADimensionesAMedir`, `ADefinicionIndicador`, `AMetodoCalculo`, `AUnidadMedida`, `AFrecuenciaMedicion`, `ALineaBase`, `AMetasProgramadas`, `AMetasAjustadas`, `AAvance`, `ASentidoIndicador`, `ASentidoIndicadorOtro`, `AFuenteInformacion`, `AAreaResp`, `ANota`) VALUES
(1, '105', 2024, '2024-06-03', '2024-06-06', 's', 's', 'a', 'ad', 'af', 'af', 'ad', 'ad', 'ad', 'ad', 'ad', 'd', 1, '2', 'dd', 2, 'hola'),
(2, '105', 2024, '2024-06-05', '2024-06-11', 's', 's', 'a', 'ad', 'af', 'af', 'ad', 'ad', 'ad', 'ad', 'ad', 'd', 1, '2', 'dd', 2, 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9208b`
--

CREATE TABLE `a9208b` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `TEjercicio` int(11) NOT NULL,
  `TFechInic` date NOT NULL,
  `TFechterm` date NOT NULL,
  `TFirper` varchar(50) NOT NULL,
  `TArea` int(11) NOT NULL,
  `TActualizacion` date NOT NULL,
  `TFechvalida` date NOT NULL,
  `TNota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9211`
--

CREATE TABLE `a9211` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `ATipoContratacion` varchar(50) NOT NULL,
  `ATipoContratacionOtro` varchar(50) NOT NULL,
  `APartidaPresupuestal` varchar(50) NOT NULL,
  `ANombre` varchar(50) NOT NULL,
  `APrimerApellido` varchar(50) NOT NULL,
  `ASegundoApellido` varchar(50) NOT NULL,
  `ANumeroContrato` varchar(50) NOT NULL,
  `AHipervinculoCon` varchar(50) NOT NULL,
  `AFechaInicioCon` date NOT NULL,
  `AFechaTerminoCon` date NOT NULL,
  `AServiciosContra` varchar(50) NOT NULL,
  `ARemuneracion` float NOT NULL,
  `AMontoTotal` float NOT NULL,
  `APrestaciones` varchar(50) NOT NULL,
  `AHipervinculo` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9214b`
--

CREATE TABLE `a9214b` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `PNumero` int(11) NOT NULL,
  `PNombrepers` varchar(50) NOT NULL,
  `PPrimerapellido` varchar(50) NOT NULL,
  `PSegundoapellido` varchar(50) NOT NULL,
  `PDenominasocial` varchar(50) NOT NULL,
  `PMontorecursos` float NOT NULL,
  `PUnidadterritorial` varchar(50) NOT NULL,
  `PEdad` int(11) NOT NULL,
  `PSexo` int(11) NOT NULL,
  `PSexootro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9218`
--

CREATE TABLE `a9218` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` varchar(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `ATipoEvento` int(11) NOT NULL,
  `ATipoEventoOtro` varchar(50) NOT NULL,
  `AAlcanceConcurso` int(11) NOT NULL,
  `AAlcanceConcursoOtro` varchar(50) NOT NULL,
  `ATipoCargo` int(11) NOT NULL,
  `ATipoCargoOtro` varchar(50) NOT NULL,
  `AClavePuesto` varchar(20) NOT NULL,
  `ADenominacionPuesto` varchar(50) NOT NULL,
  `ADenominacionCargo` varchar(50) NOT NULL,
  `ADenominacionUnidad` int(11) NOT NULL,
  `ASalarioBruto` float NOT NULL,
  `ASalarioNeto` float NOT NULL,
  `AFechaPublicacion` date NOT NULL,
  `ANumeroConvocatoria` varchar(50) NOT NULL,
  `AHipervinculoDoc` varchar(50) NOT NULL,
  `AEstadoProcesoCon` int(11) NOT NULL,
  `AEstadoProcesoConOtro` varchar(50) NOT NULL,
  `ATotalCandidatos` int(11) NOT NULL,
  `ANombrePersona` varchar(20) NOT NULL,
  `APrimerApelldio` varchar(20) NOT NULL,
  `ASegundoApellido` varchar(20) NOT NULL,
  `AHipervinculoGanador` varchar(50) NOT NULL,
  `AHipervinculoGanadorOtro` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9221`
--

CREATE TABLE `a9221` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `ADenominacionPuesto` varchar(50) NOT NULL,
  `ADenominacionCargo` varchar(50) NOT NULL,
  `ANombre` varchar(50) NOT NULL,
  `APrimerApellido` varchar(50) NOT NULL,
  `ASegundoApellido` varchar(50) NOT NULL,
  `AAreaAdscripcion` int(11) NOT NULL,
  `ANivelEstudios` int(11) NOT NULL,
  `ANivelEstudiosOtro` varchar(50) NOT NULL,
  `ACarreraGenerica` varchar(50) NOT NULL,
  `AExperienciaLaboral` varchar(50) NOT NULL,
  `AHipervinculoCurriculum` varchar(50) NOT NULL,
  `ASancionesAdmon` int(11) NOT NULL,
  `ASancionesAdmonOtro` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9225a`
--

CREATE TABLE `a9225a` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `APrepuestoAnual` float NOT NULL,
  `APresupuestoCapitulo` varchar(50) NOT NULL,
  `AHipervinculoPresEgresos` varchar(50) NOT NULL,
  `AHipervinculoPagina` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9227a`
--

CREATE TABLE `a9227a` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `ADenominacionPrograma` varchar(50) NOT NULL,
  `AFechaAprobacion` date NOT NULL,
  `AHipervinculoPrograma` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9228`
--

CREATE TABLE `a9228` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `AEjercicioAuditado` int(11) NOT NULL,
  `APeriodoAuditado` int(11) NOT NULL,
  `ARubro` int(11) NOT NULL,
  `ARubroOtro` varchar(50) NOT NULL,
  `ATipoAuditoria` varchar(50) NOT NULL,
  `ANumeroAuditoria` varchar(50) NOT NULL,
  `AOrganoAuditoria` varchar(50) NOT NULL,
  `ANomenclaturaNotificacion` varchar(50) NOT NULL,
  `ANomenclaturainfoRevisado` varchar(50) NOT NULL,
  `ANomenclaturaSolicitud` varchar(50) NOT NULL,
  `AObjetivoAuditoria` varchar(50) NOT NULL,
  `ARubrosRevision` varchar(50) NOT NULL,
  `AFundamentoLegal` varchar(50) NOT NULL,
  `ANumeroOficio` varchar(50) NOT NULL,
  `AHiperNotifiResultados` varchar(50) NOT NULL,
  `ATotalHallazgos` varchar(50) NOT NULL,
  `AHipervinculoRecomen` varchar(50) NOT NULL,
  `AHipervinculoInformes` varchar(50) NOT NULL,
  `AAccionOrganoFiscalizador` varchar(50) NOT NULL,
  `AAreaRecibeResultados` varchar(50) NOT NULL,
  `ATotalAclaraciones` varchar(50) NOT NULL,
  `AHipervinculoAclaraciones` varchar(50) NOT NULL,
  `ATotalAcciones` varchar(50) NOT NULL,
  `AHipervinculoProgramaAnual` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9231`
--

CREATE TABLE `a9231` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `AArea` int(11) NOT NULL,
  `AFechaActualizacion` date NOT NULL,
  `AFechaValidacion` date NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9235a`
--

CREATE TABLE `a9235a` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `AClaveCapitulo` varchar(50) NOT NULL,
  `AClaveConcepto` varchar(50) NOT NULL,
  `AClavePartida` varchar(50) NOT NULL,
  `ADenominacionCapitulo` varchar(50) NOT NULL,
  `AGastoProbado` float NOT NULL,
  `AGastoModificado` float NOT NULL,
  `AGastoComprometido` float NOT NULL,
  `AGastoDevengado` float NOT NULL,
  `AGastoEjercido` float NOT NULL,
  `AGastoPagado` float NOT NULL,
  `AJustificacionPresupuesto` varchar(50) NOT NULL,
  `AHipervinculoEgresos` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9238a`
--

CREATE TABLE `a9238a` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` int(11) NOT NULL,
  `APeriodoInformaOtro` varchar(50) NOT NULL,
  `ADescripcionBien` varchar(50) NOT NULL,
  `ACodigoIdentificacion` varchar(50) NOT NULL,
  `AInstitucionBien` varchar(50) NOT NULL,
  `ANumeroInventario` varchar(50) NOT NULL,
  `AMontoUnitario` float NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9238e`
--

CREATE TABLE `a9238e` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` int(11) NOT NULL,
  `APeriodoInformaOtro` varchar(50) NOT NULL,
  `ADescripcionBien` varchar(50) NOT NULL,
  `ACausaAlta` varchar(50) NOT NULL,
  `AFechaAlta` date NOT NULL,
  `AValorInmueble` float NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9239b`
--

CREATE TABLE `a9239b` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` int(11) NOT NULL,
  `APeriodoInformaOtro` varchar(50) NOT NULL,
  `ARecomendacion` varchar(50) NOT NULL,
  `AFechaRecibioRecomen` date NOT NULL,
  `ANumRecomendacion` int(11) NOT NULL,
  `AHipervinculoCNDH` varchar(50) NOT NULL,
  `AHipervinculoBuscador` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9241b`
--

CREATE TABLE `a9241b` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` int(11) NOT NULL,
  `APeriodoInformaOtro` varchar(50) NOT NULL,
  `ADenomiParticipacion` varchar(50) NOT NULL,
  `AResultados` varchar(50) NOT NULL,
  `ANumeroParticipantes` int(11) NOT NULL,
  `ARespuestaSujeto` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9243b`
--

CREATE TABLE `a9243b` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` int(11) NOT NULL,
  `APeriodoInformaOtro` varchar(50) NOT NULL,
  `AFechaResolucion` date NOT NULL,
  `AHiperResolucion` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9244b`
--

CREATE TABLE `a9244b` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` int(11) NOT NULL,
  `APeriodoInformaOtro` varchar(50) NOT NULL,
  `ATipoEncuesta` int(11) NOT NULL,
  `ADenominacion` varchar(50) NOT NULL,
  `AObjetivo` varchar(50) NOT NULL,
  `AHiperResultados` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9247a`
--

CREATE TABLE `a9247a` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` int(11) NOT NULL,
  `APeriodoInformaOtro` varchar(50) NOT NULL,
  `AConceptoIngresos` varchar(50) NOT NULL,
  `ATipoIngresos` varchar(50) NOT NULL,
  `AMontoIngresosConcepto` float NOT NULL,
  `AFuenteIngresos` varchar(50) NOT NULL,
  `ADenominacionEntidad` varchar(50) NOT NULL,
  `AFechaIngresos` date NOT NULL,
  `AHiperInformes` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9249`
--

CREATE TABLE `a9249` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` date NOT NULL,
  `APeriodoInformaOtro` date NOT NULL,
  `ADenominacionInstrumento` int(11) NOT NULL,
  `ADenominacionInstrumentoOtro` varchar(50) NOT NULL,
  `AHiperDocumentos` varchar(50) NOT NULL,
  `ANombreResponsable` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9251b`
--

CREATE TABLE `a9251b` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `AArea` int(11) NOT NULL,
  `AFechaActualizacion` date NOT NULL,
  `AFechaValidacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `a9251b`
--

INSERT INTO `a9251b` (`AConsecutivo`, `AAyuntamiento`, `AEjercicio`, `AFechaInicio`, `AFechaTermino`, `AArea`, `AFechaActualizacion`, `AFechaValidacion`) VALUES
(1, '105', 2024, '2024-06-10', '2024-06-11', 0, '2024-05-23', '2024-06-22'),
(2, '105', 2024, '2024-06-07', '2024-06-12', 4, '2024-05-23', '2024-06-22'),
(3, '105', 2024, '2024-06-12', '2024-06-20', 0, '2024-05-23', '2024-06-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a9252c`
--

CREATE TABLE `a9252c` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` int(11) NOT NULL,
  `APeriodoInformaOtro` varchar(50) NOT NULL,
  `AHiperInformacion` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `a9252c`
--

INSERT INTO `a9252c` (`AConsecutivo`, `AAyuntamiento`, `AEjercicio`, `APeriodoInforma`, `APeriodoInformaOtro`, `AHiperInformacion`, `AAreaResp`, `ANota`) VALUES
(1, '105', 2024, 22, '33', 'd33', 3, 'dsd'),
(6, '105', 2024, 22, '33', 'd34', 3, 'dsd'),
(7, '105', 2024, 23, '33', 'd33', 3, 'ddd');

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
-- Indices de la tabla `a9203`
--
ALTER TABLE `a9203`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9206a`
--
ALTER TABLE `a9206a`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9208b`
--
ALTER TABLE `a9208b`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9211`
--
ALTER TABLE `a9211`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9214b`
--
ALTER TABLE `a9214b`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9218`
--
ALTER TABLE `a9218`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9221`
--
ALTER TABLE `a9221`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9225a`
--
ALTER TABLE `a9225a`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9227a`
--
ALTER TABLE `a9227a`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9228`
--
ALTER TABLE `a9228`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9231`
--
ALTER TABLE `a9231`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9235a`
--
ALTER TABLE `a9235a`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9238a`
--
ALTER TABLE `a9238a`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9238e`
--
ALTER TABLE `a9238e`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9239b`
--
ALTER TABLE `a9239b`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9241b`
--
ALTER TABLE `a9241b`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9243b`
--
ALTER TABLE `a9243b`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9244b`
--
ALTER TABLE `a9244b`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9247a`
--
ALTER TABLE `a9247a`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9249`
--
ALTER TABLE `a9249`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9251b`
--
ALTER TABLE `a9251b`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `a9252c`
--
ALTER TABLE `a9252c`
  ADD PRIMARY KEY (`AConsecutivo`);

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
-- AUTO_INCREMENT de la tabla `a9203`
--
ALTER TABLE `a9203`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `a9206a`
--
ALTER TABLE `a9206a`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `a9208b`
--
ALTER TABLE `a9208b`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9211`
--
ALTER TABLE `a9211`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9214b`
--
ALTER TABLE `a9214b`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9218`
--
ALTER TABLE `a9218`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9221`
--
ALTER TABLE `a9221`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9225a`
--
ALTER TABLE `a9225a`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9227a`
--
ALTER TABLE `a9227a`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9228`
--
ALTER TABLE `a9228`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9231`
--
ALTER TABLE `a9231`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9235a`
--
ALTER TABLE `a9235a`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9238a`
--
ALTER TABLE `a9238a`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9238e`
--
ALTER TABLE `a9238e`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9239b`
--
ALTER TABLE `a9239b`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9241b`
--
ALTER TABLE `a9241b`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9243b`
--
ALTER TABLE `a9243b`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9244b`
--
ALTER TABLE `a9244b`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9247a`
--
ALTER TABLE `a9247a`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9249`
--
ALTER TABLE `a9249`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a9251b`
--
ALTER TABLE `a9251b`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `a9252c`
--
ALTER TABLE `a9252c`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
