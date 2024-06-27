-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2024 a las 20:21:16
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
-- Estructura de tabla para la tabla `art92_iii`
--

CREATE TABLE `art92_iii` (
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `art92_lib`
--

CREATE TABLE `art92_lib` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `AFechaInicio` date NOT NULL,
  `AFechaTermino` date NOT NULL,
  `AArea` int(11) NOT NULL,
  `AFechaActualizacion` date NOT NULL,
  `AFechaValidacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `art92_liic`
--

CREATE TABLE `art92_liic` (
  `AConsecutivo` int(11) NOT NULL,
  `AAyuntamiento` char(3) NOT NULL,
  `AEjercicio` int(11) NOT NULL,
  `APeriodoInforma` int(11) NOT NULL,
  `APeriodoInformaOtro` varchar(50) NOT NULL,
  `AHiperInformacion` varchar(50) NOT NULL,
  `AAreaResp` int(11) NOT NULL,
  `ANota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `art92_via`
--

CREATE TABLE `art92_via` (
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `art92_viiib`
--

CREATE TABLE `art92_viiib` (
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
-- Estructura de tabla para la tabla `art92_xi`
--

CREATE TABLE `art92_xi` (
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
-- Estructura de tabla para la tabla `art92_xivb`
--

CREATE TABLE `art92_xivb` (
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
-- Estructura de tabla para la tabla `art92_xlib`
--

CREATE TABLE `art92_xlib` (
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
-- Estructura de tabla para la tabla `art92_xliiib`
--

CREATE TABLE `art92_xliiib` (
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
-- Estructura de tabla para la tabla `art92_xlivb`
--

CREATE TABLE `art92_xlivb` (
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
-- Estructura de tabla para la tabla `art92_xlix`
--

CREATE TABLE `art92_xlix` (
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
-- Estructura de tabla para la tabla `art92_xlviia`
--

CREATE TABLE `art92_xlviia` (
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
-- Estructura de tabla para la tabla `art92_xviii`
--

CREATE TABLE `art92_xviii` (
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
-- Estructura de tabla para la tabla `art92_xxi`
--

CREATE TABLE `art92_xxi` (
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
-- Estructura de tabla para la tabla `art92_xxva`
--

CREATE TABLE `art92_xxva` (
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
-- Estructura de tabla para la tabla `art92_xxviia`
--

CREATE TABLE `art92_xxviia` (
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
-- Estructura de tabla para la tabla `art92_xxviii`
--

CREATE TABLE `art92_xxviii` (
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
-- Estructura de tabla para la tabla `art92_xxxi`
--

CREATE TABLE `art92_xxxi` (
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
-- Estructura de tabla para la tabla `art92_xxxixb`
--

CREATE TABLE `art92_xxxixb` (
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
-- Estructura de tabla para la tabla `art92_xxxva`
--

CREATE TABLE `art92_xxxva` (
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
-- Estructura de tabla para la tabla `art92_xxxviiia`
--

CREATE TABLE `art92_xxxviiia` (
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
-- Estructura de tabla para la tabla `art92_xxxviiie`
--

CREATE TABLE `art92_xxxviiie` (
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `art92_iii`
--
ALTER TABLE `art92_iii`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_lib`
--
ALTER TABLE `art92_lib`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_liic`
--
ALTER TABLE `art92_liic`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_via`
--
ALTER TABLE `art92_via`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_viiib`
--
ALTER TABLE `art92_viiib`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xi`
--
ALTER TABLE `art92_xi`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xivb`
--
ALTER TABLE `art92_xivb`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xlib`
--
ALTER TABLE `art92_xlib`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xliiib`
--
ALTER TABLE `art92_xliiib`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xlivb`
--
ALTER TABLE `art92_xlivb`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xlix`
--
ALTER TABLE `art92_xlix`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xlviia`
--
ALTER TABLE `art92_xlviia`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xviii`
--
ALTER TABLE `art92_xviii`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xxi`
--
ALTER TABLE `art92_xxi`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xxva`
--
ALTER TABLE `art92_xxva`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xxviia`
--
ALTER TABLE `art92_xxviia`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xxviii`
--
ALTER TABLE `art92_xxviii`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xxxi`
--
ALTER TABLE `art92_xxxi`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xxxixb`
--
ALTER TABLE `art92_xxxixb`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xxxva`
--
ALTER TABLE `art92_xxxva`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xxxviiia`
--
ALTER TABLE `art92_xxxviiia`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- Indices de la tabla `art92_xxxviiie`
--
ALTER TABLE `art92_xxxviiie`
  ADD PRIMARY KEY (`AConsecutivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `art92_iii`
--
ALTER TABLE `art92_iii`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_lib`
--
ALTER TABLE `art92_lib`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_liic`
--
ALTER TABLE `art92_liic`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_via`
--
ALTER TABLE `art92_via`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_viiib`
--
ALTER TABLE `art92_viiib`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xi`
--
ALTER TABLE `art92_xi`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xivb`
--
ALTER TABLE `art92_xivb`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xlib`
--
ALTER TABLE `art92_xlib`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xliiib`
--
ALTER TABLE `art92_xliiib`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xlivb`
--
ALTER TABLE `art92_xlivb`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xlix`
--
ALTER TABLE `art92_xlix`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xlviia`
--
ALTER TABLE `art92_xlviia`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xviii`
--
ALTER TABLE `art92_xviii`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xxi`
--
ALTER TABLE `art92_xxi`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xxva`
--
ALTER TABLE `art92_xxva`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xxviia`
--
ALTER TABLE `art92_xxviia`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xxviii`
--
ALTER TABLE `art92_xxviii`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xxxi`
--
ALTER TABLE `art92_xxxi`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xxxixb`
--
ALTER TABLE `art92_xxxixb`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xxxva`
--
ALTER TABLE `art92_xxxva`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xxxviiia`
--
ALTER TABLE `art92_xxxviiia`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `art92_xxxviiie`
--
ALTER TABLE `art92_xxxviiie`
  MODIFY `AConsecutivo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
