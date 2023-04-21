-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2023 a las 00:35:40
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php-jobsaid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `idEmpresa` int(5) NOT NULL,
  `nombreempresa` varchar(50) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL,
  `CorreoEmpresa` varchar(50) NOT NULL,
  `nit` int(5) NOT NULL,
  `numerotelefono` int(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`idEmpresa`, `nombreempresa`, `nombreusuario`, `CorreoEmpresa`, `nit`, `numerotelefono`, `password`, `foto`) VALUES
(12, 'tcs', 'laura pozole', 'tcs@gmail.com', 123456789, 123456789, '94c91d28e8d5ca5ccf212e768ac921', ''),
(13, 'linea Grafica', 'Matusalen', 'linea@gmail.com', 123456789, 123456789, '25f9e794323b453885f5181f1b624d', ''),
(14, 'Zara', 'prueba@gmail.com', 'Zara♠4gmail.com', 11234568, 313321, '25f9e794323b453885f5181f1b624d', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaentrevistas`
--

CREATE TABLE `listaentrevistas` (
  `Id_entrevista` int(5) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `listaEntrevistas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`listaEntrevistas`)),
  `fechaEntrevista` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `listaentrevistas`
--

INSERT INTO `listaentrevistas` (`Id_entrevista`, `idEmpresa`, `listaEntrevistas`, `fechaEntrevista`) VALUES
(1, 13, '[{\"nombreEntrevista\":\"estrevista de david\",\"fechaEntrevista\":\"\",\"idI\":\"a5ba6de2-c3c0-4a2b-9002-d95f79452b3d\"},{\"nombreEntrevista\":\"estrevista de david\",\"fechaEntrevista\":\"\",\"idI\":\"1702a3ed-32a4-4e03-8912-b9db91b2a4a1\"}]', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta empleo`
--

CREATE TABLE `oferta empleo` (
  `id_vacante` int(11) NOT NULL,
  `industria` varchar(60) NOT NULL,
  `titulo_vacante` varchar(60) NOT NULL,
  `LugarEmpleo` varchar(20) NOT NULL,
  `numeroVacantes` int(2) NOT NULL,
  `sueldo` int(10) NOT NULL,
  `tiempoPago` varchar(30) NOT NULL,
  `descripcion_vacante` varchar(300) NOT NULL,
  `CorreoAlertas` varchar(50) NOT NULL,
  `modalidad` varchar(30) NOT NULL,
  `idEmpresa` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oferta empleo`
--

INSERT INTO `oferta empleo` (`id_vacante`, `industria`, `titulo_vacante`, `LugarEmpleo`, `numeroVacantes`, `sueldo`, `tiempoPago`, `descripcion_vacante`, `CorreoAlertas`, `modalidad`, `idEmpresa`) VALUES
(8, 'call center', 'Servicio al Cliente', 'cali', 2, 750000, 'indefinido', 'SÓLO SERVICIO AL CLIENTE\r\n\r\nTrabajarás directamente con el área de Support para brindar asistencia a los clientes a través de chats y/o llamadas.\r\n\r\nEntrenamiento Y Operación Mixta (presencial y virtual)\r\n\r\nPERFIL REQUERIDO:\r\n\r\n- Contar con experiencia de al menos 3 meses en call center o servicio a', 'iii@gmail.com]', 'presencial', 12),
(10, 'programacion', 'Desarrollador Senior Java', 'Bogota D.C', 3, 650000, 'mesual', 'Importante multinacional de tecnologia requiere contratar Java FullStack Senior Developer Bilingue Remoto.\r\n\r\n-Profesional en ingenieria de sistemas o afines.\r\n\r\n- 6+ años de experiencia en desarrollo de aplicaciones web del lado del servidor de subprocesos múltiples, implementación de aplicaciones ', 'info@programadores.com', 'indefinido', 13),
(11, '', 'Auxiliar Contable', 'Medellin', 5, 1450000, 'quinceinal', 'Importante empresa ubicada en la ciudad de Medellín, requiere para su equipo de trabajo Auxiliar Contable que tenga como mínimo 1 año de experiencia en las siguientes funciones:\r\n\r\n- Facturación\r\n\r\n- Notas Crédito\r\n\r\n- Recibos de Caja\r\n\r\n- Causación compras y gastos\r\n\r\n- Manejo caja menor\r\n\r\n- Reali', 'asistentes@gmail.com', 'medio tiempo', 13),
(12, 'coccina', 'cocinero', 'soacha', 1, 1300000, 'semanal', '¿Eres apasionado por la cocina y te gustaría trabajar en un ambiente dinámico y en constante aprendizaje?\r\n\r\n¡Tenemos la oferta perfecta para ti!\r\n\r\nEn GSH estamos en busca de un Auxiliar de Cocina para trabajar en las plazoletas de los centros comerciales de Bogotá, Medellín, Rionegro, Envigado y C', 'cocineros@gmail.com', 'presencial', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacionesusuario`
--

CREATE TABLE `postulacionesusuario` (
  `id` int(5) NOT NULL,
  `Id_usuario` int(5) NOT NULL,
  `id_vacante` int(5) NOT NULL,
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `postulacionesusuario`
--

INSERT INTO `postulacionesusuario` (`id`, `Id_usuario`, `id_vacante`, `idEmpresa`) VALUES
(11, 22, 8, 0),
(28, 22, 10, 0),
(29, 22, 11, 0),
(30, 58, 11, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_sesion`
--

CREATE TABLE `registro_sesion` (
  `Id_usuario` int(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `profesion` varchar(30) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `cv` text NOT NULL,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_sesion`
--

INSERT INTO `registro_sesion` (`Id_usuario`, `nombre`, `apellido`, `correo`, `telefono`, `ciudad`, `profesion`, `clave`, `foto`, `cv`, `usuario`) VALUES
(3, 'Michael Ortega', '', 'Michael2021@gmail.com', '', '', '', 'b5bc58989e75ca2cc4ff3dd81a769be1', '../imagenes/uploads/imgPerfil.png', '', ''),
(5, 'Juan Jose', '', 'JJ_ponce@gmail.com', '', '', '', '42ec364ffd19cff6321d803bdcedec81', '../imagenes/uploads/imgPerfil.png', '', ''),
(7, 'Cristian', '', 'cristian_parlon@gmail.com', '', '', '', 'f4762d59c7a9b269f6764e8b8d0ad640', '../imagenes/uploads/imgPerfil.png', '', ''),
(8, 'Julian', '', 'julian@gmail.com', '', '', '', 'b5bc58989e75ca2cc4ff3dd81a769be1', '../imagenes/uploads/imgPerfil.png', '', ''),
(9, 'Isabella', '', 'Isabella_bella@gmail.com', '', '', '', '0ec4ea08aa80f63837682d90704cf3ab', '../imagenes/uploads/imgPerfil.png', '', ''),
(11, 'Maicol Poloche', '', 'eren_g@gmail.com', '', 'bogota', '', '6ebe76c9fb411be97b3b0d48b791a7c9', '../imagenes/uploads/imgPerfil.png', '', ''),
(13, 'Carlos ', '', 'carlos@gmail.com', '', '', '', 'eec4f29f9693da477a748c9ac24bbf69', '../imagenes/uploads/imgPerfil.png', '', ''),
(14, 'Karen Giraldo', '', 'karen@gmail.com', '', '', '', '04c036b017a05d0a8e685f5f1adafa7a', '../imagenes/uploads/imgPerfil.png', '', ''),
(15, 'Brayan Lopez', '', 'brayan@gmail.com', '', '', '', 'b8acfbe7cda8d59e0d6b03326e598815', '../imagenes/uploads/imgPerfil.png', '', ''),
(16, 'Jennifer Maldonado', '', 'j_maldonado@gmail.com', '', '', '', 'ed3e663c86505bd50ee75e6f323ed9ca', '../imagenes/uploads/imgPerfil.png', '', ''),
(17, 'Valentina Vargas', '', 'valen_v@gmail.com', '', '', '', 'e020e8840ff6fc0519cb2e9c47e37e20', '../imagenes/uploads/imgPerfil.png', '', ''),
(18, 'Albeiro Gomez', '', 'albeiro2000@gmail.com', '', 'bogota', '', 'b0d793edefd91d5f6fa6e8b1fe553576', '../imagenes/uploads/imgPerfil.png', '', ''),
(19, 'Tito Perez', '', 'tito_p@gmail.com', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', '../imagenes/uploads/imgPerfil.png', '', ''),
(20, 'Diego Arboleda', '', 'arboliggy@gmail.com', '', 'medellin', '', 'd41d8cd98f00b204e9800998ecf8427e', '../imagenes/uploads/imgPerfil.png', '', ''),
(21, 'Mickey mouse', '', 'Mickeydrogo@gmail.com', '', 'medellin', '', 'c6c0329bba537835e48e2be9a8e9c8f7', '../imagenes/uploads/imgPerfil.png', '', ''),
(22, 'esperanzota', 'Gomezita', 'prueba@gmail.com', '3115268996', 'bogota', 'entretenimiento', '123456789', 'img/uploads/81GTod5TLQL._SL1500_.jpg', '../img/uploads/hola.pdf', 'elMaik'),
(52, 'alonso', 'pepito', 'alonso@gmail.com', '3115268996', 'bucaramanga', 'auxcontable', 'Tcs123!', '', '', ''),
(54, 'alex', 'leaxito', 'alex@gmail.com', '3133074565', 'cali', 'diseñador', '123456', '', '', ''),
(58, 'ichigo', 'kurosaki', 'ichigo@gmail.com', '3133074565', 'japoin', 'segadordealmas', '12345678', '../imagenes/uploads/imgPerfil.png', '', ''),
(59, 'jesus', 'cano', 'jesuscano@gmail.com', '3123568996', 'bogota', 'Asistente administrativo', '', '', '', ''),
(60, 'jesus', 'cano', 'jesuscano@gmail.com', '3123568996', 'bogota', 'Asistente administrativo', '', '', '', ''),
(61, 'hola', 'hola', 'hola', '32156', 'bogota', 'd', '', '', '', ''),
(62, 'alberto', 'cano', 'albertojesus@gmail.com', '3124567896', 'Bogota', 'Asistente administrativo', '25f9e794323b453885f5181f1b624d0b', '', '', ''),
(64, '', '', '', '', '', '', '25f9e794323b453885f5181f1b624d0b', 'img/uploads/perfil.png', '', ''),
(65, 'alejo', 'chacon', 'alejito@gmail.com', '321', 'bogota', 'bogota', '202cb962ac59075b964b07152d234b70', 'img/uploads/perfil.png', '', ''),
(66, 'hola', 'hola', 'hola@gmail.com', '3214567896', 'bogota', 'bogota', '123', 'img/uploads/perfil2.png', '', ''),
(67, 'brayan', 'menjura', 'brayan@gmail.com', '3214567896', 'soacha', 'vagancia', '123456789', 'img/uploads/perfil2.png', '', ''),
(68, 'estiven', 'poloche', 'estiven@gmail.com', '3133072443', 'Bogota', 'Diseñador', '6ebe76c9fb411be97b3b0d48b791a7c9', 'img/uploads/perfil2.png', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `listaentrevistas`
--
ALTER TABLE `listaentrevistas`
  ADD PRIMARY KEY (`Id_entrevista`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Indices de la tabla `oferta empleo`
--
ALTER TABLE `oferta empleo`
  ADD PRIMARY KEY (`id_vacante`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Indices de la tabla `postulacionesusuario`
--
ALTER TABLE `postulacionesusuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Is_usuario` (`Id_usuario`,`id_vacante`),
  ADD KEY `id_vacante` (`id_vacante`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Indices de la tabla `registro_sesion`
--
ALTER TABLE `registro_sesion`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idEmpresa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `listaentrevistas`
--
ALTER TABLE `listaentrevistas`
  MODIFY `Id_entrevista` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oferta empleo`
--
ALTER TABLE `oferta empleo`
  MODIFY `id_vacante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `postulacionesusuario`
--
ALTER TABLE `postulacionesusuario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `registro_sesion`
--
ALTER TABLE `registro_sesion`
  MODIFY `Id_usuario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `listaentrevistas`
--
ALTER TABLE `listaentrevistas`
  ADD CONSTRAINT `listaentrevistas_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresas` (`idEmpresa`);

--
-- Filtros para la tabla `oferta empleo`
--
ALTER TABLE `oferta empleo`
  ADD CONSTRAINT `oferta empleo_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresas` (`idEmpresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `postulacionesusuario`
--
ALTER TABLE `postulacionesusuario`
  ADD CONSTRAINT `postulacionesusuario_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `registro_sesion` (`Id_usuario`),
  ADD CONSTRAINT `postulacionesusuario_ibfk_2` FOREIGN KEY (`id_vacante`) REFERENCES `oferta empleo` (`id_vacante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
