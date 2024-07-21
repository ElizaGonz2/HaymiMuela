-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2024 a las 18:49:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sis_clinica_dental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `nombre_cita` varchar(60) NOT NULL,
  `correo_cita` varchar(100) DEFAULT NULL,
  `telefono_cita` varchar(12) NOT NULL,
  `asunto_cita` varchar(45) DEFAULT NULL,
  `fecha_cita` date NOT NULL,
  `hora_cita` time NOT NULL,
  `estado_cita` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `nombre_cita`, `correo_cita`, `telefono_cita`, `asunto_cita`, `fecha_cita`, `hora_cita`, `estado_cita`) VALUES
(4, 'Juan Perez', 'juan.perez@example.com', '987654321', 'Revisión General', '2024-07-05', '10:00:00', 1),
(5, 'Maria Lopez', 'maria.lopez@example.com', '987654322', 'Limpieza Dental', '2024-07-06', '11:00:00', 1),
(6, 'Carlos Ruiz', NULL, '987654323', 'Ortodoncia', '2024-07-07', '09:30:00', 1),
(7, 'Ana Torres', 'ana.torres@example.com', '987654324', 'Blanqueamiento Dental', '2024-07-08', '14:00:00', 0),
(8, 'Luis Mendoza', 'luis.mendoza@example.com', '987654325', 'Implante Dental', '2024-07-09', '16:00:00', 0),
(9, 'Sofia Castillo', NULL, '987654326', 'Endodoncia', '2024-07-10', '13:00:00', 1),
(10, 'Miguel Rojas', 'miguel.rojas@example.com', '987654327', 'Emergencia Dental', '2024-07-11', '08:30:00', 1),
(11, 'Lucia Diaz', 'lucia.diaz@example.com', '987654328', 'Revisión General', '2024-07-12', '12:00:00', 0),
(12, 'Ricardo Garcia', NULL, '987654329', 'Limpieza Dental', '2024-07-13', '15:00:00', 1),
(14, 'Jorge Sanchez', 'jorge.sanchez@example.com', '987654331', 'Blanqueamiento Dental', '2024-07-15', '11:30:00', 0),
(16, 'David Morales', NULL, '987654333', 'Endodoncia', '2024-07-17', '10:30:00', 0),
(19, 'Jorge Chávez Huincho', 'salas@gmail.com', '453252354254', 'endodoncia', '2024-07-17', '12:37:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `telefono_cliente` varchar(15) NOT NULL,
  `correo_cliente` varchar(100) NOT NULL,
  `contrasena_cliente` varchar(100) NOT NULL,
  `estado_cliente` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL,
  `lugar_dc` varchar(50) NOT NULL,
  `direccion_dc` varchar(100) NOT NULL,
  `correo_dc` varchar(100) NOT NULL,
  `telefono_dc` varchar(15) NOT NULL,
  `whatsapp_dc` varchar(12) DEFAULT NULL,
  `estado_dc` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `id_doctor` int(11) NOT NULL,
  `nombre_doctor` varchar(100) NOT NULL,
  `especialidad_doctor` varchar(100) NOT NULL,
  `foto_doctor` varchar(100) NOT NULL,
  `facebook_doctor` varchar(100) DEFAULT NULL,
  `linkedin_doctor` varchar(100) DEFAULT NULL,
  `whatsaap_doctor` varchar(12) DEFAULT NULL,
  `twitter_doctor` varchar(100) DEFAULT NULL,
  `estado_doctor` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_contactos`
--

CREATE TABLE `form_contactos` (
  `id_form_contacto` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `teléfono` varchar(12) NOT NULL,
  `asunto` varchar(45) DEFAULT NULL,
  `mensaje` text DEFAULT NULL,
  `estado_form_contacto` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id_galeria` int(11) NOT NULL,
  `imagen_galeria` varchar(100) NOT NULL,
  `estado_galeria` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_atencion`
--

CREATE TABLE `horario_atencion` (
  `id_horario_atencion` int(11) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `dias` varchar(50) NOT NULL,
  `estado` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id_red_social` int(11) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `ticktok` varchar(100) DEFAULT NULL,
  `estado_red_social` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `icono_servicio` text NOT NULL,
  `cant_doctor` int(11) NOT NULL,
  `imagen_servicio` varchar(100) DEFAULT NULL,
  `titulo_servicio` varchar(50) NOT NULL,
  `descripcion_servicio` text NOT NULL,
  `estado_servicio` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sobre_nosotros`
--

CREATE TABLE `sobre_nosotros` (
  `id_sobre_sn` int(11) NOT NULL,
  `titulo_sn` varchar(100) NOT NULL,
  `imagen_sn` varchar(100) NOT NULL,
  `descripcion_sn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `sobre_nosotros`
--

INSERT INTO `sobre_nosotros` (`id_sobre_sn`, `titulo_sn`, `imagen_sn`, `descripcion_sn`) VALUES
(4, 'Servicios Dentales de Calidad para tu Mejor Sonrisa', '../vistas/img/nosotros/202407061751456765.jpg', 'En Hay mi muela, nos dedicamos a brindarte la mejor atención dental con un enfoque personalizado y humano. Nuestro equipo de profesionales altamente calificados se compromete a cuidar de tu salud bucal con la más avanzada tecnología y los tratamientos más innovadores.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `telefono_usuario` varchar(15) NOT NULL,
  `perfil_usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(45) NOT NULL,
  `contrasena_usuario` varchar(100) NOT NULL,
  `estado_usuario` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `telefono_usuario`, `perfil_usuario`, `correo_usuario`, `contrasena_usuario`, `estado_usuario`) VALUES
(1, 'Jorge Chávez', '920468500', 'Administrador', 'admin@gmail.com', '$2a$07$asxx54ahjppf45sd87a5aucL0WWD/O3DENMIUJY0JlAFgImdNaGRC', 1),
(8, 'Juan', '920468502', 'Administrador', 'juan@gmail.com', '$2a$07$asxx54ahjppf45sd87a5au389pj9UNnjUuM8dkH28h9IlDwaurgxe', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo_cliente`),
  ADD UNIQUE KEY `telefono_UNIQUE` (`telefono_cliente`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`id_doctor`);

--
-- Indices de la tabla `form_contactos`
--
ALTER TABLE `form_contactos`
  ADD PRIMARY KEY (`id_form_contacto`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Indices de la tabla `horario_atencion`
--
ALTER TABLE `horario_atencion`
  ADD PRIMARY KEY (`id_horario_atencion`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id_red_social`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `sobre_nosotros`
--
ALTER TABLE `sobre_nosotros`
  ADD PRIMARY KEY (`id_sobre_sn`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `telefono_usuario_UNIQUE` (`telefono_usuario`),
  ADD UNIQUE KEY `correo_usuario_UNIQUE` (`correo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `id_doctor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario_atencion`
--
ALTER TABLE `horario_atencion`
  MODIFY `id_horario_atencion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id_red_social` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sobre_nosotros`
--
ALTER TABLE `sobre_nosotros`
  MODIFY `id_sobre_sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
