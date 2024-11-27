-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2024 a las 16:02:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_venta`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_categoria` (IN `p_id` INT(11), IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(100))   BEGIN
    UPDATE categoria 
    SET nombre = p_nombre, 
        detalle = p_detalle
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_compra` (IN `p_id` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` DECIMAL(6,2), IN `p_fecha_compra` DATETIME, IN `p_id_trabajador` INT(11))   BEGIN
    UPDATE compras 
    SET id_producto = p_id_producto,
        cantidad = p_cantidad, 
        precio = p_precio, 
        fecha_compra = p_fecha_compra,
        id_trabajador = p_id_trabajador
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_detalle_venta` (IN `p_id` INT(11), IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(5))   BEGIN
    UPDATE det_venta 
    SET id_venta = p_id_venta, 
        id_producto = p_id_producto, 
        cantidad = p_cantidad
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_pago` (IN `p_id` INT(11), IN `p_id_venta` INT(11), IN `p_fecha` DATETIME, IN `p_monto` DECIMAL(6,2), IN `p_metodo_pago` VARCHAR(20), IN `p_estado` INT(1))   BEGIN
    UPDATE pagos 
    SET id_venta = p_id_venta, 
        fecha = p_fecha, 
        monto = p_monto, 
        metodo_pago = p_metodo_pago, 
        estado = p_estado
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_persona` (IN `p_id` INT(11), IN `p_nro_identidad` VARCHAR(11), IN `p_razon_social` VARCHAR(123), IN `p_telefono` VARCHAR(13), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(30), IN `p_distrito` VARCHAR(50), IN `p_codigo_postal` INT(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500), IN `p_estado` INT(1))   BEGIN
    UPDATE persona 
    SET nro_identidad = p_nro_identidad, 
        razon_social = p_razon_social, 
        telefono = p_telefono, 
        correo = p_correo, 
        departamento = p_departamento, 
        provincia = p_provincia, 
        distrito = p_distrito, 
        codigo_postal = p_codigo_postal, 
        direccion = p_direccion, 
        rol = p_rol, 
        password = p_password, 
        estado = p_estado
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_producto` (IN `p_id` INT(11), IN `p_codigo` VARCHAR(20), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_id_categoria` INT(11), IN `p_img` VARCHAR(16), IN `p_id_proveedor` INT(11))   BEGIN
        UPDATE producto 
        SET codigo = p_codigo,
            nombre = p_nombre,
            detalle = p_detalle,
            precio = p_precio,
            id_categoria = p_id_categoria,
            img = p_img,
            id_proveedor = p_id_proveedor
        WHERE id = p_id;
   SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_sesion` (IN `p_id` INT(11), IN `p_id_persona` INT(11), IN `p_fecha_hora_inicio` DATETIME, IN `p_fecha_hora_fin` DATETIME, IN `p_token` VARCHAR(30), IN `p_ip` VARCHAR(20))   BEGIN
    UPDATE sesiones 
    SET id_persona = p_id_persona, 
        fecha_hora_inicio = p_fecha_hora_inicio, 
        fecha_hora_fin = p_fecha_hora_fin, 
        token = p_token, 
        ip = p_ip
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_venta` (IN `p_id` INT(11), IN `p_codigo_venta` VARCHAR(20), IN `p_fecha_hora` DATETIME, IN `p_id_cliente` INT(11), IN `p_id_vendedor` INT(11), IN `p_estado` INT(1))   BEGIN
    UPDATE venta 
    SET codigo_venta = p_codigo_venta, 
        fecha_hora = p_fecha_hora, 
        id_cliente = p_id_cliente, 
        id_vendedor = p_id_vendedor, 
        estado = p_estado
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_categoria_por_id` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM categoria
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_compra_por_id` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM compras
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_detalle_venta_por_id` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM det_venta
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_pago_por_id` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM pagos
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_persona_por_id` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM persona
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_producto_por_id` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM producto
    WHERE id= p_id;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_sesion_por_id` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM sesiones
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_todas_compras` ()   BEGIN
    SELECT * FROM compras;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_todas_personas` ()   BEGIN
    SELECT * FROM persona;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_todas_sesiones` ()   BEGIN
    SELECT * FROM sesiones;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_todas_ventas` ()   BEGIN
    SELECT * FROM venta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_todos_categorias` ()   BEGIN
    SELECT * FROM categoria;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_todos_detalles_venta` ()   BEGIN
    SELECT * FROM det_venta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_todos_pagos` ()   BEGIN
    SELECT * FROM pagos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_todos_productos` ()   BEGIN
    SELECT * FROM producto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_venta_por_id` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM venta
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarproducto` (IN `p_id` INT(11))   BEGIN
  DELETE FROM producto WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_categoria` (IN `p_id` INT(11))   BEGIN
    DELETE FROM categoria WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_compra` (IN `p_id` INT(11))   BEGIN
    DELETE FROM compras WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_detalle_venta` (IN `p_id` INT(11))   BEGIN
    DELETE FROM det_venta WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_pago` (IN `p_id` INT(11))   BEGIN
    DELETE FROM pagos WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_persona` (IN `p_id` INT(11))   BEGIN
    DELETE FROM persona WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_sesion` (IN `p_id` INT(11))   BEGIN
    DELETE FROM sesiones WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_venta` (IN `p_id` INT(11))   BEGIN
    DELETE FROM venta WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_categoria` (IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(100))   BEGIN
    DECLARE existe_categoria INT DEFAULT 0;
    DECLARE id INT DEFAULT 0;

    -- Verificar si ya existe un registro con el mismo nombre
    SET existe_categoria = (SELECT COUNT(*) FROM categoria WHERE nombre = p_nombre);

    IF existe_categoria = 0 THEN
        -- Si no existe, insertar el nuevo registro
        INSERT INTO categoria (nombre, detalle) 
        VALUES (p_nombre, p_detalle);

        SET id = LAST_INSERT_ID();
    ELSE
        -- Si existe, devolver id = 0
        SET id = 0;
    END IF;

    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_compra` (IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` DECIMAL(6,2), IN `p_id_trabajador` INT(11))   BEGIN
    DECLARE id INT;
    INSERT INTO compras (id_producto, cantidad, precio, id_trabajador) 
    VALUES (p_id_producto, p_cantidad, p_precio, p_id_trabajador);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_detalle_venta` (IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(5))   BEGIN
    DECLARE id INT;
    INSERT INTO det_venta (id_venta, id_producto, cantidad) 
    VALUES (p_id_venta, p_id_producto, p_cantidad);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_pago` (IN `p_id_venta` INT(11), IN `p_fecha` DATETIME, IN `p_monto` DECIMAL(6,2), IN `p_metodo_pago` VARCHAR(20), IN `p_estado` INT(1))   BEGIN
    DECLARE id INT;
    INSERT INTO pagos (id_venta, fecha, monto, metodo_pago, estado) 
    VALUES (p_id_venta, p_fecha, p_monto, p_metodo_pago, p_estado);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_persona` (IN `p_nro_identidad` VARCHAR(11), IN `p_razon_social` VARCHAR(123), IN `p_telefono` VARCHAR(13), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(30), IN `p_distrito` VARCHAR(50), IN `p_codigo_postal` INT(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500))   BEGIN
    DECLARE existe_persona INT;
    DECLARE id INT;
    
    -- Verificar si ya existe un registro con el mismo nro_identidad y razon_social
    SET existe_persona = (SELECT COUNT(*) FROM persona WHERE nro_identidad = p_nro_identidad AND razon_social = p_razon_social);
    
    IF existe_persona = 0 THEN
        -- Si no existe, insertar el nuevo registro
        INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, codigo_postal, direccion, rol, password) 
        VALUES (p_nro_identidad, p_razon_social, p_telefono, p_correo, p_departamento, p_provincia, p_distrito, p_codigo_postal, p_direccion, p_rol, p_password);
        
        SET id = LAST_INSERT_ID();
    ELSE
        -- Si existe, devolver id = 0
        SET id = 0;
    END IF;
    
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_sesion` (IN `p_id_persona` INT(11), IN `p_fecha_hora_inicio` DATETIME, IN `p_fecha_hora_fin` DATETIME, IN `p_token` VARCHAR(30), IN `p_ip` VARCHAR(20))   BEGIN
    DECLARE id INT;
    INSERT INTO sesiones (id_persona, fecha_hora_inicio, fecha_hora_fin, token, ip) 
    VALUES (p_id_persona, p_fecha_hora_inicio, p_fecha_hora_fin, p_token, p_ip);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_venta` (IN `p_codigo_venta` VARCHAR(20), IN `p_fecha_hora` DATETIME, IN `p_id_cliente` INT(11), IN `p_id_vendedor` INT(11), IN `p_estado` INT(1))   BEGIN
    DECLARE id INT;
    INSERT INTO venta (codigo_venta, fecha_hora, id_cliente, id_vendedor, estado) 
    VALUES (p_codigo_venta, p_fecha_hora, p_id_cliente, p_id_vendedor, p_estado);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertProducto` (IN `p_codigo` VARCHAR(20), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_stock` INT(5), IN `p_id_categoria` INT(11), IN `p_img` VARCHAR(16), IN `p_id_proveedor` INT(11), IN `tipoarchivo` VARCHAR(10))   BEGIN 
DECLARE existe_producto INT;
DECLARE id_n INT;
set existe_producto = (SELECT COUNT(*) FROM producto WHERE codigo = p_codigo);
IF existe_producto = 0 THEN
	 INSERT INTO producto (codigo, nombre, detalle, precio, stock, id_categoria, img, id_proveedor, tipoarchivo) 
        VALUES (p_codigo, p_nombre, p_detalle, p_precio, p_stock, p_id_categoria, p_img, p_id_proveedor, tipoarchivo);
        SET id_n = LAST_INSERT_ID();
      UPDATE producto SET img = concat(id_n, '.', tipoarchivo) WHERE id = id_n;
    ELSE
    SET id_n= 0;
END IF;
SELECT id_n;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `detalle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `detalle`) VALUES
(25, 'SAMSUNG', 'rojos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `fecha_compra` datetime NOT NULL DEFAULT current_timestamp(),
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `id_producto`, `cantidad`, `precio`, `fecha_compra`, `id_trabajador`) VALUES
(4, 3, 2, 60.99, '0000-00-00 00:00:00', 3),
(5, 3, 10, 122.00, '2024-11-28 00:00:00', 3),
(6, 3, 1, 22.00, '2024-11-20 00:00:00', 5),
(7, 3, 1, 22.00, '2024-11-20 00:00:00', 5),
(8, 3, 1, 22.00, '2024-11-20 00:00:00', 5),
(9, 3, 1, 22.00, '2024-11-20 00:00:00', 5),
(10, 3, 10, 12.00, '2024-11-19 00:00:00', 3),
(11, 3, 100, 100.00, '2024-11-01 00:00:00', 3),
(12, 3, 21, 21.00, '2024-11-13 10:53:07', 3),
(13, 3, 10, 4111.00, '2024-11-14 08:08:11', 3),
(14, 3, 21, 1.00, '2024-11-14 08:40:04', 9),
(15, 4, 12, 12.00, '2024-11-18 09:17:19', 3),
(16, 4, 12, 12.00, '2024-11-18 09:17:21', 3),
(17, 4, 12, 12.00, '2024-11-18 09:17:24', 3),
(18, 4, 12, 12.00, '2024-11-18 09:17:26', 3),
(19, 4, 12, 12.00, '2024-11-18 09:17:27', 3),
(20, 4, 12, 12.00, '2024-11-18 09:17:29', 3),
(21, 4, 12, 12.00, '2024-11-18 09:17:30', 3),
(22, 3, 12, 12.00, '2024-11-18 09:17:46', 3),
(23, 3, 12, 12.00, '2024-11-18 09:17:48', 3),
(24, 3, 12, 12.00, '2024-11-18 09:17:49', 3),
(25, 4, 111111, 12.00, '2024-11-18 09:18:21', 3),
(26, 4, 111111, 12.00, '2024-11-18 09:18:22', 3),
(27, 4, 10, 4111.00, '2024-11-21 08:12:05', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_venta`
--

CREATE TABLE `det_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `monto` decimal(6,2) NOT NULL,
  `metodo_pago` varchar(20) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `id_venta`, `fecha`, `monto`, `metodo_pago`, `estado`) VALUES
(4, 1, '0000-00-00 00:00:00', 45.00, 'zsxcfgh', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nro_identidad` varchar(11) NOT NULL,
  `razon_social` varchar(123) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `password` varchar(500) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha_reg` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nro_identidad`, `razon_social`, `telefono`, `correo`, `departamento`, `provincia`, `distrito`, `codigo_postal`, `direccion`, `rol`, `password`, `estado`, `fecha_reg`) VALUES
(1, '71422955', 'hascansjic', '982120236', 'julianore79@gmail.com', 'ayacucho', 'huanta', 'luricocha', 6165661, 'pichiurara', 'proveedor', '$2y$10$GX1oH9b3kbI32BEoh.WsrOmDr0ykPA.EmcktUJuCfFIb7UMik1iMW', 1, '2024-09-19 12:18:28'),
(3, '71422955', 'julian', '982120236', 'julianore79@gmail.com', 'Ayacucho', 'huanta', 'luricocha', 986598, 'e4sdrtyu', 'trabajador', '$2y$10$GX1oH9b3kbI32BEoh.WsrOmDr0ykPA.EmcktUJuCfFIb7UMik1iMW', 0, '2024-09-25 15:43:03'),
(4, '71422954', 'SSDFGHJ', '982120236', 'julianore79@gmail.com', 'Ayacucho', 'huanta', 'luricocha', 986598, 'e4sdrtyu', 'ADMIN', '$2y$10$GX1oH9b3kbI32BEoh.WsrOmDr0ykPA.EmcktUJuCfFIb7UMik1iMW', 1, '2024-09-26 08:36:52'),
(5, '71422955', 'julian', '23456', '2334', '2434', '2134', '2332', 12441, '12332', 'Trabajador', '23123123123', 0, '2024-11-11 08:54:31'),
(6, '123456', 'julian', '985461327', '122', '3213', '213', '123', 123, '123', 'Trabajador', '12323123', 1, '2024-11-13 10:56:34'),
(7, '71422954', 'julian', '47575', '757575', '7557', '75757', '575', 72, '755', 'Trabajador', '57575', 1, '2024-11-13 11:15:57'),
(8, '7142295532', 'juliana', '985461327', '2dqaw', 'qwd', 'sa', 'qwdq', 123, '32', 'Trabajador', '$2y$10$/XvVE7jwU/SDK6tlwqDR8.1cLmNnsqqLIS8mzIzBh4AqS8CyFQ1pq', 1, '2024-11-14 08:22:14'),
(9, '1231', '21312', '312', '3123', '123123', '1231233213', '213213', 12312, '321312', 'Trabajador', '$2y$10$PbObL/Px5EowlSaZa4eNm.uuuVw3AnOJH7ZIoybDK2DdYmCtv4WsW', 1, '2024-11-14 08:29:24'),
(10, '71422955', 'juliana', 'QWQW', 'WQ', 'QW', 'WQ', 'WQW', 212, '2121', 'Administrador', '$2y$10$GX1oH9b3kbI32BEoh.WsrOmDr0ykPA.EmcktUJuCfFIb7UMik1iMW', 1, '2024-11-14 08:58:10'),
(12, 'admin', 'sasa', 'sasa', 'asa', 'sassas', 'as', 'sasa', 212, 'sass', 'Administrador', '$2y$10$nx0AMlOKgqlIXNOw8FZpAuWjbUbsUTArW8eXxusR5kp.QJsmWrYQ6', 1, '2024-11-14 12:47:49'),
(13, 'juan', 'juan', 'juan', 'juan', 'juan', 'juan', 'juan', 2123, 'juan', 'Trabajador', '', 1, '2024-11-18 08:40:24'),
(14, '8948964', 'juan', 'juan', 'juan', 'juan', 'juan', 'juan', 2123, 'juan', 'Trabajador', '', 1, '2024-11-18 08:40:57'),
(15, '123', 'juan', 'juan', 'juan', 'juan', 'juan', 'juan', 2123, 'juan', 'Trabajador', '$2y$10$AoZLZqgoTYe2fOsR9hw4yu/3U68jrLNs58Q5yUunzzVM7PuznzWqy', 1, '2024-11-18 08:42:58'),
(16, 'julian', 'julian', 'julian', 'julian', 'julian', 'julian', 'julian', 1212, 'julian', 'Administrador', '$2y$10$D2AApFpjWHI3/H2w/fAK3.Vmh5P4qd23w/t8WaobIGr0hMCe8HgIC', 1, '2024-11-18 11:28:58'),
(17, 'Diega', 'Diega', 'Diega', 'Diega', 'Diega', 'Diega', 'Diega', 12345, 'Av.jose olaya 215', 'Trabajador', '$2y$10$UodD30oUQMlxvmDTbjikW.DvAhvFNf4quZYC5.0HARxR3L7T57M/y', 1, '2024-11-21 08:12:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `stock` int(5) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `img` varchar(16) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `tipoarchivo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `detalle`, `precio`, `stock`, `id_categoria`, `img`, `id_proveedor`, `tipoarchivo`) VALUES
(3, '123454', 'polo', 'polo rojo', 60.99, 100, 1, '2024/12/12', 1, ''),
(4, '101010', '101010', '101010', 100.00, 100, 1, 'imagen', 1, ''),
(5, '212', 'XIAOMI', 'CELU', 4111.00, 50, 9, 'imagen', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `fecha_hora_inicio` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_hora_fin` datetime NOT NULL DEFAULT current_timestamp(),
  `token` varchar(30) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`id`, `id_persona`, `fecha_hora_inicio`, `fecha_hora_fin`, `token`, `ip`) VALUES
(1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ASDFGHJKLÑ', '12355');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `codigo_venta` varchar(20) NOT NULL,
  `fecha_hora` datetime NOT NULL DEFAULT current_timestamp(),
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `codigo_venta`, `fecha_hora`, `id_cliente`, `id_vendedor`, `estado`) VALUES
(1, '4562', '0000-00-00 00:00:00', 1, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `det_venta`
--
ALTER TABLE `det_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `det_venta`
--
ALTER TABLE `det_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `persona` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `det_venta`
--
ALTER TABLE `det_venta`
  ADD CONSTRAINT `det_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `det_venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `persona` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
