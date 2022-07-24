-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2022 a las 00:29:06
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sis-ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `descripcion`, `imagen`) VALUES
(1, 'Portatiles', 'https://static.acer.com/up/Resource/Acer/Laptops/Nitro_5/Image/20211227/Nitro5-AN517-42-rgbkb-Backlit-modelmain.png'),
(2, 'Laptops', 'https://compusystemperu.com/wp-content/uploads/2021/03/omen-1.jpg'),
(3, 'Smartphones', 'https://shared.cdn.smp.schibsted.com/v2/images/ae1d543d-f146-4487-a0c6-3677fee936b1?fit=crop&format=auto&h=576&w=1025&s=0dc539e77ae19988553e875e5e65c14abdf27b6e'),
(4, 'Cpu', 'https://ae01.alicdn.com/kf/Haa4c402fd351415a84b1412773b3726fm/Win10-16GB-Ram-SSD-HDD-1TB-256GB-SSD-PC-gamer-escritorio-computadora-i5-E5-2650-CPU.jpg'),
(5, 'Monitores', 'http://s3.amazonaws.com/imagenes-sellers-mercado-ripley/2021/04/01133055/13.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
