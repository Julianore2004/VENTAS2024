<?php
require_once '../../controller/pagos_control.php';

$pagosControl = new PagosControl();
$pagos = $pagosControl->listarPagos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listar Pagos</title>
</head>
<body>
    <h1>Listar Pagos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Venta</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($pagos as $pago): ?>
        <tr>
            <td><?php echo $pago['id']; ?></td>
            <td><?php echo $pago['id_venta']; ?></td>
            <td><?php echo $pago['monto']; ?></td>
            <td><?php echo $pago['fecha']; ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $pago['id']; ?>">Actualizar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="insertar.php">Insertar Nuevo Pago</a>
</body>
</html>
