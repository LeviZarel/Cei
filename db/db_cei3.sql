-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2018 a las 07:43:39
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_cei3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `ID_GRUPO` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DESCRIPCION` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `HABILITADO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`ID_GRUPO`, `NOMBRE`, `DESCRIPCION`, `HABILITADO`) VALUES
(1, 'grupo 1', 'grupo de prueba con mas', 1),
(2, 'grupo 2', 'grupo dos de prueba', 1),
(3, 'grupo 3', 'descripción del grupo tres', 1),
(4, 'grupo X', 'grupo X descripción para probar que tan largo puede ser esta wea', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nino`
--

CREATE TABLE `nino` (
  `ID_NINO` int(11) NOT NULL,
  `ID_TUTOR` int(11) DEFAULT NULL,
  `ID_RELACION_TUTOR` int(11) DEFAULT NULL,
  `ID_GRUPO` int(11) DEFAULT NULL,
  `URL_FOTO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NOMBRE` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `AP_PATERNO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `AP_MATERNO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `GENERO` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CI` int(11) DEFAULT NULL,
  `FECHA_NACIMIENTO` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_REGISTRO` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `HABILITADO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nino`
--

INSERT INTO `nino` (`ID_NINO`, `ID_TUTOR`, `ID_RELACION_TUTOR`, `ID_GRUPO`, `URL_FOTO`, `NOMBRE`, `AP_PATERNO`, `AP_MATERNO`, `GENERO`, `CI`, `FECHA_NACIMIENTO`, `FECHA_REGISTRO`, `HABILITADO`) VALUES
(1, 1, 2, 1, 'juan.jpg', 'Juan', 'Azure', 'Garcia', 'masculino', 654321, '10/01/2010', '08/11/2018', 1),
(2, 3, 1, 2, 'gimena.jpg', 'Rocio', 'Rocabado', 'Soles', 'femenino', 1234521, '13/06/2012', '08/11/2018', 1),
(3, 1, 1, 2, 'miguel1.jpg', 'Miguel', 'Andrade', 'Villanueva', 'masculino', 123211, '27/11/2018', '08/11/2018', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `ID_PREGUNTA` int(11) NOT NULL,
  `ID_TIPO_PREGUNTA` int(11) DEFAULT NULL,
  `ID_PRUEBA` int(11) DEFAULT NULL,
  `INSTRUCCION` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PREGUNTA` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RESP_3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RESP_2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RESP_1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RESP_0` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CAMPO_RESPUESTA` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `HABILITADO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`ID_PREGUNTA`, `ID_TIPO_PREGUNTA`, `ID_PRUEBA`, `INSTRUCCION`, `PREGUNTA`, `RESP_3`, `RESP_2`, `RESP_1`, `RESP_0`, `CAMPO_RESPUESTA`, `HABILITADO`) VALUES
(1, 5, 1, 'Se le pide escribir su nombre', 'Empecemos, escribe tu nombre', 'No escribe nada', 'Escribe de forma ilegible', 'Solo escribe su nombre', 'Escribe legible', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `ID_PRUEBA` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DESCRIPCION` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_REGISTRO` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `HABILITADO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`ID_PRUEBA`, `NOMBRE`, `DESCRIPCION`, `FECHA_REGISTRO`, `HABILITADO`) VALUES
(1, 'Test inicial', 'Tes realizado a los que inician por primera vez\r\nNOTA: solo sera la única para la demo del sistema', '09/11/2018', 1),
(2, 'Prueba dos', 'Para niños que ya vienen por segunda vez', '10/11/2018', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_tutor`
--

CREATE TABLE `relacion_tutor` (
  `ID_RELACION_TUTOR` int(11) NOT NULL,
  `CATEGORIA` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DESCRIPCION` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `relacion_tutor`
--

INSERT INTO `relacion_tutor` (`ID_RELACION_TUTOR`, `CATEGORIA`, `DESCRIPCION`) VALUES
(1, 'Padre o Madre', 'Progenitor o progenitora del niño'),
(2, 'Tio (a)', 'Pariente cercano, hermano o hermana del padre o madre'),
(3, 'Hermano (a)', 'Pariente mas próximo del niño');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `ID_RESULTADO` int(11) NOT NULL,
  `ID_NINO` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `CALIF_PREG_1` smallint(6) DEFAULT NULL,
  `CALIF_PREG_2` smallint(6) DEFAULT NULL,
  `CALIF_PREG_3` smallint(6) DEFAULT NULL,
  `CALIF_PREG_4` smallint(6) DEFAULT NULL,
  `CALIF_PREG_5` smallint(6) DEFAULT NULL,
  `CALIF_PREG_6` smallint(6) DEFAULT NULL,
  `CALIF_PREG_7` smallint(6) DEFAULT NULL,
  `CALIF_PREG_8` smallint(6) DEFAULT NULL,
  `CALIF_PREG_9` smallint(6) DEFAULT NULL,
  `CALIF_PREG_10` smallint(6) DEFAULT NULL,
  `CALIF_PREG_11` smallint(6) DEFAULT NULL,
  `CALIF_PREG_12` smallint(6) DEFAULT NULL,
  `PROMEDIO` decimal(9,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pregunta`
--

CREATE TABLE `tipo_pregunta` (
  `ID_TIPO_PREGUNTA` int(11) NOT NULL,
  `TIPO_PREGUNTA` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_pregunta`
--

INSERT INTO `tipo_pregunta` (`ID_TIPO_PREGUNTA`, `TIPO_PREGUNTA`) VALUES
(2, 'audio'),
(3, 'imagen'),
(1, 'normal'),
(4, 'oraciones'),
(5, 'preguntas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `ID_TIPO_USUARIO` int(11) NOT NULL,
  `NOMBRE_TIPO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ID_TIPO_USUARIO`, `NOMBRE_TIPO`) VALUES
(1, 'Administrador'),
(2, 'Colaborador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `ID_TUTOR` int(11) NOT NULL,
  `NOMBRE` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `AP_PATERNO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `AP_MATERNO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_NACIMIENTO` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESTADO_CIVIL` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CI` int(11) DEFAULT NULL,
  `FECHA_REGISTRO` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`ID_TUTOR`, `NOMBRE`, `AP_PATERNO`, `AP_MATERNO`, `FECHA_NACIMIENTO`, `ESTADO_CIVIL`, `CI`, `FECHA_REGISTRO`) VALUES
(1, 'Roberto', 'Andrade', 'Perez', '07/11/1987', 'soltero (a)', 12345678, '10/10/2018'),
(3, 'Andrea', 'soles', 'zuares', '16/10/2018', 'casado (a)', 2147483647, '01/11/2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_TIPO_USUARIO` int(11) DEFAULT NULL,
  `NOMBRE_COMPLETO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CORREO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DEPARTAMENTO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CI` int(11) DEFAULT NULL,
  `TELF` int(11) DEFAULT NULL,
  `HABILITADO` tinyint(1) DEFAULT NULL,
  `NOMBRE_USUARIO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CLAVE` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CLAVE_TEMPORAL` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `ID_TIPO_USUARIO`, `NOMBRE_COMPLETO`, `CORREO`, `DEPARTAMENTO`, `CI`, `TELF`, `HABILITADO`, `NOMBRE_USUARIO`, `CLAVE`, `CLAVE_TEMPORAL`) VALUES
(1, 1, 'Administrador', 'admincito70@gmail.com', 'Cochabamba', 7040406, 44454523, 1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 2, 'Ariel Galvez', 'arielgp_70@gmail.com', 'Cochabamba', 7934341, 76918956, 1, 'ariel123', 'f3aae7c9146cdcd71a14eb8e6055ae5c91b41add', 'f3aae7c9146cdcd71a14eb8e6055ae5c91b41add'),
(4, 2, 'Lorena Zuares', 'loreaa120@gmail.com', 'Beni', 3243256, 32432435, 1, 'qwerty123', '19b58543c85b97c5498edfd89c11c3aa8cb5fe51', '19b58543c85b97c5498edfd89c11c3aa8cb5fe51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`ID_GRUPO`),
  ADD UNIQUE KEY `ID_GRUPO` (`ID_GRUPO`),
  ADD UNIQUE KEY `NOMBRE` (`NOMBRE`);

--
-- Indices de la tabla `nino`
--
ALTER TABLE `nino`
  ADD PRIMARY KEY (`ID_NINO`),
  ADD UNIQUE KEY `ID_NINO` (`ID_NINO`),
  ADD UNIQUE KEY `CI` (`CI`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`ID_PREGUNTA`),
  ADD UNIQUE KEY `ID_PREGUNTA` (`ID_PREGUNTA`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`ID_PRUEBA`),
  ADD UNIQUE KEY `ID_TEST` (`ID_PRUEBA`),
  ADD UNIQUE KEY `NOMBRE` (`NOMBRE`);

--
-- Indices de la tabla `relacion_tutor`
--
ALTER TABLE `relacion_tutor`
  ADD PRIMARY KEY (`ID_RELACION_TUTOR`),
  ADD UNIQUE KEY `ID_RELACION_TUTOR` (`ID_RELACION_TUTOR`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`ID_RESULTADO`),
  ADD UNIQUE KEY `ID_RESULTADO` (`ID_RESULTADO`);

--
-- Indices de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  ADD PRIMARY KEY (`ID_TIPO_PREGUNTA`),
  ADD UNIQUE KEY `ID_TIPO_PREGUNTA` (`ID_TIPO_PREGUNTA`),
  ADD UNIQUE KEY `TIPO_PREGUNTA` (`TIPO_PREGUNTA`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`ID_TIPO_USUARIO`),
  ADD UNIQUE KEY `ID_TIPO_USUARIO` (`ID_TIPO_USUARIO`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`ID_TUTOR`),
  ADD UNIQUE KEY `ID_TUTOR` (`ID_TUTOR`),
  ADD UNIQUE KEY `CI` (`CI`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD UNIQUE KEY `ID_USUARIO` (`ID_USUARIO`),
  ADD UNIQUE KEY `CI` (`CI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `ID_GRUPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `nino`
--
ALTER TABLE `nino`
  MODIFY `ID_NINO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `ID_PREGUNTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `ID_PRUEBA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `relacion_tutor`
--
ALTER TABLE `relacion_tutor`
  MODIFY `ID_RELACION_TUTOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `ID_RESULTADO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  MODIFY `ID_TIPO_PREGUNTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `ID_TIPO_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `ID_TUTOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
