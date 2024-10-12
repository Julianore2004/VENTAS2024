<?php
require_once '../../controller/persona_control.php';

$personaControl = new PersonaControl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $resultado = $personaControl->insertarPersona($nombre, $apellido, $email);
    echo $resultado['message'];
    // Redirigir a la lista de personas o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Persona</title>
</head>
<body>
    <h1>Insertar Nueva Persona</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Apellido:</label>
        <input type="text" name="apellido" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
