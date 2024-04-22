-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2024 a las 00:43:51
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acopcser`
--

INSERT INTO `acopcser` (`COSTipSer`, `COSClave`, `COSDescripcion`, `COSDireccion`) VALUES
('01', '001', 'Creación', 'ComSocial/PaginaWeb/Alta/PWRegistroInic.php?Param1=01'),
('02', '001', 'Creación', 'ComSocial/BaneLeyaNoti/Alta/LayNotTriInic.php?Param1=02'),
('03', '001', 'Creación', 'ComSocial/BaneLeyaNoti/Alta/LayNotTriInic.php?Param1=04'),
('04', '001', 'Creación', 'ComSocial/PaginaWeb/Alta/PWRegistroInic.php?Param1=04'),
('05', '001', 'Unidad', '/Intranet/ComSocial/Supervisores/SupeUnidRegi.php'),
('10', '001', 'Regidores', 'ComSocial/PaginaWeb/Alta/PWRegistroInic.php?Param1=10'),
('11', '001', 'Directores', 'ComSocial/PaginaWeb/Alta/PWRegistroInic.php?Param1=11'),
('01', '002', 'Revición', 'ComSocial/PaginaWeb/Revision/PWRegistroInic.php?Param1=01'),
('02', '002', 'Revicion', 'ComSocial/BaneLeyaNoti/Revision/LayNotTriInic.php?Param1=02'),
('03', '002', 'Revicion', 'ComSocial/BaneLeyaNoti/Revision/LayNotTriInic.php?Param1=04'),
('04', '002', 'Revicion', 'ComSocial/BaneLeyaNoti/Revision/LayNotTriInic.php?Param1=04'),
('05', '002', 'Registro', '/Intranet/ComSocial/Supervisores/SuperviDepe.php'),
('01', '003', 'Publicación', 'ComSocial/BaneLeyaNoti/Publica/LayNotTriInic.php?Param1=01'),
('02', '003', 'Publicacion', 'ComSocial/BaneLeyaNoti/Publica/LayNotTriInic.php?Param1=02'),
('04', '003', 'Publicacion', 'ComSocial/BaneLeyaNoti/Publica/LayNotTriInic.php?Param1=04'),
('01', '004', 'Cierre', 'ComSocial/BaneLeyaNoti/Cierre/LayNotTriInic.php?Param1=01'),
('02', '004', 'Cierre', 'ComSocial/BaneLeyaNoti/Cierre/LayNotTriInic.php?Param1=02'),
('03', '004', 'Cierre', 'ComSocial/BaneLeyaNoti/Cierre/LayNotTriInic.php?Param1=03'),
('04', '004', 'Cierre', 'ComSocial/BaneLeyaNoti/Cierre/LayNotTriInic.php?Param1=04');

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
('01', 'Baners'),
('02', 'Layers Informativo'),
('03', 'Layers Seguridad'),
('04', 'Noticias'),
('05', 'Supervisores'),
('06', 'Empresas'),
('10', 'Cabildo'),
('11', 'Directores');

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
('105', 1, '10', '001', 'A', 'A', 'A', 'A', 16),
('105', 1, '11', '001', 'A', 'A', 'A', 'A', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etsupeunid`
--

CREATE TABLE `etsupeunid` (
  `SAyuntamiento` char(3) NOT NULL,
  `SUnidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etsupeunid`
--

INSERT INTO `etsupeunid` (`SAyuntamiento`, `SUnidad`) VALUES
('105', 97);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paso`
--

CREATE TABLE `paso` (
  `campo01` varchar(50) NOT NULL,
  `campo02` varchar(50) NOT NULL,
  `campo03` varchar(100) NOT NULL,
  `campo04` varchar(100) NOT NULL,
  `campo05` varchar(100) NOT NULL,
  `campo06` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paso`
--

INSERT INTO `paso` (`campo01`, `campo02`, `campo03`, `campo04`, `campo05`, `campo06`) VALUES
('2023', '1T', '1CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\1 CONTABLE\\', '1.-Estado de Actividades.pdf'),
('2023', '1T', '1CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\1 CONTABLE\\', '2.-Estado de la Situci?n Financiera.pdf'),
('2023', '1T', '1CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\1 CONTABLE\\', '3.-Estado de Cambios en la Situaci?n Financiera.pdf'),
('2023', '1T', '1CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\1 CONTABLE\\', '4.-Estado de Variaci?n en la hacienda P?blica.pdf'),
('2023', '1T', '1CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\1 CONTABLE\\', '5.-Estado de Flujo de Efectivo.pdf'),
('2023', '1T', '1CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\1 CONTABLE\\', '6.-Notas a los Estados Financieros.pdf'),
('2023', '1T', '1CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\1 CONTABLE\\', '7.-Estado Anal?tico del Activo.pdf'),
('2023', '1T', '1CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\1 CONTABLE\\', '8.-Estado Anal?tico de Deuda y Otros Pasivos.pdf'),
('2023', '1T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\2 PRESUPUESTAL\\', '1.-Estado Analitico de Egresos por Clasificacion Clasificaci?n Por Objeto de Gasto.pdf'),
('2023', '1T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\2 PRESUPUESTAL\\', '2.- Estado Analitico de Egresos por Clasificacion Economica.pdf'),
('2023', '1T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\2 PRESUPUESTAL\\', '3.- Estado Analitico de Egresos por Clasificacion Programatica.pdf'),
('2023', '1T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\2 PRESUPUESTAL\\', '4.- Estado Analitico de Egresos por Clasificacion Administrativa..pdf'),
('2023', '1T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\2 PRESUPUESTAL\\', '5.- Estado Analitico de Egresos por Clasificacion Funcional.pdf'),
('2023', '1T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\2 PRESUPUESTAL\\', '6.-Estado Anal?tico de Ingresos.pdf'),
('2023', '1T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\2 PRESUPUESTAL\\', '7.-Estado Comparativo presupuestal de Egresos.pdf'),
('2023', '1T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\2 PRESUPUESTAL\\', '8-Estado Comparativo presupuestal de Ingresos.pdf'),
('2023', '1T', ' LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\3 LEY DE DICIPLINA FINANCIERA\\', '1.-BALANCE PRESUPUESTARIO-LDF.pdf'),
('2023', '1T', ' LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\3 LEY DE DICIPLINA FINANCIERA\\', '2.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION ADMINISTRATIVA-LDF.pdf'),
('2023', '1T', ' LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\3 LEY DE DICIPLINA FINANCIERA\\', '3.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION FUNCIONAL-LDF.pdf'),
('2023', '1T', ' LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\3 LEY DE DICIPLINA FINANCIERA\\', '4.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO POR OBJETO DE GASTO-LDF.pdf'),
('2023', '1T', ' LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\3 LEY DE DICIPLINA FINANCIERA\\', '5.- ESTADO ANANLITICO DE INGRESOS DETALLADO-LDF.pdf'),
('2023', '1T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\4 TRASPARENCIA Y DIFUSION\\', '1. Programas con Recursos Concurrentes por Ordenes de Gobierno.pdf'),
('2023', '1T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\4 TRASPARENCIA Y DIFUSION\\', '2. Seguimiento a Recursos Federales Ejercicio del Gasto FORTAMUN..pdf'),
('2023', '1T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\4 TRASPARENCIA Y DIFUSION\\', '3. Seguimiento de Recursos Federales Destino del Gasto FAIS.pdf'),
('2023', '1T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\4 TRASPARENCIA Y DIFUSION\\', '4. Ejercicio y Destino de Gasto Federalizado y Reintegros..pdf'),
('2023', '1T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\4 TRASPARENCIA Y DIFUSION\\', '5. Avance Aplicacion Recursos Asignados a Seguridad Publica..pdf'),
('2023', '1T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\4 TRASPARENCIA Y DIFUSION\\', '6. Obligaciones pagadas o garantizadas con Fondos Federales.pdf'),
('2023', '1T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\4 TRASPARENCIA Y DIFUSION\\', '7. Montos Pagados por Ayudas y Subsidios..pdf'),
('2023', '1T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\4 TRASPARENCIA Y DIFUSION\\', '8. Difusion de los Resultados de las Evaluaciones.pdf'),
('2023', '1T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\4 TRASPARENCIA Y DIFUSION\\', '9. Informe sobre pasivos contingentes.pdf'),
('2023', '1T', '5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS\\', 'DESTINO DEL GASTO.pdf'),
('2023', '1T', '5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS\\', 'EJERCICIO DEL GASTO.pdf'),
('2023', '1T', '5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\1T\\5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS\\', 'INDICADORES.pdf'),
('2023', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\1 CONTABLE\\', 'ESTADO ANALITICO DE LA DEUDA Y OTROS PASIVOS.pdf'),
('2023', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\1 CONTABLE\\', 'ESTADO ANALITICO DEL ACTIVO.pdf'),
('2023', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\1 CONTABLE\\', 'ESTADO DE ACTIVIDADES.pdf'),
('2023', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\1 CONTABLE\\', 'ESTADO DE CAMBIOS EN LA SITUACION FINANCIERA.pdf'),
('2023', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\1 CONTABLE\\', 'ESTADO DE CARIACION EN LA HACIENDA PUBLICA.pdf'),
('2023', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\1 CONTABLE\\', 'ESTADO DE FLUJO DE EFECTIVO.pdf'),
('2023', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\1 CONTABLE\\', 'ESTADO DE SITUACION FINANCIERA.pdf'),
('2023', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\1 CONTABLE\\', 'INFORME SOBRE PASIVOS CONTINGENTES.pdf'),
('2023', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\1 CONTABLE\\', 'NOTAS A LOS ESTADOS FINANCIEROS.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Ejercicio del Fondo de Aportaciones para la Infraestructura Social.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Fondo de Aportaciones para la Seguridad Publica de los Estados y del DF, de los Municipios (FASP 202'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Formato de Informacion de obligaciones Pagadas o Garantizadas con Fondos Federales.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Formato de Informaci?n de Aplicaci?n de los Recursos del FORTAMUN.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Formato de Programas con Recursos por Orden de Gobierdo.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Formato del Ejercicio y Destino del Gasto Federalizado y Reintegros.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Formato para la Difusi?n de los Resultados de las Evaluaciones.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'INDICADORES DE RESULTADOS.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Inventario de Bienes Inmuebles.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Inventario de Bienes Muebles.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'Montos Pagados po Ayudas y Subsidios.pdf'),
('2023', '2T', '4 TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\4 TRASPARENCIA Y DIFUSION\\', 'PROGRAMAS Y PROYECTOS DE INVERSION.pdf'),
('2023', '2T', '5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS\\', 'DESTINO DEL GASTO 2DO TRIM 2023 VALIDADO.pdf'),
('2023', '2T', '5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS\\', 'EJERCICIO DEL GASTO 2DO TRIM 2023 VALIDADO.pdf'),
('2023', '2T', '5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\5 SISTEMA DE RECURSOS FEDERALES TRANSFERIDOS\\', 'INDICADORES 2DO TRIMESTRE 2023 VALIDADO.pdf'),
('2023', '2T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\LEY DE DICIPLINA FINANCIERA\\', 'Balance Presupuestario.pdf'),
('2023', '2T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\LEY DE DICIPLINA FINANCIERA\\', 'Estado Analitico de Ingresos Detallado.pdf'),
('2023', '2T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\LEY DE DICIPLINA FINANCIERA\\', 'Estado Analitico del Ejercicio de Presupuesto de Egresos detallado Clasificacion Funcional.pdf'),
('2023', '2T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\LEY DE DICIPLINA FINANCIERA\\', 'Estado Analitico del Ejercicio del Presuouesto de Egresis Detallado Clasificacion por Objeto de Gast'),
('2023', '2T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\LEY DE DICIPLINA FINANCIERA\\', 'Estado Analitico del Ejercicio del Presupuesto de Egresos Detallado Clasificaci?n Administrativa.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'ENDEUDAMIENTO NETO.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'ESTADO ANALITICO DE INGRESOS.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificacion por Objeto de Gasto.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificacion Programatica.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Economica.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'Estado Analitico del Ejercicio del Presupuesto de Egresos por Clasificacion Administrativa.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'Estado Analitico del Ejercicio del Presupuesto de Egresos por Clasificacion Funcional.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'Estado Comparativo Presupuestal de Egresos.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'ESTADO COMPARATIVO PRESUPUESTAL DE INGRESOS.pdf'),
('2023', '2T', 'PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\2T\\PRESUPUESTAL\\', 'INTERESES DE LA DEUDA.pdf'),
('2023', 'pae2023', 'pae2023', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\pae2023\\', '01 TdR EED Zinacantepec.pdf'),
('2023', 'pae2023', 'pae2023', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\pae2023\\', '02 TdR ED Zinacantepec 2023.pdf'),
('2023', 'pae2023', 'pae2023', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\pae2023\\', 'PAE_2023.pdf'),
('2023', 'presupuesto2023', 'presupuesto2023', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\presupuesto2023\\', '1 Norma para armonizar la informaci?n adicional a la iniciativa de la Ley de Ingresos.pdf'),
('2023', 'presupuesto2023', 'presupuesto2023', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\presupuesto2023\\', '2 Norma para armonizar la presentaci?n de la informaci?n adicional del Proyecto del Presupuesto de E'),
('2023', 'presupuesto2023', 'presupuesto2023', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\presupuesto2023\\', '3 Norma para establecer la estructura del Calendario de Ingresos base mensual.pdf'),
('2023', 'presupuesto2023', 'presupuesto2023', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\presupuesto2023\\', '4 Norma para establecer la estructura del Calendario del Presupuesto de Egresos base mensual.pdf'),
('2023', 'presupuesto2023', 'presupuesto2023', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2023\\presupuesto2023\\', '5 Norma para la difusi?n a la ciudadan?a de la Ley de Ingresos y del Presupuesto de Egresos.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', '6.-Notas a los Estados Financieros.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', '8.-Estado Anal?tico de Deuda y Otros Pasivos.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', 'EDO ACT 032022.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', 'EDO ANA ACT 032022.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', 'EDO ANA DEU Y OTR PAS 032022.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', 'EDO CAM SIT FIN 032022.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', 'EDO FLU EFE 032022.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', 'EDO SIT FIN 032022.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', 'EDO VAR HAC PUB 032022.pdf'),
('2022', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\contable\\', 'NOTAS EDO FIN 032022.pdf'),
('2022', '1T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\LEY DE DICIPLINA FINANCIERA\\', 'BPLDF0105202201.pdf'),
('2022', '1T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\LEY DE DICIPLINA FINANCIERA\\', 'EAEPECALDF0105202201.pdf'),
('2022', '1T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\LEY DE DICIPLINA FINANCIERA\\', 'EAEPECFLDF0105202201.pdf'),
('2022', '1T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\LEY DE DICIPLINA FINANCIERA\\', 'EAEPECOGLDF0105202201.pdf'),
('2022', '1T', 'LEY DE DICIPLINA FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\LEY DE DICIPLINA FINANCIERA\\', 'EAPECSPLDF0105202201.pdf'),
('2022', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\presupuestaria\\', 'EAEPE0105202203porobjetodegasto.pdf'),
('2022', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\presupuestaria\\', 'EAI0105202203.pdf'),
('2022', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\presupuestaria\\', 'ECPE0105202203.pdf'),
('2022', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\presupuestaria\\', 'ECPI0000202203.pdf'),
('2022', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\presupuestaria\\', 'ESTADO ANALITICO DEL EJERCICIO DEL PRESUPUESTO DE EGRESOS POR CLASIFICACION ECONOMICA.pdf'),
('2022', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\presupuestaria\\', 'ESTADO ANALITICO DEL EJERCICIO DEL PRESUPUESTO DE EGRESOS POR CLASIFICACION PROGRAMATICA.pdf'),
('2022', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\tansparencia\\', '1. Programas con Recursos Concurrentes por Ordenes de Gobierno.pdf'),
('2022', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\tansparencia\\', '2. Seguimiento a Recursos Federales Ejercicio del Gasto FORTAMUN.pdf'),
('2022', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\tansparencia\\', '3. Seguimiento de Recursos Federales Destino del Gasto FAIS.pdf'),
('2022', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\tansparencia\\', '4. Ejercicio y Destino de Gasto Federalizado y Reintegros.pdf'),
('2022', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\tansparencia\\', '5. Avance Aplicacion Recursos Asignados a Seguridad Publica.pdf'),
('2022', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\tansparencia\\', '6. Obligaciones pagadas o garantizadas con Fondos Federales.pdf'),
('2022', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\tansparencia\\', '7. Montos Pagados por Ayudas y Subsidios.pdf'),
('2022', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\1T\\tansparencia\\', '8. Difusion de los Resultados de las Evaluaciones.pdf'),
('2022', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\contable\\', '1.-Estado de Actividades.pdf'),
('2022', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\contable\\', '2.-Estado de la Situci?n Financiera.pdf'),
('2022', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\contable\\', '3.-Estado de Cambios en la Situaci?n Financiera.pdf'),
('2022', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\contable\\', '4.-Estado de Variaci?n en la hacienda P?blica.pdf'),
('2022', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\contable\\', '5.-Estado de Flujo de Efectivo.pdf'),
('2022', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\contable\\', '6.-Notas a los Estados Financieros.pdf'),
('2022', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\contable\\', '7.-Estado Anal?tico del Activo.pdf'),
('2022', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\contable\\', '8.-Estado Anal?tico de Deuda y Otros Pasivos.pdf'),
('2022', '2T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\LDF\\', '1.-BALANCE PRESUPUESTARIO-LDF.pdf'),
('2022', '2T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\LDF\\', '2.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION ADMINISTRATIVA.pdf'),
('2022', '2T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\LDF\\', '3.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION FUNCIONAL.pdf'),
('2022', '2T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\LDF\\', '4.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO POR OBJETO DE GASTO.pdf'),
('2022', '2T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\LDF\\', '5.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION DE SERVICIOS PERSONALES POR CATEGORIA.pdf'),
('2022', '2T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\LDF\\', '6.-ESTADO ANALITICO DE INGRESOS DETALLADO.pdf'),
('2022', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\presupuestaria\\', '1.- Estado Analitico de Egresos por Objeto de Gasto.pdf'),
('2022', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\presupuestaria\\', '2.- Estado Analitico de Egresos por Clasificacion Economica.pdf'),
('2022', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\presupuestaria\\', '3.- Estado Analitico de Egresos por Clasificacion Programatica.pdf'),
('2022', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\presupuestaria\\', '4.- Estado Analitico de Egresos por Clasificacion Administrativa.pdf'),
('2022', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\presupuestaria\\', '5.- Estado Analitico de Egresos por Clasificacion Funcional.pdf'),
('2022', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\presupuestaria\\', '6.-Estado Anal?tico de Ingresos.pdf'),
('2022', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\presupuestaria\\', '7.-Estado Comparativo presupuestal de Egresos.pdf'),
('2022', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\presupuestaria\\', '8.-Estado Comparativo presupuestal de Ingresos.pdf'),
('2022', '2T', 'SRFT CIERRE 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\SRFT\\SRFT CIERRE 2021\\', '1. EJERCICIO DEL GASTO CIERRE 2021 VALIDADO.pdf'),
('2022', '2T', 'SRFT CIERRE 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\SRFT\\SRFT CIERRE 2021\\', '2. INDICADORES CIERRE 2021 VALIDADO.pdf'),
('2022', '2T', 'SRFT CIERRE 2023', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\SRFT\\SRFT CIERRE 2021\\', '3. DESTINO DEL GASTO CIERRE 2021 VALIDADO.pdf'),
('2022', '2T', 'SFRT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\SRFT\\', 'SRFT CIERRE 2021\\1. EJERCICIO DEL GASTO CIERRE 2021 VALIDADO.pdf'),
('2022', '2T', 'SFRT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\SRFT\\', 'SRFT CIERRE 2021\\2. INDICADORES CIERRE 2021 VALIDADO.pdf'),
('2022', '2T', 'SFRT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\SRFT\\', 'SRFT CIERRE 2021\\3. DESTINO DEL GASTO CIERRE 2021 VALIDADO.pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '1. Programas con Recursos Concurrentes por Ordenes de Gobierno.pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '2. Seguimiento a Recursos Federales Ejercicio del Gasto FORTAMUN.pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '3. Seguimiento de Recursos Federales Destino del Gasto FAIS.pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '4. Ejercicio y Destino de Gasto Federalizado y Reintegros.pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '5. Avance Aplicacion Recursos Asignados a Seguridad Publica.pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '6. Obligaciones pagadas o garantizadas con Fondos Federales.pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '7. Montos Pagados por Ayudas y Subsidios..pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '8. Bienes Muebles.pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '9. Bienes Inmuebles.pdf'),
('2022', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\2T\\transparencia\\', '10. Difusion de los Resultados de las Evaluaciones.pdf'),
('2022', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\contable\\', '1.-Estado de Actividades.pdf'),
('2022', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\contable\\', '2.-Estado de la Situci?n Financiera.pdf'),
('2022', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\contable\\', '3.-Estado de Cambios en la Situaci?n Financiera.pdf'),
('2022', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\contable\\', '4.-Estado de Variaci?n en la hacienda P?blica.pdf'),
('2022', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\contable\\', '5.-Estado de Flujo de Efectivo.pdf'),
('2022', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\contable\\', '6.-Notas a los Estados Financieros.pdf'),
('2022', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\contable\\', '7.-Estado Anal?tico del Activo.pdf'),
('2022', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\contable\\', '8.-Estado Anal?tico de Deuda y Otros Pasivos.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '1.-BALANCE PRESUPUESTARIO-LDF.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '2.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION ADMINISTRATIVA.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '3.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION FUNCIONAL.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '4.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO POR OBJETO DE GASTO.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '5.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION DE SERVICIOS PERSONALES POR CATEGORIA.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '6.-ESTADO ANALITICO DE INGRESOS DETALLADO.pdf'),
('2022', '3T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\presupuestaria\\', '1.- Estado Analitico de Egresos por Objeto de Gasto.pdf'),
('2022', '3T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\presupuestaria\\', '2.- Estado Analitico de Egresos por Clasificacion Economica.pdf'),
('2022', '3T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\presupuestaria\\', '3.- Estado Analitico de Egresos por Clasificacion Programatica.pdf'),
('2022', '3T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\presupuestaria\\', '4.- Estado Analitico de Egresos por Clasificacion Administrativa.pdf'),
('2022', '3T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\presupuestaria\\', '5.- Estado Analitico de Egresos por Clasificacion Funcional.pdf'),
('2022', '3T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\presupuestaria\\', '6.-Estado Anal?tico de Ingresos.pdf'),
('2022', '3T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\presupuestaria\\', '7.-Estado Comparativo presupuestal de Egresos.pdf'),
('2022', '3T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\presupuestaria\\', '8.-Estado Comparativo presupuestal de Ingresos.pdf'),
('2022', '3T', 'SRFT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\SRFT\\', 'DESTINO DEL GASTO 3ER TRIMESTRE 2022 VALIDADO.pdf'),
('2022', '3T', 'SRFT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\SRFT\\', 'EJERCICIO DEL GASTO 3ER TRIMESTRE 2022 VALIDADO.pdf'),
('2022', '3T', 'SRFT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\SRFT\\', 'INDICADORES 3ER TRIMESTRE 2022 VALIDADO.pdf'),
('2022', '3T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\transparencia\\', '1. Programas con Recursos Concurrentes por Ordenes de Gobierno.pdf'),
('2022', '3T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\transparencia\\', '2. Seguimiento a Recursos Federales Ejercicio del Gasto FORTAMUN.pdf'),
('2022', '3T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\transparencia\\', '3. Seguimiento de Recursos Federales Destino del Gasto FAIS.pdf'),
('2022', '3T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\transparencia\\', '4. Ejercicio y Destino de Gasto Federalizado y Reintegros.pdf'),
('2022', '3T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\transparencia\\', '5. Avance Aplicacion Recursos Asignados a Seguridad Publica.pdf'),
('2022', '3T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\transparencia\\', '6. Obligaciones pagadas o garantizadas con Fondos Federales.pdf'),
('2022', '3T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\transparencia\\', '7. Montos Pagados por Ayudas y Subsidios..pdf'),
('2022', '3T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\transparencia\\', '8. Difusion de los Resultados de las Evaluaciones.pdf'),
('2022', '3T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\transparencia\\', '9. Informe sobre pasivos contingentes.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '1.-BALANCE PRESUPUESTARIO-LDF.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '2.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION ADMINISTRATIVA.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '3.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION FUNCIONAL.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '4.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO POR OBJETO DE GASTO.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '5.-ESTADO ANALITICO DEL P.EGRESOS DETALLADO CLASIFICACION DE SERVICIOS PERSONALES POR CATEGORIA.pdf'),
('2022', '3T', 'LDF', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\3T\\LDF\\', '6.-ESTADO ANALITICO DE INGRESOS DETALLADO.pdf'),
('2022', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\presupuestaria\\', '1.- Estado Analitico de Egresos por Objeto de Gasto.pdf'),
('2022', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\presupuestaria\\', '2.- Estado Analitico de Egresos por Clasificacion Economica.pdf'),
('2022', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\presupuestaria\\', '3.- Estado Analitico de Egresos por Clasificacion Programatica.pdf'),
('2022', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\presupuestaria\\', '4.- Estado Analitico de Egresos por Clasificacion Administrativa.pdf'),
('2022', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\presupuestaria\\', '5.- Estado Analitico de Egresos por Clasificacion Funcional.pdf'),
('2022', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\presupuestaria\\', '6.-Estado Anal?tico de Ingresos.pdf'),
('2022', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\presupuestaria\\', '7.-Estado Comparativo presupuestal de Egresos.pdf'),
('2022', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\presupuestaria\\', '8.-Estado Comparativo presupuestal de Ingresos.pdf'),
('2022', '4T', 'SRFT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\SRFT\\', '1 EJERCICIO DEL GASTO 4TO TRIMESTRE 2022 VALIDADO.pdf'),
('2022', '4T', 'SRFT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\SRFT\\', '2 INDICADORES 4TO TRIMESTRE 2022 VALIDADOS.pdf'),
('2022', '4T', 'SRFT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\SRFT\\', '3. DESTINO DEL GASTO 4TO TRIM 2022  VALIDADO.pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '1. Programas con Recursos Concurrentes por Ordenes de Gobierno.pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '10. Bienes muebles.pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '11. Bienes inmuebles.pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '2. Seguimiento a recursos federales ejercicio del gasto fortamun.pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '3. Seguimiento de Recursos Federales Destino del Gasto FAIS.pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '4. Ejercicio y destino de gasto federalizado y reintegros.pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '5. Avance aplicacion recursos asignados a seguridad publica.pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '6. Obligaciones pagadas o garantizadas con Fondos Federales.pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '7. montos pagados por ayudas y subsidios..pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '8. Difusion de los Resultados de las Evaluaciones..pdf'),
('2022', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\4T\\transparencia\\', '9. Informe sobre pasivos contingentes.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '0.- ACUSE OFICIO CUENTA PUBLICA 2022.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '10.- ESTADO ANALITICO DE LA DEUDA Y OTROS PASIVOS.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '11. ESTADO ANALITICO DE EGRESOS CLASIFICACION ADMINISTRATIVA.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '12. ESTADO ANALITICO DE EGRESOS CLASIFICACION ECONOMICA.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '13. ESTADO ANALITICO DE EGRESOS CLASIFICACION OBJETO DEL GASTO.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '14. ESTADO ANALITICO DE EGRESOS CLASIFICACION FUNCIONAL.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '15. ENDEUDAMIENTO NETO.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '16. INTERESES DE LA DEUDA.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '17. INVENTARIO DE BIENES MUEBLES 2021.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '18. INVENTARIO DE BIENES INMUEBLES 2021.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '0.- ACUSE OFICIO CUENTA PUBLICA 2022.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '10.- ESTADO ANALITICO DE LA DEUDA Y OTROS PASIVOS.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '11. ESTADO ANALITICO DE EGRESOS CLASIFICACION ADMINISTRATIVA.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '12. ESTADO ANALITICO DE EGRESOS CLASIFICACION ECONOMICA.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '13. ESTADO ANALITICO DE EGRESOS CLASIFICACION OBJETO DEL GASTO.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '14. ESTADO ANALITICO DE EGRESOS CLASIFICACION FUNCIONAL.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '15. ENDEUDAMIENTO NETO.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '16. INTERESES DE LA DEUDA.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '17. INVENTARIO DE BIENES MUEBLES 2021.pdf'),
('2022', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\Cuenta Publica\\', '18. INVENTARIO DE BIENES INMUEBLES 2021.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '1.- ACUSE OFICIO CUENTA PUBLICA 2022.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '2.-estado analitico de ingresos.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '3.-estado analitico del activo.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '4.-estado analitico del ejercicio del presupuesto de egresos.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '5.-estado de actividades comparativo.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '6.-estado de cambios en la situacion financiera.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '7.-estado de flujos de efectivo.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '8.-estado de situacion financiera comparativo.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '9.-estado de variacion en la hacienda publica.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '10.-notas a los estados financieros.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '11.- estado analitico de la deuda y otros pasivos.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '12.-estado analitico de egresos clasificacion administrativa.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '13.- estado analitico de egresos clasificacion economica.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '14.- estado analitico de egresos clasificacion objeto del gasto.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '15.-estado analitico de egresos clasificacion funcional.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '16.-endeudamiento neto.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '17.-intereses de la deuda.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '18.-inventario de bienes muebles 2022.pdf'),
('2022', 'CUENTA PUBLICA 2022', 'CUENTA PUBLICA 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\cuentapublica2022\\', '19.-inventario de bienes inmuebles 2022.pdf'),
('2022', 'PRESUPUESTO 2022', 'PRESUPUESTO 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\PRESUPUESTO 2022\\', 'Norma para armonizar la informaci?n adicional a la iniciativa de la Ley de Ingresos.pdf'),
('2022', 'PRESUPUESTO 2022', 'PRESUPUESTO 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\PRESUPUESTO 2022\\', 'Norma para armonizar la presentaci?n de la informaci?n adicional del Proyecto del Presupuesto de Egr'),
('2022', 'PRESUPUESTO 2022', 'PRESUPUESTO 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\PRESUPUESTO 2022\\', 'Norma para establecer la estructura del Calendario de Ingresos base mensual.pdf'),
('2022', 'PRESUPUESTO 2022', 'PRESUPUESTO 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\PRESUPUESTO 2022\\', 'Norma para establecer la estructura del Calendario del Presupuesto de Egresos base mensual.pdf'),
('2022', 'PRESUPUESTO 2022', 'PRESUPUESTO 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\PRESUPUESTO 2022\\', 'Norma para la difusi?n a la ciudadan?a de la Ley de Ingresos y del Presupuesto de Egresos.pdf'),
('2022', 'SFRT', 'SRFT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\SRFT\\', 'DESTINO DEL GASTO 1ER TIM 2022 FISM.pdf'),
('2022', 'SFRT', 'SRFT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\SRFT\\', 'EJERCICIO DEL GASTO 1ER TIM 2022 FISM Y FORTAMUN.pdf'),
('2022', 'SFRT', 'SRFT', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2022\\SRFT\\', 'INDICADORES 1ER TRIM 2022 FISM Y FORTAMUN.pdf'),
('2021', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\contable\\', '01.-Estado de Flujo de Efectivo-1t21.pdf'),
('2021', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\contable\\', '02.-Estado de Situacion Financiera-1t21.pdf'),
('2021', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\contable\\', '03.-Estado de Variacion de la Hacienda Publica-1t21.pdf'),
('2021', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\contable\\', '04.-Estado de Flujo de Efectivo-1t21.pdf'),
('2021', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\contable\\', 'Estado Analitcio del Activo1t21.pdf'),
('2021', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\contable\\', 'Estado Analitico de Deuda y Otros Pasivos1t21.pdf'),
('2021', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\contable\\', 'Estado de Actividades-1t21.pdf'),
('2021', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\contable\\', 'Notas edos. financieros-1t21.pdf'),
('2021', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\presupuestaria\\', 'Endeudamiento Neto1T21.pdf'),
('2021', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\presupuestaria\\', 'Estado Analitico de Egresos por Clasificacion Administrativa1t21.pdf'),
('2021', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\presupuestaria\\', 'Estado Analitico de Egresos por Clasificacion Economica1t21.pdf'),
('2021', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\presupuestaria\\', 'Estado Analitico de Egresos por Clasificacion Funcional-1t21.pdf'),
('2021', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\presupuestaria\\', 'Estado Analitico de Egresos por Objeto de Gasto1t21.pdf'),
('2021', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\presupuestaria\\', 'Estado Analitico del Ingreso-1t21.pdf'),
('2021', '1T', 'tyd', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\tyd\\', 'Inventario de Bienes Inmuebles-1t2021.pdf'),
('2021', '1T', 'tyd', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\tyd\\', 'Inventario de Bienes Muebles-1t2021.pdf'),
('2021', '1T', 'tyd', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\1T\\tyd\\', 'Montos Pagados x Subsidios y Ayudas-1t2021.pdf'),
('2021', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\contable\\', 'Estado Analitico del Activo2t21.pdf'),
('2021', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\contable\\', 'Estado de Actividades2t21.pdf'),
('2021', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\contable\\', 'Estado de Flujo de Efectivo2t21.pdf'),
('2021', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\contable\\', 'Estado de Situacion Financiera2t21.pdf'),
('2021', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\contable\\', 'Estado de Variacion de la Hacienda Publica2t21.pdf'),
('2021', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\contable\\', 'Pasivos ContingentesTrimestre 2021-2t21.pdf'),
('2021', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\presupuestaria\\', 'Estado Analitico de Egresos por Clasificacion Administrativa2t21.pdf'),
('2021', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\presupuestaria\\', 'Estado Analitico de Egresos por Clasificacion Economica2t21.pdf'),
('2021', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\presupuestaria\\', 'Estado Analitico de Egresos por Clasificacion Funcional2t21.pdf'),
('2021', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\presupuestaria\\', 'Estado Analitico de Egresos por Objeto de Gasto2t21.pdf'),
('2021', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\presupuestaria\\', 'Estado Analitico del Ingreso2t21.pdf'),
('2021', '2T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\2T\\programatica\\', 'Estado Analitico de Egresos por Clasificacion Programatica2t21.pdf'),
('2021', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\3T\\contable\\', 'Estado Analitico de Deuda y Otros Pasivos3t21.pdf'),
('2021', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\3T\\contable\\', 'Estado Analitico del Activo3t21.pdf'),
('2021', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\3T\\contable\\', 'Estado de Actividades3t21.pdf'),
('2021', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\3T\\contable\\', 'Estado de Cambio en la Situacion Financiera3t21.pdf'),
('2021', '3T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\3T\\contable\\', 'Estado de Flujo de Efectivo3t21.pdf'),
('2021', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\presupuestaria\\', '1.Estado Analitico de Egresos por Clasificacion Administrativa.pdf'),
('2021', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\presupuestaria\\', '2.Estado Analitico de Egresos por Clasificacion Economica.pdf'),
('2021', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\presupuestaria\\', '3.Estado Analitico de Egresos por Objeto de Gasto.pdf'),
('2021', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\presupuestaria\\', '4.Estado Analitico de Egresos por Clasificacion Funcional.pdf'),
('2021', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\presupuestaria\\', '5.Estado Analitico del Ingreso.pdf'),
('2021', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\presupuestaria\\', '6.Endeudamiento Neto e Intereses de la Deuda.pdf'),
('2021', '4T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\programatica\\', '1.Estado Analitico de Egresos por Clasificacion Programatica.pdf'),
('2022', '4T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\programatica\\', '2.Programas y Proyectos.pdf'),
('2021', '4T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\programatica\\', '2.Programas y Proyectos.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '1.Iniciativa de Ley de Ingresos.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '2.Calendario de Ingresos.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '3. Presupuesto de Egresos por Objeto del Gasto.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '4.Presupuesto de Egresos por Clasificador funcional del Gasto.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '5. Presupuesto de Egresos por Clasificacion por tipo de Gasto.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '6. Calendario de Egresos.pdf');
INSERT INTO `paso` (`campo01`, `campo02`, `campo03`, `campo04`, `campo05`, `campo06`) VALUES
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '7. Programas con Recursos Concurrentes por Ordenes de Gobierno.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '8.Seguimiento a Recursos Federales Ejercicio del Gasto FORTAMUN.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '9. Seguimiento de Recursos Federales Destino del Gasto FAIS.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '10.Ejercicio y Destino de Gasto Federalizado y Reintegros.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '11.Avance Aplicacion Recursos Asignados a Seguridad Publica.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '12. Relacion de Cuentas Bancarias Productivas Especificas.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '13. Obligaciones pagadas o garantizadas con Fondos Federales.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '14. Montos Pagados por Ayudas y Subsidios.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '15.BIENES MUEBLES.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '16.BIENES INMUEBLES.pdf'),
('2021', '4T', 'TRASPARENCIA Y DIFUSION', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\4T\\transparencia y difusion\\', '17.-Cuentas Bancarias Productivas 2021.pdf'),
('2021', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA\\', 'ESTADO ANALITICO DE INGRESOS_0001.pdf'),
('2021', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA\\', 'ESTADO ANALITICO DEL ACTIVO_0001.pdf'),
('2021', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA\\', 'ESTADO ANALITICO DEL EJERCICIO DEL PRESUPUESTO DE EGRESOS_0001.pdf'),
('2021', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA\\', 'ESTADO DE ACTIVIDADES COMPARATIVO_0001.pdf'),
('2021', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA\\', 'ESTADO DE CAMBIOS EN LA SITUACION FINANCIERA_0001.pdf'),
('2021', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA\\', 'ESTADO DE FLUJOS DE EFECTIVO_0001.pdf'),
('2021', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA\\', 'ESTADO DE SITUACION FINANCIERA COMPARATIVO_0001.pdf'),
('2021', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA\\', 'ESTADO DE VARIACION EN LA HACIENDA PUBLICA_0001.pdf'),
('2021', 'CUENTA PUBLICA', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA\\', 'NOTAS A LOS ESTADOS  FINANCIEROS_0001.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', '10.- ESTADO ANALITICO DE LA DEUDA Y OTROS PASIVOS.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', '9.-NOTAS A LOS ESTADOS FINANCIEROS.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', 'Estado anal?tico de ingresos.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', 'Estado anal?tico del activo.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', 'Estado anal?tico del ejercicio del presupuesto de egresos.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', 'Estado de actividades comparativo.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', 'Estado de cambios en la situaci?n financiera.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', 'Estado de flujos de efectivo.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', 'Estado de situaci?n financiera comparativo.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', 'Estado de variaci?n en la hacienda publica.pdf'),
('2021', 'CUENTA PUBLICA 2021', 'CUENTA PUBLICA 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\CUENTA PUBLICA 2021\\', 'Notas a los estados financieros.pdf'),
('2021', 'PAE', 'PAE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\PAE\\', 'PAE2021.pdf'),
('2021', 'PAE', 'PAE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\PAE\\', 'TdR Dise?o Alumbrado P?blico.pdf'),
('2021', 'PAE', 'PAE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\PAE\\', 'TdR Espec?fica FISMDF (2) (1).pdf'),
('2021', 'PBR 2021', 'PBR 2021', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\PBR 2021\\', '01.-Presupuesto de Egresos Global Calendarizado (PbRM-04c)1t21.pdf'),
('2021', 'PBR 2022', 'PBR 2022', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2021\\PBR 2021\\', '01.-Proyecto del Presupuesto de Egresos Armonizado-1t.pdf'),
('2020', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\contable\\', '1.- ESTADO ACTIVIDADES.pdf'),
('2020', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\contable\\', '2.- ESTADO DE SITUACION FINANCIERA.pdf'),
('2020', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\contable\\', '3.- ESTADO DE VARIACION EN LA HACIENDA PUBLICA_001.pdf'),
('2020', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\contable\\', '4.- ESTADO DE CAMBIOS EN LA SITUACION FINANCIERA.pdf'),
('2020', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\contable\\', '5.- ESTADO DE FLUJO DE EFECTIVO.pdf'),
('2020', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\contable\\', '6.- INFORME DE PASIVOS CONTINGENTES.pdf'),
('2020', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\contable\\', '7.- NOTAS A LOS ESTADOS FINANCIEROS.pdf'),
('2020', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\contable\\', '8.- ESTADO ANALITICO DEL ACTIVO.pdf'),
('2020', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\contable\\', '9.- ESTADO ANALITICO DE DEUDA Y OTROS PASIVOS.pdf'),
('2020', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\presupuestaria\\', '1.- ESTADO ANALITICO  DE INGRESOS.pdf'),
('2020', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\presupuestaria\\', '2.1.- ESTADO ANALITICO  DEL EJERCICIO DE EGRESOS CLASIFICACION ADMVA..pdf'),
('2020', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\presupuestaria\\', '2.2.- ESTADO ANALITICO  DEL EJERCICIO DE EGRESOS CLASIFICACION POR  OBJETO DEL GASTO.pdf'),
('2020', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\presupuestaria\\', '2.3.- ESTADO ANALITICO  DEL EJERCICIO DE EGRESOS CLASIFICACION ECONOMICA.pdf'),
('2020', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\presupuestaria\\', '2.4.- ESTADO ANALITICO  DEL EJERCICIO DE EGRESOS CLASIFICACION FUNCIONAL.pdf'),
('2020', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\presupuestaria\\', '3.- ENDEUDAMIENTO NETO.pdf'),
('2020', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\presupuestaria\\', '4.- INTERESES DE LA DEUDA.pdf'),
('2020', '1T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\programatica\\', '1- ESTADO ANALITICO  DEL EJERCICIO DE EGRESOS CLAS. PROGRAMATI.pdf'),
('2020', '1T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\programatica\\', '1- ESTADO ANALITICO  DEL EJERCICIO DE EGRESOS CLAS. PROGRAMATI.pdf'),
('2020', '1T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\1T\\programatica\\', '1- ESTADO ANALITICO  DEL EJERCICIO DE EGRESOS CLAS. PROGRAMATI.pdf'),
('2020', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\contable\\', '1.- ESTADO DE ACTIVIDADES.pdf'),
('2020', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\contable\\', '2.- ESTADO DE SITUACION FINANCIERA.pdf'),
('2020', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\contable\\', '3.- ESTADO DE VARIACION EN LA HACIENDA PUBLICA.pdf'),
('2020', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\contable\\', '4.- ESTADO DE CAMBIOS EN LA SITUACION FINANCIERA.pdf'),
('2020', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\contable\\', '5.- ESTADO DE FLUJO DE EFECTIVO.pdf'),
('2020', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\contable\\', '6.- INFORME SOBRE PASIVOS CONTINGENTES.pdf'),
('2020', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\contable\\', '7.- Notas a los Estados Financieros.pdf'),
('2020', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\contable\\', '8.- ESTADO ANALITICO DEL ACTIVO.pdf'),
('2020', '2T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\contable\\', '9.- ESTADO ANALITICO DE LA DEUDA Y OTROS PASIVOS.pdf'),
('2020', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\presupiestaria\\', '2.1.- ESTADO ANALITICO DEL EJERCICIO DEL PRESUPUESTO DE EGRESOS POR CLASIFICACION ADMINISTRATIVA.pdf'),
('2020', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\presupiestaria\\', '2.2.- ESTADO ANALITICO DEL EJERCICIO DEL PRESUPUESTO DE EGRESOS POR CLASIFICACION ADMINISTRATIVA.pdf'),
('2020', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\presupiestaria\\', '2.3.- ESTADO ANALITICO DEL EJERCICIO DEL PRESUPUESTO DE EGRESOS POR CLASIFICACION ECONOMICA.pdf'),
('2020', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\presupiestaria\\', '2.4.- ESTADO ANALITICO DEL EJERCICIO DEL PRESUPUESTO DE EGRESOS POR CLASIFICACION FUNCIONAL.pdf'),
('2020', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\presupiestaria\\', '3.- ENDEUDAMIENTO NETO.pdf'),
('2020', '2T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\presupiestaria\\', '4.- INTERESES DE LA DEUDA.pdf'),
('2020', '2T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\programatica\\', '1.- ESTADO ANALITICO DEL EJERCICIO DEL PRESUPUESTO DE EGREESOS POR CLASIFICACION PROGRAMATICA.pdf'),
('2020', '2T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\2T\\transparencia\\', 'AYUDAS Y SUBSIDIOS DE ABRIL-JUNIO.pdf'),
('2020', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\contable\\', '1.Estado-de-Situacion-Financiera-4t20.pdf'),
('2020', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\contable\\', '2-Notas-a-los-Estados-Financieros-4t20.pdf'),
('2020', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\contable\\', '3.Estado-de-Actividades-4t20.pdf'),
('2020', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\contable\\', '4.Estado-de-Varicacion-en-la-hacienda-publica-4t20.pdf'),
('2020', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\contable\\', '5.Estado-analitico-del-activo-4t20.pdf'),
('2020', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\contable\\', '6.Estado-analitico-de-deuda-y-otros-pasivos-4t2020.pdf'),
('2020', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\contable\\', '7.Estado-de-cambios-en-la-situacion-financiera-4t20.pdf'),
('2020', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\contable\\', '8.Estado-de-Fliujo-de-Efectivo-4t2020.pdf'),
('2020', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\presupuestaria\\', '4-Estado-Analitico-del-Ejercicio-por-Clasificacion-Administrativa-4T20.pdf'),
('2020', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\presupuestaria\\', '5-Estado-Analitico-del-Ejercicio-por-Clasificacion-Economica-4T20.pdf'),
('2020', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\presupuestaria\\', '6-Estado-Analitico-del-Ejercicio-por-Clasificacion-Funcional-4T20.pdf'),
('2020', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\presupuestaria\\', '8.Estado-Analitico-de-Ingresos-4t20.pdf'),
('2020', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\presupuestaria\\', '9.Esatdo-Analitico-del-Ejercicio-del-Presupuesto-de-Egresos-Clasificacion-por-Objeto-de-Gasto-4T20.p'),
('2020', '4T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\presupuestaria\\', 'ENDEUDAMIENTO-NETO-4T20.pdf'),
('2020', '4T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\programatica\\', 'Estado-Analitico-del-Ejercicio-por-Clasificacion-Programatica-4t20.pdf'),
('2020', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\transparencia\\', '2.5.5 Inventario de Bienes Muebles Bajo Costo diciembre 2020.pdf'),
('2020', '4T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\4T\\transparencia\\', 'Cuentas Bancarias Productivas 2020.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '1. Estado Analitico de Ingresos.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '2. Estado Anal?tico del Activo.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '3. Estado de Actividades Comparativo.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '4. Estado de Cambios en la Situaci?n Financiera.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '5. Estado de Flujos de Efectivo.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '6. Estado de Situaci?n Financiera Comparativo.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '7. Estado de Variaci?n en la Hacienda P?blica.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '8. Notas a los Estados Financieros.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '9. Estado Anal?tico de la Deuda y Otros Pasivos.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '10. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Administrativa.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '11. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Econ?mica.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '12. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificacion Obejto del Gasto.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '13. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Funcional.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '14. Inventario de Bienes Muebles.pdf'),
('2020', 'Cuenta Publica 2020', 'Cuenta Publica 2020', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2020\\Cuenta Publica 2020\\', '15.  Inventario de Bienes Inmuebles.pdf'),
('2019', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\contable\\', 'a.- Estado de Actividades.pdf'),
('2019', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\contable\\', 'b.- Estado de Situacion Financiera.pdf'),
('2019', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\contable\\', 'c.- Estado de Varicacion en la hacienda publica.pdf'),
('2019', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\contable\\', 'd.- Estado de cambios en la situaci?n financiera.pdf'),
('2019', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\contable\\', 'e.- Estado de Fliujo de Efectivo.pdf'),
('2019', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\contable\\', 'F.- Informe sobre pasivos contingentes.pdf'),
('2019', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\contable\\', 'g.- Notas a los Estados Financieros Notas de Desglose.pdf'),
('2019', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\contable\\', 'h.- Estado anal?tico del activo.pdf'),
('2019', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\contable\\', 'i.- Estado anal?tico de deuda y otros pasivos.pdf'),
('2019', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\presupuestaria\\', 'a.- Estado Analitico de Ingresos.pdf'),
('2019', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\presupuestaria\\', 'b.1.- Estado Analitico del Ejercicio por Clasificacion Administrativa.pdf'),
('2019', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\presupuestaria\\', 'b.2.-Estado Analitico del Ejercicio por Clasificacion Economica.pdf'),
('2019', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\presupuestaria\\', 'b.3.- Estado Analitico del Ejercicio por Objeto del Gasto.pdf'),
('2019', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\presupuestaria\\', 'b.4.-Estado Analitico del Ejercicio por Clasificacion Funcional.pdf'),
('2019', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\presupuestaria\\', 'C.- Endeudamiento neto.pdf'),
('2019', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\presupuestaria\\', 'd.- Intereses de la deuda.pdf'),
('2019', '1T', 'PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\programatica\\', 'a.- Estado Analitico del Ejercicio por Clasificacion Programatica.pdf'),
('2019', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\transparencia\\', '1.- Montos pagados por ayudas y subsidios.pdf'),
('2019', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\transparencia\\', '2.- Ejercicio y destino de gasto federalizado y reintegros.pdf'),
('2019', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\transparencia\\', '3.- Obligaciones pagadas o garantizadas con fondos federales.pdf'),
('2019', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\transparencia\\', '4.- Fondos de ayuda federal para la seguridad p?blica.pdf'),
('2019', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\transparencia\\', '5.- Aplicaci?n de recursos del FORTAMUN.pdf'),
('2019', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\transparencia\\', '6.- Montos que reciban y acciones a realizar con el FAIS.pdf'),
('2019', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\1T\\transparencia\\', '7.- Formatos de programas con recursos concurrentes por orden de gobierno.pdf'),
('2019', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\4T\\contable\\', '01.- ESTADO DE ACTIVIDADES.pdf'),
('2019', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\4T\\contable\\', '02.- ESTADO DE SITUACION FINANCIERA.pdf'),
('2019', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\4T\\contable\\', '03.- ESTADO DE VARIACI?N EN LA HACIENDA PUBLICA.pdf'),
('2019', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\4T\\contable\\', '04.- ESTADO DE CAMBIOS EN LA SITUACION FINANCIERA.pdf'),
('2019', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\4T\\contable\\', '05.- ESTADO DE FLUJO DE EFECTIVO.pdf'),
('2019', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\4T\\contable\\', '06.- INFORME DE PASIVOS CONTINGENTES.pdf'),
('2019', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\4T\\contable\\', '07.- Notas a los Estados Financieros.pdf'),
('2019', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\4T\\contable\\', '08.- ESTADO DE ANALITICO DEL ACTIVO.pdf'),
('2019', '4T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\4T\\contable\\', '09.- ESTADO DE ANALITICO DE DEUDA Y OTROS PASIVOS.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '1. Estado Analitico de Ingresos.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '2. Estado Anal?tico del Activo.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '3. Estado de Actividades Comparativo.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '4. Estado de Cambios en la Situaci?n Financiera.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '5. Estado de Flujos de Efectivo.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '6. Estado de Situaci?n Financiera Comparativo.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '7. Estado de Variaci?n en la Hacienda P?blica.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '8. Notas a los Estados Financieros.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '9. Estado Anal?tico de la Deuda y Otros Pasivos.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '10. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Administrativa.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '11. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Econ?mica.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '12. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificacion Obejto del Gasto.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '13. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Funcional.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '14. Inventario de Bienes Muebles.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '15.  Inventario de Bienes Inmuebles.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '1. Estado Analitico de Ingresos.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '2. Estado Anal?tico del Activo.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '3. Estado de Actividades Comparativo.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '4. Estado de Cambios en la Situaci?n Financiera.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '5. Estado de Flujos de Efectivo.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '6. Estado de Situaci?n Financiera Comparativo.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '7. Estado de Variaci?n en la Hacienda P?blica.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '8. Notas a los Estados Financieros.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '9. Estado Anal?tico de la Deuda y Otros Pasivos.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '10. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Administrativa.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '11. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Econ?mica.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '12. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificacion Obejto del Gasto.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '13. Estado Analitico del Ejercicio del Presupuesto de Egresos Clasificaci?n Funcional.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '14. Inventario de Bienes Muebles.pdf'),
('2019', 'CUENTA PUBLICA ', 'CUENTA PUBLICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Cuenta Publica 2019\\', '15.  Inventario de Bienes Inmuebles.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '1.INV. GRAL. BAJO COSTO..xlsx'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '1.INV. GRAL. BIENES MUEBLES PATRIMONIALES..xlsx'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '15. Iniciativa de Ley de Ingresos.xlsx'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '15.Norma para armonizar la presentaci?n  de la informacion adicional a la Iniciativa de la Ley de In'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '16. Proyecto del Presupuesto de Egresos Armonizado.xlsx'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '16.Norma para armonizar la presentaci?n de la informaci?n adicional  del Proyecto del Presupuesto de'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '17.-NORMA PARA LA DIFUSION A LA CIUDADANIA DE LA LEY DE INGRESOS Y PRESUPUESTO DE EGRESOS 2019.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '18. Ley de Ingresos y del Presupuesto de Egresos.xlsx'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '18.Ley de Ingresos y de Presupuesto de Egresos.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '19. Proyecto del Presupuesto de Egresos Armonizado.xlsx'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '19.Proyecto de presupuesto de Egresos en t?rminos del art?culo 63 de la LGCG.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '20.Calendario de  Ingresos 2019.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '21.Calendario de  Egresos 2019.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '22.Ayudas y Subsidios.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '23.AYUDAS Y SUBSIDIOS.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '23.Recursos Federales por Orden  de Gobierno.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', '24.Cuentas Bancarias Productivas 2019.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', 'Decreto del Presupuesto de Egresos aprobado en t?rminos del art?culo 65 de la LGCG.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', 'iniciativadeley.pdf'),
('2019', 'OTRA INFO', 'OTRA INFO', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\Otra Info\\', 'Ley de Ingresos Aprobada en t?rmino del Art?culo 65 de la LGCG.pdf'),
('2019', 'PAE', 'PAE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2019\\PAE\\', 'PROGRAMA ANUAL DE EVALUACI? 2019_ZINACANTEPEC_Abril.pdf'),
('2018', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\contable\\', 'a) Estado de Actividades.pdf'),
('2018', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\contable\\', 'b) Estado de Situacion Financiera.pdf'),
('2018', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\contable\\', 'c) Estado de Varicacion en la Hacienda Publica.pdf'),
('2018', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\contable\\', 'd) Estado de Cambios en la Situaci?n Financiera.pdf'),
('2018', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\contable\\', 'e) Estado de Fliujo de Efectivo.pdf'),
('2018', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\contable\\', 'f. Notas a los Estados Financieros.pdf'),
('2018', '1T', 'CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\contable\\', 'g) Estado Anal?tico del Activo.pdf'),
('2018', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\presupuestaria\\', '1. Administrativa.pdf'),
('2018', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\presupuestaria\\', '2.Econ?mica.pdf'),
('2018', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\presupuestaria\\', '3.Por objeto de gasto.pdf'),
('2018', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\presupuestaria\\', '4.funcional.pdf'),
('2018', '1T', 'PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\presupuestaria\\', 'a) Estado Analitico de Ingresos.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '1. Iniciativa de ley de Ingresos.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '2. Proyecto del Presupuesto de Egresos.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '3. Difusion a la Ciudadania de la Ley de Ingresos y del Presupuestp de Egresos.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '4. Calendario de Ingresos Base Mensual.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '5. Calendario de Presupuesto de Egresos Base Mensual.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '6. Montos Pagados por Ayudas y Subsidios.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '10. Fondos de Ayuda Federal para la Seguridad Publica.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '11. Aplicacion de Recursos del FORTAMUN.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '12. Montos que Reciban y Acciones a Realizar con el FAIS.pdf'),
('2018', '1T', 'TRANSPARENCIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\1T\\transparencia\\', '13. Formato de Programas con Recursos Concurrentes por Orden de Gobierno.pdf'),
('2018', '2do TRIMESTRE', 'INFORNAMCION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'a) Estado de Actividades.pdf'),
('2018', '2do TRIMESTRE', 'INFORNAMCION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'b) Estado de Situacion Financiera.pdf'),
('2018', '2do TRIMESTRE', 'INFORNAMCION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'c) Estado de Varicacion en la Hacienda Publica.pdf'),
('2018', '2do TRIMESTRE', 'INFORNAMCION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'd) Estado de Cambios en la Situaci?n Financiera.pdf'),
('2018', '2do TRIMESTRE', 'INFORNAMCION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'e) Estado de Fliujo de Efectivo.pdf'),
('2018', '2do TRIMESTRE', 'INFORNAMCION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'f) Informe sobre Pasivos Contingentes.pdf'),
('2018', '2do TRIMESTRE', 'INFORNAMCION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'h) Estado Anal?tico del Activo.pdf'),
('2018', '2do TRIMESTRE', 'INFORNAMCION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'i) Estado Anal?tico de Deuda y Otros Pasivos.pdf'),
('2018', '2do TRIMESTRE', 'INFORMACION PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\II. Informacion Presu', 'a) Estado Analitico de Ingresos.pdf'),
('2018', '2do TRIMESTRE', 'INFORMACION PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\II. Informacion Presu', 'c) Endeudamiento Neto.pdf'),
('2018', '2do TRIMESTRE', 'INFORMACION PRESUPUESTARIA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\II. Informacion Presu', 'd) Intereses de la Deuda.pdf'),
('2018', '2do TRIMESTRE', 'ESTADO ANALITICO DEL  EJERCICIO DEL PRESUPUESTO DE EGRESOS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\II. Informacion Presu', '2. Econ?mica.pdf'),
('2018', '2do TRIMESTRE', 'ESTADO ANALITICO DEL  EJERCICIO DEL PRESUPUESTO DE EGRESOS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Informaci?n Financiera Gubernamental y Cuenta Publica\\II. Informacion Presu', '4. Funcional.pdf'),
('2018', '2do TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Transparencia y Difusi?n de la informaci?n Financiera\\', '1. Montos Pagados por Ayudas y Subsidios.pdf'),
('2018', '2do TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Transparencia y Difusi?n de la informaci?n Financiera\\', '2. Ejercicio y Destino de Gasto Federalizado y Reintegros.pdf'),
('2018', '2do TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Transparencia y Difusi?n de la informaci?n Financiera\\', '3. Obligaciones Pagadas o Garantizadas con Fondos Federales.pdf'),
('2018', '2do TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Transparencia y Difusi?n de la informaci?n Financiera\\', '4. Fondos de Ayuda Federal para la Seguridad Publica.pdf'),
('2018', '2do TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Transparencia y Difusi?n de la informaci?n Financiera\\', '5. Aplicacion de Recursos del FORTAMUNDF.pdf'),
('2018', '2do TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Transparencia y Difusi?n de la informaci?n Financiera\\', '6. Montos que Reciban y Acciones a Realizar con el FAIS.pdf'),
('2018', '2do TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Transparencia y Difusi?n de la informaci?n Financiera\\', '7. Formato de Programas con Recursos Concurrentes por Orden de Gobierno.pdf'),
('2018', '2do TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\2do Trimestre\\Transparencia y Difusi?n de la informaci?n Financiera\\', '8. Relaci?n de Bienes que Integran el Patrimonio.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'a) Estado de Actividades.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'b) Estado de Situacion Financiera.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'c) Estado de Varicacion en la Hacienda Publica.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'd) Estado de Cambios en la Situaci?n Financiera.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'e) Estado de Fliujo de Efectivo.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'f) Informe sobre Pasivos Contingentes.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'g) Notas a los Estados Financieros.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'h) Estado Anal?tico del Activo.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\I. Informaci?n Contab', 'i) Estado Anal?tico de Deuda y Otros Pasivos.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\II. Informacion Presu', 'a) Estado Analitico de Ingresos.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\II. Informacion Presu', 'c) Endeudamiento Neto.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION PRESUPUESTAL', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\II. Informacion Presu', 'd) Intereses de la Deuda.pdf'),
('2018', '3er TRIMESTRE', 'INFORMACION PROGRAMATICA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Informacion Financiera Gubernamental y Cuenta Publica\\III.Informaci?n Progr', 'a) Gasto por Categoria Programatica.pdf'),
('2018', '3er TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Transparencia y  Difusion de la informaci?n Financiera\\', '1. Montos Pagados por Ayudas y Subsidios.pdf'),
('2018', '3er TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Transparencia y  Difusion de la informaci?n Financiera\\', '2. Ejercicio y Destino de Gasto Federalizado y Reintegros.pdf'),
('2018', '3er TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Transparencia y  Difusion de la informaci?n Financiera\\', '3. Obligaciones Pagadas o Garantizadas con Fondos Federales.pdf'),
('2018', '3er TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Transparencia y  Difusion de la informaci?n Financiera\\', '4. Fondos de Ayuda Federal para la Seguridad Publica.pdf'),
('2018', '3er TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Transparencia y  Difusion de la informaci?n Financiera\\', '5. Aplicacion de Recursos del FORTAMUN.pdf'),
('2018', '3er TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Transparencia y  Difusion de la informaci?n Financiera\\', '6. Montos que reciban y Acciones a Realizar con el FAIS.pdf'),
('2018', '3er TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\3er Trimestre\\Transparencia y  Difusion de la informaci?n Financiera\\', '7. Formatos de Programas con Recursos Concurrentes por Orden de Gobierno.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', '1.16 Notas a los Estados Financieros.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', 'Estado anal?tico de deuda y otros pasivos.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', 'Estado anal?tico del activo.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', 'Estado de Actividades.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', 'Estado de cambios en la situaci?n financiera.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', 'Estado de Flujo de Efectivo.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', 'Estado de Situacion Financiera.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', 'Estado de Varicacion en la hacienda publica.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', 'Informe sobre Pasivos Contingentes.pdf'),
('2018', '4to TRIMESTRE', 'INFORMACION CONTABLE', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Informaci?n Financiera Gubernamental y Cuenta P?blica\\INFORMACI?N CONTABLE\\', 'lista_archivos_ruta.txt'),
('2018', '4to TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Transparencia y Difusi?n de la informacion financiera\\', '3. Ejercicio y destino de gasto federalizado y reintegros.pdf'),
('2018', '4to TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Transparencia y Difusi?n de la informacion financiera\\', '6. Aplicaci?n de recursos del FORTAMUN.pdf'),
('2018', '4to TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Transparencia y Difusi?n de la informacion financiera\\', 'aplicacion de recursos asignadosa los programas seg pub.pdf'),
('2018', '4to TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Transparencia y Difusi?n de la informacion financiera\\', 'AYUDAS Y SUBSIDIOS OCTUBRE-DICIEMBRE.pdf'),
('2018', '4to TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Transparencia y Difusi?n de la informacion financiera\\', 'montos pagados por ayudas y subsidios.pdf'),
('2018', '4to TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Transparencia y Difusi?n de la informacion financiera\\', 'montos que reciban y acciones a realizar con el fais.pdf'),
('2018', '4to TRIMESTRE', 'TRANSPARENCIA Y DIFUSION DE LA INFORMACION FINANCIERA', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\4to Trimestre\\Transparencia y Difusi?n de la informacion financiera\\', 'programas con recursos concurrentes.pdf'),
('2018', 'PAE2018', 'PAE2018', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\PAE2018\\', 'formato de difusi?n de resultados.pdf'),
('2018', 'PAE2018', 'PAE2018', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\PAE2018\\', 'programa anual de evaluaci?n 2018.pdf'),
('2017', 'SEVAC 2018', 'OPDAPAS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\SEVAC 2018\\Cuenta P?blica 2017\\OPDAPAS\\', '1. Estado de Situacion Financiera Comparativo.pdf'),
('2017', 'SEVAC 2018', 'OPDAPAS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\SEVAC 2018\\Cuenta P?blica 2017\\OPDAPAS\\', '2. Anexo al Estado de Situacion Financiera Comparativo.pdf'),
('2017', 'SEVAC 2018', 'OPDAPAS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\SEVAC 2018\\Cuenta P?blica 2017\\OPDAPAS\\', '3. Estado de Actividades Comparativo.pdf'),
('2017', 'SEVAC 2018', 'OPDAPAS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\SEVAC 2018\\Cuenta P?blica 2017\\OPDAPAS\\', '4. Estado de Variacion de la Hacienda Publica.pdf'),
('2017', 'SEVAC 2018', 'OPDAPAS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\SEVAC 2018\\Cuenta P?blica 2017\\OPDAPAS\\', '5. Estado de Cambios en la Situacion Financiera.pdf');
INSERT INTO `paso` (`campo01`, `campo02`, `campo03`, `campo04`, `campo05`, `campo06`) VALUES
('2017', 'SEVAC 2018', 'OPDAPAS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\SEVAC 2018\\Cuenta P?blica 2017\\OPDAPAS\\', '6. Estado de Flujos de Efectivo.pdf'),
('2017', 'SEVAC 2018', 'OPDAPAS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\SEVAC 2018\\Cuenta P?blica 2017\\OPDAPAS\\', '7. Estado Analitico del Activo.pdf'),
('2017', 'SEVAC 2018', 'OPDAPAS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\SEVAC 2018\\Cuenta P?blica 2017\\OPDAPAS\\', '8. Estado Analitico de la Deuda y Otros Pasivos.pdf'),
('2017', 'SEVAC 2018', 'OPDAPAS', 'C:\\xampp\\htdocs\\Transparencia\\', 'CONAC\\2018\\SEVAC 2018\\Cuenta P?blica 2017\\OPDAPAS\\', '9. Notas a los Estados Financieros.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `nombre`, `imagen`) VALUES
(1, 'Ejemplo01', 'Capture001.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scmes`
--

CREATE TABLE `scmes` (
  `cmeclave` char(2) NOT NULL,
  `cmedescri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `scmes`
--

INSERT INTO `scmes` (`cmeclave`, `cmedescri`) VALUES
('01', 'enero'),
('02', 'febrero'),
('03', 'marzo'),
('04', 'abril'),
('05', 'mayo'),
('06', 'junio'),
('07', 'julio'),
('08', 'agosto'),
('09', 'septiembre'),
('10', 'octubre'),
('11', 'noviembre'),
('12', 'diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sctipodocu`
--

CREATE TABLE `sctipodocu` (
  `CTDClave` char(2) NOT NULL,
  `CTDDescrpcion` varchar(30) NOT NULL,
  `CTDCarpeta` varchar(30) NOT NULL,
  `CTDAncImgPag` int(11) NOT NULL,
  `CTDLagImgPag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sctipodocu`
--

INSERT INTO `sctipodocu` (`CTDClave`, `CTDDescrpcion`, `CTDCarpeta`, `CTDAncImgPag`, `CTDLagImgPag`) VALUES
('01', 'Baners', 'Baners', 2400, 1600),
('02', 'Layer informativo', 'LayerInfo', 0, 0),
('03', 'Layer de seguridad', 'LayerSegu', 0, 0),
('04', 'Noticias', 'Noticias', 0, 0),
('10', 'Cabildo', 'Cabildo', 480, 640),
('11', 'Directores', 'Directorio', 430, 580);

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
('105', 'C', 'R', 1, 'José Alfredo Guizar Arreola', 'Primera Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi01.png', 'color01'),
('105', 'C', 'R', 2, 'Mayté Jaramillo López', 'Segunda Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi02.png', 'color03'),
('105', 'C', 'R', 3, 'Ernesto Guzmán Camacho', 'Tercera Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi03.png', 'color01'),
('105', 'C', 'R', 4, 'karen Nayeli Castrejón Gómez', 'Cuarta Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi04.png', 'color03'),
('105', 'C', 'R', 5, 'Alfredo Esquivel Cuarenta', 'Quinta Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi05.png', 'color01'),
('105', 'C', 'R', 6, 'Leopoldo Romero Mejia', 'Sexta Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi06.png', 'color01'),
('105', 'C', 'R', 7, 'Blanca Paulina Vilchis Sánchez', 'Septima Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi07.png', 'color03'),
('105', 'C', 'R', 8, 'Leonardo Joaquin Bravo Villanueva', 'Octava Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi08.png', 'color01'),
('105', 'C', 'R', 9, 'Alfredo Díaz de Jesús', 'Novena Regiduría', '7229177206', 'Constitucion 101, San Miguel', 'Centro', 51350, 'Regi09.png', 'color01'),
('105', 'C', 'S', 1, 'Dulce María Bastida Alvarez', 'Síndico Municipal', '7222183966', 'Constitucion 101, San Miguel', 'Centro', 51350, 'sindico.jpg', 'color03');

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
('105', 'D', 1, 'Ernesto Palma Mejía', 'SECRETARÍA DEL AYUNTAMIENTO', '(722)1 57 85 07 ext 129', 'secretaria.ayuntamiento@zinacantepec.gob', 'SriAyto.jpeg', 'color01'),
('105', 'D', 2, 'Oscar Bernal Torres', 'TESORERÍA MUNICIPAL', '(722)2187019', 'tesoreria.municipal@zinacantepec.gob.mx', 'tesorero.png', 'color01'),
('105', 'D', 4, 'Sandra Jaqueline Mondragón Mendoza', 'DIRECCIÓN DE ADMINISTRACIÓN', '(722)9177206', 'administracion@zinacantepec.gob.mx', 'administracion.jpg', 'color03'),
('105', 'D', 5, 'Valeria Toledo Flores', 'CONTRALORÍA MUNICIPAL', '(722)9177206', 'contraloria.municipal@zinacantepec.gob.m', 'contralora.jpg', 'color03'),
('105', 'D', 6, 'Arturo Galicia Carballar', 'DIRECCIÓN JURÍDICA', ' (722)9177206', 'cordinacion.juridica@zinacantepec.gob.mx', 'juridico.jpg', 'color03'),
('105', 'D', 7, 'Brenda Selene Hernández López', 'UNIDAD DE TRANSPARENCIA', '(722) 917 84 73', 'transparencia@zinacantepec.gob.mx', 'mejoraregulatoria.png', 'color03'),
('105', 'D', 8, 'Ismael Enrique Terrón López', 'UIPPE', '(722) 917 84 73', 'uippe@zinacantepec.gob.mx', 'uippe.jpg', 'color01'),
('105', 'D', 9, 'Liliana Estefani Cruz Bacilio', 'MEJORA REGULATORIA', '(722)2188241', 'mejora.regulatoria@zinacantepec.gob.mx', 'mejoraregulatoria.jpg', 'color03'),
('105', 'D', 10, 'Víctor Hugo García Esquivel', 'DIRECCIÓN DE GOBERNACIÓN', '(722) 917 84 73', 'gobernacion@zinacantepec.gob.mx', 'gob.png', 'color01'),
('105', 'D', 11, 'Roberto Germán Flores Patoni', 'DESARROLLO ECONÓMICO', '(722)1903771', 'desarrollo.economico@zinacantepec.gob.mx', 'deconomico.jpg', 'color01'),
('105', 'D', 12, 'Uriel Pedro Ramírez Zarza', 'SERVICIOS PÚBLICOS', '(722)917 7188', 'servicios.publicos@zinacantepec.gob.mx', 'serviciosp.jpg', 'color03'),
('105', 'D', 13, 'Dayana Fabiola Julio Pérez', 'MEDIO AMBIENTE', '(722) 917 84 73', 'medio.ambiente@zinacantepec.gob.mx', 'medioambiente.jpg', 'color03'),
('105', 'D', 14, 'Gabriel Valdez Albarrán', 'DIRECCIÓN DE DESARROLLO SOCIAL', '(722)2188241', 'atencion.ciudadana@zinacantepec.gob.mx', 'dsocial.jpg', 'color01'),
('105', 'D', 15, 'Jessica Arroyo Ramírez', 'CULTURA Y TURISMO', '(722) 1903691', 'turismo.cultura@zinacantepec.gob.mx', 'turismo.jpg', 'color03'),
('105', 'D', 16, 'María del Carmen Sánchez Carbajal', 'DIRECCIÓN DE EDUCACIÓN', '(722) 917 84 57', 'educacion@zinacantepec.gob.mx', 'deducacion.jpg', 'color03'),
('105', 'D', 17, 'Aldo Octavio Peña Vilchis', 'DIRECCIÓN DE OBRAS PÚBLICAS', '(722)9177206', 'obras.publicas@zinacantepec.gob.mx', 'dobras.jpg', 'color03'),
('105', 'D', 18, 'Humberto Delgado Fabela', 'DESARROLLO TERRITORIAL Y URBANO', '(722)2180686', 'desarrollo.urbano@zinacantepec.gob.mx', 'durbano.jpg', 'color01'),
('105', 'D', 19, 'Patricia Luna Delgado', 'DESARROLLO METROPOLITANO Y MOVILIDAD', '(722) 917 84 73', 'desarrollo.metropolitano@zinacantepec.go', 'patricia.jpeg', 'color03'),
('105', 'D', 20, 'Guillermo Colín Jaramíllo', 'COORDINACIÓN MUNICIPAL DE PROTECCIÓN CIVIL Y BOMBEROS', '(722) 132 0818', 'proteccion.civil@zinacantepec.gob.mx', 'dbomberos.jpg', 'color01'),
('105', 'D', 21, 'Héctor Hugo Osorno Reyes', 'SEGURIDAD PÚBLICA Y TRÁNSITO', '722-190-3502', 'seguridad.publica@zinacantepec.gob.mx', 'seguridad.jpg', 'color03'),
('105', 'I', 1, 'Allexae Trejo Velázquez', 'DIRECCIÓN MUNICIPAL DE LA MUJER', '(722)9177207', 'instituto.mujer@zinacantepec.gob.mx', 'mujer.png', 'color03'),
('105', 'I', 2, 'Luis Fernando Ortiz Hill', 'INSTITUTO DE LA JUVENTUD', '(722)9177207', 'instituto.juventud@zinacantepec.gob.mx', 'dinjuve.jpg', 'color01'),
('105', 'O', 1, 'Jessica Rios Lara', 'Presidenta Honorifica del DIF', '(722)9177207', 'imcufidez@zinacantepec.gob.mx', 'dif.png', 'color01'),
('105', 'O', 2, 'Iván Saucedo Sánchez', 'OPDAPAS', '(722) 218 3290', 'zinacantepecopdapas@gmail.com', 'dopdapas.jpg', 'color01'),
('105', 'O', 3, 'Daniel Agallo Vicent', 'IMCUFIDEZ', '(722) 9177206', 'imcufidez@zinacantepec.gob.mx', 'incu.jpeg', 'color01');

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
  `LTitulo` varchar(80) NOT NULL,
  `LDescripcion` char(200) NOT NULL,
  `LSerPubCre` int(11) NOT NULL,
  `LFechAlta` date NOT NULL,
  `LFechPublI` date DEFAULT NULL,
  `LFechPublF` date DEFAULT NULL,
  `LSerPubRev` int(11) NOT NULL,
  `LFechRevi` date NOT NULL,
  `LSerPubAuto` int(11) NOT NULL,
  `LFechAuto` date NOT NULL,
  `LSerPubPub` int(11) NOT NULL,
  `LFechPubl` date NOT NULL,
  `LPublicacion` char(1) NOT NULL,
  `LSerPubCier` int(11) NOT NULL,
  `LFechaCier` date DEFAULT NULL,
  `LEstaSegu` char(1) NOT NULL,
  `LImagen` varchar(30) NOT NULL,
  `LAbrirLiDoIm` char(1) NOT NULL,
  `LAImagDocu` varchar(30) NOT NULL,
  `LLiga` varchar(50) NOT NULL,
  `LVentRefe` char(1) NOT NULL,
  `LSenaSord` varchar(30) NOT NULL,
  `LEstado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `stlayers`
--

INSERT INTO `stlayers` (`LConsecut`, `LAyuntamiento`, `LUnidad`, `LEjercicio`, `LMesRegi`, `LTipoDocu`, `LTitulo`, `LDescripcion`, `LSerPubCre`, `LFechAlta`, `LFechPublI`, `LFechPublF`, `LSerPubRev`, `LFechRevi`, `LSerPubAuto`, `LFechAuto`, `LSerPubPub`, `LFechPubl`, `LPublicacion`, `LSerPubCier`, `LFechaCier`, `LEstaSegu`, `LImagen`, `LAbrirLiDoIm`, `LAImagDocu`, `LLiga`, `LVentRefe`, `LSenaSord`, `LEstado`) VALUES
(1, '105', 37, 2023, '08', '01', 'Nevado de Toluca', 'Descripcion 02', 1, '2023-09-05', '2024-02-06', '2024-02-08', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 'A', 0, NULL, 'I', '1_I.jpg', 'L', '1_A.pdf', '', '', '', 'A'),
(2, '105', 37, 2023, '02', '01', 'Fuente', 'Fuente', 0, '0000-00-00', NULL, NULL, 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 'A', 0, NULL, 'I', '', 'N', '', '', 'N', '', 'B'),
(3, '105', 37, 2023, '02', '01', 'titulo 05', 'Descripcion 05', 1, '2023-01-01', NULL, NULL, 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '', 0, NULL, 'I', '', 'N', '', '', 'N', '', 'B'),
(4, '105', 37, 2023, '02', '03', 'Tecnicas de Engaño', 'Descripcio 06', 1, '2023-09-06', NULL, NULL, 1, '2023-09-18', 0, '0000-00-00', 0, '0000-00-00', 'A', 0, NULL, 'R', '4C.jpg', 'I', '', '', 'N', '', 'A'),
(5, '105', 37, 2023, '09', '03', 'Denuncia', 'Denuncia', 1, '0000-00-00', NULL, NULL, 1, '2023-09-18', 0, '0000-00-00', 0, '0000-00-00', 'A', 0, NULL, 'R', '5C.jpg', 'I', '', '', 'N', '', 'A'),
(6, '105', 37, 2023, '09', '03', 'Cabildo Juvenil', 'Cabildo Juvenil', 1, '0000-00-00', NULL, NULL, 1, '2023-09-18', 0, '0000-00-00', 0, '0000-00-00', 'A', 0, NULL, 'R', '6C.jpg', 'I', '6_P.png', '', 'N', '', 'A'),
(7, '105', 37, 2023, '09', '04', 'DETIENEN A PRESUNTOS', 'El Ayuntamiento de #Zinacantepec a través del #IMCUFIDEZ, te invita a la clase nuestra de AUTOCARGAS este sábado 13 de enero en Plaza Estado de México.', 1, '0000-00-00', '2023-09-01', '2023-09-29', 1, '2023-09-26', 1, '2023-09-26', 0, '0000-00-00', 'A', 0, NULL, 'P', '7C.png', 'L', '7_P.jpg', '', 'V', '', 'A'),
(8, '105', 37, 2023, '09', '04', 'Los uniformados les ', 'Entra de obra, inaguración de obra de pavimentación de calle Morelo', 1, '0000-00-00', NULL, NULL, 1, '2023-09-18', 1, '2023-09-26', 0, '0000-00-00', 'A', 0, NULL, 'R', '8C.png', 'I', '', '', 'N', '', 'A'),
(9, '105', 37, 2023, '02', '04', 'DETIENEN A PRESUNTOS', 'Recuerda el Gobierno del #Edomex, instalá el último REVO en avenida Solidaridad las Torres en el tramo comprendido entre avenida Morelos y Eduardo Monroy Cárdenas, con dirección a Toluca.', 1, '2023-09-06', NULL, NULL, 1, '2023-09-18', 1, '2023-09-18', 0, '0000-00-00', 'A', 0, NULL, 'P', '9C.png', 'I', '', '', 'N', '', 'A'),
(10, '105', 37, 2023, '09', '02', 'Festival Universitar', 'Festival Universitario', 1, '2023-09-13', '2023-09-01', '2023-09-30', 1, '2023-09-17', 1, '2023-09-18', 0, '2023-09-17', 'A', 0, NULL, 'P', '10_C.jpg', 'I', '10_P.png', '', 'V', '', 'A'),
(11, '105', 37, 2023, '09', '02', 'Mantenete alertaa', 'Mantenete Alerta', 1, '2023-09-13', '2023-09-01', '2023-09-30', -1, '0000-00-00', -1, '0000-00-00', 0, '0000-00-00', 'A', 0, NULL, 'I', '11_C.jpeg', 'P', '11_P.pdf', '', 'P', '', 'B'),
(12, '105', 37, 2023, '00', '02', 'ejemplo', 'paso', 1, '2023-09-16', '2023-09-01', '2023-09-17', -1, '0000-00-00', -1, '0000-00-00', 0, '0000-00-00', 'I', 0, NULL, 'I', '', '', '', '', 'N', 'N', 'B'),
(13, '105', 37, 2023, '11', '01', 'ejemplo', 'ejemplo', 1, '2023-11-15', '2023-11-16', '2023-11-16', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', '', 'N', '', 'kljgfs', 'N', '', 'B'),
(14, '105', 37, 2023, '11', '01', '', '', 1, '2023-11-17', '0000-00-00', '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', '', 'N', '', '', 'N', '', 'B'),
(15, '105', 37, 2022, '1', '10', 'Sindico', '', 1, '2024-01-18', '2022-01-01', '2024-12-31', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'sindico.jpg', 'N', '', '', 'N', '', 'A'),
(16, '105', 37, 2022, '1', '10', 'Regidor01', '', 1, '2024-01-18', '2022-01-01', '2024-12-31', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'Regi01.png', 'N', '', '', 'N', '', 'A'),
(17, '105', 37, 2022, '1', '10', 'Regidor02', '', 1, '2024-01-18', '2022-01-01', '2024-12-31', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'Regi02.png', 'N', '', '', 'N', '', 'B'),
(18, '105', 37, 2022, '1', '10', 'Regidor03', '', 1, '2024-01-18', '2022-01-01', '2024-12-31', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'Regi03.png', 'N', '', '', 'N', '', 'B'),
(19, '105', 37, 2022, '1', '10', 'Regidor04', '', 1, '2024-01-18', '2022-01-01', '2024-12-31', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'Regi04.png', 'N', '', '', 'N', '', 'A'),
(20, '105', 37, 2022, '1', '10', 'Regidor05', '', 1, '2024-01-18', '2022-01-01', '2024-12-31', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'Regi05.png', 'N', '', '', 'N', '', 'A'),
(21, '105', 37, 2022, '1', '10', 'Regidor06', '', 1, '2024-01-18', '2022-01-01', '2024-12-31', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'Regi06.png', 'N', '', '', 'N', '', 'A'),
(22, '105', 37, 2022, '1', '10', 'Regidor07', '', 1, '2024-01-18', '2022-01-01', '2024-12-31', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'Regi07.png', 'N', '', '', 'N', '', 'A'),
(23, '105', 37, 2022, '1', '10', 'Regidor08', '', 1, '2024-01-18', '2022-01-01', '2024-12-01', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'Regi08.png', 'N', '', '', 'N', '', 'A'),
(24, '105', 37, 2022, '1', '10', 'Regidor09', '', 1, '2024-01-18', '2022-01-01', '2024-12-31', -1, '0000-00-00', -1, '0000-00-00', -1, '0000-00-00', 'I', -1, '0000-00-00', 'I', 'Regi09.png', 'N', '', '', 'N', '', 'A');

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
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `scmes`
--
ALTER TABLE `scmes`
  ADD PRIMARY KEY (`cmeclave`);

--
-- Indices de la tabla `sctipodocu`
--
ALTER TABLE `sctipodocu`
  ADD PRIMARY KEY (`CTDClave`);

--
-- Indices de la tabla `stcabidire`
--
ALTER TABLE `stcabidire`
  ADD PRIMARY KEY (`CAyuntamiento`,`CCabiDir`,`CTipo`,`CNumero`);

--
-- Indices de la tabla `stdire`
--
ALTER TABLE `stdire`
  ADD PRIMARY KEY (`CAyuntamiento`,`CTipo`,`CNumero`),
  ADD UNIQUE KEY `CAyuntamiento` (`CAyuntamiento`,`CTipo`,`CNumero`),
  ADD KEY `CAyuntamiento_2` (`CAyuntamiento`,`CTipo`,`CNumero`);

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
  MODIFY `PNumePerm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `stlayers`
--
ALTER TABLE `stlayers`
  MODIFY `LConsecut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
