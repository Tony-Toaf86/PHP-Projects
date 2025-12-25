-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2025 at 01:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventario`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'Tecnologia'),
(2, 'Camisetas'),
(3, 'Camisas'),
(4, 'Pantalones'),
(5, 'Jeans'),
(6, 'Faldas'),
(7, 'Vestidos'),
(8, 'Chaquetas'),
(9, 'Abrigos'),
(10, 'Sudaderas'),
(11, 'Ropa interior'),
(12, 'Calcetines'),
(13, 'Zapatos'),
(14, 'Botas'),
(15, 'Sandalias'),
(16, 'Gorros'),
(17, 'Sombreros'),
(18, 'Bufandas'),
(19, 'Guantes'),
(20, 'Cinturones'),
(21, 'Bolsos'),
(22, 'Mochilas'),
(23, 'Relojes'),
(26, 'Aretes'),
(27, 'Lentes de sol');

-- --------------------------------------------------------

--
-- Table structure for table `historial_productos`
--

CREATE TABLE `historial_productos` (
  `idHistorial` int(11) NOT NULL,
  `idProducto` int(11) DEFAULT NULL,
  `campoModificado` varchar(50) DEFAULT NULL,
  `valorAnterior` text DEFAULT NULL,
  `valorNuevo` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movimientos`
--

CREATE TABLE `movimientos` (
  `idMovimiento` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `tipo` enum('entrada','salida') NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `idCategoria` int(11) DEFAULT NULL,
  `idProveedor` int(11) DEFAULT NULL,
  `precioCompra` decimal(10,2) DEFAULT NULL,
  `precioVenta` decimal(10,2) DEFAULT NULL,
  `stockMinimo` int(11) DEFAULT 0,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `cantidad`, `fechaRegistro`, `idCategoria`, `idProveedor`, `precioCompra`, `precioVenta`, `stockMinimo`, `descripcion`) VALUES
(3, 'navegador', 8, '2025-11-30 21:49:54', 1, 1, 8.00, 8.00, 9, 'compuadoras'),
(4, 'Camiseta básica blanca', 50, '2025-11-30 21:55:14', 1, 1, 5.00, 10.00, 10, 'Camiseta unisex de algodón'),
(5, 'Camiseta estampada', 40, '2025-11-30 21:55:14', 1, 1, 6.00, 12.00, 10, 'Camiseta con estampado moderno'),
(6, 'Camisa formal azul', 30, '2025-11-30 21:55:14', 2, 1, 12.00, 25.00, 5, 'Camisa de vestir para hombre'),
(7, 'Pantalón chino beige', 25, '2025-11-30 21:55:14', 3, 1, 15.00, 30.00, 5, 'Pantalón casual elegante'),
(8, 'Jeans ajustados', 35, '2025-11-30 21:55:14', 4, 1, 10.00, 22.00, 10, 'Jeans para uso diario'),
(9, 'Falda corta', 20, '2025-11-30 21:55:14', 5, 1, 8.00, 18.00, 5, 'Falda femenina de tela ligera'),
(10, 'Vestido de verano', 15, '2025-11-30 21:55:14', 6, 1, 20.00, 40.00, 3, 'Vestido ligero y fresco'),
(11, 'Chaqueta de cuero', 10, '2025-11-30 21:55:14', 7, 1, 30.00, 60.00, 2, 'Chaqueta resistente de cuero'),
(12, 'Abrigo de invierno', 8, '2025-11-30 21:55:14', 8, 1, 40.00, 80.00, 2, 'Abrigo abrigado para clima frío'),
(13, 'Sudadera con capucha', 25, '2025-11-30 21:55:14', 9, 1, 12.00, 25.00, 5, 'Sudadera casual unisex'),
(14, 'Calcetines algodón 5 pares', 50, '2025-11-30 21:55:14', 11, 1, 3.00, 8.00, 10, 'Calcetines cómodos y duraderos'),
(15, 'Zapatos deportivos', 20, '2025-11-30 21:55:14', 12, 1, 25.00, 50.00, 5, 'Zapatos para correr y deporte'),
(16, 'Botas de cuero', 15, '2025-11-30 21:55:14', 13, 1, 35.00, 70.00, 3, 'Botas resistentes para cualquier clima'),
(17, 'Sandalias de verano', 30, '2025-11-30 21:55:14', 14, 1, 10.00, 20.00, 5, 'Sandalias ligeras para verano'),
(18, 'Gorra deportiva', 40, '2025-11-30 21:55:14', 15, 1, 5.00, 12.00, 10, 'Gorra unisex ajustable'),
(19, 'Sombrero de playa', 20, '2025-11-30 21:55:14', 16, 1, 7.00, 15.00, 5, 'Sombrero para sol y playa'),
(20, 'Bufanda de lana', 15, '2025-11-30 21:55:14', 17, 1, 6.00, 14.00, 3, 'Bufanda cálida y suave'),
(21, 'Guantes de invierno', 25, '2025-11-30 21:55:14', 18, 1, 4.00, 10.00, 5, 'Guantes resistentes al frío'),
(22, 'Cinturón de cuero', 30, '2025-11-30 21:55:14', 19, 1, 5.00, 15.00, 5, 'Cinturón elegante para pantalón'),
(23, 'Bolso de mano', 20, '2025-11-30 21:55:14', 20, 1, 15.00, 35.00, 5, 'Bolso elegante para mujer');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `nombre`, `telefono`, `direccion`) VALUES
(1, 'Tony', '9309-9509', 'Trojes');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `NombreRol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `NombreRol`) VALUES
(1, 'administrador'),
(2, 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `rolUsuario` int(11) NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` enum('activo','inactivo') DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `usuario`, `contrasena`, `rolUsuario`, `email`, `fechaRegistro`, `estado`) VALUES
(1, 'tony', 'tony', 'tony', '$2y$10$tplR5VGHwjl9iknVwUHZsOQ.VtoB6B8cHfOylrq57GZHUPXIQTUta', 2, 'toaf86@gmail.com', '2025-11-30 19:54:09', 'activo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `historial_productos`
--
ALTER TABLE `historial_productos`
  ADD PRIMARY KEY (`idHistorial`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`idMovimiento`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idProveedor` (`idProveedor`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `rolUsuario` (`rolUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `historial_productos`
--
ALTER TABLE `historial_productos`
  MODIFY `idHistorial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `idMovimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historial_productos`
--
ALTER TABLE `historial_productos`
  ADD CONSTRAINT `historial_productos_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE,
  ADD CONSTRAINT `historial_productos_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Constraints for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE,
  ADD CONSTRAINT `movimientos_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`idProveedor`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rolUsuario`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
