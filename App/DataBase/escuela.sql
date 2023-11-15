-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2023 a las 23:44:31
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pof`
--

CREATE TABLE `pof` (
  `Id` int(255) NOT NULL,
  `DNI` int(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `CAR` varchar(255) NOT NULL,
  `Agrupamiento` varchar(255) NOT NULL,
  `S` varchar(255) NOT NULL,
  `Asignatura` varchar(255) NOT NULL,
  `Hs` int(255) NOT NULL,
  `Curso` int(255) NOT NULL,
  `Division` int(255) NOT NULL,
  `Ciclo` varchar(255) NOT NULL,
  `Turno` varchar(255) NOT NULL,
  `F-Ingreso` date NOT NULL,
  `OBS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pof`
--

INSERT INTO `pof` (`Id`, `DNI`, `Nombre`, `Apellido`, `CAR`, `Agrupamiento`, `S`, `Asignatura`, `Hs`, `Curso`, `Division`, `Ciclo`, `Turno`, `F-Ingreso`, `OBS`) VALUES
(1, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '0000-00-00', ''),
(6, 46457255, 'Alesanbd', 'asdasd', 'asdasdas', 'asdasd', 'asdasd', 'adasd', 1, 21, 21, 'asdasd', 'asdasd', '2023-10-11', 'asdasd'),
(7, 123123, 'asdasdas', 'dasdas', 'dasdasdas', 'dasd', 'asd', 'asdasdasdfasf', 123, 123, 2, 'asd', 'asd', '2023-10-10', 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `Id` int(255) NOT NULL,
  `Estado` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Id`, `Estado`, `Username`, `Password`) VALUES
(1, '1', 'Admin', '5858');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pof`
--
ALTER TABLE `pof`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pof`
--
ALTER TABLE `pof`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
