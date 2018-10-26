-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 06:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peliculas`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelicula`
--

CREATE TABLE `pelicula` (
  `id_peliculas` tinyint(4) NOT NULL,
  `nombre` varchar(400) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `id_puntaje` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelicula`
--

INSERT INTO `pelicula` (`id_peliculas`, `nombre`, `descripcion`, `id_puntaje`) VALUES
(1, 'viernes 13', 'buena', 9);

-- --------------------------------------------------------

--
-- Table structure for table `personaje`
--

CREATE TABLE `personaje` (
  `id_personaje` tinyint(4) NOT NULL,
  `nombre_personaje` varchar(300) NOT NULL,
  `id_pelicula` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personaje`
--

INSERT INTO `personaje` (`id_personaje`, `nombre_personaje`, `id_pelicula`) VALUES
(1, 'Sra. Voorhees,\r\nAlice Hardy,\r\nBill Brown,\r\nJack Burrell/Marand,\r\nMarcie Cunningham/Stanler,\r\nBrenda Jones,\r\nNed Rubenstein,\r\nAnnie Phillips,\r\nSteve Christy,\r\nEnos,\r\nel loco Ralph,\r\nBarry Jackson,\r\nClaudette Hayes,\r\nJason Voorhees\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` tinyint(4) NOT NULL,
  `nombreUsuario` varchar(300) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombreUsuario`, `pass`) VALUES
(1, 'Ivan', '$2y$10$YlR.NTGAYlqVNjORg/A2ceGlwtNv0pudn7pOZ33ID0FF1RAtQLBou');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_peliculas`),
  ADD KEY `id_peliculas` (`id_peliculas`);

--
-- Indexes for table `personaje`
--
ALTER TABLE `personaje`
  ADD PRIMARY KEY (`id_personaje`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_peliculas` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personaje`
--
ALTER TABLE `personaje`
  MODIFY `id_personaje` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personaje`
--
ALTER TABLE `personaje`
  ADD CONSTRAINT `personaje_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_peliculas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
