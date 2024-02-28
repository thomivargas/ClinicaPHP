
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `idMedicos` int(11) NOT NULL,
  `nombreMedico` varchar(100) NOT NULL,
  `apellidoMedico` text NOT NULL,
  `especialidadMedico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`idMedicos`, `nombreMedico`, `apellidoMedico`, `especialidadMedico`) VALUES
(1, 'thomas', 'vargas', 'clinico'),
(2, 'ruben ', 'morales', 'dentista'),
(3, 'daniel', 'oliva', 'psicologo'),


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`idMedicos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `idMedicos` int(11) NOT NULL AUTO_INCREMENT;


