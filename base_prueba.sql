-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2017 a las 02:11:48
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_prueba`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteFriend` (IN `cod` INT)  BEGIN
Delete from amigos where id = cod;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertFriend` (IN `nom` VARCHAR(50), IN `ape` VARCHAR(50), IN `tel` INT)  BEGIN
Insert Into amigos(nombres,apellido,telefono) values (nom, ape, tel);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ShowFriend` ()  BEGIN
 SELECT * FROM amigos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateFriend` (IN `cod` INT, IN `nom` VARCHAR(50), IN `ape` VARCHAR(50), IN `tel` INT)  BEGIN
Update amigos set nombres = nom, apellido= ape, telefono = tel where id = cod;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigos`
--

CREATE TABLE `amigos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `amigos`
--

INSERT INTO `amigos` (`id`, `nombres`, `apellido`, `telefono`) VALUES
(2, 'Jose', ' Hurtado', 999888111),
(3, 'Nathaly', 'MuÃ±oz', 987654321),
(9, 'Oscar', 'Tapia', 963159741),
(14, 'Rodrigo', 'Gutierrez', 951753480),
(15, 'Abel', 'Sanchez', 987951456),
(16, 'Eduardo  ', 'Mantequilla  ', 951123000),
(17, 'Sebastian', 'Ortella', 987963100),
(22, 'Elena ', 'Salsero ', 985946789),
(25, 'Diana', 'Melendez', 945963123),
(28, 'Carla', 'Choque', 963751123),
(29, 'Estefani', 'Peralta', 988963456),
(35, 'Luis', 'Tarmile', 905698741),
(36, 'Fernanda', 'Rodrigues', 978258956),
(38, 'Ana', 'Chapiro', 910258778),
(39, 'Rosario', 'Lapa', 994157756),
(40, 'Sofia', 'Poma', 900456778),
(41, 'Miguel', 'Grau', 981004006),
(43, 'Josefina', 'Valter ', 987963541),
(44, 'Lucila', 'Campos', 987159874);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Idu` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `renta_activa` tinyint(1) NOT NULL,
  `direccion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(12) NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Idu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amigos`
--
ALTER TABLE `amigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Idu` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
