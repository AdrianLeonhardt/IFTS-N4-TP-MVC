-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2022 a las 01:23:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logistics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `cuit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `name`, `lastname`, `cuit`) VALUES
(10, 'matias', 'ramirezas', '2147483647'),
(26, 'matias', 'ramiasr', '2147483647'),
(27, 'lucas', 'leon', '2147483647'),
(28, 'asd', 'asd', '2147483647'),
(31, 'matias', 'ramirezas', '20351592037'),
(32, 'adrian ', 'ronaldo', '30159243576');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entryproducts`
--

CREATE TABLE `entryproducts` (
  `id` int(11) NOT NULL,
  `idproducts` int(11) DEFAULT NULL,
  `suppliers_id` int(11) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  `createUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `entryproducts`
--

INSERT INTO `entryproducts` (`id`, `idproducts`, `suppliers_id`, `entry_date`, `amount`, `createDate`, `createUser`) VALUES
(3, 4, 4, '2022-12-07', 15, '2022-12-02', 1),
(4, 4, 4, '2022-12-07', 15, '2022-12-02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `outputproducts`
--

CREATE TABLE `outputproducts` (
  `id` int(11) NOT NULL,
  `idproducts` int(11) NOT NULL,
  `idcustomers` int(11) NOT NULL,
  `output_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `createUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `outputproducts`
--

INSERT INTO `outputproducts` (`id`, `idproducts`, `idcustomers`, `output_date`, `amount`, `createdDate`, `createUser`) VALUES
(3, 5, 28, '2022-11-24', 2, '2022-11-30', 1),
(4, 2, 26, '2022-11-29', 12, '2022-11-30', 1),
(11, 2, 27, '2022-11-27', 2, '2022-11-30', 1),
(12, 6, 10, '2022-11-24', 5, '2022-11-30', 1),
(13, 5, 27, '2022-11-19', 12, '2022-11-30', 1),
(14, 5, 27, '2022-11-29', 12, '2022-11-30', 1),
(17, 4, 26, '2022-11-29', 2, '2022-11-30', 1),
(18, 7, 26, '2022-11-24', 2, '2022-11-30', 1),
(19, 7, 26, '2022-11-24', 2, '2022-11-30', 1),
(88, 6, 28, '2022-12-09', 2, '2022-12-02', 1),
(89, 5, 26, '2022-12-13', 12, '2022-12-01', 2),
(90, 5, 26, '2022-12-13', 12, '2022-12-01', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `amount`) VALUES
(2, 'pan', 'harina ', 0),
(4, 'Lapiz', 'lapiz color negro', 23),
(5, 'asdas', 'asdasd', 23),
(6, 'camisetaasd ', 'camiseta de argentina asdasdasd', 16),
(7, 'agua ', 'mineral ', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(15) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `direction` varchar(40) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `city` varchar(40) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `province` varchar(40) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `cp` varchar(40) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `country` varchar(40) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `telephone` varchar(40) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `direction`, `city`, `province`, `cp`, `country`, `telephone`, `email`) VALUES
(1, 'Logitech51', 'Calle Falsa 123', 'Caba ', 'Buenos Aires', '11000', 'Argentina', '1515323289', 'logitech@logitech.com'),
(3, 'asd', 'qweqw', 'qweqwe', 'wqe', '12321', 'wqedas1', '23123123123123', '123123'),
(4, 'asd123123123', 'qweqw', 'qweqwe', 'wqe', '12321', 'wqedas1', '23123123123123', '123123'),
(5, 'asd12sdasd', 'qweqw', 'qweqwe', 'wqe', '12321', 'wqedas1', '23123123123123', '123123'),
(6, 'asd', 'qweqw', 'qweqwe23', 'wqe', '12321', 'wqedas1', '23123123123123', '123123'),
(7, 'asd12sdasdasd', 'qweqw', 'qweqwe', 'wqe123123', '12321', 'wqedas1asdasdas', '23123123123123', '123123'),
(14, 'Logit ', 'Calle Falsa 123', 'Caba ', 'Buenos Aires', '10002', 'Argentina', '1515323289', 'logitech@logitech.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'Admin', 'Admin', 'admin@Admin', '$2y$12$gc04w7onr3o0vtyxD7PsjOashorr0cJcWsORd.bj98SHrIOYOFuK6'),
(2, 'Matias', 'Ramirez', 'mramirez@hotmail', '$2y$12$a4X7mU7q/oT4q4DBRleKP.8a6wgln85AC/U.TJ/m5gFFBpHMM7SkG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entryproducts`
--
ALTER TABLE `entryproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `outputproducts`
--
ALTER TABLE `outputproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `entryproducts`
--
ALTER TABLE `entryproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `outputproducts`
--
ALTER TABLE `outputproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
