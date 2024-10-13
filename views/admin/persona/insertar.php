<?php
require_once '../../../config/config.php';
require_once '../../../controller/persona_control.php';

$personaControl = new PersonaControl();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nro_identidad' => $_POST['nro_identidad'],
        'razon_social' => $_POST['razon_social'],
        'telefono' => $_POST['telefono'],
        'correo' => $_POST['correo'],
        'departamento' => $_POST['departamento'],
        'provincia' => $_POST['provincia'],
        'distrito' => $_POST['distrito'],
        'codigo_postal' => $_POST['codigo_postal'],
        'direccion' => $_POST['direccion'],
        'rol' => $_POST['rol'],
        'estado' => $_POST['estado']
    ];
    $personaControl->insertarPersona($data);
    header('Location: listar.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Persona</title>
    <style>
        /* Aquí puedes agregar estilos personalizados */
    </style>
</head>
<body>

    <h2>Agregar Nueva Persona</h2>
    <a href="listar.php" class="btn-retroceder">Retroceder</a>

    <form action="" method="POST">
        <input type="text" name="nro_identidad" placeholder="Número de Identidad" required>
        <input type="text" name="razon_social" placeholder="Razón Social" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="text" name="departamento" placeholder="Departamento" required>
        <input type="text" name="provincia" placeholder="Provincia" required>
        <input type="text" name="distrito" placeholder="Distrito" required>
        <input type="text" name="codigo_postal" placeholder="Código Postal" required>
        <input type="text" name="direccion" placeholder="Dirección" required>
        <input type="text" name="rol" placeholder="Rol" required>
        <select name="estado" required>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
        <button type="submit">Agregar</button>
    </form>

</body>
</html>
