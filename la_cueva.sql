-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2026 a las 13:55:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `la_cueva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `id_actor` int(11) NOT NULL,
  `nombre_completo` varchar(200) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`id_actor`, `nombre_completo`, `edad`, `sexo`) VALUES
(1, 'Robert De Niro', 82, 'Masculino'),
(2, 'Al Pacino', 86, 'Masculino'),
(3, 'Meryl Streep', 76, 'Femenino'),
(4, 'Tom Hanks', 69, 'Masculino'),
(5, 'Leonardo DiCaprio', 51, 'Masculino'),
(6, 'Denzel Washington', 71, 'Masculino'),
(7, 'Morgan Freeman', 89, 'Masculino'),
(8, 'Nombre_Completo', 0, 'Sexo'),
(9, 'Nombre_Completo', 0, 'Sexo'),
(10, 'Christian Bale', 52, 'Masculino'),
(11, 'Scarlett Johansson', 41, 'Femenino'),
(12, 'Cate Blanchett', 57, 'Femenino'),
(13, 'Natalie Portman', 45, 'Femenino'),
(14, 'Kate Winslet', 50, 'Femenino'),
(15, 'Joaquin Phoenix', 51, 'Masculino'),
(16, 'Anthony Hopkins', 88, 'Masculino'),
(17, 'Gary Oldman', 68, 'Masculino'),
(18, 'Samuel L. Jackson', 77, 'Masculino'),
(19, 'Matt Damon', 55, 'Masculino'),
(20, 'Hugh Jackman', 57, 'Masculino'),
(21, 'Robert Downey Jr.', 61, 'Masculino'),
(22, 'Cillian Murphy', 50, 'Masculino'),
(23, 'Matthew McConaughey', 56, 'Masculino'),
(24, 'Edward Norton', 56, 'Masculino'),
(25, 'Willem Dafoe', 70, 'Masculino'),
(26, 'Amy Adams', 51, 'Femenino'),
(27, 'Jessica Chastain', 49, 'Femenino'),
(28, 'Charlize Theron', 50, 'Femenino'),
(29, 'Viola Davis', 60, 'Femenino'),
(30, 'Frances McDormand', 68, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id_contenido` int(11) NOT NULL,
  `contenido` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id_contenido`, `contenido`) VALUES
(2, 'Infantil'),
(8, 'adulto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `id_cuenta` int(11) NOT NULL,
  `nombre_usuario` varchar(200) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `id_tarjeta` int(11) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `id_plan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id_cuenta`, `nombre_usuario`, `correo`, `contraseña`, `id_tarjeta`, `id_rol`, `id_plan`) VALUES
(66, 'mateo', 'mateosayago07@gmail.com', '1231', NULL, 1, 2),
(73, 'mateo', 'mateosayago@gmail.com', '123', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id_director` int(11) NOT NULL,
  `nombre_completo` varchar(200) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id_director`, `nombre_completo`, `edad`, `sexo`) VALUES
(2, 'Martin Scorsese', 83, 'masculino'),
(3, 'Christopher Nolan', 55, 'masculino'),
(4, 'Quentin Tarantino', 63, 'masculino'),
(5, 'Greta Gerwig', 42, 'femenino'),
(6, 'Denis Villeneuve', 58, 'masculino'),
(7, 'Guillermo del Toro', 61, 'masculino'),
(8, 'James Cameron', 71, 'masculino'),
(9, 'David Fincher', 63, 'masculino'),
(10, 'Ridley Scott', 88, 'masculino'),
(11, 'Sofia Coppola', 55, 'femenino'),
(12, 'Bong Joon Ho', 56, 'masculino'),
(13, 'Pedro Almodóvar', 76, 'masculino'),
(14, 'Kathryn Bigelow', 74, 'femenino'),
(15, 'Alfonso Cuarón', 64, 'masculino'),
(16, 'Wes Anderson', 57, 'masculino'),
(17, 'Tim Burton', 67, 'masculino'),
(18, 'Coen Joel', 71, 'masculino'),
(19, 'Jane Campion', 72, 'femenino'),
(20, 'David Lynch', 80, 'masculino'),
(21, 'Hayao Miyazaki', 85, 'masculino'),
(22, 'Chloé Zhao', 44, 'femenino'),
(23, 'Stanley Kubrick', 70, 'masculino'),
(24, 'Alfred Hitchcock', 80, 'masculino'),
(25, 'Francis Ford Coppola', 87, 'masculino'),
(26, 'Patty Jenkins', 54, 'femenino'),
(27, 'Peter Jackson', 64, 'masculino'),
(28, 'George Lucas', 82, 'masculino'),
(29, 'Lana Wachowski', 60, 'femenino'),
(30, 'Alejandro González Iñárritu', 62, 'masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre`) VALUES
(1, 'Acción'),
(2, 'Ciencia ficción'),
(3, 'Comedia'),
(4, 'Drama'),
(5, 'Terror'),
(6, 'Suspenso'),
(7, 'Romance'),
(8, 'Aventura'),
(9, 'Fantasía'),
(10, 'Animación'),
(11, 'Documental'),
(12, 'Musical'),
(13, 'Misterio'),
(14, 'Crimen'),
(15, 'Policial'),
(16, 'Western'),
(17, 'Bélico'),
(18, 'Histórico'),
(19, 'Biográfico'),
(20, 'Familiar'),
(21, 'Deportes'),
(22, 'Psicológico'),
(23, 'Slasher'),
(24, 'Gore'),
(25, 'Cine negro'),
(26, 'Artes marciales'),
(27, 'Superhéroes'),
(28, 'Espionaje'),
(29, 'Parodia'),
(30, 'Antología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `saga` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_contenido` int(11) NOT NULL,
  `trailer_url` varchar(200) NOT NULL,
  `pelicula_url` varchar(200) NOT NULL,
  `foto_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `nombre`, `saga`, `duracion`, `descripcion`, `id_contenido`, `trailer_url`, `pelicula_url`, `foto_url`) VALUES
(7, 'Scary movie 6', 2, 1, 'adadawwdawd', 0, '../consultas/trailer/1781464798_Roblox-2026-05-31T19_40_42.177Z.mp4', '../consultas/videos/1781464798_Roblox-2026-05-31T19_40_42.177Z.mp4', '../consultas/fotos/1781464798_Captura de pantalla 2026-05-24 203558.png'),
(10, 'Scary movie 6', 2, 1, 'adadawwdawd', 0, '../consultas/trailer/1781468418_arbol.jpg', '../consultas/videos/1781468418_Captura de pantalla 2026-05-24 203558.png', '../consultas/fotos/1781468418_Captura de pantalla 2026-05-27 225922.png'),
(11, 'Scary movie 6', 2, 1, 'ahoraasi', 0, '../consultas/trailer/1781468431_arbol.jpg', '../consultas/videos/1781468431_Captura de pantalla 2026-05-24 203558.png', '../consultas/fotos/1781468431_Captura de pantalla 2026-05-27 225922.png'),
(12, 'sonic', 1, 132, 'Hamburguesa completa con tomate,huevo,lechuga y queos cheddar.', 0, '../consultas/trailer/1782924789_videoplayback (2).mp4', '../consultas/videos/1782924789_videoplayback (2).mp4', '../consultas/fotos/1782924789_WhatsApp Image 2026-06-28 at 21.24.05.jpeg'),
(13, 'mateo adaw3dawdawd', 123, 132, 'Hamburguesa completa con tomate,huevo,lechuga y queos cheddar.grsgsefSEFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFESESESESESESESESESES', 0, '../consultas/trailer/1783288551_VbIVXmW4HO3YSzf_Dead By Daylight - Scream Live Wallpaper_12_103712.mp4', '../consultas/videos/1783288551_VbIVXmW4HO3YSzf_Dead By Daylight - Scream Live Wallpaper_12_103712.mp4', '../consultas/fotos/1783288551_fantasy-warrior-art-live-wallpaper.png'),
(14, 'mateo', 1, 132, '<br /><b>Warning</b>:  Undefined variable $row in <b>C:xampphtdocsproyectoupdate.php</b> on line <b>11</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampp', 0, '../consultas/trailer/1783289660_Roblox-2026-05-31T19_40_42.177Z.mp4', '../consultas/videos/1783289660_Roblox-2026-05-31T19_40_42.177Z.mp4', '../consultas/fotos/1783289660_Captura de pantalla (10).png'),
(15, 'dawdawd', 1, 132, 'lo mejor del fakin planeta ', 2, '../consultas/trailer/1783450602_Captura de pantalla 2026-07-05 223539.png', '../consultas/videos/1783450602_WhatsApp Image 2026-06-28 at 21.24.05.jpeg', '../consultas/fotos/1783450602_Captura de pantalla 2026-07-05 223539.png'),
(16, 'mateo', 1, 123, 'Hamburguesa completa con tomate,huevo,lechuga y queos cheddar.', 8, '../consultas/trailer/1783479032_Captura de pantalla 2026-07-07 202129.png', '../consultas/videos/1783479032_Captura de pantalla 2026-07-07 201959.png', '../consultas/fotos/1783479032_Captura de pantalla 2026-07-05 223539.png'),
(17, 'Sayago', 1, 132, 'Hamburguesa completa con tomate,huevo,lechuga y queos cheddar.', 8, '../consultas/trailer/1783479367_Captura de pantalla 2026-07-07 202129.png', '../consultas/videos/1783479367_Captura de pantalla 2026-07-07 201959.png', '../consultas/fotos/1783479367_Captura de pantalla 2026-07-07 201541.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_actores`
--

CREATE TABLE `peliculas_actores` (
  `id_peliculas_actores` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_actores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas_actores`
--

INSERT INTO `peliculas_actores` (`id_peliculas_actores`, `id_pelicula`, `id_actores`) VALUES
(11, 7, 10),
(10, 7, 14),
(9, 7, 15),
(16, 10, 13),
(17, 11, 13),
(18, 12, 14),
(19, 12, 15),
(20, 13, 13),
(21, 13, 14),
(23, 14, 13),
(24, 15, 2),
(25, 15, 12),
(26, 16, 12),
(27, 16, 14),
(29, 17, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_directores`
--

CREATE TABLE `peliculas_directores` (
  `id_peliculas_directores` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_directores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas_directores`
--

INSERT INTO `peliculas_directores` (`id_peliculas_directores`, `id_pelicula`, `id_directores`) VALUES
(8, 7, 2),
(12, 11, 3),
(13, 12, 2),
(14, 12, 5),
(15, 14, 3),
(16, 15, 2),
(17, 17, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_generos`
--

CREATE TABLE `peliculas_generos` (
  `id_peliculas_generos` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas_generos`
--

INSERT INTO `peliculas_generos` (`id_peliculas_generos`, `id_pelicula`, `id_genero`) VALUES
(14, 7, 2),
(15, 7, 3),
(16, 7, 9),
(20, 10, 2),
(22, 11, 2),
(23, 12, 2),
(24, 12, 3),
(25, 14, 3),
(26, 15, 1),
(27, 17, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `foto_url` varchar(200) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `id_contenido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombre`, `foto_url`, `id_cuenta`, `id_contenido`) VALUES
(13, 'mateo', '../consultas/fotos_perfiles/1783478795_Captura de pantalla 2026-07-07 202129.png', 66, 2),
(14, 'mateo', '../consultas/fotos_perfiles/1783478953_Captura de pantalla 2026-07-07 201541.png', 73, 2),
(15, 'Sayago', '../consultas/fotos_perfiles/1783479388_Captura de pantalla 2026-07-07 201541.png', 73, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `perfiles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id_plan`, `nombre`, `perfiles`) VALUES
(1, 'Basico', 2),
(2, 'Premium', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Cliente\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscribcion`
--

CREATE TABLE `suscribcion` (
  `id_suscribcion` int(11) NOT NULL,
  `fecha-inicio` time NOT NULL,
  `fecha-fin` time NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `id_plan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `id_tarjeta` int(11) NOT NULL,
  `fecha-caducidad` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id_contenido`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`id_cuenta`),
  ADD UNIQUE KEY `id_tarjeta` (`id_tarjeta`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_plan` (`id_plan`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id_director`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `id_contenido` (`id_contenido`);

--
-- Indices de la tabla `peliculas_actores`
--
ALTER TABLE `peliculas_actores`
  ADD PRIMARY KEY (`id_peliculas_actores`),
  ADD UNIQUE KEY `id_pelicula` (`id_pelicula`,`id_actores`),
  ADD KEY `id_actores` (`id_actores`);

--
-- Indices de la tabla `peliculas_directores`
--
ALTER TABLE `peliculas_directores`
  ADD PRIMARY KEY (`id_peliculas_directores`),
  ADD UNIQUE KEY `id_pelicula` (`id_pelicula`,`id_directores`),
  ADD KEY `id_directores` (`id_directores`);

--
-- Indices de la tabla `peliculas_generos`
--
ALTER TABLE `peliculas_generos`
  ADD PRIMARY KEY (`id_peliculas_generos`),
  ADD UNIQUE KEY `id_pelicula` (`id_pelicula`,`id_genero`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `id_cuenta` (`id_cuenta`),
  ADD KEY `id_contenido` (`id_contenido`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `suscribcion`
--
ALTER TABLE `suscribcion`
  ADD PRIMARY KEY (`id_suscribcion`),
  ADD UNIQUE KEY `id_cuenta` (`id_cuenta`),
  ADD UNIQUE KEY `id_plan` (`id_plan`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`id_tarjeta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actor`
--
ALTER TABLE `actor`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id_contenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `peliculas_actores`
--
ALTER TABLE `peliculas_actores`
  MODIFY `id_peliculas_actores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `peliculas_directores`
--
ALTER TABLE `peliculas_directores`
  MODIFY `id_peliculas_directores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `peliculas_generos`
--
ALTER TABLE `peliculas_generos`
  MODIFY `id_peliculas_generos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `suscribcion`
--
ALTER TABLE `suscribcion`
  MODIFY `id_suscribcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id_tarjeta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `cuenta_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `cuenta_ibfk_2` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id_plan`);

--
-- Filtros para la tabla `peliculas_actores`
--
ALTER TABLE `peliculas_actores`
  ADD CONSTRAINT `peliculas_actores_ibfk_1` FOREIGN KEY (`id_actores`) REFERENCES `actor` (`id_actor`),
  ADD CONSTRAINT `peliculas_actores_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`);

--
-- Filtros para la tabla `peliculas_directores`
--
ALTER TABLE `peliculas_directores`
  ADD CONSTRAINT `peliculas_directores_ibfk_1` FOREIGN KEY (`id_directores`) REFERENCES `director` (`id_director`),
  ADD CONSTRAINT `peliculas_directores_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`);

--
-- Filtros para la tabla `peliculas_generos`
--
ALTER TABLE `peliculas_generos`
  ADD CONSTRAINT `peliculas_generos_ibfk_3` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`),
  ADD CONSTRAINT `peliculas_generos_ibfk_4` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`);

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id_cuenta`) REFERENCES `cuenta` (`id_cuenta`),
  ADD CONSTRAINT `perfil_ibfk_2` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`);

--
-- Filtros para la tabla `suscribcion`
--
ALTER TABLE `suscribcion`
  ADD CONSTRAINT `suscribcion_ibfk_2` FOREIGN KEY (`id_cuenta`) REFERENCES `cuenta` (`id_cuenta`);

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `tarjeta_ibfk_1` FOREIGN KEY (`id_tarjeta`) REFERENCES `cuenta` (`id_tarjeta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
