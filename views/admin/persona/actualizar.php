<?php
require_once '../../controller/persona_control.php';

$personaControl = new PersonaControl();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $personas = $personaControl->listarPersonas();
    $persona = null;

    foreach ($personas as $pers) {
        if ($pers['id'] == $id) {
            $persona = $pers;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $resultado = $personaControl->actualizarPersona($id, $nombre, $apellido, $email);
    echo $resultado['message'];
    // Redirigir a la lista de personas o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Persona</title>
</head>
<body>
    <h1>Actualizar Persona</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $persona['nombre']; ?>" required>
        <br>
        <label>Apellido:</label>
        <input type="text" name="apellido" value="<?php echo $persona['apellido']; ?>" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $persona['email']; ?>" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
