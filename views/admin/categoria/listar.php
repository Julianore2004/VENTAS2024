<?php
require_once('../../../config/config.php');
require_once('../../../controller/categoria_control.php'); // Desde listar.php a categoria_control.php

$categoriaControl = new CategoriaControl();
$categorias = $categoriaControl->listarCategorias();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Categorías</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .tabla-categorias {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        .tabla-categorias th, .tabla-categorias td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        .tabla-categorias th {
            background-color: #007BFF;
            color: #ffffff;
        }

        .tabla-categorias tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            color: #ffffff;
            transition: background-color 0.3s;
            margin-bottom: 20px; /* Espacio entre los botones y la tabla */
        }

        .btn-actualizar {
            background-color: #28a745; /* Verde */
        }

        .btn-agregar {
            background-color: #007BFF; /* Azul */
        }

        .btn-retroceder {
            background-color: #dc3545; /* Rojo */
            margin-left: auto; /* Alinear a la derecha */
        }

        .btn-actualizar:hover {
            background-color: #218838; /* Verde más oscuro */
        }

        .btn-agregar:hover {
            background-color: #0056b3; /* Azul más oscuro */
        }

        .btn-retroceder:hover {
            background-color: #c82333; /* Rojo más oscuro */
        }
    </style>
</head>
<body>

    <div style="width: 100%; display: flex; justify-content: space-between;">
        <a href="insertar.php" class="btn btn-agregar">Agregar Nueva Categoría</a>
        <a href="../indexadmin.php" class="btn btn-retroceder">Retroceder</a>
    </div>

    <table class="tabla-categorias">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?php echo $categoria['id']; ?></td>
                    <td><?php echo $categoria['nombre']; ?></td>
                    <td><?php echo $categoria['detalle']; ?></td>
                    <td>
                        <a href="actualizar.php?id=<?php echo $categoria['id']; ?>" class="btn btn-actualizar">Actualizar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
