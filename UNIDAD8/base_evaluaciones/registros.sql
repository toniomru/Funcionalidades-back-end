-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2022 a las 17:33:43
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpavanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `usuario` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`usuario`, `password`) VALUES
('antoniopaniagua27@gmail.com', '$2y$10$sY72BlOoK70jnE9hsrMhx.xarlp1PGE69oUWzV.h04KzcbClwQsCe'),
('jacinto@gmail.com', '$2y$10$Wj3T.r15FOyNo.Cyh8dJHe3wvzCReEsNy.4Z/uClzd4gtPkTqdH6a'),
('juan@gmail.com', '$2y$10$./VMwGgSmExMyPc6zrP5Nu8NtNEIXgUDAfO8a8LPri2yMqdHijEw2'),
('lucas@gmail.com', '$2y$10$.qm1XNUo9j9RNZM0Q.PAe.ceNN2S8x3TVVrYUJM9YnoEO8mNKsN/W'),
('pepe@gmail.com', '$2y$10$A7nhfeL6.NSEwS.THqOaL.gru7.TYrFAtIBuonJ4u3jCkIsmXpp/a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
