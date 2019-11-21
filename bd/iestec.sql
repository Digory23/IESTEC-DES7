-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2019 a las 19:28:23
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.14
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iestec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_Cedula` varchar(15) NOT NULL,
  `Pass` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_interes`
--

CREATE TABLE `area_interes` (
  `ID_CodArea` int(15) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `Tipo_Part` varchar(25) DEFAULT NULL,
  `Cod_Articulo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ID_Eventos` int(11) NOT NULL,
  `Nombre_Evento` varchar(30) NOT NULL,
  `Hora` varchar(15) NOT NULL,
  `ID_Sala` int(10) NOT NULL,
  `ID_area` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `ID_Cedula` varchar(15) NOT NULL,
  `Cena` varchar(10) DEFAULT NULL,
  `Institucion` varchar(20) DEFAULT NULL,
  `Unidad` varchar(25) DEFAULT NULL,
  `Pais` varchar(20) DEFAULT NULL,
  `Ciudad` varchar(25) DEFAULT NULL,
  `Provincia` varchar(30) DEFAULT NULL,
  `Miembro_IEEE` varchar(15) DEFAULT NULL,
  `Tipo_Participante` varchar(30) DEFAULT NULL,
  `Area_Interes` varchar(25) DEFAULT NULL,
  `email_facultad` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes_articulo`
--

CREATE TABLE `participantes_articulo` (
  `ID_cedula` varchar(15) NOT NULL,
  `ID_cod_articulo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante_interes`
--

CREATE TABLE `participante_interes` (
  `ID_Cedula` varchar(15) NOT NULL,
  `Cod_Area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `ID_Evento` int(11) NOT NULL,
  `ID_Sala` int(10) NOT NULL,
  `Fecha` date NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `ID_programa` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `ID_Sala` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_part`
--

CREATE TABLE `tipo_part` (
  `ID_TipoPart` varchar(30) NOT NULL,
  `Descrip` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `ID_TipoUsuario` varchar(30) NOT NULL,
  `Descrip` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ID_TipoUsuario`, `Descrip`) VALUES
('est', 'Estudiante'),
('pro', 'Profesional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Tipo_Ussuario` varchar(30) DEFAULT NULL,
  `Cedula` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Nombre`, `Apellido`, `Sexo`, `Email`, `Telefono`, `Tipo_Ussuario`, `Cedula`) VALUES
(1, 'Daniel', 'Diaz', NULL, 'danyd2339@gmail.com', '123-7654', 'est', '8-928-1643'),
(2, 'Jotaro', 'Joestar', NULL, 'oraoraora@gmail.com', '123-5739', 'est', '200-928-5432');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_Cedula`);

--
-- Indices de la tabla `area_interes`
--
ALTER TABLE `area_interes`
  ADD PRIMARY KEY (`ID_CodArea`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`Cod_Articulo`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ID_Eventos`),
  ADD KEY `ID_Sala` (`ID_Sala`),
  ADD KEY `fk_AreaInteres` (`ID_area`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`ID_Cedula`),
  ADD KEY `fk_TipoPart` (`Tipo_Participante`);

--
-- Indices de la tabla `participantes_articulo`
--
ALTER TABLE `participantes_articulo`
  ADD KEY `fk_Participante` (`ID_cedula`),
  ADD KEY `ID_cod_articulo` (`ID_cod_articulo`);

--
-- Indices de la tabla `participante_interes`
--
ALTER TABLE `participante_interes`
  ADD PRIMARY KEY (`ID_Cedula`),
  ADD KEY `fk_Area` (`Cod_Area`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`ID_programa`),
  ADD UNIQUE KEY `ID_Evento` (`ID_Evento`),
  ADD KEY `ID_Sala` (`ID_Sala`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`ID_Sala`);

--
-- Indices de la tabla `tipo_part`
--
ALTER TABLE `tipo_part`
  ADD PRIMARY KEY (`ID_TipoPart`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`ID_TipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD UNIQUE KEY `Cedula` (`Cedula`),
  ADD KEY `Tipo_Ussuario` (`Tipo_Ussuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_interes`
--
ALTER TABLE `area_interes`
  MODIFY `ID_CodArea` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID_Eventos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `ID_programa` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_Cedula_Admin` FOREIGN KEY (`ID_Cedula`) REFERENCES `usuario` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_AreaInteres` FOREIGN KEY (`ID_area`) REFERENCES `area_interes` (`ID_CodArea`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `fk_Cedula_Part` FOREIGN KEY (`ID_Cedula`) REFERENCES `usuario` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_TipoPart` FOREIGN KEY (`Tipo_Participante`) REFERENCES `tipo_part` (`ID_TipoPart`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `participantes_articulo`
--
ALTER TABLE `participantes_articulo`
  ADD CONSTRAINT `fk_Participante` FOREIGN KEY (`ID_cedula`) REFERENCES `participantes` (`ID_Cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participantes_articulo_ibfk_1` FOREIGN KEY (`ID_cod_articulo`) REFERENCES `articulos` (`Cod_Articulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `participante_interes`
--
ALTER TABLE `participante_interes`
  ADD CONSTRAINT `fk_Area` FOREIGN KEY (`Cod_Area`) REFERENCES `area_interes` (`ID_CodArea`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Participantes_Interes` FOREIGN KEY (`ID_Cedula`) REFERENCES `participantes` (`ID_Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programas`
--
ALTER TABLE `programas`
  ADD CONSTRAINT `fk_Evento` FOREIGN KEY (`ID_Evento`) REFERENCES `eventos` (`ID_Eventos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Programa` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Sala` FOREIGN KEY (`ID_Sala`) REFERENCES `sala` (`ID_Sala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_tipousu` FOREIGN KEY (`Tipo_Ussuario`) REFERENCES `tipo_usuario` (`ID_TipoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
