-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2021 a las 23:30:48
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `primax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login_user`
--

INSERT INTO `login_user` (`id`, `nombre`, `user_name`, `pass`) VALUES
(1, 'Mateo', 'te0msk', '12345'),
(2, 'edgar', 'eg', '12345'),
(3, 'juanjo', 'jj', '12345'),
(4, 'oscar', 'oc', '12345'),
(5, 'ana', 'an', '12345'),
(6, 'marlon', 'ml', '12345'),
(7, 'pepe', 'pp', '12345'),
(8, 'seven', 'sz', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblempleados`
--

CREATE TABLE `tblempleados` (
  `Tipo_Identificacion` varchar(11) NOT NULL,
  `Numero_identificacion` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Sexo` varchar(11) NOT NULL,
  `Direccion` varchar(80) NOT NULL,
  `Contacto_Familiar` varchar(60) NOT NULL,
  `Parentesco` varchar(60) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Cargo` varchar(60) NOT NULL,
  `Tipo_Contrato` varchar(60) NOT NULL,
  `Estado` varchar(60) NOT NULL,
  `Fecha_Ingreso` date DEFAULT NULL,
  `Fecha_Terminacion` date DEFAULT NULL,
  `Motivo_Terminacion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblempleados`
--

INSERT INTO `tblempleados` (`Tipo_Identificacion`, `Numero_identificacion`, `Nombre`, `Apellidos`, `Sexo`, `Direccion`, `Contacto_Familiar`, `Parentesco`, `Telefono`, `Cargo`, `Tipo_Contrato`, `Estado`, `Fecha_Ingreso`, `Fecha_Terminacion`, `Motivo_Terminacion`) VALUES
('CC', 1036683205, 'Mateo', 'Ortiz Jaramillo ', 'Masculino', 'DG 47A#17 SUR -27 APTO 901', 'Andrey jaramillo', 'Padre', '5859159', 'Administrador', 'Indefinido', 'Innactivo', '2021-05-07', '0000-00-00', ''),
('CC', 32300066, 'Mariana', 'Fernandez Ocampo', 'Femenino', 'calle 45 # 65 - 12', 'Juliana Fernandez', 'Hermana', '3114587765', 'Lider de servicio', 'Servicios', 'Activo', '2021-05-03', '0000-00-00', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
