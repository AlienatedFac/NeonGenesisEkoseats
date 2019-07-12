-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2019 a las 21:43:40
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ekoseat_bdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id_usuario`, `id_producto`, `cantidad`) VALUES
(1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `descripcion_producto` text NOT NULL,
  `stock_producto` int(11) NOT NULL,
  `precio_producto` decimal(10,0) NOT NULL,
  `imagenes` text NOT NULL,
  `tipo_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `descripcion_producto`, `stock_producto`, `precio_producto`, `imagenes`, `tipo_producto`, `id_usuario`) VALUES
(1, 'Sala Tarima', 'Sala tipo tarima , madera nueva de pino se fabrica en cualquier tono o acabado', 100, '3', 'images/1/1/1.jpg', 1, 1),
(3, 'Sala de Madera', 'Pequeño sofás con material de madera reciclado, incluye las tres piezas que se ven en la imagen y el centro de la sala de igual manera.', 10, '2500', 'images/1/3/1.jpg', 1, 1),
(4, 'Sala de Tarimas Blanca', 'Sala blanca con madera reciclada con un color blanco que le da un estilo más elegante y con cojines a elegir', 10, '2000', 'images/1/4/1.jpg', 1, 1),
(5, 'Sala de Tarima Multicolor', 'Se puede llevar la sala y el centro por un precio razonable en este tipo de sala se ofrecen más colores, se tienen en gris, blanco y color madera natural.', 100, '2000', 'images/1/5/1.jpg', 1, 1),
(6, 'Sala de Madera con Cojines Blancos', 'Por un precio razonable usted se puede llevar este par de sofás en color madera natural y con unos cojines blancos que le dan un toque elgante', 10, '3000', 'images/1/6/1.jpg', 1, 1),
(7, 'Sofa de Cojin Gris', 'Sofá mediano de color blanco con un cojín color azul, por el momento es el único color y modelo que se manejan., se tienen en gris, blanco y color madera natural.', 100, '3000', 'images/1/7/1.jpg', 1, 1),
(8, 'Sala sin Espacios', 'Sala sin espacios que viene con un centro del mismo material que la sala, madera que está pintada de un color blanco. No incluye cojines.', 10, '2000', 'images/1/8/1.jpg', 1, 1),
(9, 'Sofas Cuadrados', 'Par de sofás en venta, con un estilo sencillo hecho de madera.', 10, '600', 'images/1/9/1.jpg', 1, 1),
(10, 'Sala de Madera Sencilla', ': Sala sin espacios que viene con un centro del mismo material que la sala, madera que está pintada de un color madera natural. No incluye cojines.', 10, '800', 'images/1/10/1.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES
(1, 'salas'),
(2, 'comedores'),
(3, 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `apellidos_usuario` varchar(20) NOT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `clave_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellidos_usuario`, `correo_usuario`, `clave_usuario`) VALUES
(1, 'Fernando', 'Araujo Cruz', 'substratum21@gmail.com', '8675');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `tipo_producto` (`tipo_producto`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`tipo_producto`) REFERENCES `tipo` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
