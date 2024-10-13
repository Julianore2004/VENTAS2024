<?php
require_once '../../../config/config.php';
require_once '../../../controller/persona_control.php';

$personaControl = new PersonaControl();
$personas = $personaControl->listarPersonas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personas</title>
    <style>
        /* Estilos Generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Tabla de personas */
        table {
            width: 100%;
            max-width: 1200px;
            border-collapse: collapse;
            margin-top: 20px;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        table th {
            background-color: #007BFF;
            color: white;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Botones de acción */
        .btn-accion {
            padding: 8px 12px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-right: 5px;
        }

        .btn-accion:hover {
            background-color: #218838;
        }

        .btn-eliminar {
            background-color: #dc3545;
        }

        .btn-eliminar:hover {
            background-color: #c82333;
        }

        /* Estilos para enlaces */
        a {
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h2>Lista de Personas</h2>
    <a href="http://localhost/Ventas2024/views/admin/indexadmin.php" class="btn-retroceder">Retroceder</a>

    <a href="insertar.php" class="btn-agregar">Agregar Nueva Persona</a>
    
    <table>
        <thead>
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
        </thead>
        <tbody>
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
                    <a href="actualizar.php?id=<?php echo $persona['id']; ?>" class="btn-accion">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
