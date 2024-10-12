<?php
require_once '../../controller/persona_control.php';

$personaControl = new PersonaControl();
$personas = $personaControl->listarPersonas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listar Personas</title>
</head>
<body>
    <h1>Listar Personas</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($personas as $persona): ?>
        <tr>
            <td><?php echo $persona['id']; ?></td>
            <td><?php echo $persona['nombre']; ?></td>
            <td><?php echo $persona['apellido']; ?></td>
            <td><?php echo $persona['email']; ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $persona['id']; ?>">Actualizar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="insertar.php">Insertar Nueva Persona</a>
</body>
</html>
