<?php

require_once "./config/config.php";
require_once '../controller/categoria_control.php';
require_once '../controller/compras_control.php';
require_once '../controller/det_venta_control.php';
require_once '../controller/pagos_control.php';
require_once '../controller/persona_control.php';
require_once '../controller/producto_control.php';
require_once '../controller/sesiones_control.php';
require_once '../controller/venta_control.php';

// Instanciar los controladores
$categoriaControl = new CategoriaControl();
$comprasControl = new ComprasControl();
$detVentaControl = new DetVentaControl();
$pagosControl = new PagosControl();
$personaControl = new PersonaControl();
$productoControl = new ProductoControl();
$sesionesControl = new SesionesControl();
$ventaControl = new VentaControl();

// Obtener listas
$categorias = $categoriaControl->listarCategorias();
$compras = $comprasControl->listarCompras();
$detVentas = $detVentaControl->listarDetVentas();
$pagos = $pagosControl->listarPagos();
$personas = $personaControl->listarPersonas();
$productos = $productoControl->listarProductos();
$sesiones = $sesionesControl->listarSesiones();
$ventas = $ventaControl->listarVentas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
</head>
<body>
    <h1>Panel Administrativo</h1>
    <h2>Categorías</h2>
    <a href="categoria/listar.php">Ver Categorías</a>
    
    <h2>Compras</h2>
    <a href="compras/listar.php">Ver Compras</a>
    
    <h2>Detalles de Venta</h2>
    <a href="det_venta/listar.php">Ver Detalles de Venta</a>

    <h2>Pagos</h2>
    <a href="pagos/listar.php">Ver Pagos</a>

    <h2>Personas</h2>
    <a href="persona/listar.php">Ver Personas</a>

    <h2>Productos</h2>
    <a href="producto/listar.php">Ver Productos</a>

    <h2>Sesiones</h2>
    <a href="sesiones/listar.php">Ver Sesiones</a>

    <h2>Ventas</h2>
    <a href="venta/listar.php">Ver Ventas</a>
</body>
</html>

