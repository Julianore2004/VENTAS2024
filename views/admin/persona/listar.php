<?php
require_once '../../config/config.php';
require_once '../../controller/persona_control.php';

$personaControl = new PersonaControl();
$personas = $personaControl->listarPersonas();
?>

<h2>Lista de Personas</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Número de Identidad</th>
        <th>Razón Social</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Departamento</th>
        <th>Provincia</th>
        <th>Distrito</th>
        <th>Código Postal</th>
        <th>Dirección</th>
        <th>Rol</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($personas as $persona): ?>
    <tr>
        <td><?php echo $persona['id']; ?></td>
        <td><?php echo $persona['nro_identidad']; ?></td>
        <td><?php echo $persona['razon_social']; ?></td>
        <td><?php echo $persona['telefono']; ?></td>
        <td><?php echo $persona['correo']; ?></td>
        <td><?php echo $persona['departamento']; ?></td>
        <td><?php echo $persona['provincia']; ?></td>
        <td><?php echo $persona['distrito']; ?></td>
        <td><?php echo $persona['codigo_postal']; ?></td>
        <td><?php echo $persona['direccion']; ?></td>
        <td><?php echo $persona['rol']; ?></td>
        <td><?php echo $persona['estado']; ?></td>
        <td>
            <a href="actualizar.php?id=<?php echo $persona['id']; ?>">Actualizar</a>
            <a href="eliminar.php?id=<?php echo $persona['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
