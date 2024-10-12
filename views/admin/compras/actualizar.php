<?php
require_once '../../controller/compras_control.php';

$comprasControl = new ComprasControl();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $compras = $comprasControl->listarCompras();
    $compra = null;

    foreach ($compras as $comp) {
        if ($comp['id'] == $id) {
            $compra = $comp;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    // Ejecutar la actualización
    // Redirigir o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Compra</title>
</head>
<body>
    <h1>Actualizar Compra</h1>
    <form method="POST">
        <label>ID Producto:</label>
        <input type="text" name="id_producto" value="<?php echo $compra['id_producto']; ?>" required>
        <br>
        <label>Cantidad:</label>
        <input type="text" name="cantidad" value="<?php echo $compra['cantidad']; ?>" required>
        <br>
        <label>Precio:</label>
        <input type="text" name="precio" value="<?php echo $compra['precio']; ?>" required>
        <br>
        <label>Fecha:</label>
        <input type="date" name="fecha_compra" value="<?php echo $compra['fecha_compra']; ?>" required>
        <br>
        <label>ID Trabajador:</label>
        <input type="text" name="id_trabajador" value="<?php echo $compra['id_trabajador']; ?>" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
