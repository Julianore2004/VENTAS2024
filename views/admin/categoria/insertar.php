<?php
require_once '../../controller/categoria_control.php';

$categoriaControl = new CategoriaControl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $resultado = $categoriaControl->insertarCategoria($nombre, $detalle);
    echo $resultado['message'];
    // Redirigir a la lista de categorías o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Categoría</title>
</head>
<body>
    <h1>Insertar Nueva Categoría</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Detalle:</label>
        <input type="text" name="detalle" required>
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
