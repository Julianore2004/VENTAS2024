<?php
require_once './../config/config.php';
require_once './../controller/det_venta_control.php';

$detVentaControl = new DetVentaControl();
$detVentas = $detVentaControl->listarDetVentas();
?>

<h2>Lista de Detalles de Venta</h2>
<table>
    <tr>
        <th>ID</th>
        <th>ID Venta</th>
        <th>ID Producto</th>
        <th>Cantidad</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($detVentas as $detVenta): ?>
    <tr>
        <td><?php echo $detVenta['id']; ?></td>
        <td><?php echo $detVenta['id_venta']; ?></td>
        <td><?php echo $detVenta['id_producto']; ?></td>
        <td><?php echo $detVenta['cantidad']; ?></td>
        <td>
            <a href="actualizar.php?id=<?php echo $detVenta['id']; ?>">Actualizar</a>
            <a href="eliminar.php?id=<?php echo $detVenta['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
