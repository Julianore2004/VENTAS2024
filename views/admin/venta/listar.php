<?php
require_once '../../../config/config.php';
require_once '../../../controller/venta_control.php';

$ventaControl = new VentaControl();
$ventas = $ventaControl->listarVentas();
?>

<h2>Lista de Ventas</h2>
<table>
    <tr>
        <th>ID</th>
        <th>ID Cliente</th>
        <th>ID Trabajador</th>
        <th>Fecha</th>
        <th>Total</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($ventas as $venta): ?>
    <tr>
        <td><?php echo $venta['id']; ?></td>
        <td><?php echo $venta['id_cliente']; ?></td>
        <td><?php echo $venta['id_trabajador']; ?></td>
        <td><?php echo $venta['fecha']; ?></td>
        <td><?php echo $venta['total']; ?></td>
        <td><?php echo $venta['estado']; ?></td>
        <td>
            <a href="actualizar.php?id=<?php echo $venta['id']; ?>">Actualizar</a>
            <a href="eliminar.php?id=<?php echo $venta['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
