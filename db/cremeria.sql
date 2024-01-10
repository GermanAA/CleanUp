-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 06-02-2021 a las 22:42:34
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cremeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `Ruta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id_product`, `nombre`, `categoria`, `precio`, `Ruta`) VALUES
(5, 'Leche Alpura', 'Lacteos', '26.30', 'LecheAlpura.jpg'),
(6, 'Chips Amarillas', 'papas', '20.00', 'ChipsAmarillas.jpg'),
(7, 'ChipsFuego', 'Papas', '20.00', 'ChipsFuego.jpg'),
(8, 'Yoghurt', 'Lacteo', '9.00', 'yoghurt.jpg'),
(9, 'Leche Alpura', 'Lacteos', '26.30', 'LecheAlpura.jpg'),
(10, 'Chips Amarillas', 'papas', '20.00', 'ChipsAmarillas.jpg'),
(11, 'ChipsFuego', 'Papas', '20.00', 'ChipsFuego.jpg'),
(12, 'Yoghurt', 'Lacteo', '9.00', 'yoghurt.jpg'),
(13, 'Leche Alpura', 'Lacteos', '26.30', 'LecheAlpura.jpg'),
(14, 'Chips Amarillas', 'papas', '20.00', 'ChipsAmarillas.jpg'),
(15, 'ChipsFuego', 'Papas', '20.00', 'ChipsFuego.jpg'),
(16, 'Yoghurt', 'Lacteos', '10.00', 'yoghurt.jpg'),
(17, 'Sabritas 50gr', 'Botanas', '14.00', 'sabritas.jpg'),
(18, 'Coca-Cola', 'Refrescos', '23.00', 'cocacola1.5.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
