-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2019 a las 18:14:14
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

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_Cedula`, `Pass`) VALUES
('8-928-1643', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_interes`
--

CREATE TABLE `area_interes` (
  `ID_CodArea` varchar(12) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area_interes`
--

INSERT INTO `area_interes` (`ID_CodArea`, `Descripcion`) VALUES
('Agroind', 'Agroindustria'),
('Cien_Bas', 'Ciencias Basicas'),
('Econ_Soc', 'Economia y Sociedad'),
('Edu_Ing', 'Educación en Ingeniería'),
('Ener_Amb', 'Energía y Ambiente'),
('Gest_Empre', 'Gestión Empresarial'),
('Infraes', 'Infraestructura'),
('Log_Trans', 'Logística y Transporte'),
('Otros', 'Otros'),
('Robot', 'Robótica'),
('TIC', 'Tec_Emerg');

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
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `cod_entrada` int(6) NOT NULL,
  `ID_Cedula` varchar(15) NOT NULL,
  `asistencia` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`cod_entrada`, `ID_Cedula`, `asistencia`) VALUES
(300106, '8-968-7844', 'SI'),
(304348, '000-9999', ''),
(324567, '8-888-8888', 'SI'),
(440208, '222-2345', ''),
(763211, '8-968-7744', 'SI'),
(765488, '555-5555', ''),
(904350, '222-23467', 'SI'),
(915488, '111-66666', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ID_Eventos` int(11) NOT NULL,
  `Nombre_Evento` varchar(50) NOT NULL,
  `Hora` varchar(15) NOT NULL,
  `ID_Sala` int(10) NOT NULL,
  `ID_area` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`ID_Eventos`, `Nombre_Evento`, `Hora`, `ID_Sala`, `ID_area`) VALUES
(3, 'Inicio de Recepción de Artículos', '6:00 pm', 12, 'TIC'),
(4, 'Limite de Entrega de Artículos', '8:00 pm', 4, 'Econ_Soc'),
(5, 'Notificación de Aceptación', '5:00 pm', 6, 'TIC'),
(6, 'Alimentec', '12:00 pm', 4, 'Agroind'),
(7, 'INOFOOD', '3:00 pm', 5, 'Agroind'),
(8, 'Eshow', '7:00 pm', 8, 'Econ_Soc'),
(9, 'OMExpo', '4:00 pm', 3, 'Robot'),
(10, 'Digital Enterprise Show', '5:30 pm', 2, 'Gest_Empre'),
(11, 'Fintech Unconference', '6:30 pm', 3, 'Cien_Bas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `ID_Cedula` varchar(15) NOT NULL,
  `Cena` varchar(10) DEFAULT NULL,
  `Tipo_Participante` varchar(30) DEFAULT NULL,
  `email_facultad` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`ID_Cedula`, `Cena`, `Tipo_Participante`, `email_facultad`) VALUES
('000-9999', 'No', 'Pro_Nac', NULL),
('111-66666', 'Duo', 'Pro_Nac', NULL),
('222-2345', 'Duo', 'Est_NPre', NULL),
('222-23467', 'Duo', 'Pro_Nac', NULL),
('8-968-7744', 'Solo', 'Est_NPre', NULL),
('8-968-7844', 'Duo', 'Est_NPre', NULL);

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
  `Cod_Area` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participante_interes`
--

INSERT INTO `participante_interes` (`ID_Cedula`, `Cod_Area`) VALUES
('8-968-7744', 'Edu_Ing'),
('8-968-7744', 'Ener_Amb'),
('8-968-7744', 'Infraes'),
('8-968-7744', 'Robot'),
('8-968-7744', 'TIC'),
('8-968-7844', 'Cien_Bas'),
('8-968-7844', 'Edu_Ing'),
('8-968-7844', 'Ener_Amb'),
('8-968-7844', 'Infraes'),
('8-968-7844', 'Robot'),
('8-968-7844', 'TIC'),
('000-9999', 'Agroind'),
('000-9999', 'Cien_Bas'),
('000-9999', 'Gest_Empre'),
('000-9999', 'TIC'),
('222-2345', 'Agroind'),
('222-2345', 'Econ_Soc'),
('222-2345', 'Ener_Amb'),
('222-2345', 'Infraes'),
('222-23467', 'Cien_Bas'),
('222-23467', 'Econ_Soc'),
('222-23467', 'Edu_Ing'),
('111-66666', 'Edu_Ing'),
('111-66666', 'Ener_Amb'),
('111-66666', 'Gest_Empre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `ID_TipoPart` varchar(30) NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`ID_TipoPart`, `Precio`) VALUES
('Est_Art', 100),
('Est_Int', 125),
('Est_NPost', 50),
('Est_NPre', 80),
('Par_Int', 225),
('Pro_Art', 175),
('Pro_Nac', 125);

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

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`ID_Evento`, `ID_Sala`, `Fecha`, `ID_Usuario`, `ID_programa`) VALUES
(3, 12, '2019-12-10', 27, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `ID_Sala` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`ID_Sala`, `Nombre`, `Descripcion`) VALUES
(1, 'Scalterna', 'Sala de conferencias y talleres'),
(2, 'Geranium', 'Sala de conferencias y talleres'),
(3, 'Asculus', 'Sala de conferencias y talleres'),
(4, 'Cynodon', 'Sala de conferencias y talleres'),
(5, 'Tessaria', 'Sala de conferencias y talleres'),
(6, 'Solanum', 'Sala de conferencias y talleres'),
(7, 'Condalia', 'Sala de conferencias y talleres'),
(8, 'Eupatorium', 'Sala de conferencias y talleres'),
(9, 'Ambrosia', 'Sala de Generación de Certificados'),
(10, 'Eclipta', 'Sala de conferencias y talleres'),
(11, 'Amaranthus', 'Sala de recepción del Evento'),
(12, 'Recepción', 'Sala de recepción del Evento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_part`
--

CREATE TABLE `tipo_part` (
  `ID_TipoPart` varchar(30) NOT NULL,
  `Descrip` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_part`
--

INSERT INTO `tipo_part` (`ID_TipoPart`, `Descrip`) VALUES
('Est_Art', 'Estudiante con Artículo'),
('Est_Int', 'Estudiante Internacional'),
('Est_NPost', 'Estudiante Nacional Postgrado'),
('Est_NPre', 'Estudiante Nacional Pregrado'),
('Par_Int', 'Participante Internacional'),
('Pro_Art', 'Profesional con Artículo'),
('Pro_Nac', 'Profesional Nacional');

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
('adm', 'Administrador '),
('par', 'Participante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Sexo` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Miembro_IEEE` varchar(25) NOT NULL,
  `Tipo_Ussuario` varchar(30) DEFAULT NULL,
  `Cedula` varchar(15) NOT NULL,
  `Institucion` varchar(20) DEFAULT NULL,
  `Unidad` varchar(25) DEFAULT NULL,
  `Pais` varchar(20) DEFAULT NULL,
  `Ciudad` varchar(25) DEFAULT NULL,
  `Provincia` varchar(30) DEFAULT NULL,
  `ocupacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Nombre`, `Apellido`, `Sexo`, `Email`, `Telefono`, `Miembro_IEEE`, `Tipo_Ussuario`, `Cedula`, `Institucion`, `Unidad`, `Pais`, `Ciudad`, `Provincia`, `ocupacion`) VALUES
(27, 'Daniel', 'Diaz', 'Masculino', 'danyd2339@gmail.com', '445-2345', 'Sociedad Afiliada', 'adm', '8-928-1643', 'UTP', 'FISC', NULL, 'Panama', 'Panama', ''),
(44, 'Izuku', 'Midoriya', 'Masculino', 'user1@iestec.local', '754332', 'Miembro Estudiantil', 'par', 'mono-chino', 'UA', 'Departamento de heroes', NULL, 'Japon', 'Japon', ''),
(46, 'Nathalie', 'Acevedo', 'Femenino', 'user2@iestec.local', '536478', 'Miembro Profesional', 'par', '8-888-8888', 'UTP', 'FISC', NULL, 'Narnia', 'Panama', ''),
(59, 'Diana', 'Garcia', 'Femenino', 'user1@iestec.local', '45374567', 'Miembro Profesional', 'par', '555-5555', 'UTP', 'FISC', NULL, 'Panamá', 'Panamá', ''),
(61, 'Pedro', 'Stanziola', 'Masculino', 'pedro123@gmail.com', '6547-8954', 'Miembro Profesional', 'par', '8-968-7744', 'INAC', 'INAC', NULL, 'Panama', 'Bocas del Toro', ''),
(62, 'AnaMarie', 'Stanziola', 'Femenino', 'anamaria23@gmail.com', '6547-8956', 'Sociedad Afiliada', 'par', '8-968-7844', 'INAC', 'INAC', NULL, 'Panama', 'Chiriquí', ''),
(64, 'Digory', 'Speedwagon', 'Masculino', 'danyd2339@gmail.com', '12345356', 'Miembro Estudiantil', 'par', '000-9999', 'UTP', 'FISC', 'Panama', 'Panama', 'Panama', 'Profesor'),
(65, 'Diana', 'Joestar', 'Femenino', 'dianac.vergara1@gmai', '4567857', 'Miembro Profesional', 'par', '222-2345', '', '', 'Panama', '', '', ''),
(66, 'Diana', 'Speedwagon', 'Femenino', 'dianac.vergara1@gmai', '7898654', 'Miembro Profesional', 'par', '222-23467', '', '', 'Panama', '', '', 'Profesor'),
(70, 'Daniel', 'Joestar', 'Masculino', 'danyd2339@gmail.com', '7897654', 'Sociedad Afiliada', 'par', '111-66666', '', '', 'Panama', '', '', 'Profesor');

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
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`cod_entrada`),
  ADD UNIQUE KEY `ID_Usuario` (`ID_Cedula`);

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
  ADD KEY `fk_Area` (`Cod_Area`),
  ADD KEY `Fk_Part_Cedu` (`ID_Cedula`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD KEY `ID_TipoPart` (`ID_TipoPart`);

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
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID_Eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `ID_programa` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_Cedula_Admin` FOREIGN KEY (`ID_Cedula`) REFERENCES `usuario` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_qr_Ced` FOREIGN KEY (`ID_Cedula`) REFERENCES `usuario` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `Fk_Part_Cedu` FOREIGN KEY (`ID_Cedula`) REFERENCES `participantes` (`ID_Cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Area` FOREIGN KEY (`Cod_Area`) REFERENCES `area_interes` (`ID_CodArea`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `precios`
--
ALTER TABLE `precios`
  ADD CONSTRAINT `fk_TipoParticipante` FOREIGN KEY (`ID_TipoPart`) REFERENCES `tipo_part` (`ID_TipoPart`) ON DELETE CASCADE ON UPDATE CASCADE;

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
