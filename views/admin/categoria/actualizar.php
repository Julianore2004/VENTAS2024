<?php
require_once '../../controller/categoria_control.php';

$categoriaControl = new CategoriaControl();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $categorias = $categoriaControl->listarCategorias();
    $categoria = null;

    foreach ($categorias as $cat) {
        if ($cat['id'] == $id) {
            $categoria = $cat;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $resultado = $categoriaControl->actualizarCategoria($id, $nombre, $detalle);
    echo $resultado['message'];
    // Redirigir a la lista de categorías o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Categoría</title>
</head>
<body>
    <h1>Actualizar Categoría</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $categoria['nombre']; ?>" required>
        <br>
        <label>Detalle:</label>
        <input type="text" name="detalle" value="<?php echo $categoria['detalle']; ?>" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
