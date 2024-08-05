-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2024 at 05:11 PM
-- Server version: 8.0.39
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `difzinac_usuario`
--

-- --------------------------------------------------------

--
-- Table structure for table `Avisos`
--

CREATE TABLE `Avisos` (
  `id` int NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `nombImag` varchar(100) NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Avisos`
--

INSERT INTO `Avisos` (`id`, `titulo`, `fecha`, `nombImag`, `usuario_id`) VALUES
(10, 'Noticia02', '2024-08-02', 'b61ca11ebdb00f1783ea67a5da3c8bc2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `nombImag` varchar(100) NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `fecha`, `nombImag`, `usuario_id`) VALUES
(10, 'Banner', '2024-08-02', 'f15d14c964275b142861eea783ca42d8.jpg', 1),
(11, 'Aviso01', '2024-08-02', '806f404d150a387fc7d7e010a9de7c05.jpg', 1),
(13, 'asdfasd', '2024-08-02', '16ba5183d0427afe9f5c0f6d0355d730.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(130) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha` date NOT NULL,
  `nomb_imag` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `fecha`, `nomb_imag`, `usuario_id`) VALUES
(53, 'Noticia03', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid debitis laboriosam minima in et quo incidunt. Molestiae vitae sa', '2024-07-31', '852d7b62f89df03a0031e10c0c796ed9.jpg', 1),
(54, 'Noticia02', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid debitis laboriosam minima in et quo incidunt. Molestiae vitae sa', '2024-08-01', '6b79e532165948bb40cb5bb0dc52c5dd.jpg', 1),
(55, 'Noticia04', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid debitis laboriosam minima in et quo incidunt. Molestiae vitae sa', '2024-08-01', '1e5faf822440420c93f2edc057588561.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `es_admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `nombre`, `telefono`, `password`, `es_admin`) VALUES
(1, 'email@email.com', 'Ernesto Valdes Lujano', '7222222222', '123456', 1),
(2, 'vernesto575@gmail.com', 'Admin', '7222222222', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Avisos`
--
ALTER TABLE `Avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Avisos`
--
ALTER TABLE `Avisos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
