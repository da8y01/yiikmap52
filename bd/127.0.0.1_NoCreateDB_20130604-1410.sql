-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2013 a las 18:07:33
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Estructura de tabla para la tabla `kmap_accionista`
--

CREATE TABLE IF NOT EXISTS `kmap_accionista` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) NOT NULL COMMENT 'puede ser capital_humano u organizacion.',
  `tipo_id` int(11) NOT NULL COMMENT 'el id correspondiente al tipo que es.',
  `descripcion` varchar(512) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_area`
--

CREATE TABLE IF NOT EXISTS `kmap_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `kmap_area`
--

INSERT INTO `kmap_area` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'programacion', NULL, '2011-04-11 02:56:23', NULL),
(2, 'redes', NULL, '2011-04-11 02:56:23', NULL),
(3, 'circuitos', NULL, '2011-04-11 02:56:23', NULL),
(4, 'bases de datos', NULL, '2011-04-11 02:56:23', NULL),
(5, 'gestión del talento humano', NULL, '2011-04-11 02:56:23', NULL),
(6, 'administración', 'Nociones de administración y gerencia en general.', '2011-05-15 19:00:34', '2011-05-15 19:01:28'),
(7, 'electrónica', 'habilidades en la arquitectura de computadores.', '2012-01-28 12:34:56', '2012-01-28 12:34:56'),
(8, 'infraestructura', 'enfoque en dominio de conocimientos de infraestructura.', '2012-02-06 04:28:22', '2012-02-06 04:28:22'),
(9, 'pedagogía', '', '2012-02-06 21:34:54', '2012-02-06 21:34:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_capital`
--

CREATE TABLE IF NOT EXISTS `kmap_capital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `capital` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `kmap_capital`
--

INSERT INTO `kmap_capital` (`id`, `tipo`, `descripcion`, `capital`, `created_at`, `updated_at`) VALUES
(1, 1, '', 1, '2011-04-12 07:36:08', '2011-04-12 07:36:08'),
(2, 1, '', 5, '2011-04-12 07:36:17', '2011-04-12 07:36:17'),
(3, 2, '', 1, '2011-04-12 07:39:52', '2011-04-12 07:39:52'),
(4, 2, '', 4, '2011-04-12 07:40:07', '2011-04-12 07:40:07'),
(5, 3, '', 1, '2011-04-12 07:42:47', '2011-04-12 07:42:47'),
(6, 3, '', 4, '2011-04-12 07:42:57', '2011-04-12 07:42:57'),
(7, 1, '', 7, '2011-04-12 08:16:28', '2011-04-12 08:16:28'),
(8, 3, '', 5, '2011-04-12 08:27:14', '2011-04-12 08:27:14'),
(9, 3, '', 6, '2011-04-12 08:27:25', '2011-04-12 08:27:25'),
(10, 1, 'Cronograma de actividades y plazo.', 5, '2011-05-15 19:02:56', '2011-05-15 19:03:10'),
(11, 2, '', 2, '2011-09-22 16:56:38', '2011-09-22 16:56:38'),
(12, 3, '', 2, '2011-09-22 17:32:44', '2011-09-22 17:32:44'),
(13, 2, '', 7, '2012-01-28 17:02:21', '2012-01-28 17:02:21'),
(14, 2, '', 8, '2012-02-06 04:44:12', '2012-02-06 04:44:12'),
(15, 3, '', 12, '2012-02-06 04:47:40', '2012-02-06 04:47:40'),
(17, 2, 'Wells Fargo por su gran bagaje se perfila como un capital para ser utilizado por las organizaciones.', 10, '2012-12-14 01:16:55', '2012-12-14 01:16:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_capital_estructural`
--

CREATE TABLE IF NOT EXISTS `kmap_capital_estructural` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `un_capital` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `kmap_capital_estructural`
--

INSERT INTO `kmap_capital_estructural` (`id`, `nombre`, `descripcion`, `tipo`, `un_capital`, `created_at`, `updated_at`) VALUES
(1, 'computador', 'Equipo de cómputo.', 2, 5, '2011-04-11 02:56:24', NULL),
(2, 'sala', 'Sala para reuniones.', 2, 1, '2011-04-11 02:56:24', NULL),
(3, 'embotelladora', 'Maquina embotelladora de bebidas.', 2, 3, '2011-04-11 02:56:24', NULL),
(4, 'empacadora', 'Maquina empacadora/envolvedora de productos.', 2, 4, '2011-04-11 02:56:24', NULL),
(5, 'asignación de tiempo', '', 1, 1, '2011-04-12 07:35:49', '2011-04-12 07:35:49'),
(6, 'computador', '', 2, 5, '2011-04-12 07:53:55', '2011-04-12 07:53:55'),
(7, 'SI KMap', '', 1, 2, '2011-04-12 08:16:04', '2011-04-12 08:16:04'),
(8, 'Sala de conferencias', 'sala de conferencias para brindar capacitación', 2, 1, '2011-05-14 16:08:47', '2011-05-14 16:08:47'),
(9, 'Horario', 'Horario de diplomado y cursos.', 1, 1, '2011-05-15 19:04:46', '2011-05-15 19:05:02'),
(10, 'recurso software oficina', '', 1, 4, '2011-09-19 10:45:47', '2011-09-19 10:45:47'),
(11, 'recurso software ERP', '', 1, 2, '2011-09-19 11:54:17', '2011-09-19 11:57:30'),
(12, 'servidor PBX', '', 2, 5, '2011-09-19 11:54:49', '2011-09-19 11:56:58'),
(13, 'recurso software oficina', '', 1, 4, '2011-09-19 11:59:54', '2011-09-19 11:59:54'),
(14, 'empacadora industrial', '', 2, 3, '2011-09-22 15:03:03', '2011-09-22 15:03:03'),
(15, 'Sistema KM', '', 1, 2, '2011-09-22 16:55:09', '2011-09-22 16:55:09'),
(16, 'manual de operacion', 'docuemntacion tecnica detallada de la bobina generadora madre.', 1, 5, '2012-02-06 04:30:59', '2012-02-06 04:30:59'),
(17, 'auditorio', '', 2, 9, '2012-02-06 21:57:04', '2012-02-06 21:57:04'),
(18, 'MCO', 'Modelo de Conocimiento Organizacional.', 1, 6, '2012-12-14 01:07:22', '2012-12-14 01:07:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_capital_humano`
--

CREATE TABLE IF NOT EXISTS `kmap_capital_humano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `tipo` int(11) NOT NULL,
  `contacto` varchar(256) NOT NULL,
  `secundaria` varchar(128) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `kmap_capital_humano`
--

INSERT INTO `kmap_capital_humano` (`id`, `nombre`, `tipo`, `contacto`, `secundaria`, `created_at`, `updated_at`) VALUES
(1, 'daniel benitez restrepo', 3, 'calle 1 #1-1. 311111111.', '', '2011-04-11 02:56:23', '2011-09-13 09:30:31'),
(2, 'diego armando yela velasco', 2, 'calle 2 #2-2. 322222222', '', '2011-04-11 02:56:23', NULL),
(3, 'marcelo lopez trujillo', 4, 'calle 3 #3-3. 333333333', 'edificio de postgrados', '2011-04-11 02:56:23', NULL),
(4, 'carlos eduardo marulanda echeverry', 1, 'calle 4 #4-4. 344444444', 'sala usi', '2011-04-11 02:56:23', NULL),
(5, 'Alex Barrera', 3, 'Orange street #123', 'Celular samsung 3153002345', '2011-05-14 16:18:00', '2011-05-14 16:18:00'),
(6, 'Javier Bardem', 1, 'Avenida Colonia y Libertadores, Madrid.', 'GMT+1', '2011-05-15 19:06:11', '2011-05-15 19:06:25'),
(7, 'andres felipe sinisterra', 3, 'Calle 51 #12-12', 'punto movil movistar', '2012-01-25 14:26:36', '2012-01-25 14:26:36'),
(8, 'Yukito Tufokito', 3, 'Cali - Sede Principal ISA - Planta generadora madre', '', '2012-02-06 04:24:48', '2012-02-06 04:24:48'),
(9, 'jean piaget', 3, 'europa - francia', '', '2012-02-06 21:44:53', '2012-02-06 21:44:53'),
(10, 'Wells Fargo', 1, 'Spring Avenue, Washington D.C.', '(1) 555-3141592', '2012-12-14 01:09:14', '2012-12-14 01:09:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_capital_humano_has_intangible`
--

CREATE TABLE IF NOT EXISTS `kmap_capital_humano_has_intangible` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `capital_humano_id` int(11) NOT NULL,
  `intangible_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_capitales_humanos_has_intangibles_intangibles1` (`intangible_id`),
  KEY `fk_capitales_humanos_has_intangibles_capitales_humanos1` (`capital_humano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `kmap_capital_humano_has_intangible`
--

INSERT INTO `kmap_capital_humano_has_intangible` (`id`, `descripcion`, `capital_humano_id`, `intangible_id`, `created_at`, `updated_at`) VALUES
(1, '', 4, 2, '2011-04-12 08:13:17', '2011-04-12 08:13:17'),
(2, 'Javier Bardem determina el horario del diplomado.', 6, 1, '2011-05-15 19:07:44', '2011-05-15 19:07:55'),
(3, '', 5, 4, '2011-09-19 10:06:08', '2011-09-19 10:06:08'),
(5, '', 3, 1, '2011-09-25 23:05:18', '2011-09-25 23:05:18'),
(6, '', 8, 5, '2012-02-06 04:35:50', '2012-02-06 04:35:50'),
(7, 'Wells Fargo tiene el conocimiento del MCO.', 10, 6, '2012-12-14 01:20:13', '2012-12-14 01:20:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_capital_humano_has_tangible`
--

CREATE TABLE IF NOT EXISTS `kmap_capital_humano_has_tangible` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `capital_humano_id` int(11) NOT NULL,
  `tangible_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_capitales_humanos_has_tangibles_tangibles1` (`tangible_id`),
  KEY `fk_capitales_humanos_has_tangibles_capitales_humanos1` (`capital_humano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `kmap_capital_humano_has_tangible`
--

INSERT INTO `kmap_capital_humano_has_tangible` (`id`, `descripcion`, `capital_humano_id`, `tangible_id`, `created_at`, `updated_at`) VALUES
(1, '', 1, 5, '2011-04-11 11:29:24', '2011-04-11 11:29:24'),
(2, '', 4, 6, '2011-04-12 07:52:08', '2011-04-12 07:52:08'),
(3, 'Operario de la empacadora actual.', 5, 4, '2011-05-15 19:08:37', '2011-05-15 19:08:46'),
(5, '', 2, 6, '2011-09-25 23:06:32', '2011-09-25 23:06:32'),
(6, '', 8, 4, '2012-02-06 04:36:12', '2012-02-06 04:36:12'),
(7, 'Wells Fargo tiene como responsabilidad el laptop CQ50.', 10, 12, '2012-12-14 01:19:36', '2012-12-14 01:19:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_capital_relacional`
--

CREATE TABLE IF NOT EXISTS `kmap_capital_relacional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `afines` varchar(128) DEFAULT NULL,
  `organizacion_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `kmap_capital_relacional`
--

INSERT INTO `kmap_capital_relacional` (`id`, `afines`, `organizacion_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 5, '2011-04-11 02:56:23', NULL),
(2, NULL, 6, '2011-04-11 02:56:23', NULL),
(3, NULL, 7, '2011-04-11 02:56:23', NULL),
(4, NULL, 8, '2011-04-11 02:56:23', NULL),
(5, '', 1, '2011-04-12 08:26:03', '2011-04-12 08:26:03'),
(6, '', 10, '2011-04-12 08:26:12', '2011-04-12 08:26:12'),
(7, 'Industrias del Acero S.A.', 2, '2011-05-15 19:09:02', '2011-05-15 19:09:14'),
(8, '', 14, '2011-09-19 18:11:23', '2011-09-19 18:11:23'),
(9, '', 3, '2011-09-21 17:04:38', '2011-09-21 17:04:38'),
(10, '', 4, '2011-09-22 17:06:19', '2011-09-22 17:06:19'),
(11, '', 15, '2011-09-25 21:51:14', '2011-09-25 21:51:14'),
(12, 'industrias de infraestructura', 18, '2012-02-06 04:31:26', '2012-02-06 04:31:26'),
(13, 'ISA', 19, '2012-02-06 21:58:03', '2012-02-06 21:58:03'),
(14, 'publicaciones & tipografía', 14, '2012-09-12 18:45:03', '2012-09-12 18:45:03'),
(15, 'bancos regionales', 21, '2012-12-14 01:10:34', '2012-12-14 01:10:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_cliente`
--

CREATE TABLE IF NOT EXISTS `kmap_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) NOT NULL COMMENT 'puede ser capital_humano u organizacion.',
  `tipo_id` int(11) NOT NULL COMMENT 'el id correspondiente al tipo que es.',
  `descripcion` varchar(512) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_competencia`
--

CREATE TABLE IF NOT EXISTS `kmap_competencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `tipo` int(11) NOT NULL,
  `modelo` varchar(32) NOT NULL,
  `perfil` varchar(256) DEFAULT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `area_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_competencias_areas1` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `kmap_competencia`
--

INSERT INTO `kmap_competencia` (`id`, `nombre`, `tipo`, `modelo`, `perfil`, `descripcion`, `area_id`, `created_at`, `updated_at`) VALUES
(1, 'lenguajes de programacion', 2, '4', '', 'Conocimiento en lenguajes de programación. Corresponde al área de programación.', 1, '2011-04-11 02:56:23', NULL),
(2, 'modelado de datos', 3, '4', '', 'Conocimiento en bases de datos y modelado de datos. Corresponde al área de bases de datos.', 4, '2011-04-11 02:56:23', NULL),
(3, 'proactivo', 1, '3', '', 'Se destaca su aporte de ideas a los problemas de equipo.', 5, '2011-04-11 02:56:23', NULL),
(4, 'flexibilidad', 3, '3', '', 'Se destaca su aporte de ideas a los problemas de equipo.', 5, '2011-04-11 02:56:23', NULL),
(5, 'iniciativa', 4, '2', '', 'Se destaca su aporte de ideas a los problemas de equipo.', 5, '2011-04-11 02:56:23', NULL),
(6, 'dedicación', 3, '4', '', '', 5, '2011-05-14 15:58:08', '2011-05-14 15:58:08'),
(7, 'resolución de problemas', 3, '1', '', 'Ejecuta acciones dentro de la organización con el fin de resolver conflictos.', 6, '2011-05-15 19:10:27', '2011-05-15 19:11:23'),
(8, 'liderazgo', 3, '4', 'http://comptencias.ucaldaskmap/perfil', 'el individuo demuestra capacidad para guiar equipos de trabajo.', 5, '2012-01-28 17:01:27', '2012-01-28 17:01:27'),
(9, 'tecnica operativa', 2, '3', 'http://comptencias.ucaldaskmap/perfil', 'tecnico con conocimiento en operacion de maquinaria industrial y de infraestructura.', 8, '2012-02-06 04:30:02', '2012-02-06 04:30:02'),
(10, 'idiomas', 4, '2', 'http://comptencias.ucaldaskmap/perfil', '', 9, '2012-02-06 21:54:58', '2012-02-06 21:54:58'),
(11, 'contabilidad', 2, '4', '', '', 6, '2012-12-14 00:53:11', '2012-12-14 00:53:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_competencia_has_capital_humano`
--

CREATE TABLE IF NOT EXISTS `kmap_competencia_has_capital_humano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `competencia_id` int(11) NOT NULL,
  `capital_humano_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_competencias_has_capitales_humanos_capitales_humanos1` (`capital_humano_id`),
  KEY `fk_competencias_has_capitales_humanos_competencias1` (`competencia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `kmap_competencia_has_capital_humano`
--

INSERT INTO `kmap_competencia_has_capital_humano` (`id`, `descripcion`, `competencia_id`, `capital_humano_id`, `created_at`, `updated_at`) VALUES
(1, '', 1, 1, '2011-04-11 11:29:58', '2011-04-11 11:29:58'),
(2, '', 5, 4, '2011-04-11 12:33:37', '2011-04-11 12:33:37'),
(3, 'Alex tiene la capacidad de brindar soluciones.', 7, 5, '2011-05-15 19:12:06', '2011-05-15 19:12:25'),
(4, '', 5, 1, '2011-09-15 01:33:55', '2011-09-15 01:33:55'),
(6, '', 3, 3, '2011-09-25 23:31:06', '2011-09-25 23:31:06'),
(7, '', 9, 8, '2012-02-06 04:36:25', '2012-02-06 04:36:25'),
(8, 'Wells Fargo por haber trabajado en un banco importante tiene habilidades como contador.', 11, 10, '2012-12-14 01:13:09', '2012-12-14 01:13:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_control`
--

CREATE TABLE IF NOT EXISTS `kmap_control` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `tipo` int(11) NOT NULL,
  `locacion` varchar(256) NOT NULL,
  `descripcion` varchar(512) NOT NULL,
  `proceso_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_controles_processes1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `kmap_control`
--

INSERT INTO `kmap_control` (`id`, `nombre`, `tipo`, `locacion`, `descripcion`, `proceso_id`, `created_at`, `updated_at`) VALUES
(1, 'unidades por hora', 1, 'http://control.organizacion.net/embotellar', 'Este control pretende contabilizar los lotes embotellados por hora.', 5, '2011-09-13 03:34:31', NULL),
(2, 'perfil entrevistadores', 2, 'http://control.organizacion.net/entrevistar', 'Se examina el perfil del entrevistador.', 2, '2011-09-13 03:34:37', NULL),
(3, 'fase de inventariado', 3, 'http://control.organizacion.net/inventario', 'Se chequea el estado en el que se encuentra el inventario en cada fase.', 7, '2011-09-13 03:34:41', NULL),
(4, 'formularios diligenciados', 1, 'http://control.organizacion.net/formulario', 'Control de la cantidad de formularios diligenciados por operador.', 1, '2011-09-13 03:38:17', '2011-09-13 03:38:17'),
(5, 'tiempo de inactividad.', 2, 'http://control.organizacion.net/admisiones', 'Estadísticas de tiempo de inactividad en el proceso de admisiones y matrículas.', 3, '2011-09-13 03:39:54', '2011-09-13 03:39:54'),
(6, 'control de inventario', 1, 'http://control.organizacion.net/inventario', 'control de productividad para el proceso de inventario.', 7, '2011-09-26 00:02:54', '2011-09-26 00:02:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_departamento`
--

CREATE TABLE IF NOT EXISTS `kmap_departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capital_humano_id` int(11) NOT NULL,
  `locacion` varchar(512) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`capital_humano_id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_departamento_capital_humano1` (`capital_humano_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_documentacion`
--

CREATE TABLE IF NOT EXISTS `kmap_documentacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(512) NOT NULL,
  `locacion` varchar(256) NOT NULL,
  `proceso_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_documentaciones_processes1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `kmap_documentacion`
--

INSERT INTO `kmap_documentacion` (`id`, `nombre`, `descripcion`, `locacion`, `proceso_id`, `created_at`, `updated_at`) VALUES
(1, 'manual de operación', 'este manual de operación contiene las políticas básicas a seguir en este proceso.', 'http://documentacion.organizacion.net/inventario', 7, '2011-09-10 18:04:50', '2011-09-10 18:04:50'),
(2, 'manual de usuario', 'manual no técnico entregado para el uso del proceso.', 'http://documentacion.organizacion.net/embotellar', 5, '2011-09-10 18:06:19', '2011-09-10 18:06:19'),
(3, 'reporte de funcionamiento', 'reporte periódico de funcionamiento del proceso.', 'http://documentacion.organizacion.net/pedidos', 6, '2011-09-10 18:08:39', '2011-09-10 18:08:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_empleado`
--

CREATE TABLE IF NOT EXISTS `kmap_empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contacto` varchar(512) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `departamento_id` int(11) NOT NULL,
  `capital_humano_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_empleado_departamento1` (`departamento_id`),
  KEY `fk_empleado_capital_humano1` (`capital_humano_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_indicador`
--

CREATE TABLE IF NOT EXISTS `kmap_indicador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `descripcion` varchar(512) NOT NULL,
  `locacion` varchar(256) NOT NULL,
  `proceso_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_indicadores_processes1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `kmap_indicador`
--

INSERT INTO `kmap_indicador` (`id`, `nombre`, `descripcion`, `locacion`, `proceso_id`, `created_at`, `updated_at`) VALUES
(1, 'campos autocompletados', 'Seguimiento de campos automáticamente diligenciados.', 'http://indicador.organizacion.net/formulario', 1, '2011-09-13 04:11:25', '2011-09-13 04:11:25'),
(2, 'demografía aspirantes', 'Seguimiento de la demografía de los aspirantes entrevistados.', 'http://indicador.organizacion.net/entrevistar', 2, '2011-09-13 04:13:12', '2011-09-13 04:13:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_informacion_primaria`
--

CREATE TABLE IF NOT EXISTS `kmap_informacion_primaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `que` varchar(128) NOT NULL,
  `quien` varchar(128) NOT NULL,
  `como` varchar(128) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `proceso_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_informaciones_primarias_processes1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `kmap_informacion_primaria`
--

INSERT INTO `kmap_informacion_primaria` (`id`, `que`, `quien`, `como`, `descripcion`, `proceso_id`, `created_at`, `updated_at`) VALUES
(1, 'se modela una entidad', 'lo diligencia un operario', 'se diligencia via página web', '', 1, '2011-09-13 04:20:58', '2011-09-13 04:20:58'),
(2, 'información básica de un aspirante', 'la entrevista la ejecuta un entrevistador', 'hay opción de ejecutar la entrevista vía web o personalmente', '', 2, '2011-09-13 04:22:50', '2011-09-13 04:22:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_informacion_secundaria`
--

CREATE TABLE IF NOT EXISTS `kmap_informacion_secundaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `que` varchar(128) NOT NULL,
  `a_quien` varchar(128) NOT NULL,
  `como` varchar(128) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `proceso_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_informaciones_secundarias_processes1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `kmap_informacion_secundaria`
--

INSERT INTO `kmap_informacion_secundaria` (`id`, `que`, `a_quien`, `como`, `descripcion`, `proceso_id`, `created_at`, `updated_at`) VALUES
(1, 'información complementaria para el proceso', 'jefe de proceso', 'se evalúa la información secundaria para obtener datos complementarios del proceso', 'Datos para alimentar entidades complementarias del sistema.', 1, '2011-09-13 04:36:16', '2011-09-13 04:36:16'),
(2, 'información de contacto del aspirante', 'jefe de proceso', 'se extraen datos complementarios obtenidos en la entrevista.', 'Además de los datos de perfil de aspirante, se obtiene información que tiene que ver con datos personales del aspirante.', 2, '2011-09-13 04:38:23', '2011-09-13 04:38:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_intangible`
--

CREATE TABLE IF NOT EXISTS `kmap_intangible` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `tipo` int(11) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `kmap_intangible`
--

INSERT INTO `kmap_intangible` (`id`, `nombre`, `tipo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'horas', 1, 'Disponibilidad horaria en el cronograma.', '2011-04-11 02:56:23', NULL),
(2, 'kmap', 2, 'Sistema de Gestion del Conocimiento Organizacional.', '2011-04-11 02:56:23', NULL),
(3, 'CustomERP', 2, 'ERP usado por la organización.', '2011-05-15 19:15:58', '2011-05-15 19:16:07'),
(4, 'suite de oficina', 2, 'Paquete de software con las prestaciones básicas de suite de oficina.', '2011-09-13 04:46:46', '2011-09-13 04:46:46'),
(5, 'información técnica', 3, 'saber técnico necesario para implementar un proceso.', '2012-01-28 17:09:03', '2012-01-28 17:09:03'),
(6, 'MCO', 3, 'Modelo de Conocimiento Organizacional', '2012-12-14 01:04:55', '2012-12-14 01:04:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_lookup`
--

CREATE TABLE IF NOT EXISTS `kmap_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `kmap_lookup`
--

INSERT INTO `kmap_lookup` (`id`, `name`, `code`, `type`, `position`, `created_at`, `updated_at`) VALUES
(1, 'sala', 1, 'TipoTangible', 1, '2011-04-11 02:56:23', NULL),
(2, 'bodega', 2, 'TipoTangible', 2, '2011-04-11 02:56:23', NULL),
(3, 'envasadora', 3, 'TipoTangible', 3, '2011-04-11 02:56:23', NULL),
(4, 'envolvedora', 4, 'TipoTangible', 4, '2011-04-11 02:56:23', NULL),
(5, 'computador', 5, 'TipoTangible', 5, '2011-04-11 02:56:23', NULL),
(6, 'tiempo', 1, 'TipoIntangible', 1, '2011-04-11 02:56:23', NULL),
(7, 'si', 2, 'TipoIntangible', 2, '2011-04-11 02:56:23', NULL),
(8, 'Capital Estructural', 1, 'TipoCapital', 1, '2011-04-11 02:56:23', NULL),
(9, 'Capital Humano', 2, 'TipoCapital', 2, '2011-04-11 02:56:23', NULL),
(10, 'Capital Relacional', 3, 'TipoCapital', 3, '2011-04-11 02:56:23', NULL),
(11, 'Intangible', 1, 'TipoCapitalEstructural', 1, '2011-04-11 02:56:23', NULL),
(12, 'Tangible', 2, 'TipoCapitalEstructural', 2, '2011-04-11 02:56:23', NULL),
(13, 'Accionista', 1, 'TipoCapitalHumano', 1, '2011-04-11 02:56:23', NULL),
(14, 'Cliente', 2, 'TipoCapitalHumano', 2, '2011-04-11 02:56:23', NULL),
(15, 'Empleado', 3, 'TipoCapitalHumano', 3, '2011-04-11 02:56:23', NULL),
(16, 'Proveedor', 4, 'TipoCapitalHumano', 4, '2011-04-11 02:56:23', NULL),
(17, 'Ser', 1, 'TipoCompetencia', 1, '2011-04-11 02:56:23', NULL),
(18, 'Saber', 2, 'TipoCompetencia', 2, '2011-04-11 02:56:23', NULL),
(19, 'Hacer', 3, 'TipoCompetencia', 3, '2011-04-11 02:56:23', NULL),
(20, 'Convivir', 4, 'TipoCompetencia', 4, '2011-04-11 02:56:23', NULL),
(21, 'Organizacional', 1, 'ModeloCompetencia', 1, '2011-04-11 02:56:23', NULL),
(22, 'Recursos Humanos', 2, 'ModeloCompetencia', 2, '2011-04-11 02:56:23', NULL),
(23, 'Equipo', 3, 'ModeloCompetencia', 3, '2011-04-11 02:56:23', NULL),
(24, 'Individual', 4, 'ModeloCompetencia', 4, '2011-04-11 02:56:23', NULL),
(25, 'Planificar', 1, 'TipoProceso', 1, '2011-04-11 02:56:23', NULL),
(26, 'Hacer', 2, 'TipoProceso', 2, '2011-04-11 02:56:23', NULL),
(27, 'Verificar', 3, 'TipoProceso', 3, '2011-04-11 02:56:23', NULL),
(28, 'Actuar', 4, 'TipoProceso', 4, '2011-04-11 02:56:23', NULL),
(29, 'temporal', 5, 'TipoProceso', 5, '2011-04-11 02:56:23', NULL),
(30, 'apoyo', 6, 'TipoProceso', 6, '2011-04-11 02:56:23', NULL),
(31, 'independiente', 7, 'TipoProceso', 7, '2011-04-11 02:56:23', NULL),
(32, 'productividad', 1, 'TipoControl', 1, '2011-09-13 01:46:51', '2011-09-13 01:47:11'),
(33, 'calidad', 2, 'TipoControl', 2, '2011-09-13 01:49:31', '2011-09-13 01:49:33'),
(34, 'avance', 3, 'TipoControl', 3, '2011-09-13 01:50:09', '2011-09-13 01:50:13'),
(35, 'conocimiento', 3, 'TipoIntangible', 3, '2012-01-28 17:08:03', '2012-01-28 17:08:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_normativa`
--

CREATE TABLE IF NOT EXISTS `kmap_normativa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `locacion` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `kmap_normativa`
--

INSERT INTO `kmap_normativa` (`id`, `nombre`, `descripcion`, `locacion`, `created_at`, `updated_at`) VALUES
(1, 'Norma ISO-9001', '', 'http://normativa.organizacion.net/iso9001', '2011-09-13 04:51:08', '2011-09-13 04:51:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_organizacion`
--

CREATE TABLE IF NOT EXISTS `kmap_organizacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `contacto` varchar(256) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `sector_id` int(11) NOT NULL,
  `url` varchar(256) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_organizaciones_sectores1` (`sector_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `kmap_organizacion`
--

INSERT INTO `kmap_organizacion` (`id`, `nombre`, `contacto`, `descripcion`, `sector_id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'universidad de caldas', 'Sede Principal Calle 65 Nº 26 - 10 / Tel 8781500 Fax 8781501 / Apartado aéreo 275 / Línea gratuita : 01-8000-512120', 'Universidad de Caldas es una Institución de Educación Superior líder en la región del Eje Cafetero situada en la ciudad de Manizales con 5 sedes especializadas en diferentes áreas del conocimiento.', 1, 'http://ucaldas.edu.co/', '2011-04-11 02:56:23', NULL),
(2, 'fundicion fonseca ltda', 'Calle 38 no. 26-36 MANIZALES', 'Fundición de productos hierro o de acero por fundición', 2, '', '2011-04-11 02:56:23', NULL),
(3, 'postobón s.a.', 'Medellín, Colombia', '', 3, 'http://www.postobon.com/', '2011-04-11 02:56:23', NULL),
(4, 'industria de alimentos zenú s.a.', 'Carrera 64C # 104 - 03 · Tel (574) 470 5222 · Medellín - Colombia', '', 4, 'http://www.zenu.com.co/', '2011-04-11 02:56:23', NULL),
(5, 'unitec', 'Calle 76No 12 - 58 - PBX 5939393 - Bogotá - Colombia', 'Corporación Universitaria Unitec', 1, 'http://www.unitec.edu.co/', '2011-04-11 02:56:23', NULL),
(6, 'foncaldas', 'PBX +57 (6) 885 2654 FAX +57 (6) 885 7780 NIT 890.801.733-7 Cll 60 # 25-01 Manizales, Colombia', 'Fondo de Empleados Universidad de Caldas.', 1, 'http://www.foncaldas.com/', '2011-04-11 02:56:23', NULL),
(7, 'universidad autónoma de manizales', 'Teléfono:(57)(6)8727272 Fax: 8727670 Línea gratuita: 01-8000-0510123 Email:servicioalcliente@autonoma.edu.co Manizales - Caldas - Colombia', '', 1, 'http://www.autonoma.edu.co/', '2011-04-11 02:56:23', NULL),
(8, 'universidad de manizales', 'Cra 9 a No 19 - 03 Manizales - Colombia Tel: 887 96-80', '', 1, 'http://www.umanizales.edu.co/', '2011-04-11 02:56:23', NULL),
(9, 'universidad católica de manizales', 'Carrera 23 No. 63 - 60 PBX (57)(6) 8782900 FAX (57)(6) 8782937', '', 1, 'http://www.ucm.edu.co/', '2011-04-11 02:56:23', NULL),
(10, 'universidad nacional de colombia', 'Carrera 45 No 26-85 - Edificio Uriel Gutiérrez Bogotá D.C. - Colombia', '', 1, 'http://www.unal.edu.co/index.html', '2011-04-11 02:56:23', NULL),
(11, 'universidad nacional de colombia sede manizales', 'Cra 27 # 64-60 Manizales, Caldas - Colombia Línea 01 8000 916956 PBX: (57+6) 8879300', '', 1, 'http://www.manizales.unal.edu.co/', '2011-04-11 02:56:23', NULL),
(12, 'Hamburguesas El Corral.', 'Calle 1 #2-3 Tel: 8801234', 'Hambuguesas El Corral es una franquicia que se especializa en comidas rápidas.', 4, 'http://elcorral.info', '2011-04-11 02:56:23', NULL),
(13, 'Coca-Cola', 'K 3 #2-1', 'Industrias Coca-Cola es líder en su sector. Franquicia internacional.', 3, 'http://www.coca-cola.com/index.jsp', '2011-04-11 02:56:23', NULL),
(14, 'EDI (Escuela De Ingeniería)', 'Av. Santander. 890 1234.', 'Centro de formación técnica.', 1, 'http://www.edi.com.co', '2011-05-15 19:17:21', '2011-05-15 19:17:33'),
(15, 'EntregaYA S.A.S.', 'Línea gratuita a nivel nacional: 01800-ENTREGA', 'Compañía afiliada para tercerizar los procesos de distribución de productos de la organización al cliente.', 5, '', '2011-09-13 05:01:41', '2011-09-13 05:01:41'),
(16, 'Drogas La Rebaja.', 'Carrera 23 #19-10. Tel. 881 2345', '', 7, '', '2011-09-19 00:25:37', '2011-09-19 00:25:37'),
(17, 'coltejer', 'av libertadores #12-34', 'La empresa Coltejer se especializa en tejidos.', 8, 'http://coltejer.com', '2012-01-28 16:58:05', '2012-01-28 16:58:05'),
(18, 'ISA', 'Colombia - Valle del Cauca - Cali', 'ISA es una empresa nacional con sede en el valle del cauca líder en el sector de la energía eléctrica.', 10, 'http://isa.com', '2012-02-06 04:22:16', '2012-02-06 04:22:16'),
(19, 'ecopetrol', 'colombia - guajira - rioacha', '', 10, 'http://ecopetrol.com', '2012-02-06 19:19:26', '2012-02-06 19:19:26'),
(20, 'European IT', 'Langley Street #123 Tel: 555-1234', 'Empresa europea especializada en el outsourcing de TI.', 5, 'http://www.european.it', '2012-09-12 13:02:40', '2012-09-12 13:02:40'),
(21, 'banco de occidente', 'carrera 22 #21-14', 'banco de occidente credencial. trabajamos para usted.', 13, 'http://www.bancodeoccidente.com.co/', '2012-12-14 00:51:19', '2012-12-14 00:51:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_organizacion_has_capital`
--

CREATE TABLE IF NOT EXISTS `kmap_organizacion_has_capital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `organizacion_id` int(11) NOT NULL,
  `capital_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_organizaciones_has_capitales_capitales1` (`capital_id`),
  KEY `fk_organizaciones_has_capitales_organizaciones1` (`organizacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `kmap_organizacion_has_capital`
--

INSERT INTO `kmap_organizacion_has_capital` (`id`, `descripcion`, `organizacion_id`, `capital_id`, `created_at`, `updated_at`) VALUES
(1, '', 1, 1, '2011-04-12 07:36:51', '2011-04-12 07:36:51'),
(2, '', 10, 2, '2011-04-12 07:39:16', '2011-04-12 07:39:16'),
(3, '', 1, 3, '2011-04-12 07:40:19', '2011-04-12 07:40:19'),
(4, '', 1, 4, '2011-04-12 07:40:26', '2011-04-12 07:40:26'),
(5, '', 10, 4, '2011-04-12 07:40:54', '2011-04-12 07:40:54'),
(6, '', 1, 5, '2011-04-12 07:43:09', '2011-04-12 07:43:09'),
(7, '', 10, 6, '2011-04-12 07:43:19', '2011-04-12 07:43:19'),
(8, '', 1, 5, '2011-04-12 08:22:25', '2011-04-12 08:22:25'),
(9, '', 10, 6, '2011-04-12 08:22:37', '2011-04-12 08:22:37'),
(10, '', 1, 9, '2011-04-12 08:27:45', '2011-04-12 08:27:45'),
(11, '', 10, 8, '2011-04-12 08:27:58', '2011-04-12 08:27:58'),
(12, '', 10, 7, '2011-04-12 08:39:06', '2011-04-12 08:39:06'),
(13, 'EDI tiene un Capital de ID 4 que es de tipo Humano.', 14, 4, '2011-05-15 19:18:14', '2011-09-21 12:26:33'),
(14, '', 16, 10, '2011-09-21 18:11:09', '2011-09-21 18:11:09'),
(15, '', 10, 11, '2011-09-22 16:59:09', '2011-09-22 16:59:09'),
(16, '', 14, 12, '2011-09-22 17:33:09', '2011-09-22 17:33:09'),
(17, '', 18, 14, '2012-02-06 04:44:34', '2012-02-06 04:44:34'),
(18, '', 18, 15, '2012-02-06 04:48:00', '2012-02-06 04:48:00'),
(19, 'banco de occidente cuenta con Wells Fargo como capital usable.', 21, 17, '2012-12-14 01:18:42', '2012-12-14 01:18:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_organizacion_has_competencia`
--

CREATE TABLE IF NOT EXISTS `kmap_organizacion_has_competencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(128) DEFAULT NULL,
  `organizacion_id` int(11) NOT NULL,
  `competencia_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_organizaciones_has_competencias_organizaciones` (`organizacion_id`),
  KEY `fk_organizaciones_has_competencias_competencias` (`competencia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `kmap_organizacion_has_competencia`
--

INSERT INTO `kmap_organizacion_has_competencia` (`id`, `descripcion`, `organizacion_id`, `competencia_id`, `created_at`, `updated_at`) VALUES
(1, '', 1, 1, '2011-04-12 07:29:52', '2011-04-12 07:29:52'),
(2, '', 10, 5, '2011-04-12 07:31:01', '2011-04-12 07:31:01'),
(3, 'EDI posee Competencia en resolución de problemas.', 14, 7, '2011-05-15 19:18:51', '2011-05-15 19:19:11'),
(4, '', 14, 2, '2011-09-15 22:07:57', '2011-09-15 22:07:57'),
(5, '', 2, 2, '2011-09-19 00:41:11', '2011-09-19 00:41:11'),
(6, '', 5, 6, '2011-09-22 17:40:57', '2011-09-22 17:40:57'),
(7, '', 18, 9, '2012-02-06 04:44:56', '2012-02-06 04:44:56'),
(8, '', 18, 7, '2012-02-06 04:46:48', '2012-02-06 04:46:48'),
(9, 'banco de occidente cuenta con la habilidad de la contabilidad.', 21, 11, '2012-12-14 01:15:10', '2012-12-14 01:15:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_politica`
--

CREATE TABLE IF NOT EXISTS `kmap_politica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `locacion` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `kmap_politica`
--

INSERT INTO `kmap_politica` (`id`, `nombre`, `descripcion`, `locacion`, `created_at`, `updated_at`) VALUES
(1, 'Política de seguridad en SI.', 'Reglas básicas para manejar SI.', 'http://politica.organizacion.net/seguridadsi', '2011-09-13 05:46:38', '2011-09-13 05:46:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_proceso`
--

CREATE TABLE IF NOT EXISTS `kmap_proceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` varchar(8) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `tipo` int(11) NOT NULL,
  `objetivo` varchar(128) NOT NULL,
  `organizacion_id` int(11) NOT NULL,
  `capital_humano_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_procesos_organizaciones1` (`organizacion_id`),
  KEY `fk_procesos_capitales_humanos1` (`capital_humano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `kmap_proceso`
--

INSERT INTO `kmap_proceso` (`id`, `version`, `nombre`, `tipo`, `objetivo`, `organizacion_id`, `capital_humano_id`, `created_at`, `updated_at`) VALUES
(1, '01', 'diligenciar formulario', 1, 'dilegenciar la información necesaria de un formulario web', 1, 1, '2011-02-03 23:20:00', '2011-02-03 23:20:00'),
(2, '00', 'Entrevistar capital humano', 2, 'Ciertos procesos requieren información adicional obtenida de personas de la organización.', 1, 4, '2011-02-04 02:04:09', '2011-02-04 02:04:09'),
(3, '00', 'Admisiones y matrículas.', 4, 'Proceso para ejecutar las admisiones y matrículas de la institución.', 1, 3, '2011-02-04 02:07:19', '2011-02-04 02:07:19'),
(4, '00', 'Admisiones y registro.', 3, 'Comprobar y/o verificar de una manera eficaz el cumplimiento de las actividades académicas desarrolladas por los estudiantes.', 1, 1, '2011-02-04 02:10:22', '2011-04-11 13:22:14'),
(5, '00', 'Embotellar lote.', 2, 'Activar el embotellamiento supervisado de un lote de bebidas.', 3, 2, '2011-02-04 06:18:16', '2011-02-04 06:18:16'),
(6, 'v 0.0', 'despachar pedido', 7, 'Empacar, despachar y supervisar el envío de un lote de productos.', 10, 4, '2011-02-04 06:20:13', '2011-04-12 22:40:13'),
(7, '0.1', 'Hacer inventario', 5, 'Inventariar los recursos de un área de la organización.', 1, 1, '2011-05-13 23:14:27', '2011-05-13 23:14:35'),
(8, '0.1', 'Asignar recursos', 2, 'Asignar recursos indispensables a un nuevo capital humano.', 7, 2, '2011-05-13 23:18:10', '2011-05-13 23:18:20'),
(9, '0.0', 'Probado de entidades y modelos.', 3, 'Probar las entidades del SI.', 14, 1, '2011-05-15 19:20:09', '2011-05-15 19:20:16'),
(10, '0.0', 'Instalación de SI.', 2, 'Instalar el SI determinado en la fase de planeación.', 14, 2, '2011-09-15 08:50:39', '2011-09-15 08:50:39'),
(11, '0.0', 'refinamiento de la implementación', 3, 'optimizar el SI en desarrollo.', 15, 3, '2011-09-26 21:11:24', '2011-09-26 21:11:24'),
(12, '0.0', 'crear carta del proyecto', 1, 'definición de la carta inicial del proyecto.', 15, 6, '2012-01-25 01:49:16', '2012-01-25 01:49:16'),
(13, '0.0', 'gestionar proyecto', 1, 'plantear el bosquejo inicial de los pasos en el desarrollo del proyecto.', 17, 7, '2012-01-28 16:59:56', '2012-01-28 16:59:56'),
(14, '0.00', 'iniciar bobina madre', 2, 'determina uno de los pasos inciales operativos en la activación de la planta generadora de energía.', 18, 8, '2012-02-06 04:25:34', '2012-02-06 04:25:34'),
(15, '0.0', 'formar instructores', 3, 'formar a los jefes de departamento con nociones básicas de pedagogía.', 19, 9, '2012-02-06 21:49:22', '2012-02-06 21:49:22'),
(16, '1.0', 'hacer diagrama de gantt', 1, 'diseñar el cronograma de proyecto usando diagrama de gantt.', 19, 9, '2012-02-10 16:41:23', '2012-02-10 16:41:23'),
(17, '0.0', 'desplegar grafo', 6, 'técnica para desplegar el grafo correspondiente a la entidad seleccionada.', 12, 9, '2012-09-06 21:43:30', '2012-09-06 21:43:30'),
(18, '0.0', 'hacer backup', 3, 'hacer copia de respaldo de información relevante.', 4, 8, '2012-09-06 21:45:15', '2012-09-06 21:45:15'),
(19, '0.0', 'hacer backup', 3, 'hacer copia de respaldo de información relevante.', 4, 8, '2012-09-06 21:51:51', '2012-09-06 21:51:51'),
(22, 'v0.0', 'generar reporte', 2, 'generar un reporte del proceso ejecutado.', 20, 9, '2012-12-14 00:46:51', '2012-12-14 00:46:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_proceso_has_capital_estructural`
--

CREATE TABLE IF NOT EXISTS `kmap_proceso_has_capital_estructural` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `proceso_id` int(11) NOT NULL,
  `capital_estructural_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_proceso_has_capital_estructural_capital_estructural1` (`capital_estructural_id`),
  KEY `fk_proceso_has_capital_estructural_proceso1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `kmap_proceso_has_capital_estructural`
--

INSERT INTO `kmap_proceso_has_capital_estructural` (`id`, `descripcion`, `proceso_id`, `capital_estructural_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, '2011-04-11 12:36:12', '2011-04-11 12:36:12'),
(2, NULL, 6, 4, '2011-04-11 12:37:17', '2011-04-11 12:37:17'),
(3, NULL, 1, 1, '2011-04-12 08:37:10', '2011-04-12 08:37:10'),
(4, NULL, 6, 7, '2011-04-12 08:38:04', '2011-04-12 08:38:04'),
(5, NULL, 9, 1, '2011-05-15 19:21:48', '2011-05-15 19:21:48'),
(6, NULL, 10, 7, '2011-09-21 14:28:03', '2011-09-21 14:28:03'),
(7, '', 14, 16, '2012-02-06 06:31:10', '2012-02-06 06:31:10'),
(8, 'para generar un reporte debe exister coherencia con el MCO.', 22, 18, '2012-12-14 01:12:04', '2012-12-14 01:12:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_proceso_has_capital_humano`
--

CREATE TABLE IF NOT EXISTS `kmap_proceso_has_capital_humano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `proceso_id` int(11) NOT NULL,
  `capital_humano_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_proceso_has_capital_humano_capital_humano1` (`capital_humano_id`),
  KEY `fk_proceso_has_capital_humano_proceso1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `kmap_proceso_has_capital_humano`
--

INSERT INTO `kmap_proceso_has_capital_humano` (`id`, `descripcion`, `proceso_id`, `capital_humano_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, '2011-04-12 08:44:37', '2011-04-12 08:44:37'),
(2, NULL, 6, 4, '2011-04-12 08:45:01', '2011-04-12 08:45:01'),
(3, NULL, 9, 5, '2011-05-15 19:25:20', '2011-05-15 19:25:20'),
(4, NULL, 6, 4, '2011-09-15 14:43:57', '2011-09-15 14:43:57'),
(5, '', 14, 8, '2012-02-06 06:33:33', '2012-02-06 06:33:33'),
(6, 'wells fargo tiene competencias en contabilidad, por la tanto se necesita para generar reportes.', 22, 10, '2012-12-14 01:13:44', '2012-12-14 01:13:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_proceso_has_capital_relacional`
--

CREATE TABLE IF NOT EXISTS `kmap_proceso_has_capital_relacional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `proceso_id` int(11) NOT NULL,
  `capital_relacional_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_proceso_has_capital_relacional_capital_relacional1` (`capital_relacional_id`),
  KEY `fk_proceso_has_capital_relacional_proceso1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `kmap_proceso_has_capital_relacional`
--

INSERT INTO `kmap_proceso_has_capital_relacional` (`id`, `descripcion`, `proceso_id`, `capital_relacional_id`, `created_at`, `updated_at`) VALUES
(1, '', 1, 1, '2011-04-11 12:58:20', '2011-04-11 12:58:20'),
(2, '', 6, 4, '2011-04-11 13:01:54', '2011-04-11 13:01:54'),
(3, '', 6, 6, '2011-04-12 08:50:31', '2011-04-12 08:50:31'),
(4, 'Interacción con tercera empresa para ejecutar este proceso.', 9, 3, '2011-05-15 19:25:41', '2011-05-15 19:26:14'),
(5, '', 14, 12, '2012-02-06 06:34:39', '2012-02-06 06:34:39'),
(6, 'generar reporte necesita el capital de otros bancos para tener una estructura estandar y plantillas definidas como ejemplo.', 22, 15, '2012-12-14 01:14:31', '2012-12-14 01:14:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_proceso_has_normativa`
--

CREATE TABLE IF NOT EXISTS `kmap_proceso_has_normativa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `proceso_id` int(11) NOT NULL,
  `normativa_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_processes_has_normativas_normativas1` (`normativa_id`),
  KEY `fk_processes_has_normativas_processes1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `kmap_proceso_has_normativa`
--

INSERT INTO `kmap_proceso_has_normativa` (`id`, `descripcion`, `proceso_id`, `normativa_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 3, 1, '0000-00-00 00:00:00', NULL),
(2, '', 5, 1, '0000-00-00 00:00:00', '2011-09-26 11:17:44'),
(3, '', 10, 1, '2011-09-26 11:18:00', '2011-09-26 11:18:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_proceso_has_politica`
--

CREATE TABLE IF NOT EXISTS `kmap_proceso_has_politica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `proceso_id` int(11) NOT NULL,
  `politica_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_processes_has_politicas_politicas1` (`politica_id`),
  KEY `fk_processes_has_politicas_processes1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `kmap_proceso_has_politica`
--

INSERT INTO `kmap_proceso_has_politica` (`id`, `descripcion`, `proceso_id`, `politica_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, '2011-09-26 11:56:19', NULL),
(2, '', 9, 1, '2011-09-26 11:34:41', '2011-09-26 11:34:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_proceso_has_proceso`
--

CREATE TABLE IF NOT EXISTS `kmap_proceso_has_proceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `proceso_id` int(11) NOT NULL,
  `proceso_hijo_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_processes_has_processes_processes2` (`proceso_hijo_id`),
  KEY `fk_processes_has_processes_processes1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `kmap_proceso_has_proceso`
--

INSERT INTO `kmap_proceso_has_proceso` (`id`, `descripcion`, `tipo`, `proceso_id`, `proceso_hijo_id`, `created_at`, `updated_at`) VALUES
(2, '', NULL, 2, 1, '0000-00-00 00:00:00', NULL),
(3, '', NULL, 6, 7, '2011-09-26 11:51:26', '2011-09-26 11:51:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_proceso_has_sistema`
--

CREATE TABLE IF NOT EXISTS `kmap_proceso_has_sistema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(512) DEFAULT NULL,
  `proceso_id` int(11) NOT NULL,
  `sistema_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_processes_has_sistemas_sistemas1` (`sistema_id`),
  KEY `fk_processes_has_sistemas_processes1` (`proceso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `kmap_proceso_has_sistema`
--

INSERT INTO `kmap_proceso_has_sistema` (`id`, `descripcion`, `proceso_id`, `sistema_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 6, 2, '2011-09-26 12:16:18', NULL),
(2, '', 7, 2, '2011-09-26 12:14:25', '2011-09-26 12:14:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_proveedor`
--

CREATE TABLE IF NOT EXISTS `kmap_proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) NOT NULL COMMENT 'puede ser capital_humano u organizacion.',
  `tipo_id` int(11) NOT NULL COMMENT 'el id correspondiente al tipo que es.',
  `descripcion` varchar(512) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_sector`
--

CREATE TABLE IF NOT EXISTS `kmap_sector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `kmap_sector`
--

INSERT INTO `kmap_sector` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'educacion', NULL, '2011-04-11 02:56:23', NULL),
(2, 'metalurgia', NULL, '2011-04-11 02:56:23', NULL),
(3, 'bebidas', NULL, '2011-04-11 02:56:23', NULL),
(4, 'comidas', NULL, '2011-04-11 02:56:23', NULL),
(5, 'tecnología', 'Empresas ubicadas en la burbuja 2.0.', '2011-05-15 19:29:46', '2011-05-15 19:29:58'),
(6, 'encomiendas', 'sector de entrega y recepción de encomiendas.', '2011-09-13 08:52:44', '2011-09-13 08:52:44'),
(7, 'fármacos y medicina', 'Drogas, fármacos y medicina.', '2011-09-19 00:24:32', '2011-09-19 00:24:32'),
(8, 'artes y cultura', 'sector de las artes y la cultura', '2012-01-26 16:30:58', '2012-01-26 16:30:58'),
(9, 'deporte', 'organizaciones y entidades que tiene que ver con la industria del deporte.', '2012-01-28 12:27:33', '2012-01-28 12:27:33'),
(10, 'energia', 'industrias relacionadas con energia electrica', '2012-02-06 04:20:37', '2012-02-06 04:20:37'),
(11, 'formación', '', '2012-02-06 21:42:12', '2012-02-06 21:42:12'),
(13, 'financiero', 'entidades financieras, crediticias, bancos, etc.', '2012-12-14 00:50:21', '2012-12-14 00:50:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_sistema`
--

CREATE TABLE IF NOT EXISTS `kmap_sistema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `locacion` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `kmap_sistema`
--

INSERT INTO `kmap_sistema` (`id`, `nombre`, `descripcion`, `locacion`, `created_at`, `updated_at`) VALUES
(1, 'KMap v3.0', 'S.I. K-Map v3.0.', 'http://localhost/kmap/yiikmap33/', '2011-05-15 19:33:52', '2011-05-15 19:33:59'),
(2, 'ERPContabilidad', 'Software de gestión empresarial enfocado a la contabilidad.', 'http://sistema.organizacion.net/erpcontabilidad', '2011-09-13 08:57:42', '2011-09-13 08:57:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_tangible`
--

CREATE TABLE IF NOT EXISTS `kmap_tangible` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `tipo` int(11) NOT NULL,
  `locacion` varchar(128) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `kmap_tangible`
--

INSERT INTO `kmap_tangible` (`id`, `nombre`, `tipo`, `locacion`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'sala a', 1, 'bloque administrativo', 'Sala de cómputo. Piso inferior del Bloque Administrativo de la Universidad de Caldas Sede Central.', '2011-04-11 02:56:23', NULL),
(2, 'bodega 1', 2, 'calle 1 #2-3', 'Bodega principal de Fundición Fonseca Ltda Manizales', '2011-04-11 02:56:23', NULL),
(3, 'dfl', 3, 'planta de embotellamiento principal', 'La serie DF-L esta enfocada para producciones de 1000 a 4000 litros por hora de productos de baja, mediana o alta viscosidad.', '2011-04-11 02:56:23', NULL),
(4, 'jr-a400-is', 4, 'planta de empaquetado #1', 'Aplicable a la envoltura de bebidas, comidas, y productos químicos, médicos, etc. No necesita bandejas y cajas de papel.', '2011-04-11 02:56:23', NULL),
(5, 'PCDE01', 5, 'Bloque D, Sala E, PC 01', 'Computador 01 de la Sala E del Bloque D', '2011-04-11 02:56:23', NULL),
(6, 'PCDUSI01', 5, 'Bloque D, Sala USI, PC 01', 'Computador 01 de la Sala USI del Bloque D', '2011-04-11 02:56:23', NULL),
(7, 'AS400', 5, 'Bloque A (Ed. Administrativo).', 'Servidor web y de asministración AS400.', '2011-05-15 19:35:29', '2011-05-15 19:35:33'),
(8, 'sala de almacenamiento', 2, 'sede veterinaria', 'sede de almacenamiento en la sede veterinaria.', '2012-01-28 17:12:23', '2012-01-28 17:12:23'),
(9, 'sala de reuniones', 1, 'bloque A. sede central.', 'sala de reuniones del consejo.', '2012-01-28 17:15:47', '2012-01-28 17:15:47'),
(10, 'COMPAQ Presario CQ50', 5, 'Sala U.S.I.', 'laptop marca compaq.', '2012-12-14 00:56:20', '2012-12-14 00:56:20'),
(11, 'COMPAQ Presario CQ50', 5, 'Sala U.S.I.', 'laptop marca compaq.', '2012-12-14 01:00:46', '2012-12-14 01:00:46'),
(12, 'COMPAQ Presario CQ50', 5, 'Sala U.S.I.', 'laptop marca compaq.', '2012-12-14 01:02:37', '2012-12-14 01:02:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_test`
--

CREATE TABLE IF NOT EXISTS `kmap_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_test_creatividad`
--

CREATE TABLE IF NOT EXISTS `kmap_test_creatividad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capital_humano_id` int(11) NOT NULL,
  `p01productividad` int(11) NOT NULL,
  `p02agilidad` int(11) NOT NULL,
  `p03originalidad` int(11) NOT NULL,
  `p04diversion` int(11) NOT NULL,
  `p05automotivacion` int(11) NOT NULL,
  `p06persistencia` int(11) NOT NULL,
  `p07lenguajes` int(11) NOT NULL,
  `p08variedad` int(11) NOT NULL,
  `p09fluencia` int(11) NOT NULL,
  `p10visualizacion` int(11) NOT NULL,
  `p11analogia` int(11) NOT NULL,
  `p12problemas` int(11) NOT NULL,
  `p13experimentos` int(11) NOT NULL,
  `p14innovacion` int(11) NOT NULL,
  `p15inventiva` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_test_liderazgo_transformacional_capital_humano1` (`capital_humano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `kmap_test_creatividad`
--

INSERT INTO `kmap_test_creatividad` (`id`, `capital_humano_id`, `p01productividad`, `p02agilidad`, `p03originalidad`, `p04diversion`, `p05automotivacion`, `p06persistencia`, `p07lenguajes`, `p08variedad`, `p09fluencia`, `p10visualizacion`, `p11analogia`, `p12problemas`, `p13experimentos`, `p14innovacion`, `p15inventiva`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 3, 4, 5, 4, 3, 2, 1, 2, 3, 4, 5, 4, 1, '2011-05-11 08:39:44', '2011-05-11 08:43:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_test_emprendimiento`
--

CREATE TABLE IF NOT EXISTS `kmap_test_emprendimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capital_humano_id` int(11) NOT NULL,
  `p201estimula` int(11) NOT NULL,
  `p202predisposicion` int(11) NOT NULL,
  `p203iniciativa` int(11) NOT NULL,
  `p204dedica` int(11) NOT NULL,
  `p205relaciona` int(11) NOT NULL,
  `p206autonomia` int(11) NOT NULL,
  `p207responsabilidad` int(11) NOT NULL,
  `p208independiente` int(11) NOT NULL,
  `p209prever` int(11) NOT NULL,
  `p210objetivos` int(11) NOT NULL,
  `p211experiencia` int(11) NOT NULL,
  `p212equipo` int(11) NOT NULL,
  `p31explica` int(11) NOT NULL,
  `p32iniciar` int(11) NOT NULL,
  `p33oportuno` int(11) NOT NULL,
  `p34convencido` int(11) NOT NULL,
  `p35arranque` int(11) NOT NULL,
  `p36presupuesto` int(11) NOT NULL,
  `p37contacto` int(11) NOT NULL,
  `p38invertiria` int(11) NOT NULL,
  `p39conoce` int(11) NOT NULL,
  `p41empresas` int(11) NOT NULL,
  `p42actuan` int(11) NOT NULL,
  `p43datos` int(11) NOT NULL,
  `p44convencido` int(11) NOT NULL,
  `p45vista` int(11) NOT NULL,
  `p46mercado` int(11) NOT NULL,
  `p47mecanismos` int(11) NOT NULL,
  `p48situacion` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_test_emprendimiento_capital_humano1` (`capital_humano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `kmap_test_emprendimiento`
--

INSERT INTO `kmap_test_emprendimiento` (`id`, `capital_humano_id`, `p201estimula`, `p202predisposicion`, `p203iniciativa`, `p204dedica`, `p205relaciona`, `p206autonomia`, `p207responsabilidad`, `p208independiente`, `p209prever`, `p210objetivos`, `p211experiencia`, `p212equipo`, `p31explica`, `p32iniciar`, `p33oportuno`, `p34convencido`, `p35arranque`, `p36presupuesto`, `p37contacto`, `p38invertiria`, `p39conoce`, `p41empresas`, `p42actuan`, `p43datos`, `p44convencido`, `p45vista`, `p46mercado`, `p47mecanismos`, `p48situacion`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 3, 4, 5, 4, 3, 2, 1, 2, 3, 4, 5, 4, 3, 2, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 4, 3, 2, '2011-05-10 22:11:45', '2011-09-13 09:40:53'),
(2, 1, 1, 2, 3, 4, 5, 4, 3, 2, 1, 2, 3, 4, 5, 4, 3, 2, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 2, 3, 5, '2011-05-10 22:14:23', '2011-05-10 22:14:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kmap_test_liderazgo_transformacional`
--

CREATE TABLE IF NOT EXISTS `kmap_test_liderazgo_transformacional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capital_humano_id` int(11) NOT NULL,
  `p01proporciono` int(11) NOT NULL,
  `p02reexamino` int(11) NOT NULL,
  `p03interfiero` int(11) NOT NULL,
  `p04enfoco` int(11) NOT NULL,
  `p05evito` int(11) NOT NULL,
  `p06hablo` int(11) NOT NULL,
  `p07ausento` int(11) NOT NULL,
  `p08perspectivas` int(11) NOT NULL,
  `p09optimismo` int(11) NOT NULL,
  `p10infundo` int(11) NOT NULL,
  `p11refiero` int(11) NOT NULL,
  `p12espero` int(11) NOT NULL,
  `p13entusiasmo` int(11) NOT NULL,
  `p14especifico` int(11) NOT NULL,
  `p15dedico` int(11) NOT NULL,
  `p16dejo` int(11) NOT NULL,
  `p17demuestro` int(11) NOT NULL,
  `p18abandono` int(11) NOT NULL,
  `p19trato` int(11) NOT NULL,
  `p20cronicos` int(11) NOT NULL,
  `p21actuo` int(11) NOT NULL,
  `p22concentro` int(11) NOT NULL,
  `p23considero` int(11) NOT NULL,
  `p24llevo` int(11) NOT NULL,
  `p25demuestro` int(11) NOT NULL,
  `p26vision` int(11) NOT NULL,
  `p27dirijo` int(11) NOT NULL,
  `p28decisiones` int(11) NOT NULL,
  `p29individuo` int(11) NOT NULL,
  `p30hago` int(11) NOT NULL,
  `p31ayudo` int(11) NOT NULL,
  `p32sugiero` int(11) NOT NULL,
  `p33tardo` int(11) NOT NULL,
  `p34enfatizo` int(11) NOT NULL,
  `p35expreso` int(11) NOT NULL,
  `p36confianza` int(11) NOT NULL,
  `p37eficaz` int(11) NOT NULL,
  `p38utilizo` int(11) NOT NULL,
  `p39espera` int(11) NOT NULL,
  `p40eficiente` int(11) NOT NULL,
  `p41trabajo` int(11) NOT NULL,
  `p42elevo` int(11) NOT NULL,
  `p43organizacionales` int(11) NOT NULL,
  `p44motivo` int(11) NOT NULL,
  `p45encabezo` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_test_liderazgo_transformacional_capital_humano2` (`capital_humano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `kmap_test_liderazgo_transformacional`
--

INSERT INTO `kmap_test_liderazgo_transformacional` (`id`, `capital_humano_id`, `p01proporciono`, `p02reexamino`, `p03interfiero`, `p04enfoco`, `p05evito`, `p06hablo`, `p07ausento`, `p08perspectivas`, `p09optimismo`, `p10infundo`, `p11refiero`, `p12espero`, `p13entusiasmo`, `p14especifico`, `p15dedico`, `p16dejo`, `p17demuestro`, `p18abandono`, `p19trato`, `p20cronicos`, `p21actuo`, `p22concentro`, `p23considero`, `p24llevo`, `p25demuestro`, `p26vision`, `p27dirijo`, `p28decisiones`, `p29individuo`, `p30hago`, `p31ayudo`, `p32sugiero`, `p33tardo`, `p34enfatizo`, `p35expreso`, `p36confianza`, `p37eficaz`, `p38utilizo`, `p39espera`, `p40eficiente`, `p41trabajo`, `p42elevo`, `p43organizacionales`, `p44motivo`, `p45encabezo`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, '2011-05-11 18:51:18', '2011-05-11 18:51:18'),
(2, 6, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, '2011-05-11 19:22:56', '2011-09-13 09:47:21'),
(3, 1, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 1, '2011-05-11 19:24:49', '2011-05-11 19:25:46');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `kmap_capital_humano_has_intangible`
--
ALTER TABLE `kmap_capital_humano_has_intangible`
  ADD CONSTRAINT `fk_capitales_humanos_has_intangibles_capitales_humanos1` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_capitales_humanos_has_intangibles_intangibles1` FOREIGN KEY (`intangible_id`) REFERENCES `kmap_intangible` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_capital_humano_has_tangible`
--
ALTER TABLE `kmap_capital_humano_has_tangible`
  ADD CONSTRAINT `fk_capitales_humanos_has_tangibles_capitales_humanos1` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_capitales_humanos_has_tangibles_tangibles1` FOREIGN KEY (`tangible_id`) REFERENCES `kmap_tangible` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_competencia`
--
ALTER TABLE `kmap_competencia`
  ADD CONSTRAINT `fk_competencias_areas1` FOREIGN KEY (`area_id`) REFERENCES `kmap_area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_competencia_has_capital_humano`
--
ALTER TABLE `kmap_competencia_has_capital_humano`
  ADD CONSTRAINT `fk_competencias_has_capitales_humanos_capitales_humanos1` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_competencias_has_capitales_humanos_competencias1` FOREIGN KEY (`competencia_id`) REFERENCES `kmap_competencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_control`
--
ALTER TABLE `kmap_control`
  ADD CONSTRAINT `fk_controles_processes1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_departamento`
--
ALTER TABLE `kmap_departamento`
  ADD CONSTRAINT `fk_departamento_capital_humano1` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_documentacion`
--
ALTER TABLE `kmap_documentacion`
  ADD CONSTRAINT `fk_documentaciones_processes1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_empleado`
--
ALTER TABLE `kmap_empleado`
  ADD CONSTRAINT `fk_empleado_capital_humano1` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleado_departamento1` FOREIGN KEY (`departamento_id`) REFERENCES `kmap_departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_indicador`
--
ALTER TABLE `kmap_indicador`
  ADD CONSTRAINT `fk_indicadores_processes1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_informacion_primaria`
--
ALTER TABLE `kmap_informacion_primaria`
  ADD CONSTRAINT `fk_informaciones_primarias_processes1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_informacion_secundaria`
--
ALTER TABLE `kmap_informacion_secundaria`
  ADD CONSTRAINT `fk_informaciones_secundarias_processes1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_organizacion`
--
ALTER TABLE `kmap_organizacion`
  ADD CONSTRAINT `fk_organizaciones_sectores1` FOREIGN KEY (`sector_id`) REFERENCES `kmap_sector` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_organizacion_has_capital`
--
ALTER TABLE `kmap_organizacion_has_capital`
  ADD CONSTRAINT `fk_organizaciones_has_capitales_capitales1` FOREIGN KEY (`capital_id`) REFERENCES `kmap_capital` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_organizaciones_has_capitales_organizaciones1` FOREIGN KEY (`organizacion_id`) REFERENCES `kmap_organizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_organizacion_has_competencia`
--
ALTER TABLE `kmap_organizacion_has_competencia`
  ADD CONSTRAINT `fk_organizaciones_has_competencias_competencias` FOREIGN KEY (`competencia_id`) REFERENCES `kmap_competencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_organizaciones_has_competencias_organizaciones` FOREIGN KEY (`organizacion_id`) REFERENCES `kmap_organizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_proceso`
--
ALTER TABLE `kmap_proceso`
  ADD CONSTRAINT `fk_procesos_capitales_humanos1` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_procesos_organizaciones1` FOREIGN KEY (`organizacion_id`) REFERENCES `kmap_organizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_proceso_has_capital_estructural`
--
ALTER TABLE `kmap_proceso_has_capital_estructural`
  ADD CONSTRAINT `fk_proceso_has_capital_estructural_capital_estructural1` FOREIGN KEY (`capital_estructural_id`) REFERENCES `kmap_capital_estructural` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proceso_has_capital_estructural_proceso1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_proceso_has_capital_humano`
--
ALTER TABLE `kmap_proceso_has_capital_humano`
  ADD CONSTRAINT `fk_proceso_has_capital_humano_capital_humano1` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proceso_has_capital_humano_proceso1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_proceso_has_capital_relacional`
--
ALTER TABLE `kmap_proceso_has_capital_relacional`
  ADD CONSTRAINT `fk_proceso_has_capital_relacional_capital_relacional1` FOREIGN KEY (`capital_relacional_id`) REFERENCES `kmap_capital_relacional` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proceso_has_capital_relacional_proceso1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_proceso_has_normativa`
--
ALTER TABLE `kmap_proceso_has_normativa`
  ADD CONSTRAINT `fk_processes_has_normativas_normativas1` FOREIGN KEY (`normativa_id`) REFERENCES `kmap_normativa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_processes_has_normativas_processes1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_proceso_has_politica`
--
ALTER TABLE `kmap_proceso_has_politica`
  ADD CONSTRAINT `fk_processes_has_politicas_politicas1` FOREIGN KEY (`politica_id`) REFERENCES `kmap_politica` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_processes_has_politicas_processes1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_proceso_has_proceso`
--
ALTER TABLE `kmap_proceso_has_proceso`
  ADD CONSTRAINT `fk_processes_has_processes_processes1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_processes_has_processes_processes2` FOREIGN KEY (`proceso_hijo_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_proceso_has_sistema`
--
ALTER TABLE `kmap_proceso_has_sistema`
  ADD CONSTRAINT `fk_processes_has_sistemas_processes1` FOREIGN KEY (`proceso_id`) REFERENCES `kmap_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_processes_has_sistemas_sistemas1` FOREIGN KEY (`sistema_id`) REFERENCES `kmap_sistema` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_test_creatividad`
--
ALTER TABLE `kmap_test_creatividad`
  ADD CONSTRAINT `fk_test_liderazgo_transformacional_capital_humano1` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_test_emprendimiento`
--
ALTER TABLE `kmap_test_emprendimiento`
  ADD CONSTRAINT `fk_test_emprendimiento_capital_humano1` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kmap_test_liderazgo_transformacional`
--
ALTER TABLE `kmap_test_liderazgo_transformacional`
  ADD CONSTRAINT `fk_test_liderazgo_transformacional_capital_humano2` FOREIGN KEY (`capital_humano_id`) REFERENCES `kmap_capital_humano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Estructura de tabla para la tabla `yiikmap52_store_g2t`
--

CREATE TABLE IF NOT EXISTS `yiikmap52_store_g2t` (
  `g` mediumint(8) unsigned NOT NULL,
  `t` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `gt` (`g`,`t`),
  KEY `tg` (`t`,`g`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Volcado de datos para la tabla `yiikmap52_store_g2t`
--

INSERT INTO `yiikmap52_store_g2t` (`g`, `t`) VALUES
(1, 1),
(1, 969),
(1, 987),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 14),
(6, 15),
(6, 16),
(6, 17),
(6, 18),
(6, 19),
(6, 20),
(6, 21),
(6, 22),
(6, 23),
(6, 24),
(6, 25),
(6, 26),
(6, 27),
(6, 28),
(6, 29),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(6, 34),
(6, 35),
(6, 36),
(6, 37),
(6, 38),
(6, 39),
(37, 40),
(37, 41),
(37, 42),
(37, 43),
(37, 44),
(37, 45),
(37, 46),
(37, 47),
(37, 48),
(37, 49),
(37, 50),
(37, 51),
(37, 52),
(37, 53),
(37, 54),
(37, 55),
(37, 56),
(37, 57),
(37, 58),
(37, 59),
(37, 60),
(37, 61),
(37, 62),
(37, 63),
(37, 64),
(37, 65),
(37, 66),
(37, 67),
(37, 68),
(37, 69),
(37, 70),
(37, 71),
(37, 72),
(37, 73),
(37, 74),
(37, 75),
(37, 76),
(37, 77),
(37, 78),
(37, 79),
(37, 80),
(37, 81),
(37, 82),
(37, 83),
(37, 84),
(37, 85),
(37, 86),
(37, 87),
(37, 88),
(37, 89),
(37, 90),
(37, 91),
(37, 92),
(37, 93),
(37, 94),
(37, 95),
(37, 96),
(37, 97),
(37, 98),
(37, 99),
(37, 100),
(37, 101),
(37, 102),
(37, 103),
(37, 104),
(37, 105),
(73, 106),
(73, 107),
(73, 108),
(73, 109),
(73, 110),
(73, 111),
(73, 112),
(73, 113),
(73, 114),
(73, 115),
(73, 116),
(73, 117),
(73, 118),
(73, 119),
(73, 120),
(73, 121),
(73, 122),
(73, 123),
(73, 124),
(73, 125),
(73, 126),
(73, 127),
(73, 128),
(73, 129),
(73, 130),
(73, 131),
(73, 132),
(73, 133),
(73, 134),
(73, 135),
(73, 136),
(73, 137),
(73, 138),
(73, 139),
(73, 140),
(73, 141),
(73, 142),
(73, 143),
(73, 144),
(73, 145),
(73, 146),
(73, 147),
(73, 148),
(73, 149),
(73, 150),
(73, 151),
(73, 152),
(73, 153),
(73, 154),
(73, 155),
(73, 156),
(73, 157),
(73, 158),
(73, 159),
(73, 160),
(73, 161),
(73, 162),
(73, 163),
(73, 164),
(73, 165),
(73, 166),
(73, 167),
(73, 168),
(73, 169),
(73, 170),
(73, 171),
(73, 172),
(73, 173),
(73, 174),
(73, 175),
(73, 176),
(73, 177),
(73, 178),
(73, 179),
(73, 180),
(73, 181),
(73, 182),
(73, 183),
(73, 184),
(73, 185),
(73, 186),
(73, 187),
(73, 188),
(73, 189),
(73, 190),
(73, 191),
(73, 192),
(73, 193),
(73, 194),
(73, 195),
(73, 196),
(73, 197),
(73, 198),
(73, 199),
(73, 200),
(73, 201),
(73, 202),
(73, 203),
(73, 204),
(73, 205),
(73, 206),
(73, 207),
(73, 208),
(73, 209),
(73, 210),
(73, 211),
(73, 212),
(73, 213),
(73, 214),
(73, 215),
(73, 216),
(73, 217),
(73, 218),
(73, 219),
(73, 220),
(73, 221),
(73, 222),
(73, 223),
(73, 224),
(73, 225),
(73, 226),
(73, 227),
(73, 228),
(73, 229),
(73, 230),
(73, 231),
(73, 232),
(73, 233),
(73, 234),
(73, 235),
(73, 236),
(73, 237),
(73, 238),
(73, 239),
(73, 240),
(73, 241),
(73, 242),
(73, 243),
(73, 244),
(73, 245),
(73, 246),
(73, 247),
(73, 248),
(73, 249),
(73, 250),
(73, 251),
(73, 252),
(73, 253),
(73, 254),
(73, 255),
(73, 256),
(73, 257),
(73, 258),
(73, 259),
(73, 260),
(73, 261),
(73, 262),
(73, 263),
(73, 264),
(73, 265),
(73, 266),
(73, 267),
(73, 268),
(73, 269),
(73, 270),
(73, 271),
(73, 272),
(73, 273),
(73, 274),
(73, 275),
(73, 276),
(73, 277),
(73, 278),
(73, 279),
(73, 280),
(73, 281),
(73, 282),
(73, 283),
(73, 284),
(73, 285),
(73, 286),
(73, 287),
(73, 288),
(73, 289),
(73, 290),
(73, 291),
(73, 292),
(73, 293),
(73, 294),
(73, 295),
(73, 316),
(73, 317),
(73, 318),
(73, 319),
(73, 320),
(73, 321),
(73, 322),
(73, 323),
(73, 324),
(73, 325),
(73, 326),
(73, 327),
(73, 328),
(73, 329),
(73, 330),
(73, 331),
(73, 332),
(73, 333),
(73, 334),
(73, 335),
(73, 336),
(73, 337),
(73, 338),
(73, 339),
(73, 340),
(73, 341),
(73, 342),
(73, 343),
(73, 344),
(73, 345),
(73, 346),
(73, 347),
(73, 348),
(73, 349),
(73, 350),
(73, 351),
(73, 352),
(73, 353),
(73, 354),
(73, 355),
(73, 356),
(73, 357),
(73, 358),
(73, 359),
(73, 360),
(73, 361),
(73, 362),
(73, 363),
(73, 364),
(73, 365),
(73, 366),
(73, 367),
(73, 368),
(73, 369),
(73, 370),
(73, 371),
(73, 372),
(73, 373),
(73, 374),
(73, 375),
(73, 376),
(73, 377),
(73, 378),
(73, 379),
(73, 380),
(73, 381),
(73, 382),
(73, 383),
(73, 384),
(73, 385),
(73, 386),
(73, 387),
(73, 388),
(73, 389),
(73, 390),
(73, 391),
(73, 392),
(73, 393),
(73, 394),
(73, 395),
(73, 396),
(73, 397),
(73, 398),
(73, 399),
(73, 400),
(73, 401),
(73, 402),
(73, 403),
(73, 404),
(73, 405),
(73, 406),
(73, 407),
(73, 408),
(73, 409),
(73, 410),
(73, 411),
(73, 412),
(73, 413),
(73, 414),
(73, 415),
(73, 416),
(73, 417),
(73, 418),
(73, 419),
(73, 420),
(73, 421),
(73, 422),
(73, 423),
(73, 424),
(73, 425),
(73, 426),
(73, 427),
(73, 428),
(73, 429),
(73, 430),
(73, 431),
(73, 432),
(73, 433),
(73, 434),
(73, 435),
(73, 436),
(73, 437),
(73, 438),
(73, 439),
(73, 440),
(73, 441),
(73, 442),
(73, 443),
(73, 444),
(73, 445),
(73, 446),
(73, 447),
(73, 448),
(73, 449),
(73, 450),
(73, 451),
(73, 452),
(73, 453),
(73, 454),
(73, 455),
(73, 456),
(73, 457),
(73, 458),
(73, 459),
(73, 460),
(73, 461),
(73, 462),
(73, 463),
(73, 464),
(73, 465),
(73, 466),
(73, 467),
(73, 468),
(73, 469),
(73, 470),
(73, 471),
(73, 472),
(73, 473),
(73, 474),
(73, 475),
(73, 476),
(73, 477),
(73, 478),
(73, 479),
(73, 480),
(73, 481),
(73, 482),
(73, 483),
(73, 484),
(73, 485),
(73, 486),
(73, 487),
(73, 488),
(73, 489),
(73, 490),
(73, 491),
(73, 492),
(73, 493),
(73, 494),
(73, 495),
(73, 496),
(73, 497),
(73, 498),
(73, 499),
(73, 500),
(73, 501),
(73, 502),
(73, 503),
(73, 504),
(73, 505),
(73, 506),
(73, 507),
(73, 508),
(73, 509),
(73, 510),
(73, 511),
(73, 512),
(73, 513),
(73, 514),
(73, 515),
(73, 516),
(73, 517),
(73, 518),
(73, 519),
(73, 520),
(73, 521),
(73, 522),
(73, 523),
(73, 524),
(73, 525),
(73, 526),
(73, 527),
(73, 528),
(73, 529),
(73, 530),
(73, 531),
(73, 532),
(73, 533),
(73, 534),
(73, 535),
(73, 536),
(73, 537),
(73, 538),
(73, 539),
(73, 540),
(73, 541),
(73, 542),
(73, 543),
(73, 544),
(73, 545),
(73, 546),
(73, 547),
(73, 548),
(73, 549),
(73, 550),
(73, 551),
(73, 552),
(73, 553),
(73, 554),
(73, 555),
(73, 556),
(73, 557),
(73, 558),
(73, 559),
(73, 560),
(73, 561),
(73, 562),
(73, 563),
(73, 564),
(73, 565),
(73, 566),
(73, 567),
(73, 568),
(73, 569),
(73, 570),
(73, 571),
(73, 572),
(73, 573),
(73, 574),
(73, 575),
(73, 576),
(73, 577),
(73, 578),
(73, 579),
(73, 580),
(73, 581),
(73, 582),
(73, 583),
(73, 584),
(73, 585),
(73, 586),
(73, 587),
(73, 588),
(73, 589),
(73, 590),
(73, 591),
(73, 592),
(73, 593),
(73, 594),
(73, 595),
(73, 596),
(73, 597),
(73, 598),
(73, 599),
(73, 600),
(73, 601),
(73, 602),
(73, 603),
(73, 604),
(73, 605),
(73, 606),
(73, 607),
(73, 608),
(73, 609),
(73, 610),
(73, 611),
(73, 612),
(73, 613),
(73, 614),
(73, 615),
(73, 616),
(73, 617),
(73, 618),
(73, 619),
(73, 620),
(73, 621),
(73, 622),
(73, 623),
(73, 624),
(73, 625),
(73, 626),
(73, 627),
(73, 628),
(73, 629),
(73, 630),
(73, 631),
(73, 632),
(73, 633),
(73, 634),
(73, 635),
(73, 636),
(73, 637),
(73, 638),
(73, 639),
(73, 640),
(73, 641),
(73, 642),
(73, 643),
(73, 644),
(73, 645),
(73, 646),
(73, 647),
(73, 648),
(73, 649),
(73, 650),
(73, 651),
(73, 652),
(73, 653),
(73, 654),
(73, 655),
(73, 656),
(73, 657),
(73, 658),
(73, 659),
(73, 660),
(73, 661),
(73, 662),
(73, 663),
(73, 664),
(73, 665),
(73, 666),
(73, 667),
(73, 668),
(73, 669),
(73, 670),
(73, 671),
(73, 672),
(73, 673),
(73, 674),
(73, 675),
(73, 676),
(73, 677),
(73, 678),
(73, 679),
(73, 680),
(73, 681),
(73, 682),
(73, 683),
(73, 684),
(73, 685),
(73, 686),
(73, 687),
(73, 688),
(73, 689),
(73, 690),
(73, 691),
(73, 692),
(73, 693),
(73, 694),
(73, 695),
(73, 696),
(73, 697),
(73, 698),
(73, 699),
(73, 700),
(73, 701),
(73, 702),
(73, 703),
(73, 704),
(73, 705),
(73, 706),
(73, 707),
(73, 708),
(73, 709),
(73, 710),
(73, 711),
(73, 712),
(73, 713),
(73, 714),
(73, 715),
(73, 716),
(73, 717),
(73, 718),
(73, 719),
(73, 720),
(73, 721),
(73, 722),
(73, 723),
(73, 724),
(73, 725),
(73, 726),
(73, 727),
(73, 728),
(73, 729),
(73, 730),
(73, 731),
(73, 732),
(73, 733),
(73, 734),
(73, 735),
(73, 736),
(73, 737),
(73, 738),
(73, 739),
(73, 740),
(73, 741),
(73, 742),
(73, 743),
(73, 744),
(73, 745),
(73, 746),
(73, 747),
(73, 748),
(73, 749),
(73, 750),
(73, 751),
(73, 752),
(73, 753),
(73, 754),
(73, 755),
(73, 756),
(73, 757),
(73, 758),
(73, 759),
(73, 760),
(73, 761),
(73, 762),
(73, 763),
(73, 764),
(73, 765),
(73, 766),
(73, 767),
(73, 768),
(73, 769),
(73, 770),
(73, 771),
(73, 772),
(73, 773),
(73, 774),
(73, 775),
(73, 776),
(73, 777),
(73, 778),
(73, 779),
(73, 780),
(73, 781),
(73, 782),
(73, 783),
(73, 784),
(73, 785),
(73, 786),
(73, 787),
(73, 788),
(73, 789),
(73, 790),
(73, 791),
(73, 792),
(73, 793),
(73, 794),
(73, 795),
(73, 796),
(73, 797),
(73, 798),
(73, 799),
(73, 800),
(73, 801),
(73, 802),
(73, 803),
(73, 804),
(73, 805),
(73, 806),
(73, 807),
(73, 808),
(73, 809),
(73, 810),
(73, 811),
(73, 812),
(73, 813),
(73, 814),
(73, 815),
(73, 816),
(73, 817),
(73, 818),
(73, 819),
(73, 820),
(73, 821),
(73, 822),
(73, 823),
(73, 824),
(73, 825),
(73, 826),
(73, 827),
(73, 828),
(73, 829),
(73, 830),
(73, 831),
(73, 832),
(73, 833),
(73, 834),
(73, 835),
(73, 836),
(73, 837),
(73, 838),
(73, 839),
(73, 840),
(73, 841),
(73, 842),
(73, 843),
(73, 844),
(73, 845),
(73, 846),
(73, 847),
(73, 848),
(73, 849),
(73, 850),
(73, 851),
(73, 852),
(73, 853),
(73, 854),
(73, 855),
(73, 856),
(73, 857),
(73, 858),
(73, 859),
(73, 860),
(73, 861),
(73, 862),
(73, 863),
(73, 864),
(73, 865),
(73, 866),
(73, 867),
(73, 868),
(73, 869),
(73, 870),
(73, 871),
(73, 872),
(73, 873),
(73, 874),
(73, 875),
(73, 876),
(73, 877),
(73, 878),
(73, 879),
(73, 880),
(73, 881),
(73, 882),
(73, 883),
(73, 884),
(73, 885),
(73, 886),
(73, 887),
(73, 888),
(73, 889),
(73, 890),
(73, 891),
(73, 892),
(73, 893),
(73, 894),
(73, 895),
(73, 896),
(73, 897),
(73, 898),
(73, 899),
(73, 900),
(73, 901),
(73, 902),
(73, 903),
(73, 904),
(73, 905),
(73, 906),
(73, 907),
(73, 908),
(73, 909),
(73, 910),
(73, 911),
(73, 912),
(73, 913),
(73, 914),
(73, 915),
(73, 916),
(73, 917),
(73, 918),
(73, 919),
(73, 920),
(73, 921),
(73, 922),
(73, 923),
(73, 924),
(73, 925),
(73, 926),
(73, 927),
(73, 928),
(73, 929),
(73, 930),
(73, 931),
(73, 932),
(73, 933),
(73, 934),
(73, 935),
(73, 936),
(73, 937),
(73, 938),
(73, 939),
(73, 940),
(73, 941),
(73, 942),
(73, 943),
(73, 944),
(73, 945),
(73, 946),
(73, 947),
(73, 948),
(73, 949),
(73, 950),
(73, 951),
(73, 952),
(73, 953),
(73, 954),
(73, 955),
(73, 956),
(73, 957),
(73, 958),
(73, 959),
(73, 960),
(73, 961),
(73, 962),
(73, 963),
(73, 964),
(73, 965),
(73, 966),
(73, 967),
(73, 968),
(73, 977),
(73, 978),
(73, 979),
(73, 980),
(73, 981),
(73, 982),
(73, 983),
(73, 984),
(73, 985),
(73, 986);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yiikmap52_store_id2val`
--

CREATE TABLE IF NOT EXISTS `yiikmap52_store_id2val` (
  `id` mediumint(8) unsigned NOT NULL,
  `misc` tinyint(1) NOT NULL DEFAULT '0',
  `val` text COLLATE utf8_unicode_ci NOT NULL,
  `val_type` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`,`val_type`),
  KEY `v` (`val`(64))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Volcado de datos para la tabla `yiikmap52_store_id2val`
--

INSERT INTO `yiikmap52_store_id2val` (`id`, `misc`, `val`, `val_type`) VALUES
(1, 0, 'http://example.com/home.html', 0),
(3, 0, 'http://purl.org/dc/elements/1.1/title', 0),
(5, 0, '', 2),
(6, 0, 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional', 0),
(8, 0, 'http://www.w3.org/1999/02/22-rdf-syntax-ns#type', 0),
(18, 0, 'http://www.w3.org/2000/01/rdf-schema#subClassOf', 0),
(29, 0, 'http://www.w3.org/2000/01/rdf-schema#domain', 0),
(30, 0, 'http://www.w3.org/2000/01/rdf-schema#range', 0),
(37, 0, 'http://universidad.edu/ontologias/ClassDefinitions', 0),
(73, 0, 'http://universidad.edu/ontologias/TheInstances', 0),
(47, 0, 'http://universidad.edu/ontologias/ClassDefinitions#id', 0),
(76, 0, 'http://www.w3.org/2001/XMLSchema#integer', 0),
(61, 0, 'http://universidad.edu/ontologias/ClassDefinitions#version', 0),
(49, 0, 'http://universidad.edu/ontologias/ClassDefinitions#nombre', 0),
(55, 0, 'http://universidad.edu/ontologias/ClassDefinitions#tipo', 0),
(62, 0, 'http://universidad.edu/ontologias/ClassDefinitions#objetivo', 0),
(80, 0, 'http://universidad.edu/ontologias/ClassDefinitions#organizacion_id', 0),
(63, 0, 'http://universidad.edu/ontologias/ClassDefinitions#capital_humano', 0),
(52, 0, 'http://universidad.edu/ontologias/ClassDefinitions#created_at', 0),
(54, 0, 'http://universidad.edu/ontologias/ClassDefinitions#updated_at', 0),
(56, 0, 'http://universidad.edu/ontologias/ClassDefinitions#contacto', 0),
(58, 0, 'http://universidad.edu/ontologias/ClassDefinitions#url', 0),
(59, 0, 'http://universidad.edu/ontologias/ClassDefinitions#sector', 0),
(51, 0, 'http://universidad.edu/ontologias/ClassDefinitions#descripcion', 0),
(64, 0, 'http://universidad.edu/ontologias/ClassDefinitions#modelo', 0),
(65, 0, 'http://universidad.edu/ontologias/ClassDefinitions#perfil', 0),
(66, 0, 'http://universidad.edu/ontologias/ClassDefinitions#area', 0),
(69, 0, 'http://universidad.edu/ontologias/ClassDefinitions#un_capital', 0),
(70, 0, 'http://universidad.edu/ontologias/ClassDefinitions#secundaria', 0),
(71, 0, 'http://universidad.edu/ontologias/ClassDefinitions#afines', 0),
(57, 0, 'http://universidad.edu/ontologias/ClassDefinitions#organizacion', 0),
(72, 0, 'http://universidad.edu/ontologias/ClassDefinitions#locacion', 0),
(68, 0, 'http://universidad.edu/ontologias/ClassDefinitions#capital', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yiikmap52_store_o2val`
--

CREATE TABLE IF NOT EXISTS `yiikmap52_store_o2val` (
  `id` mediumint(8) unsigned NOT NULL,
  `misc` tinyint(1) NOT NULL DEFAULT '0',
  `val_hash` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `val` text COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `vh` (`val_hash`),
  KEY `v` (`val`(64))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Volcado de datos para la tabla `yiikmap52_store_o2val`
--

INSERT INTO `yiikmap52_store_o2val` (`id`, `misc`, `val_hash`, `val`) VALUES
(4, 0, '695308769', 'Example Domain'),
(9, 0, '579575217', 'http://www.w3.org/2000/01/rdf-schema#Class'),
(12, 0, '588002903', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Capital'),
(17, 0, '1838898230', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CapitalEstructural'),
(19, 0, '260525477', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CapitalHumano'),
(28, 0, '705875754', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#Property'),
(7, 0, '279415644', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Organizacion'),
(10, 0, '2123577302', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Proceso'),
(11, 0, '1621121790', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Competencia'),
(13, 0, '1603209752', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CompetenciaArea'),
(14, 0, '130667977', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CompetenciaTipo'),
(15, 0, '1733638308', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CompetenciaModelo'),
(16, 0, '31924901', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CompetenciaPerfil'),
(20, 0, '1122436865', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CapitalRelacional'),
(21, 0, '850729640', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Intangible'),
(22, 0, '279660156', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Tangible'),
(48, 0, '773790206', 'http://www.w3.org/2001/XMLSchema#int'),
(50, 0, '1798598540', 'http://www.w3.org/2001/XMLSchema#string'),
(53, 0, '768108233', 'http://www.w3.org/2001/XMLSchema#dateTime'),
(38, 0, '745143070', 'http://universidad.edu/ontologias/ClassDefinitions#ClassOrganizacion'),
(60, 0, '1427092736', 'http://universidad.edu/ontologias/ClassDefinitions#ClassSector'),
(39, 0, '1009548545', 'http://universidad.edu/ontologias/ClassDefinitions#ClassProceso'),
(43, 0, '619718328', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCapitalHumano'),
(40, 0, '1570849025', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCompetencia'),
(67, 0, '1249938286', 'http://universidad.edu/ontologias/ClassDefinitions#ClassArea'),
(41, 0, '1639152770', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCapital'),
(42, 0, '1040383163', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCapitalEstructural'),
(46, 0, '140426817', 'http://universidad.edu/ontologias/ClassDefinitions#ClassTangible'),
(75, 0, '2082672713', '1'),
(77, 0, '817814474', '01'),
(78, 0, '1286638857', 'diligenciar formulario'),
(79, 0, '638199398', 'dilegenciar la información necesaria de un formulario web'),
(81, 0, '554520985', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-1'),
(82, 0, '789990099', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-1'),
(83, 0, '510202516', '2011-02-03 23:20:00'),
(85, 0, '450215437', '2'),
(86, 0, '1203366752', '00'),
(87, 0, '1363081270', 'Entrevistar capital humano'),
(88, 0, '477645384', 'Ciertos procesos requieren información adicional obtenida de personas de la organización.'),
(89, 0, '1602010716', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-4'),
(90, 0, '1801881161', '2011-02-04 02:04:09'),
(92, 0, '1842515611', '3'),
(93, 0, '504822834', 'Admisiones y matrículas.'),
(94, 0, '206169288', '4'),
(95, 0, '478631078', 'Proceso para ejecutar las admisiones y matrículas de la institución.'),
(96, 0, '1055380481', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-3'),
(97, 0, '1623726312', '2011-02-04 02:07:19'),
(99, 0, '935329378', 'Admisiones y registro.'),
(100, 0, '958089538', 'Comprobar y/o verificar de una manera eficaz el cumplimiento de las actividades académicas desarrolladas por los estudiantes.'),
(101, 0, '2088797094', '2011-02-04 02:10:22'),
(102, 0, '1091041412', '2011-04-11 13:22:14'),
(104, 0, '2068763730', '5'),
(105, 0, '35238225', 'Embotellar lote.'),
(106, 0, '1724332919', 'Activar el embotellamiento supervisado de un lote de bebidas.'),
(107, 0, '821874507', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-3'),
(108, 0, '1239475351', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-2'),
(109, 0, '1631262852', '2011-02-04 06:18:16'),
(111, 0, '498629140', '6'),
(112, 0, '423072092', 'v 0.0'),
(113, 0, '75005434', 'despachar pedido'),
(114, 0, '1790921346', '7'),
(115, 0, '705980321', 'Empacar, despachar y supervisar el envío de un lote de productos.'),
(116, 0, '2099902864', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-10'),
(117, 0, '1824145868', '2011-02-04 06:20:13'),
(118, 0, '971368280', '2011-04-12 22:40:13'),
(120, 0, '2114767468', '0.1'),
(121, 0, '1846397291', 'Hacer inventario'),
(122, 0, '1727844928', 'Inventariar los recursos de un área de la organización.'),
(123, 0, '972762710', '2011-05-13 23:14:27'),
(124, 0, '823230919', '2011-05-13 23:14:35'),
(126, 0, '100641005', '8'),
(127, 0, '1051860856', 'Asignar recursos'),
(128, 0, '1947850990', 'Asignar recursos indispensables a un nuevo capital humano.'),
(129, 0, '932252500', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-7'),
(130, 0, '966502514', '2011-05-13 23:18:10'),
(131, 0, '313981873', '2011-05-13 23:18:20'),
(133, 0, '1928894587', '9'),
(134, 0, '151780094', '0.0'),
(135, 0, '1172140903', 'Probado de entidades y modelos.'),
(136, 0, '1991308095', 'Probar las entidades del SI.'),
(137, 0, '2051292553', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-14'),
(138, 0, '56009918', '2011-05-15 19:20:09'),
(139, 0, '1963816850', '2011-05-15 19:20:16'),
(141, 0, '1587730975', '10'),
(142, 0, '1756245105', 'Instalación de SI.'),
(143, 0, '940187059', 'Instalar el SI determinado en la fase de planeación.'),
(144, 0, '1782356416', '2011-09-15 08:50:39'),
(146, 0, '698739337', '11'),
(147, 0, '161049961', 'refinamiento de la implementación'),
(148, 0, '343785078', 'optimizar el SI en desarrollo.'),
(149, 0, '222498079', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-15'),
(150, 0, '440235445', '2011-09-26 21:11:24'),
(152, 0, '1330857165', '12'),
(153, 0, '663452935', 'crear carta del proyecto'),
(154, 0, '66760947', 'definición de la carta inicial del proyecto.'),
(155, 0, '1317871760', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-6'),
(156, 0, '143866660', '2012-01-25 01:49:16'),
(158, 0, '945058907', '13'),
(159, 0, '1112044059', 'gestionar proyecto'),
(160, 0, '637622374', 'plantear el bosquejo inicial de los pasos en el desarrollo del proyecto.'),
(161, 0, '481465293', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-17'),
(162, 0, '965349402', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-7'),
(163, 0, '1385405904', '2012-01-28 16:59:56'),
(165, 0, '1506745864', '14'),
(166, 0, '438520328', '0.00'),
(167, 0, '16270778', 'iniciar bobina madre'),
(168, 0, '418465549', 'determina uno de los pasos inciales operativos en la activación de la planta generadora de energía.'),
(169, 0, '1945268642', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-18'),
(170, 0, '1456140919', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-8'),
(171, 0, '1301558073', '2012-02-06 04:25:34'),
(173, 0, '784871058', '15'),
(174, 0, '836962700', 'formar instructores'),
(175, 0, '1677614755', 'formar a los jefes de departamento con nociones básicas de pedagogía.'),
(176, 0, '83181876', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-19'),
(177, 0, '567132897', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-9'),
(178, 0, '1751631247', '2012-02-06 21:49:22'),
(180, 0, '1212055764', '16'),
(181, 0, '147427531', '1.0'),
(182, 0, '1443169854', 'hacer diagrama de gantt'),
(183, 0, '1787862093', 'diseñar el cronograma de proyecto usando diagrama de gantt.'),
(184, 0, '1567378204', '2012-02-10 16:41:23'),
(186, 0, '1060745282', '17'),
(187, 0, '1276691103', 'desplegar grafo'),
(188, 0, '1035933212', 'técnica para desplegar el grafo correspondiente a la entidad seleccionada.'),
(189, 0, '1826121540', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-12'),
(190, 0, '386320933', '2012-09-06 21:43:30'),
(192, 0, '1350128173', '18'),
(193, 0, '1192178055', 'hacer backup'),
(194, 0, '788363713', 'hacer copia de respaldo de información relevante.'),
(195, 0, '1365746966', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-4'),
(196, 0, '1882260468', '2012-09-06 21:45:15'),
(198, 0, '662594235', '19'),
(199, 0, '1590510578', '2012-09-06 21:51:51'),
(201, 0, '1972341214', '20'),
(202, 0, '1968893818', 'desplegar tripletas'),
(203, 0, '1665005564', 'técnica para desplegar las tripletas correspondientes a la entidad seleccionada.'),
(204, 0, '377706950', '2012-09-06 22:16:53'),
(206, 0, '42514764', '21'),
(207, 0, '1790712963', 'consultar helpdesk'),
(208, 0, '1545459172', 'proceso en el que se contacta con un técnico.'),
(209, 0, '1207697373', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-2'),
(210, 0, '679186122', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-5'),
(211, 0, '1519107730', '2012-09-10 17:58:39'),
(212, 0, '1875378809', 'universidad de caldas'),
(213, 0, '1587357176', 'Sede Principal Calle 65 Nº 26 - 10 / Tel 8781500 Fax 8781501 / Apartado aéreo 275 / Línea gratuita : 01-8000-512120'),
(214, 0, '2018196209', 'http://ucaldas.edu.co/'),
(215, 0, '194115513', 'http://universidad.edu/ontologias/SectorInstances#Sector-1'),
(216, 0, '120115044', 'Universidad de Caldas es una Institución de Educación Superior líder en la región del Eje Cafetero situada en la ciudad de Manizales con 5 sedes especializadas en diferentes áreas del conocimiento.'),
(217, 0, '1546551671', '2011-04-11 02:56:23'),
(5, 0, '0', ''),
(218, 0, '1951408209', 'fundicion fonseca ltda'),
(219, 0, '1506865593', 'Calle 38 no. 26-36 MANIZALES'),
(220, 0, '1835489789', 'http://universidad.edu/ontologias/SectorInstances#Sector-2'),
(221, 0, '1825328256', 'Fundición de productos hierro o de acero por fundición'),
(222, 0, '1595726283', 'postobón s.a.'),
(223, 0, '1617369300', 'Medellín, Colombia'),
(224, 0, '407618352', 'http://www.postobon.com/'),
(225, 0, '442526059', 'http://universidad.edu/ontologias/SectorInstances#Sector-3'),
(226, 0, '1638936448', 'industria de alimentos zenú s.a.'),
(227, 0, '1465466069', 'Carrera 64C # 104 - 03 · Tel (574) 470 5222 · Medellín - Colombia'),
(228, 0, '1392155218', 'http://www.zenu.com.co/'),
(229, 0, '2080047926', 'http://universidad.edu/ontologias/SectorInstances#Sector-4'),
(231, 0, '365437944', 'unitec'),
(232, 0, '1879333624', 'Calle 76No 12 - 58 - PBX 5939393 - Bogotá - Colombia'),
(233, 0, '1069023797', 'http://www.unitec.edu.co/'),
(234, 0, '629085279', 'Corporación Universitaria Unitec'),
(236, 0, '1161553151', 'foncaldas'),
(237, 0, '1227047835', 'PBX +57 (6) 885 2654 FAX +57 (6) 885 7780 NIT 890.801.733-7 Cll 60 # 25-01 Manizales, Colombia'),
(238, 0, '1834305374', 'http://www.foncaldas.com/'),
(239, 0, '526973729', 'Fondo de Empleados Universidad de Caldas.'),
(240, 0, '1568361630', 'universidad autónoma de manizales'),
(241, 0, '1405223207', 'Teléfono:(57)(6)8727272 Fax: 8727670 Línea gratuita: 01-8000-0510123 Email:servicioalcliente@autonoma.edu.co Manizales - Caldas - Colombia'),
(242, 0, '109755565', 'http://www.autonoma.edu.co/'),
(244, 0, '1656696992', 'universidad de manizales'),
(245, 0, '84620343', 'Cra 9 a No 19 - 03 Manizales - Colombia Tel: 887 96-80'),
(246, 0, '120397689', 'http://www.umanizales.edu.co/'),
(248, 0, '1088975389', 'universidad católica de manizales'),
(249, 0, '731339296', 'Carrera 23 No. 63 - 60 PBX (57)(6) 8782900 FAX (57)(6) 8782937'),
(250, 0, '1759918762', 'http://www.ucm.edu.co/'),
(251, 0, '580169158', 'universidad nacional de colombia'),
(252, 0, '1076062578', 'Carrera 45 No 26-85 - Edificio Uriel Gutiérrez Bogotá D.C. - Colombia'),
(253, 0, '169610590', 'http://www.unal.edu.co/index.html'),
(255, 0, '89649866', 'universidad nacional de colombia sede manizales'),
(256, 0, '919259597', 'Cra 27 # 64-60 Manizales, Caldas - Colombia Línea 01 8000 916956 PBX: (57+6) 8879300'),
(257, 0, '1867510677', 'http://www.manizales.unal.edu.co/'),
(258, 0, '946778668', 'Hamburguesas El Corral.'),
(259, 0, '832662130', 'Calle 1 #2-3 Tel: 8801234'),
(260, 0, '377798711', 'http://elcorral.info'),
(261, 0, '1782973489', 'Hambuguesas El Corral es una franquicia que se especializa en comidas rápidas.'),
(263, 0, '1907226338', 'Coca-Cola'),
(264, 0, '2044398002', 'K 3 #2-1'),
(265, 0, '487666167', 'http://www.coca-cola.com/index.jsp'),
(266, 0, '1099997597', 'Industrias Coca-Cola es líder en su sector. Franquicia internacional.'),
(267, 0, '1001375415', 'EDI (Escuela De Ingeniería)'),
(268, 0, '554692913', 'Av. Santander. 890 1234.'),
(269, 0, '951947908', 'http://www.edi.com.co'),
(270, 0, '1772270007', 'Centro de formación técnica.'),
(271, 0, '439612315', '2011-05-15 19:17:21'),
(272, 0, '316234762', '2011-05-15 19:17:33'),
(273, 0, '1792372921', 'EntregaYA S.A.S.'),
(274, 0, '118628447', 'Línea gratuita a nivel nacional: 01800-ENTREGA'),
(275, 0, '217854880', 'http://universidad.edu/ontologias/SectorInstances#Sector-5'),
(276, 0, '144157856', 'Compañía afiliada para tercerizar los procesos de distribución de productos de la organización al cliente.'),
(277, 0, '926121689', '2011-09-13 05:01:41'),
(279, 0, '426738207', 'Drogas La Rebaja.'),
(280, 0, '1179397815', 'Carrera 23 #19-10. Tel. 881 2345'),
(281, 0, '487435636', 'http://universidad.edu/ontologias/SectorInstances#Sector-7'),
(282, 0, '564737652', '2011-09-19 00:25:37'),
(283, 0, '622523610', 'coltejer'),
(284, 0, '2068886608', 'av libertadores #12-34'),
(285, 0, '1541481726', 'http://coltejer.com'),
(286, 0, '1917669149', 'http://universidad.edu/ontologias/SectorInstances#Sector-8'),
(287, 0, '158638144', 'La empresa Coltejer se especializa en tejidos.'),
(288, 0, '240213846', '2012-01-28 16:58:05'),
(289, 0, '273092812', 'ISA'),
(290, 0, '673843539', 'Colombia - Valle del Cauca - Cali'),
(291, 0, '587454102', 'http://isa.com'),
(292, 0, '1181566462', 'http://universidad.edu/ontologias/SectorInstances#Sector-10'),
(293, 0, '1896945026', 'ISA es una empresa nacional con sede en el valle del cauca líder en el sector de la energía eléctrica.'),
(294, 0, '209389614', '2012-02-06 04:22:16'),
(295, 0, '1663144189', 'ecopetrol'),
(296, 0, '320019114', 'colombia - guajira - rioacha'),
(297, 0, '1965549501', 'http://ecopetrol.com'),
(298, 0, '445302626', '2012-02-06 19:19:26'),
(300, 0, '1251171177', 'European IT'),
(301, 0, '872397909', 'Langley Street #123 Tel: 555-1234'),
(302, 0, '1484880071', 'http://www.european.it'),
(303, 0, '1480736582', 'Empresa europea especializada en el outsourcing de TI.'),
(304, 0, '1005652937', '2012-09-12 13:02:40'),
(306, 0, '250476024', 'lenguajes de programacion'),
(307, 0, '726430458', 'http://universidad.edu/ontologias/AreaInstances#Area-1'),
(308, 0, '1877287763', 'Conocimiento en lenguajes de programación. Corresponde al área de programación.'),
(310, 0, '1481159870', 'modelado de datos'),
(311, 0, '1529251445', 'http://universidad.edu/ontologias/AreaInstances#Area-4'),
(312, 0, '1136061115', 'Conocimiento en bases de datos y modelado de datos. Corresponde al área de bases de datos.'),
(314, 0, '1624717019', 'proactivo'),
(315, 0, '740407011', 'http://universidad.edu/ontologias/AreaInstances#Area-5'),
(316, 0, '386895442', 'Se destaca su aporte de ideas a los problemas de equipo.'),
(318, 0, '96248785', 'flexibilidad'),
(320, 0, '1140963495', 'iniciativa'),
(322, 0, '1697535732', 'dedicación'),
(323, 0, '732389791', '2011-05-14 15:58:08'),
(325, 0, '469850418', 'resolución de problemas'),
(326, 0, '1255610535', 'http://universidad.edu/ontologias/AreaInstances#Area-6'),
(327, 0, '871223892', 'Ejecuta acciones dentro de la organización con el fin de resolver conflictos.'),
(328, 0, '1854369303', '2011-05-15 19:10:27'),
(329, 0, '782840469', '2011-05-15 19:11:23'),
(331, 0, '442852471', 'liderazgo'),
(332, 0, '1341044346', 'http://comptencias.ucaldaskmap/perfil'),
(333, 0, '1505892369', 'el individuo demuestra capacidad para guiar equipos de trabajo.'),
(334, 0, '1040803914', '2012-01-28 17:01:27'),
(336, 0, '1976868751', 'tecnica operativa'),
(337, 0, '1385220702', 'http://universidad.edu/ontologias/AreaInstances#Area-8'),
(338, 0, '677555626', 'tecnico con conocimiento en operacion de maquinaria industrial y de infraestructura.'),
(339, 0, '2057036723', '2012-02-06 04:30:02'),
(341, 0, '312822654', 'idiomas'),
(342, 0, '630717128', 'http://universidad.edu/ontologias/AreaInstances#Area-9'),
(343, 0, '150555451', '2012-02-06 21:54:58'),
(345, 0, '982626990', 'computador'),
(346, 0, '758731247', 'Equipo de cómputo.'),
(347, 0, '1035332394', '2011-04-11 02:56:24'),
(349, 0, '500825060', 'sala'),
(350, 0, '1947833605', 'Sala para reuniones.'),
(352, 0, '263970923', 'embotelladora'),
(353, 0, '1362394319', 'Maquina embotelladora de bebidas.'),
(355, 0, '45650570', 'empacadora'),
(356, 0, '2124918303', 'Maquina empacadora/envolvedora de productos.'),
(358, 0, '1202078829', 'asignación de tiempo'),
(359, 0, '832896763', '2011-04-12 07:35:49'),
(361, 0, '1960695315', '2011-04-12 07:53:55'),
(363, 0, '2121511553', 'SI KMap'),
(364, 0, '1253782747', '2011-04-12 08:16:04'),
(366, 0, '1741692518', 'Sala de conferencias'),
(367, 0, '1338491119', 'sala de conferencias para brindar capacitación'),
(368, 0, '645672167', '2011-05-14 16:08:47'),
(370, 0, '770009663', 'Horario'),
(371, 0, '1371066167', 'Horario de diplomado y cursos.'),
(372, 0, '36157472', '2011-05-15 19:04:46'),
(373, 0, '644161944', '2011-05-15 19:05:02'),
(375, 0, '728994514', 'recurso software oficina'),
(376, 0, '755127691', '2011-09-19 10:45:47'),
(378, 0, '1392569605', 'recurso software ERP'),
(379, 0, '1943987375', '2011-09-19 11:54:17'),
(380, 0, '851854238', '2011-09-19 11:57:30'),
(382, 0, '652482462', 'servidor PBX'),
(383, 0, '384746003', '2011-09-19 11:54:49'),
(384, 0, '755299505', '2011-09-19 11:56:58'),
(386, 0, '2094115022', '2011-09-19 11:59:54'),
(388, 0, '1611045888', 'empacadora industrial'),
(389, 0, '1378738213', '2011-09-22 15:03:03'),
(391, 0, '499298055', 'Sistema KM'),
(392, 0, '1855701770', '2011-09-22 16:55:09'),
(394, 0, '2137586552', 'manual de operacion'),
(395, 0, '1420863774', 'docuemntacion tecnica detallada de la bobina generadora madre.'),
(396, 0, '1874932096', '2012-02-06 04:30:59'),
(398, 0, '1223924122', 'auditorio'),
(399, 0, '1854758075', '2012-02-06 21:57:04'),
(400, 0, '1758023249', 'daniel benitez restrepo'),
(401, 0, '1712353697', 'calle 1 #1-1. 311111111.'),
(402, 0, '1087283167', '2011-09-13 09:30:31'),
(403, 0, '908229125', 'diego armando yela velasco'),
(404, 0, '1834237802', 'calle 2 #2-2. 322222222'),
(405, 0, '764736717', 'marcelo lopez trujillo'),
(406, 0, '1478777718', 'calle 3 #3-3. 333333333'),
(407, 0, '932451104', 'edificio de postgrados'),
(408, 0, '1845027342', 'carlos eduardo marulanda echeverry'),
(409, 0, '1075417623', 'calle 4 #4-4. 344444444'),
(410, 0, '1932290523', 'sala usi'),
(411, 0, '883348934', 'Alex Barrera'),
(412, 0, '759792080', 'Orange street #123'),
(413, 0, '545437245', 'Celular samsung 3153002345'),
(414, 0, '518760974', '2011-05-14 16:18:00'),
(415, 0, '1957376398', 'Javier Bardem'),
(416, 0, '1191549601', 'Avenida Colonia y Libertadores, Madrid.'),
(417, 0, '160729243', 'GMT+1'),
(418, 0, '1262293363', '2011-05-15 19:06:11'),
(419, 0, '1736279721', '2011-05-15 19:06:25'),
(420, 0, '1246767215', 'andres felipe sinisterra'),
(421, 0, '1366343133', 'Calle 51 #12-12'),
(422, 0, '2094130716', 'punto movil movistar'),
(423, 0, '1930728297', '2012-01-25 14:26:36'),
(424, 0, '1717546020', 'Yukito Tufokito'),
(425, 0, '1062717548', 'Cali - Sede Principal ISA - Planta generadora madre'),
(426, 0, '1277194576', '2012-02-06 04:24:48'),
(427, 0, '1323904657', 'jean piaget'),
(428, 0, '582798177', 'europa - francia'),
(429, 0, '1572095229', '2012-02-06 21:44:53'),
(44, 0, '1758771955', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCapitalRelacional'),
(435, 0, '1820337238', '2011-04-12 08:26:03'),
(437, 0, '43787649', '2011-04-12 08:26:12'),
(439, 0, '1319268880', 'Industrias del Acero S.A.'),
(440, 0, '1823710752', '2011-05-15 19:09:02'),
(441, 0, '1664415148', '2011-05-15 19:09:14'),
(443, 0, '140009558', '2011-09-19 18:11:23'),
(445, 0, '263059709', '2011-09-21 17:04:38'),
(447, 0, '195221857', '2011-09-22 17:06:19'),
(449, 0, '799488949', '2011-09-25 21:51:14'),
(451, 0, '850028283', 'industrias de infraestructura'),
(452, 0, '142859699', '2012-02-06 04:31:26'),
(454, 0, '1467295410', '2012-02-06 21:58:03'),
(456, 0, '1948523482', 'publicaciones & tipografía'),
(457, 0, '1396419082', '2012-09-12 18:45:03'),
(459, 0, '1685985038', '22'),
(460, 0, '1722154060', 'v0.0'),
(461, 0, '1704568255', 'generar reporte'),
(462, 0, '999707312', 'generar un reporte del proceso ejecutado.'),
(299, 0, '1443146323', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-20'),
(463, 0, '1516957926', '2012-12-14 00:46:51'),
(465, 0, '55143214', 'financiero'),
(466, 0, '27113550', 'entidades financieras, crediticias, bancos, etc.'),
(467, 0, '220205133', '2012-12-14 00:50:21'),
(469, 0, '199836390', 'banco de occidente'),
(470, 0, '325607740', 'carrera 22 #21-14'),
(471, 0, '1421948925', 'http://www.bancodeoccidente.com.co/'),
(464, 0, '547089340', 'http://universidad.edu/ontologias/SectorInstances#Sector-13'),
(472, 0, '1716312781', 'banco de occidente credencial. trabajamos para usted.'),
(473, 0, '1872057127', '2012-12-14 00:51:19'),
(475, 0, '909336170', 'contabilidad'),
(476, 0, '884534368', '2012-12-14 00:53:11'),
(478, 0, '64775458', 'COMPAQ Presario CQ50'),
(479, 0, '371084150', 'Sala U.S.I.'),
(480, 0, '745513875', 'laptop marca compaq.'),
(481, 0, '969328758', '2012-12-14 01:02:37'),
(45, 0, '348442429', 'http://universidad.edu/ontologias/ClassDefinitions#ClassIntangible'),
(483, 0, '1170962618', 'MCO'),
(484, 0, '498959240', 'Modelo de Conocimiento Organizacional'),
(485, 0, '1527164672', '2012-12-14 01:04:55'),
(487, 0, '1357404464', 'Modelo de Conocimiento Organizacional.'),
(488, 0, '1734999434', '2012-12-14 01:07:22'),
(490, 0, '538996313', 'Wells fargo'),
(491, 0, '1579779126', 'Spring Avenue, Washington D.C.'),
(492, 0, '171539483', '(1) 555-3141592'),
(493, 0, '1173912655', '2012-12-14 01:09:14'),
(494, 0, '505331363', 'Wells Fargo'),
(495, 0, '515889923', '2012-12-14 01:09:21'),
(497, 0, '1239656831', 'bancos regionales'),
(498, 0, '933656823', '2012-12-14 01:10:34'),
(500, 0, '45891024', 'Wells Fargo por su gran bagaje se perfila como un capital para ser utilizado por las organizaciones.'),
(501, 0, '865120315', '2012-12-14 01:16:55'),
(504, 0, '1471671152', 'modelo de conocimiento organizacional'),
(505, 0, '58030585', '2013-04-18 22:37:47'),
(507, 0, '326707096', '23'),
(508, 0, '568899323', 'revision de metodología'),
(509, 0, '2098360906', 'revisar la metodología aplicada en un proceso.'),
(510, 0, '556636670', '2013-04-18 23:01:57'),
(512, 0, '1452695908', 'biología'),
(513, 0, '650275612', '2013-04-19 22:27:55'),
(515, 0, '1054220447', '2013-04-19 22:34:32'),
(517, 0, '1725282031', '2013-04-19 22:37:05'),
(519, 0, '948464058', 'proveedor alimaña'),
(520, 0, '946142865', 'contacto del proveedor'),
(521, 0, '875479973', '2013-04-19 22:39:36'),
(523, 0, '2057335475', '2013-04-19 22:41:59'),
(525, 0, '592412469', 'relaciones interpersonales'),
(526, 0, '767101796', '2013-04-19 22:44:40'),
(528, 0, '1033495788', 'fundacion batuta'),
(529, 0, '1305991801', 'contacto fundacion batuta'),
(530, 0, '1438378428', '2013-04-19 22:47:08'),
(532, 0, '2112594731', 'textil'),
(533, 0, '1869462146', '2013-04-19 22:49:30'),
(535, 0, '840839620', 'bodega de insumos'),
(536, 0, '982976383', 'carrera 11 panamericana'),
(537, 0, '598515207', '2013-04-19 22:51:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yiikmap52_store_s2val`
--

CREATE TABLE IF NOT EXISTS `yiikmap52_store_s2val` (
  `id` mediumint(8) unsigned NOT NULL,
  `misc` tinyint(1) NOT NULL DEFAULT '0',
  `val_hash` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `val` text COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `vh` (`val_hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Volcado de datos para la tabla `yiikmap52_store_s2val`
--

INSERT INTO `yiikmap52_store_s2val` (`id`, `misc`, `val_hash`, `val`) VALUES
(2, 0, '1608862170', 'http://www.iana.org/domains/example/'),
(7, 0, '279415644', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Organizacion'),
(10, 0, '2123577302', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Proceso'),
(11, 0, '1621121790', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Competencia'),
(12, 0, '588002903', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Capital'),
(13, 0, '1603209752', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CompetenciaArea'),
(14, 0, '130667977', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CompetenciaTipo'),
(15, 0, '1733638308', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CompetenciaModelo'),
(16, 0, '31924901', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CompetenciaPerfil'),
(17, 0, '1838898230', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CapitalEstructural'),
(19, 0, '260525477', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CapitalHumano'),
(20, 0, '1122436865', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#CapitalRelacional'),
(21, 0, '850729640', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Intangible'),
(22, 0, '279660156', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Tangible'),
(23, 0, '882708605', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Accionista'),
(24, 0, '1233792432', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Empleado'),
(25, 0, '412346410', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Cliente'),
(26, 0, '1481947144', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#Proveedor'),
(27, 0, '1792918076', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#ejecuta'),
(31, 0, '447315516', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#concierne'),
(32, 0, '586397652', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#utiliza'),
(33, 0, '1247385065', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#especializa'),
(34, 0, '776121722', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#clasifica'),
(35, 0, '2106245048', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#categoria'),
(36, 0, '1483572078', 'http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#extraida'),
(38, 0, '745143070', 'http://universidad.edu/ontologias/ClassDefinitions#ClassOrganizacion'),
(39, 0, '1009548545', 'http://universidad.edu/ontologias/ClassDefinitions#ClassProceso'),
(40, 0, '1570849025', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCompetencia'),
(41, 0, '1639152770', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCapital'),
(42, 0, '1040383163', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCapitalEstructural'),
(43, 0, '619718328', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCapitalHumano'),
(44, 0, '1758771955', 'http://universidad.edu/ontologias/ClassDefinitions#ClassCapitalRelacional'),
(45, 0, '348442429', 'http://universidad.edu/ontologias/ClassDefinitions#ClassIntangible'),
(46, 0, '140426817', 'http://universidad.edu/ontologias/ClassDefinitions#ClassTangible'),
(47, 0, '1964632552', 'http://universidad.edu/ontologias/ClassDefinitions#id'),
(49, 0, '1628503648', 'http://universidad.edu/ontologias/ClassDefinitions#nombre'),
(51, 0, '1398343005', 'http://universidad.edu/ontologias/ClassDefinitions#descripcion'),
(52, 0, '1321197597', 'http://universidad.edu/ontologias/ClassDefinitions#created_at'),
(54, 0, '2041366100', 'http://universidad.edu/ontologias/ClassDefinitions#updated_at'),
(55, 0, '1871686719', 'http://universidad.edu/ontologias/ClassDefinitions#tipo'),
(56, 0, '1550812918', 'http://universidad.edu/ontologias/ClassDefinitions#contacto'),
(57, 0, '1140028125', 'http://universidad.edu/ontologias/ClassDefinitions#organizacion'),
(58, 0, '1941679235', 'http://universidad.edu/ontologias/ClassDefinitions#url'),
(59, 0, '270775982', 'http://universidad.edu/ontologias/ClassDefinitions#sector'),
(61, 0, '553170697', 'http://universidad.edu/ontologias/ClassDefinitions#version'),
(62, 0, '195015004', 'http://universidad.edu/ontologias/ClassDefinitions#objetivo'),
(63, 0, '1424871731', 'http://universidad.edu/ontologias/ClassDefinitions#capital_humano'),
(64, 0, '1420360960', 'http://universidad.edu/ontologias/ClassDefinitions#modelo'),
(65, 0, '840623871', 'http://universidad.edu/ontologias/ClassDefinitions#perfil'),
(66, 0, '935949296', 'http://universidad.edu/ontologias/ClassDefinitions#area'),
(68, 0, '1348936084', 'http://universidad.edu/ontologias/ClassDefinitions#capital'),
(69, 0, '2090034149', 'http://universidad.edu/ontologias/ClassDefinitions#un_capital'),
(70, 0, '919815110', 'http://universidad.edu/ontologias/ClassDefinitions#secundaria'),
(71, 0, '361139920', 'http://universidad.edu/ontologias/ClassDefinitions#afines'),
(72, 0, '394385113', 'http://universidad.edu/ontologias/ClassDefinitions#locacion'),
(67, 0, '1249938286', 'http://universidad.edu/ontologias/ClassDefinitions#ClassArea'),
(60, 0, '1427092736', 'http://universidad.edu/ontologias/ClassDefinitions#ClassSector'),
(74, 0, '1655839490', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-1'),
(84, 0, '71611720', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-2'),
(91, 0, '1933805010', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-3'),
(98, 0, '316206989', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-4'),
(103, 0, '1709170459', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-5'),
(110, 0, '53047647', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-6'),
(119, 0, '1949188553', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-7'),
(125, 0, '460235686', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-8'),
(132, 0, '1818858288', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-9'),
(140, 0, '448203798', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-10'),
(145, 0, '1840266368', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-11'),
(151, 0, '189174470', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-12'),
(157, 0, '2084676180', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-13'),
(164, 0, '500877327', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-14'),
(172, 0, '1792931993', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-15'),
(179, 0, '204166877', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-16'),
(185, 0, '2066507339', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-17'),
(191, 0, '342656036', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-18'),
(197, 0, '1668002994', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-19'),
(200, 0, '832200661', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-20'),
(205, 0, '1184722755', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-21'),
(81, 0, '554520985', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-1'),
(209, 0, '1207697373', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-2'),
(107, 0, '821874507', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-3'),
(195, 0, '1365746966', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-4'),
(230, 0, '643863936', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-5'),
(235, 0, '1083587526', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-6'),
(129, 0, '932252500', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-7'),
(243, 0, '1490151741', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-8'),
(247, 0, '802609579', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-9'),
(116, 0, '2099902864', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-10'),
(254, 0, '170838278', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-11'),
(189, 0, '1826121540', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-12'),
(262, 0, '467621846', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-13'),
(137, 0, '2051292553', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-14'),
(149, 0, '222498079', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-15'),
(278, 0, '1807065947', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-16'),
(161, 0, '481465293', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-17'),
(169, 0, '1945268642', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-18'),
(176, 0, '83181876', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-19'),
(299, 0, '1443146323', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-20'),
(305, 0, '884969234', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-1'),
(309, 0, '1380524372', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-2'),
(313, 0, '625873346', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-3'),
(317, 0, '1154841503', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-4'),
(319, 0, '869419785', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-5'),
(321, 0, '1428481357', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-6'),
(324, 0, '572773851', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-7'),
(330, 0, '1298347958', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-8'),
(335, 0, '979633956', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-9'),
(340, 0, '1281208274', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-10'),
(344, 0, '719069253', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-1'),
(348, 0, '1277857281', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-2'),
(351, 0, '992853655', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-3'),
(354, 0, '1521931468', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-4'),
(357, 0, '766633054', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-5'),
(360, 0, '1262963224', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-6'),
(362, 0, '1010858638', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-7'),
(365, 0, '1392548065', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-8'),
(369, 0, '604481655', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-9'),
(374, 0, '1463970054', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-10'),
(377, 0, '541415828', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-11'),
(381, 0, '1186199510', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-12'),
(385, 0, '833931072', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-13'),
(387, 0, '1345301789', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-14'),
(390, 0, '656973195', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-15'),
(393, 0, '1105081295', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-16'),
(397, 0, '920191833', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-17'),
(82, 0, '789990099', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-1'),
(108, 0, '1239475351', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-2'),
(96, 0, '1055380481', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-3'),
(89, 0, '1602010716', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-4'),
(210, 0, '679186122', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-5'),
(155, 0, '1317871760', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-6'),
(162, 0, '965349402', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-7'),
(170, 0, '1456140919', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-8'),
(177, 0, '567132897', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-9'),
(430, 0, '1637892713', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-1'),
(431, 0, '123137069', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-2'),
(432, 0, '1884413115', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-3'),
(433, 0, '298497768', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-4'),
(434, 0, '1724745330', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-5'),
(436, 0, '3876916', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-6'),
(438, 0, '2000427170', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-7'),
(442, 0, '410843853', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-8'),
(444, 0, '1870383707', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-9'),
(446, 0, '1708226949', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-10'),
(448, 0, '316033299', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-11'),
(450, 0, '1948313431', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-12'),
(453, 0, '52942785', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-13'),
(455, 0, '1656536478', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-14'),
(458, 0, '543932679', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-22'),
(464, 0, '547089340', 'http://universidad.edu/ontologias/SectorInstances#Sector-13'),
(468, 0, '553884357', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-21'),
(474, 0, '995794760', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-11'),
(477, 0, '359542394', 'http://universidad.edu/ontologias/TangibleInstances#Tangible-12'),
(482, 0, '379114453', 'http://universidad.edu/ontologias/IntangibleInstances#Intangible-6'),
(486, 0, '1503256888', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-18'),
(489, 0, '349287931', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-10'),
(496, 0, '364612876', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-15'),
(499, 0, '2127887997', 'http://universidad.edu/ontologias/CapitalInstances#Capital-17'),
(502, 0, '524168937', 'http://www.iana.org/domains/example'),
(503, 0, '1637868355', 'http://universidad.edu/ontologias/IntangibleInstances#Intangible-7'),
(506, 0, '1466757521', 'http://universidad.edu/ontologias/ProcesoInstances#Proceso-23'),
(511, 0, '1449621423', 'http://universidad.edu/ontologias/AreaInstances#Area-10'),
(514, 0, '294919188', 'http://universidad.edu/ontologias/CapitalInstances#Capital-18'),
(516, 0, '782160290', 'http://universidad.edu/ontologias/CapitalEstructuralInstances#CapitalEstructural-19'),
(518, 0, '1675003245', 'http://universidad.edu/ontologias/CapitalHumanoInstances#CapitalHumano-11'),
(522, 0, '1934435150', 'http://universidad.edu/ontologias/CapitalRelacionalInstances#CapitalRelacional-16'),
(524, 0, '1571565826', 'http://universidad.edu/ontologias/CompetenciaInstances#Competencia-12'),
(527, 0, '1207252097', 'http://universidad.edu/ontologias/OrganizacionInstances#Organizacion-22'),
(531, 0, '1090552295', 'http://universidad.edu/ontologias/SectorInstances#Sector-14'),
(534, 0, '1651056368', 'http://universidad.edu/ontologias/TangibleInstances#Tangible-13'),
(538, 0, '1413841558', 'http://example.iana.org');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yiikmap52_store_setting`
--

CREATE TABLE IF NOT EXISTS `yiikmap52_store_setting` (
  `k` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `val` text COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `k` (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yiikmap52_store_triple`
--

CREATE TABLE IF NOT EXISTS `yiikmap52_store_triple` (
  `t` mediumint(8) unsigned NOT NULL,
  `s` mediumint(8) unsigned NOT NULL,
  `p` mediumint(8) unsigned NOT NULL,
  `o` mediumint(8) unsigned NOT NULL,
  `o_lang_dt` mediumint(8) unsigned NOT NULL,
  `o_comp` char(35) COLLATE utf8_unicode_ci NOT NULL,
  `s_type` tinyint(1) NOT NULL DEFAULT '0',
  `o_type` tinyint(1) NOT NULL DEFAULT '0',
  `misc` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `t` (`t`),
  KEY `sp` (`s`,`p`),
  KEY `os` (`o`,`s`),
  KEY `po` (`p`,`o`),
  KEY `misc` (`misc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Volcado de datos para la tabla `yiikmap52_store_triple`
--

INSERT INTO `yiikmap52_store_triple` (`t`, `s`, `p`, `o`, `o_lang_dt`, `o_comp`, `s_type`, `o_type`, `misc`) VALUES
(1, 2, 3, 4, 5, 'Example-Domain', 0, 2, 0),
(2, 7, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(3, 10, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(4, 11, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(5, 12, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(6, 13, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(7, 14, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(8, 15, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(9, 16, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(10, 17, 18, 12, 5, 'http-universidad--izacional-Capital', 0, 0, 0),
(11, 19, 18, 12, 5, 'http-universidad--izacional-Capital', 0, 0, 0),
(12, 20, 18, 12, 5, 'http-universidad--izacional-Capital', 0, 0, 0),
(13, 21, 18, 17, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(14, 22, 18, 17, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(15, 23, 18, 19, 5, 'http-universidad--nal-CapitalHumano', 0, 0, 0),
(16, 24, 18, 19, 5, 'http-universidad--nal-CapitalHumano', 0, 0, 0),
(17, 25, 18, 19, 5, 'http-universidad--nal-CapitalHumano', 0, 0, 0),
(18, 26, 18, 19, 5, 'http-universidad--nal-CapitalHumano', 0, 0, 0),
(19, 27, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(20, 27, 29, 7, 5, 'http-universidad--onal-Organizacion', 0, 0, 0),
(21, 27, 30, 10, 5, 'http-universidad--izacional-Proceso', 0, 0, 0),
(22, 31, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(23, 31, 29, 7, 5, 'http-universidad--onal-Organizacion', 0, 0, 0),
(24, 31, 30, 11, 5, 'http-universidad--ional-Competencia', 0, 0, 0),
(25, 32, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(26, 32, 29, 7, 5, 'http-universidad--onal-Organizacion', 0, 0, 0),
(27, 32, 30, 12, 5, 'http-universidad--izacional-Capital', 0, 0, 0),
(28, 33, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(29, 33, 29, 11, 5, 'http-universidad--ional-Competencia', 0, 0, 0),
(30, 33, 30, 13, 5, 'http-universidad--l-CompetenciaArea', 0, 0, 0),
(31, 34, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(32, 34, 29, 11, 5, 'http-universidad--ional-Competencia', 0, 0, 0),
(33, 34, 30, 14, 5, 'http-universidad--l-CompetenciaTipo', 0, 0, 0),
(34, 35, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(35, 35, 29, 11, 5, 'http-universidad--ional-Competencia', 0, 0, 0),
(36, 35, 30, 15, 5, 'http-universidad--CompetenciaModelo', 0, 0, 0),
(37, 36, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(38, 36, 29, 11, 5, 'http-universidad--ional-Competencia', 0, 0, 0),
(39, 36, 30, 16, 5, 'http-universidad--CompetenciaPerfil', 0, 0, 0),
(40, 38, 8, 7, 5, 'http-universidad--onal-Organizacion', 0, 0, 0),
(41, 39, 8, 10, 5, 'http-universidad--izacional-Proceso', 0, 0, 0),
(42, 40, 8, 11, 5, 'http-universidad--ional-Competencia', 0, 0, 0),
(43, 41, 8, 12, 5, 'http-universidad--izacional-Capital', 0, 0, 0),
(44, 42, 8, 17, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(45, 43, 8, 19, 5, 'http-universidad--nal-CapitalHumano', 0, 0, 0),
(46, 44, 8, 20, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(47, 45, 8, 21, 5, 'http-universidad--cional-Intangible', 0, 0, 0),
(48, 46, 8, 22, 5, 'http-universidad--zacional-Tangible', 0, 0, 0),
(49, 47, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(50, 47, 30, 48, 5, 'http-www-w-org-XMLSchema-int', 0, 0, 0),
(51, 49, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(52, 49, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(53, 51, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(54, 51, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(55, 52, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(56, 52, 30, 53, 5, 'http-www-w-org-XMLSchema-dateTime', 0, 0, 0),
(57, 54, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(58, 54, 30, 53, 5, 'http-www-w-org-XMLSchema-dateTime', 0, 0, 0),
(59, 55, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(60, 55, 30, 48, 5, 'http-www-w-org-XMLSchema-int', 0, 0, 0),
(61, 56, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(62, 56, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(63, 57, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(64, 57, 30, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(65, 58, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(66, 58, 29, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(67, 58, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(68, 59, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(69, 59, 29, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(70, 59, 30, 60, 5, 'http-universidad--tions-ClassSector', 0, 0, 0),
(71, 61, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(72, 61, 29, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(73, 61, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(74, 62, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(75, 62, 29, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(76, 62, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(77, 63, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(78, 63, 29, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(79, 63, 30, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(80, 64, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(81, 64, 29, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(82, 64, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(83, 65, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(84, 65, 29, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(85, 65, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(86, 66, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(87, 66, 29, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(88, 66, 30, 67, 5, 'http-universidad--nitions-ClassArea', 0, 0, 0),
(89, 68, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(90, 68, 29, 41, 5, 'http-universidad--ions-ClassCapital', 0, 0, 0),
(91, 68, 30, 48, 5, 'http-www-w-org-XMLSchema-int', 0, 0, 0),
(92, 69, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(93, 69, 29, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(94, 69, 30, 48, 5, 'http-www-w-org-XMLSchema-int', 0, 0, 0),
(95, 70, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(96, 70, 29, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(97, 70, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(98, 71, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(99, 71, 29, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(100, 71, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(101, 72, 8, 28, 5, 'http-www-w-org-rd-yntax-ns-Property', 0, 0, 0),
(102, 72, 29, 46, 5, 'http-universidad--ons-ClassTangible', 0, 0, 0),
(103, 72, 30, 50, 5, 'http-www-w-org-XMLSchema-string', 0, 0, 0),
(104, 67, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(105, 60, 8, 9, 5, 'http-www-w-org-rdf-schema-Class', 0, 0, 0),
(106, 74, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(107, 74, 47, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(108, 74, 61, 77, 5, '+000000000000000001.000000000000000', 0, 2, 0),
(109, 74, 49, 78, 5, 'diligenciar-formulario', 0, 2, 0),
(110, 74, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(111, 74, 62, 79, 5, 'dilegenciar-la-in-un-formulario-web', 0, 2, 0),
(112, 74, 80, 81, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(113, 74, 63, 82, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(114, 74, 52, 83, 5, '-', 0, 2, 0),
(115, 74, 54, 83, 5, '-', 0, 2, 0),
(116, 84, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(117, 84, 47, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(118, 84, 61, 86, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(119, 84, 49, 87, 5, 'Entrevistar-capital-humano', 0, 2, 0),
(120, 84, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(121, 84, 62, 88, 5, 'Ciertos-procesos--la-organización-', 0, 2, 0),
(122, 84, 80, 81, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(123, 84, 63, 89, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(124, 84, 52, 90, 5, '-', 0, 2, 0),
(125, 84, 54, 90, 5, '-', 0, 2, 0),
(126, 91, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(127, 91, 47, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(128, 91, 61, 86, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(129, 91, 49, 93, 5, 'Admisiones-y-matrículas-', 0, 2, 0),
(130, 91, 55, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(131, 91, 62, 95, 5, 'Proceso-para-ejec--la-institución-', 0, 2, 0),
(132, 91, 80, 81, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(133, 91, 63, 96, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(134, 91, 52, 97, 5, '-', 0, 2, 0),
(135, 91, 54, 97, 5, '-', 0, 2, 0),
(136, 98, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(137, 98, 47, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(138, 98, 61, 86, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(139, 98, 49, 99, 5, 'Admisiones-y-registro-', 0, 2, 0),
(140, 98, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(141, 98, 62, 100, 5, 'Comprobar-y-o-ver--los-estudiantes-', 0, 2, 0),
(142, 98, 80, 81, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(143, 98, 63, 82, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(144, 98, 52, 101, 5, '-', 0, 2, 0),
(145, 98, 54, 102, 5, '-', 0, 2, 0),
(146, 103, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(147, 103, 47, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(148, 103, 61, 86, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(149, 103, 49, 105, 5, 'Embotellar-lote-', 0, 2, 0),
(150, 103, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(151, 103, 62, 106, 5, 'Activar-el-embote--lote-de-bebidas-', 0, 2, 0),
(152, 103, 80, 107, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(153, 103, 63, 108, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(154, 103, 52, 109, 5, '-', 0, 2, 0),
(155, 103, 54, 109, 5, '-', 0, 2, 0),
(156, 110, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(157, 110, 47, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(158, 110, 61, 112, 5, 'v-', 0, 2, 0),
(159, 110, 49, 113, 5, 'despachar-pedido', 0, 2, 0),
(160, 110, 55, 114, 76, '+000000000000000007.000000000000000', 0, 2, 0),
(161, 110, 62, 115, 5, 'Empacar-despachar-ote-de-productos-', 0, 2, 0),
(162, 110, 80, 116, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(163, 110, 63, 89, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(164, 110, 52, 117, 5, '-', 0, 2, 0),
(165, 110, 54, 118, 5, '-', 0, 2, 0),
(166, 119, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(167, 119, 47, 114, 76, '+000000000000000007.000000000000000', 0, 2, 0),
(168, 119, 61, 120, 5, '+000000000000000000.100000000000000', 0, 2, 0),
(169, 119, 49, 121, 5, 'Hacer-inventario', 0, 2, 0),
(170, 119, 55, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(171, 119, 62, 122, 5, 'Inventariar-los-r-la-organización-', 0, 2, 0),
(172, 119, 80, 81, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(173, 119, 63, 82, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(174, 119, 52, 123, 5, '-', 0, 2, 0),
(175, 119, 54, 124, 5, '-', 0, 2, 0),
(176, 125, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(177, 125, 47, 126, 76, '+000000000000000008.000000000000000', 0, 2, 0),
(178, 125, 61, 120, 5, '+000000000000000000.100000000000000', 0, 2, 0),
(179, 125, 49, 127, 5, 'Asignar-recursos', 0, 2, 0),
(180, 125, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(181, 125, 62, 128, 5, 'Asignar-recursos--o-capital-humano-', 0, 2, 0),
(182, 125, 80, 129, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(183, 125, 63, 108, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(184, 125, 52, 130, 5, '-', 0, 2, 0),
(185, 125, 54, 131, 5, '-', 0, 2, 0),
(186, 132, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(187, 132, 47, 133, 76, '+000000000000000009.000000000000000', 0, 2, 0),
(188, 132, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(189, 132, 49, 135, 5, 'Probado-de-entidades-y-modelos-', 0, 2, 0),
(190, 132, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(191, 132, 62, 136, 5, 'Probar-las-entidades-del-SI-', 0, 2, 0),
(192, 132, 80, 137, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(193, 132, 63, 82, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(194, 132, 52, 138, 5, '-', 0, 2, 0),
(195, 132, 54, 139, 5, '-', 0, 2, 0),
(196, 140, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(197, 140, 47, 141, 76, '+000000000000000010.000000000000000', 0, 2, 0),
(198, 140, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(199, 140, 49, 142, 5, 'Instalación-de-SI-', 0, 2, 0),
(200, 140, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(201, 140, 62, 143, 5, 'Instalar-el-SI-de-e-de-planeación-', 0, 2, 0),
(202, 140, 80, 137, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(203, 140, 63, 108, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(204, 140, 52, 144, 5, '-', 0, 2, 0),
(205, 140, 54, 144, 5, '-', 0, 2, 0),
(206, 145, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(207, 145, 47, 146, 76, '+000000000000000011.000000000000000', 0, 2, 0),
(208, 145, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(209, 145, 49, 147, 5, 'refinamiento-de-la-implementación', 0, 2, 0),
(210, 145, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(211, 145, 62, 148, 5, 'optimizar-el-SI-en-desarrollo-', 0, 2, 0),
(212, 145, 80, 149, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(213, 145, 63, 96, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(214, 145, 52, 150, 5, '-', 0, 2, 0),
(215, 145, 54, 150, 5, '-', 0, 2, 0),
(216, 151, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(217, 151, 47, 152, 76, '+000000000000000012.000000000000000', 0, 2, 0),
(218, 151, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(219, 151, 49, 153, 5, 'crear-carta-del-proyecto', 0, 2, 0),
(220, 151, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(221, 151, 62, 154, 5, 'definición-de-la-ial-del-proyecto-', 0, 2, 0),
(222, 151, 80, 149, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(223, 151, 63, 155, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(224, 151, 52, 156, 5, '-', 0, 2, 0),
(225, 151, 54, 156, 5, '-', 0, 2, 0),
(226, 157, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(227, 157, 47, 158, 76, '+000000000000000013.000000000000000', 0, 2, 0),
(228, 157, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(229, 157, 49, 159, 5, 'gestionar-proyecto', 0, 2, 0),
(230, 157, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(231, 157, 62, 160, 5, 'plantear-el-bosqu-llo-del-proyecto-', 0, 2, 0),
(232, 157, 80, 161, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(233, 157, 63, 162, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(234, 157, 52, 163, 5, '-', 0, 2, 0),
(235, 157, 54, 163, 5, '-', 0, 2, 0),
(236, 164, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(237, 164, 47, 165, 76, '+000000000000000014.000000000000000', 0, 2, 0),
(238, 164, 61, 166, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(239, 164, 49, 167, 5, 'iniciar-bobina-madre', 0, 2, 0),
(240, 164, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(241, 164, 62, 168, 5, 'determina-uno-de--dora-de-energía-', 0, 2, 0),
(242, 164, 80, 169, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(243, 164, 63, 170, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(244, 164, 52, 171, 5, '-', 0, 2, 0),
(245, 164, 54, 171, 5, '-', 0, 2, 0),
(246, 172, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(247, 172, 47, 173, 76, '+000000000000000015.000000000000000', 0, 2, 0),
(248, 172, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(249, 172, 49, 174, 5, 'formar-instructores', 0, 2, 0),
(250, 172, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(251, 172, 62, 175, 5, 'formar-a-los-jefe-as-de-pedagogía-', 0, 2, 0),
(252, 172, 80, 176, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(253, 172, 63, 177, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(254, 172, 52, 178, 5, '-', 0, 2, 0),
(255, 172, 54, 178, 5, '-', 0, 2, 0),
(256, 179, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(257, 179, 47, 180, 76, '+000000000000000016.000000000000000', 0, 2, 0),
(258, 179, 61, 181, 5, '+000000000000000001.000000000000000', 0, 2, 0),
(259, 179, 49, 182, 5, 'hacer-diagrama-de-gantt', 0, 2, 0),
(260, 179, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(261, 179, 62, 183, 5, 'diseñar-el-crono-iagrama-de-gantt-', 0, 2, 0),
(262, 179, 80, 176, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(263, 179, 63, 177, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(264, 179, 52, 184, 5, '-', 0, 2, 0),
(265, 179, 54, 184, 5, '-', 0, 2, 0),
(266, 185, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(267, 185, 47, 186, 76, '+000000000000000017.000000000000000', 0, 2, 0),
(268, 185, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(269, 185, 49, 187, 5, 'desplegar-grafo', 0, 2, 0),
(270, 185, 55, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(271, 185, 62, 188, 5, 'técnica-para-des-dad-seleccionada-', 0, 2, 0),
(272, 185, 80, 189, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(273, 185, 63, 177, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(274, 185, 52, 190, 5, '-', 0, 2, 0),
(275, 185, 54, 190, 5, '-', 0, 2, 0),
(276, 191, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(277, 191, 47, 192, 76, '+000000000000000018.000000000000000', 0, 2, 0),
(278, 191, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(279, 191, 49, 193, 5, 'hacer-backup', 0, 2, 0),
(280, 191, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(281, 191, 62, 194, 5, 'hacer-copia-de-re-ación-relevante-', 0, 2, 0),
(282, 191, 80, 195, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(283, 191, 63, 170, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(284, 191, 52, 196, 5, '-', 0, 2, 0),
(285, 191, 54, 196, 5, '-', 0, 2, 0),
(286, 197, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(287, 197, 47, 198, 76, '+000000000000000019.000000000000000', 0, 2, 0),
(288, 197, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(289, 197, 49, 193, 5, 'hacer-backup', 0, 2, 0),
(290, 197, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(291, 197, 62, 194, 5, 'hacer-copia-de-re-ación-relevante-', 0, 2, 0),
(292, 197, 80, 195, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(293, 197, 63, 170, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(294, 197, 52, 199, 5, '-', 0, 2, 0),
(295, 197, 54, 199, 5, '-', 0, 2, 0),
(316, 81, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(317, 81, 47, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(318, 81, 49, 212, 5, 'universidad-de-caldas', 0, 2, 0),
(319, 81, 56, 213, 5, 'Sede-Principal-Ca--Línea-gratuita-', 0, 2, 0),
(320, 81, 58, 214, 5, 'http-ucaldas-edu-co-', 0, 2, 0),
(321, 81, 59, 215, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(322, 81, 51, 216, 5, 'Universidad-de-Ca-del-conocimiento-', 0, 2, 0),
(323, 81, 52, 217, 5, '-', 0, 2, 0),
(324, 81, 54, 5, 5, '', 0, 2, 0),
(325, 209, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(326, 209, 47, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(327, 209, 49, 218, 5, 'fundicion-fonseca-ltda', 0, 2, 0),
(328, 209, 56, 219, 5, 'Calle-no-MANIZALES', 0, 2, 0),
(329, 209, 58, 5, 5, '', 0, 2, 0),
(330, 209, 59, 220, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(331, 209, 51, 221, 5, 'Fundición-de-pro-ro-por-fundición', 0, 2, 0),
(332, 209, 52, 217, 5, '-', 0, 2, 0),
(333, 209, 54, 5, 5, '', 0, 2, 0),
(334, 107, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(335, 107, 47, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(336, 107, 49, 222, 5, 'postobón-s-a-', 0, 2, 0),
(337, 107, 56, 223, 5, 'Medellín-Colombia', 0, 2, 0),
(338, 107, 58, 224, 5, 'http-www-postobon-com-', 0, 2, 0),
(339, 107, 59, 225, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(340, 107, 51, 5, 5, '', 0, 2, 0),
(341, 107, 52, 217, 5, '-', 0, 2, 0),
(342, 107, 54, 5, 5, '', 0, 2, 0),
(343, 195, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(344, 195, 47, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(345, 195, 49, 226, 5, 'industria-de-alimentos-zenú-s-a-', 0, 2, 0),
(346, 195, 56, 227, 5, 'Carrera-C-Tel-Medellín-Colombia', 0, 2, 0),
(347, 195, 58, 228, 5, 'http-www-zenu-com-co-', 0, 2, 0),
(348, 195, 59, 229, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(349, 195, 51, 5, 5, '', 0, 2, 0),
(350, 195, 52, 217, 5, '-', 0, 2, 0),
(351, 195, 54, 5, 5, '', 0, 2, 0),
(352, 230, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(353, 230, 47, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(354, 230, 49, 231, 5, 'unitec', 0, 2, 0),
(355, 230, 56, 232, 5, 'Calle-No-PBX-Bogotá-Colombia', 0, 2, 0),
(356, 230, 58, 233, 5, 'http-www-unitec-edu-co-', 0, 2, 0),
(357, 230, 59, 215, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(358, 230, 51, 234, 5, 'Corporación-Universitaria-Unitec', 0, 2, 0),
(359, 230, 52, 217, 5, '-', 0, 2, 0),
(360, 230, 54, 5, 5, '', 0, 2, 0),
(361, 235, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(362, 235, 47, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(363, 235, 49, 236, 5, 'foncaldas', 0, 2, 0),
(364, 235, 56, 237, 5, 'PBX-FAX-NIT-Cll-Manizales-Colombia', 0, 2, 0),
(365, 235, 58, 238, 5, 'http-www-foncaldas-com-', 0, 2, 0),
(366, 235, 59, 215, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(367, 235, 51, 239, 5, 'Fondo-de-Empleado-rsidad-de-Caldas-', 0, 2, 0),
(368, 235, 52, 217, 5, '-', 0, 2, 0),
(369, 235, 54, 5, 5, '', 0, 2, 0),
(370, 129, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(371, 129, 47, 114, 76, '+000000000000000007.000000000000000', 0, 2, 0),
(372, 129, 49, 240, 5, 'universidad-autónoma-de-manizales', 0, 2, 0),
(373, 129, 56, 241, 5, 'Teléfono-Fax-Lí-s-Caldas-Colombia', 0, 2, 0),
(374, 129, 58, 242, 5, 'http-www-autonoma-edu-co-', 0, 2, 0),
(375, 129, 59, 215, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(376, 129, 51, 5, 5, '', 0, 2, 0),
(377, 129, 52, 217, 5, '-', 0, 2, 0),
(378, 129, 54, 5, 5, '', 0, 2, 0),
(379, 243, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(380, 243, 47, 126, 76, '+000000000000000008.000000000000000', 0, 2, 0),
(381, 243, 49, 244, 5, 'universidad-de-manizales', 0, 2, 0),
(382, 243, 56, 245, 5, 'Cra-a-No-Manizales-Colombia-Tel-', 0, 2, 0),
(383, 243, 58, 246, 5, 'http-www-umanizales-edu-co-', 0, 2, 0),
(384, 243, 59, 215, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(385, 243, 51, 5, 5, '', 0, 2, 0),
(386, 243, 52, 217, 5, '-', 0, 2, 0),
(387, 243, 54, 5, 5, '', 0, 2, 0),
(388, 247, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(389, 247, 47, 133, 76, '+000000000000000009.000000000000000', 0, 2, 0),
(390, 247, 49, 248, 5, 'universidad-católica-de-manizales', 0, 2, 0),
(391, 247, 56, 249, 5, 'Carrera-No-PBX-FAX-', 0, 2, 0),
(392, 247, 58, 250, 5, 'http-www-ucm-edu-co-', 0, 2, 0),
(393, 247, 59, 215, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(394, 247, 51, 5, 5, '', 0, 2, 0),
(395, 247, 52, 217, 5, '-', 0, 2, 0),
(396, 247, 54, 5, 5, '', 0, 2, 0),
(397, 116, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(398, 116, 47, 141, 76, '+000000000000000010.000000000000000', 0, 2, 0),
(399, 116, 49, 251, 5, 'universidad-nacional-de-colombia', 0, 2, 0),
(400, 116, 56, 252, 5, 'Carrera-No-Edific-otá-D-C-Colombia', 0, 2, 0),
(401, 116, 58, 253, 5, 'http-www-unal-edu-co-index-html', 0, 2, 0),
(402, 116, 59, 215, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(403, 116, 51, 5, 5, '', 0, 2, 0),
(404, 116, 52, 217, 5, '-', 0, 2, 0),
(405, 116, 54, 5, 5, '', 0, 2, 0),
(406, 254, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(407, 254, 47, 146, 76, '+000000000000000011.000000000000000', 0, 2, 0),
(408, 254, 49, 255, 5, 'universidad-nacio-ia-sede-manizales', 0, 2, 0),
(409, 254, 56, 256, 5, 'Cra-Manizales-Cal-ombia-Línea-PBX-', 0, 2, 0),
(410, 254, 58, 257, 5, 'http-www-manizales-unal-edu-co-', 0, 2, 0),
(411, 254, 59, 215, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(412, 254, 51, 5, 5, '', 0, 2, 0),
(413, 254, 52, 217, 5, '-', 0, 2, 0),
(414, 254, 54, 5, 5, '', 0, 2, 0),
(415, 189, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(416, 189, 47, 152, 76, '+000000000000000012.000000000000000', 0, 2, 0),
(417, 189, 49, 258, 5, 'Hamburguesas-El-Corral-', 0, 2, 0),
(418, 189, 56, 259, 5, 'Calle-Tel-', 0, 2, 0),
(419, 189, 58, 260, 5, 'http-elcorral-info', 0, 2, 0),
(420, 189, 59, 229, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(421, 189, 51, 261, 5, 'Hambuguesas-El-Co-comidas-rápidas-', 0, 2, 0),
(422, 189, 52, 217, 5, '-', 0, 2, 0),
(423, 189, 54, 5, 5, '', 0, 2, 0),
(424, 262, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(425, 262, 47, 158, 76, '+000000000000000013.000000000000000', 0, 2, 0),
(426, 262, 49, 263, 5, 'Coca-Cola', 0, 2, 0),
(427, 262, 56, 264, 5, 'K-', 0, 2, 0),
(428, 262, 58, 265, 5, 'http-www-coca-cola-com-index-jsp', 0, 2, 0),
(429, 262, 59, 225, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(430, 262, 51, 266, 5, 'Industrias-Coca-C-ia-internacional-', 0, 2, 0),
(431, 262, 52, 217, 5, '-', 0, 2, 0),
(432, 262, 54, 5, 5, '', 0, 2, 0),
(433, 137, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(434, 137, 47, 165, 76, '+000000000000000014.000000000000000', 0, 2, 0),
(435, 137, 49, 267, 5, 'EDI-Escuela-De-Ingeniería-', 0, 2, 0),
(436, 137, 56, 268, 5, 'Av-Santander-', 0, 2, 0),
(437, 137, 58, 269, 5, 'http-www-edi-com-co', 0, 2, 0),
(438, 137, 59, 215, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(439, 137, 51, 270, 5, 'Centro-de-formación-técnica-', 0, 2, 0),
(440, 137, 52, 271, 5, '-', 0, 2, 0),
(441, 137, 54, 272, 5, '-', 0, 2, 0),
(442, 149, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(443, 149, 47, 173, 76, '+000000000000000015.000000000000000', 0, 2, 0),
(444, 149, 49, 273, 5, 'EntregaYA-S-A-S-', 0, 2, 0),
(445, 149, 56, 274, 5, 'Línea-gratuita-a--nacional-ENTREGA', 0, 2, 0),
(446, 149, 58, 5, 5, '', 0, 2, 0),
(447, 149, 59, 275, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(448, 149, 51, 276, 5, 'Compañía-afilia-ción-al-cliente-', 0, 2, 0),
(449, 149, 52, 277, 5, '-', 0, 2, 0),
(450, 149, 54, 277, 5, '-', 0, 2, 0),
(451, 278, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(452, 278, 47, 180, 76, '+000000000000000016.000000000000000', 0, 2, 0),
(453, 278, 49, 279, 5, 'Drogas-La-Rebaja-', 0, 2, 0),
(454, 278, 56, 280, 5, 'Carrera-Tel-', 0, 2, 0),
(455, 278, 58, 5, 5, '', 0, 2, 0),
(456, 278, 59, 281, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(457, 278, 51, 5, 5, '', 0, 2, 0),
(458, 278, 52, 282, 5, '-', 0, 2, 0),
(459, 278, 54, 282, 5, '-', 0, 2, 0),
(460, 161, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(461, 161, 47, 186, 76, '+000000000000000017.000000000000000', 0, 2, 0),
(462, 161, 49, 283, 5, 'coltejer', 0, 2, 0),
(463, 161, 56, 284, 5, 'av-libertadores-', 0, 2, 0),
(464, 161, 58, 285, 5, 'http-coltejer-com', 0, 2, 0),
(465, 161, 59, 286, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(466, 161, 51, 287, 5, 'La-empresa-Coltej-aliza-en-tejidos-', 0, 2, 0),
(467, 161, 52, 288, 5, '-', 0, 2, 0),
(468, 161, 54, 288, 5, '-', 0, 2, 0),
(469, 169, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(470, 169, 47, 192, 76, '+000000000000000018.000000000000000', 0, 2, 0),
(471, 169, 49, 289, 5, 'ISA', 0, 2, 0),
(472, 169, 56, 290, 5, 'Colombia-Valle-del-Cauca-Cali', 0, 2, 0),
(473, 169, 58, 291, 5, 'http-isa-com', 0, 2, 0),
(474, 169, 59, 292, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(475, 169, 51, 293, 5, 'ISA-es-una-empres-rgía-eléctrica-', 0, 2, 0),
(476, 169, 52, 294, 5, '-', 0, 2, 0),
(477, 169, 54, 294, 5, '-', 0, 2, 0),
(478, 176, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(479, 176, 47, 198, 76, '+000000000000000019.000000000000000', 0, 2, 0),
(480, 176, 49, 295, 5, 'ecopetrol', 0, 2, 0),
(481, 176, 56, 296, 5, 'colombia-guajira-rioacha', 0, 2, 0),
(482, 176, 58, 297, 5, 'http-ecopetrol-com', 0, 2, 0),
(483, 176, 59, 292, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(484, 176, 51, 5, 5, '', 0, 2, 0),
(485, 176, 52, 298, 5, '-', 0, 2, 0),
(486, 176, 54, 298, 5, '-', 0, 2, 0),
(487, 299, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(488, 299, 47, 201, 76, '+000000000000000020.000000000000000', 0, 2, 0),
(489, 299, 49, 300, 5, 'European-IT', 0, 2, 0),
(490, 299, 56, 301, 5, 'Langley-Street-Tel-', 0, 2, 0),
(491, 299, 58, 302, 5, 'http-www-european-it', 0, 2, 0),
(492, 299, 59, 275, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(493, 299, 51, 303, 5, 'Empresa-europea-e-utsourcing-de-TI-', 0, 2, 0),
(494, 299, 52, 304, 5, '-', 0, 2, 0),
(495, 299, 54, 304, 5, '-', 0, 2, 0),
(496, 305, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(497, 305, 47, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(498, 305, 49, 306, 5, 'lenguajes-de-programacion', 0, 2, 0),
(499, 305, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(500, 305, 64, 94, 5, '+000000000000000004.000000000000000', 0, 2, 0),
(501, 305, 65, 5, 5, '', 0, 2, 0),
(502, 305, 66, 307, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(503, 305, 51, 308, 5, 'Conocimiento-en-l-de-programación-', 0, 2, 0),
(504, 305, 52, 217, 5, '-', 0, 2, 0),
(505, 305, 54, 5, 5, '', 0, 2, 0),
(506, 309, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(507, 309, 47, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(508, 309, 49, 310, 5, 'modelado-de-datos', 0, 2, 0),
(509, 309, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(510, 309, 64, 94, 5, '+000000000000000004.000000000000000', 0, 2, 0),
(511, 309, 65, 5, 5, '', 0, 2, 0),
(512, 309, 66, 311, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(513, 309, 51, 312, 5, 'Conocimiento-en-b-e-bases-de-datos-', 0, 2, 0),
(514, 309, 52, 217, 5, '-', 0, 2, 0),
(515, 309, 54, 5, 5, '', 0, 2, 0),
(516, 313, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(517, 313, 47, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(518, 313, 49, 314, 5, 'proactivo', 0, 2, 0),
(519, 313, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(520, 313, 64, 92, 5, '+000000000000000003.000000000000000', 0, 2, 0),
(521, 313, 65, 5, 5, '', 0, 2, 0),
(522, 313, 66, 315, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(523, 313, 51, 316, 5, 'Se-destaca-su-apo-blemas-de-equipo-', 0, 2, 0),
(524, 313, 52, 217, 5, '-', 0, 2, 0),
(525, 313, 54, 5, 5, '', 0, 2, 0),
(526, 317, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(527, 317, 47, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(528, 317, 49, 318, 5, 'flexibilidad', 0, 2, 0),
(529, 317, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(530, 317, 64, 92, 5, '+000000000000000003.000000000000000', 0, 2, 0),
(531, 317, 65, 5, 5, '', 0, 2, 0),
(532, 317, 66, 315, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(533, 317, 51, 316, 5, 'Se-destaca-su-apo-blemas-de-equipo-', 0, 2, 0),
(534, 317, 52, 217, 5, '-', 0, 2, 0),
(535, 317, 54, 5, 5, '', 0, 2, 0),
(536, 319, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(537, 319, 47, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(538, 319, 49, 320, 5, 'iniciativa', 0, 2, 0),
(539, 319, 55, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(540, 319, 64, 85, 5, '+000000000000000002.000000000000000', 0, 2, 0),
(541, 319, 65, 5, 5, '', 0, 2, 0),
(542, 319, 66, 315, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(543, 319, 51, 316, 5, 'Se-destaca-su-apo-blemas-de-equipo-', 0, 2, 0),
(544, 319, 52, 217, 5, '-', 0, 2, 0),
(545, 319, 54, 5, 5, '', 0, 2, 0),
(546, 321, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(547, 321, 47, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(548, 321, 49, 322, 5, 'dedicación', 0, 2, 0),
(549, 321, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(550, 321, 64, 94, 5, '+000000000000000004.000000000000000', 0, 2, 0),
(551, 321, 65, 5, 5, '', 0, 2, 0),
(552, 321, 66, 315, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(553, 321, 51, 5, 5, '', 0, 2, 0),
(554, 321, 52, 323, 5, '-', 0, 2, 0),
(555, 321, 54, 323, 5, '-', 0, 2, 0),
(556, 324, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(557, 324, 47, 114, 76, '+000000000000000007.000000000000000', 0, 2, 0),
(558, 324, 49, 325, 5, 'resolución-de-problemas', 0, 2, 0),
(559, 324, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(560, 324, 64, 75, 5, '+000000000000000001.000000000000000', 0, 2, 0),
(561, 324, 65, 5, 5, '', 0, 2, 0),
(562, 324, 66, 326, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(563, 324, 51, 327, 5, 'Ejecuta-acciones--olver-conflictos-', 0, 2, 0),
(564, 324, 52, 328, 5, '-', 0, 2, 0),
(565, 324, 54, 329, 5, '-', 0, 2, 0),
(566, 330, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(567, 330, 47, 126, 76, '+000000000000000008.000000000000000', 0, 2, 0),
(568, 330, 49, 331, 5, 'liderazgo', 0, 2, 0),
(569, 330, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(570, 330, 64, 94, 5, '+000000000000000004.000000000000000', 0, 2, 0),
(571, 330, 65, 332, 5, 'http-comptencias-ucaldaskmap-perfil', 0, 2, 0),
(572, 330, 66, 315, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(573, 330, 51, 333, 5, 'el-individuo-demu-uipos-de-trabajo-', 0, 2, 0),
(574, 330, 52, 334, 5, '-', 0, 2, 0),
(575, 330, 54, 334, 5, '-', 0, 2, 0),
(576, 335, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(577, 335, 47, 133, 76, '+000000000000000009.000000000000000', 0, 2, 0),
(578, 335, 49, 336, 5, 'tecnica-operativa', 0, 2, 0),
(579, 335, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(580, 335, 64, 92, 5, '+000000000000000003.000000000000000', 0, 2, 0),
(581, 335, 65, 332, 5, 'http-comptencias-ucaldaskmap-perfil', 0, 2, 0),
(582, 335, 66, 337, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(583, 335, 51, 338, 5, 'tecnico-con-conoc--infraestructura-', 0, 2, 0),
(584, 335, 52, 339, 5, '-', 0, 2, 0),
(585, 335, 54, 339, 5, '-', 0, 2, 0),
(586, 340, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(587, 340, 47, 141, 76, '+000000000000000010.000000000000000', 0, 2, 0),
(588, 340, 49, 341, 5, 'idiomas', 0, 2, 0),
(589, 340, 55, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(590, 340, 64, 85, 5, '+000000000000000002.000000000000000', 0, 2, 0),
(591, 340, 65, 332, 5, 'http-comptencias-ucaldaskmap-perfil', 0, 2, 0),
(592, 340, 66, 342, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(593, 340, 51, 5, 5, '', 0, 2, 0),
(594, 340, 52, 343, 5, '-', 0, 2, 0),
(595, 340, 54, 343, 5, '-', 0, 2, 0),
(596, 344, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(597, 344, 47, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(598, 344, 49, 345, 5, 'computador', 0, 2, 0),
(599, 344, 51, 346, 5, 'Equipo-de-cómputo-', 0, 2, 0),
(600, 344, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(601, 344, 69, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(602, 344, 52, 347, 5, '-', 0, 2, 0),
(603, 344, 54, 5, 5, '', 0, 2, 0),
(604, 348, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(605, 348, 47, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(606, 348, 49, 349, 5, 'sala', 0, 2, 0),
(607, 348, 51, 350, 5, 'Sala-para-reuniones-', 0, 2, 0),
(608, 348, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(609, 348, 69, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(610, 348, 52, 347, 5, '-', 0, 2, 0),
(611, 348, 54, 5, 5, '', 0, 2, 0),
(612, 351, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(613, 351, 47, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(614, 351, 49, 352, 5, 'embotelladora', 0, 2, 0),
(615, 351, 51, 353, 5, 'Maquina-embotelladora-de-bebidas-', 0, 2, 0),
(616, 351, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(617, 351, 69, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(618, 351, 52, 347, 5, '-', 0, 2, 0),
(619, 351, 54, 5, 5, '', 0, 2, 0),
(620, 354, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(621, 354, 47, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(622, 354, 49, 355, 5, 'empacadora', 0, 2, 0),
(623, 354, 51, 356, 5, 'Maquina-empacador-ora-de-productos-', 0, 2, 0),
(624, 354, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(625, 354, 69, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(626, 354, 52, 347, 5, '-', 0, 2, 0),
(627, 354, 54, 5, 5, '', 0, 2, 0),
(628, 357, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(629, 357, 47, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(630, 357, 49, 358, 5, 'asignación-de-tiempo', 0, 2, 0),
(631, 357, 51, 5, 5, '', 0, 2, 0),
(632, 357, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(633, 357, 69, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(634, 357, 52, 359, 5, '-', 0, 2, 0),
(635, 357, 54, 359, 5, '-', 0, 2, 0),
(636, 360, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(637, 360, 47, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(638, 360, 49, 345, 5, 'computador', 0, 2, 0),
(639, 360, 51, 5, 5, '', 0, 2, 0),
(640, 360, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(641, 360, 69, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(642, 360, 52, 361, 5, '-', 0, 2, 0),
(643, 360, 54, 361, 5, '-', 0, 2, 0),
(644, 362, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(645, 362, 47, 114, 76, '+000000000000000007.000000000000000', 0, 2, 0),
(646, 362, 49, 363, 5, 'SI-KMap', 0, 2, 0),
(647, 362, 51, 5, 5, '', 0, 2, 0),
(648, 362, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(649, 362, 69, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(650, 362, 52, 364, 5, '-', 0, 2, 0),
(651, 362, 54, 364, 5, '-', 0, 2, 0),
(652, 365, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(653, 365, 47, 126, 76, '+000000000000000008.000000000000000', 0, 2, 0),
(654, 365, 49, 366, 5, 'Sala-de-conferencias', 0, 2, 0),
(655, 365, 51, 367, 5, 'sala-de-conferenc-dar-capacitación', 0, 2, 0),
(656, 365, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(657, 365, 69, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(658, 365, 52, 368, 5, '-', 0, 2, 0),
(659, 365, 54, 368, 5, '-', 0, 2, 0),
(660, 369, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(661, 369, 47, 133, 76, '+000000000000000009.000000000000000', 0, 2, 0),
(662, 369, 49, 370, 5, 'Horario', 0, 2, 0),
(663, 369, 51, 371, 5, 'Horario-de-diplomado-y-cursos-', 0, 2, 0),
(664, 369, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(665, 369, 69, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(666, 369, 52, 372, 5, '-', 0, 2, 0),
(667, 369, 54, 373, 5, '-', 0, 2, 0),
(668, 374, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(669, 374, 47, 141, 76, '+000000000000000010.000000000000000', 0, 2, 0),
(670, 374, 49, 375, 5, 'recurso-software-oficina', 0, 2, 0),
(671, 374, 51, 5, 5, '', 0, 2, 0),
(672, 374, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(673, 374, 69, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(674, 374, 52, 376, 5, '-', 0, 2, 0),
(675, 374, 54, 376, 5, '-', 0, 2, 0),
(676, 377, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(677, 377, 47, 146, 76, '+000000000000000011.000000000000000', 0, 2, 0),
(678, 377, 49, 378, 5, 'recurso-software-ERP', 0, 2, 0),
(679, 377, 51, 5, 5, '', 0, 2, 0),
(680, 377, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(681, 377, 69, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(682, 377, 52, 379, 5, '-', 0, 2, 0),
(683, 377, 54, 380, 5, '-', 0, 2, 0),
(684, 381, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(685, 381, 47, 152, 76, '+000000000000000012.000000000000000', 0, 2, 0),
(686, 381, 49, 382, 5, 'servidor-PBX', 0, 2, 0),
(687, 381, 51, 5, 5, '', 0, 2, 0),
(688, 381, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(689, 381, 69, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(690, 381, 52, 383, 5, '-', 0, 2, 0),
(691, 381, 54, 384, 5, '-', 0, 2, 0),
(692, 385, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(693, 385, 47, 158, 76, '+000000000000000013.000000000000000', 0, 2, 0),
(694, 385, 49, 375, 5, 'recurso-software-oficina', 0, 2, 0),
(695, 385, 51, 5, 5, '', 0, 2, 0),
(696, 385, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(697, 385, 69, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(698, 385, 52, 386, 5, '-', 0, 2, 0),
(699, 385, 54, 386, 5, '-', 0, 2, 0),
(700, 387, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(701, 387, 47, 165, 76, '+000000000000000014.000000000000000', 0, 2, 0),
(702, 387, 49, 388, 5, 'empacadora-industrial', 0, 2, 0),
(703, 387, 51, 5, 5, '', 0, 2, 0),
(704, 387, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(705, 387, 69, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(706, 387, 52, 389, 5, '-', 0, 2, 0),
(707, 387, 54, 389, 5, '-', 0, 2, 0),
(708, 390, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(709, 390, 47, 173, 76, '+000000000000000015.000000000000000', 0, 2, 0),
(710, 390, 49, 391, 5, 'Sistema-KM', 0, 2, 0),
(711, 390, 51, 5, 5, '', 0, 2, 0),
(712, 390, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(713, 390, 69, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(714, 390, 52, 392, 5, '-', 0, 2, 0),
(715, 390, 54, 392, 5, '-', 0, 2, 0),
(716, 393, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(717, 393, 47, 180, 76, '+000000000000000016.000000000000000', 0, 2, 0),
(718, 393, 49, 394, 5, 'manual-de-operacion', 0, 2, 0),
(719, 393, 51, 395, 5, 'docuemntacion-tec-generadora-madre-', 0, 2, 0),
(720, 393, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(721, 393, 69, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(722, 393, 52, 396, 5, '-', 0, 2, 0),
(723, 393, 54, 396, 5, '-', 0, 2, 0),
(724, 397, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(725, 397, 47, 186, 76, '+000000000000000017.000000000000000', 0, 2, 0),
(726, 397, 49, 398, 5, 'auditorio', 0, 2, 0),
(727, 397, 51, 5, 5, '', 0, 2, 0),
(728, 397, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(729, 397, 69, 133, 76, '+000000000000000009.000000000000000', 0, 2, 0),
(730, 397, 52, 399, 5, '-', 0, 2, 0),
(731, 397, 54, 399, 5, '-', 0, 2, 0),
(732, 82, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(733, 82, 47, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(734, 82, 49, 400, 5, 'daniel-benitez-restrepo', 0, 2, 0),
(735, 82, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(736, 82, 56, 401, 5, 'calle-', 0, 2, 0),
(737, 82, 70, 5, 5, '', 0, 2, 0),
(738, 82, 52, 217, 5, '-', 0, 2, 0),
(739, 82, 54, 402, 5, '-', 0, 2, 0),
(740, 108, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(741, 108, 47, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(742, 108, 49, 403, 5, 'diego-armando-yela-velasco', 0, 2, 0),
(743, 108, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(744, 108, 56, 404, 5, 'calle-', 0, 2, 0),
(745, 108, 70, 5, 5, '', 0, 2, 0),
(746, 108, 52, 217, 5, '-', 0, 2, 0),
(747, 108, 54, 5, 5, '', 0, 2, 0),
(748, 96, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(749, 96, 47, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(750, 96, 49, 405, 5, 'marcelo-lopez-trujillo', 0, 2, 0),
(751, 96, 55, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(752, 96, 56, 406, 5, 'calle-', 0, 2, 0),
(753, 96, 70, 407, 5, 'edificio-de-postgrados', 0, 2, 0),
(754, 96, 52, 217, 5, '-', 0, 2, 0),
(755, 96, 54, 5, 5, '', 0, 2, 0),
(756, 89, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(757, 89, 47, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(758, 89, 49, 408, 5, 'carlos-eduardo-marulanda-echeverry', 0, 2, 0),
(759, 89, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(760, 89, 56, 409, 5, 'calle-', 0, 2, 0),
(761, 89, 70, 410, 5, 'sala-usi', 0, 2, 0),
(762, 89, 52, 217, 5, '-', 0, 2, 0),
(763, 89, 54, 5, 5, '', 0, 2, 0),
(764, 210, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(765, 210, 47, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(766, 210, 49, 411, 5, 'Alex-Barrera', 0, 2, 0),
(767, 210, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(768, 210, 56, 412, 5, 'Orange-street-', 0, 2, 0),
(769, 210, 70, 413, 5, 'Celular-samsung-', 0, 2, 0),
(770, 210, 52, 414, 5, '-', 0, 2, 0),
(771, 210, 54, 414, 5, '-', 0, 2, 0),
(772, 155, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(773, 155, 47, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(774, 155, 49, 415, 5, 'Javier-Bardem', 0, 2, 0),
(775, 155, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(776, 155, 56, 416, 5, 'Avenida-Colonia-y-ertadores-Madrid-', 0, 2, 0),
(777, 155, 70, 417, 5, 'GMT-', 0, 2, 0),
(778, 155, 52, 418, 5, '-', 0, 2, 0),
(779, 155, 54, 419, 5, '-', 0, 2, 0),
(780, 162, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(781, 162, 47, 114, 76, '+000000000000000007.000000000000000', 0, 2, 0),
(782, 162, 49, 420, 5, 'andres-felipe-sinisterra', 0, 2, 0),
(783, 162, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(784, 162, 56, 421, 5, 'Calle-', 0, 2, 0),
(785, 162, 70, 422, 5, 'punto-movil-movistar', 0, 2, 0),
(786, 162, 52, 423, 5, '-', 0, 2, 0),
(787, 162, 54, 423, 5, '-', 0, 2, 0),
(788, 170, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(789, 170, 47, 126, 76, '+000000000000000008.000000000000000', 0, 2, 0),
(790, 170, 49, 424, 5, 'Yukito-Tufokito', 0, 2, 0),
(791, 170, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(792, 170, 56, 425, 5, 'Cali-Sede-Princip--generadora-madre', 0, 2, 0),
(793, 170, 70, 5, 5, '', 0, 2, 0),
(794, 170, 52, 426, 5, '-', 0, 2, 0),
(795, 170, 54, 426, 5, '-', 0, 2, 0),
(796, 177, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(797, 177, 47, 133, 76, '+000000000000000009.000000000000000', 0, 2, 0),
(798, 177, 49, 427, 5, 'jean-piaget', 0, 2, 0),
(799, 177, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(800, 177, 56, 428, 5, 'europa-francia', 0, 2, 0),
(801, 177, 70, 5, 5, '', 0, 2, 0),
(802, 177, 52, 429, 5, '-', 0, 2, 0),
(803, 177, 54, 429, 5, '-', 0, 2, 0),
(804, 430, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(805, 430, 47, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(806, 430, 71, 5, 5, '', 0, 2, 0),
(807, 430, 57, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(808, 430, 52, 217, 5, '-', 0, 2, 0),
(809, 430, 54, 5, 5, '', 0, 2, 0),
(810, 431, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(811, 431, 47, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(812, 431, 71, 5, 5, '', 0, 2, 0),
(813, 431, 57, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(814, 431, 52, 217, 5, '-', 0, 2, 0),
(815, 431, 54, 5, 5, '', 0, 2, 0),
(816, 432, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(817, 432, 47, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(818, 432, 71, 5, 5, '', 0, 2, 0),
(819, 432, 57, 114, 76, '+000000000000000007.000000000000000', 0, 2, 0),
(820, 432, 52, 217, 5, '-', 0, 2, 0),
(821, 432, 54, 5, 5, '', 0, 2, 0),
(822, 433, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(823, 433, 47, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(824, 433, 71, 5, 5, '', 0, 2, 0),
(825, 433, 57, 126, 76, '+000000000000000008.000000000000000', 0, 2, 0),
(826, 433, 52, 217, 5, '-', 0, 2, 0),
(827, 433, 54, 5, 5, '', 0, 2, 0),
(828, 434, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(829, 434, 47, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(830, 434, 71, 5, 5, '', 0, 2, 0),
(831, 434, 57, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(832, 434, 52, 435, 5, '-', 0, 2, 0),
(833, 434, 54, 435, 5, '-', 0, 2, 0),
(834, 436, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(835, 436, 47, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(836, 436, 71, 5, 5, '', 0, 2, 0),
(837, 436, 57, 141, 76, '+000000000000000010.000000000000000', 0, 2, 0),
(838, 436, 52, 437, 5, '-', 0, 2, 0),
(839, 436, 54, 437, 5, '-', 0, 2, 0),
(840, 438, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(841, 438, 47, 114, 76, '+000000000000000007.000000000000000', 0, 2, 0),
(842, 438, 71, 439, 5, 'Industrias-del-Acero-S-A-', 0, 2, 0),
(843, 438, 57, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(844, 438, 52, 440, 5, '-', 0, 2, 0),
(845, 438, 54, 441, 5, '-', 0, 2, 0),
(846, 442, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(847, 442, 47, 126, 76, '+000000000000000008.000000000000000', 0, 2, 0),
(848, 442, 71, 5, 5, '', 0, 2, 0),
(849, 442, 57, 165, 76, '+000000000000000014.000000000000000', 0, 2, 0),
(850, 442, 52, 443, 5, '-', 0, 2, 0),
(851, 442, 54, 443, 5, '-', 0, 2, 0),
(852, 444, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(853, 444, 47, 133, 76, '+000000000000000009.000000000000000', 0, 2, 0),
(854, 444, 71, 5, 5, '', 0, 2, 0),
(855, 444, 57, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(856, 444, 52, 445, 5, '-', 0, 2, 0),
(857, 444, 54, 445, 5, '-', 0, 2, 0),
(858, 446, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(859, 446, 47, 141, 76, '+000000000000000010.000000000000000', 0, 2, 0),
(860, 446, 71, 5, 5, '', 0, 2, 0),
(861, 446, 57, 94, 76, '+000000000000000004.000000000000000', 0, 2, 0),
(862, 446, 52, 447, 5, '-', 0, 2, 0),
(863, 446, 54, 447, 5, '-', 0, 2, 0),
(864, 448, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(865, 448, 47, 146, 76, '+000000000000000011.000000000000000', 0, 2, 0),
(866, 448, 71, 5, 5, '', 0, 2, 0),
(867, 448, 57, 173, 76, '+000000000000000015.000000000000000', 0, 2, 0),
(868, 448, 52, 449, 5, '-', 0, 2, 0),
(869, 448, 54, 449, 5, '-', 0, 2, 0),
(870, 450, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(871, 450, 47, 152, 76, '+000000000000000012.000000000000000', 0, 2, 0),
(872, 450, 71, 451, 5, 'industrias-de-infraestructura', 0, 2, 0),
(873, 450, 57, 192, 76, '+000000000000000018.000000000000000', 0, 2, 0),
(874, 450, 52, 452, 5, '-', 0, 2, 0),
(875, 450, 54, 452, 5, '-', 0, 2, 0),
(876, 453, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(877, 453, 47, 158, 76, '+000000000000000013.000000000000000', 0, 2, 0),
(878, 453, 71, 289, 5, 'ISA', 0, 2, 0),
(879, 453, 57, 198, 76, '+000000000000000019.000000000000000', 0, 2, 0),
(880, 453, 52, 454, 5, '-', 0, 2, 0),
(881, 453, 54, 454, 5, '-', 0, 2, 0),
(882, 455, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(883, 455, 47, 165, 76, '+000000000000000014.000000000000000', 0, 2, 0),
(884, 455, 71, 456, 5, 'publicaciones-tipografía', 0, 2, 0);
INSERT INTO `yiikmap52_store_triple` (`t`, `s`, `p`, `o`, `o_lang_dt`, `o_comp`, `s_type`, `o_type`, `misc`) VALUES
(885, 455, 57, 165, 76, '+000000000000000014.000000000000000', 0, 2, 0),
(886, 455, 52, 457, 5, '-', 0, 2, 0),
(887, 455, 54, 457, 5, '-', 0, 2, 0),
(888, 458, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(889, 458, 47, 459, 76, '+000000000000000022.000000000000000', 0, 2, 0),
(890, 458, 61, 460, 5, 'v-', 0, 2, 0),
(891, 458, 49, 461, 5, 'generar-reporte', 0, 2, 0),
(892, 458, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(893, 458, 62, 462, 5, 'generar-un-report-roceso-ejecutado-', 0, 2, 0),
(894, 458, 80, 299, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(895, 458, 63, 177, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(896, 458, 52, 463, 5, '-', 0, 2, 0),
(897, 458, 54, 463, 5, '-', 0, 2, 0),
(898, 464, 8, 60, 5, 'http-universidad--tions-ClassSector', 0, 0, 0),
(899, 464, 47, 158, 76, '+000000000000000013.000000000000000', 0, 2, 0),
(900, 464, 49, 465, 5, 'financiero', 0, 2, 0),
(901, 464, 51, 466, 5, 'entidades-financi-icias-bancos-etc-', 0, 2, 0),
(902, 464, 52, 467, 5, '-', 0, 2, 0),
(903, 464, 54, 467, 5, '-', 0, 2, 0),
(904, 468, 8, 38, 5, 'http-universidad--ClassOrganizacion', 0, 0, 0),
(905, 468, 47, 206, 76, '+000000000000000021.000000000000000', 0, 2, 0),
(906, 468, 49, 469, 5, 'banco-de-occidente', 0, 2, 0),
(907, 468, 56, 470, 5, 'carrera-', 0, 2, 0),
(908, 468, 58, 471, 5, 'http-www-bancodeoccidente-com-co-', 0, 2, 0),
(909, 468, 59, 464, 5, 'http-universidad--Instances-Sector-', 0, 0, 0),
(910, 468, 51, 472, 5, 'banco-de-occident-jamos-para-usted-', 0, 2, 0),
(911, 468, 52, 473, 5, '-', 0, 2, 0),
(912, 468, 54, 473, 5, '-', 0, 2, 0),
(913, 474, 8, 40, 5, 'http-universidad---ClassCompetencia', 0, 0, 0),
(914, 474, 47, 146, 76, '+000000000000000011.000000000000000', 0, 2, 0),
(915, 474, 49, 475, 5, 'contabilidad', 0, 2, 0),
(916, 474, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(917, 474, 64, 94, 5, '+000000000000000004.000000000000000', 0, 2, 0),
(918, 474, 65, 5, 5, '', 0, 2, 0),
(919, 474, 66, 326, 5, 'http-universidad--eaInstances-Area-', 0, 0, 0),
(920, 474, 51, 5, 5, '', 0, 2, 0),
(921, 474, 52, 476, 5, '-', 0, 2, 0),
(922, 474, 54, 476, 5, '-', 0, 2, 0),
(923, 477, 8, 46, 5, 'http-universidad--ons-ClassTangible', 0, 0, 0),
(924, 477, 47, 152, 76, '+000000000000000012.000000000000000', 0, 2, 0),
(925, 477, 49, 478, 5, 'COMPAQ-Presario-CQ-', 0, 2, 0),
(926, 477, 55, 104, 76, '+000000000000000005.000000000000000', 0, 2, 0),
(927, 477, 72, 479, 5, 'Sala-U-S-I-', 0, 2, 0),
(928, 477, 51, 480, 5, 'laptop-marca-compaq-', 0, 2, 0),
(929, 477, 52, 481, 5, '-', 0, 2, 0),
(930, 477, 54, 481, 5, '-', 0, 2, 0),
(931, 482, 8, 45, 5, 'http-universidad--s-ClassIntangible', 0, 0, 0),
(932, 482, 47, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(933, 482, 49, 483, 5, 'MCO', 0, 2, 0),
(934, 482, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(935, 482, 51, 484, 5, 'Modelo-de-Conocim-to-Organizacional', 0, 2, 0),
(936, 482, 52, 485, 5, '-', 0, 2, 0),
(937, 482, 54, 485, 5, '-', 0, 2, 0),
(938, 486, 8, 42, 5, 'http-universidad--apitalEstructural', 0, 0, 0),
(939, 486, 47, 192, 76, '+000000000000000018.000000000000000', 0, 2, 0),
(940, 486, 49, 483, 5, 'MCO', 0, 2, 0),
(941, 486, 51, 487, 5, 'Modelo-de-Conocim-o-Organizacional-', 0, 2, 0),
(942, 486, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(943, 486, 69, 111, 76, '+000000000000000006.000000000000000', 0, 2, 0),
(944, 486, 52, 488, 5, '-', 0, 2, 0),
(945, 486, 54, 488, 5, '-', 0, 2, 0),
(946, 489, 8, 43, 5, 'http-universidad--lassCapitalHumano', 0, 0, 0),
(947, 489, 47, 141, 76, '+000000000000000010.000000000000000', 0, 2, 0),
(948, 489, 49, 490, 5, 'Wells-fargo', 0, 2, 0),
(949, 489, 55, 75, 76, '+000000000000000001.000000000000000', 0, 2, 0),
(950, 489, 56, 491, 5, 'Spring-Avenue-Washington-D-C-', 0, 2, 0),
(951, 489, 70, 492, 5, '-', 0, 2, 0),
(952, 489, 52, 493, 5, '-', 0, 2, 0),
(953, 489, 54, 493, 5, '-', 0, 2, 0),
(954, 489, 49, 494, 5, 'Wells-Fargo', 0, 2, 0),
(955, 489, 54, 495, 5, '-', 0, 2, 0),
(956, 496, 8, 44, 5, 'http-universidad--CapitalRelacional', 0, 0, 0),
(957, 496, 47, 173, 76, '+000000000000000015.000000000000000', 0, 2, 0),
(958, 496, 71, 497, 5, 'bancos-regionales', 0, 2, 0),
(959, 496, 57, 206, 76, '+000000000000000021.000000000000000', 0, 2, 0),
(960, 496, 52, 498, 5, '-', 0, 2, 0),
(961, 496, 54, 498, 5, '-', 0, 2, 0),
(962, 499, 8, 41, 5, 'http-universidad--ions-ClassCapital', 0, 0, 0),
(963, 499, 47, 186, 76, '+000000000000000017.000000000000000', 0, 2, 0),
(964, 499, 51, 500, 5, 'Wells-Fargo-por-s-s-organizaciones-', 0, 2, 0),
(965, 499, 55, 85, 76, '+000000000000000002.000000000000000', 0, 2, 0),
(966, 499, 68, 141, 5, '+000000000000000010.000000000000000', 0, 2, 0),
(967, 499, 52, 501, 5, '-', 0, 2, 0),
(968, 499, 54, 501, 5, '-', 0, 2, 0),
(969, 502, 3, 4, 5, 'Example-Domain', 0, 2, 0),
(977, 506, 8, 39, 5, 'http-universidad--ions-ClassProceso', 0, 0, 0),
(978, 506, 47, 507, 76, '+000000000000000023.000000000000000', 0, 2, 0),
(979, 506, 61, 134, 5, '+000000000000000000.000000000000000', 0, 2, 0),
(980, 506, 49, 508, 5, 'revision-de-metodología', 0, 2, 0),
(981, 506, 55, 92, 76, '+000000000000000003.000000000000000', 0, 2, 0),
(982, 506, 62, 509, 5, 'revisar-la-metodo-da-en-un-proceso-', 0, 2, 0),
(983, 506, 80, 195, 5, 'http-universidad--ces-Organizacion-', 0, 0, 0),
(984, 506, 63, 170, 5, 'http-universidad--es-CapitalHumano-', 0, 0, 0),
(985, 506, 52, 510, 5, '-', 0, 2, 0),
(986, 506, 54, 510, 5, '-', 0, 2, 0),
(987, 538, 3, 4, 5, 'Example-Domain', 0, 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
