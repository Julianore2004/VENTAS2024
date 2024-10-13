<?php
require_once '../../config/config.php';
require_once '../../controller/pagos_control.php';

$pagosControl = new PagosControl();
$pagos = $pagosControl->listarPagos();
?>

<h2>Lista de Pagos</h2>
<table>
    <tr>
        <th>ID</th>
        <th>ID Venta</th>
        <th>Fecha</th>
        <th>Monto</th>
        <th>Método de Pago</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($pagos as $pago): ?>
    <tr>
        <td><?php echo $pago['id']; ?></td>
        <td><?php echo $pago['id_venta']; ?></td>
        <td><?php echo $pago['fecha']; ?></td>
        <td><?php echo $pago['monto']; ?></td>
        <td><?php echo $pago['metodo_pago']; ?></td>
        <td><?php echo $pago['estado']; ?></td>
        <td>
            <a href="actualizar.php?id=<?php echo $pago['id']; ?>">Actualizar</a>
            <a href="eliminar.php?id=<?php echo $pago['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
