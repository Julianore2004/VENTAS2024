<?php
require_once '../../controller/sesiones_control.php';

$sesionesControl = new SesionesControl();
$sesiones = $sesionesControl->listarSesiones();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listar Sesiones</title>
</head>
<body>
    <h1>Listar Sesiones</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($sesiones as $sesion): ?>
        <tr>
            <td><?php echo $sesion['id']; ?></td>
            <td><?php echo $sesion['usuario']; ?></td>
            <td><?php echo $sesion['fecha_inicio']; ?></td>
            <td><?php echo $sesion['fecha_fin']; ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $sesion['id']; ?>">Actualizar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="insertar.php">Insertar Nueva Sesión</a>
</body>
</html>
