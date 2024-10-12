<?php
require_once '../../controller/categoria_control.php';

$categoriaControl = new CategoriaControl();
$categorias = $categoriaControl->listarCategorias();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listar Categorías</title>
</head>
<body>
    <h1>Listar Categorías</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?php echo $categoria['id']; ?></td>
            <td><?php echo $categoria['nombre']; ?></td>
            <td><?php echo $categoria['detalle']; ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $categoria['id']; ?>">Actualizar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="insertar.php">Insertar Nueva Categoría</a>
</body>
</html>
