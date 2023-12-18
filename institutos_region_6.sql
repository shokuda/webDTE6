-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2023 a las 17:12:20
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
-- Base de datos: `institutos_region_6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `Inst` int(11) NOT NULL,
  `Nombre_Carrera` text NOT NULL,
  `Tipo` text NOT NULL,
  `Perfil_Profesional` text NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`Inst`, `Nombre_Carrera`, `Tipo`, `Perfil_Profesional`, `Descripcion`) VALUES
(77, 'Profesorado - Ingles', 'profesorado', 'Profesor/a en Ingles', 'El egresado podrá...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institutos`
--

CREATE TABLE `institutos` (
  `Num_Insti` int(11) NOT NULL,
  `Nombre_Insti` text DEFAULT NULL,
  `Direccion_Insti` text DEFAULT NULL,
  `Contacto_Mail` text DEFAULT NULL,
  `Contacto_Telefono` int(15) DEFAULT NULL,
  `Contacto_Facebook` text DEFAULT NULL,
  `Contacto_Instagram` text DEFAULT NULL,
  `Contacto_Twitter` text DEFAULT NULL,
  `Descripcion_Insti` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `institutos`
--

INSERT INTO `institutos` (`Num_Insti`, `Nombre_Insti`, `Direccion_Insti`, `Contacto_Mail`, `Contacto_Telefono`, `Contacto_Facebook`, `Contacto_Instagram`, `Contacto_Twitter`, `Descripcion_Insti`) VALUES
(77, 'Instituto Superior de Formación Docente y Técnica Nº 77', 'Sgto Cabral 2772 - Munro', 'isfdyt77vl@gmail.com', 47562864, NULL, NULL, NULL, 'El instituto 77...');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD KEY `Inst` (`Inst`);

--
-- Indices de la tabla `institutos`
--
ALTER TABLE `institutos`
  ADD PRIMARY KEY (`Num_Insti`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`Inst`) REFERENCES `institutos` (`Num_Insti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
