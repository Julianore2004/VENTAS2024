<?php
require_once '../../controller/producto_control.php';

$productoControl = new ProductoControl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $resultado = $productoControl->insertarProducto($nombre, $descripcion, $precio);
    echo $resultado['message'];
    // Redirigir a la lista de productos o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Producto</title>
</head>
<body>
    <h1>Insertar Nuevo Producto</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Descripción:</label>
        <input type="text" name="descripcion" required>
        <br>
        <label>Precio:</label>
        <input type="text" name="precio" required>
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
