-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2022 a las 01:09:19
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Monitor MSI OPTIX G24VC 75Hz', 'Panel LCD de 23.6\" con retroiluminación LED (1920 x 1080 Full HD) Panel curvo 1800R ¿ Más adecuado p', 899, 'https://oechsle.vteximg.com.br/arquivos/ids/8830921-1000-1000/imageUrl_2.jpg?v=637890457999400000'),
(3, 'CPU intel core i7 8gb ssd-480gb', 'PROCESADOR INTEL CORE I7-10700 2.90GHz-4.80GHz DECIMA GENERACION, PLACA B560, MEMORIA 8GB DDR4, DISC', 2699, '   https://m.media-amazon.com/images/I/91LSF1iZUFL._AC_SY355_.jpg'),
(4, 'Galaxy S22 Ultra 256gb 12ram Negro', 'Galaxy S22 Ultra 256gb 12ram Negro', 5199, 'https://images.samsung.com/is/image/samsung/assets/pe/home/SM-S908EDRMLTP-A1-MO.png?$264_264_PNG$');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Nombre`, `apellidos`, `usuario`, `password`) VALUES
(1, 'Emerson', 'Venegas', 'venegas', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
