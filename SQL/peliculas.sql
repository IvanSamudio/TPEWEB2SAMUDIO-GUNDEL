-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2018 a las 18:00:07
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

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
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_peliculas` tinyint(4) NOT NULL,
  `nombre` varchar(400) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `id_puntaje` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_peliculas`, `nombre`, `descripcion`, `id_puntaje`) VALUES
(1, 'viernes 13', 'buena', 9),
(3, 'viernes 13 PART 2', 'BUENA', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

CREATE TABLE `personaje` (
  `id_personaje` tinyint(4) NOT NULL,
  `nombrePersonaje` varchar(300) NOT NULL,
  `id_pelicula` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personaje`
--

INSERT INTO `personaje` (`id_personaje`, `nombrePersonaje`, `id_pelicula`) VALUES
(1, 'Sra. Voorhees,\r\nAlice Hardy,\r\nBill Brown,\r\nJack Burrell/Marand,\r\nMarcie Cunningham/Stanler,\r\nBrenda Jones,\r\nNed Rubenstein,\r\nAnnie Phillips,\r\nSteve Christy,\r\nEnos,\r\nel loco Ralph,\r\nBarry Jackson,\r\nClaudette Hayes,\r\nJason Voorhees\r\n', 1),
(4, 'Jason 2', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` tinyint(4) NOT NULL,
  `nombreUsuario` varchar(300) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombreUsuario`, `pass`) VALUES
(1, 'Ivan', '$2y$10$YlR.NTGAYlqVNjORg/A2ceGlwtNv0pudn7pOZ33ID0FF1RAtQLBou');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_peliculas` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personaje`
--
ALTER TABLE `personaje`
  MODIFY `id_personaje` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD CONSTRAINT `personaje_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_peliculas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
