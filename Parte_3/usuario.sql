-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 05:01:26
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE `datospersonales` (
  `N_DOCUMENTO` varchar(15) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDO` varchar(50) NOT NULL,
  `EDAD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`N_DOCUMENTO`, `NOMBRE`, `APELLIDO`, `EDAD`) VALUES
('US001', 'Diiego', 'Camiino', '18'),
('US002', 'Ana', 'López', '25'),
('US003', 'Carlos', 'Gómez', '30'),
('US004', 'María', 'Rodríguez', '22'),
('US005', 'Juan', 'Pérez', '28'),
('US006', 'Laura', 'Martínez', '29'),
('US007', 'Pedro', 'Sánchez', '32'),
('US008', 'Sofía', 'García', '27'),
('US009', 'Javier', 'Lara', '24'),
('US010', 'Elena', 'Fernández', '26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuario`
--

CREATE TABLE `datos_usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_usuario`
--

INSERT INTO `datos_usuario` (`id_usuario`, `usuario`, `password`) VALUES
(1, 'diiego@gmail.com', '1212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_PRODUCTO` varchar(11) NOT NULL,
  `SECCION` varchar(50) NOT NULL,
  `PRODUCTO` varchar(50) NOT NULL,
  `ORIGEN` varchar(50) NOT NULL,
  `IMPORTADO` varchar(50) NOT NULL,
  `PRECIO` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_PRODUCTO`, `SECCION`, `PRODUCTO`, `ORIGEN`, `IMPORTADO`, `PRECIO`) VALUES
('', '', '', '', '', 0),
('AR01', 'CERÁMICA', 'Tubos', 'China', 'VERDADERO', 1400),
('AR02', 'CERÁMICA', 'Plato Decorativo', 'China', 'FALSO', 4500),
('AR03', 'CERÁMICA', 'Juego de te', 'China', 'FALSO', 36000),
('AR04', 'CERÁMICA', 'Cenicero', 'Japón', 'VERDADERO', 16000),
('AR05', 'CERÁMICA', 'Maceta', 'España', 'VERDADERO', 24000),
('AR06', 'CERÁMICA', 'Jarra china', 'China', 'VERDADERO', 106000),
('AR07', 'CONFECCIÓN', 'Tarje Caballero', 'Italia', 'FALSO', 800000),
('AR08', 'CONFECCIÓN', 'Pantalón Señora', 'Marruecos', 'VERDADERO', 138000),
('AR09', 'CONFECCIÓN', 'Camisa Caballero', 'España', 'VERDADERO', 57000),
('AR10', 'CONFECCIÓN', 'Blusa Sra.', 'China', 'VERDADERO', 62999),
('AR11', 'CONFECCIÓN', 'Cazadora piel', 'Italia', 'VERDADERO', 436000),
('AR12', 'CONFECCIÓN', 'Abrigo Caballero', 'Italia', 'VERDADERO', 203000),
('AR13', 'CONFECCIÓN', 'Abrigo Sra', 'Marruecos', 'VERDADERO', 300000),
('AR14', 'CONFECCIÓN', 'Cinturón de piel', 'España', 'VERDADERO', 40000),
('AR15', 'DEPORTE', 'Raqueta Tenis', 'Usa', 'VERDADERO', 78000),
('AR16', 'DEPORTE', 'Chándal', 'Usa', 'FALSO', 193000),
('AR17', 'DEPORTE', 'Tren Eléctrico', 'Japón', 'FALSO', 125400),
('AR18', 'DEPORTE', 'Pistola Olímpica', 'Suecia', 'VERDADERO', 39000),
('AR19', 'DEPORTE', 'Monopatín', 'Marruecos', 'VERDADERO', 93000),
('AR20', 'DEPORTE', 'Balón baloncesto', 'Japón', 'VERDADERO', 63000),
('AR21', 'DEPORTE', 'Balón Fútbol', 'España', 'VERDADERO', 37000),
('AR22', 'DEPORTE', 'Sudadera', 'Usa', 'VERDADERO', 366000),
('AR23', 'DEPORTE', 'Bicicleta de montaña', 'Usa', 'VERDADERO', 470000),
('AR24', 'FERRETERÍA', 'Destornillador', 'España', 'FALSO', 6000),
('AR25', 'FERRETERÍA', 'Serrucho', 'Francia', 'FALSO', 25000),
('AR26', 'FERRETERÍA', 'Llave Inglesa', 'Usa', 'VERDADERO', 20000),
('AR27', 'FERRETERÍA', 'Alicates', 'Italia', 'VERDADERO', 6000),
('AR28', 'FERRETERÍA', 'Martillo', 'España', 'VERDADERO', 10000),
('AR29', 'FERRETERÍA', 'Destornillador', 'Francia', 'VERDADERO', 8000),
('AR30', 'FERRETERÍA', 'Lima Grande', 'España', 'VERDADERO', 18000),
('AR31', 'FERRETERÍA', 'Juego de brocas', 'Taiwán', 'FALSO', 13000),
('AR32', 'JUGUETERÍA', 'Coche Teledirigido', 'Marruecos', 'FALSO', 133000),
('AR33', 'JUGUETERÍA', 'Correpasillos', 'Japón', 'VERDADERO', 86000),
('AR34', 'JUGUETERÍA', 'Consola Video', 'Usa', 'VERDADERO', 3690000),
('AR35', 'JUGUETERÍA', 'Muñeca Andadora', 'España', 'VERDADERO', 88000),
('AR36', 'JUGUETERÍA', 'Fuerte de soldados', 'Japón', 'FALSO', 120000),
('AR37', 'JUGUETERÍA', 'Pistola con sonidos', 'España', 'FALSO', 48000),
('AR38', 'JUGUETERÍA', 'Pie de lámpara', 'Turquía', 'VERDADERO', 33000),
('AR39', 'JUGUETERÍA', 'Camion de plastico', 'España', 'VERDADERO', 15000),
('AR40', 'JUGUETERÍA', 'Cocina de juguete', 'Colombia', 'FALSO', 2000),
('AR41', 'JUGETERÍA', 'Cubo Rubik', 'Colombia', 'FALSO', 30000),
('AR42', 'JUGUETERÍA', 'Posillo de Plastico', 'China', 'VERDADERO', 200),
('AR43', 'JUGUETERÍA', 'Castillo', 'Japon', 'VERDADERO', 45000),
('cxcxc', 'xcxcxc', 'xcxc', 'xcxcx', 'VERDADERO', 1231),
('sdsds', 'dsd', 'dsds', 'dsdsds', 'VERDADERO', 12121);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datospersonales`
--
ALTER TABLE `datospersonales`
  ADD PRIMARY KEY (`N_DOCUMENTO`);

--
-- Indices de la tabla `datos_usuario`
--
ALTER TABLE `datos_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRODUCTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_usuario`
--
ALTER TABLE `datos_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
