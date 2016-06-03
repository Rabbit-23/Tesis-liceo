-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2016 a las 02:43:08
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemacake`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `persona_id`, `created`, `modified`) VALUES
(4, 42, '2016-05-29 17:11:25', '2016-06-01 22:29:37'),
(5, 43, '2016-05-29 17:13:22', '2016-05-29 17:13:22'),
(6, 48, '2016-06-01 00:16:49', '2016-06-01 00:16:49'),
(7, 58, '2016-06-01 22:48:23', '2016-06-01 22:48:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id`, `estatus`) VALUES
(1, 'Estudiante'),
(2, 'Representante'),
(3, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) NOT NULL,
  `lugar_de_nacimiento` varchar(30) CHARACTER SET utf8 NOT NULL,
  `impedimento_fisico` varchar(30) CHARACTER SET utf8 NOT NULL,
  `enfermedad` varchar(30) CHARACTER SET utf8 NOT NULL,
  `alergico` varchar(30) CHARACTER SET utf8 NOT NULL,
  `vive_con_sus_padres` varchar(30) CHARACTER SET utf8 NOT NULL,
  `plantel_de_donde_proviene` varchar(30) CHARACTER SET utf8 NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `persona_id`, `lugar_de_nacimiento`, `impedimento_fisico`, `enfermedad`, `alergico`, `vive_con_sus_padres`, `plantel_de_donde_proviene`, `created`, `modified`) VALUES
(26, 36, 'villa de cura', 'no', 'no', 'no', 'si', 'madre e de lourdes', '2016-05-29 16:47:06', '2016-05-29 16:47:06'),
(27, 37, 'villa de cura', 'NO', 'NO', 'SI', 'SI', 'APEP', '2016-05-29 16:49:14', '2016-05-29 16:49:14'),
(28, 38, 'villa de cura', 'NO', 'NO', 'NO', 'SI', 'NO SE', '2016-05-29 16:50:12', '2016-05-29 16:50:12'),
(29, 39, 'SAN JUAN', 'NO', 'NO', 'NO', 'NO', 'TACUSURUMA', '2016-05-29 16:51:01', '2016-05-29 16:51:01'),
(30, 40, 'villa de cura', 'NO', 'NO', 'SI', 'SI', 'NO SE', '2016-05-29 16:52:07', '2016-05-29 16:52:07'),
(31, 44, 'villa de cura', 'ninguno', 'no posee', 'si', 'si', 'simon rodriguez', '2016-05-31 23:06:44', '2016-05-31 23:06:44'),
(32, 46, 'villa de cura', 'no posee', 'obesidad', 'no', 'si', 'tacusuruma', '2016-05-31 23:23:41', '2016-05-31 23:23:41'),
(33, 53, 'VILA DE CURA', 'NO', 'NO', 'NO', 'SI', 'APEP', '2016-06-01 20:06:54', '2016-06-01 20:06:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE IF NOT EXISTS `grados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `grado`) VALUES
(1, 1),
(2, 2),
(4, 3),
(5, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados_materias`
--

CREATE TABLE IF NOT EXISTS `grados_materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grado_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `grados_materias`
--

INSERT INTO `grados_materias` (`id`, `grado_id`, `materia_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 1, 3),
(4, 2, 3),
(5, 4, 3),
(6, 1, 4),
(7, 2, 4),
(8, 4, 4),
(9, 5, 4),
(10, 6, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE IF NOT EXISTS `inscripciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante_id` int(11) NOT NULL,
  `seccion_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`id`, `estudiante_id`, `seccion_id`, `periodo_id`, `fecha_inscripcion`, `created`, `modified`) VALUES
(4, 26, 9, 1, '2016-09-11', '2016-05-29 17:01:13', '2016-06-01 18:11:16'),
(5, 27, 10, 1, '2016-09-18', '2016-05-29 17:14:07', '2016-06-01 20:00:12'),
(6, 32, 1, 1, '2016-09-13', '2016-06-01 18:07:51', '2016-06-01 18:07:51'),
(7, 28, 10, 1, '2016-09-16', '2016-06-01 19:27:47', '2016-06-01 19:27:47'),
(8, 29, 1, 1, '2016-09-17', '2016-06-01 23:35:27', '2016-06-01 23:35:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`) VALUES
(1, 'matematica'),
(2, 'castellano'),
(3, 'ingles'),
(4, 'biologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_docentes`
--

CREATE TABLE IF NOT EXISTS `materias_docentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia_id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `materias_docentes`
--

INSERT INTO `materias_docentes` (`id`, `materia_id`, `docente_id`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 3, 3),
(5, 2, 4),
(6, 4, 5),
(7, 1, 6),
(8, 3, 4),
(9, 3, 7),
(10, 4, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE IF NOT EXISTS `meses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `meses`
--

INSERT INTO `meses` (`id`, `mes`) VALUES
(1, 'ENERO'),
(2, 'FEBRERO'),
(3, 'MARZO'),
(4, 'ABRIL'),
(5, 'MAYO'),
(6, 'JUNIO'),
(7, 'JULIO'),
(8, 'SEPTIEMBRE'),
(9, 'OCTUBRE'),
(10, 'NOVIEMBRE'),
(11, 'DICIEMBRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `seccion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `mes_id` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `tipopago_id` int(11) NOT NULL,
  `fecha_pago` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `periodo_id`, `estudiante_id`, `mes_id`, `monto`, `tipopago_id`, `fecha_pago`, `created`, `modified`) VALUES
(2, 1, 26, 1, 2500, 2, '0000-00-00', '2016-05-29 17:10:12', '2016-05-29 17:10:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE IF NOT EXISTS `periodos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `periodo`) VALUES
(1, '2016-2017'),
(2, '2017-2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `cedula` int(8) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `estado` varchar(30) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `estatus_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `direccion`, `fechanacimiento`, `estado`, `sexo`, `estatus_id`) VALUES
(36, 'HENRY', 'ALMEIDA', 20357263, 2147483647, 'calle sucre numero 50', '1996-02-24', 'aragua', 'm', 0),
(37, 'GLEISY', 'PARRA', 25102411, 2147483647, 'LA REPRESA SUR NUMERO 60', '1996-12-14', 'ARAGUA', 'F', 0),
(38, 'RONDAL', 'VARGAS', 4164894, 489498498, 'LOS COLORADOS', '2016-08-26', 'ARAGUA', 'M', 0),
(39, 'PEDRO', 'PEREZ', 4498498, 498498498, 'SAN JUAN', '2016-05-29', 'GUARICO', 'M', 0),
(40, 'GLADYS', 'INFANTE', 564598, 416549848, 'LA REPRESA', '2016-05-29', 'ARAGUA', 'F', 0),
(41, 'MARIA', 'MELO', 7298404, 4984984, 'LA REPRESA', '2016-03-29', 'ARAGUA', 'F', 0),
(42, 'LUIS', 'VALERA', 2651656, 51654654, 'SAN JUAN', '2016-05-29', 'GUARICO', 'M', 0),
(43, 'KATY', 'PEREZ', 15156, 15615156, 'FUNDA VILLA VILLA DE CURA', '2016-05-29', 'ARAGUA', 'F', 0),
(44, 'Jose Gregorio', 'Landaeta Gonzales', 28478963, 41268788, 'la represa', '2026-05-30', 'aragua', 'M', 0),
(45, 'jose miguel', 'Landaeta Gonzales', 23687459, 41658976, 'la represa', '1998-06-23', 'aragua', 'M', 0),
(46, 'CARLOS RAMON', 'MORENO CONTRERAS', 28987452, 414598745, 'calle paez casa numero 40', '1997-12-12', 'aragua', 'M', 0),
(47, 'CARMEN VIRGINIA', 'GONZALES AREVALO', 12897788, 414587963, 'LA REPRESA SUR NUMERO 60', '1996-05-31', 'aragua', 'F', 0),
(48, 'MARIA', 'RIVAS', 7987297, 414459756, 'FUNDA VILLA VILLA DE CURA', '1997-11-19', 'aragua', 'F', 0),
(49, 'MILAGROS MARGARITA', 'JIMENES DE PEREZ', 2987426, 42489855, 'CALLE DR MANZO', '1998-06-01', 'aragua', 'F', 0),
(52, 'HENRY RAMON', 'ALMEIDA FARFAN', 6828741, 2147483647, 'calle sucre numero 50', '1997-11-20', 'aragua', 'M', 0),
(53, 'VIRGINIA CARIDAD', 'GUZMAN GUZMAN', 14987535, 2147483647, 'CARRIZALITO', '1997-06-01', 'aragua', 'F', 0),
(54, 'PEDRO AUGUSTO  ', 'PAREDES ROJAS', 20159746, 4126875, 'EL CORTIJO', '1997-06-01', 'aragua', 'M', 2),
(55, 'MARGARITA', 'ROJAS PEREZ', 12369785, 41368745, 'FUNDA VILLA CASAS 50', '2000-12-18', 'ARAGUA', 'F', 2),
(56, 'CARLOS ', 'RAMIREZ RAMIREZ', 12398745, 414987563, 'AV.  BOLIVAR SUR #50', '1998-06-01', 'aragua', 'M', 2),
(57, 'LUIS JOSE', 'BOLIVAR GALLARDO', 12369785, 412369745, 'CALLE DOCTOR MANZO NUMERO10', '1998-11-17', 'ARAGUA', 'M', 2),
(58, 'ELBA MILAGROS', 'INFANTE', 12369875, 416853677, 'FRANCISCO DE MIRANDA CASA NUMERO 7', '1997-12-19', 'ARAGUA', 'F', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representantes`
--

CREATE TABLE IF NOT EXISTS `representantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentezco` varchar(15) CHARACTER SET utf8 NOT NULL,
  `instruncion` varchar(15) CHARACTER SET utf8 NOT NULL,
  `profesion` varchar(20) CHARACTER SET utf8 NOT NULL,
  `direcciontrabajo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nombremadre` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nombrepadre` varchar(30) CHARACTER SET utf8 NOT NULL,
  `noasistencia` varchar(30) CHARACTER SET utf8 NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `representantes`
--

INSERT INTO `representantes` (`id`, `parentezco`, `instruncion`, `profesion`, `direcciontrabajo`, `nombremadre`, `nombrepadre`, `noasistencia`, `created`, `modified`, `persona_id`, `estudiante_id`) VALUES
(4, 'TIA', '3', 'AMA DE CASA', 'SU CASA', 'MARIA', 'PEDRO', 'LA MAMA', '2016-06-01 19:09:10', '2016-06-01 22:06:15', 49, 26),
(6, 'PADRE', '5', 'OBRERO', 'VALLES DEL TUCUTUNEMO', 'PILAR', 'PEDRO', 'ABELYS AGUILAR', '2016-06-01 21:33:38', '2016-06-01 21:34:01', 54, 33),
(7, 'MADRE', '4', 'obrero', 'san juan de los morros', 'pilar', 'margarita', 'migdalia montevideo', '2016-06-01 21:47:58', '2016-06-01 21:57:58', 55, 32),
(8, 'PADRE', '4', 'ALBAÃ‘IL', 'EL SOMBRERO', 'ZULAY', 'CARLOS', 'MARIA RIVAS', '2016-06-01 21:53:18', '2016-06-01 22:22:36', 56, 28),
(9, 'PADRE', '3', 'CRISTALERO', 'LAS PEÃ‘ITAS', 'MILDRE BARRIOS', 'LUIS', 'GISELA LEON', '2016-06-01 22:22:20', '2016-06-01 22:22:20', 57, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(1) CHARACTER SET utf8 NOT NULL,
  `grado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `seccion`, `grado_id`) VALUES
(1, 'A', 1),
(2, 'B', 1),
(3, 'A', 2),
(4, 'C', 1),
(5, 'B', 2),
(6, 'A', 4),
(7, 'B', 4),
(8, 'C', 4),
(9, 'A', 5),
(10, 'B', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopagos`
--

CREATE TABLE IF NOT EXISTS `tipopagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_pago` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipopagos`
--

INSERT INTO `tipopagos` (`id`, `tipo_pago`) VALUES
(1, 'inscripcion'),
(2, 'mensualidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `updated`) VALUES
(1, 'ronald', '1090ffac2c7c621acc764bb8a43d80d7d4d4c432', 'admin', '2016-05-27 13:36:37', '2016-05-27 13:36:37'),
(3, 'admin', '5f1824f463ce509f730df6c83caf30959fe1058d', 'admin', '2016-05-27 13:36:59', '2016-05-27 13:36:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
