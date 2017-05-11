-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2017 a las 15:55:13
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdproductos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id` int(11) NOT NULL,
  `titulo_producto` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ds_producto` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`id`, `titulo_producto`, `ds_producto`, `foto`) VALUES
(1, 'Medias', 'Medias de futbol blancas 3A', 'mico1.jpg'),
(2, 'Pantaloneta', 'Pantaloneta de hombre color verde, diferentes tallas.', 'mico2.jpg'),
(3, 'Chaqueta', 'Chaqueta de hombre estilos variados y recomendados para el frío, sin embargo se puede utilizar de forma casual, existencias en varios colores y tallas.', 'chaqueta.jpg'),
(4, 'Sudadera', 'Sudadera deportiva de hombre, varios colores y tallas, disponible para compras en linea o en nuestras tiendas.', 'sudadera.jpg'),
(5, 'prueba', 'jajajaja jajajja jajaja', 'nofoto.jpg'),
(6, 'otro', 'prueba prueba prueba', 'C:\\fakepath\\mi_cedula_1.jpg'),
(7, 'uno mas', 'uno mas de las imagenes que estoy probando para la carga en el servidor, con hp y Ajax obvio utilizando jQuery', 'nofoto.jpg'),
(8, 'ultima prueba', 'ultima', 'nofoto.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
