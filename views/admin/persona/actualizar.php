<?php
require_once '../../../config/config.php';
require_once '../../../controller/persona_control.php';

$personaControl = new PersonaControl();
$persona = null;

if (isset($_GET['id'])) {
    $persona = $personaControl->obtenerPersona($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $data = [
        'id' => $_POST['id'],
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
    $personaControl->actualizarPersona($data['id'], $data);
    header('Location: listar.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Persona</title>
    <style>
        /* Aquí puedes agregar estilos personalizados */
    </style>
</head>
<body>

    <h2>Actualizar Persona</h2>
    <a href="listar.php" class="btn-retroceder">Retroceder</a>

    <?php if ($persona): ?>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $persona['id']; ?>">
        <input type="text" name="nro_identidad" value="<?php echo $persona['nro_identidad']; ?>" required>
        <input type="text" name="razon_social" value="<?php echo $persona['razon_social']; ?>" required>
        <input type="text" name="telefono" value="<?php echo $persona['telefono']; ?>" required>
        <input type="email" name="correo" value="<?php echo $persona['correo']; ?>" required>
        <input type="text" name="departamento" value="<?php echo $persona['departamento']; ?>" required>
        <input type="text" name="provincia" value="<?php echo $persona['provincia']; ?>" required>
        <input type="text" name="distrito" value="<?php echo $persona['distrito']; ?>" required>
        <input type="text" name="codigo_postal" value="<?php echo $persona['codigo_postal']; ?>" required>
        <input type="text" name="direccion" value="<?php echo $persona['direccion']; ?>" required>
        <input type="text" name="rol" value="<?php echo $persona['rol']; ?>" required>
        <select name="estado" required>
            <option value="Activo" <?php echo $persona['estado'] === 'Activo' ? 'selected' : ''; ?>>Activo</option>
            <option value="Inactivo" <?php echo $persona['estado'] === 'Inactivo' ? 'selected' : ''; ?>>Inactivo</option>
        </select>
        <button type="submit">Actualizar</button>
    </form>
    <?php else: ?>
    <p>Persona no encontrada.</p>
    <?php endif; ?>

</body>
</html>
