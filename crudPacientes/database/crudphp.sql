
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL,
  `nombrePaciente` varchar(100) NOT NULL,
  `apellidoPaciente` text NOT NULL,
  `numeroPaciente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `nombrePaciente`, `apellidoPaciente`, `numeroPaciente`) VALUES
(1, 'Santiago', 'Servera', '2645762629'),
(2, 'Thomas', 'Vargas', '2646048808'),
(3, 'Franco', 'Martin', '2645432867');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT;


