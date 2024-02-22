-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2023 a las 07:15:25
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cannabisol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admisioncliente`
--

CREATE TABLE `admisioncliente` (
  `idAdmision` int(11) NOT NULL,
  `nombreAdmitido` varchar(100) NOT NULL,
  `apellidoAdmitido` text NOT NULL,
  `patologia` varchar(100) NOT NULL,
  `numeroAdmitido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admisioncliente`
--

INSERT INTO `admisioncliente` (`idAdmision`, `nombreAdmitido`, `apellidoAdmitido`, `patologia`, `numeroAdmitido`) VALUES
(1, 'Santiago', 'Servera', 'Ansiedad', '264523322'),
(2, 'Joaquin', 'Perez', 'Estres postraumatico', '264523322'),
(3, 'Franco', 'Martin', 'Bulimia', '264523322');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombreCliente` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `apellidoCliente` text COLLATE utf8_bin,
  `numeroCliente` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombreCliente`, `apellidoCliente`, `numeroCliente`) VALUES
(1, 'Santiago', 'Servera', '2645762629'),
(2, 'Joaquin', 'Perez', '2646048808'),
(3, 'Franco', 'Martin', '2645432867'),
(4, 'chino', 'zaba', '25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `idHorario` int(11) NOT NULL,
  `diaHorario` varchar(100) NOT NULL,
  `horarioEntrada` text NOT NULL,
  `horarioSalida` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`idHorario`, `diaHorario`, `horarioEntrada`, `horarioSalida`) VALUES
(1, 'Lunes', '10:00', '20:00'),
(2, 'Martes', '10:00', '20:00'),
(3, 'Miercoles', '10:00', '20:00'),
(4, 'Jueves', '10:00', '20:00'),
(5, 'Viernes', '10:00', '20:00'),
(6, 'Sabado', '10:00', '13:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `fechaIngreso` text NOT NULL,
  `precioProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `fechaIngreso`, `precioProducto`) VALUES
(1, 'Semilla Automatica Lemon haze', '06/12/2023', 3000),
(2, 'Fertilizante ', '02/12/2023', 1000),
(3, 'Carpa cultivo', '04/12/2023', 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `idSucursal` int(11) NOT NULL,
  `nombreSucursal` varchar(100) NOT NULL,
  `direccionSucursal` text NOT NULL,
  `numeroSucursal` varchar(100) NOT NULL,
  `emailSucursal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`idSucursal`, `nombreSucursal`, `direccionSucursal`, `numeroSucursal`, `emailSucursal`) VALUES
(1, 'sucursal Principal', 'Alem 1490', '2645762629', ''),
(2, 'sucursal Deposito', '25 de mayo 554', '2646048808', ''),
(3, 'sucursal Recreativa', 'Av.Rioja 1123', '2645432867', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idAdmin` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idAdmin`, `usuario`, `password`) VALUES
(1, 'kito', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admisioncliente`
--
ALTER TABLE `admisioncliente`
  ADD PRIMARY KEY (`idAdmision`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`idHorario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`idSucursal`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idAdmin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admisioncliente`
--
ALTER TABLE `admisioncliente`
  MODIFY `idAdmision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `idHorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `idSucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
