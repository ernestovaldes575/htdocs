-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2024 a las 21:59:45
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
-- Base de datos: `tecninfo`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `acopcser`
--

INSERT INTO `acopcser` (`COSTipSer`, `COSClave`, `COSDescripcion`, `COSDireccion`) VALUES
('01', '001', 'Generar Código', 'TecnInfo/Campos/BaseDatos.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actipser`
--

CREATE TABLE `actipser` (
  `CTSClave` char(2) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `CTSDescripcion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actipser`
--

INSERT INTO `actipser` (`CTSClave`, `CTSDescripcion`) VALUES
('01', 'Programas');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `adpermi`
--

INSERT INTO `adpermi` (`PAyuntamiento`, `PConsServ`, `PTipoServ`, `POpciServ`, `PConsulta`, `PAlta`, `PModifica`, `PBaja`, `PNumePerm`) VALUES
('105', 2, '01', '001', 'A', 'A', 'A', 'A', 1),
('105', 1, '01', '001', 'A', 'A', 'A', 'A', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdcampos`
--

CREATE TABLE `pdcampos` (
  `CTabla` varchar(50) NOT NULL,
  `CNumero` char(2) NOT NULL,
  `CDescripcion` varchar(50) NOT NULL,
  `CTipo` varchar(50) NOT NULL,
  `CAncho` int(11) NOT NULL,
  `CListaKey` char(1) NOT NULL,
  `CListaDefa` varchar(20) NOT NULL,
  `CDespLista` char(1) NOT NULL,
  `CBusqLista` char(1) NOT NULL,
  `CPagiRefe` char(1) NOT NULL,
  `CCampoCapt` char(1) NOT NULL,
  `CCampoTama` int(11) NOT NULL,
  `CCampokey` char(1) NOT NULL,
  `CCampDefa` varchar(20) NOT NULL,
  `CUtilCata` char(1) NOT NULL,
  `CCatalogo` varchar(20) NOT NULL,
  `CClaveCata` varchar(20) NOT NULL,
  `CDescriCata` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pdcampos`
--

INSERT INTO `pdcampos` (`CTabla`, `CNumero`, `CDescripcion`, `CTipo`, `CAncho`, `CListaKey`, `CListaDefa`, `CDespLista`, `CBusqLista`, `CPagiRefe`, `CCampoCapt`, `CCampoTama`, `CCampokey`, `CCampDefa`, `CUtilCata`, `CCatalogo`, `CClaveCata`, `CDescriCata`) VALUES
('ttfadear', '1', 'AConsecutivo', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'A', '', 'I', '', '', ''),
('ttfadear', '2', 'AAyuntamiento', 'char', 3, 'A', '$ClavAyun', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('ttfadear', '3', 'AEjercicio', 'int', 11, 'A', '$EjerTrab', 'I', 'I', 'I', 'A', 0, 'I', '', 'I', '', '', ''),
('ttfadear', '4', 'AFechaInicio', 'date', 0, 'I', '', 'A', 'I', 'I', 'A', 0, 'I', '', 'I', '', '', ''),
('ttfadear', '5', 'AFechaTermino', 'date', 0, 'I', '', 'A', 'I', 'I', 'A', 0, 'I', '', 'I', '', '', ''),
('ttfadear', '6', 'AArea', 'int', 11, 'I', '', 'I', 'I', 'I', 'A', 0, 'I', '', 'I', '', '', ''),
('ttfadear', '7', 'ADenominacion', 'varchar', 50, 'I', '', 'A', 'I', 'I', 'A', 0, 'I', '', 'I', '', '', ''),
('ttfadear', '8', 'AFundamento', 'varchar', 50, 'I', '', 'I', 'I', 'I', 'A', 0, 'I', '', 'I', '', '', ''),
('ttfadear', '9', 'AHipervinculo', 'varchar', 50, 'I', '', 'I', 'I', 'I', 'A', 0, 'I', '', 'I', '', '', ''),
('ttfadear', '10', 'AAreaResp', 'int', 11, 'I', '', 'I', 'I', 'I', 'A', 0, 'I', '', 'I', '', '', ''),
('ttfadear', '11', 'ANota', 'varchar', 50, 'I', '', 'A', 'I', 'I', 'A', 0, 'I', '', 'I', '', '', ''),
('tcarea', '1', 'CARClave', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('tcarea', '2', 'CARDescripcion', 'varchar', 150, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '1', 'LConsecut', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '2', 'LAyuntamiento', 'char', 3, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '3', 'LUnidad', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '4', 'LEjercicio', 'int', 4, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '5', 'LMesRegi', 'char', 2, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '6', 'LTipoDocu', 'char', 2, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '7', 'LTitulo', 'varchar', 20, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '8', 'LDescripcion', 'text', 0, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '9', 'LSerPubCre', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '10', 'LFechAlta', 'date', 0, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '11', 'LFechPublI', 'date', 0, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '12', 'LFechPublF', 'date', 0, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '13', 'LSerPubRev', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '14', 'LFechRevi', 'date', 0, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '15', 'LSerPubAuto', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '16', 'LFechAuto', 'date', 0, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '17', 'LFechPubl', 'date', 0, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '18', 'LSerPubCier', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '19', 'LFechaCier', 'date', 0, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '20', 'LEstaSegu', 'char', 1, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '21', 'LPublicacion', 'char', 1, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '22', 'LVentRefe', 'char', 1, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '23', 'LAbrirLiDoIm', 'char', 1, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '24', 'LLiga', 'varchar', 50, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '25', 'LArchDocu', 'varchar', 30, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '26', 'LImagColo', 'varchar', 30, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '27', 'LImagBlan', 'varchar', 30, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '28', 'LSenaSord', 'varchar', 30, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stlayers', '29', 'LEstado', 'char', 1, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('actipser', '1', 'CTSClave', 'char', 2, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('actipser', '2', 'CTSDescripcion', 'varchar', 30, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('acopcser', '1', 'COSTipSer', 'char', 2, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('acopcser', '2', 'COSClave', 'char', 3, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('acopcser', '3', 'COSDescripcion', 'varchar', 50, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('acopcser', '4', 'COSDireccion', 'varchar', 100, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '1', 'SConsecut', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '2', 'SAyuntamiento', 'char', 3, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '3', 'SUnidad', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '4', 'SNumeEmpl', 'varchar', 10, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '5', 'SServPubli', 'varchar', 80, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '6', 'SCategoria', 'varchar', 80, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '7', 'SFoto', 'varchar', 20, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '8', 'SSerPubMo', 'int', 11, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '9', 'SFechModi', 'date', 0, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('stsupervisor', '10', 'SEstado', 'char', 1, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('sctipodocu', '1', 'CTDClave', 'char', 2, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('sctipodocu', '2', 'CTDDescrpcion', 'varchar', 30, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', ''),
('sctipodocu', '3', 'CTDCarpeta', 'varchar', 30, 'I', '', 'I', 'I', 'I', 'I', 0, 'I', '', 'I', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pttabla`
--

CREATE TABLE `pttabla` (
  `TNombre` varchar(50) NOT NULL,
  `TTipoMovi` char(1) NOT NULL,
  `TNumero` int(11) NOT NULL,
  `TInstruccion` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pttabla`
--

INSERT INTO `pttabla` (`TNombre`, `TTipoMovi`, `TNumero`, `TInstruccion`) VALUES
('aa', 'X', 1, '\''),
('ttfadear', 'L', 1, '<!DOCTYPE html>'),
('ttfadear', 'L', 2, '<html lang=\"es\">'),
('ttfadear', 'L', 3, '<head>'),
('ttfadear', 'L', 4, '	<meta charset=\"UTF-8\">'),
('ttfadear', 'L', 5, '	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">'),
('ttfadear', 'L', 6, '	<title>ListaFac</title>'),
('ttfadear', 'L', 7, '	<link rel=\"stylesheet\" type=\"text/css\" href=\"../../Archivos/CSS/Consu.css\">'),
('ttfadear', 'L', 8, '	<!--icono de la pestaña (logo)-->'),
('ttfadear', 'L', 9, '	<link rel=\"shortcut icon\" href=\"../../Archivos/Img/logoEnc.ico\" />'),
('ttfadear', 'L', 10, '	<!-- iconos -->'),
('ttfadear', 'L', 11, '	<link rel=\"stylesheet\" href=\"../../Archivos/CSS/font-awesome.min.css\">'),
('ttfadear', 'L', 12, '</head>'),
('ttfadear', 'L', 13, '<body>'),
('ttfadear', 'L', 14, '	<script language=\"javascript\">'),
('ttfadear', 'L', 15, '		function CargaEjercicio(Param)'),
('ttfadear', 'L', 16, ' 		{ location.href = \"ListaFac.php?Param1=\"+Param; }'),
('ttfadear', 'L', 17, '	</script>'),
('ttfadear', 'L', 18, ' '),
('ttfadear', 'L', 19, '	<?php'),
('ttfadear', 'L', 20, '		//Carga las variables'),
('ttfadear', 'L', 21, '	include($_SERVER[\"DOCUMENT_ROOT\"].\"/Intranet/Archivos/Files/EncaCook.php\");'),
('ttfadear', 'L', 22, ' '),
('ttfadear', 'L', 23, '	if ( isset($_GET[\"Param1\"]) ){'),
('ttfadear', 'L', 24, '		$EjerTrab = $_GET[\"Param1\"];'),
('ttfadear', 'L', 25, ' 		$ArCooki3 = $ConsUsua.\"|\".$ClavAyun.\"|\".$DescAyun.\"|\".$ConsUnid.\"|\".$DescUnid.\"|\".$EjerTrab.\"|\";'),
('ttfadear', 'L', 26, ' 		setcookie(\"CEncaMae\", \"$ArCooki3\");'),
('ttfadear', 'L', 27, '	}'),
('ttfadear', 'L', 28, '		//archivo de conexion a la bd'),
('ttfadear', 'L', 29, '	include($_SERVER[\"DOCUMENT_ROOT\"].\"/Intranet/Archivos/Conexiones/conexion.php\");'),
('ttfadear', 'L', 30, '		//query pars la tabla ListaFac-'),
('ttfadear', 'L', 31, '	$sql = \"SELECT * \".'),
('ttfadear', 'L', 32, '   	       \"FROM ttfadear \".'),
('ttfadear', 'L', 33, '           \"WHERE AAyuntamiento = \".$ClavAyun.'),
('ttfadear', 'L', 34, '           \" AND AEjercicio = \".$EjerTrab;'),
('ttfadear', 'L', 35, '	$resultado = $conexion->prepare($sql);'),
('ttfadear', 'L', 36, '	$resultado->execute();'),
('ttfadear', 'L', 37, '	$tot_rows = $resultado->rowCount();'),
('ttfadear', 'L', 38, '	$row = $resultado->fetchAll();'),
('ttfadear', 'L', 39, ' '),
('ttfadear', 'L', 40, '		//Datos del Catalogo'),
('ttfadear', 'L', 41, '	$sql2 = $conexion->prepare(\"SELECT * FROM tcejercicio\");'),
('ttfadear', 'L', 42, '	$sql2->execute();'),
('ttfadear', 'L', 43, '	$CEJClave = $sql2->fetchAll();'),
('ttfadear', 'L', 44, '	?>'),
('ttfadear', 'L', 45, ' '),
('ttfadear', 'L', 46, '		<!--encabezado-->'),
('ttfadear', 'L', 47, '	<header> <?php require_once(\"../../Archivos/Files/header.php\"); ?> </header>'),
('ttfadear', 'L', 48, '	<br>'),
('ttfadear', 'L', 49, '	<div class=\"tabla\">'),
('ttfadear', 'L', 50, '		<div class=\"titulo\"><h2>ListaFac</h2></div>'),
('ttfadear', 'L', 51, '		<div class=\"botones\">'),
('ttfadear', 'L', 52, '			<a href=\"../../menuintranet.php\" class=\"regresar\">Regresar</a>'),
('ttfadear', 'L', 53, '			<div class=\"lista\">'),
('ttfadear', 'L', 54, '				<select name=\"AAreaResp\" onChange=\"CargaEjercicio(this.value)\" class=\"AAreaResp\">'),
('ttfadear', 'L', 55, '				<?php'),
('ttfadear', 'L', 56, '				foreach($CEJClave as $valor):'),
('ttfadear', 'L', 57, '					$ClavCata = $valor[\"CEJClave\"];'),
('ttfadear', 'L', 58, '					$DescCata = $valor[\"CEJDescripcion\"];'),
('ttfadear', 'L', 59, '					$Activo = \"\";'),
('ttfadear', 'L', 60, '					if ( $ClavCata == $EjerTrab)'),
('ttfadear', 'L', 61, '						$Activo = \"selected\";'),
('ttfadear', 'L', 62, '				?>'),
('ttfadear', 'L', 63, '					<option value=\"<?=$ClavCata?>\" <?=$Activo?>><?=$ClavCata?> </option>'),
('ttfadear', 'L', 64, '				<?php'),
('ttfadear', 'L', 65, '				endforeach;'),
('ttfadear', 'L', 66, '				?>'),
('ttfadear', 'L', 67, '				</select>'),
('ttfadear', 'L', 68, '			</div>'),
('ttfadear', 'L', 69, '			<?php '),
('ttfadear', 'L', 70, '			if($Alta == \"A\"){ '),
('ttfadear', 'L', 71, '			?>'),
('ttfadear', 'L', 72, '				<a href=\"MoviFac.php?Param1=A&Param2=0\" class=\"nuevo\">+Nuevo</a>'),
('ttfadear', 'L', 73, '			<?php } ?>'),
('ttfadear', 'L', 74, '		</div>'),
('ttfadear', 'L', 75, ' '),
('ttfadear', 'L', 76, '		<table>'),
('ttfadear', 'L', 77, '			<thead>'),
('ttfadear', 'L', 78, '				<tr>'),
('ttfadear', 'L', 79, '					<td>AFechaInicio</td>'),
('ttfadear', 'L', 80, '					<td>AFechaTermino</td>'),
('ttfadear', 'L', 81, '					<td>ADenominacion</td>'),
('ttfadear', 'L', 82, '					<td>ANota</td>'),
('ttfadear', 'L', 83, '					<td>Eliminar</td>'),
('ttfadear', 'L', 84, '					<td>Editar</td>'),
('ttfadear', 'L', 85, '				</tr>'),
('ttfadear', 'L', 86, '			</thead>'),
('ttfadear', 'L', 87, '			<tbody>'),
('ttfadear', 'L', 88, '				<?php'),
('ttfadear', 'L', 89, '				foreach ($row as $fila):'),
('ttfadear', 'L', 90, '					$VC03 = $fila[\"AFechaInicio\"];'),
('ttfadear', 'L', 91, '					$VC04 = $fila[\"AFechaTermino\"];'),
('ttfadear', 'L', 92, '					$VC05 = $fila[\"ADenominacion\"];'),
('ttfadear', 'L', 93, '					$VC06 = $fila[\"ANota\"];'),
('ttfadear', 'L', 94, '				?>'),
('ttfadear', 'L', 95, '				<tr>'),
('ttfadear', 'L', 96, '					<td><?=$VC03?></td>'),
('ttfadear', 'L', 97, '					<td><?=$VC04?></td>'),
('ttfadear', 'L', 98, '					<td><?=$VC05?></td>'),
('ttfadear', 'L', 99, '					<td><?=$VC06?></td>'),
('ttfadear', 'L', 100, ' '),
('ttfadear', 'L', 101, '						<!-- iconos dentro de la libreria font-awesome.min.css -->'),
('ttfadear', 'L', 102, '					<td>'),
('ttfadear', 'L', 103, '					<?php if($Baja == \"A\"){ ?>'),
('ttfadear', 'L', 104, '						<a href=\"MoviFac.php?Param1=B&Param2=<?= $VC03?>\" class=\"btn_delete\"><i class=\"fa fa-close\" aria-hidden=\"true\" title=\"Eliminar Registro\"></i></a>'),
('ttfadear', 'L', 105, '					<?php } ?>'),
('ttfadear', 'L', 106, '					</td>'),
('ttfadear', 'L', 107, '					<td>'),
('ttfadear', 'L', 108, '					<?php if($Modi == \"A\"){ ?>'),
('ttfadear', 'L', 109, '						<a href=\"MoviFac.php?Param1=M&Param2=<?= $VC03?>\" class=\"btn_update\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\" title=\"Editar Registro\"></i></a>'),
('ttfadear', 'L', 110, '					<?php } ?>'),
('ttfadear', 'L', 111, '					</td>'),
('ttfadear', 'L', 112, '				</tr>'),
('ttfadear', 'L', 113, '				<?php endforeach ?>'),
('ttfadear', 'L', 114, '			</tbody>'),
('ttfadear', 'L', 115, '		</table>'),
('ttfadear', 'L', 116, '	</div>'),
('ttfadear', 'L', 117, '</body>'),
('ttfadear', 'L', 118, '</html>'),
('ttfadear', 'M', 1, '<!DOCTYPE html>'),
('ttfadear', 'M', 2, '	<html lang=\"es\">'),
('ttfadear', 'M', 3, '	<head>'),
('ttfadear', 'M', 4, '		<meta charset=\"UTF-8\">'),
('ttfadear', 'M', 5, '		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">'),
('ttfadear', 'M', 6, '		<title>Form MoviFac</title>'),
('ttfadear', 'M', 7, '		<link rel=\"stylesheet\" href=\"../../Archivos/CSS/CRUD.css\">'),
('ttfadear', 'M', 8, '		<!--icono de la pestaña (logo)-->'),
('ttfadear', 'M', 9, '		<link rel=\"shortcut icon\" href=\"../../Archivos/Img/logoEnc.ico\" />'),
('ttfadear', 'M', 10, '		<!--jquery para validar campos-->'),
('ttfadear', 'M', 11, '		<script src=\"../../Archivos/JS/jquery-1.11.1.js\"></script>'),
('ttfadear', 'M', 12, '	</head>'),
('ttfadear', 'M', 13, '	<body>'),
('ttfadear', 'M', 14, '	<?php'),
('ttfadear', 'M', 15, ' '),
('ttfadear', 'M', 16, '		include_once \"../../Archivos/Conexiones/conexion.php\";'),
('ttfadear', 'M', 17, ' '),
('ttfadear', 'M', 18, '			//Carga las variables'),
('ttfadear', 'M', 19, ''),
('ttfadear', 'M', 20, '		include($_SERVER[\"DOCUMENT_ROOT\"].\"/Intranet/Archivos/Files/EncaCook.php\");'),
('ttfadear', 'M', 21, '		if(isset($_POST[\"Enviar\"])){'),
('ttfadear', 'M', 22, '			$TipoMovi = $_POST[\"C01\"];'),
('ttfadear', 'M', 23, '			$ConFacAr = $_POST[\"C02\"]; '),
('ttfadear', 'M', 24, '			$C03 = htmlentities(addslashes($_POST[\"C03\"]));'),
('ttfadear', 'M', 25, '			$C04 = htmlentities(addslashes($_POST[\"C04\"]));'),
('ttfadear', 'M', 26, '			$C05 = htmlentities(addslashes($_POST[\"C05\"]));'),
('ttfadear', 'M', 27, '			$C06 = htmlentities(addslashes($_POST[\"C06\"]));'),
('ttfadear', 'M', 28, '			$C07 = htmlentities(addslashes($_POST[\"C07\"]));'),
('ttfadear', 'M', 29, '			$C08 = htmlentities(addslashes($_POST[\"C08\"]));'),
('ttfadear', 'M', 30, '			$C09 = htmlentities(addslashes($_POST[\"C09\"]));'),
('ttfadear', 'M', 31, '			$C010 = htmlentities(addslashes($_POST[\"C010\"]));'),
('ttfadear', 'M', 32, '			$C011 = htmlentities(addslashes($_POST[\"C011\"]));'),
('ttfadear', 'M', 33, ' '),
('ttfadear', 'M', 34, '			//posibles querys'),
('ttfadear', 'M', 35, '			switch( $TipoMovi ){'),
('ttfadear', 'M', 36, '				case \"A\": #Alta'),
('ttfadear', 'M', 37, '				$sql = \"INSERT INTO ttfadear \".'),
('ttfadear', 'M', 38, '					   \"(AAyuntamiento, AEjercicio,AEjercicio, AFechaInicio, AFechaTermino, AArea, ADenominacion, AFundamento, AHipervinculo, AAreaResp, ANota ) VALUES (\'\".$ClavAyun.\"\', \'\".$EjerTrab.\"\', \'\".$C03.\"\', \'\".$C04.\"\', \'\".$C05.\"\', \'\".$C06.\"\', \'\".$C07.\"\', \'\".$C08.\"\', \'\".$C09.\"\', \'\".$C010.\"\', \'\".$C011.\"\' )\";'),
('ttfadear', 'M', 39, '				break;'),
('ttfadear', 'M', 40, '				case \"M\": #Modificacion'),
('ttfadear', 'M', 41, '				$sql = \"UPDATE ttfadear SET \".'),
('ttfadear', 'M', 42, '					   \"AEjercicio = \'\".$C03.\"\', AFechaInicio = \'\".$C04.\"\', AFechaTermino = \'\".$C05.\"\', AArea = \'\".$C06.\"\', ADenominacion = \'\".$C07.\"\', AFundamento = \'\".$C08.\"\', AHipervinculo = \'\".$C09.\"\', AAreaResp = \'\".$C010.\"\', ANota = \'\".$C011.\"\' \".'),
('ttfadear', 'M', 43, '					   \"WHERE AConsecutivo = $ConFacAr\";'),
('ttfadear', 'M', 44, '				break;'),
('ttfadear', 'M', 45, '				case \"B\": #Baja'),
('ttfadear', 'M', 46, '				$sql = \"DELETE FROM ttfadear WHERE AConsecutivo = $ConFacAr\";'),
('ttfadear', 'M', 47, '				break;'),
('ttfadear', 'M', 48, '			}'),
('ttfadear', 'M', 49, '			$resultado = $conexion->prepare($sql);'),
('ttfadear', 'M', 50, '			$resultado->execute();'),
('ttfadear', 'M', 51, '			$MensResp = \"Algo ha fallado!!!\";'),
('ttfadear', 'M', 52, '			if ($resultado) '),
('ttfadear', 'M', 53, '				$MensResp = \"Registro actualizado correctamente\";'),
('ttfadear', 'M', 54, '			$PagiRegr = \"location: ListaFac.php\";'),
('ttfadear', 'M', 55, '			header($PagiRegr);'),
('ttfadear', 'M', 56, '			echo \"<script>alert(\".$MensResp.\");</script>\";'),
('ttfadear', 'M', 57, '			$resultado->closeCursor();'),
('ttfadear', 'M', 58, '		}else{'),
('ttfadear', 'M', 59, '			$BandQuer = true;'),
('ttfadear', 'M', 60, '			if( trim($_GET[\"Param1\"]) != \"\"){'),
('ttfadear', 'M', 61, '				$TipoMovi = $_GET[\"Param1\"];	#Tipo de Movimiento'),
('ttfadear', 'M', 62, '				$ConFacAr = $_GET[\"Param2\"];	#COINCIDENCIA CON LA BD  '),
('ttfadear', 'M', 63, '			}'),
('ttfadear', 'M', 64, '				//Datos del Catalogo'),
('ttfadear', 'M', 65, '			$sql = $conexion->prepare(\"SELECT * FROM tcarea\");'),
('ttfadear', 'M', 66, '			$sql->execute();'),
('ttfadear', 'M', 67, '			$CataArea = $sql->fetchAll();'),
('ttfadear', 'M', 68, '				//Datos de la tabla'),
('ttfadear', 'M', 69, '			$sql = \"SELECT * FROM ttfadear WHERE AConsecutivo = $ConFacAr\";'),
('ttfadear', 'M', 70, '			$resultado = $conexion->prepare($sql);'),
('ttfadear', 'M', 71, '			$resultado->execute();'),
('ttfadear', 'M', 72, '			$result = $resultado->fetch();'),
('ttfadear', 'M', 73, '			$r1 = \"\";'),
('ttfadear', 'M', 74, '			$r2 = \"\";'),
('ttfadear', 'M', 75, '			$r3 = \"\";'),
('ttfadear', 'M', 76, '			$r4 = \"\";'),
('ttfadear', 'M', 77, '			$r5 = \"\";'),
('ttfadear', 'M', 78, '			$r6 = \"\";'),
('ttfadear', 'M', 79, '			$r7 = \"\";'),
('ttfadear', 'M', 80, '			$r8 = \"\";'),
('ttfadear', 'M', 81, '			$r9 = \"\";'),
('ttfadear', 'M', 82, ''),
('ttfadear', 'M', 83, '			if($result){ '),
('ttfadear', 'M', 84, '				$r1 = $result[\"AEjercicio\"];'),
('ttfadear', 'M', 85, '				$r2 = $result[\"AFechaInicio\"];'),
('ttfadear', 'M', 86, '				$r3 = $result[\"AFechaTermino\"];'),
('ttfadear', 'M', 87, '				$r4 = $result[\"AArea\"];'),
('ttfadear', 'M', 88, '				$r5 = $result[\"ADenominacion\"];'),
('ttfadear', 'M', 89, '				$r6 = $result[\"AFundamento\"];'),
('ttfadear', 'M', 90, '				$r7 = $result[\"AHipervinculo\"];'),
('ttfadear', 'M', 91, '				$r8 = $result[\"AAreaResp\"];'),
('ttfadear', 'M', 92, '				$r9 = $result[\"ANota\"];'),
('ttfadear', 'M', 93, '			}'),
('ttfadear', 'M', 94, '			$MesnTiMo = \"\";'),
('ttfadear', 'M', 95, '			switch( $TipoMovi ){'),
('ttfadear', 'M', 96, '				case \"A\":	$MesnTiMo = \"Registrar\";  break;'),
('ttfadear', 'M', 97, '				case \"M\":	$MesnTiMo = \"Actualizar\"; break;'),
('ttfadear', 'M', 98, '				case \"B\":	$MesnTiMo = \"Eliminar\";   break;'),
('ttfadear', 'M', 99, ''),
('ttfadear', 'M', 100, '			}'),
('ttfadear', 'M', 101, '			?>'),
('ttfadear', 'M', 102, '			<!--encabezado-->'),
('ttfadear', 'M', 103, '			<header> <?php require_once($_SERVER[\"DOCUMENT_ROOT\"].\"/Intranet/Archivos/Files/header.php\"); ?> </header>'),
('ttfadear', 'M', 104, '			<br>'),
('ttfadear', 'M', 105, '			<!--formulario de Actualizacion-->'),
('ttfadear', 'M', 106, '			<div class=\"principal\">'),
('ttfadear', 'M', 107, '				<h1>Formulario MoviFac</h1>'),
('ttfadear', 'M', 108, '				<form method=\"post\" name=\"formulario\" onsubmit=\"return validar(this)\">'),
('ttfadear', 'M', 109, '					<!-- opciones de crud-->'),
('ttfadear', 'M', 110, '					<input type=\"hidden\" name=\"C01\" value=\"<?=$TipoMovi?>\">'),
('ttfadear', 'M', 111, '					<input type=\"hidden\" name=\"C02\" value=\"<?=$ConFacAr?>\">'),
('ttfadear', 'M', 112, '					<!--el value de todos los inputs es lo que esta en la base de datos correspondiente al elemento que se pulso-->'),
('ttfadear', 'M', 113, '					<table >'),
('ttfadear', 'M', 114, '						<tr>\r\n	    					<th>AEjercicio</th>\r\n	    					<td><input type=\"text\" name=\"C03\" value=\"<?=$r1?>\" onkeyup=\"checaMensaje(this.value)\"></td>\r\n	    				</tr>'),
('ttfadear', 'M', 115, '						<tr>\r\n	    					<th>AFechaInicio</th>\r\n	    					<td><input type=\"text\" name=\"C04\" value=\"<?=$r2?>\" onkeyup=\"checaMensaje(this.value)\"></td>\r\n	    				</tr>'),
('ttfadear', 'M', 116, '						<tr>\r\n	    					<th>AFechaTermino</th>\r\n	    					<td><input type=\"text\" name=\"C05\" value=\"<?=$r3?>\" onkeyup=\"checaMensaje(this.value)\"></td>\r\n	    				</tr>'),
('ttfadear', 'M', 117, '						<tr>\r\n	    					<th>AArea</th>\r\n	    					<td><input type=\"text\" name=\"C06\" value=\"<?=$r4?>\" onkeyup=\"checaMensaje(this.value)\"></td>\r\n	    				</tr>'),
('ttfadear', 'M', 118, '						<tr>\r\n	    					<th>ADenominacion</th>\r\n	    					<td><input type=\"text\" name=\"C07\" value=\"<?=$r5?>\" onkeyup=\"checaMensaje(this.value)\"></td>\r\n	    				</tr>'),
('ttfadear', 'M', 119, '						<tr>\r\n	    					<th>AFundamento</th>\r\n	    					<td><input type=\"text\" name=\"C08\" value=\"<?=$r6?>\" onkeyup=\"checaMensaje(this.value)\"></td>\r\n	    				</tr>'),
('ttfadear', 'M', 120, '						<tr>\r\n	    					<th>AHipervinculo</th>\r\n	    					<td><input type=\"text\" name=\"C09\" value=\"<?=$r7?>\" onkeyup=\"checaMensaje(this.value)\"></td>\r\n	    				</tr>'),
('ttfadear', 'M', 121, '						<tr>\r\n	    					<th>AAreaResp</th>\r\n	    					<td><input type=\"text\" name=\"C010\" value=\"<?=$r8?>\" onkeyup=\"checaMensaje(this.value)\"></td>\r\n	    				</tr>'),
('ttfadear', 'M', 122, '						<tr>\r\n	    					<th>ANota</th>\r\n	    					<td><input type=\"text\" name=\"C011\" value=\"<?=$r9?>\" onkeyup=\"checaMensaje(this.value)\"></td>\r\n	    				</tr>'),
('ttfadear', 'M', 123, '				</table>'),
('ttfadear', 'M', 124, '				<div class=\"botones\">'),
('ttfadear', 'M', 125, '					<a href=\"ListaFac.php\" name=\"cancelar\" class=\"cancelar\">Cancelar</a>'),
('ttfadear', 'M', 126, '					<input type=\"submit\" name=\"Enviar\" class=\"registrar\" value=\"<?=$MesnTiMo?>\" >'),
('ttfadear', 'M', 127, '				</div>'),
('ttfadear', 'M', 128, '			</form>'),
('ttfadear', 'M', 129, '		</div>'),
('ttfadear', 'M', 130, '		<?php'),
('ttfadear', 'M', 131, '			}'),
('ttfadear', 'M', 132, '		?>'),
('ttfadear', 'M', 133, '	</body>'),
('ttfadear', 'M', 134, '</html>'),
('sctipodocu', 'M', 1, '<!DOCTYPE html>'),
('sctipodocu', 'M', 2, '	<html lang=\"es\">'),
('sctipodocu', 'M', 3, '	<head>'),
('sctipodocu', 'M', 4, '		<meta charset=\"UTF-8\">'),
('sctipodocu', 'M', 5, '		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">'),
('sctipodocu', 'M', 6, '		<title>Form </title>'),
('sctipodocu', 'M', 7, '		<link rel=\"stylesheet\" href=\"../../Archivos/CSS/CRUD.css\">'),
('sctipodocu', 'M', 8, '		<!--icono de la pestaña (logo)-->'),
('sctipodocu', 'M', 9, '		<link rel=\"shortcut icon\" href=\"../../Archivos/Img/logoEnc.ico\" />'),
('sctipodocu', 'M', 10, '		<!--jquery para validar campos-->'),
('sctipodocu', 'M', 11, '		<script src=\"../../Archivos/JS/jquery-1.11.1.js\"></script>'),
('sctipodocu', 'M', 12, '	</head>'),
('sctipodocu', 'M', 13, '	<body>'),
('sctipodocu', 'M', 14, '	<?php'),
('sctipodocu', 'M', 15, ' '),
('sctipodocu', 'M', 16, '		include($_SERVER[\"DOCUMENT_ROOT\"].\"/Intranet/Archivos/Conexiones/conexion.php\");'),
('sctipodocu', 'M', 17, ' '),
('sctipodocu', 'M', 18, '			//Carga las variables'),
('sctipodocu', 'M', 19, ''),
('sctipodocu', 'M', 20, '		include($_SERVER[\"DOCUMENT_ROOT\"].\"/Intranet/Archivos/Files/EncaCook.php\");'),
('sctipodocu', 'M', 21, '		if(isset($_POST[\"Enviar\"])){'),
('sctipodocu', 'M', 22, '			$TipoMovi = $_POST[\"C01\"];'),
('sctipodocu', 'M', 23, '			$ConFacAr = $_POST[\"C02\"]; '),
('sctipodocu', 'M', 24, ' '),
('sctipodocu', 'M', 25, '			//posibles querys'),
('sctipodocu', 'M', 26, '			switch( $TipoMovi ){'),
('sctipodocu', 'M', 27, '				case \"A\": #Alta'),
('sctipodocu', 'M', 28, '				$sql = \"INSERT INTO sctipodocu \".'),
('sctipodocu', 'M', 29, '					   \"(AAyuntamiento, AEjercicio,) VALUES (\'\".$ClavAyun.\"\', \'\".$EjerTrab.\"\', )\";'),
('sctipodocu', 'M', 30, '				break;'),
('sctipodocu', 'M', 31, '				case \"M\": #Modificacion'),
('sctipodocu', 'M', 32, '				$sql = \"UPDATE sctipodocu SET \".'),
('sctipodocu', 'M', 33, '					   \"\".'),
('sctipodocu', 'M', 34, '					   \"WHERE  = $ConFacAr\";'),
('sctipodocu', 'M', 35, '				break;'),
('sctipodocu', 'M', 36, '				case \"B\": #Baja'),
('sctipodocu', 'M', 37, '				$sql = \"DELETE FROM sctipodocu WHERE  = $ConFacAr\";'),
('sctipodocu', 'M', 38, '				break;'),
('sctipodocu', 'M', 39, '			}'),
('sctipodocu', 'M', 40, '			$resultado = $conexion->prepare($sql);'),
('sctipodocu', 'M', 41, '			$resultado->execute();'),
('sctipodocu', 'M', 42, '			$MensResp = \"Algo ha fallado!!!\";'),
('sctipodocu', 'M', 43, '			if ($resultado) '),
('sctipodocu', 'M', 44, '				$MensResp = \"Registro actualizado correctamente\";'),
('sctipodocu', 'M', 45, '			$PagiRegr = \"location: .php\";'),
('sctipodocu', 'M', 46, '			header($PagiRegr);'),
('sctipodocu', 'M', 47, '			echo \"<script>alert(\".$MensResp.\");</script>\";'),
('sctipodocu', 'M', 48, '			$resultado->closeCursor();'),
('sctipodocu', 'M', 49, '		}else{'),
('sctipodocu', 'M', 50, '			$BandQuer = true;'),
('sctipodocu', 'M', 51, '			if( trim($_GET[\"Param1\"]) != \"\"){'),
('sctipodocu', 'M', 52, '				$TipoMovi = $_GET[\"Param1\"];	#Tipo de Movimiento'),
('sctipodocu', 'M', 53, '				$ConFacAr = $_GET[\"Param2\"];	#COINCIDENCIA CON LA BD  '),
('sctipodocu', 'M', 54, '			}'),
('sctipodocu', 'M', 55, '				//Datos del Catalogo'),
('sctipodocu', 'M', 56, '			$sql = $conexion->prepare(\"SELECT * FROM tcarea\");'),
('sctipodocu', 'M', 57, '			$sql->execute();'),
('sctipodocu', 'M', 58, '			$CataArea = $sql->fetchAll();'),
('sctipodocu', 'M', 59, '				//Datos de la tabla'),
('sctipodocu', 'M', 60, '			$sql = \"SELECT * FROM sctipodocu WHERE  = $ConFacAr\";'),
('sctipodocu', 'M', 61, '			$resultado = $conexion->prepare($sql);'),
('sctipodocu', 'M', 62, '			$resultado->execute();'),
('sctipodocu', 'M', 63, '			$result = $resultado->fetch();'),
('sctipodocu', 'M', 64, ''),
('sctipodocu', 'M', 65, '			if($result){ '),
('sctipodocu', 'M', 66, '			}'),
('sctipodocu', 'M', 67, '			$MesnTiMo = \"\";'),
('sctipodocu', 'M', 68, '			switch( $TipoMovi ){'),
('sctipodocu', 'M', 69, '				case \"A\":	$MesnTiMo = \"Registrar\";  break;'),
('sctipodocu', 'M', 70, '				case \"M\":	$MesnTiMo = \"Actualizar\"; break;'),
('sctipodocu', 'M', 71, '				case \"B\":	$MesnTiMo = \"Eliminar\";   break;'),
('sctipodocu', 'M', 72, ''),
('sctipodocu', 'M', 73, '			}'),
('sctipodocu', 'M', 74, '			?>'),
('sctipodocu', 'M', 75, '			<!--encabezado-->'),
('sctipodocu', 'M', 76, '			<header> <?php require_once($_SERVER[\"DOCUMENT_ROOT\"].\"/Intranet/Archivos/Files/header.php\"); ?> </header>'),
('sctipodocu', 'M', 77, '			<br>'),
('sctipodocu', 'M', 78, '			<!--formulario de Actualizacion-->'),
('sctipodocu', 'M', 79, '			<div class=\"principal\">'),
('sctipodocu', 'M', 80, '				<h1>Formulario </h1>'),
('sctipodocu', 'M', 81, '				<form method=\"post\" name=\"formulario\" onsubmit=\"return validar(this)\">'),
('sctipodocu', 'M', 82, '					<!-- opciones de crud-->'),
('sctipodocu', 'M', 83, '					<input type=\"hidden\" name=\"C01\" value=\"<?=$TipoMovi?>\">'),
('sctipodocu', 'M', 84, '					<input type=\"hidden\" name=\"C02\" value=\"<?=$ConFacAr?>\">'),
('sctipodocu', 'M', 85, '					<!--el value de todos los inputs es lo que esta en la base de datos correspondiente al elemento que se pulso-->'),
('sctipodocu', 'M', 86, '					<table >'),
('sctipodocu', 'M', 87, '				</table>'),
('sctipodocu', 'M', 88, '				<div class=\"botones\">'),
('sctipodocu', 'M', 89, '					<a href=\".php\" name=\"cancelar\" class=\"cancelar\">Cancelar</a>'),
('sctipodocu', 'M', 90, '					<input type=\"submit\" name=\"Enviar\" class=\"registrar\" value=\"<?=$MesnTiMo?>\" >'),
('sctipodocu', 'M', 91, '				</div>'),
('sctipodocu', 'M', 92, '			</form>'),
('sctipodocu', 'M', 93, '		</div>'),
('sctipodocu', 'M', 94, '		<?php'),
('sctipodocu', 'M', 95, '			}'),
('sctipodocu', 'M', 96, '		?>'),
('sctipodocu', 'M', 97, '	</body>'),
('sctipodocu', 'M', 98, '</html>'),
('sctipodocu', 'L', 1, '<!DOCTYPE html>'),
('sctipodocu', 'L', 2, '<html lang=\"es\">'),
('sctipodocu', 'L', 3, '<head>'),
('sctipodocu', 'L', 4, '	<meta charset=\"UTF-8\">'),
('sctipodocu', 'L', 5, '	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">'),
('sctipodocu', 'L', 6, '	<title>Ejmeplo01</title>'),
('sctipodocu', 'L', 7, '	<link rel=\"stylesheet\" type=\"text/css\" href=\"../../Archivos/CSS/Consu.css\">'),
('sctipodocu', 'L', 8, '	<!--icono de la pestaña (logo)-->'),
('sctipodocu', 'L', 9, '	<link rel=\"shortcut icon\" href=\"../../Archivos/Img/logoEnc.ico\" />'),
('sctipodocu', 'L', 10, '	<!-- iconos -->'),
('sctipodocu', 'L', 11, '	<link rel=\"stylesheet\" href=\"../../Archivos/CSS/font-awesome.min.css\">'),
('sctipodocu', 'L', 12, '</head>'),
('sctipodocu', 'L', 13, '<body>'),
('sctipodocu', 'L', 14, '	<script language=\"javascript\">'),
('sctipodocu', 'L', 15, '		function CargaEjercicio(Param)'),
('sctipodocu', 'L', 16, ' 		{ location.href = \"Ejmeplo01.php?Param1=\"+Param; }'),
('sctipodocu', 'L', 17, '	</script>'),
('sctipodocu', 'L', 18, ' '),
('sctipodocu', 'L', 19, '	<?php'),
('sctipodocu', 'L', 20, '		//Carga las variables'),
('sctipodocu', 'L', 21, '	include($_SERVER[\"DOCUMENT_ROOT\"].\"/Intranet/Archivos/Files/EncaCook.php\");'),
('sctipodocu', 'L', 22, ' '),
('sctipodocu', 'L', 23, '	if ( isset($_GET[\"Param1\"]) ){'),
('sctipodocu', 'L', 24, '		$EjerTrab = $_GET[\"Param1\"];'),
('sctipodocu', 'L', 25, ' 		$ArCooki3 = $ConsUsua.\"|\".$ClavAyun.\"|\".$DescAyun.\"|\".$ConsUnid.\"|\".$DescUnid.\"|\".$EjerTrab.\"|\";'),
('sctipodocu', 'L', 26, ' 		setcookie(\"CEncaMae\", \"$ArCooki3\");'),
('sctipodocu', 'L', 27, '	}'),
('sctipodocu', 'L', 28, '		//archivo de conexion a la bd'),
('sctipodocu', 'L', 29, '	include($_SERVER[\"DOCUMENT_ROOT\"].\"/Intranet/Archivos/Conexiones/conexion.php\");'),
('sctipodocu', 'L', 30, '		//query pars la tabla Ejmeplo01-'),
('sctipodocu', 'L', 31, '	$sql = \"SELECT * \".'),
('sctipodocu', 'L', 32, '   	       \"FROM sctipodocu \";'),
('sctipodocu', 'L', 32, '	$resultado = $conexion->prepare($sql);'),
('sctipodocu', 'L', 33, '	$resultado->execute();'),
('sctipodocu', 'L', 34, '	$tot_rows = $resultado->rowCount();'),
('sctipodocu', 'L', 35, '	$row = $resultado->fetchAll();'),
('sctipodocu', 'L', 36, ' '),
('sctipodocu', 'L', 37, '		//Datos del Catalogo'),
('sctipodocu', 'L', 38, '	$sql2 = $conexion->prepare(\"SELECT * FROM tcejercicio\");'),
('sctipodocu', 'L', 39, '	$sql2->execute();'),
('sctipodocu', 'L', 40, '	$CEJClave = $sql2->fetchAll();'),
('sctipodocu', 'L', 41, '	?>'),
('sctipodocu', 'L', 42, ' '),
('sctipodocu', 'L', 43, '		<!--encabezado-->'),
('sctipodocu', 'L', 44, '	<header> <?php require_once(\"../../Archivos/Files/header.php\"); ?> </header>'),
('sctipodocu', 'L', 45, '	<br>'),
('sctipodocu', 'L', 46, '	<div class=\"tabla\">'),
('sctipodocu', 'L', 47, '		<div class=\"titulo\"><h2>Ejmeplo01</h2></div>'),
('sctipodocu', 'L', 48, '		<div class=\"botones\">'),
('sctipodocu', 'L', 49, '			<a href=\"../../menuintranet.php\" class=\"regresar\">Regresar</a>'),
('sctipodocu', 'L', 50, '			<div class=\"lista\">'),
('sctipodocu', 'L', 51, '				<select name=\"AAreaResp\" onChange=\"CargaEjercicio(this.value)\" class=\"AAreaResp\">'),
('sctipodocu', 'L', 52, '				<?php'),
('sctipodocu', 'L', 53, '				foreach($CEJClave as $valor):'),
('sctipodocu', 'L', 54, '					$ClavCata = $valor[\"CEJClave\"];'),
('sctipodocu', 'L', 55, '					$DescCata = $valor[\"CEJDescripcion\"];'),
('sctipodocu', 'L', 56, '					$Activo = \"\";'),
('sctipodocu', 'L', 57, '					if ( $ClavCata == $EjerTrab)'),
('sctipodocu', 'L', 58, '						$Activo = \"selected\";'),
('sctipodocu', 'L', 59, '				?>'),
('sctipodocu', 'L', 60, '					<option value=\"<?=$ClavCata?>\" <?=$Activo?>><?=$ClavCata?> </option>'),
('sctipodocu', 'L', 61, '				<?php'),
('sctipodocu', 'L', 62, '				endforeach;'),
('sctipodocu', 'L', 63, '				?>'),
('sctipodocu', 'L', 64, '				</select>'),
('sctipodocu', 'L', 65, '			</div>'),
('sctipodocu', 'L', 66, '			<?php '),
('sctipodocu', 'L', 67, '			if($Alta == \"A\"){ '),
('sctipodocu', 'L', 68, '			?>'),
('sctipodocu', 'L', 69, '				<a href=\".php?Param1=A&Param2=0\" class=\"nuevo\">+Nuevo</a>'),
('sctipodocu', 'L', 70, '			<?php } ?>'),
('sctipodocu', 'L', 71, '		</div>'),
('sctipodocu', 'L', 72, ' '),
('sctipodocu', 'L', 73, '		<table>'),
('sctipodocu', 'L', 74, '			<thead>'),
('sctipodocu', 'L', 75, '				<tr>'),
('sctipodocu', 'L', 76, '					<td>CTDClave</td>'),
('sctipodocu', 'L', 77, '					<td>CTDDescrpcion</td>'),
('sctipodocu', 'L', 78, '					<td>CTDCarpeta</td>'),
('sctipodocu', 'L', 79, '					<td>Eliminar</td>'),
('sctipodocu', 'L', 80, '					<td>Editar</td>'),
('sctipodocu', 'L', 81, '				</tr>'),
('sctipodocu', 'L', 82, '			</thead>'),
('sctipodocu', 'L', 83, '			<tbody>'),
('sctipodocu', 'L', 84, '				<?php'),
('sctipodocu', 'L', 85, '				foreach ($row as $fila):'),
('sctipodocu', 'L', 86, '					$VC03 = $fila[\"CTDClave\"];'),
('sctipodocu', 'L', 87, '					$VC04 = $fila[\"CTDDescrpcion\"];'),
('sctipodocu', 'L', 88, '					$VC05 = $fila[\"CTDCarpeta\"];'),
('sctipodocu', 'L', 89, '				?>'),
('sctipodocu', 'L', 90, '				<tr>'),
('sctipodocu', 'L', 91, '					<td><?=$VC03?></td>'),
('sctipodocu', 'L', 92, '					<td><?=$VC04?></td>'),
('sctipodocu', 'L', 93, '					<td><?=$VC05?></td>'),
('sctipodocu', 'L', 94, ' '),
('sctipodocu', 'L', 95, '						<!-- iconos dentro de la libreria font-awesome.min.css -->'),
('sctipodocu', 'L', 96, '					<td>'),
('sctipodocu', 'L', 97, '					<?php if($Baja == \"A\"){ ?>'),
('sctipodocu', 'L', 98, '						<a href=\".php?Param1=B&Param2=<?= $VC03?>\" class=\"btn_delete\"><i class=\"fa fa-close\" aria-hidden=\"true\" title=\"Eliminar Registro\"></i></a>'),
('sctipodocu', 'L', 99, '					<?php } ?>'),
('sctipodocu', 'L', 100, '					</td>'),
('sctipodocu', 'L', 101, '					<td>'),
('sctipodocu', 'L', 102, '					<?php if($Modi == \"A\"){ ?>'),
('sctipodocu', 'L', 103, '						<a href=\".php?Param1=M&Param2=<?= $VC03?>\" class=\"btn_update\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\" title=\"Editar Registro\"></i></a>'),
('sctipodocu', 'L', 104, '					<?php } ?>'),
('sctipodocu', 'L', 105, '					</td>'),
('sctipodocu', 'L', 106, '				</tr>'),
('sctipodocu', 'L', 107, '				<?php endforeach ?>'),
('sctipodocu', 'L', 108, '			</tbody>'),
('sctipodocu', 'L', 109, '		</table>'),
('sctipodocu', 'L', 110, '	</div>'),
('sctipodocu', 'L', 111, '</body>'),
('sctipodocu', 'L', 112, '</html>');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acopcser`
--
ALTER TABLE `acopcser`
  ADD PRIMARY KEY (`COSClave`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
