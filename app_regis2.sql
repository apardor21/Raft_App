-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2019 a las 23:21:02
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_regis2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `pais_id` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `pais_id`, `nombre`) VALUES
(5, 24400, 'BOLIVAR'),
(8, 24400, 'ATLANTICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(5) NOT NULL,
  `id_departamento` int(3) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `nombre_municipio` varchar(40) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `id_departamento`, `pais_id`, `nombre_municipio`) VALUES
(4, 5, 4400, 'ACHI'),
(1, 5, 4400, 'ACOPIO BOLIVAR'),
(6, 5, 4400, 'ALTOS DEL ROSARIO'),
(5, 5, 4400, 'ARENAL'),
(7, 5, 4400, 'ARJONA'),
(9, 5, 4400, 'ARROYO HONDO'),
(1, 5, 4400, 'AUXILIAR 1 DE CARTAGENA'),
(1, 5, 4400, 'AUXILIAR 2 DE CARTAGENA'),
(1, 5, 4400, 'AUXILIAR 3 DE CARTAGENA'),
(10, 5, 24400, 'BARRANCO DE LOBA'),
(13, 5, 24400, 'CALAMAR'),
(14, 5, 24400, 'CANTAGALLO'),
(12, 5, 4400, 'CARTAGENA'),
(15, 5, 24400, 'CICUCO'),
(18, 5, 24400, 'CLEMENCIA'),
(16, 5, 24400, 'CORDOBA'),
(22, 5, 24400, 'EL CARMEN DE BOLIVAR'),
(25, 5, 24400, 'EL GUAMO'),
(27, 5, 24400, 'EL PElON'),
(26, 5, 24400, 'HATILLO DE LOBA'),
(28, 5, 24400, 'MAGANGUE'),
(31, 5, 24400, 'MAHATES'),
(37, 5, 24400, 'MARGARITA'),
(40, 5, 24400, 'MARIA LA BAJA'),
(43, 5, 24400, 'MOMPOS'),
(41, 5, 24400, 'MONTECRISTO'),
(44, 5, 24400, 'MORALES'),
(59, 5, 24400, 'PINILLOS'),
(63, 5, 24400, 'REGIDOR'),
(65, 5, 24400, 'RIO VIEJO'),
(72, 5, 24400, 'SAN CRISTOBAL'),
(70, 5, 24400, 'SAN ESTANISLAO'),
(73, 5, 24400, 'SAN FERNANDO'),
(76, 5, 24400, 'SAN JACINTO'),
(78, 5, 24400, 'SAN JACINTO DEL CAUCA'),
(79, 5, 24400, 'SAN JUAN NEPOMUCENO '),
(82, 5, 24400, 'SAN MARTIN DE LOBA'),
(84, 5, 24400, 'SAN PABLO'),
(91, 5, 24400, 'SANTA CATALINA'),
(94, 5, 24400, 'SANTA ROSA'),
(95, 5, 24400, 'SANTA ROSA DEL SUR'),
(97, 5, 24400, 'SIMITI'),
(106, 5, 24400, 'SOPLAVIENTO'),
(110, 5, 24400, 'TALAIGUA NUEVO'),
(113, 5, 24400, 'TIQUISIO (PUERTO RICO)'),
(118, 5, 24400, 'TURBACO'),
(121, 5, 24400, 'TURBANA'),
(124, 5, 24400, 'VILLANUEVA'),
(127, 5, 24400, 'ZAMBRANO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficina`
--

CREATE TABLE `oficina` (
  `id` int(3) NOT NULL,
  `codigo_oficina` varchar(3) CHARACTER SET latin1 NOT NULL,
  `cod_departamento` int(3) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `nombre_municipio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(40) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `oficina`
--

INSERT INTO `oficina` (`id`, `codigo_oficina`, `cod_departamento`, `id_municipio`, `id_pais`, `nombre_municipio`, `observaciones`) VALUES
(8, 'AKH', 5, 1, 24400, 'AUXILIAR 2 DE CARTAG', ''),
(9, 'B3U', 5, 1, 24400, 'AUXILIAR 3 DE CARTAG', ''),
(3, 'C1Z', 5, 6, 24400, 'ALTOS DEL ROSARIO', ''),
(2, 'C6Y', 5, 1, 24400, 'ACOPIO BOLIVAR', ''),
(5, 'C7Z', 5, 7, 24400, 'ARJONA', ''),
(6, 'C8Z', 5, 9, 24400, 'ARROYO HONDO', ''),
(1, 'C9Y', 5, 4, 24400, 'ACHI', ''),
(10, 'C9Z', 5, 10, 24400, 'BARRANCO DE LOBA', ''),
(13, 'CYW', 5, 1, 24400, 'CARTAGENA', ''),
(4, 'CZY', 5, 5, 24400, 'ARENAL', ''),
(40, 'D1L', 5, 94, 24400, 'SANTA ROSA', ''),
(22, 'D2D', 5, 31, 24400, 'MAHATES', ''),
(27, 'D2F', 5, 44, 24400, 'MORALES', ''),
(41, 'D2L', 5, 95, 24400, 'SANTA ROSA DEL SUR', ''),
(45, 'D3M', 5, 113, 24400, 'TIQUISIO (PUERTO RIC', ''),
(49, 'D3N', 5, 127, 24400, 'ZAMBRANO', ''),
(16, 'D4B', 5, 16, 24400, 'CORDOBA', ''),
(18, 'D4C', 5, 25, 24400, 'EL GUAMO', ''),
(32, 'D4H', 5, 70, 24400, 'SAN ESTANISLAO', ''),
(35, 'D4J', 5, 78, 24400, 'SAN JACINTO DEL CAUC', ''),
(15, 'D5B', 5, 18, 24400, 'CLEMENCIA', ''),
(20, 'D5C', 5, 26, 24400, 'HATILLO DE LOBA', ''),
(24, 'D5E', 5, 40, 24400, 'MARIA LA BAJA', ''),
(31, 'D5H', 5, 72, 24400, 'SAN CRISTOBAL', ''),
(34, 'D5J', 5, 76, 24400, 'SAN JACINTO', ''),
(37, 'D5K', 5, 82, 24400, 'SAN MARTIN DE LOBA', ''),
(19, 'D6C', 5, 27, 24400, 'EL PEÑON', ''),
(26, 'D6E', 5, 41, 24400, 'MONTECRISTO', ''),
(33, 'D6H', 5, 73, 24400, 'SAN FERNANDO', ''),
(38, 'D6K', 5, 84, 24400, 'SAN PABLO', ''),
(23, 'D7D', 5, 37, 24400, 'MARGARITA', ''),
(42, 'D7L', 5, 97, 24400, 'SIMITI', ''),
(46, 'D7M', 5, 118, 24400, 'TURBACO', ''),
(11, 'D8A', 5, 13, 24400, 'CALAMAR', ''),
(43, 'D8L', 5, 106, 24400, 'SOPLAVIENTO', ''),
(47, 'D8M', 5, 121, 24400, 'TURBANA', ''),
(12, 'D9A', 5, 14, 24400, 'CANTAGALLO', ''),
(25, 'D9E', 5, 43, 24400, 'MOMPOS', ''),
(28, 'D9F', 5, 59, 24400, 'PINILLOS', ''),
(36, 'D9J', 5, 79, 24400, 'SAN JUAN NEPOMUCENO ', ''),
(39, 'D9K', 5, 91, 24400, 'SANTA CATALINA', ''),
(14, 'DXA', 5, 15, 24400, 'CICUCO', ''),
(17, 'DXB', 5, 22, 24400, 'EL CARMEN DE BOLIVAR', ''),
(29, 'DXF', 5, 63, 24400, 'REGIDOR', ''),
(30, 'DYF', 5, 65, 24400, 'RIO VIEJO', ''),
(44, 'DYL', 5, 110, 24400, 'TALAIGUA NUEVO', ''),
(48, 'DYM', 5, 124, 24400, 'VILLANUEVA', ''),
(21, 'DZC', 5, 28, 24400, 'MAGANGUE', ''),
(7, 'Z1L', 5, 1, 24400, 'AUXILIAR 1 DE CARTAG', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(3) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1125, 'VENEZUELA'),
(24400, 'COLOMBIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raft04`
--

CREATE TABLE `raft04` (
  `cons_lote` varchar(15) CHARACTER SET latin1 NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_recoleccion` date NOT NULL,
  `fecha_recibido` date NOT NULL,
  `cant_dias` int(6) NOT NULL,
  `cant_decas` int(6) NOT NULL,
  `lote_municipio` varchar(20) CHARACTER SET latin1 NOT NULL,
  `novedades_presentadas` varchar(50) CHARACTER SET latin1 NOT NULL,
  `codigo_oficina` varchar(3) CHARACTER SET latin1 NOT NULL,
  `nombre_municipio` varchar(11) CHARACTER SET latin1 NOT NULL,
  `nombre_departamento` varchar(30) CHARACTER SET latin1 NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `raft04`
--

INSERT INTO `raft04` (`cons_lote`, `fecha_creacion`, `fecha_recoleccion`, `fecha_recibido`, `cant_dias`, `cant_decas`, `lote_municipio`, `novedades_presentadas`, `codigo_oficina`, `nombre_municipio`, `nombre_departamento`, `id_user`) VALUES
('C7Z201910121243', '2019-08-01', '2019-08-01', '2019-08-07', 22, 12, 'C7Z12', 'REPROCESOS', 'C7Z', 'ARJONA', 'BOLIVAR', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raft06`
--

CREATE TABLE `raft06` (
  `n_preparacion` int(8) NOT NULL,
  `nuip` int(10) NOT NULL,
  `motivo_devolucion` varchar(100) NOT NULL,
  `calse_tramite` varchar(40) NOT NULL,
  `nombre_oficina` varchar(30) NOT NULL,
  `codigo_oficina` varchar(3) NOT NULL,
  `no_oficio_devolucion` varchar(14) NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `preparacion_reemplazo` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raft07`
--

CREATE TABLE `raft07` (
  `n_preparacion` varchar(10) NOT NULL,
  `nuip` int(10) NOT NULL,
  `m_destruccion` varchar(50) NOT NULL,
  `formato_destruir` varchar(20) NOT NULL,
  `oficina_preparacion` varchar(30) NOT NULL,
  `codigo_oficina` varchar(3) NOT NULL,
  `no_acta_destruccion` int(20) NOT NULL,
  `fecha_destruccion` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raft08`
--

CREATE TABLE `raft08` (
  `id` int(11) NOT NULL,
  `c_acopio` varchar(11) CHARACTER SET utf8 NOT NULL,
  `nombre_sts` varchar(20) CHARACTER SET utf8 NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_transmicion` date NOT NULL,
  `clase_tramite` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cant_solicitudes` int(5) NOT NULL,
  `verificacion_trans` varchar(20) CHARACTER SET utf8 NOT NULL,
  `observaciones_especiales` varchar(70) CHARACTER SET utf8 NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raft10`
--

CREATE TABLE `raft10` (
  `id` int(11) NOT NULL,
  `semana_fecha_inicial` date NOT NULL,
  `item` varchar(20) NOT NULL,
  `sts` int(5) NOT NULL,
  `ts` int(5) NOT NULL,
  `p.v_cc` int(5) NOT NULL,
  `renov_cc` int(5) NOT NULL,
  `rect_cc` int(5) NOT NULL,
  `dupli_cc` int(5) NOT NULL,
  `pv_ti` int(5) NOT NULL,
  `dupli_ti` int(5) NOT NULL,
  `rect_ti` int(5) NOT NULL,
  `renov_ti` int(5) NOT NULL,
  `no_procesado` int(5) NOT NULL,
  `total` int(9) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raft11`
--

CREATE TABLE `raft11` (
  `id` int(11) NOT NULL,
  `semana_fecha_i` date NOT NULL,
  `material_sin_recepcionar` int(5) NOT NULL,
  `item` varchar(40) NOT NULL,
  `pv_cc` int(5) NOT NULL,
  `renov_cc` int(5) NOT NULL,
  `rect_cc` int(5) NOT NULL,
  `dupl_cc` int(5) NOT NULL,
  `pv_ti` int(5) NOT NULL,
  `dupl_ti` int(5) NOT NULL,
  `rect_ti` int(5) NOT NULL,
  `renov_ti` int(11) NOT NULL,
  `no_procesado` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raft41`
--

CREATE TABLE `raft41` (
  `id_REPROCESOS` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id` int(15) NOT NULL,
  `nro_preparacion` int(10) NOT NULL,
  `nro_sticker` int(10) NOT NULL,
  `observaciones` varchar(60) CHARACTER SET utf8 NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `Tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `Tipo_usuario`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `Tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `usuario`, `pass`, `Tipo_usuario`) VALUES
(2, 'ANDRES FELIPE', 'AMARIS PEREA', 'apardor', '1234', 2),
(4, 'JORGE LUIS', 'CASTILLA TEHERAN', 'jlcastilla', 'Admin4620+', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`nombre_municipio`);

--
-- Indices de la tabla `oficina`
--
ALTER TABLE `oficina`
  ADD PRIMARY KEY (`codigo_oficina`),
  ADD KEY `codigo_oficina` (`codigo_oficina`),
  ADD KEY `id` (`id`),
  ADD KEY `codigo_oficina_2` (`codigo_oficina`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `raft04`
--
ALTER TABLE `raft04`
  ADD PRIMARY KEY (`cons_lote`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `raft06`
--
ALTER TABLE `raft06`
  ADD PRIMARY KEY (`n_preparacion`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `raft07`
--
ALTER TABLE `raft07`
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `raft08`
--
ALTER TABLE `raft08`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `raft10`
--
ALTER TABLE `raft10`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `raft11`
--
ALTER TABLE `raft11`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `raft41`
--
ALTER TABLE `raft41`
  ADD PRIMARY KEY (`id_REPROCESOS`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Tipo_usuario` (`Tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `oficina`
--
ALTER TABLE `oficina`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24401;
--
-- AUTO_INCREMENT de la tabla `raft08`
--
ALTER TABLE `raft08`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `raft10`
--
ALTER TABLE `raft10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `raft11`
--
ALTER TABLE `raft11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `raft41`
--
ALTER TABLE `raft41`
  MODIFY `id_REPROCESOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `raft04`
--
ALTER TABLE `raft04`
  ADD CONSTRAINT `raft04_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `raft06`
--
ALTER TABLE `raft06`
  ADD CONSTRAINT `raft06_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `raft07`
--
ALTER TABLE `raft07`
  ADD CONSTRAINT `raft07_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `raft08`
--
ALTER TABLE `raft08`
  ADD CONSTRAINT `raft08_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `raft10`
--
ALTER TABLE `raft10`
  ADD CONSTRAINT `raft10_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `raft11`
--
ALTER TABLE `raft11`
  ADD CONSTRAINT `raft11_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `raft41`
--
ALTER TABLE `raft41`
  ADD CONSTRAINT `raft41_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Tipo_usuario`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
