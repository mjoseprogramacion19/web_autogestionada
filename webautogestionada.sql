-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2019 a las 10:14:39
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
-- Base de datos: `webautogestionada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(4) NOT NULL,
  `nombre_bebida` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` float(4,2) NOT NULL,
  `orden_plato` enum('primero','segundo','postre') NOT NULL,
  `menu_activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre_bebida`, `precio`, `orden_plato`, `menu_activo`) VALUES
(1, 'vino reserva', 15.00, 'primero', 0),
(2, 'vino de la casa', 8.00, 'primero', 0),
(3, 'sangría', 8.50, 'primero', 0),
(4, 'refrescos', 3.00, 'primero', 0),
(5, 'agua ', 1.50, 'primero', 0),
(6, 'cerveza', 2.50, 'primero', 0),
(7, 'cerveza sin alcohol', 2.50, 'primero', 0),
(8, 'zumo', 2.50, 'primero', 0),
(9, 'vino blanco', 8.50, 'primero', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `id` int(4) NOT NULL,
  `nombre_plato` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden_plato` enum('primeros','segundos','postres') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` float(4,2) NOT NULL,
  `menu_activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `nombre_plato`, `orden_plato`, `precio`, `menu_activo`) VALUES
(1, 'Paella mixta', 'primeros', 15.00, 0),
(2, 'Cocido Madrileño', 'primeros', 12.00, 1),
(3, 'Gazpacho manchego', 'primeros', 12.00, 1),
(4, 'Pollo al horno', 'segundos', 10.00, 1),
(5, 'Bacalao con alioli', 'segundos', 15.00, 1),
(6, 'Calamares a la romana', 'segundos', 12.00, 1),
(7, 'Pan de calatrava', 'postres', 5.00, 1),
(8, 'Tarta de chocolate', 'postres', 5.00, 1),
(9, 'Fruta de temporada', 'postres', 4.50, 1),
(10, 'Lasaña boloñesa', 'primeros', 15.00, 1),
(11, 'Patatas bravas', 'primeros', 5.00, 0),
(12, 'Dorada a al espalda', 'segundos', 9.95, 1),
(13, 'Tarta al Whisky', 'postres', 4.50, 1),
(14, 'Merluza en salsa verde', 'segundos', 10.50, 1),
(15, 'calamares a la romana', 'segundos', 10.00, 1),
(17, 'hamburguesa', 'primeros', 5.00, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
