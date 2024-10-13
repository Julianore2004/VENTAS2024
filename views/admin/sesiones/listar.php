<?php
require_once '../../config/config.php';
require_once '../../controller/sesiones_control.php';

$sesionesControl = new SesionesControl();
$sesiones = $sesionesControl->listarSesiones();
?>

<h2>Lista de Sesiones</h2>
<table>
    <tr>
        <th>ID</th>
        <th>ID Usuario</th>
        <th>Fecha y Hora</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($sesiones as $sesion): ?>
    <tr>
        <td><?php echo $sesion['id']; ?></td>
        <td><?php echo $sesion['id_usuario']; ?></td>
        <td><?php echo $sesion['fecha_hora']; ?></td>
        <td>
            <a href="actualizar.php?id=<?php echo $sesion['id']; ?>">Actualizar</a>
            <a href="eliminar.php?id=<?php echo $sesion['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
