<?php
require_once '../../controller/producto_control.php';

$productoControl = new ProductoControl();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $productos = $productoControl->listarProductos();
    $producto = null;

    foreach ($productos as $prod) {
        if ($prod['id'] == $id) {
            $producto = $prod;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $resultado = $productoControl->actualizarProducto($id, $nombre, $descripcion, $precio);
    echo $resultado['message'];
    // Redirigir a la lista de productos o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Producto</title>
</head>
<body>
    <h1>Actualizar Producto</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>" required>
        <br>
        <label>Descripción:</label>
        <input type="text" name="descripcion" value="<?php echo $producto['descripcion']; ?>" required>
        <br>
        <label>Precio:</label>
        <input type="text" name="precio" value="<?php echo $producto['precio']; ?>" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
