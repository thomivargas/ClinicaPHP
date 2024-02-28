
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `idSucursal` int(11) NOT NULL,
  `nombreSucursal` varchar(100) NOT NULL,
  `direccionSucursal` text NOT NULL,
  `numeroSucursal` varchar(100) NOT NULL,
  `Imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`idSucursal`, `nombreSucursal`, `direccionSucursal`, `numeroSucursal`, `Imagen`) VALUES
(1, 'sucursal Principal', 'Alem 1490', '2645762629', 'clinica_1'),
(2, 'sucursal Deposito', '25 de mayo 554', '2646048808', 'clinica_2'),
(3, 'sucursal Recreativa', 'Av.Rioja 1123', '2645432867', 'clinica_3');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`idSucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `Sucursales`
  MODIFY `idSucursal` int(11) NOT NULL AUTO_INCREMENT;


