
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `idTurnos` int(11) NOT NULL,
  `fechaTurno` varchar(100) NOT NULL,
  `precioTurno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turnos`
--
INSERT INTO turnos(`fechaTurno`, `precioTurno`) VALUES 
('23/03/24','5000'),
('05/04/24','5000');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`idTurnos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `idTurnos` int(11) NOT NULL AUTO_INCREMENT;


