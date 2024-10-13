<?php
require_once('../../../config/config.php');
require_once('../../../controller/categoria_control.php'); // Desde listar.php a categoria_control.php

$categoriaControl = new CategoriaControl();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Obtener los datos de la categoría a actualizar
    $categoria = $categoriaControl->listarCategorias(); // Obtenemos todas las categorías
    $categoria = array_filter($categoria, fn($c) => $c['id'] == $id); // Filtramos la categoría por ID
    $categoria = reset($categoria); // Obtenemos el primer elemento (la categoría seleccionada)

    if (!$categoria) {
        die("Categoría no encontrada");
    }
} else {
    die("ID de categoría no proporcionado");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    
    // Crear un array con los datos
    $data = [
        'nombre' => $nombre,
        'detalle' => $detalle
    ];

    // Llamar al método de actualizar
    $categoriaControl->actualizarCategoria($id, $data);
    header('Location: listar.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categoría</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF; /* Azul */
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3; /* Azul más oscuro */
        }
    </style>
</head>
<body>
    <h2>Actualizar Categoría</h2>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($categoria['nombre']); ?>" required>
        
        <label for="detalle">Detalle:</label>
        <input type="text" id="detalle" name="detalle" value="<?php echo htmlspecialchars($categoria['detalle']); ?>" required>
        
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
