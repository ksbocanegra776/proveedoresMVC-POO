-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-03-2022 a las 21:54:48
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proveedores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_economica`
--

DROP TABLE IF EXISTS `actividad_economica`;
CREATE TABLE IF NOT EXISTS `actividad_economica` (
  `id_actividad_economica` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_actividad_economica` varchar(5) NOT NULL COMMENT 'cod unico para identificar el tipo de actividad economica',
  `nombre_actividad_economica` varchar(45) NOT NULL COMMENT 'tipo actividad comercial',
  `descripcion_actividad_economica` varchar(200) NOT NULL COMMENT 'descripcion actividad comercial',
  PRIMARY KEY (`id_actividad_economica`),
  KEY `cod_actividad_economica` (`cod_actividad_economica`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividad_economica`
--

INSERT INTO `actividad_economica` (`id_actividad_economica`, `cod_actividad_economica`, `nombre_actividad_economica`, `descripcion_actividad_economica`) VALUES
(1, 'h-N/A', 'No Aplica', 'no cuenta con actividad comercial'),
(2, '4642', 'Abastecimiento de textiles', 'Comercio al por mayor de prendas de vestir.'),
(3, '4645', 'Abastecimiento medicamentos/belleza', 'Comercio al por mayor de productos farmacéuticos, medicinales, cosméticos y de tocador.'),
(4, '4663', 'Comercio ferreterias', '	Comercio al por mayor de materiales de construcción, artículos de ferretería, pinturas, productos de vidrio, equipo y materiales de fontanería y calefacción.'),
(5, '4719', 'Abastecimiento Canasta', 'Comercio al por menor en establecimientos no especializados, con surtido compuesto principalmente por productos diferentes de alimentos (víveres en general), bebidas y tabaco.'),
(6, '4722', 'Abastecimiento Lacteos', 'Comercio al por menor de leche, productos lácteos y huevos, en establecimientos especializados.'),
(7, '4723', 'Abastecimiento Carnicos', 'Comercio al por menor de carnes (incluye aves de corral), productos cárnicos, pescados y productos de mar, en establecimientos especializados.'),
(8, '4724', 'Abastecimiento Licores', 'Comercio al por menor de bebidas y productos del tabaco, en establecimientos especializados.'),
(9, '4755', 'Abastecimiento Enseres cocina', 'Comercio al por menor de artículos y utensilios de uso doméstico.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendamiento`
--

DROP TABLE IF EXISTS `agendamiento`;
CREATE TABLE IF NOT EXISTS `agendamiento` (
  `id_agendamiento` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_agendamiento` varchar(5) NOT NULL COMMENT 'cod unico de agendamiento',
  `fecha_agendamiento` date NOT NULL COMMENT 'referente a la fecha en que se debe realizar el evento',
  `motivo_agendamiento` varchar(5) NOT NULL COMMENT 'evento a programar',
  `proveedor_agendado` varchar(5) NOT NULL COMMENT 'proveedor con quien se crea la cita',
  `cod_estado` varchar(5) NOT NULL COMMENT 'referente a fase o condicion del agendamiento',
  `priority` text NOT NULL COMMENT 'color referente a prioridad de agendamiento',
  PRIMARY KEY (`id_agendamiento`),
  KEY `proveedor_agendado` (`proveedor_agendado`),
  KEY `statusAgenda` (`cod_estado`),
  KEY `motivo_agendamiento` (`motivo_agendamiento`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- Estructura de tabla para la tabla `asesor_comercial`
--

DROP TABLE IF EXISTS `asesor_comercial`;
CREATE TABLE IF NOT EXISTS `asesor_comercial` (
  `id_asesor_comercial` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `doc_asesor` varchar(15) NOT NULL,
  `doc_prov` varchar(15) NOT NULL,
  `cod_rol_asesor` varchar(5) NOT NULL COMMENT 'referente al tipo de usuario en base de datos',
  `cod_asesor` varchar(5) NOT NULL COMMENT 'cod identificativo para asesor',
  `cod_proveedor` varchar(5) NOT NULL COMMENT 'referente al proveedor al que se encuentra relacionado',
  PRIMARY KEY (`id_asesor_comercial`),
  KEY `cod_asesor` (`cod_asesor`),
  KEY `doc_asesor` (`doc_asesor`),
  KEY `doc_prov` (`doc_prov`),
  KEY `aseProv` (`cod_proveedor`),
  KEY `useAser` (`cod_rol_asesor`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_proveedor` varchar(5) NOT NULL COMMENT 'referente al proveedor al que se encuentra relacionado',
  `cod_comentario` varchar(5) NOT NULL COMMENT 'codigo de identificacion de comentario',
  `fecha_comentario` date NOT NULL COMMENT 'fecha en que se crea el comentario',
  `contenido_comentario` varchar(350) NOT NULL COMMENT 'informacion de requerimiento del proveedor',
  `cod_respuesta_comentario` varchar(5) NOT NULL COMMENT 'cod referente a la respuesta al comentario inicial',
  `cod_estado_comentario` varchar(5) NOT NULL COMMENT 'referente a estado de avance del comentario',
  PRIMARY KEY (`id_comentario`),
  KEY `cod_proveedor` (`cod_proveedor`),
  KEY `rta` (`cod_respuesta_comentario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_estado` varchar(5) NOT NULL COMMENT 'cod unico de identificacion para el estado',
  `nombre_estado` varchar(45) NOT NULL COMMENT 'referente a nombre identificativo del estado',
  PRIMARY KEY (`id_estado`),
  KEY `cod_estado` (`cod_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `cod_estado`, `nombre_estado`) VALUES
(1, 'Act', 'Activo'),
(2, 'In-Ac', 'Inactivo'),
(3, 'Pen', 'Pendiente'),
(4, 'Canc', 'Cancelado'),
(5, 'Re-Ag', 'Reagendar'),
(6, 'Agen', 'Agendado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_Type`
--

DROP TABLE IF EXISTS `event_Type`;
CREATE TABLE IF NOT EXISTS `event_Type` (
  `id_eventType` int NOT NULL AUTO_INCREMENT COMMENT 'referente al indice de la tabla',
  `cod_typeEvent` varchar(5) NOT NULL COMMENT 'referente al cod unico del evento',
  `nameEvent` varchar(50) NOT NULL COMMENT 'referente al nombre del tipo de evento',
  PRIMARY KEY (`id_eventType`),
  UNIQUE KEY `cod_typeEvent` (`cod_typeEvent`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `event_Type`
--

INSERT INTO `event_Type` (`id_eventType`, `cod_typeEvent`, `nameEvent`) VALUES
(1, 'PGF', 'Pago Factura'),
(2, 'HP', 'Hacer Pedido'),
(3, 'RP', 'Recibir Pedido'),
(4, 'CM', 'Cambio Mercancia'),
(5, 'DP', 'Devolucion Mercancia'),
(6, 'Otros', 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

DROP TABLE IF EXISTS `horarios`;
CREATE TABLE IF NOT EXISTS `horarios` (
  `cod_horario_user` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_horario` varchar(5) NOT NULL COMMENT 'cod identificativo para horario',
  `nombre_horario` varchar(45) NOT NULL COMMENT 'refente a tipos de horarios asociado a empleados',
  PRIMARY KEY (`cod_horario_user`),
  KEY `cod_horario` (`cod_horario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`cod_horario_user`, `cod_horario`, `nombre_horario`) VALUES
(1, 'h-N/A', 'No Aplica'),
(2, 'h-Man', 'Mañana'),
(3, 'h-Tar', 'Tarde'),
(4, 'h-Rot', 'Rotativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

DROP TABLE IF EXISTS `linea`;
CREATE TABLE IF NOT EXISTS `linea` (
  `id_linea` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_linea` varchar(5) NOT NULL COMMENT 'cod identificativo para linea de producto',
  `categoria_linea` varchar(45) NOT NULL COMMENT 'refente a tipos de horarios asociado a empleados',
  `descripcion_linea` varchar(60) NOT NULL COMMENT 'descripcion de productos distribuidos',
  PRIMARY KEY (`id_linea`),
  KEY `cod_linea` (`cod_linea`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`id_linea`, `cod_linea`, `categoria_linea`, `descripcion_linea`) VALUES
(1, 'h-N/A', 'No Aplica', ''),
(2, 'h-Per', 'Perecederos', ''),
(3, 'h-Lic', 'Licores', ''),
(4, 'h-Con', 'Consumo', ''),
(5, 'h-Car', 'Carnicos', ''),
(6, 'h-Med', 'Farmaceuticos', ''),
(7, 'h-Bel', 'Belleza', ''),
(8, 'h-Mtt', 'Suministros', ''),
(9, 'h-tex', 'Textiles', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedores` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_proveedor` varchar(5) NOT NULL COMMENT 'referente codigo unico de referencia para el proveedor',
  `cod_tipo_documento_prov` varchar(5) NOT NULL COMMENT 'referente a tipo de documento del proveedor',
  `numero_documento_prov` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'numero de documento de identificacion del proveedor',
  `razon_social` varchar(60) NOT NULL COMMENT 'nombre de comercial del proveedor',
  `linea_provista` varchar(60) NOT NULL COMMENT 'hace referencia a la linea de productos que provee',
  `telefonoProv` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'telefono de contacto principal',
  `emailPro` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `departamento` varchar(45) NOT NULL COMMENT 'departamento de oficina principal',
  `ciudad` varchar(45) NOT NULL COMMENT 'ciudad de oficina principal',
  `direccion` varchar(60) NOT NULL COMMENT 'direccion principal del proveedor',
  `cod_estado_proveedor` varchar(5) NOT NULL COMMENT 'referente a estado o etapa actual del proveedor',
  `cod_asesor` varchar(5) NOT NULL COMMENT 'codigo asesor actual asociado al proveedor',
  `cod_actividad_economica` varchar(5) NOT NULL COMMENT 'referente a la actividad economica principal del proveedor',
  `id_convenio` varchar(5) NOT NULL COMMENT 'referente al convenio de pago estipulado con el proveedor',
  `fechaInicio` date NOT NULL COMMENT 'referente a la fecha de inicio vinculo comercial proveedor',
  PRIMARY KEY (`id_proveedores`),
  UNIQUE KEY `cod_proveedor_UNIQUE` (`cod_proveedor`),
  KEY `cod_asesor` (`cod_asesor`),
  KEY `actividadProv` (`cod_actividad_economica`),
  KEY `estadoPro` (`cod_estado_proveedor`),
  KEY `convenioPro` (`id_convenio`),
  KEY `docTipo` (`cod_tipo_documento_prov`),
  KEY `lineaProd` (`linea_provista`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

--

-- Estructura de tabla para la tabla `respuesta`
--

DROP TABLE IF EXISTS `respuesta`;
CREATE TABLE IF NOT EXISTS `respuesta` (
  `id_respuesta` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_respuesta` varchar(5) NOT NULL COMMENT 'cod identificacion de respusta a comentario',
  `fecha_respuesta` date NOT NULL COMMENT 'fecha en que se da solucion a comentario',
  `contenido_respuesta` varchar(350) NOT NULL COMMENT 'informacion de solucion a comentario',
  `cod_comentario` varchar(5) NOT NULL,
  PRIMARY KEY (`id_respuesta`),
  KEY `cod_respuesta` (`cod_respuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_rol` varchar(5) NOT NULL COMMENT 'refente al cod unico de identificacion de tipos de usuario',
  `nombre` varchar(45) NOT NULL COMMENT 'tipo de rol que desempeña un usuario',
  PRIMARY KEY (`id_rol`),
  KEY `cod_rol` (`cod_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `cod_rol`, `nombre`) VALUES
(1, 'R-N/A', 'No Aplica'),
(2, 'Admin', 'Administrador'),
(3, 'Aux', 'Auxiliar'),
(4, 'Asr', 'Asesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_convenio`
--

DROP TABLE IF EXISTS `tipo_convenio`;
CREATE TABLE IF NOT EXISTS `tipo_convenio` (
  `id_tipo_convenio` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_convenio` varchar(5) NOT NULL COMMENT 'referente al codigo de identificacion de convenio',
  `nombre_tipo_convenio` varchar(60) NOT NULL COMMENT 'nombre del tipo de convenio',
  PRIMARY KEY (`id_tipo_convenio`),
  KEY `cod_convenio` (`cod_convenio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_convenio`
--

INSERT INTO `tipo_convenio` (`id_tipo_convenio`, `cod_convenio`, `nombre_tipo_convenio`) VALUES
(1, 'C-N/A', 'No Aplica'),
(2, 'Cntd', 'Pago de contado'),
(3, 'Antcp', 'Pago anticipado'),
(4, 'Crdt', 'Pago credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

DROP TABLE IF EXISTS `tipo_documento`;
CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `id_tipo_documento` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_tipo_documento` varchar(5) NOT NULL COMMENT 'referente al codigo de identificacion de convenio',
  `nombre_tipo_documento` varchar(45) NOT NULL COMMENT 'nombre del tipo de convenio',
  PRIMARY KEY (`id_tipo_documento`),
  KEY `cod_tipo_documento` (`cod_tipo_documento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `cod_tipo_documento`, `nombre_tipo_documento`) VALUES
(1, 'C-N/A', 'No Asignado'),
(2, 'CC', 'Cedula de Ciudadania'),
(3, 'RUT', 'Registro Unico Tributario'),
(4, 'NIT', 'Numero de Identificacion Tributaria'),
(5, 'CE', 'Cedula de Extranjeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT COMMENT 'id auto incrementable',
  `cod_rol_usuario` varchar(5) NOT NULL COMMENT 'referente al tipo de rol de usuario',
  `cod_tipo_documento_usuario` varchar(5) NOT NULL COMMENT 'referente a codigo de tipo del documento del usuario',
  `cod_horario_user` varchar(5) NOT NULL COMMENT 'referente al horario de trabajo del usuario',
  `cod_estado_usuario` varchar(5) NOT NULL COMMENT 'referente a etapa o estado en la que se encuentra el usuario',
  `numero_documento` varchar(15) NOT NULL COMMENT 'identificacion unica del usuario',
  `nombre` varchar(60) NOT NULL COMMENT 'primer nombre del usuario',
  `apellido` varchar(60) NOT NULL COMMENT 'primer apellido del usuario',
  `cod_usuario` varchar(5) NOT NULL COMMENT 'codigo unico para usuarios tipo asesor comercial',
  `email` varchar(100) NOT NULL COMMENT 'correo principal del usuario',
  `telefono` varchar(14) NOT NULL COMMENT 'telefono de contacto principal del usuario',
  `contrasenia` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'contraseña de acceso a los modulos de la aplicacion',
  `question1` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'respuesta requerida para reestablecimiento de contraseña',
  `question2` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'respuesta requerida para reestablecimiento de contraseña',
  `question3` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'respuesta requerida para reestablecimiento de contraseña',
  `termino_condiciones` int NOT NULL COMMENT 'aceptacion politicas de tratamiento de informacion',
  `tratamiento_datos` int NOT NULL COMMENT 'aceptacion politicas de tratamiento de informacion',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `numero_documento_UNIQUE` (`numero_documento`),
  UNIQUE KEY `email` (`email`),
  KEY `tipoDocumento` (`cod_tipo_documento_usuario`),
  KEY `rolUser` (`cod_rol_usuario`),
  KEY `statusUser` (`cod_estado_usuario`),
  KEY `horarioUser` (`cod_horario_user`),
  KEY `cod_usuario` (`cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agendamiento`
--
ALTER TABLE `agendamiento`
  ADD CONSTRAINT `agendamiento_ibfk_1` FOREIGN KEY (`proveedor_agendado`) REFERENCES `proveedores` (`cod_proveedor`),
  ADD CONSTRAINT `statusAgenda` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`cod_estado`),
  ADD CONSTRAINT `eventType` FOREIGN KEY (`motivo_agendamiento`) REFERENCES `event_Type` (`cod_typeEvent`);
--
-- Filtros para la tabla `asesor_comercial`
--
ALTER TABLE `asesor_comercial`
  ADD CONSTRAINT `codProv` FOREIGN KEY (`cod_proveedor`) REFERENCES `proveedores` (`cod_proveedor`),
  ADD CONSTRAINT `useAser` FOREIGN KEY (`cod_rol_asesor`) REFERENCES `usuarios` (`cod_rol_usuario`),
  ADD CONSTRAINT `codUser` FOREIGN KEY (`cod_asesor`) REFERENCES `usuarios` (`cod_usuario`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`cod_proveedor`) REFERENCES `proveedores` (`cod_proveedor`),
  ADD CONSTRAINT `rta` FOREIGN KEY (`cod_respuesta_comentario`) REFERENCES `respuesta` (`cod_respuesta`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `actividadProv` FOREIGN KEY (`cod_actividad_economica`) REFERENCES `actividad_economica` (`cod_actividad_economica`),
  ADD CONSTRAINT `convenioPro` FOREIGN KEY (`id_convenio`) REFERENCES `tipo_convenio` (`cod_convenio`),
  ADD CONSTRAINT `docTipo` FOREIGN KEY (`cod_tipo_documento_prov`) REFERENCES `tipo_documento` (`cod_tipo_documento`),
  ADD CONSTRAINT `estadoPro` FOREIGN KEY (`cod_estado_proveedor`) REFERENCES `estado` (`cod_estado`),
  ADD CONSTRAINT `lineaProd` FOREIGN KEY (`linea_provista`) REFERENCES `linea` (`cod_linea`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `horarioUser` FOREIGN KEY (`cod_horario_user`) REFERENCES `horarios` (`cod_horario`),
  ADD CONSTRAINT `rolUser` FOREIGN KEY (`cod_rol_usuario`) REFERENCES `roles` (`cod_rol`),
  ADD CONSTRAINT `statusUser` FOREIGN KEY (`cod_estado_usuario`) REFERENCES `estado` (`cod_estado`),
  ADD CONSTRAINT `tipoDocumento` FOREIGN KEY (`cod_tipo_documento_usuario`) REFERENCES `tipo_documento` (`cod_tipo_documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
