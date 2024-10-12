<?php
require_once '../../controller/det_venta_control.php';

$detVentaControl = new DetVentaControl();
$detVentas = $detVentaControl->listarDetVentas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listar Detalles de Venta</title>
</head>
<body>
    <h1>Listar Detalles de Venta</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Venta</th>
            <th>ID Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($detVentas as $detVenta): ?>
        <tr>
            <td><?php echo $detVenta['id']; ?></td>
            <td><?php echo $detVenta['id_venta']; ?></td>
            <td><?php echo $detVenta['id_producto']; ?></td>
            <td><?php echo $detVenta['cantidad']; ?></td>
            <td><?php echo $detVenta['precio']; ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $detVenta['id']; ?>">Actualizar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="insertar.php">Insertar Nuevo Detalle de Venta</a>
</body>
</html>
