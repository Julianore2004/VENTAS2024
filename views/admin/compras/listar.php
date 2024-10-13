<?php  
require_once '../../../config/config.php';
require_once '../../../controller/compras_control.php';
require_once '../../../controller/producto_control.php'; // Asegúrate de tener un controlador para productos
require_once '../../../controller/persona_control.php'; // Asegúrate de tener un controlador para personas

$comprasControl = new ComprasControl();
$compras = $comprasControl->listarCompras();

$productoControl = new ProductoControl(); // Controlador para obtener productos
$productos = $productoControl->listarProductos(); // Suponiendo que hay un método para listar productos

$personaControl = new PersonaControl(); // Controlador para obtener trabajadores
$trabajadores = $personaControl->listarTrabajadores(); // Suponiendo que hay un método para listar trabajadores

$personaControl = new PersonaControl();
$personas = $personaControl->listarPersonas();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    
    <style>
        /* Estilos Generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        /* Botón para retroceder */
        .btn-retroceder {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-retroceder:hover {
            background-color: #5a6268;
        }

        /* Botón para agregar */
        .btn-agregar {
            display: inline-block;
            margin: 20px auto;
            padding: 12px 24px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-agregar:hover {
            background-color: #0056b3;
        }

        /* Tabla de compras */
        table {
            width: 100%;
            max-width: 1200px;
            border-collapse: collapse;
            margin-top: 20px;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        table th {
            background-color: #007BFF;
            color: white;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Botones de acción */
        .btn-accion {
            padding: 8px 12px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-right: 5px;
        }

        .btn-accion:hover {
            background-color: #218838;
        }

        .btn-eliminar {
            background-color: #dc3545;
        }

        .btn-eliminar:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <a href="http://localhost/Ventas2024/views/admin/indexadmin.php" class="btn-retroceder">Retroceder</a>
    <h2>Lista de Compras</h2>
    <a href="insertar.php" class="btn-agregar">Agregar Nueva Compra</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha de Compra</th>
                <th>Trabajador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($compras as $compra): ?>
            <tr>
                <td><?php echo $compra['id']; ?></td>
                <td><?php 
                    // Obtener el nombre del producto
                    $producto = array_filter($productos, fn($p) => $p['id'] == $compra['id_producto']);
                    echo $producto ? reset($producto)['nombre'] : 'No disponible'; 
                ?></td>
                <td><?php echo $compra['cantidad']; ?></td>
                <td><?php echo $compra['precio']; ?></td>
                <td><?php echo $compra['fecha_compra']; ?></td>
                <td><?php 
                    // Obtener el nombre del trabajador
                    $trabajador = array_filter($trabajadores, fn($t) => $t['id'] == $compra['id_trabajador']);
                    echo $trabajador ? reset($trabajador)['razon_social'] : 'No disponible'; 
                ?></td>
                <td>
                    <a href="actualizar.php?id=<?php echo $compra['id']; ?>" class="btn-accion">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
