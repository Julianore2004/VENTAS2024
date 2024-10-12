<?php
require_once '../../controller/compras_control.php';

$comprasControl = new ComprasControl();
$compras = $comprasControl->listarCompras();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listar Compras</title>
</head>
<body>
    <h1>Listar Compras</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Fecha</th>
            <th>ID Trabajador</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($compras as $compra): ?>
        <tr>
            <td><?php echo $compra['id']; ?></td>
            <td><?php echo $compra['id_producto']; ?></td>
            <td><?php echo $compra['cantidad']; ?></td>
            <td><?php echo $compra['precio']; ?></td>
            <td><?php echo $compra['fecha_compra']; ?></td>
            <td><?php echo $compra['id_trabajador']; ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $compra['id']; ?>">Actualizar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="insertar.php">Insertar Nueva Compra</a>
</body>
</html>
