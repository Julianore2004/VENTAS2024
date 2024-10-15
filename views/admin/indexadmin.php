<?php
require_once '../../config/config.php'; // Ajustar la ruta hacia el archivo config.php
require_once '../../controller/categoria_control.php';
require_once '../../controller/compras_control.php';
require_once '../../controller/det_venta_control.php';
require_once '../../controller/pagos_control.php';
require_once '../../controller/persona_control.php';
require_once '../../controller/producto_control.php';
require_once '../../controller/sesiones_control.php';
require_once '../../controller/venta_control.php';

require_once "./config/config.php";
require_once '../controller/categoria_control.php';
require_once '../controller/compras_control.php';
require_once '../controller/det_venta_control.php';
require_once '../controller/pagos_control.php';
require_once '../controller/persona_control.php';
require_once '../controller/producto_control.php';
require_once '../controller/sesiones_control.php';
require_once '../controller/venta_control.php';

// Instanciar los controladores con validación
$categoriaControl = new CategoriaControl();
$comprasControl = new ComprasControl();
$detVentaControl = new DetVentaControl();
$pagosControl = new PagosControl();
$personaControl = new PersonaControl();
$productoControl = new ProductoControl();
$sesionesControl = new SesionesControl();
$ventaControl = new VentaControl();

// Obtener listas con validación
$categorias = $categoriaControl ? $categoriaControl->listarCategorias() : [];
$compras = $comprasControl ? $comprasControl->listarCompras() : [];
$detVentas = $detVentaControl ? $detVentaControl->listarDetVentas() : [];
$pagos = $pagosControl ? $pagosControl->listarPagos() : [];
$personas = $personaControl ? $personaControl->listarPersonas() : [];
$productos = $productoControl ? $productoControl->listarProductos() : [];
$sesiones = $sesionesControl ? $sesionesControl->listarSesiones() : [];
$ventas = $ventaControl ? $ventaControl->listarVentas() : [];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .card {
            background: linear-gradient(135deg, #4A90E2, #9013FE);
            color: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .card h2 {
            margin: 0;
            font-size: 1.5em;
        }

        .card ul {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }

        .card li {
            margin: 10px 0;
        }

        .card a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            border: 2px solid white;
            border-radius: 5px;
            padding: 5px 10px;
            transition: background 0.3s, color 0.3s;
            position: relative;
            display: inline-block;
        }

        .card a:hover {
            background: white;
            color: #4A90E2;
            transition: color 0.3s, background 0.3s;
        }

        .background-effect {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.1);
            transition: opacity 0.3s;
            opacity: 0.3;
            border-radius: 15px;
        }

        .card:hover .background-effect {
            opacity: 0.1;
        }
    </style>
</head>

<body>
    <h1>Panel Administrativo</h1>
    <div class="container">
        <div class="card">
            <div class="background-effect"></div>
            <h2>Categorías</h2>
            <ul>
            <li><a href="/VENTAS2024/views/admin/categoria/listar.php">Ver Categorías</a></li>

            </ul>
        </div>


        <div class="card">
            <div class="background-effect"></div>
            <h2>Compras</h2>
            <ul>
                 <li><a href="/VENTAS2024/views/admin/compras/listar.php">Ver Compras</a></li>
            </ul>
        </div>

        <div class="card">
            <div class="background-effect"></div>
            <h2>Detalles de Venta</h2>
            <ul>
                 <li><a href="/VENTAS2024/views/admin/det_venta/listar.php">Ver Detalles de Venta</a></li>
            </ul>
        </div>

        <div class="card">
            <div class="background-effect"></div>
            <h2>Pagos</h2>
            <ul>
                 <li><a href="/VENTAS2024/views/admin/pagos/listar.php">Ver Pagos</a></li>
            </ul>
        </div>

        <div class="card">
            <div class="background-effect"></div>
            <h2>Personas</h2>
            <ul>
                 <li><a href="/VENTAS2024/views/admin/persona/listar.php">Ver Personas</a></li>
            </ul>
        </div>

        <div class="card">
            <div class="background-effect"></div>
            <h2>Productos</h2>
            <ul>
                 <li><a href="/VENTAS2024/views/admin/producto/listar.php">Ver Productos</a></li>
            </ul>
        </div>

        <div class="card">
            <div class="background-effect"></div>
            <h2>Sesiones</h2>
            <ul>
                 <li><a href="/VENTAS2024/views/admin/sesiones/listar.php">Ver Sesiones</a></li>
            </ul>
        </div>

        <div class="card">
            <div class="background-effect"></div>
            <h2>Ventas</h2>
            <ul>
                <li><a href="venta/listar.php">Ver Ventas</a></li>
            </ul>
        </div>
    </div>
</body>

</html>