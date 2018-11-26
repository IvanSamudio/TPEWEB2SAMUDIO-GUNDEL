-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 19:17:48
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_peliculas` tinyint(4) NOT NULL,
  `id_usuario` tinyint(4) NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_peliculas`, `id_usuario`, `id_comentario`, `comentario`, `puntaje`) VALUES
(6, 1, 6, 'dasdas', 3),
(4, 1, 7, 'sadsa', 3),
(1, 1, 32, 'ME GUSTO', 5),
(58, 1, 39, 'HAY QUE BONITO PAPEL', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_peliculas` tinyint(4) NOT NULL,
  `imagen` text NOT NULL,
  `nombre` varchar(400) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `id_puntaje` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_peliculas`, `imagen`, `nombre`, `descripcion`, `id_puntaje`) VALUES
(1, 'images/5bf9244d0c0b5.jpg', 'viernes 13', 'BUENA', 9),
(4, 'images/5bf9245b16191.jpg', 'Viernes 13 part 2', 'BUENA', 9),
(5, 'images/5bf9246e2b428.jpg', 'Viernes 13 part 3', 'BUENA', 7),
(6, 'images/5bf92481d1003.jpg', 'Viernes 13 part 4', 'BUENA', 8),
(7, 'images/5bf924ab095f5.jpg', 'Viernes 13 part 5', 'MALA', 4),
(33, 'images/5bf925c176204.jpg', 'Viernes 13 part 6', 'EXCELENTE', 10),
(34, 'images/5bf9332d65c42.jpg', 'viernes 13 part 7', 'BUENA', 7),
(42, 'images/5bf9335ed9c24.jpg', 'viernes 13 part 8', 'BUENA', 8),
(43, 'images/5bf948c64732b.jpg', 'viernes 13 part 9', 'MALA', 2),
(44, 'images/5bf9491b42706.jpg', 'JASON X', 'BUENA', 7),
(45, 'images/5bf9560737443.jpg', 'Freddy vs. Jason', 'BUENA', 7),
(48, 'images/5bf96399372e6.jpg', 'viernes 13 2009', 'EXCELENTE', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

CREATE TABLE `personaje` (
  `id_personaje` tinyint(4) NOT NULL,
  `imagen` text NOT NULL,
  `nombrePersonaje` varchar(300) NOT NULL,
  `id_pelicula` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personaje`
--

INSERT INTO `personaje` (`id_personaje`, `imagen`, `nombrePersonaje`, `id_pelicula`) VALUES
(1, '', 'Sra. Voorhees,\r\nAlice Hardy,\r\nBill Brown,\r\nJack Burrell/Marand,\r\nMarcie Cunningham/Stanler,\r\nBrenda Jones,\r\nNed Rubenstein,\r\nAnnie Phillips,\r\nSteve Christy,\r\nEnos,\r\nel loco Ralph,\r\nBarry Jackson,\r\nClaudette Hayes,\r\nJason Voorhees\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` tinyint(4) NOT NULL,
  `nombreUsuario` varchar(300) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombreUsuario`, `pass`, `admin`) VALUES
(1, 'Ivan', '$2y$10$YlR.NTGAYlqVNjORg/A2ceGlwtNv0pudn7pOZ33ID0FF1RAtQLBou', 1),
(7, 'JULIO', '$2y$10$1C4C/UWjzsml4rSwTFmn4.MBK//wTClUSl5mxVEc6XOI/v3IkTNDe', 0),
(8, 'pedro', '$2y$10$/ArSqMXoEbZd7xf5Ad5cMuibeUgHYa8y78iMuBJunQ5eY.KzoZb4u', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_peliculas`),
  ADD KEY `id_peliculas` (`id_peliculas`);

--
-- Indices de la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD PRIMARY KEY (`id_personaje`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_peliculas` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `personaje`
--
ALTER TABLE `personaje`
  MODIFY `id_personaje` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD CONSTRAINT `personaje_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_peliculas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
