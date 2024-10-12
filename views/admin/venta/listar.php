<?php
require_once '../../controller/venta_control.php';

$ventaControl = new VentaControl();
$ventas = $ventaControl->listarVentas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listar Ventas</title>
</head>
<body>
    <h1>Listar Ventas</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Persona</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($ventas as $venta): ?>
        <tr>
            <td><?php echo $venta['id']; ?></td>
            <td><?php echo $venta['persona']; ?></td>
            <td><?php echo $venta['fecha']; ?></td>
            <td><?php echo $venta['total']; ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $venta['id']; ?>">Actualizar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="insertar.php">Insertar Nueva Venta</a>
</body>
</html>
