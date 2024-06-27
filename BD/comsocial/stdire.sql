-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 20:01:59
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
-- Base de datos: `comsocialcopy`
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
